@extends('layouts.main')

@section('content')
    <main class="main-login">
        <img alt="logo" src="{{Vite::asset('resources/assets/logo_dark.png')}}">
        <form method="POST" action="{{ route('login' )}}">
            <label for="email">{{__('Email')}}</label>
            <input class="rounded-md shadow-sm" type="email" id="email" name="email" required autofocus autocomplete="username"/>
            @if($errors->get('email'))
                <p class="input-error">{{ $errors->get('email' )}}</p>
            @endif

            <label for="password">{{ __("Пароль") }}</label>
            <input class="rounded-md shadow-sm" type="password" id="password" name="password" required autocomplete="current-password"/>
            @if($errors->get('password'))
                <p class="input-error">{{ $errors->get('password' )}}</p>
            @endif

            <label for="remember_me">{{__("Запомнить меня")}}</label>
            <input class="rounded-md shadow-sm" name="remember_me" id="remember_me" type="checkbox">

            <input type="submit" placeholder="{{ __("Войти") }}"/>
        </form>

        <a href="{{ route('password.request') }}">{{ __("Забыли пароль?") }}</a>
    </main>
@endsection
