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
 * Article fournisseur model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticleFournisseur {

    /**
     * Avt der code devise.
     *
     * @var string
     */
    private $avtDerCodeDevise;

    /**
     * Avt der date achat.
     *
     * @var DateTime
     */
    private $avtDerDateAchat;

    /**
     * Avt der euros.
     *
     * @var bool
     */
    private $avtDerEuros;

    /**
     * Avt der px achat.
     *
     * @var float
     */
    private $avtDerPxAchat;

    /**
     * Avt der qte achat.
     *
     * @var float
     */
    private $avtDerQteAchat;

    /**
     * Avt der remise1.
     *
     * @var float
     */
    private $avtDerRemise1;

    /**
     * Avt der remise2.
     *
     * @var float
     */
    private $avtDerRemise2;

    /**
     * Avt der remise3.
     *
     * @var float
     */
    private $avtDerRemise3;

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
     * Commentaires.
     *
     * @var string
     */
    private $commentaires;

    /**
     * Conditionnement.
     *
     * @var string
     */
    private $conditionnement;

    /**
     * Delai le.
     *
     * @var int
     */
    private $delaiLe;

    /**
     * Delai nombre.
     *
     * @var int
     */
    private $delaiNombre;

    /**
     * Delai type.
     *
     * @var int
     */
    private $delaiType;

    /**
     * Der code devise.
     *
     * @var string
     */
    private $derCodeDevise;

    /**
     * Der date achat.
     *
     * @var DateTime
     */
    private $derDateAchat;

    /**
     * Der euros.
     *
     * @var bool
     */
    private $derEuros;

    /**
     * Der px achat.
     *
     * @var float
     */
    private $derPxAchat;

    /**
     * Der qte achat.
     *
     * @var float
     */
    private $derQteAchat;

    /**
     * Der remise1.
     *
     * @var float
     */
    private $derRemise1;

    /**
     * Der remise2.
     *
     * @var float
     */
    private $derRemise2;

    /**
     * Der remise3.
     *
     * @var float
     */
    private $derRemise3;

    /**
     * Mini code devise.
     *
     * @var string
     */
    private $miniCodeDevise;

    /**
     * Mini date achat.
     *
     * @var DateTime
     */
    private $miniDateAchat;

    /**
     * Mini euros.
     *
     * @var bool
     */
    private $miniEuros;

    /**
     * Mini px achat.
     *
     * @var float
     */
    private $miniPxAchat;

    /**
     * Mini qte achat.
     *
     * @var float
     */
    private $miniQteAchat;

    /**
     * Mini remise1.
     *
     * @var float
     */
    private $miniRemise1;

    /**
     * Mini remise2.
     *
     * @var float
     */
    private $miniRemise2;

    /**
     * Mini remise3.
     *
     * @var float
     */
    private $miniRemise3;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Qte economique.
     *
     * @var float
     */
    private $qteEconomique;

    /**
     * Ref article fournisseur.
     *
     * @var string
     */
    private $refArticleFournisseur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avt der code devise.
     *
     * @return string Returns the avt der code devise.
     */
    public function getAvtDerCodeDevise() {
        return $this->avtDerCodeDevise;
    }

    /**
     * Get the avt der date achat.
     *
     * @return DateTime Returns the avt der date achat.
     */
    public function getAvtDerDateAchat() {
        return $this->avtDerDateAchat;
    }

    /**
     * Get the avt der euros.
     *
     * @return bool Returns the avt der euros.
     */
    public function getAvtDerEuros() {
        return $this->avtDerEuros;
    }

    /**
     * Get the avt der px achat.
     *
     * @return float Returns the avt der px achat.
     */
    public function getAvtDerPxAchat() {
        return $this->avtDerPxAchat;
    }

    /**
     * Get the avt der qte achat.
     *
     * @return float Returns the avt der qte achat.
     */
    public function getAvtDerQteAchat() {
        return $this->avtDerQteAchat;
    }

    /**
     * Get the avt der remise1.
     *
     * @return float Returns the avt der remise1.
     */
    public function getAvtDerRemise1() {
        return $this->avtDerRemise1;
    }

    /**
     * Get the avt der remise2.
     *
     * @return float Returns the avt der remise2.
     */
    public function getAvtDerRemise2() {
        return $this->avtDerRemise2;
    }

    /**
     * Get the avt der remise3.
     *
     * @return float Returns the avt der remise3.
     */
    public function getAvtDerRemise3() {
        return $this->avtDerRemise3;
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
     * Get the commentaires.
     *
     * @return string Returns the commentaires.
     */
    public function getCommentaires() {
        return $this->commentaires;
    }

    /**
     * Get the conditionnement.
     *
     * @return string Returns the conditionnement.
     */
    public function getConditionnement() {
        return $this->conditionnement;
    }

    /**
     * Get the delai le.
     *
     * @return int Returns the delai le.
     */
    public function getDelaiLe() {
        return $this->delaiLe;
    }

    /**
     * Get the delai nombre.
     *
     * @return int Returns the delai nombre.
     */
    public function getDelaiNombre() {
        return $this->delaiNombre;
    }

    /**
     * Get the delai type.
     *
     * @return int Returns the delai type.
     */
    public function getDelaiType() {
        return $this->delaiType;
    }

    /**
     * Get the der code devise.
     *
     * @return string Returns the der code devise.
     */
    public function getDerCodeDevise() {
        return $this->derCodeDevise;
    }

    /**
     * Get the der date achat.
     *
     * @return DateTime Returns the der date achat.
     */
    public function getDerDateAchat() {
        return $this->derDateAchat;
    }

    /**
     * Get the der euros.
     *
     * @return bool Returns the der euros.
     */
    public function getDerEuros() {
        return $this->derEuros;
    }

    /**
     * Get the der px achat.
     *
     * @return float Returns the der px achat.
     */
    public function getDerPxAchat() {
        return $this->derPxAchat;
    }

    /**
     * Get the der qte achat.
     *
     * @return float Returns the der qte achat.
     */
    public function getDerQteAchat() {
        return $this->derQteAchat;
    }

    /**
     * Get the der remise1.
     *
     * @return float Returns the der remise1.
     */
    public function getDerRemise1() {
        return $this->derRemise1;
    }

    /**
     * Get the der remise2.
     *
     * @return float Returns the der remise2.
     */
    public function getDerRemise2() {
        return $this->derRemise2;
    }

    /**
     * Get the der remise3.
     *
     * @return float Returns the der remise3.
     */
    public function getDerRemise3() {
        return $this->derRemise3;
    }

    /**
     * Get the mini code devise.
     *
     * @return string Returns the mini code devise.
     */
    public function getMiniCodeDevise() {
        return $this->miniCodeDevise;
    }

    /**
     * Get the mini date achat.
     *
     * @return DateTime Returns the mini date achat.
     */
    public function getMiniDateAchat() {
        return $this->miniDateAchat;
    }

    /**
     * Get the mini euros.
     *
     * @return bool Returns the mini euros.
     */
    public function getMiniEuros() {
        return $this->miniEuros;
    }

    /**
     * Get the mini px achat.
     *
     * @return float Returns the mini px achat.
     */
    public function getMiniPxAchat() {
        return $this->miniPxAchat;
    }

    /**
     * Get the mini qte achat.
     *
     * @return float Returns the mini qte achat.
     */
    public function getMiniQteAchat() {
        return $this->miniQteAchat;
    }

    /**
     * Get the mini remise1.
     *
     * @return float Returns the mini remise1.
     */
    public function getMiniRemise1() {
        return $this->miniRemise1;
    }

    /**
     * Get the mini remise2.
     *
     * @return float Returns the mini remise2.
     */
    public function getMiniRemise2() {
        return $this->miniRemise2;
    }

    /**
     * Get the mini remise3.
     *
     * @return float Returns the mini remise3.
     */
    public function getMiniRemise3() {
        return $this->miniRemise3;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Get the qte economique.
     *
     * @return float Returns the qte economique.
     */
    public function getQteEconomique() {
        return $this->qteEconomique;
    }

    /**
     * Get the ref article fournisseur.
     *
     * @return string Returns the ref article fournisseur.
     */
    public function getRefArticleFournisseur() {
        return $this->refArticleFournisseur;
    }

    /**
     * Set the avt der code devise.
     *
     * @param string $avtDerCodeDevise The avt der code devise.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerCodeDevise($avtDerCodeDevise) {
        $this->avtDerCodeDevise = $avtDerCodeDevise;
        return $this;
    }

    /**
     * Set the avt der date achat.
     *
     * @param DateTime $avtDerDateAchat The avt der date achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerDateAchat(DateTime $avtDerDateAchat = null) {
        $this->avtDerDateAchat = $avtDerDateAchat;
        return $this;
    }

    /**
     * Set the avt der euros.
     *
     * @param bool $avtDerEuros The avt der euros.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerEuros($avtDerEuros) {
        $this->avtDerEuros = $avtDerEuros;
        return $this;
    }

    /**
     * Set the avt der px achat.
     *
     * @param float $avtDerPxAchat The avt der px achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerPxAchat($avtDerPxAchat) {
        $this->avtDerPxAchat = $avtDerPxAchat;
        return $this;
    }

    /**
     * Set the avt der qte achat.
     *
     * @param float $avtDerQteAchat The avt der qte achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerQteAchat($avtDerQteAchat) {
        $this->avtDerQteAchat = $avtDerQteAchat;
        return $this;
    }

    /**
     * Set the avt der remise1.
     *
     * @param float $avtDerRemise1 The avt der remise1.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerRemise1($avtDerRemise1) {
        $this->avtDerRemise1 = $avtDerRemise1;
        return $this;
    }

    /**
     * Set the avt der remise2.
     *
     * @param float $avtDerRemise2 The avt der remise2.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerRemise2($avtDerRemise2) {
        $this->avtDerRemise2 = $avtDerRemise2;
        return $this;
    }

    /**
     * Set the avt der remise3.
     *
     * @param float $avtDerRemise3 The avt der remise3.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setAvtDerRemise3($avtDerRemise3) {
        $this->avtDerRemise3 = $avtDerRemise3;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the conditionnement.
     *
     * @param string $conditionnement The conditionnement.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setConditionnement($conditionnement) {
        $this->conditionnement = $conditionnement;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int $delaiLe The delai le.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDelaiLe($delaiLe) {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int $delaiNombre The delai nombre.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDelaiNombre($delaiNombre) {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int $delaiType The delai type.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDelaiType($delaiType) {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the der code devise.
     *
     * @param string $derCodeDevise The der code devise.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerCodeDevise($derCodeDevise) {
        $this->derCodeDevise = $derCodeDevise;
        return $this;
    }

    /**
     * Set the der date achat.
     *
     * @param DateTime $derDateAchat The der date achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerDateAchat(DateTime $derDateAchat = null) {
        $this->derDateAchat = $derDateAchat;
        return $this;
    }

    /**
     * Set the der euros.
     *
     * @param bool $derEuros The der euros.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerEuros($derEuros) {
        $this->derEuros = $derEuros;
        return $this;
    }

    /**
     * Set the der px achat.
     *
     * @param float $derPxAchat The der px achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerPxAchat($derPxAchat) {
        $this->derPxAchat = $derPxAchat;
        return $this;
    }

    /**
     * Set the der qte achat.
     *
     * @param float $derQteAchat The der qte achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerQteAchat($derQteAchat) {
        $this->derQteAchat = $derQteAchat;
        return $this;
    }

    /**
     * Set the der remise1.
     *
     * @param float $derRemise1 The der remise1.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerRemise1($derRemise1) {
        $this->derRemise1 = $derRemise1;
        return $this;
    }

    /**
     * Set the der remise2.
     *
     * @param float $derRemise2 The der remise2.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerRemise2($derRemise2) {
        $this->derRemise2 = $derRemise2;
        return $this;
    }

    /**
     * Set the der remise3.
     *
     * @param float $derRemise3 The der remise3.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setDerRemise3($derRemise3) {
        $this->derRemise3 = $derRemise3;
        return $this;
    }

    /**
     * Set the mini code devise.
     *
     * @param string $miniCodeDevise The mini code devise.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniCodeDevise($miniCodeDevise) {
        $this->miniCodeDevise = $miniCodeDevise;
        return $this;
    }

    /**
     * Set the mini date achat.
     *
     * @param DateTime $miniDateAchat The mini date achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniDateAchat(DateTime $miniDateAchat = null) {
        $this->miniDateAchat = $miniDateAchat;
        return $this;
    }

    /**
     * Set the mini euros.
     *
     * @param bool $miniEuros The mini euros.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniEuros($miniEuros) {
        $this->miniEuros = $miniEuros;
        return $this;
    }

    /**
     * Set the mini px achat.
     *
     * @param float $miniPxAchat The mini px achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniPxAchat($miniPxAchat) {
        $this->miniPxAchat = $miniPxAchat;
        return $this;
    }

    /**
     * Set the mini qte achat.
     *
     * @param float $miniQteAchat The mini qte achat.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniQteAchat($miniQteAchat) {
        $this->miniQteAchat = $miniQteAchat;
        return $this;
    }

    /**
     * Set the mini remise1.
     *
     * @param float $miniRemise1 The mini remise1.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniRemise1($miniRemise1) {
        $this->miniRemise1 = $miniRemise1;
        return $this;
    }

    /**
     * Set the mini remise2.
     *
     * @param float $miniRemise2 The mini remise2.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniRemise2($miniRemise2) {
        $this->miniRemise2 = $miniRemise2;
        return $this;
    }

    /**
     * Set the mini remise3.
     *
     * @param float $miniRemise3 The mini remise3.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setMiniRemise3($miniRemise3) {
        $this->miniRemise3 = $miniRemise3;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the qte economique.
     *
     * @param float $qteEconomique The qte economique.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setQteEconomique($qteEconomique) {
        $this->qteEconomique = $qteEconomique;
        return $this;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string $refArticleFournisseur The ref article fournisseur.
     * @return ArticleFournisseur Returns this article fournisseur.
     */
    public function setRefArticleFournisseur($refArticleFournisseur) {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }
}
