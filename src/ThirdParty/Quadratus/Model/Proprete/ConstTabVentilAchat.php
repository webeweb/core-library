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
 * Const tab ventil achat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabVentilAchat {

    /**
     * Code ventil article.
     *
     * @var string
     */
    private $codeVentilArticle;

    /**
     * Code ventil fourn.
     *
     * @var string
     */
    private $codeVentilFourn;

    /**
     * Compte ventil.
     *
     * @var string
     */
    private $compteVentil;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code ventil article.
     *
     * @return string Returns the code ventil article.
     */
    public function getCodeVentilArticle() {
        return $this->codeVentilArticle;
    }

    /**
     * Get the code ventil fourn.
     *
     * @return string Returns the code ventil fourn.
     */
    public function getCodeVentilFourn() {
        return $this->codeVentilFourn;
    }

    /**
     * Get the compte ventil.
     *
     * @return string Returns the compte ventil.
     */
    public function getCompteVentil() {
        return $this->compteVentil;
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
     * Set the code ventil article.
     *
     * @param string $codeVentilArticle The code ventil article.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setCodeVentilArticle($codeVentilArticle) {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the code ventil fourn.
     *
     * @param string $codeVentilFourn The code ventil fourn.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setCodeVentilFourn($codeVentilFourn) {
        $this->codeVentilFourn = $codeVentilFourn;
        return $this;
    }

    /**
     * Set the compte ventil.
     *
     * @param string $compteVentil The compte ventil.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setCompteVentil($compteVentil) {
        $this->compteVentil = $compteVentil;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }
}
