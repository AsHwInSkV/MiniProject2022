<?php      
    include('db_connect.php');  

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location:home.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            header("location:login.php");  
        }     
?>  