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
 * Dossier3.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier3 {

    /**
     * Achat vente automate.
     *
     * @var bool
     */
    private $achatVenteAutomate;

    /**
     * Achat vente local tva.
     *
     * @var string
     */
    private $achatVenteLocalTva;

    /**
     * Achat vente stop tva.
     *
     * @var bool
     */
    private $achatVenteStopTva;

    /**
     * Bons a payer.
     *
     * @var bool
     */
    private $bonsAPayer;

    /**
     * Code ics.
     *
     * @var string
     */
    private $codeIcs;

    /**
     * Code journal revision.
     *
     * @var string
     */
    private $codeJournalRevision;

    /**
     * Code journal transf immo.
     *
     * @var string
     */
    private $codeJournalTransfImmo;

    /**
     * Comp cli frs.
     *
     * @var bool
     */
    private $compCliFrs;

    /**
     * Compte debut assurance.
     *
     * @var string
     */
    private $compteDebutAssurance;

    /**
     * Compte debut bail.
     *
     * @var string
     */
    private $compteDebutBail;

    /**
     * Compte debut car.
     *
     * @var string
     */
    private $compteDebutCar;

    /**
     * Compte debut subventions.
     *
     * @var string
     */
    private $compteDebutSubventions;

    /**
     * Compte fin assurance.
     *
     * @var string
     */
    private $compteFinAssurance;

    /**
     * Compte fin bail.
     *
     * @var string
     */
    private $compteFinBail;

    /**
     * Compte fin car.
     *
     * @var string
     */
    private $compteFinCar;

    /**
     * Compte fin subventions.
     *
     * @var string
     */
    private $compteFinSubventions;

    /**
     * Compte tvacar.
     *
     * @var string
     */
    private $compteTvacar;

    /**
     * Conserve mois rb.
     *
     * @var bool
     */
    private $conserveMoisRb;

    /**
     * Controle edition.
     *
     * @var bool
     */
    private $controleEdition;

    /**
     * Controle exist ecr.
     *
     * @var string
     */
    private $controleExistEcr;

    /**
     * Controle ref tire.
     *
     * @var bool
     */
    private $controleRefTire;

    /**
     * Cpt transf immo communs.
     *
     * @var bool
     */
    private $cptTransfImmoCommuns;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Date transf cb.
     *
     * @var DateTime|null
     */
    private $dateTransfCb;

    /**
     * Date transf cli douteux.
     *
     * @var DateTime|null
     */
    private $dateTransfCliDouteux;

    /**
     * Date transf int courus.
     *
     * @var DateTime|null
     */
    private $dateTransfIntCourus;

    /**
     * Date transf int extournes.
     *
     * @var DateTime|null
     */
    private $dateTransfIntExtournes;

    /**
     * Date transf lf.
     *
     * @var DateTime|null
     */
    private $dateTransfLf;

    /**
     * Date transf prov cp.
     *
     * @var DateTime|null
     */
    private $dateTransfProvCp;

    /**
     * Date transfert ech cb.
     *
     * @var DateTime|null
     */
    private $dateTransfertEchCb;

    /**
     * Date transfert ech lf.
     *
     * @var DateTime|null
     */
    private $dateTransfertEchLf;

    /**
     * Date transfert echeance.
     *
     * @var DateTime|null
     */
    private $dateTransfertEcheance;

    /**
     * Debut calcul immo.
     *
     * @var DateTime|null
     */
    private $debutCalculImmo;

    /**
     * Delai rejet effet.
     *
     * @var string
     */
    private $delaiRejetEffet;

    /**
     * Detail cb.
     *
     * @var bool
     */
    private $detailCb;

    /**
     * Detail immo.
     *
     * @var bool
     */
    private $detailImmo;

    /**
     * Dot franc centime.
     *
     * @var string
     */
    private $dotFrancCentime;

    /**
     * Edi400.
     *
     * @var bool
     */
    private $edi400;

    /**
     * Edit ana contrepasse.
     *
     * @var bool
     */
    private $editAnaContrepasse;

    /**
     * Fin calcul immo.
     *
     * @var DateTime|null
     */
    private $finCalculImmo;

    /**
     * Folio revision.
     *
     * @var int
     */
    private $folioRevision;

    /**
     * Folio transf immo.
     *
     * @var int
     */
    private $folioTransfImmo;

    /**
     * Gestion pmag client.
     *
     * @var bool
     */
    private $gestionPmagClient;

    /**
     * Gestion traite papier.
     *
     * @var bool
     */
    private $gestionTraitePapier;

    /**
     * Gestion virement frn.
     *
     * @var bool
     */
    private $gestionVirementFrn;

    /**
     * Immo detail lignes.
     *
     * @var bool
     */
    private $immoDetailLignes;

    /**
     * Immo detail par cpt.
     *
     * @var bool
     */
    private $immoDetailParCpt;

    /**
     * Immo edit ensemble.
     *
     * @var bool
     */
    private $immoEditEnsemble;

    /**
     * Immo jours par an.
     *
     * @var int
     */
    private $immoJoursParAn;

    /**
     * Immo ss tot immo.
     *
     * @var bool
     */
    private $immoSsTotImmo;

    /**
     * Immo tot par compte.
     *
     * @var bool
     */
    private $immoTotParCompte;

    /**
     * Immo transfert forfait vers reel.
     *
     * @var bool
     */
    private $immoTransfertForfaitVersReel;

    /**
     * Immo tri analytique.
     *
     * @var bool
     */
    private $immoTriAnalytique;

    /**
     * Immo tri par date.
     *
     * @var bool
     */
    private $immoTriParDate;

    /**
     * Immo tri par service.
     *
     * @var bool
     */
    private $immoTriParService;

    /**
     * Immo type liasse.
     *
     * @var string
     */
    private $immoTypeLiasse;

    /**
     * Is client exp.
     *
     * @var bool
     */
    private $isClientExp;

    /**
     * Lettre pvaut bo.
     *
     * @var bool
     */
    private $lettrePvautBo;

    /**
     * Lib variable1.
     *
     * @var string
     */
    private $libVariable1;

    /**
     * Lib variable2.
     *
     * @var string
     */
    private $libVariable2;

    /**
     * Lib variable3.
     *
     * @var string
     */
    private $libVariable3;

    /**
     * Mise en portefeuille bic f.
     *
     * @var string
     */
    private $miseEnPortefeuilleBicF;

    /**
     * Mise en portefeuille dom f.
     *
     * @var string
     */
    private $miseEnPortefeuilleDomF;

    /**
     * Mise en portefeuille iban f.
     *
     * @var string
     */
    private $miseEnPortefeuilleIbanF;

    /**
     * Mise en portefeuille rib f.
     *
     * @var string
     */
    private $miseEnPortefeuilleRibF;

    /**
     * Multi ech client.
     *
     * @var bool
     */
    private $multiEchClient;

    /**
     * Multi ech frn.
     *
     * @var bool
     */
    private $multiEchFrn;

    /**
     * Multi ech par code lib auto.
     *
     * @var bool
     */
    private $multiEchParCodeLibAuto;

    /**
     * Ne plus afficher.
     *
     * @var bool
     */
    private $nePlusAfficher;

    /**
     * Niv tri analytique.
     *
     * @var string
     */
    private $nivTriAnalytique;

    /**
     * Niv tri bureau.
     *
     * @var string
     */
    private $nivTriBureau;

    /**
     * Niv tri famille.
     *
     * @var string
     */
    private $nivTriFamille;

    /**
     * Niv tri nat.
     *
     * @var string
     */
    private $nivTriNat;

    /**
     * Niv tri service.
     *
     * @var string
     */
    private $nivTriService;

    /**
     * Niv tri site.
     *
     * @var string
     */
    private $nivTriSite;

    /**
     * Niv tri zl1.
     *
     * @var string
     */
    private $nivTriZl1;

    /**
     * Niv tri zl2.
     *
     * @var string
     */
    private $nivTriZl2;

    /**
     * Niv tri zl3.
     *
     * @var string
     */
    private $nivTriZl3;

    /**
     * Nom lettre p.
     *
     * @var string
     */
    private $nomLettreP;

    /**
     * Nom lettre pc.
     *
     * @var string
     */
    private $nomLettrePc;

    /**
     * Num chrono bo.
     *
     * @var int
     */
    private $numChronoBo;

    /**
     * Num lot cli douteux.
     *
     * @var int
     */
    private $numLotCliDouteux;

    /**
     * Num lot ecrit trans assurance.
     *
     * @var int
     */
    private $numLotEcritTransAssurance;

    /**
     * Num lot ecrit trans baux.
     *
     * @var int
     */
    private $numLotEcritTransBaux;

    /**
     * Num lot ecrit trans car.
     *
     * @var int
     */
    private $numLotEcritTransCar;

    /**
     * Num lot ecrit trans periodicite.
     *
     * @var int
     */
    private $numLotEcritTransPeriodicite;

    /**
     * Num lot ecrit trans subventions.
     *
     * @var int
     */
    private $numLotEcritTransSubventions;

    /**
     * Num lot ecrit transf cb.
     *
     * @var int
     */
    private $numLotEcritTransfCb;

    /**
     * Num lot ecrit transf immo.
     *
     * @var int
     */
    private $numLotEcritTransfImmo;

    /**
     * Num lot ecrit transf lf.
     *
     * @var int
     */
    private $numLotEcritTransfLf;

    /**
     * Num lot int courus.
     *
     * @var int
     */
    private $numLotIntCourus;

    /**
     * Num lot int extournes.
     *
     * @var int
     */
    private $numLotIntExtournes;

    /**
     * Num lot prov cp.
     *
     * @var int
     */
    private $numLotProvCp;

    /**
     * Option import mvt rb.
     *
     * @var string
     */
    private $optionImportMvtRb;

    /**
     * Periode revision.
     *
     * @var DateTime|null
     */
    private $periodeRevision;

    /**
     * Periode transf immo.
     *
     * @var DateTime|null
     */
    private $periodeTransfImmo;

    /**
     * Periodicite utiliser libelle.
     *
     * @var int
     */
    private $periodiciteUtiliserLibelle;

    /**
     * Prochain lot lcr.
     *
     * @var int
     */
    private $prochainLotLcr;

    /**
     * Prochain lot lettre p.
     *
     * @var int
     */
    private $prochainLotLettreP;

    /**
     * Prochain lot traite.
     *
     * @var int
     */
    private $prochainLotTraite;

    /**
     * Prochain num cb.
     *
     * @var int
     */
    private $prochainNumCb;

    /**
     * Prochain num immo.
     *
     * @var int
     */
    private $prochainNumImmo;

    /**
     * Prochain num lf.
     *
     * @var int
     */
    private $prochainNumLf;

    /**
     * Prochain num pj.
     *
     * @var int
     */
    private $prochainNumPj;

    /**
     * Racine import mvt rb.
     *
     * @var string
     */
    private $racineImportMvtRb;

    /**
     * Rebut vaut cession.
     *
     * @var bool
     */
    private $rebutVautCession;

    /**
     * Ref remise lcr.
     *
     * @var int
     */
    private $refRemiseLcr;

    /**
     * Ref virement frn.
     *
     * @var int
     */
    private $refVirementFrn;

    /**
     * Regroup four cpt ech.
     *
     * @var bool
     */
    private $regroupFourCptEch;

    /**
     * Rep ass.
     *
     * @var bool
     */
    private $repAss;

    /**
     * Rep budget.
     *
     * @var bool
     */
    private $repBudget;

    /**
     * Rep car.
     *
     * @var bool
     */
    private $repCar;

    /**
     * Rep cb.
     *
     * @var bool
     */
    private $repCb;

    /**
     * Rep cl.
     *
     * @var bool
     */
    private $repCl;

    /**
     * Rep compta gen.
     *
     * @var bool
     */
    private $repComptaGen;

    /**
     * Rep dec tva.
     *
     * @var bool
     */
    private $repDecTva;

    /**
     * Rep dos rev.
     *
     * @var bool
     */
    private $repDosRev;

    /**
     * Rep emprunts.
     *
     * @var bool
     */
    private $repEmprunts;

    /**
     * Rep es.
     *
     * @var bool
     */
    private $repEs;

    /**
     * Rep immo.
     *
     * @var bool
     */
    private $repImmo;

    /**
     * Rep loc fi.
     *
     * @var bool
     */
    private $repLocFi;

    /**
     * Rep partielle.
     *
     * @var bool
     */
    private $repPartielle;

    /**
     * Rep subv.
     *
     * @var bool
     */
    private $repSubv;

    /**
     * Rep vmp.
     *
     * @var bool
     */
    private $repVmp;

    /**
     * Revis solde en euro.
     *
     * @var bool
     */
    private $revisSoldeEnEuro;

    /**
     * Revis voir solde ex.
     *
     * @var bool
     */
    private $revisVoirSoldeEx;

    /**
     * Saisie caisse.
     *
     * @var bool
     */
    private $saisieCaisse;

    /**
     * Saisie num piece.
     *
     * @var string
     */
    private $saisieNumPiece;

    /**
     * Sauver periodicite.
     *
     * @var bool
     */
    private $sauverPeriodicite;

    /**
     * Suivi aux client.
     *
     * @var bool
     */
    private $suiviAuxClient;

    /**
     * Suivi aux frn.
     *
     * @var bool
     */
    private $suiviAuxFrn;

    /**
     * Suivi devises.
     *
     * @var bool
     */
    private $suiviDevises;

    /**
     * Transfert immo ok.
     *
     * @var bool
     */
    private $transfertImmoOk;

    /**
     * Type pmag client.
     *
     * @var int
     */
    private $typePmagClient;

    /**
     * Type transfert immo.
     *
     * @var string
     */
    private $typeTransfertImmo;

    /**
     * Type transfert tiers.
     *
     * @var string
     */
    private $typeTransfertTiers;

    /**
     * Type transfert tiers f.
     *
     * @var string
     */
    private $typeTransfertTiersF;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the achat vente automate.
     *
     * @return bool Returns the achat vente automate.
     */
    public function getAchatVenteAutomate() {
        return $this->achatVenteAutomate;
    }

    /**
     * Get the achat vente local tva.
     *
     * @return string Returns the achat vente local tva.
     */
    public function getAchatVenteLocalTva() {
        return $this->achatVenteLocalTva;
    }

    /**
     * Get the achat vente stop tva.
     *
     * @return bool Returns the achat vente stop tva.
     */
    public function getAchatVenteStopTva() {
        return $this->achatVenteStopTva;
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
     * Get the code ics.
     *
     * @return string Returns the code ics.
     */
    public function getCodeIcs() {
        return $this->codeIcs;
    }

    /**
     * Get the code journal revision.
     *
     * @return string Returns the code journal revision.
     */
    public function getCodeJournalRevision() {
        return $this->codeJournalRevision;
    }

    /**
     * Get the code journal transf immo.
     *
     * @return string Returns the code journal transf immo.
     */
    public function getCodeJournalTransfImmo() {
        return $this->codeJournalTransfImmo;
    }

    /**
     * Get the comp cli frs.
     *
     * @return bool Returns the comp cli frs.
     */
    public function getCompCliFrs() {
        return $this->compCliFrs;
    }

    /**
     * Get the compte debut assurance.
     *
     * @return string Returns the compte debut assurance.
     */
    public function getCompteDebutAssurance() {
        return $this->compteDebutAssurance;
    }

    /**
     * Get the compte debut bail.
     *
     * @return string Returns the compte debut bail.
     */
    public function getCompteDebutBail() {
        return $this->compteDebutBail;
    }

    /**
     * Get the compte debut car.
     *
     * @return string Returns the compte debut car.
     */
    public function getCompteDebutCar() {
        return $this->compteDebutCar;
    }

    /**
     * Get the compte debut subventions.
     *
     * @return string Returns the compte debut subventions.
     */
    public function getCompteDebutSubventions() {
        return $this->compteDebutSubventions;
    }

    /**
     * Get the compte fin assurance.
     *
     * @return string Returns the compte fin assurance.
     */
    public function getCompteFinAssurance() {
        return $this->compteFinAssurance;
    }

    /**
     * Get the compte fin bail.
     *
     * @return string Returns the compte fin bail.
     */
    public function getCompteFinBail() {
        return $this->compteFinBail;
    }

    /**
     * Get the compte fin car.
     *
     * @return string Returns the compte fin car.
     */
    public function getCompteFinCar() {
        return $this->compteFinCar;
    }

    /**
     * Get the compte fin subventions.
     *
     * @return string Returns the compte fin subventions.
     */
    public function getCompteFinSubventions() {
        return $this->compteFinSubventions;
    }

    /**
     * Get the compte tvacar.
     *
     * @return string Returns the compte tvacar.
     */
    public function getCompteTvacar() {
        return $this->compteTvacar;
    }

    /**
     * Get the conserve mois rb.
     *
     * @return bool Returns the conserve mois rb.
     */
    public function getConserveMoisRb() {
        return $this->conserveMoisRb;
    }

    /**
     * Get the controle edition.
     *
     * @return bool Returns the controle edition.
     */
    public function getControleEdition() {
        return $this->controleEdition;
    }

    /**
     * Get the controle exist ecr.
     *
     * @return string Returns the controle exist ecr.
     */
    public function getControleExistEcr() {
        return $this->controleExistEcr;
    }

    /**
     * Get the controle ref tire.
     *
     * @return bool Returns the controle ref tire.
     */
    public function getControleRefTire() {
        return $this->controleRefTire;
    }

    /**
     * Get the cpt transf immo communs.
     *
     * @return bool Returns the cpt transf immo communs.
     */
    public function getCptTransfImmoCommuns() {
        return $this->cptTransfImmoCommuns;
    }

    /**
     * Get the date revision.
     *
     * @return DateTime|null Returns the date revision.
     */
    public function getDateRevision() {
        return $this->dateRevision;
    }

    /**
     * Get the date transf cb.
     *
     * @return DateTime|null Returns the date transf cb.
     */
    public function getDateTransfCb() {
        return $this->dateTransfCb;
    }

    /**
     * Get the date transf cli douteux.
     *
     * @return DateTime|null Returns the date transf cli douteux.
     */
    public function getDateTransfCliDouteux() {
        return $this->dateTransfCliDouteux;
    }

    /**
     * Get the date transf int courus.
     *
     * @return DateTime|null Returns the date transf int courus.
     */
    public function getDateTransfIntCourus() {
        return $this->dateTransfIntCourus;
    }

    /**
     * Get the date transf int extournes.
     *
     * @return DateTime|null Returns the date transf int extournes.
     */
    public function getDateTransfIntExtournes() {
        return $this->dateTransfIntExtournes;
    }

    /**
     * Get the date transf lf.
     *
     * @return DateTime|null Returns the date transf lf.
     */
    public function getDateTransfLf() {
        return $this->dateTransfLf;
    }

    /**
     * Get the date transf prov cp.
     *
     * @return DateTime|null Returns the date transf prov cp.
     */
    public function getDateTransfProvCp() {
        return $this->dateTransfProvCp;
    }

    /**
     * Get the date transfert ech cb.
     *
     * @return DateTime|null Returns the date transfert ech cb.
     */
    public function getDateTransfertEchCb() {
        return $this->dateTransfertEchCb;
    }

    /**
     * Get the date transfert ech lf.
     *
     * @return DateTime|null Returns the date transfert ech lf.
     */
    public function getDateTransfertEchLf() {
        return $this->dateTransfertEchLf;
    }

    /**
     * Get the date transfert echeance.
     *
     * @return DateTime|null Returns the date transfert echeance.
     */
    public function getDateTransfertEcheance() {
        return $this->dateTransfertEcheance;
    }

    /**
     * Get the debut calcul immo.
     *
     * @return DateTime|null Returns the debut calcul immo.
     */
    public function getDebutCalculImmo() {
        return $this->debutCalculImmo;
    }

    /**
     * Get the delai rejet effet.
     *
     * @return string Returns the delai rejet effet.
     */
    public function getDelaiRejetEffet() {
        return $this->delaiRejetEffet;
    }

    /**
     * Get the detail cb.
     *
     * @return bool Returns the detail cb.
     */
    public function getDetailCb() {
        return $this->detailCb;
    }

    /**
     * Get the detail immo.
     *
     * @return bool Returns the detail immo.
     */
    public function getDetailImmo() {
        return $this->detailImmo;
    }

    /**
     * Get the dot franc centime.
     *
     * @return string Returns the dot franc centime.
     */
    public function getDotFrancCentime() {
        return $this->dotFrancCentime;
    }

    /**
     * Get the edi400.
     *
     * @return bool Returns the edi400.
     */
    public function getEdi400() {
        return $this->edi400;
    }

    /**
     * Get the edit ana contrepasse.
     *
     * @return bool Returns the edit ana contrepasse.
     */
    public function getEditAnaContrepasse() {
        return $this->editAnaContrepasse;
    }

    /**
     * Get the fin calcul immo.
     *
     * @return DateTime|null Returns the fin calcul immo.
     */
    public function getFinCalculImmo() {
        return $this->finCalculImmo;
    }

    /**
     * Get the folio revision.
     *
     * @return int Returns the folio revision.
     */
    public function getFolioRevision() {
        return $this->folioRevision;
    }

    /**
     * Get the folio transf immo.
     *
     * @return int Returns the folio transf immo.
     */
    public function getFolioTransfImmo() {
        return $this->folioTransfImmo;
    }

    /**
     * Get the gestion pmag client.
     *
     * @return bool Returns the gestion pmag client.
     */
    public function getGestionPmagClient() {
        return $this->gestionPmagClient;
    }

    /**
     * Get the gestion traite papier.
     *
     * @return bool Returns the gestion traite papier.
     */
    public function getGestionTraitePapier() {
        return $this->gestionTraitePapier;
    }

    /**
     * Get the gestion virement frn.
     *
     * @return bool Returns the gestion virement frn.
     */
    public function getGestionVirementFrn() {
        return $this->gestionVirementFrn;
    }

    /**
     * Get the immo detail lignes.
     *
     * @return bool Returns the immo detail lignes.
     */
    public function getImmoDetailLignes() {
        return $this->immoDetailLignes;
    }

    /**
     * Get the immo detail par cpt.
     *
     * @return bool Returns the immo detail par cpt.
     */
    public function getImmoDetailParCpt() {
        return $this->immoDetailParCpt;
    }

    /**
     * Get the immo edit ensemble.
     *
     * @return bool Returns the immo edit ensemble.
     */
    public function getImmoEditEnsemble() {
        return $this->immoEditEnsemble;
    }

    /**
     * Get the immo jours par an.
     *
     * @return int Returns the immo jours par an.
     */
    public function getImmoJoursParAn() {
        return $this->immoJoursParAn;
    }

    /**
     * Get the immo ss tot immo.
     *
     * @return bool Returns the immo ss tot immo.
     */
    public function getImmoSsTotImmo() {
        return $this->immoSsTotImmo;
    }

    /**
     * Get the immo tot par compte.
     *
     * @return bool Returns the immo tot par compte.
     */
    public function getImmoTotParCompte() {
        return $this->immoTotParCompte;
    }

    /**
     * Get the immo transfert forfait vers reel.
     *
     * @return bool Returns the immo transfert forfait vers reel.
     */
    public function getImmoTransfertForfaitVersReel() {
        return $this->immoTransfertForfaitVersReel;
    }

    /**
     * Get the immo tri analytique.
     *
     * @return bool Returns the immo tri analytique.
     */
    public function getImmoTriAnalytique() {
        return $this->immoTriAnalytique;
    }

    /**
     * Get the immo tri par date.
     *
     * @return bool Returns the immo tri par date.
     */
    public function getImmoTriParDate() {
        return $this->immoTriParDate;
    }

    /**
     * Get the immo tri par service.
     *
     * @return bool Returns the immo tri par service.
     */
    public function getImmoTriParService() {
        return $this->immoTriParService;
    }

    /**
     * Get the immo type liasse.
     *
     * @return string Returns the immo type liasse.
     */
    public function getImmoTypeLiasse() {
        return $this->immoTypeLiasse;
    }

    /**
     * Get the is client exp.
     *
     * @return bool Returns the is client exp.
     */
    public function getIsClientExp() {
        return $this->isClientExp;
    }

    /**
     * Get the lettre pvaut bo.
     *
     * @return bool Returns the lettre pvaut bo.
     */
    public function getLettrePvautBo() {
        return $this->lettrePvautBo;
    }

    /**
     * Get the lib variable1.
     *
     * @return string Returns the lib variable1.
     */
    public function getLibVariable1() {
        return $this->libVariable1;
    }

    /**
     * Get the lib variable2.
     *
     * @return string Returns the lib variable2.
     */
    public function getLibVariable2() {
        return $this->libVariable2;
    }

    /**
     * Get the lib variable3.
     *
     * @return string Returns the lib variable3.
     */
    public function getLibVariable3() {
        return $this->libVariable3;
    }

    /**
     * Get the mise en portefeuille bic f.
     *
     * @return string Returns the mise en portefeuille bic f.
     */
    public function getMiseEnPortefeuilleBicF() {
        return $this->miseEnPortefeuilleBicF;
    }

    /**
     * Get the mise en portefeuille dom f.
     *
     * @return string Returns the mise en portefeuille dom f.
     */
    public function getMiseEnPortefeuilleDomF() {
        return $this->miseEnPortefeuilleDomF;
    }

    /**
     * Get the mise en portefeuille iban f.
     *
     * @return string Returns the mise en portefeuille iban f.
     */
    public function getMiseEnPortefeuilleIbanF() {
        return $this->miseEnPortefeuilleIbanF;
    }

    /**
     * Get the mise en portefeuille rib f.
     *
     * @return string Returns the mise en portefeuille rib f.
     */
    public function getMiseEnPortefeuilleRibF() {
        return $this->miseEnPortefeuilleRibF;
    }

    /**
     * Get the multi ech client.
     *
     * @return bool Returns the multi ech client.
     */
    public function getMultiEchClient() {
        return $this->multiEchClient;
    }

    /**
     * Get the multi ech frn.
     *
     * @return bool Returns the multi ech frn.
     */
    public function getMultiEchFrn() {
        return $this->multiEchFrn;
    }

    /**
     * Get the multi ech par code lib auto.
     *
     * @return bool Returns the multi ech par code lib auto.
     */
    public function getMultiEchParCodeLibAuto() {
        return $this->multiEchParCodeLibAuto;
    }

    /**
     * Get the ne plus afficher.
     *
     * @return bool Returns the ne plus afficher.
     */
    public function getNePlusAfficher() {
        return $this->nePlusAfficher;
    }

    /**
     * Get the niv tri analytique.
     *
     * @return string Returns the niv tri analytique.
     */
    public function getNivTriAnalytique() {
        return $this->nivTriAnalytique;
    }

    /**
     * Get the niv tri bureau.
     *
     * @return string Returns the niv tri bureau.
     */
    public function getNivTriBureau() {
        return $this->nivTriBureau;
    }

    /**
     * Get the niv tri famille.
     *
     * @return string Returns the niv tri famille.
     */
    public function getNivTriFamille() {
        return $this->nivTriFamille;
    }

    /**
     * Get the niv tri nat.
     *
     * @return string Returns the niv tri nat.
     */
    public function getNivTriNat() {
        return $this->nivTriNat;
    }

    /**
     * Get the niv tri service.
     *
     * @return string Returns the niv tri service.
     */
    public function getNivTriService() {
        return $this->nivTriService;
    }

    /**
     * Get the niv tri site.
     *
     * @return string Returns the niv tri site.
     */
    public function getNivTriSite() {
        return $this->nivTriSite;
    }

    /**
     * Get the niv tri zl1.
     *
     * @return string Returns the niv tri zl1.
     */
    public function getNivTriZl1() {
        return $this->nivTriZl1;
    }

    /**
     * Get the niv tri zl2.
     *
     * @return string Returns the niv tri zl2.
     */
    public function getNivTriZl2() {
        return $this->nivTriZl2;
    }

    /**
     * Get the niv tri zl3.
     *
     * @return string Returns the niv tri zl3.
     */
    public function getNivTriZl3() {
        return $this->nivTriZl3;
    }

    /**
     * Get the nom lettre p.
     *
     * @return string Returns the nom lettre p.
     */
    public function getNomLettreP() {
        return $this->nomLettreP;
    }

    /**
     * Get the nom lettre pc.
     *
     * @return string Returns the nom lettre pc.
     */
    public function getNomLettrePc() {
        return $this->nomLettrePc;
    }

    /**
     * Get the num chrono bo.
     *
     * @return int Returns the num chrono bo.
     */
    public function getNumChronoBo() {
        return $this->numChronoBo;
    }

    /**
     * Get the num lot cli douteux.
     *
     * @return int Returns the num lot cli douteux.
     */
    public function getNumLotCliDouteux() {
        return $this->numLotCliDouteux;
    }

    /**
     * Get the num lot ecrit trans assurance.
     *
     * @return int Returns the num lot ecrit trans assurance.
     */
    public function getNumLotEcritTransAssurance() {
        return $this->numLotEcritTransAssurance;
    }

    /**
     * Get the num lot ecrit trans baux.
     *
     * @return int Returns the num lot ecrit trans baux.
     */
    public function getNumLotEcritTransBaux() {
        return $this->numLotEcritTransBaux;
    }

    /**
     * Get the num lot ecrit trans car.
     *
     * @return int Returns the num lot ecrit trans car.
     */
    public function getNumLotEcritTransCar() {
        return $this->numLotEcritTransCar;
    }

    /**
     * Get the num lot ecrit trans periodicite.
     *
     * @return int Returns the num lot ecrit trans periodicite.
     */
    public function getNumLotEcritTransPeriodicite() {
        return $this->numLotEcritTransPeriodicite;
    }

    /**
     * Get the num lot ecrit trans subventions.
     *
     * @return int Returns the num lot ecrit trans subventions.
     */
    public function getNumLotEcritTransSubventions() {
        return $this->numLotEcritTransSubventions;
    }

    /**
     * Get the num lot ecrit transf cb.
     *
     * @return int Returns the num lot ecrit transf cb.
     */
    public function getNumLotEcritTransfCb() {
        return $this->numLotEcritTransfCb;
    }

    /**
     * Get the num lot ecrit transf immo.
     *
     * @return int Returns the num lot ecrit transf immo.
     */
    public function getNumLotEcritTransfImmo() {
        return $this->numLotEcritTransfImmo;
    }

    /**
     * Get the num lot ecrit transf lf.
     *
     * @return int Returns the num lot ecrit transf lf.
     */
    public function getNumLotEcritTransfLf() {
        return $this->numLotEcritTransfLf;
    }

    /**
     * Get the num lot int courus.
     *
     * @return int Returns the num lot int courus.
     */
    public function getNumLotIntCourus() {
        return $this->numLotIntCourus;
    }

    /**
     * Get the num lot int extournes.
     *
     * @return int Returns the num lot int extournes.
     */
    public function getNumLotIntExtournes() {
        return $this->numLotIntExtournes;
    }

    /**
     * Get the num lot prov cp.
     *
     * @return int Returns the num lot prov cp.
     */
    public function getNumLotProvCp() {
        return $this->numLotProvCp;
    }

    /**
     * Get the option import mvt rb.
     *
     * @return string Returns the option import mvt rb.
     */
    public function getOptionImportMvtRb() {
        return $this->optionImportMvtRb;
    }

    /**
     * Get the periode revision.
     *
     * @return DateTime|null Returns the periode revision.
     */
    public function getPeriodeRevision() {
        return $this->periodeRevision;
    }

    /**
     * Get the periode transf immo.
     *
     * @return DateTime|null Returns the periode transf immo.
     */
    public function getPeriodeTransfImmo() {
        return $this->periodeTransfImmo;
    }

    /**
     * Get the periodicite utiliser libelle.
     *
     * @return int Returns the periodicite utiliser libelle.
     */
    public function getPeriodiciteUtiliserLibelle() {
        return $this->periodiciteUtiliserLibelle;
    }

    /**
     * Get the prochain lot lcr.
     *
     * @return int Returns the prochain lot lcr.
     */
    public function getProchainLotLcr() {
        return $this->prochainLotLcr;
    }

    /**
     * Get the prochain lot lettre p.
     *
     * @return int Returns the prochain lot lettre p.
     */
    public function getProchainLotLettreP() {
        return $this->prochainLotLettreP;
    }

    /**
     * Get the prochain lot traite.
     *
     * @return int Returns the prochain lot traite.
     */
    public function getProchainLotTraite() {
        return $this->prochainLotTraite;
    }

    /**
     * Get the prochain num cb.
     *
     * @return int Returns the prochain num cb.
     */
    public function getProchainNumCb() {
        return $this->prochainNumCb;
    }

    /**
     * Get the prochain num immo.
     *
     * @return int Returns the prochain num immo.
     */
    public function getProchainNumImmo() {
        return $this->prochainNumImmo;
    }

    /**
     * Get the prochain num lf.
     *
     * @return int Returns the prochain num lf.
     */
    public function getProchainNumLf() {
        return $this->prochainNumLf;
    }

    /**
     * Get the prochain num pj.
     *
     * @return int Returns the prochain num pj.
     */
    public function getProchainNumPj() {
        return $this->prochainNumPj;
    }

    /**
     * Get the racine import mvt rb.
     *
     * @return string Returns the racine import mvt rb.
     */
    public function getRacineImportMvtRb() {
        return $this->racineImportMvtRb;
    }

    /**
     * Get the rebut vaut cession.
     *
     * @return bool Returns the rebut vaut cession.
     */
    public function getRebutVautCession() {
        return $this->rebutVautCession;
    }

    /**
     * Get the ref remise lcr.
     *
     * @return int Returns the ref remise lcr.
     */
    public function getRefRemiseLcr() {
        return $this->refRemiseLcr;
    }

    /**
     * Get the ref virement frn.
     *
     * @return int Returns the ref virement frn.
     */
    public function getRefVirementFrn() {
        return $this->refVirementFrn;
    }

    /**
     * Get the regroup four cpt ech.
     *
     * @return bool Returns the regroup four cpt ech.
     */
    public function getRegroupFourCptEch() {
        return $this->regroupFourCptEch;
    }

    /**
     * Get the rep ass.
     *
     * @return bool Returns the rep ass.
     */
    public function getRepAss() {
        return $this->repAss;
    }

    /**
     * Get the rep budget.
     *
     * @return bool Returns the rep budget.
     */
    public function getRepBudget() {
        return $this->repBudget;
    }

    /**
     * Get the rep car.
     *
     * @return bool Returns the rep car.
     */
    public function getRepCar() {
        return $this->repCar;
    }

    /**
     * Get the rep cb.
     *
     * @return bool Returns the rep cb.
     */
    public function getRepCb() {
        return $this->repCb;
    }

    /**
     * Get the rep cl.
     *
     * @return bool Returns the rep cl.
     */
    public function getRepCl() {
        return $this->repCl;
    }

    /**
     * Get the rep compta gen.
     *
     * @return bool Returns the rep compta gen.
     */
    public function getRepComptaGen() {
        return $this->repComptaGen;
    }

    /**
     * Get the rep dec tva.
     *
     * @return bool Returns the rep dec tva.
     */
    public function getRepDecTva() {
        return $this->repDecTva;
    }

    /**
     * Get the rep dos rev.
     *
     * @return bool Returns the rep dos rev.
     */
    public function getRepDosRev() {
        return $this->repDosRev;
    }

    /**
     * Get the rep emprunts.
     *
     * @return bool Returns the rep emprunts.
     */
    public function getRepEmprunts() {
        return $this->repEmprunts;
    }

    /**
     * Get the rep es.
     *
     * @return bool Returns the rep es.
     */
    public function getRepEs() {
        return $this->repEs;
    }

    /**
     * Get the rep immo.
     *
     * @return bool Returns the rep immo.
     */
    public function getRepImmo() {
        return $this->repImmo;
    }

    /**
     * Get the rep loc fi.
     *
     * @return bool Returns the rep loc fi.
     */
    public function getRepLocFi() {
        return $this->repLocFi;
    }

    /**
     * Get the rep partielle.
     *
     * @return bool Returns the rep partielle.
     */
    public function getRepPartielle() {
        return $this->repPartielle;
    }

    /**
     * Get the rep subv.
     *
     * @return bool Returns the rep subv.
     */
    public function getRepSubv() {
        return $this->repSubv;
    }

    /**
     * Get the rep vmp.
     *
     * @return bool Returns the rep vmp.
     */
    public function getRepVmp() {
        return $this->repVmp;
    }

    /**
     * Get the revis solde en euro.
     *
     * @return bool Returns the revis solde en euro.
     */
    public function getRevisSoldeEnEuro() {
        return $this->revisSoldeEnEuro;
    }

    /**
     * Get the revis voir solde ex.
     *
     * @return bool Returns the revis voir solde ex.
     */
    public function getRevisVoirSoldeEx() {
        return $this->revisVoirSoldeEx;
    }

    /**
     * Get the saisie caisse.
     *
     * @return bool Returns the saisie caisse.
     */
    public function getSaisieCaisse() {
        return $this->saisieCaisse;
    }

    /**
     * Get the saisie num piece.
     *
     * @return string Returns the saisie num piece.
     */
    public function getSaisieNumPiece() {
        return $this->saisieNumPiece;
    }

    /**
     * Get the sauver periodicite.
     *
     * @return bool Returns the sauver periodicite.
     */
    public function getSauverPeriodicite() {
        return $this->sauverPeriodicite;
    }

    /**
     * Get the suivi aux client.
     *
     * @return bool Returns the suivi aux client.
     */
    public function getSuiviAuxClient() {
        return $this->suiviAuxClient;
    }

    /**
     * Get the suivi aux frn.
     *
     * @return bool Returns the suivi aux frn.
     */
    public function getSuiviAuxFrn() {
        return $this->suiviAuxFrn;
    }

    /**
     * Get the suivi devises.
     *
     * @return bool Returns the suivi devises.
     */
    public function getSuiviDevises() {
        return $this->suiviDevises;
    }

    /**
     * Get the transfert immo ok.
     *
     * @return bool Returns the transfert immo ok.
     */
    public function getTransfertImmoOk() {
        return $this->transfertImmoOk;
    }

    /**
     * Get the type pmag client.
     *
     * @return int Returns the type pmag client.
     */
    public function getTypePmagClient() {
        return $this->typePmagClient;
    }

    /**
     * Get the type transfert immo.
     *
     * @return string Returns the type transfert immo.
     */
    public function getTypeTransfertImmo() {
        return $this->typeTransfertImmo;
    }

    /**
     * Get the type transfert tiers.
     *
     * @return string Returns the type transfert tiers.
     */
    public function getTypeTransfertTiers() {
        return $this->typeTransfertTiers;
    }

    /**
     * Get the type transfert tiers f.
     *
     * @return string Returns the type transfert tiers f.
     */
    public function getTypeTransfertTiersF() {
        return $this->typeTransfertTiersF;
    }

    /**
     * Set the achat vente automate.
     *
     * @param bool $achatVenteAutomate The achat vente automate.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setAchatVenteAutomate($achatVenteAutomate) {
        $this->achatVenteAutomate = $achatVenteAutomate;
        return $this;
    }

    /**
     * Set the achat vente local tva.
     *
     * @param string $achatVenteLocalTva The achat vente local tva.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setAchatVenteLocalTva($achatVenteLocalTva) {
        $this->achatVenteLocalTva = $achatVenteLocalTva;
        return $this;
    }

    /**
     * Set the achat vente stop tva.
     *
     * @param bool $achatVenteStopTva The achat vente stop tva.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setAchatVenteStopTva($achatVenteStopTva) {
        $this->achatVenteStopTva = $achatVenteStopTva;
        return $this;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool $bonsAPayer The bons a payer.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setBonsAPayer($bonsAPayer) {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }

    /**
     * Set the code ics.
     *
     * @param string $codeIcs The code ics.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCodeIcs($codeIcs) {
        $this->codeIcs = $codeIcs;
        return $this;
    }

    /**
     * Set the code journal revision.
     *
     * @param string $codeJournalRevision The code journal revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCodeJournalRevision($codeJournalRevision) {
        $this->codeJournalRevision = $codeJournalRevision;
        return $this;
    }

    /**
     * Set the code journal transf immo.
     *
     * @param string $codeJournalTransfImmo The code journal transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCodeJournalTransfImmo($codeJournalTransfImmo) {
        $this->codeJournalTransfImmo = $codeJournalTransfImmo;
        return $this;
    }

    /**
     * Set the comp cli frs.
     *
     * @param bool $compCliFrs The comp cli frs.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompCliFrs($compCliFrs) {
        $this->compCliFrs = $compCliFrs;
        return $this;
    }

    /**
     * Set the compte debut assurance.
     *
     * @param string $compteDebutAssurance The compte debut assurance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutAssurance($compteDebutAssurance) {
        $this->compteDebutAssurance = $compteDebutAssurance;
        return $this;
    }

    /**
     * Set the compte debut bail.
     *
     * @param string $compteDebutBail The compte debut bail.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutBail($compteDebutBail) {
        $this->compteDebutBail = $compteDebutBail;
        return $this;
    }

    /**
     * Set the compte debut car.
     *
     * @param string $compteDebutCar The compte debut car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutCar($compteDebutCar) {
        $this->compteDebutCar = $compteDebutCar;
        return $this;
    }

    /**
     * Set the compte debut subventions.
     *
     * @param string $compteDebutSubventions The compte debut subventions.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteDebutSubventions($compteDebutSubventions) {
        $this->compteDebutSubventions = $compteDebutSubventions;
        return $this;
    }

    /**
     * Set the compte fin assurance.
     *
     * @param string $compteFinAssurance The compte fin assurance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinAssurance($compteFinAssurance) {
        $this->compteFinAssurance = $compteFinAssurance;
        return $this;
    }

    /**
     * Set the compte fin bail.
     *
     * @param string $compteFinBail The compte fin bail.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinBail($compteFinBail) {
        $this->compteFinBail = $compteFinBail;
        return $this;
    }

    /**
     * Set the compte fin car.
     *
     * @param string $compteFinCar The compte fin car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinCar($compteFinCar) {
        $this->compteFinCar = $compteFinCar;
        return $this;
    }

    /**
     * Set the compte fin subventions.
     *
     * @param string $compteFinSubventions The compte fin subventions.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteFinSubventions($compteFinSubventions) {
        $this->compteFinSubventions = $compteFinSubventions;
        return $this;
    }

    /**
     * Set the compte tvacar.
     *
     * @param string $compteTvacar The compte tvacar.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCompteTvacar($compteTvacar) {
        $this->compteTvacar = $compteTvacar;
        return $this;
    }

    /**
     * Set the conserve mois rb.
     *
     * @param bool $conserveMoisRb The conserve mois rb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setConserveMoisRb($conserveMoisRb) {
        $this->conserveMoisRb = $conserveMoisRb;
        return $this;
    }

    /**
     * Set the controle edition.
     *
     * @param bool $controleEdition The controle edition.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setControleEdition($controleEdition) {
        $this->controleEdition = $controleEdition;
        return $this;
    }

    /**
     * Set the controle exist ecr.
     *
     * @param string $controleExistEcr The controle exist ecr.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setControleExistEcr($controleExistEcr) {
        $this->controleExistEcr = $controleExistEcr;
        return $this;
    }

    /**
     * Set the controle ref tire.
     *
     * @param bool $controleRefTire The controle ref tire.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setControleRefTire($controleRefTire) {
        $this->controleRefTire = $controleRefTire;
        return $this;
    }

    /**
     * Set the cpt transf immo communs.
     *
     * @param bool $cptTransfImmoCommuns The cpt transf immo communs.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setCptTransfImmoCommuns($cptTransfImmoCommuns) {
        $this->cptTransfImmoCommuns = $cptTransfImmoCommuns;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateRevision(DateTime $dateRevision = null) {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the date transf cb.
     *
     * @param DateTime|null $dateTransfCb The date transf cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfCb(DateTime $dateTransfCb = null) {
        $this->dateTransfCb = $dateTransfCb;
        return $this;
    }

    /**
     * Set the date transf cli douteux.
     *
     * @param DateTime|null $dateTransfCliDouteux The date transf cli douteux.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfCliDouteux(DateTime $dateTransfCliDouteux = null) {
        $this->dateTransfCliDouteux = $dateTransfCliDouteux;
        return $this;
    }

    /**
     * Set the date transf int courus.
     *
     * @param DateTime|null $dateTransfIntCourus The date transf int courus.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfIntCourus(DateTime $dateTransfIntCourus = null) {
        $this->dateTransfIntCourus = $dateTransfIntCourus;
        return $this;
    }

    /**
     * Set the date transf int extournes.
     *
     * @param DateTime|null $dateTransfIntExtournes The date transf int extournes.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfIntExtournes(DateTime $dateTransfIntExtournes = null) {
        $this->dateTransfIntExtournes = $dateTransfIntExtournes;
        return $this;
    }

    /**
     * Set the date transf lf.
     *
     * @param DateTime|null $dateTransfLf The date transf lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfLf(DateTime $dateTransfLf = null) {
        $this->dateTransfLf = $dateTransfLf;
        return $this;
    }

    /**
     * Set the date transf prov cp.
     *
     * @param DateTime|null $dateTransfProvCp The date transf prov cp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfProvCp(DateTime $dateTransfProvCp = null) {
        $this->dateTransfProvCp = $dateTransfProvCp;
        return $this;
    }

    /**
     * Set the date transfert ech cb.
     *
     * @param DateTime|null $dateTransfertEchCb The date transfert ech cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfertEchCb(DateTime $dateTransfertEchCb = null) {
        $this->dateTransfertEchCb = $dateTransfertEchCb;
        return $this;
    }

    /**
     * Set the date transfert ech lf.
     *
     * @param DateTime|null $dateTransfertEchLf The date transfert ech lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfertEchLf(DateTime $dateTransfertEchLf = null) {
        $this->dateTransfertEchLf = $dateTransfertEchLf;
        return $this;
    }

    /**
     * Set the date transfert echeance.
     *
     * @param DateTime|null $dateTransfertEcheance The date transfert echeance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDateTransfertEcheance(DateTime $dateTransfertEcheance = null) {
        $this->dateTransfertEcheance = $dateTransfertEcheance;
        return $this;
    }

    /**
     * Set the debut calcul immo.
     *
     * @param DateTime|null $debutCalculImmo The debut calcul immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDebutCalculImmo(DateTime $debutCalculImmo = null) {
        $this->debutCalculImmo = $debutCalculImmo;
        return $this;
    }

    /**
     * Set the delai rejet effet.
     *
     * @param string $delaiRejetEffet The delai rejet effet.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDelaiRejetEffet($delaiRejetEffet) {
        $this->delaiRejetEffet = $delaiRejetEffet;
        return $this;
    }

    /**
     * Set the detail cb.
     *
     * @param bool $detailCb The detail cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDetailCb($detailCb) {
        $this->detailCb = $detailCb;
        return $this;
    }

    /**
     * Set the detail immo.
     *
     * @param bool $detailImmo The detail immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDetailImmo($detailImmo) {
        $this->detailImmo = $detailImmo;
        return $this;
    }

    /**
     * Set the dot franc centime.
     *
     * @param string $dotFrancCentime The dot franc centime.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setDotFrancCentime($dotFrancCentime) {
        $this->dotFrancCentime = $dotFrancCentime;
        return $this;
    }

    /**
     * Set the edi400.
     *
     * @param bool $edi400 The edi400.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setEdi400($edi400) {
        $this->edi400 = $edi400;
        return $this;
    }

    /**
     * Set the edit ana contrepasse.
     *
     * @param bool $editAnaContrepasse The edit ana contrepasse.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setEditAnaContrepasse($editAnaContrepasse) {
        $this->editAnaContrepasse = $editAnaContrepasse;
        return $this;
    }

    /**
     * Set the fin calcul immo.
     *
     * @param DateTime|null $finCalculImmo The fin calcul immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setFinCalculImmo(DateTime $finCalculImmo = null) {
        $this->finCalculImmo = $finCalculImmo;
        return $this;
    }

    /**
     * Set the folio revision.
     *
     * @param int $folioRevision The folio revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setFolioRevision($folioRevision) {
        $this->folioRevision = $folioRevision;
        return $this;
    }

    /**
     * Set the folio transf immo.
     *
     * @param int $folioTransfImmo The folio transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setFolioTransfImmo($folioTransfImmo) {
        $this->folioTransfImmo = $folioTransfImmo;
        return $this;
    }

    /**
     * Set the gestion pmag client.
     *
     * @param bool $gestionPmagClient The gestion pmag client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setGestionPmagClient($gestionPmagClient) {
        $this->gestionPmagClient = $gestionPmagClient;
        return $this;
    }

    /**
     * Set the gestion traite papier.
     *
     * @param bool $gestionTraitePapier The gestion traite papier.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setGestionTraitePapier($gestionTraitePapier) {
        $this->gestionTraitePapier = $gestionTraitePapier;
        return $this;
    }

    /**
     * Set the gestion virement frn.
     *
     * @param bool $gestionVirementFrn The gestion virement frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setGestionVirementFrn($gestionVirementFrn) {
        $this->gestionVirementFrn = $gestionVirementFrn;
        return $this;
    }

    /**
     * Set the immo detail lignes.
     *
     * @param bool $immoDetailLignes The immo detail lignes.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoDetailLignes($immoDetailLignes) {
        $this->immoDetailLignes = $immoDetailLignes;
        return $this;
    }

    /**
     * Set the immo detail par cpt.
     *
     * @param bool $immoDetailParCpt The immo detail par cpt.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoDetailParCpt($immoDetailParCpt) {
        $this->immoDetailParCpt = $immoDetailParCpt;
        return $this;
    }

    /**
     * Set the immo edit ensemble.
     *
     * @param bool $immoEditEnsemble The immo edit ensemble.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoEditEnsemble($immoEditEnsemble) {
        $this->immoEditEnsemble = $immoEditEnsemble;
        return $this;
    }

    /**
     * Set the immo jours par an.
     *
     * @param int $immoJoursParAn The immo jours par an.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoJoursParAn($immoJoursParAn) {
        $this->immoJoursParAn = $immoJoursParAn;
        return $this;
    }

    /**
     * Set the immo ss tot immo.
     *
     * @param bool $immoSsTotImmo The immo ss tot immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoSsTotImmo($immoSsTotImmo) {
        $this->immoSsTotImmo = $immoSsTotImmo;
        return $this;
    }

    /**
     * Set the immo tot par compte.
     *
     * @param bool $immoTotParCompte The immo tot par compte.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTotParCompte($immoTotParCompte) {
        $this->immoTotParCompte = $immoTotParCompte;
        return $this;
    }

    /**
     * Set the immo transfert forfait vers reel.
     *
     * @param bool $immoTransfertForfaitVersReel The immo transfert forfait vers reel.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTransfertForfaitVersReel($immoTransfertForfaitVersReel) {
        $this->immoTransfertForfaitVersReel = $immoTransfertForfaitVersReel;
        return $this;
    }

    /**
     * Set the immo tri analytique.
     *
     * @param bool $immoTriAnalytique The immo tri analytique.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTriAnalytique($immoTriAnalytique) {
        $this->immoTriAnalytique = $immoTriAnalytique;
        return $this;
    }

    /**
     * Set the immo tri par date.
     *
     * @param bool $immoTriParDate The immo tri par date.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTriParDate($immoTriParDate) {
        $this->immoTriParDate = $immoTriParDate;
        return $this;
    }

    /**
     * Set the immo tri par service.
     *
     * @param bool $immoTriParService The immo tri par service.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTriParService($immoTriParService) {
        $this->immoTriParService = $immoTriParService;
        return $this;
    }

    /**
     * Set the immo type liasse.
     *
     * @param string $immoTypeLiasse The immo type liasse.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setImmoTypeLiasse($immoTypeLiasse) {
        $this->immoTypeLiasse = $immoTypeLiasse;
        return $this;
    }

    /**
     * Set the is client exp.
     *
     * @param bool $isClientExp The is client exp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setIsClientExp($isClientExp) {
        $this->isClientExp = $isClientExp;
        return $this;
    }

    /**
     * Set the lettre pvaut bo.
     *
     * @param bool $lettrePvautBo The lettre pvaut bo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLettrePvautBo($lettrePvautBo) {
        $this->lettrePvautBo = $lettrePvautBo;
        return $this;
    }

    /**
     * Set the lib variable1.
     *
     * @param string $libVariable1 The lib variable1.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLibVariable1($libVariable1) {
        $this->libVariable1 = $libVariable1;
        return $this;
    }

    /**
     * Set the lib variable2.
     *
     * @param string $libVariable2 The lib variable2.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLibVariable2($libVariable2) {
        $this->libVariable2 = $libVariable2;
        return $this;
    }

    /**
     * Set the lib variable3.
     *
     * @param string $libVariable3 The lib variable3.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setLibVariable3($libVariable3) {
        $this->libVariable3 = $libVariable3;
        return $this;
    }

    /**
     * Set the mise en portefeuille bic f.
     *
     * @param string $miseEnPortefeuilleBicF The mise en portefeuille bic f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleBicF($miseEnPortefeuilleBicF) {
        $this->miseEnPortefeuilleBicF = $miseEnPortefeuilleBicF;
        return $this;
    }

    /**
     * Set the mise en portefeuille dom f.
     *
     * @param string $miseEnPortefeuilleDomF The mise en portefeuille dom f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleDomF($miseEnPortefeuilleDomF) {
        $this->miseEnPortefeuilleDomF = $miseEnPortefeuilleDomF;
        return $this;
    }

    /**
     * Set the mise en portefeuille iban f.
     *
     * @param string $miseEnPortefeuilleIbanF The mise en portefeuille iban f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleIbanF($miseEnPortefeuilleIbanF) {
        $this->miseEnPortefeuilleIbanF = $miseEnPortefeuilleIbanF;
        return $this;
    }

    /**
     * Set the mise en portefeuille rib f.
     *
     * @param string $miseEnPortefeuilleRibF The mise en portefeuille rib f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMiseEnPortefeuilleRibF($miseEnPortefeuilleRibF) {
        $this->miseEnPortefeuilleRibF = $miseEnPortefeuilleRibF;
        return $this;
    }

    /**
     * Set the multi ech client.
     *
     * @param bool $multiEchClient The multi ech client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMultiEchClient($multiEchClient) {
        $this->multiEchClient = $multiEchClient;
        return $this;
    }

    /**
     * Set the multi ech frn.
     *
     * @param bool $multiEchFrn The multi ech frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMultiEchFrn($multiEchFrn) {
        $this->multiEchFrn = $multiEchFrn;
        return $this;
    }

    /**
     * Set the multi ech par code lib auto.
     *
     * @param bool $multiEchParCodeLibAuto The multi ech par code lib auto.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setMultiEchParCodeLibAuto($multiEchParCodeLibAuto) {
        $this->multiEchParCodeLibAuto = $multiEchParCodeLibAuto;
        return $this;
    }

    /**
     * Set the ne plus afficher.
     *
     * @param bool $nePlusAfficher The ne plus afficher.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNePlusAfficher($nePlusAfficher) {
        $this->nePlusAfficher = $nePlusAfficher;
        return $this;
    }

    /**
     * Set the niv tri analytique.
     *
     * @param string $nivTriAnalytique The niv tri analytique.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriAnalytique($nivTriAnalytique) {
        $this->nivTriAnalytique = $nivTriAnalytique;
        return $this;
    }

    /**
     * Set the niv tri bureau.
     *
     * @param string $nivTriBureau The niv tri bureau.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriBureau($nivTriBureau) {
        $this->nivTriBureau = $nivTriBureau;
        return $this;
    }

    /**
     * Set the niv tri famille.
     *
     * @param string $nivTriFamille The niv tri famille.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriFamille($nivTriFamille) {
        $this->nivTriFamille = $nivTriFamille;
        return $this;
    }

    /**
     * Set the niv tri nat.
     *
     * @param string $nivTriNat The niv tri nat.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriNat($nivTriNat) {
        $this->nivTriNat = $nivTriNat;
        return $this;
    }

    /**
     * Set the niv tri service.
     *
     * @param string $nivTriService The niv tri service.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriService($nivTriService) {
        $this->nivTriService = $nivTriService;
        return $this;
    }

    /**
     * Set the niv tri site.
     *
     * @param string $nivTriSite The niv tri site.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriSite($nivTriSite) {
        $this->nivTriSite = $nivTriSite;
        return $this;
    }

    /**
     * Set the niv tri zl1.
     *
     * @param string $nivTriZl1 The niv tri zl1.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriZl1($nivTriZl1) {
        $this->nivTriZl1 = $nivTriZl1;
        return $this;
    }

    /**
     * Set the niv tri zl2.
     *
     * @param string $nivTriZl2 The niv tri zl2.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriZl2($nivTriZl2) {
        $this->nivTriZl2 = $nivTriZl2;
        return $this;
    }

    /**
     * Set the niv tri zl3.
     *
     * @param string $nivTriZl3 The niv tri zl3.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNivTriZl3($nivTriZl3) {
        $this->nivTriZl3 = $nivTriZl3;
        return $this;
    }

    /**
     * Set the nom lettre p.
     *
     * @param string $nomLettreP The nom lettre p.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNomLettreP($nomLettreP) {
        $this->nomLettreP = $nomLettreP;
        return $this;
    }

    /**
     * Set the nom lettre pc.
     *
     * @param string $nomLettrePc The nom lettre pc.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNomLettrePc($nomLettrePc) {
        $this->nomLettrePc = $nomLettrePc;
        return $this;
    }

    /**
     * Set the num chrono bo.
     *
     * @param int $numChronoBo The num chrono bo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumChronoBo($numChronoBo) {
        $this->numChronoBo = $numChronoBo;
        return $this;
    }

    /**
     * Set the num lot cli douteux.
     *
     * @param int $numLotCliDouteux The num lot cli douteux.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotCliDouteux($numLotCliDouteux) {
        $this->numLotCliDouteux = $numLotCliDouteux;
        return $this;
    }

    /**
     * Set the num lot ecrit trans assurance.
     *
     * @param int $numLotEcritTransAssurance The num lot ecrit trans assurance.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransAssurance($numLotEcritTransAssurance) {
        $this->numLotEcritTransAssurance = $numLotEcritTransAssurance;
        return $this;
    }

    /**
     * Set the num lot ecrit trans baux.
     *
     * @param int $numLotEcritTransBaux The num lot ecrit trans baux.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransBaux($numLotEcritTransBaux) {
        $this->numLotEcritTransBaux = $numLotEcritTransBaux;
        return $this;
    }

    /**
     * Set the num lot ecrit trans car.
     *
     * @param int $numLotEcritTransCar The num lot ecrit trans car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransCar($numLotEcritTransCar) {
        $this->numLotEcritTransCar = $numLotEcritTransCar;
        return $this;
    }

    /**
     * Set the num lot ecrit trans periodicite.
     *
     * @param int $numLotEcritTransPeriodicite The num lot ecrit trans periodicite.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransPeriodicite($numLotEcritTransPeriodicite) {
        $this->numLotEcritTransPeriodicite = $numLotEcritTransPeriodicite;
        return $this;
    }

    /**
     * Set the num lot ecrit trans subventions.
     *
     * @param int $numLotEcritTransSubventions The num lot ecrit trans subventions.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransSubventions($numLotEcritTransSubventions) {
        $this->numLotEcritTransSubventions = $numLotEcritTransSubventions;
        return $this;
    }

    /**
     * Set the num lot ecrit transf cb.
     *
     * @param int $numLotEcritTransfCb The num lot ecrit transf cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransfCb($numLotEcritTransfCb) {
        $this->numLotEcritTransfCb = $numLotEcritTransfCb;
        return $this;
    }

    /**
     * Set the num lot ecrit transf immo.
     *
     * @param int $numLotEcritTransfImmo The num lot ecrit transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransfImmo($numLotEcritTransfImmo) {
        $this->numLotEcritTransfImmo = $numLotEcritTransfImmo;
        return $this;
    }

    /**
     * Set the num lot ecrit transf lf.
     *
     * @param int $numLotEcritTransfLf The num lot ecrit transf lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotEcritTransfLf($numLotEcritTransfLf) {
        $this->numLotEcritTransfLf = $numLotEcritTransfLf;
        return $this;
    }

    /**
     * Set the num lot int courus.
     *
     * @param int $numLotIntCourus The num lot int courus.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotIntCourus($numLotIntCourus) {
        $this->numLotIntCourus = $numLotIntCourus;
        return $this;
    }

    /**
     * Set the num lot int extournes.
     *
     * @param int $numLotIntExtournes The num lot int extournes.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotIntExtournes($numLotIntExtournes) {
        $this->numLotIntExtournes = $numLotIntExtournes;
        return $this;
    }

    /**
     * Set the num lot prov cp.
     *
     * @param int $numLotProvCp The num lot prov cp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setNumLotProvCp($numLotProvCp) {
        $this->numLotProvCp = $numLotProvCp;
        return $this;
    }

    /**
     * Set the option import mvt rb.
     *
     * @param string $optionImportMvtRb The option import mvt rb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setOptionImportMvtRb($optionImportMvtRb) {
        $this->optionImportMvtRb = $optionImportMvtRb;
        return $this;
    }

    /**
     * Set the periode revision.
     *
     * @param DateTime|null $periodeRevision The periode revision.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setPeriodeRevision(DateTime $periodeRevision = null) {
        $this->periodeRevision = $periodeRevision;
        return $this;
    }

    /**
     * Set the periode transf immo.
     *
     * @param DateTime|null $periodeTransfImmo The periode transf immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setPeriodeTransfImmo(DateTime $periodeTransfImmo = null) {
        $this->periodeTransfImmo = $periodeTransfImmo;
        return $this;
    }

    /**
     * Set the periodicite utiliser libelle.
     *
     * @param int $periodiciteUtiliserLibelle The periodicite utiliser libelle.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setPeriodiciteUtiliserLibelle($periodiciteUtiliserLibelle) {
        $this->periodiciteUtiliserLibelle = $periodiciteUtiliserLibelle;
        return $this;
    }

    /**
     * Set the prochain lot lcr.
     *
     * @param int $prochainLotLcr The prochain lot lcr.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainLotLcr($prochainLotLcr) {
        $this->prochainLotLcr = $prochainLotLcr;
        return $this;
    }

    /**
     * Set the prochain lot lettre p.
     *
     * @param int $prochainLotLettreP The prochain lot lettre p.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainLotLettreP($prochainLotLettreP) {
        $this->prochainLotLettreP = $prochainLotLettreP;
        return $this;
    }

    /**
     * Set the prochain lot traite.
     *
     * @param int $prochainLotTraite The prochain lot traite.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainLotTraite($prochainLotTraite) {
        $this->prochainLotTraite = $prochainLotTraite;
        return $this;
    }

    /**
     * Set the prochain num cb.
     *
     * @param int $prochainNumCb The prochain num cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumCb($prochainNumCb) {
        $this->prochainNumCb = $prochainNumCb;
        return $this;
    }

    /**
     * Set the prochain num immo.
     *
     * @param int $prochainNumImmo The prochain num immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumImmo($prochainNumImmo) {
        $this->prochainNumImmo = $prochainNumImmo;
        return $this;
    }

    /**
     * Set the prochain num lf.
     *
     * @param int $prochainNumLf The prochain num lf.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumLf($prochainNumLf) {
        $this->prochainNumLf = $prochainNumLf;
        return $this;
    }

    /**
     * Set the prochain num pj.
     *
     * @param int $prochainNumPj The prochain num pj.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setProchainNumPj($prochainNumPj) {
        $this->prochainNumPj = $prochainNumPj;
        return $this;
    }

    /**
     * Set the racine import mvt rb.
     *
     * @param string $racineImportMvtRb The racine import mvt rb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRacineImportMvtRb($racineImportMvtRb) {
        $this->racineImportMvtRb = $racineImportMvtRb;
        return $this;
    }

    /**
     * Set the rebut vaut cession.
     *
     * @param bool $rebutVautCession The rebut vaut cession.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRebutVautCession($rebutVautCession) {
        $this->rebutVautCession = $rebutVautCession;
        return $this;
    }

    /**
     * Set the ref remise lcr.
     *
     * @param int $refRemiseLcr The ref remise lcr.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRefRemiseLcr($refRemiseLcr) {
        $this->refRemiseLcr = $refRemiseLcr;
        return $this;
    }

    /**
     * Set the ref virement frn.
     *
     * @param int $refVirementFrn The ref virement frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRefVirementFrn($refVirementFrn) {
        $this->refVirementFrn = $refVirementFrn;
        return $this;
    }

    /**
     * Set the regroup four cpt ech.
     *
     * @param bool $regroupFourCptEch The regroup four cpt ech.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRegroupFourCptEch($regroupFourCptEch) {
        $this->regroupFourCptEch = $regroupFourCptEch;
        return $this;
    }

    /**
     * Set the rep ass.
     *
     * @param bool $repAss The rep ass.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepAss($repAss) {
        $this->repAss = $repAss;
        return $this;
    }

    /**
     * Set the rep budget.
     *
     * @param bool $repBudget The rep budget.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepBudget($repBudget) {
        $this->repBudget = $repBudget;
        return $this;
    }

    /**
     * Set the rep car.
     *
     * @param bool $repCar The rep car.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepCar($repCar) {
        $this->repCar = $repCar;
        return $this;
    }

    /**
     * Set the rep cb.
     *
     * @param bool $repCb The rep cb.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepCb($repCb) {
        $this->repCb = $repCb;
        return $this;
    }

    /**
     * Set the rep cl.
     *
     * @param bool $repCl The rep cl.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepCl($repCl) {
        $this->repCl = $repCl;
        return $this;
    }

    /**
     * Set the rep compta gen.
     *
     * @param bool $repComptaGen The rep compta gen.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepComptaGen($repComptaGen) {
        $this->repComptaGen = $repComptaGen;
        return $this;
    }

    /**
     * Set the rep dec tva.
     *
     * @param bool $repDecTva The rep dec tva.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepDecTva($repDecTva) {
        $this->repDecTva = $repDecTva;
        return $this;
    }

    /**
     * Set the rep dos rev.
     *
     * @param bool $repDosRev The rep dos rev.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepDosRev($repDosRev) {
        $this->repDosRev = $repDosRev;
        return $this;
    }

    /**
     * Set the rep emprunts.
     *
     * @param bool $repEmprunts The rep emprunts.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepEmprunts($repEmprunts) {
        $this->repEmprunts = $repEmprunts;
        return $this;
    }

    /**
     * Set the rep es.
     *
     * @param bool $repEs The rep es.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepEs($repEs) {
        $this->repEs = $repEs;
        return $this;
    }

    /**
     * Set the rep immo.
     *
     * @param bool $repImmo The rep immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepImmo($repImmo) {
        $this->repImmo = $repImmo;
        return $this;
    }

    /**
     * Set the rep loc fi.
     *
     * @param bool $repLocFi The rep loc fi.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepLocFi($repLocFi) {
        $this->repLocFi = $repLocFi;
        return $this;
    }

    /**
     * Set the rep partielle.
     *
     * @param bool $repPartielle The rep partielle.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepPartielle($repPartielle) {
        $this->repPartielle = $repPartielle;
        return $this;
    }

    /**
     * Set the rep subv.
     *
     * @param bool $repSubv The rep subv.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepSubv($repSubv) {
        $this->repSubv = $repSubv;
        return $this;
    }

    /**
     * Set the rep vmp.
     *
     * @param bool $repVmp The rep vmp.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRepVmp($repVmp) {
        $this->repVmp = $repVmp;
        return $this;
    }

    /**
     * Set the revis solde en euro.
     *
     * @param bool $revisSoldeEnEuro The revis solde en euro.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRevisSoldeEnEuro($revisSoldeEnEuro) {
        $this->revisSoldeEnEuro = $revisSoldeEnEuro;
        return $this;
    }

    /**
     * Set the revis voir solde ex.
     *
     * @param bool $revisVoirSoldeEx The revis voir solde ex.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setRevisVoirSoldeEx($revisVoirSoldeEx) {
        $this->revisVoirSoldeEx = $revisVoirSoldeEx;
        return $this;
    }

    /**
     * Set the saisie caisse.
     *
     * @param bool $saisieCaisse The saisie caisse.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSaisieCaisse($saisieCaisse) {
        $this->saisieCaisse = $saisieCaisse;
        return $this;
    }

    /**
     * Set the saisie num piece.
     *
     * @param string $saisieNumPiece The saisie num piece.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSaisieNumPiece($saisieNumPiece) {
        $this->saisieNumPiece = $saisieNumPiece;
        return $this;
    }

    /**
     * Set the sauver periodicite.
     *
     * @param bool $sauverPeriodicite The sauver periodicite.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSauverPeriodicite($sauverPeriodicite) {
        $this->sauverPeriodicite = $sauverPeriodicite;
        return $this;
    }

    /**
     * Set the suivi aux client.
     *
     * @param bool $suiviAuxClient The suivi aux client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSuiviAuxClient($suiviAuxClient) {
        $this->suiviAuxClient = $suiviAuxClient;
        return $this;
    }

    /**
     * Set the suivi aux frn.
     *
     * @param bool $suiviAuxFrn The suivi aux frn.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSuiviAuxFrn($suiviAuxFrn) {
        $this->suiviAuxFrn = $suiviAuxFrn;
        return $this;
    }

    /**
     * Set the suivi devises.
     *
     * @param bool $suiviDevises The suivi devises.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setSuiviDevises($suiviDevises) {
        $this->suiviDevises = $suiviDevises;
        return $this;
    }

    /**
     * Set the transfert immo ok.
     *
     * @param bool $transfertImmoOk The transfert immo ok.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTransfertImmoOk($transfertImmoOk) {
        $this->transfertImmoOk = $transfertImmoOk;
        return $this;
    }

    /**
     * Set the type pmag client.
     *
     * @param int $typePmagClient The type pmag client.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypePmagClient($typePmagClient) {
        $this->typePmagClient = $typePmagClient;
        return $this;
    }

    /**
     * Set the type transfert immo.
     *
     * @param string $typeTransfertImmo The type transfert immo.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypeTransfertImmo($typeTransfertImmo) {
        $this->typeTransfertImmo = $typeTransfertImmo;
        return $this;
    }

    /**
     * Set the type transfert tiers.
     *
     * @param string $typeTransfertTiers The type transfert tiers.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypeTransfertTiers($typeTransfertTiers) {
        $this->typeTransfertTiers = $typeTransfertTiers;
        return $this;
    }

    /**
     * Set the type transfert tiers f.
     *
     * @param string $typeTransfertTiersF The type transfert tiers f.
     * @return Dossier3 Returns this Dossier3.
     */
    public function setTypeTransfertTiersF($typeTransfertTiersF) {
        $this->typeTransfertTiersF = $typeTransfertTiersF;
        return $this;
    }
}
