<?php 
  $keywords = $_POST['keywords'];
	$title = "Search Results | VMS"; 
	include('header.php');
?>
<div class="container">
  <br>
  <center>
    <h2>Search Result: </h2>
    <br>
    <div class="list-group">
      


      <?php 
        $db = mysqli_connect("localhost", "root", "", "vms");
        $query = 'SELECT * from visitors, visits where visitors.id = visits.visitor_id AND flat like "%' . $keywords . '%"';

        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          echo '<a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">' . $row["f_name"] . ' ' . $row["l_name"] . '</h5>
                    <small class="text-muted">Date: ' . $row["visiting_date"] . '</small>
                  </div>
                  <p class="mb-1">Address: ' . $row["address"] . '. Phone: ' . $row["phone"] . '</p>
                  <small class="text-muted">Entry: ' . $row["entry_time"] . ', Exit: ' . $row["exit_time"] . ' @ Flat no ' . $row["flat"] . '</small>
                </a>';
        }
       ?>

    </div>
  </center>
</div>
<?php 
	include('footer.php')
 ?>
