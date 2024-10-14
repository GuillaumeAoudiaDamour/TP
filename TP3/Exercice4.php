<?php
$pays = array("France", "Espagne");
$capitale = array('paris','Madrid');
$pays_capitales = array("France" => "Paris","Espagne" => "Madrid");

foreach ($pays_capitales as $pays => $capitale) {
    echo "Quelle merveilleuse capitale que $capitale pour ce beau pays $pays !<br>";
}


?>