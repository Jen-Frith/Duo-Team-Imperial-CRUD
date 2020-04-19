@extends('layout.app')
@include('template/headerNav')


<div class="container">
<form action="{{route('service.update', $service->id)}}" method="POST">
    @csrf
@method('put')
<div class="text-center h1 mt-5">Modification</div>

<label for="titre">Titre</label>
<input class="form-control" value="{{$service->titre}}" type="text" name="titre">

<label for="">Description</label>
<input class="form-control" value="{{$service->description}}" type="text" name="description">

<label for="">Icone</label><br>
<input class='mb-3'type="radio" checked="checked" value=""><i class="{{$service->fontImg}}"></i>


<br>
<label for="">Choix de new icone</label><br>
<input type="radio" value= "fas fa-table-tennis" name="fontImg"><i class="pr-4 fas fa-table-tennis"></i>
<input type="radio" value= "fas fa-baseball-ball" name="fontImg"><i class="pr-4 fas fa-baseball-ball"></i>
<input type="radio" value= "fas fa-basketball-ball" name="fontImg"><i class="pr-4 fas fa-basketball-ball"></i>
<input type="radio" value= "fas fa-bowling-ball" name="fontImg"><i class="pr-4 fas fa-bowling-ball"></i>

<button class="btn btn-group-lg btn-info" type="submit">Valider la modification</button></div>


</form>
</div>
