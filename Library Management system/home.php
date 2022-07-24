<?php
include("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto Condensed', sans-serif;  
        }
    </style>
    <title>Home</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="#">Members</a>
            <a href="#">Books</a>
            <a href="#">Admin</a>
            <a href="#">Member Attendence</a>
            <a href="#">Borrow</a>
            <a href="#">Borrowed Books</a>
            <a href="#">Returned Books</a>
            <a href="#">About Us</a>
        </nav>
    </header>
    <section class="knimbus">
        <iframe src="https://lbscek.knimbus.com/user#/home" frameborder="0" width="200%" height="600cm"></iframe>

    </section>
</body>
</html>