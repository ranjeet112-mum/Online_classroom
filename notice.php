<!doctype html>
<html>
    <head>
            <title><?php include('connect.php');
        session_start(); echo $_SESSION['cname']?></title>
        <link rel="shortcut icon" href="favicon-logo.jpg">
        <link rel="stylesheet" href="_main_college.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="top_box">
        <div class="row">
            <div class="col-2" id="image"><img src="TCET-classroom.jpg">
            </div>
            <div class="col-6" style="text-align:center;"><p>TCET-classroom > <?php  echo $_SESSION['cname'];?></p></div>
            <div class="col-4">
                   
                
            </div>
        </div>
        
    </div>
        <hr>
    <div class="row" style="height:auto;">
            <div class="col-8">
        <p style="color:white; font-size:16px; text-align:center;">Submit your files here and also you'll find the file sent by your teacher here itself!!</p> 


                <p style="color:white; font-size:20px"><b>Task/Notice :</b></p>
                <p style="color:white; font-size:20px">
<?php

include('connect.php');
                   
                    $_SESSION['notice_num']=$_GET['notice_num'];

    $sr =$_GET['notice_num'];
    $sqlq = "SELECT * from `class_notification` WHERE srno = '$sr' ";
    $mysql_result = mysqli_query($dbcon,$sqlq);
    
    $row = mysqli_fetch_array($mysql_result,MYSQLI_ASSOC);
             $notice = $row['notice'];
                
        echo $notice;        
?>
                </p>
            </div>
        
            <div class="col-4" style="border-left:1px solid white; text-align:center;color:white; font-size:20px; height: 175px;border:3px solid white;border-radius: 14px;overflow: hidden;
  text-overflow: ellipsis;">
                <p>Attach Your files here!!</p>
<!--                    <div class="submit_in_notice_stud">-->
                <form action="upload.php" method="post" enctype="multipart/form-data" 
                      style="color:white; font-size:16px; margin-bottom: 50%;">
                      
                      <input type="file" id="files" name="files" multiple style="width : 200px;">
                      <input type="submit" name="submit">
                </form>
<!--                    </div>-->
            </div>
            
    </div>
        <hr>

        
<!--        TO DISPLAY ALL THE ATTACHMENTS GIVEN BY THE TEACHER!!-->
        
        <p style="color:white; text-align:center; font-size:20px">Teachers attachments:</p>       
<?php        
        $creater= $_SESSION['creater'];
        $noti= $_SESSION['notice_num'];
        $class= $_SESSION['class11'];
        
        $stat ="SELECT * from `files` WHERE username='$creater' AND notice_num='$noti' AND class = '$class'";
        $mydata=mysqli_query($dbcon,$stat);
        echo "<ol>";
        while($row = mysqli_fetch_assoc($mydata)) {
           echo"<li style='color:white;  font-size:20px;  text-decoration: none;'>
            <a href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
            
        }
        echo "</ol>";
        
?>        
     <hr>
    <p style="color:white; text-align:center; font-size:20px">My Submissions:</p>
        
  <?php        
        $creater= $_SESSION['username'];
        $noti= $_SESSION['notice_num'];
        $class= $_SESSION['class11'];
        
        $stat = "SELECT * from `files` WHERE username='$creater' AND notice_num='$noti' AND class = '$class'";
        $mysqli_res=mysqli_query($dbcon,$stat);
        
        echo "<ol>";
        while($row = mysqli_fetch_assoc($mysqli_res)) {
            echo"<li style='color:white;  font-size:20px;  text-decoration: none;'>
            <a href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
            
        }
        echo "</ol>";
        
?>      
        
        
        
        
        
        
        
        
    </body>
</html>