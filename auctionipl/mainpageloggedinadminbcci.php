<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("location:index.php");
}
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
      <style>
        #container{
            margin-top:120px;
        }

        #notePad, #allNotes, #done, .delete{
            display: none;
        }

        .buttons{
            margin-bottom: 20px;
        }
          .lo{
            text-transform: uppercase;
          }


      </style>
  </head>
  <body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><img src="img/bcci_logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> IPL AUCTION 2020</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto right">
      <li class="nav-item ">
        <a class="nav-link active" href="playerprofile.php"> Profile <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <ul class="nav-item navbar-nav navbar-right">
      <li><a href="#" class="nav-link" data-toggle="modal">Logged in as <b class="lo"><?php echo $_SESSION['username']?></b> </a></li>
        <li><a href="./index.php?logout=1" class="nav-link">Logout</a></li>
    </ul>
  </div>
</nav>
<!--Jumbotron with Sign up Button-->
  <div class="jumbotron" id="myContainer1">
      <div class="row">
        <div class="col-md-6 pl0">
          <h1>Create Account For <strong>Auctioner</strong></h1>
          <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#signupModal1">Create Account</button>
    </div>
    <div class="col-md-6 pl2">
        <h1>Create Account For  <strong>TeamOwner</strong></h1>
        <button type="button" class="btn btn-lg green signup" data-toggle="modal" data-target="#signupModal2">Create Account</button><br>
    </div>
  </div>
</div>

<!--Auctioner Sign up form-->
  <form method="post" id="signupformauct">
    <!-- Modal -->
<div class="modal fade" id="signupModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Create Account For Auctioner  </h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <!--Sign up message from PHP file-->
       <div id="signupmessageauct"></div>

       <div class="form-group">
           <label for="usernameauct" class="sr-only">Full Name:</label>
           <input class="form-control" type="text" name="usernameauct" id="usernameauct" placeholder="Full Name" maxlength="30">
       </div>
       <div class="form-group">
           <label for="emailauct" class="sr-only">Email:</label>
           <input class="form-control" type="email" name="emailauct" id="emailauct" placeholder="Email Address" maxlength="50">
       </div>
       <div class="form-group">
           <label for="passwordauct" class="sr-only">Choose a password:</label>
           <input class="form-control" type="password" name="passwordauct" id="passwordauct" placeholder="Choose a password" maxlength="30">
       </div>
       <div class="form-group">
           <label for="password2auct" class="sr-only">Confirm password</label>
           <input class="form-control" type="password" name="password2auct" id="password2auct" placeholder="Confirm password" maxlength="30">
       </div>
     </div>
     <div class="modal-footer">
       <input class="btn green" name="signup" type="submit" value="Create Account">
     <button type="button" class="btn btn-default" data-dismiss="modal">
       Cancel
     </button>
     </div>
   </div>
 </div>
</div>
  </form>
  <!--Team Owner Sign up form-->
    <form method="post" id="signupformowner">
      <!-- Modal -->
  <div class="modal fade" id="signupModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Create Account For Team Owner </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <!--Sign up message from PHP file-->
         <div id="signupmessageowner"></div>

         <div class="form-group">
             <label for="usernameowner" class="sr-only">Full Name:</label>
             <input class="form-control" type="text" name="usernameowner" id="usernameowner" placeholder="Full Name" maxlength="30">
         </div>
         <div class="form-group">
             <label for="emailowner" class="sr-only">Email:</label>
             <input class="form-control" type="email" name="emailowner" id="emailowner" placeholder="Email Address" maxlength="50">
         </div>
         <div class="form-group">
             <label for="passwordowner" class="sr-only">Choose a password:</label>
             <input class="form-control" type="password" name="passwordowner" id="passwordowner" placeholder="Choose a password" maxlength="30">
         </div>
         <div class="form-group">
             <label for="password2owner" class="sr-only">Confirm password</label>
             <input class="form-control" type="password" name="password2owner" id="password2owner" placeholder="Confirm password" maxlength="30">
         </div>
       </div>
       <div class="modal-footer">
         <input class="btn green" name="signup" type="submit" value="Create Account">
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
