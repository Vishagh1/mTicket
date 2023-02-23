


<style >
  body{
    overflow:hidden;

  }
  .container{
     border-spacing: 10px;
     font-family: 'Poppins', sans-serif;
     font-size: 18px !important;
     border: 2px solid grey;
     margin-top: 50px;
     margin-bottom: 200px;
     padding-top: 50px;
     padding-right: 120px;
     padding-bottom: 50px;
     padding-left: 150px;
     align-content: center;

    }

    .hero {
      height:100vh;
      /* background: url('https://images.unsplash.com/photo-1563257076-8265731f709d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80'); */
      background-repeat:no-repeat;
      background-size:cover;
      background-position: center bottom;
      position:relative;
      color:white;
      padding:19vh 20rem;
      display:flex;
      flex-direction:column;
      align-items:center;
    }


    /* .hero::after{
      position: absolute;
      content:"";
      inset:0;
      width:100%;
      height:100%;
      background:linear-gradient(to top, transparent 70%, black);
      background-repeat:no-repeat;
      background-size:cover;
      pointer-events:none;
    } */
    body{
    font-weight:300 !important;
    background: url('https://images.unsplash.com/photo-1563257076-8265731f709d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80');
    background-repeat:no-repeat;
    background-size:cover;
    background-position:  center bottom ;
    
 }

    .blackBg{
      /* background:#00000050; */
      width:700px;
    }

    .hero h1{
      font-size:1.5rem;
    }
    .hero p{
      color:white;
      text-align:center;
      margin-top: 5rem;
      margin-bottom:10rem;
      font-weight:400;
      line-height:2.5rem;
    }
    .hero h1 span{
      font-size:7.5rem;
      font-weight:300;
      font-family: 'Unbounded', cursive; 
      font-family: 'DM Serif Text', serif;
      /* font-family: 'Poppins', sans-serif;
      font-family: 'Montserrat', sans-serif; */
    }


    .hero a{
      text-decoration:none;
      text-transform:uppercase;
      font-weight:bold;
      margin:20px;
      padding:1rem 3rem;
      border:2px solid white;
      border-radius:5px;
      background:white;
      color:black;
      transition:300ms all ease;
    }

    .hero a:hover{
      text-decoration:none;
      background:transparent;
      color:white;
      border-color: lightgreen;
    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<?php

include 'homehead.php';
?>
<div class="hero">
  <div class="blackBg">

    <h1>
      <span>M - Ticket</span>
    </h1>
    <p>
      
      THIS IS THE OFFICIAL M-TICKET WEB APPLICATION. THE USERS HAVE TO FIRST REGISTER TO BOOK TICKETS. TRAIN AS WELL AS BUS TICKETS CAN BE BOOKED HERE.
      NOTE THAT THE TICKETS BOOKED ARE ONLY APPLICABLE FOR 24 HRS. USER CAN USE ANY CARD TO MAKE THE PAYMENT.
    </p>
  </div>
  <div>
    <a href="book.php">Book Bus</a>
    <a href="bookbus.php">Book Train</a>
  </div>
</div>
</div>
<?php include 'footer.php';
?> 

</html>