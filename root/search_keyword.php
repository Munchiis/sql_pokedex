<!DOCTYPE html>
<style>
body {
background-color: #CB91C1
}
</style>


<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>


<font color="white">

<?php
include "databaseconnect.php";

$keywordfromform = $_GET["keyword"];
// Search the database for the word keyword
if($keywordfromform != ""){
	echo "<h2 style='color:#FFDE00;
	text-shadow:0.05em 0 #3B4CCA,0 0.05em #3B4CCA,-0.05em 0 #3B4CCA,0 -0.05em #3B4CCA;'> Show all pokemon with the word <em> $keywordfromform </em> in their name </h2>";
	$result = $mysqli->query("select pokemon.*,pokemon_evolution_matchup.*, base_stats.*from pokemon join pokemon_evolution_matchup 
	on  pokemon.pok_id = pokemon_evolution_matchup.pok_id join base_stats on pokemon.pok_id = base_stats.pok_id 
	WHERE pok_name LIKE '%" . $keywordfromform . "%'");}
else{
	echo "<h2 style='color:#FFDE00;
	text-shadow:0.05em 0 #3B4CCA,0 0.05em #3B4CCA,-0.05em 0 #3B4CCA,0 -0.05em #3B4CCA;'> Show all pokemon</h2>";
	$result = $mysqli->query("select pokemon.*,pokemon_evolution_matchup.*, base_stats.*from pokemon join pokemon_evolution_matchup 
	on  pokemon.pok_id = pokemon_evolution_matchup.pok_id join base_stats on pokemon.pok_id = base_stats.pok_id 
	WHERE pok_name LIKE '%" . $keywordfromform . "%'");
}
?>
</font>
<div id="accordion">

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	//echo "Pokemon ID: " . $row["pok_id"]. " - Pokemon Name: " . $row["pok_name"]. " - Pokemon Height: " . $row["pok_height"]. 
	//" - Pokemon Weight: " . $row["pok_weight"]. " - Pokemon Base Experience: " . $row["pok_base_experience"]. "<br>";
    
    echo "<h2 style='background-color:#CC0000;color:#FFDE00;font-size: 20px;
	text-shadow:0.05em 0 #3B4CCA,0 0.05em #3B4CCA,-0.05em 0 #3B4CCA,0 -0.05em #3B4CCA;'> $row[pok_name]</h2>";
	echo "<div style='background-color:#CB91C1;'><p style='color: white;font-size: 20px;
	text-shadow:0.05em 0 black,0 0.05em black,-0.05em 0 black,0 -0.05em black;'>"?>
	<img src= '<?php echo $row["image"];?>'>
	<?php
	echo "<br>Pokemon ID:  $row[pok_id] <br>
	Pokemon Stats: <br>
	HP: $row[b_hp] <br>
	ATK: $row[b_atk] <br>
	DEF: $row[b_def] <br>
	SP ATK: $row[b_sp_atk] <br>
	SP DEF: $row[b_sp_def] <br>
	SPEED: $row[b_speed] <br>
	Pokemon Height: $row[pok_height] <br>
	Pokemon Weight: $row[pok_weight] <br>
	Pokemon Base Experience: $row[pok_base_experience] <br>
	</p>
	</div>";
	
	
	}
} else {
    echo "0 results";
}
?>
</div>
</html>