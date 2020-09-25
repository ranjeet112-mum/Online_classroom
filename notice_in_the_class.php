<?php 
    
include('connect.php');
session_start();

//echo $_GET['comment_in_the_box']; 
//echo $_SESSION['class11'];

$user =$_SESSION['username'];
$mes = $_GET['comment_in_the_box'];

    $sqlq = "INSERT into `{$_SESSION['class11']}_notification`(`username`, `notice`) VALUES ('$user', '$mes')";
        if(mysqli_query($dbcon,$sqlq))
            echo "comment placed!!";

 header("Refresh:3; url=college.php", true ,30);

?>