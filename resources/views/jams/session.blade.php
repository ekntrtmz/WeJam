@extends('layouts.app')

@section('content')
  <div class="container has-background-white">
    <div class="breadcrumbs section">
      <a href="/cities/{{$jam->city->slug}}" class="link is-pulled-left">
        <span class="icon">
          <i class="fas fa-chevron-circle-left"></i>
        </span>
        <span>Jams in {{$jam->city->name}}</span>
      </a>
      <a href="/jams/" class="link is-pulled-right">More Jams</a>
      <div class="is-clearfix"></div>
    </div>
  </div>
<main class="container">
<div class="section">
  <div class="columns">
    <div class="column is-8">
        <div class="title">{{ $jam->title }}</div>
        <div class="subtitle">{{ $jam->descr }}</div>
        <div class="jam-info-box">Jam-Info: Date, Time, Location (with map)</div>
        <div class="jam-gallery">Jam-Gallery: Images, and/or a video</div>
        <div class="jam-activities-log">Jam-Log: e.g. User X joined the event, User Y will perform with instrument: a and b</div>
    </div>
    <div class="column is-4">
      <div class="host">hosted by: <br>{{$jam->user->username}}</div>
      <hr>
      <div class="jam-meta">meta (yamen, instruments, jammers)</div>

    </div>
  </div>
</div>
</main>
@endsection
