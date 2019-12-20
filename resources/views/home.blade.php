@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

<div class="columns is-multiline">
    <div class="column is-12">
    <h1 class="title">{{__('Next')}}</h1>
    </div>
    <div class="column is-12">
        <div class="box">
            @foreach(Auth::user()->jams as $jam)
            {{$jam->title}}
            @endforeach
        </div>
    </div>
</div>
<div class="columns is-multiline">
    <div class="column is-12">
        <h1 class="title">{{__('Recommended')}}</h1>
    </div>
    <div class="column is-12">
        <div class="box"></div>
    </div>
</div>
<div class="columns is-multiline">
    <div class="column is-12">
    <h1 class="title">{{__('History')}}</h1>
    </div>
    <div class="column is-12">
        <div class="box"></div>
    </div>
</div>
@endsection
