 
 <?php      
    include('db_connect.php'); 
  ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylemem.css">
    <title>Members</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Members</a>
            <a href="#">Books</a>
            <a href="#">Admin</a>
            <a href="#">Member Attendence</a>
            <a href="#">Borrow</a>
            <a href="#">Borrowed Books</a>
            <a href="#">Returned Books</a>
            <a href="#">About Us</a>
        </nav>
    </header>
    <h1>Member Registration</h1>
    <form action="submit.php"  method="POST">
        
        <div>
        <p class="user_id">&nbsp;&nbsp;&nbsp;&nbsp;User Id: <input type="number" name="member_id" id="member_id" placeholder="123456" required>
            &nbsp;&nbsp;&nbsp;&nbsp;College Id: <input type="number" name="college_id" id="college_id" placeholder="123456" required></p>
        <p class="name"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Name: <input type="text" name="name" id="name" placeholder="Eg:Ashwin" required>
            &nbsp;&nbsp;&nbsp;Contact:  &nbsp;&nbsp; &nbsp;<input type="number" name="contact" id="contact" placeholder="123456789" required></p>
        <Span class="gender">
            <p>Gender: 
        <select name="Gender" id="gender">
            <option value="">--Select--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        </span>
        <Span class="type">
            &nbsp;&nbsp;&nbsp;&nbsp;Type: 
        <select name="type" id="type">
            <option value="">--Select--</option>
            <option value="student">Student</option>
            <option value="staff">Staff</option>
            <option value="other">Other</option>
        </select></p>
        </span>
        <Span class="department">
            <p>Department: 
        <select name="dept" id="dept">
            <option value="">--Select--</option>
            <option value="CSE">CSE</option>
            <option value="IT">IT</option>
            <option value="ME">ME</option>
            <option value="EEE">EEE</option>
            <option value="EEE">EC</option>
            <option value="CIVIL">CIVIL</option>
        </select>
        </span>
        <Span class="semester">
            &nbsp;&nbsp;&nbsp;&nbsp;Semester: 
        <select name="semester" id="semester">
            <option value="">--Select--</option>
            <option value="1">S1</option>
            <option value="2">S2</option>
            <option value="3">S3</option>
            <option value="4">S4</option>
            <option value="5">S5</option>
            <option value="6">S6</option>
            <option value="7">S7</option>
            <option value="8">S8</option>
        </select>
        </span>
        <p><input type="submit" name="submit" value="Submit"></button>  <input type="submit" name="reset" value="Reset"></p>
</form>


</body>
<!-- <footer>&copy;2022 Library Management System</footer> -->
</html>