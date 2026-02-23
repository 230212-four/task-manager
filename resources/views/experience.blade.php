@extends('layouts.app')

@section('content')
    <h1>Experience & Education</h1>
    
    <div class="list-group mt-3">
        @foreach($experiences as $experience)
            <div class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1">{{ $experience->title }}</h4>
                    <small class="text-muted">{{ $experience->duration }}</small>
                </div>
                <h6 class="mb-1">{{ $experience->organization }}</h6>
                <p class="mb-1">{{ $experience->description }}</p>
            </div>
        @endforeach
    </div>
@endsection