<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-primary">

  <div class="container">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">Страхование online</a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <? foreach (menu() as $li): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false"><?= $li['name']; ?></a>
            <div class="dropdown-menu">
              <?php
              if ($li['name_en'] == "belrosstrah") {
                $drop = menuDrop('menu-dropdown','attachment','belrosstrah');
                foreach ($drop as $item) {
                  echo '<a class="dropdown-item" href="' . $item['link']. '">' . $item['name'] . '</a>';
                  echo "<div class=\"dropdown-divider\"></div>";
                }
              } elseif ($li['name_en'] == 'stravita') {
                $drop = menuDrop('menu-dropdown','attachment','stravita');
                foreach ($drop as $item) {
                  echo '<a class="dropdown-item" href="' . $item['link']. '">' . $item['name'] . '</a>';
                  echo "<div class=\"dropdown-divider\"></div>";
                }
              }
              ?>
            </div>
          </li>
        <? endforeach; ?>

        <li class="nav-item">
          <a class="nav-link" href="/contact">Контакты</a>
        </li>
      </ul>

    </div>

  </div>

</nav>