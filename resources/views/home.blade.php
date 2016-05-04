@extends('layouts.app')



@section('content')

@include('parts.sidebar')

<div class="col-md-7 home">
<div class="row">
<div class="col-md-12">

<p class="title">Home</p>


</div>

<div class="row">

<div class="col-md-8 col-md-offset-2">
<p class="myH2">News</p>	
</div>
</div>


@foreach($users as $user)
<div class="row">
<div class="col-md-8 col-md-offset-2">
<hr>
<p class="text text-center">Please give a warm welcome to :</p> 
<p class="subtitle text-center"><a href="/allUsers/{{ $user->id}}">{{ $user -> name }}</a></p>
</div>	
</div>
@endforeach


@foreach ($games as $game)
@foreach ($game->games as $gameP)
<div class="row">
<div class="col-md-8 col-md-offset-2">
<hr>
<p class="text text-center">Try this new game : </p>
<p class="subtitle text-center"><a class="" href="/game/{{ $gameP->id}}">{{ $gameP -> gameTitle }}</a></p>

<p class="text text-center">By</p>
<p class="text text-center"><strong>{{ $game -> name}}</strong></p>

</div>	
</div>
@endforeach
@endforeach


@foreach ($issues as $issue)
@foreach ($issue->issues as $issueP)

<div class="row">
<div class="col-md-8 col-md-offset-2">
<hr>
<p class="text text-center">Hey!! Somebody needs help:</p>
<p class="subtitle text-center"><a class="" href="/issue/{{ $issueP->id}}">{{ $issueP -> title}}</a></p>

<p class="text text-center">User : <strong>{{ $issue -> name}}</strong></p>


</div>	
</div>
@endforeach
@endforeach



</div>
</div>



@include('parts.rightSidebar')

@endsection
