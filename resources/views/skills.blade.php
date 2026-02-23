@extends('layouts.app')

@section('content')
    <h1>My Skills</h1>
    
    <ul class="list-group mt-3">
        @foreach($skills as $skill)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $skill->name }}
                <span class="badge bg-primary rounded-pill">{{ $skill->proficiency }}%</span>
            </li>
        @endforeach
    </ul>
@endsection