<?php 
	$title = "Visitor Management System"; 
	include('header.php');
?>


<div class="jumbotron">
  <h1 class="display-4">Welcome! | Bonjour</h1>
  <p class="lead">This is a simple visitor management service by the students of Department of Computer Science and Engineering at BRAC University.</p>
  <hr class="my-4">
  <p>It uses mysql databese for storing and retriving data in different manners.</p>
  <a class="btn btn-primary btn-lg" href="searchA.php" role="button">Search</a>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style type="text/css">
	.carousel-item img {
		height: 500px;
		width: auto;
	}

</style>

<div class="container">
</div>
<?php 
	include('footer.php')
 ?>


