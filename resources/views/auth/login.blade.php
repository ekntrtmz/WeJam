@extends('layouts.app', ['hide_navbar' => true, 'hide_footer' => true] )

@section('content')

<div class="brand-wrapper">
        <a href="/" class="brand-text">wejam</a>
</div>

<div class="columns is-centered">
    <div class="box column is-3">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if($errors->any())
                <div class="notification is-danger">
                    <span class="icon">
                        <i class="fas fa-exclamation-circle"></i>
                    </span>
                    {{ $errors->first() }}</div>
            @endif

            <div class="field">
            <label class="label">{{ __('Your Email/Username') }}</label>
            <div class="control has-icons-left">
                <input name="login" class="input is-large {{  $errors->has('username') ? 'is-danger' : '' }}" type="text" value="{{ old('login') }}" autofocus>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            @error('username')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="field">
                <label class="label">{{ __('Your Password') }}</label>
                <p class="control has-icons-left">
                <input name="password" class="input is-large {{  $errors->has('password') ? 'is-danger' : '' }}" type="password" value="{{ old('password') }}">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            @error('password')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="field">
                <div class="control">
                    <label class="checkbox" for="remember">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>{{__('Remember me')}}</span>
                    </label>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary is-medium is-fullwidth">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
            @if (Route::has('password.request'))
            <div class="field">
                <div class="control has-text-centered">
                    <a href="{{ route('password.request') }}" class="is-link">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
            @endif
            <div class="field">
                <div class="control has-text-centered">
                    <a href="{{ route('welcome') }}" class="button is-small is-link">
                        {{ __('Home') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
