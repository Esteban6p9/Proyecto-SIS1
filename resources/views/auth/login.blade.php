@extends('layouts.guest')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<section>
    <span></span>
    <span></span>
    <span></span>
    <span></span>

    <div class="signin">
        <div class="content">
            <h2>Login</h2>
            <form class="form" method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="inputBox">
                    <input type="text" required id="username" name="username">
                    <i>Username</i>
                </div>
                <div class="inputBox">
                    <input type="password" required id="password" name="password">
                    <i>Password</i>
                    <span class="password-toggle" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="error-message" id="errorMessage">
                    @error('username')
                        {{ $message }}
                    @enderror
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="inputBox">
                    <input type="submit" value="Login" id="loginBtn">
                    <div class="loader" id="loader"></div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection
