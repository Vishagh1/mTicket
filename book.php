<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
  header("location:sindex.php");
}
include 'header.php';
?>

<style>
  body {
    font-weight: 300 !important;
    /* background: whitesmoke; */
    background: linear-gradient(lightgray, white);
  }

  .container {
    border-spacing: 10px;
    width: 40vw;
    font-family: Montserrat, sans-serif;
    font-size: 18px !important;
    background: white;
    box-shadow: 0px 0px 20px 0px gray;
    border-radius: 10px;
    align-content: center;
    padding: 10px 50px;
    margin-block: 12rem;
  }

  .proceed-button {
    width: 100%;
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

  .double-container {
    justify-content: space-between;
    align-items: center;
    display: flex;
    gap: 15px;
    flex-direction: row;
  }

  .double-container .input-container {
    margin-block: 0;
    padding-top: 0;
    /* border:1px solid red; */
    flex: 1;
  }

  .input-container {
    /* border:1px solid red; */
    margin-block: 3rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  #number {
    overflow: hidden;
    width: 600px;
  }

  input[type=number] {
    width: 250px;
    border-radius: 3px;
    border: 1px solid rgb(189, 189, 189);
    box-shadow: 0px 0px 2px 0px rgb(189, 189, 189) inset;
    padding: .1rem;
  }
</style>


</script>
</head>

<body>
  <form method='post' action='book_action.php' align='center'>
    <div class="container">
      <section id="form" class="">
        <div class="container2">
          <form id="bookingForm">
            <h1 style="text-align:center; font-weight:semibold; text-align:left; text-transform:capitalize; margin-block:1rem;">Book Your Train&nbsp;&nbsp;<i class="fa-solid fa-train"></i></h1>
            <hr />
            <div class="input-container">
              <label for="inputEmail4">Source Station :</label>
              <select id="inputState" class="form-control" name="source">
                <option>Panvel</option>
                <option>Khandeshwar</option>
                <option>Manasarovar</option>
                <option>Kharghar</option>
                <option>Belapur CBD</option>
                <option>Seawood Darave</option>
                <option>Nerul</option>
                <option>Juinagar</option>
                <option>Sanpada</option>
                <option>Vashi</option>
                <option>Turbhe</option>
                <option>Koparkhairne</option>
                <option>Ghansoli</option>
                <option>Rabale</option>
                <option>Airoli</option>
                <option>Thane</option>
              </select>
            </div>
            <div class="input-container">
              <label for="inputPassword4">Final Destination :</label>
              <select id="inputState" class="form-control" name="dest">
                <option>Panvel</option>
                <option>Khandeshwar</option>
                <option>Manasarovar</option>
                <option>Kharghar</option>
                <option>Belapur CBD</option>
                <option>Seawood Darave</option>
                <option>Nerul</option>
                <option>Juinagar</option>
                <option>Sanpada</option>
                <option>Vashi</option>
                <option>Turbhe</option>
                <option>Koparkhairne</option>
                <option>Ghansoli</option>
                <option>Rabale</option>
                <option>Airoli</option>
                <option>Thane</option>
              </select>
            </div>
            <div class="input-container">
              <label for="inputPassword4"> Train Class :</label>
              <select id="inputState" class="form-control" name="class">
                <option>First</option>
                <option>Second</option>
                <option>A.C</option>
              </select>
            </div>
            <div class="double-container">

              <div class="input-container">
                <label for="inputState">Journey Type :</label>
                <select id="inputState" class="form-control" name="type">
                  <option>Single</option>
                  <option>Return</option>
                </select>
              </div>
              <div class="input-container">
                <label for="inputState">
                  <h8>No Of Passengers :</h8>
                </label>
                <input type="number" name="number" required min="1" max="5">
              </div>
            </div>
            <div class="input-container">
              <button type="submit" class="proceed-button" name="login_submit">Proceed</button>
            </div>
          </form>
        </div>

      </section>
    </div>



    <?php include 'footer.php';
    ?>

</body>

</html>