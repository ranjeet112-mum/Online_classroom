<!doctype html>
<html lang="en">
    <head>
    <title>TCET-classroom</title>
    <link rel="shortcut icon" href="favicon-logo.jpg">
    <link rel="stylesheet" href="_main_index.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    
    
    </head>
    <body>

        <?php
        $username = $password = $err_username = $err_password = "";

        // Implemented for wrong page, was to be implemented for registeration page,which is done...

        
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     if(empty($_POST['username'])) {
        //         $err_username = "Proper username please";
        //     }else{
        //     $username = test_input($_POST['username']);
        //     }

        //     if(empty($_POST['password'])) {
        //         $err_password = "Proper password please";
        //     }else{
        //     $password = test_input($_POST['password']);
        //     }
        //     // $password = test_input($_POST['password']);
        // }

        // function test_input($data) {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
        ?>

    <header>
        <h3 style="font-family: 'Caveat';">LOGIN</h3>
    </header>  
        <div class="box" > 
           <p>Please login to join or create a class</p>
           
            <form method="post" action="check_user.php">
            
            
<!--            <label style="margin: 10px;">Username:</label>-->
                <input class = 'general_input' type="text" name="username"  placeholder="@username"  required>
                <br>
                <span class = "error"> *atleast 5 alphanumeric max 20</span>
                <br>
                <br>
    <!--            <label>Password:</label>-->
                <input class ="general_input" type="password" name="password"  placeholder="password" required>
                <br>
                <span class = "error"> * required </span>
                <br>
                <br>
            
                <input class ="input_submit" type="submit" name="check_user" value="Login">
            </form>
        
            <p >If you are new here <i>please</i> register first</p>
            <a href="register.php" >  <button class ="input_register">Register</button></a>
        


        </div>
       
    
    
    
        <?php 
        // echo $username;
        // echo "<br>";
        // echo $password;
        ?>
    </body>

</html>