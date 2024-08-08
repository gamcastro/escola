<?php

require './vendor/autoload.php' ;

use Geosoft\Escola\Modelo\Aluno ;





try {
    $aluno = new Aluno('George André Melo Castro','71050035372','33333') ;
    echo $aluno->getIdade() ;
}
catch(InvalidArgumentException $e) {
    echo "Ocorreu um erro " . $e->getMessage() ;
}

