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
    
        $result=mysqli_query($conn,"select * from member_registration WHERE member_id='$member_id' ") or die (mysqli_error());
		$row=mysqli_num_rows($result);
        if ($row > 0)
		{
            echo "<script>alert('ID Number already active!'); window.location='member_registration.php'</script>";
			
		}
        else{
            $sql="INSERT INTO member_registration (member_id,college_id,name,contact,semester,Gender,type,dept) VALUES (' $member_id',' $college_id',' $name',' $contact','  $semester','  $Gender',' $type',' $dept')";
            $Result=mysqli_query($conn,$sql);
            
            if($Result)
            {
                echo "<script>alert('member successfully added!'); window.location='member_registration.php'</script>";

            }
       
    } 
}

?>