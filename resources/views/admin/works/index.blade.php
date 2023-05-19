@extends('layouts/admin')

@section('content')
<h1 class="text-center">I miei lavori</h1>
<div class="container d-flex justify-content-center gap-4 mt-5">

    @foreach ($works as $work)
        
    <div class="card" style="width: 18rem;">
        <img src="{{$work->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>{{$work->title}}</b></h5>
          <p class="card-text">{{$work->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Date: </b>{{$work->date}}</li>
        </ul>
        <div class="card-body text-center">
          <a href="{{$work->git_url}}" ><i class="fa-brands fa-github fs-1 "></i></a> 
        </div>
        <div class="card-body text-center fs-3 d-flex justify-content-center gap-3">
          <a href="{{route('admin.works.edit', $work)}}" ><i class="fa-regular fa-pen-to-square text-success"></i></a>
          <form id="delete" action="{{route('admin.works.destroy', $work)}}" method="post">
            @csrf
            @method('DELETE')

              <button class="-btn-" type="submit"><i class="fa-regular fa-trash-can text-danger"></i></i></button>
              {{-- <a href="" onclick="document.getElementById('delete').submit();"><i class="fa-regular fa-trash-can text-danger"></i></a> --}}
          </form>

        

        </div>
      </div>

    @endforeach

    
  </div>

  <div class="-container- d-flex justify-content-center mt-5">

    <a  href="{{route('admin.works.create')}}"><button class="btn btn-primary">Aggiungi un progetto</button></a>

  </div>
@endsection