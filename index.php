<?php

use Geosoft\Escola\Domain\Modelo\Aluno;
use Geosoft\Escola\Infraestrutura\Persistencia\ConnectionCreator;
use Geosoft\Escola\Infraestrutura\Repositorio\PdoAlunoRepositorio;

require './vendor/autoload.php' ;





$conexao = ConnectionCreator::CreateConnection() ;

$repositorioAluno = new PdoAlunoRepositorio($conexao) ;
$allAlunos = $repositorioAluno->allAlunos() ;

var_dump($allAlunos) ;
