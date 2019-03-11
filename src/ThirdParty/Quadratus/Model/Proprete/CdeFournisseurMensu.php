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
 * Cde fournisseur mensu model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurMensu {

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
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code inspecteur.
     *
     * @var string
     */
    private $codeInspecteur;

    /**
     * Code livraison.
     *
     * @var string
     */
    private $codeLivraison;

    /**
     * Code livreur.
     *
     * @var string
     */
    private $codeLivreur;

    /**
     * Commande isolee.
     *
     * @var bool
     */
    private $commandeIsolee;

    /**
     * Critere texte1.
     *
     * @var string
     */
    private $critereTexte1;

    /**
     * Date livraison.
     *
     * @var DateTime
     */
    private $dateLivraison;

    /**
     * Date transfert.
     *
     * @var DateTime
     */
    private $dateTransfert;

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
     * From cde type.
     *
     * @var bool
     */
    private $fromCdeType;

    /**
     * Maj stock by d a.
     *
     * @var bool
     */
    private $majStockByDA;

    /**
     * No bon int.
     *
     * @var string
     */
    private $noBonInt;

    /**
     * No piece cde.
     *
     * @var string
     */
    private $noPieceCde;

    /**
     * No piece cde cli.
     *
     * @var string
     */
    private $noPieceCdeCli;

    /**
     * Numero b s genere.
     *
     * @var string
     */
    private $numeroBSGenere;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * P u brut.
     *
     * @var float
     */
    private $pUBrut;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix saisi.
     *
     * @var bool
     */
    private $prixSaisi;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Quantite b s.
     *
     * @var float
     */
    private $quantiteBS;

    /**
     * Quantite cde.
     *
     * @var float
     */
    private $quantiteCde;

    /**
     * Quantite cde cli.
     *
     * @var float
     */
    private $quantiteCdeCli;

    /**
     * Quantite liv.
     *
     * @var float
     */
    private $quantiteLiv;

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
     * Type gestion.
     *
     * @var string
     */
    private $typeGestion;

    /**
     * Type piece.
     *
     * @var string
     */
    private $typePiece;

    /**
     * Uniq i d blocage.
     *
     * @var string
     */
    private $uniqIDBlocage;

    /**
     * Validee.
     *
     * @var bool
     */
    private $validee;

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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
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
     * Get the code inspecteur.
     *
     * @return string Returns the code inspecteur.
     */
    public function getCodeInspecteur() {
        return $this->codeInspecteur;
    }

    /**
     * Get the code livraison.
     *
     * @return string Returns the code livraison.
     */
    public function getCodeLivraison() {
        return $this->codeLivraison;
    }

    /**
     * Get the code livreur.
     *
     * @return string Returns the code livreur.
     */
    public function getCodeLivreur() {
        return $this->codeLivreur;
    }

    /**
     * Get the commande isolee.
     *
     * @return bool Returns the commande isolee.
     */
    public function getCommandeIsolee() {
        return $this->commandeIsolee;
    }

    /**
     * Get the critere texte1.
     *
     * @return string Returns the critere texte1.
     */
    public function getCritereTexte1() {
        return $this->critereTexte1;
    }

    /**
     * Get the date livraison.
     *
     * @return DateTime Returns the date livraison.
     */
    public function getDateLivraison() {
        return $this->dateLivraison;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime Returns the date transfert.
     */
    public function getDateTransfert() {
        return $this->dateTransfert;
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
     * Get the from cde type.
     *
     * @return bool Returns the from cde type.
     */
    public function getFromCdeType() {
        return $this->fromCdeType;
    }

    /**
     * Get the maj stock by d a.
     *
     * @return bool Returns the maj stock by d a.
     */
    public function getMajStockByDA() {
        return $this->majStockByDA;
    }

    /**
     * Get the no bon int.
     *
     * @return string Returns the no bon int.
     */
    public function getNoBonInt() {
        return $this->noBonInt;
    }

    /**
     * Get the no piece cde.
     *
     * @return string Returns the no piece cde.
     */
    public function getNoPieceCde() {
        return $this->noPieceCde;
    }

    /**
     * Get the no piece cde cli.
     *
     * @return string Returns the no piece cde cli.
     */
    public function getNoPieceCdeCli() {
        return $this->noPieceCdeCli;
    }

    /**
     * Get the numero b s genere.
     *
     * @return string Returns the numero b s genere.
     */
    public function getNumeroBSGenere() {
        return $this->numeroBSGenere;
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
     * Get the p u brut.
     *
     * @return float Returns the p u brut.
     */
    public function getPUBrut() {
        return $this->pUBrut;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
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
     * Get the prix saisi.
     *
     * @return bool Returns the prix saisi.
     */
    public function getPrixSaisi() {
        return $this->prixSaisi;
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
     * Get the quantite b s.
     *
     * @return float Returns the quantite b s.
     */
    public function getQuantiteBS() {
        return $this->quantiteBS;
    }

    /**
     * Get the quantite cde.
     *
     * @return float Returns the quantite cde.
     */
    public function getQuantiteCde() {
        return $this->quantiteCde;
    }

    /**
     * Get the quantite cde cli.
     *
     * @return float Returns the quantite cde cli.
     */
    public function getQuantiteCdeCli() {
        return $this->quantiteCdeCli;
    }

    /**
     * Get the quantite liv.
     *
     * @return float Returns the quantite liv.
     */
    public function getQuantiteLiv() {
        return $this->quantiteLiv;
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
     * Get the type gestion.
     *
     * @return string Returns the type gestion.
     */
    public function getTypeGestion() {
        return $this->typeGestion;
    }

    /**
     * Get the type piece.
     *
     * @return string Returns the type piece.
     */
    public function getTypePiece() {
        return $this->typePiece;
    }

    /**
     * Get the uniq i d blocage.
     *
     * @return string Returns the uniq i d blocage.
     */
    public function getUniqIDBlocage() {
        return $this->uniqIDBlocage;
    }

    /**
     * Get the validee.
     *
     * @return bool Returns the validee.
     */
    public function getValidee() {
        return $this->validee;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string $codeInspecteur The code inspecteur.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeInspecteur($codeInspecteur) {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string $codeLivraison The code livraison.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeLivraison($codeLivraison) {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the code livreur.
     *
     * @param string $codeLivreur The code livreur.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCodeLivreur($codeLivreur) {
        $this->codeLivreur = $codeLivreur;
        return $this;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool $commandeIsolee The commande isolee.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCommandeIsolee($commandeIsolee) {
        $this->commandeIsolee = $commandeIsolee;
        return $this;
    }

    /**
     * Set the critere texte1.
     *
     * @param string $critereTexte1 The critere texte1.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setCritereTexte1($critereTexte1) {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }

    /**
     * Set the date livraison.
     *
     * @param DateTime $dateLivraison The date livraison.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setDateLivraison(DateTime $dateLivraison = null) {
        $this->dateLivraison = $dateLivraison;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime $dateTransfert The date transfert.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setDateTransfert(DateTime $dateTransfert = null) {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the from cde type.
     *
     * @param bool $fromCdeType The from cde type.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setFromCdeType($fromCdeType) {
        $this->fromCdeType = $fromCdeType;
        return $this;
    }

    /**
     * Set the maj stock by d a.
     *
     * @param bool $majStockByDA The maj stock by d a.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setMajStockByDA($majStockByDA) {
        $this->majStockByDA = $majStockByDA;
        return $this;
    }

    /**
     * Set the no bon int.
     *
     * @param string $noBonInt The no bon int.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setNoBonInt($noBonInt) {
        $this->noBonInt = $noBonInt;
        return $this;
    }

    /**
     * Set the no piece cde.
     *
     * @param string $noPieceCde The no piece cde.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setNoPieceCde($noPieceCde) {
        $this->noPieceCde = $noPieceCde;
        return $this;
    }

    /**
     * Set the no piece cde cli.
     *
     * @param string $noPieceCdeCli The no piece cde cli.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setNoPieceCdeCli($noPieceCdeCli) {
        $this->noPieceCdeCli = $noPieceCdeCli;
        return $this;
    }

    /**
     * Set the numero b s genere.
     *
     * @param string $numeroBSGenere The numero b s genere.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setNumeroBSGenere($numeroBSGenere) {
        $this->numeroBSGenere = $numeroBSGenere;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the p u brut.
     *
     * @param float $pUBrut The p u brut.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setPUBrut($pUBrut) {
        $this->pUBrut = $pUBrut;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix saisi.
     *
     * @param bool $prixSaisi The prix saisi.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setPrixSaisi($prixSaisi) {
        $this->prixSaisi = $prixSaisi;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite b s.
     *
     * @param float $quantiteBS The quantite b s.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setQuantiteBS($quantiteBS) {
        $this->quantiteBS = $quantiteBS;
        return $this;
    }

    /**
     * Set the quantite cde.
     *
     * @param float $quantiteCde The quantite cde.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setQuantiteCde($quantiteCde) {
        $this->quantiteCde = $quantiteCde;
        return $this;
    }

    /**
     * Set the quantite cde cli.
     *
     * @param float $quantiteCdeCli The quantite cde cli.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setQuantiteCdeCli($quantiteCdeCli) {
        $this->quantiteCdeCli = $quantiteCdeCli;
        return $this;
    }

    /**
     * Set the quantite liv.
     *
     * @param float $quantiteLiv The quantite liv.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setQuantiteLiv($quantiteLiv) {
        $this->quantiteLiv = $quantiteLiv;
        return $this;
    }

    /**
     * Set the remise1.
     *
     * @param float $remise1 The remise1.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setRemise1($remise1) {
        $this->remise1 = $remise1;
        return $this;
    }

    /**
     * Set the remise2.
     *
     * @param float $remise2 The remise2.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setRemise2($remise2) {
        $this->remise2 = $remise2;
        return $this;
    }

    /**
     * Set the remise3.
     *
     * @param float $remise3 The remise3.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setRemise3($remise3) {
        $this->remise3 = $remise3;
        return $this;
    }

    /**
     * Set the type gestion.
     *
     * @param string $typeGestion The type gestion.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setTypeGestion($typeGestion) {
        $this->typeGestion = $typeGestion;
        return $this;
    }

    /**
     * Set the type piece.
     *
     * @param string $typePiece The type piece.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setTypePiece($typePiece) {
        $this->typePiece = $typePiece;
        return $this;
    }

    /**
     * Set the uniq i d blocage.
     *
     * @param string $uniqIDBlocage The uniq i d blocage.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setUniqIDBlocage($uniqIDBlocage) {
        $this->uniqIDBlocage = $uniqIDBlocage;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool $validee The validee.
     * @return CdeFournisseurMensu Returns this cde fournisseur mensu.
     */
    public function setValidee($validee) {
        $this->validee = $validee;
        return $this;
    }
}
