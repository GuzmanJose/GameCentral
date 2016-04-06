@extends('layouts.app')

@section('content')


<h1>Comments</h1>
<hr>
@foreach ($users as $user)
@foreach ($user->comments as $comment)
<div>
   <h3>{{ $comment->title }}</h3>
   <h4>{{ $comment->body }}</h4>
   <h6 class="bottom-right"><a href="/allUsers/{{ $user->id}}">{{ $user->name }}</a></h6>
   <hr>
</div> 
@endforeach
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