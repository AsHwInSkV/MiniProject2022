<?php
include("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/borrow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto Condensed', sans-serif;  
        }
        .search{
    position: absolute;
    margin: 130px 532px;
}
input[type="text"]{
    border: none;
    border-radius: 2px;
    padding: 5px;
}
input[type="submit"]{
    margin: 10px;
}

input[type="submit"]:hover{
    cursor: pointer;
    background-color:  rgb(100, 177, 244);;
}
input[type="submit"]{
    padding: 5px 3px;
    margin: 9px 60px;
    border: none;
    border-radius: 5px;
    background-color: rgb(31, 138, 231);
}
    </style>
    <title>Borrow</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
        <a href="home.php">Home</a>
        <a href="home.php">Home</a>
            <a href="member1.php">Members</a>
            <a href="book.php">Books</a>
            <a href="admin.php">Admin</a>
            <a href="admin_log.php">Admin Log</a>
            <a href="issue_book.php" class="active">Borrow</a>
            <a href="borrow_booklist.php">Borrowed Books</a>
            <a href="return_book.php">Returned Books</a>
            <a href="/barcode/index.php">Book Barcode</a>
            <a href="login.php">LOG OUT</a>
        </nav>
    </header>
    <form action="b1.php"  method="POST">
         <section class="search">
        <input type="text" name="search" id="search" placeholder="Enter College Id">
        <input type="submit" name="submit" value="Search">
    </section>
</form>
</body>
</html>