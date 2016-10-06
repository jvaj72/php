<?php

class Bateau extends Vehicule {

	private $longueur;
	private $largeur;
	public static $nbBateaux = 0;
	private $nbNoeudsParcourus;

	public function __construct($nom, $modele, $couleur, $annee, $longueur, $largeur, $nbNoeudsParcourus){
		parent::__construct($nom, $modele, $couleur, $annee);

		$this->longueur = $longueur;
		$this->largeur = $largeur;
		$this->nbNoeudsParcourus = $nbNoeudsParcourus;
		self::$nbBateaux++;
	}

	public function getLongueur(){
		return $this->longueur;
	}

	public function setLongueur($longueur){
		$this->longueur = $longueur;
	}

	public function getLargeur(){
		return $this->largeur;
	}

	public function setLargeur($largeur){
		$this->longueur = $largeur;
	}

	public static function getNbBateaux(){
		return self::$nbBateaux;
	}

	public static function setNbBateaux($nbBateaux){
		self::$nbBateaux = $nbBateaux;
	}

	public function getNbNoeudsParcourus(){
		return $this->nbNoeudsParcourus;
	}

	public function setNbNoeudsParcourus($nombreNoeuds){
		$this->nbNoeudsParcourus = $nbNoeudsParcourus;
	}

	public function avancer($nbNoeudsParcourus){
		$this->nbNoeudsParcourus += $nbNoeudsParcourus;
	}

}