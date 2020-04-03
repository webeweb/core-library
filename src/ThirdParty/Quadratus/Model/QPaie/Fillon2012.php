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
 * Fillon2012.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
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
     * @var bool
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
     * @var DateTime|null
     */
    private $periode;

    /**
     * Reduc fillon.
     *
     * @var float
     */
    private $reducFillon;

    /**
     * Reduc fillon majo he.
     *
     * @var float
     */
    private $reducFillonMajoHe;

    /**
     * Rmb.
     *
     * @var float
     */
    private $rmb;

    /**
     * Rmb majo he.
     *
     * @var float
     */
    private $rmbMajoHe;

    /**
     * Smic m.
     *
     * @var float
     */
    private $smicM;

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
     * @return bool Returns the force.
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
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
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
     * Get the reduc fillon majo he.
     *
     * @return float Returns the reduc fillon majo he.
     */
    public function getReducFillonMajoHe() {
        return $this->reducFillonMajoHe;
    }

    /**
     * Get the rmb.
     *
     * @return float Returns the rmb.
     */
    public function getRmb() {
        return $this->rmb;
    }

    /**
     * Get the rmb majo he.
     *
     * @return float Returns the rmb majo he.
     */
    public function getRmbMajoHe() {
        return $this->rmbMajoHe;
    }

    /**
     * Get the smic m.
     *
     * @return float Returns the smic m.
     */
    public function getSmicM() {
        return $this->smicM;
    }

    /**
     * Set the coeff.
     *
     * @param float $coeff The coeff.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setCoeff($coeff) {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Set the force.
     *
     * @param bool $force The force.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setForce($force) {
        $this->force = $force;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb h sup fillon.
     *
     * @param float $nbHSupFillon The nb h sup fillon.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setNbHSupFillon($nbHSupFillon) {
        $this->nbHSupFillon = $nbHSupFillon;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the reduc fillon.
     *
     * @param float $reducFillon The reduc fillon.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setReducFillon($reducFillon) {
        $this->reducFillon = $reducFillon;
        return $this;
    }

    /**
     * Set the reduc fillon majo he.
     *
     * @param float $reducFillonMajoHe The reduc fillon majo he.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setReducFillonMajoHe($reducFillonMajoHe) {
        $this->reducFillonMajoHe = $reducFillonMajoHe;
        return $this;
    }

    /**
     * Set the rmb.
     *
     * @param float $rmb The rmb.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setRmb($rmb) {
        $this->rmb = $rmb;
        return $this;
    }

    /**
     * Set the rmb majo he.
     *
     * @param float $rmbMajoHe The rmb majo he.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setRmbMajoHe($rmbMajoHe) {
        $this->rmbMajoHe = $rmbMajoHe;
        return $this;
    }

    /**
     * Set the smic m.
     *
     * @param float $smicM The smic m.
     * @return Fillon2012 Returns this Fillon2012.
     */
    public function setSmicM($smicM) {
        $this->smicM = $smicM;
        return $this;
    }
}
