@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <style>
            .jrt {
                text-align: center;
            }
            </style>
	</head>
    <body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="card-body">
        <div class="jrt">
        <h1>JRT TEAM 2023</h1>
        </div>
        <div>
            <p>Copyright@</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>
@endsection