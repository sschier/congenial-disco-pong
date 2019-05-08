<?php require('partials/head.php') ?>


      <div class="container clearfix">

        <div class="col primary" id="add-team">
          <h2> Enter the teams  </h2>
          <form method="POST" action="team">
            <input name="name"></input>
            <button type=submit>Submit</button>
          </form>
        </div>

          
        <div class="col secondary" id="teams">
          <h2> Your Teams</h2>
          <ul>
              <?php foreach ($teams as $team) : ?>
                <li>
                  <?= $team->name; ?>        
                </li>
              <?php endforeach; ?>
          </ul>
          <form method="POST" action="clear">
            <button type=submit>Clear</button>
          </form>
        </div>

        <div class="col tertiary">
          
          <a class="btn btn-primary btn-lg" href="bracket">VIEW BRACKET</a>
          <a class="btn btn-danger btn-lg" href="play">Try to Play</a>

      </div>

    </div>


  


  

<?php require('partials/footer.php') ?>