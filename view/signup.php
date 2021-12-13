<!DOCTYPE html>
<html>
<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../css/style(login_reg).css">
</head>

<body>

     <form action="../control/signup-check.php" method="post">

          <h1>SIGN UP</h1>
          <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>User phone Number</label>
          <?php if (isset($_GET['unumber'])) { ?>
               <input type="number" 
                      name="unumber" 
                      placeholder="User Phone Number"
                      value="<?php echo $_GET['unumber']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="unumber" 
                      placeholder="User Phone Number"><br>
          <?php }?>


          <label>Password</label>
          <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

          <button type="submit">Sign Up</button>
          <a href="loginform.php" class="ca">Already have an account?</a>

     </form>
     
</body>
</html>