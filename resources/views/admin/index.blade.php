@extends('layout.app')
@include('template.headerNav')

<h1 class="my-5 pt-5 text-center">Dashboard Admin</h1>


<a class="mt-5" href="{{asset(route('header'))}}">Header Section</a>
<br>
<a class="mt-5" href="{{asset(route('subscriber'))}}">Subscriber Section</a>
<br>
<a class="mt-5" href="{{asset(route('service'))}}">Services Section</a>
<br>
<a class="mt-5" href="{{asset(route('testimonial.index'))}}">Testimonials Section</a>
<br>
<a class="mt-5" href="{{asset(route('contact.index'))}}">Messages Section</a>