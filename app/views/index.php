<?php $this->layout('layout', ['title' => 'Main']) ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
        <img class="first-slide" src="img/main/1506864935_23.jpg" alt="First slide">
      </div>

      <div class="carousel-item">
        <img class="second-slide" src="img/main/Neustojka-po-osago.jpg" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="third-slide" src="img/main/153d2b213a1b613be120e791.jpg" alt="Third slide">
      </div>
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