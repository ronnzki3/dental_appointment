<?php
session_start();
if(isset($_SESSION['auth_key'])){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page - Admin</title>
    <link rel="stylesheet" href="style_login.css">
    
</head>
<body>
    <div class="main-container">
            <div class="login-wrapper">
                <div>
                    <h1>Dela Cruz Dental Clinic</h1>
                    <h2>Login</h2>
                    <div id="error_notif"></div>
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" class="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" class="password">
                    <input type="button" value="Login" id="btnlogin">
                </div>                
            </div>
    </div>


    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#btnlogin').click(function(){
                let username=$('.username').val();
                let password=$('.password').val();
                $.ajax({
                    type:'post',
                    url:'q_login.php',
                    data:{
                        'username':username,
                        'password':password
                    },
                    success:function(res){
                        let a=parseInt(res);
                        if(a===1){
                            $.ajax({
                                type:'post',
                                url:'session_auth.php',
                                data:{
                                    'auth': 1
                                },
                                success:function(res){
                                    location.href='admin.php';
                                }
                            });
                        }else{
                            $('#error_notif').html("<div> Incorrect username or password.</div>");
                        }
                    }
                });
            });

        });
    </script>
</body>
</html>