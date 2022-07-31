<?php
     include('db_connect.php'); 

        if(isset($_POST['submit']))
         {
           
           $barcode_no= $_POST['search'];

           
           $result=mysqli_query($conn, "SELECT * from book where barcode_no='$barcode_no' ");
           $row=mysqli_num_rows($result);
           if ($row > 0)
          {

              echo "<script>alert('book found'); window.location='borrowinside1.php'</script>";
              
          }
          
              echo "<script>alert('book not found'); window.location='borrowinside.php'</script>";
          
        }

    
    
 
?>