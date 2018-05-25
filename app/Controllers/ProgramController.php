<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.05.2018
 * Time: 14:59
 */

namespace App\Controllers;

use League\Plates\Engine;
use App\Models\Database;


class ProgramController
{
  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    $this->views = $views;
    $this->database = $database;
  }


  function name_program()
  {
    $name_program = $_POST['description'];
    return $name_program;
//    dd($name_program);
//    echo $this->views->render('avtokasko', compact('name_program'));
  }
}