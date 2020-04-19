@extends('layout.app')
@include('template/headerNav')




<div class="container">

<div class="text-center h1 mt-5">Services list</div>
<a href="{{route('service.create')}}">
    <button class="btn btn-primary text-center m-3">Ajout</button>
    </a>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Icone</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
@foreach ($services as $service)
    

<tbody>

<td>{{$service->titre}}</td>
<td>{{$service->description}}</td>
<td><i class="{{$service->fontImg}}"></i></td>

<td>
    <a href="{{route('service.edit', $service->id)}}"> <button class="btn bg-warning ">Modifier</button></a> 
      <form action="{{route('service.destroy', $service->id)}}" method="POST">  
        @csrf
        @method('delete')
        <button type="submit" class="bg-danger btn">Supprimer</button>
    </form>
    </td>

@endforeach
</tbody>

</table>


</div>