<?php
$listedematières = array("Mathématiques", "Anglais", "Bloc1", "Bloc3", "Droit", "ATT.PROF");
$matières = array('Mathématique' =>10,'Anglais' =>10,'Bloc1' =>10,'Bloc3' =>10,'Droit' =>10,'ATT.PROF' =>10,);
$matières['Détente'] =  19.5 ;


foreach ( $listedematières as $matières) {

    echo "voici votre matière $matières ! <br>" ;

}

?>