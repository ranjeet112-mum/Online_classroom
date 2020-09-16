<?php
    
    include('connect.php');
    
        if(session_start())
        {
            $_SESSION['username']=$_POST['username'];
        }
        else{
            echo " err";
        }
        
        $username=$_POST['username'];
        
        $password=$_POST['password'];
        
    $sqlq= "SELECT password FROM registration WHERE username='$username' AND password='$password'";
        
        $sqldata= mysqli_query($dbcon,$sqlq) or die(mysqli_error($dbcon));
        
       


        if(mysqli_num_rows($sqldata)>0)
        {
            clearstatcache();
            header("location:college.php");
        }
        else
        {
            echo "Wrong credentials";
            clearstatcache();
            header("location:index.php");
        }
//echo "test";
?>