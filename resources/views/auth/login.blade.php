@extends('layouts.auth')
@section('title','Login')

@section('content')
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background: linear-gradient(135deg, #f4f7fb, #eef2f7);
    }

    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .login-card {
        background: #ffffff;
        border: none;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        width: 100%;
        max-width: 500px;
    }

    .login-header {
        text-align: center;
        padding: 35px 30px 15px;
    }

    .login-title {
        font-size: 36px;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 10px;
    }

    .login-subtitle {
        font-size: 16px;
        color: #6b7280;
        margin-bottom: 0;
    }

    .title-line {
        width: 100px;
        height: 4px;
        background: linear-gradient(to right, #00c6ff, #0072ff);
        margin: 18px auto 0;
        border-radius: 10px;
    }

    .login-body {
        padding: 30px;
    }

    .form-group label {
        font-weight: 700;
        color: #374151;
        margin-bottom: 8px;
    }

    .form-control {
        border-radius: 14px;
        border: 1px solid #dbe3ec;
        padding: 12px 16px;
        min-height: 48px;
        box-shadow: none !important;
    }

    .form-control:focus {
        border-color: #007bff;
    }

    .form-check-label {
        color: #4b5563;
        font-weight: 600;
    }

    .login-btn {
        display: inline-block;
        width: 100%;
        padding: 12px 22px;
        border: none;
        border-radius: 30px;
        background: linear-gradient(to right, #007bff, #00b4db);
        color: white !important;
        font-weight: 700;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .login-btn:hover {
        opacity: 0.9;
        transform: scale(1.02);
    }

    .invalid-feedback strong {
        font-size: 14px;
    }
</style>

<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <h1 class="login-title">Login</h1>
            <p class="login-subtitle">Welcome back. Please sign in to your account.</p>
            <div class="title-line"></div>
        </div>

        <div class="login-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus>

                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required
                        autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check pl-0">
                        <input class="form-check-input ml-0" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label ml-4" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="login-btn">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection