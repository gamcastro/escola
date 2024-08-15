<?php

namespace Geosoft\Escola\Domain\Modelo ;

class Turma
{
    private  $alunos = [] ;
    public function __construct(
        public readonly string $nome ,
        public readonly string $ano
    ) {

    }

    public function addAluno(Aluno $aluno) : void
    {
        $this->alunos[] = $aluno ;
    }

    public function removeAluno(string $cpf) : bool
    {
        foreach ($this->alunos as $index=>$aluno)
        {
            if($aluno->$cpf == $cpf) {
                unset($aluno[$index]);
                return true ;
            }
        }
        return false ;
    }

    public function getAlunos()
    {
        return $this->alunos ;
    }

}
