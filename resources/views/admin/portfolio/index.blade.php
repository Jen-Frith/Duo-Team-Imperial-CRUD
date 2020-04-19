@extends('layout.app')

@include('template.headerNav')

<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container d-flex">
  <a href="{{route('portfolio.create')}}" class='btn btn-primary justify-content-center my-5'>Ajouter</a>
</div>

<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Settings</th>

      </tr>
    </thead>
    <tbody>
      @foreach($portfolios as $portfolio)
      <tr>
      <td><img src="{{asset('storage/'.$portfolio->img_path)}}" alt="" class="w-25"></td>
      <td>{{$portfolio->title}}</td>
      <td>{{$portfolio->description}}</td>
      <td>
        <a href="{{route('portfolio.edit' , $portfolio->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('portfolio.destroy' , $portfolio->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </tbody>
</table>