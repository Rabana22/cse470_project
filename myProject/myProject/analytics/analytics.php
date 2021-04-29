<?php
  error_reporting(0);
  $date = $_POST['date'];
  //$date = "2020-09-09";
	$title = "Analytics | VMS"; 
	include('header.php');
?>
<div class="container">
  <br>
  <center>
    <h2>Analytics of the Day</h2>
    <center>
    <form action="analytics.php" method="post">
      <div class="form-group">
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 300px;" name="date">
        <small id="emailHelp" class="form-text text-muted">Enter date</small>
      </div>
      <button type="submit" class="btn btn-primary" name="search">Get Analytics</button>
    </form>
  </center>
    <br>


    <?php 

      if (isset($date)) {
      
        $db = mysqli_connect("localhost", "root", "", "vms");
        $cnt_query = 'SELECT COUNT(*) as cnt FROM visits WHERE visiting_date = "' . $date . '" ';
        $cnt_result = mysqli_query($db,$cnt_query);
        $cnt_row = mysqli_fetch_array($cnt_result, MYSQLI_ASSOC);
        $cnt = $cnt_row["cnt"];
        echo 'Total visit of the day ' . $date . ' is ' .$cnt . '<br><br>';

        if ($cnt != 0) {
            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "00:00:00" AND entry_time < "03:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>12:00 AM - 03:00 AM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';

            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "03:00:00" AND entry_time < "06:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>03:00 AM - 06:00 AM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';


            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "06:00:00" AND entry_time < "09:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>06:00 AM - 09:00 AM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';

            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "9:00:00" AND entry_time < "12:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>09:00 AM - 12:00 PM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';

            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "12:00:00" AND entry_time < "15:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>12:00 PM - 03:00 PM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';

            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "15:00:00" AND entry_time < "18:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>03:00 PM - 06:00 PM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';

            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "18:00:00" AND entry_time < "21:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>06:00 PM - 09:00 PM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';

            $query = 'SELECT COUNT(*) as cnt FROM visits WHERE entry_time >= "21:00:00" AND visiting_date = "' . $date . '" ';
            $result = mysqli_query($db,$query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $time_cnt = $row["cnt"];
            $percent = $time_cnt/$cnt*100;
            echo '<span>9:00 PM - 12:00 AM</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>';
        }
      }

    ?>








  </center>
</div>
<?php 

  if (isset($_POST['search'])) {
      $date = $_POST["date"];
  }

	include('footer.php')
 ?>
