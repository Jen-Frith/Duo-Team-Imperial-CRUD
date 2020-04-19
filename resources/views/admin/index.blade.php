@extends('layout.app')
@include('template.headerNav')

<h1 class="my-5 pt-5 text-center">Dashboard Admin</h1>

<div class="container">
<a class="mt-5" href="{{asset(route('header'))}}">Header Section</a>
<br>
<a class="mt-5" href="{{asset(route('subscriber'))}}">Subscriber Section</a>
<br>
<a class="mt-5" href="{{asset(route('service'))}}">Services Section</a>
<br>
<a class="mt-5" href="{{asset(route('testimonial.index'))}}">Testimonials Section</a>
<br>
<a class="mt-5" href="{{asset(route('contact.index'))}}">Messages Section</a>




    {{-- <a href="{{route('header')}}" class="d-block">Dashboard Header</a> --}}
    <a href="{{route('about')}}" class="d-block">Dashboard About</a>
    <a href="{{route('portfolio.index')}}" class="d-block">Dashboard Portfolio</a>
    <a href="{{route('team.index')}}" class="d-block">Dashboard Team</a>

</div>