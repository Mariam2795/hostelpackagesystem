<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>package</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="../css/style(login_reg).css">

</head>

<body>

  <form action="../control/package_booking.php" method="POST">

  <h1>Booking Form</h1>
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
                      value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name">
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name">
          <?php }?>

          <label>User phone Number</label>
          <?php if (isset($_GET['unumber'])) { ?>
               <input type="number" 
                      name="unumber" 
                      placeholder="User Phone Number"
                      value="<?php echo $_GET['unumber']; ?>">
          <?php }else{ ?>
               <input type="number" 
                      name="unumber" 
                      placeholder="User Phone Number">
          <?php }?>

          
          <label>Package</label>
          <?php if (isset($_GET['package'])) { ?>
            <select name="package" id="package">
                <option value="1 day">1 day</option>
                <option value="3 day">3 days</option>
                <option value="7 day">7 days</option>
                <option value="15 day">15 days</option>
                <option value="1 Month">1 Month</option>
            </select>
                      value="<?php echo $_GET['package']; ?>">
          <?php }else{ ?>
            <select name="package" id="package">
                <option value="1 day">1 day</option>
                <option value="3 day">3 days</option>
                <option value="7 day">7 days</option>
                <option value="15 day">15 days</option>
                <option value="1 Month">1 Month</option>
            </select>
          <?php }?>


          <label>Meal</label>
          <?php if (isset($_GET['meal'])) { ?>
            <select name="meal" id="meal">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                      value="<?php echo $_GET['meal']; ?>">
          <?php }else{ ?>
            <select name="meal" id="meal">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select><br>
          <?php }?>


          <label>Password</label>
          <input type="password" 
                 name="password" 
                 placeholder="Password">

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password">

          <a href="#" class="book-btn" id="button-style" data-bs-toggle="modal" data-bs-target="#exampleModal">Confirm</a>
          <a href="welcome.php" class="ca">Cancel Booking</a>

 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Booking Package</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="mb-3">
                        <input
                          name="PackageName"
                          type="text"
                          class="form-control"
                          
                          readonly="readonly"
                          value="Subhanbag, Dhanmondi"
                          />
                        <label
                        for="exampleInputDate"
                        class="form-label"
                        >Date</label
                          >
                          <input
                          name="bookingDate"
                          type="date"
                          class="form-control"
                          id="bookingDate"
                          />
                      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>