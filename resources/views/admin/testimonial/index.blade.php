@extends('layout.app')
@include('template/headerNav')




<div class="container">

<div class="text-center h1 mt-5">Testimonials list</div>
<a href="{{route('testimonial.create')}}">
    <button class="btn btn-primary text-center m-3">Ajout</button>
    </a>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Fonction</th>
            <th scope="col">Propos</th>
            <th scope="col">Action</th>


        </tr>
    </thead>
@foreach ($testimonials as $testimonial)
    

<tbody>

<td><img class="w-25" src="{{asset('storage/'.$testimonial->img_path)}}" alt=""> </td>
<td>{{$testimonial->nom}}</td>
<td>{{$testimonial->fonction}}</td>
<td>{{$testimonial->propos}}</td>

<td>
      <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="POST">  
        @csrf
        @method('delete')
        <button type="submit" class="bg-danger btn">Supprimer</button>
    </form>
    </td>

@endforeach
</tbody>

</table>


</div>