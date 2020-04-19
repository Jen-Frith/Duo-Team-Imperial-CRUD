@extends('layout.app')
@include('template/headerNav')




<div class="container">

<div class="text-center h1 mt-5">Mes messages</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Sujet</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>


        </tr>
    </thead>
@foreach ($contacts as $contact)
    

<tbody>

<td>{{$contact->nom}}</td>
<td>{{$contact->email}}</td>
<td>{{$contact->sujet}}</td>
<td>{{$contact->message}}</td>

<td>
      <form action="{{route('contact.destroy', $contact->id)}}" method="POST">  
        @csrf
        @method('delete')
        <button type="submit" class="bg-danger btn">Supprimer</button>
    </form>
    </td>

@endforeach
</tbody>

</table>

</div>