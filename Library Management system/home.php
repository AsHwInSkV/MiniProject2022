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
    <title>Home</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href="home.php" class="active">Home</a>
            <a href="member1.php">Members</a>
            <a href="book.php">Books</a>
            <a href="admin.php">Admin</a>
            <a href="admin_log.php">Admin Log</a>
            <a href="issue_book.php">Borrow</a>
            <a href="borrow_booklist.php">Borrowed Books</a>
            <a href="return_booklist.php">Returned Books</a>
            <a href="/barcode/index.php">Book Barcode</a>
            <a href="login.php">LOG OUT</a>
        </nav>
    </header>
    <section class="knimbus">
        <iframe src="https://lbscek.knimbus.com/user#/home" frameborder="0" width="200%" height="600cm"></iframe>

    </section>
</body>
</html>