<?php

require './vendor/autoload.php' ;

use Geosoft\Escola\Modelo\Aluno ;





try {
    $aluno = new Aluno(null,'George André Melo Castro','71050035372','17/04/1976') ;
    echo $aluno->getDataNascimento() ;
}
catch(InvalidArgumentException $e) {
    echo "Ocorreu um erro " . $e->getMessage() ;
}

