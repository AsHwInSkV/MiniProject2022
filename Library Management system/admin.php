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
    <link rel="stylesheet" href="css/admin.css">
    <style>
        table th{
    border-style: ridge;
    padding: 5px 30px;
}
.table{
    border: 2px solid black;
    display: block;
    width: 755px;
    height: 420px;
    margin: 82px 300px;
    overflow: scroll;
}
th{
    padding: 2px 33px;
} 
table td{
    border-style: ridge;
    padding: 2px 33px;
   
}
    </style>
    <title>Admin</title>
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
            <a href="#">About Us</a>
        </nav>
    </header>
    <form action="newadmin.php"  method="POST">
    <input type="submit" name="submit" value="+Add Admin">
    </form>
    <section class="table">
        <table>
            <thead>
            <tr>
                <th>Admin Id</th>
                <th>Name</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Operations</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
            <?php
        $result=mysqli_query($conn,"select * from admin order by admin_id asc") ;
        while($res=mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$res['admin_id'].'</td>';
            echo '<td>'.$res['name'].'</td>';
            echo '<td>'.$res['username'].'</td>';
            echo '<td>'.$res['password'].'</td>';
             echo '</tr>';

         }

     ?>

        </table>
 </section>
</body>
</html>