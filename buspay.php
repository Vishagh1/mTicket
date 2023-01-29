<?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '') {
  header("location:index.php");
}
?>
<html>

<head>
  <style>
    .formm {
      font-family: Montserrat, sans-serif;
      font-size: 18px !important;

    }
  </style>
  <link rel='stylesheet' href='index.css'>
  <link rel="shortcut icon" href="logofig.jpg" />
  <title> Registration Page </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  body {
    background-color: whitesmoke;
  }

  .payment-form {
    max-width: 600px;
    margin-top: 10rem;
    background: transparent;
    backdrop-filter: blur(10px);
    color: black;
    background-color: white;
    box-shadow: 0px 0px 10px 0px #dfdfdf;
    padding: 4rem;
  }

  .payment-form h2 {
    font-weight: 900;
    font-size: 3rem;
    margin-block: 1.5rem;
    margin-bottom: 4rem;
  }

  .input-container h3 {
    font-size: 1.5rem;
    font-weight: 600;
  }

  .input-container .double-input {
    display: flex;
    gap: 1rem;
  }

  .input-container input {
    background-color: lightgray;
    border-radius: 4px;
    font-size: 1.4rem;
    padding: .8rem;
  }

  .proceed-button {
    padding: 1rem;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: .2rem;
    align-content: left;
    color: white;
    background-color: black;
    width: 100%;
    border-radius: 4px;
    transition: .3s all ease;
    /* border-color: black; */
  }

  .proceed-button:hover {
    background-color: white;
    color: black;
  }
</style>

<body>
  <div class="formm">
    <form class="payment-form" method='post' action='buspayaction.php'>
      <h2>Enter Payment Details</h2>
      <hr>
      <div class="input-container">
        <h3> Card No.: </h3>
        <input type="Number" name="cno" placeholder="1111-2222-3333-4444" maxlength='50'>
      </div>
      <div class="input-container">
        <h3>Name on Card: </h3>
        <input type="Text" name="name" placeholder="Vishagh" maxlength='50'>
      </div>
      <div class="input-container">
        <h3>Expiry Date : </h3>
        <div class="double-input">
          <input type="Number" name="Em" placeholder='MM' maxlength='2'>
          <input type="Number" name="Ey" placeholder='YY' maxlength='2'>
        </div>
      </div>
      <div class="input-container">
        <h3>CVV No:</h3>
        <input type="Password" name="Cvv" maxlength='3'>
      </div>
      <div class="input-container">
        <h3>PIN NO: </h3>
        <input type="Password" name="Pin" maxlength='4'>
      </div>
      <div class="input-container">
        <button class="proceed-button" type='Submit' name='register_submit'>Complete Payment</button>
      </div>
    </form>
    <br>
    <br>



  </div>
  <?php include 'footer.php';
  ?>

</html>