<?
header('Content-Type: text/html; charset=utf-8');
//Включение всех ошибок и предупреждений
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

	<meta charset="utf-8">
	<title>Intervale</title>

  <?php include("blocks/meta.php"); ?>

</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 form-intervale">
        <?php include("blocks/pages/home.php"); ?>
      </div>
    </div>
  </div>
  
  <?php include("blocks/links-scripts.php"); ?>

</body>
</html>
