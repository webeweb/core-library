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
 * Factures lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesLignes {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code affaire ligne.
     *
     * @var string
     */
    private $codeAffaireLigne;

    /**
     * Code anal article.
     *
     * @var string
     */
    private $codeAnalArticle;

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
     * Code chantier ligne.
     *
     * @var string
     */
    private $codeChantierLigne;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code t v a article.
     *
     * @var string
     */
    private $codeTVAArticle;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Code ventil article.
     *
     * @var string
     */
    private $codeVentilArticle;

    /**
     * Coefficient b t.
     *
     * @var float
     */
    private $coefficientBT;

    /**
     * Date b t.
     *
     * @var DateTime
     */
    private $dateBT;

    /**
     * Date preparation.
     *
     * @var DateTime
     */
    private $datePreparation;

    /**
     * Depuis deb fac.
     *
     * @var bool
     */
    private $depuisDebFac;

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
     * Designation bis.
     *
     * @var string
     */
    private $designationBis;

    /**
     * Designation bis2.
     *
     * @var string
     */
    private $designationBis2;

    /**
     * Designation bis3.
     *
     * @var string
     */
    private $designationBis3;

    /**
     * Designation r t f.
     *
     * @var string
     */
    private $designationRTF;

    /**
     * Duree b t.
     *
     * @var float
     */
    private $dureeBT;

    /**
     * From pointage b t.
     *
     * @var bool
     */
    private $fromPointageBT;

    /**
     * Heures prev.
     *
     * @var float
     */
    private $heuresPrev;

    /**
     * Heures reel.
     *
     * @var float
     */
    private $heuresReel;

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
     * No chrono preparation.
     *
     * @var int
     */
    private $noChronoPreparation;

    /**
     * No ligne ori.
     *
     * @var int
     */
    private $noLigneOri;

    /**
     * No piece origine.
     *
     * @var string
     */
    private $noPieceOrigine;

    /**
     * Numero b t.
     *
     * @var int
     */
    private $numeroBT;

    /**
     * Numero facture.
     *
     * @var string
     */
    private $numeroFacture;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Periode preparation.
     *
     * @var DateTime
     */
    private $periodePreparation;

    /**
     * Periode ventil marge.
     *
     * @var DateTime
     */
    private $periodeVentilMarge;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix achat.
     *
     * @var float
     */
    private $prixAchat;

    /**
     * Prix achat b t.
     *
     * @var float
     */
    private $prixAchatBT;

    /**
     * Prix unitaire.
     *
     * @var float
     */
    private $prixUnitaire;

    /**
     * Prix unitaire pdf.
     *
     * @var float
     */
    private $prixUnitairePdf;

    /**
     * Px facture.
     *
     * @var bool
     */
    private $pxFacture;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Ref poste cde web f t.
     *
     * @var string
     */
    private $refPosteCdeWebFT;

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
     * Taux horaire b t.
     *
     * @var float
     */
    private $tauxHoraireBT;

    /**
     * Taux tva article.
     *
     * @var float
     */
    private $tauxTvaArticle;

    /**
     * Taux tva taxe.
     *
     * @var float
     */
    private $tauxTvaTaxe;

    /**
     * Type piece.
     *
     * @var string
     */
    private $typePiece;

    /**
     * Ventil marge.
     *
     * @var bool
     */
    private $ventilMarge;

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
     * Get the code affaire ligne.
     *
     * @return string Returns the code affaire ligne.
     */
    public function getCodeAffaireLigne() {
        return $this->codeAffaireLigne;
    }

    /**
     * Get the code anal article.
     *
     * @return string Returns the code anal article.
     */
    public function getCodeAnalArticle() {
        return $this->codeAnalArticle;
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
     * Get the code chantier ligne.
     *
     * @return string Returns the code chantier ligne.
     */
    public function getCodeChantierLigne() {
        return $this->codeChantierLigne;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the code t v a article.
     *
     * @return string Returns the code t v a article.
     */
    public function getCodeTVAArticle() {
        return $this->codeTVAArticle;
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
     * Get the code ventil article.
     *
     * @return string Returns the code ventil article.
     */
    public function getCodeVentilArticle() {
        return $this->codeVentilArticle;
    }

    /**
     * Get the coefficient b t.
     *
     * @return float Returns the coefficient b t.
     */
    public function getCoefficientBT() {
        return $this->coefficientBT;
    }

    /**
     * Get the date b t.
     *
     * @return DateTime Returns the date b t.
     */
    public function getDateBT() {
        return $this->dateBT;
    }

    /**
     * Get the date preparation.
     *
     * @return DateTime Returns the date preparation.
     */
    public function getDatePreparation() {
        return $this->datePreparation;
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
     * Get the designation bis.
     *
     * @return string Returns the designation bis.
     */
    public function getDesignationBis() {
        return $this->designationBis;
    }

    /**
     * Get the designation bis2.
     *
     * @return string Returns the designation bis2.
     */
    public function getDesignationBis2() {
        return $this->designationBis2;
    }

    /**
     * Get the designation bis3.
     *
     * @return string Returns the designation bis3.
     */
    public function getDesignationBis3() {
        return $this->designationBis3;
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
     * Get the duree b t.
     *
     * @return float Returns the duree b t.
     */
    public function getDureeBT() {
        return $this->dureeBT;
    }

    /**
     * Get the from pointage b t.
     *
     * @return bool Returns the from pointage b t.
     */
    public function getFromPointageBT() {
        return $this->fromPointageBT;
    }

    /**
     * Get the heures prev.
     *
     * @return float Returns the heures prev.
     */
    public function getHeuresPrev() {
        return $this->heuresPrev;
    }

    /**
     * Get the heures reel.
     *
     * @return float Returns the heures reel.
     */
    public function getHeuresReel() {
        return $this->heuresReel;
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
     * Get the no chrono preparation.
     *
     * @return int Returns the no chrono preparation.
     */
    public function getNoChronoPreparation() {
        return $this->noChronoPreparation;
    }

    /**
     * Get the no ligne ori.
     *
     * @return int Returns the no ligne ori.
     */
    public function getNoLigneOri() {
        return $this->noLigneOri;
    }

    /**
     * Get the no piece origine.
     *
     * @return string Returns the no piece origine.
     */
    public function getNoPieceOrigine() {
        return $this->noPieceOrigine;
    }

    /**
     * Get the numero b t.
     *
     * @return int Returns the numero b t.
     */
    public function getNumeroBT() {
        return $this->numeroBT;
    }

    /**
     * Get the numero facture.
     *
     * @return string Returns the numero facture.
     */
    public function getNumeroFacture() {
        return $this->numeroFacture;
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
     * Get the periode preparation.
     *
     * @return DateTime Returns the periode preparation.
     */
    public function getPeriodePreparation() {
        return $this->periodePreparation;
    }

    /**
     * Get the periode ventil marge.
     *
     * @return DateTime Returns the periode ventil marge.
     */
    public function getPeriodeVentilMarge() {
        return $this->periodeVentilMarge;
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
     * Get the prix achat.
     *
     * @return float Returns the prix achat.
     */
    public function getPrixAchat() {
        return $this->prixAchat;
    }

    /**
     * Get the prix achat b t.
     *
     * @return float Returns the prix achat b t.
     */
    public function getPrixAchatBT() {
        return $this->prixAchatBT;
    }

    /**
     * Get the prix unitaire.
     *
     * @return float Returns the prix unitaire.
     */
    public function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    /**
     * Get the prix unitaire pdf.
     *
     * @return float Returns the prix unitaire pdf.
     */
    public function getPrixUnitairePdf() {
        return $this->prixUnitairePdf;
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
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the ref poste cde web f t.
     *
     * @return string Returns the ref poste cde web f t.
     */
    public function getRefPosteCdeWebFT() {
        return $this->refPosteCdeWebFT;
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
     * Get the taux horaire b t.
     *
     * @return float Returns the taux horaire b t.
     */
    public function getTauxHoraireBT() {
        return $this->tauxHoraireBT;
    }

    /**
     * Get the taux tva article.
     *
     * @return float Returns the taux tva article.
     */
    public function getTauxTvaArticle() {
        return $this->tauxTvaArticle;
    }

    /**
     * Get the taux tva taxe.
     *
     * @return float Returns the taux tva taxe.
     */
    public function getTauxTvaTaxe() {
        return $this->tauxTvaTaxe;
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
     * Get the ventil marge.
     *
     * @return bool Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code affaire ligne.
     *
     * @param string $codeAffaireLigne The code affaire ligne.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeAffaireLigne($codeAffaireLigne) {
        $this->codeAffaireLigne = $codeAffaireLigne;
        return $this;
    }

    /**
     * Set the code anal article.
     *
     * @param string $codeAnalArticle The code anal article.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeAnalArticle($codeAnalArticle) {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code chantier ligne.
     *
     * @param string $codeChantierLigne The code chantier ligne.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeChantierLigne($codeChantierLigne) {
        $this->codeChantierLigne = $codeChantierLigne;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code t v a article.
     *
     * @param string $codeTVAArticle The code t v a article.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeTVAArticle($codeTVAArticle) {
        $this->codeTVAArticle = $codeTVAArticle;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil article.
     *
     * @param string $codeVentilArticle The code ventil article.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCodeVentilArticle($codeVentilArticle) {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the coefficient b t.
     *
     * @param float $coefficientBT The coefficient b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setCoefficientBT($coefficientBT) {
        $this->coefficientBT = $coefficientBT;
        return $this;
    }

    /**
     * Set the date b t.
     *
     * @param DateTime $dateBT The date b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDateBT(DateTime $dateBT = null) {
        $this->dateBT = $dateBT;
        return $this;
    }

    /**
     * Set the date preparation.
     *
     * @param DateTime $datePreparation The date preparation.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDatePreparation(DateTime $datePreparation = null) {
        $this->datePreparation = $datePreparation;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool $depuisDebFac The depuis deb fac.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDepuisDebFac($depuisDebFac) {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation bis.
     *
     * @param string $designationBis The designation bis.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignationBis($designationBis) {
        $this->designationBis = $designationBis;
        return $this;
    }

    /**
     * Set the designation bis2.
     *
     * @param string $designationBis2 The designation bis2.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignationBis2($designationBis2) {
        $this->designationBis2 = $designationBis2;
        return $this;
    }

    /**
     * Set the designation bis3.
     *
     * @param string $designationBis3 The designation bis3.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignationBis3($designationBis3) {
        $this->designationBis3 = $designationBis3;
        return $this;
    }

    /**
     * Set the designation r t f.
     *
     * @param string $designationRTF The designation r t f.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDesignationRTF($designationRTF) {
        $this->designationRTF = $designationRTF;
        return $this;
    }

    /**
     * Set the duree b t.
     *
     * @param float $dureeBT The duree b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setDureeBT($dureeBT) {
        $this->dureeBT = $dureeBT;
        return $this;
    }

    /**
     * Set the from pointage b t.
     *
     * @param bool $fromPointageBT The from pointage b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setFromPointageBT($fromPointageBT) {
        $this->fromPointageBT = $fromPointageBT;
        return $this;
    }

    /**
     * Set the heures prev.
     *
     * @param float $heuresPrev The heures prev.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setHeuresPrev($heuresPrev) {
        $this->heuresPrev = $heuresPrev;
        return $this;
    }

    /**
     * Set the heures reel.
     *
     * @param float $heuresReel The heures reel.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setHeuresReel($heuresReel) {
        $this->heuresReel = $heuresReel;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool $imprimerDansPied The imprimer dans pied.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setImprimerDansPied($imprimerDansPied) {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float $montantUnitaireTaxe The montant unitaire taxe.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setMontantUnitaireTaxe($montantUnitaireTaxe) {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string $motCleDansPied The mot cle dans pied.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setMotCleDansPied($motCleDansPied) {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int $noChronoPreparation The no chrono preparation.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setNoChronoPreparation($noChronoPreparation) {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }

    /**
     * Set the no ligne ori.
     *
     * @param int $noLigneOri The no ligne ori.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setNoLigneOri($noLigneOri) {
        $this->noLigneOri = $noLigneOri;
        return $this;
    }

    /**
     * Set the no piece origine.
     *
     * @param string $noPieceOrigine The no piece origine.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setNoPieceOrigine($noPieceOrigine) {
        $this->noPieceOrigine = $noPieceOrigine;
        return $this;
    }

    /**
     * Set the numero b t.
     *
     * @param int $numeroBT The numero b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setNumeroBT($numeroBT) {
        $this->numeroBT = $numeroBT;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string $numeroFacture The numero facture.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setNumeroFacture($numeroFacture) {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime $periodePreparation The periode preparation.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPeriodePreparation(DateTime $periodePreparation = null) {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }

    /**
     * Set the periode ventil marge.
     *
     * @param DateTime $periodeVentilMarge The periode ventil marge.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPeriodeVentilMarge(DateTime $periodeVentilMarge = null) {
        $this->periodeVentilMarge = $periodeVentilMarge;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float $prixAchat The prix achat.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPrixAchat($prixAchat) {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prix achat b t.
     *
     * @param float $prixAchatBT The prix achat b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPrixAchatBT($prixAchatBT) {
        $this->prixAchatBT = $prixAchatBT;
        return $this;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float $prixUnitaire The prix unitaire.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    /**
     * Set the prix unitaire pdf.
     *
     * @param float $prixUnitairePdf The prix unitaire pdf.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPrixUnitairePdf($prixUnitairePdf) {
        $this->prixUnitairePdf = $prixUnitairePdf;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool $pxFacture The px facture.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the ref poste cde web f t.
     *
     * @param string $refPosteCdeWebFT The ref poste cde web f t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setRefPosteCdeWebFT($refPosteCdeWebFT) {
        $this->refPosteCdeWebFT = $refPosteCdeWebFT;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux horaire b t.
     *
     * @param float $tauxHoraireBT The taux horaire b t.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setTauxHoraireBT($tauxHoraireBT) {
        $this->tauxHoraireBT = $tauxHoraireBT;
        return $this;
    }

    /**
     * Set the taux tva article.
     *
     * @param float $tauxTvaArticle The taux tva article.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setTauxTvaArticle($tauxTvaArticle) {
        $this->tauxTvaArticle = $tauxTvaArticle;
        return $this;
    }

    /**
     * Set the taux tva taxe.
     *
     * @param float $tauxTvaTaxe The taux tva taxe.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setTauxTvaTaxe($tauxTvaTaxe) {
        $this->tauxTvaTaxe = $tauxTvaTaxe;
        return $this;
    }

    /**
     * Set the type piece.
     *
     * @param string $typePiece The type piece.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setTypePiece($typePiece) {
        $this->typePiece = $typePiece;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool $ventilMarge The ventil marge.
     * @return FacturesLignes Returns this factures lignes.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
