<?php
$matieres = array("Mathématiques", "Anglais", "Bloc1", "Bloc3", "Droit", "ATT.PROF");

print_r($matieres);

echo "<br>";

echo "Premier élément : " . $matieres[0] . "<br>";
echo "Troisième élément : " . $matieres[2] . "<br>";

$matieres[] = "Relaxation";

print_r($matieres);
?>
