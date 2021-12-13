<?php
session_start();
include "db_conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $schedule = $_POST["bookingDate"];
    if(!empty($schedule)){
        date_default_timezone_set("Asia/Dhaka");
        $date = date("Y-m-d h:i:sa");
        $package = $_POST["PackageName"];
        $sql = "INSERT INTO `booking`(`user_id`, `dateTime`, `package`, `meal`, `schedule`, `status`) VALUES ({$_SESSION['id']},'$date','$package', '$meal', '$schedule','pending');";
        if ($conn->query($sql) === TRUE) {
            
            header("Location: ../view/user_booked_packages.php?success=1");
            exit();
        } else {
            header("Location: ../view/welcome.php?error=something went wrong");
            exit();
            
        }

    }else{
        header("Location: ../view/welcome.php?error=Date required");
        exit();
    }
}

?>