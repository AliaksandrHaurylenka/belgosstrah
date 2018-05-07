<?php $block = new \League\Plates\Engine('../app/views/blocks'); ?>
<?php $this->layout('layout', ['title' => 'Main']) ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <? foreach ($slides as $li): ?>
      <li data-target="#myCarousel" data-slide-to="<?= $li['id']; ?>" class="<?= $li['class']; ?>"></li>
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
  <?= $block->render('views-insurance'); ?>
</div><!-- /.container -->