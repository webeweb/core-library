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
 * Mouvements stock model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class MouvementsStock {

    /**
     * Bon sortie.
     *
     * @var string
     */
    private $bonSortie;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Code variante.
     *
     * @var string
     */
    private $codeVariante;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Euro.
     *
     * @var bool
     */
    private $euro;

    /**
     * Index.
     *
     * @var int
     */
    private $index;

    /**
     * Mouvement genere.
     *
     * @var bool
     */
    private $mouvementGenere;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix u.
     *
     * @var float
     */
    private $prixU;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Quantite voulue.
     *
     * @var float
     */
    private $quantiteVoulue;

    /**
     * Remise ligne1.
     *
     * @var float
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float
     */
    private $remiseLigne3;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Type gestion.
     *
     * @var string
     */
    private $typeGestion;

    /**
     * Type ligne.
     *
     * @var string
     */
    private $typeLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bon sortie.
     *
     * @return string Returns the bon sortie.
     */
    public function getBonSortie() {
        return $this->bonSortie;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
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
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
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
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
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
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
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
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the euro.
     *
     * @return bool Returns the euro.
     */
    public function getEuro() {
        return $this->euro;
    }

    /**
     * Get the index.
     *
     * @return int Returns the index.
     */
    public function getIndex() {
        return $this->index;
    }

    /**
     * Get the mouvement genere.
     *
     * @return bool Returns the mouvement genere.
     */
    public function getMouvementGenere() {
        return $this->mouvementGenere;
    }

    /**
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the prix u.
     *
     * @return float Returns the prix u.
     */
    public function getPrixU() {
        return $this->prixU;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the quantite voulue.
     *
     * @return float Returns the quantite voulue.
     */
    public function getQuantiteVoulue() {
        return $this->quantiteVoulue;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float Returns the remise ligne1.
     */
    public function getRemiseLigne1() {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float Returns the remise ligne2.
     */
    public function getRemiseLigne2() {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float Returns the remise ligne3.
     */
    public function getRemiseLigne3() {
        return $this->remiseLigne3;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the type gestion.
     *
     * @return string Returns the type gestion.
     */
    public function getTypeGestion() {
        return $this->typeGestion;
    }

    /**
     * Get the type ligne.
     *
     * @return string Returns the type ligne.
     */
    public function getTypeLigne() {
        return $this->typeLigne;
    }

    /**
     * Set the bon sortie.
     *
     * @param string $bonSortie The bon sortie.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setBonSortie($bonSortie) {
        $this->bonSortie = $bonSortie;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string $codeVariante The code variante.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCodeVariante($codeVariante) {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param bool $euro The euro.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setEuro($euro) {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param int $index The index.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setIndex($index) {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the mouvement genere.
     *
     * @param bool $mouvementGenere The mouvement genere.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setMouvementGenere($mouvementGenere) {
        $this->mouvementGenere = $mouvementGenere;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix u.
     *
     * @param float $prixU The prix u.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setPrixU($prixU) {
        $this->prixU = $prixU;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite voulue.
     *
     * @param float $quantiteVoulue The quantite voulue.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setQuantiteVoulue($quantiteVoulue) {
        $this->quantiteVoulue = $quantiteVoulue;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type gestion.
     *
     * @param string $typeGestion The type gestion.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setTypeGestion($typeGestion) {
        $this->typeGestion = $typeGestion;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     * @return MouvementsStock Returns this mouvements stock.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
