@extends('layouts.app')

@section('content')

<div class="container">



@if($games)
<div class="row">
<div class="col-md-8 col-md-offset-2 issueHome">
<p class="myH2">{{ $games -> gameTitle}}</p>
<hr>

<div class="col-md-3">
<img src="{{ URL::to('/')}}/{{ $games -> thumbnail}}" class="" width="130" height="130">
</div>

<div class="col-md-9">
<br>
<p class="text">{{$games -> gameDescription}}</p>
<br>
<br>
<p class="text">Game Requirements : {{ $games -> gameRequirements}}</p>
<p class="text"><a href="{{ URL::to('/')}}/{{$games -> zipGame}}" download>Download</a> this game.</p>
<p class="text">Check the source code : {{ $games -> gitHubLink}}</p>
</div>

<div class="row">
<div class="col-md-12 spaceOnTop">
<p class="text center"> This game was developed</p>
<p class="text center">By</p>
<img src="{{ URL::to('/')}}/{{ $games -> photo}}" class="profileImageGame" width="80" height="80">
<p class="subTitle center">{{ $games -> user_name}}</p>
<p class="text center">Find more about {{$games -> user_name}} in : {{$games -> website}}</p>
</div>
</div>
</div>
</div>
@endif


</div>



@endsection	