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
 * Regularisation af.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegularisationAf {

    /**
     * Base af.
     *
     * @var float
     */
    private $baseAf;

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
     * @var DateTime|null
     */
    private $perBulDeb;

    /**
     * Per bul fin.
     *
     * @var DateTime|null
     */
    private $perBulFin;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the base af.
     *
     * @return float Returns the base af.
     */
    public function getBaseAf() {
        return $this->baseAf;
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
     * @return DateTime|null Returns the per bul deb.
     */
    public function getPerBulDeb() {
        return $this->perBulDeb;
    }

    /**
     * Get the per bul fin.
     *
     * @return DateTime|null Returns the per bul fin.
     */
    public function getPerBulFin() {
        return $this->perBulFin;
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
     * Set the base af.
     *
     * @param float $baseAf The base af.
     */
    public function setBaseAf($baseAf) {
        $this->baseAf = $baseAf;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the indice bul deb.
     *
     * @param int $indiceBulDeb The indice bul deb.
     */
    public function setIndiceBulDeb($indiceBulDeb) {
        $this->indiceBulDeb = $indiceBulDeb;
        return $this;
    }

    /**
     * Set the indice bul fin.
     *
     * @param int $indiceBulFin The indice bul fin.
     */
    public function setIndiceBulFin($indiceBulFin) {
        $this->indiceBulFin = $indiceBulFin;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
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
     * Set the per bul deb.
     *
     * @param DateTime|null $perBulDeb The per bul deb.
     */
    public function setPerBulDeb(DateTime $perBulDeb = null) {
        $this->perBulDeb = $perBulDeb;
        return $this;
    }

    /**
     * Set the per bul fin.
     *
     * @param DateTime|null $perBulFin The per bul fin.
     */
    public function setPerBulFin(DateTime $perBulFin = null) {
        $this->perBulFin = $perBulFin;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
