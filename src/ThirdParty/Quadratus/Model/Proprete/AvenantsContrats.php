<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Avenants contrats.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContrats {

    /**
     * Chrono.
     *
     * @var string
     */
    private $chrono;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Date avenant.
     *
     * @var DateTime|null
     */
    private $dateAvenant;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Num avenant saisi.
     *
     * @var int
     */
    private $numAvenantSaisi;

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Observation.
     *
     * @var string
     */
    private $observation;

    /**
     * Periode avenant.
     *
     * @var DateTime|null
     */
    private $periodeAvenant;

    /**
     * Signature employe.
     *
     * @var bool
     */
    private $signatureEmploye;

    /**
     * Type avenant.
     *
     * @var string
     */
    private $typeAvenant;

    /**
     * Type document.
     *
     * @var string
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the date avenant.
     *
     * @return DateTime|null Returns the date avenant.
     */
    public function getDateAvenant() {
        return $this->dateAvenant;
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
     * Get the num avenant saisi.
     *
     * @return int Returns the num avenant saisi.
     */
    public function getNumAvenantSaisi() {
        return $this->numAvenantSaisi;
    }

    /**
     * Get the numero avenant.
     *
     * @return int Returns the numero avenant.
     */
    public function getNumeroAvenant() {
        return $this->numeroAvenant;
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
     * Get the periode avenant.
     *
     * @return DateTime|null Returns the periode avenant.
     */
    public function getPeriodeAvenant() {
        return $this->periodeAvenant;
    }

    /**
     * Get the signature employe.
     *
     * @return bool Returns the signature employe.
     */
    public function getSignatureEmploye() {
        return $this->signatureEmploye;
    }

    /**
     * Get the type avenant.
     *
     * @return string Returns the type avenant.
     */
    public function getTypeAvenant() {
        return $this->typeAvenant;
    }

    /**
     * Get the type document.
     *
     * @return string Returns the type document.
     */
    public function getTypeDocument() {
        return $this->typeDocument;
    }

    /**
     * Set the chrono.
     *
     * @param string $chrono The chrono.
     */
    public function setChrono($chrono) {
        $this->chrono = $chrono;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date avenant.
     *
     * @param DateTime|null $dateAvenant The date avenant.
     */
    public function setDateAvenant(DateTime $dateAvenant = null) {
        $this->dateAvenant = $dateAvenant;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the num avenant saisi.
     *
     * @param int $numAvenantSaisi The num avenant saisi.
     */
    public function setNumAvenantSaisi($numAvenantSaisi) {
        $this->numAvenantSaisi = $numAvenantSaisi;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the observation.
     *
     * @param string $observation The observation.
     */
    public function setObservation($observation) {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Set the periode avenant.
     *
     * @param DateTime|null $periodeAvenant The periode avenant.
     */
    public function setPeriodeAvenant(DateTime $periodeAvenant = null) {
        $this->periodeAvenant = $periodeAvenant;
        return $this;
    }

    /**
     * Set the signature employe.
     *
     * @param bool $signatureEmploye The signature employe.
     */
    public function setSignatureEmploye($signatureEmploye) {
        $this->signatureEmploye = $signatureEmploye;
        return $this;
    }

    /**
     * Set the type avenant.
     *
     * @param string $typeAvenant The type avenant.
     */
    public function setTypeAvenant($typeAvenant) {
        $this->typeAvenant = $typeAvenant;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string $typeDocument The type document.
     */
    public function setTypeDocument($typeDocument) {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
