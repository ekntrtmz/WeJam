@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <h1 class="title has-text-centered">{{ __('Login') }}</h1>
        <div class="columns is-centered">
            <div class="box column is-one-third">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @if($errors->any())
                        <div class="notification is-danger">{{ $errors->first() }}</div>
                    @endif

                    <div class="field">
                    <label class="label">{{ __('Email') }}</label>
                    <div class="control has-icons-left">
                        <input name="email" class="input is-large {{  $errors->has('email') ? 'is-danger' : '' }}" type="email" placeholder="{{__('Your Email')}}" value="{{ old('email') }}">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="field">
                        <label class="label">{{ __('Password') }}</label>
                        <p class="control has-icons-left">
                        <input name="password" class="input is-large {{  $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="{{__('Your Password')}}" value="{{ old('password') }}">
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
                                {{__('Remember me')}}
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary is-medium">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                    <div class="field">
                        <div class="control">
                            <a href="{{ route('password.request') }}" class="is-link">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
