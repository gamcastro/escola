<?php

namespace Geosoft\Escola\Domain\Modelo ;

class Aluno extends Pessoa
{

   

    public function __construct(
        ?int $id,
        string $nome,
        string  $cpf,
        string $dataNascimento
    ) {
        parent::__construct($id, $nome, $cpf, $dataNascimento);
    }

  
}
