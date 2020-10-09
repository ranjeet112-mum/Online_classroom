<!doctype html>
<html lang="en">
    <head>
    <title>TCET-classroom</title>
    <link rel="shortcut icon" href="favicon-logo.jpg">
    <link rel="stylesheet" href="_main_index.css">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    
    
    </head>
    <body>
    <header>
        <h3 style="font-family: 'Caveat';">LOGIN</h3>
    </header>  
        <div class="box" > 
           <p>Please login to join the classes</p>
           
            <form method="post" action="check_user.php"  >
            
<!--            <label style="margin: 10px;">Username:</label>-->
                <input type="text" name="username" style="font-size: 25px; background: #202225; color: #ffffff; cursor: pointer; width: 250px; height: 35px; border-radius: 8px;" placeholder="@username"  required>
                <br>
            
                <br>
    <!--            <label>Password:</label>-->
                <input type="password" name="password" style="font-size: 25px; background: #202225; color: #ffffff; cursor: pointer; width: 250px; height: 35px; border-radius: 8px;" placeholder="password" required>
                <br>
                <br>
            
                <input type="submit" name="check_user" value="Login" style="font-size: inherit;  padding: 12px 32px; border-radius: 28px; background-color: #77eb34; color = #ffffff;">
            </form>
        
            <p >If you are new here please register first</p>
            <a href="register.php" >  <button style="font-size: 25px; border-radius: 28px; padding: 12px 32px; color:white; background-color: black">Register</button></a>
        
        </div>
    
    
    
    
    
    </body>

</html>