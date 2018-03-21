<?php
session_start();
?>


  <html>
    <head>
      <title>Mediorder | Welcome</title>
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
             ?></span></a>
          </div></li>
          <!--<li><a class="waves-effect" href=".\build.php"><i class="material-icons">build</i>Configure</a></li>
          <li><a class="waves-effect" href="#!"><i class="material-icons">people</i>Defaulter</a></li>
          <li><a class="waves-effect" href="#!"></a></li>-->
        </ul>
    </div>
  </nav>
  <br>
  <h5 class="center"><b>Order List</b></h5><br><br>

  <div class="container">
    <table class="centered bordered striped">
          <thead>
            <tr>
                <th>Id</th>
                <th>Dist.Id</th>
                <th>Sr.No</th>
                <th>Medicine Type</th>
                <th>Medicine Name</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
          </thead>
        <tbody>
             <?php
              $conn=mysqli_connect("localhost","root","123");

  $db=mysqli_select_db($conn,"mediorder");

  $query="SELECT * from orders";

  $result=mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result)){
      echo '<tr>';
      foreach($row as $field) {
          echo '<td>' . htmlspecialchars($field) . '</td>';
      }
      
      echo '</tr>';
    }

  mysqli_close($conn);
   ?>
          </tbody>

 </table>
        <a class="waves-effect waves-light btn" href=".\attendance.php">Add</a>

 </div>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
      <script type="text/javascript">
        $(".button-collapse").sideNav();
        </script>
    </body>
  </html>
