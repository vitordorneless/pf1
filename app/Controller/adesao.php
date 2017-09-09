<?php

function __autoload($file) {
    if (file_exists('../Model/' . $file . '.php'))
        require_once('../Model/' . $file . '.php');
    else
        exit('O arquivo ' . $file . ' não foi encontrado!');
}

$adesao = new Adesao_CRUD();
$adesao->set_cpf_titular(filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_STRING));
$adesao->set_nome(filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING));
$adesao->set_email(filter_input(INPUT_GET, 'mail', FILTER_SANITIZE_STRING));
$adesao->set_nome_mae(filter_input(INPUT_GET, 'mae', FILTER_SANITIZE_STRING));
$adesao->set_hash_de_vinvulo(filter_input(INPUT_GET, 'hash_de_vinculo', FILTER_SANITIZE_STRING));
$adesao->set_telefone(filter_input(INPUT_GET, 'tel1', FILTER_SANITIZE_STRING));
$adesao->set_ip_captura(filter_input(INPUT_GET, 'ipmalacabado', FILTER_SANITIZE_STRING));
$adesao->set_hora_entrada_dos_dados(filter_input(INPUT_GET, 'hora_entrada_dos_dados', FILTER_SANITIZE_STRING));
$adesao->set_nascimento(filter_input(INPUT_GET, 'nascimento', FILTER_SANITIZE_STRING));
$adesao->set_celular(filter_input(INPUT_GET, 'tel2', FILTER_SANITIZE_STRING));
$adesao->set_sexo(filter_input(INPUT_GET, 'sexo', FILTER_SANITIZE_NUMBER_INT));
$adesao->set_cep(filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_STRING));
$adesao->set_rua(filter_input(INPUT_GET, 'rua', FILTER_SANITIZE_STRING));
$adesao->set_bairro(filter_input(INPUT_GET, 'bairro', FILTER_SANITIZE_STRING));
$adesao->set_numero(filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_STRING));
$adesao->set_complemento(filter_input(INPUT_GET, 'complemento', FILTER_SANITIZE_STRING));
$adesao->set_cidade(filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING));
$adesao->set_uf(filter_input(INPUT_GET, 'uf', FILTER_SANITIZE_STRING));
$adesao->set_aceite_termos_de_uso(filter_input(INPUT_GET, 'termos_uso', FILTER_SANITIZE_STRING));
$adesao->set_localizacao(filter_input(INPUT_GET, 'geol', FILTER_SANITIZE_STRING));
$adesao->set_titular('1');
$adesao->set_titular_dep('2');
$grau_parentesco_titular = '0';
$cont_deps = 0;
//titular
$confirm = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular(), $adesao->get_cpf_titular(), $adesao->get_cpf_titular(), $adesao->get_nome(), $adesao->get_email(), $adesao->get_nome_mae(), $adesao->get_telefone(), $adesao->get_nascimento(), $adesao->get_celular(), $adesao->get_sexo(), $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $grau_parentesco_titular);
//dependentes
$dep_nome = filter_input(INPUT_GET, 'dep_nome', FILTER_SANITIZE_STRING);
$dep_cpf = filter_input(INPUT_GET, 'dep_cpf', FILTER_SANITIZE_STRING);
$dep_nome1 = filter_input(INPUT_GET, 'dep_nome1', FILTER_SANITIZE_STRING);
$dep_cpf1 = filter_input(INPUT_GET, 'dep_cpf1', FILTER_SANITIZE_STRING);
$dep_nome2 = filter_input(INPUT_GET, 'dep_nome2', FILTER_SANITIZE_STRING);
$dep_cpf2 = filter_input(INPUT_GET, 'dep_cpf2', FILTER_SANITIZE_STRING);
$dep_nome3 = filter_input(INPUT_GET, 'dep_nome3', FILTER_SANITIZE_STRING);
$dep_cpf3 = filter_input(INPUT_GET, 'dep_cpf3', FILTER_SANITIZE_STRING);
$dep_nome4 = filter_input(INPUT_GET, 'dep_nome4', FILTER_SANITIZE_STRING);
$dep_cpf4 = filter_input(INPUT_GET, 'dep_cpf4', FILTER_SANITIZE_STRING);
$dep_nome5 = filter_input(INPUT_GET, 'dep_nome5', FILTER_SANITIZE_STRING);
$dep_cpf5 = filter_input(INPUT_GET, 'dep_cpf5', FILTER_SANITIZE_STRING);
$dep_nome6 = filter_input(INPUT_GET, 'dep_nome6', FILTER_SANITIZE_STRING);
$dep_cpf6 = filter_input(INPUT_GET, 'dep_cpf6', FILTER_SANITIZE_STRING);
$dep_nome7 = filter_input(INPUT_GET, 'dep_nome7', FILTER_SANITIZE_STRING);
$dep_cpf7 = filter_input(INPUT_GET, 'dep_cpf7', FILTER_SANITIZE_STRING);
$dep_nome8 = filter_input(INPUT_GET, 'dep_nome8', FILTER_SANITIZE_STRING);
$dep_cpf8 = filter_input(INPUT_GET, 'dep_cpf8', FILTER_SANITIZE_STRING);
$dep_nome9 = filter_input(INPUT_GET, 'dep_nome9', FILTER_SANITIZE_STRING);
$dep_cpf9 = filter_input(INPUT_GET, 'dep_cpf9', FILTER_SANITIZE_STRING);
$dep_nome10 = filter_input(INPUT_GET, 'dep_nome10', FILTER_SANITIZE_STRING);
$dep_cpf10 = filter_input(INPUT_GET, 'dep_cpf10', FILTER_SANITIZE_STRING);
$dep_nome11 = filter_input(INPUT_GET, 'dep_nome11', FILTER_SANITIZE_STRING);
$dep_cpf11 = filter_input(INPUT_GET, 'dep_cpf11', FILTER_SANITIZE_STRING);

