<?php
    include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>CSE Department Library Management Sysytem</title>
</head>
<body style="background-color:rgba(144, 193, 233, 0.902);">
<div id = "frm">  
    <h1>Login </h1>
    <form name='f1'action="authentication.php"  method="POST">
        <br><br><br><br><br>
        <span class ="fill">
        <p>Username *</p>
        <p><input type="text" name="username" id="username" required size="30" ></p>
        <P>Password *</P>
        <p><input type="password" name="password" id="password" required size="30"></p>
        <p><input type="submit" id="button" value="Login"/></p>
        <p><hr width="290cm"></p>
        <h5><i style="font-size:10px" class="fa">&#xf02d;</i> LBS COLLEGE OF ENGINEERING KASARAGOD</h5>
        <h6>&copy;2022 Library Management System</h6>
        </span>
    </form>
    <h1></h1>
    
</body>
</html>
