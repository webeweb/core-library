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
 * Histo transf paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoTransfPaie {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Ecart cumule.
     *
     * @var float
     */
    private $ecartCumule;

    /**
     * Hcr payees.
     *
     * @var bool
     */
    private $hcrPayees;

    /**
     * Hnp compl h.
     *
     * @var float
     */
    private $hnpComplH;

    /**
     * Hnphc11.
     *
     * @var float
     */
    private $hnphc11;

    /**
     * Hnphc25.
     *
     * @var float
     */
    private $hnphc25;

    /**
     * Hnphc33.
     *
     * @var float
     */
    private $hnphc33;

    /**
     * Nb compl h.
     *
     * @var float
     */
    private $nbComplH;

    /**
     * Nb h abs.
     *
     * @var float
     */
    private $nbHAbs;

    /**
     * Nb h abs jf.
     *
     * @var float
     */
    private $nbHAbsJf;

    /**
     * Nb h compl.
     *
     * @var float
     */
    private $nbHCompl;

    /**
     * Nb h rempl.
     *
     * @var float
     */
    private $nbHRempl;

    /**
     * Nb hprevues.
     *
     * @var float
     */
    private $nbHprevues;

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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the ecart cumule.
     *
     * @return float Returns the ecart cumule.
     */
    public function getEcartCumule() {
        return $this->ecartCumule;
    }

    /**
     * Get the hcr payees.
     *
     * @return bool Returns the hcr payees.
     */
    public function getHcrPayees() {
        return $this->hcrPayees;
    }

    /**
     * Get the hnp compl h.
     *
     * @return float Returns the hnp compl h.
     */
    public function getHnpComplH() {
        return $this->hnpComplH;
    }

    /**
     * Get the hnphc11.
     *
     * @return float Returns the hnphc11.
     */
    public function getHnphc11() {
        return $this->hnphc11;
    }

    /**
     * Get the hnphc25.
     *
     * @return float Returns the hnphc25.
     */
    public function getHnphc25() {
        return $this->hnphc25;
    }

    /**
     * Get the hnphc33.
     *
     * @return float Returns the hnphc33.
     */
    public function getHnphc33() {
        return $this->hnphc33;
    }

    /**
     * Get the nb compl h.
     *
     * @return float Returns the nb compl h.
     */
    public function getNbComplH() {
        return $this->nbComplH;
    }

    /**
     * Get the nb h abs.
     *
     * @return float Returns the nb h abs.
     */
    public function getNbHAbs() {
        return $this->nbHAbs;
    }

    /**
     * Get the nb h abs jf.
     *
     * @return float Returns the nb h abs jf.
     */
    public function getNbHAbsJf() {
        return $this->nbHAbsJf;
    }

    /**
     * Get the nb h compl.
     *
     * @return float Returns the nb h compl.
     */
    public function getNbHCompl() {
        return $this->nbHCompl;
    }

    /**
     * Get the nb h rempl.
     *
     * @return float Returns the nb h rempl.
     */
    public function getNbHRempl() {
        return $this->nbHRempl;
    }

    /**
     * Get the nb hprevues.
     *
     * @return float Returns the nb hprevues.
     */
    public function getNbHprevues() {
        return $this->nbHprevues;
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
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the ecart cumule.
     *
     * @param float $ecartCumule The ecart cumule.
     */
    public function setEcartCumule($ecartCumule) {
        $this->ecartCumule = $ecartCumule;
        return $this;
    }

    /**
     * Set the hcr payees.
     *
     * @param bool $hcrPayees The hcr payees.
     */
    public function setHcrPayees($hcrPayees) {
        $this->hcrPayees = $hcrPayees;
        return $this;
    }

    /**
     * Set the hnp compl h.
     *
     * @param float $hnpComplH The hnp compl h.
     */
    public function setHnpComplH($hnpComplH) {
        $this->hnpComplH = $hnpComplH;
        return $this;
    }

    /**
     * Set the hnphc11.
     *
     * @param float $hnphc11 The hnphc11.
     */
    public function setHnphc11($hnphc11) {
        $this->hnphc11 = $hnphc11;
        return $this;
    }

    /**
     * Set the hnphc25.
     *
     * @param float $hnphc25 The hnphc25.
     */
    public function setHnphc25($hnphc25) {
        $this->hnphc25 = $hnphc25;
        return $this;
    }

    /**
     * Set the hnphc33.
     *
     * @param float $hnphc33 The hnphc33.
     */
    public function setHnphc33($hnphc33) {
        $this->hnphc33 = $hnphc33;
        return $this;
    }

    /**
     * Set the nb compl h.
     *
     * @param float $nbComplH The nb compl h.
     */
    public function setNbComplH($nbComplH) {
        $this->nbComplH = $nbComplH;
        return $this;
    }

    /**
     * Set the nb h abs.
     *
     * @param float $nbHAbs The nb h abs.
     */
    public function setNbHAbs($nbHAbs) {
        $this->nbHAbs = $nbHAbs;
        return $this;
    }

    /**
     * Set the nb h abs jf.
     *
     * @param float $nbHAbsJf The nb h abs jf.
     */
    public function setNbHAbsJf($nbHAbsJf) {
        $this->nbHAbsJf = $nbHAbsJf;
        return $this;
    }

    /**
     * Set the nb h compl.
     *
     * @param float $nbHCompl The nb h compl.
     */
    public function setNbHCompl($nbHCompl) {
        $this->nbHCompl = $nbHCompl;
        return $this;
    }

    /**
     * Set the nb h rempl.
     *
     * @param float $nbHRempl The nb h rempl.
     */
    public function setNbHRempl($nbHRempl) {
        $this->nbHRempl = $nbHRempl;
        return $this;
    }

    /**
     * Set the nb hprevues.
     *
     * @param float $nbHprevues The nb hprevues.
     */
    public function setNbHprevues($nbHprevues) {
        $this->nbHprevues = $nbHprevues;
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
