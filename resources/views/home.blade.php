@extends('layouts.app')

@section('content')
    <h1>About Me</h1>
    
    <div class="card p-4 mt-3">
        <h2>{{ $profile->name }}</h2>
        <h4 class="text-muted">{{ $profile->title }}</h4>
        <hr>
        <p class="lead">{{ $profile->bio }}</p>
    </div>
@endsection