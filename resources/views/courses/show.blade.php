@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $courses->name }}</h5>
            <p class="card-text">Address : {{ $courses->syllabus }}</p>
            <p class="card-text">Mobile : {{ $courses->duration }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection
    I
