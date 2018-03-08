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
           <div class="row">
        <div class="col-md-7 col-md-offset-2">
            {!! Form::open(array('url' => 'signup', 'class' => 'panel')) !!}
            <div class="panel-body">
                <!--div class="logo">
                   {!! HTML::image('assets/images/logo-dark.png') !!}
                </div-->
                <!--h2>Sign up</h2-->

               <!-- @if(Input::get('first_run'))
                    <div class="alert alert-info">
                        You're almost there. Just create a user account and you're ready to go.
                    </div>
                @endif --> 

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
                            {!! Form::label('first_name', 'First Name', ['class' => 'control-label required']) !!}
                            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                            @if($errors->has('first_name'))
                                <p class="help-block">{{ $errors->first('first_name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
                            {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                            @if($errors->has('last_name'))
                                <p class="help-block">{{ $errors->first('last_name') }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                    {!! Form::label('email', 'Email', ['class' => 'control-label required']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    @if($errors->has('email'))
                        <p class="help-block">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                    {!! Form::label('password', 'Password', ['class' => 'control-label required']) !!}
                    {!! Form::password('password',  ['class' => 'form-control']) !!}
                    @if($errors->has('password'))
                        <p class="help-block">{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                    {!! Form::label('password_confirmation', 'Password again', ['class' => 'control-label required']) !!}
                    {!! Form::password('password_confirmation',  ['class' => 'form-control']) !!}
                    @if($errors->has('password_confirmation'))
                        <p class="help-block">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                
                <div class="form-group {{ ($errors->has('terms_agreed')) ? 'has-error' : '' }}">
                    <div class="checkbox custom-checkbox">
                        By Clicking on Submit you agreed to our <a href="#">Terms and Condition</a> 
                    </div>
                </div>
                

                <div class="form-group ">
                   {!! Form::submit('Sign Up', array('class'=>"btn btn-block btn-success")) !!}
                </div>

                
                    <div class="signup">
                        <span>Already have account? <a class="semibold" href="/login">Sign In</a></span>
                    </div>
                
            </div>
            {!! Form::close() !!}
        </div>
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