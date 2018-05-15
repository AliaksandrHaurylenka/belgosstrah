<?php
//$sql = new \Aura\SqlQuery\QueryFactory('mysql');
//$pdo = new PDO('mysql:host=localhost; dbname=insurance', 'root', '');
//$pdo = new PDO('mysql:host=localhost; dbname=u473969940_test', 'u473969940_test', 'POAtI9DVf6aT');
//$menu = new \App\Models\Database($sql, $pdo);
?>
<!-- FOOTER -->
<div class="footer pb-4">
  <footer class="container">
    <p class="float-right mt-2"><a href="#" class="company">Наверх</a></p>

    <div class="row">
      <p class="col-md-4 mt-2">&copy; 2017 - <?= strftime('%Y'); ?> <a href="/" class="company">Страхование online</a></p>

      <div class="col-md-3">
        <nav class="nav flex-column">
          <?php $result = $menu->allWhere('menu', 'name_en', 'stravita'); ?>
          <?php foreach ($result as $company): ?>
          <p class="lead my-2 pb-2"><?= $company['name']; ?></p>
          <?php endforeach; ?>

          <?php
          $drop = $menu->allWhere('menu-dropdown', 'attachment', 'stravita');
          foreach ($drop as $item) {
            echo '<a class="nav-link pl-0" href="' . $item['link'] . '">' . $item['name'] . '</a>';
          }
          ?>
        </nav>
      </div>

      <div class="col-md-3">
        <nav class="nav flex-column">
          <?php $result = $menu->allWhere('menu', 'name_en', 'belrosstrah'); ?>
          <?php foreach ($result as $company): ?>
            <p class="lead my-2 pb-2"><?= $company['name']; ?></p>
          <?php endforeach; ?>

          <?php
          $drop = $menu->allWhere('menu-dropdown', 'attachment', 'belrosstrah');
          foreach ($drop as $item) {
            echo '<a class="nav-link pl-0" href="' . $item['link'] . '">' . $item['name'] . '</a>';
          }
          ?>
        </nav>
      </div>
    </div>

  </footer>
</div>