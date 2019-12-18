@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">

        <div class="brand-wrapper">
                <a href="/" class="brand-text">wejam</a>
        </div>

        <div class="columns is-centered">
            <div class="box column is-one-third">
                <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field">
                            <div class="control">
                                <label class="label">{{ __('Your Email Address') }}</label>
                                <div class="control has-icons-left">
                                    <input name="email" value="{{ $email ?? old('email') }}" class="input is-large {{  $errors->has('email') ? 'is-danger' : '' }}" type="email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-at"></i>
                                    </span>
                                </div>
                                @error('email')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="label">{{ __('Your new Password') }}</label>
                                <div class="control has-icons-left">
                                    <input name="password" class="input is-large {{  $errors->has('password') ? 'is-danger' : '' }}" type="password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                @error('password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="label">{{ __('Confirm new Password') }}</label>
                                <div class="control has-icons-left">
                                    <input name="password_confirmation" class="input is-large {{  $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                @error('password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button class="button is-primary is-medium is-fullwidth" type="submit">
                                    {{__('Reset Password')}}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
