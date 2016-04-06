@extends('layouts.app')

@section('content')

@if($mainUser)
 <h1>{{ $mainUser -> name}}</h1>
@endif



   <hr>
   {!! Form::open() !!}
<div class="form-group">
{!! Form::label('title', 'Title:')!!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('body', 'Comment:')!!}
{!! Form::textarea('body', null, ['class' => 'form-control']) !!} 
</div>

<div class="form-group">
<div class="col-md-3 col-md-offset-5">
{!! Form::submit('Comment',['class' => 'btn btn-primary form-control']) !!}
</div>
</div>


{!! Form::close() !!}

<br>
<br>
<br>
<br>

	@foreach ($comments as $comment)
	<div>
	   <h3>{{ $comment->title }}</h3>
	   <h4>{{ $comment->body }}</h4>
	  
	   <hr>
	</div> 
	@endforeach







@endsection