@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Payment Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New payment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment Number</th>
                            <th>Paid Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->enrollment->enroll_no }}</td>
                                <td>{{ $item->paid_date }}</td>
                                <td>{{ $item->amount }}</td>

                                <td>
                                    <a href="{{ url('/payments/' . $item->id) }}" title="View payment"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            View</button></a>
                                    <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit payment"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>
                                            Edit</button></a>

                                    <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}" 
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete payment"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i> Delete</button>
                                    </form>
                                    <a><button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
