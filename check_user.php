<?php
    
    include('connect.php');

        
    
        if(session_start())
        {
            $_SESSION['username']=$_POST['username'];
        }
        else{
            echo " err";
        }

        $err_password = $err_username = "";


        // All below commented is useless, no relevance

        // function test_input($data) {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }

        // if(isset($_POST['username'])){
        //     // $username = test_input($_POST["name"]);
            
        //     if ((strlen($_POST["username"]))< 6 or (!preg_match("/^[a-zA-Z-0-9]*$/", $_POST["username"]))) {
        //         $err_username = "Only letters and numbers allowed min 6";
        //         echo "Inside";
        //     }
        // }

        // if(empty($_POST['username'])) {
        //     $err_username = "Proper username please";
        // }else{
        // $username = test_input($_POST['username']);
        // }

        // if(empty($_POST['password'])) {
        //     $err_password = "Proper password please";
        // }else{
        // $password = test_input($_POST['password']);
        // }
        
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
            echo "Wrong credentials, Retry!";
            clearstatcache();
            header("Refresh:3; url=index.php", true ,30);
        }
//echo "test";
?>