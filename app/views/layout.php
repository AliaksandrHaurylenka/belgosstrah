<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=$this->e($title)?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link href='https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/libs.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">

    <?=$this->section('content')?>

</div><!--container-->

<script src="js/scripts.min.js"></script>
<script src="js/config.js"></script>
</body>
</html>