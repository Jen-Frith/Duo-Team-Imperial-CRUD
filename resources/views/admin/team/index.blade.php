@extends('layout.app')

@include('template.headerNav')

<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

@if(count($teams)<4)
<div class="container d-flex">
  <a href="{{route('team.create')}}" class='btn btn-primary justify-content-center my-5'>Ajouter</a>
</div>
@endif

<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teams as $team)
      <tr>
      <td><img src="{{asset('storage/'.$team->img_path)}}" alt="" class="w-25"></td>
      <td>{{$team->name}}</td>
      <td>{{$team->position}}</td>
      <td>
        <a href="{{route('team.edit' , $team->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('team.destroy' , $team->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
     
    </tbody>
</table>