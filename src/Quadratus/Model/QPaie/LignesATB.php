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
 * Lignes a t b model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesATB {

	/**
	 * Date versement.
	 *
	 * @var DateTime
	 */
	private $dateVersement;

	/**
	 * Montant.
	 *
	 * @var float
	 */
	private $montant;

	/**
	 * Montant cotis.
	 *
	 * @var float
	 */
	private $montantCotis;

	/**
	 * Montant euro ou franc.
	 *
	 * @var string
	 */
	private $montantEuroOuFranc;

	/**
	 * Num ligne.
	 *
	 * @var string
	 */
	private $numLigne;

	/**
	 * Numero attestation.
	 *
	 * @var string
	 */
	private $numeroAttestation;

	/**
	 * P s euro ou franc.
	 *
	 * @var string
	 */
	private $pSEuroOuFranc;

	/**
	 * Periode deb.
	 *
	 * @var DateTime
	 */
	private $periodeDeb;

	/**
	 * Periode fin.
	 *
	 * @var DateTime
	 */
	private $periodeFin;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the date versement.
	 *
	 * @return DateTime Returns the date versement.
	 */
	public function getDateVersement() {
		return $this->dateVersement;
	}

	/**
	 * Get the montant.
	 *
	 * @return float Returns the montant.
	 */
	public function getMontant() {
		return $this->montant;
	}

	/**
	 * Get the montant cotis.
	 *
	 * @return float Returns the montant cotis.
	 */
	public function getMontantCotis() {
		return $this->montantCotis;
	}

	/**
	 * Get the montant euro ou franc.
	 *
	 * @return string Returns the montant euro ou franc.
	 */
	public function getMontantEuroOuFranc() {
		return $this->montantEuroOuFranc;
	}

	/**
	 * Get the num ligne.
	 *
	 * @return string Returns the num ligne.
	 */
	public function getNumLigne() {
		return $this->numLigne;
	}

	/**
	 * Get the numero attestation.
	 *
	 * @return string Returns the numero attestation.
	 */
	public function getNumeroAttestation() {
		return $this->numeroAttestation;
	}

	/**
	 * Get the p s euro ou franc.
	 *
	 * @return string Returns the p s euro ou franc.
	 */
	public function getPSEuroOuFranc() {
		return $this->pSEuroOuFranc;
	}

	/**
	 * Get the periode deb.
	 *
	 * @return DateTime Returns the periode deb.
	 */
	public function getPeriodeDeb() {
		return $this->periodeDeb;
	}

	/**
	 * Get the periode fin.
	 *
	 * @return DateTime Returns the periode fin.
	 */
	public function getPeriodeFin() {
		return $this->periodeFin;
	}

	/**
	 * Set the date versement.
	 *
	 * @param DateTime $dateVersement The date versement.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setDateVersement(DateTime $dateVersement = null) {
		$this->dateVersement = $dateVersement;
		return $this;
	}

	/**
	 * Set the montant.
	 *
	 * @param float $montant The montant.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setMontant($montant) {
		$this->montant = $montant;
		return $this;
	}

	/**
	 * Set the montant cotis.
	 *
	 * @param float $montantCotis The montant cotis.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setMontantCotis($montantCotis) {
		$this->montantCotis = $montantCotis;
		return $this;
	}

	/**
	 * Set the montant euro ou franc.
	 *
	 * @param string $montantEuroOuFranc The montant euro ou franc.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setMontantEuroOuFranc($montantEuroOuFranc) {
		$this->montantEuroOuFranc = $montantEuroOuFranc;
		return $this;
	}

	/**
	 * Set the num ligne.
	 *
	 * @param string $numLigne The num ligne.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setNumLigne($numLigne) {
		$this->numLigne = $numLigne;
		return $this;
	}

	/**
	 * Set the numero attestation.
	 *
	 * @param string $numeroAttestation The numero attestation.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setNumeroAttestation($numeroAttestation) {
		$this->numeroAttestation = $numeroAttestation;
		return $this;
	}

	/**
	 * Set the p s euro ou franc.
	 *
	 * @param string $pSEuroOuFranc The p s euro ou franc.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setPSEuroOuFranc($pSEuroOuFranc) {
		$this->pSEuroOuFranc = $pSEuroOuFranc;
		return $this;
	}

	/**
	 * Set the periode deb.
	 *
	 * @param DateTime $periodeDeb The periode deb.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setPeriodeDeb(DateTime $periodeDeb = null) {
		$this->periodeDeb = $periodeDeb;
		return $this;
	}

	/**
	 * Set the periode fin.
	 *
	 * @param DateTime $periodeFin The periode fin.
	 * @return LignesATB Returns this lignes a t b.
	 */
	public function setPeriodeFin(DateTime $periodeFin = null) {
		$this->periodeFin = $periodeFin;
		return $this;
	}

}
