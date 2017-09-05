<?php

class Adesao {

    private $id;
    private $hash_de_vinvulo;
    private $ip_captura;
    private $cpf_titular;
    private $nome;
    private $email;
    private $nome_mae;
    private $telefone;
    private $nascimento;
    private $celular;
    private $sexo;
    private $cep;
    private $rua;
    private $bairro;
    private $numero;
    private $complemento;
    private $cidade;
    private $uf;
    private $aceite_termos_de_uso;
    private $hora_entrada_dos_dados;
    private $criado_em;
    private $localizacao;
    private $status;
    private $data_ultima_alteracao;
    private $titular;
    private $cpf_dependente;

    public function set_id($id) {
        $this->id = $id;
    }

    public function get_id() {
        return $this->id;
    }

    public function set_cpf_dependente($cpf_dependente) {
        $this->cpf_dependente = $cpf_dependente;
    }

    public function get_cpf_dependente() {
        return $this->cpf_dependente;
    }

    public function set_titular($titular) {
        $this->titular = $titular;
    }

    public function get_titular() {
        return $this->titular;
    }

    public function set_data_ultima_alteracao($data_ultima_alteracao) {
        $this->data_ultima_alteracao = $data_ultima_alteracao;
    }

    public function get_data_ultima_alteracao() {
        return $this->data_ultima_alteracao;
    }

    public function set_status($status) {
        $this->status = $status;
    }

    public function get_status() {
        return $this->status;
    }

    public function set_localizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function get_localizacao() {
        return $this->localizacao;
    }

    public function set_criado_em($criado_em) {
        $this->criado_em = $criado_em;
    }

    public function get_criado_em() {
        return $this->criado_em;
    }

    public function set_hora_entrada_dos_dados($hora_entrada_dos_dados) {
        $this->hora_entrada_dos_dados = $hora_entrada_dos_dados;
    }

    public function get_hora_entrada_dos_dados() {
        return $this->hora_entrada_dos_dados;
    }

    public function set_aceite_termos_de_uso($aceite_termos_de_uso) {
        $this->aceite_termos_de_uso = $aceite_termos_de_uso;
    }

    public function get_aceite_termos_de_uso() {
        return $this->aceite_termos_de_uso;
    }

    public function set_uf($uf) {
        $this->uf = $uf;
    }

    public function get_uf() {
        return $this->uf;
    }

    public function set_cidade($cidade) {
        $this->cidade = $cidade;
    }

    public function get_cidade() {
        return $this->cidade;
    }

    public function set_complemento($complemento) {
        $this->complemento = $complemento;
    }

    public function get_complemento() {
        return $this->complemento;
    }

    public function set_numero($numero) {
        $this->numero = $numero;
    }

    public function get_numero() {
        return $this->numero;
    }

    public function set_bairro($bairro) {
        $this->bairro = $bairro;
    }

    public function get_bairro() {
        return $this->bairro;
    }

    public function set_rua($rua) {
        $this->rua = $rua;
    }

    public function get_rua() {
        return $this->rua;
    }

    public function set_cep($cep) {
        $this->cep = $cep;
    }

    public function get_cep() {
        return $this->cep;
    }

    public function set_sexo($sexo) {
        $this->sexo = $sexo;
    }

    public function get_sexo() {
        return $this->sexo;
    }

    public function set_celular($celular) {
        $this->celular = $celular;
    }

    public function get_celular() {
        return $this->celular;
    }

    public function set_nascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function get_nascimento() {
        return $this->nascimento;
    }

    public function set_telefone($telefone) {
        $this->telefone = $telefone;
    }

    public function get_telefone() {
        return $this->telefone;
    }

    public function set_nome_mae($nome_mae) {
        $this->nome_mae = $nome_mae;
    }

    public function get_nome_mae() {
        return $this->nome_mae;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function set_cpf_titular($cpf_titular) {
        $this->cpf_titular = $cpf_titular;
    }

    public function get_cpf_titular() {
        return $this->cpf_titular;
    }

    public function set_ip_captura($ip_captura) {
        $this->ip_captura = $ip_captura;
    }

    public function get_ip_captura() {
        return $this->ip_captura;
    }

    public function set_hash_de_vinvulo($hash_de_vinvulo) {
        $this->hash_de_vinvulo = $hash_de_vinvulo;
    }

    public function get_hash_de_vinvulo() {
        return $this->hash_de_vinvulo;
    }

}
