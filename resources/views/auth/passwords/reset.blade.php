@extends('layouts.app')

@section('content')

<div class="section">
    <div class="container">
        <h1 class="title has-text-centered">{{ __('Reset Password') }}</h1>
        <div class="columns is-centered">
            <div class="box column is-one-third">
                <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field">
                            <div class="control">
                                <label class="label">{{ __('Email') }}</label>
                                <div class="control has-icons-left">
                                    <input name="email" value="{{ $email ?? old('email') }}" class="input is-large {{  $errors->has('email') ? 'is-danger' : '' }}" type="email" placeholder="{{__('Your Email')}}">
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
                                <label class="label">{{ __('New Password') }}</label>
                                <div class="control has-icons-left">
                                    <input name="password" class="input is-large {{  $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="{{__('Your Password')}}">
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
                                <label class="label">{{ __('Confirm New Password') }}</label>
                                <div class="control has-icons-left">
                                    <input name="password_confirmation" class="input is-large {{  $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" placeholder="{{__('Confirm Password')}}">
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
                                <button class="button is-primary is-medium" type="submit">
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
