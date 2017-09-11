$(document).ready(function () {
    $("#geral").click(function (event) {
        event.preventDefault();
        $("#conteudo_maximo").html("<img src='../bootstrap/loading/load.gif' class='img-rounded img-responsive' id='imgpos'>");        
        $("#conteudo_maximo").fadeIn('slow').load('geral.php');
    });
});