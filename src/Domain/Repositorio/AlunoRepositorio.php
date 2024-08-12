<?php

namespace Geosoft\Escola\Domain\Repositorio ;

use Geosoft\Escola\Domain\Modelo\Aluno;

interface AlunoRepositorio
{
    public function salvar(Aluno $aluno): bool ;
    
}