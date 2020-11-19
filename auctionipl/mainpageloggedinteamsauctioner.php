<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("location:index.php");
}
include('connection.php');
$sql = "SELECT * FROM teamownerusers WHERE email='kxip@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $kxip=$row['balance'];
    $kxippl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='csk@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $csk=$row['balance'];
    $cskpl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='rcb@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $rcb=$row['balance'];
    $rcbpl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='mi@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $mi=$row['balance'];
    $mipl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='kkr@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $kkr=$row['balance'];
    $kkrpl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='rr@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $rr=$row['balance'];
    $rrpl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='dd@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dd=$row['balance'];
    $ddpl=$row['players'];
}else{
    echo "There was an error retrieving the username and email from the database";
}
$sql = "SELECT * FROM teamownerusers WHERE email='srh@gmail.com'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $srh=$row['balance'];
    $srhpl=$row['players'];
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
        #containerauc{
            margin-top:20px;
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
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #8c8c8c;
            color: black;
            background-color:#ffffb3;
            padding: 10px;

        }

        .noteheader{
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 0 10px;
            background: linear-gradient(#FFFFFF,#ECEAE7);
        }

        .text{
            font-size: 20px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .timetext{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .notes{
            margin-bottom: 100px;
        }
        td img{
          margin-left: 50px;
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
        <a class="nav-link" href="auctionerprofile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="mainpageloggedinplayerauctioner.php">Players</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Teams</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="mainpageloggedinauctioner.php">Bids</a>
      </li>
    </ul>
    <ul class="nav-item navbar-nav navbar-right">
      <li><a href="#" class="nav-link" data-toggle="modal">Logged in as <b class="lo"><?php echo $_SESSION['username']?></b> </a></li>
        <li><a href="./index.php?logout=1" class="nav-link">Logout</a></li>
    </ul>
  </div>
</nav>
<!--Container-->
      <div class="container" id="containerauc">
        <table class="table table-bordered table-hover table-dark" >
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Teams</th>
      <th scope="col">Logo</th>
      <th scope="col">Team Owners</th>
      <th scope="col">Purse Remaining</th>
      <th scope="col">Players Auctioned</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Chennai Super Kings</td>
      <td><img src="img/csk2.png" width="40" height="40"></td>
      <td>N Srinivasan</td>
      <td><?php echo $csk; ?></td>
        <td><?php echo $cskpl; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Royal Challengers Banglore</td>
      <td><img src="img/rcb.png" width="40" height="40"></td>
      <td>Vijay Mallaya</td>
      <td><?php echo $rcb; ?></td>
        <td><?php echo $rcbpl; ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kings XI Punjab</td>
      <td><img src="img/kxip.png" width="40" height="40"></td>
      <td>Preity Zinta</td>
      <td><?php echo $kxip; ?></td>
      <td><?php echo $kxippl; ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mumbai Indians</td>
      <td><img src="img/mi.png" width="40" height="40"></td>
      <td>Mukesh Ambani</td>
      <td><?php echo $mi; ?></td>
      <td><?php echo $mipl; ?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Kolkata Night Riders</td>
      <td><img src="img/kkr.png" width="40" height="40"></td>
      <td>ShahRukh Khan</td>
      <td><?php echo $kkr; ?></td>
      <td><?php echo $kkrpl; ?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Delhi Captials</td>
      <td><img src="img/dd.png" width="40" height="40"></td>
      <td>Neel Jindal</td>
      <td><?php echo $dd; ?></td>
      <td><?php echo $ddpl; ?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Rajasthan Royals</td>
      <td><img src="img/rr.png" width="40" height="40"></td>
      <td>Shilpa Shetty</td>
      <td><?php echo $rr; ?></td>
      <td><?php echo $rrpl; ?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Sunrisers Hyderabad</td>
      <td><img src="img/srh.png" width="40" height="40"></td>
      <td>Kalanithi Maran</td>
      <td><?php echo $srh; ?></td>
      <td><?php echo $srhpl; ?></td>
    </tr>
  </tbody>
</table>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="javascript.js"></script>
<script src="mynotes.js"></script>
</body>
</html>
