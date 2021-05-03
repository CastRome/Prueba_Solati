<!DOCTYPE html>
<?php

include '../modules/m_test.php';
 //echo($planet_name)
?>
<html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<head>
	<title>Page Title</title>
</head>
<body>

<div class="container">
  <div class="row>
	    <span class="input-group-text col-sm-12" id="inputGroup-sizing-sm">Random StarWars Planet</span>
	    <span class="input-group-text col-sm-12" id="inputGroup-sizing-sm"></span>
</div>	  
	  <span class=" col-sm-2" id="inputGroup-sizing-sm">Name</span>
	  <input type="text" class=" col-sm-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php  echo($random_planet->name) ?>"> 
	  <span class="col-sm-2" id="inputGroup-sizing-sm">Rotation period</span>
	  <input type="text" class=" col-sm-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php  echo($random_planet->rotation_period) ?>"> 
	    <span class=" col-sm-2" id="inputGroup-sizing-sm">Orbital period</span>
	  <input type="text" class=" col-sm-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php  echo($random_planet->orbital_period) ?>"> 
	    <span class=" col-sm-2" id="inputGroup-sizing-sm">Climate</span>
	  <input type="text" class=" col-sm-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php  echo($random_planet->climate) ?>"> 
	    <span class=" col-sm-2" id="inputGroup-sizing-sm">Diameter</span>
	  <input type="text" class=" col-sm-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php  echo($random_planet->diameter) ?>"> 
	    <span class=" col-sm-2" id="inputGroup-sizing-sm">Gravity</span>
	  <input type="text" class=" col-sm-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php  echo($random_planet->gravity) ?>"> 
		<a class="btn btn-primary" href="<?php $_SERVER['PHP_SELF']; ?>" role="button">Randomize planet</a>
		

</div>





</body>
</html>
