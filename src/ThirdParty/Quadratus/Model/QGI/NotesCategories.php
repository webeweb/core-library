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
 * Notes categories.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class NotesCategories {

    /**
     * Code categorie.
     *
     * @var string
     */
    private $codeCategorie;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Nom categorie.
     *
     * @var string
     */
    private $nomCategorie;

    /**
     * Position.
     *
     * @var int
     */
    private $position;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code categorie.
     *
     * @return string Returns the code categorie.
     */
    public function getCodeCategorie() {
        return $this->codeCategorie;
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
     * Get the nom categorie.
     *
     * @return string Returns the nom categorie.
     */
    public function getNomCategorie() {
        return $this->nomCategorie;
    }

    /**
     * Get the position.
     *
     * @return int Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the code categorie.
     *
     * @param string $codeCategorie The code categorie.
     */
    public function setCodeCategorie($codeCategorie) {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nom categorie.
     *
     * @param string $nomCategorie The nom categorie.
     */
    public function setNomCategorie($nomCategorie) {
        $this->nomCategorie = $nomCategorie;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int $position The position.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }
}
