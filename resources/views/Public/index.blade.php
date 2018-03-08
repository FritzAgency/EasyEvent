<!doctype html>

<html>

<head>

<title> Easy Events </title> 

</head> 

<body>
    <header>
        
    </header>

<h1> Homepage1 </h1> 

<a href="#CreateEvent"> Create Event </a>  </br> 

<a href="/signup" > Signup </a> </br> 

@if (!Auth::guest())  
<a href="{{ route('showSelectOrganiser') }}">Dashboard</a>
@else
<h1> <a href="/login"> Login </a> </h1>
@endif

@if(!Auth::guest())
<a href="{{ route ('logout')}}"> 
@else
@endif	
	
</body> 


</html> 