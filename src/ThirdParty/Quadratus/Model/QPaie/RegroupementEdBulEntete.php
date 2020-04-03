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
 * Regroupement ed bul entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementEdBulEntete {

    /**
     * Afficher.
     *
     * @var bool
     */
    private $afficher;

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
     * Libelle.
     *
     * @var string
     */
    private $libelle;

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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setAfficher($afficher) {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Set the code regroup ed bul.
     *
     * @param string $codeRegroupEdBul The code regroup ed bul.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setCodeRegroupEdBul($codeRegroupEdBul) {
        $this->codeRegroupEdBul = $codeRegroupEdBul;
        return $this;
    }

    /**
     * Set the code titre.
     *
     * @param string $codeTitre The code titre.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setCodeTitre($codeTitre) {
        $this->codeTitre = $codeTitre;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the quadra.
     *
     * @param bool $quadra The quadra.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setQuadra($quadra) {
        $this->quadra = $quadra;
        return $this;
    }
}
