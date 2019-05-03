<?php require('partials/head.php') ?>

<body>

	    <header >
      <h1> Your Tournament Overview</h1>
      <p> Let's Play  </p>
    </header>
    <div id="play">
    	<form action="play">
		    <input type="submit" value="Play" />
  		</form>
    </div>



    <ul>
    
      <?php foreach ($players as $player) : ?>
        <li>
          <?= $player->player_name; ?>        
        </li>

      <?php endforeach; ?>

    </ul>

<?php require('partials/footer.php') ?>