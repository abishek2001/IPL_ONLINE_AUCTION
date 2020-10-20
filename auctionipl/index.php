<?php
session_start();
include('connection.php');

include('logout.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPL AUCTION 2020</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styles.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="img/bcci_logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> IPL AUCTION 2020</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto right">

    </ul>
    <ul class="nav-item navbar-nav navbar-right nav-pills">
    <button type="button" class="btn btn-lg green navlink" data-toggle="modal" data-target="#loginModaladmin">BCCI Admin Login</button>
    </ul>
  </div>
</nav>
<div class="container " id="top">
  <p><strong>Auctioner Login details</strong> and Team owner Login Details have been sent to their respective mail ID's by BCCI</p>
</div>

<!--Jumbotron with Sign up Button-->
  <div class="jumbotron" id="myContainer">
      <div class="row">
        <div class="col-md-4 pl0">
          <h1><strong>Auctioner Login</strong></h1>
          <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#loginModalauct">Login</button>
    </div>
    <div class="col-md-4 pl1">
        <h1><strong>Player Account</strong> </h1>
        <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#signupModal">Sign up</button><br>
        <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#loginModal">Login</button>
    </div>
    <div class="col-md-4 pl2">
        <h1><strong>Team Owner Login</strong></h1>
      <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#loginModalowner">Login</button>
    </div>
  </div>
</div>
<div class="container" id="bottom">
  <p>Auctioner and Team owners are requested to change their login credentials after logging in for security purposes</p>
</div>


<!--Player Login form-->
  <form method="post" id="loginform">
 <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

    <!--Login message from PHP file-->
    <div id="loginmessage"></div>
    <div class="form-group">
        <label for="loginemail" class="sr-only">Email:</label>
        <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
    </div>
    <div class="form-group">
        <label for="loginpassword" class="sr-only">Password</label>
        <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
    </div>

  </div>
  <div class="modal-footer">
      <input class="btn green" name="login" type="submit" value="Login">
    <button type="button" class="btn btn-default" data-dismiss="modal">
      Cancel
    </button>

  </div>
</div>
</div>
</div>
</form>

<!--Player Sign up form-->
  <form method="post" id="signupform">
    <!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Sign up  </h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <!--Sign up message from PHP file-->
       <div id="signupmessage"></div>

       <div class="form-group">
           <label for="username" class="sr-only">Full Name:</label>
           <input class="form-control" type="text" name="username" id="username" placeholder="Full Name" maxlength="30">
       </div>
       <div class="form-group">
           <label for="email" class="sr-only">Email:</label>
           <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
       </div>
       <div class="form-group">
           <label for="password" class="sr-only">Choose a password:</label>
           <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
       </div>
       <div class="form-group">
           <label for="password2" class="sr-only">Confirm password</label>
           <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
       </div>
     </div>
     <div class="modal-footer">
       <input class="btn green" name="signup" type="submit" value="Sign up">
     <button type="button" class="btn btn-default" data-dismiss="modal">
       Cancel
     </button>
     </div>
   </div>
 </div>
</div>
  </form>
  <!--Auctioner Login form-->
    <form method="post" id="loginform1">
   <!-- Modal -->
  <div class="modal fade" id="loginModalauct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <!--Login message from PHP file-->
      <div id="loginmessage1"></div>
      <div class="form-group">
          <label for="loginemail1" class="sr-only">Email:</label>
          <input class="form-control" type="email" name="loginemail1" id="loginemail1" placeholder="Email" maxlength="50">
      </div>
      <div class="form-group">
          <label for="loginpassword1" class="sr-only">Password</label>
          <input class="form-control" type="password" name="loginpassword1" id="loginpassword1" placeholder="Password" maxlength="30">
      </div>

    </div>
    <div class="modal-footer">
        <input class="btn green" name="login" type="submit" value="Login">
      <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
      </button>

    </div>
  </div>
  </div>
  </div>
  </form>

  <!--Team Owner Login form-->
    <form method="post" id="loginformowner">
   <!-- Modal -->
  <div class="modal fade" id="loginModalowner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <!--Login message from PHP file-->
      <div id="loginmessageowner"></div>
      <div class="form-group">
          <label for="loginemail" class="sr-only">Email:</label>
          <input class="form-control" type="email" name="loginemailowner" id="loginemailowner" placeholder="Email" maxlength="50">
      </div>
      <div class="form-group">
          <label for="loginpassword" class="sr-only">Password</label>
          <input class="form-control" type="password" name="loginpasswordowner" id="loginpasswordowner" placeholder="Password" maxlength="30">
      </div>

    </div>
    <div class="modal-footer">
        <input class="btn green" name="login" type="submit" value="Login">
      <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
      </button>

    </div>
  </div>
  </div>
  </div>
  </form>
  <!--Bcci admin Login form-->
    <form method="post" id="loginformadmin">
   <!-- Modal -->
  <div class="modal fade" id="loginModaladmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Admin Log In</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <!--Login message from PHP file-->
      <div id="loginmessageadmin"></div>
      <div class="form-group">
          <label for="loginemailadmin" class="sr-only">Email:</label>
          <input class="form-control" type="email" name="loginemailadmin" id="loginemailadmin" placeholder="Email" maxlength="50">
      </div>
      <div class="form-group">
          <label for="loginpasswordadmin" class="sr-only">Password</label>
          <input class="form-control" type="password" name="loginpasswordadmin" id="loginpasswordadmin" placeholder="Password" maxlength="30">
      </div>

    </div>
    <div class="modal-footer">
        <input class="btn green" name="login" type="submit" value="Login">
      <button type="button" class="btn btn-default" data-dismiss="modal">
        Cancel
      </button>

    </div>
  </div>
  </div>
  </div>
  </form>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>
