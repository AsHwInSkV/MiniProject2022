<?php
     include('db_connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/book.css">
    <title>Books</title>
</head>
<style>
    .table{
    overflow: scroll;
    width: 1210px;
    height: 500px;
}
</style>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
        <a href="home.php">Home</a>
            <a href="member1.php">Members</a>
            <a href="book.php" class="active">Books</a>
            <a href="admin.php">Admin</a>
            <a href="member_attendance.php">Admin Log</a>
            <a href="borrow.php">Borrow</a>
            <a href="borrowinside.php">Borrowed Books</a>
            <a href="borrowinside1.php">Returned Books</a>
            <a href="/barcode/index.php">Book Barcode</a>
            <a href="login.php">LOG OUT</a>
        </nav>
    </header>
    <form action="newbook.php"  method="POST">
    <input type="submit" name="submit" value="+Add Book">
    </form>
    <section class="table">
        <table>
            <thead>
                <th>BookBarcode</th>
                <th>BookId</th>
                <th>BookTitle</th>
                <th>Author</th>
                <th>BookCopies</th>
                <th>PublisherName</th>
                <th>ISBN</th>
                <th>ISBN</th>
                <th>Operations</th>
            </thead>
            <tbody>
            
            </tbody>
        </table>

    </section>
</body>
</html>