@extends('layout.app')

@include('template.headerNav')

<div class="container my-5">

    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img'>
    </div>
    <div>
        <label for="" class="w-25">Name</label>
        <input type="text" name="name" id="title">
    </div>
    <div>
        <label for="" class="w-25">Position</label>
        <input type="text" name='position' id='description'>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
    </form>

</div>