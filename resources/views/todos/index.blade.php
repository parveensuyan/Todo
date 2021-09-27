@extends("layouts.app")
@section('title')
<title>TODO</title>

@endsection
@section('content')
<h1 class="text-center my-5">TODOS</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Todo</div>
            <ul class="list-group">
                @foreach($todos as $todos)
                <li class="list-group-item"> {{$todos->name}}
                    <a href="/todos/{{$todos->id}}" class="btn btn-primary btn-sm float-end">View</a>
                    @if($todos->completed == '0')
                    <a href="/todos/{{$todos->id}}/complete-todos" class="btn btn-warning btn-sm float-end mx-2 ">Complete Todo</a>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
@endsection