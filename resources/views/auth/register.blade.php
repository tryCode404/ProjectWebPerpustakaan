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
        max-width: 800px;
        width: 100%;
        text-align: center;
        box-sizing: border-box;
    }

    .auth-box img {
        margin-bottom: 10px;
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
        text-decoration: none;
    }

    .form-check {
        margin-bottom: 20px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .input-group .input-group-text.eye-icon {
        cursor: pointer;
    }
</style>

<div class="auth-wrapper">
    <div class="auth-box">
        <img src="{{ asset('img/admin.png') }}" alt="logo" class="img-fluid" />
        <h3>Buat Akun Baru</h3>
        <p>Isi form di bawah untuk mendaftar</p>

        <!-- Form Register -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Nama Lengkap" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" name="npm" value="{{ old('npm') }}"
                            class="form-control @error('npm') is-invalid @enderror"
                            placeholder="NPM" required>
                        @error('npm')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                        </div>
                        <input type="text" name="prodi" value="{{ old('prodi') }}"
                            class="form-control @error('prodi') is-invalid @enderror"
                            placeholder="Program Studi" required>
                        @error('prodi')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                        </div>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            placeholder="Alamat" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="noTelp" value="{{ old('noTelp') }}"
                            class="form-control @error('noTelp') is-invalid @enderror"
                            placeholder="No. Telp" required>
                        @error('noTelp')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" required>
                        <div class="input-group-append">
                            <span class="input-group-text eye-icon"><i class="fas fa-eye"></i></span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password_confirmation"
                            class="form-control"
                            placeholder="Konfirmasi Password" required>
                        <div class="input-group-append">
                            <span class="input-group-text eye-icon"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">Register</button>
                </div>
            </div>
        </form>

        <div class="text-center mt-3">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.eye-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            let input = this.parentElement.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                input.type = 'password';
                this.innerHTML = '<i class="fas fa-eye"></i>';
            }
        });
    });
</script>
@endsection
