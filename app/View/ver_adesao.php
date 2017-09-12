<?php
session_start();
include '../config/database_mysql.php';
?>
<script src="../js/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function () {

        $("#fechar_modal").click(function () {
            $("#refresca_cassi_solicitante").load('geral.php');
        });

        $(document).on('keydown', function (e) {
            if (e.keyCode === 27) {
                $("#refresca_cassi_solicitante").load('geral.php');
            }
        });

        $("#form").submit(function () {
            return false;
        });
        $("#envia").click(function () {
            envia_form();
        });
        function envia_form() {
            $("#conteudo_CASSI").empty();
            var matricula = $("#matricula").val();
            var agencia = $("#agencia").val();
            var nome_funcionario = $("#nome_funcionario").val();
            var sexo = $("#sexo").val();
            var nascimento = $("#nascimento").val();
            var usuario = $("#usuario").val();
            var id = $("#id").val();
            var status = $("#status").val();
            var data_posse = $("#data_posse").val();
            var obs = $("#obs").val();

            if ($("#matricula").val() === '')
            {
                $("#matricula_error").html("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Informe a Matrícula do Ativo, caso não tenha, informe 0...</div>").hide(9000),
                        $("#matricula").focus();
                return false;
            } else {
                $("#matricula_error").empty();
            }

            if ($("#agencia").val() === 'na')
            {
                $("#agencia_error").html("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Informe a Agência...</div>").hide(9000),
                        $("#agencia").focus();
                return false;
            } else {
                $("#agencia_error").empty();
            }

            if ($("#nome_funcionario").val() === '')
            {
                $("#nome_funcionario_error").html("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Informe Nome do Indivíduo...</div>").hide(9000),
                        $("#nome_funcionario_envio").focus();
                return false;
            } else {
                $("#nome_funcionario_error").empty();
            }

            if ($("#nascimento").val() === '')
            {
                $("#nascimento_error").html("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Informe Data de Nascimento...</div>").hide(9000),
                        $("#nascimento").focus();
                return false;
            } else {
                $("#nascimento_error").empty();
            }

            $.ajax({
                type: "POST",
                dataType: "HTML",
                url: "../Controller/cassi_funcionarios_editar.php",
                data: "matricula=" + matricula + "&agencia=" + agencia + "&nome_funcionario=" + nome_funcionario + "&sexo=" + sexo + "&nascimento=" + nascimento +
                        "&usuario=" + usuario + "&id=" + id + "&status=" + status + "&data_posse=" + data_posse + "&obs=" + obs,
                beforeSend: function () {
                    $("#conteudo_CASSI").html("<img src='../../images/loading/load.gif' class='img-rounded img-responsive'>");
                },
                success: function (response) {
                    $("#conteudo_CASSI").html(response),
                            $("#form")[0].reset(),
                            $("#refresca_cassi_solicitante").load('geral.php');
                },
                error: function () {
                    alert("Ocorreu um erro durante a requisição");
                }
            });
        }
    });
</script>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="fechar_modal">&times;</button>
    <h4 class="modal-title">Editar Adesão</h4>
</div>			
<div class="modal-body">
    <form id="form" method="POST">
        <div class="form-group">
            <label for="label_matricula">Matrícula:</label>            
            <input type="text" class="form-control" id="matricula" name="matricula" autofocus>            
            <div class="form-inline" id="matricula_error"></div>
        </div>        
        <button class="btn btn-primary btn-dropbox pull-right" id="envia" type="submit">Editar <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span></button>
    </form>
</div>
<div class="modal-footer">
    <div id="conteudo_CASSI"></div>
</div>