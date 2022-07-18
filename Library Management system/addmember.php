<?php
     include('db_connect.php'); 
     if(isset($_POST['submit']))
     {
        echo "<script> window.location='member_registration.php'</script>";
     }
     else{
        echo "connection fails";
     }
?>