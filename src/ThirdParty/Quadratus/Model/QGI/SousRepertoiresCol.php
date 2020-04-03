<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Sous repertoires col.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SousRepertoiresCol {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Num sous rep.
     *
     * @var int
     */
    private $numSousRep;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the num sous rep.
     *
     * @return int Returns the num sous rep.
     */
    public function getNumSousRep() {
        return $this->numSousRep;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return SousRepertoiresCol Returns this Sous repertoires col.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return SousRepertoiresCol Returns this Sous repertoires col.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num sous rep.
     *
     * @param int $numSousRep The num sous rep.
     * @return SousRepertoiresCol Returns this Sous repertoires col.
     */
    public function setNumSousRep($numSousRep) {
        $this->numSousRep = $numSousRep;
        return $this;
    }
}
