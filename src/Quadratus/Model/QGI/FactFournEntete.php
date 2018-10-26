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
 * Fact fourn entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class FactFournEntete {

	/**
	 * Boni mali.
	 *
	 * @var boolean
	 */
	private $boniMali;

	/**
	 * Code journal.
	 *
	 * @var string
	 */
	private $codeJournal;

	/**
	 * Date.
	 *
	 * @var DateTime
	 */
	private $date;

	/**
	 * Folio.
	 *
	 * @var int
	 */
	private $folio;

	/**
	 * Lib auto.
	 *
	 * @var string
	 */
	private $libAuto;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Monnaie.
	 *
	 * @var string
	 */
	private $monnaie;

	/**
	 * Montant t t ccredit.
	 *
	 * @var string
	 */
	private $montantTTCcredit;

	/**
	 * Montant t t cdebit.
	 *
	 * @var string
	 */
	private $montantTTCdebit;

	/**
	 * Num doss cpta.
	 *
	 * @var string
	 */
	private $numDossCpta;

	/**
	 * Num facture.
	 *
	 * @var string
	 */
	private $numFacture;

	/**
	 * Num fournisseur.
	 *
	 * @var string
	 */
	private $numFournisseur;

	/**
	 * Num lot.
	 *
	 * @var int
	 */
	private $numLot;

	/**
	 * Num uniq.
	 *
	 * @var string
	 */
	private $numUniq;

	/**
	 * Ref image.
	 *
	 * @var string
	 */
	private $refImage;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the boni mali.
	 *
	 * @return boolean Returns the boni mali.
	 */
	public function getBoniMali() {
		return $this->boniMali;
	}

	/**
	 * Get the code journal.
	 *
	 * @return string Returns the code journal.
	 */
	public function getCodeJournal() {
		return $this->codeJournal;
	}

	/**
	 * Get the date.
	 *
	 * @return DateTime Returns the date.
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Get the folio.
	 *
	 * @return int Returns the folio.
	 */
	public function getFolio() {
		return $this->folio;
	}

	/**
	 * Get the lib auto.
	 *
	 * @return string Returns the lib auto.
	 */
	public function getLibAuto() {
		return $this->libAuto;
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
	 * Get the monnaie.
	 *
	 * @return string Returns the monnaie.
	 */
	public function getMonnaie() {
		return $this->monnaie;
	}

	/**
	 * Get the montant t t ccredit.
	 *
	 * @return string Returns the montant t t ccredit.
	 */
	public function getMontantTTCcredit() {
		return $this->montantTTCcredit;
	}

	/**
	 * Get the montant t t cdebit.
	 *
	 * @return string Returns the montant t t cdebit.
	 */
	public function getMontantTTCdebit() {
		return $this->montantTTCdebit;
	}

	/**
	 * Get the num doss cpta.
	 *
	 * @return string Returns the num doss cpta.
	 */
	public function getNumDossCpta() {
		return $this->numDossCpta;
	}

	/**
	 * Get the num facture.
	 *
	 * @return string Returns the num facture.
	 */
	public function getNumFacture() {
		return $this->numFacture;
	}

	/**
	 * Get the num fournisseur.
	 *
	 * @return string Returns the num fournisseur.
	 */
	public function getNumFournisseur() {
		return $this->numFournisseur;
	}

	/**
	 * Get the num lot.
	 *
	 * @return int Returns the num lot.
	 */
	public function getNumLot() {
		return $this->numLot;
	}

	/**
	 * Get the num uniq.
	 *
	 * @return string Returns the num uniq.
	 */
	public function getNumUniq() {
		return $this->numUniq;
	}

	/**
	 * Get the ref image.
	 *
	 * @return string Returns the ref image.
	 */
	public function getRefImage() {
		return $this->refImage;
	}

	/**
	 * Set the boni mali.
	 *
	 * @param boolean $boniMali The boni mali.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setBoniMali($boniMali) {
		$this->boniMali = $boniMali;
		return $this;
	}

	/**
	 * Set the code journal.
	 *
	 * @param string $codeJournal The code journal.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setCodeJournal($codeJournal) {
		$this->codeJournal = $codeJournal;
		return $this;
	}

	/**
	 * Set the date.
	 *
	 * @param DateTime $date The date.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setDate(DateTime $date = null) {
		$this->date = $date;
		return $this;
	}

	/**
	 * Set the folio.
	 *
	 * @param int $folio The folio.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setFolio($folio) {
		$this->folio = $folio;
		return $this;
	}

	/**
	 * Set the lib auto.
	 *
	 * @param string $libAuto The lib auto.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setLibAuto($libAuto) {
		$this->libAuto = $libAuto;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the monnaie.
	 *
	 * @param string $monnaie The monnaie.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setMonnaie($monnaie) {
		$this->monnaie = $monnaie;
		return $this;
	}

	/**
	 * Set the montant t t ccredit.
	 *
	 * @param string $montantTTCcredit The montant t t ccredit.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setMontantTTCcredit($montantTTCcredit) {
		$this->montantTTCcredit = $montantTTCcredit;
		return $this;
	}

	/**
	 * Set the montant t t cdebit.
	 *
	 * @param string $montantTTCdebit The montant t t cdebit.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setMontantTTCdebit($montantTTCdebit) {
		$this->montantTTCdebit = $montantTTCdebit;
		return $this;
	}

	/**
	 * Set the num doss cpta.
	 *
	 * @param string $numDossCpta The num doss cpta.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setNumDossCpta($numDossCpta) {
		$this->numDossCpta = $numDossCpta;
		return $this;
	}

	/**
	 * Set the num facture.
	 *
	 * @param string $numFacture The num facture.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setNumFacture($numFacture) {
		$this->numFacture = $numFacture;
		return $this;
	}

	/**
	 * Set the num fournisseur.
	 *
	 * @param string $numFournisseur The num fournisseur.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setNumFournisseur($numFournisseur) {
		$this->numFournisseur = $numFournisseur;
		return $this;
	}

	/**
	 * Set the num lot.
	 *
	 * @param int $numLot The num lot.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setNumLot($numLot) {
		$this->numLot = $numLot;
		return $this;
	}

	/**
	 * Set the num uniq.
	 *
	 * @param string $numUniq The num uniq.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setNumUniq($numUniq) {
		$this->numUniq = $numUniq;
		return $this;
	}

	/**
	 * Set the ref image.
	 *
	 * @param string $refImage The ref image.
	 * @return FactFournEntete Returns this fact fourn entete.
	 */
	public function setRefImage($refImage) {
		$this->refImage = $refImage;
		return $this;
	}

}
