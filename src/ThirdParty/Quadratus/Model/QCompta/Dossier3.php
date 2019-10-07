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
 * Dossier3 model.
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
     * Code i c s.
     *
     * @var string
     */
    private $codeICS;

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
     * Compte debut c a r.
     *
     * @var string
     */
    private $compteDebutCAR;

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
     * Compte fin c a r.
     *
     * @var string
     */
    private $compteFinCAR;

    /**
     * Compte fin subventions.
     *
     * @var string
     */
    private $compteFinSubventions;

    /**
     * Compte t v a c a r.
     *
     * @var string
     */
    private $compteTVACAR;

    /**
     * Conserve mois r b.
     *
     * @var bool
     */
    private $conserveMoisRB;

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
     * @var DateTime
     */
    private $dateRevision;

    /**
     * Date transf c b.
     *
     * @var DateTime
     */
    private $dateTransfCB;

    /**
     * Date transf cli douteux.
     *
     * @var DateTime
     */
    private $dateTransfCliDouteux;

    /**
     * Date transf int courus.
     *
     * @var DateTime
     */
    private $dateTransfIntCourus;

    /**
     * Date transf int extournes.
     *
     * @var DateTime
     */
    private $dateTransfIntExtournes;

    /**
     * Date transf l f.
     *
     * @var DateTime
     */
    private $dateTransfLF;

    /**
     * Date transf prov c p.
     *
     * @var DateTime
     */
    private $dateTransfProvCP;

    /**
     * Date transfert ech c b.
     *
     * @var DateTime
     */
    private $dateTransfertEchCB;

    /**
     * Date transfert ech l f.
     *
     * @var DateTime
     */
    private $dateTransfertEchLF;

    /**
     * Date transfert echeance.
     *
     * @var DateTime
     */
    private $dateTransfertEcheance;

    /**
     * Debut calcul immo.
     *
     * @var DateTime
     */
    private $debutCalculImmo;

    /**
     * Delai rejet effet.
     *
     * @var string
     */
    private $delaiRejetEffet;

    /**
     * Detail c b.
     *
     * @var bool
     */
    private $detailCB;

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
     * E d i400.
     *
     * @var bool
     */
    private $eDI400;

    /**
     * Edit ana contrepasse.
     *
     * @var bool
     */
    private $editAnaContrepasse;

    /**
     * Fin calcul immo.
     *
     * @var DateTime
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
     * Gestion p m a g client.
     *
     * @var bool
     */
    private $gestionPMAGClient;

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
     * Lettre pvaut b o.
     *
     * @var bool
     */
    private $lettrePvautBO;

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
     * Nom lettre p c.
     *
     * @var string
     */
    private $nomLettrePC;

    /**
     * Num chrono b o.
     *
     * @var int
     */
    private $numChronoBO;

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
     * Num lot ecrit trans c a r.
     *
     * @var int
     */
    private $numLotEcritTransCAR;

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
     * Num lot ecrit transf c b.
     *
     * @var int
     */
    private $numLotEcritTransfCB;

    /**
     * Num lot ecrit transf immo.
     *
     * @var int
     */
    private $numLotEcritTransfImmo;

    /**
     * Num lot ecrit transf l f.
     *
     * @var int
     */
    private $numLotEcritTransfLF;

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
     * Num lot prov c p.
     *
     * @var int
     */
    private $numLotProvCP;

    /**
     * Option import mvt r b.
     *
     * @var string
     */
    private $optionImportMvtRB;

    /**
     * Periode revision.
     *
     * @var DateTime
     */
    private $periodeRevision;

    /**
     * Periode transf immo.
     *
     * @var DateTime
     */
    private $periodeTransfImmo;

    /**
     * Periodicite utiliser libelle.
     *
     * @var int
     */
    private $periodiciteUtiliserLibelle;

    /**
     * Prochain lot l c r.
     *
     * @var int
     */
    private $prochainLotLCR;

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
     * Prochain num c b.
     *
     * @var int
     */
    private $prochainNumCB;

    /**
     * Prochain num immo.
     *
     * @var int
     */
    private $prochainNumImmo;

    /**
     * Prochain num l f.
     *
     * @var int
     */
    private $prochainNumLF;

    /**
     * Prochain num p j.
     *
     * @var int
     */
    private $prochainNumPJ;

    /**
     * Racine import mvt r b.
     *
     * @var string
     */
    private $racineImportMvtRB;

    /**
     * Rebut vaut cession.
     *
     * @var bool
     */
    private $rebutVautCession;

    /**
     * Ref remise l c r.
     *
     * @var int
     */
    private $refRemiseLCR;

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
     * Rep c a r.
     *
     * @var bool
     */
    private $repCAR;

    /**
     * Rep c b.
     *
     * @var bool
     */
    private $repCB;

    /**
     * Rep c l.
     *
     * @var bool
     */
    private $repCL;

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
     * Rep e s.
     *
     * @var bool
     */
    private $repES;

    /**
     * Rep emprunts.
     *
     * @var bool
     */
    private $repEmprunts;

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
     * Rep v m p.
     *
     * @var bool
     */
    private $repVMP;

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
     * Type p m a g client.
     *
     * @var int
     */
    private $typePMAGClient;

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
     * Get the code i c s.
     *
     * @return string Returns the code i c s.
     */
    public function getCodeICS() {
        return $this->codeICS;
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
     * Get the compte debut c a r.
     *
     * @return string Returns the compte debut c a r.
     */
    public function getCompteDebutCAR() {
        return $this->compteDebutCAR;
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
     * Get the compte fin c a r.
     *
     * @return string Returns the compte fin c a r.
     */
    public function getCompteFinCAR() {
        return $this->compteFinCAR;
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
     * Get the compte t v a c a r.
     *
     * @return string Returns the compte t v a c a r.
     */
    public function getCompteTVACAR() {
        return $this->compteTVACAR;
    }

    /**
     * Get the conserve mois r b.
     *
     * @return bool Returns the conserve mois r b.
     */
    public function getConserveMoisRB() {
        return $this->conserveMoisRB;
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
     * @return DateTime Returns the date revision.
     */
    public function getDateRevision() {
        return $this->dateRevision;
    }

    /**
     * Get the date transf c b.
     *
     * @return DateTime Returns the date transf c b.
     */
    public function getDateTransfCB() {
        return $this->dateTransfCB;
    }

    /**
     * Get the date transf cli douteux.
     *
     * @return DateTime Returns the date transf cli douteux.
     */
    public function getDateTransfCliDouteux() {
        return $this->dateTransfCliDouteux;
    }

    /**
     * Get the date transf int courus.
     *
     * @return DateTime Returns the date transf int courus.
     */
    public function getDateTransfIntCourus() {
        return $this->dateTransfIntCourus;
    }

    /**
     * Get the date transf int extournes.
     *
     * @return DateTime Returns the date transf int extournes.
     */
    public function getDateTransfIntExtournes() {
        return $this->dateTransfIntExtournes;
    }

    /**
     * Get the date transf l f.
     *
     * @return DateTime Returns the date transf l f.
     */
    public function getDateTransfLF() {
        return $this->dateTransfLF;
    }

    /**
     * Get the date transf prov c p.
     *
     * @return DateTime Returns the date transf prov c p.
     */
    public function getDateTransfProvCP() {
        return $this->dateTransfProvCP;
    }

    /**
     * Get the date transfert ech c b.
     *
     * @return DateTime Returns the date transfert ech c b.
     */
    public function getDateTransfertEchCB() {
        return $this->dateTransfertEchCB;
    }

    /**
     * Get the date transfert ech l f.
     *
     * @return DateTime Returns the date transfert ech l f.
     */
    public function getDateTransfertEchLF() {
        return $this->dateTransfertEchLF;
    }

    /**
     * Get the date transfert echeance.
     *
     * @return DateTime Returns the date transfert echeance.
     */
    public function getDateTransfertEcheance() {
        return $this->dateTransfertEcheance;
    }

    /**
     * Get the debut calcul immo.
     *
     * @return DateTime Returns the debut calcul immo.
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
     * Get the detail c b.
     *
     * @return bool Returns the detail c b.
     */
    public function getDetailCB() {
        return $this->detailCB;
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
     * Get the e d i400.
     *
     * @return bool Returns the e d i400.
     */
    public function getEDI400() {
        return $this->eDI400;
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
     * @return DateTime Returns the fin calcul immo.
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
     * Get the gestion p m a g client.
     *
     * @return bool Returns the gestion p m a g client.
     */
    public function getGestionPMAGClient() {
        return $this->gestionPMAGClient;
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
     * Get the lettre pvaut b o.
     *
     * @return bool Returns the lettre pvaut b o.
     */
    public function getLettrePvautBO() {
        return $this->lettrePvautBO;
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
     * Get the nom lettre p c.
     *
     * @return string Returns the nom lettre p c.
     */
    public function getNomLettrePC() {
        return $this->nomLettrePC;
    }

    /**
     * Get the num chrono b o.
     *
     * @return int Returns the num chrono b o.
     */
    public function getNumChronoBO() {
        return $this->numChronoBO;
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
     * Get the num lot ecrit trans c a r.
     *
     * @return int Returns the num lot ecrit trans c a r.
     */
    public function getNumLotEcritTransCAR() {
        return $this->numLotEcritTransCAR;
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
     * Get the num lot ecrit transf c b.
     *
     * @return int Returns the num lot ecrit transf c b.
     */
    public function getNumLotEcritTransfCB() {
        return $this->numLotEcritTransfCB;
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
     * Get the num lot ecrit transf l f.
     *
     * @return int Returns the num lot ecrit transf l f.
     */
    public function getNumLotEcritTransfLF() {
        return $this->numLotEcritTransfLF;
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
     * Get the num lot prov c p.
     *
     * @return int Returns the num lot prov c p.
     */
    public function getNumLotProvCP() {
        return $this->numLotProvCP;
    }

    /**
     * Get the option import mvt r b.
     *
     * @return string Returns the option import mvt r b.
     */
    public function getOptionImportMvtRB() {
        return $this->optionImportMvtRB;
    }

    /**
     * Get the periode revision.
     *
     * @return DateTime Returns the periode revision.
     */
    public function getPeriodeRevision() {
        return $this->periodeRevision;
    }

    /**
     * Get the periode transf immo.
     *
     * @return DateTime Returns the periode transf immo.
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
     * Get the prochain lot l c r.
     *
     * @return int Returns the prochain lot l c r.
     */
    public function getProchainLotLCR() {
        return $this->prochainLotLCR;
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
     * Get the prochain num c b.
     *
     * @return int Returns the prochain num c b.
     */
    public function getProchainNumCB() {
        return $this->prochainNumCB;
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
     * Get the prochain num l f.
     *
     * @return int Returns the prochain num l f.
     */
    public function getProchainNumLF() {
        return $this->prochainNumLF;
    }

    /**
     * Get the prochain num p j.
     *
     * @return int Returns the prochain num p j.
     */
    public function getProchainNumPJ() {
        return $this->prochainNumPJ;
    }

    /**
     * Get the racine import mvt r b.
     *
     * @return string Returns the racine import mvt r b.
     */
    public function getRacineImportMvtRB() {
        return $this->racineImportMvtRB;
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
     * Get the ref remise l c r.
     *
     * @return int Returns the ref remise l c r.
     */
    public function getRefRemiseLCR() {
        return $this->refRemiseLCR;
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
     * Get the rep c a r.
     *
     * @return bool Returns the rep c a r.
     */
    public function getRepCAR() {
        return $this->repCAR;
    }

    /**
     * Get the rep c b.
     *
     * @return bool Returns the rep c b.
     */
    public function getRepCB() {
        return $this->repCB;
    }

    /**
     * Get the rep c l.
     *
     * @return bool Returns the rep c l.
     */
    public function getRepCL() {
        return $this->repCL;
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
     * Get the rep e s.
     *
     * @return bool Returns the rep e s.
     */
    public function getRepES() {
        return $this->repES;
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
     * Get the rep v m p.
     *
     * @return bool Returns the rep v m p.
     */
    public function getRepVMP() {
        return $this->repVMP;
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
     * Get the type p m a g client.
     *
     * @return int Returns the type p m a g client.
     */
    public function getTypePMAGClient() {
        return $this->typePMAGClient;
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
     * @return Dossier3 Returns this dossier3.
     */
    public function setAchatVenteAutomate($achatVenteAutomate) {
        $this->achatVenteAutomate = $achatVenteAutomate;
        return $this;
    }

    /**
     * Set the achat vente local tva.
     *
     * @param string $achatVenteLocalTva The achat vente local tva.
     * @return Dossier3 Returns this dossier3.
     */
    public function setAchatVenteLocalTva($achatVenteLocalTva) {
        $this->achatVenteLocalTva = $achatVenteLocalTva;
        return $this;
    }

    /**
     * Set the achat vente stop tva.
     *
     * @param bool $achatVenteStopTva The achat vente stop tva.
     * @return Dossier3 Returns this dossier3.
     */
    public function setAchatVenteStopTva($achatVenteStopTva) {
        $this->achatVenteStopTva = $achatVenteStopTva;
        return $this;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool $bonsAPayer The bons a payer.
     * @return Dossier3 Returns this dossier3.
     */
    public function setBonsAPayer($bonsAPayer) {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }

    /**
     * Set the code i c s.
     *
     * @param string $codeICS The code i c s.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCodeICS($codeICS) {
        $this->codeICS = $codeICS;
        return $this;
    }

    /**
     * Set the code journal revision.
     *
     * @param string $codeJournalRevision The code journal revision.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCodeJournalRevision($codeJournalRevision) {
        $this->codeJournalRevision = $codeJournalRevision;
        return $this;
    }

    /**
     * Set the code journal transf immo.
     *
     * @param string $codeJournalTransfImmo The code journal transf immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCodeJournalTransfImmo($codeJournalTransfImmo) {
        $this->codeJournalTransfImmo = $codeJournalTransfImmo;
        return $this;
    }

    /**
     * Set the comp cli frs.
     *
     * @param bool $compCliFrs The comp cli frs.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompCliFrs($compCliFrs) {
        $this->compCliFrs = $compCliFrs;
        return $this;
    }

    /**
     * Set the compte debut assurance.
     *
     * @param string $compteDebutAssurance The compte debut assurance.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteDebutAssurance($compteDebutAssurance) {
        $this->compteDebutAssurance = $compteDebutAssurance;
        return $this;
    }

    /**
     * Set the compte debut bail.
     *
     * @param string $compteDebutBail The compte debut bail.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteDebutBail($compteDebutBail) {
        $this->compteDebutBail = $compteDebutBail;
        return $this;
    }

    /**
     * Set the compte debut c a r.
     *
     * @param string $compteDebutCAR The compte debut c a r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteDebutCAR($compteDebutCAR) {
        $this->compteDebutCAR = $compteDebutCAR;
        return $this;
    }

    /**
     * Set the compte debut subventions.
     *
     * @param string $compteDebutSubventions The compte debut subventions.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteDebutSubventions($compteDebutSubventions) {
        $this->compteDebutSubventions = $compteDebutSubventions;
        return $this;
    }

    /**
     * Set the compte fin assurance.
     *
     * @param string $compteFinAssurance The compte fin assurance.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteFinAssurance($compteFinAssurance) {
        $this->compteFinAssurance = $compteFinAssurance;
        return $this;
    }

    /**
     * Set the compte fin bail.
     *
     * @param string $compteFinBail The compte fin bail.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteFinBail($compteFinBail) {
        $this->compteFinBail = $compteFinBail;
        return $this;
    }

    /**
     * Set the compte fin c a r.
     *
     * @param string $compteFinCAR The compte fin c a r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteFinCAR($compteFinCAR) {
        $this->compteFinCAR = $compteFinCAR;
        return $this;
    }

    /**
     * Set the compte fin subventions.
     *
     * @param string $compteFinSubventions The compte fin subventions.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteFinSubventions($compteFinSubventions) {
        $this->compteFinSubventions = $compteFinSubventions;
        return $this;
    }

    /**
     * Set the compte t v a c a r.
     *
     * @param string $compteTVACAR The compte t v a c a r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCompteTVACAR($compteTVACAR) {
        $this->compteTVACAR = $compteTVACAR;
        return $this;
    }

    /**
     * Set the conserve mois r b.
     *
     * @param bool $conserveMoisRB The conserve mois r b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setConserveMoisRB($conserveMoisRB) {
        $this->conserveMoisRB = $conserveMoisRB;
        return $this;
    }

    /**
     * Set the controle edition.
     *
     * @param bool $controleEdition The controle edition.
     * @return Dossier3 Returns this dossier3.
     */
    public function setControleEdition($controleEdition) {
        $this->controleEdition = $controleEdition;
        return $this;
    }

    /**
     * Set the controle exist ecr.
     *
     * @param string $controleExistEcr The controle exist ecr.
     * @return Dossier3 Returns this dossier3.
     */
    public function setControleExistEcr($controleExistEcr) {
        $this->controleExistEcr = $controleExistEcr;
        return $this;
    }

    /**
     * Set the controle ref tire.
     *
     * @param bool $controleRefTire The controle ref tire.
     * @return Dossier3 Returns this dossier3.
     */
    public function setControleRefTire($controleRefTire) {
        $this->controleRefTire = $controleRefTire;
        return $this;
    }

    /**
     * Set the cpt transf immo communs.
     *
     * @param bool $cptTransfImmoCommuns The cpt transf immo communs.
     * @return Dossier3 Returns this dossier3.
     */
    public function setCptTransfImmoCommuns($cptTransfImmoCommuns) {
        $this->cptTransfImmoCommuns = $cptTransfImmoCommuns;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime $dateRevision The date revision.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateRevision(DateTime $dateRevision = null) {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the date transf c b.
     *
     * @param DateTime $dateTransfCB The date transf c b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfCB(DateTime $dateTransfCB = null) {
        $this->dateTransfCB = $dateTransfCB;
        return $this;
    }

    /**
     * Set the date transf cli douteux.
     *
     * @param DateTime $dateTransfCliDouteux The date transf cli douteux.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfCliDouteux(DateTime $dateTransfCliDouteux = null) {
        $this->dateTransfCliDouteux = $dateTransfCliDouteux;
        return $this;
    }

    /**
     * Set the date transf int courus.
     *
     * @param DateTime $dateTransfIntCourus The date transf int courus.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfIntCourus(DateTime $dateTransfIntCourus = null) {
        $this->dateTransfIntCourus = $dateTransfIntCourus;
        return $this;
    }

    /**
     * Set the date transf int extournes.
     *
     * @param DateTime $dateTransfIntExtournes The date transf int extournes.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfIntExtournes(DateTime $dateTransfIntExtournes = null) {
        $this->dateTransfIntExtournes = $dateTransfIntExtournes;
        return $this;
    }

    /**
     * Set the date transf l f.
     *
     * @param DateTime $dateTransfLF The date transf l f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfLF(DateTime $dateTransfLF = null) {
        $this->dateTransfLF = $dateTransfLF;
        return $this;
    }

    /**
     * Set the date transf prov c p.
     *
     * @param DateTime $dateTransfProvCP The date transf prov c p.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfProvCP(DateTime $dateTransfProvCP = null) {
        $this->dateTransfProvCP = $dateTransfProvCP;
        return $this;
    }

    /**
     * Set the date transfert ech c b.
     *
     * @param DateTime $dateTransfertEchCB The date transfert ech c b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfertEchCB(DateTime $dateTransfertEchCB = null) {
        $this->dateTransfertEchCB = $dateTransfertEchCB;
        return $this;
    }

    /**
     * Set the date transfert ech l f.
     *
     * @param DateTime $dateTransfertEchLF The date transfert ech l f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfertEchLF(DateTime $dateTransfertEchLF = null) {
        $this->dateTransfertEchLF = $dateTransfertEchLF;
        return $this;
    }

    /**
     * Set the date transfert echeance.
     *
     * @param DateTime $dateTransfertEcheance The date transfert echeance.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDateTransfertEcheance(DateTime $dateTransfertEcheance = null) {
        $this->dateTransfertEcheance = $dateTransfertEcheance;
        return $this;
    }

    /**
     * Set the debut calcul immo.
     *
     * @param DateTime $debutCalculImmo The debut calcul immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDebutCalculImmo(DateTime $debutCalculImmo = null) {
        $this->debutCalculImmo = $debutCalculImmo;
        return $this;
    }

    /**
     * Set the delai rejet effet.
     *
     * @param string $delaiRejetEffet The delai rejet effet.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDelaiRejetEffet($delaiRejetEffet) {
        $this->delaiRejetEffet = $delaiRejetEffet;
        return $this;
    }

    /**
     * Set the detail c b.
     *
     * @param bool $detailCB The detail c b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDetailCB($detailCB) {
        $this->detailCB = $detailCB;
        return $this;
    }

    /**
     * Set the detail immo.
     *
     * @param bool $detailImmo The detail immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDetailImmo($detailImmo) {
        $this->detailImmo = $detailImmo;
        return $this;
    }

    /**
     * Set the dot franc centime.
     *
     * @param string $dotFrancCentime The dot franc centime.
     * @return Dossier3 Returns this dossier3.
     */
    public function setDotFrancCentime($dotFrancCentime) {
        $this->dotFrancCentime = $dotFrancCentime;
        return $this;
    }

    /**
     * Set the e d i400.
     *
     * @param bool $eDI400 The e d i400.
     * @return Dossier3 Returns this dossier3.
     */
    public function setEDI400($eDI400) {
        $this->eDI400 = $eDI400;
        return $this;
    }

    /**
     * Set the edit ana contrepasse.
     *
     * @param bool $editAnaContrepasse The edit ana contrepasse.
     * @return Dossier3 Returns this dossier3.
     */
    public function setEditAnaContrepasse($editAnaContrepasse) {
        $this->editAnaContrepasse = $editAnaContrepasse;
        return $this;
    }

    /**
     * Set the fin calcul immo.
     *
     * @param DateTime $finCalculImmo The fin calcul immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setFinCalculImmo(DateTime $finCalculImmo = null) {
        $this->finCalculImmo = $finCalculImmo;
        return $this;
    }

    /**
     * Set the folio revision.
     *
     * @param int $folioRevision The folio revision.
     * @return Dossier3 Returns this dossier3.
     */
    public function setFolioRevision($folioRevision) {
        $this->folioRevision = $folioRevision;
        return $this;
    }

    /**
     * Set the folio transf immo.
     *
     * @param int $folioTransfImmo The folio transf immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setFolioTransfImmo($folioTransfImmo) {
        $this->folioTransfImmo = $folioTransfImmo;
        return $this;
    }

    /**
     * Set the gestion p m a g client.
     *
     * @param bool $gestionPMAGClient The gestion p m a g client.
     * @return Dossier3 Returns this dossier3.
     */
    public function setGestionPMAGClient($gestionPMAGClient) {
        $this->gestionPMAGClient = $gestionPMAGClient;
        return $this;
    }

    /**
     * Set the gestion traite papier.
     *
     * @param bool $gestionTraitePapier The gestion traite papier.
     * @return Dossier3 Returns this dossier3.
     */
    public function setGestionTraitePapier($gestionTraitePapier) {
        $this->gestionTraitePapier = $gestionTraitePapier;
        return $this;
    }

    /**
     * Set the gestion virement frn.
     *
     * @param bool $gestionVirementFrn The gestion virement frn.
     * @return Dossier3 Returns this dossier3.
     */
    public function setGestionVirementFrn($gestionVirementFrn) {
        $this->gestionVirementFrn = $gestionVirementFrn;
        return $this;
    }

    /**
     * Set the immo detail lignes.
     *
     * @param bool $immoDetailLignes The immo detail lignes.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoDetailLignes($immoDetailLignes) {
        $this->immoDetailLignes = $immoDetailLignes;
        return $this;
    }

    /**
     * Set the immo detail par cpt.
     *
     * @param bool $immoDetailParCpt The immo detail par cpt.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoDetailParCpt($immoDetailParCpt) {
        $this->immoDetailParCpt = $immoDetailParCpt;
        return $this;
    }

    /**
     * Set the immo edit ensemble.
     *
     * @param bool $immoEditEnsemble The immo edit ensemble.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoEditEnsemble($immoEditEnsemble) {
        $this->immoEditEnsemble = $immoEditEnsemble;
        return $this;
    }

    /**
     * Set the immo jours par an.
     *
     * @param int $immoJoursParAn The immo jours par an.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoJoursParAn($immoJoursParAn) {
        $this->immoJoursParAn = $immoJoursParAn;
        return $this;
    }

    /**
     * Set the immo ss tot immo.
     *
     * @param bool $immoSsTotImmo The immo ss tot immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoSsTotImmo($immoSsTotImmo) {
        $this->immoSsTotImmo = $immoSsTotImmo;
        return $this;
    }

    /**
     * Set the immo tot par compte.
     *
     * @param bool $immoTotParCompte The immo tot par compte.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoTotParCompte($immoTotParCompte) {
        $this->immoTotParCompte = $immoTotParCompte;
        return $this;
    }

    /**
     * Set the immo transfert forfait vers reel.
     *
     * @param bool $immoTransfertForfaitVersReel The immo transfert forfait vers reel.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoTransfertForfaitVersReel($immoTransfertForfaitVersReel) {
        $this->immoTransfertForfaitVersReel = $immoTransfertForfaitVersReel;
        return $this;
    }

    /**
     * Set the immo tri analytique.
     *
     * @param bool $immoTriAnalytique The immo tri analytique.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoTriAnalytique($immoTriAnalytique) {
        $this->immoTriAnalytique = $immoTriAnalytique;
        return $this;
    }

    /**
     * Set the immo tri par date.
     *
     * @param bool $immoTriParDate The immo tri par date.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoTriParDate($immoTriParDate) {
        $this->immoTriParDate = $immoTriParDate;
        return $this;
    }

    /**
     * Set the immo tri par service.
     *
     * @param bool $immoTriParService The immo tri par service.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoTriParService($immoTriParService) {
        $this->immoTriParService = $immoTriParService;
        return $this;
    }

    /**
     * Set the immo type liasse.
     *
     * @param string $immoTypeLiasse The immo type liasse.
     * @return Dossier3 Returns this dossier3.
     */
    public function setImmoTypeLiasse($immoTypeLiasse) {
        $this->immoTypeLiasse = $immoTypeLiasse;
        return $this;
    }

    /**
     * Set the is client exp.
     *
     * @param bool $isClientExp The is client exp.
     * @return Dossier3 Returns this dossier3.
     */
    public function setIsClientExp($isClientExp) {
        $this->isClientExp = $isClientExp;
        return $this;
    }

    /**
     * Set the lettre pvaut b o.
     *
     * @param bool $lettrePvautBO The lettre pvaut b o.
     * @return Dossier3 Returns this dossier3.
     */
    public function setLettrePvautBO($lettrePvautBO) {
        $this->lettrePvautBO = $lettrePvautBO;
        return $this;
    }

    /**
     * Set the lib variable1.
     *
     * @param string $libVariable1 The lib variable1.
     * @return Dossier3 Returns this dossier3.
     */
    public function setLibVariable1($libVariable1) {
        $this->libVariable1 = $libVariable1;
        return $this;
    }

    /**
     * Set the lib variable2.
     *
     * @param string $libVariable2 The lib variable2.
     * @return Dossier3 Returns this dossier3.
     */
    public function setLibVariable2($libVariable2) {
        $this->libVariable2 = $libVariable2;
        return $this;
    }

    /**
     * Set the lib variable3.
     *
     * @param string $libVariable3 The lib variable3.
     * @return Dossier3 Returns this dossier3.
     */
    public function setLibVariable3($libVariable3) {
        $this->libVariable3 = $libVariable3;
        return $this;
    }

    /**
     * Set the mise en portefeuille bic f.
     *
     * @param string $miseEnPortefeuilleBicF The mise en portefeuille bic f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMiseEnPortefeuilleBicF($miseEnPortefeuilleBicF) {
        $this->miseEnPortefeuilleBicF = $miseEnPortefeuilleBicF;
        return $this;
    }

    /**
     * Set the mise en portefeuille dom f.
     *
     * @param string $miseEnPortefeuilleDomF The mise en portefeuille dom f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMiseEnPortefeuilleDomF($miseEnPortefeuilleDomF) {
        $this->miseEnPortefeuilleDomF = $miseEnPortefeuilleDomF;
        return $this;
    }

    /**
     * Set the mise en portefeuille iban f.
     *
     * @param string $miseEnPortefeuilleIbanF The mise en portefeuille iban f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMiseEnPortefeuilleIbanF($miseEnPortefeuilleIbanF) {
        $this->miseEnPortefeuilleIbanF = $miseEnPortefeuilleIbanF;
        return $this;
    }

    /**
     * Set the mise en portefeuille rib f.
     *
     * @param string $miseEnPortefeuilleRibF The mise en portefeuille rib f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMiseEnPortefeuilleRibF($miseEnPortefeuilleRibF) {
        $this->miseEnPortefeuilleRibF = $miseEnPortefeuilleRibF;
        return $this;
    }

    /**
     * Set the multi ech client.
     *
     * @param bool $multiEchClient The multi ech client.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMultiEchClient($multiEchClient) {
        $this->multiEchClient = $multiEchClient;
        return $this;
    }

    /**
     * Set the multi ech frn.
     *
     * @param bool $multiEchFrn The multi ech frn.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMultiEchFrn($multiEchFrn) {
        $this->multiEchFrn = $multiEchFrn;
        return $this;
    }

    /**
     * Set the multi ech par code lib auto.
     *
     * @param bool $multiEchParCodeLibAuto The multi ech par code lib auto.
     * @return Dossier3 Returns this dossier3.
     */
    public function setMultiEchParCodeLibAuto($multiEchParCodeLibAuto) {
        $this->multiEchParCodeLibAuto = $multiEchParCodeLibAuto;
        return $this;
    }

    /**
     * Set the ne plus afficher.
     *
     * @param bool $nePlusAfficher The ne plus afficher.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNePlusAfficher($nePlusAfficher) {
        $this->nePlusAfficher = $nePlusAfficher;
        return $this;
    }

    /**
     * Set the niv tri analytique.
     *
     * @param string $nivTriAnalytique The niv tri analytique.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriAnalytique($nivTriAnalytique) {
        $this->nivTriAnalytique = $nivTriAnalytique;
        return $this;
    }

    /**
     * Set the niv tri bureau.
     *
     * @param string $nivTriBureau The niv tri bureau.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriBureau($nivTriBureau) {
        $this->nivTriBureau = $nivTriBureau;
        return $this;
    }

    /**
     * Set the niv tri famille.
     *
     * @param string $nivTriFamille The niv tri famille.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriFamille($nivTriFamille) {
        $this->nivTriFamille = $nivTriFamille;
        return $this;
    }

    /**
     * Set the niv tri nat.
     *
     * @param string $nivTriNat The niv tri nat.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriNat($nivTriNat) {
        $this->nivTriNat = $nivTriNat;
        return $this;
    }

    /**
     * Set the niv tri service.
     *
     * @param string $nivTriService The niv tri service.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriService($nivTriService) {
        $this->nivTriService = $nivTriService;
        return $this;
    }

    /**
     * Set the niv tri site.
     *
     * @param string $nivTriSite The niv tri site.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriSite($nivTriSite) {
        $this->nivTriSite = $nivTriSite;
        return $this;
    }

    /**
     * Set the niv tri zl1.
     *
     * @param string $nivTriZl1 The niv tri zl1.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriZl1($nivTriZl1) {
        $this->nivTriZl1 = $nivTriZl1;
        return $this;
    }

    /**
     * Set the niv tri zl2.
     *
     * @param string $nivTriZl2 The niv tri zl2.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriZl2($nivTriZl2) {
        $this->nivTriZl2 = $nivTriZl2;
        return $this;
    }

    /**
     * Set the niv tri zl3.
     *
     * @param string $nivTriZl3 The niv tri zl3.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNivTriZl3($nivTriZl3) {
        $this->nivTriZl3 = $nivTriZl3;
        return $this;
    }

    /**
     * Set the nom lettre p.
     *
     * @param string $nomLettreP The nom lettre p.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNomLettreP($nomLettreP) {
        $this->nomLettreP = $nomLettreP;
        return $this;
    }

    /**
     * Set the nom lettre p c.
     *
     * @param string $nomLettrePC The nom lettre p c.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNomLettrePC($nomLettrePC) {
        $this->nomLettrePC = $nomLettrePC;
        return $this;
    }

    /**
     * Set the num chrono b o.
     *
     * @param int $numChronoBO The num chrono b o.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumChronoBO($numChronoBO) {
        $this->numChronoBO = $numChronoBO;
        return $this;
    }

    /**
     * Set the num lot cli douteux.
     *
     * @param int $numLotCliDouteux The num lot cli douteux.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotCliDouteux($numLotCliDouteux) {
        $this->numLotCliDouteux = $numLotCliDouteux;
        return $this;
    }

    /**
     * Set the num lot ecrit trans assurance.
     *
     * @param int $numLotEcritTransAssurance The num lot ecrit trans assurance.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransAssurance($numLotEcritTransAssurance) {
        $this->numLotEcritTransAssurance = $numLotEcritTransAssurance;
        return $this;
    }

    /**
     * Set the num lot ecrit trans baux.
     *
     * @param int $numLotEcritTransBaux The num lot ecrit trans baux.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransBaux($numLotEcritTransBaux) {
        $this->numLotEcritTransBaux = $numLotEcritTransBaux;
        return $this;
    }

    /**
     * Set the num lot ecrit trans c a r.
     *
     * @param int $numLotEcritTransCAR The num lot ecrit trans c a r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransCAR($numLotEcritTransCAR) {
        $this->numLotEcritTransCAR = $numLotEcritTransCAR;
        return $this;
    }

    /**
     * Set the num lot ecrit trans periodicite.
     *
     * @param int $numLotEcritTransPeriodicite The num lot ecrit trans periodicite.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransPeriodicite($numLotEcritTransPeriodicite) {
        $this->numLotEcritTransPeriodicite = $numLotEcritTransPeriodicite;
        return $this;
    }

    /**
     * Set the num lot ecrit trans subventions.
     *
     * @param int $numLotEcritTransSubventions The num lot ecrit trans subventions.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransSubventions($numLotEcritTransSubventions) {
        $this->numLotEcritTransSubventions = $numLotEcritTransSubventions;
        return $this;
    }

    /**
     * Set the num lot ecrit transf c b.
     *
     * @param int $numLotEcritTransfCB The num lot ecrit transf c b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransfCB($numLotEcritTransfCB) {
        $this->numLotEcritTransfCB = $numLotEcritTransfCB;
        return $this;
    }

    /**
     * Set the num lot ecrit transf immo.
     *
     * @param int $numLotEcritTransfImmo The num lot ecrit transf immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransfImmo($numLotEcritTransfImmo) {
        $this->numLotEcritTransfImmo = $numLotEcritTransfImmo;
        return $this;
    }

    /**
     * Set the num lot ecrit transf l f.
     *
     * @param int $numLotEcritTransfLF The num lot ecrit transf l f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotEcritTransfLF($numLotEcritTransfLF) {
        $this->numLotEcritTransfLF = $numLotEcritTransfLF;
        return $this;
    }

    /**
     * Set the num lot int courus.
     *
     * @param int $numLotIntCourus The num lot int courus.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotIntCourus($numLotIntCourus) {
        $this->numLotIntCourus = $numLotIntCourus;
        return $this;
    }

    /**
     * Set the num lot int extournes.
     *
     * @param int $numLotIntExtournes The num lot int extournes.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotIntExtournes($numLotIntExtournes) {
        $this->numLotIntExtournes = $numLotIntExtournes;
        return $this;
    }

    /**
     * Set the num lot prov c p.
     *
     * @param int $numLotProvCP The num lot prov c p.
     * @return Dossier3 Returns this dossier3.
     */
    public function setNumLotProvCP($numLotProvCP) {
        $this->numLotProvCP = $numLotProvCP;
        return $this;
    }

    /**
     * Set the option import mvt r b.
     *
     * @param string $optionImportMvtRB The option import mvt r b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setOptionImportMvtRB($optionImportMvtRB) {
        $this->optionImportMvtRB = $optionImportMvtRB;
        return $this;
    }

    /**
     * Set the periode revision.
     *
     * @param DateTime $periodeRevision The periode revision.
     * @return Dossier3 Returns this dossier3.
     */
    public function setPeriodeRevision(DateTime $periodeRevision = null) {
        $this->periodeRevision = $periodeRevision;
        return $this;
    }

    /**
     * Set the periode transf immo.
     *
     * @param DateTime $periodeTransfImmo The periode transf immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setPeriodeTransfImmo(DateTime $periodeTransfImmo = null) {
        $this->periodeTransfImmo = $periodeTransfImmo;
        return $this;
    }

    /**
     * Set the periodicite utiliser libelle.
     *
     * @param int $periodiciteUtiliserLibelle The periodicite utiliser libelle.
     * @return Dossier3 Returns this dossier3.
     */
    public function setPeriodiciteUtiliserLibelle($periodiciteUtiliserLibelle) {
        $this->periodiciteUtiliserLibelle = $periodiciteUtiliserLibelle;
        return $this;
    }

    /**
     * Set the prochain lot l c r.
     *
     * @param int $prochainLotLCR The prochain lot l c r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainLotLCR($prochainLotLCR) {
        $this->prochainLotLCR = $prochainLotLCR;
        return $this;
    }

    /**
     * Set the prochain lot lettre p.
     *
     * @param int $prochainLotLettreP The prochain lot lettre p.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainLotLettreP($prochainLotLettreP) {
        $this->prochainLotLettreP = $prochainLotLettreP;
        return $this;
    }

    /**
     * Set the prochain lot traite.
     *
     * @param int $prochainLotTraite The prochain lot traite.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainLotTraite($prochainLotTraite) {
        $this->prochainLotTraite = $prochainLotTraite;
        return $this;
    }

    /**
     * Set the prochain num c b.
     *
     * @param int $prochainNumCB The prochain num c b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainNumCB($prochainNumCB) {
        $this->prochainNumCB = $prochainNumCB;
        return $this;
    }

    /**
     * Set the prochain num immo.
     *
     * @param int $prochainNumImmo The prochain num immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainNumImmo($prochainNumImmo) {
        $this->prochainNumImmo = $prochainNumImmo;
        return $this;
    }

    /**
     * Set the prochain num l f.
     *
     * @param int $prochainNumLF The prochain num l f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainNumLF($prochainNumLF) {
        $this->prochainNumLF = $prochainNumLF;
        return $this;
    }

    /**
     * Set the prochain num p j.
     *
     * @param int $prochainNumPJ The prochain num p j.
     * @return Dossier3 Returns this dossier3.
     */
    public function setProchainNumPJ($prochainNumPJ) {
        $this->prochainNumPJ = $prochainNumPJ;
        return $this;
    }

    /**
     * Set the racine import mvt r b.
     *
     * @param string $racineImportMvtRB The racine import mvt r b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRacineImportMvtRB($racineImportMvtRB) {
        $this->racineImportMvtRB = $racineImportMvtRB;
        return $this;
    }

    /**
     * Set the rebut vaut cession.
     *
     * @param bool $rebutVautCession The rebut vaut cession.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRebutVautCession($rebutVautCession) {
        $this->rebutVautCession = $rebutVautCession;
        return $this;
    }

    /**
     * Set the ref remise l c r.
     *
     * @param int $refRemiseLCR The ref remise l c r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRefRemiseLCR($refRemiseLCR) {
        $this->refRemiseLCR = $refRemiseLCR;
        return $this;
    }

    /**
     * Set the ref virement frn.
     *
     * @param int $refVirementFrn The ref virement frn.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRefVirementFrn($refVirementFrn) {
        $this->refVirementFrn = $refVirementFrn;
        return $this;
    }

    /**
     * Set the regroup four cpt ech.
     *
     * @param bool $regroupFourCptEch The regroup four cpt ech.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRegroupFourCptEch($regroupFourCptEch) {
        $this->regroupFourCptEch = $regroupFourCptEch;
        return $this;
    }

    /**
     * Set the rep ass.
     *
     * @param bool $repAss The rep ass.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepAss($repAss) {
        $this->repAss = $repAss;
        return $this;
    }

    /**
     * Set the rep budget.
     *
     * @param bool $repBudget The rep budget.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepBudget($repBudget) {
        $this->repBudget = $repBudget;
        return $this;
    }

    /**
     * Set the rep c a r.
     *
     * @param bool $repCAR The rep c a r.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepCAR($repCAR) {
        $this->repCAR = $repCAR;
        return $this;
    }

    /**
     * Set the rep c b.
     *
     * @param bool $repCB The rep c b.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepCB($repCB) {
        $this->repCB = $repCB;
        return $this;
    }

    /**
     * Set the rep c l.
     *
     * @param bool $repCL The rep c l.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepCL($repCL) {
        $this->repCL = $repCL;
        return $this;
    }

    /**
     * Set the rep compta gen.
     *
     * @param bool $repComptaGen The rep compta gen.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepComptaGen($repComptaGen) {
        $this->repComptaGen = $repComptaGen;
        return $this;
    }

    /**
     * Set the rep dec tva.
     *
     * @param bool $repDecTva The rep dec tva.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepDecTva($repDecTva) {
        $this->repDecTva = $repDecTva;
        return $this;
    }

    /**
     * Set the rep dos rev.
     *
     * @param bool $repDosRev The rep dos rev.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepDosRev($repDosRev) {
        $this->repDosRev = $repDosRev;
        return $this;
    }

    /**
     * Set the rep e s.
     *
     * @param bool $repES The rep e s.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepES($repES) {
        $this->repES = $repES;
        return $this;
    }

    /**
     * Set the rep emprunts.
     *
     * @param bool $repEmprunts The rep emprunts.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepEmprunts($repEmprunts) {
        $this->repEmprunts = $repEmprunts;
        return $this;
    }

    /**
     * Set the rep immo.
     *
     * @param bool $repImmo The rep immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepImmo($repImmo) {
        $this->repImmo = $repImmo;
        return $this;
    }

    /**
     * Set the rep loc fi.
     *
     * @param bool $repLocFi The rep loc fi.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepLocFi($repLocFi) {
        $this->repLocFi = $repLocFi;
        return $this;
    }

    /**
     * Set the rep partielle.
     *
     * @param bool $repPartielle The rep partielle.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepPartielle($repPartielle) {
        $this->repPartielle = $repPartielle;
        return $this;
    }

    /**
     * Set the rep subv.
     *
     * @param bool $repSubv The rep subv.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepSubv($repSubv) {
        $this->repSubv = $repSubv;
        return $this;
    }

    /**
     * Set the rep v m p.
     *
     * @param bool $repVMP The rep v m p.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRepVMP($repVMP) {
        $this->repVMP = $repVMP;
        return $this;
    }

    /**
     * Set the revis solde en euro.
     *
     * @param bool $revisSoldeEnEuro The revis solde en euro.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRevisSoldeEnEuro($revisSoldeEnEuro) {
        $this->revisSoldeEnEuro = $revisSoldeEnEuro;
        return $this;
    }

    /**
     * Set the revis voir solde ex.
     *
     * @param bool $revisVoirSoldeEx The revis voir solde ex.
     * @return Dossier3 Returns this dossier3.
     */
    public function setRevisVoirSoldeEx($revisVoirSoldeEx) {
        $this->revisVoirSoldeEx = $revisVoirSoldeEx;
        return $this;
    }

    /**
     * Set the saisie caisse.
     *
     * @param bool $saisieCaisse The saisie caisse.
     * @return Dossier3 Returns this dossier3.
     */
    public function setSaisieCaisse($saisieCaisse) {
        $this->saisieCaisse = $saisieCaisse;
        return $this;
    }

    /**
     * Set the saisie num piece.
     *
     * @param string $saisieNumPiece The saisie num piece.
     * @return Dossier3 Returns this dossier3.
     */
    public function setSaisieNumPiece($saisieNumPiece) {
        $this->saisieNumPiece = $saisieNumPiece;
        return $this;
    }

    /**
     * Set the sauver periodicite.
     *
     * @param bool $sauverPeriodicite The sauver periodicite.
     * @return Dossier3 Returns this dossier3.
     */
    public function setSauverPeriodicite($sauverPeriodicite) {
        $this->sauverPeriodicite = $sauverPeriodicite;
        return $this;
    }

    /**
     * Set the suivi aux client.
     *
     * @param bool $suiviAuxClient The suivi aux client.
     * @return Dossier3 Returns this dossier3.
     */
    public function setSuiviAuxClient($suiviAuxClient) {
        $this->suiviAuxClient = $suiviAuxClient;
        return $this;
    }

    /**
     * Set the suivi aux frn.
     *
     * @param bool $suiviAuxFrn The suivi aux frn.
     * @return Dossier3 Returns this dossier3.
     */
    public function setSuiviAuxFrn($suiviAuxFrn) {
        $this->suiviAuxFrn = $suiviAuxFrn;
        return $this;
    }

    /**
     * Set the suivi devises.
     *
     * @param bool $suiviDevises The suivi devises.
     * @return Dossier3 Returns this dossier3.
     */
    public function setSuiviDevises($suiviDevises) {
        $this->suiviDevises = $suiviDevises;
        return $this;
    }

    /**
     * Set the transfert immo ok.
     *
     * @param bool $transfertImmoOk The transfert immo ok.
     * @return Dossier3 Returns this dossier3.
     */
    public function setTransfertImmoOk($transfertImmoOk) {
        $this->transfertImmoOk = $transfertImmoOk;
        return $this;
    }

    /**
     * Set the type p m a g client.
     *
     * @param int $typePMAGClient The type p m a g client.
     * @return Dossier3 Returns this dossier3.
     */
    public function setTypePMAGClient($typePMAGClient) {
        $this->typePMAGClient = $typePMAGClient;
        return $this;
    }

    /**
     * Set the type transfert immo.
     *
     * @param string $typeTransfertImmo The type transfert immo.
     * @return Dossier3 Returns this dossier3.
     */
    public function setTypeTransfertImmo($typeTransfertImmo) {
        $this->typeTransfertImmo = $typeTransfertImmo;
        return $this;
    }

    /**
     * Set the type transfert tiers.
     *
     * @param string $typeTransfertTiers The type transfert tiers.
     * @return Dossier3 Returns this dossier3.
     */
    public function setTypeTransfertTiers($typeTransfertTiers) {
        $this->typeTransfertTiers = $typeTransfertTiers;
        return $this;
    }

    /**
     * Set the type transfert tiers f.
     *
     * @param string $typeTransfertTiersF The type transfert tiers f.
     * @return Dossier3 Returns this dossier3.
     */
    public function setTypeTransfertTiersF($typeTransfertTiersF) {
        $this->typeTransfertTiersF = $typeTransfertTiersF;
        return $this;
    }
}
