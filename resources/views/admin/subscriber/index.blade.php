@extends('layout.app')
@include('template.headerNav')

@if (empty($subscriber))

<form action='{{route('subscriber.create')}}' method="post">
@csrf
<div class="container">
<label for="subscriber Link">Veuillez introduire une URL</label>
<input type="text" name="subscriberLink" class="form-control">
<button type="submit">Soumettre la création</button>
</div>
</form>


@else
   
<form action='{{route('subscriber.update')}}' method="post">
    @csrf
    <div class="container">
    <label for="subscriber Link">Veuillez introduire une URL</label>
    <input type="text" value='{{$subscriber->subscriberLink}}' name="subscriberLink" class="form-control">
    <button type="submit">Soumettre la modification</button>
</form>




@endif