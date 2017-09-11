<?php

class Queries {
    public function geral_listar() {
        $sql = "select id,cpf_titular, telefone,celular,cidade from adesao where titular in (1) order by cpf_titular asc";
        return $sql;
    }
}
