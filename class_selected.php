<!doctype html>
<html>
    <head>
            <title><?php echo $_GET['cname']?></title>
        <link rel="shortcut icon" href="discord.png">
        <link rel="stylesheet" href="_main_college.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="top_box">
        <div class="row">
            <div class="col-2" id="image"><img src="TCET-classroom.png">
            </div>
            <div class="col-6"><p>TCET-classroom > <?php echo $_GET['cname']?></p></div>
            <div class="col-4">
                
                    
                <a href="cancel_enrollment.php"><button style="margin-left: 50%;">Cancel enrollment</button></a>
                    
                
            </div>
        </div>
        
    </div>
        <hr>
        
<?php 
    
            include('connect.php');
            session_start();
    
            
$sqlq = "SELECT * from `{$_GET['class-selected']}_notification` ";
$sqlq2 = "SELECT * from `list_of_class` WHERE creater= '".$_GET['class-selected']."' ";
$mysqli_result = mysqli_query($dbcon,$sqlq); //or  die(mysqli_error($dbcon));
              

                
                            
                
while($row=mysqli_fetch_assoc($mysqli_result))  
{    
    if(array_key_exists('notice', $row))
        $no = $row["notice"];
//                $c = 2;
    $aaa=$row['sr no.'];
    
        if($row['username'] == $_GET['creater'])
        echo "<a href = 'notice.php?notice_num=$aaa' style='text-decoration:none;'>";
    
    echo "<div class='notification_table'>
            <b><i><p style='font-size:20px; margin-left:25px; color:white'>";  
                echo $row['username'];
echo "</p></i></b><b><i><p style='font-size:15px; margin-left:25px; color:white'>";  
                echo $no;
                echo "</p></i></b></div>";
    
    if($row['username'] == $_GET['creater'])
    echo "</a>";
}
        ?>
    </body>
</html>



<!--Undefined index: as1-->