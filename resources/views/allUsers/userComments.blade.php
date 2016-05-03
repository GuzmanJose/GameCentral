@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
<div class="col-md-5 col-md-offset-3">

<div class="row coolBox">

<div class="col-md-3">

@if($avatar)
@foreach ($avatar as $avatar)
<img src="{{ URL::to('/') }}/{{$avatar -> profilePicture}}" class="allUser" width="100" height="100">

</div>

<div class="col-md-8">
@if($mainUser)
 <h1 class="subtitle">{{ $mainUser -> name}}</h1>
@endif
<hr>

<p class="text">AKA : {{ $avatar -> nickname }} </p>
<p class="text">BIO : {{ $avatar -> description }} </p>
@endforeach
@endif

</div>

</div>

<br>
<br>
<br>
<br>

	

@foreach ($comments as $comment)
<div class="row">
<div class="col-md-4">
<img src="{{ URL::to('/') }}/{{$comment -> photo }}" class="profileImageComment" width="70" height="70">
<a href="/allUsers/{{ $comment->user_id}}"><p class="text spaceOnTop"> {{ $comment -> user_name }} </p></a>
</div>

<div class="col-md-8">
<p>{{ $comment->body }}</p>

</div>
</div> 
<hr>
@endforeach


<br>
<br>


<div class="row spaceOnTop">
<div class="col-md-11 col-md-offset-1">


{!! Form::open() !!}

<div class="form-group">
{!! Form::label('body', 'Comment:')!!}
{!! Form::textarea('body', null, ['class' => 'form-control','rows' => 3]) !!} 
</div>

<div class="form-group">
<div class="col-md-5 col-md-offset-8">
{!! Form::submit('Comment',['class' => 'btn btn-primary form-control']) !!}
</div>
</div>

{!! Form::close() !!}

</div>
</div>



</div>
</div>

</div>



@endsection