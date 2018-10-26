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
 * Historique appels model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class HistoriqueAppels {

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collaborateur clot.
	 *
	 * @var string
	 */
	private $codeCollaborateurClot;

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
	 * Code produit.
	 *
	 * @var string
	 */
	private $codeProduit;

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
	 * Date entree.
	 *
	 * @var DateTime
	 */
	private $dateEntree;

	/**
	 * Date sortie.
	 *
	 * @var DateTime
	 */
	private $dateSortie;

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
	 * I d historique.
	 *
	 * @var int
	 */
	private $iDHistorique;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Nature.
	 *
	 * @var string
	 */
	private $nature;

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
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the code collaborateur clot.
	 *
	 * @return string Returns the code collaborateur clot.
	 */
	public function getCodeCollaborateurClot() {
		return $this->codeCollaborateurClot;
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
	 * Get the code produit.
	 *
	 * @return string Returns the code produit.
	 */
	public function getCodeProduit() {
		return $this->codeProduit;
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
	 * Get the date entree.
	 *
	 * @return DateTime Returns the date entree.
	 */
	public function getDateEntree() {
		return $this->dateEntree;
	}

	/**
	 * Get the date sortie.
	 *
	 * @return DateTime Returns the date sortie.
	 */
	public function getDateSortie() {
		return $this->dateSortie;
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
	 * Get the i d historique.
	 *
	 * @return int Returns the i d historique.
	 */
	public function getIDHistorique() {
		return $this->iDHistorique;
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
	 * Get the nature.
	 *
	 * @return string Returns the nature.
	 */
	public function getNature() {
		return $this->nature;
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
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collaborateur clot.
	 *
	 * @param string $codeCollaborateurClot The code collaborateur clot.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setCodeCollaborateurClot($codeCollaborateurClot) {
		$this->codeCollaborateurClot = $codeCollaborateurClot;
		return $this;
	}

	/**
	 * Set the code collaborateur dest.
	 *
	 * @param string $codeCollaborateurDest The code collaborateur dest.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setCodeCollaborateurDest($codeCollaborateurDest) {
		$this->codeCollaborateurDest = $codeCollaborateurDest;
		return $this;
	}

	/**
	 * Set the code collaborateur entrant.
	 *
	 * @param string $codeCollaborateurEntrant The code collaborateur entrant.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setCodeCollaborateurEntrant($codeCollaborateurEntrant) {
		$this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
		return $this;
	}

	/**
	 * Set the code produit.
	 *
	 * @param string $codeProduit The code produit.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setCodeProduit($codeProduit) {
		$this->codeProduit = $codeProduit;
		return $this;
	}

	/**
	 * Set the confidentiel.
	 *
	 * @param boolean $confidentiel The confidentiel.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setConfidentiel($confidentiel) {
		$this->confidentiel = $confidentiel;
		return $this;
	}

	/**
	 * Set the consequence.
	 *
	 * @param string $consequence The consequence.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setConsequence($consequence) {
		$this->consequence = $consequence;
		return $this;
	}

	/**
	 * Set the date entree.
	 *
	 * @param DateTime $dateEntree The date entree.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setDateEntree(DateTime $dateEntree = null) {
		$this->dateEntree = $dateEntree;
		return $this;
	}

	/**
	 * Set the date sortie.
	 *
	 * @param DateTime $dateSortie The date sortie.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setDateSortie(DateTime $dateSortie = null) {
		$this->dateSortie = $dateSortie;
		return $this;
	}

	/**
	 * Set the email auteur.
	 *
	 * @param string $emailAuteur The email auteur.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setEmailAuteur($emailAuteur) {
		$this->emailAuteur = $emailAuteur;
		return $this;
	}

	/**
	 * Set the groupe qualifiant.
	 *
	 * @param string $groupeQualifiant The groupe qualifiant.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setGroupeQualifiant($groupeQualifiant) {
		$this->groupeQualifiant = $groupeQualifiant;
		return $this;
	}

	/**
	 * Set the i d historique.
	 *
	 * @param int $iDHistorique The i d historique.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setIDHistorique($iDHistorique) {
		$this->iDHistorique = $iDHistorique;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the nature.
	 *
	 * @param string $nature The nature.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setNature($nature) {
		$this->nature = $nature;
		return $this;
	}

	/**
	 * Set the nom client.
	 *
	 * @param string $nomClient The nom client.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setNomClient($nomClient) {
		$this->nomClient = $nomClient;
		return $this;
	}

	/**
	 * Set the origine.
	 *
	 * @param string $origine The origine.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setOrigine($origine) {
		$this->origine = $origine;
		return $this;
	}

	/**
	 * Set the piece jointe.
	 *
	 * @param string $pieceJointe The piece jointe.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setPieceJointe($pieceJointe) {
		$this->pieceJointe = $pieceJointe;
		return $this;
	}

	/**
	 * Set the reponse.
	 *
	 * @param string $reponse The reponse.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setReponse($reponse) {
		$this->reponse = $reponse;
		return $this;
	}

	/**
	 * Set the special.
	 *
	 * @param string $special The special.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setSpecial($special) {
		$this->special = $special;
		return $this;
	}

	/**
	 * Set the tel.
	 *
	 * @param string $tel The tel.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setTel($tel) {
		$this->tel = $tel;
		return $this;
	}

	/**
	 * Set the type message.
	 *
	 * @param string $typeMessage The type message.
	 * @return HistoriqueAppels Returns this historique appels.
	 */
	public function setTypeMessage($typeMessage) {
		$this->typeMessage = $typeMessage;
		return $this;
	}

}
