@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('payments/' . $payments->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $payments->id }}" id="id" />
                <label>Enrollment No</label></br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($payments as $id => $enrollno)
                        <option value="{{ $id }}">{{ $enrollno }}</option>
                    @endforeach
                </select>
                <label>Paid Date</label></br>
                <input type="text" name="syllabus" id="syllabus" value="{{ $payments->syllabus }}"
                    class="form-control"></br>
                <label>Amount</label></br>
                <input type="text" name="duration" id="duration" value="{{ $payments->duration }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
