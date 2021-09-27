@extends("layouts.app")
@section('title')
<title>Create TODO</title>

@endsection
@section('content')
<h1 class="text-center my-5">TODOS</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create Todo</div>
                <div class="card-body card">
                    @if($errors->all())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $errors)
                                <li class="list-group-item">
                                    {{$errors}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/store-todos/" method="POST">
                        @csrf  
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name">
                        </div>
                        <div class="form-group my-2">
                            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control"></textarea>
                          </div>
                          <div class="form-group text-center">
                              <button type="submit" class="btn btn-success">Create Todo</button>
                          </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection