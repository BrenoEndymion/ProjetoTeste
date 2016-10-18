$(document).ready(function () {
    
    $("#enviar").on("click", function (e) {
        e.preventDefault();
        var nome = $("#nome").val();
        $.ajax({
            url: "https://api.github.com/users/"+nome,
            cache: false,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (data =! null) {
                    alert('deu certo');
                } else {
                    alert('deu ruim');
                }
            },
            error: function () {
                alert('error');
            }
        });
        //alert('clicou: ' + nome);
    });
    
    
});