<?php

use Geosoft\Escola\Domain\Modelo\Aluno;
use Geosoft\Escola\Infraestrutura\Persistencia\ConnectionCreator;
use Geosoft\Escola\Infraestrutura\Repositorio\PdoAlunoRepositorio;

require './vendor/autoload.php' ;





$conexao = ConnectionCreator::CreateConnection() ;

try {
    $aluno = new Aluno(null,'George André Melo Castro','71050035372','17/04/1976') ;
    echo $aluno->getDataNascimento() ;
    $alunoRepositorio = new PdoAlunoRepositorio($conexao) ;
    $alunoRepositorio->salvar($aluno) ;
}
catch(InvalidArgumentException $e) {
    echo "Ocorreu um erro " . $e->getMessage() ;
}

