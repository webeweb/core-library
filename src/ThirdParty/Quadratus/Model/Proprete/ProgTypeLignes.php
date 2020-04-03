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

/**
 * Prog type lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ProgTypeLignes {

    /**
     * Code operation.
     *
     * @var string
     */
    private $codeOperation;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num programme.
     *
     * @var int
     */
    private $numProgramme;

    /**
     * Vitesse reelle.
     *
     * @var float
     */
    private $vitesseReelle;

    /**
     * Vitesse theorique.
     *
     * @var float
     */
    private $vitesseTheorique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code operation.
     *
     * @return string Returns the code operation.
     */
    public function getCodeOperation() {
        return $this->codeOperation;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num programme.
     *
     * @return int Returns the num programme.
     */
    public function getNumProgramme() {
        return $this->numProgramme;
    }

    /**
     * Get the vitesse reelle.
     *
     * @return float Returns the vitesse reelle.
     */
    public function getVitesseReelle() {
        return $this->vitesseReelle;
    }

    /**
     * Get the vitesse theorique.
     *
     * @return float Returns the vitesse theorique.
     */
    public function getVitesseTheorique() {
        return $this->vitesseTheorique;
    }

    /**
     * Set the code operation.
     *
     * @param string $codeOperation The code operation.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setCodeOperation($codeOperation) {
        $this->codeOperation = $codeOperation;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int $numProgramme The num programme.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setNumProgramme($numProgramme) {
        $this->numProgramme = $numProgramme;
        return $this;
    }

    /**
     * Set the vitesse reelle.
     *
     * @param float $vitesseReelle The vitesse reelle.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setVitesseReelle($vitesseReelle) {
        $this->vitesseReelle = $vitesseReelle;
        return $this;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float $vitesseTheorique The vitesse theorique.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setVitesseTheorique($vitesseTheorique) {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
