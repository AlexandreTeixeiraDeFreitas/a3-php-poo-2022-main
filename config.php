<?php

$db = require __DIR__.'/parameters.php';
var_dump($db);


try{
    $pdo = new PDO ('mysql:dbname='.$db['dbname'].';host='.$db['host'], $db['user'], $db['password']);

}catch (PDOException $e){
    echo $e->getMessage();
}