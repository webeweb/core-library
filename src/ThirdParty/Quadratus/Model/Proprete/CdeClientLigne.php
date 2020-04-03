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
 * Cde client ligne.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeClientLigne {

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
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

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
     * Code ventil vente.
     *
     * @var string
     */
    private $codeVentilVente;

    /**
     * Commande recue.
     *
     * @var bool
     */
    private $commandeRecue;

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
     * No bl.
     *
     * @var string
     */
    private $noBl;

    /**
     * No ligne bl.
     *
     * @var int
     */
    private $noLigneBl;

    /**
     * No piece.
     *
     * @var string
     */
    private $noPiece;

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
     * Prix achat.
     *
     * @var float
     */
    private $prixAchat;

    /**
     * Prixbloque.
     *
     * @var bool
     */
    private $prixbloque;

    /**
     * Pu brut.
     *
     * @var float
     */
    private $puBrut;

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
     * Taux commission.
     *
     * @var float
     */
    private $tauxCommission;

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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
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
     * Get the code ventil vente.
     *
     * @return string Returns the code ventil vente.
     */
    public function getCodeVentilVente() {
        return $this->codeVentilVente;
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
     * Get the no bl.
     *
     * @return string Returns the no bl.
     */
    public function getNoBl() {
        return $this->noBl;
    }

    /**
     * Get the no ligne bl.
     *
     * @return int Returns the no ligne bl.
     */
    public function getNoLigneBl() {
        return $this->noLigneBl;
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
     * Get the prix achat.
     *
     * @return float Returns the prix achat.
     */
    public function getPrixAchat() {
        return $this->prixAchat;
    }

    /**
     * Get the prixbloque.
     *
     * @return bool Returns the prixbloque.
     */
    public function getPrixbloque() {
        return $this->prixbloque;
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
     * Get the taux commission.
     *
     * @return float Returns the taux commission.
     */
    public function getTauxCommission() {
        return $this->tauxCommission;
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
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param int $codeUnite The code unite.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string $codeVariante The code variante.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeVariante($codeVariante) {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string $codeVentilVente The code ventil vente.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCodeVentilVente($codeVentilVente) {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the commande recue.
     *
     * @param bool $commandeRecue The commande recue.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setCommandeRecue($commandeRecue) {
        $this->commandeRecue = $commandeRecue;
        return $this;
    }

    /**
     * Set the date reception prevue.
     *
     * @param DateTime|null $dateReceptionPrevue The date reception prevue.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDateReceptionPrevue(DateTime $dateReceptionPrevue = null) {
        $this->dateReceptionPrevue = $dateReceptionPrevue;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the indice ligne.
     *
     * @param int $indiceLigne The indice ligne.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setIndiceLigne($indiceLigne) {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }

    /**
     * Set the no bl.
     *
     * @param string $noBl The no bl.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNoBl($noBl) {
        $this->noBl = $noBl;
        return $this;
    }

    /**
     * Set the no ligne bl.
     *
     * @param int $noLigneBl The no ligne bl.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNoLigneBl($noLigneBl) {
        $this->noLigneBl = $noLigneBl;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string $noPiece The no piece.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNoPiece($noPiece) {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string $numeroFacture The numero facture.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNumeroFacture($numeroFacture) {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float $prixAchat The prix achat.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setPrixAchat($prixAchat) {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prixbloque.
     *
     * @param bool $prixbloque The prixbloque.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setPrixbloque($prixbloque) {
        $this->prixbloque = $prixbloque;
        return $this;
    }

    /**
     * Set the pu brut.
     *
     * @param float $puBrut The pu brut.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setPuBrut($puBrut) {
        $this->puBrut = $puBrut;
        return $this;
    }

    /**
     * Set the qte origine.
     *
     * @param float $qteOrigine The qte origine.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setQteOrigine($qteOrigine) {
        $this->qteOrigine = $qteOrigine;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux commission.
     *
     * @param float $tauxCommission The taux commission.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setTauxCommission($tauxCommission) {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float $tauxTva The taux tva.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setTauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     * @return CdeClientLigne Returns this Cde client ligne.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
