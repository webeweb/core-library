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
 * Emp recap lodeom.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapLodeom {

    /**
     * Brut.
     *
     * @var float
     */
    private $brut;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var string
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Difference.
     *
     * @var float
     */
    private $difference;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Nbhr.
     *
     * @var float
     */
    private $nbhr;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

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
     * Reduc bul.
     *
     * @var float
     */
    private $reducBul;

    /**
     * Reduc recalc.
     *
     * @var float
     */
    private $reducRecalc;

    /**
     * Shb.
     *
     * @var float
     */
    private $shb;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the brut.
     *
     * @return float Returns the brut.
     */
    public function getBrut() {
        return $this->brut;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code etablissement.
     *
     * @return string Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the difference.
     *
     * @return float Returns the difference.
     */
    public function getDifference() {
        return $this->difference;
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
     * Get the nbhr.
     *
     * @return float Returns the nbhr.
     */
    public function getNbhr() {
        return $this->nbhr;
    }

    /**
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
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
     * Get the reduc bul.
     *
     * @return float Returns the reduc bul.
     */
    public function getReducBul() {
        return $this->reducBul;
    }

    /**
     * Get the reduc recalc.
     *
     * @return float Returns the reduc recalc.
     */
    public function getReducRecalc() {
        return $this->reducRecalc;
    }

    /**
     * Get the shb.
     *
     * @return float Returns the shb.
     */
    public function getShb() {
        return $this->shb;
    }

    /**
     * Set the brut.
     *
     * @param float $brut The brut.
     */
    public function setBrut($brut) {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param string $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the difference.
     *
     * @param float $difference The difference.
     */
    public function setDifference($difference) {
        $this->difference = $difference;
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
     * Set the nbhr.
     *
     * @param float $nbhr The nbhr.
     */
    public function setNbhr($nbhr) {
        $this->nbhr = $nbhr;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
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
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the reduc bul.
     *
     * @param float $reducBul The reduc bul.
     */
    public function setReducBul($reducBul) {
        $this->reducBul = $reducBul;
        return $this;
    }

    /**
     * Set the reduc recalc.
     *
     * @param float $reducRecalc The reduc recalc.
     */
    public function setReducRecalc($reducRecalc) {
        $this->reducRecalc = $reducRecalc;
        return $this;
    }

    /**
     * Set the shb.
     *
     * @param float $shb The shb.
     */
    public function setShb($shb) {
        $this->shb = $shb;
        return $this;
    }
}
