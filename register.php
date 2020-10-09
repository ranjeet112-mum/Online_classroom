<!doctype html>
<html>
    <head><title>Register</title>
        <link rel="shortcut icon" href="favicon-logo.jpg">
        <link rel="stylesheet" href="_main_register.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
        <script>

            function myFunction() {
                var myVar;
                myVar = setTimeout(showPage, 2000);
            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("afterLoader").style.display = "block";
            }
        </script>
    </head>

    <body onload= "myFunction()">

        <?php 
        session_start();
        if(isset($_SESSION["POST"])){
            $POST_TEMP = $_SESSION["POST"];
            if(isset($POST_TEMP)){
                // echo "<pre>";
                // print_r($POST_TEMP);
            }
        }


        // tried to get the values using function, but didnt succeed


        // function post_temp_values($parameter) {
        //     if(isset($POST_TEMP[$parameter])) {
        //         echo "not here";
        //         return $POST_TEMP[$parameter];
                
        //     } 
        //     else {
        //         echo "here";
        //         return "";
        //     }
        // }

        ?>

        <!-- loader -->

        <div id="loader"></div>

        <div id="afterLoader" style="display: none;">

            <H3 style="font-family: 'Caveat'"><b>REGISTERATION FORM</b></H3>

            <div class="box">
                <br>
                <form action="registeration.php" method="post">

                    <input type="text" name="username" class = "input" placeholder="username" value = "<?php if(isset($POST_TEMP["username"])) {echo $POST_TEMP["username"];} else {echo "";}?>" required>
                    <br>
                    <span class = "error"> *atleast 5 alphanumeric max 20</span>
                    <br>
                    <br>

                    <input type="email" name="email" class = "input" placeholder="email id" value = "<?php if(isset($POST_TEMP["email"])) {echo $POST_TEMP["email"];} else {echo "";}?>" required>
                    <br>
                    <span class = "error"> *Enter proper email</span>
                    <br>
                    <br>

                    <input type="password" name="password" class = "input" placeholder="password" required>
                    <br>
                    <span class = "error"> *atleast 5 alphanumeric max 16 @ underscore allowed</span>
                    <br>
                    <br>

                    <input type="number" name="phone_no" class="input" placeholder="contact" value = "<?php if(isset($POST_TEMP["phone_no"])) {echo $POST_TEMP["phone_no"];} else {echo "";}?>" required>
                    <br>
                    <span class = "error"> *10 digit and not starting with zero</span>
                    <br>
                    <br>
                    <input type="submit" value="Register" class="inputSubmit">
                
                </form>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <script>

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("afterLoader").style.display = "block";
            }
        </script>
    </body>
</html>