<?php $block = new \League\Plates\Engine('../app/views/blocks'); ?>
<?php $this->layout('layout',
    [
        'title' => 'Страхование online',
        'description' => 'Страхование online - это удобный способ без особых усилий застраховать себя, имущество.'
    ])
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <? foreach ($slides as $li): ?>
      <li data-target="#myCarousel" data-slide-to="<?= $li['id']-1; ?>" class="<?= $li['class']; ?>"></li>
    <? endforeach; ?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <? foreach ($slides as $slide): ?>
      <div class="carousel-item <?= $slide['class']; ?>">
        <img src="img/main/<?= $slide['image']; ?>" alt="<?= $slide['alt']; ?>">
      </div>
    <? endforeach; ?>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container">
  <h1 title="<?= $this->e($title) ?>">Страхование online</h1>
  <p class="lead">
    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias asperiores aut, debitis doloremque eligendi est
    eveniet iure iusto, magnam nobis nostrum perferendis perspiciatis possimus, quibusdam tenetur velit veritatis
    voluptate.
  </p>
  <p class="lead">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam aperiam cum distinctio dolor eveniet fugit, harum
    illum labore minus molestias nesciunt nobis nulla omnis quidem quos suscipit tenetur voluptates.
  </p>
  <?= $block->render('views-insurance'); ?>
</div><!-- /.container -->