<? 
	session_start();
	
	include("connection.php");
	
	$query="SELECT diary FROM Users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link,$query);
	
	$row = mysqli_fetch_array($result);
	
	$diary=$row['diary'];


	
 ?>
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
margin-top:80px;
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
		<div class="navbar-header pull-left">
		
		
		<a class="navbar-brand" href="#">Secret Diary</a>
		
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="pull-right" id="bs-example-navbar-collapse-1">
		<ul class="navbar-nav nav pull-right">
			<li><a href="index.php?logout=1">Log Out</a></li>
		</ul>

	</div>
	</div>
	
	</nav>
	<div class="container contentContainer" id="topContainer">
	 <div class="row">
		<div class="col-md-6 col-md-offset-3" id="marginRow">
			<textarea class="form-control"><?php echo $diary; ?></textarea>
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
 $("textarea").css("height",$(window).height()-120);
 $("textarea").keyup(function(){
	$.post("updatediary.php",{diary:$("textarea").val()});
 });
 </script>
 </body>
</html>