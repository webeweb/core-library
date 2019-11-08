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
 * Articles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Articles {

    /**
     * Actif.
     *
     * @var bool
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
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Depuis deb fac.
     *
     * @var bool
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
     * Designation rtf.
     *
     * @var string
     */
    private $designationRtf;

    /**
     * Famille article.
     *
     * @var string
     */
    private $familleArticle;

    /**
     * Imprimer dans pied.
     *
     * @var bool
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
     * @var bool
     */
    private $nePasReviser;

    /**
     * Nombre echeances.
     *
     * @var string
     */
    private $nombreEcheances;

    /**
     * Numero pj.
     *
     * @var int
     */
    private $numeroPj;

    /**
     * Pamp.
     *
     * @var float
     */
    private $pamp;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix net.
     *
     * @var bool
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
     * @var bool
     */
    private $produit;

    /**
     * Produit chimique.
     *
     * @var bool
     */
    private $produitChimique;

    /**
     * Px facture.
     *
     * @var bool
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
     * @var bool
     */
    private $soumisEscompte;

    /**
     * Suivi stock.
     *
     * @var bool
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
     * @var bool
     */
    private $variante;

    /**
     * Ventil marge.
     *
     * @var bool
     */
    private $ventilMarge;

    /**
     * Visu dans att fisc.
     *
     * @var bool
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
     * @return bool Returns the actif.
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
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the depuis deb fac.
     *
     * @return bool Returns the depuis deb fac.
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
     * Get the designation rtf.
     *
     * @return string Returns the designation rtf.
     */
    public function getDesignationRtf() {
        return $this->designationRtf;
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
     * @return bool Returns the imprimer dans pied.
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
     * @return bool Returns the ne pas reviser.
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
     * Get the numero pj.
     *
     * @return int Returns the numero pj.
     */
    public function getNumeroPj() {
        return $this->numeroPj;
    }

    /**
     * Get the pamp.
     *
     * @return float Returns the pamp.
     */
    public function getPamp() {
        return $this->pamp;
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
     * @return bool Returns the prix net.
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
     * @return bool Returns the produit.
     */
    public function getProduit() {
        return $this->produit;
    }

    /**
     * Get the produit chimique.
     *
     * @return bool Returns the produit chimique.
     */
    public function getProduitChimique() {
        return $this->produitChimique;
    }

    /**
     * Get the px facture.
     *
     * @return bool Returns the px facture.
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
     * @return bool Returns the soumis escompte.
     */
    public function getSoumisEscompte() {
        return $this->soumisEscompte;
    }

    /**
     * Get the suivi stock.
     *
     * @return bool Returns the suivi stock.
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
     * @return bool Returns the variante.
     */
    public function getVariante() {
        return $this->variante;
    }

    /**
     * Get the ventil marge.
     *
     * @return bool Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
    }

    /**
     * Get the visu dans att fisc.
     *
     * @return bool Returns the visu dans att fisc.
     */
    public function getVisuDansAttFisc() {
        return $this->visuDansAttFisc;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the article remplacement.
     *
     * @param string $articleRemplacement The article remplacement.
     */
    public function setArticleRemplacement($articleRemplacement) {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }

    /**
     * Set the classification four.
     *
     * @param string $classificationFour The classification four.
     */
    public function setClassificationFour($classificationFour) {
        $this->classificationFour = $classificationFour;
        return $this;
    }

    /**
     * Set the classification util.
     *
     * @param string $classificationUtil The classification util.
     */
    public function setClassificationUtil($classificationUtil) {
        $this->classificationUtil = $classificationUtil;
        return $this;
    }

    /**
     * Set the code affect rent.
     *
     * @param string $codeAffectRent The code affect rent.
     */
    public function setCodeAffectRent($codeAffectRent) {
        $this->codeAffectRent = $codeAffectRent;
        return $this;
    }

    /**
     * Set the code anal achat.
     *
     * @param string $codeAnalAchat The code anal achat.
     */
    public function setCodeAnalAchat($codeAnalAchat) {
        $this->codeAnalAchat = $codeAnalAchat;
        return $this;
    }

    /**
     * Set the code anal vente.
     *
     * @param string $codeAnalVente The code anal vente.
     */
    public function setCodeAnalVente($codeAnalVente) {
        $this->codeAnalVente = $codeAnalVente;
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
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code tva achat.
     *
     * @param string $codeTvaAchat The code tva achat.
     */
    public function setCodeTvaAchat($codeTvaAchat) {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }

    /**
     * Set the code tva vente.
     *
     * @param string $codeTvaVente The code tva vente.
     */
    public function setCodeTvaVente($codeTvaVente) {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
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
     * Set the code ventil vente.
     *
     * @param string $codeVentilVente The code ventil vente.
     */
    public function setCodeVentilVente($codeVentilVente) {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the coef.
     *
     * @param float $coef The coef.
     */
    public function setCoef($coef) {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool $depuisDebFac The depuis deb fac.
     */
    public function setDepuisDebFac($depuisDebFac) {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the dernier prix achat.
     *
     * @param float $dernierPrixAchat The dernier prix achat.
     */
    public function setDernierPrixAchat($dernierPrixAchat) {
        $this->dernierPrixAchat = $dernierPrixAchat;
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
     * Set the designation rtf.
     *
     * @param string $designationRtf The designation rtf.
     */
    public function setDesignationRtf($designationRtf) {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the famille article.
     *
     * @param string $familleArticle The famille article.
     */
    public function setFamilleArticle($familleArticle) {
        $this->familleArticle = $familleArticle;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool $imprimerDansPied The imprimer dans pied.
     */
    public function setImprimerDansPied($imprimerDansPied) {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float $montantUnitaireTaxe The montant unitaire taxe.
     */
    public function setMontantUnitaireTaxe($montantUnitaireTaxe) {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string $motCleDansPied The mot cle dans pied.
     */
    public function setMotCleDansPied($motCleDansPied) {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the ne pas reviser.
     *
     * @param bool $nePasReviser The ne pas reviser.
     */
    public function setNePasReviser($nePasReviser) {
        $this->nePasReviser = $nePasReviser;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int $numeroPj The numero pj.
     */
    public function setNumeroPj($numeroPj) {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the pamp.
     *
     * @param float $pamp The pamp.
     */
    public function setPamp($pamp) {
        $this->pamp = $pamp;
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
     * Set the prix net.
     *
     * @param bool $prixNet The prix net.
     */
    public function setPrixNet($prixNet) {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix revient.
     *
     * @param float $prixRevient The prix revient.
     */
    public function setPrixRevient($prixRevient) {
        $this->prixRevient = $prixRevient;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float $prixVente The prix vente.
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the prix vente euros.
     *
     * @param float $prixVenteEuros The prix vente euros.
     */
    public function setPrixVenteEuros($prixVenteEuros) {
        $this->prixVenteEuros = $prixVenteEuros;
        return $this;
    }

    /**
     * Set the produit.
     *
     * @param bool $produit The produit.
     */
    public function setProduit($produit) {
        $this->produit = $produit;
        return $this;
    }

    /**
     * Set the produit chimique.
     *
     * @param bool $produitChimique The produit chimique.
     */
    public function setProduitChimique($produitChimique) {
        $this->produitChimique = $produitChimique;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool $pxFacture The px facture.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the qte stock mini.
     *
     * @param float $qteStockMini The qte stock mini.
     */
    public function setQteStockMini($qteStockMini) {
        $this->qteStockMini = $qteStockMini;
        return $this;
    }

    /**
     * Set the qte stock reel.
     *
     * @param float $qteStockReel The qte stock reel.
     */
    public function setQteStockReel($qteStockReel) {
        $this->qteStockReel = $qteStockReel;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool $soumisEscompte The soumis escompte.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool $suiviStock The suivi stock.
     */
    public function setSuiviStock($suiviStock) {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the type article.
     *
     * @param string $typeArticle The type article.
     */
    public function setTypeArticle($typeArticle) {
        $this->typeArticle = $typeArticle;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param bool $variante The variante.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool $ventilMarge The ventil marge.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }

    /**
     * Set the visu dans att fisc.
     *
     * @param bool $visuDansAttFisc The visu dans att fisc.
     */
    public function setVisuDansAttFisc($visuDansAttFisc) {
        $this->visuDansAttFisc = $visuDansAttFisc;
        return $this;
    }
}
