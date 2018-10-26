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
 * Lignes attestation c a c m model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesAttestationCACM {

	/**
	 * Date debut.
	 *
	 * @var DateTime
	 */
	private $dateDebut;

	/**
	 * Date fin.
	 *
	 * @var DateTime
	 */
	private $dateFin;

	/**
	 * Date paiement.
	 *
	 * @var DateTime
	 */
	private $datePaiement;

	/**
	 * Montant.
	 *
	 * @var float
	 */
	private $montant;

	/**
	 * Montant precompte.
	 *
	 * @var float
	 */
	private $montantPrecompte;

	/**
	 * Nb heure trav.
	 *
	 * @var float
	 */
	private $nbHeureTrav;

	/**
	 * Nb jour trav.
	 *
	 * @var float
	 */
	private $nbJourTrav;

	/**
	 * Num ligne.
	 *
	 * @var int
	 */
	private $numLigne;

	/**
	 * Numero attestation.
	 *
	 * @var string
	 */
	private $numeroAttestation;

	/**
	 * Salaire brut.
	 *
	 * @var float
	 */
	private $salaireBrut;

	/**
	 * Type ligne.
	 *
	 * @var int
	 */
	private $typeLigne;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the date debut.
	 *
	 * @return DateTime Returns the date debut.
	 */
	public function getDateDebut() {
		return $this->dateDebut;
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
	 * Get the date paiement.
	 *
	 * @return DateTime Returns the date paiement.
	 */
	public function getDatePaiement() {
		return $this->datePaiement;
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
	 * Get the montant precompte.
	 *
	 * @return float Returns the montant precompte.
	 */
	public function getMontantPrecompte() {
		return $this->montantPrecompte;
	}

	/**
	 * Get the nb heure trav.
	 *
	 * @return float Returns the nb heure trav.
	 */
	public function getNbHeureTrav() {
		return $this->nbHeureTrav;
	}

	/**
	 * Get the nb jour trav.
	 *
	 * @return float Returns the nb jour trav.
	 */
	public function getNbJourTrav() {
		return $this->nbJourTrav;
	}

	/**
	 * Get the num ligne.
	 *
	 * @return int Returns the num ligne.
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
	 * Get the salaire brut.
	 *
	 * @return float Returns the salaire brut.
	 */
	public function getSalaireBrut() {
		return $this->salaireBrut;
	}

	/**
	 * Get the type ligne.
	 *
	 * @return int Returns the type ligne.
	 */
	public function getTypeLigne() {
		return $this->typeLigne;
	}

	/**
	 * Set the date debut.
	 *
	 * @param DateTime $dateDebut The date debut.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setDateDebut(DateTime $dateDebut = null) {
		$this->dateDebut = $dateDebut;
		return $this;
	}

	/**
	 * Set the date fin.
	 *
	 * @param DateTime $dateFin The date fin.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setDateFin(DateTime $dateFin = null) {
		$this->dateFin = $dateFin;
		return $this;
	}

	/**
	 * Set the date paiement.
	 *
	 * @param DateTime $datePaiement The date paiement.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setDatePaiement(DateTime $datePaiement = null) {
		$this->datePaiement = $datePaiement;
		return $this;
	}

	/**
	 * Set the montant.
	 *
	 * @param float $montant The montant.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setMontant($montant) {
		$this->montant = $montant;
		return $this;
	}

	/**
	 * Set the montant precompte.
	 *
	 * @param float $montantPrecompte The montant precompte.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setMontantPrecompte($montantPrecompte) {
		$this->montantPrecompte = $montantPrecompte;
		return $this;
	}

	/**
	 * Set the nb heure trav.
	 *
	 * @param float $nbHeureTrav The nb heure trav.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setNbHeureTrav($nbHeureTrav) {
		$this->nbHeureTrav = $nbHeureTrav;
		return $this;
	}

	/**
	 * Set the nb jour trav.
	 *
	 * @param float $nbJourTrav The nb jour trav.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setNbJourTrav($nbJourTrav) {
		$this->nbJourTrav = $nbJourTrav;
		return $this;
	}

	/**
	 * Set the num ligne.
	 *
	 * @param int $numLigne The num ligne.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setNumLigne($numLigne) {
		$this->numLigne = $numLigne;
		return $this;
	}

	/**
	 * Set the numero attestation.
	 *
	 * @param string $numeroAttestation The numero attestation.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setNumeroAttestation($numeroAttestation) {
		$this->numeroAttestation = $numeroAttestation;
		return $this;
	}

	/**
	 * Set the salaire brut.
	 *
	 * @param float $salaireBrut The salaire brut.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setSalaireBrut($salaireBrut) {
		$this->salaireBrut = $salaireBrut;
		return $this;
	}

	/**
	 * Set the type ligne.
	 *
	 * @param int $typeLigne The type ligne.
	 * @return LignesAttestationCACM Returns this lignes attestation c a c m.
	 */
	public function setTypeLigne($typeLigne) {
		$this->typeLigne = $typeLigne;
		return $this;
	}

}
