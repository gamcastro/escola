<?php

namespace Geosoft\Escola\Infraestrutura\Persistencia ;

use PDO;

class ConnectionCreator
{
    public static function CreateConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../escola.sqlite';
        $conexao = new PDO(dsn:'sqlite:' . $databasePath);
        return $conexao ;
    }
}

