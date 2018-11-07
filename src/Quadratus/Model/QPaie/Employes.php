<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Employes {

    /**
     * A transferer en p.
     *
     * @var boolean
     */
    private $aTransfererEnP;

    /**
     * Administratif.
     *
     * @var boolean
     */
    private $administratif;

    /**
     * Alleg particulier.
     *
     * @var boolean
     */
    private $allegParticulier;

    /**
     * Autre alleg.
     *
     * @var boolean
     */
    private $autreAlleg;

    /**
     * B t q.
     *
     * @var string
     */
    private $bTQ;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * C d d c d i.
     *
     * @var boolean
     */
    private $cDDCDI;

    /**
     * Calcul particip.
     *
     * @var boolean
     */
    private $calculParticip;

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime
     */
    private $carteSejourDelivreeLe;

    /**
     * Carte sejour expire le.
     *
     * @var DateTime
     */
    private $carteSejourExpireLe;

    /**
     * Carte travail delivree le.
     *
     * @var DateTime
     */
    private $carteTravailDelivreeLe;

    /**
     * Carte travail expire le.
     *
     * @var DateTime
     */
    private $carteTravailExpireLe;

    /**
     * Cas part s s.
     *
     * @var boolean
     */
    private $casPartSS;

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
     * Categorie permis.
     *
     * @var string
     */
    private $categoriePermis;

    /**
     * Classification.
     *
     * @var string
     */
    private $classification;

    /**
     * Cledeux.
     *
     * @var string
     */
    private $cledeux;

    /**
     * Code a t.
     *
     * @var int
     */
    private $codeAT;

    /**
     * Code centre urssaf.
     *
     * @var string
     */
    private $codeCentreUrssaf;

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code naf.
     *
     * @var int
     */
    private $codeNaf;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code pays naissance.
     *
     * @var string
     */
    private $codePaysNaissance;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code type sal.
     *
     * @var string
     */
    private $codeTypeSal;

    /**
     * Commune naissance.
     *
     * @var string
     */
    private $communeNaissance;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Compte tiers.
     *
     * @var string
     */
    private $compteTiers;

    /**
     * Cpt accompte.
     *
     * @var int
     */
    private $cptAccompte;

    /**
     * Ctrl taux sal base.
     *
     * @var boolean
     */
    private $ctrlTauxSalBase;

    /**
     * Cum30 s s.
     *
     * @var float
     */
    private $cum30SS;

    /**
     * Cum base csg.
     *
     * @var float
     */
    private $cumBaseCsg;

    /**
     * Cum base g m p.
     *
     * @var float
     */
    private $cumBaseGMP;

    /**
     * Cum base s s.
     *
     * @var float
     */
    private $cumBaseSS;

    /**
     * Cum base tr a.
     *
     * @var float
     */
    private $cumBaseTrA;

    /**
     * Cum base tr a caisse1.
     *
     * @var float
     */
    private $cumBaseTrACaisse1;

    /**
     * Cum base tr a caisse2.
     *
     * @var float
     */
    private $cumBaseTrACaisse2;

    /**
     * Cum base tr a caisse3.
     *
     * @var float
     */
    private $cumBaseTrACaisse3;

    /**
     * Cum base tr b.
     *
     * @var float
     */
    private $cumBaseTrB;

    /**
     * Cum base tr b caisse1.
     *
     * @var float
     */
    private $cumBaseTrBCaisse1;

    /**
     * Cum base tr b caisse2.
     *
     * @var float
     */
    private $cumBaseTrBCaisse2;

    /**
     * Cum base tr b caisse3.
     *
     * @var float
     */
    private $cumBaseTrBCaisse3;

    /**
     * Cum base tr c.
     *
     * @var float
     */
    private $cumBaseTrC;

    /**
     * Cum base tr c caisse1.
     *
     * @var float
     */
    private $cumBaseTrCCaisse1;

    /**
     * Cum base tr c caisse2.
     *
     * @var float
     */
    private $cumBaseTrCCaisse2;

    /**
     * Cum base tr c caisse3.
     *
     * @var float
     */
    private $cumBaseTrCCaisse3;

    /**
     * Cum brut abat non lim.
     *
     * @var float
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut non abattu.
     *
     * @var float
     */
    private $cumBrutNonAbattu;

    /**
     * Cum brutal.
     *
     * @var float
     */
    private $cumBrutal;

    /**
     * Cum cp dus.
     *
     * @var float
     */
    private $cumCpDus;

    /**
     * Cum cp dus_1.
     *
     * @var float
     */
    private $cumCpDus_1;

    /**
     * Cum cp pris.
     *
     * @var float
     */
    private $cumCpPris;

    /**
     * Cum cp pris_1.
     *
     * @var float
     */
    private $cumCpPris_1;

    /**
     * Cum h repos remplace.
     *
     * @var float
     */
    private $cumHReposRemplace;

    /**
     * Cum h service.
     *
     * @var float
     */
    private $cumHService;

    /**
     * Cum h sup.
     *
     * @var float
     */
    private $cumHSup;

    /**
     * Cum h sup r c i t.
     *
     * @var float
     */
    private $cumHSupRCIT;

    /**
     * Cum heure paye.
     *
     * @var float
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float
     */
    private $cumHeureTrav;

    /**
     * Cum j repos recup.
     *
     * @var float
     */
    private $cumJReposRecup;

    /**
     * Cum jour paye.
     *
     * @var float
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris_1.
     *
     * @var float
     */
    private $cumMtCpPris_1;

    /**
     * Cum net a payer.
     *
     * @var float
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float
     */
    private $cumNetImposable;

    /**
     * Cum plaf1 caisse1.
     *
     * @var float
     */
    private $cumPlaf1Caisse1;

    /**
     * Cum plaf1 caisse2.
     *
     * @var float
     */
    private $cumPlaf1Caisse2;

    /**
     * Cum plaf1 caisse3.
     *
     * @var float
     */
    private $cumPlaf1Caisse3;

    /**
     * Cum plaf2 caisse1.
     *
     * @var float
     */
    private $cumPlaf2Caisse1;

    /**
     * Cum plaf2 caisse2.
     *
     * @var float
     */
    private $cumPlaf2Caisse2;

    /**
     * Cum plaf2 caisse3.
     *
     * @var float
     */
    private $cumPlaf2Caisse3;

    /**
     * Cum plafond g m p.
     *
     * @var float
     */
    private $cumPlafondGMP;

    /**
     * Cum plafond s s1.
     *
     * @var float
     */
    private $cumPlafondSS1;

    /**
     * Cum plafond s s2.
     *
     * @var float
     */
    private $cumPlafondSS2;

    /**
     * Cum prov cp.
     *
     * @var float
     */
    private $cumProvCp;

    /**
     * Cum prov cp_1.
     *
     * @var float
     */
    private $cumProvCp_1;

    /**
     * Cum repos comp.
     *
     * @var float
     */
    private $cumReposComp;

    /**
     * Date ancien.
     *
     * @var DateTime
     */
    private $dateAncien;

    /**
     * Date embauche.
     *
     * @var DateTime
     */
    private $dateEmbauche;

    /**
     * Date entree1.
     *
     * @var DateTime
     */
    private $dateEntree1;

    /**
     * Date entree2.
     *
     * @var DateTime
     */
    private $dateEntree2;

    /**
     * Date licenciement.
     *
     * @var DateTime
     */
    private $dateLicenciement;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Date naiss conjoint.
     *
     * @var DateTime
     */
    private $dateNaissConjoint;

    /**
     * Date naissance.
     *
     * @var DateTime
     */
    private $dateNaissance;

    /**
     * Date sortie1.
     *
     * @var DateTime
     */
    private $dateSortie1;

    /**
     * Date sortie2.
     *
     * @var DateTime
     */
    private $dateSortie2;

    /**
     * Date visite medicale.
     *
     * @var DateTime
     */
    private $dateVisiteMedicale;

    /**
     * Date visite reprise.
     *
     * @var DateTime
     */
    private $dateVisiteReprise;

    /**
     * Dept naissance.
     *
     * @var string
     */
    private $deptNaissance;

    /**
     * Dern num prime.
     *
     * @var int
     */
    private $dernNumPrime;

    /**
     * Dim type2.
     *
     * @var boolean
     */
    private $dimType2;

    /**
     * Dir non salarie.
     *
     * @var boolean
     */
    private $dirNonSalarie;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Ed taux sal base.
     *
     * @var boolean
     */
    private $edTauxSalBase;

    /**
     * Effectif.
     *
     * @var boolean
     */
    private $effectif;

    /**
     * Effectif das.
     *
     * @var boolean
     */
    private $effectifDas;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Fictif.
     *
     * @var boolean
     */
    private $fictif;

    /**
     * Fraction etab.
     *
     * @var string
     */
    private $fractionEtab;

    /**
     * Gestion maj dim.
     *
     * @var string
     */
    private $gestionMajDim;

    /**
     * Gestion maj j f.
     *
     * @var string
     */
    private $gestionMajJF;

    /**
     * Gestion maj nuit.
     *
     * @var string
     */
    private $gestionMajNuit;

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
     * H nuit type2.
     *
     * @var boolean
     */
    private $hNuitType2;

    /**
     * Handicape.
     *
     * @var boolean
     */
    private $handicape;

    /**
     * Lieu travail conjoint.
     *
     * @var string
     */
    private $lieuTravailConjoint;

    /**
     * Matricule.
     *
     * @var string
     */
    private $matricule;

    /**
     * Mensualisation tache.
     *
     * @var string
     */
    private $mensualisationTache;

    /**
     * Mention c p.
     *
     * @var boolean
     */
    private $mentionCP;

    /**
     * Min garanti.
     *
     * @var float
     */
    private $minGaranti;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float
     */
    private $montant3;

    /**
     * Montant4.
     *
     * @var float
     */
    private $montant4;

    /**
     * Montant5.
     *
     * @var float
     */
    private $montant5;

    /**
     * Montant avantage.
     *
     * @var float
     */
    private $montantAvantage;

    /**
     * Mt base acompte.
     *
     * @var float
     */
    private $mtBaseAcompte;

    /**
     * Nationalite.
     *
     * @var string
     */
    private $nationalite;

    /**
     * Nb heure mois.
     *
     * @var float
     */
    private $nbHeureMois;

    /**
     * Nb heure sal.
     *
     * @var float
     */
    private $nbHeureSal;

    /**
     * Nb heure sup.
     *
     * @var float
     */
    private $nbHeureSup;

    /**
     * Nb heure trav.
     *
     * @var float
     */
    private $nbHeureTrav;

    /**
     * Nb jour base c p.
     *
     * @var float
     */
    private $nbJourBaseCP;

    /**
     * Nb points.
     *
     * @var int
     */
    private $nbPoints;

    /**
     * Niveau confidentialite.
     *
     * @var string
     */
    private $niveauConfidentialite;

    /**
     * Nom conjoint.
     *
     * @var string
     */
    private $nomConjoint;

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
     * Nombre enfants.
     *
     * @var string
     */
    private $nombreEnfants;

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
     * Numero carte sejour.
     *
     * @var string
     */
    private $numeroCarteSejour;

    /**
     * Numero carte travail.
     *
     * @var string
     */
    private $numeroCarteTravail;

    /**
     * Numero cas part secu.
     *
     * @var int
     */
    private $numeroCasPartSecu;

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Numero insee.
     *
     * @var string
     */
    private $numeroInsee;

    /**
     * Numero permis.
     *
     * @var string
     */
    private $numeroPermis;

    /**
     * Orphelin.
     *
     * @var boolean
     */
    private $orphelin;

    /**
     * Pas gestion pdp.
     *
     * @var boolean
     */
    private $pasGestionPdp;

    /**
     * Pas gestion pdp1.
     *
     * @var boolean
     */
    private $pasGestionPdp1;

    /**
     * Pension.
     *
     * @var boolean
     */
    private $pension;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Permis delivre le.
     *
     * @var DateTime
     */
    private $permisDelivreLe;

    /**
     * Permis delivre par.
     *
     * @var string
     */
    private $permisDelivrePar;

    /**
     * Permis expire le.
     *
     * @var DateTime
     */
    private $permisExpireLe;

    /**
     * Personne a prevenir.
     *
     * @var string
     */
    private $personneAPrevenir;

    /**
     * Plafond g m p.
     *
     * @var float
     */
    private $plafondGMP;

    /**
     * Plafond s s1.
     *
     * @var float
     */
    private $plafondSS1;

    /**
     * Plafond s s30.
     *
     * @var boolean
     */
    private $plafondSS30;

    /**
     * Pourcent abat.
     *
     * @var float
     */
    private $pourcentAbat;

    /**
     * Pourcent act.
     *
     * @var float
     */
    private $pourcentAct;

    /**
     * Pourcent effectif d u c s.
     *
     * @var float
     */
    private $pourcentEffectifDUCS;

    /**
     * Pourcent remu hor.
     *
     * @var float
     */
    private $pourcentRemuHor;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Prenom conjoint.
     *
     * @var string
     */
    private $prenomConjoint;

    /**
     * Prime.
     *
     * @var boolean
     */
    private $prime;

    /**
     * Prud college.
     *
     * @var string
     */
    private $prudCollege;

    /**
     * Prud lieu vote.
     *
     * @var string
     */
    private $prudLieuVote;

    /**
     * Prud section.
     *
     * @var string
     */
    private $prudSection;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Regle calcul.
     *
     * @var string
     */
    private $regleCalcul;

    /**
     * Regroup virement.
     *
     * @var string
     */
    private $regroupVirement;

    /**
     * Regul t d s.
     *
     * @var boolean
     */
    private $regulTDS;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Salaire base.
     *
     * @var float
     */
    private $salaireBase;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Sexe.
     *
     * @var string
     */
    private $sexe;

    /**
     * Situation fam.
     *
     * @var string
     */
    private $situationFam;

    /**
     * T d s100.
     *
     * @var float
     */
    private $tDS100;

    /**
     * T d s102.
     *
     * @var float
     */
    private $tDS102;

    /**
     * T d s103.
     *
     * @var float
     */
    private $tDS103;

    /**
     * T d s105.
     *
     * @var float
     */
    private $tDS105;

    /**
     * T d s107.
     *
     * @var boolean
     */
    private $tDS107;

    /**
     * T d s108.
     *
     * @var boolean
     */
    private $tDS108;

    /**
     * T d s109.
     *
     * @var boolean
     */
    private $tDS109;

    /**
     * T d s110.
     *
     * @var boolean
     */
    private $tDS110;

    /**
     * T d s112.
     *
     * @var float
     */
    private $tDS112;

    /**
     * T d s113.
     *
     * @var boolean
     */
    private $tDS113;

    /**
     * T d s117.
     *
     * @var float
     */
    private $tDS117;

    /**
     * T d s119.
     *
     * @var boolean
     */
    private $tDS119;

    /**
     * T d s120.
     *
     * @var boolean
     */
    private $tDS120;

    /**
     * T d s121.
     *
     * @var boolean
     */
    private $tDS121;

    /**
     * T d s122.
     *
     * @var boolean
     */
    private $tDS122;

    /**
     * T d s125.
     *
     * @var float
     */
    private $tDS125;

    /**
     * T d s127.
     *
     * @var float
     */
    private $tDS127;

    /**
     * T d s128.
     *
     * @var string
     */
    private $tDS128;

    /**
     * T d s132.
     *
     * @var float
     */
    private $tDS132;

    /**
     * T d s133.
     *
     * @var string
     */
    private $tDS133;

    /**
     * T d s134.
     *
     * @var float
     */
    private $tDS134;

    /**
     * T d s135.
     *
     * @var float
     */
    private $tDS135;

    /**
     * T d s136.
     *
     * @var float
     */
    private $tDS136;

    /**
     * T d s138.
     *
     * @var string
     */
    private $tDS138;

    /**
     * T d s139.
     *
     * @var string
     */
    private $tDS139;

    /**
     * T d s141.
     *
     * @var float
     */
    private $tDS141;

    /**
     * T d s59.
     *
     * @var string
     */
    private $tDS59;

    /**
     * T d s60.
     *
     * @var boolean
     */
    private $tDS60;

    /**
     * T d s61.
     *
     * @var string
     */
    private $tDS61;

    /**
     * T d s75.
     *
     * @var int
     */
    private $tDS75;

    /**
     * T d s76.
     *
     * @var string
     */
    private $tDS76;

    /**
     * T d s77.
     *
     * @var string
     */
    private $tDS77;

    /**
     * T d s78.
     *
     * @var boolean
     */
    private $tDS78;

    /**
     * T d s81.
     *
     * @var float
     */
    private $tDS81;

    /**
     * T d s82.
     *
     * @var float
     */
    private $tDS82;

    /**
     * T d s84.
     *
     * @var float
     */
    private $tDS84;

    /**
     * T d s85.
     *
     * @var float
     */
    private $tDS85;

    /**
     * T d s86.
     *
     * @var float
     */
    private $tDS86;

    /**
     * T d s87.
     *
     * @var float
     */
    private $tDS87;

    /**
     * T d s88.
     *
     * @var float
     */
    private $tDS88;

    /**
     * T d s89.
     *
     * @var float
     */
    private $tDS89;

    /**
     * T d s90.
     *
     * @var float
     */
    private $tDS90;

    /**
     * T d s91.
     *
     * @var float
     */
    private $tDS91;

    /**
     * T d s92.
     *
     * @var float
     */
    private $tDS92;

    /**
     * T d s93.
     *
     * @var float
     */
    private $tDS93;

    /**
     * T d s94.
     *
     * @var float
     */
    private $tDS94;

    /**
     * T d s95.
     *
     * @var float
     */
    private $tDS95;

    /**
     * Taux1.
     *
     * @var float
     */
    private $taux1;

    /**
     * Taux2.
     *
     * @var float
     */
    private $taux2;

    /**
     * Taux3.
     *
     * @var float
     */
    private $taux3;

    /**
     * Taux4.
     *
     * @var float
     */
    private $taux4;

    /**
     * Taux5.
     *
     * @var float
     */
    private $taux5;

    /**
     * Taux absence.
     *
     * @var float
     */
    private $tauxAbsence;

    /**
     * Taux ancien.
     *
     * @var float
     */
    private $tauxAncien;

    /**
     * Taux h sup.
     *
     * @var float
     */
    private $tauxHSup;

    /**
     * Taux pension civile.
     *
     * @var float
     */
    private $tauxPensionCivile;

    /**
     * Taux pension militaire.
     *
     * @var float
     */
    private $tauxPensionMilitaire;

    /**
     * Taxe salaire.
     *
     * @var boolean
     */
    private $taxeSalaire;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Tel conjoint.
     *
     * @var string
     */
    private $telConjoint;

    /**
     * Tel pers a prevenir.
     *
     * @var string
     */
    private $telPersAPrevenir;

    /**
     * Temps passe.
     *
     * @var boolean
     */
    private $tempsPasse;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Transfert entree1.
     *
     * @var boolean
     */
    private $transfertEntree1;

    /**
     * Transfert entree2.
     *
     * @var boolean
     */
    private $transfertEntree2;

    /**
     * Transfert sortie1.
     *
     * @var boolean
     */
    private $transfertSortie1;

    /**
     * Transfert sortie2.
     *
     * @var boolean
     */
    private $transfertSortie2;

    /**
     * Travaille j f.
     *
     * @var boolean
     */
    private $travailleJF;

    /**
     * Type contrat.
     *
     * @var string
     */
    private $typeContrat;

    /**
     * Type nationalite.
     *
     * @var string
     */
    private $typeNationalite;

    /**
     * Type paiement.
     *
     * @var string
     */
    private $typePaiement;

    /**
     * Vrp multicarte.
     *
     * @var boolean
     */
    private $vrpMulticarte;

    /**
     * plafond s s2.
     *
     * @var float
     */
    private $plafondSS2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a transferer en p.
     *
     * @return boolean Returns the a transferer en p.
     */
    public function getATransfererEnP() {
        return $this->aTransfererEnP;
    }

    /**
     * Get the administratif.
     *
     * @return boolean Returns the administratif.
     */
    public function getAdministratif() {
        return $this->administratif;
    }

    /**
     * Get the alleg particulier.
     *
     * @return boolean Returns the alleg particulier.
     */
    public function getAllegParticulier() {
        return $this->allegParticulier;
    }

    /**
     * Get the autre alleg.
     *
     * @return boolean Returns the autre alleg.
     */
    public function getAutreAlleg() {
        return $this->autreAlleg;
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
     * @return boolean Returns the c d d c d i.
     */
    public function getCDDCDI() {
        return $this->cDDCDI;
    }

    /**
     * Get the calcul particip.
     *
     * @return boolean Returns the calcul particip.
     */
    public function getCalculParticip() {
        return $this->calculParticip;
    }

    /**
     * Get the carte sejour delivree le.
     *
     * @return DateTime Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe() {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe() {
        return $this->carteSejourExpireLe;
    }

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe() {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime Returns the carte travail expire le.
     */
    public function getCarteTravailExpireLe() {
        return $this->carteTravailExpireLe;
    }

    /**
     * Get the cas part s s.
     *
     * @return boolean Returns the cas part s s.
     */
    public function getCasPartSS() {
        return $this->casPartSS;
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
     * Get the categorie permis.
     *
     * @return string Returns the categorie permis.
     */
    public function getCategoriePermis() {
        return $this->categoriePermis;
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
     * Get the cledeux.
     *
     * @return string Returns the cledeux.
     */
    public function getCledeux() {
        return $this->cledeux;
    }

    /**
     * Get the code a t.
     *
     * @return int Returns the code a t.
     */
    public function getCodeAT() {
        return $this->codeAT;
    }

    /**
     * Get the code centre urssaf.
     *
     * @return string Returns the code centre urssaf.
     */
    public function getCodeCentreUrssaf() {
        return $this->codeCentreUrssaf;
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
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code naf.
     *
     * @return int Returns the code naf.
     */
    public function getCodeNaf() {
        return $this->codeNaf;
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
     * Get the code pays naissance.
     *
     * @return string Returns the code pays naissance.
     */
    public function getCodePaysNaissance() {
        return $this->codePaysNaissance;
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
     * Get the code type sal.
     *
     * @return string Returns the code type sal.
     */
    public function getCodeTypeSal() {
        return $this->codeTypeSal;
    }

    /**
     * Get the commune naissance.
     *
     * @return string Returns the commune naissance.
     */
    public function getCommuneNaissance() {
        return $this->communeNaissance;
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
     * Get the compte tiers.
     *
     * @return string Returns the compte tiers.
     */
    public function getCompteTiers() {
        return $this->compteTiers;
    }

    /**
     * Get the cpt accompte.
     *
     * @return int Returns the cpt accompte.
     */
    public function getCptAccompte() {
        return $this->cptAccompte;
    }

    /**
     * Get the ctrl taux sal base.
     *
     * @return boolean Returns the ctrl taux sal base.
     */
    public function getCtrlTauxSalBase() {
        return $this->ctrlTauxSalBase;
    }

    /**
     * Get the cum30 s s.
     *
     * @return float Returns the cum30 s s.
     */
    public function getCum30SS() {
        return $this->cum30SS;
    }

    /**
     * Get the cum base csg.
     *
     * @return float Returns the cum base csg.
     */
    public function getCumBaseCsg() {
        return $this->cumBaseCsg;
    }

    /**
     * Get the cum base g m p.
     *
     * @return float Returns the cum base g m p.
     */
    public function getCumBaseGMP() {
        return $this->cumBaseGMP;
    }

    /**
     * Get the cum base s s.
     *
     * @return float Returns the cum base s s.
     */
    public function getCumBaseSS() {
        return $this->cumBaseSS;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float Returns the cum base tr a.
     */
    public function getCumBaseTrA() {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr a caisse1.
     *
     * @return float Returns the cum base tr a caisse1.
     */
    public function getCumBaseTrACaisse1() {
        return $this->cumBaseTrACaisse1;
    }

    /**
     * Get the cum base tr a caisse2.
     *
     * @return float Returns the cum base tr a caisse2.
     */
    public function getCumBaseTrACaisse2() {
        return $this->cumBaseTrACaisse2;
    }

    /**
     * Get the cum base tr a caisse3.
     *
     * @return float Returns the cum base tr a caisse3.
     */
    public function getCumBaseTrACaisse3() {
        return $this->cumBaseTrACaisse3;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float Returns the cum base tr b.
     */
    public function getCumBaseTrB() {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr b caisse1.
     *
     * @return float Returns the cum base tr b caisse1.
     */
    public function getCumBaseTrBCaisse1() {
        return $this->cumBaseTrBCaisse1;
    }

    /**
     * Get the cum base tr b caisse2.
     *
     * @return float Returns the cum base tr b caisse2.
     */
    public function getCumBaseTrBCaisse2() {
        return $this->cumBaseTrBCaisse2;
    }

    /**
     * Get the cum base tr b caisse3.
     *
     * @return float Returns the cum base tr b caisse3.
     */
    public function getCumBaseTrBCaisse3() {
        return $this->cumBaseTrBCaisse3;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float Returns the cum base tr c.
     */
    public function getCumBaseTrC() {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum base tr c caisse1.
     *
     * @return float Returns the cum base tr c caisse1.
     */
    public function getCumBaseTrCCaisse1() {
        return $this->cumBaseTrCCaisse1;
    }

    /**
     * Get the cum base tr c caisse2.
     *
     * @return float Returns the cum base tr c caisse2.
     */
    public function getCumBaseTrCCaisse2() {
        return $this->cumBaseTrCCaisse2;
    }

    /**
     * Get the cum base tr c caisse3.
     *
     * @return float Returns the cum base tr c caisse3.
     */
    public function getCumBaseTrCCaisse3() {
        return $this->cumBaseTrCCaisse3;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim() {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu() {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum brutal.
     *
     * @return float Returns the cum brutal.
     */
    public function getCumBrutal() {
        return $this->cumBrutal;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float Returns the cum cp dus.
     */
    public function getCumCpDus() {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus_1.
     *
     * @return float Returns the cum cp dus_1.
     */
    public function getCumCpDus_1() {
        return $this->cumCpDus_1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float Returns the cum cp pris.
     */
    public function getCumCpPris() {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris_1.
     *
     * @return float Returns the cum cp pris_1.
     */
    public function getCumCpPris_1() {
        return $this->cumCpPris_1;
    }

    /**
     * Get the cum h repos remplace.
     *
     * @return float Returns the cum h repos remplace.
     */
    public function getCumHReposRemplace() {
        return $this->cumHReposRemplace;
    }

    /**
     * Get the cum h service.
     *
     * @return float Returns the cum h service.
     */
    public function getCumHService() {
        return $this->cumHService;
    }

    /**
     * Get the cum h sup.
     *
     * @return float Returns the cum h sup.
     */
    public function getCumHSup() {
        return $this->cumHSup;
    }

    /**
     * Get the cum h sup r c i t.
     *
     * @return float Returns the cum h sup r c i t.
     */
    public function getCumHSupRCIT() {
        return $this->cumHSupRCIT;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float Returns the cum heure paye.
     */
    public function getCumHeurePaye() {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float Returns the cum heure trav.
     */
    public function getCumHeureTrav() {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum j repos recup.
     *
     * @return float Returns the cum j repos recup.
     */
    public function getCumJReposRecup() {
        return $this->cumJReposRecup;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float Returns the cum jour paye.
     */
    public function getCumJourPaye() {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float Returns the cum jour trav.
     */
    public function getCumJourTrav() {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float Returns the cum mt cp pris.
     */
    public function getCumMtCpPris() {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris_1.
     *
     * @return float Returns the cum mt cp pris_1.
     */
    public function getCumMtCpPris_1() {
        return $this->cumMtCpPris_1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float Returns the cum net a payer.
     */
    public function getCumNetAPayer() {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float Returns the cum net imposable.
     */
    public function getCumNetImposable() {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plaf1 caisse1.
     *
     * @return float Returns the cum plaf1 caisse1.
     */
    public function getCumPlaf1Caisse1() {
        return $this->cumPlaf1Caisse1;
    }

    /**
     * Get the cum plaf1 caisse2.
     *
     * @return float Returns the cum plaf1 caisse2.
     */
    public function getCumPlaf1Caisse2() {
        return $this->cumPlaf1Caisse2;
    }

    /**
     * Get the cum plaf1 caisse3.
     *
     * @return float Returns the cum plaf1 caisse3.
     */
    public function getCumPlaf1Caisse3() {
        return $this->cumPlaf1Caisse3;
    }

    /**
     * Get the cum plaf2 caisse1.
     *
     * @return float Returns the cum plaf2 caisse1.
     */
    public function getCumPlaf2Caisse1() {
        return $this->cumPlaf2Caisse1;
    }

    /**
     * Get the cum plaf2 caisse2.
     *
     * @return float Returns the cum plaf2 caisse2.
     */
    public function getCumPlaf2Caisse2() {
        return $this->cumPlaf2Caisse2;
    }

    /**
     * Get the cum plaf2 caisse3.
     *
     * @return float Returns the cum plaf2 caisse3.
     */
    public function getCumPlaf2Caisse3() {
        return $this->cumPlaf2Caisse3;
    }

    /**
     * Get the cum plafond g m p.
     *
     * @return float Returns the cum plafond g m p.
     */
    public function getCumPlafondGMP() {
        return $this->cumPlafondGMP;
    }

    /**
     * Get the cum plafond s s1.
     *
     * @return float Returns the cum plafond s s1.
     */
    public function getCumPlafondSS1() {
        return $this->cumPlafondSS1;
    }

    /**
     * Get the cum plafond s s2.
     *
     * @return float Returns the cum plafond s s2.
     */
    public function getCumPlafondSS2() {
        return $this->cumPlafondSS2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float Returns the cum prov cp.
     */
    public function getCumProvCp() {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp_1.
     *
     * @return float Returns the cum prov cp_1.
     */
    public function getCumProvCp_1() {
        return $this->cumProvCp_1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float Returns the cum repos comp.
     */
    public function getCumReposComp() {
        return $this->cumReposComp;
    }

    /**
     * Get the date ancien.
     *
     * @return DateTime Returns the date ancien.
     */
    public function getDateAncien() {
        return $this->dateAncien;
    }

    /**
     * Get the date embauche.
     *
     * @return DateTime Returns the date embauche.
     */
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    /**
     * Get the date entree1.
     *
     * @return DateTime Returns the date entree1.
     */
    public function getDateEntree1() {
        return $this->dateEntree1;
    }

    /**
     * Get the date entree2.
     *
     * @return DateTime Returns the date entree2.
     */
    public function getDateEntree2() {
        return $this->dateEntree2;
    }

    /**
     * Get the date licenciement.
     *
     * @return DateTime Returns the date licenciement.
     */
    public function getDateLicenciement() {
        return $this->dateLicenciement;
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
     * Get the date naiss conjoint.
     *
     * @return DateTime Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint() {
        return $this->dateNaissConjoint;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the date sortie1.
     *
     * @return DateTime Returns the date sortie1.
     */
    public function getDateSortie1() {
        return $this->dateSortie1;
    }

    /**
     * Get the date sortie2.
     *
     * @return DateTime Returns the date sortie2.
     */
    public function getDateSortie2() {
        return $this->dateSortie2;
    }

    /**
     * Get the date visite medicale.
     *
     * @return DateTime Returns the date visite medicale.
     */
    public function getDateVisiteMedicale() {
        return $this->dateVisiteMedicale;
    }

    /**
     * Get the date visite reprise.
     *
     * @return DateTime Returns the date visite reprise.
     */
    public function getDateVisiteReprise() {
        return $this->dateVisiteReprise;
    }

    /**
     * Get the dept naissance.
     *
     * @return string Returns the dept naissance.
     */
    public function getDeptNaissance() {
        return $this->deptNaissance;
    }

    /**
     * Get the dern num prime.
     *
     * @return int Returns the dern num prime.
     */
    public function getDernNumPrime() {
        return $this->dernNumPrime;
    }

    /**
     * Get the dim type2.
     *
     * @return boolean Returns the dim type2.
     */
    public function getDimType2() {
        return $this->dimType2;
    }

    /**
     * Get the dir non salarie.
     *
     * @return boolean Returns the dir non salarie.
     */
    public function getDirNonSalarie() {
        return $this->dirNonSalarie;
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
     * Get the ed taux sal base.
     *
     * @return boolean Returns the ed taux sal base.
     */
    public function getEdTauxSalBase() {
        return $this->edTauxSalBase;
    }

    /**
     * Get the effectif.
     *
     * @return boolean Returns the effectif.
     */
    public function getEffectif() {
        return $this->effectif;
    }

    /**
     * Get the effectif das.
     *
     * @return boolean Returns the effectif das.
     */
    public function getEffectifDas() {
        return $this->effectifDas;
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
     * Get the fictif.
     *
     * @return boolean Returns the fictif.
     */
    public function getFictif() {
        return $this->fictif;
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
     * Get the gestion maj dim.
     *
     * @return string Returns the gestion maj dim.
     */
    public function getGestionMajDim() {
        return $this->gestionMajDim;
    }

    /**
     * Get the gestion maj j f.
     *
     * @return string Returns the gestion maj j f.
     */
    public function getGestionMajJF() {
        return $this->gestionMajJF;
    }

    /**
     * Get the gestion maj nuit.
     *
     * @return string Returns the gestion maj nuit.
     */
    public function getGestionMajNuit() {
        return $this->gestionMajNuit;
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
     * Get the h nuit type2.
     *
     * @return boolean Returns the h nuit type2.
     */
    public function getHNuitType2() {
        return $this->hNuitType2;
    }

    /**
     * Get the handicape.
     *
     * @return boolean Returns the handicape.
     */
    public function getHandicape() {
        return $this->handicape;
    }

    /**
     * Get the lieu travail conjoint.
     *
     * @return string Returns the lieu travail conjoint.
     */
    public function getLieuTravailConjoint() {
        return $this->lieuTravailConjoint;
    }

    /**
     * Get the matricule.
     *
     * @return string Returns the matricule.
     */
    public function getMatricule() {
        return $this->matricule;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return string Returns the mensualisation tache.
     */
    public function getMensualisationTache() {
        return $this->mensualisationTache;
    }

    /**
     * Get the mention c p.
     *
     * @return boolean Returns the mention c p.
     */
    public function getMentionCP() {
        return $this->mentionCP;
    }

    /**
     * Get the min garanti.
     *
     * @return float Returns the min garanti.
     */
    public function getMinGaranti() {
        return $this->minGaranti;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float Returns the montant3.
     */
    public function getMontant3() {
        return $this->montant3;
    }

    /**
     * Get the montant4.
     *
     * @return float Returns the montant4.
     */
    public function getMontant4() {
        return $this->montant4;
    }

    /**
     * Get the montant5.
     *
     * @return float Returns the montant5.
     */
    public function getMontant5() {
        return $this->montant5;
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
     * Get the mt base acompte.
     *
     * @return float Returns the mt base acompte.
     */
    public function getMtBaseAcompte() {
        return $this->mtBaseAcompte;
    }

    /**
     * Get the nationalite.
     *
     * @return string Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
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
     * Get the nb heure sal.
     *
     * @return float Returns the nb heure sal.
     */
    public function getNbHeureSal() {
        return $this->nbHeureSal;
    }

    /**
     * Get the nb heure sup.
     *
     * @return float Returns the nb heure sup.
     */
    public function getNbHeureSup() {
        return $this->nbHeureSup;
    }

    /**
     * Get the nb heure trav.
     *
     * @return float Returns the nb heure trav.
     */
    public function getNbHeureTrav() {
        return $this->nbHeureTrav;
    }

    /**
     * Get the nb jour base c p.
     *
     * @return float Returns the nb jour base c p.
     */
    public function getNbJourBaseCP() {
        return $this->nbJourBaseCP;
    }

    /**
     * Get the nb points.
     *
     * @return int Returns the nb points.
     */
    public function getNbPoints() {
        return $this->nbPoints;
    }

    /**
     * Get the niveau confidentialite.
     *
     * @return string Returns the niveau confidentialite.
     */
    public function getNiveauConfidentialite() {
        return $this->niveauConfidentialite;
    }

    /**
     * Get the nom conjoint.
     *
     * @return string Returns the nom conjoint.
     */
    public function getNomConjoint() {
        return $this->nomConjoint;
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
     * Get the nombre enfants.
     *
     * @return string Returns the nombre enfants.
     */
    public function getNombreEnfants() {
        return $this->nombreEnfants;
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
     * Get the numero carte sejour.
     *
     * @return string Returns the numero carte sejour.
     */
    public function getNumeroCarteSejour() {
        return $this->numeroCarteSejour;
    }

    /**
     * Get the numero carte travail.
     *
     * @return string Returns the numero carte travail.
     */
    public function getNumeroCarteTravail() {
        return $this->numeroCarteTravail;
    }

    /**
     * Get the numero cas part secu.
     *
     * @return int Returns the numero cas part secu.
     */
    public function getNumeroCasPartSecu() {
        return $this->numeroCasPartSecu;
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
     * Get the numero insee.
     *
     * @return string Returns the numero insee.
     */
    public function getNumeroInsee() {
        return $this->numeroInsee;
    }

    /**
     * Get the numero permis.
     *
     * @return string Returns the numero permis.
     */
    public function getNumeroPermis() {
        return $this->numeroPermis;
    }

    /**
     * Get the orphelin.
     *
     * @return boolean Returns the orphelin.
     */
    public function getOrphelin() {
        return $this->orphelin;
    }

    /**
     * Get the pas gestion pdp.
     *
     * @return boolean Returns the pas gestion pdp.
     */
    public function getPasGestionPdp() {
        return $this->pasGestionPdp;
    }

    /**
     * Get the pas gestion pdp1.
     *
     * @return boolean Returns the pas gestion pdp1.
     */
    public function getPasGestionPdp1() {
        return $this->pasGestionPdp1;
    }

    /**
     * Get the pension.
     *
     * @return boolean Returns the pension.
     */
    public function getPension() {
        return $this->pension;
    }

    /**
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the permis delivre le.
     *
     * @return DateTime Returns the permis delivre le.
     */
    public function getPermisDelivreLe() {
        return $this->permisDelivreLe;
    }

    /**
     * Get the permis delivre par.
     *
     * @return string Returns the permis delivre par.
     */
    public function getPermisDelivrePar() {
        return $this->permisDelivrePar;
    }

    /**
     * Get the permis expire le.
     *
     * @return DateTime Returns the permis expire le.
     */
    public function getPermisExpireLe() {
        return $this->permisExpireLe;
    }

    /**
     * Get the personne a prevenir.
     *
     * @return string Returns the personne a prevenir.
     */
    public function getPersonneAPrevenir() {
        return $this->personneAPrevenir;
    }

    /**
     * Get the plafond g m p.
     *
     * @return float Returns the plafond g m p.
     */
    public function getPlafondGMP() {
        return $this->plafondGMP;
    }

    /**
     * Get the plafond s s1.
     *
     * @return float Returns the plafond s s1.
     */
    public function getPlafondSS1() {
        return $this->plafondSS1;
    }

    /**
     * Get the plafond s s30.
     *
     * @return boolean Returns the plafond s s30.
     */
    public function getPlafondSS30() {
        return $this->plafondSS30;
    }

    /**
     * Get the pourcent abat.
     *
     * @return float Returns the pourcent abat.
     */
    public function getPourcentAbat() {
        return $this->pourcentAbat;
    }

    /**
     * Get the pourcent act.
     *
     * @return float Returns the pourcent act.
     */
    public function getPourcentAct() {
        return $this->pourcentAct;
    }

    /**
     * Get the pourcent effectif d u c s.
     *
     * @return float Returns the pourcent effectif d u c s.
     */
    public function getPourcentEffectifDUCS() {
        return $this->pourcentEffectifDUCS;
    }

    /**
     * Get the pourcent remu hor.
     *
     * @return float Returns the pourcent remu hor.
     */
    public function getPourcentRemuHor() {
        return $this->pourcentRemuHor;
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
     * Get the prenom conjoint.
     *
     * @return string Returns the prenom conjoint.
     */
    public function getPrenomConjoint() {
        return $this->prenomConjoint;
    }

    /**
     * Get the prime.
     *
     * @return boolean Returns the prime.
     */
    public function getPrime() {
        return $this->prime;
    }

    /**
     * Get the prud college.
     *
     * @return string Returns the prud college.
     */
    public function getPrudCollege() {
        return $this->prudCollege;
    }

    /**
     * Get the prud lieu vote.
     *
     * @return string Returns the prud lieu vote.
     */
    public function getPrudLieuVote() {
        return $this->prudLieuVote;
    }

    /**
     * Get the prud section.
     *
     * @return string Returns the prud section.
     */
    public function getPrudSection() {
        return $this->prudSection;
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
     * Get the regle calcul.
     *
     * @return string Returns the regle calcul.
     */
    public function getRegleCalcul() {
        return $this->regleCalcul;
    }

    /**
     * Get the regroup virement.
     *
     * @return string Returns the regroup virement.
     */
    public function getRegroupVirement() {
        return $this->regroupVirement;
    }

    /**
     * Get the regul t d s.
     *
     * @return boolean Returns the regul t d s.
     */
    public function getRegulTDS() {
        return $this->regulTDS;
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
     * Get the salaire base.
     *
     * @return float Returns the salaire base.
     */
    public function getSalaireBase() {
        return $this->salaireBase;
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
     * Get the sexe.
     *
     * @return string Returns the sexe.
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Get the situation fam.
     *
     * @return string Returns the situation fam.
     */
    public function getSituationFam() {
        return $this->situationFam;
    }

    /**
     * Get the t d s100.
     *
     * @return float Returns the t d s100.
     */
    public function getTDS100() {
        return $this->tDS100;
    }

    /**
     * Get the t d s102.
     *
     * @return float Returns the t d s102.
     */
    public function getTDS102() {
        return $this->tDS102;
    }

    /**
     * Get the t d s103.
     *
     * @return float Returns the t d s103.
     */
    public function getTDS103() {
        return $this->tDS103;
    }

    /**
     * Get the t d s105.
     *
     * @return float Returns the t d s105.
     */
    public function getTDS105() {
        return $this->tDS105;
    }

    /**
     * Get the t d s107.
     *
     * @return boolean Returns the t d s107.
     */
    public function getTDS107() {
        return $this->tDS107;
    }

    /**
     * Get the t d s108.
     *
     * @return boolean Returns the t d s108.
     */
    public function getTDS108() {
        return $this->tDS108;
    }

    /**
     * Get the t d s109.
     *
     * @return boolean Returns the t d s109.
     */
    public function getTDS109() {
        return $this->tDS109;
    }

    /**
     * Get the t d s110.
     *
     * @return boolean Returns the t d s110.
     */
    public function getTDS110() {
        return $this->tDS110;
    }

    /**
     * Get the t d s112.
     *
     * @return float Returns the t d s112.
     */
    public function getTDS112() {
        return $this->tDS112;
    }

    /**
     * Get the t d s113.
     *
     * @return boolean Returns the t d s113.
     */
    public function getTDS113() {
        return $this->tDS113;
    }

    /**
     * Get the t d s117.
     *
     * @return float Returns the t d s117.
     */
    public function getTDS117() {
        return $this->tDS117;
    }

    /**
     * Get the t d s119.
     *
     * @return boolean Returns the t d s119.
     */
    public function getTDS119() {
        return $this->tDS119;
    }

    /**
     * Get the t d s120.
     *
     * @return boolean Returns the t d s120.
     */
    public function getTDS120() {
        return $this->tDS120;
    }

    /**
     * Get the t d s121.
     *
     * @return boolean Returns the t d s121.
     */
    public function getTDS121() {
        return $this->tDS121;
    }

    /**
     * Get the t d s122.
     *
     * @return boolean Returns the t d s122.
     */
    public function getTDS122() {
        return $this->tDS122;
    }

    /**
     * Get the t d s125.
     *
     * @return float Returns the t d s125.
     */
    public function getTDS125() {
        return $this->tDS125;
    }

    /**
     * Get the t d s127.
     *
     * @return float Returns the t d s127.
     */
    public function getTDS127() {
        return $this->tDS127;
    }

    /**
     * Get the t d s128.
     *
     * @return string Returns the t d s128.
     */
    public function getTDS128() {
        return $this->tDS128;
    }

    /**
     * Get the t d s132.
     *
     * @return float Returns the t d s132.
     */
    public function getTDS132() {
        return $this->tDS132;
    }

    /**
     * Get the t d s133.
     *
     * @return string Returns the t d s133.
     */
    public function getTDS133() {
        return $this->tDS133;
    }

    /**
     * Get the t d s134.
     *
     * @return float Returns the t d s134.
     */
    public function getTDS134() {
        return $this->tDS134;
    }

    /**
     * Get the t d s135.
     *
     * @return float Returns the t d s135.
     */
    public function getTDS135() {
        return $this->tDS135;
    }

    /**
     * Get the t d s136.
     *
     * @return float Returns the t d s136.
     */
    public function getTDS136() {
        return $this->tDS136;
    }

    /**
     * Get the t d s138.
     *
     * @return string Returns the t d s138.
     */
    public function getTDS138() {
        return $this->tDS138;
    }

    /**
     * Get the t d s139.
     *
     * @return string Returns the t d s139.
     */
    public function getTDS139() {
        return $this->tDS139;
    }

    /**
     * Get the t d s141.
     *
     * @return float Returns the t d s141.
     */
    public function getTDS141() {
        return $this->tDS141;
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
     * Get the t d s60.
     *
     * @return boolean Returns the t d s60.
     */
    public function getTDS60() {
        return $this->tDS60;
    }

    /**
     * Get the t d s61.
     *
     * @return string Returns the t d s61.
     */
    public function getTDS61() {
        return $this->tDS61;
    }

    /**
     * Get the t d s75.
     *
     * @return int Returns the t d s75.
     */
    public function getTDS75() {
        return $this->tDS75;
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
     * Get the t d s77.
     *
     * @return string Returns the t d s77.
     */
    public function getTDS77() {
        return $this->tDS77;
    }

    /**
     * Get the t d s78.
     *
     * @return boolean Returns the t d s78.
     */
    public function getTDS78() {
        return $this->tDS78;
    }

    /**
     * Get the t d s81.
     *
     * @return float Returns the t d s81.
     */
    public function getTDS81() {
        return $this->tDS81;
    }

    /**
     * Get the t d s82.
     *
     * @return float Returns the t d s82.
     */
    public function getTDS82() {
        return $this->tDS82;
    }

    /**
     * Get the t d s84.
     *
     * @return float Returns the t d s84.
     */
    public function getTDS84() {
        return $this->tDS84;
    }

    /**
     * Get the t d s85.
     *
     * @return float Returns the t d s85.
     */
    public function getTDS85() {
        return $this->tDS85;
    }

    /**
     * Get the t d s86.
     *
     * @return float Returns the t d s86.
     */
    public function getTDS86() {
        return $this->tDS86;
    }

    /**
     * Get the t d s87.
     *
     * @return float Returns the t d s87.
     */
    public function getTDS87() {
        return $this->tDS87;
    }

    /**
     * Get the t d s88.
     *
     * @return float Returns the t d s88.
     */
    public function getTDS88() {
        return $this->tDS88;
    }

    /**
     * Get the t d s89.
     *
     * @return float Returns the t d s89.
     */
    public function getTDS89() {
        return $this->tDS89;
    }

    /**
     * Get the t d s90.
     *
     * @return float Returns the t d s90.
     */
    public function getTDS90() {
        return $this->tDS90;
    }

    /**
     * Get the t d s91.
     *
     * @return float Returns the t d s91.
     */
    public function getTDS91() {
        return $this->tDS91;
    }

    /**
     * Get the t d s92.
     *
     * @return float Returns the t d s92.
     */
    public function getTDS92() {
        return $this->tDS92;
    }

    /**
     * Get the t d s93.
     *
     * @return float Returns the t d s93.
     */
    public function getTDS93() {
        return $this->tDS93;
    }

    /**
     * Get the t d s94.
     *
     * @return float Returns the t d s94.
     */
    public function getTDS94() {
        return $this->tDS94;
    }

    /**
     * Get the t d s95.
     *
     * @return float Returns the t d s95.
     */
    public function getTDS95() {
        return $this->tDS95;
    }

    /**
     * Get the taux1.
     *
     * @return float Returns the taux1.
     */
    public function getTaux1() {
        return $this->taux1;
    }

    /**
     * Get the taux2.
     *
     * @return float Returns the taux2.
     */
    public function getTaux2() {
        return $this->taux2;
    }

    /**
     * Get the taux3.
     *
     * @return float Returns the taux3.
     */
    public function getTaux3() {
        return $this->taux3;
    }

    /**
     * Get the taux4.
     *
     * @return float Returns the taux4.
     */
    public function getTaux4() {
        return $this->taux4;
    }

    /**
     * Get the taux5.
     *
     * @return float Returns the taux5.
     */
    public function getTaux5() {
        return $this->taux5;
    }

    /**
     * Get the taux absence.
     *
     * @return float Returns the taux absence.
     */
    public function getTauxAbsence() {
        return $this->tauxAbsence;
    }

    /**
     * Get the taux ancien.
     *
     * @return float Returns the taux ancien.
     */
    public function getTauxAncien() {
        return $this->tauxAncien;
    }

    /**
     * Get the taux h sup.
     *
     * @return float Returns the taux h sup.
     */
    public function getTauxHSup() {
        return $this->tauxHSup;
    }

    /**
     * Get the taux pension civile.
     *
     * @return float Returns the taux pension civile.
     */
    public function getTauxPensionCivile() {
        return $this->tauxPensionCivile;
    }

    /**
     * Get the taux pension militaire.
     *
     * @return float Returns the taux pension militaire.
     */
    public function getTauxPensionMilitaire() {
        return $this->tauxPensionMilitaire;
    }

    /**
     * Get the taxe salaire.
     *
     * @return boolean Returns the taxe salaire.
     */
    public function getTaxeSalaire() {
        return $this->taxeSalaire;
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
     * Get the tel conjoint.
     *
     * @return string Returns the tel conjoint.
     */
    public function getTelConjoint() {
        return $this->telConjoint;
    }

    /**
     * Get the tel pers a prevenir.
     *
     * @return string Returns the tel pers a prevenir.
     */
    public function getTelPersAPrevenir() {
        return $this->telPersAPrevenir;
    }

    /**
     * Get the temps passe.
     *
     * @return boolean Returns the temps passe.
     */
    public function getTempsPasse() {
        return $this->tempsPasse;
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
     * Get the transfert entree1.
     *
     * @return boolean Returns the transfert entree1.
     */
    public function getTransfertEntree1() {
        return $this->transfertEntree1;
    }

    /**
     * Get the transfert entree2.
     *
     * @return boolean Returns the transfert entree2.
     */
    public function getTransfertEntree2() {
        return $this->transfertEntree2;
    }

    /**
     * Get the transfert sortie1.
     *
     * @return boolean Returns the transfert sortie1.
     */
    public function getTransfertSortie1() {
        return $this->transfertSortie1;
    }

    /**
     * Get the transfert sortie2.
     *
     * @return boolean Returns the transfert sortie2.
     */
    public function getTransfertSortie2() {
        return $this->transfertSortie2;
    }

    /**
     * Get the travaille j f.
     *
     * @return boolean Returns the travaille j f.
     */
    public function getTravailleJF() {
        return $this->travailleJF;
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
     * Get the type nationalite.
     *
     * @return string Returns the type nationalite.
     */
    public function getTypeNationalite() {
        return $this->typeNationalite;
    }

    /**
     * Get the type paiement.
     *
     * @return string Returns the type paiement.
     */
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    /**
     * Get the vrp multicarte.
     *
     * @return boolean Returns the vrp multicarte.
     */
    public function getVrpMulticarte() {
        return $this->vrpMulticarte;
    }

    /**
     * Get the plafond s s2.
     *
     * @return float Returns the plafond s s2.
     */
    public function getplafondSS2() {
        return $this->plafondSS2;
    }

    /**
     * Set the a transferer en p.
     *
     * @param boolean $aTransfererEnP The a transferer en p.
     * @return Employes Returns this employes.
     */
    public function setATransfererEnP($aTransfererEnP) {
        $this->aTransfererEnP = $aTransfererEnP;
        return $this;
    }

    /**
     * Set the administratif.
     *
     * @param boolean $administratif The administratif.
     * @return Employes Returns this employes.
     */
    public function setAdministratif($administratif) {
        $this->administratif = $administratif;
        return $this;
    }

    /**
     * Set the alleg particulier.
     *
     * @param boolean $allegParticulier The alleg particulier.
     * @return Employes Returns this employes.
     */
    public function setAllegParticulier($allegParticulier) {
        $this->allegParticulier = $allegParticulier;
        return $this;
    }

    /**
     * Set the autre alleg.
     *
     * @param boolean $autreAlleg The autre alleg.
     * @return Employes Returns this employes.
     */
    public function setAutreAlleg($autreAlleg) {
        $this->autreAlleg = $autreAlleg;
        return $this;
    }

    /**
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return Employes Returns this employes.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return Employes Returns this employes.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the c d d c d i.
     *
     * @param boolean $cDDCDI The c d d c d i.
     * @return Employes Returns this employes.
     */
    public function setCDDCDI($cDDCDI) {
        $this->cDDCDI = $cDDCDI;
        return $this;
    }

    /**
     * Set the calcul particip.
     *
     * @param boolean $calculParticip The calcul particip.
     * @return Employes Returns this employes.
     */
    public function setCalculParticip($calculParticip) {
        $this->calculParticip = $calculParticip;
        return $this;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime $carteSejourDelivreeLe The carte sejour delivree le.
     * @return Employes Returns this employes.
     */
    public function setCarteSejourDelivreeLe(DateTime $carteSejourDelivreeLe = null) {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime $carteSejourExpireLe The carte sejour expire le.
     * @return Employes Returns this employes.
     */
    public function setCarteSejourExpireLe(DateTime $carteSejourExpireLe = null) {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime $carteTravailDelivreeLe The carte travail delivree le.
     * @return Employes Returns this employes.
     */
    public function setCarteTravailDelivreeLe(DateTime $carteTravailDelivreeLe = null) {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime $carteTravailExpireLe The carte travail expire le.
     * @return Employes Returns this employes.
     */
    public function setCarteTravailExpireLe(DateTime $carteTravailExpireLe = null) {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }

    /**
     * Set the cas part s s.
     *
     * @param boolean $casPartSS The cas part s s.
     * @return Employes Returns this employes.
     */
    public function setCasPartSS($casPartSS) {
        $this->casPartSS = $casPartSS;
        return $this;
    }

    /**
     * Set the categ population.
     *
     * @param string $categPopulation The categ population.
     * @return Employes Returns this employes.
     */
    public function setCategPopulation($categPopulation) {
        $this->categPopulation = $categPopulation;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string $categSalarie The categ salarie.
     * @return Employes Returns this employes.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the categorie permis.
     *
     * @param string $categoriePermis The categorie permis.
     * @return Employes Returns this employes.
     */
    public function setCategoriePermis($categoriePermis) {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }

    /**
     * Set the classification.
     *
     * @param string $classification The classification.
     * @return Employes Returns this employes.
     */
    public function setClassification($classification) {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Set the cledeux.
     *
     * @param string $cledeux The cledeux.
     * @return Employes Returns this employes.
     */
    public function setCledeux($cledeux) {
        $this->cledeux = $cledeux;
        return $this;
    }

    /**
     * Set the code a t.
     *
     * @param int $codeAT The code a t.
     * @return Employes Returns this employes.
     */
    public function setCodeAT($codeAT) {
        $this->codeAT = $codeAT;
        return $this;
    }

    /**
     * Set the code centre urssaf.
     *
     * @param string $codeCentreUrssaf The code centre urssaf.
     * @return Employes Returns this employes.
     */
    public function setCodeCentreUrssaf($codeCentreUrssaf) {
        $this->codeCentreUrssaf = $codeCentreUrssaf;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     * @return Employes Returns this employes.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return Employes Returns this employes.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param int $codeNaf The code naf.
     * @return Employes Returns this employes.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return Employes Returns this employes.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays naissance.
     *
     * @param string $codePaysNaissance The code pays naissance.
     * @return Employes Returns this employes.
     */
    public function setCodePaysNaissance($codePaysNaissance) {
        $this->codePaysNaissance = $codePaysNaissance;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return Employes Returns this employes.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string $codeTypeSal The code type sal.
     * @return Employes Returns this employes.
     */
    public function setCodeTypeSal($codeTypeSal) {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string $communeNaissance The commune naissance.
     * @return Employes Returns this employes.
     */
    public function setCommuneNaissance($communeNaissance) {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Employes Returns this employes.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the compte tiers.
     *
     * @param string $compteTiers The compte tiers.
     * @return Employes Returns this employes.
     */
    public function setCompteTiers($compteTiers) {
        $this->compteTiers = $compteTiers;
        return $this;
    }

    /**
     * Set the cpt accompte.
     *
     * @param int $cptAccompte The cpt accompte.
     * @return Employes Returns this employes.
     */
    public function setCptAccompte($cptAccompte) {
        $this->cptAccompte = $cptAccompte;
        return $this;
    }

    /**
     * Set the ctrl taux sal base.
     *
     * @param boolean $ctrlTauxSalBase The ctrl taux sal base.
     * @return Employes Returns this employes.
     */
    public function setCtrlTauxSalBase($ctrlTauxSalBase) {
        $this->ctrlTauxSalBase = $ctrlTauxSalBase;
        return $this;
    }

    /**
     * Set the cum30 s s.
     *
     * @param float $cum30SS The cum30 s s.
     * @return Employes Returns this employes.
     */
    public function setCum30SS($cum30SS) {
        $this->cum30SS = $cum30SS;
        return $this;
    }

    /**
     * Set the cum base csg.
     *
     * @param float $cumBaseCsg The cum base csg.
     * @return Employes Returns this employes.
     */
    public function setCumBaseCsg($cumBaseCsg) {
        $this->cumBaseCsg = $cumBaseCsg;
        return $this;
    }

    /**
     * Set the cum base g m p.
     *
     * @param float $cumBaseGMP The cum base g m p.
     * @return Employes Returns this employes.
     */
    public function setCumBaseGMP($cumBaseGMP) {
        $this->cumBaseGMP = $cumBaseGMP;
        return $this;
    }

    /**
     * Set the cum base s s.
     *
     * @param float $cumBaseSS The cum base s s.
     * @return Employes Returns this employes.
     */
    public function setCumBaseSS($cumBaseSS) {
        $this->cumBaseSS = $cumBaseSS;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float $cumBaseTrA The cum base tr a.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrA($cumBaseTrA) {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr a caisse1.
     *
     * @param float $cumBaseTrACaisse1 The cum base tr a caisse1.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrACaisse1($cumBaseTrACaisse1) {
        $this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
        return $this;
    }

    /**
     * Set the cum base tr a caisse2.
     *
     * @param float $cumBaseTrACaisse2 The cum base tr a caisse2.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrACaisse2($cumBaseTrACaisse2) {
        $this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
        return $this;
    }

    /**
     * Set the cum base tr a caisse3.
     *
     * @param float $cumBaseTrACaisse3 The cum base tr a caisse3.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrACaisse3($cumBaseTrACaisse3) {
        $this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float $cumBaseTrB The cum base tr b.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrB($cumBaseTrB) {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr b caisse1.
     *
     * @param float $cumBaseTrBCaisse1 The cum base tr b caisse1.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrBCaisse1($cumBaseTrBCaisse1) {
        $this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr b caisse2.
     *
     * @param float $cumBaseTrBCaisse2 The cum base tr b caisse2.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrBCaisse2($cumBaseTrBCaisse2) {
        $this->cumBaseTrBCaisse2 = $cumBaseTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr b caisse3.
     *
     * @param float $cumBaseTrBCaisse3 The cum base tr b caisse3.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrBCaisse3($cumBaseTrBCaisse3) {
        $this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float $cumBaseTrC The cum base tr c.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrC($cumBaseTrC) {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum base tr c caisse1.
     *
     * @param float $cumBaseTrCCaisse1 The cum base tr c caisse1.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrCCaisse1($cumBaseTrCCaisse1) {
        $this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr c caisse2.
     *
     * @param float $cumBaseTrCCaisse2 The cum base tr c caisse2.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrCCaisse2($cumBaseTrCCaisse2) {
        $this->cumBaseTrCCaisse2 = $cumBaseTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr c caisse3.
     *
     * @param float $cumBaseTrCCaisse3 The cum base tr c caisse3.
     * @return Employes Returns this employes.
     */
    public function setCumBaseTrCCaisse3($cumBaseTrCCaisse3) {
        $this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float $cumBrutAbatNonLim The cum brut abat non lim.
     * @return Employes Returns this employes.
     */
    public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float $cumBrutNonAbattu The cum brut non abattu.
     * @return Employes Returns this employes.
     */
    public function setCumBrutNonAbattu($cumBrutNonAbattu) {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum brutal.
     *
     * @param float $cumBrutal The cum brutal.
     * @return Employes Returns this employes.
     */
    public function setCumBrutal($cumBrutal) {
        $this->cumBrutal = $cumBrutal;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float $cumCpDus The cum cp dus.
     * @return Employes Returns this employes.
     */
    public function setCumCpDus($cumCpDus) {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus_1.
     *
     * @param float $cumCpDus_1 The cum cp dus_1.
     * @return Employes Returns this employes.
     */
    public function setCumCpDus_1($cumCpDus_1) {
        $this->cumCpDus_1 = $cumCpDus_1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float $cumCpPris The cum cp pris.
     * @return Employes Returns this employes.
     */
    public function setCumCpPris($cumCpPris) {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris_1.
     *
     * @param float $cumCpPris_1 The cum cp pris_1.
     * @return Employes Returns this employes.
     */
    public function setCumCpPris_1($cumCpPris_1) {
        $this->cumCpPris_1 = $cumCpPris_1;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float $cumHReposRemplace The cum h repos remplace.
     * @return Employes Returns this employes.
     */
    public function setCumHReposRemplace($cumHReposRemplace) {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float $cumHService The cum h service.
     * @return Employes Returns this employes.
     */
    public function setCumHService($cumHService) {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float $cumHSup The cum h sup.
     * @return Employes Returns this employes.
     */
    public function setCumHSup($cumHSup) {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum h sup r c i t.
     *
     * @param float $cumHSupRCIT The cum h sup r c i t.
     * @return Employes Returns this employes.
     */
    public function setCumHSupRCIT($cumHSupRCIT) {
        $this->cumHSupRCIT = $cumHSupRCIT;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float $cumHeurePaye The cum heure paye.
     * @return Employes Returns this employes.
     */
    public function setCumHeurePaye($cumHeurePaye) {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float $cumHeureTrav The cum heure trav.
     * @return Employes Returns this employes.
     */
    public function setCumHeureTrav($cumHeureTrav) {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float $cumJReposRecup The cum j repos recup.
     * @return Employes Returns this employes.
     */
    public function setCumJReposRecup($cumJReposRecup) {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float $cumJourPaye The cum jour paye.
     * @return Employes Returns this employes.
     */
    public function setCumJourPaye($cumJourPaye) {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float $cumJourTrav The cum jour trav.
     * @return Employes Returns this employes.
     */
    public function setCumJourTrav($cumJourTrav) {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     * @return Employes Returns this employes.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris_1.
     *
     * @param float $cumMtCpPris_1 The cum mt cp pris_1.
     * @return Employes Returns this employes.
     */
    public function setCumMtCpPris_1($cumMtCpPris_1) {
        $this->cumMtCpPris_1 = $cumMtCpPris_1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     * @return Employes Returns this employes.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float $cumNetImposable The cum net imposable.
     * @return Employes Returns this employes.
     */
    public function setCumNetImposable($cumNetImposable) {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float $cumPlaf1Caisse1 The cum plaf1 caisse1.
     * @return Employes Returns this employes.
     */
    public function setCumPlaf1Caisse1($cumPlaf1Caisse1) {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float $cumPlaf1Caisse2 The cum plaf1 caisse2.
     * @return Employes Returns this employes.
     */
    public function setCumPlaf1Caisse2($cumPlaf1Caisse2) {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float $cumPlaf1Caisse3 The cum plaf1 caisse3.
     * @return Employes Returns this employes.
     */
    public function setCumPlaf1Caisse3($cumPlaf1Caisse3) {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float $cumPlaf2Caisse1 The cum plaf2 caisse1.
     * @return Employes Returns this employes.
     */
    public function setCumPlaf2Caisse1($cumPlaf2Caisse1) {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float $cumPlaf2Caisse2 The cum plaf2 caisse2.
     * @return Employes Returns this employes.
     */
    public function setCumPlaf2Caisse2($cumPlaf2Caisse2) {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float $cumPlaf2Caisse3 The cum plaf2 caisse3.
     * @return Employes Returns this employes.
     */
    public function setCumPlaf2Caisse3($cumPlaf2Caisse3) {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond g m p.
     *
     * @param float $cumPlafondGMP The cum plafond g m p.
     * @return Employes Returns this employes.
     */
    public function setCumPlafondGMP($cumPlafondGMP) {
        $this->cumPlafondGMP = $cumPlafondGMP;
        return $this;
    }

    /**
     * Set the cum plafond s s1.
     *
     * @param float $cumPlafondSS1 The cum plafond s s1.
     * @return Employes Returns this employes.
     */
    public function setCumPlafondSS1($cumPlafondSS1) {
        $this->cumPlafondSS1 = $cumPlafondSS1;
        return $this;
    }

    /**
     * Set the cum plafond s s2.
     *
     * @param float $cumPlafondSS2 The cum plafond s s2.
     * @return Employes Returns this employes.
     */
    public function setCumPlafondSS2($cumPlafondSS2) {
        $this->cumPlafondSS2 = $cumPlafondSS2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float $cumProvCp The cum prov cp.
     * @return Employes Returns this employes.
     */
    public function setCumProvCp($cumProvCp) {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp_1.
     *
     * @param float $cumProvCp_1 The cum prov cp_1.
     * @return Employes Returns this employes.
     */
    public function setCumProvCp_1($cumProvCp_1) {
        $this->cumProvCp_1 = $cumProvCp_1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float $cumReposComp The cum repos comp.
     * @return Employes Returns this employes.
     */
    public function setCumReposComp($cumReposComp) {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the date ancien.
     *
     * @param DateTime $dateAncien The date ancien.
     * @return Employes Returns this employes.
     */
    public function setDateAncien(DateTime $dateAncien = null) {
        $this->dateAncien = $dateAncien;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime $dateEmbauche The date embauche.
     * @return Employes Returns this employes.
     */
    public function setDateEmbauche(DateTime $dateEmbauche = null) {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date entree1.
     *
     * @param DateTime $dateEntree1 The date entree1.
     * @return Employes Returns this employes.
     */
    public function setDateEntree1(DateTime $dateEntree1 = null) {
        $this->dateEntree1 = $dateEntree1;
        return $this;
    }

    /**
     * Set the date entree2.
     *
     * @param DateTime $dateEntree2 The date entree2.
     * @return Employes Returns this employes.
     */
    public function setDateEntree2(DateTime $dateEntree2 = null) {
        $this->dateEntree2 = $dateEntree2;
        return $this;
    }

    /**
     * Set the date licenciement.
     *
     * @param DateTime $dateLicenciement The date licenciement.
     * @return Employes Returns this employes.
     */
    public function setDateLicenciement(DateTime $dateLicenciement = null) {
        $this->dateLicenciement = $dateLicenciement;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Employes Returns this employes.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime $dateNaissConjoint The date naiss conjoint.
     * @return Employes Returns this employes.
     */
    public function setDateNaissConjoint(DateTime $dateNaissConjoint = null) {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime $dateNaissance The date naissance.
     * @return Employes Returns this employes.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie1.
     *
     * @param DateTime $dateSortie1 The date sortie1.
     * @return Employes Returns this employes.
     */
    public function setDateSortie1(DateTime $dateSortie1 = null) {
        $this->dateSortie1 = $dateSortie1;
        return $this;
    }

    /**
     * Set the date sortie2.
     *
     * @param DateTime $dateSortie2 The date sortie2.
     * @return Employes Returns this employes.
     */
    public function setDateSortie2(DateTime $dateSortie2 = null) {
        $this->dateSortie2 = $dateSortie2;
        return $this;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime $dateVisiteMedicale The date visite medicale.
     * @return Employes Returns this employes.
     */
    public function setDateVisiteMedicale(DateTime $dateVisiteMedicale = null) {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime $dateVisiteReprise The date visite reprise.
     * @return Employes Returns this employes.
     */
    public function setDateVisiteReprise(DateTime $dateVisiteReprise = null) {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string $deptNaissance The dept naissance.
     * @return Employes Returns this employes.
     */
    public function setDeptNaissance($deptNaissance) {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the dern num prime.
     *
     * @param int $dernNumPrime The dern num prime.
     * @return Employes Returns this employes.
     */
    public function setDernNumPrime($dernNumPrime) {
        $this->dernNumPrime = $dernNumPrime;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param boolean $dimType2 The dim type2.
     * @return Employes Returns this employes.
     */
    public function setDimType2($dimType2) {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the dir non salarie.
     *
     * @param boolean $dirNonSalarie The dir non salarie.
     * @return Employes Returns this employes.
     */
    public function setDirNonSalarie($dirNonSalarie) {
        $this->dirNonSalarie = $dirNonSalarie;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     * @return Employes Returns this employes.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the ed taux sal base.
     *
     * @param boolean $edTauxSalBase The ed taux sal base.
     * @return Employes Returns this employes.
     */
    public function setEdTauxSalBase($edTauxSalBase) {
        $this->edTauxSalBase = $edTauxSalBase;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param boolean $effectif The effectif.
     * @return Employes Returns this employes.
     */
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the effectif das.
     *
     * @param boolean $effectifDas The effectif das.
     * @return Employes Returns this employes.
     */
    public function setEffectifDas($effectifDas) {
        $this->effectifDas = $effectifDas;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return Employes Returns this employes.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param boolean $fictif The fictif.
     * @return Employes Returns this employes.
     */
    public function setFictif($fictif) {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     * @return Employes Returns this employes.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string $gestionMajDim The gestion maj dim.
     * @return Employes Returns this employes.
     */
    public function setGestionMajDim($gestionMajDim) {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj j f.
     *
     * @param string $gestionMajJF The gestion maj j f.
     * @return Employes Returns this employes.
     */
    public function setGestionMajJF($gestionMajJF) {
        $this->gestionMajJF = $gestionMajJF;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string $gestionMajNuit The gestion maj nuit.
     * @return Employes Returns this employes.
     */
    public function setGestionMajNuit($gestionMajNuit) {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the grille anc1.
     *
     * @param string $grilleAnc1 The grille anc1.
     * @return Employes Returns this employes.
     */
    public function setGrilleAnc1($grilleAnc1) {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }

    /**
     * Set the grille anc2.
     *
     * @param string $grilleAnc2 The grille anc2.
     * @return Employes Returns this employes.
     */
    public function setGrilleAnc2($grilleAnc2) {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }

    /**
     * Set the grille anc3.
     *
     * @param string $grilleAnc3 The grille anc3.
     * @return Employes Returns this employes.
     */
    public function setGrilleAnc3($grilleAnc3) {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param boolean $hNuitType2 The h nuit type2.
     * @return Employes Returns this employes.
     */
    public function setHNuitType2($hNuitType2) {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param boolean $handicape The handicape.
     * @return Employes Returns this employes.
     */
    public function setHandicape($handicape) {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string $lieuTravailConjoint The lieu travail conjoint.
     * @return Employes Returns this employes.
     */
    public function setLieuTravailConjoint($lieuTravailConjoint) {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string $matricule The matricule.
     * @return Employes Returns this employes.
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param string $mensualisationTache The mensualisation tache.
     * @return Employes Returns this employes.
     */
    public function setMensualisationTache($mensualisationTache) {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the mention c p.
     *
     * @param boolean $mentionCP The mention c p.
     * @return Employes Returns this employes.
     */
    public function setMentionCP($mentionCP) {
        $this->mentionCP = $mentionCP;
        return $this;
    }

    /**
     * Set the min garanti.
     *
     * @param float $minGaranti The min garanti.
     * @return Employes Returns this employes.
     */
    public function setMinGaranti($minGaranti) {
        $this->minGaranti = $minGaranti;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     * @return Employes Returns this employes.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     * @return Employes Returns this employes.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     * @return Employes Returns this employes.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float $montant4 The montant4.
     * @return Employes Returns this employes.
     */
    public function setMontant4($montant4) {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float $montant5 The montant5.
     * @return Employes Returns this employes.
     */
    public function setMontant5($montant5) {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the montant avantage.
     *
     * @param float $montantAvantage The montant avantage.
     * @return Employes Returns this employes.
     */
    public function setMontantAvantage($montantAvantage) {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }

    /**
     * Set the mt base acompte.
     *
     * @param float $mtBaseAcompte The mt base acompte.
     * @return Employes Returns this employes.
     */
    public function setMtBaseAcompte($mtBaseAcompte) {
        $this->mtBaseAcompte = $mtBaseAcompte;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string $nationalite The nationalite.
     * @return Employes Returns this employes.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     * @return Employes Returns this employes.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb heure sal.
     *
     * @param float $nbHeureSal The nb heure sal.
     * @return Employes Returns this employes.
     */
    public function setNbHeureSal($nbHeureSal) {
        $this->nbHeureSal = $nbHeureSal;
        return $this;
    }

    /**
     * Set the nb heure sup.
     *
     * @param float $nbHeureSup The nb heure sup.
     * @return Employes Returns this employes.
     */
    public function setNbHeureSup($nbHeureSup) {
        $this->nbHeureSup = $nbHeureSup;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float $nbHeureTrav The nb heure trav.
     * @return Employes Returns this employes.
     */
    public function setNbHeureTrav($nbHeureTrav) {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb jour base c p.
     *
     * @param float $nbJourBaseCP The nb jour base c p.
     * @return Employes Returns this employes.
     */
    public function setNbJourBaseCP($nbJourBaseCP) {
        $this->nbJourBaseCP = $nbJourBaseCP;
        return $this;
    }

    /**
     * Set the nb points.
     *
     * @param int $nbPoints The nb points.
     * @return Employes Returns this employes.
     */
    public function setNbPoints($nbPoints) {
        $this->nbPoints = $nbPoints;
        return $this;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string $niveauConfidentialite The niveau confidentialite.
     * @return Employes Returns this employes.
     */
    public function setNiveauConfidentialite($niveauConfidentialite) {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string $nomConjoint The nom conjoint.
     * @return Employes Returns this employes.
     */
    public function setNomConjoint($nomConjoint) {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     * @return Employes Returns this employes.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     * @return Employes Returns this employes.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return Employes Returns this employes.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return Employes Returns this employes.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string $nombreEnfants The nombre enfants.
     * @return Employes Returns this employes.
     */
    public function setNombreEnfants($nombreEnfants) {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return Employes Returns this employes.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return Employes Returns this employes.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string $numeroCarteSejour The numero carte sejour.
     * @return Employes Returns this employes.
     */
    public function setNumeroCarteSejour($numeroCarteSejour) {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string $numeroCarteTravail The numero carte travail.
     * @return Employes Returns this employes.
     */
    public function setNumeroCarteTravail($numeroCarteTravail) {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }

    /**
     * Set the numero cas part secu.
     *
     * @param int $numeroCasPartSecu The numero cas part secu.
     * @return Employes Returns this employes.
     */
    public function setNumeroCasPartSecu($numeroCasPartSecu) {
        $this->numeroCasPartSecu = $numeroCasPartSecu;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return Employes Returns this employes.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string $numeroInsee The numero insee.
     * @return Employes Returns this employes.
     */
    public function setNumeroInsee($numeroInsee) {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero permis.
     *
     * @param string $numeroPermis The numero permis.
     * @return Employes Returns this employes.
     */
    public function setNumeroPermis($numeroPermis) {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }

    /**
     * Set the orphelin.
     *
     * @param boolean $orphelin The orphelin.
     * @return Employes Returns this employes.
     */
    public function setOrphelin($orphelin) {
        $this->orphelin = $orphelin;
        return $this;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param boolean $pasGestionPdp The pas gestion pdp.
     * @return Employes Returns this employes.
     */
    public function setPasGestionPdp($pasGestionPdp) {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }

    /**
     * Set the pas gestion pdp1.
     *
     * @param boolean $pasGestionPdp1 The pas gestion pdp1.
     * @return Employes Returns this employes.
     */
    public function setPasGestionPdp1($pasGestionPdp1) {
        $this->pasGestionPdp1 = $pasGestionPdp1;
        return $this;
    }

    /**
     * Set the pension.
     *
     * @param boolean $pension The pension.
     * @return Employes Returns this employes.
     */
    public function setPension($pension) {
        $this->pension = $pension;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return Employes Returns this employes.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime $permisDelivreLe The permis delivre le.
     * @return Employes Returns this employes.
     */
    public function setPermisDelivreLe(DateTime $permisDelivreLe = null) {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string $permisDelivrePar The permis delivre par.
     * @return Employes Returns this employes.
     */
    public function setPermisDelivrePar($permisDelivrePar) {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime $permisExpireLe The permis expire le.
     * @return Employes Returns this employes.
     */
    public function setPermisExpireLe(DateTime $permisExpireLe = null) {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string $personneAPrevenir The personne a prevenir.
     * @return Employes Returns this employes.
     */
    public function setPersonneAPrevenir($personneAPrevenir) {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }

    /**
     * Set the plafond g m p.
     *
     * @param float $plafondGMP The plafond g m p.
     * @return Employes Returns this employes.
     */
    public function setPlafondGMP($plafondGMP) {
        $this->plafondGMP = $plafondGMP;
        return $this;
    }

    /**
     * Set the plafond s s1.
     *
     * @param float $plafondSS1 The plafond s s1.
     * @return Employes Returns this employes.
     */
    public function setPlafondSS1($plafondSS1) {
        $this->plafondSS1 = $plafondSS1;
        return $this;
    }

    /**
     * Set the plafond s s30.
     *
     * @param boolean $plafondSS30 The plafond s s30.
     * @return Employes Returns this employes.
     */
    public function setPlafondSS30($plafondSS30) {
        $this->plafondSS30 = $plafondSS30;
        return $this;
    }

    /**
     * Set the pourcent abat.
     *
     * @param float $pourcentAbat The pourcent abat.
     * @return Employes Returns this employes.
     */
    public function setPourcentAbat($pourcentAbat) {
        $this->pourcentAbat = $pourcentAbat;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     * @return Employes Returns this employes.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the pourcent effectif d u c s.
     *
     * @param float $pourcentEffectifDUCS The pourcent effectif d u c s.
     * @return Employes Returns this employes.
     */
    public function setPourcentEffectifDUCS($pourcentEffectifDUCS) {
        $this->pourcentEffectifDUCS = $pourcentEffectifDUCS;
        return $this;
    }

    /**
     * Set the pourcent remu hor.
     *
     * @param float $pourcentRemuHor The pourcent remu hor.
     * @return Employes Returns this employes.
     */
    public function setPourcentRemuHor($pourcentRemuHor) {
        $this->pourcentRemuHor = $pourcentRemuHor;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return Employes Returns this employes.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string $prenomConjoint The prenom conjoint.
     * @return Employes Returns this employes.
     */
    public function setPrenomConjoint($prenomConjoint) {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }

    /**
     * Set the prime.
     *
     * @param boolean $prime The prime.
     * @return Employes Returns this employes.
     */
    public function setPrime($prime) {
        $this->prime = $prime;
        return $this;
    }

    /**
     * Set the prud college.
     *
     * @param string $prudCollege The prud college.
     * @return Employes Returns this employes.
     */
    public function setPrudCollege($prudCollege) {
        $this->prudCollege = $prudCollege;
        return $this;
    }

    /**
     * Set the prud lieu vote.
     *
     * @param string $prudLieuVote The prud lieu vote.
     * @return Employes Returns this employes.
     */
    public function setPrudLieuVote($prudLieuVote) {
        $this->prudLieuVote = $prudLieuVote;
        return $this;
    }

    /**
     * Set the prud section.
     *
     * @param string $prudSection The prud section.
     * @return Employes Returns this employes.
     */
    public function setPrudSection($prudSection) {
        $this->prudSection = $prudSection;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     * @return Employes Returns this employes.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     * @return Employes Returns this employes.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regroup virement.
     *
     * @param string $regroupVirement The regroup virement.
     * @return Employes Returns this employes.
     */
    public function setRegroupVirement($regroupVirement) {
        $this->regroupVirement = $regroupVirement;
        return $this;
    }

    /**
     * Set the regul t d s.
     *
     * @param boolean $regulTDS The regul t d s.
     * @return Employes Returns this employes.
     */
    public function setRegulTDS($regulTDS) {
        $this->regulTDS = $regulTDS;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     * @return Employes Returns this employes.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     * @return Employes Returns this employes.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return Employes Returns this employes.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string $sexe The sexe.
     * @return Employes Returns this employes.
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string $situationFam The situation fam.
     * @return Employes Returns this employes.
     */
    public function setSituationFam($situationFam) {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the t d s100.
     *
     * @param float $tDS100 The t d s100.
     * @return Employes Returns this employes.
     */
    public function setTDS100($tDS100) {
        $this->tDS100 = $tDS100;
        return $this;
    }

    /**
     * Set the t d s102.
     *
     * @param float $tDS102 The t d s102.
     * @return Employes Returns this employes.
     */
    public function setTDS102($tDS102) {
        $this->tDS102 = $tDS102;
        return $this;
    }

    /**
     * Set the t d s103.
     *
     * @param float $tDS103 The t d s103.
     * @return Employes Returns this employes.
     */
    public function setTDS103($tDS103) {
        $this->tDS103 = $tDS103;
        return $this;
    }

    /**
     * Set the t d s105.
     *
     * @param float $tDS105 The t d s105.
     * @return Employes Returns this employes.
     */
    public function setTDS105($tDS105) {
        $this->tDS105 = $tDS105;
        return $this;
    }

    /**
     * Set the t d s107.
     *
     * @param boolean $tDS107 The t d s107.
     * @return Employes Returns this employes.
     */
    public function setTDS107($tDS107) {
        $this->tDS107 = $tDS107;
        return $this;
    }

    /**
     * Set the t d s108.
     *
     * @param boolean $tDS108 The t d s108.
     * @return Employes Returns this employes.
     */
    public function setTDS108($tDS108) {
        $this->tDS108 = $tDS108;
        return $this;
    }

    /**
     * Set the t d s109.
     *
     * @param boolean $tDS109 The t d s109.
     * @return Employes Returns this employes.
     */
    public function setTDS109($tDS109) {
        $this->tDS109 = $tDS109;
        return $this;
    }

    /**
     * Set the t d s110.
     *
     * @param boolean $tDS110 The t d s110.
     * @return Employes Returns this employes.
     */
    public function setTDS110($tDS110) {
        $this->tDS110 = $tDS110;
        return $this;
    }

    /**
     * Set the t d s112.
     *
     * @param float $tDS112 The t d s112.
     * @return Employes Returns this employes.
     */
    public function setTDS112($tDS112) {
        $this->tDS112 = $tDS112;
        return $this;
    }

    /**
     * Set the t d s113.
     *
     * @param boolean $tDS113 The t d s113.
     * @return Employes Returns this employes.
     */
    public function setTDS113($tDS113) {
        $this->tDS113 = $tDS113;
        return $this;
    }

    /**
     * Set the t d s117.
     *
     * @param float $tDS117 The t d s117.
     * @return Employes Returns this employes.
     */
    public function setTDS117($tDS117) {
        $this->tDS117 = $tDS117;
        return $this;
    }

    /**
     * Set the t d s119.
     *
     * @param boolean $tDS119 The t d s119.
     * @return Employes Returns this employes.
     */
    public function setTDS119($tDS119) {
        $this->tDS119 = $tDS119;
        return $this;
    }

    /**
     * Set the t d s120.
     *
     * @param boolean $tDS120 The t d s120.
     * @return Employes Returns this employes.
     */
    public function setTDS120($tDS120) {
        $this->tDS120 = $tDS120;
        return $this;
    }

    /**
     * Set the t d s121.
     *
     * @param boolean $tDS121 The t d s121.
     * @return Employes Returns this employes.
     */
    public function setTDS121($tDS121) {
        $this->tDS121 = $tDS121;
        return $this;
    }

    /**
     * Set the t d s122.
     *
     * @param boolean $tDS122 The t d s122.
     * @return Employes Returns this employes.
     */
    public function setTDS122($tDS122) {
        $this->tDS122 = $tDS122;
        return $this;
    }

    /**
     * Set the t d s125.
     *
     * @param float $tDS125 The t d s125.
     * @return Employes Returns this employes.
     */
    public function setTDS125($tDS125) {
        $this->tDS125 = $tDS125;
        return $this;
    }

    /**
     * Set the t d s127.
     *
     * @param float $tDS127 The t d s127.
     * @return Employes Returns this employes.
     */
    public function setTDS127($tDS127) {
        $this->tDS127 = $tDS127;
        return $this;
    }

    /**
     * Set the t d s128.
     *
     * @param string $tDS128 The t d s128.
     * @return Employes Returns this employes.
     */
    public function setTDS128($tDS128) {
        $this->tDS128 = $tDS128;
        return $this;
    }

    /**
     * Set the t d s132.
     *
     * @param float $tDS132 The t d s132.
     * @return Employes Returns this employes.
     */
    public function setTDS132($tDS132) {
        $this->tDS132 = $tDS132;
        return $this;
    }

    /**
     * Set the t d s133.
     *
     * @param string $tDS133 The t d s133.
     * @return Employes Returns this employes.
     */
    public function setTDS133($tDS133) {
        $this->tDS133 = $tDS133;
        return $this;
    }

    /**
     * Set the t d s134.
     *
     * @param float $tDS134 The t d s134.
     * @return Employes Returns this employes.
     */
    public function setTDS134($tDS134) {
        $this->tDS134 = $tDS134;
        return $this;
    }

    /**
     * Set the t d s135.
     *
     * @param float $tDS135 The t d s135.
     * @return Employes Returns this employes.
     */
    public function setTDS135($tDS135) {
        $this->tDS135 = $tDS135;
        return $this;
    }

    /**
     * Set the t d s136.
     *
     * @param float $tDS136 The t d s136.
     * @return Employes Returns this employes.
     */
    public function setTDS136($tDS136) {
        $this->tDS136 = $tDS136;
        return $this;
    }

    /**
     * Set the t d s138.
     *
     * @param string $tDS138 The t d s138.
     * @return Employes Returns this employes.
     */
    public function setTDS138($tDS138) {
        $this->tDS138 = $tDS138;
        return $this;
    }

    /**
     * Set the t d s139.
     *
     * @param string $tDS139 The t d s139.
     * @return Employes Returns this employes.
     */
    public function setTDS139($tDS139) {
        $this->tDS139 = $tDS139;
        return $this;
    }

    /**
     * Set the t d s141.
     *
     * @param float $tDS141 The t d s141.
     * @return Employes Returns this employes.
     */
    public function setTDS141($tDS141) {
        $this->tDS141 = $tDS141;
        return $this;
    }

    /**
     * Set the t d s59.
     *
     * @param string $tDS59 The t d s59.
     * @return Employes Returns this employes.
     */
    public function setTDS59($tDS59) {
        $this->tDS59 = $tDS59;
        return $this;
    }

    /**
     * Set the t d s60.
     *
     * @param boolean $tDS60 The t d s60.
     * @return Employes Returns this employes.
     */
    public function setTDS60($tDS60) {
        $this->tDS60 = $tDS60;
        return $this;
    }

    /**
     * Set the t d s61.
     *
     * @param string $tDS61 The t d s61.
     * @return Employes Returns this employes.
     */
    public function setTDS61($tDS61) {
        $this->tDS61 = $tDS61;
        return $this;
    }

    /**
     * Set the t d s75.
     *
     * @param int $tDS75 The t d s75.
     * @return Employes Returns this employes.
     */
    public function setTDS75($tDS75) {
        $this->tDS75 = $tDS75;
        return $this;
    }

    /**
     * Set the t d s76.
     *
     * @param string $tDS76 The t d s76.
     * @return Employes Returns this employes.
     */
    public function setTDS76($tDS76) {
        $this->tDS76 = $tDS76;
        return $this;
    }

    /**
     * Set the t d s77.
     *
     * @param string $tDS77 The t d s77.
     * @return Employes Returns this employes.
     */
    public function setTDS77($tDS77) {
        $this->tDS77 = $tDS77;
        return $this;
    }

    /**
     * Set the t d s78.
     *
     * @param boolean $tDS78 The t d s78.
     * @return Employes Returns this employes.
     */
    public function setTDS78($tDS78) {
        $this->tDS78 = $tDS78;
        return $this;
    }

    /**
     * Set the t d s81.
     *
     * @param float $tDS81 The t d s81.
     * @return Employes Returns this employes.
     */
    public function setTDS81($tDS81) {
        $this->tDS81 = $tDS81;
        return $this;
    }

    /**
     * Set the t d s82.
     *
     * @param float $tDS82 The t d s82.
     * @return Employes Returns this employes.
     */
    public function setTDS82($tDS82) {
        $this->tDS82 = $tDS82;
        return $this;
    }

    /**
     * Set the t d s84.
     *
     * @param float $tDS84 The t d s84.
     * @return Employes Returns this employes.
     */
    public function setTDS84($tDS84) {
        $this->tDS84 = $tDS84;
        return $this;
    }

    /**
     * Set the t d s85.
     *
     * @param float $tDS85 The t d s85.
     * @return Employes Returns this employes.
     */
    public function setTDS85($tDS85) {
        $this->tDS85 = $tDS85;
        return $this;
    }

    /**
     * Set the t d s86.
     *
     * @param float $tDS86 The t d s86.
     * @return Employes Returns this employes.
     */
    public function setTDS86($tDS86) {
        $this->tDS86 = $tDS86;
        return $this;
    }

    /**
     * Set the t d s87.
     *
     * @param float $tDS87 The t d s87.
     * @return Employes Returns this employes.
     */
    public function setTDS87($tDS87) {
        $this->tDS87 = $tDS87;
        return $this;
    }

    /**
     * Set the t d s88.
     *
     * @param float $tDS88 The t d s88.
     * @return Employes Returns this employes.
     */
    public function setTDS88($tDS88) {
        $this->tDS88 = $tDS88;
        return $this;
    }

    /**
     * Set the t d s89.
     *
     * @param float $tDS89 The t d s89.
     * @return Employes Returns this employes.
     */
    public function setTDS89($tDS89) {
        $this->tDS89 = $tDS89;
        return $this;
    }

    /**
     * Set the t d s90.
     *
     * @param float $tDS90 The t d s90.
     * @return Employes Returns this employes.
     */
    public function setTDS90($tDS90) {
        $this->tDS90 = $tDS90;
        return $this;
    }

    /**
     * Set the t d s91.
     *
     * @param float $tDS91 The t d s91.
     * @return Employes Returns this employes.
     */
    public function setTDS91($tDS91) {
        $this->tDS91 = $tDS91;
        return $this;
    }

    /**
     * Set the t d s92.
     *
     * @param float $tDS92 The t d s92.
     * @return Employes Returns this employes.
     */
    public function setTDS92($tDS92) {
        $this->tDS92 = $tDS92;
        return $this;
    }

    /**
     * Set the t d s93.
     *
     * @param float $tDS93 The t d s93.
     * @return Employes Returns this employes.
     */
    public function setTDS93($tDS93) {
        $this->tDS93 = $tDS93;
        return $this;
    }

    /**
     * Set the t d s94.
     *
     * @param float $tDS94 The t d s94.
     * @return Employes Returns this employes.
     */
    public function setTDS94($tDS94) {
        $this->tDS94 = $tDS94;
        return $this;
    }

    /**
     * Set the t d s95.
     *
     * @param float $tDS95 The t d s95.
     * @return Employes Returns this employes.
     */
    public function setTDS95($tDS95) {
        $this->tDS95 = $tDS95;
        return $this;
    }

    /**
     * Set the taux1.
     *
     * @param float $taux1 The taux1.
     * @return Employes Returns this employes.
     */
    public function setTaux1($taux1) {
        $this->taux1 = $taux1;
        return $this;
    }

    /**
     * Set the taux2.
     *
     * @param float $taux2 The taux2.
     * @return Employes Returns this employes.
     */
    public function setTaux2($taux2) {
        $this->taux2 = $taux2;
        return $this;
    }

    /**
     * Set the taux3.
     *
     * @param float $taux3 The taux3.
     * @return Employes Returns this employes.
     */
    public function setTaux3($taux3) {
        $this->taux3 = $taux3;
        return $this;
    }

    /**
     * Set the taux4.
     *
     * @param float $taux4 The taux4.
     * @return Employes Returns this employes.
     */
    public function setTaux4($taux4) {
        $this->taux4 = $taux4;
        return $this;
    }

    /**
     * Set the taux5.
     *
     * @param float $taux5 The taux5.
     * @return Employes Returns this employes.
     */
    public function setTaux5($taux5) {
        $this->taux5 = $taux5;
        return $this;
    }

    /**
     * Set the taux absence.
     *
     * @param float $tauxAbsence The taux absence.
     * @return Employes Returns this employes.
     */
    public function setTauxAbsence($tauxAbsence) {
        $this->tauxAbsence = $tauxAbsence;
        return $this;
    }

    /**
     * Set the taux ancien.
     *
     * @param float $tauxAncien The taux ancien.
     * @return Employes Returns this employes.
     */
    public function setTauxAncien($tauxAncien) {
        $this->tauxAncien = $tauxAncien;
        return $this;
    }

    /**
     * Set the taux h sup.
     *
     * @param float $tauxHSup The taux h sup.
     * @return Employes Returns this employes.
     */
    public function setTauxHSup($tauxHSup) {
        $this->tauxHSup = $tauxHSup;
        return $this;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float $tauxPensionCivile The taux pension civile.
     * @return Employes Returns this employes.
     */
    public function setTauxPensionCivile($tauxPensionCivile) {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float $tauxPensionMilitaire The taux pension militaire.
     * @return Employes Returns this employes.
     */
    public function setTauxPensionMilitaire($tauxPensionMilitaire) {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param boolean $taxeSalaire The taxe salaire.
     * @return Employes Returns this employes.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return Employes Returns this employes.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string $telConjoint The tel conjoint.
     * @return Employes Returns this employes.
     */
    public function setTelConjoint($telConjoint) {
        $this->telConjoint = $telConjoint;
        return $this;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string $telPersAPrevenir The tel pers a prevenir.
     * @return Employes Returns this employes.
     */
    public function setTelPersAPrevenir($telPersAPrevenir) {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param boolean $tempsPasse The temps passe.
     * @return Employes Returns this employes.
     */
    public function setTempsPasse($tempsPasse) {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return Employes Returns this employes.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the transfert entree1.
     *
     * @param boolean $transfertEntree1 The transfert entree1.
     * @return Employes Returns this employes.
     */
    public function setTransfertEntree1($transfertEntree1) {
        $this->transfertEntree1 = $transfertEntree1;
        return $this;
    }

    /**
     * Set the transfert entree2.
     *
     * @param boolean $transfertEntree2 The transfert entree2.
     * @return Employes Returns this employes.
     */
    public function setTransfertEntree2($transfertEntree2) {
        $this->transfertEntree2 = $transfertEntree2;
        return $this;
    }

    /**
     * Set the transfert sortie1.
     *
     * @param boolean $transfertSortie1 The transfert sortie1.
     * @return Employes Returns this employes.
     */
    public function setTransfertSortie1($transfertSortie1) {
        $this->transfertSortie1 = $transfertSortie1;
        return $this;
    }

    /**
     * Set the transfert sortie2.
     *
     * @param boolean $transfertSortie2 The transfert sortie2.
     * @return Employes Returns this employes.
     */
    public function setTransfertSortie2($transfertSortie2) {
        $this->transfertSortie2 = $transfertSortie2;
        return $this;
    }

    /**
     * Set the travaille j f.
     *
     * @param boolean $travailleJF The travaille j f.
     * @return Employes Returns this employes.
     */
    public function setTravailleJF($travailleJF) {
        $this->travailleJF = $travailleJF;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string $typeContrat The type contrat.
     * @return Employes Returns this employes.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string $typeNationalite The type nationalite.
     * @return Employes Returns this employes.
     */
    public function setTypeNationalite($typeNationalite) {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     * @return Employes Returns this employes.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param boolean $vrpMulticarte The vrp multicarte.
     * @return Employes Returns this employes.
     */
    public function setVrpMulticarte($vrpMulticarte) {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }

    /**
     * Set the plafond s s2.
     *
     * @param float $plafondSS2 The plafond s s2.
     * @return Employes Returns this employes.
     */
    public function setplafondSS2($plafondSS2) {
        $this->plafondSS2 = $plafondSS2;
        return $this;
    }

}
