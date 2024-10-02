@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $batches->name }}</h5>
            <p class="card-text">Address : {{ $batches->course->name }}</p>
            <p class="card-text">Mobile : {{ $batches->start_date }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection
    I
