@extends('layouts.guest')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="login-container">
    <div class="login-box">

        {{-- CAMBIO AQUÍ: Usamos la imagen del logo --}}
        <div class="logo-container">
            <img src="{{ asset('img/logo.jpg') }}" alt="MindTrade Logo" class="logo-image">
        </div>

        <h1 class="app-name">MindTrade</h1>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Usuario o Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="login-button">Ingresar</button>
        </form>

        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>

    </div>
</div>
@endsection

{{-- AÑADIDO: Sección para los scripts de JS --}}
@section('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection