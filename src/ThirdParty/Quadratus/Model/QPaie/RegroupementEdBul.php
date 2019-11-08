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
 * Regroupement ed bul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementEdBul {

    /**
     * Afficher.
     *
     * @var bool
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
     * @var bool
     */
    private $exo;

    /**
     * Quadra.
     *
     * @var bool
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
     * @return bool Returns the afficher.
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
     * @return bool Returns the exo.
     */
    public function getExo() {
        return $this->exo;
    }

    /**
     * Get the quadra.
     *
     * @return bool Returns the quadra.
     */
    public function getQuadra() {
        return $this->quadra;
    }

    /**
     * Set the afficher.
     *
     * @param bool $afficher The afficher.
     */
    public function setAfficher($afficher) {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code regroup ed bul.
     *
     * @param string $codeRegroupEdBul The code regroup ed bul.
     */
    public function setCodeRegroupEdBul($codeRegroupEdBul) {
        $this->codeRegroupEdBul = $codeRegroupEdBul;
        return $this;
    }

    /**
     * Set the code titre.
     *
     * @param string $codeTitre The code titre.
     */
    public function setCodeTitre($codeTitre) {
        $this->codeTitre = $codeTitre;
        return $this;
    }

    /**
     * Set the exo.
     *
     * @param bool $exo The exo.
     */
    public function setExo($exo) {
        $this->exo = $exo;
        return $this;
    }

    /**
     * Set the quadra.
     *
     * @param bool $quadra The quadra.
     */
    public function setQuadra($quadra) {
        $this->quadra = $quadra;
        return $this;
    }
}
