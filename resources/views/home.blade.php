@extends('layouts.app')

@section('content')
<div class="columns is-multiline">
    <div class="column is-12">
            <h1 class="title">Home</h1>
    </div>
    <div class="column is-12">
        <div class="box">
                @if (session('status'))
                <div class="notification is-success">
                    {{ session('status') }}
                </div>
            @endif

            Hello {{ Auth::user()->username }},<br>
            You are logged in!


        </div>
    </div>
</div>
@endsection
