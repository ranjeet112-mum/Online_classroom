<?php

include('connect.php');
session_start();

$classname = $_POST['classname'];
$classcode = $_POST['classcode'];
$creator = $_SESSION['username'];


$sqlquery = "Select code from list_of_class where code='$classcode'";

if(mysqli_num_rows(mysqli_query($dbcon,$sqlquery)) > 0)
{
    echo "Class code already exist!!";
        header("Refresh:3; url=create_class.php", true ,30);
}
else{
    echo "Class created successfully";
    $sqlq = "INSERT INTO `list_of_class`(`code`, `cname`, `creater`) VALUES ('$classcode','$classname','$creator');";
    if(mysqli_query($dbcon,$sqlq))
    {
//        echo "TEST";
        $sqlq1 = "CREATE TABLE `classroom`.`{$classcode}_notification` ( `sr no.` INT NOT NULL AUTO_INCREMENT ,`username` VARCHAR(20) NOT NULL ,`notice` VARCHAR(200) NOT NULL , `sub_req` INT NOT NULL,PRIMARY KEY (`sr no.`) ) ENGINE = InnoDB;";
        mysqli_query($dbcon,$sqlq1) or die(mysqli_error($dbcon));
        $sqlq1 = "CREATE TABLE `classroom`.`{$classcode}_stud_details` ( `sr no.` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(20) NOT NULL , PRIMARY KEY (`sr no.`) ) ENGINE = InnoDB;";
        mysqli_query($dbcon,$sqlq1) or die(mysqli_error($dbcon));
    }
    $sqlq1 = "INSERT INTO `{$creator}_created`(`classcode`, `classname`) VALUES ('$classcode','$classname');";
    mysqli_query($dbcon,$sqlq1) or die(mysqli_error($dbcon));
    header("Refresh:3; url=college.php", true ,30);
}


?>
