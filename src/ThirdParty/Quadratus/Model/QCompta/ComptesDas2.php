<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Comptes das2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesDas2 {

    /**
     * Avantage nature.
     *
     * @var float
     */
    private $avantageNature;

    /**
     * Indemnite rbt.
     *
     * @var float
     */
    private $indemniteRbt;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Nature1.
     *
     * @var string
     */
    private $nature1;

    /**
     * Nature2.
     *
     * @var string
     */
    private $nature2;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Retenue source.
     *
     * @var float
     */
    private $retenueSource;

    /**
     * Tvada.
     *
     * @var float
     */
    private $tvada;

    /**
     * Type an.
     *
     * @var string
     */
    private $typeAn;

    /**
     * Type ir.
     *
     * @var string
     */
    private $typeIr;

    /**
     * Type rs.
     *
     * @var string
     */
    private $typeRs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avantage nature.
     *
     * @return float Returns the avantage nature.
     */
    public function getAvantageNature() {
        return $this->avantageNature;
    }

    /**
     * Get the indemnite rbt.
     *
     * @return float Returns the indemnite rbt.
     */
    public function getIndemniteRbt() {
        return $this->indemniteRbt;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the nature1.
     *
     * @return string Returns the nature1.
     */
    public function getNature1() {
        return $this->nature1;
    }

    /**
     * Get the nature2.
     *
     * @return string Returns the nature2.
     */
    public function getNature2() {
        return $this->nature2;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the retenue source.
     *
     * @return float Returns the retenue source.
     */
    public function getRetenueSource() {
        return $this->retenueSource;
    }

    /**
     * Get the tvada.
     *
     * @return float Returns the tvada.
     */
    public function getTvada() {
        return $this->tvada;
    }

    /**
     * Get the type an.
     *
     * @return string Returns the type an.
     */
    public function getTypeAn() {
        return $this->typeAn;
    }

    /**
     * Get the type ir.
     *
     * @return string Returns the type ir.
     */
    public function getTypeIr() {
        return $this->typeIr;
    }

    /**
     * Get the type rs.
     *
     * @return string Returns the type rs.
     */
    public function getTypeRs() {
        return $this->typeRs;
    }

    /**
     * Set the avantage nature.
     *
     * @param float $avantageNature The avantage nature.
     */
    public function setAvantageNature($avantageNature) {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the indemnite rbt.
     *
     * @param float $indemniteRbt The indemnite rbt.
     */
    public function setIndemniteRbt($indemniteRbt) {
        $this->indemniteRbt = $indemniteRbt;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the nature1.
     *
     * @param string $nature1 The nature1.
     */
    public function setNature1($nature1) {
        $this->nature1 = $nature1;
        return $this;
    }

    /**
     * Set the nature2.
     *
     * @param string $nature2 The nature2.
     */
    public function setNature2($nature2) {
        $this->nature2 = $nature2;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the retenue source.
     *
     * @param float $retenueSource The retenue source.
     */
    public function setRetenueSource($retenueSource) {
        $this->retenueSource = $retenueSource;
        return $this;
    }

    /**
     * Set the tvada.
     *
     * @param float $tvada The tvada.
     */
    public function setTvada($tvada) {
        $this->tvada = $tvada;
        return $this;
    }

    /**
     * Set the type an.
     *
     * @param string $typeAn The type an.
     */
    public function setTypeAn($typeAn) {
        $this->typeAn = $typeAn;
        return $this;
    }

    /**
     * Set the type ir.
     *
     * @param string $typeIr The type ir.
     */
    public function setTypeIr($typeIr) {
        $this->typeIr = $typeIr;
        return $this;
    }

    /**
     * Set the type rs.
     *
     * @param string $typeRs The type rs.
     */
    public function setTypeRs($typeRs) {
        $this->typeRs = $typeRs;
        return $this;
    }
}
