<?php
// Vérification que la méthode POST a bien été utilisée
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération du choix de BTS
    $bts = $_POST['bts'];

    // Récupération du nom de l'étudiant

    $nomEtudiant = $_POST['nom'];
    $prenomEtudiant = $_POST['prenomEtud'];
    $langue = $_POST["langues"];
 
    

  

    echo " L'étudiant $prenomEtudiant  $nomEtudiant a choisi le BTS $bts <br> " ;
    echo " L'étudiant  a choisi(es) les langues suivantes : <br>" ;
    if (isset($_POST['langues']))
    {
    foreach ($langue as $language ) {

        echo "  <li> $language <br> " ;

}
}
    else {

        echo " aucune langue sélectionné <br>" ;
    }

if ($bts == "SIO" ) {

    echo " <a href=https://www.enc-bessieres.org/formations/bts-services-informatiques-aux-organisations/>en savoir plus</a>" ;
}

if ($bts == "CG" ) {

    echo "  <a href=https://www.enc-bessieres.org/formations/bts-assurance/>en savoir plus</a>" ;
}

if ($bts == "MCO" ) {

    echo " <a href=https://www.enc-bessieres.org/formations/bts-commerce-international/>en savoir plus</a>" ;
}

}

