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
if (!empty($dep_nome) and !empty($dep_cpf)) {
    $dep_tel = filter_input(INPUT_GET, 'dep_tel', FILTER_SANITIZE_STRING);
    $dep_nome_mae = filter_input(INPUT_GET, 'dep_nome_mae', FILTER_SANITIZE_STRING);
    $dep_email = filter_input(INPUT_GET, 'dep_email', FILTER_SANITIZE_STRING);
    $dep_grau_parentesco = filter_input(INPUT_GET, 'dep_grau_parentesco', FILTER_SANITIZE_NUMBER_INT);
    $dep_sexo = filter_input(INPUT_GET, 'dep_sexo', FILTER_SANITIZE_NUMBER_INT);
    $confirm0 = $adesao->save($adesao->get_hash_de_vinvulo(), $adesao->get_ip_captura(), $adesao->get_titular_dep(), $adesao->get_cpf_titular(), $adesao->get_cpf_dependente(), $dep_nome, $dep_email, $dep_nome_mae, $adesao->get_telefone(), $adesao->get_nascimento(), $dep_tel, $dep_sexo, $adesao->get_cep(), $adesao->get_rua(), $adesao->get_bairro(), $adesao->get_numero(), $adesao->get_complemento(), $adesao->get_cidade(), $adesao->get_uf(), $adesao->get_aceite_termos_de_uso(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_hora_entrada_dos_dados(), $adesao->get_localizacao(), $dep_grau_parentesco);
    $cont_deps = $confirm0 == TRUE ? ++$cont_deps : $cont_deps;
}
/*



  dep_nome1
  dep_tel1
  dep_cpf1
  dep_nome_mae1
  dep_email1
  dep_grau_parentesco1
  dep_sexo1
  dep_nome2
  dep_tel2
  dep_cpf2
  dep_nome_mae2
  dep_email2
  dep_grau_parentesco2
  dep_sexo2
  dep_nome3
  dep_tel3
  dep_cpf3
  dep_nome_mae3
  dep_email3
  dep_grau_parentesco3
  dep_sexo3
  dep_nome4
  dep_tel4
  dep_cpf4
  dep_nome_mae4
  dep_email4
  dep_grau_parentesco4
  dep_sexo4
  dep_nome5
  dep_tel5
  dep_cpf5
  dep_nome_mae5
  dep_email5
  dep_grau_parentesco5
  dep_sexo5
  dep_nome6
  dep_tel6
  dep_cpf6
  dep_nome_mae6
  dep_email6
  dep_grau_parentesco6
  dep_sexo6
  dep_nome7
  dep_tel7
  dep_cpf7
  dep_nome_mae7
  dep_email7
  dep_grau_parentesco7
  dep_sexo7
  dep_nome8
  dep_tel8
  dep_cpf8
  dep_nome_mae8
  dep_email8
  dep_grau_parentesco8
  dep_sexo8
  dep_nome9
  dep_tel9
  dep_cpf9
  dep_nome_mae9
  dep_email9
  dep_grau_parentesco9
  dep_sexo9
  dep_nome10
  dep_tel10
  dep_cpf10
  dep_nome_mae10
  dep_email10
  dep_grau_parentesco10
  dep_sexo10
  dep_nome11
  dep_tel11
  dep_cpf11
  dep_nome_mae11
  dep_email11
  dep_grau_parentesco11
  dep_sexo11 */

if ($confirm === TRUE) {
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Sucesso</div>';
} else {
    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Erro...</div>';
}