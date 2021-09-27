@extends("layouts.app")
@section('title')
<title>{{$todos->name}}</title>

@endsection
@section('content')
<h1 class="text-center my-5"> {{$todos->name}}</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card card-header">
                Details
            </div>
            <div class="card card-body">
                {{$todos->description}}
            </div>
        </div>
        <a href="/todos" class="btn btn-primary btn-sm float-end my-2">Back</a>
        <a href="/todos/{{$todos->id}}/edit" class="btn btn-primary btn-sm float-back my-2">Edit</a>
        <a href="/todos/{{$todos->id}}/delete" class="btn btn-danger btn-sm  my-2">Delete</a>
    </div>
</div>
@endsection