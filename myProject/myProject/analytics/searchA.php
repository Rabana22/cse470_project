<?php 
	$title = "Search Visitor | VMS"; 
	include('header.php');
?>
<div class="container">
  <br>
  <center>
    <form action="searchResultA.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Search by Apartment</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 300px;" name="keywords" placeholder="Ex: F12">
        <small id="emailHelp" class="form-text text-muted">Enter the apartment number</small>
      </div>
      <button type="submit" class="btn btn-primary" name="search">Search</button>
    </form>
  </center>
</div>
<?php 
  if (isset($_POST['search'])) {
      $keywords = $_POST["keywords"];
  }
	include('footer.php')
 ?>
