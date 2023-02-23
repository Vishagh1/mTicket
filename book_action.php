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
  echo '<h1 style="margin-top:10rem;"><center><b>Select Route and Proceed to Checkout&nbsp;<i class="fa-solid fa-route"></i></center></b></h1>';
  $sql_price = "SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `type` LIKE '$type' AND `class` = '$class'";

  echo '<h1 class="route-details"><center>' . $class . " class Ticket From " . $source . " to " . $dest . "</center></h1>";
  $result = $connect->query($sql_price);
  echo '
  <div class="payment-options">
	  <div class="link-container">
  ';

  while ($row = $result->fetch_assoc()) {
    $final = $row["Price"];
    $Route = $row["Route"];
    $final = $final * $no;
    $length = strlen($Route) - 2;
    echo '
    <form action="pay.php" class="link">
      <span>
        <span class="dim">via</span>' . substr($Route, 1, $length) . '
      </span>
      <button type="submit">₹ ' . $final . '<i class="fa-solid fa-chevron-right"></i></button>
    </form>
    ';
  }

  echo '</div>';
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
    width:350px;
    border-radius: 100px;
    transition: .3s all ease;
    margin-top: 5rem;
  }

  .proceed-button:hover {
    background-color: white;
    color: black;
  }

  .route-details {
    color: gray;
    font-size: 1.7rem;
    font-weight: 500;
    margin-top: 5rem;
  }

  .payment-options {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .link-container {
    margin-top: 4rem;
    width: 90%;
    max-width: 600px;
    display: flex;
    flex-direction: column;
    gap: 2rem;
    font-size: 1.7rem;
    font-weight: 600;
    cursor: pointer;
  }

  .link-container .dim {
    color: gray;
    font-size: 1.4rem;
    font-weight: 500;
  }

  .link-container .link {
    transition: .3s all ease;
    background-color: rgb(240, 240, 240);
    border-radius: 1000px;
    padding: 1.5rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .link-container .link:hover {
    background-color: lightgray;
    transform: scale(1.03);
  }

  .link-container .link *,
  .link-container .link *:hover {
    border: none;
    display: flex;
    align-items: center;
    gap: 1rem;
    background-color: transparent;
  }
</style>

<center>
  <form action="book.php">
    <button class="proceed-button" type="submit">
      Go back
    </button>
  </form>
</center>
</div>
<?php include 'footer.php';
?>