<?php
$hash_de_vinculo = date('YmdHisdmY');
$hora_entrada_dos_dados = date('Y-m-d H:i:s');
$ip_do_malacabado = $_SERVER['REMOTE_ADDR'];
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>CRECI - RS</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/img/favicon.png" />        
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />        
        <link href="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />        
        <link href="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/css/demo.css" rel="stylesheet" />
    </head>
    <body>
        <div class="image-container set-full-height" style="background-image: url('../bootstrap/material-bootstrap-wizard-v1.0.2/assets/img/wizard-book.jpg')">            
            <a href="#">
                <div class="logo-container">
                    <div class="logo">
                        <img src="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/img/creci.jpg">
                    </div>
                    <div class="brand">
                        CRECIRS
                    </div>
                </div>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!--      Wizard container        -->
                        <div class="wizard-container">
                            <div class="card wizard-card" data-color="red" id="wizard">
                                <form id="form" method="POST">
                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            Elegível
                                        </h3>
                                        <h5>Informe seus dados!</h5>
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#details" data-toggle="tab">Titular</a></li>
                                            <li><a href="#endereco" data-toggle="tab">Endereço</a></li>
                                            <li><a href="#captain" data-toggle="tab">Dependentes</a></li>
                                            <li><a href="#description" data-toggle="tab">Contrato</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="details">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Todos os campos obrigatórios!</h4>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">                                                        
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">CPF</label>
                                                            <input type="text" maxlength="11" name="cpf" id="cpf" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">                                                        
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Nome</label>
                                                            <input type="text" name="nome" id="nome" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" name="mail" id="mail" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="mae" id="mae" class="form-control">
                                                        <input type="hidden" name="hash_de_vinculo" id="hash_de_vinculo" value="<?php echo $hash_de_vinculo; ?>">                                                        
                                                        <input type="hidden" name="ipmalacabado" id="ipmalacabado" value="<?php echo $ip_do_malacabado; ?>">
                                                        <input type="hidden" name="hora_entrada_dos_dados" id="hora_entrada_dos_dados" value="<?php echo $hora_entrada_dos_dados; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="tel1" id="tel1" class="form-control">
                                                    </div>         
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nascimento (DD/MM/AAAA)</label>
                                                        <input type="text" name="nascimento" id="nascimento" class="form-control">
                                                    </div>                                                             
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Celular</label>
                                                        <input type="text" name="tel2" id="tel2" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="sexo" id="sexo" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="endereco">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Todos os campos obrigatórios!</h4>
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CEP</label>
                                                        <input type="text" name="cep" id="cep" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Rua</label>
                                                        <input type="text" name="rua" id="rua" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Bairro</label>
                                                        <input type="text" name="bairro" id="bairro" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Número</label>
                                                        <input type="text" name="numero" id="numero" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Complemento</label>
                                                        <input type="text" name="complemento" id="complemento" class="form-control">
                                                    </div>                                                             
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Cidade</label>
                                                        <input type="text" name="cidade" id="cidade" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">UF</label>
                                                        <input type="text" name="uf" id="uf" class="form-control">
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="captain">                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Todos os campos obrigatórios!</h4>
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome" id="dep_nome" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel" id="dep_tel" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf" id="dep_cpf" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae" id="dep_nome_mae" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email" id="dep_email" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco" id="dep_grau_parentesco" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo" id="dep_sexo" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep1" name="dep1" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_1">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome1" id="dep_nome1" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel1" id="dep_tel1" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf1" id="dep_cpf1" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae1" id="dep_nome_mae1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email1" id="dep_email1" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco1" id="dep_grau_parentesco1" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo1" id="dep_sexo1" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep2" name="dep2" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_2">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome2" id="dep_nome2" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel2" id="dep_tel2" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf2" id="dep_cpf2" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae2" id="dep_nome_mae2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email2" id="dep_email2" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco2" id="dep_grau_parentesco2" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo2" id="dep_sexo2" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep3" name="dep3" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_3">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome3" id="dep_nome3" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel3" id="dep_tel3" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf3" id="dep_cpf3" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae3" id="dep_nome_mae3" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email3" id="dep_email3" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco3" id="dep_grau_parentesco3" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo3" id="dep_sexo3" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep4" name="dep4" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_4">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome4" id="dep_nome4" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel4" id="dep_tel4" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf4" id="dep_cpf4" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae4" id="dep_nome_mae4" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email4" id="dep_email4" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco4" id="dep_grau_parentesco4" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo4" id="dep_sexo4" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep5" name="dep5" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_5">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome5" id="dep_nome5" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel5" id="dep_tel5" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf5" id="dep_cpf5" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae5" id="dep_nome_mae5" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email5" id="dep_email5" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco5" id="dep_grau_parentesco5" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo5" id="dep_sexo5" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep6" name="dep6" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_6">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome6" id="dep_nome6" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel6" id="dep_tel6" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf6" id="dep_cpf6" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae6" id="dep_nome_mae6" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email6" id="dep_email6" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco6" id="dep_grau_parentesco6" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo6" id="dep_sexo6" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep7" name="dep7" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_7">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome7" id="dep_nome7" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel7" id="dep_tel7" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf7" id="dep_cpf7" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae7" id="dep_nome_mae7" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email7" id="dep_email7" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco7" id="dep_grau_parentesco7" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo7" id="dep_sexo7" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep8" name="dep8" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_8">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome8" id="dep_nome8" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel8" id="dep_tel8" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf8" id="dep_cpf8" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae8" id="dep_nome_mae8" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email8" id="dep_email8" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco8" id="dep_grau_parentesco8" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo8" id="dep_sexo8" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep9" name="dep9" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_9">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome9" id="dep_nome9" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel9" id="dep_tel9" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf9" id="dep_cpf9" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae9" id="dep_nome_mae9" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email9" id="dep_email9" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco9" id="dep_grau_parentesco9" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo9" id="dep_sexo9" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep10" name="dep10" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_10">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome10" id="dep_nome10" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel10" id="dep_tel10" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf10" id="dep_cpf10" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae10" id="dep_nome_mae10" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email10" id="dep_email10" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco10" id="dep_grau_parentesco10" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo10" id="dep_sexo10" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <input type='button' id="dep11" name="dep11" class='btn btn-info' value='Inserir outro(a) Dependente' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="dep_11">
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome</label>
                                                        <input type="text" name="dep_nome11" id="dep_nome11" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefone</label>
                                                        <input type="text" name="dep_tel11" id="dep_tel11" class="form-control">
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CPF</label>
                                                        <input type="text" name="dep_cpf11" id="dep_cpf11" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nome da Mãe</label>
                                                        <input type="text" name="dep_nome_mae11" id="dep_nome_mae11" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" name="dep_email11" id="dep_email11" class="form-control">
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Grau de Parentesco</label>
                                                        <select name="dep_grau_parentesco11" id="dep_grau_parentesco11" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Cônjuge</option>
                                                            <option value="2">Companheiro(a)|União Estável</option>
                                                            <option value="3">Filho(a)|Neto(a)|Bisneto(a)|Enteado(a)</option>
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                                <div class="col-sm-6">                                                    
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo</label>
                                                        <select name="dep_sexo11" id="dep_sexo11" class="form-control">
                                                            <option value="0" selected>Escolher...</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>                                                            
                                                        </select>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="description">
                                            <div class="row">                                                
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Contrato</label>
                                                        <embed src="../contrato/contrato.pdf" width="700" height="300" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="termos_uso" id="termos_uso">
                                                        </label>
                                                        Aceito os termos de Uso!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-footer">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Próximo' />
                                            <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finalizar' />
                                        </div>
                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />

                                            <div class="footer-checkbox">
                                                <div class="col-sm-12"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- wizard container -->
                    </div>
                </div> <!-- row -->
            </div>
            <div class="footer">
                <div class="container text-center">
                    Criado <i class="fa fa-heart heart"></i> por <a href="https://www.facebook.com/vitor.dorneles.31">Vítor Dorneles</a>.
                </div>
            </div>
        </div>
    </body>    
    <script src="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/js/jquery.bootstrap.js" type="text/javascript"></script>    
    <script src="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/js/material-bootstrap-wizard.js"></script>    
    <script src="../bootstrap/material-bootstrap-wizard-v1.0.2/assets/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            alert('oi');
            $("#dep_1").hide();
            $("#dep1").click(MostrarMensagem1);
            $("#dep_2").hide();
            $("#dep2").click(MostrarMensagem2);
            $("#dep_3").hide();
            $("#dep3").click(MostrarMensagem3);
            $("#dep_4").hide();
            $("#dep4").click(MostrarMensagem4);
            $("#dep_5").hide();
            $("#dep5").click(MostrarMensagem5);
            $("#dep_6").hide();
            $("#dep6").click(MostrarMensagem6);
            $("#dep_7").hide();
            $("#dep7").click(MostrarMensagem7);
            $("#dep_8").hide();
            $("#dep8").click(MostrarMensagem8);
            $("#dep_9").hide();
            $("#dep9").click(MostrarMensagem9);
            $("#dep_10").hide();
            $("#dep10").click(MostrarMensagem10);
            $("#dep_11").hide();
            $("#dep11").click(MostrarMensagem11);
            function MostrarMensagem1() {
                $("#dep_1").show();
            }
            function MostrarMensagem2() {
                $("#dep_2").show();
            }
            function MostrarMensagem3() {
                $("#dep_3").show();
            }
            function MostrarMensagem4() {
                $("#dep_4").show();
            }
            function MostrarMensagem5() {
                $("#dep_5").show();
            }
            function MostrarMensagem6() {
                $("#dep_6").show();
            }
            function MostrarMensagem7() {
                $("#dep_7").show();
            }
            function MostrarMensagem8() {
                $("#dep_8").show();
            }
            function MostrarMensagem9() {
                $("#dep_9").show();
            }
            function MostrarMensagem10() {
                $("#dep_10").show();
            }
            function MostrarMensagem11() {
                $("#dep_11").show();
            }

            function limpa_formulario_cep() {
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            $("#cep").blur(function () {
                var cep = $(this).val().replace(/\D/g, '');
                if (cep != "") {
                    var validacep = /^[0-9]{8}$/;
                    if (validacep.test(cep)) {
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                            if (!("erro" in dados)) {
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } else {
                                limpa_formulario_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } else {
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } else {
                    limpa_formulário_cep();
                }
            });
        });
    </script>
</html>
