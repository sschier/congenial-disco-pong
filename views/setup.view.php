<?php require('partials/head.php') ?>

<body>

	    <header >
      <h1> Setup Your Tournament</h1>

  <ul>
    
      <?php foreach ($players as $player) : ?>
        <li>
          <?= $player->player_name; ?>        
        </li>

      <?php endforeach; ?>

    </ul>



    </header>
    <p> Enter the teams  </p>
    <div id="play">
    	<form method="POST" action="team">
        <input name="player_name"></input>
        <button type=submit>Submit</button>
      </form>
    </div>


  


  

<?php require('partials/footer.php') ?>