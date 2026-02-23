@extends('layouts.app')

@section('content')
    <h1>My Projects</h1>

    <div class="list-group">
        @foreach($projects as $project)
            <div class="list-group-item">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
    </div>
@endsection