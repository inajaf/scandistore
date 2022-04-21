<?php
spl_autoload_register(static function ($class) {
    require_once(dirname(__DIR__,  1) . '/src/' . $class .  '.php');
});

$helper = new Helper();
$database = new Database();

$result = '';

try {
    $query = "SELECT id, name  FROM product";

    $runQuery = $database->connect()->query($query);
    $result = $runQuery->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

var_dump($result);



