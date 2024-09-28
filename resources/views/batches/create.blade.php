@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input type="text" name="batchname" id="batchname" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="coursename" id="coursename" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="startdate" id="startdate" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop