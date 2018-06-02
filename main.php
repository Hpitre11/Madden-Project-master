<style>
  <?php
    include 'css/style.css';
  ?>
</style>

<?php

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'madden';

  //Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  // Create a PDO instance

  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// User input
$player = $_POST['player'];
$category = $_POST['category'];

// Positional Parameters

 $sql = "SELECT * FROM offense WHERE name = ?";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$player]);
 $offense = $stmt->fetchAll();

 foreach($offense as $post){
    echo "<p style='color:white; width: 70px; text-align: center;'>".$post->$category."</p>";
 }


