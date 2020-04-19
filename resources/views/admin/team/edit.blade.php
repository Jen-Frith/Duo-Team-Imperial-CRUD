@extends('layout.app')

@include('template.headerNav')

<div class="container my-5">

    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
    <input type="file" name='img' id='img'>
    <img src="{{asset('storage/'.$team->img_path)}}" alt="" >
    </div>
    <div>
        <label for="" class="w-25">Name</label>
    <input type="text" name="title" id="name" value="{{$team->name}}">
    </div>
    <div>
        <label for="" class="w-25">Position</label>
    <input type="text" name='description' id='position' value="{{$team->position}}">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
    </form>

</div>