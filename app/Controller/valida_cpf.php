<?php
function __autoload($file) {
    if (file_exists('../Model/' . $file . '.php'))
        require_once('../Model/' . $file . '.php');
    else
        exit('O arquivo ' . $file . ' não foi encontrado!');
}
include 'alertas.php';
$base_cpf = new Base_CPF();
$cpf = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
alerta_2($cpf);
$souelegivel = $base_cpf->Dados($cpf);
alerta_2($souelegivel['todos']);
if ($souelegivel['todos'] === '0') {    
    $caminho1 = "../View/cadastro.php";    
    echo "<script type='text/javascript'>";        
        echo "window.location.href='$caminho1';";
    echo "</script>"; 
}  else {
    $msg = "Erro, Não Elegível";
    $caminho = "../../index.php";
    alerta($msg, $caminho);
}