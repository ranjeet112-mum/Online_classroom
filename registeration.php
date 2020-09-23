<?php

    include('connect.php');
    session_start();

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
            
            $sql1="CREATE TABLE `classroom`.`{$username}_created` ( `classcode` VARCHAR(20) NOT NULL , `classname` VARCHAR(20) NOT NULL ) ENGINE = InnoDB;";
            $sql2="CREATE TABLE `classroom`.`{$username}_joined` ( `classcode` VARCHAR(20) NOT NULL,
            `classname` VARCHAR(20) NOT NULL,
            `creater` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
            mysqli_query($dbcon,$sql1);
                
            mysqli_query($dbcon,$sql2);
                

        // redirect to home page of the user!!
            clearstatcache();
            header("location:college.php");
        
        
        }
        
        
    }
?>
