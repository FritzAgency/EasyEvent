<!doctype html>

<html>

<head>

<title> Easy Events </title> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
    body{
        background-color: grey;
    }
    
    header{
        margin-top: 10px;
    }

</style>
</head> 

<body>
    <div class=container>   
            <header>
                    <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">EasyEvent.com</a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
							<!-- show users first_name when logged in --> 
							@if(!Auth::guest())
								
<li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->first_name }}
       <span class="caret"></span></a>
       <ul class="dropdown-menu">
       <li><a href="{{ route('showSelectOrganiser') }}">Dashboard</a></li>
         <li><a href="#">Tickets</a></li>
         <li><a href="#">Account Settting</a></li>
		 
       </ul>
	   								
							@else
							@endif	
</li>

							@if(Auth::guest())
                                <li><a href="#" data-toggle="modal" data-target="#myModal">Create Event</a></li>
							@else
								                                <li><a href="#" >Create Event</a></li>
															@endif
															
								@if(Auth::guest())							
                                <li><a href="#" data-toggle="modal" data-target="#myModal">Start selling</a></li>
							@else
								<li><a href="#">Start selling</a></li>
							@endif
							
								<li><a href="#">Products/Services</a></li>
								
								@if (!Auth::guest())
									@else
                                <li><a href="/login" data-toggle="modal" data-target="#myModal">Login</a></li>
							@endif
							
							@if(!Auth::guest())
        
                                @else
								<li> <a href="/signup" data-toggle="modal" data-target="#myModal"> Sign up </a> </li> 	
								@endif
								
								<!-- logout button only shown to the logged in users --> 
								@if(!Auth::guest())
									<li> <a href="/logout">Logout</a> 
								 @else
									 @endif
								
									
                            </ul>
                            </div>
                            <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
                        </nav> 
            </header>
 	
        </div> 
        </div>
    </div> 	
</body>



</html> 