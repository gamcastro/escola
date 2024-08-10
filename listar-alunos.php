<?php

use Geosoft\Escola\Modelo\Aluno;

require_once 'vendor/autoload.php' ;

$caminhoBanco = __DIR__ . 'escola.sqllite' ;

$pdo = new PDO(dsn:'sqlite:' . $caminhoBanco) ;

$statement = $pdo->query('SELECT * from alunos') ;

$alunoDataList = $statement->fetchAll(mode:PDO::FETCH_ASSOC) ;

$alunoList = [] ;

foreach ($alunoDataList as $alunoData)
{
    $alunoList[] = new Aluno(id:$alunoData['id'],nome:$alunoData['nome'],cpf:$alunoData['cpf'],dataNascimento:$alunoData['data_nascimento']) ;
}

var_dump($alunoList) ;