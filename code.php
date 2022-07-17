<?php
session_start();
require 'databasesql.php';

if(isset($_POST['delete']))
{
    $sID = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM studentinfo WHERE Student_ID='$sID'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: imindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: imindex.php");
        exit(0);
    }
}



if(isset($_POST['update']))
{

    $sID = mysqli_real_escape_string($con, $_POST['sID']);
    $sFName = mysqli_real_escape_string($con, $_POST['sFName']);
    $sLName = mysqli_real_escape_string($con, $_POST['sLName']);
    $cID = mysqli_real_escape_string($con, $_POST['cID']);

    $query = "UPDATE studentinfo SET  StudentID='$sID',Student_Firstname='$sFName',Student_Lastname='$sLName',course_ID='$cID' WHERE Student_ID='$sID'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Information Updated Successfully";
        header("Location: imindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Information Not Updated";
        header("Location: imindex.php");
        exit(0);
    }


}





if(isset($_POST['save']))
{
    $sID = mysqli_real_escape_string($con, $_POST['sID']);
    $sFName = mysqli_real_escape_string($con, $_POST['sFName']);
    $sLName = mysqli_real_escape_string($con, $_POST['sLName']);
    $cID = mysqli_real_escape_string($con, $_POST['cID']);

    $query ="INSERT INTO studentinfo (Student_ID, Student_Firstname, Student_Lastname, course_ID) values ($sID, '$sFName', '$sLName', '$cID');";
    
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: newindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: newindex.php");
        exit(0);
    }
}


?>