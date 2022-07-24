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
            <a href="#" class="active">Members</a>
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