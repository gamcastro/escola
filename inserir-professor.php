<?php

use Geosoft\Escola\Modelo\Professor;

require_once 'vendor/autoload.php' ;

$sqlInsert = "INSERT INTO professores (nome,cpf,data_nascimento,matricula) VALUES (?,?,?,?)" ;

$caminhoBanco = __DIR__ . 'escola.sqllite' ;

$professor = new Professor(null,'Markleny Martins Pinheiro','655014383-72','28/02/1981','123458') ;

$pdo = new PDO(dsn:'sqlite:' . $caminhoBanco) ;

$statement = $pdo->prepare($sqlInsert) ;

$statement->bindValue(param:1,value: $professor->nome) ;
$statement->bindValue(param:2,value:$professor->cpf) ;
$statement->bindValue(param:3,value:$professor->getDataNascimento()) ;
$statement->bindValue(param:4,value:$professor->matricula) ;

if ($statement->execute()) {
    echo "Professor incluido" ;
}


