<?php
$sql = new \Aura\SqlQuery\QueryFactory('mysql');
$pdo = new PDO('mysql:host=localhost; dbname=insurance', 'root', '');
$menu = new \App\Models\Database($sql, $pdo);
?>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-primary">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">Страхование online</a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <?php $result = $menu->all('menu'); ?>
        <? foreach ($result as $li): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= $li['link']; ?>" role="button"
               aria-haspopup="true" aria-expanded="false"><?= $li['name']; ?></a>
            <div class="dropdown-menu">
              <?php
              if ($li['name_en'] == "stravita") {
                $drop = $menu->allWhere('menu-dropdown', 'stravita');
                foreach ($drop as $item) {
                  echo '<a class="dropdown-item" href="#">' . $item['name'] . '</a>';
                }
              } elseif ($li['name_en'] == 'belrosstrah') {
                $drop = $menu->allWhere('menu-dropdown', 'belrosstrah');
                foreach ($drop as $item) {
                  echo '<a class="dropdown-item" href="#">' . $item['name'] . '</a>';
                }
              }
              ?>
            </div>
          </li>
        <? endforeach; ?>
      </ul>

      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div><!-- <div class="container">-->
</nav>