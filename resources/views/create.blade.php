@extends('layouts.master')
@section('content')
<h2>New Student Id Create Here</h2>
<hr><br><br>
<form method="post" action="{{ route('store') }}">
{{ csrf_field() }}
  <div class="form-group">
    <input type="num" class="form-control" id="registration_id" name="registration_id" aria-describedby="emailHelp" placeholder="Enter ID">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="department" name="department" aria-describedby="emailHelp" placeholder="Enter Department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="details" name="details" aria-describedby="emailHelp" placeholder="Enter Details">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
