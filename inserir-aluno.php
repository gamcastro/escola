<?php

use Geosoft\Escola\Modelo\Aluno;

require_once 'vendor/autoload.php' ;

$caminhoBanco = __DIR__ . 'escola.sqllite' ;

$pdo = new PDO(dsn:'sqlite:' . $caminhoBanco) ;

$aluno = new Aluno(null,'George André Melo Castro','71050035372','17/04/1976') ;

$sqlInsert = "INSERT INTO alunos (nome,cpf,data_nascimento) values(?,?,?)" ;

$statement = $pdo->prepare($sqlInsert) ;

$statement->bindValue(param:1,value: $aluno->nome);
$statement->bindValue(param:2,value:$aluno->cpf) ;
$statement->bindValue(param:3,value: $aluno->getDataNascimento()) ;

if ($statement->execute()) {
    echo "Aluno incluído" ;
}



