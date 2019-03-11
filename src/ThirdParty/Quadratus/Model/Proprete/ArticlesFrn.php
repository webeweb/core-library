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
 * Articles frn model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrn {

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
     * Delai local.
     *
     * @var bool
     */
    private $delaiLocal;

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
     * Get the delai local.
     *
     * @return bool Returns the delai local.
     */
    public function getDelaiLocal() {
        return $this->delaiLocal;
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
     * Get the ref article fournisseur.
     *
     * @return string Returns the ref article fournisseur.
     */
    public function getRefArticleFournisseur() {
        return $this->refArticleFournisseur;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the conditionnement.
     *
     * @param string $conditionnement The conditionnement.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setConditionnement($conditionnement) {
        $this->conditionnement = $conditionnement;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int $delaiLe The delai le.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setDelaiLe($delaiLe) {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai local.
     *
     * @param bool $delaiLocal The delai local.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setDelaiLocal($delaiLocal) {
        $this->delaiLocal = $delaiLocal;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int $delaiNombre The delai nombre.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setDelaiNombre($delaiNombre) {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int $delaiType The delai type.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setDelaiType($delaiType) {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string $refArticleFournisseur The ref article fournisseur.
     * @return ArticlesFrn Returns this articles frn.
     */
    public function setRefArticleFournisseur($refArticleFournisseur) {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }
}
