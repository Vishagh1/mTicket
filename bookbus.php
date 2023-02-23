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
    width: 100%;
    border-radius: 3px;
    border: 1px solid  rgb(189, 189, 189);
    box-shadow: 0px 0px 2px 0px  rgb(189, 189, 189) inset;
    padding: .1rem;
  }
</style>

</script>
</head>

<body>
  <form method='post' action='busaction.php'>
    <div class="container">
      <section id="form" class="formborder">
        <div class="container2">
          <form>
            <h1 style="text-align:center; font-weight:semibold; text-align:left; text-transform:capitalize; margin-block:1rem;">Book Your Bus&nbsp;&nbsp;<i class="fa-solid fa-bus"></i></h1>
            <hr />
            <div class="input-container">
              <label for="inputEmail4">Source Bus Stop </label>
              <select id="inputState" class="form-control" name="source">
                <option>Thane Railway Station</option>
                <option>Dadoji Kondadev Stadium</option>
                <option>Court Naka</option>
                <option>Kalwa Naka</option>
                <option>Shivaji Maharaj Hospital</option>
                <option>Vitawa / Paryache Maidan</option>
                <option>Sha Damodar Vitavkar Marg</option>
                <option>Ganpati Pada</option>
                <option>Mukund Company</option>
                <option>Ganesh Nagar</option>
                <option>Digha Gaon</option>
                <option>MSEB</option>
                <option>Reliable Plaza</option>
                <option>Airoli Naka</option>
                <option>Airoli Railway Station</option>
                <option>Bharat Bijali</option>
                <option>Siemens Company</option>
                <option>Rabale Police Station</option>
                <option>Rabale Naka</option>
              </select>
            </div>
            <div class="input-container">
              <label for="inputPassword4">Final Destination</label>
              <select id="inputState" class="form-control" name="dest">
                <option>Thane Railway Station</option>
                <option>Dadoji Kondadev Stadium</option>
                <option>Court Naka</option>
                <option>Kalwa Naka</option>
                <option>Shivaji Maharaj Hospital</option>
                <option>Vitawa / Paryache Maidan</option>
                <option>Sha Damodar Vitavkar Marg</option>
                <option>Ganpati Pada</option>
                <option>Mukund Company</option>
                <option>Ganesh Nagar</option>
                <option>Digha Gaon</option>
                <option>MSEB</option>
                <option>Reliable Plaza</option>
                <option>Airoli Naka</option>
                <option>Airoli Railway Station</option>
                <option>Bharat Bijali</option>
                <option>Siemens Company</option>
                <option>Rabale Police Station</option>
                <option>Rabale Naka</option>
              </select>
            </div>
            <div class="input-container">
              <label for="inputState">
                <h8>No Of Passengers</h8>
              </label>
              <input type="number" name="number" required min="1" max="5">
            </div>
            <div class="input-container">
              <button type="submit" class="proceed-button" name="login_submit">Proceed</button>
            </div>
          </form>
        </div>

      </section>
    </div>





</body>

<?php include 'footer.php';
?>

</html>