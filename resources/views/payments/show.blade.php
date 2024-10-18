@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Payments Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Enrollment No : {{ $payments->enrollment->enroll_no  }}</h5>
                <p class="card-text">Paid Date : {{ $payments->paid_date }}</p>
                <p class="card-text">Amount : {{ $payments->amount }}</p>
            </div>
            </hr>

        </div>
    </div>
@endsection
I
