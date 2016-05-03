@extends('layouts.app')





@section('content')


@include('parts.sidebar')


<div class="col-md-7 home">


<div class="row spaceOnTop">
<div class="col-md-3">
<p class="myH2">{{ $user -> name}}</p>
</div>
<p>some other information</p>

</div>


<hr>


<div class="row">
<div class="col-md-5 col-md-offset-3 spaceOnTop">
<p class="miniTitle text-center">All Your Issues</p>
@foreach($issues as $issue)
<ul>
<li class="list-group-item text-center"><a class="" href="/issue/{{ $issue->id}}">{{ $issue -> title }}</a></li>
</ul>
@endforeach
</div>
</div>


</div>




@include('parts.rightSidebar')






@endsection
