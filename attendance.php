<?php
session_start();
?>

<?php
include 'orders.php';
?>

  <html>
    <head>
      <title>Mediorder | AddOrder</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<!--Sidebar-->
<nav class="#212121 grey darken-4">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Mediorder</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
      <!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>-->
      <ul id="slide-out" class="side-nav">
          <li><div class="user-view">
            <div class="background">
              <img class="responsive-img" src="./img/image.png">
            </div>
            <a href="#!user"><i class="material-icons">person</i></a>
            <a href="#!name"><span class="white-text name"><?php echo $_SESSION["username"] ?></span></a>
            
              <?php
              $user=$_SESSION["username"];
              $conn=mysqli_connect("localhost","root","123");

              $db=mysqli_select_db($conn,"mediorder");

              $query="SELECT Id FROM owner WHERE Name='$user'";

              $result=mysqli_query($conn,$query);

                while ($row = mysqli_fetch_assoc($result)){

                  foreach($row as $field) {
                      echo  htmlspecialchars($field);
                  }
                }
             ?>
              </div></li>
          <!--<li><a class="waves-effect" href=".\build.php"><i class="material-icons">build</i>Configure</a></li>
          <li><a class="waves-effect" href="#!"><i class="material-icons">people</i>Defaulter</a></li>
          <li><a class="waves-effect" href="#!"></a></li>-->
        </ul>
    </div>
  </nav>
  <br>
  <h5 class="center"></h5><br><br>

  <div class="container">
  <div class="row">
      <form class="col s12 offset-m3" method="post" action="">
        <div class="row">
          <div class="input-field col s4">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="number" class="validate" name="owid">
            <label for="icon_prefix">Id</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <i class="material-icons prefix">supervisor_account</i>
            <input id="icon_prefix" type="number" class="validate" name="disid">
            <label for="icon_prefix">Distributor Id</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
          <i class="material-icons prefix">format_list_numbered</i>
          <input id="icon_prefix" type="number" class="validate" name="srno">
          <label for="icon_prefix">Serial No.</label>
          </div>
        </div>
          
        <div class="row">
          <div class="input-field col s4">
          <i class="material-icons prefix">create</i>
          <input id="icon_prefix" type="text" class="validate" name="medtype">
           <label for="icon_prefix">Medicine type</label>
          </div>
        </div>
          <div class="row">
          <div class="input-field col s4">
          <i class="material-icons prefix">create</i>
          <input id="icon_prefix" type="text" class="validate" name="medname">
           <label for="icon_prefix">Medicine name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
          <i class="material-icons prefix">create</i>
          <input id="icon_prefix" type="number" class="validate" name="quant">
           <label for="icon_prefix">Quantity</label>
          </div>
        </div>
          <div class="row">
          <div class="input-field col s4">
          <i class="material-icons prefix">date_range</i>
          <input type="date" class="datepicker" placeholder="Select Date" name="Date">
          </div>
        </div>
        <input type="submit" name="submit" id="Submit" value="Submit">

      </form>
      </div>
      </div>
  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".button-collapse").sideNav();
      </script>
      <script type="text/javascript">
      $('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});
      </script>
  </body>
</html>
