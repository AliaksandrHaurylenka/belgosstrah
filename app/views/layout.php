<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $this->e($title) ?></title>
  <meta name="description" content="<?= $this->e($description) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link href='https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/libs.css">
  <!-- Обратная связь -->
  <link rel="stylesheet" href="/feedback/vendors/jgrowl/jquery.jgrowl.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="wrap">
  <div class="content">
    <? $this->insert('blocks/main-nav'); ?>

    <?= $this->section('content') ?>
  </div><!--/.content-->

  <? $this->insert('blocks/footer'); ?>
</div><!--wrap-->

<script src="js/scripts.min.js"></script>
<!-- Обратная связь -->
<script src="feedback/vendors/jgrowl/jquery.jgrowl.min.js"></script>
<script src="feedback/js/main.js"></script>
<script src="js/config.js"></script>
</body>
</html>