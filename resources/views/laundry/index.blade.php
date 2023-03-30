@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-header"><h3>Job Order Details</h3></div>
    <div class="card-body">

<form>
  <div class="form-group">
    <label for="">Duration:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Duration:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>30mins</option>
      <option>1hr</option>
      <option>2hrs</option>
      <option>3hrs</option>
      <option>4hrs</option>
    </select>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="services" type="submit" class="btn btn-secondary">Back</a>
</form>
</div>
@endsection