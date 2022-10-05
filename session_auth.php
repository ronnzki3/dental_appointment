<?php
session_start();
if(!isset($_SESSION['auth_key'])){
    header('Location:login.php');
}
if(isset($_POST['auth'])){
    $_SESSION['auth_key']=$_POST['auth'];    
}