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
    <style>
        table th{
    border-style: ridge;
    padding: 5px 25px;
}
.table{
    border: 2px solid black;
    display: block;
    width: 1177px;
    height: 420px;
    margin: 82px 25px;
    overflow: scroll;
}
th{
    padding: 2px 30px;
} 
table td{
    border-style: ridge;
    padding: 5px 30px;
    overflow: hidden;
}
.active{
    color: black;
}
    </style>
    <title>Member</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
        <a href="home.php">Home</a>
            <a href="member1.php" class="active">Members</a>
            <a href="book.php">Books</a>
            <a href="admin.php">Admin</a>
            <a href="member_attendance.php">Admin Log</a>
            <a href="borrow.php">Borrow</a>
            <a href="borrowinside.php">Borrowed Books</a>
            <a href="borrowinside1.php">Returned Books</a>
            <a href="/barcode/index.php">About Us</a>
        </nav>
    </header>
    <form action="addmember.php"  method="POST">
    <input type="submit" name="submit" value="+Add Member">
</form >
    <section class="table">
        <table>
            <thead>
                <th>MemberId</th>
                <th>CollegeId</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Semester</th>
                <th>Gender</th>
                <th>Type</th>
                <th>Department</th>
                <th>Operations</th>
            </thead>
            <tbody>
            
            </tbody>
        
    <?php   
          $result=mysqli_query($conn,"select * from member_registration order by member_id asc");
        while($res=mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$res['member_id'].'</td>';
            echo '<td>'.$res['college_id'].'</td>';
            echo '<td>'.$res['name'].'</td>';
            echo '<td>'.$res['contact'].'</td>';
            echo '<td>'.$res['semester'].'</td>';
            echo '<td>'.$res['Gender'].'</td>';
            echo '<td>'.$res['type'].'</td>';
            echo '<td>'.$res['dept'].'</td>';
             echo '</tr>';

         }

     ?>
        </table>

    </section>
</body>
</html>