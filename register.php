<!--Registration Page-->


<?php     
include 'connect.php';                           
include 'homehead.php'
?>



<html>
<head>
 <style >  .table{  font-family: Montserrat, sans-serif;}


.register-link:hover,.register-link {
    text-decoration:none;
    color:white;
    font-size:1.5rem;
    margin-block:50rem;
 }

body{
    font-weight:300 !important;
    background: url('https://imgs.search.brave.com/YuWNqKVfbYbRqtEzwH2V63m-8D08DKbszhOXlFNIsN8/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJ0YWcuY29t/L3dhbGxwYXBlci9m/dWxsLzcvZi9kLzUx/MzExMS1kYXJrLXNw/YWNlLWJhY2tncm91/bmQtMjU2MHgxNjAw/LWNlbGwtcGhvbmUu/anBn');
    background-repeat:no-repeat;
    background-size:cover;
    background-position:  center bottom ;
    
 }

</style>	
<link rel='stylesheet' href='index.css'>
<title> Registration Page </title>
</head>
<div>
	
	<body>
		<form method='post' action ='register_insert.php' style="margin-block:10rem; background:transparent; backdrop-filter:blur(10px); color:white; box-shadow: 0px 0px 10px 0px #ffffff22;"  >
	<h2 style="margin-bottom:5rem; font-weight:100;"><center><b>User Registeration</center></b></h2>
<label>Name </label><input style="padding:10px; color:black; border-radius:5px; border:1px solid gray" placeholder="Enter response"  type="Text" name="name" maxlength='50' required>
<label>Email Id</label><input style="padding:10px; color:black; border-radius:5px; border:1px solid gray" placeholder="Enter response"  type="email" name="email" maxlength='50' required>
<div style="display:flex; gap:30px; margin-block:15px;">
	<label>Gender</label>
	<div><input style="color:black; border-radius:5px; border:1px solid gray" type="Radio" name="Gender" value="M">Male</div>
	<div><input type="Radio" name="Gender" value="F" required>Female</div>
</div>
<label>Date of Birth</label><input style="padding:10px; color:black; border-radius:5px; border:1px solid gray" type="Text" name="dob" maxlength='50' placeholder='yyyy-mm-dd' required>
<label>Password </label><input style="padding:10px; color:black; border-radius:5px; border:1px solid gray" placeholder="Enter response"  type="password" name="password" maxlength='50' required>
<label>Contact No </label><input style="padding:10px; color:black; border-radius:5px; border:1px solid gray" placeholder="Enter response"  type="tel"  name="phone"  maxlength='10' required>

<tr><td colspan='3'><center><button type='Submit' style="background-color:black; border:none; text-transform:uppercase;"  name='register_submit' required >Submit</button>
<a  class="register-link" href='sindex.php'>Registered? SignIn</a>
</div>
</form>
<div align="center" >
</div>
</body>


</html>