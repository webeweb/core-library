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
 * Conventions col lignes grilles anc.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColLignesGrillesAnc {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Nb mois ecoules.
     *
     * @var int
     */
    private $nbMoisEcoules;

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
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code convention.
     *
     * @return string Returns the code convention.
     */
    public function getCodeConvention() {
        return $this->codeConvention;
    }

    /**
     * Get the nb mois ecoules.
     *
     * @return int Returns the nb mois ecoules.
     */
    public function getNbMoisEcoules() {
        return $this->nbMoisEcoules;
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
     * Set the code.
     *
     * @param string $code The code.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the nb mois ecoules.
     *
     * @param int $nbMoisEcoules The nb mois ecoules.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setNbMoisEcoules($nbMoisEcoules) {
        $this->nbMoisEcoules = $nbMoisEcoules;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float $valeur The valeur.
     * @return ConventionsColLignesGrillesAnc Returns this Conventions col lignes grilles anc.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }
}
