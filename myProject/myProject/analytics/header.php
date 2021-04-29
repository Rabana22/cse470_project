<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
	</style>
</head>
<body style="background: url('img/tex.jpg') fixed;
	background-repeat: repeat-x repeat-y;">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		  <a class="navbar-brand" href="index.php"><b style="color: #fafafa;"><h2 style="font-family: 'Shadows Into Light', cursive;">Visitor Management System...</h2></b></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		    	
		    	<?php if ($title == "Analytics | VMS") {
		    		echo '<li class="nav-item active">
		        <a class="nav-link" href="analytics.php">Analytics</a>
		      </li>';
		    	} else {
		    		echo '<li class="nav-item">
		        <a class="nav-link" href="analytics.php">Analytics</a>
		      </li>';
		    	}
		    	?>

		    	<?php if ($title == "Search Visitor | VMS") {
		    		echo '<li class="nav-item active">
		        <a class="nav-link" href="searchA.php">Search by Apartment</a>
		      </li>';
		    	} else {
		    		echo '<li class="nav-item">
		        <a class="nav-link" href="searchA.php">Search by Apartment</a>
		      </li>';
		    	}
		    	?>
		      
		      
		      
		      
		    </ul>
		  </div>
		</nav>