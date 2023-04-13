<?php
// On inclut la classe Pokemon
require_once('Pokemon.php');

// On crée deux instances de Pokemon
$pokemon1 = new Pokemon('Pikachu', 100, 100, 20, 'ELECTRIK');
$pokemon2 = new Pokemon('Bulbizarre', 120, 120, 18, 'PLANTE');

// On affiche les informations des pokémons
echo '<h1>Pokémons</h1>';

echo '<h2>Pokemon 1</h2>';
echo '<p>Nom : ' . $pokemon1->nom . '</p>';
echo '<p>Points de vie : ' . $pokemon1->PV . '/' . $pokemon1->PVmax . '</p>';
echo '<p>Puissance de combat : ' . $pokemon1->PC . '</p>';
echo '<p>Type : ' . $pokemon1->type . '</p>';

echo '<h2>Pokemon 2</h2>';
echo '<p>Nom : ' . $pokemon2->nom . '</p>';
echo '<p>Points de vie : ' . $pokemon2->PV . '/' . $pokemon2->PVmax . '</p>';
echo '<p>Puissance de combat : ' . $pokemon2->PC . '</p>';
echo '<p>Type : ' . $pokemon2->type . '</p>';