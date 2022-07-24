<?php      
    include('db_connect.php'); 
  ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addbook.css">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href="home.php" class="active">Home</a>
            <a href="member1.php">Members</a>
            <a href="book.php">Books</a>
            <a href="admin.php">Admin</a>
            <a href="member_attendance.php">AdminLog</a>
            <a href="issue_book.php">Borrow</a>
            <a href="borrow_booklist.php">Borrowed Books</a>
            <a href="return_booklist.php">Returned Books</a>
            <a href="#">About Us</a>
    </header>
    <section class="px">
        <h1 class="second">BOOK DETAILS</h1>
        <form action="book_submit.php"  method="POST">
            <div class="inputs">
            <div class="t1">
                <p>Barcode Number
                <input style="height: 30px;font-size: 14pt;" type="text" name="barcode_no" id="barcode_no" placeholder="BARCODE NUMBER" size="20" maxlength="30">
                </p>
            </div>
            <div class="t2">
                <p>BOOK 
                <input style="height: 30px;font-size: 14pt;" type="text" name="book_id" id="book_id" placeholder="BOOK ID" size="20" maxlength="30">
                </p>
            </div>
            <div class="t3">
                <p>BOOK TITLE
                <input style="height: 30px;font-size: 14pt;" type="text" name="book_title" id="book_title"  placeholder="TITLE " size="20" maxlength="30">
                </P>
            </div>
            <div class="t4">
                <p>AUTHOR
                <input style="height: 30px;font-size: 14pt;" type="text" name="author" id="author"  placeholder="AUTHOR NAME" size="20" maxlength="30">
                </P>
            </div>
            <div class="t5">
                <p>BOOK_COPIES
                <select name="book_copies" id="book_copies" style="height: 30px;width:140px">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                </p>
            </div>
            <div class="t6">
                <p>PUBLISHER NAME
                <input style="height: 30px;font-size: 14pt;" type="text" name="publisher_name" id="publisher_name" placeholder="PUBLISHER NAME" size="20" maxlength="30">
                </p>
            </div>
            <div class="t7">
                <p>ISBN
                <input style="height: 30px;font-size: 14pt;" type="number" name="ISBN" id="ISBN" placeholder="" size="20" maxlength="30">
                </p>
            </div>
            <div class="t8">
                <p>REMARKS
                <input style="height: 90px;font-size: 14pt;" type="textfield" name="remarks" id="remarks" rows="20" coloumns="30">
                </p>
            </div>
            <div>
            <p><input type="submit" name="submit" value="Submit"></button>  <input type="submit" name="reset" value="Reset"></p>
        </form>
            </div>
        </div>
    
    
        </form>   

        
    </section>
</body>
</html>