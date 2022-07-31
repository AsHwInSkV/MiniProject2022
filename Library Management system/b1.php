<?php
     include('db_connect.php'); 

        if(isset($_POST['submit']))
         {
           
           $college_id= $_POST['search'];
             $result=mysqli_query($conn, "SELECT college_id from member_registration where college_id=$college_id");
		        $row=mysqli_num_rows($result);
                if ($row > 0)
		        {
                    echo "<script>alert('college_id found'); window.location='borrowinside.php'</script>";
                    
		        }
                else{
                    echo "<script>alert('college_id not found'); window.location='borrow.php'</script>";
                }
        }

       
	
?>