<?php

try {
  $hostname = "10.0.30.13";
  $dbname = "gabssa-cam";
  $username = "gabssa-cam";
  $pw = "gabssa-cam";
  $dbh = new PDO ("dblib:host=$hostname;dbname=$dbname","$username","$pw");
} catch (PDOException $e) {
  echo "Failed to get DB handle: " . $e->getMessage() . "\n";
  exit;
}

 ?>
