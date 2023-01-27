<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>


<style >
  * {
    margin: 0;padding: 0;
  }
    
    .hero{
      height:100vh;
      background: url('https://images.unsplash.com/photo-1563257076-8265731f709d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80');
      background-repeat:no-repeat;
      background-size:cover;
      background-position: center bottom;
      position:relative;
      color:white;
      padding:25vh 20rem;
      display:flex;
      flex-direction:column;
      align-items:center;
    }

    .hero::after{
      position: absolute;
      content:"";
      inset:0;
      width:100%;
      height:100%;
      background:linear-gradient(to top, transparent 70%, black);
      background-repeat:no-repeat;
      background-size:cover;
      pointer-events:none;
    }


    .blackBg{
      /* background:#00000050; */

    }

    .hero h1{
      font-size:1.5rem;
    }
    .hero p{
      color:white;
      text-align:center;
      margin-bottom:10rem;
      font-weight:200;
      line-height:2.5rem;
    }
    .hero h1 span{
      font-size:6.5rem;
      font-weight:300;
      /* font-family: 'Unbounded', cursive; */
      /* font-family: 'DM Serif Text', serif; */
      font-family: 'Poppins', sans-serif;
      font-family: 'Montserrat', sans-serif;
    }


    .hero a{
      text-decoration:none;
      text-transform:uppercase;
      font-weight:bold;
      margin:10px;
      padding:1rem 3rem;
      border:2px solid white;
      border-radius:5px;
      background:white;
      color:black;
      transition:300ms all ease;
    }

    .hero a:hover{
      background:transparent;
      color:white;
    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>

<div class="hero">
  <div class="blackBg">

    <h1>
      <span>M-Ticket</span>
    </h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, saepe mollitia. Explicabo deleniti, fugiat, quo hic vel, suscipit nobis nostrum sed ex similique debitis reiciendis! Illo adipisci sed recusandae atque.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, saepe mollitia. Explicabo deleniti, fugiat, quo hic vel, suscipit nobis nostrum sed ex similique debitis reiciendis! Illo adipisci sed recusandae atque.
    </p>
  </div>
  <div>
    <a href="book.php">Book Bus</a>
    <a href="bookbus.php">Book Train</a>
  </div>
</div>

</html>