<?php

require_once 'db.php';

if(isset($_POST["status_num"])){
    $a=$_POST["status_num"];
    $id=$_POST['id'];
    $newdate=$_POST['newdate'];
    $newtime=$_POST['newtime'];
    // $date_new=strtotime($newdate);
    $datenew=date('y-m-d', strtotime($newdate));
    $sql= "UPDATE tbldental SET appointment_status=$a,appointmentdate='$datenew',appointmenttime=$newtime where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //  echo "Updated";
    }
}