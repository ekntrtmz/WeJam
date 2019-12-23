@extends('layouts.app')

@section('content')
<main class="container">
    <div class="hero is-info is-medium has-background">
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
        <div class="column">show jams</div>
      </div>
    </div>
</main>
@endsection
