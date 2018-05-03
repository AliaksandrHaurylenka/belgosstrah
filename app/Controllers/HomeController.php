<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 30.04.2018
 * Time: 16:38
 */

namespace App\Controllers;


use League\Plates\Engine;

class HomeController {

  private $engine;

  function __construct(Engine $engine)
  {
    $this->engine = $engine;
  }

  function index()
  {
    echo $this->engine->render('index');
  }
} 