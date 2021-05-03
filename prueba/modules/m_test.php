<?php

include '../core/test.php';

$planet = json_decode(getPlanet(rand(1, 20)), true);
//echo($planet);

class Planets {
  // Properties
  public $name;
  public $rotation_period;
  public $orbital_period;
  public $climate;
  public $diameter;
  public $gravity;

  // Methods
  	function set_name($name) {
  		$this->name = $name;  
	}
	function set_rotation_period($rotation_period) {
    	$this->rotation_period = $rotation_period;  
	}
	function set_orbital_period($orbital_period) {
    	$this->orbital_period = $orbital_period;  
	}
	function set_climate($climate) {
    	$this->climate = $climate;  
	}
  	function set_diameter($diameter) {
    	$this->diameter = $diameter;  
	}
  	function set_gravity($gravity) {
  		$this->gravity = $gravity;  
		}
  

}

$random_planet = new Planets();

$random_planet->set_name ($planet["name"]);
$random_planet->set_rotation_period ( $planet["rotation_period"]);
$random_planet->set_orbital_period ( $planet["orbital_period"]);
$random_planet->set_climate ( $planet["climate"]);
$random_planet->set_diameter ( $planet["diameter"]);
$random_planet->set_gravity ( $planet["gravity"]);

//echo($planet["gravity"]);

?>