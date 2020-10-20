
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
include('connection.php');

$user_id = $_SESSION['user_id'];

//get username and email
$sql = "SELECT * FROM teamownerusers WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $username = $row['username'];
    $email = $row['email'];
}else{
    echo "There was an error retrieving the username and email from the database";
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
            margin-top:100px;
        }

        #notePad, #allNotes, #done{
            display: none;
        }

        .buttons{
            margin-bottom: 20px;
        }
         table{
           background-color: #ffffb3;
         }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #CA3DD9;
            color: #CA3DD9;
            background-color: #FBEFFF;
            padding: 10px;

        }

          tr{
             cursor: pointer;
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
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">My Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./mainpageloggedinowner.php">Bids</a>
      </li>
    </ul>
    <ul class="nav-item navbar-nav navbar-right">
      <li><a href="#" class="nav-link" data-toggle="modal">Logged in as <b class="lo"><?php echo $_SESSION['username']?></b> </a></li>
        <li><a href="./index.php?logout=1" class="nav-link">Logout</a></li>
    </ul>
  </div>
</nav>



<!--Container-->
<div class="container" id="container">
  <div class="row">
     <div class="col-md-3"></div>
      <div class="col-sm-12 col-md-6">
        <h2><strong>General Account Settings:</strong></h2>
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-bordered">
                <tr data-target="#updateusername" data-toggle="modal">
                    <td>Username</td>
                    <td><b><?php echo $username; ?></b></td>
                </tr>
                <tr data-target="#updateemail" data-toggle="modal">
                    <td>Email</td>
                    <td><b><?php echo $email ?></b></td>
                </tr>
                <tr data-target="#updatepassword" data-toggle="modal">
                    <td>Password</td>
                    <td><b>Hidden</b></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>
  <!---footer container -->
  <div class="container " id="topp">
    <p>Team Owner's can update their username,email and password</p>
  </div>

      <!--Update username-->
        <form method="post" id="updateusernameformowner">
          <div class="modal fade" id="updateusername" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Username: </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--update username message from PHP file-->
                  <div id="updateusernamemessageowner"></div>


                  <div class="form-group">
                      <label for="usernameowner" >Username:</label>
                      <input class="form-control" type="text" name="usernameowner" id="usernameowner" maxlength="30" value="<?php echo $username; ?>">
                  </div>

              </div>
              <div class="modal-footer">
                  <input class="btn green" name="updateusername" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
              </div>
            </div>
          </div>
        </form>

      <!--Update email-->
        <form method="post" id="updateemailformowner">
          <div class="modal fade" id="updateemail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Enter new email: </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--Update email message from PHP file-->
                  <div id="updateemailmessageowner"></div>


                  <div class="form-group">
                      <label for="emailowner" >Email:</label>
                      <input class="form-control" type="email" name="emailowner" id="emailowner" maxlength="50" value="<?php echo $email ?>">
                  </div>

              </div>
              <div class="modal-footer">
                  <input class="btn green" name="updateusername" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>

              </div>
            </div>
          </div>
        </form>

      <!--Update password-->
        <form method="post" id="updatepasswordformowner">
          <div class="modal fade" id="updatepassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">  Enter Current and New password: </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--Update password message from PHP file-->
                  <div id="updatepasswordmessageowner"></div>


                  <div class="form-group">
                      <label for="currentpasswordowner" class="sr-only" >Your Current Password:</label>
                      <input class="form-control" type="password" name="currentpasswordowner" id="currentpasswordowner" maxlength="30" placeholder="Your Current Password">
                  </div>
                  <div class="form-group">
                      <label for="passwordowner" class="sr-only" >Choose a password:</label>
                      <input class="form-control" type="password" name="passwordowner" id="passwordowner" maxlength="30" placeholder="Choose a password">
                  </div>
                  <div class="form-group">
                      <label for="password2owner" class="sr-only" >Confirm password:</label>
                      <input class="form-control" type="password" name="password2owner" id="password2owner" maxlength="30" placeholder="Confirm password">
                  </div>

              </div>
              <div class="modal-footer">
                  <input class="btn green" name="updateusername" type="submit" value="Submit">
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
    <script src="profile.js"></script>
  </body>
</html>
