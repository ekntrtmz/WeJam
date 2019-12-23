@extends('layouts.app', ['hide_navbar' => true, 'hide_footer' => true] )

@section('content')
        <h1 class="title has-text-centered">{{ __('Register') }}</h1>
        <div class="columns is-centered">
            <div class="box column is-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <label class="label">{{ __('Username') }}</label>
                            <div class="control has-icons-left">
                                <input name="username" value="{{ old('username') }}" class="input is-large {{  $errors->has('username') ? 'is-danger' : '' }}" type="text" placeholder="{{__('Your Username')}}">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            @error('username')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
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
                            <label class="label">{{ __('Password') }}</label>
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
                            <label class="label">{{ __('Confirm Password') }}</label>
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
                                {{__('Register')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
