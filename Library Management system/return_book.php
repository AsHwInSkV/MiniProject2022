
<?php
     include('db_connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/retbook.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto Condensed', sans-serif;  
        }
        table td{
    overflow : auto;
}
.table{
    overflow : auto;
    height : 500px;
}
    </style>
    <title>Returned Books</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
        <a href="home.php">Home</a>
            <a href="member1.php">Members</a>
            <a href="book.php">Books</a>
            <a href="admin.php">Admin</a>
            <a href="admin_log.php">Admin Log</a>
            <a href="issue_book.php">Borrow</a>
            <a href="borrow_booklist.php">Borrowed Books</a>
            <a href="return_book.php" class="active">Returned Books</a>
            <a href="/barcode/index.php">Book Barcode</a>
            <a href="login.php">LOG OUT</a>
        </nav>
    </header>
    <section class="table">
        <table>
            <thead>
                <th>ReturnBookId</th>
                <th>UserId</th>
                <th>BookId</th>
                <th>BorrowedDate</th>
                <th>DueDate</th>
                <th>DateReturned</th>
                <th>Status</th>
            </thead>
            <tbody>
            
            </tbody>
        
        <?php
            $result=mysqli_query($conn,"select * from return_book order by returnbook_id asc") ;
        while($res=mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$res['returnbook_id'].'</td>';
            echo '<td>'.$res['member_id'].'</td>';
            echo '<td>'.$res['book_id'].'</td>';
            echo '<td>'.$res['date_borrowed'].'</td>';
            echo '<td>'.$res['due_date'].'</td>';
            echo '<td>'.$res['date_returned'].'</td>';
            echo '<td>'.$res['borrow_status'].'</td>';
             echo '</tr>';


         }
         ?>
         </table>
    </section>
</body>
</html>