@extends('layouts.app')

@section('content')
<main class="container">
<div class="section">
  <div class="title">{{ $jam->title }}</div>
  <div class="subtitle">{{ $jam->descr }}</div>
</div>
</main>
@endsection
