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
    <div class="container">   
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
        <li> <a href="{{ route('showSelectOrganiser') }}">Dashboard</a> </li> 
         <li><a href="#">Ticket</a></li>
         <li><a href="#">Account Setting</a></li>
       </ul>
</li>
							@else
							@endif	
				

							@if(Auth::guest())
                                <li><a href="#" data-toggle="modal" data-target="#myModal">Create Event</a></li>
							@else
								 <li><a href="#">Create Event</a></li>
							 @endif
							 
							 @if(Auth::guest())
                                <li><a href="#" data-toggle="modal" data-target="#myModal">Start selling</a></li>
							@else
								<li><a href="#">Start selling</a></li>
							@endif
								
								<li><a href="#">Products/Services</a></li>
								
								@if (!Auth::guest())
									@else
                                <li><a href="/login" data-toggle="modal" data-target="#loginModal">Login</a></li>
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
          <h4><span class="glyphicon glyphicon-lock"></span> Signup</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="First Name"><span class="glyphicon glyphicon-user"></span> First Name</label>
              <input type="text" class="form-control" id="" placeholder="Enter your First Name">
            </div>
			
			<div class="form-group">
              <label for=""><span class="glyphicon glyphicon-user"></span> Last Name</label>
              <input type="text" class="form-control" id="" placeholder="Enter your Last Name">
            </div>
			
			<div class="form-group">
              <label for="Email"><span class="glyphicon glyphicon-user"></span>Email</label>
              <input type="text" class="form-control" id="" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
              <button type="submit" class="btn btn-success btn-block">Signup</button>
          </form>
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