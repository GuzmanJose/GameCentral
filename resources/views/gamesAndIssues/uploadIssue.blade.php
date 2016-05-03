@extends('layouts.app')

@section('content')
<div class="container">

<div class="myH2">Upload your Issue</div>


           
               
        <div class="spaceOnTop">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/issue') }}">
         

            
            <div class="form-group">
                <label class="col-md-4 control-label">Your Main Problem</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="What is bugging you" name="title">
                </div>
            </div>

 			<div class="row spaceOnTop">
 			<div class="col-md-3 col-md-offset-4">
             <p class="text subtle"> You can use <a href="https://guides.github.com/features/mastering-markdown/">Markdown</a></p>
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-4 control-label">Describe your problem:</label>
            <div class="col-md-5">
				<textarea class="form-control" rows="12" placeholder="Here is a shoulder to cry on..." name="description"></textarea>
            </div>
            
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Github link :</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Show us the code!!" name="gitHubLink">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Website :</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="More about yourself (optional)" name="website">
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

</div>


@endsection