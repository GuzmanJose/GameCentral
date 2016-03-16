@extends('layouts.app')

@section('content')

                @if (count($avatars) > 0)
                <h2 class="title center cool">Avatar</h2>
                @foreach ($avatars as $avatar)
                        <h5>Nickname</h5>
                        <li><h3>{{ $avatar->nickname}}</h3></li>
                        <h5>Description</h5>
                        <li><h3>{{ $avatar->description}}</h3></li>
                        <h5>Gender</h5>
                        <li><h3>{{ $avatar->optradio}}</h3></li>
                        
                @endforeach
                @else       
                <a href="/avatar">Create Avatar</a>  
                @endif    



@endsection
