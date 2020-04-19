@extends ('layout.app')

@include('template.headerNav')

<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>


<div class="container">
    @if (empty($header))
    <form action="{{route('header.create')}}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="img_path" id="">
        <button type="submit">Créer</button>
    </form>
    @else 
    <form action="{{route('header.update')}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="file" name='img_path'>
        <button type="submit">Modifier</button>
    </form>
    @endif
</div>
