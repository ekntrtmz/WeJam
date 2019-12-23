@extends('layouts.app')

@section('content')
<main class="container">
  <div class="section">
    <div class="columns is-multiline">
      @if ($cities)

      <div class="column is-12">
        <h1 class="title">{{ $cities->count() }} {{__('Cities') }} {{ __('are allready jammin with us') }}</h1>
          <p class="subtitle">{{ __('Where are you going to jam next?') }}</p>
      </div>
      <div class="column is-12">
          <nav class="level">
              <div class="level-left">
                <div class="level-item">
                  <div class="field has-addons">
                    <p class="control">
                    <input class="input" type="text" placeholder="{{ __('Find a city') }}">
                    </p>
                    <p class="control">
                      <button class="button">
                        {{ __('Search') }}
                      </button>
                    </p>
                  </div>
                </div>
              </div>
              <div class="level-right">
                  <p class="level-item"><strong>Order by</strong></p>
              </div>
          </nav>
      </div>

      @foreach ($cities as $city)
        <div class="column is-4">
            <div class="card city-card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="{{ url('/img/wejammin-'.$city->short.'.jpg') }}" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left city-meta-left">
                        <p class="city-short">{{ $city->short }}</p>
                        <p>{{ $city->country_code }}</p>
                    </div>
                    <div class="media-content">
                      <p class="title is-4">{{ $city->name}}</p>
                      <p class="subtitle is-6">{{ $city->jams_count }} Jams</p>
                    </div>
                  </div>
                  <div class="content has-text-centered">
                    <hr>
                  <a href="/cities/{{ $city->slug }}" class="button is-primary is-rounded is-outlined">
                      {{ __('View Jams') }}
                    </a>
                  </div>
                </div>
              </div>
        </div>
      @endforeach
      @else
      <p>There are no cities.</p>
      @endif
    </div>
  </div>
</main>
@endsection
