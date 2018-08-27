@extends('layouts.app')

@section('content')
  <h1>Todos</h1>
  @if(count($todos) > 0)
    <div class="row">
      @foreach($todos as $todo)
        <div class="col-3 mb-4">
          <div class="card text-white bg-primary">
            <div class="card-header">Due on: <span class="badge badge-pill badge-dark">{{$todo->due}}</span></div>
            <div class="card-body">
              <h4 class="card-title"><a class="text-black-50" href="todo/{{$todo->id}}">{{strtoupper($todo->text)}}</a></h4>
              <p class="card-text">{{str_limit($todo->body, 80)}}</p>
              <a href="todo/{{$todo->id}}" class="btn btn-secondary btn-block" role="button">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
@endsection
