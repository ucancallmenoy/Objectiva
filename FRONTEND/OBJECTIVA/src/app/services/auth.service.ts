import { Injectable, Inject, PLATFORM_ID } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { isPlatformBrowser } from '@angular/common';
import { environment } from '../../environments/environment';
import { catchError, tap } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class AuthService {
  private apiUrl = environment.baseUrl;
  private loginUrl = environment.loginUrl;
  private registerUrl = environment.registerUrl;

  constructor(
    private http: HttpClient,
    private router: Router,
    @Inject(PLATFORM_ID) private platformId: Object
  ) {}

  checkEmailExists(email: string): Observable<boolean> {
    return this.http.post<boolean>(`${this.apiUrl}/check-email`, { email });
  }
  
  sendOtp(email: string) {
    return this.http.post(`${this.apiUrl}/send-otp`, { email }).pipe(
      tap(response => console.log('Send OTP response:', response)),
      catchError(error => {
        console.error('Send OTP error:', error);
        throw error;
      })
    );
  }

  verifyOtp(email: string, otp: string) {
    return this.http.post(`${this.apiUrl}/verify-otp`, { email, otp }).pipe(
      tap(response => console.log('Verify OTP response:', response)),
      catchError(error => {
        console.error('Verify OTP error:', error);
        throw error;
      })
    );
  }
  

  login(email: string, password: string): Observable<any> {
    return this.http.post(this.loginUrl, { email, password }).pipe(
      map((response: any) => {
        if (response && response.token) {
          if (isPlatformBrowser(this.platformId)) {
            localStorage.setItem('token', response.token);
            localStorage.setItem('firstName', response.user?.first_name);
            localStorage.setItem('lastName', response.user?.last_name);
            localStorage.setItem('email', response.user?.email);
          }
          return response;
        }
        throw new Error('Invalid response from server');
      })
    );
  }

  // Admin login with a separate token
  adminLogin(email: string, password: string): Observable<any> {
    return this.http.post(this.loginUrl, { email, password }).pipe(
      map((response: any) => {
        if (response && response.token && response.user?.is_admin === 1) {
          if (isPlatformBrowser(this.platformId)) {
            localStorage.setItem('admin_token', response.token);
            localStorage.setItem('firstName', response.user?.first_name);
            localStorage.setItem('lastName', response.user?.last_name);
            localStorage.setItem('email', response.user?.email);
            localStorage.setItem('is_admin', 'true');
          }
          return response;
        }
        throw new Error('Access Denied: Admins only');
      })
    );
  }

  // auth.service.ts
register(data: any) {
  return this.http.post(`${this.apiUrl}/register`, data).pipe(
    tap(response => console.log('Registration response:', response)),
    catchError(error => {
      console.error('Registration error:', error);
      throw error;
    })
  );
}

  logout(): void {
    if (isPlatformBrowser(this.platformId)) {
      localStorage.removeItem('token');
      localStorage.removeItem('admin_token');
      localStorage.removeItem('is_admin');
    }
    this.router.navigate(['/login-register']);
  }

  getToken(): string | null {
    if (isPlatformBrowser(this.platformId)) {
      return localStorage.getItem('token');
    }
    return null;
  }

  getAdminToken(): string | null {
    if (isPlatformBrowser(this.platformId)) {
      return localStorage.getItem('admin_token');
    }
    return null;
  }

  isAuthenticated(): boolean {
    return !!this.getToken();
  }

  isAdminAuthenticated(): boolean {
    return !!this.getAdminToken();
  }

  getFirstName(): string | null {
    return isPlatformBrowser(this.platformId) ? localStorage.getItem('firstName') : null;
  }

  getLastName(): string | null {
    return isPlatformBrowser(this.platformId) ? localStorage.getItem('lastName') : null;
  }

  getEmail(): string | null {
    return isPlatformBrowser(this.platformId) ? localStorage.getItem('email') : null;
  }
}
