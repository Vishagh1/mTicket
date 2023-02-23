<?php


include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
  header("location:index.php");
}

include 'header.php';


$source = $_POST['source'];
$dest = $_POST['dest'];

$no = $_POST['number'];

if ($source == $dest) {
  echo '<div style="min-height:100vh"><h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>';
  echo '<center>
<td><form action="bookBUS.php"><button class="proceed-button" type="submit"; align=center;">Go back</button></form><br><br></div>';
} else {
  $sql_price = "SELECT * FROM `pricebus` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
  $result = $connect->query($sql_price);
  while ($row = $result->fetch_assoc()) {
    $final = $row["Price"] * $no;
    $busnum = $row["Bus_No."];

    echo '<h1 style="margin-top:10rem;"><center><b>Proceed to Checkout&nbsp;<i class="fa-solid fa-route"></i> </center></b></h1>';
    echo '<h1 class="route-details"><center>Bus number ' . $busnum . "</center></h1>";
    echo '
    <div class="payment-options">
      <div class="link-container">
        <form action="buspay.php" class="link">
          <span>
            ' . $source . '
            <span class="dim">to</span>
            ' . $dest . '
          </span>
          <button type="submit">₹ ' . $final . '<i class="fa-solid fa-chevron-right"></i></button>
        </form>
      </div>
    ';
    echo '<td><form action="bookBUS.php"><button class="proceed-button" type="submit"; align=center;">Go back</button></form><br><br>
    </div>
    ';
  }
  $_SESSION['final'] = $final;
  $_SESSION['source'] = $source;
  $_SESSION['dest'] = $dest;
  $_SESSION['busnum'] = $busnum;
  $_SESSION['NoOfpass'] = $no;
}

include 'footer.php'
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
    width: 200px;
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