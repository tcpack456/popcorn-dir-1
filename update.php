<?php
  if( !empty($_POST['password']) && !empty($_POST['total-sold']) ) {
    if($_POST['password'] == 'INSERT-PASSWORD-HERE') {
      $path = 'update.txt';
      $fh = fopen($path, "w");

      $goal = 20000;
      $sold = (int) $_POST['total-sold'];
      $percent = (float) $sold / $goal;
      $updated  = date('M d, Y');
      $deadline = date('M d, Y', mktime(0,0,0,10,26,2020));

      $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
      $goal_str = str_replace('.00', '', $formatter->formatCurrency(floor($goal), 'USD'));
      $sold_str = str_replace('.00', '', $formatter->formatCurrency(floor($sold), 'USD'));

      $formatter = new NumberFormatter('en_US', NumberFormatter::PERCENT);
      $percent_str = $formatter->format($percent);

      fwrite($fh, $goal_str . "\n");
      fwrite($fh, $sold_str . "\n");
      fwrite($fh, $percent_str . "\n");
      fwrite($fh, $updated  . "\n");
      fwrite($fh, $deadline . "\n");

      fclose($fh);
      echo "Update successful! <a href=\"./\">View Popcorn Portal.</a>";
    }
    else  {
      echo "Invalid password. <a href=\"./update.html\">Return to Update Form.</a>";
    }
  }
  else {
    echo "Password and data field are both required. <a href=\"./update.html\">Return to Update Form.</a>";
  }
?>
