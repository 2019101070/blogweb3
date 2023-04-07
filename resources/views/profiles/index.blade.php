@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card">
                    <div class="card-header">My PROFILE</div>
                        <div class="card-body">
                              <table class="table">
                                    <tr><td>Name: {{ Auth::user()->name}}</td></tr>
                                    <tr><td>Email: {{ Auth::user()->email}}<td></tr>
                              </table>
</div>
</div>
</div>
</div>
</div>
@endsection