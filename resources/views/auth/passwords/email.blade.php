@extends('layouts.app')

@section('content')
<div class="section">
        <div class="container">
            <h1 class="title has-text-centered">{{ __('Reset Password') }}</h1>
            <div class="columns is-centered">
                <div class="box column is-one-third">

                    @if (session('status'))
                        <div class="notification is-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <label class="label">{{ __('Email') }}</label>
                                    <div class="control has-icons-left">
                                        <input name="email" value="{{ old('email') }}" class="input is-large {{  $errors->has('email') ? 'is-danger' : '' }}" type="email" placeholder="{{__('Your Email')}}">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary is-medium" type="submit">
                                        {{__('Send Password Reset Link')}}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
