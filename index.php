<?php

$file = fopen("update.txt", "r");

$goal = fgets($file);
$raised = fgets($file);
$progress = fgets($file);
$updated = fgets($file);
$deadline = fgets($file);


//$goal = "$20,000";
//$raised = "$1,050";
//$progress = "5%";
//$updated = "Aug. 12, 2020";
//$deadline = "Oct. 26, 2020";

function list_scouts($arg)
{
  $file = fopen($arg, 'r');
  while(( $data = fgetcsv($file)) !== FALSE)
  {
    $url = "https://www.trails-end.com/store/scout/" . trim($data[1]);
    echo "<li><a href=\"$url\">" . trim($data[0]) . "</a></li>\n";
    //echo "<li><a href=\"$url\" . $data[1] . "\">" . $data[0] . "</a></li> \n";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Cub Scout Pack 361 - Huntsville, Ala. - 2020 Popcorn Fundraiser</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* Move down content because we have a fixed navbar that is 3.5rem tall */
      body {
        padding-top: 3.5rem;
      }

      /* begin fundraising meter */

      /*body {
      	background-color: #142F4C;
      }*/

      #countdown-wrap {
        width: 100%;
        /*height: 300px;*/
        //border: 1px solid black;
        padding: 20px;
        font-family: arial;
        max-width: 650px;
        /*margin: 150px auto 300px;*/
      }

      #goal {
        font-size: 48px;
        text-align: right;
        /*color: #000;*/
        @media only screen and (max-width : 640px) {
          text-align: center;
        }

      }

      #glass {
        width: 100%;
        height: 20px;
        background: #c7c7c7;
        border-radius: 10px;
        float: left;
        overflow: hidden;
      }

      #progress {
        float: left;
        width: <?php echo "$progress"; ?>;
        height: 20px;
        background: #FF5D50;
        z-index: 333;
        //border-radius: 5px;
      }

      .goal-stat {
        width: 25%;
        //height: 30px;
        padding: 10px;
        float: left;
        margin: 0;
        /*color: #FFF;*/

        @media only screen and (max-width : 640px) {
          width: 50%;
          text-align: center;
        }
      }

      .goal-number, .goal-label {
        display: block;
      }

      .goal-number {
        font-weight: bold;
      }
      /* end fundraising meter*/

}
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><img src="../cub_scouts.png" style="height:50px;"> Cub Scout Pack 361</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/popcorn">Popcorn</a>
            </li>
        </ul>
    </div>

      <!--<div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div> -->
    </nav>

<main role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">2020 Popcorn Fundraiser</h1>
      <p>Due to the ongoing and unpredictable nature of Covid-19, we are relying on online sales to meet our fundraising goal for the year and help keep Scouting affordable for all of the families in our pack.</p>
      <p>Please choose a Scout from the list below or click the button below support a randomly-selected Scout from our pack!</p>
      <p><a class="btn btn-primary btn-lg" href="http://hspack361.com/popcorn/random.php" role="button" target="_blank">Support a Random Scout!</a></p>
      <p>Thank you for supporting Pack 361!</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row" style="margin-bottom:50px;">
      <div class="col">&nbsp;</div>
      <div class="col-md-8">
        <!-- begin progress meter -->
        <div id=countdown-wrap>
          <div id="goal">Our Goal: <?php echo "$goal"; ?></div>
          <div id="glass">
            <div id="progress">
            </div>
          </div>
          <div class="goal-stat">
            <span class="goal-number"><?php echo "$progress"; ?></span>
            <span class="goal-label">Funded</span>
          </div>
          <div class="goal-stat">
            <span class="goal-number"><?php echo "$raised"; ?></span>
            <span class="goal-label">Raised</span>
          </div>
          <div class="goal-stat">
            <span class="goal-number">Last Updated</span>
            <span class="goal-label"><?php echo "$updated"; ?></span>
          </div>
          <div class="goal-stat">
            <span class="goal-number">Last Day</span>
            <span class="goal-label"><?php echo "$deadline"; ?></span>
          </div>
        </div>
        <!-- end progress meter -->
      </div>
      <div class="col">&nbsp;</div>
    </div>



    <div class="row" style="margin-bottom:50px;">

      <div class="col-6 col-sm-4 col-md-4">
        <h2>Lion</h2>
        <p><img src="./img/lion_150px.png" style="width:100px;"></p>
	      <p><?php list_scouts('./data/lion.txt'); ?></p>
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <h2>Tiger</h2>
        <p><img src="./img/tiger_150px.jpg" style="width:100px;"></p>
	      <p><?php list_scouts('./data/tiger.txt'); ?></p>
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <h2>Wolf</h2>
        <p><img src="./img/wolf_150px.jpg" style="width:100px;"></p>
	      <p><?php list_scouts('./data/wolf.txt'); ?></p>
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <h2>Bear</h2>
        <p><img src="./img/bear_150px.jpg" style="width:100px;"></p>
  	    <p><?php list_scouts('./data/bear.txt'); ?></p>
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <h2>Webelos</h2>
        <p><img src="./img/webelos_150px.png" style="height:100px";></p>
	      <p><?php list_scouts('./data/webelos.txt'); ?></p>
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <h2>Arrow of Light</h2>
        <p><img src="./img/arrow-of-light_150px.png" style="height:100px";></p>
      	<p><?php list_scouts('./data/arrow-of-light.txt'); ?></p>
      </div>
    </div>
    <div class="row" style="margin-bottom:50px;">
      <div class="col-2 col-lg-4">
        &nbsp;
      </div>
      <div class="col-8 col-lg-4">
        <h2>QR Code Sharing</h2>
        <p>Use this QR code to share this page!</p>
        <p><img src="./img/qr-popcorn.png" style="width:75%";></p>
      </div>
      <div class="col-2 col-lg-4">
        &nbsp;
      </div>
    </div>
    <hr>
  </div> <!-- /container -->
</main>
<footer class="container">
  <p><a href="https://github.com/dimwell/popcorn-dir" target="_blank">Built using GitHub.</a>
  <br>Cub Scout Pack 361 (<a href="mailto:hspack361@gmail.com">hspack361@gmail.com</a>) - Huntsville, Ala.
  <br>Part of the <a href="http://1bsa.org" target="_blank">Greater Alabama Council</a>, <a href="http://scouting.org/" target="_blank">Boy Scouts of America</a>
  <br>Chartered by <a href="https://holyspirithsv.com/">Holy Spirit Catholic Church</a> since 1967.</p>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
