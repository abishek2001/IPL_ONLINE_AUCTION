<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("location:index.php");
}
include('connection.php');

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

        #notePad, #allNotes, #done{
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Players</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="mainpageloggedinteamsauctioner.php">Teams</a>
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
        <?php
        $sql = "SELECT * FROM playerusers";

        if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result)>0){
        echo "<table class='table table-stripped table-hover table-dark table-bordered'>
            <tr>
            <th >Username</th>
            <th>Email</th>
            <th>Base Price</th>
            <th>Verification</th>

            </tr>
        ";
        //        $count = 0;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        //            $count++;
        //            echo "<p>Row number: $count</p>";
        //            print_r($row);
        echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["baseprice"] . "</td>";
            echo "<td>"."<button type='submit' class='btn btn-success' value='eligible'>Eligible</button><button type='submit'class='btn btn-danger delete' value='eligible'>Not Eligible</button>"."</td>";
        echo "</tr>";

        }
        echo "</table>";
        //close the result set
        mysqli_free_result($result);
        }else{
        echo "<p>mySQL returned an empty result set.</p>";
        }
        }else{
        echo "<p>Unable to excecute: $sql. " . mysqli_error($link) ."</p>";
        }
        ?>
      </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="javascript.js"></script>
<script src="mynotes.js"></script>
</body>
</html>
