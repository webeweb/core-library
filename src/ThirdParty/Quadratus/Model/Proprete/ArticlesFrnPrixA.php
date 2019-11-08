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

use DateTime;

/**
 * Articles frn prix a.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrnPrixA {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Prix cond.
     *
     * @var bool
     */
    private $prixCond;

    /**
     * Px achat.
     *
     * @var float
     */
    private $pxAchat;

    /**
     * Qte achat.
     *
     * @var float
     */
    private $qteAchat;

    /**
     * Qte cond.
     *
     * @var int
     */
    private $qteCond;

    /**
     * Remise1.
     *
     * @var float
     */
    private $remise1;

    /**
     * Remise2.
     *
     * @var float
     */
    private $remise2;

    /**
     * Remise3.
     *
     * @var float
     */
    private $remise3;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code fournisseur.
     *
     * @return string Returns the code fournisseur.
     */
    public function getCodeFournisseur() {
        return $this->codeFournisseur;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the prix cond.
     *
     * @return bool Returns the prix cond.
     */
    public function getPrixCond() {
        return $this->prixCond;
    }

    /**
     * Get the px achat.
     *
     * @return float Returns the px achat.
     */
    public function getPxAchat() {
        return $this->pxAchat;
    }

    /**
     * Get the qte achat.
     *
     * @return float Returns the qte achat.
     */
    public function getQteAchat() {
        return $this->qteAchat;
    }

    /**
     * Get the qte cond.
     *
     * @return int Returns the qte cond.
     */
    public function getQteCond() {
        return $this->qteCond;
    }

    /**
     * Get the remise1.
     *
     * @return float Returns the remise1.
     */
    public function getRemise1() {
        return $this->remise1;
    }

    /**
     * Get the remise2.
     *
     * @return float Returns the remise2.
     */
    public function getRemise2() {
        return $this->remise2;
    }

    /**
     * Get the remise3.
     *
     * @return float Returns the remise3.
     */
    public function getRemise3() {
        return $this->remise3;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the prix cond.
     *
     * @param bool $prixCond The prix cond.
     */
    public function setPrixCond($prixCond) {
        $this->prixCond = $prixCond;
        return $this;
    }

    /**
     * Set the px achat.
     *
     * @param float $pxAchat The px achat.
     */
    public function setPxAchat($pxAchat) {
        $this->pxAchat = $pxAchat;
        return $this;
    }

    /**
     * Set the qte achat.
     *
     * @param float $qteAchat The qte achat.
     */
    public function setQteAchat($qteAchat) {
        $this->qteAchat = $qteAchat;
        return $this;
    }

    /**
     * Set the qte cond.
     *
     * @param int $qteCond The qte cond.
     */
    public function setQteCond($qteCond) {
        $this->qteCond = $qteCond;
        return $this;
    }

    /**
     * Set the remise1.
     *
     * @param float $remise1 The remise1.
     */
    public function setRemise1($remise1) {
        $this->remise1 = $remise1;
        return $this;
    }

    /**
     * Set the remise2.
     *
     * @param float $remise2 The remise2.
     */
    public function setRemise2($remise2) {
        $this->remise2 = $remise2;
        return $this;
    }

    /**
     * Set the remise3.
     *
     * @param float $remise3 The remise3.
     */
    public function setRemise3($remise3) {
        $this->remise3 = $remise3;
        return $this;
    }
}
