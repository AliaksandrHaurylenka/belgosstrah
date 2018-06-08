<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.06.2018
 * Time: 13:00
 */

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