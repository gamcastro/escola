<?php

use Geosoft\Escola\Modelo\Professor;

require_once 'vendor/autoload.php' ;


$caminhoBanco = __DIR__ . 'escola.sqllite' ;
$pdo = new PDO(dsn:'sqlite:' . $caminhoBanco) ;

$statement = $pdo->query('select * from professores') ;
$professorDataList = $statement->fetchAll(mode:PDO::FETCH_ASSOC) ;

$professores = [] ;

foreach ($professorDataList as $professorData) {
    $professores[] = new Professor(id:$professorData['id'],nome:$professorData['nome'],cpf:$professorData['cpf'],dataNascimento:$professorData['data_nascimento'],matricula:$professorData['matricula']) ;
}

var_dump($professores) ;