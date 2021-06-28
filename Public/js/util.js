const BASE_URL = "http://localhost/Curso_/index.php/restrict";



console.log(user);

function showError(error_list){
    
    $(error_list, function(_id,_mensagem){
        $('#btn_login').parent().addClass(".has-error");
        $('#btn_login').parent().siblings(".help-block").html("Dados errados!");
        console.log("estou aqui");
    })
    clearErrors();
};
function clearErrors(){
    $(this).removeClass(".has-error");
    $(".help-block").html("");
};

function loadingImg(mensagem=""){
    return "<i class= 'fa fa-circle-o-notch fa-spin'</i>&nbsp;" + mensagem
};

var user = document.getElementById('#user');
var pass = document.getElementById('#pass');
function span(){
    $("#login_form").submit(function(){
        if (user == null || pass == null){
            console.log("Dados incompletos");

        }

    });
};