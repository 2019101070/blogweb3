@extends('layouts.app')
@section('content')
<script type="text/javascript">
    var flash_msg = 'Are you sure you want to delete this post? \n'
    var permissiontext = document.getElementsByName('permissionname');

    console.log(flash_msg);
    console.log(permissiontext);
    function ConfirmDelete(){
        
        return confirm(flash_msg);
        };
      
</script>

        <div class="container" style="background-color:black;">
            @if(Session::has('flash_msg'))
            <div class="alert alert-success">
                {{Session::get('flash_msg')}}
            </div>
            @endif
            <div class="card-header" style="background-color:#000080;"><b><h1 style="color:skyblue;">MY BLOG</h1></b></div>
            <div class="card-body" style="background-color: #CCCCFF;">
                <table style="color:black;">
                    @foreach($categories as $category)
                    <tr>
                        <th><h2><b>{{$category->description}}</h2></b>
                        <a href="{{route('posts.show',$category->id)}}"class="btn btn-sm btn-success">Add Post</button></a></th>
                        <th>@foreach($category->posts as $post)</th>
                        <tr>
                            <th><b>{{$post->description}}</b></th>
                            <th><b>{{$post->user->name}}</b></th>
                            <th><a href="{{route('posts.edit',$post->id)}}"class="btn btn-sm btn-primary">Edit</a></th>
                            <th>{{Form::open(['method'=>'DELETE','route'=>['posts.destroy',$post->id],'onsubmit'=>'return ConfirmDelete()'])}}
                            {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                            {{Form::close()}}</th>
                            
                        </tr>
@endforeach
    </tr>
@endforeach
</div>
</div>
</table>
@endsection