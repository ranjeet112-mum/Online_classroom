<?php 
    
include('connect.php');
session_start();

//echo $_GET['comment_in_the_box']; 
//echo $_SESSION['class11'];

//echo $_GET['comment_in_the_box'];
$classcode=$_SESSION['class11'];

$user =$_SESSION['username'];
$mes = $_GET['comment_in_the_box'];
//echo $classcode."<br>";
//echo $user."<br>";
//echo $mes;

    $sqlq = "INSERT into `class_notification`(`classcode`, `notice`,`username`) VALUES ('$classcode' , '$mes','$user')";
        
//mysqli_query($dbcon,$sqlq);
if(mysqli_query($dbcon,$sqlq))
            echo "comment placed!!";

 header("Refresh:3; url=college.php", true ,30);

?>