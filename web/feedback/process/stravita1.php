<?php


class Validate
{
  public $a = 'hy';


  // функция для проверки количества символов в тексте
  function checkTextLength($text, $minLength, $maxLength)
  {
    $result = false;
    $textLength = strlen($text);
    if (($textLength >= $minLength) && ($textLength <= $maxLength)) {
      $result = true;
    }
    return $result;
  }
}

$stravita = new Validate;
$str = $stravita->checkTextLength('s', 2, 10);
var_dump($str);


