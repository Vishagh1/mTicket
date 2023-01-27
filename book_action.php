<?php

include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
  header("location:sindex.php");
}
include 'header.php';


$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest) {
  echo "<h1>Selected source and destination same , Please refill the details </h1><br><br>";
} else {
  echo "<h1><center><b>Select Route and Proceed to Checkout</center></b></h1>";
  $sql_price = "SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `type` LIKE '$type' AND `class` = '$class'";

  echo "<h1><center>" . $class . " class Ticket From " . $source . " to " . $dest . "</center></h1>";
  $result = $connect->query($sql_price);
  while ($row = $result->fetch_assoc()) {
    $final = $row["Price"];
    $Route = $row["Route"];
    $final = $final * $no;
    // echo "<h1><center>Total <b>" . $class . " Class , " . $type . " " . $type . "</b> Journey type fare from <b>" . $source . " to " . $dest . "</b> is  : ₹ <b>" . $final . "</b> and route via <b>" . $Route .  "</b></center></h1><br><br>";
    echo " <h1><center> via "  . $Route . " Cost: " . $final . "</center></h1>";
    echo '<center><form action="pay.php"><button class="proceed-button">Checkout</button></form></center>
';
  }
  $_SESSION['final'] = $final;
  $_SESSION['source'] = $source;
  $_SESSION['dest'] = $dest;
  $_SESSION['Class'] = $class;
  $_SESSION['Type'] = $type;
  $_SESSION['NoOfpass'] = $no;
  $_SESSION['Route'] = $source . $Route . $dest;
}

?>

<style>
  .proceed-button {
    padding: 1rem;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: .2rem;
    align-content: left;
    color: white;
    background-color: black;
    transition: .3s all ease;
  }

  .proceed-button:hover {
    background-color: white;
    color: black;
  }
</style>

<center>
  <form action="book.php">
    <button class="proceed-button" type="submit">
      Go back
    </button>
  </form>
</center>

<?php include 'footer.php';
?>