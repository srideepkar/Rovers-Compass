<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mno = $_POST['mno'];
$email = $_POST['email'];
$pass = $_POST['pass'];
if(!empty($fname) || !empty($lname) || !empty($mno) || !empty($email) || !empty($pass)) {
	$host = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "rc";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From signup Where email = ? Limit 1";
     $INSERT = "INSERT Into signup (fname, lname, mno, email, pass) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssiss", $fname, $lname, $mno, $email, $pass);
      $stmt->execute();
      echo "<script type=\"text/javascript\">".
        "alert('New record inserted sucessfully');".
        "</script>";
		echo "<script> window.location.assign('home.html'); </script>";
     }
	 else {
		 echo "<script type=\"text/javascript\">".
        "alert('Someone already register using this email');".
        "</script>";
		echo "<script> window.location.assign('main.php'); </script>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>