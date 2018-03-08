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
                                <li><a href="#">Create Event</a></li>
                                <li><a href="#">Products/Services</a></li>
                                <li><a href="#">Start selling</a></li>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/signup">Signup</a></li>
                            </ul>
                            </div>
                        </nav> 
            </header>


        <div class="col-md-offset-2 col-md-2"> 
         
        </div> 

        <div class="col-md-2">
        <a > Create Event </a>  </br> 
        </div> 

        <div class="col-md-2">
        <a href="#"> Start Selling </a> 

        </div> 



        <div class="col-md-2">
        @if (!Auth::guest())  
        <a href="{{ route('showSelectOrganiser') }}">Dashboard</a>
        @else
        <h1> <a href="/login"> Login </a> </h1>
        @endif
        </div> 

        <div class="col-md-2">
        @if(!Auth::guest())
        <a href="{{ route ('logout')}}"> 
        @else
        @endif	
        </div> 	
        </div> 
        </div>
    </div> 	
</body> 


</html> 