//Ajax Call for the sign up form
//Once the form is submitted
$("#signupform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "player/playersignup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
//Ajax Call for the player login form
//Once the form is submitted
$("#loginform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "player/playerlogin.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedinplayer.php";
            }else{
                $('#loginmessage').html(data);
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
//Ajax Call for the Auctioner login form
//Once the form is submitted
$("#loginform1").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "auctioner/auctionerlogin.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedinauctioner.php";
            }else{
                $('#loginmessage1').html(data);
            }
        },
        error: function(){
            $("#loginmessage1").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
//Ajax Call for the Team Owner login form
//Once the form is submitted
$("#loginformowner").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "teamowner/teamownerlogin.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedinowner.php";
            }else{
                $('#loginmessageowner').html(data);
            }
        },
        error: function(){
            $("#loginmessageowner").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
