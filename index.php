<script src="app/bootstrap/js/bootstrap.min.js"></script>
<link href="app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action='app/Controller/valida_cpf.php' method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class="">Informe seu CPF</legend>
                    </div>
                    <div class="control-group">                                                
                        <div class="controls">
                            <input type="text" id="username" name="username" maxlength="11" placeholder="Apenas Números" class="input-xlarge" required="required">
                            <button class="btn btn-success">Submeter</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>