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

/**
 * Lignes grilles anc model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesGrillesAnc {

    /**
     * Code grille.
     *
     * @var string
     */
    private $codeGrille;

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
     * Get the code grille.
     *
     * @return string Returns the code grille.
     */
    public function getCodeGrille() {
        return $this->codeGrille;
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
     * Set the code grille.
     *
     * @param string $codeGrille The code grille.
     * @return LignesGrillesAnc Returns this lignes grilles anc.
     */
    public function setCodeGrille($codeGrille) {
        $this->codeGrille = $codeGrille;
        return $this;
    }

    /**
     * Set the nb mois ecoules.
     *
     * @param int $nbMoisEcoules The nb mois ecoules.
     * @return LignesGrillesAnc Returns this lignes grilles anc.
     */
    public function setNbMoisEcoules($nbMoisEcoules) {
        $this->nbMoisEcoules = $nbMoisEcoules;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float $valeur The valeur.
     * @return LignesGrillesAnc Returns this lignes grilles anc.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }

}
