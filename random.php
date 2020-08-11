<?php
    $files = array();

    $files[] = fopen('./data/lion.txt', 'r');
    $files[] = fopen('./data/tiger.txt', 'r');
    $files[] = fopen('./data/wolf.txt', 'r');
    $files[] = fopen('./data/bear.txt', 'r');
    $files[] = fopen('./data/webelos.txt', 'r');
    $files[] = fopen('./data/arrow-of-light.txt', 'r');

    $scouts = array();

    for($i=0 ; $i<count($files); $i++)
    {
        $file = $files[$i];
        while(( $data = fgetcsv($file)) !== FALSE)
        {
            //$url = "https://www.trails-end.com/store/scout/" . trim($data[1]);
            //echo "<li><a href=\"$url\">" . trim($data[0]) . "</a></li>\n";
            $scouts[] = $data;
        }
    }

    $n = rand(0, count($scouts));
    
    $scout = $scouts[$n];
    $name = trim($scout[0]);
    $code = trim($scout[1]);

    $url = "https://www.trails-end.com/store/scout/" . $code;
    header('Location: ' . $url);
?>
