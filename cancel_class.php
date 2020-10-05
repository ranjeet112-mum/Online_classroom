<?php
include('connect.php');
session_start();

//echo $_SESSION['class11'];
$classcode = $_SESSION['class11'];
$sqlq1 ="DELETE FROM `list_of_class` WHERE code='$classcode'";



$sqlq2 ="DELETE FROM `class_notification` WHERE classcode='$classcode'";



$sqlq3 ="DELETE FROM `student_class_rec` WHERE classcode='$classcode'";


if(mysqli_query($dbcon,$sqlq1) && mysqli_query($dbcon,$sqlq2) && mysqli_query($dbcon,$sqlq3))
    echo "class deleted successfully";


 header("Refresh:3; url=college.php", true ,30);

?>