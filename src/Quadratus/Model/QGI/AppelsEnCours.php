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
 * Appels en cours model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AppelsEnCours {

	/**
	 * Avec mise en somm.
	 *
	 * @var boolean
	 */
	private $avecMiseEnSomm;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collaborateur dest.
	 *
	 * @var string
	 */
	private $codeCollaborateurDest;

	/**
	 * Code collaborateur entrant.
	 *
	 * @var string
	 */
	private $codeCollaborateurEntrant;

	/**
	 * Code collaborateur redir.
	 *
	 * @var string
	 */
	private $codeCollaborateurRedir;

	/**
	 * Code produit.
	 *
	 * @var string
	 */
	private $codeProduit;

	/**
	 * Compteur temps.
	 *
	 * @var int
	 */
	private $compteurTemps;

	/**
	 * Confidentiel.
	 *
	 * @var boolean
	 */
	private $confidentiel;

	/**
	 * Consequence.
	 *
	 * @var string
	 */
	private $consequence;

	/**
	 * Date creation client.
	 *
	 * @var DateTime
	 */
	private $dateCreationClient;

	/**
	 * Date entree.
	 *
	 * @var DateTime
	 */
	private $dateEntree;

	/**
	 * Date message lu.
	 *
	 * @var DateTime
	 */
	private $dateMessageLu;

	/**
	 * Date redir.
	 *
	 * @var DateTime
	 */
	private $dateRedir;

	/**
	 * Demande a r.
	 *
	 * @var boolean
	 */
	private $demandeAR;

	/**
	 * Destinataires a.
	 *
	 * @var string
	 */
	private $destinatairesA;

	/**
	 * Destinataires cc.
	 *
	 * @var string
	 */
	private $destinatairesCc;

	/**
	 * Email auteur.
	 *
	 * @var string
	 */
	private $emailAuteur;

	/**
	 * Groupe qualifiant.
	 *
	 * @var string
	 */
	private $groupeQualifiant;

	/**
	 * I d appel.
	 *
	 * @var int
	 */
	private $iDAppel;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Message lu.
	 *
	 * @var boolean
	 */
	private $messageLu;

	/**
	 * Mise en somm date heure.
	 *
	 * @var DateTime
	 */
	private $miseEnSommDateHeure;

	/**
	 * Nature.
	 *
	 * @var string
	 */
	private $nature;

	/**
	 * Nb appels en cours.
	 *
	 * @var int
	 */
	private $nbAppelsEnCours;

	/**
	 * Nom client.
	 *
	 * @var string
	 */
	private $nomClient;

	/**
	 * Origine.
	 *
	 * @var string
	 */
	private $origine;

	/**
	 * Piece jointe.
	 *
	 * @var string
	 */
	private $pieceJointe;

	/**
	 * Reponse.
	 *
	 * @var string
	 */
	private $reponse;

	/**
	 * Sous rep ref g u i d.
	 *
	 * @var string
	 */
	private $sousRepRefGUID;

	/**
	 * Special.
	 *
	 * @var string
	 */
	private $special;

	/**
	 * Tel.
	 *
	 * @var string
	 */
	private $tel;

	/**
	 * Type message.
	 *
	 * @var string
	 */
	private $typeMessage;

	/**
	 * Uniq i d.
	 *
	 * @var string
	 */
	private $uniqID;

	/**
	 * Urgent.
	 *
	 * @var boolean
	 */
	private $urgent;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the avec mise en somm.
	 *
	 * @return boolean Returns the avec mise en somm.
	 */
	public function getAvecMiseEnSomm() {
		return $this->avecMiseEnSomm;
	}

	/**
	 * Get the code client.
	 *
	 * @return string Returns the code client.
	 */
	public function getCodeClient() {
		return $this->codeClient;
	}

	/**
	 * Get the code collaborateur dest.
	 *
	 * @return string Returns the code collaborateur dest.
	 */
	public function getCodeCollaborateurDest() {
		return $this->codeCollaborateurDest;
	}

	/**
	 * Get the code collaborateur entrant.
	 *
	 * @return string Returns the code collaborateur entrant.
	 */
	public function getCodeCollaborateurEntrant() {
		return $this->codeCollaborateurEntrant;
	}

	/**
	 * Get the code collaborateur redir.
	 *
	 * @return string Returns the code collaborateur redir.
	 */
	public function getCodeCollaborateurRedir() {
		return $this->codeCollaborateurRedir;
	}

	/**
	 * Get the code produit.
	 *
	 * @return string Returns the code produit.
	 */
	public function getCodeProduit() {
		return $this->codeProduit;
	}

	/**
	 * Get the compteur temps.
	 *
	 * @return int Returns the compteur temps.
	 */
	public function getCompteurTemps() {
		return $this->compteurTemps;
	}

	/**
	 * Get the confidentiel.
	 *
	 * @return boolean Returns the confidentiel.
	 */
	public function getConfidentiel() {
		return $this->confidentiel;
	}

	/**
	 * Get the consequence.
	 *
	 * @return string Returns the consequence.
	 */
	public function getConsequence() {
		return $this->consequence;
	}

	/**
	 * Get the date creation client.
	 *
	 * @return DateTime Returns the date creation client.
	 */
	public function getDateCreationClient() {
		return $this->dateCreationClient;
	}

	/**
	 * Get the date entree.
	 *
	 * @return DateTime Returns the date entree.
	 */
	public function getDateEntree() {
		return $this->dateEntree;
	}

	/**
	 * Get the date message lu.
	 *
	 * @return DateTime Returns the date message lu.
	 */
	public function getDateMessageLu() {
		return $this->dateMessageLu;
	}

	/**
	 * Get the date redir.
	 *
	 * @return DateTime Returns the date redir.
	 */
	public function getDateRedir() {
		return $this->dateRedir;
	}

	/**
	 * Get the demande a r.
	 *
	 * @return boolean Returns the demande a r.
	 */
	public function getDemandeAR() {
		return $this->demandeAR;
	}

	/**
	 * Get the destinataires a.
	 *
	 * @return string Returns the destinataires a.
	 */
	public function getDestinatairesA() {
		return $this->destinatairesA;
	}

	/**
	 * Get the destinataires cc.
	 *
	 * @return string Returns the destinataires cc.
	 */
	public function getDestinatairesCc() {
		return $this->destinatairesCc;
	}

	/**
	 * Get the email auteur.
	 *
	 * @return string Returns the email auteur.
	 */
	public function getEmailAuteur() {
		return $this->emailAuteur;
	}

	/**
	 * Get the groupe qualifiant.
	 *
	 * @return string Returns the groupe qualifiant.
	 */
	public function getGroupeQualifiant() {
		return $this->groupeQualifiant;
	}

	/**
	 * Get the i d appel.
	 *
	 * @return int Returns the i d appel.
	 */
	public function getIDAppel() {
		return $this->iDAppel;
	}

	/**
	 * Get the intitule.
	 *
	 * @return string Returns the intitule.
	 */
	public function getIntitule() {
		return $this->intitule;
	}

	/**
	 * Get the message lu.
	 *
	 * @return boolean Returns the message lu.
	 */
	public function getMessageLu() {
		return $this->messageLu;
	}

	/**
	 * Get the mise en somm date heure.
	 *
	 * @return DateTime Returns the mise en somm date heure.
	 */
	public function getMiseEnSommDateHeure() {
		return $this->miseEnSommDateHeure;
	}

	/**
	 * Get the nature.
	 *
	 * @return string Returns the nature.
	 */
	public function getNature() {
		return $this->nature;
	}

	/**
	 * Get the nb appels en cours.
	 *
	 * @return int Returns the nb appels en cours.
	 */
	public function getNbAppelsEnCours() {
		return $this->nbAppelsEnCours;
	}

	/**
	 * Get the nom client.
	 *
	 * @return string Returns the nom client.
	 */
	public function getNomClient() {
		return $this->nomClient;
	}

	/**
	 * Get the origine.
	 *
	 * @return string Returns the origine.
	 */
	public function getOrigine() {
		return $this->origine;
	}

	/**
	 * Get the piece jointe.
	 *
	 * @return string Returns the piece jointe.
	 */
	public function getPieceJointe() {
		return $this->pieceJointe;
	}

	/**
	 * Get the reponse.
	 *
	 * @return string Returns the reponse.
	 */
	public function getReponse() {
		return $this->reponse;
	}

	/**
	 * Get the sous rep ref g u i d.
	 *
	 * @return string Returns the sous rep ref g u i d.
	 */
	public function getSousRepRefGUID() {
		return $this->sousRepRefGUID;
	}

	/**
	 * Get the special.
	 *
	 * @return string Returns the special.
	 */
	public function getSpecial() {
		return $this->special;
	}

	/**
	 * Get the tel.
	 *
	 * @return string Returns the tel.
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * Get the type message.
	 *
	 * @return string Returns the type message.
	 */
	public function getTypeMessage() {
		return $this->typeMessage;
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
	 * Get the urgent.
	 *
	 * @return boolean Returns the urgent.
	 */
	public function getUrgent() {
		return $this->urgent;
	}

	/**
	 * Set the avec mise en somm.
	 *
	 * @param boolean $avecMiseEnSomm The avec mise en somm.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setAvecMiseEnSomm($avecMiseEnSomm) {
		$this->avecMiseEnSomm = $avecMiseEnSomm;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collaborateur dest.
	 *
	 * @param string $codeCollaborateurDest The code collaborateur dest.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setCodeCollaborateurDest($codeCollaborateurDest) {
		$this->codeCollaborateurDest = $codeCollaborateurDest;
		return $this;
	}

	/**
	 * Set the code collaborateur entrant.
	 *
	 * @param string $codeCollaborateurEntrant The code collaborateur entrant.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setCodeCollaborateurEntrant($codeCollaborateurEntrant) {
		$this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
		return $this;
	}

	/**
	 * Set the code collaborateur redir.
	 *
	 * @param string $codeCollaborateurRedir The code collaborateur redir.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setCodeCollaborateurRedir($codeCollaborateurRedir) {
		$this->codeCollaborateurRedir = $codeCollaborateurRedir;
		return $this;
	}

	/**
	 * Set the code produit.
	 *
	 * @param string $codeProduit The code produit.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setCodeProduit($codeProduit) {
		$this->codeProduit = $codeProduit;
		return $this;
	}

	/**
	 * Set the compteur temps.
	 *
	 * @param int $compteurTemps The compteur temps.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setCompteurTemps($compteurTemps) {
		$this->compteurTemps = $compteurTemps;
		return $this;
	}

	/**
	 * Set the confidentiel.
	 *
	 * @param boolean $confidentiel The confidentiel.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setConfidentiel($confidentiel) {
		$this->confidentiel = $confidentiel;
		return $this;
	}

	/**
	 * Set the consequence.
	 *
	 * @param string $consequence The consequence.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setConsequence($consequence) {
		$this->consequence = $consequence;
		return $this;
	}

	/**
	 * Set the date creation client.
	 *
	 * @param DateTime $dateCreationClient The date creation client.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDateCreationClient(DateTime $dateCreationClient = null) {
		$this->dateCreationClient = $dateCreationClient;
		return $this;
	}

	/**
	 * Set the date entree.
	 *
	 * @param DateTime $dateEntree The date entree.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDateEntree(DateTime $dateEntree = null) {
		$this->dateEntree = $dateEntree;
		return $this;
	}

	/**
	 * Set the date message lu.
	 *
	 * @param DateTime $dateMessageLu The date message lu.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDateMessageLu(DateTime $dateMessageLu = null) {
		$this->dateMessageLu = $dateMessageLu;
		return $this;
	}

	/**
	 * Set the date redir.
	 *
	 * @param DateTime $dateRedir The date redir.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDateRedir(DateTime $dateRedir = null) {
		$this->dateRedir = $dateRedir;
		return $this;
	}

	/**
	 * Set the demande a r.
	 *
	 * @param boolean $demandeAR The demande a r.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDemandeAR($demandeAR) {
		$this->demandeAR = $demandeAR;
		return $this;
	}

	/**
	 * Set the destinataires a.
	 *
	 * @param string $destinatairesA The destinataires a.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDestinatairesA($destinatairesA) {
		$this->destinatairesA = $destinatairesA;
		return $this;
	}

	/**
	 * Set the destinataires cc.
	 *
	 * @param string $destinatairesCc The destinataires cc.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setDestinatairesCc($destinatairesCc) {
		$this->destinatairesCc = $destinatairesCc;
		return $this;
	}

	/**
	 * Set the email auteur.
	 *
	 * @param string $emailAuteur The email auteur.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setEmailAuteur($emailAuteur) {
		$this->emailAuteur = $emailAuteur;
		return $this;
	}

	/**
	 * Set the groupe qualifiant.
	 *
	 * @param string $groupeQualifiant The groupe qualifiant.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setGroupeQualifiant($groupeQualifiant) {
		$this->groupeQualifiant = $groupeQualifiant;
		return $this;
	}

	/**
	 * Set the i d appel.
	 *
	 * @param int $iDAppel The i d appel.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setIDAppel($iDAppel) {
		$this->iDAppel = $iDAppel;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the message lu.
	 *
	 * @param boolean $messageLu The message lu.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setMessageLu($messageLu) {
		$this->messageLu = $messageLu;
		return $this;
	}

	/**
	 * Set the mise en somm date heure.
	 *
	 * @param DateTime $miseEnSommDateHeure The mise en somm date heure.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setMiseEnSommDateHeure(DateTime $miseEnSommDateHeure = null) {
		$this->miseEnSommDateHeure = $miseEnSommDateHeure;
		return $this;
	}

	/**
	 * Set the nature.
	 *
	 * @param string $nature The nature.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setNature($nature) {
		$this->nature = $nature;
		return $this;
	}

	/**
	 * Set the nb appels en cours.
	 *
	 * @param int $nbAppelsEnCours The nb appels en cours.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setNbAppelsEnCours($nbAppelsEnCours) {
		$this->nbAppelsEnCours = $nbAppelsEnCours;
		return $this;
	}

	/**
	 * Set the nom client.
	 *
	 * @param string $nomClient The nom client.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setNomClient($nomClient) {
		$this->nomClient = $nomClient;
		return $this;
	}

	/**
	 * Set the origine.
	 *
	 * @param string $origine The origine.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setOrigine($origine) {
		$this->origine = $origine;
		return $this;
	}

	/**
	 * Set the piece jointe.
	 *
	 * @param string $pieceJointe The piece jointe.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setPieceJointe($pieceJointe) {
		$this->pieceJointe = $pieceJointe;
		return $this;
	}

	/**
	 * Set the reponse.
	 *
	 * @param string $reponse The reponse.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setReponse($reponse) {
		$this->reponse = $reponse;
		return $this;
	}

	/**
	 * Set the sous rep ref g u i d.
	 *
	 * @param string $sousRepRefGUID The sous rep ref g u i d.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setSousRepRefGUID($sousRepRefGUID) {
		$this->sousRepRefGUID = $sousRepRefGUID;
		return $this;
	}

	/**
	 * Set the special.
	 *
	 * @param string $special The special.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setSpecial($special) {
		$this->special = $special;
		return $this;
	}

	/**
	 * Set the tel.
	 *
	 * @param string $tel The tel.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setTel($tel) {
		$this->tel = $tel;
		return $this;
	}

	/**
	 * Set the type message.
	 *
	 * @param string $typeMessage The type message.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setTypeMessage($typeMessage) {
		$this->typeMessage = $typeMessage;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

	/**
	 * Set the urgent.
	 *
	 * @param boolean $urgent The urgent.
	 * @return AppelsEnCours Returns this appels en cours.
	 */
	public function setUrgent($urgent) {
		$this->urgent = $urgent;
		return $this;
	}

}
