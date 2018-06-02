<!DOCTYPE html>
<html>
<head>
 
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <style>
    
      body {
        background-color: dimgray;
      }
      
      th {
          font-family: Lucida Sans Unicode, sans-serif;
          color:#adf6dc;
          font-size: 22px;
      }
    
  </style>

</head>
    
<body>    
    <div class='topnav'>
    <a href='index.php'>Home</a>  
    <a class='active' href='regs.php'>Regs Top 100</a>
    <div class='dropdown'>
      <button class='dropbtn'>Ultimate League
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="kiv.php">Kiv</a>
        <a href="#">Drini</a>
        <a href="#">Trueboy</a>
        <a href="#">Blocky</a>
        <a href="#">Problem</a>  
        <a href="#">Skimbo</a>  
        <a href="#">Dubby</a>  
        <a href="#">SteveyJ</a>  
        <a href="#">Joke</a>  
        <a href="#">Gos</a>  
        <a href="#">Musafa Jones</a>  
        <a href="#">Joel</a>  
        <a href="#">Prodigy</a>  
        <a href="#">Tweez</a>  
        <a href="#">SpotMePlzzz</a>  
        <a href="#">Kaus</a>  
      </div>
    </div>  
  </div>
  <div class="legend">
    <h1>Xbox One Online H2H Ranked Leaderboard</h1>  
  </div>
<div class='regs-container'>     
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

      $sql = "SELECT * FROM regstop100";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $offense = $stmt->fetchAll();

      echo "<div class='tablewrap'>";
      echo "<div class='goodleg'>";
      echo "<table id='regs100'>";
      echo "<tr>";
        echo "<th>Rank</th>";
        echo "<th>Gamertag</th>";
        echo "<th>Wins</th>";
        echo "<th>Losses</th>";
        echo "<th>Games Played</th>";
        echo "<th>Win Percentage</th>";
        echo "<th>Most Used Team</th>";
      echo "</tr>";

      foreach($offense as $post){
        echo "<tr>";
        echo "<td style='color:white; text-align: center;'>".$post->rank."</td>";
        echo "<td style='color:white; text-align: center;'>".$post->gamertag."</td>";
        echo "<td style='color:white; text-align: center;'>".$post->wins."</td>";
        echo "<td style='color:white; text-align: center;'>".$post->losses."</td>";
        echo "<td style='color:white; text-align: center;'>".$post->games_played."</td>";
        echo "<td style='color:white; text-align: center;'>".$post->win_percentage."</td>";
        echo "<td style='color:white; text-align: center;'>".$post->top_team_used."</td>";
        echo "</tr>";
      }

      echo "</table>";
      echo "</div>";
      echo "</div>";
    ?>    
</div>

<footer>
    <div class='foot-content-container'>
        <p>Created by Holden Pitre</p>
        <div class='icon-container'>
            <a href="https://www.facebook.com/holden.pitre" target='_blank'><i class='fa fa-facebook-official' aria-hidden="true" id='social'></i></a>
            <a href="https://twitter.com/holdensama" target='_blank'><i class="fa fa-twitter" aria-hidden="true" id='social'></i></a>
            <a href="https://www.youtube.com/channel/UCGbvso9gdVOraGVmi7Vqm2w" target='_blank'><i class="fa fa-youtube-play" aria-hidden="true" id='social'></i></a>
            <a href="https://www.linkedin.com/in/holden-pitre-a01876163/" target='_blank'><i class="fa fa-linkedin-square" aria-hidden="true" id='social'></i></a>
        </div>
    </div>
  </footer>  
    
</body>

</html>