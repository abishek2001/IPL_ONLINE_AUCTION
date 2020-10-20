// Ajax call to playerupdateusername.php
$("#updateusernameform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "player/playerupdateusername.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updateusernamemessage").html(data);
            }else{
                location.reload();
            }
        },
        error: function(){
            $("#updateusernamemessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});

// Ajax call to playerupdatepassword.php
$("#updatepasswordform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "player/playerupdatepassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updatepasswordmessage").html(data);
            }
        },
        error: function(){
            $("#updatepasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});



// Ajax call to playerupdateemail.php
$("#updateemailform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "player/playerupdateemail.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updateemailmessage").html(data);
            }
        },
        error: function(){
            $("#updateemailmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
// Ajax call to auctionerupdateusername.php
$("#updateusernameformauct").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to auctionerupdateusername.php using AJAX
    $.ajax({
        url: "auctioner/auctionerupdateusername.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updateusernamemessageauct").html(data);
            }else{
                location.reload();
            }
        },
        error: function(){
            $("#updateusernamemessageauct").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});

// Ajax call to auctionerupdateemail.php
$("#updateemailformauct").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "auctioner/auctionerupdateemail.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updateemailmessageauct").html(data);
            }
        },
        error: function(){
            $("#updateemailmessageauct").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
// Ajax call to auctionerupdatepassword.php
$("#updatepasswordformauct").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "auctioner/auctionerupdatepassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updatepasswordmessageauct").html(data);
            }
        },
        error: function(){
            $("#updatepasswordmessageauct").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
// Ajax call to teamownerupdateusername.php
$("#updateusernameformowner").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to auctionerupdateusername.php using AJAX
    $.ajax({
        url: "teamowner/teamownerupdateusername.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updateusernamemessageowner").html(data);
            }else{
                location.reload();
            }
        },
        error: function(){
            $("#updateusernamemessageowner").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
// Ajax call to teamownerupdateemail.php
$("#updateemailformowner").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "teamowner/teamownerupdateemail.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updateemailmessageowner").html(data);
            }
        },
        error: function(){
            $("#updateemailmessageowner").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
// Ajax call to auctionerupdatepassword.php
$("#updatepasswordformowner").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to playerupdateusername.php using AJAX
    $.ajax({
        url: "teamowner/teamownerupdatepassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#updatepasswordmessageowner").html(data);
            }
        },
        error: function(){
            $("#updatepasswordmessageowner").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        }

    });

});
