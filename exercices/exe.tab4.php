<?php

$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
    );

    echo '<h1>Les pays suivants ont une population supérieure à 20 millions dhabitants.</h1><ul>';
    
    foreach($pays_population as $pays => $population) {
    if($population >= 20000000) {
    echo '<li>'.$pays.'</li>';
    }
    }
    echo '</ul>';