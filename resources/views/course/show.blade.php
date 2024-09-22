@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Ciurses Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->syllabus }}</p>
            <p class="card-text">Mobile : {{ $students->duration }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection
    I
