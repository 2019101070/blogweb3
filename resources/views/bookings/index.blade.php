@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
            <div class="col-md-9">
                 <div class="card">
                    <div class="card-header"><h2><b>Booked Services<b><h2></div>
                        <div class="card-body">
                             <table class="table table-striped">
        <th>Booking#</th>
        <th>Booked Services</th>
        <th>Status</th>
        <th>Date</th>
        <th>Provider</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Chat</th>
        <th>Cancel</th>
        <tr>
            <td>{{ Auth::user()->email}}</td>
            <td>{{ Auth::user()->name}}</td>
            <td>{{ Auth::user()->date}}</td>
            <td>{{ Auth::user()->time}}</td>
            <td>{{ Auth::user()->service}}</td>
            <td></td>
            <td></td>
            <tr>
            </tr>
        </tr>
    </div>
    </div>
    </table>
    <div>
    </div>
@endsection