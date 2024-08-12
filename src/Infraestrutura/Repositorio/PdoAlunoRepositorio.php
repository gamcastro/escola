<?php

namespace Geosoft\Escola\Infraestrutura\Repositorio ;

use Geosoft\Escola\Domain\Modelo\Aluno;
use Geosoft\Escola\Domain\Repositorio\AlunoRepositorio;
use PDO;

class PdoAlunoRepositorio implements AlunoRepositorio 
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
      $this->conexao = $conexao;
    }

    public function salvar(Aluno $aluno): bool
    {
        $sqlInsert = "INSERT INTO alunos (nome,cpf,data_nascimento) values (?,?,?)" ;
        $stmt = $this->conexao->prepare($sqlInsert) ;
        $stmt->bindValue(param:1,value:$aluno->nome) ;
        $stmt->bindValue(param:2,value: $aluno->cpf) ;
        $stmt->bindValue(param:3,value: $aluno->getDataNascimento()) ;
        return $stmt->execute() ;

    }
}