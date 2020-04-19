@extends('layout.app')
@include('template/headerNav')

<form action="{{route('service.store')}}" method="POST">
    @csrf
<div class="container">
<div class="text-center h1 mt-5">Creation</div>

<label for="titre">Titre</label>
<input class="form-control" type="text" name="titre">

<label for="">Description</label>
<input class="form-control" type="text" name="description">

<label for="">Choix de l'icone</label><br>
<input type="radio" value= "fas fa-table-tennis" name="fontImg"><i class="pr-4 fas fa-table-tennis"></i>
<input type="radio" value= "fas fa-baseball-ball" name="fontImg"><i class="pr-4 fas fa-baseball-ball"></i>
<input type="radio" value= "fas fa-basketball-ball" name="fontImg"><i class="pr-4 fas fa-basketball-ball"></i>
<input type="radio" value= "fas fa-bowling-ball" name="fontImg"><i class="pr-4 fas fa-bowling-ball"></i>

<button class="btn btn-group-lg btn-info" type="submit">Valider la création</button></div>


</form>