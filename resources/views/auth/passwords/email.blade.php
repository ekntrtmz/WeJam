@extends('layouts.app', ['hide_navbar' => true, 'hide_footer' => true] )

@section('content')
<div class="section">
            <div class="brand-wrapper">
                    <a href="/" class="brand-text">wejam</a>
            </div>

            <div class="columns is-centered">
                <div class="box column is-3">

                    @if (session('status'))
                        <div class="notification is-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <label class="label">{{ __('Your Email') }}</label>
                                    <div class="control has-icons-left">
                                        <input autofocus name="email" value="{{ old('email') }}" class="input is-large {{  $errors->has('email') ? 'is-danger' : '' }}" type="email">
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
                                    <button class="button is-primary is-medium is-fullwidth" type="submit">
                                        {{__('Send Password Reset Link')}}
                                    </button>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-text-centered">
                                    <a href="{{ route('login') }}" class="is-link">
                                        {{ __('Back to Login') }}
                                    </a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
