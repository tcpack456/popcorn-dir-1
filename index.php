<?php

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
    <title>Cub Scout Pack 123 - Anytown, USA - 2020 Popcorn Fundraiser</title>

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
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><img src="../cub_scouts.png" style="height:50px;"> Cub Scout Pack 123</a>
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
      <p><a class="btn btn-primary btn-lg" href="./random.php" role="button" target="_blank">Support a Random Scout!</a></p>
      <p>Thank you for supporting our pack!</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">

      <div class="col-md-4">
        <h2>Lion</h2>
        <p><img src="./img/lion_150px.png" style="width:100px";></p>
	    <p><?php list_scouts('./data/lion.txt'); ?></p>
      </div>

      <div class="col-md-4">
        <h2>Tiger</h2>
        <p><img src="./img/tiger_150px.jpg" style="width:100px";></p>
	    <p><?php list_scouts('./data/tiger.txt'); ?></p>
      </div>

      <div class="col-md-4">
        <h2>Wolf</h2>
        <p><img src="./img/wolf_150px.jpg" style="width:100px";></p>
	    <p><?php list_scouts('./data/wolf.txt'); ?></p>
      </div>

    </div>

    <div class="row">

      <div class="col-md-4">
        <h2>Bear</h2>
        <p><img src="./img/bear_150px.jpg" style="width:100px";></p>
	    <p><?php list_scouts('./data/bear.txt'); ?></p>
      </div>

      <div class="col-md-4">
        <h2>Webelos</h2>
        <p><img src="./img/webelos_150px.png" style=style="height:100px";></p>
	    <p><?php list_scouts('./data/webelos.txt'); ?></p>
      </div>

      <div class="col-md-4">
        <h2>Arrow of Light</h2>
        <p><img src="./img/arrow-of-light_150px.png" style=style="width:100px";></p>
    	<p><?php list_scouts('./data/arrow-of-light.txt'); ?></p>
      </div>
    </div>

<!-- Uncomment here to share your QR code. Be sure to replace the QR code image in ./img directory.
    <div class="row">
      <div class="col-md-4">
        &nbsp;
      </div>

      <div class="col-md-4">
        <h2>QR Code Sharing</h2>
        <p>Use this QR code to share this page!</p>
        <p><img src="./img/qr-popcorn.png" style="width:75%";></p>
      </div>

      <div class="col-md-4">
        &nbsp;
      </div>
    </div>
-->
    <hr>

  </div> <!-- /container -->
  
  
</main>

<footer class="container">
  <p><a href="https://github.com/dimwell/popcorn-dir" target="_blank">Built using GitHub.</a>
  <p>&copy; 2020, Cub Scout Pack 123 - Anytown, USA
  <br>Part of the <a href="http://scouting.org/" target="_blank">Boy Scouts of America</a>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
