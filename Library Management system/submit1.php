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
            echo "<script>alert('Incorrect Password!'); window.location='addadmin.php'</script>";
        }
        else
        {
            $result=mysqli_query($conn,"select * from admin WHERE admin_id='$admin_id' ") or die (mysqli_error());
		    $row=mysqli_num_rows($result);
            if ($row > 0)
		    {
                echo "<script>alert('ID Number already active!'); window.location='addadmin.php'</script>";
			
		    }
            $sql="INSERT INTO admin (admin_id,name,username,password,confirm_password) VALUES (' $admin_id',' $name',' $username','  $password','  $confirm_password')";
            $Result=mysqli_query($conn,$sql);
            if($Result)
            {
                echo "<script>alert('admin successfully added!'); window.location='addadmin.php'</script>";

            }
        }
        
           
    } 

?>
 
        

            