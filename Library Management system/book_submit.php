<?php
     include('db_connect.php'); 

    if(isset($_POST['submit']))
    {
        $barcode_no=$_POST['barcode_no'];
        $book_id=$_POST['book_id'];
        $book_title=$_POST['book_title'];
        $author=$_POST['author'];
        $book_copies=$_POST['book_copies'];
        $publisher_name=$_POST['publisher_name'];
        $ISBN=$_POST['ISBN'];
        $remarks=$_POST['remarks'];
    
        $result=mysqli_query($conn,"select * from book WHERE book_id='$book_id' ") or die (mysqli_error());
    $row=mysqli_num_rows($result);
        if ($row > 0)
    {
            echo "<script>alert('ID Number already active!'); window.location='addbook.php'</script>";
      
    }
        else{
            $sql="INSERT INTO book (barcode_no,book_id,book_title,book_copies,author,publisher_name,ISBN,remarks) VALUES (' $barcode_no',' $book_id',' $book_title',' $book_copies',' $author',' $publisher_name',' $ISBN',' $remarks')";
            $Result=mysqli_query($conn,$sql);
            
            if($Result)
            {
                echo "<script>alert('book successfully added!'); window.location='addbook.php'</script>";

             } 
            }
        }

?>