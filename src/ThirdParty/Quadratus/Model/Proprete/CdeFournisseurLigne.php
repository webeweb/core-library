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
 * Cde fournisseur ligne.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurLigne {

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
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Code unite.
     *
     * @var int
     */
    private $codeUnite;

    /**
     * Code variante.
     *
     * @var string
     */
    private $codeVariante;

    /**
     * Code ventil achat.
     *
     * @var string
     */
    private $codeVentilAchat;

    /**
     * Commande recue.
     *
     * @var bool
     */
    private $commandeRecue;

    /**
     * Conditionnement.
     *
     * @var string
     */
    private $conditionnement;

    /**
     * Date reception prevue.
     *
     * @var DateTime|null
     */
    private $dateReceptionPrevue;

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Designation2.
     *
     * @var string
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string
     */
    private $designation3;

    /**
     * Indice ligne.
     *
     * @var int
     */
    private $indiceLigne;

    /**
     * No br.
     *
     * @var string
     */
    private $noBr;

    /**
     * No ligne br.
     *
     * @var int
     */
    private $noLigneBr;

    /**
     * No piece.
     *
     * @var string
     */
    private $noPiece;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Pu brut.
     *
     * @var float
     */
    private $puBrut;

    /**
     * Qte cond.
     *
     * @var int
     */
    private $qteCond;

    /**
     * Qte origine.
     *
     * @var float
     */
    private $qteOrigine;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Ref article fournisseur.
     *
     * @var string
     */
    private $refArticleFournisseur;

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
     * Taux tva.
     *
     * @var float
     */
    private $tauxTva;

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
     * Get the code fournisseur.
     *
     * @return string Returns the code fournisseur.
     */
    public function getCodeFournisseur() {
        return $this->codeFournisseur;
    }

    /**
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the code unite.
     *
     * @return int Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
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
     * Get the code ventil achat.
     *
     * @return string Returns the code ventil achat.
     */
    public function getCodeVentilAchat() {
        return $this->codeVentilAchat;
    }

    /**
     * Get the commande recue.
     *
     * @return bool Returns the commande recue.
     */
    public function getCommandeRecue() {
        return $this->commandeRecue;
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
     * Get the date reception prevue.
     *
     * @return DateTime|null Returns the date reception prevue.
     */
    public function getDateReceptionPrevue() {
        return $this->dateReceptionPrevue;
    }

    /**
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Get the designation2.
     *
     * @return string Returns the designation2.
     */
    public function getDesignation2() {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string Returns the designation3.
     */
    public function getDesignation3() {
        return $this->designation3;
    }

    /**
     * Get the indice ligne.
     *
     * @return int Returns the indice ligne.
     */
    public function getIndiceLigne() {
        return $this->indiceLigne;
    }

    /**
     * Get the no br.
     *
     * @return string Returns the no br.
     */
    public function getNoBr() {
        return $this->noBr;
    }

    /**
     * Get the no ligne br.
     *
     * @return int Returns the no ligne br.
     */
    public function getNoLigneBr() {
        return $this->noLigneBr;
    }

    /**
     * Get the no piece.
     *
     * @return string Returns the no piece.
     */
    public function getNoPiece() {
        return $this->noPiece;
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
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the pu brut.
     *
     * @return float Returns the pu brut.
     */
    public function getPuBrut() {
        return $this->puBrut;
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
     * Get the qte origine.
     *
     * @return float Returns the qte origine.
     */
    public function getQteOrigine() {
        return $this->qteOrigine;
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
     * Get the ref article fournisseur.
     *
     * @return string Returns the ref article fournisseur.
     */
    public function getRefArticleFournisseur() {
        return $this->refArticleFournisseur;
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
     * Get the taux tva.
     *
     * @return float Returns the taux tva.
     */
    public function getTauxTva() {
        return $this->tauxTva;
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
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
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
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
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
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param int $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string $codeVariante The code variante.
     */
    public function setCodeVariante($codeVariante) {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string $codeVentilAchat The code ventil achat.
     */
    public function setCodeVentilAchat($codeVentilAchat) {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the commande recue.
     *
     * @param bool $commandeRecue The commande recue.
     */
    public function setCommandeRecue($commandeRecue) {
        $this->commandeRecue = $commandeRecue;
        return $this;
    }

    /**
     * Set the conditionnement.
     *
     * @param string $conditionnement The conditionnement.
     */
    public function setConditionnement($conditionnement) {
        $this->conditionnement = $conditionnement;
        return $this;
    }

    /**
     * Set the date reception prevue.
     *
     * @param DateTime|null $dateReceptionPrevue The date reception prevue.
     */
    public function setDateReceptionPrevue(DateTime $dateReceptionPrevue = null) {
        $this->dateReceptionPrevue = $dateReceptionPrevue;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the indice ligne.
     *
     * @param int $indiceLigne The indice ligne.
     */
    public function setIndiceLigne($indiceLigne) {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }

    /**
     * Set the no br.
     *
     * @param string $noBr The no br.
     */
    public function setNoBr($noBr) {
        $this->noBr = $noBr;
        return $this;
    }

    /**
     * Set the no ligne br.
     *
     * @param int $noLigneBr The no ligne br.
     */
    public function setNoLigneBr($noLigneBr) {
        $this->noLigneBr = $noLigneBr;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string $noPiece The no piece.
     */
    public function setNoPiece($noPiece) {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the pu brut.
     *
     * @param float $puBrut The pu brut.
     */
    public function setPuBrut($puBrut) {
        $this->puBrut = $puBrut;
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
     * Set the qte origine.
     *
     * @param float $qteOrigine The qte origine.
     */
    public function setQteOrigine($qteOrigine) {
        $this->qteOrigine = $qteOrigine;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string $refArticleFournisseur The ref article fournisseur.
     */
    public function setRefArticleFournisseur($refArticleFournisseur) {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float $tauxTva The taux tva.
     */
    public function setTauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
