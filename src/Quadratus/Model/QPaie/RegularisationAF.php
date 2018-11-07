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
 * Regularisation a f model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RegularisationAF {

    /**
     * Base a f.
     *
     * @var float
     */
    private $baseAF;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Indice bul deb.
     *
     * @var int
     */
    private $indiceBulDeb;

    /**
     * Indice bul fin.
     *
     * @var int
     */
    private $indiceBulFin;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Per bul deb.
     *
     * @var DateTime
     */
    private $perBulDeb;

    /**
     * Per bul fin.
     *
     * @var DateTime
     */
    private $perBulFin;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the base a f.
     *
     * @return float Returns the base a f.
     */
    public function getBaseAF() {
        return $this->baseAF;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the indice bul deb.
     *
     * @return int Returns the indice bul deb.
     */
    public function getIndiceBulDeb() {
        return $this->indiceBulDeb;
    }

    /**
     * Get the indice bul fin.
     *
     * @return int Returns the indice bul fin.
     */
    public function getIndiceBulFin() {
        return $this->indiceBulFin;
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
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the per bul deb.
     *
     * @return DateTime Returns the per bul deb.
     */
    public function getPerBulDeb() {
        return $this->perBulDeb;
    }

    /**
     * Get the per bul fin.
     *
     * @return DateTime Returns the per bul fin.
     */
    public function getPerBulFin() {
        return $this->perBulFin;
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
     * Set the base a f.
     *
     * @param float $baseAF The base a f.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setBaseAF($baseAF) {
        $this->baseAF = $baseAF;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the indice bul deb.
     *
     * @param int $indiceBulDeb The indice bul deb.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setIndiceBulDeb($indiceBulDeb) {
        $this->indiceBulDeb = $indiceBulDeb;
        return $this;
    }

    /**
     * Set the indice bul fin.
     *
     * @param int $indiceBulFin The indice bul fin.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setIndiceBulFin($indiceBulFin) {
        $this->indiceBulFin = $indiceBulFin;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the per bul deb.
     *
     * @param DateTime $perBulDeb The per bul deb.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setPerBulDeb(DateTime $perBulDeb = null) {
        $this->perBulDeb = $perBulDeb;
        return $this;
    }

    /**
     * Set the per bul fin.
     *
     * @param DateTime $perBulFin The per bul fin.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setPerBulFin(DateTime $perBulFin = null) {
        $this->perBulFin = $perBulFin;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return RegularisationAF Returns this regularisation a f.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

}
