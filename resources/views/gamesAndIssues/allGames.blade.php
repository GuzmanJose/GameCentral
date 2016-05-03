@extends('layouts.app')

@section('content')

@include('parts.sidebar')

<div class="col-md-7 home">
<div class="row">
<div class="col-md-12">

<p class="myH2">All Games</p>


<div class="row spaceOnTop">

<div class="col-md-4">search tags</div>

<div class="col-md-4"></div>

<div class="col-md-4"> <a href="{{ url('/uploadGame')}}" class="btn btn-primary btn-success"><i class="fa fa-btn fa-gamepad"></i>Upload Game</a></div>	


</div>

<div class="row spaceOnTop">

<div class="col-md-3">column tags</div>

<div class="col-md-9">
@foreach($games as $game)
<li class="list-group-item center"><a href="/game/{{ $game->id}}">{{ $game -> gameTitle }}</a></li>
@endforeach	
</div>


</div>






</div>
</div>
<br>
</div>

@include('parts.rightSidebar')


@endsection