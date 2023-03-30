@extends('layouts.app')

@section('content')
<html>
    <head></head>
    <title></title>
    <body>
        <div class="container-fluid">
        <div class="card" style="width: 30rem;">
        <div class="card-header">
        Edit Post
        </div>
        <div class="card-body">
        <div>@foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show">{{$error}}</div>
             @endforeach
        </div>
        {{Form::model($post, ['method'=>'PATCH','route'=>['posts.update', $post->id]])}}
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label>Edit my post</label><br/>
        <!--<textarea name="category" placeholder="type here..."></textarea><br/>-->
        {{Form::textarea('post', $post->description, ['class'=>'form-control'])}}
        <br/>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        {{ Form::close()}}
        </div>
        </div>
        </div>
    </body>
</html>
@endsection