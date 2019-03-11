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
 * Conventions col grilles anc model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConventionsColGrillesAnc {

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Code grille.
     *
     * @var string
     */
    private $codeGrille;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Type grille.
     *
     * @var int
     */
    private $typeGrille;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code grille.
     *
     * @return string Returns the code grille.
     */
    public function getCodeGrille() {
        return $this->codeGrille;
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
     * Get the type grille.
     *
     * @return int Returns the type grille.
     */
    public function getTypeGrille() {
        return $this->typeGrille;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     * @return ConventionsColGrillesAnc Returns this conventions col grilles anc.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code grille.
     *
     * @param string $codeGrille The code grille.
     * @return ConventionsColGrillesAnc Returns this conventions col grilles anc.
     */
    public function setCodeGrille($codeGrille) {
        $this->codeGrille = $codeGrille;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return ConventionsColGrillesAnc Returns this conventions col grilles anc.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the type grille.
     *
     * @param int $typeGrille The type grille.
     * @return ConventionsColGrillesAnc Returns this conventions col grilles anc.
     */
    public function setTypeGrille($typeGrille) {
        $this->typeGrille = $typeGrille;
        return $this;
    }
}
