@extends('layouts.app')

@section('content')


<h1>Comments</h1>
<hr>
@foreach ($comments as $comment)
  
   <h3>{{ $comment->title }}</h3>
   <h5>{{ $comment->body }}</h5>
   <h4><a href="#">{{ $comment->user_id }}</a></h4>
   <hr>
@endforeach




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

@endsection