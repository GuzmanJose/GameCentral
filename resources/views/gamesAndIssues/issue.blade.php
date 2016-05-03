@extends('layouts.app')

@section('content')

<div class="container">



@if($issues)
<div class="row">
<div class="col-md-8 col-md-offset-2 issueHome">
<p class="myH2">{{ $issues -> title }}</p>
<hr>
<div class="col-md-2">
<img src="{{ URL::to('/') }}/{{$issues -> photo }}" class="profileImageIssue" width="80" height="80">	
</div>
<div class="col-md-9">
<p class="text"> {{ $issues -> user_name }}</p>
<br>
<br>
{!! Markdown::convertToHtml($issues -> description) !!}
<br>
<br>
<p class="text">Here is the GitHub URl {{ $issues -> gitHubLink }},<br>
also you can visit {{ $issues -> user_name }} website: {{$issues->website}}</p>
<br>

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
something
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