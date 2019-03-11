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
 * Infos compl bul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class InfosComplBul {

    /**
     * A e n logement.
     *
     * @var bool
     */
    private $aENLogement;

    /**
     * Active s m i c.
     *
     * @var bool
     */
    private $activeSMIC;

    /**
     * Active sal min conv.
     *
     * @var bool
     */
    private $activeSalMinConv;

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
     * Assiette a f.
     *
     * @var float
     */
    private $assietteAF;

    /**
     * Autre alleg emp.
     *
     * @var string
     */
    private $autreAllegEmp;

    /**
     * B t q.
     *
     * @var string
     */
    private $bTQ;

    /**
     * Brutal sans h sup.
     *
     * @var float
     */
    private $brutalSansHSup;

    /**
     * Brutal sans h sup majo h e.
     *
     * @var float
     */
    private $brutalSansHSupMajoHE;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * C d d c d i.
     *
     * @var bool
     */
    private $cDDCDI;

    /**
     * Caisse c p.
     *
     * @var bool
     */
    private $caisseCP;

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
     * Code caisse c p.
     *
     * @var string
     */
    private $codeCaisseCP;

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
     * Code class b t p.
     *
     * @var string
     */
    private $codeClassBTP;

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
     * Code metier b t p.
     *
     * @var string
     */
    private $codeMetierBTP;

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
     * Code regime a t.
     *
     * @var string
     */
    private $codeRegimeAT;

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
     * Complement p c s.
     *
     * @var string
     */
    private $complementPCS;

    /**
     * Contrat c n e.
     *
     * @var bool
     */
    private $contratCNE;

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
     * Cum p p fisc prev.
     *
     * @var float
     */
    private $cumPPFiscPrev;

    /**
     * Cum p p fisc ret.
     *
     * @var float
     */
    private $cumPPFiscRet;

    /**
     * Cum p s fisc prev.
     *
     * @var float
     */
    private $cumPSFiscPrev;

    /**
     * Cum p s fisc ret.
     *
     * @var float
     */
    private $cumPSFiscRet;

    /**
     * Cum s m i c m.
     *
     * @var float
     */
    private $cumSMICM;

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
     * @var DateTime
     */
    private $dateAncienBranche;

    /**
     * Date ancien college.
     *
     * @var DateTime
     */
    private $dateAncienCollege;

    /**
     * Date ancien poste.
     *
     * @var DateTime
     */
    private $dateAncienPoste;

    /**
     * Date debut chom c d d.
     *
     * @var DateTime
     */
    private $dateDebutChomCDD;

    /**
     * Date debut contrat.
     *
     * @var DateTime
     */
    private $dateDebutContrat;

    /**
     * Date envoi mail.
     *
     * @var DateTime
     */
    private $dateEnvoiMail;

    /**
     * Date fin chom c d d.
     *
     * @var DateTime
     */
    private $dateFinChomCDD;

    /**
     * Date fin contrat.
     *
     * @var DateTime
     */
    private $dateFinContrat;

    /**
     * Date fin prev.
     *
     * @var DateTime
     */
    private $dateFinPrev;

    /**
     * Date rachat.
     *
     * @var DateTime
     */
    private $dateRachat;

    /**
     * Date renouv c d d.
     *
     * @var DateTime
     */
    private $dateRenouvCDD;

    /**
     * Date renouv c d d2.
     *
     * @var DateTime
     */
    private $dateRenouvCDD2;

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
     * Exclure c i c e.
     *
     * @var bool
     */
    private $exclureCICE;

    /**
     * Exclure chom c d d.
     *
     * @var bool
     */
    private $exclureChomCDD;

    /**
     * Exclure cospar.
     *
     * @var bool
     */
    private $exclureCospar;

    /**
     * Exclure d s n.
     *
     * @var bool
     */
    private $exclureDSN;

    /**
     * Exclure loi t e p a.
     *
     * @var bool
     */
    private $exclureLoiTEPA;

    /**
     * Exclure loi t e p a part p.
     *
     * @var bool
     */
    private $exclureLoiTEPAPartP;

    /**
     * Exclure loi t e p a part s.
     *
     * @var bool
     */
    private $exclureLoiTEPAPartS;

    /**
     * Exclure q g c.
     *
     * @var bool
     */
    private $exclureQGC;

    /**
     * Exo a c c r e17.
     *
     * @var bool
     */
    private $exoACCRE17;

    /**
     * Exo occasionnel m s a.
     *
     * @var bool
     */
    private $exoOccasionnelMSA;

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
     * Gestion c p.
     *
     * @var bool
     */
    private $gestionCP;

    /**
     * Gestion h s t e p a.
     *
     * @var string
     */
    private $gestionHSTEPA;

    /**
     * Gestion mail bulletin.
     *
     * @var bool
     */
    private $gestionMailBulletin;

    /**
     * Gestion r t t.
     *
     * @var bool
     */
    private $gestionRTT;

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
     * I d lieu travail.
     *
     * @var string
     */
    private $iDLieuTravail;

    /**
     * Indem cp m s a.
     *
     * @var bool
     */
    private $indemCpMSA;

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
     * Motif c d d.
     *
     * @var string
     */
    private $motifCDD;

    /**
     * Motif exclusion d s n.
     *
     * @var string
     */
    private $motifExclusionDSN;

    /**
     * Mt abs act part.
     *
     * @var float
     */
    private $mtAbsActPart;

    /**
     * Mt c r d s100.
     *
     * @var float
     */
    private $mtCRDS100;

    /**
     * Mt c s g100.
     *
     * @var float
     */
    private $mtCSG100;

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
     * Mt i a p.
     *
     * @var float
     */
    private $mtIAP;

    /**
     * Mt journee c p n.
     *
     * @var float
     */
    private $mtJourneeCPN;

    /**
     * Mt journee c p n_1.
     *
     * @var float
     */
    private $mtJourneeCPN_1;

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
     * Nb30 renouv c d d.
     *
     * @var int
     */
    private $nb30RenouvCDD;

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
     * Nb jour c p acquis.
     *
     * @var float
     */
    private $nbJourCPAcquis;

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
     * Numero abattement contrat m s a.
     *
     * @var int
     */
    private $numeroAbattementContratMSA;

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
     * P s s1 force.
     *
     * @var bool
     */
    private $pSS1Force;

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
     * Pas gestion d i f.
     *
     * @var bool
     */
    private $pasGestionDIF;

    /**
     * Periode.
     *
     * @var DateTime
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
     * @var DateTime
     */
    private $premDateEntree;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * R t t1.
     *
     * @var float
     */
    private $rTT1;

    /**
     * R t t10.
     *
     * @var float
     */
    private $rTT10;

    /**
     * R t t11.
     *
     * @var float
     */
    private $rTT11;

    /**
     * R t t12.
     *
     * @var float
     */
    private $rTT12;

    /**
     * R t t2.
     *
     * @var float
     */
    private $rTT2;

    /**
     * R t t3.
     *
     * @var float
     */
    private $rTT3;

    /**
     * R t t4.
     *
     * @var float
     */
    private $rTT4;

    /**
     * R t t5.
     *
     * @var float
     */
    private $rTT5;

    /**
     * R t t6.
     *
     * @var float
     */
    private $rTT6;

    /**
     * R t t7.
     *
     * @var float
     */
    private $rTT7;

    /**
     * R t t8.
     *
     * @var float
     */
    private $rTT8;

    /**
     * R t t9.
     *
     * @var float
     */
    private $rTT9;

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
     * S e t p fillon.
     *
     * @var float
     */
    private $sETPFillon;

    /**
     * S m i c m a f.
     *
     * @var float
     */
    private $sMICMAF;

    /**
     * S m i c m c i c e.
     *
     * @var float
     */
    private $sMICMCICE;

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
     * Salaire retabli d s n.
     *
     * @var float
     */
    private $salaireRetabliDSN;

    /**
     * Salaire retabli d s n force.
     *
     * @var bool
     */
    private $salaireRetabliDSNForce;

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
     * Signe a f.
     *
     * @var string
     */
    private $signeAF;

    /**
     * Siret lieu trav.
     *
     * @var string
     */
    private $siretLieuTrav;

    /**
     * Smic m fillon sans h s.
     *
     * @var float
     */
    private $smicMFillonSansHS;

    /**
     * Subrogation.
     *
     * @var bool
     */
    private $subrogation;

    /**
     * T d s59.
     *
     * @var string
     */
    private $tDS59;

    /**
     * T d s76.
     *
     * @var string
     */
    private $tDS76;

    /**
     * T e p a moins20.
     *
     * @var bool
     */
    private $tEPAMoins20;

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
     * Type chom c d d.
     *
     * @var string
     */
    private $typeChomCDD;

    /**
     * Type contrat.
     *
     * @var string
     */
    private $typeContrat;

    /**
     * Type exo l o d e o m.
     *
     * @var string
     */
    private $typeExoLODEOM;

    /**
     * Type h e fillon.
     *
     * @var string
     */
    private $typeHEFillon;

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
     * Get the a e n logement.
     *
     * @return bool Returns the a e n logement.
     */
    public function getAENLogement() {
        return $this->aENLogement;
    }

    /**
     * Get the active s m i c.
     *
     * @return bool Returns the active s m i c.
     */
    public function getActiveSMIC() {
        return $this->activeSMIC;
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
     * Get the assiette a f.
     *
     * @return float Returns the assiette a f.
     */
    public function getAssietteAF() {
        return $this->assietteAF;
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
     * Get the b t q.
     *
     * @return string Returns the b t q.
     */
    public function getBTQ() {
        return $this->bTQ;
    }

    /**
     * Get the brutal sans h sup.
     *
     * @return float Returns the brutal sans h sup.
     */
    public function getBrutalSansHSup() {
        return $this->brutalSansHSup;
    }

    /**
     * Get the brutal sans h sup majo h e.
     *
     * @return float Returns the brutal sans h sup majo h e.
     */
    public function getBrutalSansHSupMajoHE() {
        return $this->brutalSansHSupMajoHE;
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
     * Get the c d d c d i.
     *
     * @return bool Returns the c d d c d i.
     */
    public function getCDDCDI() {
        return $this->cDDCDI;
    }

    /**
     * Get the caisse c p.
     *
     * @return bool Returns the caisse c p.
     */
    public function getCaisseCP() {
        return $this->caisseCP;
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
     * Get the code caisse c p.
     *
     * @return string Returns the code caisse c p.
     */
    public function getCodeCaisseCP() {
        return $this->codeCaisseCP;
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
     * Get the code class b t p.
     *
     * @return string Returns the code class b t p.
     */
    public function getCodeClassBTP() {
        return $this->codeClassBTP;
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
     * Get the code metier b t p.
     *
     * @return string Returns the code metier b t p.
     */
    public function getCodeMetierBTP() {
        return $this->codeMetierBTP;
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
     * Get the code regime a t.
     *
     * @return string Returns the code regime a t.
     */
    public function getCodeRegimeAT() {
        return $this->codeRegimeAT;
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
     * Get the complement p c s.
     *
     * @return string Returns the complement p c s.
     */
    public function getComplementPCS() {
        return $this->complementPCS;
    }

    /**
     * Get the contrat c n e.
     *
     * @return bool Returns the contrat c n e.
     */
    public function getContratCNE() {
        return $this->contratCNE;
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
     * Get the cum p p fisc prev.
     *
     * @return float Returns the cum p p fisc prev.
     */
    public function getCumPPFiscPrev() {
        return $this->cumPPFiscPrev;
    }

    /**
     * Get the cum p p fisc ret.
     *
     * @return float Returns the cum p p fisc ret.
     */
    public function getCumPPFiscRet() {
        return $this->cumPPFiscRet;
    }

    /**
     * Get the cum p s fisc prev.
     *
     * @return float Returns the cum p s fisc prev.
     */
    public function getCumPSFiscPrev() {
        return $this->cumPSFiscPrev;
    }

    /**
     * Get the cum p s fisc ret.
     *
     * @return float Returns the cum p s fisc ret.
     */
    public function getCumPSFiscRet() {
        return $this->cumPSFiscRet;
    }

    /**
     * Get the cum s m i c m.
     *
     * @return float Returns the cum s m i c m.
     */
    public function getCumSMICM() {
        return $this->cumSMICM;
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
     * @return DateTime Returns the date ancien branche.
     */
    public function getDateAncienBranche() {
        return $this->dateAncienBranche;
    }

    /**
     * Get the date ancien college.
     *
     * @return DateTime Returns the date ancien college.
     */
    public function getDateAncienCollege() {
        return $this->dateAncienCollege;
    }

    /**
     * Get the date ancien poste.
     *
     * @return DateTime Returns the date ancien poste.
     */
    public function getDateAncienPoste() {
        return $this->dateAncienPoste;
    }

    /**
     * Get the date debut chom c d d.
     *
     * @return DateTime Returns the date debut chom c d d.
     */
    public function getDateDebutChomCDD() {
        return $this->dateDebutChomCDD;
    }

    /**
     * Get the date debut contrat.
     *
     * @return DateTime Returns the date debut contrat.
     */
    public function getDateDebutContrat() {
        return $this->dateDebutContrat;
    }

    /**
     * Get the date envoi mail.
     *
     * @return DateTime Returns the date envoi mail.
     */
    public function getDateEnvoiMail() {
        return $this->dateEnvoiMail;
    }

    /**
     * Get the date fin chom c d d.
     *
     * @return DateTime Returns the date fin chom c d d.
     */
    public function getDateFinChomCDD() {
        return $this->dateFinChomCDD;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime Returns the date fin contrat.
     */
    public function getDateFinContrat() {
        return $this->dateFinContrat;
    }

    /**
     * Get the date fin prev.
     *
     * @return DateTime Returns the date fin prev.
     */
    public function getDateFinPrev() {
        return $this->dateFinPrev;
    }

    /**
     * Get the date rachat.
     *
     * @return DateTime Returns the date rachat.
     */
    public function getDateRachat() {
        return $this->dateRachat;
    }

    /**
     * Get the date renouv c d d.
     *
     * @return DateTime Returns the date renouv c d d.
     */
    public function getDateRenouvCDD() {
        return $this->dateRenouvCDD;
    }

    /**
     * Get the date renouv c d d2.
     *
     * @return DateTime Returns the date renouv c d d2.
     */
    public function getDateRenouvCDD2() {
        return $this->dateRenouvCDD2;
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
     * Get the exclure c i c e.
     *
     * @return bool Returns the exclure c i c e.
     */
    public function getExclureCICE() {
        return $this->exclureCICE;
    }

    /**
     * Get the exclure chom c d d.
     *
     * @return bool Returns the exclure chom c d d.
     */
    public function getExclureChomCDD() {
        return $this->exclureChomCDD;
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
     * Get the exclure d s n.
     *
     * @return bool Returns the exclure d s n.
     */
    public function getExclureDSN() {
        return $this->exclureDSN;
    }

    /**
     * Get the exclure loi t e p a.
     *
     * @return bool Returns the exclure loi t e p a.
     */
    public function getExclureLoiTEPA() {
        return $this->exclureLoiTEPA;
    }

    /**
     * Get the exclure loi t e p a part p.
     *
     * @return bool Returns the exclure loi t e p a part p.
     */
    public function getExclureLoiTEPAPartP() {
        return $this->exclureLoiTEPAPartP;
    }

    /**
     * Get the exclure loi t e p a part s.
     *
     * @return bool Returns the exclure loi t e p a part s.
     */
    public function getExclureLoiTEPAPartS() {
        return $this->exclureLoiTEPAPartS;
    }

    /**
     * Get the exclure q g c.
     *
     * @return bool Returns the exclure q g c.
     */
    public function getExclureQGC() {
        return $this->exclureQGC;
    }

    /**
     * Get the exo a c c r e17.
     *
     * @return bool Returns the exo a c c r e17.
     */
    public function getExoACCRE17() {
        return $this->exoACCRE17;
    }

    /**
     * Get the exo occasionnel m s a.
     *
     * @return bool Returns the exo occasionnel m s a.
     */
    public function getExoOccasionnelMSA() {
        return $this->exoOccasionnelMSA;
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
     * Get the gestion c p.
     *
     * @return bool Returns the gestion c p.
     */
    public function getGestionCP() {
        return $this->gestionCP;
    }

    /**
     * Get the gestion h s t e p a.
     *
     * @return string Returns the gestion h s t e p a.
     */
    public function getGestionHSTEPA() {
        return $this->gestionHSTEPA;
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
     * Get the gestion r t t.
     *
     * @return bool Returns the gestion r t t.
     */
    public function getGestionRTT() {
        return $this->gestionRTT;
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
     * Get the i d lieu travail.
     *
     * @return string Returns the i d lieu travail.
     */
    public function getIDLieuTravail() {
        return $this->iDLieuTravail;
    }

    /**
     * Get the indem cp m s a.
     *
     * @return bool Returns the indem cp m s a.
     */
    public function getIndemCpMSA() {
        return $this->indemCpMSA;
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
     * Get the motif c d d.
     *
     * @return string Returns the motif c d d.
     */
    public function getMotifCDD() {
        return $this->motifCDD;
    }

    /**
     * Get the motif exclusion d s n.
     *
     * @return string Returns the motif exclusion d s n.
     */
    public function getMotifExclusionDSN() {
        return $this->motifExclusionDSN;
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
     * Get the mt c r d s100.
     *
     * @return float Returns the mt c r d s100.
     */
    public function getMtCRDS100() {
        return $this->mtCRDS100;
    }

    /**
     * Get the mt c s g100.
     *
     * @return float Returns the mt c s g100.
     */
    public function getMtCSG100() {
        return $this->mtCSG100;
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
     * Get the mt i a p.
     *
     * @return float Returns the mt i a p.
     */
    public function getMtIAP() {
        return $this->mtIAP;
    }

    /**
     * Get the mt journee c p n.
     *
     * @return float Returns the mt journee c p n.
     */
    public function getMtJourneeCPN() {
        return $this->mtJourneeCPN;
    }

    /**
     * Get the mt journee c p n_1.
     *
     * @return float Returns the mt journee c p n_1.
     */
    public function getMtJourneeCPN_1() {
        return $this->mtJourneeCPN_1;
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
     * Get the nb30 renouv c d d.
     *
     * @return int Returns the nb30 renouv c d d.
     */
    public function getNb30RenouvCDD() {
        return $this->nb30RenouvCDD;
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
     * Get the nb jour c p acquis.
     *
     * @return float Returns the nb jour c p acquis.
     */
    public function getNbJourCPAcquis() {
        return $this->nbJourCPAcquis;
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
     * Get the numero abattement contrat m s a.
     *
     * @return int Returns the numero abattement contrat m s a.
     */
    public function getNumeroAbattementContratMSA() {
        return $this->numeroAbattementContratMSA;
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
     * Get the p s s1 force.
     *
     * @return bool Returns the p s s1 force.
     */
    public function getPSS1Force() {
        return $this->pSS1Force;
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
     * Get the pas gestion d i f.
     *
     * @return bool Returns the pas gestion d i f.
     */
    public function getPasGestionDIF() {
        return $this->pasGestionDIF;
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
     * @return DateTime Returns the prem date entree.
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
     * Get the qualification.
     *
     * @return string Returns the qualification.
     */
    public function getQualification() {
        return $this->qualification;
    }

    /**
     * Get the r t t1.
     *
     * @return float Returns the r t t1.
     */
    public function getRTT1() {
        return $this->rTT1;
    }

    /**
     * Get the r t t10.
     *
     * @return float Returns the r t t10.
     */
    public function getRTT10() {
        return $this->rTT10;
    }

    /**
     * Get the r t t11.
     *
     * @return float Returns the r t t11.
     */
    public function getRTT11() {
        return $this->rTT11;
    }

    /**
     * Get the r t t12.
     *
     * @return float Returns the r t t12.
     */
    public function getRTT12() {
        return $this->rTT12;
    }

    /**
     * Get the r t t2.
     *
     * @return float Returns the r t t2.
     */
    public function getRTT2() {
        return $this->rTT2;
    }

    /**
     * Get the r t t3.
     *
     * @return float Returns the r t t3.
     */
    public function getRTT3() {
        return $this->rTT3;
    }

    /**
     * Get the r t t4.
     *
     * @return float Returns the r t t4.
     */
    public function getRTT4() {
        return $this->rTT4;
    }

    /**
     * Get the r t t5.
     *
     * @return float Returns the r t t5.
     */
    public function getRTT5() {
        return $this->rTT5;
    }

    /**
     * Get the r t t6.
     *
     * @return float Returns the r t t6.
     */
    public function getRTT6() {
        return $this->rTT6;
    }

    /**
     * Get the r t t7.
     *
     * @return float Returns the r t t7.
     */
    public function getRTT7() {
        return $this->rTT7;
    }

    /**
     * Get the r t t8.
     *
     * @return float Returns the r t t8.
     */
    public function getRTT8() {
        return $this->rTT8;
    }

    /**
     * Get the r t t9.
     *
     * @return float Returns the r t t9.
     */
    public function getRTT9() {
        return $this->rTT9;
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
     * Get the s e t p fillon.
     *
     * @return float Returns the s e t p fillon.
     */
    public function getSETPFillon() {
        return $this->sETPFillon;
    }

    /**
     * Get the s m i c m a f.
     *
     * @return float Returns the s m i c m a f.
     */
    public function getSMICMAF() {
        return $this->sMICMAF;
    }

    /**
     * Get the s m i c m c i c e.
     *
     * @return float Returns the s m i c m c i c e.
     */
    public function getSMICMCICE() {
        return $this->sMICMCICE;
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
     * Get the salaire retabli d s n.
     *
     * @return float Returns the salaire retabli d s n.
     */
    public function getSalaireRetabliDSN() {
        return $this->salaireRetabliDSN;
    }

    /**
     * Get the salaire retabli d s n force.
     *
     * @return bool Returns the salaire retabli d s n force.
     */
    public function getSalaireRetabliDSNForce() {
        return $this->salaireRetabliDSNForce;
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
     * Get the signe a f.
     *
     * @return string Returns the signe a f.
     */
    public function getSigneAF() {
        return $this->signeAF;
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
     * Get the smic m fillon sans h s.
     *
     * @return float Returns the smic m fillon sans h s.
     */
    public function getSmicMFillonSansHS() {
        return $this->smicMFillonSansHS;
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
     * Get the t d s59.
     *
     * @return string Returns the t d s59.
     */
    public function getTDS59() {
        return $this->tDS59;
    }

    /**
     * Get the t d s76.
     *
     * @return string Returns the t d s76.
     */
    public function getTDS76() {
        return $this->tDS76;
    }

    /**
     * Get the t e p a moins20.
     *
     * @return bool Returns the t e p a moins20.
     */
    public function getTEPAMoins20() {
        return $this->tEPAMoins20;
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
     * Get the type chom c d d.
     *
     * @return string Returns the type chom c d d.
     */
    public function getTypeChomCDD() {
        return $this->typeChomCDD;
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
     * Get the type exo l o d e o m.
     *
     * @return string Returns the type exo l o d e o m.
     */
    public function getTypeExoLODEOM() {
        return $this->typeExoLODEOM;
    }

    /**
     * Get the type h e fillon.
     *
     * @return string Returns the type h e fillon.
     */
    public function getTypeHEFillon() {
        return $this->typeHEFillon;
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
     * Set the a e n logement.
     *
     * @param bool $aENLogement The a e n logement.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setAENLogement($aENLogement) {
        $this->aENLogement = $aENLogement;
        return $this;
    }

    /**
     * Set the active s m i c.
     *
     * @param bool $activeSMIC The active s m i c.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setActiveSMIC($activeSMIC) {
        $this->activeSMIC = $activeSMIC;
        return $this;
    }

    /**
     * Set the active sal min conv.
     *
     * @param bool $activeSalMinConv The active sal min conv.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setActiveSalMinConv($activeSalMinConv) {
        $this->activeSalMinConv = $activeSalMinConv;
        return $this;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string $allegParticulierEmp The alleg particulier emp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setAllegParticulierEmp($allegParticulierEmp) {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool $annexe7Mutation The annexe7 mutation.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setAnnexe7Mutation($annexe7Mutation) {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string $arbitrageAuto The arbitrage auto.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setArbitrageAuto($arbitrageAuto) {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the assiette a f.
     *
     * @param float $assietteAF The assiette a f.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setAssietteAF($assietteAF) {
        $this->assietteAF = $assietteAF;
        return $this;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string $autreAllegEmp The autre alleg emp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setAutreAllegEmp($autreAllegEmp) {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }

    /**
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the brutal sans h sup.
     *
     * @param float $brutalSansHSup The brutal sans h sup.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setBrutalSansHSup($brutalSansHSup) {
        $this->brutalSansHSup = $brutalSansHSup;
        return $this;
    }

    /**
     * Set the brutal sans h sup majo h e.
     *
     * @param float $brutalSansHSupMajoHE The brutal sans h sup majo h e.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setBrutalSansHSupMajoHE($brutalSansHSupMajoHE) {
        $this->brutalSansHSupMajoHE = $brutalSansHSupMajoHE;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the c d d c d i.
     *
     * @param bool $cDDCDI The c d d c d i.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCDDCDI($cDDCDI) {
        $this->cDDCDI = $cDDCDI;
        return $this;
    }

    /**
     * Set the caisse c p.
     *
     * @param bool $caisseCP The caisse c p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCaisseCP($caisseCP) {
        $this->caisseCP = $caisseCP;
        return $this;
    }

    /**
     * Set the categ population.
     *
     * @param string $categPopulation The categ population.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCategPopulation($categPopulation) {
        $this->categPopulation = $categPopulation;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string $categSalarie The categ salarie.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the classification.
     *
     * @param string $classification The classification.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setClassification($classification) {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Set the code caisse c p.
     *
     * @param string $codeCaisseCP The code caisse c p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeCaisseCP($codeCaisseCP) {
        $this->codeCaisseCP = $codeCaisseCP;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string $codeCategSalPourcentAbat The code categ sal pourcent abat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeCategSalPourcentAbat($codeCategSalPourcentAbat) {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }

    /**
     * Set the code class b t p.
     *
     * @param string $codeClassBTP The code class b t p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeClassBTP($codeClassBTP) {
        $this->codeClassBTP = $codeClassBTP;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string $codeEmpRemplace The code emp remplace.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeEmpRemplace($codeEmpRemplace) {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }

    /**
     * Set the code exo trav.
     *
     * @param string $codeExoTrav The code exo trav.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeExoTrav($codeExoTrav) {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string $codeIntitContratTrav The code intit contrat trav.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeIntitContratTrav($codeIntitContratTrav) {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }

    /**
     * Set the code metier b t p.
     *
     * @param string $codeMetierBTP The code metier b t p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeMetierBTP($codeMetierBTP) {
        $this->codeMetierBTP = $codeMetierBTP;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regime a t.
     *
     * @param string $codeRegimeAT The code regime a t.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeRegimeAT($codeRegimeAT) {
        $this->codeRegimeAT = $codeRegimeAT;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string $codeRegimeVieillesse The code regime vieillesse.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeRegimeVieillesse($codeRegimeVieillesse) {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string $codeRetraiteComplementaire The code retraite complementaire.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeRetraiteComplementaire($codeRetraiteComplementaire) {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }

    /**
     * Set the code situ admin.
     *
     * @param string $codeSituAdmin The code situ admin.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeSituAdmin($codeSituAdmin) {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string $codeStatutCateg The code statut categ.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeStatutCateg($codeStatutCateg) {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ retraite.
     *
     * @param string $codeStatutCategRetraite The code statut categ retraite.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeStatutCategRetraite($codeStatutCategRetraite) {
        $this->codeStatutCategRetraite = $codeStatutCategRetraite;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code tuteur.
     *
     * @param string $codeTuteur The code tuteur.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeTuteur($codeTuteur) {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string $codeUniteTempsTravail The code unite temps travail.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCodeUniteTempsTravail($codeUniteTempsTravail) {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }

    /**
     * Set the coeff convention.
     *
     * @param string $coeffConvention The coeff convention.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCoeffConvention($coeffConvention) {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }

    /**
     * Set the coeff fillon moins20.
     *
     * @param bool $coeffFillonMoins20 The coeff fillon moins20.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCoeffFillonMoins20($coeffFillonMoins20) {
        $this->coeffFillonMoins20 = $coeffFillonMoins20;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement p c s.
     *
     * @param string $complementPCS The complement p c s.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setComplementPCS($complementPCS) {
        $this->complementPCS = $complementPCS;
        return $this;
    }

    /**
     * Set the contrat c n e.
     *
     * @param bool $contratCNE The contrat c n e.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setContratCNE($contratCNE) {
        $this->contratCNE = $contratCNE;
        return $this;
    }

    /**
     * Set the cum base prevoyance comp.
     *
     * @param float $cumBasePrevoyanceComp The cum base prevoyance comp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumBasePrevoyanceComp($cumBasePrevoyanceComp) {
        $this->cumBasePrevoyanceComp = $cumBasePrevoyanceComp;
        return $this;
    }

    /**
     * Set the cum base retraite obli.
     *
     * @param float $cumBaseRetraiteObli The cum base retraite obli.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumBaseRetraiteObli($cumBaseRetraiteObli) {
        $this->cumBaseRetraiteObli = $cumBaseRetraiteObli;
        return $this;
    }

    /**
     * Set the cum base retraite supp.
     *
     * @param float $cumBaseRetraiteSupp The cum base retraite supp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumBaseRetraiteSupp($cumBaseRetraiteSupp) {
        $this->cumBaseRetraiteSupp = $cumBaseRetraiteSupp;
        return $this;
    }

    /**
     * Set the cum mt forfait social20.
     *
     * @param float $cumMtForfaitSocial20 The cum mt forfait social20.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumMtForfaitSocial20($cumMtForfaitSocial20) {
        $this->cumMtForfaitSocial20 = $cumMtForfaitSocial20;
        return $this;
    }

    /**
     * Set the cum mt forfait social8.
     *
     * @param float $cumMtForfaitSocial8 The cum mt forfait social8.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumMtForfaitSocial8($cumMtForfaitSocial8) {
        $this->cumMtForfaitSocial8 = $cumMtForfaitSocial8;
        return $this;
    }

    /**
     * Set the cum p p fisc prev.
     *
     * @param float $cumPPFiscPrev The cum p p fisc prev.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumPPFiscPrev($cumPPFiscPrev) {
        $this->cumPPFiscPrev = $cumPPFiscPrev;
        return $this;
    }

    /**
     * Set the cum p p fisc ret.
     *
     * @param float $cumPPFiscRet The cum p p fisc ret.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumPPFiscRet($cumPPFiscRet) {
        $this->cumPPFiscRet = $cumPPFiscRet;
        return $this;
    }

    /**
     * Set the cum p s fisc prev.
     *
     * @param float $cumPSFiscPrev The cum p s fisc prev.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumPSFiscPrev($cumPSFiscPrev) {
        $this->cumPSFiscPrev = $cumPSFiscPrev;
        return $this;
    }

    /**
     * Set the cum p s fisc ret.
     *
     * @param float $cumPSFiscRet The cum p s fisc ret.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumPSFiscRet($cumPSFiscRet) {
        $this->cumPSFiscRet = $cumPSFiscRet;
        return $this;
    }

    /**
     * Set the cum s m i c m.
     *
     * @param float $cumSMICM The cum s m i c m.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumSMICM($cumSMICM) {
        $this->cumSMICM = $cumSMICM;
        return $this;
    }

    /**
     * Set the cum tr d1 caisse1.
     *
     * @param float $cumTrD1Caisse1 The cum tr d1 caisse1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrD1Caisse1($cumTrD1Caisse1) {
        $this->cumTrD1Caisse1 = $cumTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum tr d1caisse2.
     *
     * @param float $cumTrD1caisse2 The cum tr d1caisse2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrD1caisse2($cumTrD1caisse2) {
        $this->cumTrD1caisse2 = $cumTrD1caisse2;
        return $this;
    }

    /**
     * Set the cum tr d1caisse3.
     *
     * @param float $cumTrD1caisse3 The cum tr d1caisse3.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrD1caisse3($cumTrD1caisse3) {
        $this->cumTrD1caisse3 = $cumTrD1caisse3;
        return $this;
    }

    /**
     * Set the cum tr d caisse1.
     *
     * @param float $cumTrDCaisse1 The cum tr d caisse1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrDCaisse1($cumTrDCaisse1) {
        $this->cumTrDCaisse1 = $cumTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum tr dcaisse2.
     *
     * @param float $cumTrDcaisse2 The cum tr dcaisse2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrDcaisse2($cumTrDcaisse2) {
        $this->cumTrDcaisse2 = $cumTrDcaisse2;
        return $this;
    }

    /**
     * Set the cum tr dcaisse3.
     *
     * @param float $cumTrDcaisse3 The cum tr dcaisse3.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrDcaisse3($cumTrDcaisse3) {
        $this->cumTrDcaisse3 = $cumTrDcaisse3;
        return $this;
    }

    /**
     * Set the cum tranche d.
     *
     * @param float $cumTrancheD The cum tranche d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrancheD($cumTrancheD) {
        $this->cumTrancheD = $cumTrancheD;
        return $this;
    }

    /**
     * Set the cum tranche d1.
     *
     * @param float $cumTrancheD1 The cum tranche d1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setCumTrancheD1($cumTrancheD1) {
        $this->cumTrancheD1 = $cumTrancheD1;
        return $this;
    }

    /**
     * Set the date ancien branche.
     *
     * @param DateTime $dateAncienBranche The date ancien branche.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateAncienBranche(DateTime $dateAncienBranche = null) {
        $this->dateAncienBranche = $dateAncienBranche;
        return $this;
    }

    /**
     * Set the date ancien college.
     *
     * @param DateTime $dateAncienCollege The date ancien college.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateAncienCollege(DateTime $dateAncienCollege = null) {
        $this->dateAncienCollege = $dateAncienCollege;
        return $this;
    }

    /**
     * Set the date ancien poste.
     *
     * @param DateTime $dateAncienPoste The date ancien poste.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateAncienPoste(DateTime $dateAncienPoste = null) {
        $this->dateAncienPoste = $dateAncienPoste;
        return $this;
    }

    /**
     * Set the date debut chom c d d.
     *
     * @param DateTime $dateDebutChomCDD The date debut chom c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateDebutChomCDD(DateTime $dateDebutChomCDD = null) {
        $this->dateDebutChomCDD = $dateDebutChomCDD;
        return $this;
    }

    /**
     * Set the date debut contrat.
     *
     * @param DateTime $dateDebutContrat The date debut contrat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateDebutContrat(DateTime $dateDebutContrat = null) {
        $this->dateDebutContrat = $dateDebutContrat;
        return $this;
    }

    /**
     * Set the date envoi mail.
     *
     * @param DateTime $dateEnvoiMail The date envoi mail.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateEnvoiMail(DateTime $dateEnvoiMail = null) {
        $this->dateEnvoiMail = $dateEnvoiMail;
        return $this;
    }

    /**
     * Set the date fin chom c d d.
     *
     * @param DateTime $dateFinChomCDD The date fin chom c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateFinChomCDD(DateTime $dateFinChomCDD = null) {
        $this->dateFinChomCDD = $dateFinChomCDD;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime $dateFinContrat The date fin contrat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateFinContrat(DateTime $dateFinContrat = null) {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date fin prev.
     *
     * @param DateTime $dateFinPrev The date fin prev.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateFinPrev(DateTime $dateFinPrev = null) {
        $this->dateFinPrev = $dateFinPrev;
        return $this;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime $dateRachat The date rachat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateRachat(DateTime $dateRachat = null) {
        $this->dateRachat = $dateRachat;
        return $this;
    }

    /**
     * Set the date renouv c d d.
     *
     * @param DateTime $dateRenouvCDD The date renouv c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateRenouvCDD(DateTime $dateRenouvCDD = null) {
        $this->dateRenouvCDD = $dateRenouvCDD;
        return $this;
    }

    /**
     * Set the date renouv c d d2.
     *
     * @param DateTime $dateRenouvCDD2 The date renouv c d d2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDateRenouvCDD2(DateTime $dateRenouvCDD2 = null) {
        $this->dateRenouvCDD2 = $dateRenouvCDD2;
        return $this;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string $detacheExpatrie The detache expatrie.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setDetacheExpatrie($detacheExpatrie) {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the echelon convention col.
     *
     * @param string $echelonConventionCol The echelon convention col.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setEchelonConventionCol($echelonConventionCol) {
        $this->echelonConventionCol = $echelonConventionCol;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string $etabLieuTravail The etab lieu travail.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setEtabLieuTravail($etabLieuTravail) {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }

    /**
     * Set the exclure c i c e.
     *
     * @param bool $exclureCICE The exclure c i c e.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureCICE($exclureCICE) {
        $this->exclureCICE = $exclureCICE;
        return $this;
    }

    /**
     * Set the exclure chom c d d.
     *
     * @param bool $exclureChomCDD The exclure chom c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureChomCDD($exclureChomCDD) {
        $this->exclureChomCDD = $exclureChomCDD;
        return $this;
    }

    /**
     * Set the exclure cospar.
     *
     * @param bool $exclureCospar The exclure cospar.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureCospar($exclureCospar) {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }

    /**
     * Set the exclure d s n.
     *
     * @param bool $exclureDSN The exclure d s n.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureDSN($exclureDSN) {
        $this->exclureDSN = $exclureDSN;
        return $this;
    }

    /**
     * Set the exclure loi t e p a.
     *
     * @param bool $exclureLoiTEPA The exclure loi t e p a.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureLoiTEPA($exclureLoiTEPA) {
        $this->exclureLoiTEPA = $exclureLoiTEPA;
        return $this;
    }

    /**
     * Set the exclure loi t e p a part p.
     *
     * @param bool $exclureLoiTEPAPartP The exclure loi t e p a part p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureLoiTEPAPartP($exclureLoiTEPAPartP) {
        $this->exclureLoiTEPAPartP = $exclureLoiTEPAPartP;
        return $this;
    }

    /**
     * Set the exclure loi t e p a part s.
     *
     * @param bool $exclureLoiTEPAPartS The exclure loi t e p a part s.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureLoiTEPAPartS($exclureLoiTEPAPartS) {
        $this->exclureLoiTEPAPartS = $exclureLoiTEPAPartS;
        return $this;
    }

    /**
     * Set the exclure q g c.
     *
     * @param bool $exclureQGC The exclure q g c.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExclureQGC($exclureQGC) {
        $this->exclureQGC = $exclureQGC;
        return $this;
    }

    /**
     * Set the exo a c c r e17.
     *
     * @param bool $exoACCRE17 The exo a c c r e17.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExoACCRE17($exoACCRE17) {
        $this->exoACCRE17 = $exoACCRE17;
        return $this;
    }

    /**
     * Set the exo occasionnel m s a.
     *
     * @param bool $exoOccasionnelMSA The exo occasionnel m s a.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExoOccasionnelMSA($exoOccasionnelMSA) {
        $this->exoOccasionnelMSA = $exoOccasionnelMSA;
        return $this;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param bool $exoProfessionnalisation The exo professionnalisation.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExoProfessionnalisation($exoProfessionnalisation) {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }

    /**
     * Set the exo specif.
     *
     * @param bool $exoSpecif The exo specif.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setExoSpecif($exoSpecif) {
        $this->exoSpecif = $exoSpecif;
        return $this;
    }

    /**
     * Set the forfait heure.
     *
     * @param bool $forfaitHeure The forfait heure.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setForfaitHeure($forfaitHeure) {
        $this->forfaitHeure = $forfaitHeure;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the gestion c p.
     *
     * @param bool $gestionCP The gestion c p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGestionCP($gestionCP) {
        $this->gestionCP = $gestionCP;
        return $this;
    }

    /**
     * Set the gestion h s t e p a.
     *
     * @param string $gestionHSTEPA The gestion h s t e p a.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGestionHSTEPA($gestionHSTEPA) {
        $this->gestionHSTEPA = $gestionHSTEPA;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool $gestionMailBulletin The gestion mail bulletin.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGestionMailBulletin($gestionMailBulletin) {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the gestion r t t.
     *
     * @param bool $gestionRTT The gestion r t t.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGestionRTT($gestionRTT) {
        $this->gestionRTT = $gestionRTT;
        return $this;
    }

    /**
     * Set the grille anc1.
     *
     * @param string $grilleAnc1 The grille anc1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGrilleAnc1($grilleAnc1) {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }

    /**
     * Set the grille anc2.
     *
     * @param string $grilleAnc2 The grille anc2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGrilleAnc2($grilleAnc2) {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }

    /**
     * Set the grille anc3.
     *
     * @param string $grilleAnc3 The grille anc3.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setGrilleAnc3($grilleAnc3) {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }

    /**
     * Set the i d lieu travail.
     *
     * @param string $iDLieuTravail The i d lieu travail.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setIDLieuTravail($iDLieuTravail) {
        $this->iDLieuTravail = $iDLieuTravail;
        return $this;
    }

    /**
     * Set the indem cp m s a.
     *
     * @param bool $indemCpMSA The indem cp m s a.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setIndemCpMSA($indemCpMSA) {
        $this->indemCpMSA = $indemCpMSA;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the interim indem cp fillon.
     *
     * @param bool $interimIndemCpFillon The interim indem cp fillon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setInterimIndemCpFillon($interimIndemCpFillon) {
        $this->interimIndemCpFillon = $interimIndemCpFillon;
        return $this;
    }

    /**
     * Set the libelle reintegration.
     *
     * @param string $libelleReintegration The libelle reintegration.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setLibelleReintegration($libelleReintegration) {
        $this->libelleReintegration = $libelleReintegration;
        return $this;
    }

    /**
     * Set the lien reintegration.
     *
     * @param string $lienReintegration The lien reintegration.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setLienReintegration($lienReintegration) {
        $this->lienReintegration = $lienReintegration;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param bool $maintienIntervientCp The maintien intervient cp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMaintienIntervientCp($maintienIntervientCp) {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool $maintienSalaire The maintien salaire.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the montant avantage.
     *
     * @param float $montantAvantage The montant avantage.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMontantAvantage($montantAvantage) {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }

    /**
     * Set the motif c d d.
     *
     * @param string $motifCDD The motif c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMotifCDD($motifCDD) {
        $this->motifCDD = $motifCDD;
        return $this;
    }

    /**
     * Set the motif exclusion d s n.
     *
     * @param string $motifExclusionDSN The motif exclusion d s n.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMotifExclusionDSN($motifExclusionDSN) {
        $this->motifExclusionDSN = $motifExclusionDSN;
        return $this;
    }

    /**
     * Set the mt abs act part.
     *
     * @param float $mtAbsActPart The mt abs act part.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtAbsActPart($mtAbsActPart) {
        $this->mtAbsActPart = $mtAbsActPart;
        return $this;
    }

    /**
     * Set the mt c r d s100.
     *
     * @param float $mtCRDS100 The mt c r d s100.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtCRDS100($mtCRDS100) {
        $this->mtCRDS100 = $mtCRDS100;
        return $this;
    }

    /**
     * Set the mt c s g100.
     *
     * @param float $mtCSG100 The mt c s g100.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtCSG100($mtCSG100) {
        $this->mtCSG100 = $mtCSG100;
        return $this;
    }

    /**
     * Set the mt cotisation prev.
     *
     * @param float $mtCotisationPrev The mt cotisation prev.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtCotisationPrev($mtCotisationPrev) {
        $this->mtCotisationPrev = $mtCotisationPrev;
        return $this;
    }

    /**
     * Set the mt cotisation retraite.
     *
     * @param float $mtCotisationRetraite The mt cotisation retraite.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtCotisationRetraite($mtCotisationRetraite) {
        $this->mtCotisationRetraite = $mtCotisationRetraite;
        return $this;
    }

    /**
     * Set the mt fisc frais sante.
     *
     * @param float $mtFiscFraisSante The mt fisc frais sante.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtFiscFraisSante($mtFiscFraisSante) {
        $this->mtFiscFraisSante = $mtFiscFraisSante;
        return $this;
    }

    /**
     * Set the mt fisc prev.
     *
     * @param float $mtFiscPrev The mt fisc prev.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtFiscPrev($mtFiscPrev) {
        $this->mtFiscPrev = $mtFiscPrev;
        return $this;
    }

    /**
     * Set the mt fisc retraite.
     *
     * @param float $mtFiscRetraite The mt fisc retraite.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtFiscRetraite($mtFiscRetraite) {
        $this->mtFiscRetraite = $mtFiscRetraite;
        return $this;
    }

    /**
     * Set the mt forfait social20.
     *
     * @param float $mtForfaitSocial20 The mt forfait social20.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtForfaitSocial20($mtForfaitSocial20) {
        $this->mtForfaitSocial20 = $mtForfaitSocial20;
        return $this;
    }

    /**
     * Set the mt forfait social8.
     *
     * @param float $mtForfaitSocial8 The mt forfait social8.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtForfaitSocial8($mtForfaitSocial8) {
        $this->mtForfaitSocial8 = $mtForfaitSocial8;
        return $this;
    }

    /**
     * Set the mt i a p.
     *
     * @param float $mtIAP The mt i a p.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtIAP($mtIAP) {
        $this->mtIAP = $mtIAP;
        return $this;
    }

    /**
     * Set the mt journee c p n.
     *
     * @param float $mtJourneeCPN The mt journee c p n.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtJourneeCPN($mtJourneeCPN) {
        $this->mtJourneeCPN = $mtJourneeCPN;
        return $this;
    }

    /**
     * Set the mt journee c p n_1.
     *
     * @param float $mtJourneeCPN_1 The mt journee c p n_1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMtJourneeCPN_1($mtJourneeCPN_1) {
        $this->mtJourneeCPN_1 = $mtJourneeCPN_1;
        return $this;
    }

    /**
     * Set the multi employeur.
     *
     * @param bool $multiEmployeur The multi employeur.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setMultiEmployeur($multiEmployeur) {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb30 renouv c d d.
     *
     * @param int $nb30RenouvCDD The nb30 renouv c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNb30RenouvCDD($nb30RenouvCDD) {
        $this->nb30RenouvCDD = $nb30RenouvCDD;
        return $this;
    }

    /**
     * Set the nb h act part.
     *
     * @param float $nbHActPart The nb h act part.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbHActPart($nbHActPart) {
        $this->nbHActPart = $nbHActPart;
        return $this;
    }

    /**
     * Set the nb h act part indem.
     *
     * @param float $nbHActPartIndem The nb h act part indem.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbHActPartIndem($nbHActPartIndem) {
        $this->nbHActPartIndem = $nbHActPartIndem;
        return $this;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float $nbHBonifie The nb h bonifie.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbHBonifie($nbHBonifie) {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float $nbHContingent The nb h contingent.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbHContingent($nbHContingent) {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }

    /**
     * Set the nb h contract.
     *
     * @param float $nbHContract The nb h contract.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbHContract($nbHContract) {
        $this->nbHContract = $nbHContract;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float $nbJourAnnee The nb jour annee.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbJourAnnee($nbJourAnnee) {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }

    /**
     * Set the nb jour c p acquis.
     *
     * @param float $nbJourCPAcquis The nb jour c p acquis.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbJourCPAcquis($nbJourCPAcquis) {
        $this->nbJourCPAcquis = $nbJourCPAcquis;
        return $this;
    }

    /**
     * Set the nb jour cp sup.
     *
     * @param float $nbJourCpSup The nb jour cp sup.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbJourCpSup($nbJourCpSup) {
        $this->nbJourCpSup = $nbJourCpSup;
        return $this;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string $nbPieceLogement The nb piece logement.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNbPieceLogement($nbPieceLogement) {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the ne pas publier web.
     *
     * @param bool $nePasPublierWeb The ne pas publier web.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNePasPublierWeb($nePasPublierWeb) {
        $this->nePasPublierWeb = $nePasPublierWeb;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau convention col.
     *
     * @param string $niveauConventionCol The niveau convention col.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNiveauConventionCol($niveauConventionCol) {
        $this->niveauConventionCol = $niveauConventionCol;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int $numEvenement The num evenement.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumEvenement($numEvenement) {
        $this->numEvenement = $numEvenement;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string $numObjet The num objet.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumObjet($numObjet) {
        $this->numObjet = $numObjet;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero abattement contrat m s a.
     *
     * @param int $numeroAbattementContratMSA The numero abattement contrat m s a.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumeroAbattementContratMSA($numeroAbattementContratMSA) {
        $this->numeroAbattementContratMSA = $numeroAbattementContratMSA;
        return $this;
    }

    /**
     * Set the numero contrat.
     *
     * @param int $numeroContrat The numero contrat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumeroContrat($numeroContrat) {
        $this->numeroContrat = $numeroContrat;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the p s s1 force.
     *
     * @param bool $pSS1Force The p s s1 force.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPSS1Force($pSS1Force) {
        $this->pSS1Force = $pSS1Force;
        return $this;
    }

    /**
     * Set the part patron prev forfait social8.
     *
     * @param float $partPatronPrevForfaitSocial8 The part patron prev forfait social8.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPartPatronPrevForfaitSocial8($partPatronPrevForfaitSocial8) {
        $this->partPatronPrevForfaitSocial8 = $partPatronPrevForfaitSocial8;
        return $this;
    }

    /**
     * Set the pas de reintegration.
     *
     * @param bool $pasDeReintegration The pas de reintegration.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPasDeReintegration($pasDeReintegration) {
        $this->pasDeReintegration = $pasDeReintegration;
        return $this;
    }

    /**
     * Set the pas gestion d i f.
     *
     * @param bool $pasGestionDIF The pas gestion d i f.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPasGestionDIF($pasGestionDIF) {
        $this->pasGestionDIF = $pasGestionDIF;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the position convention col.
     *
     * @param string $positionConventionCol The position convention col.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPositionConventionCol($positionConventionCol) {
        $this->positionConventionCol = $positionConventionCol;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float $pourcentExo The pourcent exo.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPourcentExo($pourcentExo) {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the prem date entree.
     *
     * @param DateTime $premDateEntree The prem date entree.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPremDateEntree(DateTime $premDateEntree = null) {
        $this->premDateEntree = $premDateEntree;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the r t t1.
     *
     * @param float $rTT1 The r t t1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT1($rTT1) {
        $this->rTT1 = $rTT1;
        return $this;
    }

    /**
     * Set the r t t10.
     *
     * @param float $rTT10 The r t t10.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT10($rTT10) {
        $this->rTT10 = $rTT10;
        return $this;
    }

    /**
     * Set the r t t11.
     *
     * @param float $rTT11 The r t t11.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT11($rTT11) {
        $this->rTT11 = $rTT11;
        return $this;
    }

    /**
     * Set the r t t12.
     *
     * @param float $rTT12 The r t t12.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT12($rTT12) {
        $this->rTT12 = $rTT12;
        return $this;
    }

    /**
     * Set the r t t2.
     *
     * @param float $rTT2 The r t t2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT2($rTT2) {
        $this->rTT2 = $rTT2;
        return $this;
    }

    /**
     * Set the r t t3.
     *
     * @param float $rTT3 The r t t3.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT3($rTT3) {
        $this->rTT3 = $rTT3;
        return $this;
    }

    /**
     * Set the r t t4.
     *
     * @param float $rTT4 The r t t4.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT4($rTT4) {
        $this->rTT4 = $rTT4;
        return $this;
    }

    /**
     * Set the r t t5.
     *
     * @param float $rTT5 The r t t5.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT5($rTT5) {
        $this->rTT5 = $rTT5;
        return $this;
    }

    /**
     * Set the r t t6.
     *
     * @param float $rTT6 The r t t6.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT6($rTT6) {
        $this->rTT6 = $rTT6;
        return $this;
    }

    /**
     * Set the r t t7.
     *
     * @param float $rTT7 The r t t7.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT7($rTT7) {
        $this->rTT7 = $rTT7;
        return $this;
    }

    /**
     * Set the r t t8.
     *
     * @param float $rTT8 The r t t8.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT8($rTT8) {
        $this->rTT8 = $rTT8;
        return $this;
    }

    /**
     * Set the r t t9.
     *
     * @param float $rTT9 The r t t9.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRTT9($rTT9) {
        $this->rTT9 = $rTT9;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param bool $reductionFillon The reduction fillon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setReductionFillon($reductionFillon) {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the remun part fillon.
     *
     * @param bool $remunPartFillon The remun part fillon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setRemunPartFillon($remunPartFillon) {
        $this->remunPartFillon = $remunPartFillon;
        return $this;
    }

    /**
     * Set the s e t p fillon.
     *
     * @param float $sETPFillon The s e t p fillon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSETPFillon($sETPFillon) {
        $this->sETPFillon = $sETPFillon;
        return $this;
    }

    /**
     * Set the s m i c m a f.
     *
     * @param float $sMICMAF The s m i c m a f.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSMICMAF($sMICMAF) {
        $this->sMICMAF = $sMICMAF;
        return $this;
    }

    /**
     * Set the s m i c m c i c e.
     *
     * @param float $sMICMCICE The s m i c m c i c e.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSMICMCICE($sMICMCICE) {
        $this->sMICMCICE = $sMICMCICE;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the salaire reference.
     *
     * @param float $salaireReference The salaire reference.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSalaireReference($salaireReference) {
        $this->salaireReference = $salaireReference;
        return $this;
    }

    /**
     * Set the salaire retabli d s n.
     *
     * @param float $salaireRetabliDSN The salaire retabli d s n.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSalaireRetabliDSN($salaireRetabliDSN) {
        $this->salaireRetabliDSN = $salaireRetabliDSN;
        return $this;
    }

    /**
     * Set the salaire retabli d s n force.
     *
     * @param bool $salaireRetabliDSNForce The salaire retabli d s n force.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSalaireRetabliDSNForce($salaireRetabliDSNForce) {
        $this->salaireRetabliDSNForce = $salaireRetabliDSNForce;
        return $this;
    }

    /**
     * Set the sans contrat.
     *
     * @param int $sansContrat The sans contrat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSansContrat($sansContrat) {
        $this->sansContrat = $sansContrat;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the signe a f.
     *
     * @param string $signeAF The signe a f.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSigneAF($signeAF) {
        $this->signeAF = $signeAF;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }

    /**
     * Set the smic m fillon sans h s.
     *
     * @param float $smicMFillonSansHS The smic m fillon sans h s.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSmicMFillonSansHS($smicMFillonSansHS) {
        $this->smicMFillonSansHS = $smicMFillonSansHS;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param bool $subrogation The subrogation.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setSubrogation($subrogation) {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the t d s59.
     *
     * @param string $tDS59 The t d s59.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTDS59($tDS59) {
        $this->tDS59 = $tDS59;
        return $this;
    }

    /**
     * Set the t d s76.
     *
     * @param string $tDS76 The t d s76.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTDS76($tDS76) {
        $this->tDS76 = $tDS76;
        return $this;
    }

    /**
     * Set the t e p a moins20.
     *
     * @param bool $tEPAMoins20 The t e p a moins20.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTEPAMoins20($tEPAMoins20) {
        $this->tEPAMoins20 = $tEPAMoins20;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the tot cot urssaf.
     *
     * @param float $totCotUrssaf The tot cot urssaf.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTotCotUrssaf($totCotUrssaf) {
        $this->totCotUrssaf = $totCotUrssaf;
        return $this;
    }

    /**
     * Set the tr d1 caisse1.
     *
     * @param float $trD1Caisse1 The tr d1 caisse1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrD1Caisse1($trD1Caisse1) {
        $this->trD1Caisse1 = $trD1Caisse1;
        return $this;
    }

    /**
     * Set the tr d1caisse2.
     *
     * @param float $trD1caisse2 The tr d1caisse2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrD1caisse2($trD1caisse2) {
        $this->trD1caisse2 = $trD1caisse2;
        return $this;
    }

    /**
     * Set the tr d1caisse3.
     *
     * @param float $trD1caisse3 The tr d1caisse3.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrD1caisse3($trD1caisse3) {
        $this->trD1caisse3 = $trD1caisse3;
        return $this;
    }

    /**
     * Set the tr d caisse1.
     *
     * @param float $trDCaisse1 The tr d caisse1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrDCaisse1($trDCaisse1) {
        $this->trDCaisse1 = $trDCaisse1;
        return $this;
    }

    /**
     * Set the tr dcaisse2.
     *
     * @param float $trDcaisse2 The tr dcaisse2.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrDcaisse2($trDcaisse2) {
        $this->trDcaisse2 = $trDcaisse2;
        return $this;
    }

    /**
     * Set the tr dcaisse3.
     *
     * @param float $trDcaisse3 The tr dcaisse3.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrDcaisse3($trDcaisse3) {
        $this->trDcaisse3 = $trDcaisse3;
        return $this;
    }

    /**
     * Set the tranche d.
     *
     * @param float $trancheD The tranche d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrancheD($trancheD) {
        $this->trancheD = $trancheD;
        return $this;
    }

    /**
     * Set the tranche d1.
     *
     * @param float $trancheD1 The tranche d1.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTrancheD1($trancheD1) {
        $this->trancheD1 = $trancheD1;
        return $this;
    }

    /**
     * Set the type chom c d d.
     *
     * @param string $typeChomCDD The type chom c d d.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeChomCDD($typeChomCDD) {
        $this->typeChomCDD = $typeChomCDD;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string $typeContrat The type contrat.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type exo l o d e o m.
     *
     * @param string $typeExoLODEOM The type exo l o d e o m.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeExoLODEOM($typeExoLODEOM) {
        $this->typeExoLODEOM = $typeExoLODEOM;
        return $this;
    }

    /**
     * Set the type h e fillon.
     *
     * @param string $typeHEFillon The type h e fillon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeHEFillon($typeHEFillon) {
        $this->typeHEFillon = $typeHEFillon;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string $typeMaintienSalaire The type maintien salaire.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeMaintienSalaire($typeMaintienSalaire) {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type reduction fillon.
     *
     * @param string $typeReductionFillon The type reduction fillon.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeReductionFillon($typeReductionFillon) {
        $this->typeReductionFillon = $typeReductionFillon;
        return $this;
    }

    /**
     * Set the type reduction mayotte.
     *
     * @param string $typeReductionMayotte The type reduction mayotte.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeReductionMayotte($typeReductionMayotte) {
        $this->typeReductionMayotte = $typeReductionMayotte;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string $typeSaisieAbCp The type saisie ab cp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeSaisieAbCp($typeSaisieAbCp) {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the type saisie chom intemp.
     *
     * @param string $typeSaisieChomIntemp The type saisie chom intemp.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setTypeSaisieChomIntemp($typeSaisieChomIntemp) {
        $this->typeSaisieChomIntemp = $typeSaisieChomIntemp;
        return $this;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param bool $vrpMulticarte The vrp multicarte.
     * @return InfosComplBul Returns this infos compl bul.
     */
    public function setVrpMulticarte($vrpMulticarte) {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }
}
