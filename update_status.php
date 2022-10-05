<?php

require_once 'db.php';

if(isset($_POST["status_num"])){
    $a=$_POST["status_num"];
    $id=$_POST['id'];
    $sql= "UPDATE tbldental SET appointment_status=$a where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //  echo "Updated";
    }
}