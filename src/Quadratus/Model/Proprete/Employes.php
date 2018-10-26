<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Employes {

	/**
	 * A transferer en p.
	 *
	 * @var boolean
	 */
	private $aTransfererEnP;

	/**
	 * Administratif.
	 *
	 * @var boolean
	 */
	private $administratif;

	/**
	 * B t q.
	 *
	 * @var string
	 */
	private $bTQ;

	/**
	 * Bureau distributeur.
	 *
	 * @var string
	 */
	private $bureauDistributeur;

	/**
	 * Chef equipe.
	 *
	 * @var boolean
	 */
	private $chefEquipe;

	/**
	 * Cledeux.
	 *
	 * @var string
	 */
	private $cledeux;

	/**
	 * Code officiel commune.
	 *
	 * @var string
	 */
	private $codeOfficielCommune;

	/**
	 * Code pays naissance.
	 *
	 * @var string
	 */
	private $codePaysNaissance;

	/**
	 * Code postal.
	 *
	 * @var string
	 */
	private $codePostal;

	/**
	 * Commercial.
	 *
	 * @var boolean
	 */
	private $commercial;

	/**
	 * Commune naissance.
	 *
	 * @var string
	 */
	private $communeNaissance;

	/**
	 * Complement.
	 *
	 * @var string
	 */
	private $complement;

	/**
	 * Controleur.
	 *
	 * @var boolean
	 */
	private $controleur;

	/**
	 * Date ancien.
	 *
	 * @var DateTime
	 */
	private $dateAncien;

	/**
	 * Date entree1.
	 *
	 * @var DateTime
	 */
	private $dateEntree1;

	/**
	 * Date entree2.
	 *
	 * @var DateTime
	 */
	private $dateEntree2;

	/**
	 * Date naissance.
	 *
	 * @var DateTime
	 */
	private $dateNaissance;

	/**
	 * Date sortie1.
	 *
	 * @var DateTime
	 */
	private $dateSortie1;

	/**
	 * Date sortie2.
	 *
	 * @var DateTime
	 */
	private $dateSortie2;

	/**
	 * Dept naissance.
	 *
	 * @var string
	 */
	private $deptNaissance;

	/**
	 * Dern num prime.
	 *
	 * @var int
	 */
	private $dernNumPrime;

	/**
	 * Dim type2.
	 *
	 * @var boolean
	 */
	private $dimType2;

	/**
	 * Fictif.
	 *
	 * @var boolean
	 */
	private $fictif;

	/**
	 * Gestion maj dim.
	 *
	 * @var string
	 */
	private $gestionMajDim;

	/**
	 * Gestion maj j f.
	 *
	 * @var string
	 */
	private $gestionMajJF;

	/**
	 * Gestion maj nuit.
	 *
	 * @var string
	 */
	private $gestionMajNuit;

	/**
	 * H nuit type2.
	 *
	 * @var boolean
	 */
	private $hNuitType2;

	/**
	 * Handicape.
	 *
	 * @var boolean
	 */
	private $handicape;

	/**
	 * Hotellerie.
	 *
	 * @var boolean
	 */
	private $hotellerie;

	/**
	 * Inspecteur.
	 *
	 * @var boolean
	 */
	private $inspecteur;

	/**
	 * Livreur.
	 *
	 * @var boolean
	 */
	private $livreur;

	/**
	 * Mensualisation tache.
	 *
	 * @var string
	 */
	private $mensualisationTache;

	/**
	 * Nationalite.
	 *
	 * @var string
	 */
	private $nationalite;

	/**
	 * Nb heure mois.
	 *
	 * @var float
	 */
	private $nbHeureMois;

	/**
	 * Nom marital.
	 *
	 * @var string
	 */
	private $nomMarital;

	/**
	 * Nom naissance.
	 *
	 * @var string
	 */
	private $nomNaissance;

	/**
	 * Nom ville.
	 *
	 * @var string
	 */
	private $nomVille;

	/**
	 * Nom voie.
	 *
	 * @var string
	 */
	private $nomVoie;

	/**
	 * Nombre enfants.
	 *
	 * @var string
	 */
	private $nombreEnfants;

	/**
	 * Num voie.
	 *
	 * @var string
	 */
	private $numVoie;

	/**
	 * Numero.
	 *
	 * @var string
	 */
	private $numero;

	/**
	 * Numero insee.
	 *
	 * @var string
	 */
	private $numeroInsee;

	/**
	 * Numero p j pass.
	 *
	 * @var int
	 */
	private $numeroPJPass;

	/**
	 * Periode pointage cloturee.
	 *
	 * @var DateTime
	 */
	private $periodePointageCloturee;

	/**
	 * Polyvalent.
	 *
	 * @var boolean
	 */
	private $polyvalent;

	/**
	 * Prenom.
	 *
	 * @var string
	 */
	private $prenom;

	/**
	 * Prime.
	 *
	 * @var boolean
	 */
	private $prime;

	/**
	 * Qualification.
	 *
	 * @var string
	 */
	private $qualification;

	/**
	 * Situation fam.
	 *
	 * @var string
	 */
	private $situationFam;

	/**
	 * Tel1.
	 *
	 * @var string
	 */
	private $tel1;

	/**
	 * Tel2.
	 *
	 * @var string
	 */
	private $tel2;

	/**
	 * Temps passe.
	 *
	 * @var boolean
	 */
	private $tempsPasse;

	/**
	 * Titre.
	 *
	 * @var string
	 */
	private $titre;

	/**
	 * Travaille j f.
	 *
	 * @var boolean
	 */
	private $travailleJF;

	/**
	 * Uniq i d.
	 *
	 * @var string
	 */
	private $uniqID;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the a transferer en p.
	 *
	 * @return boolean Returns the a transferer en p.
	 */
	public function getATransfererEnP() {
		return $this->aTransfererEnP;
	}

	/**
	 * Get the administratif.
	 *
	 * @return boolean Returns the administratif.
	 */
	public function getAdministratif() {
		return $this->administratif;
	}

	/**
	 * Get the b t q.
	 *
	 * @return string Returns the b t q.
	 */
	public function getBTQ() {
		return $this->bTQ;
	}

	/**
	 * Get the bureau distributeur.
	 *
	 * @return string Returns the bureau distributeur.
	 */
	public function getBureauDistributeur() {
		return $this->bureauDistributeur;
	}

	/**
	 * Get the chef equipe.
	 *
	 * @return boolean Returns the chef equipe.
	 */
	public function getChefEquipe() {
		return $this->chefEquipe;
	}

	/**
	 * Get the cledeux.
	 *
	 * @return string Returns the cledeux.
	 */
	public function getCledeux() {
		return $this->cledeux;
	}

	/**
	 * Get the code officiel commune.
	 *
	 * @return string Returns the code officiel commune.
	 */
	public function getCodeOfficielCommune() {
		return $this->codeOfficielCommune;
	}

	/**
	 * Get the code pays naissance.
	 *
	 * @return string Returns the code pays naissance.
	 */
	public function getCodePaysNaissance() {
		return $this->codePaysNaissance;
	}

	/**
	 * Get the code postal.
	 *
	 * @return string Returns the code postal.
	 */
	public function getCodePostal() {
		return $this->codePostal;
	}

	/**
	 * Get the commercial.
	 *
	 * @return boolean Returns the commercial.
	 */
	public function getCommercial() {
		return $this->commercial;
	}

	/**
	 * Get the commune naissance.
	 *
	 * @return string Returns the commune naissance.
	 */
	public function getCommuneNaissance() {
		return $this->communeNaissance;
	}

	/**
	 * Get the complement.
	 *
	 * @return string Returns the complement.
	 */
	public function getComplement() {
		return $this->complement;
	}

	/**
	 * Get the controleur.
	 *
	 * @return boolean Returns the controleur.
	 */
	public function getControleur() {
		return $this->controleur;
	}

	/**
	 * Get the date ancien.
	 *
	 * @return DateTime Returns the date ancien.
	 */
	public function getDateAncien() {
		return $this->dateAncien;
	}

	/**
	 * Get the date entree1.
	 *
	 * @return DateTime Returns the date entree1.
	 */
	public function getDateEntree1() {
		return $this->dateEntree1;
	}

	/**
	 * Get the date entree2.
	 *
	 * @return DateTime Returns the date entree2.
	 */
	public function getDateEntree2() {
		return $this->dateEntree2;
	}

	/**
	 * Get the date naissance.
	 *
	 * @return DateTime Returns the date naissance.
	 */
	public function getDateNaissance() {
		return $this->dateNaissance;
	}

	/**
	 * Get the date sortie1.
	 *
	 * @return DateTime Returns the date sortie1.
	 */
	public function getDateSortie1() {
		return $this->dateSortie1;
	}

	/**
	 * Get the date sortie2.
	 *
	 * @return DateTime Returns the date sortie2.
	 */
	public function getDateSortie2() {
		return $this->dateSortie2;
	}

	/**
	 * Get the dept naissance.
	 *
	 * @return string Returns the dept naissance.
	 */
	public function getDeptNaissance() {
		return $this->deptNaissance;
	}

	/**
	 * Get the dern num prime.
	 *
	 * @return int Returns the dern num prime.
	 */
	public function getDernNumPrime() {
		return $this->dernNumPrime;
	}

	/**
	 * Get the dim type2.
	 *
	 * @return boolean Returns the dim type2.
	 */
	public function getDimType2() {
		return $this->dimType2;
	}

	/**
	 * Get the fictif.
	 *
	 * @return boolean Returns the fictif.
	 */
	public function getFictif() {
		return $this->fictif;
	}

	/**
	 * Get the gestion maj dim.
	 *
	 * @return string Returns the gestion maj dim.
	 */
	public function getGestionMajDim() {
		return $this->gestionMajDim;
	}

	/**
	 * Get the gestion maj j f.
	 *
	 * @return string Returns the gestion maj j f.
	 */
	public function getGestionMajJF() {
		return $this->gestionMajJF;
	}

	/**
	 * Get the gestion maj nuit.
	 *
	 * @return string Returns the gestion maj nuit.
	 */
	public function getGestionMajNuit() {
		return $this->gestionMajNuit;
	}

	/**
	 * Get the h nuit type2.
	 *
	 * @return boolean Returns the h nuit type2.
	 */
	public function getHNuitType2() {
		return $this->hNuitType2;
	}

	/**
	 * Get the handicape.
	 *
	 * @return boolean Returns the handicape.
	 */
	public function getHandicape() {
		return $this->handicape;
	}

	/**
	 * Get the hotellerie.
	 *
	 * @return boolean Returns the hotellerie.
	 */
	public function getHotellerie() {
		return $this->hotellerie;
	}

	/**
	 * Get the inspecteur.
	 *
	 * @return boolean Returns the inspecteur.
	 */
	public function getInspecteur() {
		return $this->inspecteur;
	}

	/**
	 * Get the livreur.
	 *
	 * @return boolean Returns the livreur.
	 */
	public function getLivreur() {
		return $this->livreur;
	}

	/**
	 * Get the mensualisation tache.
	 *
	 * @return string Returns the mensualisation tache.
	 */
	public function getMensualisationTache() {
		return $this->mensualisationTache;
	}

	/**
	 * Get the nationalite.
	 *
	 * @return string Returns the nationalite.
	 */
	public function getNationalite() {
		return $this->nationalite;
	}

	/**
	 * Get the nb heure mois.
	 *
	 * @return float Returns the nb heure mois.
	 */
	public function getNbHeureMois() {
		return $this->nbHeureMois;
	}

	/**
	 * Get the nom marital.
	 *
	 * @return string Returns the nom marital.
	 */
	public function getNomMarital() {
		return $this->nomMarital;
	}

	/**
	 * Get the nom naissance.
	 *
	 * @return string Returns the nom naissance.
	 */
	public function getNomNaissance() {
		return $this->nomNaissance;
	}

	/**
	 * Get the nom ville.
	 *
	 * @return string Returns the nom ville.
	 */
	public function getNomVille() {
		return $this->nomVille;
	}

	/**
	 * Get the nom voie.
	 *
	 * @return string Returns the nom voie.
	 */
	public function getNomVoie() {
		return $this->nomVoie;
	}

	/**
	 * Get the nombre enfants.
	 *
	 * @return string Returns the nombre enfants.
	 */
	public function getNombreEnfants() {
		return $this->nombreEnfants;
	}

	/**
	 * Get the num voie.
	 *
	 * @return string Returns the num voie.
	 */
	public function getNumVoie() {
		return $this->numVoie;
	}

	/**
	 * Get the numero.
	 *
	 * @return string Returns the numero.
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * Get the numero insee.
	 *
	 * @return string Returns the numero insee.
	 */
	public function getNumeroInsee() {
		return $this->numeroInsee;
	}

	/**
	 * Get the numero p j pass.
	 *
	 * @return int Returns the numero p j pass.
	 */
	public function getNumeroPJPass() {
		return $this->numeroPJPass;
	}

	/**
	 * Get the periode pointage cloturee.
	 *
	 * @return DateTime Returns the periode pointage cloturee.
	 */
	public function getPeriodePointageCloturee() {
		return $this->periodePointageCloturee;
	}

	/**
	 * Get the polyvalent.
	 *
	 * @return boolean Returns the polyvalent.
	 */
	public function getPolyvalent() {
		return $this->polyvalent;
	}

	/**
	 * Get the prenom.
	 *
	 * @return string Returns the prenom.
	 */
	public function getPrenom() {
		return $this->prenom;
	}

	/**
	 * Get the prime.
	 *
	 * @return boolean Returns the prime.
	 */
	public function getPrime() {
		return $this->prime;
	}

	/**
	 * Get the qualification.
	 *
	 * @return string Returns the qualification.
	 */
	public function getQualification() {
		return $this->qualification;
	}

	/**
	 * Get the situation fam.
	 *
	 * @return string Returns the situation fam.
	 */
	public function getSituationFam() {
		return $this->situationFam;
	}

	/**
	 * Get the tel1.
	 *
	 * @return string Returns the tel1.
	 */
	public function getTel1() {
		return $this->tel1;
	}

	/**
	 * Get the tel2.
	 *
	 * @return string Returns the tel2.
	 */
	public function getTel2() {
		return $this->tel2;
	}

	/**
	 * Get the temps passe.
	 *
	 * @return boolean Returns the temps passe.
	 */
	public function getTempsPasse() {
		return $this->tempsPasse;
	}

	/**
	 * Get the titre.
	 *
	 * @return string Returns the titre.
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * Get the travaille j f.
	 *
	 * @return boolean Returns the travaille j f.
	 */
	public function getTravailleJF() {
		return $this->travailleJF;
	}

	/**
	 * Get the uniq i d.
	 *
	 * @return string Returns the uniq i d.
	 */
	public function getUniqID() {
		return $this->uniqID;
	}

	/**
	 * Set the a transferer en p.
	 *
	 * @param boolean $aTransfererEnP The a transferer en p.
	 * @return Employes Returns this employes.
	 */
	public function setATransfererEnP($aTransfererEnP) {
		$this->aTransfererEnP = $aTransfererEnP;
		return $this;
	}

	/**
	 * Set the administratif.
	 *
	 * @param boolean $administratif The administratif.
	 * @return Employes Returns this employes.
	 */
	public function setAdministratif($administratif) {
		$this->administratif = $administratif;
		return $this;
	}

	/**
	 * Set the b t q.
	 *
	 * @param string $bTQ The b t q.
	 * @return Employes Returns this employes.
	 */
	public function setBTQ($bTQ) {
		$this->bTQ = $bTQ;
		return $this;
	}

	/**
	 * Set the bureau distributeur.
	 *
	 * @param string $bureauDistributeur The bureau distributeur.
	 * @return Employes Returns this employes.
	 */
	public function setBureauDistributeur($bureauDistributeur) {
		$this->bureauDistributeur = $bureauDistributeur;
		return $this;
	}

	/**
	 * Set the chef equipe.
	 *
	 * @param boolean $chefEquipe The chef equipe.
	 * @return Employes Returns this employes.
	 */
	public function setChefEquipe($chefEquipe) {
		$this->chefEquipe = $chefEquipe;
		return $this;
	}

	/**
	 * Set the cledeux.
	 *
	 * @param string $cledeux The cledeux.
	 * @return Employes Returns this employes.
	 */
	public function setCledeux($cledeux) {
		$this->cledeux = $cledeux;
		return $this;
	}

	/**
	 * Set the code officiel commune.
	 *
	 * @param string $codeOfficielCommune The code officiel commune.
	 * @return Employes Returns this employes.
	 */
	public function setCodeOfficielCommune($codeOfficielCommune) {
		$this->codeOfficielCommune = $codeOfficielCommune;
		return $this;
	}

	/**
	 * Set the code pays naissance.
	 *
	 * @param string $codePaysNaissance The code pays naissance.
	 * @return Employes Returns this employes.
	 */
	public function setCodePaysNaissance($codePaysNaissance) {
		$this->codePaysNaissance = $codePaysNaissance;
		return $this;
	}

	/**
	 * Set the code postal.
	 *
	 * @param string $codePostal The code postal.
	 * @return Employes Returns this employes.
	 */
	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
		return $this;
	}

	/**
	 * Set the commercial.
	 *
	 * @param boolean $commercial The commercial.
	 * @return Employes Returns this employes.
	 */
	public function setCommercial($commercial) {
		$this->commercial = $commercial;
		return $this;
	}

	/**
	 * Set the commune naissance.
	 *
	 * @param string $communeNaissance The commune naissance.
	 * @return Employes Returns this employes.
	 */
	public function setCommuneNaissance($communeNaissance) {
		$this->communeNaissance = $communeNaissance;
		return $this;
	}

	/**
	 * Set the complement.
	 *
	 * @param string $complement The complement.
	 * @return Employes Returns this employes.
	 */
	public function setComplement($complement) {
		$this->complement = $complement;
		return $this;
	}

	/**
	 * Set the controleur.
	 *
	 * @param boolean $controleur The controleur.
	 * @return Employes Returns this employes.
	 */
	public function setControleur($controleur) {
		$this->controleur = $controleur;
		return $this;
	}

	/**
	 * Set the date ancien.
	 *
	 * @param DateTime $dateAncien The date ancien.
	 * @return Employes Returns this employes.
	 */
	public function setDateAncien(DateTime $dateAncien = null) {
		$this->dateAncien = $dateAncien;
		return $this;
	}

	/**
	 * Set the date entree1.
	 *
	 * @param DateTime $dateEntree1 The date entree1.
	 * @return Employes Returns this employes.
	 */
	public function setDateEntree1(DateTime $dateEntree1 = null) {
		$this->dateEntree1 = $dateEntree1;
		return $this;
	}

	/**
	 * Set the date entree2.
	 *
	 * @param DateTime $dateEntree2 The date entree2.
	 * @return Employes Returns this employes.
	 */
	public function setDateEntree2(DateTime $dateEntree2 = null) {
		$this->dateEntree2 = $dateEntree2;
		return $this;
	}

	/**
	 * Set the date naissance.
	 *
	 * @param DateTime $dateNaissance The date naissance.
	 * @return Employes Returns this employes.
	 */
	public function setDateNaissance(DateTime $dateNaissance = null) {
		$this->dateNaissance = $dateNaissance;
		return $this;
	}

	/**
	 * Set the date sortie1.
	 *
	 * @param DateTime $dateSortie1 The date sortie1.
	 * @return Employes Returns this employes.
	 */
	public function setDateSortie1(DateTime $dateSortie1 = null) {
		$this->dateSortie1 = $dateSortie1;
		return $this;
	}

	/**
	 * Set the date sortie2.
	 *
	 * @param DateTime $dateSortie2 The date sortie2.
	 * @return Employes Returns this employes.
	 */
	public function setDateSortie2(DateTime $dateSortie2 = null) {
		$this->dateSortie2 = $dateSortie2;
		return $this;
	}

	/**
	 * Set the dept naissance.
	 *
	 * @param string $deptNaissance The dept naissance.
	 * @return Employes Returns this employes.
	 */
	public function setDeptNaissance($deptNaissance) {
		$this->deptNaissance = $deptNaissance;
		return $this;
	}

	/**
	 * Set the dern num prime.
	 *
	 * @param int $dernNumPrime The dern num prime.
	 * @return Employes Returns this employes.
	 */
	public function setDernNumPrime($dernNumPrime) {
		$this->dernNumPrime = $dernNumPrime;
		return $this;
	}

	/**
	 * Set the dim type2.
	 *
	 * @param boolean $dimType2 The dim type2.
	 * @return Employes Returns this employes.
	 */
	public function setDimType2($dimType2) {
		$this->dimType2 = $dimType2;
		return $this;
	}

	/**
	 * Set the fictif.
	 *
	 * @param boolean $fictif The fictif.
	 * @return Employes Returns this employes.
	 */
	public function setFictif($fictif) {
		$this->fictif = $fictif;
		return $this;
	}

	/**
	 * Set the gestion maj dim.
	 *
	 * @param string $gestionMajDim The gestion maj dim.
	 * @return Employes Returns this employes.
	 */
	public function setGestionMajDim($gestionMajDim) {
		$this->gestionMajDim = $gestionMajDim;
		return $this;
	}

	/**
	 * Set the gestion maj j f.
	 *
	 * @param string $gestionMajJF The gestion maj j f.
	 * @return Employes Returns this employes.
	 */
	public function setGestionMajJF($gestionMajJF) {
		$this->gestionMajJF = $gestionMajJF;
		return $this;
	}

	/**
	 * Set the gestion maj nuit.
	 *
	 * @param string $gestionMajNuit The gestion maj nuit.
	 * @return Employes Returns this employes.
	 */
	public function setGestionMajNuit($gestionMajNuit) {
		$this->gestionMajNuit = $gestionMajNuit;
		return $this;
	}

	/**
	 * Set the h nuit type2.
	 *
	 * @param boolean $hNuitType2 The h nuit type2.
	 * @return Employes Returns this employes.
	 */
	public function setHNuitType2($hNuitType2) {
		$this->hNuitType2 = $hNuitType2;
		return $this;
	}

	/**
	 * Set the handicape.
	 *
	 * @param boolean $handicape The handicape.
	 * @return Employes Returns this employes.
	 */
	public function setHandicape($handicape) {
		$this->handicape = $handicape;
		return $this;
	}

	/**
	 * Set the hotellerie.
	 *
	 * @param boolean $hotellerie The hotellerie.
	 * @return Employes Returns this employes.
	 */
	public function setHotellerie($hotellerie) {
		$this->hotellerie = $hotellerie;
		return $this;
	}

	/**
	 * Set the inspecteur.
	 *
	 * @param boolean $inspecteur The inspecteur.
	 * @return Employes Returns this employes.
	 */
	public function setInspecteur($inspecteur) {
		$this->inspecteur = $inspecteur;
		return $this;
	}

	/**
	 * Set the livreur.
	 *
	 * @param boolean $livreur The livreur.
	 * @return Employes Returns this employes.
	 */
	public function setLivreur($livreur) {
		$this->livreur = $livreur;
		return $this;
	}

	/**
	 * Set the mensualisation tache.
	 *
	 * @param string $mensualisationTache The mensualisation tache.
	 * @return Employes Returns this employes.
	 */
	public function setMensualisationTache($mensualisationTache) {
		$this->mensualisationTache = $mensualisationTache;
		return $this;
	}

	/**
	 * Set the nationalite.
	 *
	 * @param string $nationalite The nationalite.
	 * @return Employes Returns this employes.
	 */
	public function setNationalite($nationalite) {
		$this->nationalite = $nationalite;
		return $this;
	}

	/**
	 * Set the nb heure mois.
	 *
	 * @param float $nbHeureMois The nb heure mois.
	 * @return Employes Returns this employes.
	 */
	public function setNbHeureMois($nbHeureMois) {
		$this->nbHeureMois = $nbHeureMois;
		return $this;
	}

	/**
	 * Set the nom marital.
	 *
	 * @param string $nomMarital The nom marital.
	 * @return Employes Returns this employes.
	 */
	public function setNomMarital($nomMarital) {
		$this->nomMarital = $nomMarital;
		return $this;
	}

	/**
	 * Set the nom naissance.
	 *
	 * @param string $nomNaissance The nom naissance.
	 * @return Employes Returns this employes.
	 */
	public function setNomNaissance($nomNaissance) {
		$this->nomNaissance = $nomNaissance;
		return $this;
	}

	/**
	 * Set the nom ville.
	 *
	 * @param string $nomVille The nom ville.
	 * @return Employes Returns this employes.
	 */
	public function setNomVille($nomVille) {
		$this->nomVille = $nomVille;
		return $this;
	}

	/**
	 * Set the nom voie.
	 *
	 * @param string $nomVoie The nom voie.
	 * @return Employes Returns this employes.
	 */
	public function setNomVoie($nomVoie) {
		$this->nomVoie = $nomVoie;
		return $this;
	}

	/**
	 * Set the nombre enfants.
	 *
	 * @param string $nombreEnfants The nombre enfants.
	 * @return Employes Returns this employes.
	 */
	public function setNombreEnfants($nombreEnfants) {
		$this->nombreEnfants = $nombreEnfants;
		return $this;
	}

	/**
	 * Set the num voie.
	 *
	 * @param string $numVoie The num voie.
	 * @return Employes Returns this employes.
	 */
	public function setNumVoie($numVoie) {
		$this->numVoie = $numVoie;
		return $this;
	}

	/**
	 * Set the numero.
	 *
	 * @param string $numero The numero.
	 * @return Employes Returns this employes.
	 */
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}

	/**
	 * Set the numero insee.
	 *
	 * @param string $numeroInsee The numero insee.
	 * @return Employes Returns this employes.
	 */
	public function setNumeroInsee($numeroInsee) {
		$this->numeroInsee = $numeroInsee;
		return $this;
	}

	/**
	 * Set the numero p j pass.
	 *
	 * @param int $numeroPJPass The numero p j pass.
	 * @return Employes Returns this employes.
	 */
	public function setNumeroPJPass($numeroPJPass) {
		$this->numeroPJPass = $numeroPJPass;
		return $this;
	}

	/**
	 * Set the periode pointage cloturee.
	 *
	 * @param DateTime $periodePointageCloturee The periode pointage cloturee.
	 * @return Employes Returns this employes.
	 */
	public function setPeriodePointageCloturee(DateTime $periodePointageCloturee = null) {
		$this->periodePointageCloturee = $periodePointageCloturee;
		return $this;
	}

	/**
	 * Set the polyvalent.
	 *
	 * @param boolean $polyvalent The polyvalent.
	 * @return Employes Returns this employes.
	 */
	public function setPolyvalent($polyvalent) {
		$this->polyvalent = $polyvalent;
		return $this;
	}

	/**
	 * Set the prenom.
	 *
	 * @param string $prenom The prenom.
	 * @return Employes Returns this employes.
	 */
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}

	/**
	 * Set the prime.
	 *
	 * @param boolean $prime The prime.
	 * @return Employes Returns this employes.
	 */
	public function setPrime($prime) {
		$this->prime = $prime;
		return $this;
	}

	/**
	 * Set the qualification.
	 *
	 * @param string $qualification The qualification.
	 * @return Employes Returns this employes.
	 */
	public function setQualification($qualification) {
		$this->qualification = $qualification;
		return $this;
	}

	/**
	 * Set the situation fam.
	 *
	 * @param string $situationFam The situation fam.
	 * @return Employes Returns this employes.
	 */
	public function setSituationFam($situationFam) {
		$this->situationFam = $situationFam;
		return $this;
	}

	/**
	 * Set the tel1.
	 *
	 * @param string $tel1 The tel1.
	 * @return Employes Returns this employes.
	 */
	public function setTel1($tel1) {
		$this->tel1 = $tel1;
		return $this;
	}

	/**
	 * Set the tel2.
	 *
	 * @param string $tel2 The tel2.
	 * @return Employes Returns this employes.
	 */
	public function setTel2($tel2) {
		$this->tel2 = $tel2;
		return $this;
	}

	/**
	 * Set the temps passe.
	 *
	 * @param boolean $tempsPasse The temps passe.
	 * @return Employes Returns this employes.
	 */
	public function setTempsPasse($tempsPasse) {
		$this->tempsPasse = $tempsPasse;
		return $this;
	}

	/**
	 * Set the titre.
	 *
	 * @param string $titre The titre.
	 * @return Employes Returns this employes.
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

	/**
	 * Set the travaille j f.
	 *
	 * @param boolean $travailleJF The travaille j f.
	 * @return Employes Returns this employes.
	 */
	public function setTravailleJF($travailleJF) {
		$this->travailleJF = $travailleJF;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return Employes Returns this employes.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

}
