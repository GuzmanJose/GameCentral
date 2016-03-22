@extends('layouts.app')

@section('content')

   <h1> {{ $user -> name}} </h1> 

   @foreach ($user -> comments as $comment)
       <h3>{{ $comment->title }}</h3>
	   <h5>{{ $comment->body }}</h5>
	   
	   <hr>
   @endforeach


@endsection