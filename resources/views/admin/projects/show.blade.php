@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $project->slug }}</h5>
            <p>{{ $project->description }}</p>
        </div>
        <p class="mt-3">{{ $project->content }}</p>
    </div>
@endsection
