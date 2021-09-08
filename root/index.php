<!DOCTYPE html>
<style>
body {
  background: url(/images/background.jpg);
  background-size:cover;
  overflow: hidden;
}
</style>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style ="text-align:center">
<h1> <img src="/images/title.png" alt="Pokedex"></h1>

<?php
include "databaseconnect.php";
//include "search_pok.php";
?>
</head>
<form class="form-horizontal" action="search_keyword.php" >

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword"><img src="/images/search_input.png" alt="Search Input" style="margin-Top:-20px"></label>
  <div class="col-md-4">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. pidgey" class="form-control input-md">
    <p class="help-block" ><em>Enter pokemon name<em></p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Search</button>
  </div>
</div>
</fieldset>
</form>

<?php
//include "search_keyword.php";
$mysqli->close();
?>
</body>
</html>