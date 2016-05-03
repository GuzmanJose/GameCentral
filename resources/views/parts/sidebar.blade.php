



      

<div class="col-md-2 sidenav">
		
<div class="row">
<div class="col-md-12 center-block">

@if (count($avatars) > 0)
@foreach ($avatars as $avatar)
<img src="{{ $avatar -> profilePicture }}" alt="..." class="profileImage center spaceOnTop" width="100" height="100">

</div>
</div>	

<div class="row">
<div class="col-md-12 center-block">
<hr>
{{ $avatar -> nickname}}<br>
<hr>
{{ $avatar -> description}}<br>
<hr>
{{ $avatar -> optradio}}<br>
<hr>
@endforeach

@else 	
<ul class="nav nav-pills nav-stacked">
<li class="center"><a href="{{ url('avatar')}}">Create Avatar</a></li>
</ul>	
@endif


</div>
</div>	
	






			



<ul class="nav nav-pills nav-stacked">
<li class="center"><a href="{{ url('allUsers') }}">All Users</a></li>
</ul>
</div>


 


