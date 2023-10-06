const site_url = "http://localhost/dcw/";
$("#regform").submit(function (e) { 
    $(".regBtn").attr("disabled",true).html("Loading...");
    e.preventDefault();
    let data = new FormData(this);
    data.append("action","regform");
    $(".result").html("");
    $.ajax({
        type: "post",
        url: site_url + "admin/action.php",
        processData: false,
        contentType: false,
        data: data, 
        success: function (response) {
            $(".regBtn").attr("disabled",false).html("Register");
            if(response == "Registration Successful!" ){
                $(".result").html('<div class="alert text-center alert-success">\
                <strong>Registration Success!</strong> .\
              </div>');
              $("#regform")[0].reset();
              $('.custom-file-label').html("Choose File");
            }else{
                $(".result").html('<div class="alert text-center alert-danger">\
                <strong>'+response+'</strong> .\
              </div>');
            }
        }
    });
    
});



