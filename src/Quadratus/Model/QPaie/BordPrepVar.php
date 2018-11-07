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
 * Bord prep var model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class BordPrepVar {

    /**
     * Code modele.
     *
     * @var string
     */
    private $codeModele;

    /**
     * Flag force.
     *
     * @var boolean
     */
    private $flagForce;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Num col.
     *
     * @var string
     */
    private $numCol;

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
     * Valeur.
     *
     * @var float
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code modele.
     *
     * @return string Returns the code modele.
     */
    public function getCodeModele() {
        return $this->codeModele;
    }

    /**
     * Get the flag force.
     *
     * @return boolean Returns the flag force.
     */
    public function getFlagForce() {
        return $this->flagForce;
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
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the num col.
     *
     * @return string Returns the num col.
     */
    public function getNumCol() {
        return $this->numCol;
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
     * Get the valeur.
     *
     * @return float Returns the valeur.
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Set the code modele.
     *
     * @param string $codeModele The code modele.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setCodeModele($codeModele) {
        $this->codeModele = $codeModele;
        return $this;
    }

    /**
     * Set the flag force.
     *
     * @param boolean $flagForce The flag force.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setFlagForce($flagForce) {
        $this->flagForce = $flagForce;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num col.
     *
     * @param string $numCol The num col.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setNumCol($numCol) {
        $this->numCol = $numCol;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float $valeur The valeur.
     * @return BordPrepVar Returns this bord prep var.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }

}
