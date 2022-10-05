<?php

require_once 'db.php';

if(isset($_POST["email"])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['phoneNumber'];
    $appointmentdate=date('y-m-d', strtotime($_POST['appointmentdate']));
    $appointmenttime=$_POST['appointmenttime'];
    $message=$_POST['message'];

    $sql= "INSERT INTO tbldental (fname,lname,email,contact,address,appointmentdate,appointmenttime,message) VALUES ('$fname','$lname','$email','$contact','$address','$appointmentdate','$appointmenttime','$message')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Added";
    }
}