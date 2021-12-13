<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$number = Validate($_POST['unumber']);


	if (empty($uname)) {
		header("Location: ../view/signup.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../view/signup.php?error=Password is required");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: ../view/signup.php?error=Re Password is required");
	    exit();
	}else if(empty($number)){
		header("Location: ../view/signup.php?error=Phone number is required");
	    exit();
	}
	else if(empty($name)){
        header("Location: ../view/signup.php?error=Name is required");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: ../view/signup.php?error=The confirmation password  does not match");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../view/signup.php?error=The username is taken try another");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, number) VALUES('$uname', '$pass', '$name', $number)";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			
           	 header("Location: ../view/loginform.php");
	         exit();
           }else {
	           	header("Location: ../view/signup.php?error=unknown error occurred");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../view/signup.php");
	exit();
}
?>