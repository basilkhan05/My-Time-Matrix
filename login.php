<?php

		session_start();

		if ($_GET["logout"]==1 AND $_SESSION['id']) {session_destroy();

			$message = "You have been logged out. Have a nice day! :)" ;

		}

	if ($_POST['submit']=='Sign Up') {   // checks what happens when submit button is hit
		# code...

			if (!$_POST['email']) $error.="<br/>Please Enter your Email";

				else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br/>Please enter a valid email";

			if (!$_POST['password']) $error.="<br/>Please Enter your password";

				else{

				if(strlen($_POST['password'])<8) $error.="<br/>Please enter a password with at least 8 Characters";
				if (!preg_match('`[A-Z]`',$_POST['password'])) $error.="<br/>Please enter a password with characters A-Z";
					# code...
				}
				# code...

			if ($error) $error = "There were error(s) in your signup details:".$error;
				else{

					include("connection.php");

					if (mysqli_connect_error()) {

						die("Could not connect to database");
						# code...
					}

					$query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' ";



					 $result = mysqli_query($link, $query); #{

						if ( $results = mysqli_num_rows($result)) $error = "That email address is already taken. Do you want to log in?";
							else {

								$query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
								
										mysqli_query($link, $query);

										echo "You've been signed up!";

										$_SESSION['id']=mysqli_insert_id($link); # connection referr
										

											header("Location:mainpage.php"); # has to be fore any HTML  - not to worry in this one






										
							}
						#
						#	echo "this user already exists";

						# else {

							#echo "SUCCESS!";
						#}

						
						# code...
					#}

					

				}
			}


	if ($_POST['submit']=='Log In') { 

		include("connection.php");

					if (mysqli_connect_error()) {

						die("Could not connect to database");
						# code...
					}


					$query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' ";



					 $result = mysqli_query($link, $query); #{ check username and password

						if ( $results = mysqli_fetch_array($result)) {

							$_SESSION['id']=$results['id'];

										header("Location:mainpage.php");
							
							}

							else {

								$error = "We could not find a user with the email and password";

							}



	}





			

?>