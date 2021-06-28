
(function() {
    $("#login_form").submit(function () {

        $.ajax({
            type: "POST",
            URL: BASE_URL + "restrict/ajax_login",
            dataType: "json",
            data: $(this).serialize(),
            beforSend: function () {
                clearErros();
                $("#btn_login").parent().siblings(".help-block").html(loadingImg("Verificando... "));
            },
            success: function (json) {
                if (json["status"] == 1) {
                    clearErros();
                    $("#btn_login").parent().siblings(".help-block").html(loadingImg("Logando... "));
                    document.location = BASE_URL+"restrict";
                }else{
                    console.log("Deu ruim");
                }


            },
            error:function(response){
                console.log(response);
            }
        })
        return false;
    })
});