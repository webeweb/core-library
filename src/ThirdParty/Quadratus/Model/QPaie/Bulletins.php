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
 * Bulletins.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Bulletins {

    /**
     * Abat theo.
     *
     * @var float
     */
    private $abatTheo;

    /**
     * Abattement max.
     *
     * @var float
     */
    private $abattementMax;

    /**
     * Allegement.
     *
     * @var float
     */
    private $allegement;

    /**
     * Allegement non proratise.
     *
     * @var float
     */
    private $allegementNonProratise;

    /**
     * Avantage nature.
     *
     * @var float
     */
    private $avantageNature;

    /**
     * Base gmp.
     *
     * @var float
     */
    private $baseGmp;

    /**
     * Base secu.
     *
     * @var float
     */
    private $baseSecu;

    /**
     * Base ss plaf modif.
     *
     * @var bool
     */
    private $baseSsPlafModif;

    /**
     * Borne per modifie.
     *
     * @var bool
     */
    private $bornePerModifie;

    /**
     * Brut.
     *
     * @var float
     */
    private $brut;

    /**
     * Brut al.
     *
     * @var float
     */
    private $brutAl;

    /**
     * Brut al limite smic.
     *
     * @var float
     */
    private $brutAlLimiteSmic;

    /**
     * Brut al modifie.
     *
     * @var bool
     */
    private $brutAlModifie;

    /**
     * Brut anl.
     *
     * @var float
     */
    private $brutAnl;

    /**
     * Brut caisse1.
     *
     * @var float
     */
    private $brutCaisse1;

    /**
     * Brut caisse2.
     *
     * @var float
     */
    private $brutCaisse2;

    /**
     * Brut caisse3.
     *
     * @var float
     */
    private $brutCaisse3;

    /**
     * Brut caisse cp.
     *
     * @var float
     */
    private $brutCaisseCp;

    /**
     * Brut cp.
     *
     * @var float
     */
    private $brutCp;

    /**
     * Brut csg.
     *
     * @var float
     */
    private $brutCsg;

    /**
     * Brut soumis abat.
     *
     * @var float
     */
    private $brutSoumisAbat;

    /**
     * Brut soumis crds.
     *
     * @var float
     */
    private $brutSoumisCrds;

    /**
     * Bulletin publie.
     *
     * @var bool
     */
    private $bulletinPublie;

    /**
     * Categ tds.
     *
     * @var string
     */
    private $categTds;

    /**
     * Cheque edite.
     *
     * @var bool
     */
    private $chequeEdite;

    /**
     * Chom partiel coeff indem.
     *
     * @var float
     */
    private $chomPartielCoeffIndem;

    /**
     * Chom partiel cp.
     *
     * @var float
     */
    private $chomPartielCp;

    /**
     * Chom partiel min indem.
     *
     * @var float
     */
    private $chomPartielMinIndem;

    /**
     * Code at per.
     *
     * @var int
     */
    private $codeAtPer;

    /**
     * Code centre urssaf.
     *
     * @var string
     */
    private $codeCentreUrssaf;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code type sal.
     *
     * @var string
     */
    private $codeTypeSal;

    /**
     * Coeff intemperie.
     *
     * @var float
     */
    private $coeffIntemperie;

    /**
     * Cont h sup repos comp.
     *
     * @var float
     */
    private $contHSupReposComp;

    /**
     * Cout global mois.
     *
     * @var float
     */
    private $coutGlobalMois;

    /**
     * Cum30 ss.
     *
     * @var float
     */
    private $cum30Ss;

    /**
     * Cum ant h sup.
     *
     * @var float
     */
    private $cumAntHSup;

    /**
     * Cum base gmp.
     *
     * @var float
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float
     */
    private $cumBaseSs;

    /**
     * Cum brut.
     *
     * @var float
     */
    private $cumBrut;

    /**
     * Cum brut al.
     *
     * @var float
     */
    private $cumBrutAl;

    /**
     * Cum brut anl.
     *
     * @var float
     */
    private $cumBrutAnl;

    /**
     * Cum brut caisse1.
     *
     * @var float
     */
    private $cumBrutCaisse1;

    /**
     * Cum brut caisse2.
     *
     * @var float
     */
    private $cumBrutCaisse2;

    /**
     * Cum brut caisse3.
     *
     * @var float
     */
    private $cumBrutCaisse3;

    /**
     * Cum dif dus.
     *
     * @var float
     */
    private $cumDifDus;

    /**
     * Cum dif dus1.
     *
     * @var float
     */
    private $cumDifDus1;

    /**
     * Cum h bonifie.
     *
     * @var float
     */
    private $cumHBonifie;

    /**
     * Cum h repos comp.
     *
     * @var float
     */
    private $cumHReposComp;

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
     * Cum impos.
     *
     * @var float
     */
    private $cumImpos;

    /**
     * Cum j repos recup.
     *
     * @var float
     */
    private $cumJReposRecup;

    /**
     * Cum mt cp pris.
     *
     * @var float
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris1.
     *
     * @var float
     */
    private $cumMtCpPris1;

    /**
     * Cum net a payer.
     *
     * @var float
     */
    private $cumNetAPayer;

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
     * Cum plafond gmp.
     *
     * @var float
     */
    private $cumPlafondGmp;

    /**
     * Cum pss1.
     *
     * @var float
     */
    private $cumPss1;

    /**
     * Cum pss2.
     *
     * @var float
     */
    private $cumPss2;

    /**
     * Cum rtt dus.
     *
     * @var float
     */
    private $cumRttDus;

    /**
     * Cum rtt pris.
     *
     * @var float
     */
    private $cumRttPris;

    /**
     * Cum tr a caisse1.
     *
     * @var float
     */
    private $cumTrACaisse1;

    /**
     * Cum tr a caisse2.
     *
     * @var float
     */
    private $cumTrACaisse2;

    /**
     * Cum tr a caisse3.
     *
     * @var float
     */
    private $cumTrACaisse3;

    /**
     * Cum tr b caisse1.
     *
     * @var float
     */
    private $cumTrBCaisse1;

    /**
     * Cum tr b caisse2.
     *
     * @var float
     */
    private $cumTrBCaisse2;

    /**
     * Cum tr b caisse3.
     *
     * @var float
     */
    private $cumTrBCaisse3;

    /**
     * Cum tr c caisse1.
     *
     * @var float
     */
    private $cumTrCCaisse1;

    /**
     * Cum tr c caisse2.
     *
     * @var float
     */
    private $cumTrCCaisse2;

    /**
     * Cum tr c caisse3.
     *
     * @var float
     */
    private $cumTrCCaisse3;

    /**
     * Cum tranche2.
     *
     * @var float
     */
    private $cumTranche2;

    /**
     * Cum tranche a.
     *
     * @var float
     */
    private $cumTrancheA;

    /**
     * Cum tranche b.
     *
     * @var float
     */
    private $cumTrancheB;

    /**
     * Cum tranche c.
     *
     * @var float
     */
    private $cumTrancheC;

    /**
     * Delta.
     *
     * @var float
     */
    private $delta;

    /**
     * Droit cp.
     *
     * @var float
     */
    private $droitCp;

    /**
     * Dt debut periode.
     *
     * @var DateTime|null
     */
    private $dtDebutPeriode;

    /**
     * Dt fin periode.
     *
     * @var DateTime|null
     */
    private $dtFinPeriode;

    /**
     * Ecart cumule.
     *
     * @var float
     */
    private $ecartCumule;

    /**
     * Etat bul.
     *
     * @var string
     */
    private $etatBul;

    /**
     * Etat edition.
     *
     * @var string
     */
    private $etatEdition;

    /**
     * Forfait jour.
     *
     * @var bool
     */
    private $forfaitJour;

    /**
     * Gest calc net paye.
     *
     * @var bool
     */
    private $gestCalcNetPaye;

    /**
     * Gestion coeff.
     *
     * @var bool
     */
    private $gestionCoeff;

    /**
     * H reel trav.
     *
     * @var float
     */
    private $hReelTrav;

    /**
     * H theo trav.
     *
     * @var float
     */
    private $hTheoTrav;

    /**
     * Heure absence.
     *
     * @var float
     */
    private $heureAbsence;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Lien justificatif.
     *
     * @var string
     */
    private $lienJustificatif;

    /**
     * Max abat.
     *
     * @var float
     */
    private $maxAbat;

    /**
     * Mensuel journalier.
     *
     * @var bool
     */
    private $mensuelJournalier;

    /**
     * Methode indem cp.
     *
     * @var string
     */
    private $methodeIndemCp;

    /**
     * Mig.
     *
     * @var float
     */
    private $mig;

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
     * Mt h sup bonif.
     *
     * @var float
     */
    private $mtHSupBonif;

    /**
     * Mt i cp cp.
     *
     * @var float
     */
    private $mtICpCp;

    /**
     * Mt i cpt.
     *
     * @var float
     */
    private $mtICpt;

    /**
     * Mt i int.
     *
     * @var float
     */
    private $mtIInt;

    /**
     * Mt jcp arbitrage.
     *
     * @var bool
     */
    private $mtJcpArbitrage;

    /**
     * Mt journee cp.
     *
     * @var float
     */
    private $mtJourneeCp;

    /**
     * Mt net paye theo.
     *
     * @var float
     */
    private $mtNetPayeTheo;

    /**
     * Mt taux lig sal base.
     *
     * @var float
     */
    private $mtTauxLigSalBase;

    /**
     * Nb30.
     *
     * @var float
     */
    private $nb30;

    /**
     * Nb h ab cp.
     *
     * @var float
     */
    private $nbHAbCp;

    /**
     * Nb h absence intemp.
     *
     * @var float
     */
    private $nbHAbsenceIntemp;

    /**
     * Nb h attente.
     *
     * @var float
     */
    private $nbHAttente;

    /**
     * Nb h bonifie dues.
     *
     * @var float
     */
    private $nbHBonifieDues;

    /**
     * Nb h bonifie prises.
     *
     * @var float
     */
    private $nbHBonifiePrises;

    /**
     * Nb h carence intemp.
     *
     * @var float
     */
    private $nbHCarenceIntemp;

    /**
     * Nb h chom part cp.
     *
     * @var float
     */
    private $nbHChomPartCp;

    /**
     * Nb h chom part tech.
     *
     * @var float
     */
    private $nbHChomPartTech;

    /**
     * Nb h conduite.
     *
     * @var float
     */
    private $nbHConduite;

    /**
     * Nb h conting.
     *
     * @var float
     */
    private $nbHConting;

    /**
     * Nb h dble.
     *
     * @var float
     */
    private $nbHDble;

    /**
     * Nb h dif dus.
     *
     * @var float
     */
    private $nbHDifDus;

    /**
     * Nb h intemp indem.
     *
     * @var float
     */
    private $nbHIntempIndem;

    /**
     * Nb h lig sal base.
     *
     * @var float
     */
    private $nbHLigSalBase;

    /**
     * Nb h normal.
     *
     * @var float
     */
    private $nbHNormal;

    /**
     * Nb h pas droit fillon.
     *
     * @var float
     */
    private $nbHPasDroitFillon;

    /**
     * Nb h remplace.
     *
     * @var float
     */
    private $nbHRemplace;

    /**
     * Nb h repo comp dues.
     *
     * @var float
     */
    private $nbHRepoCompDues;

    /**
     * Nb h repo comp prises.
     *
     * @var float
     */
    private $nbHRepoCompPrises;

    /**
     * Nb h repo r dues.
     *
     * @var float
     */
    private $nbHRepoRDues;

    /**
     * Nb h repo r prises.
     *
     * @var float
     */
    private $nbHRepoRPrises;

    /**
     * Nb h sup1.
     *
     * @var float
     */
    private $nbHSup1;

    /**
     * Nb h sup2.
     *
     * @var float
     */
    private $nbHSup2;

    /**
     * Nb h sup3.
     *
     * @var float
     */
    private $nbHSup3;

    /**
     * Nb h sup4.
     *
     * @var float
     */
    private $nbHSup4;

    /**
     * Nb h sup5.
     *
     * @var float
     */
    private $nbHSup5;

    /**
     * Nb h sup bonif.
     *
     * @var float
     */
    private $nbHSupBonif;

    /**
     * Nb h sup bonif abs.
     *
     * @var float
     */
    private $nbHSupBonifAbs;

    /**
     * Nb h trav.
     *
     * @var float
     */
    private $nbHTrav;

    /**
     * Nb h travail.
     *
     * @var float
     */
    private $nbHTravail;

    /**
     * Nb heure paye.
     *
     * @var float
     */
    private $nbHeurePaye;

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
     * Nb heure trav mois.
     *
     * @var float
     */
    private $nbHeureTravMois;

    /**
     * Nb j chom part cp.
     *
     * @var float
     */
    private $nbJChomPartCp;

    /**
     * Nb j dus.
     *
     * @var float
     */
    private $nbJDus;

    /**
     * Nb j dus1.
     *
     * @var float
     */
    private $nbJDus1;

    /**
     * Nb j pris.
     *
     * @var float
     */
    private $nbJPris;

    /**
     * Nb j pris1.
     *
     * @var float
     */
    private $nbJPris1;

    /**
     * Nb j repo recup dus.
     *
     * @var float
     */
    private $nbJRepoRecupDus;

    /**
     * Nb j repo recup pris.
     *
     * @var float
     */
    private $nbJRepoRecupPris;

    /**
     * Nb j trav force.
     *
     * @var bool
     */
    private $nbJTravForce;

    /**
     * Nb j trav mois es.
     *
     * @var int
     */
    private $nbJTravMoisEs;

    /**
     * Nb jour base.
     *
     * @var float
     */
    private $nbJourBase;

    /**
     * Nb jour base cp.
     *
     * @var float
     */
    private $nbJourBaseCp;

    /**
     * Nb jour cp acquis.
     *
     * @var float
     */
    private $nbJourCpAcquis;

    /**
     * Nb jour cp pris.
     *
     * @var float
     */
    private $nbJourCpPris;

    /**
     * Nb jour normaux.
     *
     * @var float
     */
    private $nbJourNormaux;

    /**
     * Nb jour trav.
     *
     * @var float
     */
    private $nbJourTrav;

    /**
     * Nb jrtt dus.
     *
     * @var float
     */
    private $nbJrttDus;

    /**
     * Nb jrtt pris.
     *
     * @var float
     */
    private $nbJrttPris;

    /**
     * Net a payer.
     *
     * @var float
     */
    private $netAPayer;

    /**
     * Net impos.
     *
     * @var float
     */
    private $netImpos;

    /**
     * Note1.
     *
     * @var string
     */
    private $note1;

    /**
     * Note2.
     *
     * @var string
     */
    private $note2;

    /**
     * Note3.
     *
     * @var string
     */
    private $note3;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Paie euro.
     *
     * @var bool
     */
    private $paieEuro;

    /**
     * Paiement cp non pris.
     *
     * @var bool
     */
    private $paiementCpNonPris;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Periodicite modifie.
     *
     * @var bool
     */
    private $periodiciteModifie;

    /**
     * Plafond1 caisse1.
     *
     * @var float
     */
    private $plafond1Caisse1;

    /**
     * Plafond1 caisse2.
     *
     * @var float
     */
    private $plafond1Caisse2;

    /**
     * Plafond1 caisse3.
     *
     * @var float
     */
    private $plafond1Caisse3;

    /**
     * Plafond2 caisse1.
     *
     * @var float
     */
    private $plafond2Caisse1;

    /**
     * Plafond2 caisse2.
     *
     * @var float
     */
    private $plafond2Caisse2;

    /**
     * Plafond2 caisse3.
     *
     * @var float
     */
    private $plafond2Caisse3;

    /**
     * Plafond gmp.
     *
     * @var float
     */
    private $plafondGmp;

    /**
     * Plafond gmp modifie.
     *
     * @var bool
     */
    private $plafondGmpModifie;

    /**
     * Plafond heure.
     *
     * @var float
     */
    private $plafondHeure;

    /**
     * Plafond jour.
     *
     * @var float
     */
    private $plafondJour;

    /**
     * Plafond semaine.
     *
     * @var float
     */
    private $plafondSemaine;

    /**
     * Pourcent abat.
     *
     * @var float
     */
    private $pourcentAbat;

    /**
     * Pourcent act force.
     *
     * @var int
     */
    private $pourcentActForce;

    /**
     * Pourcent activite.
     *
     * @var float
     */
    private $pourcentActivite;

    /**
     * Pourcent remu hor.
     *
     * @var float
     */
    private $pourcentRemuHor;

    /**
     * Pp soumis taxe.
     *
     * @var float
     */
    private $ppSoumisTaxe;

    /**
     * Prov cp.
     *
     * @var float
     */
    private $provCp;

    /**
     * Prov cp1.
     *
     * @var float
     */
    private $provCp1;

    /**
     * Pss1.
     *
     * @var float
     */
    private $pss1;

    /**
     * Pss2.
     *
     * @var float
     */
    private $pss2;

    /**
     * Pss30.
     *
     * @var bool
     */
    private $pss30;

    /**
     * Pss mod.
     *
     * @var bool
     */
    private $pssMod;

    /**
     * Remun mens.
     *
     * @var float
     */
    private $remunMens;

    /**
     * S base.
     *
     * @var float
     */
    private $sBase;

    /**
     * Smic1.
     *
     * @var float
     */
    private $smic1;

    /**
     * Smic h.
     *
     * @var float
     */
    private $smicH;

    /**
     * Smic h35.
     *
     * @var float
     */
    private $smicH35;

    /**
     * Smic h39.
     *
     * @var float
     */
    private $smicH39;

    /**
     * Smic m.
     *
     * @var float
     */
    private $smicM;

    /**
     * Smic m35.
     *
     * @var float
     */
    private $smicM35;

    /**
     * Smic m39.
     *
     * @var float
     */
    private $smicM39;

    /**
     * Sortie mois.
     *
     * @var bool
     */
    private $sortieMois;

    /**
     * Taux h ab cp.
     *
     * @var float
     */
    private $tauxHAbCp;

    /**
     * Taux h absence.
     *
     * @var float
     */
    private $tauxHAbsence;

    /**
     * Taux h normal.
     *
     * @var float
     */
    private $tauxHNormal;

    /**
     * Taux journalier.
     *
     * @var float
     */
    private $tauxJournalier;

    /**
     * Tot acompte.
     *
     * @var float
     */
    private $totAcompte;

    /**
     * Tot acompte cp.
     *
     * @var float
     */
    private $totAcompteCp;

    /**
     * Tot cotis patron.
     *
     * @var float
     */
    private $totCotisPatron;

    /**
     * Tot prime ni.
     *
     * @var float
     */
    private $totPrimeNi;

    /**
     * Tot prime ns.
     *
     * @var float
     */
    private $totPrimeNs;

    /**
     * Tot retenue.
     *
     * @var float
     */
    private $totRetenue;

    /**
     * Tr a caisse1.
     *
     * @var float
     */
    private $trACaisse1;

    /**
     * Tr a caisse2.
     *
     * @var float
     */
    private $trACaisse2;

    /**
     * Tr a caisse3.
     *
     * @var float
     */
    private $trACaisse3;

    /**
     * Tr b caisse1.
     *
     * @var float
     */
    private $trBCaisse1;

    /**
     * Tr b caisse2.
     *
     * @var float
     */
    private $trBCaisse2;

    /**
     * Tr b caisse3.
     *
     * @var float
     */
    private $trBCaisse3;

    /**
     * Tr c caisse1.
     *
     * @var float
     */
    private $trCCaisse1;

    /**
     * Tr c caisse2.
     *
     * @var float
     */
    private $trCCaisse2;

    /**
     * Tr c caisse3.
     *
     * @var float
     */
    private $trCCaisse3;

    /**
     * Tranche2.
     *
     * @var float
     */
    private $tranche2;

    /**
     * Tranche a.
     *
     * @var float
     */
    private $trancheA;

    /**
     * Tranche abal.
     *
     * @var float
     */
    private $trancheAbal;

    /**
     * Tranche abanl.
     *
     * @var float
     */
    private $trancheAbanl;

    /**
     * Tranche abna.
     *
     * @var float
     */
    private $trancheAbna;

    /**
     * Tranche b.
     *
     * @var float
     */
    private $trancheB;

    /**
     * Tranche bbal.
     *
     * @var float
     */
    private $trancheBbal;

    /**
     * Tranche bbanl.
     *
     * @var float
     */
    private $trancheBbanl;

    /**
     * Tranche bbna.
     *
     * @var float
     */
    private $trancheBbna;

    /**
     * Tranche c.
     *
     * @var float
     */
    private $trancheC;

    /**
     * Tranche c plaf.
     *
     * @var float
     */
    private $trancheCPlaf;

    /**
     * Tranche cbal.
     *
     * @var float
     */
    private $trancheCbal;

    /**
     * Tranche cbanl.
     *
     * @var float
     */
    private $trancheCbanl;

    /**
     * Tranche cbna.
     *
     * @var float
     */
    private $trancheCbna;

    /**
     * Txt note rtf.
     *
     * @var string
     */
    private $txtNoteRtf;

    /**
     * Type base caisse1.
     *
     * @var string
     */
    private $typeBaseCaisse1;

    /**
     * Type base caisse2.
     *
     * @var string
     */
    private $typeBaseCaisse2;

    /**
     * Type base caisse3.
     *
     * @var string
     */
    private $typeBaseCaisse3;

    /**
     * Type gestion bal.
     *
     * @var string
     */
    private $typeGestionBal;

    /**
     * Type paiement bul.
     *
     * @var string
     */
    private $typePaiementBul;

    /**
     * Type paiment modifie.
     *
     * @var bool
     */
    private $typePaimentModifie;

    /**
     * Type saisie abs.
     *
     * @var string
     */
    private $typeSaisieAbs;

    /**
     * Type saisie absence.
     *
     * @var string
     */
    private $typeSaisieAbsence;

    /**
     * Valorise cp.
     *
     * @var float
     */
    private $valoriseCp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the abat theo.
     *
     * @return float Returns the abat theo.
     */
    public function getAbatTheo() {
        return $this->abatTheo;
    }

    /**
     * Get the abattement max.
     *
     * @return float Returns the abattement max.
     */
    public function getAbattementMax() {
        return $this->abattementMax;
    }

    /**
     * Get the allegement.
     *
     * @return float Returns the allegement.
     */
    public function getAllegement() {
        return $this->allegement;
    }

    /**
     * Get the allegement non proratise.
     *
     * @return float Returns the allegement non proratise.
     */
    public function getAllegementNonProratise() {
        return $this->allegementNonProratise;
    }

    /**
     * Get the avantage nature.
     *
     * @return float Returns the avantage nature.
     */
    public function getAvantageNature() {
        return $this->avantageNature;
    }

    /**
     * Get the base gmp.
     *
     * @return float Returns the base gmp.
     */
    public function getBaseGmp() {
        return $this->baseGmp;
    }

    /**
     * Get the base secu.
     *
     * @return float Returns the base secu.
     */
    public function getBaseSecu() {
        return $this->baseSecu;
    }

    /**
     * Get the base ss plaf modif.
     *
     * @return bool Returns the base ss plaf modif.
     */
    public function getBaseSsPlafModif() {
        return $this->baseSsPlafModif;
    }

    /**
     * Get the borne per modifie.
     *
     * @return bool Returns the borne per modifie.
     */
    public function getBornePerModifie() {
        return $this->bornePerModifie;
    }

    /**
     * Get the brut.
     *
     * @return float Returns the brut.
     */
    public function getBrut() {
        return $this->brut;
    }

    /**
     * Get the brut al.
     *
     * @return float Returns the brut al.
     */
    public function getBrutAl() {
        return $this->brutAl;
    }

    /**
     * Get the brut al limite smic.
     *
     * @return float Returns the brut al limite smic.
     */
    public function getBrutAlLimiteSmic() {
        return $this->brutAlLimiteSmic;
    }

    /**
     * Get the brut al modifie.
     *
     * @return bool Returns the brut al modifie.
     */
    public function getBrutAlModifie() {
        return $this->brutAlModifie;
    }

    /**
     * Get the brut anl.
     *
     * @return float Returns the brut anl.
     */
    public function getBrutAnl() {
        return $this->brutAnl;
    }

    /**
     * Get the brut caisse1.
     *
     * @return float Returns the brut caisse1.
     */
    public function getBrutCaisse1() {
        return $this->brutCaisse1;
    }

    /**
     * Get the brut caisse2.
     *
     * @return float Returns the brut caisse2.
     */
    public function getBrutCaisse2() {
        return $this->brutCaisse2;
    }

    /**
     * Get the brut caisse3.
     *
     * @return float Returns the brut caisse3.
     */
    public function getBrutCaisse3() {
        return $this->brutCaisse3;
    }

    /**
     * Get the brut caisse cp.
     *
     * @return float Returns the brut caisse cp.
     */
    public function getBrutCaisseCp() {
        return $this->brutCaisseCp;
    }

    /**
     * Get the brut cp.
     *
     * @return float Returns the brut cp.
     */
    public function getBrutCp() {
        return $this->brutCp;
    }

    /**
     * Get the brut csg.
     *
     * @return float Returns the brut csg.
     */
    public function getBrutCsg() {
        return $this->brutCsg;
    }

    /**
     * Get the brut soumis abat.
     *
     * @return float Returns the brut soumis abat.
     */
    public function getBrutSoumisAbat() {
        return $this->brutSoumisAbat;
    }

    /**
     * Get the brut soumis crds.
     *
     * @return float Returns the brut soumis crds.
     */
    public function getBrutSoumisCrds() {
        return $this->brutSoumisCrds;
    }

    /**
     * Get the bulletin publie.
     *
     * @return bool Returns the bulletin publie.
     */
    public function getBulletinPublie() {
        return $this->bulletinPublie;
    }

    /**
     * Get the categ tds.
     *
     * @return string Returns the categ tds.
     */
    public function getCategTds() {
        return $this->categTds;
    }

    /**
     * Get the cheque edite.
     *
     * @return bool Returns the cheque edite.
     */
    public function getChequeEdite() {
        return $this->chequeEdite;
    }

    /**
     * Get the chom partiel coeff indem.
     *
     * @return float Returns the chom partiel coeff indem.
     */
    public function getChomPartielCoeffIndem() {
        return $this->chomPartielCoeffIndem;
    }

    /**
     * Get the chom partiel cp.
     *
     * @return float Returns the chom partiel cp.
     */
    public function getChomPartielCp() {
        return $this->chomPartielCp;
    }

    /**
     * Get the chom partiel min indem.
     *
     * @return float Returns the chom partiel min indem.
     */
    public function getChomPartielMinIndem() {
        return $this->chomPartielMinIndem;
    }

    /**
     * Get the code at per.
     *
     * @return int Returns the code at per.
     */
    public function getCodeAtPer() {
        return $this->codeAtPer;
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
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
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
     * Get the coeff intemperie.
     *
     * @return float Returns the coeff intemperie.
     */
    public function getCoeffIntemperie() {
        return $this->coeffIntemperie;
    }

    /**
     * Get the cont h sup repos comp.
     *
     * @return float Returns the cont h sup repos comp.
     */
    public function getContHSupReposComp() {
        return $this->contHSupReposComp;
    }

    /**
     * Get the cout global mois.
     *
     * @return float Returns the cout global mois.
     */
    public function getCoutGlobalMois() {
        return $this->coutGlobalMois;
    }

    /**
     * Get the cum30 ss.
     *
     * @return float Returns the cum30 ss.
     */
    public function getCum30Ss() {
        return $this->cum30Ss;
    }

    /**
     * Get the cum ant h sup.
     *
     * @return float Returns the cum ant h sup.
     */
    public function getCumAntHSup() {
        return $this->cumAntHSup;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float Returns the cum base gmp.
     */
    public function getCumBaseGmp() {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float Returns the cum base ss.
     */
    public function getCumBaseSs() {
        return $this->cumBaseSs;
    }

    /**
     * Get the cum brut.
     *
     * @return float Returns the cum brut.
     */
    public function getCumBrut() {
        return $this->cumBrut;
    }

    /**
     * Get the cum brut al.
     *
     * @return float Returns the cum brut al.
     */
    public function getCumBrutAl() {
        return $this->cumBrutAl;
    }

    /**
     * Get the cum brut anl.
     *
     * @return float Returns the cum brut anl.
     */
    public function getCumBrutAnl() {
        return $this->cumBrutAnl;
    }

    /**
     * Get the cum brut caisse1.
     *
     * @return float Returns the cum brut caisse1.
     */
    public function getCumBrutCaisse1() {
        return $this->cumBrutCaisse1;
    }

    /**
     * Get the cum brut caisse2.
     *
     * @return float Returns the cum brut caisse2.
     */
    public function getCumBrutCaisse2() {
        return $this->cumBrutCaisse2;
    }

    /**
     * Get the cum brut caisse3.
     *
     * @return float Returns the cum brut caisse3.
     */
    public function getCumBrutCaisse3() {
        return $this->cumBrutCaisse3;
    }

    /**
     * Get the cum dif dus.
     *
     * @return float Returns the cum dif dus.
     */
    public function getCumDifDus() {
        return $this->cumDifDus;
    }

    /**
     * Get the cum dif dus1.
     *
     * @return float Returns the cum dif dus1.
     */
    public function getCumDifDus1() {
        return $this->cumDifDus1;
    }

    /**
     * Get the cum h bonifie.
     *
     * @return float Returns the cum h bonifie.
     */
    public function getCumHBonifie() {
        return $this->cumHBonifie;
    }

    /**
     * Get the cum h repos comp.
     *
     * @return float Returns the cum h repos comp.
     */
    public function getCumHReposComp() {
        return $this->cumHReposComp;
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
     * Get the cum impos.
     *
     * @return float Returns the cum impos.
     */
    public function getCumImpos() {
        return $this->cumImpos;
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
     * Get the cum mt cp pris.
     *
     * @return float Returns the cum mt cp pris.
     */
    public function getCumMtCpPris() {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris1.
     *
     * @return float Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1() {
        return $this->cumMtCpPris1;
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
     * Get the cum plafond gmp.
     *
     * @return float Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp() {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum pss1.
     *
     * @return float Returns the cum pss1.
     */
    public function getCumPss1() {
        return $this->cumPss1;
    }

    /**
     * Get the cum pss2.
     *
     * @return float Returns the cum pss2.
     */
    public function getCumPss2() {
        return $this->cumPss2;
    }

    /**
     * Get the cum rtt dus.
     *
     * @return float Returns the cum rtt dus.
     */
    public function getCumRttDus() {
        return $this->cumRttDus;
    }

    /**
     * Get the cum rtt pris.
     *
     * @return float Returns the cum rtt pris.
     */
    public function getCumRttPris() {
        return $this->cumRttPris;
    }

    /**
     * Get the cum tr a caisse1.
     *
     * @return float Returns the cum tr a caisse1.
     */
    public function getCumTrACaisse1() {
        return $this->cumTrACaisse1;
    }

    /**
     * Get the cum tr a caisse2.
     *
     * @return float Returns the cum tr a caisse2.
     */
    public function getCumTrACaisse2() {
        return $this->cumTrACaisse2;
    }

    /**
     * Get the cum tr a caisse3.
     *
     * @return float Returns the cum tr a caisse3.
     */
    public function getCumTrACaisse3() {
        return $this->cumTrACaisse3;
    }

    /**
     * Get the cum tr b caisse1.
     *
     * @return float Returns the cum tr b caisse1.
     */
    public function getCumTrBCaisse1() {
        return $this->cumTrBCaisse1;
    }

    /**
     * Get the cum tr b caisse2.
     *
     * @return float Returns the cum tr b caisse2.
     */
    public function getCumTrBCaisse2() {
        return $this->cumTrBCaisse2;
    }

    /**
     * Get the cum tr b caisse3.
     *
     * @return float Returns the cum tr b caisse3.
     */
    public function getCumTrBCaisse3() {
        return $this->cumTrBCaisse3;
    }

    /**
     * Get the cum tr c caisse1.
     *
     * @return float Returns the cum tr c caisse1.
     */
    public function getCumTrCCaisse1() {
        return $this->cumTrCCaisse1;
    }

    /**
     * Get the cum tr c caisse2.
     *
     * @return float Returns the cum tr c caisse2.
     */
    public function getCumTrCCaisse2() {
        return $this->cumTrCCaisse2;
    }

    /**
     * Get the cum tr c caisse3.
     *
     * @return float Returns the cum tr c caisse3.
     */
    public function getCumTrCCaisse3() {
        return $this->cumTrCCaisse3;
    }

    /**
     * Get the cum tranche2.
     *
     * @return float Returns the cum tranche2.
     */
    public function getCumTranche2() {
        return $this->cumTranche2;
    }

    /**
     * Get the cum tranche a.
     *
     * @return float Returns the cum tranche a.
     */
    public function getCumTrancheA() {
        return $this->cumTrancheA;
    }

    /**
     * Get the cum tranche b.
     *
     * @return float Returns the cum tranche b.
     */
    public function getCumTrancheB() {
        return $this->cumTrancheB;
    }

    /**
     * Get the cum tranche c.
     *
     * @return float Returns the cum tranche c.
     */
    public function getCumTrancheC() {
        return $this->cumTrancheC;
    }

    /**
     * Get the delta.
     *
     * @return float Returns the delta.
     */
    public function getDelta() {
        return $this->delta;
    }

    /**
     * Get the droit cp.
     *
     * @return float Returns the droit cp.
     */
    public function getDroitCp() {
        return $this->droitCp;
    }

    /**
     * Get the dt debut periode.
     *
     * @return DateTime|null Returns the dt debut periode.
     */
    public function getDtDebutPeriode() {
        return $this->dtDebutPeriode;
    }

    /**
     * Get the dt fin periode.
     *
     * @return DateTime|null Returns the dt fin periode.
     */
    public function getDtFinPeriode() {
        return $this->dtFinPeriode;
    }

    /**
     * Get the ecart cumule.
     *
     * @return float Returns the ecart cumule.
     */
    public function getEcartCumule() {
        return $this->ecartCumule;
    }

    /**
     * Get the etat bul.
     *
     * @return string Returns the etat bul.
     */
    public function getEtatBul() {
        return $this->etatBul;
    }

    /**
     * Get the etat edition.
     *
     * @return string Returns the etat edition.
     */
    public function getEtatEdition() {
        return $this->etatEdition;
    }

    /**
     * Get the forfait jour.
     *
     * @return bool Returns the forfait jour.
     */
    public function getForfaitJour() {
        return $this->forfaitJour;
    }

    /**
     * Get the gest calc net paye.
     *
     * @return bool Returns the gest calc net paye.
     */
    public function getGestCalcNetPaye() {
        return $this->gestCalcNetPaye;
    }

    /**
     * Get the gestion coeff.
     *
     * @return bool Returns the gestion coeff.
     */
    public function getGestionCoeff() {
        return $this->gestionCoeff;
    }

    /**
     * Get the h reel trav.
     *
     * @return float Returns the h reel trav.
     */
    public function getHReelTrav() {
        return $this->hReelTrav;
    }

    /**
     * Get the h theo trav.
     *
     * @return float Returns the h theo trav.
     */
    public function getHTheoTrav() {
        return $this->hTheoTrav;
    }

    /**
     * Get the heure absence.
     *
     * @return float Returns the heure absence.
     */
    public function getHeureAbsence() {
        return $this->heureAbsence;
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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the lien justificatif.
     *
     * @return string Returns the lien justificatif.
     */
    public function getLienJustificatif() {
        return $this->lienJustificatif;
    }

    /**
     * Get the max abat.
     *
     * @return float Returns the max abat.
     */
    public function getMaxAbat() {
        return $this->maxAbat;
    }

    /**
     * Get the mensuel journalier.
     *
     * @return bool Returns the mensuel journalier.
     */
    public function getMensuelJournalier() {
        return $this->mensuelJournalier;
    }

    /**
     * Get the methode indem cp.
     *
     * @return string Returns the methode indem cp.
     */
    public function getMethodeIndemCp() {
        return $this->methodeIndemCp;
    }

    /**
     * Get the mig.
     *
     * @return float Returns the mig.
     */
    public function getMig() {
        return $this->mig;
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
     * Get the mt h sup bonif.
     *
     * @return float Returns the mt h sup bonif.
     */
    public function getMtHSupBonif() {
        return $this->mtHSupBonif;
    }

    /**
     * Get the mt i cp cp.
     *
     * @return float Returns the mt i cp cp.
     */
    public function getMtICpCp() {
        return $this->mtICpCp;
    }

    /**
     * Get the mt i cpt.
     *
     * @return float Returns the mt i cpt.
     */
    public function getMtICpt() {
        return $this->mtICpt;
    }

    /**
     * Get the mt i int.
     *
     * @return float Returns the mt i int.
     */
    public function getMtIInt() {
        return $this->mtIInt;
    }

    /**
     * Get the mt jcp arbitrage.
     *
     * @return bool Returns the mt jcp arbitrage.
     */
    public function getMtJcpArbitrage() {
        return $this->mtJcpArbitrage;
    }

    /**
     * Get the mt journee cp.
     *
     * @return float Returns the mt journee cp.
     */
    public function getMtJourneeCp() {
        return $this->mtJourneeCp;
    }

    /**
     * Get the mt net paye theo.
     *
     * @return float Returns the mt net paye theo.
     */
    public function getMtNetPayeTheo() {
        return $this->mtNetPayeTheo;
    }

    /**
     * Get the mt taux lig sal base.
     *
     * @return float Returns the mt taux lig sal base.
     */
    public function getMtTauxLigSalBase() {
        return $this->mtTauxLigSalBase;
    }

    /**
     * Get the nb30.
     *
     * @return float Returns the nb30.
     */
    public function getNb30() {
        return $this->nb30;
    }

    /**
     * Get the nb h ab cp.
     *
     * @return float Returns the nb h ab cp.
     */
    public function getNbHAbCp() {
        return $this->nbHAbCp;
    }

    /**
     * Get the nb h absence intemp.
     *
     * @return float Returns the nb h absence intemp.
     */
    public function getNbHAbsenceIntemp() {
        return $this->nbHAbsenceIntemp;
    }

    /**
     * Get the nb h attente.
     *
     * @return float Returns the nb h attente.
     */
    public function getNbHAttente() {
        return $this->nbHAttente;
    }

    /**
     * Get the nb h bonifie dues.
     *
     * @return float Returns the nb h bonifie dues.
     */
    public function getNbHBonifieDues() {
        return $this->nbHBonifieDues;
    }

    /**
     * Get the nb h bonifie prises.
     *
     * @return float Returns the nb h bonifie prises.
     */
    public function getNbHBonifiePrises() {
        return $this->nbHBonifiePrises;
    }

    /**
     * Get the nb h carence intemp.
     *
     * @return float Returns the nb h carence intemp.
     */
    public function getNbHCarenceIntemp() {
        return $this->nbHCarenceIntemp;
    }

    /**
     * Get the nb h chom part cp.
     *
     * @return float Returns the nb h chom part cp.
     */
    public function getNbHChomPartCp() {
        return $this->nbHChomPartCp;
    }

    /**
     * Get the nb h chom part tech.
     *
     * @return float Returns the nb h chom part tech.
     */
    public function getNbHChomPartTech() {
        return $this->nbHChomPartTech;
    }

    /**
     * Get the nb h conduite.
     *
     * @return float Returns the nb h conduite.
     */
    public function getNbHConduite() {
        return $this->nbHConduite;
    }

    /**
     * Get the nb h conting.
     *
     * @return float Returns the nb h conting.
     */
    public function getNbHConting() {
        return $this->nbHConting;
    }

    /**
     * Get the nb h dble.
     *
     * @return float Returns the nb h dble.
     */
    public function getNbHDble() {
        return $this->nbHDble;
    }

    /**
     * Get the nb h dif dus.
     *
     * @return float Returns the nb h dif dus.
     */
    public function getNbHDifDus() {
        return $this->nbHDifDus;
    }

    /**
     * Get the nb h intemp indem.
     *
     * @return float Returns the nb h intemp indem.
     */
    public function getNbHIntempIndem() {
        return $this->nbHIntempIndem;
    }

    /**
     * Get the nb h lig sal base.
     *
     * @return float Returns the nb h lig sal base.
     */
    public function getNbHLigSalBase() {
        return $this->nbHLigSalBase;
    }

    /**
     * Get the nb h normal.
     *
     * @return float Returns the nb h normal.
     */
    public function getNbHNormal() {
        return $this->nbHNormal;
    }

    /**
     * Get the nb h pas droit fillon.
     *
     * @return float Returns the nb h pas droit fillon.
     */
    public function getNbHPasDroitFillon() {
        return $this->nbHPasDroitFillon;
    }

    /**
     * Get the nb h remplace.
     *
     * @return float Returns the nb h remplace.
     */
    public function getNbHRemplace() {
        return $this->nbHRemplace;
    }

    /**
     * Get the nb h repo comp dues.
     *
     * @return float Returns the nb h repo comp dues.
     */
    public function getNbHRepoCompDues() {
        return $this->nbHRepoCompDues;
    }

    /**
     * Get the nb h repo comp prises.
     *
     * @return float Returns the nb h repo comp prises.
     */
    public function getNbHRepoCompPrises() {
        return $this->nbHRepoCompPrises;
    }

    /**
     * Get the nb h repo r dues.
     *
     * @return float Returns the nb h repo r dues.
     */
    public function getNbHRepoRDues() {
        return $this->nbHRepoRDues;
    }

    /**
     * Get the nb h repo r prises.
     *
     * @return float Returns the nb h repo r prises.
     */
    public function getNbHRepoRPrises() {
        return $this->nbHRepoRPrises;
    }

    /**
     * Get the nb h sup1.
     *
     * @return float Returns the nb h sup1.
     */
    public function getNbHSup1() {
        return $this->nbHSup1;
    }

    /**
     * Get the nb h sup2.
     *
     * @return float Returns the nb h sup2.
     */
    public function getNbHSup2() {
        return $this->nbHSup2;
    }

    /**
     * Get the nb h sup3.
     *
     * @return float Returns the nb h sup3.
     */
    public function getNbHSup3() {
        return $this->nbHSup3;
    }

    /**
     * Get the nb h sup4.
     *
     * @return float Returns the nb h sup4.
     */
    public function getNbHSup4() {
        return $this->nbHSup4;
    }

    /**
     * Get the nb h sup5.
     *
     * @return float Returns the nb h sup5.
     */
    public function getNbHSup5() {
        return $this->nbHSup5;
    }

    /**
     * Get the nb h sup bonif.
     *
     * @return float Returns the nb h sup bonif.
     */
    public function getNbHSupBonif() {
        return $this->nbHSupBonif;
    }

    /**
     * Get the nb h sup bonif abs.
     *
     * @return float Returns the nb h sup bonif abs.
     */
    public function getNbHSupBonifAbs() {
        return $this->nbHSupBonifAbs;
    }

    /**
     * Get the nb h trav.
     *
     * @return float Returns the nb h trav.
     */
    public function getNbHTrav() {
        return $this->nbHTrav;
    }

    /**
     * Get the nb h travail.
     *
     * @return float Returns the nb h travail.
     */
    public function getNbHTravail() {
        return $this->nbHTravail;
    }

    /**
     * Get the nb heure paye.
     *
     * @return float Returns the nb heure paye.
     */
    public function getNbHeurePaye() {
        return $this->nbHeurePaye;
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
     * Get the nb heure trav mois.
     *
     * @return float Returns the nb heure trav mois.
     */
    public function getNbHeureTravMois() {
        return $this->nbHeureTravMois;
    }

    /**
     * Get the nb j chom part cp.
     *
     * @return float Returns the nb j chom part cp.
     */
    public function getNbJChomPartCp() {
        return $this->nbJChomPartCp;
    }

    /**
     * Get the nb j dus.
     *
     * @return float Returns the nb j dus.
     */
    public function getNbJDus() {
        return $this->nbJDus;
    }

    /**
     * Get the nb j dus1.
     *
     * @return float Returns the nb j dus1.
     */
    public function getNbJDus1() {
        return $this->nbJDus1;
    }

    /**
     * Get the nb j pris.
     *
     * @return float Returns the nb j pris.
     */
    public function getNbJPris() {
        return $this->nbJPris;
    }

    /**
     * Get the nb j pris1.
     *
     * @return float Returns the nb j pris1.
     */
    public function getNbJPris1() {
        return $this->nbJPris1;
    }

    /**
     * Get the nb j repo recup dus.
     *
     * @return float Returns the nb j repo recup dus.
     */
    public function getNbJRepoRecupDus() {
        return $this->nbJRepoRecupDus;
    }

    /**
     * Get the nb j repo recup pris.
     *
     * @return float Returns the nb j repo recup pris.
     */
    public function getNbJRepoRecupPris() {
        return $this->nbJRepoRecupPris;
    }

    /**
     * Get the nb j trav force.
     *
     * @return bool Returns the nb j trav force.
     */
    public function getNbJTravForce() {
        return $this->nbJTravForce;
    }

    /**
     * Get the nb j trav mois es.
     *
     * @return int Returns the nb j trav mois es.
     */
    public function getNbJTravMoisEs() {
        return $this->nbJTravMoisEs;
    }

    /**
     * Get the nb jour base.
     *
     * @return float Returns the nb jour base.
     */
    public function getNbJourBase() {
        return $this->nbJourBase;
    }

    /**
     * Get the nb jour base cp.
     *
     * @return float Returns the nb jour base cp.
     */
    public function getNbJourBaseCp() {
        return $this->nbJourBaseCp;
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
     * Get the nb jour cp pris.
     *
     * @return float Returns the nb jour cp pris.
     */
    public function getNbJourCpPris() {
        return $this->nbJourCpPris;
    }

    /**
     * Get the nb jour normaux.
     *
     * @return float Returns the nb jour normaux.
     */
    public function getNbJourNormaux() {
        return $this->nbJourNormaux;
    }

    /**
     * Get the nb jour trav.
     *
     * @return float Returns the nb jour trav.
     */
    public function getNbJourTrav() {
        return $this->nbJourTrav;
    }

    /**
     * Get the nb jrtt dus.
     *
     * @return float Returns the nb jrtt dus.
     */
    public function getNbJrttDus() {
        return $this->nbJrttDus;
    }

    /**
     * Get the nb jrtt pris.
     *
     * @return float Returns the nb jrtt pris.
     */
    public function getNbJrttPris() {
        return $this->nbJrttPris;
    }

    /**
     * Get the net a payer.
     *
     * @return float Returns the net a payer.
     */
    public function getNetAPayer() {
        return $this->netAPayer;
    }

    /**
     * Get the net impos.
     *
     * @return float Returns the net impos.
     */
    public function getNetImpos() {
        return $this->netImpos;
    }

    /**
     * Get the note1.
     *
     * @return string Returns the note1.
     */
    public function getNote1() {
        return $this->note1;
    }

    /**
     * Get the note2.
     *
     * @return string Returns the note2.
     */
    public function getNote2() {
        return $this->note2;
    }

    /**
     * Get the note3.
     *
     * @return string Returns the note3.
     */
    public function getNote3() {
        return $this->note3;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the paie euro.
     *
     * @return bool Returns the paie euro.
     */
    public function getPaieEuro() {
        return $this->paieEuro;
    }

    /**
     * Get the paiement cp non pris.
     *
     * @return bool Returns the paiement cp non pris.
     */
    public function getPaiementCpNonPris() {
        return $this->paiementCpNonPris;
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
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the periodicite modifie.
     *
     * @return bool Returns the periodicite modifie.
     */
    public function getPeriodiciteModifie() {
        return $this->periodiciteModifie;
    }

    /**
     * Get the plafond1 caisse1.
     *
     * @return float Returns the plafond1 caisse1.
     */
    public function getPlafond1Caisse1() {
        return $this->plafond1Caisse1;
    }

    /**
     * Get the plafond1 caisse2.
     *
     * @return float Returns the plafond1 caisse2.
     */
    public function getPlafond1Caisse2() {
        return $this->plafond1Caisse2;
    }

    /**
     * Get the plafond1 caisse3.
     *
     * @return float Returns the plafond1 caisse3.
     */
    public function getPlafond1Caisse3() {
        return $this->plafond1Caisse3;
    }

    /**
     * Get the plafond2 caisse1.
     *
     * @return float Returns the plafond2 caisse1.
     */
    public function getPlafond2Caisse1() {
        return $this->plafond2Caisse1;
    }

    /**
     * Get the plafond2 caisse2.
     *
     * @return float Returns the plafond2 caisse2.
     */
    public function getPlafond2Caisse2() {
        return $this->plafond2Caisse2;
    }

    /**
     * Get the plafond2 caisse3.
     *
     * @return float Returns the plafond2 caisse3.
     */
    public function getPlafond2Caisse3() {
        return $this->plafond2Caisse3;
    }

    /**
     * Get the plafond gmp.
     *
     * @return float Returns the plafond gmp.
     */
    public function getPlafondGmp() {
        return $this->plafondGmp;
    }

    /**
     * Get the plafond gmp modifie.
     *
     * @return bool Returns the plafond gmp modifie.
     */
    public function getPlafondGmpModifie() {
        return $this->plafondGmpModifie;
    }

    /**
     * Get the plafond heure.
     *
     * @return float Returns the plafond heure.
     */
    public function getPlafondHeure() {
        return $this->plafondHeure;
    }

    /**
     * Get the plafond jour.
     *
     * @return float Returns the plafond jour.
     */
    public function getPlafondJour() {
        return $this->plafondJour;
    }

    /**
     * Get the plafond semaine.
     *
     * @return float Returns the plafond semaine.
     */
    public function getPlafondSemaine() {
        return $this->plafondSemaine;
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
     * Get the pourcent act force.
     *
     * @return int Returns the pourcent act force.
     */
    public function getPourcentActForce() {
        return $this->pourcentActForce;
    }

    /**
     * Get the pourcent activite.
     *
     * @return float Returns the pourcent activite.
     */
    public function getPourcentActivite() {
        return $this->pourcentActivite;
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
     * Get the pp soumis taxe.
     *
     * @return float Returns the pp soumis taxe.
     */
    public function getPpSoumisTaxe() {
        return $this->ppSoumisTaxe;
    }

    /**
     * Get the prov cp.
     *
     * @return float Returns the prov cp.
     */
    public function getProvCp() {
        return $this->provCp;
    }

    /**
     * Get the prov cp1.
     *
     * @return float Returns the prov cp1.
     */
    public function getProvCp1() {
        return $this->provCp1;
    }

    /**
     * Get the pss1.
     *
     * @return float Returns the pss1.
     */
    public function getPss1() {
        return $this->pss1;
    }

    /**
     * Get the pss2.
     *
     * @return float Returns the pss2.
     */
    public function getPss2() {
        return $this->pss2;
    }

    /**
     * Get the pss30.
     *
     * @return bool Returns the pss30.
     */
    public function getPss30() {
        return $this->pss30;
    }

    /**
     * Get the pss mod.
     *
     * @return bool Returns the pss mod.
     */
    public function getPssMod() {
        return $this->pssMod;
    }

    /**
     * Get the remun mens.
     *
     * @return float Returns the remun mens.
     */
    public function getRemunMens() {
        return $this->remunMens;
    }

    /**
     * Get the s base.
     *
     * @return float Returns the s base.
     */
    public function getSBase() {
        return $this->sBase;
    }

    /**
     * Get the smic1.
     *
     * @return float Returns the smic1.
     */
    public function getSmic1() {
        return $this->smic1;
    }

    /**
     * Get the smic h.
     *
     * @return float Returns the smic h.
     */
    public function getSmicH() {
        return $this->smicH;
    }

    /**
     * Get the smic h35.
     *
     * @return float Returns the smic h35.
     */
    public function getSmicH35() {
        return $this->smicH35;
    }

    /**
     * Get the smic h39.
     *
     * @return float Returns the smic h39.
     */
    public function getSmicH39() {
        return $this->smicH39;
    }

    /**
     * Get the smic m.
     *
     * @return float Returns the smic m.
     */
    public function getSmicM() {
        return $this->smicM;
    }

    /**
     * Get the smic m35.
     *
     * @return float Returns the smic m35.
     */
    public function getSmicM35() {
        return $this->smicM35;
    }

    /**
     * Get the smic m39.
     *
     * @return float Returns the smic m39.
     */
    public function getSmicM39() {
        return $this->smicM39;
    }

    /**
     * Get the sortie mois.
     *
     * @return bool Returns the sortie mois.
     */
    public function getSortieMois() {
        return $this->sortieMois;
    }

    /**
     * Get the taux h ab cp.
     *
     * @return float Returns the taux h ab cp.
     */
    public function getTauxHAbCp() {
        return $this->tauxHAbCp;
    }

    /**
     * Get the taux h absence.
     *
     * @return float Returns the taux h absence.
     */
    public function getTauxHAbsence() {
        return $this->tauxHAbsence;
    }

    /**
     * Get the taux h normal.
     *
     * @return float Returns the taux h normal.
     */
    public function getTauxHNormal() {
        return $this->tauxHNormal;
    }

    /**
     * Get the taux journalier.
     *
     * @return float Returns the taux journalier.
     */
    public function getTauxJournalier() {
        return $this->tauxJournalier;
    }

    /**
     * Get the tot acompte.
     *
     * @return float Returns the tot acompte.
     */
    public function getTotAcompte() {
        return $this->totAcompte;
    }

    /**
     * Get the tot acompte cp.
     *
     * @return float Returns the tot acompte cp.
     */
    public function getTotAcompteCp() {
        return $this->totAcompteCp;
    }

    /**
     * Get the tot cotis patron.
     *
     * @return float Returns the tot cotis patron.
     */
    public function getTotCotisPatron() {
        return $this->totCotisPatron;
    }

    /**
     * Get the tot prime ni.
     *
     * @return float Returns the tot prime ni.
     */
    public function getTotPrimeNi() {
        return $this->totPrimeNi;
    }

    /**
     * Get the tot prime ns.
     *
     * @return float Returns the tot prime ns.
     */
    public function getTotPrimeNs() {
        return $this->totPrimeNs;
    }

    /**
     * Get the tot retenue.
     *
     * @return float Returns the tot retenue.
     */
    public function getTotRetenue() {
        return $this->totRetenue;
    }

    /**
     * Get the tr a caisse1.
     *
     * @return float Returns the tr a caisse1.
     */
    public function getTrACaisse1() {
        return $this->trACaisse1;
    }

    /**
     * Get the tr a caisse2.
     *
     * @return float Returns the tr a caisse2.
     */
    public function getTrACaisse2() {
        return $this->trACaisse2;
    }

    /**
     * Get the tr a caisse3.
     *
     * @return float Returns the tr a caisse3.
     */
    public function getTrACaisse3() {
        return $this->trACaisse3;
    }

    /**
     * Get the tr b caisse1.
     *
     * @return float Returns the tr b caisse1.
     */
    public function getTrBCaisse1() {
        return $this->trBCaisse1;
    }

    /**
     * Get the tr b caisse2.
     *
     * @return float Returns the tr b caisse2.
     */
    public function getTrBCaisse2() {
        return $this->trBCaisse2;
    }

    /**
     * Get the tr b caisse3.
     *
     * @return float Returns the tr b caisse3.
     */
    public function getTrBCaisse3() {
        return $this->trBCaisse3;
    }

    /**
     * Get the tr c caisse1.
     *
     * @return float Returns the tr c caisse1.
     */
    public function getTrCCaisse1() {
        return $this->trCCaisse1;
    }

    /**
     * Get the tr c caisse2.
     *
     * @return float Returns the tr c caisse2.
     */
    public function getTrCCaisse2() {
        return $this->trCCaisse2;
    }

    /**
     * Get the tr c caisse3.
     *
     * @return float Returns the tr c caisse3.
     */
    public function getTrCCaisse3() {
        return $this->trCCaisse3;
    }

    /**
     * Get the tranche2.
     *
     * @return float Returns the tranche2.
     */
    public function getTranche2() {
        return $this->tranche2;
    }

    /**
     * Get the tranche a.
     *
     * @return float Returns the tranche a.
     */
    public function getTrancheA() {
        return $this->trancheA;
    }

    /**
     * Get the tranche abal.
     *
     * @return float Returns the tranche abal.
     */
    public function getTrancheAbal() {
        return $this->trancheAbal;
    }

    /**
     * Get the tranche abanl.
     *
     * @return float Returns the tranche abanl.
     */
    public function getTrancheAbanl() {
        return $this->trancheAbanl;
    }

    /**
     * Get the tranche abna.
     *
     * @return float Returns the tranche abna.
     */
    public function getTrancheAbna() {
        return $this->trancheAbna;
    }

    /**
     * Get the tranche b.
     *
     * @return float Returns the tranche b.
     */
    public function getTrancheB() {
        return $this->trancheB;
    }

    /**
     * Get the tranche bbal.
     *
     * @return float Returns the tranche bbal.
     */
    public function getTrancheBbal() {
        return $this->trancheBbal;
    }

    /**
     * Get the tranche bbanl.
     *
     * @return float Returns the tranche bbanl.
     */
    public function getTrancheBbanl() {
        return $this->trancheBbanl;
    }

    /**
     * Get the tranche bbna.
     *
     * @return float Returns the tranche bbna.
     */
    public function getTrancheBbna() {
        return $this->trancheBbna;
    }

    /**
     * Get the tranche c.
     *
     * @return float Returns the tranche c.
     */
    public function getTrancheC() {
        return $this->trancheC;
    }

    /**
     * Get the tranche c plaf.
     *
     * @return float Returns the tranche c plaf.
     */
    public function getTrancheCPlaf() {
        return $this->trancheCPlaf;
    }

    /**
     * Get the tranche cbal.
     *
     * @return float Returns the tranche cbal.
     */
    public function getTrancheCbal() {
        return $this->trancheCbal;
    }

    /**
     * Get the tranche cbanl.
     *
     * @return float Returns the tranche cbanl.
     */
    public function getTrancheCbanl() {
        return $this->trancheCbanl;
    }

    /**
     * Get the tranche cbna.
     *
     * @return float Returns the tranche cbna.
     */
    public function getTrancheCbna() {
        return $this->trancheCbna;
    }

    /**
     * Get the txt note rtf.
     *
     * @return string Returns the txt note rtf.
     */
    public function getTxtNoteRtf() {
        return $this->txtNoteRtf;
    }

    /**
     * Get the type base caisse1.
     *
     * @return string Returns the type base caisse1.
     */
    public function getTypeBaseCaisse1() {
        return $this->typeBaseCaisse1;
    }

    /**
     * Get the type base caisse2.
     *
     * @return string Returns the type base caisse2.
     */
    public function getTypeBaseCaisse2() {
        return $this->typeBaseCaisse2;
    }

    /**
     * Get the type base caisse3.
     *
     * @return string Returns the type base caisse3.
     */
    public function getTypeBaseCaisse3() {
        return $this->typeBaseCaisse3;
    }

    /**
     * Get the type gestion bal.
     *
     * @return string Returns the type gestion bal.
     */
    public function getTypeGestionBal() {
        return $this->typeGestionBal;
    }

    /**
     * Get the type paiement bul.
     *
     * @return string Returns the type paiement bul.
     */
    public function getTypePaiementBul() {
        return $this->typePaiementBul;
    }

    /**
     * Get the type paiment modifie.
     *
     * @return bool Returns the type paiment modifie.
     */
    public function getTypePaimentModifie() {
        return $this->typePaimentModifie;
    }

    /**
     * Get the type saisie abs.
     *
     * @return string Returns the type saisie abs.
     */
    public function getTypeSaisieAbs() {
        return $this->typeSaisieAbs;
    }

    /**
     * Get the type saisie absence.
     *
     * @return string Returns the type saisie absence.
     */
    public function getTypeSaisieAbsence() {
        return $this->typeSaisieAbsence;
    }

    /**
     * Get the valorise cp.
     *
     * @return float Returns the valorise cp.
     */
    public function getValoriseCp() {
        return $this->valoriseCp;
    }

    /**
     * Set the abat theo.
     *
     * @param float $abatTheo The abat theo.
     */
    public function setAbatTheo($abatTheo) {
        $this->abatTheo = $abatTheo;
        return $this;
    }

    /**
     * Set the abattement max.
     *
     * @param float $abattementMax The abattement max.
     */
    public function setAbattementMax($abattementMax) {
        $this->abattementMax = $abattementMax;
        return $this;
    }

    /**
     * Set the allegement.
     *
     * @param float $allegement The allegement.
     */
    public function setAllegement($allegement) {
        $this->allegement = $allegement;
        return $this;
    }

    /**
     * Set the allegement non proratise.
     *
     * @param float $allegementNonProratise The allegement non proratise.
     */
    public function setAllegementNonProratise($allegementNonProratise) {
        $this->allegementNonProratise = $allegementNonProratise;
        return $this;
    }

    /**
     * Set the avantage nature.
     *
     * @param float $avantageNature The avantage nature.
     */
    public function setAvantageNature($avantageNature) {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the base gmp.
     *
     * @param float $baseGmp The base gmp.
     */
    public function setBaseGmp($baseGmp) {
        $this->baseGmp = $baseGmp;
        return $this;
    }

    /**
     * Set the base secu.
     *
     * @param float $baseSecu The base secu.
     */
    public function setBaseSecu($baseSecu) {
        $this->baseSecu = $baseSecu;
        return $this;
    }

    /**
     * Set the base ss plaf modif.
     *
     * @param bool $baseSsPlafModif The base ss plaf modif.
     */
    public function setBaseSsPlafModif($baseSsPlafModif) {
        $this->baseSsPlafModif = $baseSsPlafModif;
        return $this;
    }

    /**
     * Set the borne per modifie.
     *
     * @param bool $bornePerModifie The borne per modifie.
     */
    public function setBornePerModifie($bornePerModifie) {
        $this->bornePerModifie = $bornePerModifie;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float $brut The brut.
     */
    public function setBrut($brut) {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the brut al.
     *
     * @param float $brutAl The brut al.
     */
    public function setBrutAl($brutAl) {
        $this->brutAl = $brutAl;
        return $this;
    }

    /**
     * Set the brut al limite smic.
     *
     * @param float $brutAlLimiteSmic The brut al limite smic.
     */
    public function setBrutAlLimiteSmic($brutAlLimiteSmic) {
        $this->brutAlLimiteSmic = $brutAlLimiteSmic;
        return $this;
    }

    /**
     * Set the brut al modifie.
     *
     * @param bool $brutAlModifie The brut al modifie.
     */
    public function setBrutAlModifie($brutAlModifie) {
        $this->brutAlModifie = $brutAlModifie;
        return $this;
    }

    /**
     * Set the brut anl.
     *
     * @param float $brutAnl The brut anl.
     */
    public function setBrutAnl($brutAnl) {
        $this->brutAnl = $brutAnl;
        return $this;
    }

    /**
     * Set the brut caisse1.
     *
     * @param float $brutCaisse1 The brut caisse1.
     */
    public function setBrutCaisse1($brutCaisse1) {
        $this->brutCaisse1 = $brutCaisse1;
        return $this;
    }

    /**
     * Set the brut caisse2.
     *
     * @param float $brutCaisse2 The brut caisse2.
     */
    public function setBrutCaisse2($brutCaisse2) {
        $this->brutCaisse2 = $brutCaisse2;
        return $this;
    }

    /**
     * Set the brut caisse3.
     *
     * @param float $brutCaisse3 The brut caisse3.
     */
    public function setBrutCaisse3($brutCaisse3) {
        $this->brutCaisse3 = $brutCaisse3;
        return $this;
    }

    /**
     * Set the brut caisse cp.
     *
     * @param float $brutCaisseCp The brut caisse cp.
     */
    public function setBrutCaisseCp($brutCaisseCp) {
        $this->brutCaisseCp = $brutCaisseCp;
        return $this;
    }

    /**
     * Set the brut cp.
     *
     * @param float $brutCp The brut cp.
     */
    public function setBrutCp($brutCp) {
        $this->brutCp = $brutCp;
        return $this;
    }

    /**
     * Set the brut csg.
     *
     * @param float $brutCsg The brut csg.
     */
    public function setBrutCsg($brutCsg) {
        $this->brutCsg = $brutCsg;
        return $this;
    }

    /**
     * Set the brut soumis abat.
     *
     * @param float $brutSoumisAbat The brut soumis abat.
     */
    public function setBrutSoumisAbat($brutSoumisAbat) {
        $this->brutSoumisAbat = $brutSoumisAbat;
        return $this;
    }

    /**
     * Set the brut soumis crds.
     *
     * @param float $brutSoumisCrds The brut soumis crds.
     */
    public function setBrutSoumisCrds($brutSoumisCrds) {
        $this->brutSoumisCrds = $brutSoumisCrds;
        return $this;
    }

    /**
     * Set the bulletin publie.
     *
     * @param bool $bulletinPublie The bulletin publie.
     */
    public function setBulletinPublie($bulletinPublie) {
        $this->bulletinPublie = $bulletinPublie;
        return $this;
    }

    /**
     * Set the categ tds.
     *
     * @param string $categTds The categ tds.
     */
    public function setCategTds($categTds) {
        $this->categTds = $categTds;
        return $this;
    }

    /**
     * Set the cheque edite.
     *
     * @param bool $chequeEdite The cheque edite.
     */
    public function setChequeEdite($chequeEdite) {
        $this->chequeEdite = $chequeEdite;
        return $this;
    }

    /**
     * Set the chom partiel coeff indem.
     *
     * @param float $chomPartielCoeffIndem The chom partiel coeff indem.
     */
    public function setChomPartielCoeffIndem($chomPartielCoeffIndem) {
        $this->chomPartielCoeffIndem = $chomPartielCoeffIndem;
        return $this;
    }

    /**
     * Set the chom partiel cp.
     *
     * @param float $chomPartielCp The chom partiel cp.
     */
    public function setChomPartielCp($chomPartielCp) {
        $this->chomPartielCp = $chomPartielCp;
        return $this;
    }

    /**
     * Set the chom partiel min indem.
     *
     * @param float $chomPartielMinIndem The chom partiel min indem.
     */
    public function setChomPartielMinIndem($chomPartielMinIndem) {
        $this->chomPartielMinIndem = $chomPartielMinIndem;
        return $this;
    }

    /**
     * Set the code at per.
     *
     * @param int $codeAtPer The code at per.
     */
    public function setCodeAtPer($codeAtPer) {
        $this->codeAtPer = $codeAtPer;
        return $this;
    }

    /**
     * Set the code centre urssaf.
     *
     * @param string $codeCentreUrssaf The code centre urssaf.
     */
    public function setCodeCentreUrssaf($codeCentreUrssaf) {
        $this->codeCentreUrssaf = $codeCentreUrssaf;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string $codeTypeSal The code type sal.
     */
    public function setCodeTypeSal($codeTypeSal) {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the coeff intemperie.
     *
     * @param float $coeffIntemperie The coeff intemperie.
     */
    public function setCoeffIntemperie($coeffIntemperie) {
        $this->coeffIntemperie = $coeffIntemperie;
        return $this;
    }

    /**
     * Set the cont h sup repos comp.
     *
     * @param float $contHSupReposComp The cont h sup repos comp.
     */
    public function setContHSupReposComp($contHSupReposComp) {
        $this->contHSupReposComp = $contHSupReposComp;
        return $this;
    }

    /**
     * Set the cout global mois.
     *
     * @param float $coutGlobalMois The cout global mois.
     */
    public function setCoutGlobalMois($coutGlobalMois) {
        $this->coutGlobalMois = $coutGlobalMois;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float $cum30Ss The cum30 ss.
     */
    public function setCum30Ss($cum30Ss) {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum ant h sup.
     *
     * @param float $cumAntHSup The cum ant h sup.
     */
    public function setCumAntHSup($cumAntHSup) {
        $this->cumAntHSup = $cumAntHSup;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float $cumBaseGmp The cum base gmp.
     */
    public function setCumBaseGmp($cumBaseGmp) {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float $cumBaseSs The cum base ss.
     */
    public function setCumBaseSs($cumBaseSs) {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum brut.
     *
     * @param float $cumBrut The cum brut.
     */
    public function setCumBrut($cumBrut) {
        $this->cumBrut = $cumBrut;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float $cumBrutAl The cum brut al.
     */
    public function setCumBrutAl($cumBrutAl) {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut anl.
     *
     * @param float $cumBrutAnl The cum brut anl.
     */
    public function setCumBrutAnl($cumBrutAnl) {
        $this->cumBrutAnl = $cumBrutAnl;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float $cumBrutCaisse1 The cum brut caisse1.
     */
    public function setCumBrutCaisse1($cumBrutCaisse1) {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float $cumBrutCaisse2 The cum brut caisse2.
     */
    public function setCumBrutCaisse2($cumBrutCaisse2) {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float $cumBrutCaisse3 The cum brut caisse3.
     */
    public function setCumBrutCaisse3($cumBrutCaisse3) {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float $cumDifDus The cum dif dus.
     */
    public function setCumDifDus($cumDifDus) {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float $cumDifDus1 The cum dif dus1.
     */
    public function setCumDifDus1($cumDifDus1) {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float $cumHBonifie The cum h bonifie.
     */
    public function setCumHBonifie($cumHBonifie) {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum h repos comp.
     *
     * @param float $cumHReposComp The cum h repos comp.
     */
    public function setCumHReposComp($cumHReposComp) {
        $this->cumHReposComp = $cumHReposComp;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float $cumHReposRemplace The cum h repos remplace.
     */
    public function setCumHReposRemplace($cumHReposRemplace) {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float $cumHService The cum h service.
     */
    public function setCumHService($cumHService) {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum impos.
     *
     * @param float $cumImpos The cum impos.
     */
    public function setCumImpos($cumImpos) {
        $this->cumImpos = $cumImpos;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float $cumJReposRecup The cum j repos recup.
     */
    public function setCumJReposRecup($cumJReposRecup) {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float $cumMtCpPris1 The cum mt cp pris1.
     */
    public function setCumMtCpPris1($cumMtCpPris1) {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float $cumPlaf1Caisse1 The cum plaf1 caisse1.
     */
    public function setCumPlaf1Caisse1($cumPlaf1Caisse1) {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float $cumPlaf1Caisse2 The cum plaf1 caisse2.
     */
    public function setCumPlaf1Caisse2($cumPlaf1Caisse2) {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float $cumPlaf1Caisse3 The cum plaf1 caisse3.
     */
    public function setCumPlaf1Caisse3($cumPlaf1Caisse3) {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float $cumPlaf2Caisse1 The cum plaf2 caisse1.
     */
    public function setCumPlaf2Caisse1($cumPlaf2Caisse1) {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float $cumPlaf2Caisse2 The cum plaf2 caisse2.
     */
    public function setCumPlaf2Caisse2($cumPlaf2Caisse2) {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float $cumPlaf2Caisse3 The cum plaf2 caisse3.
     */
    public function setCumPlaf2Caisse3($cumPlaf2Caisse3) {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float $cumPlafondGmp The cum plafond gmp.
     */
    public function setCumPlafondGmp($cumPlafondGmp) {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum pss1.
     *
     * @param float $cumPss1 The cum pss1.
     */
    public function setCumPss1($cumPss1) {
        $this->cumPss1 = $cumPss1;
        return $this;
    }

    /**
     * Set the cum pss2.
     *
     * @param float $cumPss2 The cum pss2.
     */
    public function setCumPss2($cumPss2) {
        $this->cumPss2 = $cumPss2;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float $cumRttDus The cum rtt dus.
     */
    public function setCumRttDus($cumRttDus) {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float $cumRttPris The cum rtt pris.
     */
    public function setCumRttPris($cumRttPris) {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tr a caisse1.
     *
     * @param float $cumTrACaisse1 The cum tr a caisse1.
     */
    public function setCumTrACaisse1($cumTrACaisse1) {
        $this->cumTrACaisse1 = $cumTrACaisse1;
        return $this;
    }

    /**
     * Set the cum tr a caisse2.
     *
     * @param float $cumTrACaisse2 The cum tr a caisse2.
     */
    public function setCumTrACaisse2($cumTrACaisse2) {
        $this->cumTrACaisse2 = $cumTrACaisse2;
        return $this;
    }

    /**
     * Set the cum tr a caisse3.
     *
     * @param float $cumTrACaisse3 The cum tr a caisse3.
     */
    public function setCumTrACaisse3($cumTrACaisse3) {
        $this->cumTrACaisse3 = $cumTrACaisse3;
        return $this;
    }

    /**
     * Set the cum tr b caisse1.
     *
     * @param float $cumTrBCaisse1 The cum tr b caisse1.
     */
    public function setCumTrBCaisse1($cumTrBCaisse1) {
        $this->cumTrBCaisse1 = $cumTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum tr b caisse2.
     *
     * @param float $cumTrBCaisse2 The cum tr b caisse2.
     */
    public function setCumTrBCaisse2($cumTrBCaisse2) {
        $this->cumTrBCaisse2 = $cumTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum tr b caisse3.
     *
     * @param float $cumTrBCaisse3 The cum tr b caisse3.
     */
    public function setCumTrBCaisse3($cumTrBCaisse3) {
        $this->cumTrBCaisse3 = $cumTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum tr c caisse1.
     *
     * @param float $cumTrCCaisse1 The cum tr c caisse1.
     */
    public function setCumTrCCaisse1($cumTrCCaisse1) {
        $this->cumTrCCaisse1 = $cumTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum tr c caisse2.
     *
     * @param float $cumTrCCaisse2 The cum tr c caisse2.
     */
    public function setCumTrCCaisse2($cumTrCCaisse2) {
        $this->cumTrCCaisse2 = $cumTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum tr c caisse3.
     *
     * @param float $cumTrCCaisse3 The cum tr c caisse3.
     */
    public function setCumTrCCaisse3($cumTrCCaisse3) {
        $this->cumTrCCaisse3 = $cumTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum tranche2.
     *
     * @param float $cumTranche2 The cum tranche2.
     */
    public function setCumTranche2($cumTranche2) {
        $this->cumTranche2 = $cumTranche2;
        return $this;
    }

    /**
     * Set the cum tranche a.
     *
     * @param float $cumTrancheA The cum tranche a.
     */
    public function setCumTrancheA($cumTrancheA) {
        $this->cumTrancheA = $cumTrancheA;
        return $this;
    }

    /**
     * Set the cum tranche b.
     *
     * @param float $cumTrancheB The cum tranche b.
     */
    public function setCumTrancheB($cumTrancheB) {
        $this->cumTrancheB = $cumTrancheB;
        return $this;
    }

    /**
     * Set the cum tranche c.
     *
     * @param float $cumTrancheC The cum tranche c.
     */
    public function setCumTrancheC($cumTrancheC) {
        $this->cumTrancheC = $cumTrancheC;
        return $this;
    }

    /**
     * Set the delta.
     *
     * @param float $delta The delta.
     */
    public function setDelta($delta) {
        $this->delta = $delta;
        return $this;
    }

    /**
     * Set the droit cp.
     *
     * @param float $droitCp The droit cp.
     */
    public function setDroitCp($droitCp) {
        $this->droitCp = $droitCp;
        return $this;
    }

    /**
     * Set the dt debut periode.
     *
     * @param DateTime|null $dtDebutPeriode The dt debut periode.
     */
    public function setDtDebutPeriode(DateTime $dtDebutPeriode = null) {
        $this->dtDebutPeriode = $dtDebutPeriode;
        return $this;
    }

    /**
     * Set the dt fin periode.
     *
     * @param DateTime|null $dtFinPeriode The dt fin periode.
     */
    public function setDtFinPeriode(DateTime $dtFinPeriode = null) {
        $this->dtFinPeriode = $dtFinPeriode;
        return $this;
    }

    /**
     * Set the ecart cumule.
     *
     * @param float $ecartCumule The ecart cumule.
     */
    public function setEcartCumule($ecartCumule) {
        $this->ecartCumule = $ecartCumule;
        return $this;
    }

    /**
     * Set the etat bul.
     *
     * @param string $etatBul The etat bul.
     */
    public function setEtatBul($etatBul) {
        $this->etatBul = $etatBul;
        return $this;
    }

    /**
     * Set the etat edition.
     *
     * @param string $etatEdition The etat edition.
     */
    public function setEtatEdition($etatEdition) {
        $this->etatEdition = $etatEdition;
        return $this;
    }

    /**
     * Set the forfait jour.
     *
     * @param bool $forfaitJour The forfait jour.
     */
    public function setForfaitJour($forfaitJour) {
        $this->forfaitJour = $forfaitJour;
        return $this;
    }

    /**
     * Set the gest calc net paye.
     *
     * @param bool $gestCalcNetPaye The gest calc net paye.
     */
    public function setGestCalcNetPaye($gestCalcNetPaye) {
        $this->gestCalcNetPaye = $gestCalcNetPaye;
        return $this;
    }

    /**
     * Set the gestion coeff.
     *
     * @param bool $gestionCoeff The gestion coeff.
     */
    public function setGestionCoeff($gestionCoeff) {
        $this->gestionCoeff = $gestionCoeff;
        return $this;
    }

    /**
     * Set the h reel trav.
     *
     * @param float $hReelTrav The h reel trav.
     */
    public function setHReelTrav($hReelTrav) {
        $this->hReelTrav = $hReelTrav;
        return $this;
    }

    /**
     * Set the h theo trav.
     *
     * @param float $hTheoTrav The h theo trav.
     */
    public function setHTheoTrav($hTheoTrav) {
        $this->hTheoTrav = $hTheoTrav;
        return $this;
    }

    /**
     * Set the heure absence.
     *
     * @param float $heureAbsence The heure absence.
     */
    public function setHeureAbsence($heureAbsence) {
        $this->heureAbsence = $heureAbsence;
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
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien justificatif.
     *
     * @param string $lienJustificatif The lien justificatif.
     */
    public function setLienJustificatif($lienJustificatif) {
        $this->lienJustificatif = $lienJustificatif;
        return $this;
    }

    /**
     * Set the max abat.
     *
     * @param float $maxAbat The max abat.
     */
    public function setMaxAbat($maxAbat) {
        $this->maxAbat = $maxAbat;
        return $this;
    }

    /**
     * Set the mensuel journalier.
     *
     * @param bool $mensuelJournalier The mensuel journalier.
     */
    public function setMensuelJournalier($mensuelJournalier) {
        $this->mensuelJournalier = $mensuelJournalier;
        return $this;
    }

    /**
     * Set the methode indem cp.
     *
     * @param string $methodeIndemCp The methode indem cp.
     */
    public function setMethodeIndemCp($methodeIndemCp) {
        $this->methodeIndemCp = $methodeIndemCp;
        return $this;
    }

    /**
     * Set the mig.
     *
     * @param float $mig The mig.
     */
    public function setMig($mig) {
        $this->mig = $mig;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float $montant4 The montant4.
     */
    public function setMontant4($montant4) {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float $montant5 The montant5.
     */
    public function setMontant5($montant5) {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the mt h sup bonif.
     *
     * @param float $mtHSupBonif The mt h sup bonif.
     */
    public function setMtHSupBonif($mtHSupBonif) {
        $this->mtHSupBonif = $mtHSupBonif;
        return $this;
    }

    /**
     * Set the mt i cp cp.
     *
     * @param float $mtICpCp The mt i cp cp.
     */
    public function setMtICpCp($mtICpCp) {
        $this->mtICpCp = $mtICpCp;
        return $this;
    }

    /**
     * Set the mt i cpt.
     *
     * @param float $mtICpt The mt i cpt.
     */
    public function setMtICpt($mtICpt) {
        $this->mtICpt = $mtICpt;
        return $this;
    }

    /**
     * Set the mt i int.
     *
     * @param float $mtIInt The mt i int.
     */
    public function setMtIInt($mtIInt) {
        $this->mtIInt = $mtIInt;
        return $this;
    }

    /**
     * Set the mt jcp arbitrage.
     *
     * @param bool $mtJcpArbitrage The mt jcp arbitrage.
     */
    public function setMtJcpArbitrage($mtJcpArbitrage) {
        $this->mtJcpArbitrage = $mtJcpArbitrage;
        return $this;
    }

    /**
     * Set the mt journee cp.
     *
     * @param float $mtJourneeCp The mt journee cp.
     */
    public function setMtJourneeCp($mtJourneeCp) {
        $this->mtJourneeCp = $mtJourneeCp;
        return $this;
    }

    /**
     * Set the mt net paye theo.
     *
     * @param float $mtNetPayeTheo The mt net paye theo.
     */
    public function setMtNetPayeTheo($mtNetPayeTheo) {
        $this->mtNetPayeTheo = $mtNetPayeTheo;
        return $this;
    }

    /**
     * Set the mt taux lig sal base.
     *
     * @param float $mtTauxLigSalBase The mt taux lig sal base.
     */
    public function setMtTauxLigSalBase($mtTauxLigSalBase) {
        $this->mtTauxLigSalBase = $mtTauxLigSalBase;
        return $this;
    }

    /**
     * Set the nb30.
     *
     * @param float $nb30 The nb30.
     */
    public function setNb30($nb30) {
        $this->nb30 = $nb30;
        return $this;
    }

    /**
     * Set the nb h ab cp.
     *
     * @param float $nbHAbCp The nb h ab cp.
     */
    public function setNbHAbCp($nbHAbCp) {
        $this->nbHAbCp = $nbHAbCp;
        return $this;
    }

    /**
     * Set the nb h absence intemp.
     *
     * @param float $nbHAbsenceIntemp The nb h absence intemp.
     */
    public function setNbHAbsenceIntemp($nbHAbsenceIntemp) {
        $this->nbHAbsenceIntemp = $nbHAbsenceIntemp;
        return $this;
    }

    /**
     * Set the nb h attente.
     *
     * @param float $nbHAttente The nb h attente.
     */
    public function setNbHAttente($nbHAttente) {
        $this->nbHAttente = $nbHAttente;
        return $this;
    }

    /**
     * Set the nb h bonifie dues.
     *
     * @param float $nbHBonifieDues The nb h bonifie dues.
     */
    public function setNbHBonifieDues($nbHBonifieDues) {
        $this->nbHBonifieDues = $nbHBonifieDues;
        return $this;
    }

    /**
     * Set the nb h bonifie prises.
     *
     * @param float $nbHBonifiePrises The nb h bonifie prises.
     */
    public function setNbHBonifiePrises($nbHBonifiePrises) {
        $this->nbHBonifiePrises = $nbHBonifiePrises;
        return $this;
    }

    /**
     * Set the nb h carence intemp.
     *
     * @param float $nbHCarenceIntemp The nb h carence intemp.
     */
    public function setNbHCarenceIntemp($nbHCarenceIntemp) {
        $this->nbHCarenceIntemp = $nbHCarenceIntemp;
        return $this;
    }

    /**
     * Set the nb h chom part cp.
     *
     * @param float $nbHChomPartCp The nb h chom part cp.
     */
    public function setNbHChomPartCp($nbHChomPartCp) {
        $this->nbHChomPartCp = $nbHChomPartCp;
        return $this;
    }

    /**
     * Set the nb h chom part tech.
     *
     * @param float $nbHChomPartTech The nb h chom part tech.
     */
    public function setNbHChomPartTech($nbHChomPartTech) {
        $this->nbHChomPartTech = $nbHChomPartTech;
        return $this;
    }

    /**
     * Set the nb h conduite.
     *
     * @param float $nbHConduite The nb h conduite.
     */
    public function setNbHConduite($nbHConduite) {
        $this->nbHConduite = $nbHConduite;
        return $this;
    }

    /**
     * Set the nb h conting.
     *
     * @param float $nbHConting The nb h conting.
     */
    public function setNbHConting($nbHConting) {
        $this->nbHConting = $nbHConting;
        return $this;
    }

    /**
     * Set the nb h dble.
     *
     * @param float $nbHDble The nb h dble.
     */
    public function setNbHDble($nbHDble) {
        $this->nbHDble = $nbHDble;
        return $this;
    }

    /**
     * Set the nb h dif dus.
     *
     * @param float $nbHDifDus The nb h dif dus.
     */
    public function setNbHDifDus($nbHDifDus) {
        $this->nbHDifDus = $nbHDifDus;
        return $this;
    }

    /**
     * Set the nb h intemp indem.
     *
     * @param float $nbHIntempIndem The nb h intemp indem.
     */
    public function setNbHIntempIndem($nbHIntempIndem) {
        $this->nbHIntempIndem = $nbHIntempIndem;
        return $this;
    }

    /**
     * Set the nb h lig sal base.
     *
     * @param float $nbHLigSalBase The nb h lig sal base.
     */
    public function setNbHLigSalBase($nbHLigSalBase) {
        $this->nbHLigSalBase = $nbHLigSalBase;
        return $this;
    }

    /**
     * Set the nb h normal.
     *
     * @param float $nbHNormal The nb h normal.
     */
    public function setNbHNormal($nbHNormal) {
        $this->nbHNormal = $nbHNormal;
        return $this;
    }

    /**
     * Set the nb h pas droit fillon.
     *
     * @param float $nbHPasDroitFillon The nb h pas droit fillon.
     */
    public function setNbHPasDroitFillon($nbHPasDroitFillon) {
        $this->nbHPasDroitFillon = $nbHPasDroitFillon;
        return $this;
    }

    /**
     * Set the nb h remplace.
     *
     * @param float $nbHRemplace The nb h remplace.
     */
    public function setNbHRemplace($nbHRemplace) {
        $this->nbHRemplace = $nbHRemplace;
        return $this;
    }

    /**
     * Set the nb h repo comp dues.
     *
     * @param float $nbHRepoCompDues The nb h repo comp dues.
     */
    public function setNbHRepoCompDues($nbHRepoCompDues) {
        $this->nbHRepoCompDues = $nbHRepoCompDues;
        return $this;
    }

    /**
     * Set the nb h repo comp prises.
     *
     * @param float $nbHRepoCompPrises The nb h repo comp prises.
     */
    public function setNbHRepoCompPrises($nbHRepoCompPrises) {
        $this->nbHRepoCompPrises = $nbHRepoCompPrises;
        return $this;
    }

    /**
     * Set the nb h repo r dues.
     *
     * @param float $nbHRepoRDues The nb h repo r dues.
     */
    public function setNbHRepoRDues($nbHRepoRDues) {
        $this->nbHRepoRDues = $nbHRepoRDues;
        return $this;
    }

    /**
     * Set the nb h repo r prises.
     *
     * @param float $nbHRepoRPrises The nb h repo r prises.
     */
    public function setNbHRepoRPrises($nbHRepoRPrises) {
        $this->nbHRepoRPrises = $nbHRepoRPrises;
        return $this;
    }

    /**
     * Set the nb h sup1.
     *
     * @param float $nbHSup1 The nb h sup1.
     */
    public function setNbHSup1($nbHSup1) {
        $this->nbHSup1 = $nbHSup1;
        return $this;
    }

    /**
     * Set the nb h sup2.
     *
     * @param float $nbHSup2 The nb h sup2.
     */
    public function setNbHSup2($nbHSup2) {
        $this->nbHSup2 = $nbHSup2;
        return $this;
    }

    /**
     * Set the nb h sup3.
     *
     * @param float $nbHSup3 The nb h sup3.
     */
    public function setNbHSup3($nbHSup3) {
        $this->nbHSup3 = $nbHSup3;
        return $this;
    }

    /**
     * Set the nb h sup4.
     *
     * @param float $nbHSup4 The nb h sup4.
     */
    public function setNbHSup4($nbHSup4) {
        $this->nbHSup4 = $nbHSup4;
        return $this;
    }

    /**
     * Set the nb h sup5.
     *
     * @param float $nbHSup5 The nb h sup5.
     */
    public function setNbHSup5($nbHSup5) {
        $this->nbHSup5 = $nbHSup5;
        return $this;
    }

    /**
     * Set the nb h sup bonif.
     *
     * @param float $nbHSupBonif The nb h sup bonif.
     */
    public function setNbHSupBonif($nbHSupBonif) {
        $this->nbHSupBonif = $nbHSupBonif;
        return $this;
    }

    /**
     * Set the nb h sup bonif abs.
     *
     * @param float $nbHSupBonifAbs The nb h sup bonif abs.
     */
    public function setNbHSupBonifAbs($nbHSupBonifAbs) {
        $this->nbHSupBonifAbs = $nbHSupBonifAbs;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float $nbHTrav The nb h trav.
     */
    public function setNbHTrav($nbHTrav) {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the nb h travail.
     *
     * @param float $nbHTravail The nb h travail.
     */
    public function setNbHTravail($nbHTravail) {
        $this->nbHTravail = $nbHTravail;
        return $this;
    }

    /**
     * Set the nb heure paye.
     *
     * @param float $nbHeurePaye The nb heure paye.
     */
    public function setNbHeurePaye($nbHeurePaye) {
        $this->nbHeurePaye = $nbHeurePaye;
        return $this;
    }

    /**
     * Set the nb heure sup.
     *
     * @param float $nbHeureSup The nb heure sup.
     */
    public function setNbHeureSup($nbHeureSup) {
        $this->nbHeureSup = $nbHeureSup;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float $nbHeureTrav The nb heure trav.
     */
    public function setNbHeureTrav($nbHeureTrav) {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb heure trav mois.
     *
     * @param float $nbHeureTravMois The nb heure trav mois.
     */
    public function setNbHeureTravMois($nbHeureTravMois) {
        $this->nbHeureTravMois = $nbHeureTravMois;
        return $this;
    }

    /**
     * Set the nb j chom part cp.
     *
     * @param float $nbJChomPartCp The nb j chom part cp.
     */
    public function setNbJChomPartCp($nbJChomPartCp) {
        $this->nbJChomPartCp = $nbJChomPartCp;
        return $this;
    }

    /**
     * Set the nb j dus.
     *
     * @param float $nbJDus The nb j dus.
     */
    public function setNbJDus($nbJDus) {
        $this->nbJDus = $nbJDus;
        return $this;
    }

    /**
     * Set the nb j dus1.
     *
     * @param float $nbJDus1 The nb j dus1.
     */
    public function setNbJDus1($nbJDus1) {
        $this->nbJDus1 = $nbJDus1;
        return $this;
    }

    /**
     * Set the nb j pris.
     *
     * @param float $nbJPris The nb j pris.
     */
    public function setNbJPris($nbJPris) {
        $this->nbJPris = $nbJPris;
        return $this;
    }

    /**
     * Set the nb j pris1.
     *
     * @param float $nbJPris1 The nb j pris1.
     */
    public function setNbJPris1($nbJPris1) {
        $this->nbJPris1 = $nbJPris1;
        return $this;
    }

    /**
     * Set the nb j repo recup dus.
     *
     * @param float $nbJRepoRecupDus The nb j repo recup dus.
     */
    public function setNbJRepoRecupDus($nbJRepoRecupDus) {
        $this->nbJRepoRecupDus = $nbJRepoRecupDus;
        return $this;
    }

    /**
     * Set the nb j repo recup pris.
     *
     * @param float $nbJRepoRecupPris The nb j repo recup pris.
     */
    public function setNbJRepoRecupPris($nbJRepoRecupPris) {
        $this->nbJRepoRecupPris = $nbJRepoRecupPris;
        return $this;
    }

    /**
     * Set the nb j trav force.
     *
     * @param bool $nbJTravForce The nb j trav force.
     */
    public function setNbJTravForce($nbJTravForce) {
        $this->nbJTravForce = $nbJTravForce;
        return $this;
    }

    /**
     * Set the nb j trav mois es.
     *
     * @param int $nbJTravMoisEs The nb j trav mois es.
     */
    public function setNbJTravMoisEs($nbJTravMoisEs) {
        $this->nbJTravMoisEs = $nbJTravMoisEs;
        return $this;
    }

    /**
     * Set the nb jour base.
     *
     * @param float $nbJourBase The nb jour base.
     */
    public function setNbJourBase($nbJourBase) {
        $this->nbJourBase = $nbJourBase;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float $nbJourBaseCp The nb jour base cp.
     */
    public function setNbJourBaseCp($nbJourBaseCp) {
        $this->nbJourBaseCp = $nbJourBaseCp;
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
     * Set the nb jour cp pris.
     *
     * @param float $nbJourCpPris The nb jour cp pris.
     */
    public function setNbJourCpPris($nbJourCpPris) {
        $this->nbJourCpPris = $nbJourCpPris;
        return $this;
    }

    /**
     * Set the nb jour normaux.
     *
     * @param float $nbJourNormaux The nb jour normaux.
     */
    public function setNbJourNormaux($nbJourNormaux) {
        $this->nbJourNormaux = $nbJourNormaux;
        return $this;
    }

    /**
     * Set the nb jour trav.
     *
     * @param float $nbJourTrav The nb jour trav.
     */
    public function setNbJourTrav($nbJourTrav) {
        $this->nbJourTrav = $nbJourTrav;
        return $this;
    }

    /**
     * Set the nb jrtt dus.
     *
     * @param float $nbJrttDus The nb jrtt dus.
     */
    public function setNbJrttDus($nbJrttDus) {
        $this->nbJrttDus = $nbJrttDus;
        return $this;
    }

    /**
     * Set the nb jrtt pris.
     *
     * @param float $nbJrttPris The nb jrtt pris.
     */
    public function setNbJrttPris($nbJrttPris) {
        $this->nbJrttPris = $nbJrttPris;
        return $this;
    }

    /**
     * Set the net a payer.
     *
     * @param float $netAPayer The net a payer.
     */
    public function setNetAPayer($netAPayer) {
        $this->netAPayer = $netAPayer;
        return $this;
    }

    /**
     * Set the net impos.
     *
     * @param float $netImpos The net impos.
     */
    public function setNetImpos($netImpos) {
        $this->netImpos = $netImpos;
        return $this;
    }

    /**
     * Set the note1.
     *
     * @param string $note1 The note1.
     */
    public function setNote1($note1) {
        $this->note1 = $note1;
        return $this;
    }

    /**
     * Set the note2.
     *
     * @param string $note2 The note2.
     */
    public function setNote2($note2) {
        $this->note2 = $note2;
        return $this;
    }

    /**
     * Set the note3.
     *
     * @param string $note3 The note3.
     */
    public function setNote3($note3) {
        $this->note3 = $note3;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the paie euro.
     *
     * @param bool $paieEuro The paie euro.
     */
    public function setPaieEuro($paieEuro) {
        $this->paieEuro = $paieEuro;
        return $this;
    }

    /**
     * Set the paiement cp non pris.
     *
     * @param bool $paiementCpNonPris The paiement cp non pris.
     */
    public function setPaiementCpNonPris($paiementCpNonPris) {
        $this->paiementCpNonPris = $paiementCpNonPris;
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
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the periodicite modifie.
     *
     * @param bool $periodiciteModifie The periodicite modifie.
     */
    public function setPeriodiciteModifie($periodiciteModifie) {
        $this->periodiciteModifie = $periodiciteModifie;
        return $this;
    }

    /**
     * Set the plafond1 caisse1.
     *
     * @param float $plafond1Caisse1 The plafond1 caisse1.
     */
    public function setPlafond1Caisse1($plafond1Caisse1) {
        $this->plafond1Caisse1 = $plafond1Caisse1;
        return $this;
    }

    /**
     * Set the plafond1 caisse2.
     *
     * @param float $plafond1Caisse2 The plafond1 caisse2.
     */
    public function setPlafond1Caisse2($plafond1Caisse2) {
        $this->plafond1Caisse2 = $plafond1Caisse2;
        return $this;
    }

    /**
     * Set the plafond1 caisse3.
     *
     * @param float $plafond1Caisse3 The plafond1 caisse3.
     */
    public function setPlafond1Caisse3($plafond1Caisse3) {
        $this->plafond1Caisse3 = $plafond1Caisse3;
        return $this;
    }

    /**
     * Set the plafond2 caisse1.
     *
     * @param float $plafond2Caisse1 The plafond2 caisse1.
     */
    public function setPlafond2Caisse1($plafond2Caisse1) {
        $this->plafond2Caisse1 = $plafond2Caisse1;
        return $this;
    }

    /**
     * Set the plafond2 caisse2.
     *
     * @param float $plafond2Caisse2 The plafond2 caisse2.
     */
    public function setPlafond2Caisse2($plafond2Caisse2) {
        $this->plafond2Caisse2 = $plafond2Caisse2;
        return $this;
    }

    /**
     * Set the plafond2 caisse3.
     *
     * @param float $plafond2Caisse3 The plafond2 caisse3.
     */
    public function setPlafond2Caisse3($plafond2Caisse3) {
        $this->plafond2Caisse3 = $plafond2Caisse3;
        return $this;
    }

    /**
     * Set the plafond gmp.
     *
     * @param float $plafondGmp The plafond gmp.
     */
    public function setPlafondGmp($plafondGmp) {
        $this->plafondGmp = $plafondGmp;
        return $this;
    }

    /**
     * Set the plafond gmp modifie.
     *
     * @param bool $plafondGmpModifie The plafond gmp modifie.
     */
    public function setPlafondGmpModifie($plafondGmpModifie) {
        $this->plafondGmpModifie = $plafondGmpModifie;
        return $this;
    }

    /**
     * Set the plafond heure.
     *
     * @param float $plafondHeure The plafond heure.
     */
    public function setPlafondHeure($plafondHeure) {
        $this->plafondHeure = $plafondHeure;
        return $this;
    }

    /**
     * Set the plafond jour.
     *
     * @param float $plafondJour The plafond jour.
     */
    public function setPlafondJour($plafondJour) {
        $this->plafondJour = $plafondJour;
        return $this;
    }

    /**
     * Set the plafond semaine.
     *
     * @param float $plafondSemaine The plafond semaine.
     */
    public function setPlafondSemaine($plafondSemaine) {
        $this->plafondSemaine = $plafondSemaine;
        return $this;
    }

    /**
     * Set the pourcent abat.
     *
     * @param float $pourcentAbat The pourcent abat.
     */
    public function setPourcentAbat($pourcentAbat) {
        $this->pourcentAbat = $pourcentAbat;
        return $this;
    }

    /**
     * Set the pourcent act force.
     *
     * @param int $pourcentActForce The pourcent act force.
     */
    public function setPourcentActForce($pourcentActForce) {
        $this->pourcentActForce = $pourcentActForce;
        return $this;
    }

    /**
     * Set the pourcent activite.
     *
     * @param float $pourcentActivite The pourcent activite.
     */
    public function setPourcentActivite($pourcentActivite) {
        $this->pourcentActivite = $pourcentActivite;
        return $this;
    }

    /**
     * Set the pourcent remu hor.
     *
     * @param float $pourcentRemuHor The pourcent remu hor.
     */
    public function setPourcentRemuHor($pourcentRemuHor) {
        $this->pourcentRemuHor = $pourcentRemuHor;
        return $this;
    }

    /**
     * Set the pp soumis taxe.
     *
     * @param float $ppSoumisTaxe The pp soumis taxe.
     */
    public function setPpSoumisTaxe($ppSoumisTaxe) {
        $this->ppSoumisTaxe = $ppSoumisTaxe;
        return $this;
    }

    /**
     * Set the prov cp.
     *
     * @param float $provCp The prov cp.
     */
    public function setProvCp($provCp) {
        $this->provCp = $provCp;
        return $this;
    }

    /**
     * Set the prov cp1.
     *
     * @param float $provCp1 The prov cp1.
     */
    public function setProvCp1($provCp1) {
        $this->provCp1 = $provCp1;
        return $this;
    }

    /**
     * Set the pss1.
     *
     * @param float $pss1 The pss1.
     */
    public function setPss1($pss1) {
        $this->pss1 = $pss1;
        return $this;
    }

    /**
     * Set the pss2.
     *
     * @param float $pss2 The pss2.
     */
    public function setPss2($pss2) {
        $this->pss2 = $pss2;
        return $this;
    }

    /**
     * Set the pss30.
     *
     * @param bool $pss30 The pss30.
     */
    public function setPss30($pss30) {
        $this->pss30 = $pss30;
        return $this;
    }

    /**
     * Set the pss mod.
     *
     * @param bool $pssMod The pss mod.
     */
    public function setPssMod($pssMod) {
        $this->pssMod = $pssMod;
        return $this;
    }

    /**
     * Set the remun mens.
     *
     * @param float $remunMens The remun mens.
     */
    public function setRemunMens($remunMens) {
        $this->remunMens = $remunMens;
        return $this;
    }

    /**
     * Set the s base.
     *
     * @param float $sBase The s base.
     */
    public function setSBase($sBase) {
        $this->sBase = $sBase;
        return $this;
    }

    /**
     * Set the smic1.
     *
     * @param float $smic1 The smic1.
     */
    public function setSmic1($smic1) {
        $this->smic1 = $smic1;
        return $this;
    }

    /**
     * Set the smic h.
     *
     * @param float $smicH The smic h.
     */
    public function setSmicH($smicH) {
        $this->smicH = $smicH;
        return $this;
    }

    /**
     * Set the smic h35.
     *
     * @param float $smicH35 The smic h35.
     */
    public function setSmicH35($smicH35) {
        $this->smicH35 = $smicH35;
        return $this;
    }

    /**
     * Set the smic h39.
     *
     * @param float $smicH39 The smic h39.
     */
    public function setSmicH39($smicH39) {
        $this->smicH39 = $smicH39;
        return $this;
    }

    /**
     * Set the smic m.
     *
     * @param float $smicM The smic m.
     */
    public function setSmicM($smicM) {
        $this->smicM = $smicM;
        return $this;
    }

    /**
     * Set the smic m35.
     *
     * @param float $smicM35 The smic m35.
     */
    public function setSmicM35($smicM35) {
        $this->smicM35 = $smicM35;
        return $this;
    }

    /**
     * Set the smic m39.
     *
     * @param float $smicM39 The smic m39.
     */
    public function setSmicM39($smicM39) {
        $this->smicM39 = $smicM39;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool $sortieMois The sortie mois.
     */
    public function setSortieMois($sortieMois) {
        $this->sortieMois = $sortieMois;
        return $this;
    }

    /**
     * Set the taux h ab cp.
     *
     * @param float $tauxHAbCp The taux h ab cp.
     */
    public function setTauxHAbCp($tauxHAbCp) {
        $this->tauxHAbCp = $tauxHAbCp;
        return $this;
    }

    /**
     * Set the taux h absence.
     *
     * @param float $tauxHAbsence The taux h absence.
     */
    public function setTauxHAbsence($tauxHAbsence) {
        $this->tauxHAbsence = $tauxHAbsence;
        return $this;
    }

    /**
     * Set the taux h normal.
     *
     * @param float $tauxHNormal The taux h normal.
     */
    public function setTauxHNormal($tauxHNormal) {
        $this->tauxHNormal = $tauxHNormal;
        return $this;
    }

    /**
     * Set the taux journalier.
     *
     * @param float $tauxJournalier The taux journalier.
     */
    public function setTauxJournalier($tauxJournalier) {
        $this->tauxJournalier = $tauxJournalier;
        return $this;
    }

    /**
     * Set the tot acompte.
     *
     * @param float $totAcompte The tot acompte.
     */
    public function setTotAcompte($totAcompte) {
        $this->totAcompte = $totAcompte;
        return $this;
    }

    /**
     * Set the tot acompte cp.
     *
     * @param float $totAcompteCp The tot acompte cp.
     */
    public function setTotAcompteCp($totAcompteCp) {
        $this->totAcompteCp = $totAcompteCp;
        return $this;
    }

    /**
     * Set the tot cotis patron.
     *
     * @param float $totCotisPatron The tot cotis patron.
     */
    public function setTotCotisPatron($totCotisPatron) {
        $this->totCotisPatron = $totCotisPatron;
        return $this;
    }

    /**
     * Set the tot prime ni.
     *
     * @param float $totPrimeNi The tot prime ni.
     */
    public function setTotPrimeNi($totPrimeNi) {
        $this->totPrimeNi = $totPrimeNi;
        return $this;
    }

    /**
     * Set the tot prime ns.
     *
     * @param float $totPrimeNs The tot prime ns.
     */
    public function setTotPrimeNs($totPrimeNs) {
        $this->totPrimeNs = $totPrimeNs;
        return $this;
    }

    /**
     * Set the tot retenue.
     *
     * @param float $totRetenue The tot retenue.
     */
    public function setTotRetenue($totRetenue) {
        $this->totRetenue = $totRetenue;
        return $this;
    }

    /**
     * Set the tr a caisse1.
     *
     * @param float $trACaisse1 The tr a caisse1.
     */
    public function setTrACaisse1($trACaisse1) {
        $this->trACaisse1 = $trACaisse1;
        return $this;
    }

    /**
     * Set the tr a caisse2.
     *
     * @param float $trACaisse2 The tr a caisse2.
     */
    public function setTrACaisse2($trACaisse2) {
        $this->trACaisse2 = $trACaisse2;
        return $this;
    }

    /**
     * Set the tr a caisse3.
     *
     * @param float $trACaisse3 The tr a caisse3.
     */
    public function setTrACaisse3($trACaisse3) {
        $this->trACaisse3 = $trACaisse3;
        return $this;
    }

    /**
     * Set the tr b caisse1.
     *
     * @param float $trBCaisse1 The tr b caisse1.
     */
    public function setTrBCaisse1($trBCaisse1) {
        $this->trBCaisse1 = $trBCaisse1;
        return $this;
    }

    /**
     * Set the tr b caisse2.
     *
     * @param float $trBCaisse2 The tr b caisse2.
     */
    public function setTrBCaisse2($trBCaisse2) {
        $this->trBCaisse2 = $trBCaisse2;
        return $this;
    }

    /**
     * Set the tr b caisse3.
     *
     * @param float $trBCaisse3 The tr b caisse3.
     */
    public function setTrBCaisse3($trBCaisse3) {
        $this->trBCaisse3 = $trBCaisse3;
        return $this;
    }

    /**
     * Set the tr c caisse1.
     *
     * @param float $trCCaisse1 The tr c caisse1.
     */
    public function setTrCCaisse1($trCCaisse1) {
        $this->trCCaisse1 = $trCCaisse1;
        return $this;
    }

    /**
     * Set the tr c caisse2.
     *
     * @param float $trCCaisse2 The tr c caisse2.
     */
    public function setTrCCaisse2($trCCaisse2) {
        $this->trCCaisse2 = $trCCaisse2;
        return $this;
    }

    /**
     * Set the tr c caisse3.
     *
     * @param float $trCCaisse3 The tr c caisse3.
     */
    public function setTrCCaisse3($trCCaisse3) {
        $this->trCCaisse3 = $trCCaisse3;
        return $this;
    }

    /**
     * Set the tranche2.
     *
     * @param float $tranche2 The tranche2.
     */
    public function setTranche2($tranche2) {
        $this->tranche2 = $tranche2;
        return $this;
    }

    /**
     * Set the tranche a.
     *
     * @param float $trancheA The tranche a.
     */
    public function setTrancheA($trancheA) {
        $this->trancheA = $trancheA;
        return $this;
    }

    /**
     * Set the tranche abal.
     *
     * @param float $trancheAbal The tranche abal.
     */
    public function setTrancheAbal($trancheAbal) {
        $this->trancheAbal = $trancheAbal;
        return $this;
    }

    /**
     * Set the tranche abanl.
     *
     * @param float $trancheAbanl The tranche abanl.
     */
    public function setTrancheAbanl($trancheAbanl) {
        $this->trancheAbanl = $trancheAbanl;
        return $this;
    }

    /**
     * Set the tranche abna.
     *
     * @param float $trancheAbna The tranche abna.
     */
    public function setTrancheAbna($trancheAbna) {
        $this->trancheAbna = $trancheAbna;
        return $this;
    }

    /**
     * Set the tranche b.
     *
     * @param float $trancheB The tranche b.
     */
    public function setTrancheB($trancheB) {
        $this->trancheB = $trancheB;
        return $this;
    }

    /**
     * Set the tranche bbal.
     *
     * @param float $trancheBbal The tranche bbal.
     */
    public function setTrancheBbal($trancheBbal) {
        $this->trancheBbal = $trancheBbal;
        return $this;
    }

    /**
     * Set the tranche bbanl.
     *
     * @param float $trancheBbanl The tranche bbanl.
     */
    public function setTrancheBbanl($trancheBbanl) {
        $this->trancheBbanl = $trancheBbanl;
        return $this;
    }

    /**
     * Set the tranche bbna.
     *
     * @param float $trancheBbna The tranche bbna.
     */
    public function setTrancheBbna($trancheBbna) {
        $this->trancheBbna = $trancheBbna;
        return $this;
    }

    /**
     * Set the tranche c.
     *
     * @param float $trancheC The tranche c.
     */
    public function setTrancheC($trancheC) {
        $this->trancheC = $trancheC;
        return $this;
    }

    /**
     * Set the tranche c plaf.
     *
     * @param float $trancheCPlaf The tranche c plaf.
     */
    public function setTrancheCPlaf($trancheCPlaf) {
        $this->trancheCPlaf = $trancheCPlaf;
        return $this;
    }

    /**
     * Set the tranche cbal.
     *
     * @param float $trancheCbal The tranche cbal.
     */
    public function setTrancheCbal($trancheCbal) {
        $this->trancheCbal = $trancheCbal;
        return $this;
    }

    /**
     * Set the tranche cbanl.
     *
     * @param float $trancheCbanl The tranche cbanl.
     */
    public function setTrancheCbanl($trancheCbanl) {
        $this->trancheCbanl = $trancheCbanl;
        return $this;
    }

    /**
     * Set the tranche cbna.
     *
     * @param float $trancheCbna The tranche cbna.
     */
    public function setTrancheCbna($trancheCbna) {
        $this->trancheCbna = $trancheCbna;
        return $this;
    }

    /**
     * Set the txt note rtf.
     *
     * @param string $txtNoteRtf The txt note rtf.
     */
    public function setTxtNoteRtf($txtNoteRtf) {
        $this->txtNoteRtf = $txtNoteRtf;
        return $this;
    }

    /**
     * Set the type base caisse1.
     *
     * @param string $typeBaseCaisse1 The type base caisse1.
     */
    public function setTypeBaseCaisse1($typeBaseCaisse1) {
        $this->typeBaseCaisse1 = $typeBaseCaisse1;
        return $this;
    }

    /**
     * Set the type base caisse2.
     *
     * @param string $typeBaseCaisse2 The type base caisse2.
     */
    public function setTypeBaseCaisse2($typeBaseCaisse2) {
        $this->typeBaseCaisse2 = $typeBaseCaisse2;
        return $this;
    }

    /**
     * Set the type base caisse3.
     *
     * @param string $typeBaseCaisse3 The type base caisse3.
     */
    public function setTypeBaseCaisse3($typeBaseCaisse3) {
        $this->typeBaseCaisse3 = $typeBaseCaisse3;
        return $this;
    }

    /**
     * Set the type gestion bal.
     *
     * @param string $typeGestionBal The type gestion bal.
     */
    public function setTypeGestionBal($typeGestionBal) {
        $this->typeGestionBal = $typeGestionBal;
        return $this;
    }

    /**
     * Set the type paiement bul.
     *
     * @param string $typePaiementBul The type paiement bul.
     */
    public function setTypePaiementBul($typePaiementBul) {
        $this->typePaiementBul = $typePaiementBul;
        return $this;
    }

    /**
     * Set the type paiment modifie.
     *
     * @param bool $typePaimentModifie The type paiment modifie.
     */
    public function setTypePaimentModifie($typePaimentModifie) {
        $this->typePaimentModifie = $typePaimentModifie;
        return $this;
    }

    /**
     * Set the type saisie abs.
     *
     * @param string $typeSaisieAbs The type saisie abs.
     */
    public function setTypeSaisieAbs($typeSaisieAbs) {
        $this->typeSaisieAbs = $typeSaisieAbs;
        return $this;
    }

    /**
     * Set the type saisie absence.
     *
     * @param string $typeSaisieAbsence The type saisie absence.
     */
    public function setTypeSaisieAbsence($typeSaisieAbsence) {
        $this->typeSaisieAbsence = $typeSaisieAbsence;
        return $this;
    }

    /**
     * Set the valorise cp.
     *
     * @param float $valoriseCp The valorise cp.
     */
    public function setValoriseCp($valoriseCp) {
        $this->valoriseCp = $valoriseCp;
        return $this;
    }
}
