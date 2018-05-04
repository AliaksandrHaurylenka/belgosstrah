<?php $this->layout('layout', ['title' => 'Main']) ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <? foreach($slides as $li): ?>
      <li data-target="#myCarousel" data-slide-to="<?= $li['id']; ?>" class="<?= $li['class']; ?>"></li>
    <? endforeach; ?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <? foreach($slides as $slide): ?>
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


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container">
  <div class="well">
    <h3 class="pb-2">Виды страховых услуг</h3>
  </div>

  <div class="card-group mt-3">
    <div class="card">
      <img class="card-img-top img-fluid" src="img/services/banner1.png" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top img-fluid" src="img/services/banner1.png" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top img-fluid" src="img/services/banner1.png" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
  </div>


  <!-- FOOTER -->
  <footer>
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

</div><!-- /.container -->