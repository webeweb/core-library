<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

/**
 * Const tab ventil vente model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ConstTabVentilVente {

    /**
     * Code ventil article.
     *
     * @var string
     */
    private $codeVentilArticle;

    /**
     * Code ventil client.
     *
     * @var string
     */
    private $codeVentilClient;

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
     * Get the code ventil client.
     *
     * @return string Returns the code ventil client.
     */
    public function getCodeVentilClient() {
        return $this->codeVentilClient;
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
     * @return ConstTabVentilVente Returns this const tab ventil vente.
     */
    public function setCodeVentilArticle($codeVentilArticle) {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the code ventil client.
     *
     * @param string $codeVentilClient The code ventil client.
     * @return ConstTabVentilVente Returns this const tab ventil vente.
     */
    public function setCodeVentilClient($codeVentilClient) {
        $this->codeVentilClient = $codeVentilClient;
        return $this;
    }

    /**
     * Set the compte ventil.
     *
     * @param string $compteVentil The compte ventil.
     * @return ConstTabVentilVente Returns this const tab ventil vente.
     */
    public function setCompteVentil($compteVentil) {
        $this->compteVentil = $compteVentil;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ConstTabVentilVente Returns this const tab ventil vente.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

}
