<?php
     include('db_connect.php'); 

    if(isset($_POST['submit']))
    {
        $member_id=$_POST['member_id'];
        $college_id=$_POST['college_id'];
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $type=$_POST['type'];
        $Gender=$_POST['Gender'];
        $dept=$_POST['dept'];
        $semester=$_POST['semester'];
    
        $sql="INSERT INTO member_registration (member_id,college_id,name,contact,semester,Gender,type,dept) VALUES (' $member_id',' $college_id',' $name',' $contact','  $semester','  $Gender',' $type',' $dept')";
        $Result=mysqli_query($conn,$sql);
        if($Result)
        {
            echo "Registration Succesfully Completed.";
            header("location:member_registration.php"); 
        }
        else
        {
            echo "Registration not Succesfully.";
            header("location:member_registration.php"); 
        }
    } 

?>