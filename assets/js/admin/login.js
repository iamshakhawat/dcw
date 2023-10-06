
$("#loginform").submit(function(e){
    e.preventDefault();
    $(".result").html("");
    $(".loginbtn").prop("disabled",true).html("loading...");
    let data = new FormData(this);
    data.append("action","loginform");

    $.ajax({
        type: "post",
        url: "action.php",
        data: data,
        contentType:false,
        processData:false,
        success: function (response) {
            $(".loginbtn").prop("disabled",false).html("Login");
            console.log(response)
            if(response == "login Success"){
                $(".result").html("<div class='alert text-center alert-success' role='alert'>\
                <strong>"+response+ " </strong> <small>You will be redirect shortly. Please wait...</small>\
              </div>");
              setTimeout(() => {
                window.location = "dashboard.php";
              }, 2000);
            }else{
                $(".result").html("<div class='alert text-center alert-danger' role='alert'>\
                <strong class='mb-0'>"+response+"</strong>\
              </div>");
            }
        }
    });
});