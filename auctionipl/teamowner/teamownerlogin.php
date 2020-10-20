<?php
//Start session
session_start();
//Connect to the database
include("connection.php");
//Check user inputs
    //Define error messages
    $errors='';
$missingEmail = '<p><stong>Please enter your Team email address !</strong></p>';
$missingPassword = '<p><stong>Please enter your password !</strong></p>';
//Get email and password
//Store errors in errors variable
if(empty($_POST["loginemailowner"])){
$errors .= $missingEmail;
}else{
$email = filter_var($_POST["loginemailowner"], FILTER_SANITIZE_EMAIL);
}
if(empty($_POST["loginpasswordowner"])){
    $errors .= $missingPassword;
}else{
    $password = filter_var($_POST["loginpasswordowner"], FILTER_SANITIZE_STRING);
}
//If there are any errors
if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
}else{  //else: No errors
  //Prepare variables for the query
  $email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
$password = md5($password);
      //Run query: Check combinaton of email & password exists
$sql = "SELECT * FROM teamownerusers WHERE email='$email' AND password='$password' ";
$result = mysqli_query($link, $sql);
if(!$result){
  echo '<div class="alert alert-danger">Error running the query!</div>';
  exit;
}
      //If email & password don't match print error
$count = mysqli_num_rows($result);
if($count !== 1){
  echo '<div class="alert alert-danger">Wrong Email or Password</div>';
}else {
    //log the user in: Set session variables
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];

    if(empty($_POST['rememberme'])){
        //If remember me is not checked
        echo "success";
    }
}}
?>
