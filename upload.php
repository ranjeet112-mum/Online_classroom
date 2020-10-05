<?php
include('connect.php');
session_start();

if(isset($_POST['submit']))
{
    $usr = $_SESSION['username'];
    $class = $_SESSION['class11'];
    $notinum = $_SESSION['notice_num'];
    

    
    $name = $_FILES['files']['name'];
    $type = $_FILES['files']['type'];
    $data = file_get_contents($_FILES['files']['tmp_name']);

    $stmt = $dbcon->prepare("INSERT INTO `files`( `name`, `mime`, `data`, `class`, `username`, `notice_num`) VALUES(?,?,?,?,?,?)");
    $stmt->bind_Param('ssssss',$name,$type,$data,$class,$usr,$notinum);

    
    if($stmt->execute())
    {echo "successfully uploaded";}
    
    header("Refresh:3; url=college.php", true ,30);

    
    
    
}


?>