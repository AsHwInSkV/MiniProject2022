<?php
     include('db_connect.php'); 

    if(isset($_POST['submit']))
    {
        $admin_id=$_POST['userid'];
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirmpassword'];
        if($password!=$confirm_password)
        {
            echo "Incorrect Password.";
        }
        else
        {
            $sql="INSERT INTO admin (admin_id,name,username,password,confirm_password) VALUES (' $admin_id',' $name',' $username','  $password','  $confirm_password')";
            $Result=mysqli_query($conn,$sql);
            if($Result)
            {
                echo "New Admin added Succesfully .";
                //header("location:addadmin.php"); 
            }
        }
        
           
    } 

?>