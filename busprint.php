<head>
  <title>M-Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=3.0, minimum-scale=0.46">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<style>
  * {
    font-family: 'Poppins', sans-serif;

  }

  body {
    background: whitesmoke !important;
  }

  .center {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 8rem;
  }

  .ticket {
    border: 2px solid gray;
    border-radius: 10px;
    padding: 1rem;
    width: 800px;
  }

  #printable {
    border: 1px solid #dfdfdf;
    box-shadow: 0px 0px 10px 0px gray;
    background-color: white;
  }

  .table {
    margin: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-bottom: 2rem;
  }

  .title {
    background-color: rgb(255, 195, 85);
    width: 100%;
    padding: 10px;
    text-align: center;
    margin-bottom: 2rem;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
    color:rgb(29, 28, 28);
  }

  .table * {
    padding: 1rem;
    font-size: 2rem;
    margin: 0;
  }

  .table :nth-child(4n+1),
  .table :nth-child(4n+2) {
    /* background-color: rgb(201, 201, 201); */
    border-top: 1px solid lightgray;
    border-bottom: 1px solid lightgray;
  }
  .tickethead {
    margin-top: 5rem;
    margin-bottom: 2rem;
  }
</style>

<?php
include 'connect.php';
include 'header.php';
$pid = $_GET['pid'];

$sel = "SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
$rs = $connect->query($sel);
while ($row = $rs->fetch_assoc()) {

?>
  <div class="center">
  <div class="tickethead">
      <h1 style="margin-bottom: 3rem;">Ticket Details&nbsp;&nbsp;<i class="fa-solid fa-ticket"></i></h1>
    </div>

    <div id="printable" class="center ticket">
      <!-- <h1>Booking ID: <?php echo $row['T_No.'] ?> </h1> -->
      <div style=" " class="title">
        <h1>
          <span>
            <?php echo $row['source'] ?> To <?php echo $row['dest'] ?>
          </span>
        </h1>
        <br />
      </div>
      <div class="table">
        <h2>Date</h2>
        <h2><?php echo $row['Date'] ?></h2>
        <h2>No of Passengers</h2>
        <h2><?php echo $row['NoOfpass'] ?></h2>
        <h2>Amount</h2>
        <h2>???&nbsp;<?php echo $row['Amt'] ?></h2>
      </div>
      <h2 class="ticketend" style="background-color: rgb(255, 182, 45); width:100%; text-align:center; padding:15px; margin-bottom:0; margin-top:0; border-bottom-left-radius: 7px; border-bottom-right-radius: 7px; font-size: 1.5rem;"><span><i class="fa-solid fa-hands-praying"></i>&nbsp;HAPPY JOURNEY&nbsp;<i class="fa-solid fa-hands-praying"></i></span> </h2>
    </div>
  </div>



<?php
}
include 'footer.php';
?>