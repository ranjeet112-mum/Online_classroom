<?php

    include('connect.php');
    session_start();
//    echo "Here!!";
    $username=$_POST['username'];
    $_SESSION['username']=$_POST['username'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $phone_no=$_POST['phone_no'];
    
    $sqlq="SELECT password FROM registration WHERE username='$username'";
//mysqli_num_rows() take the list created by mysqli_query() and gives us the count;

    if(mysqli_num_rows(mysqli_query($dbcon,$sqlq)) > 0)
    {
        echo "username already exist!!";
        header("Refresh:3; url=register.php", true ,30);
    }
    else{
        $sqlq="INSERT INTO `registration` (`username`, `gmail`, `password`, `phone_no`) VALUES ('$username', '$gmail', '$password', '$phone_no')";
        if(mysqli_query($dbcon,$sqlq))
        {
        
            echo "Registration successfull!!!";
            header("Refresh:3; url=college.php", true ,30);
        
        
        }
        
        
    }
?>
