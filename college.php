<!doctype html>
<html>
    <head>
            <title>WELCOME!!</title>
        <link rel="shortcut icon" href="discord.png">
        <link rel="stylesheet" href="_main_college.css">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="top_box">
        <div class="row">
            <div class="col-2" id="image"><img src="TCET-classroom.png">
            </div>
            <div class="col-6"><p>TCET-classroom</p></div>
            <div class="col-4">
                <div class="row">
                    <form action="join_class.php" method="post">
                        <input type="text" name="classcode" placeholder="Class_code">
                        <button>join</button>
                   
                    </form>
                <a href="create_class.php"><button style="margin-left: 40px;">Create class</button></a>
                </div>    
                
            </div>
        </div>
        
    </div>
        <hr>
<?php
include('connect.php');
session_start();

    echo "<div class='row'>"; 
    echo "<div class='col-10'>";
    echo "</div>";
        
        echo "<div class='intro_box'>";
            echo "<p>Hello ,".$_SESSION['username'];
            echo "</p>";
            echo "<a href='logout.php'><button>Logout</button></a>";
        echo "</div>";
    echo "</div>";
        
echo "<H2>Class Enrolled:</<H2><br><br><br>";
 $user=$_SESSION['username'];       
$sqlq= "SELECT * from  student_class_rec WHERE username='$user'";
$sqldata = mysqli_query($dbcon,$sqlq);// or die(mysqli_error($dbcon));{$_SESSION['username']}_joined        
$count=0;
//        echo $sqldata;
echo"<div class='row'>";
if(mysqli_num_rows($sqldata)>0)
{    
    
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
    $cc=$row['classcode'];
    $sqlq2 = "SELECT * from  list_of_class WHERE code='$cc'";
    $sqldata2= mysqli_query($dbcon,$sqlq2);
    $row2=mysqli_fetch_array($sqldata2,MYSQLI_ASSOC);
    
if($row['classcode']!= "" && $row2['creater'] != $_SESSION['username'])
{
if($count == 4)
{
    $count=0;
    echo "</div>";
    echo "<div class='row'>";
}
    echo "<div class='class_info'>";
//    
    $code=$row['classcode'];
    $cname=$row2['cname'];
    $creator=$row2['creater'];
//    echo $creator;
$aqur="class_selected.php?class-selected=$code&creater=$creator&cname=$cname>";
//    
    echo "<a style='text-decoraton:none; color:black;' href=".$aqur ;
    if(rand()%4==0)
    echo "<div class='class_color1'>";
    else if(rand()%4==1)
    echo "<div class='class_color2'>";
    else if(rand()%4==2)
    echo "<div class='class_color3'>";
    else 
    echo "<div class='class_color4'>";     
            
            echo "<p>";
            echo $cname;
            echo "</p>";
            echo "<p>- ";
                echo $row2['creater'];echo "</p>";
            echo "</div></a>";
////        echo "<p>latest notification in the class.This is to test if the colored box goes down or not</p>";
        
    echo "</div>";  
$count = $count +1;
}
}
//    
}
else{
    echo "<p>No class Enrolled!!</p>";
}
        echo"</div>";

        
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                echo "<hr>";        
echo "<H2>Class Created:</<H2><br><br><br>";
        
$sqlq= "SELECT * from list_of_class WHERE creater = '$user'";
$sqldata = mysqli_query($dbcon,$sqlq) or die(mysqli_error($dbcon));        
$count=0;
echo"<div class='row'>";
if(mysqli_num_rows($sqldata)>0)
{        
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{

if($count == 4)
{
    $count=0;
    echo "</div>";
    echo "<div class='row'>";
}
    
    $code=$row['code'];
    $cname=$row['cname'];
    $creator=$user;
//    echo $creator;
$aqur="class_selected_creatersview.php?class-selected=$code&creater=$creator&cname=$cname>";
    

    
    echo "<div class='class_info'>";
    echo "<a style='text-decoraton:none; color:black;' href=".$aqur; 
//        'class_selected_creatersview.php'>";
    
    if(rand()%4==0)
    echo "<div class='class_color1'>";
    else if(rand()%4==1)
    echo "<div class='class_color2'>";
    else if(rand()%4==2)
    echo "<div class='class_color3'>";
    else 
    echo "<div class='class_color4'>";    
        
            
            echo "<p>";
            echo $cname;
            echo "</p>";
            echo "<p>Class code:  ";
            echo $code;
            echo "</p>";
            echo "</div></a>";
//        echo "<p>latest notification in the class.This is to test if the colored box goes down or not</p>";
        
    echo "</div>";  
$count = $count +1;
}
}
else{
    echo "<p>No class Created!!</p>";
}
        echo"</div>";
        unset($_SESSION['class11']);
        unset($_SESSION['cname']);
        unset($_SESSION['creater']);
        
?> 

        
        
        
    </body>
</html>