<?php

class Adesao_CRUD extends Adesao {

    public function save($hash_de_vinvulo, $ip_captura, $titular, $cpf_titular, $cpf_dependente, $nome, $email, $nome_mae, $telefone, $nascimento, $celular, $sexo, $cep, $rua, $bairro, $numero, $complemento, $cidade, $uf, $aceite_termos_de_uso, $hora_entrada_dos_dados, $criado_em, $localizacao,$grau_parentesco) {
        include_once '../config/database_mysql.php';
        $status = 1;
        $data_ultima_alteracao = date('Y-m-d H:i:s');
        $pdo = Database::connect();
        $smtp = $pdo->prepare("INSERT INTO adesao(hash_de_vinvulo,ip_captura,titular,cpf_titular,cpf_dependente,nome,email,nome_mae,telefone,nascimento,celular,sexo,cep,rua,bairro,numero,complemento,cidade,uf,aceite_termos_de_uso,hora_entrada_dos_dados,criado_em,localizacao,grau_parentesco,status,data_ultima_alteracao) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $smtp->bindParam(1, $hash_de_vinvulo, PDO::PARAM_STR);
        $smtp->bindParam(2, $ip_captura, PDO::PARAM_STR);
        $smtp->bindParam(3, $titular, PDO::PARAM_INT);
        $smtp->bindParam(4, $cpf_titular, PDO::PARAM_STR);
        $smtp->bindParam(5, $cpf_dependente, PDO::PARAM_STR);
        $smtp->bindParam(6, $nome, PDO::PARAM_STR);
        $smtp->bindParam(7, $email, PDO::PARAM_STR);
        $smtp->bindParam(8, $nome_mae, PDO::PARAM_STR);
        $smtp->bindParam(9, $telefone, PDO::PARAM_STR);
        $smtp->bindParam(10, $nascimento, PDO::PARAM_STR);
        $smtp->bindParam(11, $celular, PDO::PARAM_STR);
        $smtp->bindParam(12, $sexo, PDO::PARAM_INT);
        $smtp->bindParam(13, $cep, PDO::PARAM_STR);
        $smtp->bindParam(14, $rua, PDO::PARAM_STR);
        $smtp->bindParam(15, $bairro, PDO::PARAM_STR);
        $smtp->bindParam(16, $numero, PDO::PARAM_STR);
        $smtp->bindParam(17, $complemento, PDO::PARAM_STR);
        $smtp->bindParam(18, $cidade, PDO::PARAM_STR);
        $smtp->bindParam(19, $uf, PDO::PARAM_STR);
        $smtp->bindParam(20, $aceite_termos_de_uso, PDO::PARAM_INT);
        $smtp->bindParam(21, $hora_entrada_dos_dados, PDO::PARAM_STR);
        $smtp->bindParam(22, $criado_em, PDO::PARAM_STR);
        $smtp->bindParam(23, $localizacao, PDO::PARAM_STR);
        $smtp->bindParam(24, $grau_parentesco, PDO::PARAM_INT);
        $smtp->bindParam(25, $status, PDO::PARAM_INT);
        $smtp->bindParam(26, $data_ultima_alteracao, PDO::PARAM_STR);
        $confirm = $smtp->execute();
        print_r($pdo->errorInfo());
        Database::disconnect();
        $save = $confirm == TRUE ? TRUE : FALSE;
        return $save;
    }
    
    public function edit($hash_de_vinvulo, $ip_captura, $titular, $cpf_titular, $cpf_dependente, $nome, $email, $nome_mae, $telefone, $nascimento, $celular, $sexo, $cep, $rua, $bairro, $numero, $complemento, $cidade, $uf, $aceite_termos_de_uso, $hora_entrada_dos_dados, $criado_em, $localizacao,$grau_parentesco,$status,$id) {
        include_once '../config/database_mysql.php';        
        $data_ultima_alteracao = date('Y-m-d H:i:s');
        $pdo = Database::connect();
        $smtp = $pdo->prepare("UPDATE adesao SET hash_de_vinvulo = ?,ip_captura = ?,titular = ?,cpf_titular = ?,cpf_dependente = ?,nome = ?,email = ?,nome_mae = ?,telefone = ?,nascimento = ?,celular = ?,sexo = ?,cep = ?,rua = ?,bairro = ?,numero = ?,complemento = ?,cidade = ?,uf = ?,aceite_termos_de_uso = ?,hora_entrada_dos_dados = ?,criado_em = ?,localizacao = ?,grau_parentesco = ?,status = ?,data_ultima_alteracao = ? where id = ?");
        $smtp->bindParam(1, $hash_de_vinvulo, PDO::PARAM_STR);
        $smtp->bindParam(2, $ip_captura, PDO::PARAM_STR);
        $smtp->bindParam(3, $titular, PDO::PARAM_INT);
        $smtp->bindParam(4, $cpf_titular, PDO::PARAM_STR);
        $smtp->bindParam(5, $cpf_dependente, PDO::PARAM_STR);
        $smtp->bindParam(6, $nome, PDO::PARAM_STR);
        $smtp->bindParam(7, $email, PDO::PARAM_STR);
        $smtp->bindParam(8, $nome_mae, PDO::PARAM_STR);
        $smtp->bindParam(9, $telefone, PDO::PARAM_STR);
        $smtp->bindParam(10, $nascimento, PDO::PARAM_STR);
        $smtp->bindParam(11, $celular, PDO::PARAM_STR);
        $smtp->bindParam(12, $sexo, PDO::PARAM_INT);
        $smtp->bindParam(13, $cep, PDO::PARAM_STR);
        $smtp->bindParam(14, $rua, PDO::PARAM_STR);
        $smtp->bindParam(15, $bairro, PDO::PARAM_STR);
        $smtp->bindParam(16, $numero, PDO::PARAM_STR);
        $smtp->bindParam(17, $complemento, PDO::PARAM_STR);
        $smtp->bindParam(18, $cidade, PDO::PARAM_STR);
        $smtp->bindParam(19, $uf, PDO::PARAM_STR);
        $smtp->bindParam(20, $aceite_termos_de_uso, PDO::PARAM_INT);
        $smtp->bindParam(21, $hora_entrada_dos_dados, PDO::PARAM_STR);
        $smtp->bindParam(22, $criado_em, PDO::PARAM_STR);
        $smtp->bindParam(23, $localizacao, PDO::PARAM_STR);
        $smtp->bindParam(24, $grau_parentesco, PDO::PARAM_INT);
        $smtp->bindParam(25, $status, PDO::PARAM_INT);
        $smtp->bindParam(26, $data_ultima_alteracao, PDO::PARAM_STR);
        $smtp->bindParam(27, $id, PDO::PARAM_INT);
        $confirm = $smtp->execute();
        print_r($pdo->errorInfo());
        Database::disconnect();
        $save = $confirm == TRUE ? TRUE : FALSE;
        return $save;
    }
    
    public function Dados($id) {
        include_once '../config/database_mysql.php';
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select id,hash_de_vinvulo,ip_captura,titular,cpf_titular,cpf_dependente,nome,email,nome_mae,telefone,nascimento,celular,sexo,cep,rua,bairro,numero,complemento,cidade,uf,aceite_termos_de_uso,hora_entrada_dos_dados,criado_em,localizacao,grau_parentesco,status,data_ultima_alteracao from adesao where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $data;
    }
}
