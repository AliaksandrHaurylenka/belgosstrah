<?php
use App\Models\Database;

function menu()
{
  $sql = new \Aura\SqlQuery\QueryFactory('mysql');
  $pdo = new PDO('mysql:host=localhost; dbname=insurance', 'root', '');
//$pdo = new PDO('mysql:host=localhost; dbname=u473969940_test', 'u473969940_test', 'POAtI9DVf6aT');
  $menu = new Database($sql, $pdo);

  return $menu->all('menu');
}