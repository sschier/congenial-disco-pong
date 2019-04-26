<!DOCTYPE html>


<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Ping Pong Mania</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<!-- Normalize Style -->
  <link rel="stylesheet" href="../css/normalize.css">
  

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">

	<!-- My Stylesheets -->
  <link rel="stylesheet" href="../css/styles.css">

</head>

<body>

	<header >
	  <h1> Welcome to Ping Pong Mania</h1>
      <p> Ready to start a tournament? </p>
    </header>
    <div id="play">
      <form action="views/play.view.php">
    	<!-- <form action="views/play.view.php"> -->
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
</body>
</html>