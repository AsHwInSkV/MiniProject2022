<?php      
    include('db_connect.php'); 
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addadmin.css">
    <title>Add Admin</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
        <a href="home.php">Home</a>
            <a href="member1.php">Members</a>
            <a href="book.php">Books</a>
            <a href="admin.php" class="active">Admin</a>
            <a href="admin_log.php">Admin Log</a>
            <a href="issue_book.php">Borrow</a>
            <a href="borrow_booklist.php">Borrowed Books</a>
            <a href="return_book.php">Returned Books</a>
            <a href="/barcode/index.php">Book Barcode</a>
            <a href="login.php">LOG OUT</a>
        </nav>
    </header>
    <h1>Add Admin</h1>
    <form action="submit1.php"  method="POST">
        <div class="adminid">
            Admin Id: <input type="text" name="userid" id="userid" required>
        </div>
        <div class="name">
            Name : <input type="text" name="name" id="name" required>
        </div>
        <div class="username">
            Username : <input type="text" name="username" id="username" required>
        </div>
        <div class="password">
            Password : <input type="password" name="password" id="password" required>
        </div>
        <div class="confirmpassword">
            Confirm Password : <input type="password" name="confirmpassword" id="confirmpassword" required>
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;<input type="submit" value="Reset">
        </div>

    </form>


</body>
</html>