<?php

include('connect.php');
$id = $_GET['id'];
$sqlq = "SELECT * from files WHERE id = $id";
$myres=mysqli_query($dbcon,$sqlq);
$row = mysqli_fetch_assoc($myres);
header('Content-Type:'.$row['mime']);
echo $row['data'];


?>
