<?php   include("login.php")   ?>


<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>My Time Matrix</title>
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></
script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/
respond.min.js"></script>
 <![endif]-->

 <style>

 .navbar-brand {
 	 	 font-size:1.8em;
 }
 	 	
 #topContainer {
 	 	 background-image:url("img/unsplash.jpg");
 	 	 height:400px;
 	 	 width:100%;
 	 	 background-size:cover;
 	 	 }
 	 	 	
 #topRow {
 	 	 margin-top:100px;
 	 	 color: white;
 	 	 text-align:center;
 	 	 background-color: rgba(0, 0, 0, 0.25);
 	 	 border-radius: 25px;
 	 	 padding-bottom: 20px;
 }
 	 	
 #topRow h1 {
 	 	 font-size:300%;
 }
 	 	
 #emailSignup {
 	 	 margin-top:50px;
 }
 	 	
 .bold {
 	 	 font-weight:bold;
 }
 	 	
 .marginTop {
 	 	 margin-top:30px;
 }
 	 	
 .center {
 	 	 text-align:center;
 }
 	 	
 .title {
 	 	 margin-top:100px;
 	 	 font-size:300%;
 }
 	 	
 #footer {
 	 	 background-color:#B0D1FB;
 	 	 padding-top:70px;
 	 	 width:100%;
 }
 	 	
 .marginBottom {
 	 	 margin-bottom:30px;
 }
 .appstoreImage {
 	 	 width:250px;
 }
 </style>
 </head>
 <body>
 
 <div class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 	 	 <div class="navbar-header">
 	 	 	 <button class="navbar-toggle" data-toggle="collapse" datatarget=".navbar-collapse">
 	 	 	 	 <span class="icon-bar"></span>
 	 	 	 	 <span class="icon-bar"></span>
 	 	 	 	 <span class="icon-bar"></span>
 	 	 	 </button>
 	 	 	 <a class="navbar-brand">My Time Matrix</a>
 	 	 </div>
 	 	 	
 	 	 <div class="collapse navbar-collapse">
 	 	 	 
 	 	 	 <form class="navbar-form navbar-right" method="post">
 	 	 	 	 <div class="form-group">
 	 	 	 	 	 <input class="form-control" type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['loginemail']); ?>" placeholder="Your Email"/>
 	 	 	 	 </div>
 	 	 	 	 <div class="form-group">
 	 	 	 	 	 <input class="form-control" type="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST['loginpassword']); ?>" placeholder="Password"/>
 	 	 	 	 </div>
 	 	 	 	 <input id="login" class="btn btn-success" type="submit" name="submit" value="Log In"/>
 	 	 	 </form>
 	 	 	 	
 	 	 </div>
			 </div>
			 </div>






 <div class="container contentContainer" id="topContainer">

 <div class="row">
 	 	
 	 	 <div class="col-md-6 col-md-offset-3" id="topRow">

 	 	 	<h1 class="marginTop">My Time Matrix</h1>

				<p class="lead">Organize your To Do list in a time matrix <br>
				for extraordinary productivity</p>


				<p> Interested? Sign up below.</p>



				<?php

					if ($error) {
						
						echo '<div  class="alert alert-danger">'.addslashes($error).'.</div>';

					}


					if ($message) {
						
						echo '<div  class="alert alert-success">'.addslashes($message).'.</div>';

					}



				?>

				
 	 	 <form method="post">

		<div class="form-group center">

		<label for="email">Email</label>

	<input class="form-control" type="email" name="email" id="email" placeholder="Your Email" value="<?php echo addslashes($_POST['email']); ?>"/>

	</div>


	<div class="form-group center">

	<label for="email">Password</label> 
	<input class="form-control" type="password" name="password"  placeholder="Password"  value="<?php echo addslashes($_POST['password']); ?>"/>

	</div>

<input id="signup" class="btn btn-success btn-lg marginTop" type="submit" name="submit" value="Sign Up"/>


</form>
 	 	 	
 	 	 	
				</br><p> Inspired by the book </br><a style="color:#7fff7f" href="http://www.amazon.ca/The-Choices-Path-Extraordinary-Productivity/dp/1476711712" target="_blank">"The 5 Choices: The Path to Extraordinary Productivity"</a> </p>

 	 	 	
 	 	 </div>
 	 	
 	 	
 </div>

 </div>


<!-- -*************************************************-->







 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as
needed -->
 <script src="js/bootstrap.min.js"></script>

 <script>

 $(".contentContainer").css("min-height",$(window).height());
 
 </script>

</body>
</html>


