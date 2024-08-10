<?php

namespace Geosoft\Escola\Modelo ;

use DateTime ;
use InvalidArgumentException;
use TypeError;

abstract class Pessoa
{
    protected readonly DateTime $dataNascimento ;

    public function __construct(
        public readonly ?int $id,
        public readonly string $nome,
        public readonly string $cpf,
        string $dataNascimento
    )
    {
        $data = DateTime::createFromFormat('d/m/Y',$dataNascimento,timezone_open('America/Belem')) ;
        if (is_bool($data))
        {
            throw new InvalidArgumentException('A data está em um formato inválido') ;
        }
        $this->dataNascimento = $data ;
        
      
       }
            
             
       public function getDataNascimento() : string
       {
         return $this->dataNascimento->format('d/m/Y') ;
       }
    

    public function getIdade() : int
    {
        $dataAtual = new DateTime() ;

        $idade =  date_diff($this->dataNascimento,$dataAtual) ;

        return $idade->y ;
    }
}