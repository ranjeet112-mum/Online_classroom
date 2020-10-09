<!doctype html>
<html>
    <head><title>Register</title>
        <link rel="shortcut icon" href="favicon-logo.jpg">
        <link rel="stylesheet" href="_main_register.css">
    
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

        <!-- loader -->

        <div id="loader"></div>

        <div id="afterLoader" style="display: none;">

            <!-- <H3><u><b>REGISTER</b></u></H3> -->

            <div class="box">
                <br>
                <form action="registeration.php" method="post">

                    <input type="text" name="username" class = "input" placeholder="username" required>
                    <br>
                    <br>

                    <input type="email" name="gmail" class = "input" placeholder="email id" required>
                    <br>
                    <br>

                    <input type="password" name="password" class = "input" placeholder="password" required>
                    <br>
                    <br>

                    <input type="tel" name="phone_no" class="input" placeholder="contact" required>
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