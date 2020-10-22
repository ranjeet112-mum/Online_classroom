<?php
include('connect.php');
session_start();

$code = $_POST['classcode'];
$username = $_SESSION['username'];
if($code == ""){
    echo "invalid class code entered";
}
else{
$sqlq = "SELECT * from list_of_class WHERE code='$code'";

$sqlq2 = "SELECT * from student_class_rec WHERE classcode='$code' AND username='$username'";

//$row = mysqli_fetch_array($mysqli_result);


$mysqli_result=  mysqli_query($dbcon,$sqlq);// or die mysqli_error($dbcon);
$row = mysqli_fetch_array($mysqli_result, MYSQLI_ASSOC);
//echo $row['cname'];

  if (!$mysqli_result ) {
        echo  mysqli_error($dbcon);
    }
if(mysqli_num_rows(mysqli_query($dbcon,$sqlq))>0 && mysqli_num_rows(mysqli_query($dbcon,$sqlq2))==0 && $row['creater'] != $username )
{
//    if()
    {
        
    $sqla = "INSERT into `student_class_rec` (`username`,`classcode`) VALUES ('".$username."' , '".$code."' )";
    mysqli_query($dbcon,$sqla);
        echo "Class successfully Enrolled";
    }
    
  header("location:college.php");
    


}
else if(mysqli_num_rows(mysqli_query($dbcon,$sqlq2))>0)
{
    echo"<p>Already enrolled</p>";

}
else if($row['creater'] == $username)
{
    echo"<p>You created the class!!  YOU CAN'T JOIN!!</p>";

}
else{
    echo"<p>INVALID CLASS CODE</p>";
    
}
}
header("Refresh:3; url=college.php", true ,30);



?>