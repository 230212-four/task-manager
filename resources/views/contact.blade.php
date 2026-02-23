@extends('layouts.app')

@section('content')
    <h1>Contact Me</h1>
    
    <div class="card p-4">
        <h3>{{ $contact->name }}</h3>
        <p>Email: {{ $contact->email }}</p>
    </div>
@endsection