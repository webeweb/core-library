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
 * Art var depot.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArtVarDepot {

    /**
     * Allee casier.
     *
     * @var string
     */
    private $alleeCasier;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Code variante.
     *
     * @var string
     */
    private $codeVariante;

    /**
     * Qte stock attente.
     *
     * @var float
     */
    private $qteStockAttente;

    /**
     * Qte stock maxi.
     *
     * @var float
     */
    private $qteStockMaxi;

    /**
     * Qte stock mini.
     *
     * @var float
     */
    private $qteStockMini;

    /**
     * Qte stock reel.
     *
     * @var float
     */
    private $qteStockReel;

    /**
     * Qte stock reserve.
     *
     * @var float
     */
    private $qteStockReserve;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the allee casier.
     *
     * @return string Returns the allee casier.
     */
    public function getAlleeCasier() {
        return $this->alleeCasier;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code depot.
     *
     * @return string Returns the code depot.
     */
    public function getCodeDepot() {
        return $this->codeDepot;
    }

    /**
     * Get the code variante.
     *
     * @return string Returns the code variante.
     */
    public function getCodeVariante() {
        return $this->codeVariante;
    }

    /**
     * Get the qte stock attente.
     *
     * @return float Returns the qte stock attente.
     */
    public function getQteStockAttente() {
        return $this->qteStockAttente;
    }

    /**
     * Get the qte stock maxi.
     *
     * @return float Returns the qte stock maxi.
     */
    public function getQteStockMaxi() {
        return $this->qteStockMaxi;
    }

    /**
     * Get the qte stock mini.
     *
     * @return float Returns the qte stock mini.
     */
    public function getQteStockMini() {
        return $this->qteStockMini;
    }

    /**
     * Get the qte stock reel.
     *
     * @return float Returns the qte stock reel.
     */
    public function getQteStockReel() {
        return $this->qteStockReel;
    }

    /**
     * Get the qte stock reserve.
     *
     * @return float Returns the qte stock reserve.
     */
    public function getQteStockReserve() {
        return $this->qteStockReserve;
    }

    /**
     * Set the allee casier.
     *
     * @param string $alleeCasier The allee casier.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setAlleeCasier($alleeCasier) {
        $this->alleeCasier = $alleeCasier;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string $codeVariante The code variante.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setCodeVariante($codeVariante) {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the qte stock attente.
     *
     * @param float $qteStockAttente The qte stock attente.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockAttente($qteStockAttente) {
        $this->qteStockAttente = $qteStockAttente;
        return $this;
    }

    /**
     * Set the qte stock maxi.
     *
     * @param float $qteStockMaxi The qte stock maxi.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockMaxi($qteStockMaxi) {
        $this->qteStockMaxi = $qteStockMaxi;
        return $this;
    }

    /**
     * Set the qte stock mini.
     *
     * @param float $qteStockMini The qte stock mini.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockMini($qteStockMini) {
        $this->qteStockMini = $qteStockMini;
        return $this;
    }

    /**
     * Set the qte stock reel.
     *
     * @param float $qteStockReel The qte stock reel.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockReel($qteStockReel) {
        $this->qteStockReel = $qteStockReel;
        return $this;
    }

    /**
     * Set the qte stock reserve.
     *
     * @param float $qteStockReserve The qte stock reserve.
     * @return ArtVarDepot Returns this Art var depot.
     */
    public function setQteStockReserve($qteStockReserve) {
        $this->qteStockReserve = $qteStockReserve;
        return $this;
    }
}
