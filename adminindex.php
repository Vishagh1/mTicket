<?php
include 'connect.php';
include 'homehead.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <style >  *{  font-family: Montserrat, sans-serif;}

 .register-link:hover,.register-link {
    text-decoration:none;
    color:white;
    font-size:1.5rem;
    margin-left:1rem;
 }

 body::after{
      position: absolute;
      /* content:""; */
      inset:0;
      width:100%;
      height:100%;
      background:linear-gradient(to top, transparent 70%, black);
      background-repeat:no-repeat;
      background-size:cover;
      pointer-events:none;
    }

 body{
    font-weight:300 !important;
    background: url('https://imgs.search.brave.com/YuWNqKVfbYbRqtEzwH2V63m-8D08DKbszhOXlFNIsN8/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJ0YWcuY29t/L3dhbGxwYXBlci9m/dWxsLzcvZi9kLzUx/MzExMS1kYXJrLXNw/YWNlLWJhY2tncm91/bmQtMjU2MHgxNjAw/LWNlbGwtcGhvbmUu/anBn');
    background-repeat:no-repeat;
    background-size:cover;
    background-position:  center bottom ;
    
 }
</style>
<title>M-Ticket</title>
</head>
<!-- <div><center><img src="https://img.icons8.com/bubbles/300/000000/user.png"/></center></div> -->

<body style="">
    <form method='post' action ='adminauthenticate.php' style="margin-top:10rem; background:transparent; backdrop-filter:blur(10px); color:white; box-shadow: 0px 0px 10px 0px #ffffff22;"  >
        <h2 style="margin-bottom:5rem;"><center><b>Admin Sign In</center></b></h2>
<div>
<label style="">Email id:</label> <input style="color:black; border-radius:5px; border:1px solid gray" placeholder="Enter here..." type="email" name="email" maxlength='50' required/>
<label style="">Password:</label> <input style="color:black; border-radius:5px; border:1px solid gray" placeholder="Enter here..." type="password" name="password" maxlength='50' required/>
<tr><td colspan='2'>
    <center>
        <button type='Submit' style="background-color:black; border:none; text-transform:uppercase;" name='login_submit' >
        Sign In 
    </button>
</center></td></tr></table>
</div>
<div align="center" >
<h3><a class="register-link" href='sindex.php' style=""><b>User Sign In ?</b></a> </h3>
<br>

</div>

</table>
</form>

</body>

</html>