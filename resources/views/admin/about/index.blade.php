@extends('layout.app')

@include('template.headerNav')

<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($about))
    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Titre :</label>
            <input type="text" name="titre" id="" >
        </div>

        <div>
            <label for=""  class="w-25">Description1 :</label>
            <input type="text" name="description1" id="" >
        </div>

        <div>
            <label for=""  class="w-25">Titre2 :</label>
            <input type="text" name="titre2" id="" >
        </div>

        <div>
            <label for=""  class="w-25">Description2 :</label>
            <textarea name="description2" id="" cols="30" rows="10"></textarea>
        </div>

        <div >
            <label for=""  class="w-25">Image :</label>
            <input type="file" name="img" id="">
        </div>

        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($about))
    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Titre :</label>
            <input type="text" name="titre" id="" value="{{$about->section_title}}">
        </div>

        <div>
            <label for=""  class="w-25">Description1 :</label>
            <input type="text" name="description1" id="" value="{{$about->section_description}}">
        </div>

        <div>
            <label for=""  class="w-25">Titre2 :</label>
            <input type="text" name="titre2" id="" value="{{$about->about_title}}">
        </div>

        <div>
            <label for=""  class="w-25">Description2 :</label>
            <textarea name="description2" id="" cols="30" rows="10">{{$about->about_text}}</textarea>
        </div>

        <div >
            <label for=""  class="w-25">Image :</label>
            <input type="file" name="img" id="">
            <img src="{{asset('storage/' .$about->img_path)}}" alt="" class="w-100">
        </div>

        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>