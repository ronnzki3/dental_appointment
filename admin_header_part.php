<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- jQuery Modal css-->
    <link rel="stylesheet" href="jquery.modal.min.css" />

     <!--  -->
     <link rel="stylesheet" href="jquery-ui/jquery-ui.css">

    <link rel="stylesheet" href="style_admin.css">

   
</head>
<body>
    <?php
     $addClassLink="";
     $addClassLink1="";
     $addClassLink2="";
     $addClassLink3="";
     $getpage=$_GET['p'];
    if($getpage==1){
        $addClassLink="visited-link";
    }elseif($getpage==2){
        $addClassLink1="visited-link";
    }elseif($getpage==3){
        $addClassLink2="visited-link";
    }elseif($getpage==4){
        $addClassLink3="visited-link";
    }else{
        $addClassLink="";
        $addClassLink1="";
        $addClassLink2="";
        $addClassLink3="";
        header('Location:admin.php?p=1');
        exit;
    }
    ?>

    
    <div class="main-container">
        <div class="sidebarleft">
            <div class="sideheader">
                <!-- <h1>Dela Cruz Dental Clinic</h1> -->
                <h1>Admin Dashboard</h1>
            </div>
            <div class="sidemenu">
                <ul>
                    <li class="menutitle">Appointments</li>
                    <ul>
                        <li> <a href="admin.php?p=1" class="slinks <?= $addClassLink; ?>"> Pending</a></li>
                        <li> <a href="page_approved.php?p=2" class="slinks <?= $addClassLink1; ?>"> Approved</a></li>
                        <li> <a href="page_reschedule.php?p=3" class="slinks <?= $addClassLink2; ?>"> Re-schedule</a></li>
                        <li> <a href="page_declined.php?p=4" class="slinks <?= $addClassLink3; ?>"> Rejected</a></li>
                    </ul>
                </ul>                                
            </div>
            <div class="logout-wrapper">
                <a href="session_destroy.php" class="logout" id="logout">Logout</a>
            </div>
        </div>
        <div class="sidebarright">