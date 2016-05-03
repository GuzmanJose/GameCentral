@extends('layouts.app')

@section('content')

<div class="myH2">Create your Avatar</div>


           
               
        <div class="spaceOnTop">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}" enctype="multipart/form-data" >
           

            
            <div class="form-group">
                <label class="col-md-4 control-label">Avatar Name</label>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="nickname">
                </div>
            </div>

 
            
            <div class="form-group">
            <label class="col-md-4 control-label">Gender</label>
			<div class="radio col-md-2">
			<label><input type="radio" name="optradio" value="male">Male</label>
			</div>
			<div class="radio col-md-2">
			<label><input type="radio" name="optradio" value="female">Female</label>
			</div>
			<!-- if statement -->
			</div>


            <div class="form-group">
            <label class="col-md-4 control-label">Description:</label>
            <div class="col-md-4">
				<textarea class="form-control" rows="5" name="description"></textarea>
            </div>
            <!-- if statement -->
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label">Profile Picture:</label>
                <input type="file"  name="profilePicture">
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-hand-peace-o"></i>Create
                    </button>
                </div>
            </div>
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
        </div>

    




@endsection