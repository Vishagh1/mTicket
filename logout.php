<?php
include 'head2.php';

session_start();
?>
<html>
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
        width: 300px;
        border-radius: 100px;
        transition: .3s all ease;
        margin-top: 5rem;
    }

    .proceed-button:hover {
        background-color: white;
        color: black;
    }
    .para{
        font-family: 'Poppins', sans-serif;
    }
</style>

<head>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
</head>

<body style="background-color: F5F1F0;">
    <?php
    session_destroy();
    echo '<center><h2 class="para">Thank You for using M-Ticket Booking Application&nbsp;<i class="fa-solid fa-hands-praying"></i></h2></center><br>';
    echo '<center><table><tr><td><A href="index.php"><button class="proceed-button">Sign in &nbsp&nbspAgain</button></a></td></tr></table></center>';
    ?>
</body style="background-color: F5F1F0;">

</html>