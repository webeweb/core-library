<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Acces web model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AccesWeb {

	/**
	 * Acces agenda.
	 *
	 * @var boolean
	 */
	private $accesAgenda;

	/**
	 * Acces articles.
	 *
	 * @var boolean
	 */
	private $accesArticles;

	/**
	 * Acces articles consommes.
	 *
	 * @var boolean
	 */
	private $accesArticlesConsommes;

	/**
	 * Acces clients.
	 *
	 * @var boolean
	 */
	private $accesClients;

	/**
	 * Acces clients favoris.
	 *
	 * @var boolean
	 */
	private $accesClientsFavoris;

	/**
	 * Acces consultation.
	 *
	 * @var boolean
	 */
	private $accesConsultation;

	/**
	 * Acces dossier cabinet.
	 *
	 * @var boolean
	 */
	private $accesDossierCabinet;

	/**
	 * Acces facture.
	 *
	 * @var boolean
	 */
	private $accesFacture;

	/**
	 * Acces i bureau.
	 *
	 * @var boolean
	 */
	private $accesIBureau;

	/**
	 * Acces interventions.
	 *
	 * @var boolean
	 */
	private $accesInterventions;

	/**
	 * Acces liste collab.
	 *
	 * @var boolean
	 */
	private $accesListeCollab;

	/**
	 * Acces messages.
	 *
	 * @var boolean
	 */
	private $accesMessages;

	/**
	 * Acces note frais.
	 *
	 * @var boolean
	 */
	private $accesNoteFrais;

	/**
	 * Acces repertoire.
	 *
	 * @var boolean
	 */
	private $accesRepertoire;

	/**
	 * Acces saisie commande.
	 *
	 * @var boolean
	 */
	private $accesSaisieCommande;

	/**
	 * Acces saisie t p.
	 *
	 * @var boolean
	 */
	private $accesSaisieTP;

	/**
	 * Acces solde cpta.
	 *
	 * @var boolean
	 */
	private $accesSoldeCpta;

	/**
	 * Acces tableaux bord.
	 *
	 * @var boolean
	 */
	private $accesTableauxBord;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Date activation.
	 *
	 * @var DateTime
	 */
	private $dateActivation;

	/**
	 * Date fin.
	 *
	 * @var DateTime
	 */
	private $dateFin;

	/**
	 * Dern tentative.
	 *
	 * @var DateTime
	 */
	private $dernTentative;

	/**
	 * Doss cpta.
	 *
	 * @var string
	 */
	private $dossCpta;

	/**
	 * Doss paie.
	 *
	 * @var string
	 */
	private $dossPaie;

	/**
	 * Doss prop.
	 *
	 * @var string
	 */
	private $dossProp;

	/**
	 * Duplique intervention.
	 *
	 * @var boolean
	 */
	private $dupliqueIntervention;

	/**
	 * Meme m d p que i bureau.
	 *
	 * @var boolean
	 */
	private $memeMDPQueIBureau;

	/**
	 * Mot de passe.
	 *
	 * @var string
	 */
	private $motDePasse;

	/**
	 * Restr cli assist1.
	 *
	 * @var string
	 */
	private $restrCliAssist1;

	/**
	 * Restr cli assist2.
	 *
	 * @var string
	 */
	private $restrCliAssist2;

	/**
	 * Restr cli autre1.
	 *
	 * @var string
	 */
	private $restrCliAutre1;

	/**
	 * Restr cli autre2.
	 *
	 * @var string
	 */
	private $restrCliAutre2;

	/**
	 * Restr cli collab.
	 *
	 * @var string
	 */
	private $restrCliCollab;

	/**
	 * Restr cli debut.
	 *
	 * @var string
	 */
	private $restrCliDebut;

	/**
	 * Restr cli expert.
	 *
	 * @var string
	 */
	private $restrCliExpert;

	/**
	 * Restr cli fin.
	 *
	 * @var string
	 */
	private $restrCliFin;

	/**
	 * Restr cli portef.
	 *
	 * @var string
	 */
	private $restrCliPortef;

	/**
	 * Tentatives.
	 *
	 * @var string
	 */
	private $tentatives;

	/**
	 * i key.
	 *
	 * @var string
	 */
	private $iKey;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the acces agenda.
	 *
	 * @return boolean Returns the acces agenda.
	 */
	public function getAccesAgenda() {
		return $this->accesAgenda;
	}

	/**
	 * Get the acces articles.
	 *
	 * @return boolean Returns the acces articles.
	 */
	public function getAccesArticles() {
		return $this->accesArticles;
	}

	/**
	 * Get the acces articles consommes.
	 *
	 * @return boolean Returns the acces articles consommes.
	 */
	public function getAccesArticlesConsommes() {
		return $this->accesArticlesConsommes;
	}

	/**
	 * Get the acces clients.
	 *
	 * @return boolean Returns the acces clients.
	 */
	public function getAccesClients() {
		return $this->accesClients;
	}

	/**
	 * Get the acces clients favoris.
	 *
	 * @return boolean Returns the acces clients favoris.
	 */
	public function getAccesClientsFavoris() {
		return $this->accesClientsFavoris;
	}

	/**
	 * Get the acces consultation.
	 *
	 * @return boolean Returns the acces consultation.
	 */
	public function getAccesConsultation() {
		return $this->accesConsultation;
	}

	/**
	 * Get the acces dossier cabinet.
	 *
	 * @return boolean Returns the acces dossier cabinet.
	 */
	public function getAccesDossierCabinet() {
		return $this->accesDossierCabinet;
	}

	/**
	 * Get the acces facture.
	 *
	 * @return boolean Returns the acces facture.
	 */
	public function getAccesFacture() {
		return $this->accesFacture;
	}

	/**
	 * Get the acces i bureau.
	 *
	 * @return boolean Returns the acces i bureau.
	 */
	public function getAccesIBureau() {
		return $this->accesIBureau;
	}

	/**
	 * Get the acces interventions.
	 *
	 * @return boolean Returns the acces interventions.
	 */
	public function getAccesInterventions() {
		return $this->accesInterventions;
	}

	/**
	 * Get the acces liste collab.
	 *
	 * @return boolean Returns the acces liste collab.
	 */
	public function getAccesListeCollab() {
		return $this->accesListeCollab;
	}

	/**
	 * Get the acces messages.
	 *
	 * @return boolean Returns the acces messages.
	 */
	public function getAccesMessages() {
		return $this->accesMessages;
	}

	/**
	 * Get the acces note frais.
	 *
	 * @return boolean Returns the acces note frais.
	 */
	public function getAccesNoteFrais() {
		return $this->accesNoteFrais;
	}

	/**
	 * Get the acces repertoire.
	 *
	 * @return boolean Returns the acces repertoire.
	 */
	public function getAccesRepertoire() {
		return $this->accesRepertoire;
	}

	/**
	 * Get the acces saisie commande.
	 *
	 * @return boolean Returns the acces saisie commande.
	 */
	public function getAccesSaisieCommande() {
		return $this->accesSaisieCommande;
	}

	/**
	 * Get the acces saisie t p.
	 *
	 * @return boolean Returns the acces saisie t p.
	 */
	public function getAccesSaisieTP() {
		return $this->accesSaisieTP;
	}

	/**
	 * Get the acces solde cpta.
	 *
	 * @return boolean Returns the acces solde cpta.
	 */
	public function getAccesSoldeCpta() {
		return $this->accesSoldeCpta;
	}

	/**
	 * Get the acces tableaux bord.
	 *
	 * @return boolean Returns the acces tableaux bord.
	 */
	public function getAccesTableauxBord() {
		return $this->accesTableauxBord;
	}

	/**
	 * Get the code collaborateur.
	 *
	 * @return string Returns the code collaborateur.
	 */
	public function getCodeCollaborateur() {
		return $this->codeCollaborateur;
	}

	/**
	 * Get the date activation.
	 *
	 * @return DateTime Returns the date activation.
	 */
	public function getDateActivation() {
		return $this->dateActivation;
	}

	/**
	 * Get the date fin.
	 *
	 * @return DateTime Returns the date fin.
	 */
	public function getDateFin() {
		return $this->dateFin;
	}

	/**
	 * Get the dern tentative.
	 *
	 * @return DateTime Returns the dern tentative.
	 */
	public function getDernTentative() {
		return $this->dernTentative;
	}

	/**
	 * Get the doss cpta.
	 *
	 * @return string Returns the doss cpta.
	 */
	public function getDossCpta() {
		return $this->dossCpta;
	}

	/**
	 * Get the doss paie.
	 *
	 * @return string Returns the doss paie.
	 */
	public function getDossPaie() {
		return $this->dossPaie;
	}

	/**
	 * Get the doss prop.
	 *
	 * @return string Returns the doss prop.
	 */
	public function getDossProp() {
		return $this->dossProp;
	}

	/**
	 * Get the duplique intervention.
	 *
	 * @return boolean Returns the duplique intervention.
	 */
	public function getDupliqueIntervention() {
		return $this->dupliqueIntervention;
	}

	/**
	 * Get the meme m d p que i bureau.
	 *
	 * @return boolean Returns the meme m d p que i bureau.
	 */
	public function getMemeMDPQueIBureau() {
		return $this->memeMDPQueIBureau;
	}

	/**
	 * Get the mot de passe.
	 *
	 * @return string Returns the mot de passe.
	 */
	public function getMotDePasse() {
		return $this->motDePasse;
	}

	/**
	 * Get the restr cli assist1.
	 *
	 * @return string Returns the restr cli assist1.
	 */
	public function getRestrCliAssist1() {
		return $this->restrCliAssist1;
	}

	/**
	 * Get the restr cli assist2.
	 *
	 * @return string Returns the restr cli assist2.
	 */
	public function getRestrCliAssist2() {
		return $this->restrCliAssist2;
	}

	/**
	 * Get the restr cli autre1.
	 *
	 * @return string Returns the restr cli autre1.
	 */
	public function getRestrCliAutre1() {
		return $this->restrCliAutre1;
	}

	/**
	 * Get the restr cli autre2.
	 *
	 * @return string Returns the restr cli autre2.
	 */
	public function getRestrCliAutre2() {
		return $this->restrCliAutre2;
	}

	/**
	 * Get the restr cli collab.
	 *
	 * @return string Returns the restr cli collab.
	 */
	public function getRestrCliCollab() {
		return $this->restrCliCollab;
	}

	/**
	 * Get the restr cli debut.
	 *
	 * @return string Returns the restr cli debut.
	 */
	public function getRestrCliDebut() {
		return $this->restrCliDebut;
	}

	/**
	 * Get the restr cli expert.
	 *
	 * @return string Returns the restr cli expert.
	 */
	public function getRestrCliExpert() {
		return $this->restrCliExpert;
	}

	/**
	 * Get the restr cli fin.
	 *
	 * @return string Returns the restr cli fin.
	 */
	public function getRestrCliFin() {
		return $this->restrCliFin;
	}

	/**
	 * Get the restr cli portef.
	 *
	 * @return string Returns the restr cli portef.
	 */
	public function getRestrCliPortef() {
		return $this->restrCliPortef;
	}

	/**
	 * Get the tentatives.
	 *
	 * @return string Returns the tentatives.
	 */
	public function getTentatives() {
		return $this->tentatives;
	}

	/**
	 * Get the i key.
	 *
	 * @return string Returns the i key.
	 */
	public function getiKey() {
		return $this->iKey;
	}

	/**
	 * Set the acces agenda.
	 *
	 * @param boolean $accesAgenda The acces agenda.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesAgenda($accesAgenda) {
		$this->accesAgenda = $accesAgenda;
		return $this;
	}

	/**
	 * Set the acces articles.
	 *
	 * @param boolean $accesArticles The acces articles.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesArticles($accesArticles) {
		$this->accesArticles = $accesArticles;
		return $this;
	}

	/**
	 * Set the acces articles consommes.
	 *
	 * @param boolean $accesArticlesConsommes The acces articles consommes.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesArticlesConsommes($accesArticlesConsommes) {
		$this->accesArticlesConsommes = $accesArticlesConsommes;
		return $this;
	}

	/**
	 * Set the acces clients.
	 *
	 * @param boolean $accesClients The acces clients.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesClients($accesClients) {
		$this->accesClients = $accesClients;
		return $this;
	}

	/**
	 * Set the acces clients favoris.
	 *
	 * @param boolean $accesClientsFavoris The acces clients favoris.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesClientsFavoris($accesClientsFavoris) {
		$this->accesClientsFavoris = $accesClientsFavoris;
		return $this;
	}

	/**
	 * Set the acces consultation.
	 *
	 * @param boolean $accesConsultation The acces consultation.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesConsultation($accesConsultation) {
		$this->accesConsultation = $accesConsultation;
		return $this;
	}

	/**
	 * Set the acces dossier cabinet.
	 *
	 * @param boolean $accesDossierCabinet The acces dossier cabinet.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesDossierCabinet($accesDossierCabinet) {
		$this->accesDossierCabinet = $accesDossierCabinet;
		return $this;
	}

	/**
	 * Set the acces facture.
	 *
	 * @param boolean $accesFacture The acces facture.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesFacture($accesFacture) {
		$this->accesFacture = $accesFacture;
		return $this;
	}

	/**
	 * Set the acces i bureau.
	 *
	 * @param boolean $accesIBureau The acces i bureau.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesIBureau($accesIBureau) {
		$this->accesIBureau = $accesIBureau;
		return $this;
	}

	/**
	 * Set the acces interventions.
	 *
	 * @param boolean $accesInterventions The acces interventions.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesInterventions($accesInterventions) {
		$this->accesInterventions = $accesInterventions;
		return $this;
	}

	/**
	 * Set the acces liste collab.
	 *
	 * @param boolean $accesListeCollab The acces liste collab.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesListeCollab($accesListeCollab) {
		$this->accesListeCollab = $accesListeCollab;
		return $this;
	}

	/**
	 * Set the acces messages.
	 *
	 * @param boolean $accesMessages The acces messages.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesMessages($accesMessages) {
		$this->accesMessages = $accesMessages;
		return $this;
	}

	/**
	 * Set the acces note frais.
	 *
	 * @param boolean $accesNoteFrais The acces note frais.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesNoteFrais($accesNoteFrais) {
		$this->accesNoteFrais = $accesNoteFrais;
		return $this;
	}

	/**
	 * Set the acces repertoire.
	 *
	 * @param boolean $accesRepertoire The acces repertoire.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesRepertoire($accesRepertoire) {
		$this->accesRepertoire = $accesRepertoire;
		return $this;
	}

	/**
	 * Set the acces saisie commande.
	 *
	 * @param boolean $accesSaisieCommande The acces saisie commande.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesSaisieCommande($accesSaisieCommande) {
		$this->accesSaisieCommande = $accesSaisieCommande;
		return $this;
	}

	/**
	 * Set the acces saisie t p.
	 *
	 * @param boolean $accesSaisieTP The acces saisie t p.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesSaisieTP($accesSaisieTP) {
		$this->accesSaisieTP = $accesSaisieTP;
		return $this;
	}

	/**
	 * Set the acces solde cpta.
	 *
	 * @param boolean $accesSoldeCpta The acces solde cpta.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesSoldeCpta($accesSoldeCpta) {
		$this->accesSoldeCpta = $accesSoldeCpta;
		return $this;
	}

	/**
	 * Set the acces tableaux bord.
	 *
	 * @param boolean $accesTableauxBord The acces tableaux bord.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setAccesTableauxBord($accesTableauxBord) {
		$this->accesTableauxBord = $accesTableauxBord;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the date activation.
	 *
	 * @param DateTime $dateActivation The date activation.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDateActivation(DateTime $dateActivation = null) {
		$this->dateActivation = $dateActivation;
		return $this;
	}

	/**
	 * Set the date fin.
	 *
	 * @param DateTime $dateFin The date fin.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDateFin(DateTime $dateFin = null) {
		$this->dateFin = $dateFin;
		return $this;
	}

	/**
	 * Set the dern tentative.
	 *
	 * @param DateTime $dernTentative The dern tentative.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDernTentative(DateTime $dernTentative = null) {
		$this->dernTentative = $dernTentative;
		return $this;
	}

	/**
	 * Set the doss cpta.
	 *
	 * @param string $dossCpta The doss cpta.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDossCpta($dossCpta) {
		$this->dossCpta = $dossCpta;
		return $this;
	}

	/**
	 * Set the doss paie.
	 *
	 * @param string $dossPaie The doss paie.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDossPaie($dossPaie) {
		$this->dossPaie = $dossPaie;
		return $this;
	}

	/**
	 * Set the doss prop.
	 *
	 * @param string $dossProp The doss prop.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDossProp($dossProp) {
		$this->dossProp = $dossProp;
		return $this;
	}

	/**
	 * Set the duplique intervention.
	 *
	 * @param boolean $dupliqueIntervention The duplique intervention.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setDupliqueIntervention($dupliqueIntervention) {
		$this->dupliqueIntervention = $dupliqueIntervention;
		return $this;
	}

	/**
	 * Set the meme m d p que i bureau.
	 *
	 * @param boolean $memeMDPQueIBureau The meme m d p que i bureau.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setMemeMDPQueIBureau($memeMDPQueIBureau) {
		$this->memeMDPQueIBureau = $memeMDPQueIBureau;
		return $this;
	}

	/**
	 * Set the mot de passe.
	 *
	 * @param string $motDePasse The mot de passe.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setMotDePasse($motDePasse) {
		$this->motDePasse = $motDePasse;
		return $this;
	}

	/**
	 * Set the restr cli assist1.
	 *
	 * @param string $restrCliAssist1 The restr cli assist1.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliAssist1($restrCliAssist1) {
		$this->restrCliAssist1 = $restrCliAssist1;
		return $this;
	}

	/**
	 * Set the restr cli assist2.
	 *
	 * @param string $restrCliAssist2 The restr cli assist2.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliAssist2($restrCliAssist2) {
		$this->restrCliAssist2 = $restrCliAssist2;
		return $this;
	}

	/**
	 * Set the restr cli autre1.
	 *
	 * @param string $restrCliAutre1 The restr cli autre1.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliAutre1($restrCliAutre1) {
		$this->restrCliAutre1 = $restrCliAutre1;
		return $this;
	}

	/**
	 * Set the restr cli autre2.
	 *
	 * @param string $restrCliAutre2 The restr cli autre2.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliAutre2($restrCliAutre2) {
		$this->restrCliAutre2 = $restrCliAutre2;
		return $this;
	}

	/**
	 * Set the restr cli collab.
	 *
	 * @param string $restrCliCollab The restr cli collab.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliCollab($restrCliCollab) {
		$this->restrCliCollab = $restrCliCollab;
		return $this;
	}

	/**
	 * Set the restr cli debut.
	 *
	 * @param string $restrCliDebut The restr cli debut.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliDebut($restrCliDebut) {
		$this->restrCliDebut = $restrCliDebut;
		return $this;
	}

	/**
	 * Set the restr cli expert.
	 *
	 * @param string $restrCliExpert The restr cli expert.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliExpert($restrCliExpert) {
		$this->restrCliExpert = $restrCliExpert;
		return $this;
	}

	/**
	 * Set the restr cli fin.
	 *
	 * @param string $restrCliFin The restr cli fin.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliFin($restrCliFin) {
		$this->restrCliFin = $restrCliFin;
		return $this;
	}

	/**
	 * Set the restr cli portef.
	 *
	 * @param string $restrCliPortef The restr cli portef.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setRestrCliPortef($restrCliPortef) {
		$this->restrCliPortef = $restrCliPortef;
		return $this;
	}

	/**
	 * Set the tentatives.
	 *
	 * @param string $tentatives The tentatives.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setTentatives($tentatives) {
		$this->tentatives = $tentatives;
		return $this;
	}

	/**
	 * Set the i key.
	 *
	 * @param string $iKey The i key.
	 * @return AccesWeb Returns this acces web.
	 */
	public function setiKey($iKey) {
		$this->iKey = $iKey;
		return $this;
	}

}
