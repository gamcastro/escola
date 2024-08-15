<?php

namespace Geosoft\Escola\Domain\Modelo ;

class Professor extends Pessoa
{
    public function __construct(
        ?int $id,
        string $nome,
        string $cpf,
        string $dataNascimento,
        public readonly string $matricula
    ) {
        parent::__construct($id, $nome, $cpf, $dataNascimento);
    }
}
