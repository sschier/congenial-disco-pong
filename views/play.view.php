<?php require('partials/head.php') ?>

<body>

    <div class="jumbotron">
        <header >
            <h1 class="display-4"> Your Brackets</h1>
            <p class="lead"> Let's Play! </p>
            <div id="bracket">

                <a class="btn btn-primary btn-lg" href="play">Next Round</a>

            </div>

        </header>
    </div>

    <h2> Your Matches</h2>
          <ul>
              <?php foreach ($tournament->bracket->round as $round) : ?>
                <li>
                  <?= $round->matchName; ?>        
                </li>
              <?php endforeach; ?>
          </ul>

<!-- make a list of matches with buttons to start match -->
<!-- can also make a button to see the bracket, which will be a non-interactive canvas -->

<?php require('partials/footer.php') ?>