<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 30.04.2018
 * Time: 16:38
 */

namespace App\Controllers;


use App\Models\Database;
use League\Plates\Engine;

class HomeController {

  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    $this->views = $views;
    $this->database=$database;
  }

  function index()
  {
    $slides = $this->database->all('slide');
//    $menu = $this->database->all('menu');
//    dd($menu);
    echo $this->views->render('index', compact('slides'));
//    echo $this->views->render('index', ['slides' => $slides, 'menu' => $menu]);
  }

  function contact()
  {
    echo $this->views->render('contact');
  }

  function life_1()
  {
    echo $this->views->render('life_1');
  }
} 