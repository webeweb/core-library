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
 * Const tab tva vente model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabTvaVente {

    /**
     * Code tva article.
     *
     * @var string
     */
    private $codeTvaArticle;

    /**
     * Code tva client.
     *
     * @var string
     */
    private $codeTvaClient;

    /**
     * Compte tva.
     *
     * @var string
     */
    private $compteTva;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Taux tva.
     *
     * @var float
     */
    private $tauxTva;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code tva article.
     *
     * @return string Returns the code tva article.
     */
    public function getCodeTvaArticle() {
        return $this->codeTvaArticle;
    }

    /**
     * Get the code tva client.
     *
     * @return string Returns the code tva client.
     */
    public function getCodeTvaClient() {
        return $this->codeTvaClient;
    }

    /**
     * Get the compte tva.
     *
     * @return string Returns the compte tva.
     */
    public function getCompteTva() {
        return $this->compteTva;
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
     * Get the taux tva.
     *
     * @return float Returns the taux tva.
     */
    public function getTauxTva() {
        return $this->tauxTva;
    }

    /**
     * Set the code tva article.
     *
     * @param string $codeTvaArticle The code tva article.
     * @return ConstTabTvaVente Returns this const tab tva vente.
     */
    public function setCodeTvaArticle($codeTvaArticle) {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }

    /**
     * Set the code tva client.
     *
     * @param string $codeTvaClient The code tva client.
     * @return ConstTabTvaVente Returns this const tab tva vente.
     */
    public function setCodeTvaClient($codeTvaClient) {
        $this->codeTvaClient = $codeTvaClient;
        return $this;
    }

    /**
     * Set the compte tva.
     *
     * @param string $compteTva The compte tva.
     * @return ConstTabTvaVente Returns this const tab tva vente.
     */
    public function setCompteTva($compteTva) {
        $this->compteTva = $compteTva;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ConstTabTvaVente Returns this const tab tva vente.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float $tauxTva The taux tva.
     * @return ConstTabTvaVente Returns this const tab tva vente.
     */
    public function setTauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
        return $this;
    }
}
