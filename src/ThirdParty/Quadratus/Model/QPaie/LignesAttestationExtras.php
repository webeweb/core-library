<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes attestation extras.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAttestationExtras {

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Montant iccp.
     *
     * @var float
     */
    private $montantIccp;

    /**
     * Montant ipe.
     *
     * @var float
     */
    private $montantIpe;

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
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the montant iccp.
     *
     * @return float Returns the montant iccp.
     */
    public function getMontantIccp() {
        return $this->montantIccp;
    }

    /**
     * Get the montant ipe.
     *
     * @return float Returns the montant ipe.
     */
    public function getMontantIpe() {
        return $this->montantIpe;
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
     * @param DateTime|null $dateDebut The date debut.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the montant iccp.
     *
     * @param float $montantIccp The montant iccp.
     */
    public function setMontantIccp($montantIccp) {
        $this->montantIccp = $montantIccp;
        return $this;
    }

    /**
     * Set the montant ipe.
     *
     * @param float $montantIpe The montant ipe.
     */
    public function setMontantIpe($montantIpe) {
        $this->montantIpe = $montantIpe;
        return $this;
    }

    /**
     * Set the montant precompte.
     *
     * @param float $montantPrecompte The montant precompte.
     */
    public function setMontantPrecompte($montantPrecompte) {
        $this->montantPrecompte = $montantPrecompte;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float $nbHeureTrav The nb heure trav.
     */
    public function setNbHeureTrav($nbHeureTrav) {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float $salaireBrut The salaire brut.
     */
    public function setSalaireBrut($salaireBrut) {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }
}
