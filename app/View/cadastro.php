<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-12 col-md-12 col-sm-offset-8 col-md-offset-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CRECI <small>Cadastro</small></h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" maxlength="11" name="cpf" id="cpf" class="form-control input-sm" placeholder="Informe seu CPF">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nome" id="nome" class="form-control input-sm" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="mail" id="mail" class="form-control input-sm" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="tel1" id="tel1" class="form-control input-sm" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="tel2" id="tel2" class="form-control input-sm" placeholder="Celular">
                                </div>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <input type="text" name="mae" id="mae" class="form-control input-sm" placeholder="Nome da Mãe">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cep" id="cep" class="form-control input-sm" placeholder="CEP">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="ende" id="ende" class="form-control input-sm" placeholder="Endereço">
                                </div>                        
                            </div>                            
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <input type="text" name="numero" id="numero" class="form-control input-sm" placeholder="Nº">
                                </div>                        
                            </div>                            
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="complemento" id="complemento" class="form-control input-sm" placeholder="Complemento">
                                </div>                        
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="cidade" id="cidade" class="form-control input-sm" placeholder="Cidade">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="bairro" id="bairro" class="form-control input-sm" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                <div class="form-group">
                                    <input type="text" name="estado" id="estado" class="form-control input-sm" placeholder="UF">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="pais" id="pais" class="form-control input-sm" placeholder="País">
                                </div>
                            </div>
                        </div>
                        <div class="row">                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nascimento" id="nascimento" class="form-control input-sm" placeholder="Nascimento (DD/MM/AAAA)">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <select name="sexo" id="sexo" class="form-control input-sm" placeholder="Confirm Password">
                                        <option value="0" selected>Sexo</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Register" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>