<?php
// GET les données sont transmises dans l'URL 
    // POST  les données sont transmises le HEADER 

    $prénom = $_POST[ "prénom" ]; 
    $age = (int)$_POST[ "age" ];
    $nom = $_POST[ "nom" ]; 
    $ville = $_POST[ "ville" ];  


    echo "bonjour $prénom $nom<br>";

    if( $ville == "MAUBEUGE")
    echo "Wess la zone!<br>";
    else
    echo "bienvenue dans la zone refré!<br>";

    if( $age >= 18 )
        echo "tu es majeur<br>";
    else
        echo "tu es mineur<br>";
?>