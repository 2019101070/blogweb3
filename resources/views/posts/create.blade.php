@extends('layouts.app')

@section('content')
<html>
    <head></head>
    <title></title>
    <body>
        <div class="container-fluid">
        <div class="card" style="width: 30rem;">
        <div class="card-header">
        What's on your mind?
        </div>
        <div class="card-body">
        <div>@foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show">{{$error}}</div>
             @endforeach
        </div>
        {{ Form::open(array('action'=>'PostsController@store','method'=>'POST'))}}
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="category_id" value="{{$id}}">
        <label>Add Post under {{$category->description}}<span style="color: red;">*</span></label><br/>
        <!--<textarea name="category" placeholder="type here..."></textarea><br/>-->
        {{ Form::textarea('post', null, ['class'=>'form-control','placeholder'=>'Type here...']) }}
        <br/>
        <button type="submit" class="btn btn-sm btn-success">Submit</button>
        {{ Form::close()}}
        </div>
        </div>
        </div>
    </body>
</html>
@endsection