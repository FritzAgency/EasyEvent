<!doctype html>

<html>

<head>

<title> Easy Events </title> 
<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />


</head> 

<body>

<div class="container-fluid">  

<div class="row"> 
<div class="col-md-2">
Easy Events. 
</div> 

<div class="col-md-offset-2 col-md-2"> 
@if(!Auth::guest())
<a href="#">{{ Auth::user()->first_name }}</a> 
@else
@endif 
</div> 

<div class="col-md-2">
<a href="/signup"> Create Event </a>  </br> 
</div> 

<div class="col-md-2">
<a href="#"> Start Selling </a> 

</div> 



<div class="col-md-2">
@if (!Auth::guest())  
<a href="{{ route('showSelectOrganiser') }}">Dashboard</a>
@else
<h1> <a href="{{ route('login')}}"> Login </a> </h1>
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
</body> 


</html> 