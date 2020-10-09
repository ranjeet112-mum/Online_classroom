<?php

    include('connect.php');
    session_start();
    $_SESSION["POST"] = $_POST; 
//    echo "Here!!";
    $username=$_POST['username'];
    $_SESSION['username']=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone_no=$_POST['phone_no'];

    $err_username = $err_password = $err_phone_no = "";
    if(isset($username)){
        
        if ((strlen($username))< 5 or (!preg_match("/^[a-zA-Z-0-9]*$/", $username))) {
            $err_username = $username;
            echo "Username length is less than 5 or syntax is not been followed, please retry!<br><br>";
        }


    }

    if(isset($password)){
        
        if ((strlen($password))< 5 or (!preg_match("/^[a-zA-Z-0-9-@-_]*$/", $password))) {
            $err_password = $password;
            echo "Password should contain only letters and numbers allowed with size minimim 6 special characters allowed are  @ and underscore (_)<br><br>";
        }

        
    }

    if(isset($phone_no)){
        
        if ((strlen($phone_no)) != 10 or (!preg_match("/^[^0][0-9]*$/", $phone_no))) {
            $err_phone_no = $phone_no;
            echo "Enter phone number with digits only not starting with zero<br><br>";
        }

        
    }
    
    $sqlq="SELECT password FROM registration WHERE username='$username'";
//mysqli_num_rows() take the list created by mysqli_query() and gives us the count;
    if($err_username == "" and $err_password == "" and $err_phone_no == "" ) {
        if(mysqli_num_rows(mysqli_query($dbcon,$sqlq)) > 0)
        {
            echo "username already exist!!";
            header("Refresh:3; url=register.php", true ,30);
        }
        else{
            // $sqlq="INSERT INTO `registration` (`username`, `email`, `password`, `phone_no`) VALUES ('$username', '$email', '$password', '$phone_no')";
            if(mysqli_query($dbcon,$sqlq))
            {
            
                echo "Registration successfull!!!";
                header("Refresh:3; url=college.php", true ,30);
            
            
            }
            
            
        }
    }
    else{
        header("Refresh:3; url=register.php", true ,30);
    }
?>
