<?php
//start session and connect
session_start();
include ('connection.php');

//define error messages
$errors='';
$missingCurrentPassword = '<p><strong>Please enter your Current Password!</strong></p>';
$incorrectCurrentPassword = '<p><strong>The password entered is incorrect!</strong></p>';
$missingPassword = '<p><strong>Please enter a new Password!</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
$differentPassword = '<p><strong>Passwords don\'t match!</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';

//check for errors
if(empty($_POST["currentpasswordauct"])){
    $errors .= $missingCurrentPassword;
}else{
    $currentPassword = $_POST["currentpasswordauct"];
    $currentPassword = filter_var($currentPassword, FILTER_SANITIZE_STRING);
    $currentPassword = mysqli_real_escape_string ($link, $currentPassword);
    //check if given password is correct
    $user_id = $_SESSION["user_id"];
    $sql = "SELECT password FROM adminusers WHERE user_id='$user_id'";
    $result = mysqli_query($link, $sql);
    $count = mysqli_num_rows($result);
    if($count !== 1){
        echo '<div class="alert alert-danger">There was a problem running the query</div>';
    }else{
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($currentPassword != $row['password']){
            $errors .= $incorrectCurrentPassword;
        }
    }

}

if(empty($_POST["passwordauct"])){
    $errors .= $missingPassword;
}elseif(!(strlen($_POST["passwordauct"])>6
         and preg_match('/[A-Z]/',$_POST["passwordauct"])
         and preg_match('/[0-9]/',$_POST["passwordauct"])
        )
       ){
    $errors .= $invalidPassword;
}else{
    $password = filter_var($_POST["passwordauct"], FILTER_SANITIZE_STRING);
    if(empty($_POST["password2auct"])){
        $errors .= $missingPassword2;
    }else{
        $password2 = filter_var($_POST["password2auct"], FILTER_SANITIZE_STRING);
        if($password !== $password2){
            $errors .= $differentPassword;
        }
    }
}

//if there is an error print error message
if($errors){
    $resultMessage = "<div class='alert alert-danger'>$errors</div>";
    echo $resultMessage;
}else{
    $password = mysqli_real_escape_string($link, $password);
    //else run query and update password
    $sql = "UPDATE adminusers SET password='$password' WHERE user_id='$user_id'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>The password could not be reset. Please try again later.</div>";
    }else{
        echo "<div class='alert alert-success'>Your password has been updated successfully.</div>";
    }

}


?>
