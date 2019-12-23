@extends('layouts.app')

@section('content')
<main class="container">
    <div class="hero is-info is-small has-background">
      <img alt="Fill Murray" class="hero-background is-transparent" src="{{ url('/img/wejammin-'.$city->short.'.jpg') }}" />
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-size-1">
            {{ $city->name }}
          </h1>
        <h3 class="subtitle"><span class="city-short">{{ $city->short }}</span> | {{ $city->country_code }}</h3>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="columns is-multiline">
        <div class="column is-12">
            <h1 class="title">{{__('Jams in '.$city->name)}}</h1>
            <p class="subtitle">{{ __('Choose between Sessions and Open Mics') }}</p>
        </div>
        <div class="column is-12">
            <div class="tabs is-medium is-centered is-boxed">
                <ul>
                  <li class="is-active">
                    <a>
                      <span class="icon is-small"><i class="fas fa-microphone-alt" aria-hidden="true"></i></span>
                      <span>Open Mics</span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="icon is-small"><i class="fas fa-compress-arrows-alt" aria-hidden="true"></i></span>
                      <span>Sessions</span>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
        <div class="column is-12">
          <div class="placeholder">
            Placeholder
          </div>
        </div>
      </div>
    </div>
</main>
@endsection
