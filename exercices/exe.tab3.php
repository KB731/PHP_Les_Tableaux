<?php

$tableau = array();
$tableau1 = array();
$tableau2 = array();
$i = 0;

while ($i < 10) {
    $tableau[] = rand(0, 100);
    $i++;
}

foreach($tableau as $i) {
    if($i < 50) {
        $tableau1[] = $i;
    } else {
        $tableau2[] = $i;
    }
}

echo 'Tableau 1 : ';
foreach($tableau1 as $i1) {
    echo $i1 . ' ';
}

echo "<br />";

echo 'Tableau 2 : ';
foreach($tableau2 as $i2) {
    echo $i2 . ' ';
}



