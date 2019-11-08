<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Infos compl bul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class InfosComplBul {

    /**
     * Active sal min conv.
     *
     * @var bool
     */
    private $activeSalMinConv;

    /**
     * Active smic.
     *
     * @var bool
     */
    private $activeSmic;

    /**
     * Aen logement.
     *
     * @var bool
     */
    private $aenLogement;

    /**
     * Alleg particulier emp.
     *
     * @var string
     */
    private $allegParticulierEmp;

    /**
     * Annexe7 mutation.
     *
     * @var bool
     */
    private $annexe7Mutation;

    /**
     * Arbitrage auto.
     *
     * @var string
     */
    private $arbitrageAuto;

    /**
     * Assiette af.
     *
     * @var float
     */
    private $assietteAf;

    /**
     * Autre alleg emp.
     *
     * @var string
     */
    private $autreAllegEmp;

    /**
     * Brut al sans h sup.
     *
     * @var float
     */
    private $brutAlSansHSup;

    /**
     * Brut al sans h sup majo he.
     *
     * @var float
     */
    private $brutAlSansHSupMajoHe;

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Caisse cp.
     *
     * @var bool
     */
    private $caisseCp;

    /**
     * Categ population.
     *
     * @var string
     */
    private $categPopulation;

    /**
     * Categ salarie.
     *
     * @var string
     */
    private $categSalarie;

    /**
     * Cddcdi.
     *
     * @var bool
     */
    private $cddcdi;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Classification.
     *
     * @var string
     */
    private $classification;

    /**
     * Code caisse cp.
     *
     * @var string
     */
    private $codeCaisseCp;

    /**
     * Code caract.
     *
     * @var string
     */
    private $codeCaract;

    /**
     * Code categ sal pourcent abat.
     *
     * @var string
     */
    private $codeCategSalPourcentAbat;

    /**
     * Code class btp.
     *
     * @var string
     */
    private $codeClassBtp;

    /**
     * Code contrat trav.
     *
     * @var string
     */
    private $codeContratTrav;

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Code convention col.
     *
     * @var string
     */
    private $codeConventionCol;

    /**
     * Code emp remplace.
     *
     * @var string
     */
    private $codeEmpRemplace;

    /**
     * Code exo trav.
     *
     * @var string
     */
    private $codeExoTrav;

    /**
     * Code intit contrat trav.
     *
     * @var string
     */
    private $codeIntitContratTrav;

    /**
     * Code metier btp.
     *
     * @var string
     */
    private $codeMetierBtp;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code regime at.
     *
     * @var string
     */
    private $codeRegimeAt;

    /**
     * Code regime base obl.
     *
     * @var string
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime vieillesse.
     *
     * @var string
     */
    private $codeRegimeVieillesse;

    /**
     * Code retraite complementaire.
     *
     * @var string
     */
    private $codeRetraiteComplementaire;

    /**
     * Code situ admin.
     *
     * @var string
     */
    private $codeSituAdmin;

    /**
     * Code statut categ.
     *
     * @var string
     */
    private $codeStatutCateg;

    /**
     * Code statut categ retraite.
     *
     * @var string
     */
    private $codeStatutCategRetraite;

    /**
     * Code statut pro.
     *
     * @var string
     */
    private $codeStatutPro;

    /**
     * Code tuteur.
     *
     * @var string
     */
    private $codeTuteur;

    /**
     * Code unite temps travail.
     *
     * @var string
     */
    private $codeUniteTempsTravail;

    /**
     * Coeff convention.
     *
     * @var string
     */
    private $coeffConvention;

    /**
     * Coeff fillon moins20.
     *
     * @var bool
     */
    private $coeffFillonMoins20;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Complement pcs.
     *
     * @var string
     */
    private $complementPcs;

    /**
     * Contrat cne.
     *
     * @var bool
     */
    private $contratCne;

    /**
     * Cum base prevoyance comp.
     *
     * @var float
     */
    private $cumBasePrevoyanceComp;

    /**
     * Cum base retraite obli.
     *
     * @var float
     */
    private $cumBaseRetraiteObli;

    /**
     * Cum base retraite supp.
     *
     * @var float
     */
    private $cumBaseRetraiteSupp;

    /**
     * Cum mt forfait social20.
     *
     * @var float
     */
    private $cumMtForfaitSocial20;

    /**
     * Cum mt forfait social8.
     *
     * @var float
     */
    private $cumMtForfaitSocial8;

    /**
     * Cum pp fisc prev.
     *
     * @var float
     */
    private $cumPpFiscPrev;

    /**
     * Cum pp fisc ret.
     *
     * @var float
     */
    private $cumPpFiscRet;

    /**
     * Cum ps fisc prev.
     *
     * @var float
     */
    private $cumPsFiscPrev;

    /**
     * Cum ps fisc ret.
     *
     * @var float
     */
    private $cumPsFiscRet;

    /**
     * Cum smic m.
     *
     * @var float
     */
    private $cumSmicM;

    /**
     * Cum tr d1 caisse1.
     *
     * @var float
     */
    private $cumTrD1Caisse1;

    /**
     * Cum tr d1caisse2.
     *
     * @var float
     */
    private $cumTrD1caisse2;

    /**
     * Cum tr d1caisse3.
     *
     * @var float
     */
    private $cumTrD1caisse3;

    /**
     * Cum tr d caisse1.
     *
     * @var float
     */
    private $cumTrDCaisse1;

    /**
     * Cum tr dcaisse2.
     *
     * @var float
     */
    private $cumTrDcaisse2;

    /**
     * Cum tr dcaisse3.
     *
     * @var float
     */
    private $cumTrDcaisse3;

    /**
     * Cum tranche d.
     *
     * @var float
     */
    private $cumTrancheD;

    /**
     * Cum tranche d1.
     *
     * @var float
     */
    private $cumTrancheD1;

    /**
     * Date ancien branche.
     *
     * @var DateTime|null
     */
    private $dateAncienBranche;

    /**
     * Date ancien college.
     *
     * @var DateTime|null
     */
    private $dateAncienCollege;

    /**
     * Date ancien poste.
     *
     * @var DateTime|null
     */
    private $dateAncienPoste;

    /**
     * Date debut chom cdd.
     *
     * @var DateTime|null
     */
    private $dateDebutChomCdd;

    /**
     * Date debut contrat.
     *
     * @var DateTime|null
     */
    private $dateDebutContrat;

    /**
     * Date envoi mail.
     *
     * @var DateTime|null
     */
    private $dateEnvoiMail;

    /**
     * Date fin chom cdd.
     *
     * @var DateTime|null
     */
    private $dateFinChomCdd;

    /**
     * Date fin contrat.
     *
     * @var DateTime|null
     */
    private $dateFinContrat;

    /**
     * Date fin prev.
     *
     * @var DateTime|null
     */
    private $dateFinPrev;

    /**
     * Date rachat.
     *
     * @var DateTime|null
     */
    private $dateRachat;

    /**
     * Date renouv cdd.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd;

    /**
     * Date renouv cdd2.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd2;

    /**
     * Detache expatrie.
     *
     * @var string
     */
    private $detacheExpatrie;

    /**
     * Echelon.
     *
     * @var string
     */
    private $echelon;

    /**
     * Echelon convention col.
     *
     * @var string
     */
    private $echelonConventionCol;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Etab lieu travail.
     *
     * @var string
     */
    private $etabLieuTravail;

    /**
     * Exclure chom cdd.
     *
     * @var bool
     */
    private $exclureChomCdd;

    /**
     * Exclure cice.
     *
     * @var bool
     */
    private $exclureCice;

    /**
     * Exclure cospar.
     *
     * @var bool
     */
    private $exclureCospar;

    /**
     * Exclure dsn.
     *
     * @var bool
     */
    private $exclureDsn;

    /**
     * Exclure loi tepa.
     *
     * @var bool
     */
    private $exclureLoiTepa;

    /**
     * Exclure loi tepa part p.
     *
     * @var bool
     */
    private $exclureLoiTepaPartP;

    /**
     * Exclure loi tepa part s.
     *
     * @var bool
     */
    private $exclureLoiTepaPartS;

    /**
     * Exclure qgc.
     *
     * @var bool
     */
    private $exclureQgc;

    /**
     * Exo accre17.
     *
     * @var bool
     */
    private $exoAccre17;

    /**
     * Exo occasionnel msa.
     *
     * @var bool
     */
    private $exoOccasionnelMsa;

    /**
     * Exo professionnalisation.
     *
     * @var bool
     */
    private $exoProfessionnalisation;

    /**
     * Exo specif.
     *
     * @var bool
     */
    private $exoSpecif;

    /**
     * Forfait heure.
     *
     * @var bool
     */
    private $forfaitHeure;

    /**
     * Fraction etab.
     *
     * @var string
     */
    private $fractionEtab;

    /**
     * Gestion cp.
     *
     * @var bool
     */
    private $gestionCp;

    /**
     * Gestion hstepa.
     *
     * @var string
     */
    private $gestionHstepa;

    /**
     * Gestion mail bulletin.
     *
     * @var bool
     */
    private $gestionMailBulletin;

    /**
     * Gestion rtt.
     *
     * @var bool
     */
    private $gestionRtt;

    /**
     * Grille anc1.
     *
     * @var string
     */
    private $grilleAnc1;

    /**
     * Grille anc2.
     *
     * @var string
     */
    private $grilleAnc2;

    /**
     * Grille anc3.
     *
     * @var string
     */
    private $grilleAnc3;

    /**
     * Id lieu travail.
     *
     * @var string
     */
    private $idLieuTravail;

    /**
     * Indem cp msa.
     *
     * @var bool
     */
    private $indemCpMsa;

    /**
     * Indice.
     *
     * @var string
     */
    private $indice;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Interim indem cp fillon.
     *
     * @var bool
     */
    private $interimIndemCpFillon;

    /**
     * Libelle reintegration.
     *
     * @var string
     */
    private $libelleReintegration;

    /**
     * Lien reintegration.
     *
     * @var string
     */
    private $lienReintegration;

    /**
     * Maintien intervient cp.
     *
     * @var bool
     */
    private $maintienIntervientCp;

    /**
     * Maintien salaire.
     *
     * @var bool
     */
    private $maintienSalaire;

    /**
     * Montant avantage.
     *
     * @var float
     */
    private $montantAvantage;

    /**
     * Motif cdd.
     *
     * @var string
     */
    private $motifCdd;

    /**
     * Motif exclusion dsn.
     *
     * @var string
     */
    private $motifExclusionDsn;

    /**
     * Mt abs act part.
     *
     * @var float
     */
    private $mtAbsActPart;

    /**
     * Mt cotisation prev.
     *
     * @var float
     */
    private $mtCotisationPrev;

    /**
     * Mt cotisation retraite.
     *
     * @var float
     */
    private $mtCotisationRetraite;

    /**
     * Mt crds100.
     *
     * @var float
     */
    private $mtCrds100;

    /**
     * Mt csg100.
     *
     * @var float
     */
    private $mtCsg100;

    /**
     * Mt fisc frais sante.
     *
     * @var float
     */
    private $mtFiscFraisSante;

    /**
     * Mt fisc prev.
     *
     * @var float
     */
    private $mtFiscPrev;

    /**
     * Mt fisc retraite.
     *
     * @var float
     */
    private $mtFiscRetraite;

    /**
     * Mt forfait social20.
     *
     * @var float
     */
    private $mtForfaitSocial20;

    /**
     * Mt forfait social8.
     *
     * @var float
     */
    private $mtForfaitSocial8;

    /**
     * Mt iap.
     *
     * @var float
     */
    private $mtIap;

    /**
     * Mt journee cpn.
     *
     * @var float
     */
    private $mtJourneeCpn;

    /**
     * Mt journee cpn1.
     *
     * @var float
     */
    private $mtJourneeCpn1;

    /**
     * Multi employeur.
     *
     * @var bool
     */
    private $multiEmployeur;

    /**
     * Nature analytique.
     *
     * @var string
     */
    private $natureAnalytique;

    /**
     * Nb30 renouv cdd.
     *
     * @var int
     */
    private $nb30RenouvCdd;

    /**
     * Nb h act part.
     *
     * @var float
     */
    private $nbHActPart;

    /**
     * Nb h act part indem.
     *
     * @var float
     */
    private $nbHActPartIndem;

    /**
     * Nb h bonifie.
     *
     * @var float
     */
    private $nbHBonifie;

    /**
     * Nb h contingent.
     *
     * @var float
     */
    private $nbHContingent;

    /**
     * Nb h contract.
     *
     * @var float
     */
    private $nbHContract;

    /**
     * Nb heure mois.
     *
     * @var float
     */
    private $nbHeureMois;

    /**
     * Nb jour annee.
     *
     * @var float
     */
    private $nbJourAnnee;

    /**
     * Nb jour cp acquis.
     *
     * @var float
     */
    private $nbJourCpAcquis;

    /**
     * Nb jour cp sup.
     *
     * @var float
     */
    private $nbJourCpSup;

    /**
     * Nb piece logement.
     *
     * @var string
     */
    private $nbPieceLogement;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var bool
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Ne pas publier web.
     *
     * @var bool
     */
    private $nePasPublierWeb;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Niveau convention col.
     *
     * @var string
     */
    private $niveauConventionCol;

    /**
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string
     */
    private $nomNaissance;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num evenement.
     *
     * @var int
     */
    private $numEvenement;

    /**
     * Num objet.
     *
     * @var string
     */
    private $numObjet;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero abattement contrat msa.
     *
     * @var int
     */
    private $numeroAbattementContratMsa;

    /**
     * Numero contrat.
     *
     * @var int
     */
    private $numeroContrat;

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Part patron prev forfait social8.
     *
     * @var float
     */
    private $partPatronPrevForfaitSocial8;

    /**
     * Pas de reintegration.
     *
     * @var bool
     */
    private $pasDeReintegration;

    /**
     * Pas gestion dif.
     *
     * @var bool
     */
    private $pasGestionDif;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Position.
     *
     * @var string
     */
    private $position;

    /**
     * Position convention col.
     *
     * @var string
     */
    private $positionConventionCol;

    /**
     * Pourcent exo.
     *
     * @var float
     */
    private $pourcentExo;

    /**
     * Prem date entree.
     *
     * @var DateTime|null
     */
    private $premDateEntree;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Pss1 force.
     *
     * @var bool
     */
    private $pss1Force;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Reduction fillon.
     *
     * @var bool
     */
    private $reductionFillon;

    /**
     * Regle calcul.
     *
     * @var string
     */
    private $regleCalcul;

    /**
     * Remun part fillon.
     *
     * @var bool
     */
    private $remunPartFillon;

    /**
     * Rtt1.
     *
     * @var float
     */
    private $rtt1;

    /**
     * Rtt10.
     *
     * @var float
     */
    private $rtt10;

    /**
     * Rtt11.
     *
     * @var float
     */
    private $rtt11;

    /**
     * Rtt12.
     *
     * @var float
     */
    private $rtt12;

    /**
     * Rtt2.
     *
     * @var float
     */
    private $rtt2;

    /**
     * Rtt3.
     *
     * @var float
     */
    private $rtt3;

    /**
     * Rtt4.
     *
     * @var float
     */
    private $rtt4;

    /**
     * Rtt5.
     *
     * @var float
     */
    private $rtt5;

    /**
     * Rtt6.
     *
     * @var float
     */
    private $rtt6;

    /**
     * Rtt7.
     *
     * @var float
     */
    private $rtt7;

    /**
     * Rtt8.
     *
     * @var float
     */
    private $rtt8;

    /**
     * Rtt9.
     *
     * @var float
     */
    private $rtt9;

    /**
     * Salaire base.
     *
     * @var float
     */
    private $salaireBase;

    /**
     * Salaire reference.
     *
     * @var float
     */
    private $salaireReference;

    /**
     * Salaire retabli dsn.
     *
     * @var float
     */
    private $salaireRetabliDsn;

    /**
     * Salaire retabli dsn force.
     *
     * @var bool
     */
    private $salaireRetabliDsnForce;

    /**
     * Sans contrat.
     *
     * @var int
     */
    private $sansContrat;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Setp fillon.
     *
     * @var float
     */
    private $setpFillon;

    /**
     * Signe af.
     *
     * @var string
     */
    private $signeAf;

    /**
     * Siret lieu trav.
     *
     * @var string
     */
    private $siretLieuTrav;

    /**
     * Smic m fillon sans hs.
     *
     * @var float
     */
    private $smicMFillonSansHs;

    /**
     * Smic maf.
     *
     * @var float
     */
    private $smicMaf;

    /**
     * Smic mcice.
     *
     * @var float
     */
    private $smicMcice;

    /**
     * Subrogation.
     *
     * @var bool
     */
    private $subrogation;

    /**
     * Tds59.
     *
     * @var string
     */
    private $tds59;

    /**
     * Tds76.
     *
     * @var string
     */
    private $tds76;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string
     */
    private $tel2;

    /**
     * Tepa moins20.
     *
     * @var bool
     */
    private $tepaMoins20;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Tot cot urssaf.
     *
     * @var float
     */
    private $totCotUrssaf;

    /**
     * Tr d1 caisse1.
     *
     * @var float
     */
    private $trD1Caisse1;

    /**
     * Tr d1caisse2.
     *
     * @var float
     */
    private $trD1caisse2;

    /**
     * Tr d1caisse3.
     *
     * @var float
     */
    private $trD1caisse3;

    /**
     * Tr d caisse1.
     *
     * @var float
     */
    private $trDCaisse1;

    /**
     * Tr dcaisse2.
     *
     * @var float
     */
    private $trDcaisse2;

    /**
     * Tr dcaisse3.
     *
     * @var float
     */
    private $trDcaisse3;

    /**
     * Tranche d.
     *
     * @var float
     */
    private $trancheD;

    /**
     * Tranche d1.
     *
     * @var float
     */
    private $trancheD1;

    /**
     * Type chom cdd.
     *
     * @var string
     */
    private $typeChomCdd;

    /**
     * Type contrat.
     *
     * @var string
     */
    private $typeContrat;

    /**
     * Type exo lodeom.
     *
     * @var string
     */
    private $typeExoLodeom;

    /**
     * Type he fillon.
     *
     * @var string
     */
    private $typeHeFillon;

    /**
     * Type maintien salaire.
     *
     * @var string
     */
    private $typeMaintienSalaire;

    /**
     * Type reduction fillon.
     *
     * @var string
     */
    private $typeReductionFillon;

    /**
     * Type reduction mayotte.
     *
     * @var string
     */
    private $typeReductionMayotte;

    /**
     * Type saisie ab cp.
     *
     * @var string
     */
    private $typeSaisieAbCp;

    /**
     * Type saisie chom intemp.
     *
     * @var string
     */
    private $typeSaisieChomIntemp;

    /**
     * Vrp multicarte.
     *
     * @var bool
     */
    private $vrpMulticarte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the active sal min conv.
     *
     * @return bool Returns the active sal min conv.
     */
    public function getActiveSalMinConv() {
        return $this->activeSalMinConv;
    }

    /**
     * Get the active smic.
     *
     * @return bool Returns the active smic.
     */
    public function getActiveSmic() {
        return $this->activeSmic;
    }

    /**
     * Get the aen logement.
     *
     * @return bool Returns the aen logement.
     */
    public function getAenLogement() {
        return $this->aenLogement;
    }

    /**
     * Get the alleg particulier emp.
     *
     * @return string Returns the alleg particulier emp.
     */
    public function getAllegParticulierEmp() {
        return $this->allegParticulierEmp;
    }

    /**
     * Get the annexe7 mutation.
     *
     * @return bool Returns the annexe7 mutation.
     */
    public function getAnnexe7Mutation() {
        return $this->annexe7Mutation;
    }

    /**
     * Get the arbitrage auto.
     *
     * @return string Returns the arbitrage auto.
     */
    public function getArbitrageAuto() {
        return $this->arbitrageAuto;
    }

    /**
     * Get the assiette af.
     *
     * @return float Returns the assiette af.
     */
    public function getAssietteAf() {
        return $this->assietteAf;
    }

    /**
     * Get the autre alleg emp.
     *
     * @return string Returns the autre alleg emp.
     */
    public function getAutreAllegEmp() {
        return $this->autreAllegEmp;
    }

    /**
     * Get the brut al sans h sup.
     *
     * @return float Returns the brut al sans h sup.
     */
    public function getBrutAlSansHSup() {
        return $this->brutAlSansHSup;
    }

    /**
     * Get the brut al sans h sup majo he.
     *
     * @return float Returns the brut al sans h sup majo he.
     */
    public function getBrutAlSansHSupMajoHe() {
        return $this->brutAlSansHSupMajoHe;
    }

    /**
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the caisse cp.
     *
     * @return bool Returns the caisse cp.
     */
    public function getCaisseCp() {
        return $this->caisseCp;
    }

    /**
     * Get the categ population.
     *
     * @return string Returns the categ population.
     */
    public function getCategPopulation() {
        return $this->categPopulation;
    }

    /**
     * Get the categ salarie.
     *
     * @return string Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Get the cddcdi.
     *
     * @return bool Returns the cddcdi.
     */
    public function getCddcdi() {
        return $this->cddcdi;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
    }

    /**
     * Get the classification.
     *
     * @return string Returns the classification.
     */
    public function getClassification() {
        return $this->classification;
    }

    /**
     * Get the code caisse cp.
     *
     * @return string Returns the code caisse cp.
     */
    public function getCodeCaisseCp() {
        return $this->codeCaisseCp;
    }

    /**
     * Get the code caract.
     *
     * @return string Returns the code caract.
     */
    public function getCodeCaract() {
        return $this->codeCaract;
    }

    /**
     * Get the code categ sal pourcent abat.
     *
     * @return string Returns the code categ sal pourcent abat.
     */
    public function getCodeCategSalPourcentAbat() {
        return $this->codeCategSalPourcentAbat;
    }

    /**
     * Get the code class btp.
     *
     * @return string Returns the code class btp.
     */
    public function getCodeClassBtp() {
        return $this->codeClassBtp;
    }

    /**
     * Get the code contrat trav.
     *
     * @return string Returns the code contrat trav.
     */
    public function getCodeContratTrav() {
        return $this->codeContratTrav;
    }

    /**
     * Get the code convention.
     *
     * @return string Returns the code convention.
     */
    public function getCodeConvention() {
        return $this->codeConvention;
    }

    /**
     * Get the code convention col.
     *
     * @return string Returns the code convention col.
     */
    public function getCodeConventionCol() {
        return $this->codeConventionCol;
    }

    /**
     * Get the code emp remplace.
     *
     * @return string Returns the code emp remplace.
     */
    public function getCodeEmpRemplace() {
        return $this->codeEmpRemplace;
    }

    /**
     * Get the code exo trav.
     *
     * @return string Returns the code exo trav.
     */
    public function getCodeExoTrav() {
        return $this->codeExoTrav;
    }

    /**
     * Get the code intit contrat trav.
     *
     * @return string Returns the code intit contrat trav.
     */
    public function getCodeIntitContratTrav() {
        return $this->codeIntitContratTrav;
    }

    /**
     * Get the code metier btp.
     *
     * @return string Returns the code metier btp.
     */
    public function getCodeMetierBtp() {
        return $this->codeMetierBtp;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string Returns the code officiel commune.
     */
    public function getCodeOfficielCommune() {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the code regime at.
     *
     * @return string Returns the code regime at.
     */
    public function getCodeRegimeAt() {
        return $this->codeRegimeAt;
    }

    /**
     * Get the code regime base obl.
     *
     * @return string Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl() {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime vieillesse.
     *
     * @return string Returns the code regime vieillesse.
     */
    public function getCodeRegimeVieillesse() {
        return $this->codeRegimeVieillesse;
    }

    /**
     * Get the code retraite complementaire.
     *
     * @return string Returns the code retraite complementaire.
     */
    public function getCodeRetraiteComplementaire() {
        return $this->codeRetraiteComplementaire;
    }

    /**
     * Get the code situ admin.
     *
     * @return string Returns the code situ admin.
     */
    public function getCodeSituAdmin() {
        return $this->codeSituAdmin;
    }

    /**
     * Get the code statut categ.
     *
     * @return string Returns the code statut categ.
     */
    public function getCodeStatutCateg() {
        return $this->codeStatutCateg;
    }

    /**
     * Get the code statut categ retraite.
     *
     * @return string Returns the code statut categ retraite.
     */
    public function getCodeStatutCategRetraite() {
        return $this->codeStatutCategRetraite;
    }

    /**
     * Get the code statut pro.
     *
     * @return string Returns the code statut pro.
     */
    public function getCodeStatutPro() {
        return $this->codeStatutPro;
    }

    /**
     * Get the code tuteur.
     *
     * @return string Returns the code tuteur.
     */
    public function getCodeTuteur() {
        return $this->codeTuteur;
    }

    /**
     * Get the code unite temps travail.
     *
     * @return string Returns the code unite temps travail.
     */
    public function getCodeUniteTempsTravail() {
        return $this->codeUniteTempsTravail;
    }

    /**
     * Get the coeff convention.
     *
     * @return string Returns the coeff convention.
     */
    public function getCoeffConvention() {
        return $this->coeffConvention;
    }

    /**
     * Get the coeff fillon moins20.
     *
     * @return bool Returns the coeff fillon moins20.
     */
    public function getCoeffFillonMoins20() {
        return $this->coeffFillonMoins20;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the complement pcs.
     *
     * @return string Returns the complement pcs.
     */
    public function getComplementPcs() {
        return $this->complementPcs;
    }

    /**
     * Get the contrat cne.
     *
     * @return bool Returns the contrat cne.
     */
    public function getContratCne() {
        return $this->contratCne;
    }

    /**
     * Get the cum base prevoyance comp.
     *
     * @return float Returns the cum base prevoyance comp.
     */
    public function getCumBasePrevoyanceComp() {
        return $this->cumBasePrevoyanceComp;
    }

    /**
     * Get the cum base retraite obli.
     *
     * @return float Returns the cum base retraite obli.
     */
    public function getCumBaseRetraiteObli() {
        return $this->cumBaseRetraiteObli;
    }

    /**
     * Get the cum base retraite supp.
     *
     * @return float Returns the cum base retraite supp.
     */
    public function getCumBaseRetraiteSupp() {
        return $this->cumBaseRetraiteSupp;
    }

    /**
     * Get the cum mt forfait social20.
     *
     * @return float Returns the cum mt forfait social20.
     */
    public function getCumMtForfaitSocial20() {
        return $this->cumMtForfaitSocial20;
    }

    /**
     * Get the cum mt forfait social8.
     *
     * @return float Returns the cum mt forfait social8.
     */
    public function getCumMtForfaitSocial8() {
        return $this->cumMtForfaitSocial8;
    }

    /**
     * Get the cum pp fisc prev.
     *
     * @return float Returns the cum pp fisc prev.
     */
    public function getCumPpFiscPrev() {
        return $this->cumPpFiscPrev;
    }

    /**
     * Get the cum pp fisc ret.
     *
     * @return float Returns the cum pp fisc ret.
     */
    public function getCumPpFiscRet() {
        return $this->cumPpFiscRet;
    }

    /**
     * Get the cum ps fisc prev.
     *
     * @return float Returns the cum ps fisc prev.
     */
    public function getCumPsFiscPrev() {
        return $this->cumPsFiscPrev;
    }

    /**
     * Get the cum ps fisc ret.
     *
     * @return float Returns the cum ps fisc ret.
     */
    public function getCumPsFiscRet() {
        return $this->cumPsFiscRet;
    }

    /**
     * Get the cum smic m.
     *
     * @return float Returns the cum smic m.
     */
    public function getCumSmicM() {
        return $this->cumSmicM;
    }

    /**
     * Get the cum tr d1 caisse1.
     *
     * @return float Returns the cum tr d1 caisse1.
     */
    public function getCumTrD1Caisse1() {
        return $this->cumTrD1Caisse1;
    }

    /**
     * Get the cum tr d1caisse2.
     *
     * @return float Returns the cum tr d1caisse2.
     */
    public function getCumTrD1caisse2() {
        return $this->cumTrD1caisse2;
    }

    /**
     * Get the cum tr d1caisse3.
     *
     * @return float Returns the cum tr d1caisse3.
     */
    public function getCumTrD1caisse3() {
        return $this->cumTrD1caisse3;
    }

    /**
     * Get the cum tr d caisse1.
     *
     * @return float Returns the cum tr d caisse1.
     */
    public function getCumTrDCaisse1() {
        return $this->cumTrDCaisse1;
    }

    /**
     * Get the cum tr dcaisse2.
     *
     * @return float Returns the cum tr dcaisse2.
     */
    public function getCumTrDcaisse2() {
        return $this->cumTrDcaisse2;
    }

    /**
     * Get the cum tr dcaisse3.
     *
     * @return float Returns the cum tr dcaisse3.
     */
    public function getCumTrDcaisse3() {
        return $this->cumTrDcaisse3;
    }

    /**
     * Get the cum tranche d.
     *
     * @return float Returns the cum tranche d.
     */
    public function getCumTrancheD() {
        return $this->cumTrancheD;
    }

    /**
     * Get the cum tranche d1.
     *
     * @return float Returns the cum tranche d1.
     */
    public function getCumTrancheD1() {
        return $this->cumTrancheD1;
    }

    /**
     * Get the date ancien branche.
     *
     * @return DateTime|null Returns the date ancien branche.
     */
    public function getDateAncienBranche() {
        return $this->dateAncienBranche;
    }

    /**
     * Get the date ancien college.
     *
     * @return DateTime|null Returns the date ancien college.
     */
    public function getDateAncienCollege() {
        return $this->dateAncienCollege;
    }

    /**
     * Get the date ancien poste.
     *
     * @return DateTime|null Returns the date ancien poste.
     */
    public function getDateAncienPoste() {
        return $this->dateAncienPoste;
    }

    /**
     * Get the date debut chom cdd.
     *
     * @return DateTime|null Returns the date debut chom cdd.
     */
    public function getDateDebutChomCdd() {
        return $this->dateDebutChomCdd;
    }

    /**
     * Get the date debut contrat.
     *
     * @return DateTime|null Returns the date debut contrat.
     */
    public function getDateDebutContrat() {
        return $this->dateDebutContrat;
    }

    /**
     * Get the date envoi mail.
     *
     * @return DateTime|null Returns the date envoi mail.
     */
    public function getDateEnvoiMail() {
        return $this->dateEnvoiMail;
    }

    /**
     * Get the date fin chom cdd.
     *
     * @return DateTime|null Returns the date fin chom cdd.
     */
    public function getDateFinChomCdd() {
        return $this->dateFinChomCdd;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime|null Returns the date fin contrat.
     */
    public function getDateFinContrat() {
        return $this->dateFinContrat;
    }

    /**
     * Get the date fin prev.
     *
     * @return DateTime|null Returns the date fin prev.
     */
    public function getDateFinPrev() {
        return $this->dateFinPrev;
    }

    /**
     * Get the date rachat.
     *
     * @return DateTime|null Returns the date rachat.
     */
    public function getDateRachat() {
        return $this->dateRachat;
    }

    /**
     * Get the date renouv cdd.
     *
     * @return DateTime|null Returns the date renouv cdd.
     */
    public function getDateRenouvCdd() {
        return $this->dateRenouvCdd;
    }

    /**
     * Get the date renouv cdd2.
     *
     * @return DateTime|null Returns the date renouv cdd2.
     */
    public function getDateRenouvCdd2() {
        return $this->dateRenouvCdd2;
    }

    /**
     * Get the detache expatrie.
     *
     * @return string Returns the detache expatrie.
     */
    public function getDetacheExpatrie() {
        return $this->detacheExpatrie;
    }

    /**
     * Get the echelon.
     *
     * @return string Returns the echelon.
     */
    public function getEchelon() {
        return $this->echelon;
    }

    /**
     * Get the echelon convention col.
     *
     * @return string Returns the echelon convention col.
     */
    public function getEchelonConventionCol() {
        return $this->echelonConventionCol;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the emploi.
     *
     * @return string Returns the emploi.
     */
    public function getEmploi() {
        return $this->emploi;
    }

    /**
     * Get the etab lieu travail.
     *
     * @return string Returns the etab lieu travail.
     */
    public function getEtabLieuTravail() {
        return $this->etabLieuTravail;
    }

    /**
     * Get the exclure chom cdd.
     *
     * @return bool Returns the exclure chom cdd.
     */
    public function getExclureChomCdd() {
        return $this->exclureChomCdd;
    }

    /**
     * Get the exclure cice.
     *
     * @return bool Returns the exclure cice.
     */
    public function getExclureCice() {
        return $this->exclureCice;
    }

    /**
     * Get the exclure cospar.
     *
     * @return bool Returns the exclure cospar.
     */
    public function getExclureCospar() {
        return $this->exclureCospar;
    }

    /**
     * Get the exclure dsn.
     *
     * @return bool Returns the exclure dsn.
     */
    public function getExclureDsn() {
        return $this->exclureDsn;
    }

    /**
     * Get the exclure loi tepa.
     *
     * @return bool Returns the exclure loi tepa.
     */
    public function getExclureLoiTepa() {
        return $this->exclureLoiTepa;
    }

    /**
     * Get the exclure loi tepa part p.
     *
     * @return bool Returns the exclure loi tepa part p.
     */
    public function getExclureLoiTepaPartP() {
        return $this->exclureLoiTepaPartP;
    }

    /**
     * Get the exclure loi tepa part s.
     *
     * @return bool Returns the exclure loi tepa part s.
     */
    public function getExclureLoiTepaPartS() {
        return $this->exclureLoiTepaPartS;
    }

    /**
     * Get the exclure qgc.
     *
     * @return bool Returns the exclure qgc.
     */
    public function getExclureQgc() {
        return $this->exclureQgc;
    }

    /**
     * Get the exo accre17.
     *
     * @return bool Returns the exo accre17.
     */
    public function getExoAccre17() {
        return $this->exoAccre17;
    }

    /**
     * Get the exo occasionnel msa.
     *
     * @return bool Returns the exo occasionnel msa.
     */
    public function getExoOccasionnelMsa() {
        return $this->exoOccasionnelMsa;
    }

    /**
     * Get the exo professionnalisation.
     *
     * @return bool Returns the exo professionnalisation.
     */
    public function getExoProfessionnalisation() {
        return $this->exoProfessionnalisation;
    }

    /**
     * Get the exo specif.
     *
     * @return bool Returns the exo specif.
     */
    public function getExoSpecif() {
        return $this->exoSpecif;
    }

    /**
     * Get the forfait heure.
     *
     * @return bool Returns the forfait heure.
     */
    public function getForfaitHeure() {
        return $this->forfaitHeure;
    }

    /**
     * Get the fraction etab.
     *
     * @return string Returns the fraction etab.
     */
    public function getFractionEtab() {
        return $this->fractionEtab;
    }

    /**
     * Get the gestion cp.
     *
     * @return bool Returns the gestion cp.
     */
    public function getGestionCp() {
        return $this->gestionCp;
    }

    /**
     * Get the gestion hstepa.
     *
     * @return string Returns the gestion hstepa.
     */
    public function getGestionHstepa() {
        return $this->gestionHstepa;
    }

    /**
     * Get the gestion mail bulletin.
     *
     * @return bool Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin() {
        return $this->gestionMailBulletin;
    }

    /**
     * Get the gestion rtt.
     *
     * @return bool Returns the gestion rtt.
     */
    public function getGestionRtt() {
        return $this->gestionRtt;
    }

    /**
     * Get the grille anc1.
     *
     * @return string Returns the grille anc1.
     */
    public function getGrilleAnc1() {
        return $this->grilleAnc1;
    }

    /**
     * Get the grille anc2.
     *
     * @return string Returns the grille anc2.
     */
    public function getGrilleAnc2() {
        return $this->grilleAnc2;
    }

    /**
     * Get the grille anc3.
     *
     * @return string Returns the grille anc3.
     */
    public function getGrilleAnc3() {
        return $this->grilleAnc3;
    }

    /**
     * Get the id lieu travail.
     *
     * @return string Returns the id lieu travail.
     */
    public function getIdLieuTravail() {
        return $this->idLieuTravail;
    }

    /**
     * Get the indem cp msa.
     *
     * @return bool Returns the indem cp msa.
     */
    public function getIndemCpMsa() {
        return $this->indemCpMsa;
    }

    /**
     * Get the indice.
     *
     * @return string Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the indice categ.
     *
     * @return int Returns the indice categ.
     */
    public function getIndiceCateg() {
        return $this->indiceCateg;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the interim indem cp fillon.
     *
     * @return bool Returns the interim indem cp fillon.
     */
    public function getInterimIndemCpFillon() {
        return $this->interimIndemCpFillon;
    }

    /**
     * Get the libelle reintegration.
     *
     * @return string Returns the libelle reintegration.
     */
    public function getLibelleReintegration() {
        return $this->libelleReintegration;
    }

    /**
     * Get the lien reintegration.
     *
     * @return string Returns the lien reintegration.
     */
    public function getLienReintegration() {
        return $this->lienReintegration;
    }

    /**
     * Get the maintien intervient cp.
     *
     * @return bool Returns the maintien intervient cp.
     */
    public function getMaintienIntervientCp() {
        return $this->maintienIntervientCp;
    }

    /**
     * Get the maintien salaire.
     *
     * @return bool Returns the maintien salaire.
     */
    public function getMaintienSalaire() {
        return $this->maintienSalaire;
    }

    /**
     * Get the montant avantage.
     *
     * @return float Returns the montant avantage.
     */
    public function getMontantAvantage() {
        return $this->montantAvantage;
    }

    /**
     * Get the motif cdd.
     *
     * @return string Returns the motif cdd.
     */
    public function getMotifCdd() {
        return $this->motifCdd;
    }

    /**
     * Get the motif exclusion dsn.
     *
     * @return string Returns the motif exclusion dsn.
     */
    public function getMotifExclusionDsn() {
        return $this->motifExclusionDsn;
    }

    /**
     * Get the mt abs act part.
     *
     * @return float Returns the mt abs act part.
     */
    public function getMtAbsActPart() {
        return $this->mtAbsActPart;
    }

    /**
     * Get the mt cotisation prev.
     *
     * @return float Returns the mt cotisation prev.
     */
    public function getMtCotisationPrev() {
        return $this->mtCotisationPrev;
    }

    /**
     * Get the mt cotisation retraite.
     *
     * @return float Returns the mt cotisation retraite.
     */
    public function getMtCotisationRetraite() {
        return $this->mtCotisationRetraite;
    }

    /**
     * Get the mt crds100.
     *
     * @return float Returns the mt crds100.
     */
    public function getMtCrds100() {
        return $this->mtCrds100;
    }

    /**
     * Get the mt csg100.
     *
     * @return float Returns the mt csg100.
     */
    public function getMtCsg100() {
        return $this->mtCsg100;
    }

    /**
     * Get the mt fisc frais sante.
     *
     * @return float Returns the mt fisc frais sante.
     */
    public function getMtFiscFraisSante() {
        return $this->mtFiscFraisSante;
    }

    /**
     * Get the mt fisc prev.
     *
     * @return float Returns the mt fisc prev.
     */
    public function getMtFiscPrev() {
        return $this->mtFiscPrev;
    }

    /**
     * Get the mt fisc retraite.
     *
     * @return float Returns the mt fisc retraite.
     */
    public function getMtFiscRetraite() {
        return $this->mtFiscRetraite;
    }

    /**
     * Get the mt forfait social20.
     *
     * @return float Returns the mt forfait social20.
     */
    public function getMtForfaitSocial20() {
        return $this->mtForfaitSocial20;
    }

    /**
     * Get the mt forfait social8.
     *
     * @return float Returns the mt forfait social8.
     */
    public function getMtForfaitSocial8() {
        return $this->mtForfaitSocial8;
    }

    /**
     * Get the mt iap.
     *
     * @return float Returns the mt iap.
     */
    public function getMtIap() {
        return $this->mtIap;
    }

    /**
     * Get the mt journee cpn.
     *
     * @return float Returns the mt journee cpn.
     */
    public function getMtJourneeCpn() {
        return $this->mtJourneeCpn;
    }

    /**
     * Get the mt journee cpn1.
     *
     * @return float Returns the mt journee cpn1.
     */
    public function getMtJourneeCpn1() {
        return $this->mtJourneeCpn1;
    }

    /**
     * Get the multi employeur.
     *
     * @return bool Returns the multi employeur.
     */
    public function getMultiEmployeur() {
        return $this->multiEmployeur;
    }

    /**
     * Get the nature analytique.
     *
     * @return string Returns the nature analytique.
     */
    public function getNatureAnalytique() {
        return $this->natureAnalytique;
    }

    /**
     * Get the nb30 renouv cdd.
     *
     * @return int Returns the nb30 renouv cdd.
     */
    public function getNb30RenouvCdd() {
        return $this->nb30RenouvCdd;
    }

    /**
     * Get the nb h act part.
     *
     * @return float Returns the nb h act part.
     */
    public function getNbHActPart() {
        return $this->nbHActPart;
    }

    /**
     * Get the nb h act part indem.
     *
     * @return float Returns the nb h act part indem.
     */
    public function getNbHActPartIndem() {
        return $this->nbHActPartIndem;
    }

    /**
     * Get the nb h bonifie.
     *
     * @return float Returns the nb h bonifie.
     */
    public function getNbHBonifie() {
        return $this->nbHBonifie;
    }

    /**
     * Get the nb h contingent.
     *
     * @return float Returns the nb h contingent.
     */
    public function getNbHContingent() {
        return $this->nbHContingent;
    }

    /**
     * Get the nb h contract.
     *
     * @return float Returns the nb h contract.
     */
    public function getNbHContract() {
        return $this->nbHContract;
    }

    /**
     * Get the nb heure mois.
     *
     * @return float Returns the nb heure mois.
     */
    public function getNbHeureMois() {
        return $this->nbHeureMois;
    }

    /**
     * Get the nb jour annee.
     *
     * @return float Returns the nb jour annee.
     */
    public function getNbJourAnnee() {
        return $this->nbJourAnnee;
    }

    /**
     * Get the nb jour cp acquis.
     *
     * @return float Returns the nb jour cp acquis.
     */
    public function getNbJourCpAcquis() {
        return $this->nbJourCpAcquis;
    }

    /**
     * Get the nb jour cp sup.
     *
     * @return float Returns the nb jour cp sup.
     */
    public function getNbJourCpSup() {
        return $this->nbJourCpSup;
    }

    /**
     * Get the nb piece logement.
     *
     * @return string Returns the nb piece logement.
     */
    public function getNbPieceLogement() {
        return $this->nbPieceLogement;
    }

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return bool Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete() {
        return $this->nePasActiverPrimeAnnuelleProprete;
    }

    /**
     * Get the ne pas publier web.
     *
     * @return bool Returns the ne pas publier web.
     */
    public function getNePasPublierWeb() {
        return $this->nePasPublierWeb;
    }

    /**
     * Get the niveau.
     *
     * @return string Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the niveau convention col.
     *
     * @return string Returns the niveau convention col.
     */
    public function getNiveauConventionCol() {
        return $this->niveauConventionCol;
    }

    /**
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
    }

    /**
     * Get the nom naissance.
     *
     * @return string Returns the nom naissance.
     */
    public function getNomNaissance() {
        return $this->nomNaissance;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the num evenement.
     *
     * @return int Returns the num evenement.
     */
    public function getNumEvenement() {
        return $this->numEvenement;
    }

    /**
     * Get the num objet.
     *
     * @return string Returns the num objet.
     */
    public function getNumObjet() {
        return $this->numObjet;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero abattement contrat msa.
     *
     * @return int Returns the numero abattement contrat msa.
     */
    public function getNumeroAbattementContratMsa() {
        return $this->numeroAbattementContratMsa;
    }

    /**
     * Get the numero contrat.
     *
     * @return int Returns the numero contrat.
     */
    public function getNumeroContrat() {
        return $this->numeroContrat;
    }

    /**
     * Get the numero grille type.
     *
     * @return int Returns the numero grille type.
     */
    public function getNumeroGrilleType() {
        return $this->numeroGrilleType;
    }

    /**
     * Get the part patron prev forfait social8.
     *
     * @return float Returns the part patron prev forfait social8.
     */
    public function getPartPatronPrevForfaitSocial8() {
        return $this->partPatronPrevForfaitSocial8;
    }

    /**
     * Get the pas de reintegration.
     *
     * @return bool Returns the pas de reintegration.
     */
    public function getPasDeReintegration() {
        return $this->pasDeReintegration;
    }

    /**
     * Get the pas gestion dif.
     *
     * @return bool Returns the pas gestion dif.
     */
    public function getPasGestionDif() {
        return $this->pasGestionDif;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the position.
     *
     * @return string Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Get the position convention col.
     *
     * @return string Returns the position convention col.
     */
    public function getPositionConventionCol() {
        return $this->positionConventionCol;
    }

    /**
     * Get the pourcent exo.
     *
     * @return float Returns the pourcent exo.
     */
    public function getPourcentExo() {
        return $this->pourcentExo;
    }

    /**
     * Get the prem date entree.
     *
     * @return DateTime|null Returns the prem date entree.
     */
    public function getPremDateEntree() {
        return $this->premDateEntree;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the pss1 force.
     *
     * @return bool Returns the pss1 force.
     */
    public function getPss1Force() {
        return $this->pss1Force;
    }

    /**
     * Get the qualification.
     *
     * @return string Returns the qualification.
     */
    public function getQualification() {
        return $this->qualification;
    }

    /**
     * Get the reduction fillon.
     *
     * @return bool Returns the reduction fillon.
     */
    public function getReductionFillon() {
        return $this->reductionFillon;
    }

    /**
     * Get the regle calcul.
     *
     * @return string Returns the regle calcul.
     */
    public function getRegleCalcul() {
        return $this->regleCalcul;
    }

    /**
     * Get the remun part fillon.
     *
     * @return bool Returns the remun part fillon.
     */
    public function getRemunPartFillon() {
        return $this->remunPartFillon;
    }

    /**
     * Get the rtt1.
     *
     * @return float Returns the rtt1.
     */
    public function getRtt1() {
        return $this->rtt1;
    }

    /**
     * Get the rtt10.
     *
     * @return float Returns the rtt10.
     */
    public function getRtt10() {
        return $this->rtt10;
    }

    /**
     * Get the rtt11.
     *
     * @return float Returns the rtt11.
     */
    public function getRtt11() {
        return $this->rtt11;
    }

    /**
     * Get the rtt12.
     *
     * @return float Returns the rtt12.
     */
    public function getRtt12() {
        return $this->rtt12;
    }

    /**
     * Get the rtt2.
     *
     * @return float Returns the rtt2.
     */
    public function getRtt2() {
        return $this->rtt2;
    }

    /**
     * Get the rtt3.
     *
     * @return float Returns the rtt3.
     */
    public function getRtt3() {
        return $this->rtt3;
    }

    /**
     * Get the rtt4.
     *
     * @return float Returns the rtt4.
     */
    public function getRtt4() {
        return $this->rtt4;
    }

    /**
     * Get the rtt5.
     *
     * @return float Returns the rtt5.
     */
    public function getRtt5() {
        return $this->rtt5;
    }

    /**
     * Get the rtt6.
     *
     * @return float Returns the rtt6.
     */
    public function getRtt6() {
        return $this->rtt6;
    }

    /**
     * Get the rtt7.
     *
     * @return float Returns the rtt7.
     */
    public function getRtt7() {
        return $this->rtt7;
    }

    /**
     * Get the rtt8.
     *
     * @return float Returns the rtt8.
     */
    public function getRtt8() {
        return $this->rtt8;
    }

    /**
     * Get the rtt9.
     *
     * @return float Returns the rtt9.
     */
    public function getRtt9() {
        return $this->rtt9;
    }

    /**
     * Get the salaire base.
     *
     * @return float Returns the salaire base.
     */
    public function getSalaireBase() {
        return $this->salaireBase;
    }

    /**
     * Get the salaire reference.
     *
     * @return float Returns the salaire reference.
     */
    public function getSalaireReference() {
        return $this->salaireReference;
    }

    /**
     * Get the salaire retabli dsn.
     *
     * @return float Returns the salaire retabli dsn.
     */
    public function getSalaireRetabliDsn() {
        return $this->salaireRetabliDsn;
    }

    /**
     * Get the salaire retabli dsn force.
     *
     * @return bool Returns the salaire retabli dsn force.
     */
    public function getSalaireRetabliDsnForce() {
        return $this->salaireRetabliDsnForce;
    }

    /**
     * Get the sans contrat.
     *
     * @return int Returns the sans contrat.
     */
    public function getSansContrat() {
        return $this->sansContrat;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the setp fillon.
     *
     * @return float Returns the setp fillon.
     */
    public function getSetpFillon() {
        return $this->setpFillon;
    }

    /**
     * Get the signe af.
     *
     * @return string Returns the signe af.
     */
    public function getSigneAf() {
        return $this->signeAf;
    }

    /**
     * Get the siret lieu trav.
     *
     * @return string Returns the siret lieu trav.
     */
    public function getSiretLieuTrav() {
        return $this->siretLieuTrav;
    }

    /**
     * Get the smic m fillon sans hs.
     *
     * @return float Returns the smic m fillon sans hs.
     */
    public function getSmicMFillonSansHs() {
        return $this->smicMFillonSansHs;
    }

    /**
     * Get the smic maf.
     *
     * @return float Returns the smic maf.
     */
    public function getSmicMaf() {
        return $this->smicMaf;
    }

    /**
     * Get the smic mcice.
     *
     * @return float Returns the smic mcice.
     */
    public function getSmicMcice() {
        return $this->smicMcice;
    }

    /**
     * Get the subrogation.
     *
     * @return bool Returns the subrogation.
     */
    public function getSubrogation() {
        return $this->subrogation;
    }

    /**
     * Get the tds59.
     *
     * @return string Returns the tds59.
     */
    public function getTds59() {
        return $this->tds59;
    }

    /**
     * Get the tds76.
     *
     * @return string Returns the tds76.
     */
    public function getTds76() {
        return $this->tds76;
    }

    /**
     * Get the tel1.
     *
     * @return string Returns the tel1.
     */
    public function getTel1() {
        return $this->tel1;
    }

    /**
     * Get the tel2.
     *
     * @return string Returns the tel2.
     */
    public function getTel2() {
        return $this->tel2;
    }

    /**
     * Get the tepa moins20.
     *
     * @return bool Returns the tepa moins20.
     */
    public function getTepaMoins20() {
        return $this->tepaMoins20;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Get the tot cot urssaf.
     *
     * @return float Returns the tot cot urssaf.
     */
    public function getTotCotUrssaf() {
        return $this->totCotUrssaf;
    }

    /**
     * Get the tr d1 caisse1.
     *
     * @return float Returns the tr d1 caisse1.
     */
    public function getTrD1Caisse1() {
        return $this->trD1Caisse1;
    }

    /**
     * Get the tr d1caisse2.
     *
     * @return float Returns the tr d1caisse2.
     */
    public function getTrD1caisse2() {
        return $this->trD1caisse2;
    }

    /**
     * Get the tr d1caisse3.
     *
     * @return float Returns the tr d1caisse3.
     */
    public function getTrD1caisse3() {
        return $this->trD1caisse3;
    }

    /**
     * Get the tr d caisse1.
     *
     * @return float Returns the tr d caisse1.
     */
    public function getTrDCaisse1() {
        return $this->trDCaisse1;
    }

    /**
     * Get the tr dcaisse2.
     *
     * @return float Returns the tr dcaisse2.
     */
    public function getTrDcaisse2() {
        return $this->trDcaisse2;
    }

    /**
     * Get the tr dcaisse3.
     *
     * @return float Returns the tr dcaisse3.
     */
    public function getTrDcaisse3() {
        return $this->trDcaisse3;
    }

    /**
     * Get the tranche d.
     *
     * @return float Returns the tranche d.
     */
    public function getTrancheD() {
        return $this->trancheD;
    }

    /**
     * Get the tranche d1.
     *
     * @return float Returns the tranche d1.
     */
    public function getTrancheD1() {
        return $this->trancheD1;
    }

    /**
     * Get the type chom cdd.
     *
     * @return string Returns the type chom cdd.
     */
    public function getTypeChomCdd() {
        return $this->typeChomCdd;
    }

    /**
     * Get the type contrat.
     *
     * @return string Returns the type contrat.
     */
    public function getTypeContrat() {
        return $this->typeContrat;
    }

    /**
     * Get the type exo lodeom.
     *
     * @return string Returns the type exo lodeom.
     */
    public function getTypeExoLodeom() {
        return $this->typeExoLodeom;
    }

    /**
     * Get the type he fillon.
     *
     * @return string Returns the type he fillon.
     */
    public function getTypeHeFillon() {
        return $this->typeHeFillon;
    }

    /**
     * Get the type maintien salaire.
     *
     * @return string Returns the type maintien salaire.
     */
    public function getTypeMaintienSalaire() {
        return $this->typeMaintienSalaire;
    }

    /**
     * Get the type reduction fillon.
     *
     * @return string Returns the type reduction fillon.
     */
    public function getTypeReductionFillon() {
        return $this->typeReductionFillon;
    }

    /**
     * Get the type reduction mayotte.
     *
     * @return string Returns the type reduction mayotte.
     */
    public function getTypeReductionMayotte() {
        return $this->typeReductionMayotte;
    }

    /**
     * Get the type saisie ab cp.
     *
     * @return string Returns the type saisie ab cp.
     */
    public function getTypeSaisieAbCp() {
        return $this->typeSaisieAbCp;
    }

    /**
     * Get the type saisie chom intemp.
     *
     * @return string Returns the type saisie chom intemp.
     */
    public function getTypeSaisieChomIntemp() {
        return $this->typeSaisieChomIntemp;
    }

    /**
     * Get the vrp multicarte.
     *
     * @return bool Returns the vrp multicarte.
     */
    public function getVrpMulticarte() {
        return $this->vrpMulticarte;
    }

    /**
     * Set the active sal min conv.
     *
     * @param bool $activeSalMinConv The active sal min conv.
     */
    public function setActiveSalMinConv($activeSalMinConv) {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }

    /**
     * Set the active smic.
     *
     * @param bool $activeSmic The active smic.
     */
    public function setActiveSmic($activeSmic) {
        $this->activeSmic = $activeSmic;
        return $this;
    }

    /**
     * Set the aen logement.
     *
     * @param bool $aenLogement The aen logement.
     */
    public function setAenLogement($aenLogement) {
        $this->aenLogement = $aenLogement;
        return $this;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string $allegParticulierEmp The alleg particulier emp.
     */
    public function setAllegParticulierEmp($allegParticulierEmp) {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool $annexe7Mutation The annexe7 mutation.
     */
    public function setAnnexe7Mutation($annexe7Mutation) {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string $arbitrageAuto The arbitrage auto.
     */
    public function setArbitrageAuto($arbitrageAuto) {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the assiette af.
     *
     * @param float $assietteAf The assiette af.
     */
    public function setAssietteAf($assietteAf) {
        $this->assietteAf = $assietteAf;
        return $this;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string $autreAllegEmp The autre alleg emp.
     */
    public function setAutreAllegEmp($autreAllegEmp) {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }

    /**
     * Set the brut al sans h sup.
     *
     * @param float $brutAlSansHSup The brut al sans h sup.
     */
    public function setBrutAlSansHSup($brutAlSansHSup) {
        $this->brutAlSansHSup = $brutAlSansHSup;
        return $this;
    }

    /**
     * Set the brut al sans h sup majo he.
     *
     * @param float $brutAlSansHSupMajoHe The brut al sans h sup majo he.
     */
    public function setBrutAlSansHSupMajoHe($brutAlSansHSupMajoHe) {
        $this->brutAlSansHSupMajoHe = $brutAlSansHSupMajoHe;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param bool $caisseCp The caisse cp.
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the categ population.
     *
     * @param string $categPopulation The categ population.
     */
    public function setCategPopulation($categPopulation) {
        $this->categPopulation = $categPopulation;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string $categSalarie The categ salarie.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param bool $cddcdi The cddcdi.
     */
    public function setCddcdi($cddcdi) {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the classification.
     *
     * @param string $classification The classification.
     */
    public function setClassification($classification) {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Set the code caisse cp.
     *
     * @param string $codeCaisseCp The code caisse cp.
     */
    public function setCodeCaisseCp($codeCaisseCp) {
        $this->codeCaisseCp = $codeCaisseCp;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string $codeCategSalPourcentAbat The code categ sal pourcent abat.
     */
    public function setCodeCategSalPourcentAbat($codeCategSalPourcentAbat) {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }

    /**
     * Set the code class btp.
     *
     * @param string $codeClassBtp The code class btp.
     */
    public function setCodeClassBtp($codeClassBtp) {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string $codeEmpRemplace The code emp remplace.
     */
    public function setCodeEmpRemplace($codeEmpRemplace) {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }

    /**
     * Set the code exo trav.
     *
     * @param string $codeExoTrav The code exo trav.
     */
    public function setCodeExoTrav($codeExoTrav) {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string $codeIntitContratTrav The code intit contrat trav.
     */
    public function setCodeIntitContratTrav($codeIntitContratTrav) {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }

    /**
     * Set the code metier btp.
     *
     * @param string $codeMetierBtp The code metier btp.
     */
    public function setCodeMetierBtp($codeMetierBtp) {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regime at.
     *
     * @param string $codeRegimeAt The code regime at.
     */
    public function setCodeRegimeAt($codeRegimeAt) {
        $this->codeRegimeAt = $codeRegimeAt;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string $codeRegimeVieillesse The code regime vieillesse.
     */
    public function setCodeRegimeVieillesse($codeRegimeVieillesse) {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string $codeRetraiteComplementaire The code retraite complementaire.
     */
    public function setCodeRetraiteComplementaire($codeRetraiteComplementaire) {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }

    /**
     * Set the code situ admin.
     *
     * @param string $codeSituAdmin The code situ admin.
     */
    public function setCodeSituAdmin($codeSituAdmin) {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string $codeStatutCateg The code statut categ.
     */
    public function setCodeStatutCateg($codeStatutCateg) {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string $codeStatutCategRetraite The code statut categ retraite.
     */
    public function setCodeStatutCategRetraite($codeStatutCategRetraite) {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code tuteur.
     *
     * @param string $codeTuteur The code tuteur.
     */
    public function setCodeTuteur($codeTuteur) {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string $codeUniteTempsTravail The code unite temps travail.
     */
    public function setCodeUniteTempsTravail($codeUniteTempsTravail) {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }

    /**
     * Set the coeff convention.
     *
     * @param string $coeffConvention The coeff convention.
     */
    public function setCoeffConvention($coeffConvention) {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }

    /**
     * Set the coeff fillon moins20.
     *
     * @param bool $coeffFillonMoins20 The coeff fillon moins20.
     */
    public function setCoeffFillonMoins20($coeffFillonMoins20) {
        $this->coeffFillonMoins20 = $coeffFillonMoins20;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement pcs.
     *
     * @param string $complementPcs The complement pcs.
     */
    public function setComplementPcs($complementPcs) {
        $this->complementPcs = $complementPcs;
        return $this;
    }

    /**
     * Set the contrat cne.
     *
     * @param bool $contratCne The contrat cne.
     */
    public function setContratCne($contratCne) {
        $this->contratCne = $contratCne;
        return $this;
    }

    /**
     * Set the cum base prevoyance comp.
     *
     * @param float $cumBasePrevoyanceComp The cum base prevoyance comp.
     */
    public function setCumBasePrevoyanceComp($cumBasePrevoyanceComp) {
        $this->cumBasePrevoyanceComp = $cumBasePrevoyanceComp;
        return $this;
    }

    /**
     * Set the cum base retraite obli.
     *
     * @param float $cumBaseRetraiteObli The cum base retraite obli.
     */
    public function setCumBaseRetraiteObli($cumBaseRetraiteObli) {
        $this->cumBaseRetraiteObli = $cumBaseRetraiteObli;
        return $this;
    }

    /**
     * Set the cum base retraite supp.
     *
     * @param float $cumBaseRetraiteSupp The cum base retraite supp.
     */
    public function setCumBaseRetraiteSupp($cumBaseRetraiteSupp) {
        $this->cumBaseRetraiteSupp = $cumBaseRetraiteSupp;
        return $this;
    }

    /**
     * Set the cum mt forfait social20.
     *
     * @param float $cumMtForfaitSocial20 The cum mt forfait social20.
     */
    public function setCumMtForfaitSocial20($cumMtForfaitSocial20) {
        $this->cumMtForfaitSocial20 = $cumMtForfaitSocial20;
        return $this;
    }

    /**
     * Set the cum mt forfait social8.
     *
     * @param float $cumMtForfaitSocial8 The cum mt forfait social8.
     */
    public function setCumMtForfaitSocial8($cumMtForfaitSocial8) {
        $this->cumMtForfaitSocial8 = $cumMtForfaitSocial8;
        return $this;
    }

    /**
     * Set the cum pp fisc prev.
     *
     * @param float $cumPpFiscPrev The cum pp fisc prev.
     */
    public function setCumPpFiscPrev($cumPpFiscPrev) {
        $this->cumPpFiscPrev = $cumPpFiscPrev;
        return $this;
    }

    /**
     * Set the cum pp fisc ret.
     *
     * @param float $cumPpFiscRet The cum pp fisc ret.
     */
    public function setCumPpFiscRet($cumPpFiscRet) {
        $this->cumPpFiscRet = $cumPpFiscRet;
        return $this;
    }

    /**
     * Set the cum ps fisc prev.
     *
     * @param float $cumPsFiscPrev The cum ps fisc prev.
     */
    public function setCumPsFiscPrev($cumPsFiscPrev) {
        $this->cumPsFiscPrev = $cumPsFiscPrev;
        return $this;
    }

    /**
     * Set the cum ps fisc ret.
     *
     * @param float $cumPsFiscRet The cum ps fisc ret.
     */
    public function setCumPsFiscRet($cumPsFiscRet) {
        $this->cumPsFiscRet = $cumPsFiscRet;
        return $this;
    }

    /**
     * Set the cum smic m.
     *
     * @param float $cumSmicM The cum smic m.
     */
    public function setCumSmicM($cumSmicM) {
        $this->cumSmicM = $cumSmicM;
        return $this;
    }

    /**
     * Set the cum tr d1 caisse1.
     *
     * @param float $cumTrD1Caisse1 The cum tr d1 caisse1.
     */
    public function setCumTrD1Caisse1($cumTrD1Caisse1) {
        $this->cumTrD1Caisse1 = $cumTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum tr d1caisse2.
     *
     * @param float $cumTrD1caisse2 The cum tr d1caisse2.
     */
    public function setCumTrD1caisse2($cumTrD1caisse2) {
        $this->cumTrD1caisse2 = $cumTrD1caisse2;
        return $this;
    }

    /**
     * Set the cum tr d1caisse3.
     *
     * @param float $cumTrD1caisse3 The cum tr d1caisse3.
     */
    public function setCumTrD1caisse3($cumTrD1caisse3) {
        $this->cumTrD1caisse3 = $cumTrD1caisse3;
        return $this;
    }

    /**
     * Set the cum tr d caisse1.
     *
     * @param float $cumTrDCaisse1 The cum tr d caisse1.
     */
    public function setCumTrDCaisse1($cumTrDCaisse1) {
        $this->cumTrDCaisse1 = $cumTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum tr dcaisse2.
     *
     * @param float $cumTrDcaisse2 The cum tr dcaisse2.
     */
    public function setCumTrDcaisse2($cumTrDcaisse2) {
        $this->cumTrDcaisse2 = $cumTrDcaisse2;
        return $this;
    }

    /**
     * Set the cum tr dcaisse3.
     *
     * @param float $cumTrDcaisse3 The cum tr dcaisse3.
     */
    public function setCumTrDcaisse3($cumTrDcaisse3) {
        $this->cumTrDcaisse3 = $cumTrDcaisse3;
        return $this;
    }

    /**
     * Set the cum tranche d.
     *
     * @param float $cumTrancheD The cum tranche d.
     */
    public function setCumTrancheD($cumTrancheD) {
        $this->cumTrancheD = $cumTrancheD;
        return $this;
    }

    /**
     * Set the cum tranche d1.
     *
     * @param float $cumTrancheD1 The cum tranche d1.
     */
    public function setCumTrancheD1($cumTrancheD1) {
        $this->cumTrancheD1 = $cumTrancheD1;
        return $this;
    }

    /**
     * Set the date ancien branche.
     *
     * @param DateTime|null $dateAncienBranche The date ancien branche.
     */
    public function setDateAncienBranche(DateTime $dateAncienBranche = null) {
        $this->dateAncienBranche = $dateAncienBranche;
        return $this;
    }

    /**
     * Set the date ancien college.
     *
     * @param DateTime|null $dateAncienCollege The date ancien college.
     */
    public function setDateAncienCollege(DateTime $dateAncienCollege = null) {
        $this->dateAncienCollege = $dateAncienCollege;
        return $this;
    }

    /**
     * Set the date ancien poste.
     *
     * @param DateTime|null $dateAncienPoste The date ancien poste.
     */
    public function setDateAncienPoste(DateTime $dateAncienPoste = null) {
        $this->dateAncienPoste = $dateAncienPoste;
        return $this;
    }

    /**
     * Set the date debut chom cdd.
     *
     * @param DateTime|null $dateDebutChomCdd The date debut chom cdd.
     */
    public function setDateDebutChomCdd(DateTime $dateDebutChomCdd = null) {
        $this->dateDebutChomCdd = $dateDebutChomCdd;
        return $this;
    }

    /**
     * Set the date debut contrat.
     *
     * @param DateTime|null $dateDebutContrat The date debut contrat.
     */
    public function setDateDebutContrat(DateTime $dateDebutContrat = null) {
        $this->dateDebutContrat = $dateDebutContrat;
        return $this;
    }

    /**
     * Set the date envoi mail.
     *
     * @param DateTime|null $dateEnvoiMail The date envoi mail.
     */
    public function setDateEnvoiMail(DateTime $dateEnvoiMail = null) {
        $this->dateEnvoiMail = $dateEnvoiMail;
        return $this;
    }

    /**
     * Set the date fin chom cdd.
     *
     * @param DateTime|null $dateFinChomCdd The date fin chom cdd.
     */
    public function setDateFinChomCdd(DateTime $dateFinChomCdd = null) {
        $this->dateFinChomCdd = $dateFinChomCdd;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     */
    public function setDateFinContrat(DateTime $dateFinContrat = null) {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date fin prev.
     *
     * @param DateTime|null $dateFinPrev The date fin prev.
     */
    public function setDateFinPrev(DateTime $dateFinPrev = null) {
        $this->dateFinPrev = $dateFinPrev;
        return $this;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime|null $dateRachat The date rachat.
     */
    public function setDateRachat(DateTime $dateRachat = null) {
        $this->dateRachat = $dateRachat;
        return $this;
    }

    /**
     * Set the date renouv cdd.
     *
     * @param DateTime|null $dateRenouvCdd The date renouv cdd.
     */
    public function setDateRenouvCdd(DateTime $dateRenouvCdd = null) {
        $this->dateRenouvCdd = $dateRenouvCdd;
        return $this;
    }

    /**
     * Set the date renouv cdd2.
     *
     * @param DateTime|null $dateRenouvCdd2 The date renouv cdd2.
     */
    public function setDateRenouvCdd2(DateTime $dateRenouvCdd2 = null) {
        $this->dateRenouvCdd2 = $dateRenouvCdd2;
        return $this;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string $detacheExpatrie The detache expatrie.
     */
    public function setDetacheExpatrie($detacheExpatrie) {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the echelon convention col.
     *
     * @param string $echelonConventionCol The echelon convention col.
     */
    public function setEchelonConventionCol($echelonConventionCol) {
        $this->echelonConventionCol = $echelonConventionCol;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string $etabLieuTravail The etab lieu travail.
     */
    public function setEtabLieuTravail($etabLieuTravail) {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }

    /**
     * Set the exclure chom cdd.
     *
     * @param bool $exclureChomCdd The exclure chom cdd.
     */
    public function setExclureChomCdd($exclureChomCdd) {
        $this->exclureChomCdd = $exclureChomCdd;
        return $this;
    }

    /**
     * Set the exclure cice.
     *
     * @param bool $exclureCice The exclure cice.
     */
    public function setExclureCice($exclureCice) {
        $this->exclureCice = $exclureCice;
        return $this;
    }

    /**
     * Set the exclure cospar.
     *
     * @param bool $exclureCospar The exclure cospar.
     */
    public function setExclureCospar($exclureCospar) {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }

    /**
     * Set the exclure dsn.
     *
     * @param bool $exclureDsn The exclure dsn.
     */
    public function setExclureDsn($exclureDsn) {
        $this->exclureDsn = $exclureDsn;
        return $this;
    }

    /**
     * Set the exclure loi tepa.
     *
     * @param bool $exclureLoiTepa The exclure loi tepa.
     */
    public function setExclureLoiTepa($exclureLoiTepa) {
        $this->exclureLoiTepa = $exclureLoiTepa;
        return $this;
    }

    /**
     * Set the exclure loi tepa part p.
     *
     * @param bool $exclureLoiTepaPartP The exclure loi tepa part p.
     */
    public function setExclureLoiTepaPartP($exclureLoiTepaPartP) {
        $this->exclureLoiTepaPartP = $exclureLoiTepaPartP;
        return $this;
    }

    /**
     * Set the exclure loi tepa part s.
     *
     * @param bool $exclureLoiTepaPartS The exclure loi tepa part s.
     */
    public function setExclureLoiTepaPartS($exclureLoiTepaPartS) {
        $this->exclureLoiTepaPartS = $exclureLoiTepaPartS;
        return $this;
    }

    /**
     * Set the exclure qgc.
     *
     * @param bool $exclureQgc The exclure qgc.
     */
    public function setExclureQgc($exclureQgc) {
        $this->exclureQgc = $exclureQgc;
        return $this;
    }

    /**
     * Set the exo accre17.
     *
     * @param bool $exoAccre17 The exo accre17.
     */
    public function setExoAccre17($exoAccre17) {
        $this->exoAccre17 = $exoAccre17;
        return $this;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool $exoOccasionnelMsa The exo occasionnel msa.
     */
    public function setExoOccasionnelMsa($exoOccasionnelMsa) {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param bool $exoProfessionnalisation The exo professionnalisation.
     */
    public function setExoProfessionnalisation($exoProfessionnalisation) {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }

    /**
     * Set the exo specif.
     *
     * @param bool $exoSpecif The exo specif.
     */
    public function setExoSpecif($exoSpecif) {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }

    /**
     * Set the forfait heure.
     *
     * @param bool $forfaitHeure The forfait heure.
     */
    public function setForfaitHeure($forfaitHeure) {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the gestion cp.
     *
     * @param bool $gestionCp The gestion cp.
     */
    public function setGestionCp($gestionCp) {
        $this->gestionCp = $gestionCp;
        return $this;
    }

    /**
     * Set the gestion hstepa.
     *
     * @param string $gestionHstepa The gestion hstepa.
     */
    public function setGestionHstepa($gestionHstepa) {
        $this->gestionHstepa = $gestionHstepa;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool $gestionMailBulletin The gestion mail bulletin.
     */
    public function setGestionMailBulletin($gestionMailBulletin) {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the gestion rtt.
     *
     * @param bool $gestionRtt The gestion rtt.
     */
    public function setGestionRtt($gestionRtt) {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }

    /**
     * Set the grille anc1.
     *
     * @param string $grilleAnc1 The grille anc1.
     */
    public function setGrilleAnc1($grilleAnc1) {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }

    /**
     * Set the grille anc2.
     *
     * @param string $grilleAnc2 The grille anc2.
     */
    public function setGrilleAnc2($grilleAnc2) {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }

    /**
     * Set the grille anc3.
     *
     * @param string $grilleAnc3 The grille anc3.
     */
    public function setGrilleAnc3($grilleAnc3) {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }

    /**
     * Set the id lieu travail.
     *
     * @param string $idLieuTravail The id lieu travail.
     */
    public function setIdLieuTravail($idLieuTravail) {
        $this->idLieuTravail = $idLieuTravail;
        return $this;
    }

    /**
     * Set the indem cp msa.
     *
     * @param bool $indemCpMsa The indem cp msa.
     */
    public function setIndemCpMsa($indemCpMsa) {
        $this->indemCpMsa = $indemCpMsa;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param bool $interimIndemCpFillon The interim indem cp fillon.
     */
    public function setInterimIndemCpFillon($interimIndemCpFillon) {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }

    /**
     * Set the libelle reintegration.
     *
     * @param string $libelleReintegration The libelle reintegration.
     */
    public function setLibelleReintegration($libelleReintegration) {
        $this->libelleReintegration = $libelleReintegration;
        return $this;
    }

    /**
     * Set the lien reintegration.
     *
     * @param string $lienReintegration The lien reintegration.
     */
    public function setLienReintegration($lienReintegration) {
        $this->lienReintegration = $lienReintegration;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param bool $maintienIntervientCp The maintien intervient cp.
     */
    public function setMaintienIntervientCp($maintienIntervientCp) {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool $maintienSalaire The maintien salaire.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the montant avantage.
     *
     * @param float $montantAvantage The montant avantage.
     */
    public function setMontantAvantage($montantAvantage) {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }

    /**
     * Set the motif cdd.
     *
     * @param string $motifCdd The motif cdd.
     */
    public function setMotifCdd($motifCdd) {
        $this->motifCdd = $motifCdd;
        return $this;
    }

    /**
     * Set the motif exclusion dsn.
     *
     * @param string $motifExclusionDsn The motif exclusion dsn.
     */
    public function setMotifExclusionDsn($motifExclusionDsn) {
        $this->motifExclusionDsn = $motifExclusionDsn;
        return $this;
    }

    /**
     * Set the mt abs act part.
     *
     * @param float $mtAbsActPart The mt abs act part.
     */
    public function setMtAbsActPart($mtAbsActPart) {
        $this->mtAbsActPart = $mtAbsActPart;
        return $this;
    }

    /**
     * Set the mt cotisation prev.
     *
     * @param float $mtCotisationPrev The mt cotisation prev.
     */
    public function setMtCotisationPrev($mtCotisationPrev) {
        $this->mtCotisationPrev = $mtCotisationPrev;
        return $this;
    }

    /**
     * Set the mt cotisation retraite.
     *
     * @param float $mtCotisationRetraite The mt cotisation retraite.
     */
    public function setMtCotisationRetraite($mtCotisationRetraite) {
        $this->mtCotisationRetraite = $mtCotisationRetraite;
        return $this;
    }

    /**
     * Set the mt crds100.
     *
     * @param float $mtCrds100 The mt crds100.
     */
    public function setMtCrds100($mtCrds100) {
        $this->mtCrds100 = $mtCrds100;
        return $this;
    }

    /**
     * Set the mt csg100.
     *
     * @param float $mtCsg100 The mt csg100.
     */
    public function setMtCsg100($mtCsg100) {
        $this->mtCsg100 = $mtCsg100;
        return $this;
    }

    /**
     * Set the mt fisc frais sante.
     *
     * @param float $mtFiscFraisSante The mt fisc frais sante.
     */
    public function setMtFiscFraisSante($mtFiscFraisSante) {
        $this->mtFiscFraisSante = $mtFiscFraisSante;
        return $this;
    }

    /**
     * Set the mt fisc prev.
     *
     * @param float $mtFiscPrev The mt fisc prev.
     */
    public function setMtFiscPrev($mtFiscPrev) {
        $this->mtFiscPrev = $mtFiscPrev;
        return $this;
    }

    /**
     * Set the mt fisc retraite.
     *
     * @param float $mtFiscRetraite The mt fisc retraite.
     */
    public function setMtFiscRetraite($mtFiscRetraite) {
        $this->mtFiscRetraite = $mtFiscRetraite;
        return $this;
    }

    /**
     * Set the mt forfait social20.
     *
     * @param float $mtForfaitSocial20 The mt forfait social20.
     */
    public function setMtForfaitSocial20($mtForfaitSocial20) {
        $this->mtForfaitSocial20 = $mtForfaitSocial20;
        return $this;
    }

    /**
     * Set the mt forfait social8.
     *
     * @param float $mtForfaitSocial8 The mt forfait social8.
     */
    public function setMtForfaitSocial8($mtForfaitSocial8) {
        $this->mtForfaitSocial8 = $mtForfaitSocial8;
        return $this;
    }

    /**
     * Set the mt iap.
     *
     * @param float $mtIap The mt iap.
     */
    public function setMtIap($mtIap) {
        $this->mtIap = $mtIap;
        return $this;
    }

    /**
     * Set the mt journee cpn.
     *
     * @param float $mtJourneeCpn The mt journee cpn.
     */
    public function setMtJourneeCpn($mtJourneeCpn) {
        $this->mtJourneeCpn = $mtJourneeCpn;
        return $this;
    }

    /**
     * Set the mt journee cpn1.
     *
     * @param float $mtJourneeCpn1 The mt journee cpn1.
     */
    public function setMtJourneeCpn1($mtJourneeCpn1) {
        $this->mtJourneeCpn1 = $mtJourneeCpn1;
        return $this;
    }

    /**
     * Set the multi employeur.
     *
     * @param bool $multiEmployeur The multi employeur.
     */
    public function setMultiEmployeur($multiEmployeur) {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb30 renouv cdd.
     *
     * @param int $nb30RenouvCdd The nb30 renouv cdd.
     */
    public function setNb30RenouvCdd($nb30RenouvCdd) {
        $this->nb30RenouvCdd = $nb30RenouvCdd;
        return $this;
    }

    /**
     * Set the nb h act part.
     *
     * @param float $nbHActPart The nb h act part.
     */
    public function setNbHActPart($nbHActPart) {
        $this->nbHActPart = $nbHActPart;
        return $this;
    }

    /**
     * Set the nb h act part indem.
     *
     * @param float $nbHActPartIndem The nb h act part indem.
     */
    public function setNbHActPartIndem($nbHActPartIndem) {
        $this->nbHActPartIndem = $nbHActPartIndem;
        return $this;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float $nbHBonifie The nb h bonifie.
     */
    public function setNbHBonifie($nbHBonifie) {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float $nbHContingent The nb h contingent.
     */
    public function setNbHContingent($nbHContingent) {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }

    /**
     * Set the nb h contract.
     *
     * @param float $nbHContract The nb h contract.
     */
    public function setNbHContract($nbHContract) {
        $this->nbHContract = $nbHContract;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float $nbJourAnnee The nb jour annee.
     */
    public function setNbJourAnnee($nbJourAnnee) {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float $nbJourCpAcquis The nb jour cp acquis.
     */
    public function setNbJourCpAcquis($nbJourCpAcquis) {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jour cp sup.
     *
     * @param float $nbJourCpSup The nb jour cp sup.
     */
    public function setNbJourCpSup($nbJourCpSup) {
        $this->nbJourCpSup = $nbJourCpSup;
        return $this;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string $nbPieceLogement The nb piece logement.
     */
    public function setNbPieceLogement($nbPieceLogement) {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the ne pas publier web.
     *
     * @param bool $nePasPublierWeb The ne pas publier web.
     */
    public function setNePasPublierWeb($nePasPublierWeb) {
        $this->nePasPublierWeb = $nePasPublierWeb;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau convention col.
     *
     * @param string $niveauConventionCol The niveau convention col.
     */
    public function setNiveauConventionCol($niveauConventionCol) {
        $this->niveauConventionCol = $niveauConventionCol;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int $numEvenement The num evenement.
     */
    public function setNumEvenement($numEvenement) {
        $this->numEvenement = $numEvenement;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string $numObjet The num objet.
     */
    public function setNumObjet($numObjet) {
        $this->numObjet = $numObjet;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero abattement contrat msa.
     *
     * @param int $numeroAbattementContratMsa The numero abattement contrat msa.
     */
    public function setNumeroAbattementContratMsa($numeroAbattementContratMsa) {
        $this->numeroAbattementContratMsa = $numeroAbattementContratMsa;
        return $this;
    }

    /**
     * Set the numero contrat.
     *
     * @param int $numeroContrat The numero contrat.
     */
    public function setNumeroContrat($numeroContrat) {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the part patron prev forfait social8.
     *
     * @param float $partPatronPrevForfaitSocial8 The part patron prev forfait social8.
     */
    public function setPartPatronPrevForfaitSocial8($partPatronPrevForfaitSocial8) {
        $this->partPatronPrevForfaitSocial8 = $partPatronPrevForfaitSocial8;
        return $this;
    }

    /**
     * Set the pas de reintegration.
     *
     * @param bool $pasDeReintegration The pas de reintegration.
     */
    public function setPasDeReintegration($pasDeReintegration) {
        $this->pasDeReintegration = $pasDeReintegration;
        return $this;
    }

    /**
     * Set the pas gestion dif.
     *
     * @param bool $pasGestionDif The pas gestion dif.
     */
    public function setPasGestionDif($pasGestionDif) {
        $this->pasGestionDif = $pasGestionDif;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the position convention col.
     *
     * @param string $positionConventionCol The position convention col.
     */
    public function setPositionConventionCol($positionConventionCol) {
        $this->positionConventionCol = $positionConventionCol;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float $pourcentExo The pourcent exo.
     */
    public function setPourcentExo($pourcentExo) {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the prem date entree.
     *
     * @param DateTime|null $premDateEntree The prem date entree.
     */
    public function setPremDateEntree(DateTime $premDateEntree = null) {
        $this->premDateEntree = $premDateEntree;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the pss1 force.
     *
     * @param bool $pss1Force The pss1 force.
     */
    public function setPss1Force($pss1Force) {
        $this->pss1Force = $pss1Force;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param bool $reductionFillon The reduction fillon.
     */
    public function setReductionFillon($reductionFillon) {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the remun part fillon.
     *
     * @param bool $remunPartFillon The remun part fillon.
     */
    public function setRemunPartFillon($remunPartFillon) {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }

    /**
     * Set the rtt1.
     *
     * @param float $rtt1 The rtt1.
     */
    public function setRtt1($rtt1) {
        $this->rtt1 = $rtt1;
        return $this;
    }

    /**
     * Set the rtt10.
     *
     * @param float $rtt10 The rtt10.
     */
    public function setRtt10($rtt10) {
        $this->rtt10 = $rtt10;
        return $this;
    }

    /**
     * Set the rtt11.
     *
     * @param float $rtt11 The rtt11.
     */
    public function setRtt11($rtt11) {
        $this->rtt11 = $rtt11;
        return $this;
    }

    /**
     * Set the rtt12.
     *
     * @param float $rtt12 The rtt12.
     */
    public function setRtt12($rtt12) {
        $this->rtt12 = $rtt12;
        return $this;
    }

    /**
     * Set the rtt2.
     *
     * @param float $rtt2 The rtt2.
     */
    public function setRtt2($rtt2) {
        $this->rtt2 = $rtt2;
        return $this;
    }

    /**
     * Set the rtt3.
     *
     * @param float $rtt3 The rtt3.
     */
    public function setRtt3($rtt3) {
        $this->rtt3 = $rtt3;
        return $this;
    }

    /**
     * Set the rtt4.
     *
     * @param float $rtt4 The rtt4.
     */
    public function setRtt4($rtt4) {
        $this->rtt4 = $rtt4;
        return $this;
    }

    /**
     * Set the rtt5.
     *
     * @param float $rtt5 The rtt5.
     */
    public function setRtt5($rtt5) {
        $this->rtt5 = $rtt5;
        return $this;
    }

    /**
     * Set the rtt6.
     *
     * @param float $rtt6 The rtt6.
     */
    public function setRtt6($rtt6) {
        $this->rtt6 = $rtt6;
        return $this;
    }

    /**
     * Set the rtt7.
     *
     * @param float $rtt7 The rtt7.
     */
    public function setRtt7($rtt7) {
        $this->rtt7 = $rtt7;
        return $this;
    }

    /**
     * Set the rtt8.
     *
     * @param float $rtt8 The rtt8.
     */
    public function setRtt8($rtt8) {
        $this->rtt8 = $rtt8;
        return $this;
    }

    /**
     * Set the rtt9.
     *
     * @param float $rtt9 The rtt9.
     */
    public function setRtt9($rtt9) {
        $this->rtt9 = $rtt9;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the salaire reference.
     *
     * @param float $salaireReference The salaire reference.
     */
    public function setSalaireReference($salaireReference) {
        $this->salaireReference = $salaireReference;
        return $this;
    }

    /**
     * Set the salaire retabli dsn.
     *
     * @param float $salaireRetabliDsn The salaire retabli dsn.
     */
    public function setSalaireRetabliDsn($salaireRetabliDsn) {
        $this->salaireRetabliDsn = $salaireRetabliDsn;
        return $this;
    }

    /**
     * Set the salaire retabli dsn force.
     *
     * @param bool $salaireRetabliDsnForce The salaire retabli dsn force.
     */
    public function setSalaireRetabliDsnForce($salaireRetabliDsnForce) {
        $this->salaireRetabliDsnForce = $salaireRetabliDsnForce;
        return $this;
    }

    /**
     * Set the sans contrat.
     *
     * @param int $sansContrat The sans contrat.
     */
    public function setSansContrat($sansContrat) {
        $this->sansContrat = $sansContrat;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the setp fillon.
     *
     * @param float $setpFillon The setp fillon.
     */
    public function setSetpFillon($setpFillon) {
        $this->setpFillon = $setpFillon;
        return $this;
    }

    /**
     * Set the signe af.
     *
     * @param string $signeAf The signe af.
     */
    public function setSigneAf($signeAf) {
        $this->signeAf = $signeAf;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }

    /**
     * Set the smic m fillon sans hs.
     *
     * @param float $smicMFillonSansHs The smic m fillon sans hs.
     */
    public function setSmicMFillonSansHs($smicMFillonSansHs) {
        $this->smicMFillonSansHs = $smicMFillonSansHs;
        return $this;
    }

    /**
     * Set the smic maf.
     *
     * @param float $smicMaf The smic maf.
     */
    public function setSmicMaf($smicMaf) {
        $this->smicMaf = $smicMaf;
        return $this;
    }

    /**
     * Set the smic mcice.
     *
     * @param float $smicMcice The smic mcice.
     */
    public function setSmicMcice($smicMcice) {
        $this->smicMcice = $smicMcice;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param bool $subrogation The subrogation.
     */
    public function setSubrogation($subrogation) {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the tds59.
     *
     * @param string $tds59 The tds59.
     */
    public function setTds59($tds59) {
        $this->tds59 = $tds59;
        return $this;
    }

    /**
     * Set the tds76.
     *
     * @param string $tds76 The tds76.
     */
    public function setTds76($tds76) {
        $this->tds76 = $tds76;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tepa moins20.
     *
     * @param bool $tepaMoins20 The tepa moins20.
     */
    public function setTepaMoins20($tepaMoins20) {
        $this->tepaMoins20 = $tepaMoins20;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the tot cot urssaf.
     *
     * @param float $totCotUrssaf The tot cot urssaf.
     */
    public function setTotCotUrssaf($totCotUrssaf) {
        $this->totCotUrssaf = $totCotUrssaf;
        return $this;
    }

    /**
     * Set the tr d1 caisse1.
     *
     * @param float $trD1Caisse1 The tr d1 caisse1.
     */
    public function setTrD1Caisse1($trD1Caisse1) {
        $this->trD1Caisse1 = $trD1Caisse1;
        return $this;
    }

    /**
     * Set the tr d1caisse2.
     *
     * @param float $trD1caisse2 The tr d1caisse2.
     */
    public function setTrD1caisse2($trD1caisse2) {
        $this->trD1caisse2 = $trD1caisse2;
        return $this;
    }

    /**
     * Set the tr d1caisse3.
     *
     * @param float $trD1caisse3 The tr d1caisse3.
     */
    public function setTrD1caisse3($trD1caisse3) {
        $this->trD1caisse3 = $trD1caisse3;
        return $this;
    }

    /**
     * Set the tr d caisse1.
     *
     * @param float $trDCaisse1 The tr d caisse1.
     */
    public function setTrDCaisse1($trDCaisse1) {
        $this->trDCaisse1 = $trDCaisse1;
        return $this;
    }

    /**
     * Set the tr dcaisse2.
     *
     * @param float $trDcaisse2 The tr dcaisse2.
     */
    public function setTrDcaisse2($trDcaisse2) {
        $this->trDcaisse2 = $trDcaisse2;
        return $this;
    }

    /**
     * Set the tr dcaisse3.
     *
     * @param float $trDcaisse3 The tr dcaisse3.
     */
    public function setTrDcaisse3($trDcaisse3) {
        $this->trDcaisse3 = $trDcaisse3;
        return $this;
    }

    /**
     * Set the tranche d.
     *
     * @param float $trancheD The tranche d.
     */
    public function setTrancheD($trancheD) {
        $this->trancheD = $trancheD;
        return $this;
    }

    /**
     * Set the tranche d1.
     *
     * @param float $trancheD1 The tranche d1.
     */
    public function setTrancheD1($trancheD1) {
        $this->trancheD1 = $trancheD1;
        return $this;
    }

    /**
     * Set the type chom cdd.
     *
     * @param string $typeChomCdd The type chom cdd.
     */
    public function setTypeChomCdd($typeChomCdd) {
        $this->typeChomCdd = $typeChomCdd;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string $typeContrat The type contrat.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type exo lodeom.
     *
     * @param string $typeExoLodeom The type exo lodeom.
     */
    public function setTypeExoLodeom($typeExoLodeom) {
        $this->typeExoLodeom = $typeExoLodeom;
        return $this;
    }

    /**
     * Set the type he fillon.
     *
     * @param string $typeHeFillon The type he fillon.
     */
    public function setTypeHeFillon($typeHeFillon) {
        $this->typeHeFillon = $typeHeFillon;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string $typeMaintienSalaire The type maintien salaire.
     */
    public function setTypeMaintienSalaire($typeMaintienSalaire) {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type reduction fillon.
     *
     * @param string $typeReductionFillon The type reduction fillon.
     */
    public function setTypeReductionFillon($typeReductionFillon) {
        $this->typeReductionFillon = $typeReductionFillon;
        return $this;
    }

    /**
     * Set the type reduction mayotte.
     *
     * @param string $typeReductionMayotte The type reduction mayotte.
     */
    public function setTypeReductionMayotte($typeReductionMayotte) {
        $this->typeReductionMayotte = $typeReductionMayotte;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string $typeSaisieAbCp The type saisie ab cp.
     */
    public function setTypeSaisieAbCp($typeSaisieAbCp) {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the type saisie chom intemp.
     *
     * @param string $typeSaisieChomIntemp The type saisie chom intemp.
     */
    public function setTypeSaisieChomIntemp($typeSaisieChomIntemp) {
        $this->typeSaisieChomIntemp = $typeSaisieChomIntemp;
        return $this;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param bool $vrpMulticarte The vrp multicarte.
     */
    public function setVrpMulticarte($vrpMulticarte) {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }
}
