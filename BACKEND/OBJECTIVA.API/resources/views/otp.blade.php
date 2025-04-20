<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            padding: 10px;
            border: 2px dashed #007bff;
            display: inline-block;
            margin: 15px 0;
        }
        .footer {
            font-size: 14px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your OTP Code</h2>
        <p>Please use the following OTP code to verify your email:</p>
        <div class="otp">{{ $otp }}</div>
        <p>This code will expire in 10 minutes. Do not share it with anyone.</p>
        <div class="footer">
            <p>Thank you,</p>
            <p><strong>O B J E C T I V A</strong></p>
        </div>
    </div>
</body>
</html>
