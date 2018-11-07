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
 * Lignes attestation extras model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesAttestationExtras {

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
     * Montant i c c p.
     *
     * @var float
     */
    private $montantICCP;

    /**
     * Montant i p e.
     *
     * @var float
     */
    private $montantIPE;

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
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Salaire brut.
     *
     * @var float
     */
    private $salaireBrut;

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
     * Get the montant i c c p.
     *
     * @return float Returns the montant i c c p.
     */
    public function getMontantICCP() {
        return $this->montantICCP;
    }

    /**
     * Get the montant i p e.
     *
     * @return float Returns the montant i p e.
     */
    public function getMontantIPE() {
        return $this->montantIPE;
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
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
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
     * Set the date debut.
     *
     * @param DateTime $dateDebut The date debut.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime $dateFin The date fin.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the montant i c c p.
     *
     * @param float $montantICCP The montant i c c p.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setMontantICCP($montantICCP) {
        $this->montantICCP = $montantICCP;
        return $this;
    }

    /**
     * Set the montant i p e.
     *
     * @param float $montantIPE The montant i p e.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setMontantIPE($montantIPE) {
        $this->montantIPE = $montantIPE;
        return $this;
    }

    /**
     * Set the montant precompte.
     *
     * @param float $montantPrecompte The montant precompte.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setMontantPrecompte($montantPrecompte) {
        $this->montantPrecompte = $montantPrecompte;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float $nbHeureTrav The nb heure trav.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setNbHeureTrav($nbHeureTrav) {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float $salaireBrut The salaire brut.
     * @return LignesAttestationExtras Returns this lignes attestation extras.
     */
    public function setSalaireBrut($salaireBrut) {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

}
