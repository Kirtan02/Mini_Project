<?php
session_start();
 ?>

<?php
include 'process.php';
 ?>


<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Kirtan Bhatt">
  <meta name="description" content="Blank">
  <title> Mediorder | Login </title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

  <header>
    <div class="container" id="opac">
      <div id="branding">
        <center><h1><a href="index.php">Mediorder</a></h1></center>
      </div>
    </div>
  </header>
<section>
  <div class="container" id="form_1" onsubmit="pwd()">
    <form name="Login" method="post" action="">
        <input type="text"  id="Name"  name="Name" placeholder="User Name">
        <input type="password" id="Password" name="Password" placeholder="Password">
        <input type="email" id="Email" name="Email" placeholder="Email">
        <input type="submit" name="submit" id="Submit" value="Submit">
        

        <!--<div class="alert">
          <span><?php echo $error; ?></span>
        </div>-->
      </form>
      
      
  </div>
</section>
      <footer>
        <p>Mediorder Copyright &copy; 2018</p>
      </footer>

</body>
</html>
