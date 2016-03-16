@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
                
              <div class="title cool">Game Central</div>
              
             
               <div class="col-md-4 col-md-offset-4"> 
              <h2 class="center">BE, One of us</h2>
             
              <ul class="list-group">
              @foreach ($users as $user)
              <li class="list-group-item center">{{$user -> name}}</li>
              @endforeach  
              </ul>
              </div>
            
             
           
        </div>
    </div>
</div>
@endsection 
