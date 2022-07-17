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
            <a href="#">Home</a>
            <a href="#">Members</a>
            <a href="#">Books</a>
            <a href="#" class="active">Admin</a>
            <a href="#">Member Attendence</a>
            <a href="#">Borrow</a>
            <a href="#">Borrowed Books</a>
            <a href="#">Returned Books</a>
            <a href="#">About Us</a>
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