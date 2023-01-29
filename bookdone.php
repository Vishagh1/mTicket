<?php
include 'connect.php';


session_start();
if ($_SESSION['log'] == '') {
	header("location:index.php");
}
include 'header.php';
?>
<style>
	#font {
		font-family: Montserrat, sans-serif;
		font-size: 18px !important;

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
		width: 300px;
		border-radius: 100px;
		transition: .3s all ease;
		margin-top: 5rem;
	}

	.proceed-button:hover {
		background-color: white;
		color: black !important;
	}

	.booking-summary-table {
		width: 50%;
	}

	.booking-summary-table th,
	.booking-summary-table td {
		background: transparent !important;
	}
</style>

<link rel='stylesheet' href='index.css'>

</head>
<?php
$result = mysqli_query($connect, "SELECT * FROM `transactions` WHERE `email`='" . $_SESSION['email'] . "' ORDER BY `T_No.` DESC LIMIT 1");
while ($row = mysqli_fetch_assoc($result)) :
	$tno = $row["T_No."];
	$_SESSION['tno'] = $tno;
?>

	<body style="background-color: F5F1F0; ">
		<h2 align="center"><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png" /> Booking Summary</b></h2>
		<br>
		<div style="display:flex; flex-direction:column; align-items:center">


			<table class="table table-striped booking-summary-table" id="font">

				<tr>
					<th>Booking ID</th>
					<td><?php echo $row['T_No.']; ?></td>
				</tr>

				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>



				<tr>
					<th>Source Station</th>
					<td><?php echo $_SESSION['source'] ?></td>
				</tr>

				<tr>
					<th>Destination</th>
					<td><?php echo $_SESSION['dest'] ?></td>
				</tr>

				<tr>
					<th>Route</th>
					<td><?php echo $_SESSION['Route'] ?></td>
				</tr>

				<tr>
					<th>Amount</th>
					<td>₹&nbsp&nbsp<?php echo $_SESSION['final'] ?></td>
				</tr>


			</table>

		</div>


		<table align="Center">
			<tr>
				<td>
					<div>
				<td><a href="print.php?pid='<?php echo $_SESSION['tno'] ?>' " target="_blank"><button class="proceed-button">
							Print Ticket
						</button></a></td>
				</td>
				</td>
			</tr>
	</body>
	</div>
<?php endwhile; ?>


</html>