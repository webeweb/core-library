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
 * Salaires attestation model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class SalairesAttestation {

    /**
     * Date paie.
     *
     * @var DateTime
     */
    private $datePaie;

    /**
     * Euro ou franc.
     *
     * @var string
     */
    private $euroOuFranc;

    /**
     * Heures trav.
     *
     * @var float
     */
    private $heuresTrav;

    /**
     * Jours non payes.
     *
     * @var float
     */
    private $joursNonPayes;

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
     * Observation.
     *
     * @var string
     */
    private $observation;

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
     * Precompte.
     *
     * @var float
     */
    private $precompte;

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
     * Get the date paie.
     *
     * @return DateTime Returns the date paie.
     */
    public function getDatePaie() {
        return $this->datePaie;
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
     * Get the heures trav.
     *
     * @return float Returns the heures trav.
     */
    public function getHeuresTrav() {
        return $this->heuresTrav;
    }

    /**
     * Get the jours non payes.
     *
     * @return float Returns the jours non payes.
     */
    public function getJoursNonPayes() {
        return $this->joursNonPayes;
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
     * Get the observation.
     *
     * @return string Returns the observation.
     */
    public function getObservation() {
        return $this->observation;
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
     * Get the precompte.
     *
     * @return float Returns the precompte.
     */
    public function getPrecompte() {
        return $this->precompte;
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
     * Set the date paie.
     *
     * @param DateTime $datePaie The date paie.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setDatePaie(DateTime $datePaie = null) {
        $this->datePaie = $datePaie;
        return $this;
    }

    /**
     * Set the euro ou franc.
     *
     * @param string $euroOuFranc The euro ou franc.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setEuroOuFranc($euroOuFranc) {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }

    /**
     * Set the heures trav.
     *
     * @param float $heuresTrav The heures trav.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setHeuresTrav($heuresTrav) {
        $this->heuresTrav = $heuresTrav;
        return $this;
    }

    /**
     * Set the jours non payes.
     *
     * @param float $joursNonPayes The jours non payes.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setJoursNonPayes($joursNonPayes) {
        $this->joursNonPayes = $joursNonPayes;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the observation.
     *
     * @param string $observation The observation.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setObservation($observation) {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the precompte.
     *
     * @param float $precompte The precompte.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setPrecompte($precompte) {
        $this->precompte = $precompte;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float $salaireBrut The salaire brut.
     * @return SalairesAttestation Returns this salaires attestation.
     */
    public function setSalaireBrut($salaireBrut) {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

}
