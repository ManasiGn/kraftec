function sendOTP(){
    $(".error").html("").hide();
    var number = $("#mobile").val();
    if(number.length == 10 && number != null){
        var input = {
            "mobile_number" : number,
            "action" : "send_otp"
        };
        $.ajax({
            url : 'controller.php',
            type : 'POST',
            data : input,
            success : function(response){
                $(".container").html(response);
            }
        });
    }else{
        $(".error").html('Please enter a valid number !')
        $(".error").show();
    }   s
}