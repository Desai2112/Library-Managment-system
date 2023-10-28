<?php
include('connect2.php');
session_start();

if ($_POST) {
    $Rname = $_POST['Rname'];
    $Bname = $_POST['Bname'];
    $Bid = $_POST['Bid'];


    $sql = "DELETE FROM Book_Issue WHERE '$Bid'=Id AND '$Rname'=RName;";
    
    $res=mysqli_query($con2,$sql);

    if($res)
    {
        header("Location: http://localhost/SGP/BookSubmit.php");
    }
    else{
        echo "Eroor:  $sql <br> $con-->error";
    }
}


$con2->close();
?>