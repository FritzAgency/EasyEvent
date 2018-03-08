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
								<li> <a href="#"> {{ Auth::user()->first_name }} </a></li> 
							@else
							@endif	
				
<!-- Dashboard only shown to logged in user --> 				
						@if(!Auth::guest())				
       <li> <a href="{{ route('showSelectOrganiser') }}">Dashboard</a> </li> 
		@else
		@endif	
							
                                <li><a href="#">Create Event</a></li>
                                <li><a href="#">Start selling</a></li>
								<li><a href="#">Products/Services</a></li>
								
								@if (!Auth::guest())
									@else
                                <li><a href="/login">Login</a></li>
							@endif
							
							@if(!Auth::guest())
        
                                @else
								<li> <a href="/signup"> Sign up </a> </li> 	
								@endif
								
								<!-- logout button only shown to the logged in users --> 
								@if(!Auth::guest())
									<li> <a href="/logout">Logout</a> 
								 @else
									 @endif
								
									
                            </ul>
                            </div>
                        </nav> 
            </header>
 	
        </div> 
        </div>
    </div> 	
</body>

<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
</li>

</html> 