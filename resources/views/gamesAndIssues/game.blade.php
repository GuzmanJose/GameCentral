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
<hr>
<p class="text">Game Requirements : {{ $games -> gameRequirements}}</p>
<p class="text"><a href="{{ URL::to('/')}}/{{$games -> zipGame}}" download>Download</a> this game.</p>
<p class="text">Check the source code : {{ $games -> gitHubLink}}</p>
</div>

<div class="row">
<div class="col-md-12 spaceOnTop">
<hr>
<p class="text center"> This game was developed</p>
<p class="text center">By</p>
<img src="{{ URL::to('/')}}/{{ $games -> photo}}" class="profileImageGame" width="80" height="80">
<p class="subTitle center">{{ $games -> user_name}}</p>
<p class="text center">Find more about {{$games -> user_name}} in : {{$games -> gameWebsite}}</p>
</div>
</div>
</div>
</div>
@endif

@foreach($comments as $comment)
<div class="row">

<div class="col-md-8 col-md-offset-2 issueHome spaceOnTop">

<div class="col-md-2 spaceOnTop">
<img src="{{ URL::to('/') }}/{{$comment -> photo }}" class="profileImageIssue" width="100" height="100">	
</div>
<div class="col-md-9 spaceOnTop">
<p class="text"> {{ $comment -> user_name }}</p>
<br>
<br>
{!! Markdown::convertToHtml($comment -> body) !!}
<br>
<br>

<br>
<hr>
</div>
</div>

</div>
@endforeach

<div class="row">
<div class="col-md-8 col-md-offset-2 issueHome spaceOnTop">

{!! Form::open() !!}

<div class="form-group spaceOnTop">

{!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Please tell us what you have to say, it support Markdown','rows' => 8]) !!} 
</div>

<div class="form-group">
<div class="col-md-3 col-md-offset-8">
{!! Form::submit('Comment',['class' => 'btn btn-primary form-control']) !!}
</div>
</div>

{!! Form::close() !!}
<br>
<br>
<br>
</div>

</div>


</div>



@endsection	