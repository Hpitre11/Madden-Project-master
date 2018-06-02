<!DOCTYPE html>



<html>
<head>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
<body>
    
    
  <div class='topnav'>
    <a class='active' href='index.php'>Home</a>  
    <a href='regs.php'>Regs Top 100</a>
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

  <div class='front-image'>
    <img src="images/Kamara%20Banner.png" class="crossfire">
    <div class="image-text">
      <h1>DATA | ANALYSIS | STATS</h1>
    </div>  
  </div>    
    
<!--    
  <form action="main.php" method="POST" id="individual">
    <label></label>    
    <select name="player" id="dropdown">
      <option value="kiv">Kiv</option>
      <option value="drini">Drini</option>
      <option value="trueboy">Trueboy</option>
      <option value="blocky">Blocky</option>
      <option value="problem">Problem</option>
      <option value="skimbo">Skimbo</option>
      <option value="dubby">Dubby</option>
      <option value="steveyj">SteveyJ</option>
      <option value="joke">Joke</option>
      <option value="gos">Gos</option>
      <option value="musafa jones">Musafa Jones</option>
      <option value="joel">Joel</option>
      <option value="prodigy">Prodigy</option>
      <option value="tweez">Tweez</option>
      <option value="spotmeplzzz">SpotMePlzzz</option>
      <option value="kaus">Kaus</option>
    </select>
      
    <label></label>    
    <select name="category" id="dropdown">
      <option value="passing_yards">Passing Yards</option>
      <option value="rushing_yards">Rushing Yards</option>
      <option value="main_formation">Main Formation</option>
      <option value="main_play">Most Called Play</option>
    </select>
      
    <label></label>  
    <button type="submit" id="submit">Get Results</button>
      
  </form>   
  
  <form action="stats.php" method="POST">
      
    <label></label>    
    <select name="category" id="dropdown">
      <option value="passing_yards">Passing Yards</option>
      <option value="rushing_yards">Rushing Yards</option>
      <option value="main_formation">Main Formation</option>
      <option value="main_play">Most Called Play</option>
    </select>
      
    <label></label>  
    <button type="submit" id="submit">Get Results</button>
      
  </form>
-->
  
  <div class='first-block'>
      <p id='welcome'>WELCOME TO THE SITE</p>
      <p id='intro'>Your premiere source for Competitive Madden NFL stats and data.</p>
  </div>    
    
    
  <div class='first-content-wrap'>
    <div id='about'>
        <p id='about-header'>About the Site</p>
        <div id='underline'></div>
        <p id='summary'>Here at "insert site name here" we are passionate about the eSport of Madden. We aim to provide the community with top notch strategical and data analysis of 
        the competitive scene. Here you can find scouting reports of top players along with online leaderboard information.</p>
    </div>
    <div id='video-one'>
        <video width="740" height="360" controls>
            <source src='videos/Farls%20Kiv%20Video.mp4' type='video/mp4'>
        </video>
    </div> 
  </div> 
    
  <div class='second-block'>
    <p id='callout'>ULTIMATE LEAGUE STATS</p>    
  </div>

  <div class='second-content-wrap'>
    <div id='searchable'>
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

          // Positional Parameters

         $sql = "SELECT * FROM offense ORDER BY passing_yards desc";
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $offense = $stmt->fetchAll();

         echo "<table id='boxes'>";
         echo "<tr>";
            echo "<th>Player</th>";
            echo "<th>Passing Yards</th>";
         echo "</tr>";
         foreach($offense as $post){
            echo "<tr>";
            echo "<td style='color:#333; text-align: center;'>".$post->name."</td>";
            echo "<td style='color:#333; text-align: center;'>".$post->passing_yards."</td>";
            echo "</tr>";
         }

         echo "</table>";

    ?>
      
    </div>
      
    <div id='searchable'>
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

          // Positional Parameters

         $sql = "SELECT * FROM offense ORDER BY rushing_yards desc";
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $offense = $stmt->fetchAll();

         echo "<table id='boxes'>";
         echo "<tr>";
            echo "<th>Player</th>";
            echo "<th>Rushing Yards</th>";
         echo "</tr>";
         foreach($offense as $post){
            echo "<tr>";
            echo "<td style='color:#333; text-align: center;'>".$post->name."</td>";
            echo "<td style='color:#333; text-align: center;'>".$post->rushing_yards."</td>";
            echo "</tr>";
         }

         echo "</table>";

    ?>
      
    </div>
      
    <div id='searchable'>
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

          // Positional Parameters

         $sql = "SELECT * FROM offense ORDER BY main_formation asc";
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $offense = $stmt->fetchAll();

         echo "<table id='boxes' style='width: 30vh;'>";
         echo "<tr>";
            echo "<th>Player</th>";
            echo "<th>Main Formation</th>";
         echo "</tr>";
         foreach($offense as $post){
            echo "<tr>";
            echo "<td style='color:#333; text-align: center;'>".$post->name."</td>";
            echo "<td style='color:#333; text-align: center;'>".$post->main_formation."</td>";
            echo "</tr>";
         }

         echo "</table>";

    ?>
      
    </div>
      
    
  </div>
    
  <div class='third-block'>
    <p id='callout'>TOURNAMENT PLACINGS</p>    
  </div>
    
  <div class='third-content-wrap'>
    <div id='placings'>
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

          // Positional Parameters

         $sql = "SELECT * FROM madden_challenge";
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $offense = $stmt->fetchAll();

         echo "<table id='boxes' style=''>";
         echo "<caption style='font-size: 2.5vh; padding-bottom: .5vh;'>Madden Challenge</caption>";
         echo "<tr>";
            echo "<th>Player</th>";
            echo "<th>Placing</th>";
         echo "</tr>";
         foreach($offense as $post){
            echo "<tr>";
            echo "<td style='color:#333; text-align: center;'>".$post->name."</td>";
            echo "<td style='color:#333; text-align: center;'>".$post->placing."</td>";
            echo "</tr>";
         }

         echo "</table>";

    ?> 
      </div>
      
      <div id='placings'>
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

          // Positional Parameters

         $sql = "SELECT * FROM madden_classic";
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $offense = $stmt->fetchAll();

         echo "<table id='boxes' style=''>";
         echo "<tr>";
            echo "<th>Player</th>";
            echo "<th>Placing</th>";
         echo "</tr>";
         foreach($offense as $post){
            echo "<tr>";
            echo "<td style='color:#333; text-align: center;'>".$post->name."</td>";
            echo "<td style='color:#333; text-align: center;'>".$post->placing."</td>";
            echo "</tr>";
         }

         echo "</table>";

    ?> 
      </div>
      
      <div id='placings'>
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

          // Positional Parameters

         $sql = "SELECT * FROM ultimate_league";
         $stmt = $pdo->prepare($sql);
         $stmt->execute();
         $offense = $stmt->fetchAll();

         echo "<table id='boxes' style=''>";
         echo "<tr>";
            echo "<th>Player</th>";
            echo "<th>Placing</th>";
         echo "</tr>";
         foreach($offense as $post){
            echo "<tr>";
            echo "<td style='color:#333; text-align: center;'>".$post->name."</td>";
            echo "<td style='color:#333; text-align: center;'>".$post->placing."</td>";
            echo "</tr>";
         }

         echo "</table>";

    ?> 
      </div> 
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