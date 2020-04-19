@extends('layout.app')
@include('template/headerNav')

<form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="container">
<div class="text-center h1 mt-5">Creation</div>

<label for="titre">Nom</label>
<input class="form-control" type="text" name="nom">

<label for="">Fonction</label>
<input class="form-control" type="text" name="fonction">

<label for="">Image</label>
<input class="form-control-file" type="file" name="img_path">

<label for="">Propos</label>
<textarea name="propos" id="" cols="30" rows="10"></textarea>


<button class="btn btn-group-lg btn-info" type="submit">Valider la création</button></div>


</form>