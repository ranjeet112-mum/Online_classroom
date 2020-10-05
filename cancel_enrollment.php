<?php
include('connect.php');
session_start();

//echo $_SESSION['class11']."<br>";
//echo $_SESSION['username'];

$user=$_SESSION['username'];
$clscode = $_SESSION['class11'];
$sqlq1= "DELETE FROM `student_class_rec` WHERE username='$user' AND classcode='$clscode'";


//$sqlq2 = "DELETE FROM `{$user}_joined` WHERE classcode='$clscode'";

    if(mysqli_query($dbcon,$sqlq1))
        echo "successfully unenrolled";
    
    header("Refresh:3; url=college.php", true ,30);

?>