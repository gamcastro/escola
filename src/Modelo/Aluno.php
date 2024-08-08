<?php

namespace Geosoft\Escola\Modelo ;

class Aluno extends Pessoa
{   

    public function __construct(
        string $nome,
        string  $cpf,
        string $dataNascimento
    )
    {
       parent::__construct($nome,$cpf,$dataNascimento) ;
    }

  
}