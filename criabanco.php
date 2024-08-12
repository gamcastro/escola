<?php

require_once 'vendor/autoload.php' ;

$caminhoBanco = __DIR__ . 'escola.sqllite' ;

$pdo = new PDO(dsn:'sqlite:' . $caminhoBanco) ;

//var_dump($pdo->exec('CREATE TABLE alunos (id INTEGER PRIMARY KEY,nome TEXT,cpf TEXT,data_nascimento TEXT)') );

var_dump($pdo->exec("SELECT * from alunos")) ;


