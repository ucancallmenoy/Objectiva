<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Mail;
use App\Models\OTP;
use App\Mail\OTPMail;



class AuthController extends Controller
{
    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $emailExists = User::where('email', $request->email)->exists();

        return response()->json($emailExists);
    }
    
    public function register(Request $request)
{        
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'firstName.required' => 'First name is required',
            'lastName.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'This email is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters'
        ]);

        $user = User::create([
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'message' => 'Registration successful',
            'user' => $user,
            'token' => $token
        ], 201);
}

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        $user = auth()->user();

        return response()->json([
            'token' => $token,
            'user' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'is_admin' => $user->is_admin,
            ],
        ]);
    }

    public function user()
    {
        return response()->json(auth()->user());
    }

    public function updateProfile(Request $request)
{   
    $user = auth()->user();
    
    // Base validation rules
    $rules = [
        'first_name' => 'nullable|string|max:255',
        'last_name'  => 'nullable|string|max:255',
    ];

    // Add password validation rules if password is being updated
    if ($request->filled('password')) {
        $rules['old_password'] = 'required|string';
        $rules['password'] = ['nullable', Password::min(8)];
    }

    $request->validate($rules);

    // Verify old password if updating password
    if ($request->filled('password')) {
        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json([
                'message' => 'Current password is incorrect',
                'errors' => ['old_password' => ['The provided password does not match your current password.']]
            ], 422);
        }
    }

    $updates = array_filter($request->only([
        'first_name',
        'last_name',
    ]));

    if ($request->filled('password')) {
        $updates['password'] = Hash::make($request->password);
    }

    $user->update($updates);

    return response()->json([
        'message' => 'Profile updated successfully',
        'user' => $user->only(['first_name', 'last_name', 'email'])
    ]);
}




public function getAllUsers()
{
    // Ensure only admin can access this
    $adminUser = auth()->user();
    if (!$adminUser || !$adminUser->is_admin) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    $users = User::select('id', 'first_name', 'last_name', 'email')->get();
    return response()->json($users);
}

public function adminUpdateUser(Request $request, $id)
{
    // Ensure only admin can update users
    $adminUser = auth()->user();
    if (!$adminUser || !$adminUser->is_admin) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    $user = User::findOrFail($id);

    $request->validate([
        'first_name' => 'sometimes|string|max:255',
        'last_name' => 'sometimes|string|max:255',
        'email' => 'sometimes|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:6',
        'is_active' => 'sometimes|boolean'
    ]);

    // Prepare update data
    $updateData = $request->only(['first_name', 'last_name', 'email', 'is_active']);

    // Update password if provided
    if ($request->filled('password')) {
        $updateData['password'] = Hash::make($request->password);
    }

    $user->update($updateData);

    return response()->json([
        'message' => 'User updated successfully',
        'user' => $user
    ]);
}

public function deleteUser($id)
{
    // Ensure only admin can delete users
    $adminUser = auth()->user();
    if (!$adminUser || !$adminUser->is_admin) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    $user = User::findOrFail($id);
    $user->delete();

    return response()->json(['message' => 'User deleted successfully']);
}

public function addUser(Request $request)
{
    // Ensure only admin can add users
    $adminUser = auth()->user();
    if (!$adminUser || !$adminUser->is_admin) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    // Validate request data
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        // 'is_active' => 'required|boolean'
    ]);

    // Create new user
    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        // 'is_active' => $request->is_active
    ]);

    return response()->json([
        'message' => 'User created successfully',
        'user' => $user
    ]);
}

// OTP
public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // Generate OTP
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        
        // Delete any existing OTPs for this email
        OTP::where('email', $request->email)->delete();
        
        // Store new OTP
        OTP::create([
            'email' => $request->email,
            'otp' => Hash::make($otp),
            'expires_at' => now()->addMinutes(10)
        ]);

        // Send email using the OTPMail class and Blade template
        Mail::to($request->email)->send(new OTPMail($otp));

        return response()->json(['message' => 'OTP sent successfully']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string'
        ]);

        $otpRecord = OTP::where('email', $request->email)
            ->where('expires_at', '>', now())
            ->latest()
            ->first();

        if (!$otpRecord) {
            return response()->json(['error' => 'No valid OTP found for this email'], 422);
        }

        if (!Hash::check($request->otp, $otpRecord->otp)) {
            return response()->json(['error' => 'Invalid OTP code'], 422);
        }

        // Delete the OTP record after successful verification
        $otpRecord->delete();

        return response()->json(['message' => 'OTP verified successfully']);
    }
}
