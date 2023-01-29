<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
	header("location:sindex.php");
}
include 'header.php';
?>
<style>
	.profile-container {
		margin-block: 5rem;
		display: flex;
		align-items: center;
		gap: 4rem;
	}

	.profile-pic {
		width: 200px;
		aspect-ratio: 1;
		border-radius: 10000px;
		object-fit: cover;
	}

	.profile-name {
		font-weight: 700;
		font-size: 2.5rem;
		margin-bottom: 2rem;
	}

	.profile-email,
	.profile-phone {
		display: flex;
		gap: .8rem;
		align-items: center;
		color: gray;
		font-weight: 300;
		font-size: 1.7rem;
	}

	.profile-screen {
		width: 100%;
		min-height: 100vh;
		display: flex;
		flex-direction: column;
		align-items: center;
		gap: 0rem;
	}

	.logout-btn {
		background-color: yellow;
		display: flex;
		gap: 10px;
		align-items: center;
		border-radius: 1000px;
		color: black;
		text-transform: uppercase;
		font-weight: 600;
		border: 3px solid black;
		padding: .7rem 4rem;
		font-size: 2rem;
		letter-spacing: .2rem;
		transition: .3s all ease;
	}

	.logout-btn:hover {
		text-decoration: none;
		transform: scale(1.2);
		color: black;
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

	.link-container .link span {
		display: flex;
		align-items: center;
		gap: 1rem;
	}
</style>
<div class="profile-screen">

	<div class="profile-container">
		<img class="profile-pic" src="https://imgs.search.brave.com/bHEPdjQKfAHBv3O5s08zHojS4OWSdBATvseO4gPWONs/rs:fit:1000:740:1/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE1/Mjk2NjUyNTM1Njkt/NmQwMWMwZWFmN2I2/P2l4bGliPXJiLTEu/Mi4xJml4aWQ9ZXlK/aGNIQmZhV1FpT2pF/eU1EZDkmdz0xMDAw/JnE9ODA" alt="profile-pic">
		<div>
			<h3 class="profile-name"><?php echo $_SESSION['name'] ?></h3>
			<h4 class="profile-email"><i class="fa-solid fa-envelope"></i><?php echo $_SESSION['email'] ?></h4>
			<h4 class="profile-phone"><i class="fa-solid fa-phone"></i><?php echo $_SESSION['phone'] ?></h4>
		</div>
	</div>
	<a href="logout.php" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i>logout</a>

	<div class="link-container">
		<div class="link">
			<span><i class="fa-solid fa-shield-halved"></i>Privacy</span>
			<i class="fa-solid fa-chevron-right"></i>
		</div>
		<div class="link">
			<span><i class="fa-regular fa-file"></i>Term & Conditions</span>
			<i class="fa-solid fa-chevron-right"></i>
		</div>
		<div class="link">
			<span><i class="fa-solid fa-gear"></i>Settings</span>
			<i class="fa-solid fa-chevron-right"></i>
		</div>
		<div class="link">
			<span><i class="fa-solid fa-circle-question"></i>Customer Support</span>
			<i class="fa-solid fa-chevron-right"></i>
		</div>
	</div>
</div>

<?php include 'footer.php';
?>