<!doctype html>
<html lang="en">
<head>
    <title>Welcome! </title>
    <link rel="shortcut icon" href="discord.png">
    <link rel="stylesheet" href="_main_college.css">
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
    </head>
<body>
    <div class="top_bar">
        <div class="row">
            <div class="col-2">  <img src="TCET-classroom.png" > </div>
                
            <div class="col-9">    <p style="font-family: Syne ,cursive; font-size: 25px; color: white; margin-left: 2%; margin-top: -25px">TCET-classroom</p></div>
            <div class="col-1">    <a href="logout.php">logout  </a> </div>
            
            
        </div>
    </div>
    
        
<!--        <div class = "tbl">-->
<?php
include('connect.php');
            session_start();
    
//    $sqlq= "SELECT * from class_selected";
//        $sqldata = mysqli_query($dbcon,$sqlq) or die(mysqli_error($dbcon));
//        
//        echo"<table style='color: white;  '>";
//        echo"<tr><th>Classroom ID</th><th>Class name</th><th>Teacher</th></tr>";
//
//        while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
//        {
//            echo "<tr><td>";
//            echo $row['ID'];
//            echo "</td><td>";
//            echo "<a href='index.php'>".$row['Name'];
//            echo "</a>";
//            echo "</td><td>";
//            echo $row['Teacher'];
//            echo "</td></tr>";
//        }
//        echo"</table>";
//        
            echo "<p style='text-align: left; font-size : 20px; '>Hello,".$_SESSION['username'];
            echo "</p></a>";
            
            echo "<div class='row'>";
            
            $sqlq= "SELECT * from  {$_SESSION['username']}_joined" ;
            $sqldata = mysqli_query($dbcon,$sqlq) or die(mysqli_error($dbcon));
            
           echo "<br><br><br><br>"; while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
            {
//                echo $row['classcode'];
                $usr=$row['classcode'];
$qq ="SELECT 'cname','creater' from list_of_class where code='$usr'";                
$sqld=mysqli_query($dbcon,$qq) or die(mysqli_error($dbcon));
                $buff= $sqld->fetch_array(MYSQLI_NUM);
//box ---------------------------------------------            
            echo "<div class='big_box'> ";
           
                echo "<a href='#'><div class='bg_box'>";
//class details            
                    echo "<p style='font-family:Source Sans Pro; font-size=20px; float:left; '>";
    
                
//                print the name of the class              echo
//                echo $buff;
//                echo implode(', ', $buff);
                printf ("%s",$buff[0]);
                
//                echo "<br><br><br>";
//          echo $row['classcode'];
                
                
                    echo "</p>";
                echo "</div></a>";
//class details------------------------------------            
               echo "<div id='clup'>"     ;
                echo "<div class='notification'>";
                
//                echo "<p style='positon:absolute;'> hello</p>";
               echo "hello!";
                
                echo "</div>";
            
//comment box            
            echo "<div class='cmt_box'>";
                echo "<form action='submit_comment_to_the_class.php' method='POST'> ";
                
                echo "<input type='text' name='username' style='font-size: 18px; background: #ffffff; color: #4f545c; cursor: pointer; width: 280px; height: 30px; border-radius: 10px; text-align: center;' placeholder='Add a comment'  required>";
            
                echo "</form>";
                    echo "</div></div>";
                
// comment box ends                
            echo "</div>";
            
            }
          
//box end ---------------------------------------------  
            
            
            
            
            echo "</div>";    
            
//            session_destroy(); // use only with log out else will throw err after refreshing;
            
            
            
            
            
?>
<!--        </div>-->
        </body>
    </html>