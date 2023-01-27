
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

<style >

*{
  font-family: 'Poppins', sans-serif;

}

.center{
  display:flex;
  flex-direction:column;
  align-items:center;
}

.ticket{
  border:2px solid gray;
  border-radius:10px;
  padding:1rem;
  width:800px;
}
.table{
  margin:0;
  display:grid;
  grid-template-columns: 1fr 1fr;
}

.table *{
  padding:1rem;
  font-size:2rem;
  margin:0;
}

.table :nth-child(4n+1),
.table :nth-child(4n+2){
  background-color: rgb(201, 201, 201);
}
</style>


<?php
          include 'connect.php';
		  $pid=$_GET['pid'];
			
			$sel="SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>
           
<div class="center">
  <h1>Ticket Details</h1>
  
  <div id="printable" class="center ticket">
    <h1>Booking ID: <?php echo $row['T_No.'] ?> </h1>
    <div class="title">
      <h1 align="center">
        <span>
          <?php echo $row['source'] ?>  To  <?php echo $row['dest'] ?>
        </span>
      </h1>
      <br/>
    </div>
    <div class="table">
      <h2>Date</h2>
      <h2><?php echo $row['Date'] ?></h2>
      <h2>No of Passengers</h2>
      <h2><?php echo $row['NoOfpass'] ?></h2>
      <h2>Amount</h2>
      <h2><?php echo $row['NoOfpass'] ?></h2>
    </div>
    <h2><span>WISH YOU A HAPPY & SAFE JOURNEY</span> </h2>
  </div>
</div>
    
  

			<?php
		}
		?>







