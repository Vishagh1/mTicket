<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
  header("location:adminindex.php");
}
include 'header.php';
?>
<style>
  body {
    background-color: whitesmoke;
  }

  .container {
    width: 35%;
    border-spacing: 10px;
    box-shadow: 0px 0px 10px 0px gray;
    border-radius: 10px;
    font-family: Montserrat, sans-serif;
    font-size: 18px !important;
    align-content: center;
    padding: 40px 50px 70px 50px;
    margin-block: 12rem;
  }

  .link-button {
    background-color: black;
    border: 2px solid black;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: .2rem;
    width: 100%;
    transition: .3s all ease;
  }

  .link-button:hover {
    background-color: white;
    color: black;
  }
</style>

<html>

<head>
  <link rel='stylesheet' href='index.css'>
  <br><br>

  <div class="container">
    <h1 style="text-align:center; font-weight:bold; text-align:center; text-transform:capitalize; margin-block:1rem;">My Bookings</h1>
    <hr />
    <td><a href='admintraindb.php'><button class="link-button"><i class="fa-sharp fa-solid fa-ticket"></i>&nbsp &nbsp
          &nbsp View Train Bookings </button></a></td>
    </tr>
    <br> <br>

    <tr>

      <td><a href='adminbusdb.php'><button class="link-button"><i class="fa-solid fa-ticket-simple"></i>&nbsp &nbsp
            &nbsp View Bus Bookings</button></a></td>
      </td>
    </tr>
    </table>
    </tr>
  </div>
  <?php include 'footer.php';
  ?>

</html>