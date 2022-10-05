<?php
require_once 'db.php';


if(isset($_POST['username'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $query="SELECT * FROM tbllogin WHERE username= BINARY '$user' AND password= BINARY '$pass'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        //    echo "Login successful";
        echo 1;
    }else{
        // echo "<div>Invalid username/password.</div>";
        echo 2;
    }
}