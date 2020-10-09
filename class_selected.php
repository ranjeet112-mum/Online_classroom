<!doctype html>
<html>
    <head>
            <title><?php echo $_GET['cname']?></title>
        <link rel="shortcut icon" href="favicon-logo.jpg">
        <link rel="stylesheet" href="_main_college.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="top_box">
        <div class="row">
            <div class="col-2" id="image"><img src="TCET-classroom.jpg">
            </div>
            <div class="col-6"><p>TCET-classroom > <?php echo $_GET['cname']; echo "   ( by -".$_GET['creater'].")"?></p></div>
            <div class="col-4">
                
                    
                <a href="cancel_enrollment.php"><button style="margin-left: 50%;">Cancel enrollment</button></a>
                    
                
            </div>
        </div>
        
    </div>
        <hr>
        

<form method="get" action="notice_in_the_class.php?class-selected=<?php echo $_GET['class-selected']?>&">
    
    <input type="text" name="comment_in_the_box" class="comment_box" placeholder="Enter the comment in the class">
</form>        
        
        
        
        
        
<?php 
    
            include('connect.php');
            session_start();
$classcode= $_GET['class-selected'];                
$sqlq = "SELECT * from `class_notification` WHERE classcode = '$classcode'";
//$sqlq2 = "SELECT * from `list_of_class` WHERE creater= '".$_GET['class-selected']."' ";
$mysqli_result = mysqli_query($dbcon,$sqlq); //or  die(mysqli_error($dbcon));
              

                
                            
                
while($row=mysqli_fetch_assoc($mysqli_result))  
{    
    if(array_key_exists('notice', $row))
        $no = $row["notice"];
//                $c = 2;
    $aaa=$row['srno'];
    
        if($row['username'] == $_GET['creater'])
        echo "<a href = 'notice.php?notice_num=$aaa' style='text-decoration:none;'>";
    
    echo "<div class='notification_table'>
            <b><i><p style='font-size:20px; margin-left:25px; color:orange'>";  
                echo $row['username'];
echo "</p></i></b><b><i><p style='font-size:15px; margin-left:25px; color:black'>";  
                echo $no;
                echo "</p></i></b></div>";
    
    if($row['username'] == $_GET['creater'])
    echo "</a>";
}
        $_SESSION['class11']=$_GET['class-selected'];
        $_SESSION['cname']=$_GET['cname'];
        $_SESSION['creater']=$_GET['creater'];        
                unset($_SESSION['notice_num']);
        ?>
    </body>
</html>



<!--Undefined index: as1-->