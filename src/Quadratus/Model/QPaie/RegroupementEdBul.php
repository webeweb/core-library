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
 * Regroupement ed bul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RegroupementEdBul {

    /**
     * Afficher.
     *
     * @var boolean
     */
    private $afficher;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code regroup ed bul.
     *
     * @var string
     */
    private $codeRegroupEdBul;

    /**
     * Code titre.
     *
     * @var string
     */
    private $codeTitre;

    /**
     * Exo.
     *
     * @var boolean
     */
    private $exo;

    /**
     * Quadra.
     *
     * @var boolean
     */
    private $quadra;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the afficher.
     *
     * @return boolean Returns the afficher.
     */
    public function getAfficher() {
        return $this->afficher;
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
     * Get the code regroup ed bul.
     *
     * @return string Returns the code regroup ed bul.
     */
    public function getCodeRegroupEdBul() {
        return $this->codeRegroupEdBul;
    }

    /**
     * Get the code titre.
     *
     * @return string Returns the code titre.
     */
    public function getCodeTitre() {
        return $this->codeTitre;
    }

    /**
     * Get the exo.
     *
     * @return boolean Returns the exo.
     */
    public function getExo() {
        return $this->exo;
    }

    /**
     * Get the quadra.
     *
     * @return boolean Returns the quadra.
     */
    public function getQuadra() {
        return $this->quadra;
    }

    /**
     * Set the afficher.
     *
     * @param boolean $afficher The afficher.
     * @return RegroupementEdBul Returns this regroupement ed bul.
     */
    public function setAfficher($afficher) {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return RegroupementEdBul Returns this regroupement ed bul.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code regroup ed bul.
     *
     * @param string $codeRegroupEdBul The code regroup ed bul.
     * @return RegroupementEdBul Returns this regroupement ed bul.
     */
    public function setCodeRegroupEdBul($codeRegroupEdBul) {
        $this->codeRegroupEdBul = $codeRegroupEdBul;
        return $this;
    }

    /**
     * Set the code titre.
     *
     * @param string $codeTitre The code titre.
     * @return RegroupementEdBul Returns this regroupement ed bul.
     */
    public function setCodeTitre($codeTitre) {
        $this->codeTitre = $codeTitre;
        return $this;
    }

    /**
     * Set the exo.
     *
     * @param boolean $exo The exo.
     * @return RegroupementEdBul Returns this regroupement ed bul.
     */
    public function setExo($exo) {
        $this->exo = $exo;
        return $this;
    }

    /**
     * Set the quadra.
     *
     * @param boolean $quadra The quadra.
     * @return RegroupementEdBul Returns this regroupement ed bul.
     */
    public function setQuadra($quadra) {
        $this->quadra = $quadra;
        return $this;
    }

}
