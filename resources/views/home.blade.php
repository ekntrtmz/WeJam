@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns is-multiline is-centered">
            <div class="column is-10">
                    <h1 class="title">Dashboard</h1>
            </div>
            <div class="column is-10">
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
    </div>
</div>
@endsection
