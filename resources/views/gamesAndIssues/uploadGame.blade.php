@extends('layouts.app')

@section('content')

<div class="myH2">Upload your Game</div>


           
               
        <div class="spaceOnTop">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/game') }}" enctype="multipart/form-data">


            
            <div class="form-group">
                <label class="col-md-4 control-label">Game Title</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Title" name="gameTitle">
                </div>
            </div>
 			
            <div class="form-group">
            <label class="col-md-4 control-label">Describe your Game:</label>
            <div class="col-md-5">
				<textarea class="form-control" rows="6" placeholder="Accurate description of your game" name="gameDescription"></textarea>
            </div>
            
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Github link :</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Show us the code!!" name="gitHubLink">
                </div>
            </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Game link:</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="It's online??" name="gameLink">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Zip Game:</label>

                <div class="col-md-5">
                    <input type="file" name="zipGame">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Thumbnail:</label>

                <div class="col-md-5">
                    <input type="file" name="thumbnail">
                </div>
            </div>


            <div class="form-group">
            <label class="col-md-4 control-label">Requirements:</label>
            <div class="col-md-5">
                <textarea class="form-control" rows="6" placeholder="What do we need to play it" name="gameRequirements"></textarea>
            </div>
            
            </div>
              

            <div class="form-group">
                <label class="col-md-4 control-label">Website :</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="More about yourself (optional)" name="gameWebsite">
                </div>
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