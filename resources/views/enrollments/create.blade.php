@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollments Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments') }}" method="post">
        {!! csrf_field() !!}

        <label>Enroll Number</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>

        <label>Batch</label></br>
        <select name="batch_id" id="batch_id" class="form-control">
          @foreach($batches as $id=>$name)
          <option value="{{$id}}">{{$name}}</option>
          @endforeach
        </select>

        {{--  --}}

        <label>Student</label></br>
        <select name="student_id" id="student_id" class="form-control">
          @foreach($students as $id=>$name)
          <option value="{{$id}}">{{$name}}</option>
          @endforeach
        </select>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>

        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop