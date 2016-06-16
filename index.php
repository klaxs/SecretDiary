<? include("login.php") ?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <title>Secret Diary Web App</title>

 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
 <style>
 .navbar-brand{
 font-size:1.8em;
 }
.img{
float:left;
margin-top:14px;
position:relative;
}
#topContainer{
background-image:url("sd.jpg");
height:600px;
width:100%;
background-size:cover;
}
#marginRow{
margin-top:100px;
text-align:center;
}
#marginRow h1{
font-size:400%;
}
.bold{
font-size:1.5em;
}
.marginTop{
margin-top:30px;
}
.center{
text-align:center;
}
.title{
margin-top:100px;
font-size:300%;
}
#footer{
background-color:#80D1FB;
padding-top:70px;
width:100%;
}
.marginBottom{
margin-bottom:30px;
}
.appimage{
width:250px;
}
.white{
	color:white;
}
 </style>
 </head>
 
 <body data-spy="scroll" data-target=".collapse">
	<nav class="navbar navbar-default navbar-fixed-top">
	 <div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		 <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		</button>
		
		<a class="navbar-brand" href="#">Secret Diary</a>
		
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
	<form class="navbar-form navbar-right" method="POST">
        <div class="form-group">
          <input type="email" name="loginemail" class="form-control" placeholder="Email" value="<?php echo addslashes($_POST['email']); ?>"/>
        </div>
		<div class="form-group">
          <input type="password" name="loginpassword" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>"/>
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Log In"/>
      </form>
	</div>
	</div>
	
	</nav>
	<div class="container contentContainer" id="topContainer">
	 <div class="row">
		<div class="col-md-6 col-md-offset-3" id="marginRow">
		<h1 class="marginTop white">Secret Diary Web App</h1>
		<p class="lead white">Your Own private diary, with you wherever you go.</P>
		
		<?php
			if($error){
				echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
			
			
			}
if($message){
				echo '<div class="alert alert-success">'.addslashes($message).'</div>';
			
			
			}

		
		
		?>
		
		
		
		<p class="bold marginTop white">Interested? Sign Up Below!</p>
		
	<form class="marginTop" method="POST">
	<div class="form-group">
		<label for="email" class="white">Email Address</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail" 
		placeholder="Email" value="<?php echo addslashes($_POST['email']); ?>" />
	</div> 
	<div class="form-group">
		<label for="password" class="white">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputEmail" 
		placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
	</div> 
	<button type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">Submit</button>
	</form>
	</div>
	</div>
	 </div>
	
	
	
	
	
	
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files
as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script>
 $(".contentContainer").css("min-height",$(window).height());
 
 </script>
 </body>
</html>