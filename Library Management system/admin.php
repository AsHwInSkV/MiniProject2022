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
    <title>Admin</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href="">Home</a>
            <a href="">Members</a>
            <a href="#">Books</a>
            <a href="" class="active">Admin</a>
            <a href="#">Member Attendence</a>
            <a href="#">Borrow</a>
            <a href="#">Borrowed Books</a>
            <a href="#">Returned Books</a>
            <a href="#">About Us</a>
        </nav>
    </header>
    <form action="member.html">
        <input type="submit" value="+Add Admin">
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