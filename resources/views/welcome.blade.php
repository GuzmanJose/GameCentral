@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
<div class="col-md-10 col-md-offset-1">
<p class="title cool">Game Central</p>


<div class="row">
<div class="col-md-4 col-md-offset-4"> 
<h2 class="center">Check out our new Games</h2>
</div>
</div>

<div class="row">


@foreach ($games as $game)
@foreach ($game->games as $gameP)
<div class="col-md-3">
<p class="coverName text-center">{{ $gameP -> gameTitle }}</p> 
<img src="{{ URL::to('/')}}/{{ $gameP -> thumbnail}}" class="profileImageCover" width="200" height="200">
</div>
@endforeach
@endforeach  


</div>



</div>
</div>
</div>
@endsection 
