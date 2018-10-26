<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Visite medicale ligne model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class VisiteMedicaleLigne {

	/**
	 * Code medecine travail.
	 *
	 * @var string
	 */
	private $codeMedecineTravail;

	/**
	 * Code session.
	 *
	 * @var string
	 */
	private $codeSession;

	/**
	 * Commentaire.
	 *
	 * @var string
	 */
	private $commentaire;

	/**
	 * Date visite.
	 *
	 * @var DateTime
	 */
	private $dateVisite;

	/**
	 * Duree visite.
	 *
	 * @var float
	 */
	private $dureeVisite;

	/**
	 * Etat visite.
	 *
	 * @var string
	 */
	private $etatVisite;

	/**
	 * Heure visite.
	 *
	 * @var DateTime
	 */
	private $heureVisite;

	/**
	 * Lien document.
	 *
	 * @var string
	 */
	private $lienDocument;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Tel1.
	 *
	 * @var string
	 */
	private $tel1;

	/**
	 * Type ligne.
	 *
	 * @var string
	 */
	private $typeLigne;

	/**
	 * Type visite.
	 *
	 * @var string
	 */
	private $typeVisite;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code medecine travail.
	 *
	 * @return string Returns the code medecine travail.
	 */
	public function getCodeMedecineTravail() {
		return $this->codeMedecineTravail;
	}

	/**
	 * Get the code session.
	 *
	 * @return string Returns the code session.
	 */
	public function getCodeSession() {
		return $this->codeSession;
	}

	/**
	 * Get the commentaire.
	 *
	 * @return string Returns the commentaire.
	 */
	public function getCommentaire() {
		return $this->commentaire;
	}

	/**
	 * Get the date visite.
	 *
	 * @return DateTime Returns the date visite.
	 */
	public function getDateVisite() {
		return $this->dateVisite;
	}

	/**
	 * Get the duree visite.
	 *
	 * @return float Returns the duree visite.
	 */
	public function getDureeVisite() {
		return $this->dureeVisite;
	}

	/**
	 * Get the etat visite.
	 *
	 * @return string Returns the etat visite.
	 */
	public function getEtatVisite() {
		return $this->etatVisite;
	}

	/**
	 * Get the heure visite.
	 *
	 * @return DateTime Returns the heure visite.
	 */
	public function getHeureVisite() {
		return $this->heureVisite;
	}

	/**
	 * Get the lien document.
	 *
	 * @return string Returns the lien document.
	 */
	public function getLienDocument() {
		return $this->lienDocument;
	}

	/**
	 * Get the numero employe.
	 *
	 * @return string Returns the numero employe.
	 */
	public function getNumeroEmploye() {
		return $this->numeroEmploye;
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
	 * Get the type ligne.
	 *
	 * @return string Returns the type ligne.
	 */
	public function getTypeLigne() {
		return $this->typeLigne;
	}

	/**
	 * Get the type visite.
	 *
	 * @return string Returns the type visite.
	 */
	public function getTypeVisite() {
		return $this->typeVisite;
	}

	/**
	 * Set the code medecine travail.
	 *
	 * @param string $codeMedecineTravail The code medecine travail.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setCodeMedecineTravail($codeMedecineTravail) {
		$this->codeMedecineTravail = $codeMedecineTravail;
		return $this;
	}

	/**
	 * Set the code session.
	 *
	 * @param string $codeSession The code session.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setCodeSession($codeSession) {
		$this->codeSession = $codeSession;
		return $this;
	}

	/**
	 * Set the commentaire.
	 *
	 * @param string $commentaire The commentaire.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;
		return $this;
	}

	/**
	 * Set the date visite.
	 *
	 * @param DateTime $dateVisite The date visite.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setDateVisite(DateTime $dateVisite = null) {
		$this->dateVisite = $dateVisite;
		return $this;
	}

	/**
	 * Set the duree visite.
	 *
	 * @param float $dureeVisite The duree visite.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setDureeVisite($dureeVisite) {
		$this->dureeVisite = $dureeVisite;
		return $this;
	}

	/**
	 * Set the etat visite.
	 *
	 * @param string $etatVisite The etat visite.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setEtatVisite($etatVisite) {
		$this->etatVisite = $etatVisite;
		return $this;
	}

	/**
	 * Set the heure visite.
	 *
	 * @param DateTime $heureVisite The heure visite.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setHeureVisite(DateTime $heureVisite = null) {
		$this->heureVisite = $heureVisite;
		return $this;
	}

	/**
	 * Set the lien document.
	 *
	 * @param string $lienDocument The lien document.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setLienDocument($lienDocument) {
		$this->lienDocument = $lienDocument;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the tel1.
	 *
	 * @param string $tel1 The tel1.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setTel1($tel1) {
		$this->tel1 = $tel1;
		return $this;
	}

	/**
	 * Set the type ligne.
	 *
	 * @param string $typeLigne The type ligne.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setTypeLigne($typeLigne) {
		$this->typeLigne = $typeLigne;
		return $this;
	}

	/**
	 * Set the type visite.
	 *
	 * @param string $typeVisite The type visite.
	 * @return VisiteMedicaleLigne Returns this visite medicale ligne.
	 */
	public function setTypeVisite($typeVisite) {
		$this->typeVisite = $typeVisite;
		return $this;
	}

}
