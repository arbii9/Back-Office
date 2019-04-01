<?php
class ProduitEnSolde
{
	private $Reference;
	public $Nom;
	private $Prix;
	private $Description;
	private $Photo;
	private $Type;
	private $Remise;
	private $Nouvprix;

	 function __construct($reference,$nom,$prix,$description,$photo,$type,$remise)
	 {
	 	$this->Reference = $reference ;
	 	$this->Nom = $nom;
	 	$this->Prix=$prix;
	 	$this->Description=$description;
	 	$this->Photo=$photo; 
	 	$this->Type=$type;
	 	$this->Remise=$remise;
	 	$this->Nouvprix= ($prix)-($prix*$remise/100);

	 }

	  function getReference()
	 {
	 	return $this->Reference;
	 }

	 function getNom()
	 {
	 	return $this->Nom;
	 }

	 function getPrix()
	 {
	 	return $this->Prix;
	 }

	 function getDescription()
	 {
	 	return $this->Description;
	 }

	 function getPhoto()
	 {
	 	return $this->Photo;
	 }

	 function getType()
	 {
	 	return $this->Type;
	 }

	 function getRemise()
	 {
	 	return $this->Remise;
	 }
	 function getNouvprix()
	 {
	 	return $this->Nouvprix;
	 }

	 function setReference($reference)
	 {
	 	$this->Reference = $reference;
	 }

	 function setNom($nom)
	 {
	 	$this->Nom = $nom;
	 }

	 function setPrix($prix)
	 {
	 	$this->Prix = $prix;
	 }

	 function setDescription($description)
	 {
	 	$this->Description = $description;
	 }

	 function setPhoto($photo)
	 {
	 	$this->Photo = $photo;
	 }

	 function setType($type)
	 {
	 	$this->Type = $type;
	 }

	 function setRemise($remise)
	 {
	 	$this->Remise = $remise;
	 }
}

?>