<?php

//start session and connect
session_start();
include ('connection.php');

//get user_id
$id = $_SESSION['user_id'];

//Get username sent through Ajax
$username = $_POST['usernameowner'];

//Run query and update username
$sql = "UPDATE teamownerusers SET username='$username' WHERE user_id='$id'";
$result = mysqli_query($link, $sql);

if(!$result){
    echo '<div class="alert alert-danger">There was an error updating storing the new username in the database!</div>';
}else {

echo '<div class="alert alert-success">Username updated successfully!</div>';
}
?>
