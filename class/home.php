<?php

include('Classes/vehiculeClass.php');
include('Classes/bateauClass.php');
include('Classes/voitureClass.php');
include('Classes/clientClass.php');

$voiture1 = new Voiture('307', 'Peugeot', 'grise', 2004, 100000);

//Nombre de véhicule existant
//echo Vehicule::getNombre(). '<br>';

//Nombre de voiture existantes
//echo $voiture1->getNombre();

$voiture2 = new Voiture('405', 'Peugeot', 'rouge', 1988, 150000);
$voiture2 = new Voiture('Logan', 'Renault', 'bleue', 2000, 145080);

$bateau1 = new Bateau('zodiac001', 'Zodiac', 'gris', 2004, 10, 5, 120000);

// if(is_object($bateau1)){
// 	echo 'oui c\'est bien un objet';
// } else {
// 	echo 'non ce n\'est pas un objet';
// }

// if($bateau1 instanceof Vehicule){
// 	echo 'oui ce bateau est un vehicule';
// } else {
// 	echo 'non ce bateau n\'est pas un vehicule';
// }

$bateau2 = new Bateau('zodiac002', 'Zodiac', 'bleu', 2010, 20, 5, 120500);
$bateau3 = new Bateau('zodiac003', 'Zodiac', 'rouge', 2004, 10, 6, 120000);
$bateau4 = new Bateau('zodiac004', 'Zodiac', 'gris', 2000, 30, 5, 140400);
$bateau5 = new Bateau('zodiac005', 'Zodiac', 'vert', 2006, 10, 7, 120000);
$bateau6 = new Bateau('zodiac006', 'Zodiac', 'gris', 2003, 40, 5, 80000);

$client1 = new Client('Herbé', 'Matthieu', '02/02/1987', '24 rue de la barillerie', '72000', 'Le Mans', 'France');

$tabVoitures = array($voiture1);
$tabBateaux = array($bateau1, $bateau5);

//J'affecte le taleau de bateaux à mon client
$client1->setBateaux($tabBateaux);
$client1->setVoitures($tabVoitures);

$tabBateauxClient1 = $client1->getBateaux();

$nomBateau = $client1->getBateaux()[1]->getNom();

$voitureClient1 = $client1->getVoitures()[0];

//echo 'Nb Km Parcourus à l\origine : ' . $voitureClient1->getNbKmParcourus() . '<br>';

$voitureClient1->avancer(150);

//echo 'Nb Km Parcourus après avoir avancé' . $voitureClient1->getNbKmParcourus();


$client2 = new Client('Deleon', 'Robert', '02/02/1957', '34 rue de la république', '72000', 'Le Mans', 'France');

$client2 = $client1;

$client2->setNom('Durand');

//echo "j'ai changé le nom de mon client 2 : " . $client2->getNom() . '<br>';
//echo "c'est bizarre le nom de mon client1 : " . $client1->getNom() . "  a maintenant aussi changé !";

//Utiliser la fonction clone pour dupliquer un objet et donc avoir deux objets indépendants l'un de l'autre.
$client3 =  clone($client2) ;

$client3->setNom('Dubois');

//echo 'nom client3 : ' . $client3->getNom() . ' /// nom client2 : ' . $client2->getNom();



echo 'nom : ' . $client1->getNom() . '<br/>';

$tab = $client1->getBateaux();
echo 'nom du client du bateau zodiac005 : ' . $tab[1]->getClient()->getNom();















