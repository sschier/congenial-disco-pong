<?php require('partials/head.php') ?>

<body>

    <div class="jumbotron">
        <header >
            <h1 class="display-4"> Your Brackets</h1>
            <p class="lead"> Let's Play! </p>
            <div id="match">

				<a class="btn btn-primary btn-lg" href="play">START MATCH</a>

			</div>

        </header>
    </div>

    <div class="container clearfix">
        <div class="col br8" id="br8-1">
            <canvas id="canvas1" width="250" height="600" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML5 canvas tag.</canvas>

            <script>var teamsBR1 = JSON.parse('<?= json_encode($teams); ?>');  </script>
            <script src='js/8bracket1.js'></script>
        </div>
        <div class="col br8" id="br8-2">
            <canvas id="canvas2" width="250" height="600" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML5 canvas tag.</canvas>

            <script>var teamsBR2 = JSON.parse('<?= json_encode($teams); ?>');  </script>
            <script src='js/8bracket2.js'></script>
        </div>        
        <div class="col br8" id="br8-3">
            <canvas id="canvas3" width="250" height="600" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML5 canvas tag.</canvas>

            <script>var teamsBR3 = JSON.parse('<?= json_encode($teams); ?>');  </script>
            <script src='js/8bracket3.js'></script>
        </div>  
                <div class="col br8" id="br8-4">
            <canvas id="canvas4" width="250" height="600" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML5 canvas tag.</canvas>

            <script>var teamsBR4 = JSON.parse('<?= json_encode($teams); ?>');  </script>
            <script src='js/8bracket4.js'></script>
        </div>       
   
    </div>



<?php require('partials/footer.php') ?>