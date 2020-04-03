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

/**
 * Variables paie emp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class VariablesPaieEmp {

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Valeur1.
     *
     * @var float
     */
    private $valeur1;

    /**
     * Valeur2.
     *
     * @var float
     */
    private $valeur2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the valeur1.
     *
     * @return float Returns the valeur1.
     */
    public function getValeur1() {
        return $this->valeur1;
    }

    /**
     * Get the valeur2.
     *
     * @return float Returns the valeur2.
     */
    public function getValeur2() {
        return $this->valeur2;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float $valeur1 The valeur1.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setValeur1($valeur1) {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float $valeur2 The valeur2.
     * @return VariablesPaieEmp Returns this Variables paie emp.
     */
    public function setValeur2($valeur2) {
        $this->valeur2 = $valeur2;
        return $this;
    }
}
