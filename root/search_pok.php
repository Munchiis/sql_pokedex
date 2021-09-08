<?php

//if there are any values in the table display them one at a time
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT pok_id, pok_name, pok_height, pok_weight, pok_base_experience FROM pokemon";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "Pokemon ID: " . $row["pok_id"]. " - Pokemon Name: " . $row["pok_name"]. " - Pokemon Height: " . $row["pok_height"]. 
	" - Pokemon Weight: " . $row["pok_weight"]. " - Pokemon Base Experience: " . $row["pok_base_experience"]. "<br>";
    }
} else {
    echo "0 results";
}

?>