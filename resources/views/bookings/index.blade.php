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
    @if(isset($movies))
    @foreach($movies as $movie)
        <tr>
            <td>{{$movie->id}}</td>
            <td>{{$movie->mov_title}}</td>
            <td>{{$movie->mov_year}}</td>
            <td>{{$movie->mov_time}}</td>
            <td>{{$movie->mov_lang}}</td>
            <td>{{$movie->mov_dt_rel}}</td>
            <td>{{$movie->mov_rel_country}}</td>
            <td><a href="{{route('movies.show', $movie->id)}}">Movie details</a></td>
            <tr>
            </tr>
        </tr>
    @endforeach
    </div>
    </div>
    </table>
    <div>
    {{$movies->render()}}
    @endif
    </div>
@endsection