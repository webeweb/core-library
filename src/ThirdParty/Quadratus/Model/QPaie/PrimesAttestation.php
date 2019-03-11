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
 * Primes attestation model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class PrimesAttestation {

    /**
     * Euro ou franc.
     *
     * @var string
     */
    private $euroOuFranc;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

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
     * Paye le.
     *
     * @var DateTime
     */
    private $payeLe;

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
     * Get the euro ou franc.
     *
     * @return string Returns the euro ou franc.
     */
    public function getEuroOuFranc() {
        return $this->euroOuFranc;
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
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
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
     * Get the paye le.
     *
     * @return DateTime Returns the paye le.
     */
    public function getPayeLe() {
        return $this->payeLe;
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
     * Set the euro ou franc.
     *
     * @param string $euroOuFranc The euro ou franc.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setEuroOuFranc($euroOuFranc) {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the paye le.
     *
     * @param DateTime $payeLe The paye le.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setPayeLe(DateTime $payeLe = null) {
        $this->payeLe = $payeLe;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return PrimesAttestation Returns this primes attestation.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }
}
