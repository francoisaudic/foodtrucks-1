<?php
include_once '../private/app/init-ajax.php';

// On accepte Les requêtes POST uniquement
if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

    var_dump( $_POST );

}
// Si les requêtes ne sont pas en POST, on refuse l'accés.
else {
    echo "Vous n'avez pas l'autorisation d'afficher ce fichier.";
}

