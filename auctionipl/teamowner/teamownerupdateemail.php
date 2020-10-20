<?php
//start session and connect
session_start();
include ('connection.php');

//get user_id and new email sent through Ajax
$user_id = $_SESSION['user_id'];
$newemail = $_POST['emailowner'];

//check if new email exists
$sql = "SELECT * FROM teamownerusers WHERE email='$newemail'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
if($count>0){
    echo "<div class='alert alert-danger'>There is already as user registered with that email! Please choose another one!</div>"; exit;
}


//get the current email
$sql = "SELECT * FROM teamownerusers WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $email = $row['email'];
}else{
    echo "<div class='alert alert-danger'>There was an error retrieving the email from the database</div>";exit;
}



//insert new email in the adminusers table
$sql = "UPDATE teamownerusers SET email='$newemail' WHERE user_id = '$user_id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo "<div class='alert alert-danger'>There was an error inserting the user details in the database.</div>";exit;
}else{
  echo '<div class="alert alert-success">Email updated successfully!</div>';
}




?>
