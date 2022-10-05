<?php
session_start();
if(!isset($_SESSION['auth_key'])){
    header('Location:login.php');
}
session_destroy();
header('Location:login.php');
exit;