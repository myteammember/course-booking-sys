<?php
include_once("include/db.php");

$query = "DELETE FROM student WHERE student_id='".$_GET['id']."'";
if($result = mysqli_query($conn,$query)){
   echo "<script>alert('Data have been delete');
        window.location.href='tables.php';
        </script>";
    }else{
        "<script>alert('Data Not Found');</script>";
    }
?>