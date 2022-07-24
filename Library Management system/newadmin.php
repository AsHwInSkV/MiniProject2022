<?php
     include('db_connect.php'); 
     if(isset($_POST['submit']))
     {
        echo "<script> window.location='addadmin.php'</script>";
     }
     else{
        echo "connection fails";
     }
?>