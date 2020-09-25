<?php
include('connect.php');
session_start();

//echo $_SESSION['class11']."<br>";
//echo $_SESSION['username'];

$user=$_SESSION['username'];
$clscode = $_SESSION['class11'];
$sqlq1= "DELETE FROM `{$_SESSION['class11']}_stud_details` WHERE username='$user'";
$sqlq2 = "DELETE FROM `{$user}_joined` WHERE classcode='$clscode'";

    if(mysqli_query($dbcon,$sqlq1))
        mysqli_query($dbcon,$sqlq2);
    else{
        echo "error unenrolling";
    }
    header("Refresh:3; url=college.php", true ,30);

?>