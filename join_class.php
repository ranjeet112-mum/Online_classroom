<?php
include('connect.php');
session_start();

$code = $_POST['classcode'];
$username = $_SESSION['username'];

$sqlq = "SELECT * from list_of_class WHERE code='$code'";

$sqlq2 = "SELECT * from {$username}_joined WHERE classcode='$code'";

//$row = mysqli_fetch_array($mysqli_result);



$mysqli_result=  mysqli_query($dbcon,$sqlq);// or die mysqli_error($dbcon);
$row = mysqli_fetch_array($mysqli_result, MYSQLI_ASSOC);
//echo $row['cname'];

  if (!$mysqli_result ) {
        echo  mysqli_error($dbcon);
    }
if(mysqli_num_rows(mysqli_query($dbcon,$sqlq))>0 && mysqli_num_rows(mysqli_query($dbcon,$sqlq2))==0)
{
    $sqla = "INSERT into `{$username}_joined` (`classcode`,`classname`,`creater`) VALUES ('".$code."' , '".$row['cname']."' ,'".$row['creater']."' )";
    mysqli_query($dbcon,$sqla);
    
    
    $sqla = "INSERT into `{$code}_stud_details` (`username`) VALUES ('$username' )";
    mysqli_query($dbcon,$sqla);
    
echo "Class successfully Enrolled";

}
else if(mysqli_num_rows(mysqli_query($dbcon,$sqlq2))>0)
{
    echo"<p>Already enrolled</p>";

}
else{
    echo"<p>INVALID CLASS CODE</p>";
    
}

header("Refresh:3; url=college.php", true ,30);



?>