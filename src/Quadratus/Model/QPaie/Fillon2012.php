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
 * Fillon2012 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Fillon2012 {

    /**
     * Coeff.
     *
     * @var float
     */
    private $coeff;

    /**
     * Force.
     *
     * @var boolean
     */
    private $force;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Nb h sup fillon.
     *
     * @var float
     */
    private $nbHSupFillon;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * R m b.
     *
     * @var float
     */
    private $rMB;

    /**
     * R m b majo h e.
     *
     * @var float
     */
    private $rMBMajoHE;

    /**
     * Reduc fillon.
     *
     * @var float
     */
    private $reducFillon;

    /**
     * Reduc fillon majo h e.
     *
     * @var float
     */
    private $reducFillonMajoHE;

    /**
     * S m i c m.
     *
     * @var float
     */
    private $sMICM;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the coeff.
     *
     * @return float Returns the coeff.
     */
    public function getCoeff() {
        return $this->coeff;
    }

    /**
     * Get the force.
     *
     * @return boolean Returns the force.
     */
    public function getForce() {
        return $this->force;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the nb h sup fillon.
     *
     * @return float Returns the nb h sup fillon.
     */
    public function getNbHSupFillon() {
        return $this->nbHSupFillon;
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
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the r m b.
     *
     * @return float Returns the r m b.
     */
    public function getRMB() {
        return $this->rMB;
    }

    /**
     * Get the r m b majo h e.
     *
     * @return float Returns the r m b majo h e.
     */
    public function getRMBMajoHE() {
        return $this->rMBMajoHE;
    }

    /**
     * Get the reduc fillon.
     *
     * @return float Returns the reduc fillon.
     */
    public function getReducFillon() {
        return $this->reducFillon;
    }

    /**
     * Get the reduc fillon majo h e.
     *
     * @return float Returns the reduc fillon majo h e.
     */
    public function getReducFillonMajoHE() {
        return $this->reducFillonMajoHE;
    }

    /**
     * Get the s m i c m.
     *
     * @return float Returns the s m i c m.
     */
    public function getSMICM() {
        return $this->sMICM;
    }

    /**
     * Set the coeff.
     *
     * @param float $coeff The coeff.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setCoeff($coeff) {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Set the force.
     *
     * @param boolean $force The force.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setForce($force) {
        $this->force = $force;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb h sup fillon.
     *
     * @param float $nbHSupFillon The nb h sup fillon.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setNbHSupFillon($nbHSupFillon) {
        $this->nbHSupFillon = $nbHSupFillon;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the r m b.
     *
     * @param float $rMB The r m b.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setRMB($rMB) {
        $this->rMB = $rMB;
        return $this;
    }

    /**
     * Set the r m b majo h e.
     *
     * @param float $rMBMajoHE The r m b majo h e.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setRMBMajoHE($rMBMajoHE) {
        $this->rMBMajoHE = $rMBMajoHE;
        return $this;
    }

    /**
     * Set the reduc fillon.
     *
     * @param float $reducFillon The reduc fillon.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setReducFillon($reducFillon) {
        $this->reducFillon = $reducFillon;
        return $this;
    }

    /**
     * Set the reduc fillon majo h e.
     *
     * @param float $reducFillonMajoHE The reduc fillon majo h e.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setReducFillonMajoHE($reducFillonMajoHE) {
        $this->reducFillonMajoHE = $reducFillonMajoHE;
        return $this;
    }

    /**
     * Set the s m i c m.
     *
     * @param float $sMICM The s m i c m.
     * @return Fillon2012 Returns this fillon2012.
     */
    public function setSMICM($sMICM) {
        $this->sMICM = $sMICM;
        return $this;
    }

}
