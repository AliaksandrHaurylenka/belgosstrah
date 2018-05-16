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
    $this->database = $database;
  }


  function index()
  {
    $slides = $this->database->all('slide');
    echo $this->views->render('index', compact('slides'));
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