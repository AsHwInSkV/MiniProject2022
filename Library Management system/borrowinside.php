<?php
include("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/borrowinside.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto Condensed', sans-serif;  
        }
    </style>
    <title>Borrow</title>
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
            <a href="issue_book.php" class="active">Borrow</a>
            <a href="borrow_booklist.php">Borrowed Books</a>
            <a href="return_book.php">Returned Books</a>
            <a href="/barcode/index.php">Book Barcode</a>
            <a href="login.php">LOG OUT</a>
        </nav>
    </header>
    <section class="table1">
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
                
            </thead>
            <tbody>
            
            </tbody>
            <?php
        $result=mysqli_query($conn,"select * from member_registration order by member_id asc") ;
        if($res=mysqli_fetch_array($result))
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
    <section class="table2">
    <?php
                 $borrow_query = mysqli_query($conn,"SELECT * FROM issue_book
									LEFT JOIN book ON issue_book.book_id = book.book_id 
									LEFT JOIN member_registration ON issue_book.member_id = member_registration.member_id 
									WHERE borrow_status = 'borrowed'
									ORDER BY issue_book.issuebook_id DESC") or die(mysqli_error());
								$borrow_count = mysqli_num_rows($borrow_query);
?>
        <table>
            <thead>
                <th>BorrowBookId</th>
                <th>MemberId</th>
                <th>BookId</th>
                <th>DateBorrowed</th>
                <th>DueDate</th>
                <th>DateReturned</th>
                <th>BorrowStatus</th>
                <th>Operations</th>
            </thead>
            <tbody>
            
            </tbody>
            <?php
								while($borrow_row = mysqli_fetch_array($borrow_query)){
									$id = $borrow_row ['issuebook_id'];
									$book_id = $borrow_row ['book_id'];
									$user_id = $borrow_row ['member_id'];

                                    {
                                        echo '<tr>';
                                        echo '<td>'.$borrow_row['issuebook_id'].'</td>';
                                        echo '<td>'.$borrow_row['member_id'].'</td>';
                                        echo '<td>'.$borrow_row['book_id'].'</td>';
                                        echo '<td>'.$borrow_row['date_borrowed'].'</td>';
                                        echo '<td>'.$borrow_row['due_date'].'</td>';
                                        echo '<td>'.$borrow_row['date_returned'].'</td>';
                                        echo '<td>'.$borrow_row['borrow_status'].'</td>';
                                         echo '</tr>';
                            
                                     }
                                }
?>
        </table>
    </section>
    <section class="Return">
        <input type="button" value="Return">
    </section>
    <form action="book_b1.php"  method="POST">
    <section class="search">
        <input type="text" name="search" id="search" placeholder="Enter Barcode Id">
        <input type="submit" name="submit" value="Search">
    </section>
    </form>
</body>
</html>