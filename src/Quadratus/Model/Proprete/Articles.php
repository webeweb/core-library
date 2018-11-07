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

use DateTime;

/**
 * Articles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Articles {

    /**
     * Actif.
     *
     * @var boolean
     */
    private $actif;

    /**
     * Article remplacement.
     *
     * @var string
     */
    private $articleRemplacement;

    /**
     * Classification four.
     *
     * @var string
     */
    private $classificationFour;

    /**
     * Classification util.
     *
     * @var string
     */
    private $classificationUtil;

    /**
     * Code affect rent.
     *
     * @var string
     */
    private $codeAffectRent;

    /**
     * Code anal achat.
     *
     * @var string
     */
    private $codeAnalAchat;

    /**
     * Code anal vente.
     *
     * @var string
     */
    private $codeAnalVente;

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
     * Code tva achat.
     *
     * @var string
     */
    private $codeTvaAchat;

    /**
     * Code tva vente.
     *
     * @var string
     */
    private $codeTvaVente;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Code ventil achat.
     *
     * @var string
     */
    private $codeVentilAchat;

    /**
     * Code ventil vente.
     *
     * @var string
     */
    private $codeVentilVente;

    /**
     * Coef.
     *
     * @var float
     */
    private $coef;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Depuis deb fac.
     *
     * @var boolean
     */
    private $depuisDebFac;

    /**
     * Dernier prix achat.
     *
     * @var float
     */
    private $dernierPrixAchat;

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
     * Designation r t f.
     *
     * @var string
     */
    private $designationRTF;

    /**
     * Famille article.
     *
     * @var string
     */
    private $familleArticle;

    /**
     * Imprimer dans pied.
     *
     * @var boolean
     */
    private $imprimerDansPied;

    /**
     * Montant unitaire taxe.
     *
     * @var float
     */
    private $montantUnitaireTaxe;

    /**
     * Mot cle dans pied.
     *
     * @var string
     */
    private $motCleDansPied;

    /**
     * Ne pas reviser.
     *
     * @var boolean
     */
    private $nePasReviser;

    /**
     * Nombre echeances.
     *
     * @var string
     */
    private $nombreEcheances;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * P a m p.
     *
     * @var float
     */
    private $pAMP;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix net.
     *
     * @var boolean
     */
    private $prixNet;

    /**
     * Prix revient.
     *
     * @var float
     */
    private $prixRevient;

    /**
     * Prix vente.
     *
     * @var float
     */
    private $prixVente;

    /**
     * Prix vente euros.
     *
     * @var float
     */
    private $prixVenteEuros;

    /**
     * Produit.
     *
     * @var boolean
     */
    private $produit;

    /**
     * Produit chimique.
     *
     * @var boolean
     */
    private $produitChimique;

    /**
     * Px facture.
     *
     * @var boolean
     */
    private $pxFacture;

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
     * Soumis escompte.
     *
     * @var boolean
     */
    private $soumisEscompte;

    /**
     * Suivi stock.
     *
     * @var boolean
     */
    private $suiviStock;

    /**
     * Taux escompte.
     *
     * @var float
     */
    private $tauxEscompte;

    /**
     * Type article.
     *
     * @var string
     */
    private $typeArticle;

    /**
     * Variante.
     *
     * @var boolean
     */
    private $variante;

    /**
     * Ventil marge.
     *
     * @var boolean
     */
    private $ventilMarge;

    /**
     * Visu dans att fisc.
     *
     * @var boolean
     */
    private $visuDansAttFisc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return boolean Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the article remplacement.
     *
     * @return string Returns the article remplacement.
     */
    public function getArticleRemplacement() {
        return $this->articleRemplacement;
    }

    /**
     * Get the classification four.
     *
     * @return string Returns the classification four.
     */
    public function getClassificationFour() {
        return $this->classificationFour;
    }

    /**
     * Get the classification util.
     *
     * @return string Returns the classification util.
     */
    public function getClassificationUtil() {
        return $this->classificationUtil;
    }

    /**
     * Get the code affect rent.
     *
     * @return string Returns the code affect rent.
     */
    public function getCodeAffectRent() {
        return $this->codeAffectRent;
    }

    /**
     * Get the code anal achat.
     *
     * @return string Returns the code anal achat.
     */
    public function getCodeAnalAchat() {
        return $this->codeAnalAchat;
    }

    /**
     * Get the code anal vente.
     *
     * @return string Returns the code anal vente.
     */
    public function getCodeAnalVente() {
        return $this->codeAnalVente;
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
     * Get the code tva achat.
     *
     * @return string Returns the code tva achat.
     */
    public function getCodeTvaAchat() {
        return $this->codeTvaAchat;
    }

    /**
     * Get the code tva vente.
     *
     * @return string Returns the code tva vente.
     */
    public function getCodeTvaVente() {
        return $this->codeTvaVente;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
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
     * Get the code ventil vente.
     *
     * @return string Returns the code ventil vente.
     */
    public function getCodeVentilVente() {
        return $this->codeVentilVente;
    }

    /**
     * Get the coef.
     *
     * @return float Returns the coef.
     */
    public function getCoef() {
        return $this->coef;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the depuis deb fac.
     *
     * @return boolean Returns the depuis deb fac.
     */
    public function getDepuisDebFac() {
        return $this->depuisDebFac;
    }

    /**
     * Get the dernier prix achat.
     *
     * @return float Returns the dernier prix achat.
     */
    public function getDernierPrixAchat() {
        return $this->dernierPrixAchat;
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
     * Get the designation r t f.
     *
     * @return string Returns the designation r t f.
     */
    public function getDesignationRTF() {
        return $this->designationRTF;
    }

    /**
     * Get the famille article.
     *
     * @return string Returns the famille article.
     */
    public function getFamilleArticle() {
        return $this->familleArticle;
    }

    /**
     * Get the imprimer dans pied.
     *
     * @return boolean Returns the imprimer dans pied.
     */
    public function getImprimerDansPied() {
        return $this->imprimerDansPied;
    }

    /**
     * Get the montant unitaire taxe.
     *
     * @return float Returns the montant unitaire taxe.
     */
    public function getMontantUnitaireTaxe() {
        return $this->montantUnitaireTaxe;
    }

    /**
     * Get the mot cle dans pied.
     *
     * @return string Returns the mot cle dans pied.
     */
    public function getMotCleDansPied() {
        return $this->motCleDansPied;
    }

    /**
     * Get the ne pas reviser.
     *
     * @return boolean Returns the ne pas reviser.
     */
    public function getNePasReviser() {
        return $this->nePasReviser;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
    }

    /**
     * Get the p a m p.
     *
     * @return float Returns the p a m p.
     */
    public function getPAMP() {
        return $this->pAMP;
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
     * Get the prix net.
     *
     * @return boolean Returns the prix net.
     */
    public function getPrixNet() {
        return $this->prixNet;
    }

    /**
     * Get the prix revient.
     *
     * @return float Returns the prix revient.
     */
    public function getPrixRevient() {
        return $this->prixRevient;
    }

    /**
     * Get the prix vente.
     *
     * @return float Returns the prix vente.
     */
    public function getPrixVente() {
        return $this->prixVente;
    }

    /**
     * Get the prix vente euros.
     *
     * @return float Returns the prix vente euros.
     */
    public function getPrixVenteEuros() {
        return $this->prixVenteEuros;
    }

    /**
     * Get the produit.
     *
     * @return boolean Returns the produit.
     */
    public function getProduit() {
        return $this->produit;
    }

    /**
     * Get the produit chimique.
     *
     * @return boolean Returns the produit chimique.
     */
    public function getProduitChimique() {
        return $this->produitChimique;
    }

    /**
     * Get the px facture.
     *
     * @return boolean Returns the px facture.
     */
    public function getPxFacture() {
        return $this->pxFacture;
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
     * Get the soumis escompte.
     *
     * @return boolean Returns the soumis escompte.
     */
    public function getSoumisEscompte() {
        return $this->soumisEscompte;
    }

    /**
     * Get the suivi stock.
     *
     * @return boolean Returns the suivi stock.
     */
    public function getSuiviStock() {
        return $this->suiviStock;
    }

    /**
     * Get the taux escompte.
     *
     * @return float Returns the taux escompte.
     */
    public function getTauxEscompte() {
        return $this->tauxEscompte;
    }

    /**
     * Get the type article.
     *
     * @return string Returns the type article.
     */
    public function getTypeArticle() {
        return $this->typeArticle;
    }

    /**
     * Get the variante.
     *
     * @return boolean Returns the variante.
     */
    public function getVariante() {
        return $this->variante;
    }

    /**
     * Get the ventil marge.
     *
     * @return boolean Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
    }

    /**
     * Get the visu dans att fisc.
     *
     * @return boolean Returns the visu dans att fisc.
     */
    public function getVisuDansAttFisc() {
        return $this->visuDansAttFisc;
    }

    /**
     * Set the actif.
     *
     * @param boolean $actif The actif.
     * @return Articles Returns this articles.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the article remplacement.
     *
     * @param string $articleRemplacement The article remplacement.
     * @return Articles Returns this articles.
     */
    public function setArticleRemplacement($articleRemplacement) {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }

    /**
     * Set the classification four.
     *
     * @param string $classificationFour The classification four.
     * @return Articles Returns this articles.
     */
    public function setClassificationFour($classificationFour) {
        $this->classificationFour = $classificationFour;
        return $this;
    }

    /**
     * Set the classification util.
     *
     * @param string $classificationUtil The classification util.
     * @return Articles Returns this articles.
     */
    public function setClassificationUtil($classificationUtil) {
        $this->classificationUtil = $classificationUtil;
        return $this;
    }

    /**
     * Set the code affect rent.
     *
     * @param string $codeAffectRent The code affect rent.
     * @return Articles Returns this articles.
     */
    public function setCodeAffectRent($codeAffectRent) {
        $this->codeAffectRent = $codeAffectRent;
        return $this;
    }

    /**
     * Set the code anal achat.
     *
     * @param string $codeAnalAchat The code anal achat.
     * @return Articles Returns this articles.
     */
    public function setCodeAnalAchat($codeAnalAchat) {
        $this->codeAnalAchat = $codeAnalAchat;
        return $this;
    }

    /**
     * Set the code anal vente.
     *
     * @param string $codeAnalVente The code anal vente.
     * @return Articles Returns this articles.
     */
    public function setCodeAnalVente($codeAnalVente) {
        $this->codeAnalVente = $codeAnalVente;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return Articles Returns this articles.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return Articles Returns this articles.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code tva achat.
     *
     * @param string $codeTvaAchat The code tva achat.
     * @return Articles Returns this articles.
     */
    public function setCodeTvaAchat($codeTvaAchat) {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }

    /**
     * Set the code tva vente.
     *
     * @param string $codeTvaVente The code tva vente.
     * @return Articles Returns this articles.
     */
    public function setCodeTvaVente($codeTvaVente) {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     * @return Articles Returns this articles.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string $codeVentilAchat The code ventil achat.
     * @return Articles Returns this articles.
     */
    public function setCodeVentilAchat($codeVentilAchat) {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string $codeVentilVente The code ventil vente.
     * @return Articles Returns this articles.
     */
    public function setCodeVentilVente($codeVentilVente) {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the coef.
     *
     * @param float $coef The coef.
     * @return Articles Returns this articles.
     */
    public function setCoef($coef) {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Articles Returns this articles.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Articles Returns this articles.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param boolean $depuisDebFac The depuis deb fac.
     * @return Articles Returns this articles.
     */
    public function setDepuisDebFac($depuisDebFac) {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the dernier prix achat.
     *
     * @param float $dernierPrixAchat The dernier prix achat.
     * @return Articles Returns this articles.
     */
    public function setDernierPrixAchat($dernierPrixAchat) {
        $this->dernierPrixAchat = $dernierPrixAchat;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return Articles Returns this articles.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     * @return Articles Returns this articles.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     * @return Articles Returns this articles.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation r t f.
     *
     * @param string $designationRTF The designation r t f.
     * @return Articles Returns this articles.
     */
    public function setDesignationRTF($designationRTF) {
        $this->designationRTF = $designationRTF;
        return $this;
    }

    /**
     * Set the famille article.
     *
     * @param string $familleArticle The famille article.
     * @return Articles Returns this articles.
     */
    public function setFamilleArticle($familleArticle) {
        $this->familleArticle = $familleArticle;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param boolean $imprimerDansPied The imprimer dans pied.
     * @return Articles Returns this articles.
     */
    public function setImprimerDansPied($imprimerDansPied) {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float $montantUnitaireTaxe The montant unitaire taxe.
     * @return Articles Returns this articles.
     */
    public function setMontantUnitaireTaxe($montantUnitaireTaxe) {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string $motCleDansPied The mot cle dans pied.
     * @return Articles Returns this articles.
     */
    public function setMotCleDansPied($motCleDansPied) {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the ne pas reviser.
     *
     * @param boolean $nePasReviser The ne pas reviser.
     * @return Articles Returns this articles.
     */
    public function setNePasReviser($nePasReviser) {
        $this->nePasReviser = $nePasReviser;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     * @return Articles Returns this articles.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return Articles Returns this articles.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the p a m p.
     *
     * @param float $pAMP The p a m p.
     * @return Articles Returns this articles.
     */
    public function setPAMP($pAMP) {
        $this->pAMP = $pAMP;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     * @return Articles Returns this articles.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix net.
     *
     * @param boolean $prixNet The prix net.
     * @return Articles Returns this articles.
     */
    public function setPrixNet($prixNet) {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix revient.
     *
     * @param float $prixRevient The prix revient.
     * @return Articles Returns this articles.
     */
    public function setPrixRevient($prixRevient) {
        $this->prixRevient = $prixRevient;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float $prixVente The prix vente.
     * @return Articles Returns this articles.
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the prix vente euros.
     *
     * @param float $prixVenteEuros The prix vente euros.
     * @return Articles Returns this articles.
     */
    public function setPrixVenteEuros($prixVenteEuros) {
        $this->prixVenteEuros = $prixVenteEuros;
        return $this;
    }

    /**
     * Set the produit.
     *
     * @param boolean $produit The produit.
     * @return Articles Returns this articles.
     */
    public function setProduit($produit) {
        $this->produit = $produit;
        return $this;
    }

    /**
     * Set the produit chimique.
     *
     * @param boolean $produitChimique The produit chimique.
     * @return Articles Returns this articles.
     */
    public function setProduitChimique($produitChimique) {
        $this->produitChimique = $produitChimique;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param boolean $pxFacture The px facture.
     * @return Articles Returns this articles.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the qte stock mini.
     *
     * @param float $qteStockMini The qte stock mini.
     * @return Articles Returns this articles.
     */
    public function setQteStockMini($qteStockMini) {
        $this->qteStockMini = $qteStockMini;
        return $this;
    }

    /**
     * Set the qte stock reel.
     *
     * @param float $qteStockReel The qte stock reel.
     * @return Articles Returns this articles.
     */
    public function setQteStockReel($qteStockReel) {
        $this->qteStockReel = $qteStockReel;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param boolean $soumisEscompte The soumis escompte.
     * @return Articles Returns this articles.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param boolean $suiviStock The suivi stock.
     * @return Articles Returns this articles.
     */
    public function setSuiviStock($suiviStock) {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     * @return Articles Returns this articles.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the type article.
     *
     * @param string $typeArticle The type article.
     * @return Articles Returns this articles.
     */
    public function setTypeArticle($typeArticle) {
        $this->typeArticle = $typeArticle;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param boolean $variante The variante.
     * @return Articles Returns this articles.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param boolean $ventilMarge The ventil marge.
     * @return Articles Returns this articles.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }

    /**
     * Set the visu dans att fisc.
     *
     * @param boolean $visuDansAttFisc The visu dans att fisc.
     * @return Articles Returns this articles.
     */
    public function setVisuDansAttFisc($visuDansAttFisc) {
        $this->visuDansAttFisc = $visuDansAttFisc;
        return $this;
    }

}
