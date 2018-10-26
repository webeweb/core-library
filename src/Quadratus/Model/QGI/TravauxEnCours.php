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
 * Travaux en cours model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class TravauxEnCours {

	/**
	 * Cataloguee.
	 *
	 * @var boolean
	 */
	private $cataloguee;

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
	 * Date alerte.
	 *
	 * @var DateTime
	 */
	private $dateAlerte;

	/**
	 * Date butoir.
	 *
	 * @var DateTime
	 */
	private $dateButoir;

	/**
	 * Date entree.
	 *
	 * @var DateTime
	 */
	private $dateEntree;

	/**
	 * Date modif.
	 *
	 * @var DateTime
	 */
	private $dateModif;

	/**
	 * Demandeur.
	 *
	 * @var string
	 */
	private $demandeur;

	/**
	 * Envoi post it.
	 *
	 * @var boolean
	 */
	private $envoiPostIt;

	/**
	 * I d travail.
	 *
	 * @var int
	 */
	private $iDTravail;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Nom client.
	 *
	 * @var string
	 */
	private $nomClient;

	/**
	 * Piece jointe.
	 *
	 * @var string
	 */
	private $pieceJointe;

	/**
	 * Travail fait.
	 *
	 * @var boolean
	 */
	private $travailFait;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the cataloguee.
	 *
	 * @return boolean Returns the cataloguee.
	 */
	public function getCataloguee() {
		return $this->cataloguee;
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
	 * Get the date alerte.
	 *
	 * @return DateTime Returns the date alerte.
	 */
	public function getDateAlerte() {
		return $this->dateAlerte;
	}

	/**
	 * Get the date butoir.
	 *
	 * @return DateTime Returns the date butoir.
	 */
	public function getDateButoir() {
		return $this->dateButoir;
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
	 * Get the date modif.
	 *
	 * @return DateTime Returns the date modif.
	 */
	public function getDateModif() {
		return $this->dateModif;
	}

	/**
	 * Get the demandeur.
	 *
	 * @return string Returns the demandeur.
	 */
	public function getDemandeur() {
		return $this->demandeur;
	}

	/**
	 * Get the envoi post it.
	 *
	 * @return boolean Returns the envoi post it.
	 */
	public function getEnvoiPostIt() {
		return $this->envoiPostIt;
	}

	/**
	 * Get the i d travail.
	 *
	 * @return int Returns the i d travail.
	 */
	public function getIDTravail() {
		return $this->iDTravail;
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
	 * Get the nom client.
	 *
	 * @return string Returns the nom client.
	 */
	public function getNomClient() {
		return $this->nomClient;
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
	 * Get the travail fait.
	 *
	 * @return boolean Returns the travail fait.
	 */
	public function getTravailFait() {
		return $this->travailFait;
	}

	/**
	 * Set the cataloguee.
	 *
	 * @param boolean $cataloguee The cataloguee.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setCataloguee($cataloguee) {
		$this->cataloguee = $cataloguee;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collaborateur dest.
	 *
	 * @param string $codeCollaborateurDest The code collaborateur dest.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setCodeCollaborateurDest($codeCollaborateurDest) {
		$this->codeCollaborateurDest = $codeCollaborateurDest;
		return $this;
	}

	/**
	 * Set the code collaborateur entrant.
	 *
	 * @param string $codeCollaborateurEntrant The code collaborateur entrant.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setCodeCollaborateurEntrant($codeCollaborateurEntrant) {
		$this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
		return $this;
	}

	/**
	 * Set the date alerte.
	 *
	 * @param DateTime $dateAlerte The date alerte.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setDateAlerte(DateTime $dateAlerte = null) {
		$this->dateAlerte = $dateAlerte;
		return $this;
	}

	/**
	 * Set the date butoir.
	 *
	 * @param DateTime $dateButoir The date butoir.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setDateButoir(DateTime $dateButoir = null) {
		$this->dateButoir = $dateButoir;
		return $this;
	}

	/**
	 * Set the date entree.
	 *
	 * @param DateTime $dateEntree The date entree.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setDateEntree(DateTime $dateEntree = null) {
		$this->dateEntree = $dateEntree;
		return $this;
	}

	/**
	 * Set the date modif.
	 *
	 * @param DateTime $dateModif The date modif.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setDateModif(DateTime $dateModif = null) {
		$this->dateModif = $dateModif;
		return $this;
	}

	/**
	 * Set the demandeur.
	 *
	 * @param string $demandeur The demandeur.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setDemandeur($demandeur) {
		$this->demandeur = $demandeur;
		return $this;
	}

	/**
	 * Set the envoi post it.
	 *
	 * @param boolean $envoiPostIt The envoi post it.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setEnvoiPostIt($envoiPostIt) {
		$this->envoiPostIt = $envoiPostIt;
		return $this;
	}

	/**
	 * Set the i d travail.
	 *
	 * @param int $iDTravail The i d travail.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setIDTravail($iDTravail) {
		$this->iDTravail = $iDTravail;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the nom client.
	 *
	 * @param string $nomClient The nom client.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setNomClient($nomClient) {
		$this->nomClient = $nomClient;
		return $this;
	}

	/**
	 * Set the piece jointe.
	 *
	 * @param string $pieceJointe The piece jointe.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setPieceJointe($pieceJointe) {
		$this->pieceJointe = $pieceJointe;
		return $this;
	}

	/**
	 * Set the travail fait.
	 *
	 * @param boolean $travailFait The travail fait.
	 * @return TravauxEnCours Returns this travaux en cours.
	 */
	public function setTravailFait($travailFait) {
		$this->travailFait = $travailFait;
		return $this;
	}

}
