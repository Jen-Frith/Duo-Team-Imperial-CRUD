@extends('layout.app')

@include('template.headerNav')

<div class="container my-5">

    <form action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
    <input type="file" name='img' id='img'>
    <img src="{{asset('storage/'.$portfolio->img_path)}}" alt="" >
    </div>
    <div>
        <label for="" class="w-25">Title</label>
    <input type="text" name="title" id="title" value="{{$portfolio->title}}">
    </div>
    <div>
        <label for="" class="w-25">Description</label>
    <input type="text" name='description' id='description' value="{{$portfolio->description}}">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
    </form>

</div>