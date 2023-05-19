@extends('layouts/admin')

@section('content')
<div class="container">
    <h1 class="align-center">I miei lavori</h1>

    @foreach ($works as $work)
        
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$work->title}}</h5>
          <p class="card-text">{{$work->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Date: </b>{{$work->date}}</li>
          <li class="list-group-item"></li>
        </ul>
        <div class="card-body">
          <a href="{{$work->git_url}}" class="card-link">Card link</a>
          
        </div>
      </div>

    @endforeach

</div>
@endsection