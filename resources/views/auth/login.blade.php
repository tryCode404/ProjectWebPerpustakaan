@extends('layouts.welcome')

@section('content')
<!-- Add Custom Styles -->
<style>
    .auth-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
    }

    .auth-box {
        background: #fff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
        box-sizing: border-box;
    }

    .auth-box img {
        margin-bottom: 20px;
        animation: fadeIn 1.5s;
        max-width: 120px; /* Increased from 80px to 120px */
    }

    .auth-box h3 {
        color: #00BFFF;
        font-weight: bold;
        margin-bottom: 10px;
        font-size: 24px;
    }

    .auth-box p {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
    }

    .input-group .input-group-text {
        border-radius: 12px 0 0 12px;
        background-color: #00BFFF;
        color: #fff;
        border: none;
    }

    .form-control {
        border-radius: 0 12px 12px 0;
        padding: 12px 15px;
        font-size: 14px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #00BFFF;
        box-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
    }

    .btn {
        border-radius: 12px;
        padding: 12px 20px;
        font-size: 14px;
        margin-top: 15px;
        width: 100%;
    }

    .btn-success {
        background: linear-gradient(45deg, #87CEFA, #00BFFF);
        border: none;
        transition: background 0.3s ease;
    }

    .btn-success:hover {
        background: linear-gradient(45deg, #00BFFF, #87CEFA);
    }

    .text-center p a,
    .forgot-password-link {
        color: #00BFFF;
        font-weight: bold;
        text-decoration: none.
    }

    .form-check {
        margin-bottom: 20px.
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px).
        }

        to {
            opacity: 1;
            transform: translateY(0).
        }
    }

    .input-group .input-group-text.eye-icon {
        cursor: pointer.
    }
</style>

<div class="auth-wrapper">
    <div class="auth-box">
        <div id="loginform">
            <div class="text-center">
                <img src="{{ asset('img/admin.png') }}" alt="logo" />
                <h3>Sistem Informasi Perpustakaan</h3>
                <p>Silakan login untuk mengakses akun Anda</p>
            </div>

            <!-- Error Alert -->
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Login Form -->
            <form id="loginform" action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" required autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" required>
                    <div class="input-group-append">
                        <span class="input-group-text eye-icon"><i class="fas fa-eye"></i></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-check text-start" style="margin-top: 10px; margin-bottom: 0px;">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <!-- Buttons -->
                <div class="form-group">
                    <p class="forgot-password-link">
                        <a href="{{ route('password.request') }}">Lupa Password?</a>
                    </p>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>

                <!-- Register Link -->
                <div class="text-center mt-3">
                    <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Custom Script -->
<script>
    document.querySelector('.eye-icon').addEventListener('click', function() {
        const passwordField = document.querySelector('input[name="password"]');
        const icon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>
@endsection
