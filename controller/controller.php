<?php
// Inclure le modèle
require_once('pokemon.php');

// Vérifier si un nom a été soumis
if (isset($_POST['nom'])) {
    // Récupérer le nom soumis
    $nom = $_POST['nom'];
    
    // Appeler la fonction qui retourne le message de salutation
    $message = get_message($nom);
    
    // Inclure la vue
    require_once('view.php');
} else {
    // Afficher le formulaire de saisie du nom
    echo '<form method="post" action=""><label for="nom">Entrez votre nom : </label><input type="text" name="nom" id="nom"><input type="submit" value="Envoyer"></form>';
}