if (($dep_nome !== 'no') and ( $dep_cpf !== 'no')) {
    $dep_tel = filter_input(INPUT_GET, 'dep_tel', FILTER_SANITIZE_STRING);
    $dep_nome_mae = filter_input(INPUT_GET, 'dep_nome_mae', FILTER_SANITIZE_STRING);
    $dep_email = filter_input(INPUT_GET, 'dep_email', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco = filter_input(INPUT_GET, 'dep_grau_parentesco', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo = filter_input(INPUT_GET, 'dep_sexo', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome, $dep_email, $dep_nome_mae, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel, $dep_sexo, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome1 !== 'no') and ( $dep_cpf1 !== 'no')) {
    $dep_tel1 = filter_input(INPUT_GET, 'dep_tel1', FILTER_SANITIZE_STRING);
    $dep_nome_mae1 = filter_input(INPUT_GET, 'dep_nome_mae1', FILTER_SANITIZE_STRING);
    $dep_email1 = filter_input(INPUT_GET, 'dep_email1', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco1 = filter_input(INPUT_GET, 'dep_grau_parentesco1', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo1 = filter_input(INPUT_GET, 'dep_sexo1', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome1, $dep_email1, $dep_nome_mae1, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel1, $dep_sexo1, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco1);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome2 !== 'no') and ( $dep_cpf2 !== 'no')) {
    $dep_tel2 = filter_input(INPUT_GET, 'dep_tel2', FILTER_SANITIZE_STRING);
    $dep_nome_mae2 = filter_input(INPUT_GET, 'dep_nome_mae2', FILTER_SANITIZE_STRING);
    $dep_email2 = filter_input(INPUT_GET, 'dep_email2', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco2 = filter_input(INPUT_GET, 'dep_grau_parentesco2', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo2 = filter_input(INPUT_GET, 'dep_sexo2', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome2, $dep_email2, $dep_nome_mae2, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel2, $dep_sexo2, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco2);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome3 !== 'no') and ( $dep_cpf3 !== 'no')) {
    $dep_tel3 = filter_input(INPUT_GET, 'dep_tel3', FILTER_SANITIZE_STRING);
    $dep_nome_mae3 = filter_input(INPUT_GET, 'dep_nome_mae3', FILTER_SANITIZE_STRING);
    $dep_email3 = filter_input(INPUT_GET, 'dep_email3', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco3 = filter_input(INPUT_GET, 'dep_grau_parentesco3', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo3 = filter_input(INPUT_GET, 'dep_sexo3', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome3, $dep_email3, $dep_nome_mae3, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel3, $dep_sexo3, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco3);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome4 !== 'no') and ( $dep_cpf4 !== 'no')) {
    $dep_tel4 = filter_input(INPUT_GET, 'dep_tel4', FILTER_SANITIZE_STRING);
    $dep_nome_mae4 = filter_input(INPUT_GET, 'dep_nome_mae4', FILTER_SANITIZE_STRING);
    $dep_email4 = filter_input(INPUT_GET, 'dep_email4', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco4 = filter_input(INPUT_GET, 'dep_grau_parentesco4', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo4 = filter_input(INPUT_GET, 'dep_sexo4', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome4, $dep_email4, $dep_nome_mae4, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel4, $dep_sexo4, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco4);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome5 !== 'no') and ( $dep_cpf5 !== 'no')) {
    $dep_tel5 = filter_input(INPUT_GET, 'dep_tel5', FILTER_SANITIZE_STRING);
    $dep_nome_mae5 = filter_input(INPUT_GET, 'dep_nome_mae5', FILTER_SANITIZE_STRING);
    $dep_email5 = filter_input(INPUT_GET, 'dep_email5', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco5 = filter_input(INPUT_GET, 'dep_grau_parentesco5', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo5 = filter_input(INPUT_GET, 'dep_sexo5', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome5, $dep_email5, $dep_nome_mae5, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel5, $dep_sexo5, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco5);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome6 !== 'no') and ( $dep_cpf6 !== 'no')) {
    $dep_tel6 = filter_input(INPUT_GET, 'dep_tel6', FILTER_SANITIZE_STRING);
    $dep_nome_mae6 = filter_input(INPUT_GET, 'dep_nome_mae6', FILTER_SANITIZE_STRING);
    $dep_email6 = filter_input(INPUT_GET, 'dep_email6', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco6 = filter_input(INPUT_GET, 'dep_grau_parentesco6', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo6 = filter_input(INPUT_GET, 'dep_sexo6', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome6, $dep_email6, $dep_nome_mae6, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel6, $dep_sexo6, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco6);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome7 !== 'no') and ( $dep_cpf7 !== 'no')) {
    $dep_tel7 = filter_input(INPUT_GET, 'dep_tel7', FILTER_SANITIZE_STRING);
    $dep_nome_mae7 = filter_input(INPUT_GET, 'dep_nome_mae7', FILTER_SANITIZE_STRING);
    $dep_email7 = filter_input(INPUT_GET, 'dep_email7', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco7 = filter_input(INPUT_GET, 'dep_grau_parentesco7', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo7 = filter_input(INPUT_GET, 'dep_sexo7', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome7, $dep_email7, $dep_nome_mae7, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel7, $dep_sexo7, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco7);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome8 !== 'no') and ( $dep_cpf8 !== 'no')) {
    $dep_tel8 = filter_input(INPUT_GET, 'dep_tel8', FILTER_SANITIZE_STRING);
    $dep_nome_mae8 = filter_input(INPUT_GET, 'dep_nome_mae8', FILTER_SANITIZE_STRING);
    $dep_email8 = filter_input(INPUT_GET, 'dep_email8', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco8 = filter_input(INPUT_GET, 'dep_grau_parentesco8', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo8 = filter_input(INPUT_GET, 'dep_sexo8', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome8, $dep_email8, $dep_nome_mae8, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel8, $dep_sexo8, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco8);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome9 !== 'no') and ( $dep_cpf9 !== 'no')) {
    $dep_tel9 = filter_input(INPUT_GET, 'dep_tel9', FILTER_SANITIZE_STRING);
    $dep_nome_mae9 = filter_input(INPUT_GET, 'dep_nome_mae9', FILTER_SANITIZE_STRING);
    $dep_email9 = filter_input(INPUT_GET, 'dep_email9', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco9 = filter_input(INPUT_GET, 'dep_grau_parentesco9', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo9 = filter_input(INPUT_GET, 'dep_sexo9', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome9, $dep_email9, $dep_nome_mae9, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel9, $dep_sexo9, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco9);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome10 !== 'no') and ( $dep_cpf10 !== 'no')) {
    $dep_tel10 = filter_input(INPUT_GET, 'dep_tel10', FILTER_SANITIZE_STRING);
    $dep_nome_mae10 = filter_input(INPUT_GET, 'dep_nome_mae10', FILTER_SANITIZE_STRING);
    $dep_email10 = filter_input(INPUT_GET, 'dep_email10', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco10 = filter_input(INPUT_GET, 'dep_grau_parentesco10', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo10 = filter_input(INPUT_GET, 'dep_sexo10', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome10, $dep_email10, $dep_nome_mae10, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel10, $dep_sexo10, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco10);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if (($dep_nome11 !== 'no') and ( $dep_cpf11 !== 'no')) {
    $dep_tel11 = filter_input(INPUT_GET, 'dep_tel11', FILTER_SANITIZE_STRING);
    $dep_nome_mae11 = filter_input(INPUT_GET, 'dep_nome_mae11', FILTER_SANITIZE_STRING);
    $dep_email11 = filter_input(INPUT_GET, 'dep_email11', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco11 = filter_input(INPUT_GET, 'dep_grau_parentesco11', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo11 = filter_input(INPUT_GET, 'dep_sexo11', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome11, $dep_email11, $dep_nome_mae11, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel11, $dep_sexo11, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco11);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}

if ($confirm === TRUE) {
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Sucesso<br> Dependentes incluídos: ' . $cont_deps . '</div>';
} else {
    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Erro...</div>';
}