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
 * Documents model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Documents {

	/**
	 * Annee.
	 *
	 * @var string
	 */
	private $annee;

	/**
	 * Auteur.
	 *
	 * @var string
	 */
	private $auteur;

	/**
	 * Chapitre.
	 *
	 * @var string
	 */
	private $chapitre;

	/**
	 * Chrono.
	 *
	 * @var string
	 */
	private $chrono;

	/**
	 * Code nature.
	 *
	 * @var string
	 */
	private $codeNature;

	/**
	 * Date heure sys.
	 *
	 * @var DateTime
	 */
	private $dateHeureSys;

	/**
	 * Date modification.
	 *
	 * @var DateTime
	 */
	private $dateModification;

	/**
	 * Indice bulletin.
	 *
	 * @var int
	 */
	private $indiceBulletin;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

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
	 * Periode archivage.
	 *
	 * @var DateTime
	 */
	private $periodeArchivage;

	/**
	 * Publier web.
	 *
	 * @var boolean
	 */
	private $publierWeb;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the annee.
	 *
	 * @return string Returns the annee.
	 */
	public function getAnnee() {
		return $this->annee;
	}

	/**
	 * Get the auteur.
	 *
	 * @return string Returns the auteur.
	 */
	public function getAuteur() {
		return $this->auteur;
	}

	/**
	 * Get the chapitre.
	 *
	 * @return string Returns the chapitre.
	 */
	public function getChapitre() {
		return $this->chapitre;
	}

	/**
	 * Get the chrono.
	 *
	 * @return string Returns the chrono.
	 */
	public function getChrono() {
		return $this->chrono;
	}

	/**
	 * Get the code nature.
	 *
	 * @return string Returns the code nature.
	 */
	public function getCodeNature() {
		return $this->codeNature;
	}

	/**
	 * Get the date heure sys.
	 *
	 * @return DateTime Returns the date heure sys.
	 */
	public function getDateHeureSys() {
		return $this->dateHeureSys;
	}

	/**
	 * Get the date modification.
	 *
	 * @return DateTime Returns the date modification.
	 */
	public function getDateModification() {
		return $this->dateModification;
	}

	/**
	 * Get the indice bulletin.
	 *
	 * @return int Returns the indice bulletin.
	 */
	public function getIndiceBulletin() {
		return $this->indiceBulletin;
	}

	/**
	 * Get the libelle.
	 *
	 * @return string Returns the libelle.
	 */
	public function getLibelle() {
		return $this->libelle;
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
	 * Get the periode archivage.
	 *
	 * @return DateTime Returns the periode archivage.
	 */
	public function getPeriodeArchivage() {
		return $this->periodeArchivage;
	}

	/**
	 * Get the publier web.
	 *
	 * @return boolean Returns the publier web.
	 */
	public function getPublierWeb() {
		return $this->publierWeb;
	}

	/**
	 * Set the annee.
	 *
	 * @param string $annee The annee.
	 * @return Documents Returns this documents.
	 */
	public function setAnnee($annee) {
		$this->annee = $annee;
		return $this;
	}

	/**
	 * Set the auteur.
	 *
	 * @param string $auteur The auteur.
	 * @return Documents Returns this documents.
	 */
	public function setAuteur($auteur) {
		$this->auteur = $auteur;
		return $this;
	}

	/**
	 * Set the chapitre.
	 *
	 * @param string $chapitre The chapitre.
	 * @return Documents Returns this documents.
	 */
	public function setChapitre($chapitre) {
		$this->chapitre = $chapitre;
		return $this;
	}

	/**
	 * Set the chrono.
	 *
	 * @param string $chrono The chrono.
	 * @return Documents Returns this documents.
	 */
	public function setChrono($chrono) {
		$this->chrono = $chrono;
		return $this;
	}

	/**
	 * Set the code nature.
	 *
	 * @param string $codeNature The code nature.
	 * @return Documents Returns this documents.
	 */
	public function setCodeNature($codeNature) {
		$this->codeNature = $codeNature;
		return $this;
	}

	/**
	 * Set the date heure sys.
	 *
	 * @param DateTime $dateHeureSys The date heure sys.
	 * @return Documents Returns this documents.
	 */
	public function setDateHeureSys(DateTime $dateHeureSys = null) {
		$this->dateHeureSys = $dateHeureSys;
		return $this;
	}

	/**
	 * Set the date modification.
	 *
	 * @param DateTime $dateModification The date modification.
	 * @return Documents Returns this documents.
	 */
	public function setDateModification(DateTime $dateModification = null) {
		$this->dateModification = $dateModification;
		return $this;
	}

	/**
	 * Set the indice bulletin.
	 *
	 * @param int $indiceBulletin The indice bulletin.
	 * @return Documents Returns this documents.
	 */
	public function setIndiceBulletin($indiceBulletin) {
		$this->indiceBulletin = $indiceBulletin;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return Documents Returns this documents.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the lien document.
	 *
	 * @param string $lienDocument The lien document.
	 * @return Documents Returns this documents.
	 */
	public function setLienDocument($lienDocument) {
		$this->lienDocument = $lienDocument;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return Documents Returns this documents.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the periode archivage.
	 *
	 * @param DateTime $periodeArchivage The periode archivage.
	 * @return Documents Returns this documents.
	 */
	public function setPeriodeArchivage(DateTime $periodeArchivage = null) {
		$this->periodeArchivage = $periodeArchivage;
		return $this;
	}

	/**
	 * Set the publier web.
	 *
	 * @param boolean $publierWeb The publier web.
	 * @return Documents Returns this documents.
	 */
	public function setPublierWeb($publierWeb) {
		$this->publierWeb = $publierWeb;
		return $this;
	}

}
