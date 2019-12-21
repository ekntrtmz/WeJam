@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="notification-bar">
    <div class="container">
        <div class="notification">  {{ session('status') }}</div>
    </div>
</div>
@endif
<main class="container">
    <div class="section">
        <div class="columns is-multiline">
            <div class="column is-12">
                <h1 class="title">{{__('Next Jams')}}</h1>
                <p class="subtitle">{{ __('Jam Sessions and Open Mics coming up') }}</p>
            </div>
            <div class="column is-12">
                <div class="content placeholder-home">
                </div>
            </div>
        </div>
        <div class="columns is-multiline">
                <div class="column is-12">
                <h1 class="title">{{__('WeJam Spotlight')}}</h1>
                <p class="subtitle">{{ __('Interesting things happening around you...') }}</p>

                </div>
                <div class="column is-12">
                    <div class="content placeholder-home"></div>
                </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-12">
            <h1 class="title">{{__('Activity History')}}</h1>
            <p class="subtitle">{{ __('Lookback of where you been, played or hosted') }}</p>

            </div>
            <div class="column is-12">
                <div class="content placeholder-home"></div>
            </div>
        </div>
    </div>
</main>
@endsection
