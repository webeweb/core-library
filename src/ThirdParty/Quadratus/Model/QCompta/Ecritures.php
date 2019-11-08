<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Ecritures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Ecritures {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

    /**
     * Bons a payer.
     *
     * @var bool
     */
    private $bonsAPayer;

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Centre simple.
     *
     * @var string
     */
    private $centreSimple;

    /**
     * Client ou frn.
     *
     * @var string
     */
    private $clientOuFrn;

    /**
     * Code banque.
     *
     * @var string
     */
    private $codeBanque;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Code lettrage.
     *
     * @var string
     */
    private $codeLettrage;

    /**
     * Code lettrage tiers.
     *
     * @var string
     */
    private $codeLettrageTiers;

    /**
     * Code libelle auto.
     *
     * @var string
     */
    private $codeLibelleAuto;

    /**
     * Code operateur.
     *
     * @var string
     */
    private $codeOperateur;

    /**
     * Code tva.
     *
     * @var int
     */
    private $codeTva;

    /**
     * Compte contrepartie.
     *
     * @var string
     */
    private $compteContrepartie;

    /**
     * Date dec tva.
     *
     * @var DateTime|null
     */
    private $dateDecTva;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Date pointage aux.
     *
     * @var DateTime|null
     */
    private $datePointageAux;

    /**
     * Date rappro bancaire.
     *
     * @var DateTime|null
     */
    private $dateRapproBancaire;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Date sys validation.
     *
     * @var DateTime|null
     */
    private $dateSysValidation;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Echeance simple.
     *
     * @var DateTime|null
     */
    private $echeanceSimple;

    /**
     * Ecriture num.
     *
     * @var string
     */
    private $ecritureNum;

    /**
     * En litige.
     *
     * @var bool
     */
    private $enLitige;

    /**
     * Etat.
     *
     * @var int
     */
    private $etat;

    /**
     * Folio.
     *
     * @var int
     */
    private $folio;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Jour ecriture.
     *
     * @var string
     */
    private $jourEcriture;

    /**
     * Jrn rappro bancaire.
     *
     * @var string
     */
    private $jrnRapproBancaire;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Libelle memo.
     *
     * @var string
     */
    private $libelleMemo;

    /**
     * Ligne folio.
     *
     * @var int
     */
    private $ligneFolio;

    /**
     * Methode tva.
     *
     * @var string
     */
    private $methodeTva;

    /**
     * Milliemes ana.
     *
     * @var float
     */
    private $milliemesAna;

    /**
     * Mode paiement.
     *
     * @var string
     */
    private $modePaiement;

    /**
     * Montant ana.
     *
     * @var float
     */
    private $montantAna;

    /**
     * Montant saisi credit.
     *
     * @var float
     */
    private $montantSaisiCredit;

    /**
     * Montant saisi debit.
     *
     * @var float
     */
    private $montantSaisiDebit;

    /**
     * Montant tenu credit.
     *
     * @var float
     */
    private $montantTenuCredit;

    /**
     * Montant tenu debit.
     *
     * @var float
     */
    private $montantTenuDebit;

    /**
     * Mt dev force.
     *
     * @var bool
     */
    private $mtDevForce;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * No lot ecritures.
     *
     * @var int
     */
    private $noLotEcritures;

    /**
     * No lot factor.
     *
     * @var int
     */
    private $noLotFactor;

    /**
     * No lot is.
     *
     * @var int
     */
    private $noLotIs;

    /**
     * No lot trace.
     *
     * @var string
     */
    private $noLotTrace;

    /**
     * Num cpt origine.
     *
     * @var string
     */
    private $numCptOrigine;

    /**
     * Num ecr eco.
     *
     * @var int
     */
    private $numEcrEco;

    /**
     * Num edit lettre paiement.
     *
     * @var int
     */
    private $numEditLettrePaiement;

    /**
     * Num lettrage.
     *
     * @var int
     */
    private $numLettrage;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num mandat.
     *
     * @var int
     */
    private $numMandat;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero piece.
     *
     * @var string
     */
    private $numeroPiece;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Periodicite debut.
     *
     * @var DateTime|null
     */
    private $periodiciteDebut;

    /**
     * Periodicite fin.
     *
     * @var DateTime|null
     */
    private $periodiciteFin;

    /**
     * Piece interne.
     *
     * @var int
     */
    private $pieceInterne;

    /**
     * Prct repartition.
     *
     * @var float
     */
    private $prctRepartition;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Quantite2.
     *
     * @var float
     */
    private $quantite2;

    /**
     * Rappro bancaire ok.
     *
     * @var bool
     */
    private $rapproBancaireOk;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Reference tire.
     *
     * @var string
     */
    private $referenceTire;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Tva e4 bi.
     *
     * @var string
     */
    private $tvaE4Bi;

    /**
     * Tva e4 dr.
     *
     * @var string
     */
    private $tvaE4Dr;

    /**
     * Tva e4 mt.
     *
     * @var float
     */
    private $tvaE4Mt;

    /**
     * Type ligne.
     *
     * @var string
     */
    private $typeLigne;

    /**
     * Type saisie.
     *
     * @var string
     */
    private $typeSaisie;

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
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
    }

    /**
     * Get the bons a payer.
     *
     * @return bool Returns the bons a payer.
     */
    public function getBonsAPayer() {
        return $this->bonsAPayer;
    }

    /**
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
    }

    /**
     * Get the centre simple.
     *
     * @return string Returns the centre simple.
     */
    public function getCentreSimple() {
        return $this->centreSimple;
    }

    /**
     * Get the client ou frn.
     *
     * @return string Returns the client ou frn.
     */
    public function getClientOuFrn() {
        return $this->clientOuFrn;
    }

    /**
     * Get the code banque.
     *
     * @return string Returns the code banque.
     */
    public function getCodeBanque() {
        return $this->codeBanque;
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
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
    }

    /**
     * Get the code lettrage.
     *
     * @return string Returns the code lettrage.
     */
    public function getCodeLettrage() {
        return $this->codeLettrage;
    }

    /**
     * Get the code lettrage tiers.
     *
     * @return string Returns the code lettrage tiers.
     */
    public function getCodeLettrageTiers() {
        return $this->codeLettrageTiers;
    }

    /**
     * Get the code libelle auto.
     *
     * @return string Returns the code libelle auto.
     */
    public function getCodeLibelleAuto() {
        return $this->codeLibelleAuto;
    }

    /**
     * Get the code operateur.
     *
     * @return string Returns the code operateur.
     */
    public function getCodeOperateur() {
        return $this->codeOperateur;
    }

    /**
     * Get the code tva.
     *
     * @return int Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the compte contrepartie.
     *
     * @return string Returns the compte contrepartie.
     */
    public function getCompteContrepartie() {
        return $this->compteContrepartie;
    }

    /**
     * Get the date dec tva.
     *
     * @return DateTime|null Returns the date dec tva.
     */
    public function getDateDecTva() {
        return $this->dateDecTva;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the date pointage aux.
     *
     * @return DateTime|null Returns the date pointage aux.
     */
    public function getDatePointageAux() {
        return $this->datePointageAux;
    }

    /**
     * Get the date rappro bancaire.
     *
     * @return DateTime|null Returns the date rappro bancaire.
     */
    public function getDateRapproBancaire() {
        return $this->dateRapproBancaire;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie() {
        return $this->dateSysSaisie;
    }

    /**
     * Get the date sys validation.
     *
     * @return DateTime|null Returns the date sys validation.
     */
    public function getDateSysValidation() {
        return $this->dateSysValidation;
    }

    /**
     * Get the dom banque.
     *
     * @return string Returns the dom banque.
     */
    public function getDomBanque() {
        return $this->domBanque;
    }

    /**
     * Get the echeance simple.
     *
     * @return DateTime|null Returns the echeance simple.
     */
    public function getEcheanceSimple() {
        return $this->echeanceSimple;
    }

    /**
     * Get the ecriture num.
     *
     * @return string Returns the ecriture num.
     */
    public function getEcritureNum() {
        return $this->ecritureNum;
    }

    /**
     * Get the en litige.
     *
     * @return bool Returns the en litige.
     */
    public function getEnLitige() {
        return $this->enLitige;
    }

    /**
     * Get the etat.
     *
     * @return int Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the folio.
     *
     * @return int Returns the folio.
     */
    public function getFolio() {
        return $this->folio;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the jour ecriture.
     *
     * @return string Returns the jour ecriture.
     */
    public function getJourEcriture() {
        return $this->jourEcriture;
    }

    /**
     * Get the jrn rappro bancaire.
     *
     * @return string Returns the jrn rappro bancaire.
     */
    public function getJrnRapproBancaire() {
        return $this->jrnRapproBancaire;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the libelle memo.
     *
     * @return string Returns the libelle memo.
     */
    public function getLibelleMemo() {
        return $this->libelleMemo;
    }

    /**
     * Get the ligne folio.
     *
     * @return int Returns the ligne folio.
     */
    public function getLigneFolio() {
        return $this->ligneFolio;
    }

    /**
     * Get the methode tva.
     *
     * @return string Returns the methode tva.
     */
    public function getMethodeTva() {
        return $this->methodeTva;
    }

    /**
     * Get the milliemes ana.
     *
     * @return float Returns the milliemes ana.
     */
    public function getMilliemesAna() {
        return $this->milliemesAna;
    }

    /**
     * Get the mode paiement.
     *
     * @return string Returns the mode paiement.
     */
    public function getModePaiement() {
        return $this->modePaiement;
    }

    /**
     * Get the montant ana.
     *
     * @return float Returns the montant ana.
     */
    public function getMontantAna() {
        return $this->montantAna;
    }

    /**
     * Get the montant saisi credit.
     *
     * @return float Returns the montant saisi credit.
     */
    public function getMontantSaisiCredit() {
        return $this->montantSaisiCredit;
    }

    /**
     * Get the montant saisi debit.
     *
     * @return float Returns the montant saisi debit.
     */
    public function getMontantSaisiDebit() {
        return $this->montantSaisiDebit;
    }

    /**
     * Get the montant tenu credit.
     *
     * @return float Returns the montant tenu credit.
     */
    public function getMontantTenuCredit() {
        return $this->montantTenuCredit;
    }

    /**
     * Get the montant tenu debit.
     *
     * @return float Returns the montant tenu debit.
     */
    public function getMontantTenuDebit() {
        return $this->montantTenuDebit;
    }

    /**
     * Get the mt dev force.
     *
     * @return bool Returns the mt dev force.
     */
    public function getMtDevForce() {
        return $this->mtDevForce;
    }

    /**
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the no lot ecritures.
     *
     * @return int Returns the no lot ecritures.
     */
    public function getNoLotEcritures() {
        return $this->noLotEcritures;
    }

    /**
     * Get the no lot factor.
     *
     * @return int Returns the no lot factor.
     */
    public function getNoLotFactor() {
        return $this->noLotFactor;
    }

    /**
     * Get the no lot is.
     *
     * @return int Returns the no lot is.
     */
    public function getNoLotIs() {
        return $this->noLotIs;
    }

    /**
     * Get the no lot trace.
     *
     * @return string Returns the no lot trace.
     */
    public function getNoLotTrace() {
        return $this->noLotTrace;
    }

    /**
     * Get the num cpt origine.
     *
     * @return string Returns the num cpt origine.
     */
    public function getNumCptOrigine() {
        return $this->numCptOrigine;
    }

    /**
     * Get the num ecr eco.
     *
     * @return int Returns the num ecr eco.
     */
    public function getNumEcrEco() {
        return $this->numEcrEco;
    }

    /**
     * Get the num edit lettre paiement.
     *
     * @return int Returns the num edit lettre paiement.
     */
    public function getNumEditLettrePaiement() {
        return $this->numEditLettrePaiement;
    }

    /**
     * Get the num lettrage.
     *
     * @return int Returns the num lettrage.
     */
    public function getNumLettrage() {
        return $this->numLettrage;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num mandat.
     *
     * @return int Returns the num mandat.
     */
    public function getNumMandat() {
        return $this->numMandat;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the numero piece.
     *
     * @return string Returns the numero piece.
     */
    public function getNumeroPiece() {
        return $this->numeroPiece;
    }

    /**
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Get the periodicite debut.
     *
     * @return DateTime|null Returns the periodicite debut.
     */
    public function getPeriodiciteDebut() {
        return $this->periodiciteDebut;
    }

    /**
     * Get the periodicite fin.
     *
     * @return DateTime|null Returns the periodicite fin.
     */
    public function getPeriodiciteFin() {
        return $this->periodiciteFin;
    }

    /**
     * Get the piece interne.
     *
     * @return int Returns the piece interne.
     */
    public function getPieceInterne() {
        return $this->pieceInterne;
    }

    /**
     * Get the prct repartition.
     *
     * @return float Returns the prct repartition.
     */
    public function getPrctRepartition() {
        return $this->prctRepartition;
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
     * Get the quantite2.
     *
     * @return float Returns the quantite2.
     */
    public function getQuantite2() {
        return $this->quantite2;
    }

    /**
     * Get the rappro bancaire ok.
     *
     * @return bool Returns the rappro bancaire ok.
     */
    public function getRapproBancaireOk() {
        return $this->rapproBancaireOk;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the reference tire.
     *
     * @return string Returns the reference tire.
     */
    public function getReferenceTire() {
        return $this->referenceTire;
    }

    /**
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Get the tva e4 bi.
     *
     * @return string Returns the tva e4 bi.
     */
    public function getTvaE4Bi() {
        return $this->tvaE4Bi;
    }

    /**
     * Get the tva e4 dr.
     *
     * @return string Returns the tva e4 dr.
     */
    public function getTvaE4Dr() {
        return $this->tvaE4Dr;
    }

    /**
     * Get the tva e4 mt.
     *
     * @return float Returns the tva e4 mt.
     */
    public function getTvaE4Mt() {
        return $this->tvaE4Mt;
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
     * Get the type saisie.
     *
     * @return string Returns the type saisie.
     */
    public function getTypeSaisie() {
        return $this->typeSaisie;
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
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool $bonsAPayer The bons a payer.
     */
    public function setBonsAPayer($bonsAPayer) {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the centre simple.
     *
     * @param string $centreSimple The centre simple.
     */
    public function setCentreSimple($centreSimple) {
        $this->centreSimple = $centreSimple;
        return $this;
    }

    /**
     * Set the client ou frn.
     *
     * @param string $clientOuFrn The client ou frn.
     */
    public function setClientOuFrn($clientOuFrn) {
        $this->clientOuFrn = $clientOuFrn;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string $codeBanque The code banque.
     */
    public function setCodeBanque($codeBanque) {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code lettrage.
     *
     * @param string $codeLettrage The code lettrage.
     */
    public function setCodeLettrage($codeLettrage) {
        $this->codeLettrage = $codeLettrage;
        return $this;
    }

    /**
     * Set the code lettrage tiers.
     *
     * @param string $codeLettrageTiers The code lettrage tiers.
     */
    public function setCodeLettrageTiers($codeLettrageTiers) {
        $this->codeLettrageTiers = $codeLettrageTiers;
        return $this;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string $codeLibelleAuto The code libelle auto.
     */
    public function setCodeLibelleAuto($codeLibelleAuto) {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }

    /**
     * Set the code operateur.
     *
     * @param string $codeOperateur The code operateur.
     */
    public function setCodeOperateur($codeOperateur) {
        $this->codeOperateur = $codeOperateur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param int $codeTva The code tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string $compteContrepartie The compte contrepartie.
     */
    public function setCompteContrepartie($compteContrepartie) {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the date dec tva.
     *
     * @param DateTime|null $dateDecTva The date dec tva.
     */
    public function setDateDecTva(DateTime $dateDecTva = null) {
        $this->dateDecTva = $dateDecTva;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     */
    public function setDateEcheance(DateTime $dateEcheance = null) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date pointage aux.
     *
     * @param DateTime|null $datePointageAux The date pointage aux.
     */
    public function setDatePointageAux(DateTime $datePointageAux = null) {
        $this->datePointageAux = $datePointageAux;
        return $this;
    }

    /**
     * Set the date rappro bancaire.
     *
     * @param DateTime|null $dateRapproBancaire The date rappro bancaire.
     */
    public function setDateRapproBancaire(DateTime $dateRapproBancaire = null) {
        $this->dateRapproBancaire = $dateRapproBancaire;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the date sys validation.
     *
     * @param DateTime|null $dateSysValidation The date sys validation.
     */
    public function setDateSysValidation(DateTime $dateSysValidation = null) {
        $this->dateSysValidation = $dateSysValidation;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the echeance simple.
     *
     * @param DateTime|null $echeanceSimple The echeance simple.
     */
    public function setEcheanceSimple(DateTime $echeanceSimple = null) {
        $this->echeanceSimple = $echeanceSimple;
        return $this;
    }

    /**
     * Set the ecriture num.
     *
     * @param string $ecritureNum The ecriture num.
     */
    public function setEcritureNum($ecritureNum) {
        $this->ecritureNum = $ecritureNum;
        return $this;
    }

    /**
     * Set the en litige.
     *
     * @param bool $enLitige The en litige.
     */
    public function setEnLitige($enLitige) {
        $this->enLitige = $enLitige;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param int $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int $folio The folio.
     */
    public function setFolio($folio) {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string $jourEcriture The jour ecriture.
     */
    public function setJourEcriture($jourEcriture) {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the jrn rappro bancaire.
     *
     * @param string $jrnRapproBancaire The jrn rappro bancaire.
     */
    public function setJrnRapproBancaire($jrnRapproBancaire) {
        $this->jrnRapproBancaire = $jrnRapproBancaire;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle memo.
     *
     * @param string $libelleMemo The libelle memo.
     */
    public function setLibelleMemo($libelleMemo) {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int $ligneFolio The ligne folio.
     */
    public function setLigneFolio($ligneFolio) {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }

    /**
     * Set the methode tva.
     *
     * @param string $methodeTva The methode tva.
     */
    public function setMethodeTva($methodeTva) {
        $this->methodeTva = $methodeTva;
        return $this;
    }

    /**
     * Set the milliemes ana.
     *
     * @param float $milliemesAna The milliemes ana.
     */
    public function setMilliemesAna($milliemesAna) {
        $this->milliemesAna = $milliemesAna;
        return $this;
    }

    /**
     * Set the mode paiement.
     *
     * @param string $modePaiement The mode paiement.
     */
    public function setModePaiement($modePaiement) {
        $this->modePaiement = $modePaiement;
        return $this;
    }

    /**
     * Set the montant ana.
     *
     * @param float $montantAna The montant ana.
     */
    public function setMontantAna($montantAna) {
        $this->montantAna = $montantAna;
        return $this;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float $montantSaisiCredit The montant saisi credit.
     */
    public function setMontantSaisiCredit($montantSaisiCredit) {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float $montantSaisiDebit The montant saisi debit.
     */
    public function setMontantSaisiDebit($montantSaisiDebit) {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float $montantTenuCredit The montant tenu credit.
     */
    public function setMontantTenuCredit($montantTenuCredit) {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float $montantTenuDebit The montant tenu debit.
     */
    public function setMontantTenuDebit($montantTenuDebit) {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the mt dev force.
     *
     * @param bool $mtDevForce The mt dev force.
     */
    public function setMtDevForce($mtDevForce) {
        $this->mtDevForce = $mtDevForce;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int $noLotEcritures The no lot ecritures.
     */
    public function setNoLotEcritures($noLotEcritures) {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the no lot factor.
     *
     * @param int $noLotFactor The no lot factor.
     */
    public function setNoLotFactor($noLotFactor) {
        $this->noLotFactor = $noLotFactor;
        return $this;
    }

    /**
     * Set the no lot is.
     *
     * @param int $noLotIs The no lot is.
     */
    public function setNoLotIs($noLotIs) {
        $this->noLotIs = $noLotIs;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string $noLotTrace The no lot trace.
     */
    public function setNoLotTrace($noLotTrace) {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num cpt origine.
     *
     * @param string $numCptOrigine The num cpt origine.
     */
    public function setNumCptOrigine($numCptOrigine) {
        $this->numCptOrigine = $numCptOrigine;
        return $this;
    }

    /**
     * Set the num ecr eco.
     *
     * @param int $numEcrEco The num ecr eco.
     */
    public function setNumEcrEco($numEcrEco) {
        $this->numEcrEco = $numEcrEco;
        return $this;
    }

    /**
     * Set the num edit lettre paiement.
     *
     * @param int $numEditLettrePaiement The num edit lettre paiement.
     */
    public function setNumEditLettrePaiement($numEditLettrePaiement) {
        $this->numEditLettrePaiement = $numEditLettrePaiement;
        return $this;
    }

    /**
     * Set the num lettrage.
     *
     * @param int $numLettrage The num lettrage.
     */
    public function setNumLettrage($numLettrage) {
        $this->numLettrage = $numLettrage;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num mandat.
     *
     * @param int $numMandat The num mandat.
     */
    public function setNumMandat($numMandat) {
        $this->numMandat = $numMandat;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero piece.
     *
     * @param string $numeroPiece The numero piece.
     */
    public function setNumeroPiece($numeroPiece) {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the periodicite debut.
     *
     * @param DateTime|null $periodiciteDebut The periodicite debut.
     */
    public function setPeriodiciteDebut(DateTime $periodiciteDebut = null) {
        $this->periodiciteDebut = $periodiciteDebut;
        return $this;
    }

    /**
     * Set the periodicite fin.
     *
     * @param DateTime|null $periodiciteFin The periodicite fin.
     */
    public function setPeriodiciteFin(DateTime $periodiciteFin = null) {
        $this->periodiciteFin = $periodiciteFin;
        return $this;
    }

    /**
     * Set the piece interne.
     *
     * @param int $pieceInterne The piece interne.
     */
    public function setPieceInterne($pieceInterne) {
        $this->pieceInterne = $pieceInterne;
        return $this;
    }

    /**
     * Set the prct repartition.
     *
     * @param float $prctRepartition The prct repartition.
     */
    public function setPrctRepartition($prctRepartition) {
        $this->prctRepartition = $prctRepartition;
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
     * Set the quantite2.
     *
     * @param float $quantite2 The quantite2.
     */
    public function setQuantite2($quantite2) {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the rappro bancaire ok.
     *
     * @param bool $rapproBancaireOk The rappro bancaire ok.
     */
    public function setRapproBancaireOk($rapproBancaireOk) {
        $this->rapproBancaireOk = $rapproBancaireOk;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the reference tire.
     *
     * @param string $referenceTire The reference tire.
     */
    public function setReferenceTire($referenceTire) {
        $this->referenceTire = $referenceTire;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the tva e4 bi.
     *
     * @param string $tvaE4Bi The tva e4 bi.
     */
    public function setTvaE4Bi($tvaE4Bi) {
        $this->tvaE4Bi = $tvaE4Bi;
        return $this;
    }

    /**
     * Set the tva e4 dr.
     *
     * @param string $tvaE4Dr The tva e4 dr.
     */
    public function setTvaE4Dr($tvaE4Dr) {
        $this->tvaE4Dr = $tvaE4Dr;
        return $this;
    }

    /**
     * Set the tva e4 mt.
     *
     * @param float $tvaE4Mt The tva e4 mt.
     */
    public function setTvaE4Mt($tvaE4Mt) {
        $this->tvaE4Mt = $tvaE4Mt;
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

    /**
     * Set the type saisie.
     *
     * @param string $typeSaisie The type saisie.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool $validee The validee.
     */
    public function setValidee($validee) {
        $this->validee = $validee;
        return $this;
    }
}
