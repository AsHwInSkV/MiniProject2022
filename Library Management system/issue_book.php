<?php
     include('db_connect.php'); 

    if(isset($_POST['issue_book']))
    {
        $issuebook_id=$_POST['issuebook_id'];
        $member_id=$_POST['member_id'];
        $book_id=$_POST['book_id'];
        $date_borrowed=$_POST['date_borrowed'];
        $due_date=$_POST['due_date'];
        $date_returned=$_POST['date_returned'];
        $borrow_status=$_POST['borrow_status'];
        
        $result=mysqli_query($conn,"INSERT INTO issue_book (issuebook_id,member_id,book_id,date_borrowed,due_date,date_returned,borrow_status) VALUES (' $issuebook_id',' $member_id',' $book_id',' $date_borrowed','  $due_date','  $date_returned',' $borrow_status')");
        mysqli_query($conn,"update addbook set book_copies=book_copies-1 where book_id= '$book_id'");

        if($Result)
        {
            echo "<script>alert('book issued added!'); window.location='issue_book.php'</script>";

         }   
    } 

?>