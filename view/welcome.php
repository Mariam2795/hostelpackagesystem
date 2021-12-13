<?php 
session_start();

if (isset($_SESSION['name'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/style(login_reg).css">
</head>

<body>

     <h1>Hello, <?php echo $_SESSION['name']; ?><br><br>Cordially Welcoming you to our Pritylata Hostel🌺</h1><br>
     
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
          <a href="bookingform.php">Packages</a>
          <a href="user_booked_packages.php">Bookings</a>
        <a href="../control/logout.php">Logout</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: loginform.php");
     exit();
}
?>