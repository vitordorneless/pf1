<?php
function __autoload($file) {
    if (file_exists('../Model/' . $file . '.php'))
        require_once('../Model/' . $file . '.php');
    else
        exit('O arquivo ' . $file . ' não foi encontrado!');
}
include 'alertas.php';

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
$logar = new Login();
$confirm = $logar->Logar($user, $password);
$logou = $confirm == TRUE ? TRUE : FALSE;
if ($logou === TRUE) {    
    $caminho1 = "../View/index_admin.php";    
    echo "<script type='text/javascript'>";        
        echo "window.location.href='$caminho1';";
    echo "</script>"; 
}  else {
    $msg = "Erro, Usu\u00e1rio ou senha inv\u00e1lidos, tente novamente!!";
    $caminho = "../admin/index.php";
    alerta($msg, $caminho);
}