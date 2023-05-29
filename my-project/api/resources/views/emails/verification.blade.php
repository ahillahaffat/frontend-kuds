<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <h1>Email Verification</h1>
    <p>Halo, Terima kasih telah mendaftar. Silakan verifikasi email Anda dengan mengklik tautan berikut:</p>
    <a href="{{ route('verification.verify', ['verification_code' => $verificationCode]) }}">Verifikasi Email</a>
</body>
</html>
