@extends('layouts.app')
               
@section('content')


			
			
			<div class="col-md-4 col-md-offset-4"> 
				<h1 class="center">All Users</h1>

				<ul class="list-group spaceOnTop">
				@foreach ($users as $user)
				<li class="list-group-item center"><a href="/allUsers/{{ $user->id}}">{{$user -> name}}</a></li>
				@endforeach  
				</ul>
			</div>


@endsection