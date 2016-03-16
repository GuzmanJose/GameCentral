<div class="container-fluid">

  <div class="row content">
     
    <div class="col-sm-2 sidenav">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ url('allUsers') }}">All Users</a></li>
        <li><a href="{{ url('/comments') }}">Comments</a></li>
        <li><a href="#section4">Games</a></li>
      </ul>
    </div>

    <div class="col-sm-9">
      
      
      <div class="row">
        
        <div class="col-sm-10">
        
        @yield('content')

        </div>

            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>