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
$category = $_POST['category'];

// Positional Parameters

 $sql = "SELECT * FROM offense ORDER BY `{$category}` desc";
 $stmt = $pdo->prepare($sql);
 $stmt->execute();
 $offense = $stmt->fetchAll();

 echo "<table id='boxes'    >";
 
 foreach($offense as $post){
    //echo $post->name . " " . $post->$category . "<br>";
    echo "<tr>";
    echo "<td style='color:white; width: 120px; text-align: center;'>".$post->name."</td>";
    echo "<td style='color:white; width: 70px; text-align: center;'>".$post->$category."</td>";
    echo "</tr>";
 }

 echo "</table>";
