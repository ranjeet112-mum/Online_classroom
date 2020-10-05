<?php

include('connect.php');
session_start();

$classname = $_POST['classname'];
$classcode = $_POST['classcode'];
$creator = $_SESSION['username'];


$sqlquery = "Select code from list_of_class where code='$classcode'";

if(mysqli_num_rows(mysqli_query($dbcon,$sqlquery)) > 0)
{
    echo "Class code already exist!!";
        header("Refresh:3; url=create_class.php", true ,30);
}
else{
   
    $sqlq = "INSERT INTO `list_of_class`(`code`, `cname`, `creater`) VALUES ('$classcode','$classname','$creator');";
    if(mysqli_query($dbcon,$sqlq))
    {

        
         echo "Class created successfully";
    }

    header("Refresh:3; url=college.php", true ,30);
}


?>
