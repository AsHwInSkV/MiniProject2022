<?php      
    include('db_connect.php'); 
  ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/member1.css">
    <title>Member</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href="#">Home</a>
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
    <form action="addmember.php"  method="POST">
        <input type="submit" name="submit" value="+Add Member">
    </form>
    <section class="table">
       

    </section>
</body>
</html>