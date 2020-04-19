@extends('layout.app')
@include('template.headerNav')

@if (empty($header))
    


<form action='{{route('header.create')}}' method="post">
@csrf


    <div >
    <input name="img_path" type="file">
</div>



<button type="submit">Créer</button>
</form>




    
@else
    



<form action='{{route('header.update')}}' method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    
    
        <div >
        <input name="img_path" type="file">
    </div>
    
    
    
    <button type="submit">Modifier</button>
    </form>
    
    
    @endif