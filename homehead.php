<html>
<head>
  <title>M-Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=3.0, minimum-scale=0.46">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 
             
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
  </head>

  <style>

    *{
      font-family: 'Poppins', sans-serif;
    }

    nav{
      display:flex;
      align-items:center;
      /* width: 100vw; */
      justify-content:space-between;
      padding: 15px 2.5rem;
      /* background:#00000055; */
    }

    nav img{
      height:50px;
      aspect-ratio:1;
    }
    
    .logo, .nav-actions{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:1rem;
    }

    .nav-actions{
      gap:3.8rem;
    }
    .nav-actions li{
      list-style: none;
      display:flex;
    }
    
    .nav-actions a{
      text-decoration:none;
      font-size:1.8rem;
      color:white;
    }
    
    .nav-actions .fa-solid{
      margin-right:8px;
    }

    .nav-actions li a{
      transition:300ms all ease;
    }
    .nav-actions li a:hover{
      color:#eee;
      transform:scale(1.1);
    }

    .logo{
      position:relative;
    }

  .logo span{
    position: absolute;
    left:-200px;
    /* z-index: 0; */
    /* border:2px solid red; */
    opacity: 0;
    overflow:hidden;
    width:300px;
    transition:500ms all ease;
  }
  .logo:hover span{
    opacity: 1;
    left:150%;
  }
  .logo {
    color:white;
    
  }

  </style>

<nav>
  <div class="logo">
    <a href="index.php">
      
      <h3 class="logo" style="color:white;">
      <i class="fa-solid fa-train"></i>
      <span>M-TICKET</span></h3>
    </a>
    <!-- <img src="https://img.icons8.com/officel/64/000000/tracks-intersection.png"/> -->
  </div>
  <div class="nav-actions">
    <li>
      <a href="register.php">
      <i class="fa-solid fa-user-plus"></i>
      Register
    </a></li>
    <li><a href="sindex.php">
      <i class="fa-solid fa-user"></i>
      Sign In</a></li>
    <li><a href="adminindex.php"><i class="fa-sharp fa-solid fa-user-tie"></i>Admin</a></li>
  </div>
</nav>

</body>
</html>
