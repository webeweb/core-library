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
 * Conventions col libelles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class ConventionsColLibelles {

    /**
     * Active.
     *
     * @var boolean
     */
    private $active;

    /**
     * Categ salarie.
     *
     * @var int
     */
    private $categSalarie;

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Frais sante a m.
     *
     * @var boolean
     */
    private $fraisSanteAM;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

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
     * Get the active.
     *
     * @return boolean Returns the active.
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Get the categ salarie.
     *
     * @return int Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
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
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the frais sante a m.
     *
     * @return boolean Returns the frais sante a m.
     */
    public function getFraisSanteAM() {
        return $this->fraisSanteAM;
    }

    /**
     * Get the indice categ.
     *
     * @return int Returns the indice categ.
     */
    public function getIndiceCateg() {
        return $this->indiceCateg;
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
     * Get the position.
     *
     * @return int Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the active.
     *
     * @param boolean $active The active.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param int $categSalarie The categ salarie.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the frais sante a m.
     *
     * @param boolean $fraisSanteAM The frais sante a m.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setFraisSanteAM($fraisSanteAM) {
        $this->fraisSanteAM = $fraisSanteAM;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int $position The position.
     * @return ConventionsColLibelles Returns this conventions col libelles.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

}
