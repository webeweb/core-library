<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Ecritures model.
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
     * B i c.
     *
     * @var string
     */
    private $bIC;

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
     * Date dec t v a.
     *
     * @var DateTime
     */
    private $dateDecTVA;

    /**
     * Date echeance.
     *
     * @var DateTime
     */
    private $dateEcheance;

    /**
     * Date pointage aux.
     *
     * @var DateTime
     */
    private $datePointageAux;

    /**
     * Date rappro bancaire.
     *
     * @var DateTime
     */
    private $dateRapproBancaire;

    /**
     * Date sys saisie.
     *
     * @var DateTime
     */
    private $dateSysSaisie;

    /**
     * Date sys validation.
     *
     * @var DateTime
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
     * @var DateTime
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
     * I b a n.
     *
     * @var string
     */
    private $iBAN;

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
     * Methode t v a.
     *
     * @var string
     */
    private $methodeTVA;

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
     * @var DateTime
     */
    private $periodeEcriture;

    /**
     * Periodicite debut.
     *
     * @var DateTime
     */
    private $periodiciteDebut;

    /**
     * Periodicite fin.
     *
     * @var DateTime
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
     * R i b.
     *
     * @var string
     */
    private $rIB;

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
     * Tva e4 b i.
     *
     * @var string
     */
    private $tvaE4BI;

    /**
     * Tva e4 d r.
     *
     * @var string
     */
    private $tvaE4DR;

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
     * Get the b i c.
     *
     * @return string Returns the b i c.
     */
    public function getBIC() {
        return $this->bIC;
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
     * Get the date dec t v a.
     *
     * @return DateTime Returns the date dec t v a.
     */
    public function getDateDecTVA() {
        return $this->dateDecTVA;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the date pointage aux.
     *
     * @return DateTime Returns the date pointage aux.
     */
    public function getDatePointageAux() {
        return $this->datePointageAux;
    }

    /**
     * Get the date rappro bancaire.
     *
     * @return DateTime Returns the date rappro bancaire.
     */
    public function getDateRapproBancaire() {
        return $this->dateRapproBancaire;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime Returns the date sys saisie.
     */
    public function getDateSysSaisie() {
        return $this->dateSysSaisie;
    }

    /**
     * Get the date sys validation.
     *
     * @return DateTime Returns the date sys validation.
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
     * @return DateTime Returns the echeance simple.
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
     * Get the i b a n.
     *
     * @return string Returns the i b a n.
     */
    public function getIBAN() {
        return $this->iBAN;
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
     * Get the methode t v a.
     *
     * @return string Returns the methode t v a.
     */
    public function getMethodeTVA() {
        return $this->methodeTVA;
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
     * @return DateTime Returns the periode ecriture.
     */
    public function getPeriodeEcriture() {
        return $this->periodeEcriture;
    }

    /**
     * Get the periodicite debut.
     *
     * @return DateTime Returns the periodicite debut.
     */
    public function getPeriodiciteDebut() {
        return $this->periodiciteDebut;
    }

    /**
     * Get the periodicite fin.
     *
     * @return DateTime Returns the periodicite fin.
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
     * Get the r i b.
     *
     * @return string Returns the r i b.
     */
    public function getRIB() {
        return $this->rIB;
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
     * Get the tva e4 b i.
     *
     * @return string Returns the tva e4 b i.
     */
    public function getTvaE4BI() {
        return $this->tvaE4BI;
    }

    /**
     * Get the tva e4 d r.
     *
     * @return string Returns the tva e4 d r.
     */
    public function getTvaE4DR() {
        return $this->tvaE4DR;
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
     * @return Ecritures Returns this ecritures.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the b i c.
     *
     * @param string $bIC The b i c.
     * @return Ecritures Returns this ecritures.
     */
    public function setBIC($bIC) {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool $bonsAPayer The bons a payer.
     * @return Ecritures Returns this ecritures.
     */
    public function setBonsAPayer($bonsAPayer) {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     * @return Ecritures Returns this ecritures.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the centre simple.
     *
     * @param string $centreSimple The centre simple.
     * @return Ecritures Returns this ecritures.
     */
    public function setCentreSimple($centreSimple) {
        $this->centreSimple = $centreSimple;
        return $this;
    }

    /**
     * Set the client ou frn.
     *
     * @param string $clientOuFrn The client ou frn.
     * @return Ecritures Returns this ecritures.
     */
    public function setClientOuFrn($clientOuFrn) {
        $this->clientOuFrn = $clientOuFrn;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string $codeBanque The code banque.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeBanque($codeBanque) {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code lettrage.
     *
     * @param string $codeLettrage The code lettrage.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeLettrage($codeLettrage) {
        $this->codeLettrage = $codeLettrage;
        return $this;
    }

    /**
     * Set the code lettrage tiers.
     *
     * @param string $codeLettrageTiers The code lettrage tiers.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeLettrageTiers($codeLettrageTiers) {
        $this->codeLettrageTiers = $codeLettrageTiers;
        return $this;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string $codeLibelleAuto The code libelle auto.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeLibelleAuto($codeLibelleAuto) {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }

    /**
     * Set the code operateur.
     *
     * @param string $codeOperateur The code operateur.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeOperateur($codeOperateur) {
        $this->codeOperateur = $codeOperateur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param int $codeTva The code tva.
     * @return Ecritures Returns this ecritures.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string $compteContrepartie The compte contrepartie.
     * @return Ecritures Returns this ecritures.
     */
    public function setCompteContrepartie($compteContrepartie) {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the date dec t v a.
     *
     * @param DateTime $dateDecTVA The date dec t v a.
     * @return Ecritures Returns this ecritures.
     */
    public function setDateDecTVA(DateTime $dateDecTVA = null) {
        $this->dateDecTVA = $dateDecTVA;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime $dateEcheance The date echeance.
     * @return Ecritures Returns this ecritures.
     */
    public function setDateEcheance(DateTime $dateEcheance = null) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date pointage aux.
     *
     * @param DateTime $datePointageAux The date pointage aux.
     * @return Ecritures Returns this ecritures.
     */
    public function setDatePointageAux(DateTime $datePointageAux = null) {
        $this->datePointageAux = $datePointageAux;
        return $this;
    }

    /**
     * Set the date rappro bancaire.
     *
     * @param DateTime $dateRapproBancaire The date rappro bancaire.
     * @return Ecritures Returns this ecritures.
     */
    public function setDateRapproBancaire(DateTime $dateRapproBancaire = null) {
        $this->dateRapproBancaire = $dateRapproBancaire;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime $dateSysSaisie The date sys saisie.
     * @return Ecritures Returns this ecritures.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the date sys validation.
     *
     * @param DateTime $dateSysValidation The date sys validation.
     * @return Ecritures Returns this ecritures.
     */
    public function setDateSysValidation(DateTime $dateSysValidation = null) {
        $this->dateSysValidation = $dateSysValidation;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     * @return Ecritures Returns this ecritures.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the echeance simple.
     *
     * @param DateTime $echeanceSimple The echeance simple.
     * @return Ecritures Returns this ecritures.
     */
    public function setEcheanceSimple(DateTime $echeanceSimple = null) {
        $this->echeanceSimple = $echeanceSimple;
        return $this;
    }

    /**
     * Set the ecriture num.
     *
     * @param string $ecritureNum The ecriture num.
     * @return Ecritures Returns this ecritures.
     */
    public function setEcritureNum($ecritureNum) {
        $this->ecritureNum = $ecritureNum;
        return $this;
    }

    /**
     * Set the en litige.
     *
     * @param bool $enLitige The en litige.
     * @return Ecritures Returns this ecritures.
     */
    public function setEnLitige($enLitige) {
        $this->enLitige = $enLitige;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param int $etat The etat.
     * @return Ecritures Returns this ecritures.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int $folio The folio.
     * @return Ecritures Returns this ecritures.
     */
    public function setFolio($folio) {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the i b a n.
     *
     * @param string $iBAN The i b a n.
     * @return Ecritures Returns this ecritures.
     */
    public function setIBAN($iBAN) {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string $jourEcriture The jour ecriture.
     * @return Ecritures Returns this ecritures.
     */
    public function setJourEcriture($jourEcriture) {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the jrn rappro bancaire.
     *
     * @param string $jrnRapproBancaire The jrn rappro bancaire.
     * @return Ecritures Returns this ecritures.
     */
    public function setJrnRapproBancaire($jrnRapproBancaire) {
        $this->jrnRapproBancaire = $jrnRapproBancaire;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Ecritures Returns this ecritures.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle memo.
     *
     * @param string $libelleMemo The libelle memo.
     * @return Ecritures Returns this ecritures.
     */
    public function setLibelleMemo($libelleMemo) {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int $ligneFolio The ligne folio.
     * @return Ecritures Returns this ecritures.
     */
    public function setLigneFolio($ligneFolio) {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }

    /**
     * Set the methode t v a.
     *
     * @param string $methodeTVA The methode t v a.
     * @return Ecritures Returns this ecritures.
     */
    public function setMethodeTVA($methodeTVA) {
        $this->methodeTVA = $methodeTVA;
        return $this;
    }

    /**
     * Set the milliemes ana.
     *
     * @param float $milliemesAna The milliemes ana.
     * @return Ecritures Returns this ecritures.
     */
    public function setMilliemesAna($milliemesAna) {
        $this->milliemesAna = $milliemesAna;
        return $this;
    }

    /**
     * Set the mode paiement.
     *
     * @param string $modePaiement The mode paiement.
     * @return Ecritures Returns this ecritures.
     */
    public function setModePaiement($modePaiement) {
        $this->modePaiement = $modePaiement;
        return $this;
    }

    /**
     * Set the montant ana.
     *
     * @param float $montantAna The montant ana.
     * @return Ecritures Returns this ecritures.
     */
    public function setMontantAna($montantAna) {
        $this->montantAna = $montantAna;
        return $this;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float $montantSaisiCredit The montant saisi credit.
     * @return Ecritures Returns this ecritures.
     */
    public function setMontantSaisiCredit($montantSaisiCredit) {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float $montantSaisiDebit The montant saisi debit.
     * @return Ecritures Returns this ecritures.
     */
    public function setMontantSaisiDebit($montantSaisiDebit) {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float $montantTenuCredit The montant tenu credit.
     * @return Ecritures Returns this ecritures.
     */
    public function setMontantTenuCredit($montantTenuCredit) {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float $montantTenuDebit The montant tenu debit.
     * @return Ecritures Returns this ecritures.
     */
    public function setMontantTenuDebit($montantTenuDebit) {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the mt dev force.
     *
     * @param bool $mtDevForce The mt dev force.
     * @return Ecritures Returns this ecritures.
     */
    public function setMtDevForce($mtDevForce) {
        $this->mtDevForce = $mtDevForce;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return Ecritures Returns this ecritures.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int $noLotEcritures The no lot ecritures.
     * @return Ecritures Returns this ecritures.
     */
    public function setNoLotEcritures($noLotEcritures) {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the no lot factor.
     *
     * @param int $noLotFactor The no lot factor.
     * @return Ecritures Returns this ecritures.
     */
    public function setNoLotFactor($noLotFactor) {
        $this->noLotFactor = $noLotFactor;
        return $this;
    }

    /**
     * Set the no lot is.
     *
     * @param int $noLotIs The no lot is.
     * @return Ecritures Returns this ecritures.
     */
    public function setNoLotIs($noLotIs) {
        $this->noLotIs = $noLotIs;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string $noLotTrace The no lot trace.
     * @return Ecritures Returns this ecritures.
     */
    public function setNoLotTrace($noLotTrace) {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num cpt origine.
     *
     * @param string $numCptOrigine The num cpt origine.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumCptOrigine($numCptOrigine) {
        $this->numCptOrigine = $numCptOrigine;
        return $this;
    }

    /**
     * Set the num ecr eco.
     *
     * @param int $numEcrEco The num ecr eco.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumEcrEco($numEcrEco) {
        $this->numEcrEco = $numEcrEco;
        return $this;
    }

    /**
     * Set the num edit lettre paiement.
     *
     * @param int $numEditLettrePaiement The num edit lettre paiement.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumEditLettrePaiement($numEditLettrePaiement) {
        $this->numEditLettrePaiement = $numEditLettrePaiement;
        return $this;
    }

    /**
     * Set the num lettrage.
     *
     * @param int $numLettrage The num lettrage.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumLettrage($numLettrage) {
        $this->numLettrage = $numLettrage;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num mandat.
     *
     * @param int $numMandat The num mandat.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumMandat($numMandat) {
        $this->numMandat = $numMandat;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero piece.
     *
     * @param string $numeroPiece The numero piece.
     * @return Ecritures Returns this ecritures.
     */
    public function setNumeroPiece($numeroPiece) {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime $periodeEcriture The periode ecriture.
     * @return Ecritures Returns this ecritures.
     */
    public function setPeriodeEcriture(DateTime $periodeEcriture = null) {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the periodicite debut.
     *
     * @param DateTime $periodiciteDebut The periodicite debut.
     * @return Ecritures Returns this ecritures.
     */
    public function setPeriodiciteDebut(DateTime $periodiciteDebut = null) {
        $this->periodiciteDebut = $periodiciteDebut;
        return $this;
    }

    /**
     * Set the periodicite fin.
     *
     * @param DateTime $periodiciteFin The periodicite fin.
     * @return Ecritures Returns this ecritures.
     */
    public function setPeriodiciteFin(DateTime $periodiciteFin = null) {
        $this->periodiciteFin = $periodiciteFin;
        return $this;
    }

    /**
     * Set the piece interne.
     *
     * @param int $pieceInterne The piece interne.
     * @return Ecritures Returns this ecritures.
     */
    public function setPieceInterne($pieceInterne) {
        $this->pieceInterne = $pieceInterne;
        return $this;
    }

    /**
     * Set the prct repartition.
     *
     * @param float $prctRepartition The prct repartition.
     * @return Ecritures Returns this ecritures.
     */
    public function setPrctRepartition($prctRepartition) {
        $this->prctRepartition = $prctRepartition;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return Ecritures Returns this ecritures.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float $quantite2 The quantite2.
     * @return Ecritures Returns this ecritures.
     */
    public function setQuantite2($quantite2) {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the r i b.
     *
     * @param string $rIB The r i b.
     * @return Ecritures Returns this ecritures.
     */
    public function setRIB($rIB) {
        $this->rIB = $rIB;
        return $this;
    }

    /**
     * Set the rappro bancaire ok.
     *
     * @param bool $rapproBancaireOk The rappro bancaire ok.
     * @return Ecritures Returns this ecritures.
     */
    public function setRapproBancaireOk($rapproBancaireOk) {
        $this->rapproBancaireOk = $rapproBancaireOk;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return Ecritures Returns this ecritures.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the reference tire.
     *
     * @param string $referenceTire The reference tire.
     * @return Ecritures Returns this ecritures.
     */
    public function setReferenceTire($referenceTire) {
        $this->referenceTire = $referenceTire;
        return $this;
    }

    /**
     * Set the tva e4 b i.
     *
     * @param string $tvaE4BI The tva e4 b i.
     * @return Ecritures Returns this ecritures.
     */
    public function setTvaE4BI($tvaE4BI) {
        $this->tvaE4BI = $tvaE4BI;
        return $this;
    }

    /**
     * Set the tva e4 d r.
     *
     * @param string $tvaE4DR The tva e4 d r.
     * @return Ecritures Returns this ecritures.
     */
    public function setTvaE4DR($tvaE4DR) {
        $this->tvaE4DR = $tvaE4DR;
        return $this;
    }

    /**
     * Set the tva e4 mt.
     *
     * @param float $tvaE4Mt The tva e4 mt.
     * @return Ecritures Returns this ecritures.
     */
    public function setTvaE4Mt($tvaE4Mt) {
        $this->tvaE4Mt = $tvaE4Mt;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     * @return Ecritures Returns this ecritures.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string $typeSaisie The type saisie.
     * @return Ecritures Returns this ecritures.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }

    /**
     * Set the validee.
     *
     * @param bool $validee The validee.
     * @return Ecritures Returns this ecritures.
     */
    public function setValidee($validee) {
        $this->validee = $validee;
        return $this;
    }
}
