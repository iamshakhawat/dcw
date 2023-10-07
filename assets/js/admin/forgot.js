$("#resetpassform").submit(function(e){
    e.preventDefault();
    $(".resetBtn").attr("disabled",true).html("Wait...");
    $(".result").html("");

    let data = new FormData(this);
    data.append("action","resetpass");
    $.ajax({
        type: "post",
        url: "action.php",
        data: data,
        contentType:false,
        processData:false,
        success: function (response) {
            $(".resetBtn").attr("disabled",false).html("Reset Password");
            $("#resetpassform")[0].reset();
            if(response == "check"){
                $(".result").html("<div class='alert text-center alert-success' role='alert'>\
                <p class='mb-0'>Check your <a href='https://mail.google.com/mail/u/0/#inbox'>email</a>.</p>\
              </div>");
              
            }else{
                $(".result").html("<div class='alert text-center alert-danger' role='alert'>\
                <p class='mb-0'>"+response+"</p>\
              </div>");
            }
        }
    });
});