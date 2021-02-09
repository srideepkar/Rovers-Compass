<?php
	$username=$_POST['login'];
	$password=$_POST['password'];
	
	
	$myConnection = mysqli_connect("localhost","root","","rc");

	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($myConnection,$username);
	$password = mysqli_real_escape_string($myConnection,$password);
	
	 
	
	$result = mysqli_query($myConnection,"select * from signup where email='$username' and pass = '$password'")
					or die(mysqli_error($myConnection));
	$row = mysqli_num_rows($result);
	if($row == 1){
		$match = 1;
	}
	else
	{
		$match = 0;
	}
	
	
	if($match > 0){
		$msg = 'Login Complete! Thanks';
		echo "<script type=\"text/javascript\">".
        "alert('LogIn Successful');".
        "</script>";
		echo "<script> window.location.assign('home.html'); </script>";
	}
	else{
		echo "<script>"."alert('LogIn Failed');"."</script>";
		echo "<script> window.location.assign('main.php'); </script>";
	}
?>