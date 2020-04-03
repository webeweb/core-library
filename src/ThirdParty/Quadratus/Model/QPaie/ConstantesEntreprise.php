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
 * Constantes entreprise.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConstantesEntreprise {

    /**
     * Absence extra.
     *
     * @var string
     */
    private $absenceExtra;

    /**
     * Activer pointage qws.
     *
     * @var bool
     */
    private $activerPointageQws;

    /**
     * Adhesion tds norme.
     *
     * @var string
     */
    private $adhesionTdsNorme;

    /**
     * Affaire.
     *
     * @var string
     */
    private $affaire;

    /**
     * Affectation taux27.
     *
     * @var bool
     */
    private $affectationTaux27;

    /**
     * Analytique employe.
     *
     * @var bool
     */
    private $analytiqueEmploye;

    /**
     * Arbitrage auto.
     *
     * @var string
     */
    private $arbitrageAuto;

    /**
     * Archivage actif.
     *
     * @var bool
     */
    private $archivageActif;

    /**
     * Attest auto.
     *
     * @var bool
     */
    private $attestAuto;

    /**
     * Beneficie cice.
     *
     * @var bool
     */
    private $beneficieCice;

    /**
     * Brut al sal min conv.
     *
     * @var bool
     */
    private $brutAlSalMinConv;

    /**
     * Calcul auto h theorique.
     *
     * @var bool
     */
    private $calculAutoHTheorique;

    /**
     * Certif auto.
     *
     * @var bool
     */
    private $certifAuto;

    /**
     * Cheques euro.
     *
     * @var string
     */
    private $chequesEuro;

    /**
     * Choix edition cheque tc.
     *
     * @var bool
     */
    private $choixEditionChequeTc;

    /**
     * Cice pj mail cli ducs edi.
     *
     * @var bool
     */
    private $cicePjMailCliDucsEdi;

    /**
     * Cle acces1.
     *
     * @var string
     */
    private $cleAcces1;

    /**
     * Cle portable.
     *
     * @var string
     */
    private $clePortable;

    /**
     * Code org btpdadsu.
     *
     * @var string
     */
    private $codeOrgBtpdadsu;

    /**
     * Collaborateuri paie.
     *
     * @var string
     */
    private $collaborateuriPaie;

    /**
     * Compression.
     *
     * @var bool
     */
    private $compression;

    /**
     * Compte gain euro.
     *
     * @var string
     */
    private $compteGainEuro;

    /**
     * Compte perte euro.
     *
     * @var string
     */
    private $comptePerteEuro;

    /**
     * Cpta elit euros.
     *
     * @var bool
     */
    private $cptaElitEuros;

    /**
     * Ctrl auto cp.
     *
     * @var bool
     */
    private $ctrlAutoCp;

    /**
     * Ctrl auto cp anticip.
     *
     * @var bool
     */
    private $ctrlAutoCpAnticip;

    /**
     * Ctrl taux base.
     *
     * @var bool
     */
    private $ctrlTauxBase;

    /**
     * Dads dernier choix gestion aen.
     *
     * @var string
     */
    private $dadsDernierChoixGestionAen;

    /**
     * Dads type gestion aen.
     *
     * @var string
     */
    private $dadsTypeGestionAen;

    /**
     * Dadsu num agr ansp.
     *
     * @var string
     */
    private $dadsuNumAgrAnsp;

    /**
     * Dadsu ref dec.
     *
     * @var string
     */
    private $dadsuRefDec;

    /**
     * Das type decl.
     *
     * @var string
     */
    private $dasTypeDecl;

    /**
     * Das type decl detail.
     *
     * @var string
     */
    private $dasTypeDeclDetail;

    /**
     * Date dp.
     *
     * @var DateTime|null
     */
    private $dateDp;

    /**
     * Debut periode das.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDas;

    /**
     * Debut periode histo das.
     *
     * @var DateTime|null
     */
    private $debutPeriodeHistoDas;

    /**
     * Deduction h sup fillon.
     *
     * @var bool
     */
    private $deductionHSupFillon;

    /**
     * Deduire h sup non structurelle.
     *
     * @var bool
     */
    private $deduireHSupNonStructurelle;

    /**
     * Dernier indice bul.
     *
     * @var int
     */
    private $dernierIndiceBul;

    /**
     * Dest point irc.
     *
     * @var string
     */
    private $destPointIrc;

    /**
     * Dest tri point.
     *
     * @var string
     */
    private $destTriPoint;

    /**
     * Dossier proprete.
     *
     * @var string
     */
    private $dossierProprete;

    /**
     * Dossier sur web.
     *
     * @var bool
     */
    private $dossierSurWeb;

    /**
     * Ds code collab.
     *
     * @var string
     */
    private $dsCodeCollab;

    /**
     * Ds date retour.
     *
     * @var DateTime|null
     */
    private $dsDateRetour;

    /**
     * Ds date sortie.
     *
     * @var DateTime|null
     */
    private $dsDateSortie;

    /**
     * Ds fusion.
     *
     * @var string
     */
    private $dsFusion;

    /**
     * Ds type edition.
     *
     * @var string
     */
    private $dsTypeEdition;

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
     * Ducs franc euro.
     *
     * @var string
     */
    private $ducsFrancEuro;

    /**
     * Ecr type.
     *
     * @var string
     */
    private $ecrType;

    /**
     * Ed bord choix modele.
     *
     * @var string
     */
    private $edBordChoixModele;

    /**
     * Ed bord rupture emp.
     *
     * @var bool
     */
    private $edBordRuptureEmp;

    /**
     * Ed bord type imp.
     *
     * @var string
     */
    private $edBordTypeImp;

    /**
     * Ed bordereau.
     *
     * @var bool
     */
    private $edBordereau;

    /**
     * Ed bordereau prep.
     *
     * @var bool
     */
    private $edBordereauPrep;

    /**
     * Ed bordereau prepa.
     *
     * @var bool
     */
    private $edBordereauPrepa;

    /**
     * Ed bul last fax.
     *
     * @var string
     */
    private $edBulLastFax;

    /**
     * Ed bul last mail.
     *
     * @var string
     */
    private $edBulLastMail;

    /**
     * Ed bul type sortie.
     *
     * @var string
     */
    private $edBulTypeSortie;

    /**
     * Ed correspondance.
     *
     * @var bool
     */
    private $edCorrespondance;

    /**
     * Ed ducs auto.
     *
     * @var bool
     */
    private $edDucsAuto;

    /**
     * Ed ducs nb ex.
     *
     * @var string
     */
    private $edDucsNbEx;

    /**
     * Ed ducs opt btp.
     *
     * @var string
     */
    private $edDucsOptBtp;

    /**
     * Ed ducs type sortie.
     *
     * @var string
     */
    private $edDucsTypeSortie;

    /**
     * Ed h sup bonif que majo.
     *
     * @var bool
     */
    private $edHSupBonifQueMajo;

    /**
     * Ed histo tri emp.
     *
     * @var string
     */
    private $edHistoTriEmp;

    /**
     * Ed histo tri etablissement.
     *
     * @var bool
     */
    private $edHistoTriEtablissement;

    /**
     * Ed histo tri service.
     *
     * @var bool
     */
    private $edHistoTriService;

    /**
     * Ed histo type.
     *
     * @var string
     */
    private $edHistoType;

    /**
     * Ed imput comptable.
     *
     * @var bool
     */
    private $edImputComptable;

    /**
     * Ed texte1.
     *
     * @var string
     */
    private $edTexte1;

    /**
     * Ed texte2.
     *
     * @var string
     */
    private $edTexte2;

    /**
     * Ed trt cpta last fax.
     *
     * @var string
     */
    private $edTrtCptaLastFax;

    /**
     * Ed trt cpta last mail.
     *
     * @var string
     */
    private $edTrtCptaLastMail;

    /**
     * Ed trt cpta sortie.
     *
     * @var string
     */
    private $edTrtCptaSortie;

    /**
     * Edit qpxl absences.
     *
     * @var bool
     */
    private $editQpxlAbsences;

    /**
     * Edit qpxl acomptes.
     *
     * @var bool
     */
    private $editQpxlAcomptes;

    /**
     * Edit qpxl tri emp.
     *
     * @var string
     */
    private $editQpxlTriEmp;

    /**
     * Edit qpxl vider lib.
     *
     * @var bool
     */
    private $editQpxlViderLib;

    /**
     * Editer bulletin stc.
     *
     * @var bool
     */
    private $editerBulletinStc;

    /**
     * Edition cheque tc.
     *
     * @var bool
     */
    private $editionChequeTc;

    /**
     * Edition date.
     *
     * @var bool
     */
    private $editionDate;

    /**
     * Edition heure.
     *
     * @var bool
     */
    private $editionHeure;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Entete solde tc.
     *
     * @var bool
     */
    private $enteteSoldeTc;

    /**
     * Etat controle dadsu.
     *
     * @var string
     */
    private $etatControleDadsu;

    /**
     * Etat ctrl norme.
     *
     * @var string
     */
    private $etatCtrlNorme;

    /**
     * Etat das.
     *
     * @var string
     */
    private $etatDas;

    /**
     * Etat das rect.
     *
     * @var string
     */
    private $etatDasRect;

    /**
     * Fichier unique.
     *
     * @var bool
     */
    private $fichierUnique;

    /**
     * Filtrer liste emp.
     *
     * @var int
     */
    private $filtrerListeEmp;

    /**
     * Fin periode das.
     *
     * @var DateTime|null
     */
    private $finPeriodeDas;

    /**
     * Fin periode histo das.
     *
     * @var DateTime|null
     */
    private $finPeriodeHistoDas;

    /**
     * Flag traite.
     *
     * @var string
     */
    private $flagTraite;

    /**
     * Flag traite2.
     *
     * @var int
     */
    private $flagTraite2;

    /**
     * Flag traite3.
     *
     * @var int
     */
    private $flagTraite3;

    /**
     * Format fic virement.
     *
     * @var string
     */
    private $formatFicVirement;

    /**
     * Gest num bulletin.
     *
     * @var bool
     */
    private $gestNumBulletin;

    /**
     * Gest repo compens.
     *
     * @var bool
     */
    private $gestRepoCompens;

    /**
     * Gest texte.
     *
     * @var bool
     */
    private $gestTexte;

    /**
     * Gestion coeff.
     *
     * @var bool
     */
    private $gestionCoeff;

    /**
     * Gestion coeff grille.
     *
     * @var bool
     */
    private $gestionCoeffGrille;

    /**
     * Gestion exemplaire.
     *
     * @var string
     */
    private $gestionExemplaire;

    /**
     * Gestion intemperie.
     *
     * @var bool
     */
    private $gestionIntemperie;

    /**
     * Gestion numero employe auto.
     *
     * @var bool
     */
    private $gestionNumeroEmployeAuto;

    /**
     * Gestion qpxl.
     *
     * @var bool
     */
    private $gestionQpxl;

    /**
     * Gestion td bilaterale.
     *
     * @var bool
     */
    private $gestionTdBilaterale;

    /**
     * Gestion td sou dadsu.
     *
     * @var bool
     */
    private $gestionTdSouDadsu;

    /**
     * Groupe gi.
     *
     * @var string
     */
    private $groupeGi;

    /**
     * H bonif influ cassation.
     *
     * @var string
     */
    private $hBonifInfluCassation;

    /**
     * H sup1 structurelle.
     *
     * @var bool
     */
    private $hSup1Structurelle;

    /**
     * H sup2 structurelle.
     *
     * @var bool
     */
    private $hSup2Structurelle;

    /**
     * H sup3 structurelle.
     *
     * @var bool
     */
    private $hSup3Structurelle;

    /**
     * H sup4 structurelle.
     *
     * @var bool
     */
    private $hSup4Structurelle;

    /**
     * H sup5 structurelle.
     *
     * @var bool
     */
    private $hSup5Structurelle;

    /**
     * Heure sup2 influ cassation.
     *
     * @var string
     */
    private $heureSup2InfluCassation;

    /**
     * Heure sup3 influ cassation.
     *
     * @var string
     */
    private $heureSup3InfluCassation;

    /**
     * Heure sup4 influ cassation.
     *
     * @var string
     */
    private $heureSup4InfluCassation;

    /**
     * Heure sup5 influ cassation.
     *
     * @var string
     */
    private $heureSup5InfluCassation;

    /**
     * Heure sup influ cassation.
     *
     * @var string
     */
    private $heureSupInfluCassation;

    /**
     * Heure theo base trav.
     *
     * @var string
     */
    private $heureTheoBaseTrav;

    /**
     * Indem cp intervient brut al.
     *
     * @var bool
     */
    private $indemCpIntervientBrutAl;

    /**
     * Jour debut transfert.
     *
     * @var int
     */
    private $jourDebutTransfert;

    /**
     * Jour fin transfert.
     *
     * @var int
     */
    private $jourFinTransfert;

    /**
     * Jrn format.
     *
     * @var string
     */
    private $jrnFormat;

    /**
     * Jrn regroupe abs.
     *
     * @var bool
     */
    private $jrnRegroupeAbs;

    /**
     * Jrn tri.
     *
     * @var string
     */
    private $jrnTri;

    /**
     * Jrn tri etablissement.
     *
     * @var string
     */
    private $jrnTriEtablissement;

    /**
     * Jrn tri service.
     *
     * @var string
     */
    private $jrnTriService;

    /**
     * Jrn type.
     *
     * @var string
     */
    private $jrnType;

    /**
     * Liaison proprete.
     *
     * @var bool
     */
    private $liaisonProprete;

    /**
     * Lib arbitrage.
     *
     * @var string
     */
    private $libArbitrage;

    /**
     * Lib base conge.
     *
     * @var string
     */
    private $libBaseConge;

    /**
     * Lib bqcp.
     *
     * @var string
     */
    private $libBqcp;

    /**
     * Lib cachet aem.
     *
     * @var string
     */
    private $libCachetAem;

    /**
     * Lib cotis cne.
     *
     * @var string
     */
    private $libCotisCne;

    /**
     * Lib fin contrat.
     *
     * @var string
     */
    private $libFinContrat;

    /**
     * Lib fin contrat cne.
     *
     * @var string
     */
    private $libFinContratCne;

    /**
     * Lib indem cp.
     *
     * @var string
     */
    private $libIndemCp;

    /**
     * Libelle libre virement.
     *
     * @var string
     */
    private $libelleLibreVirement;

    /**
     * Ligne bul euro.
     *
     * @var bool
     */
    private $ligneBulEuro;

    /**
     * Lignes transport.
     *
     * @var bool
     */
    private $lignesTransport;

    /**
     * Mail bulletin.
     *
     * @var string
     */
    private $mailBulletin;

    /**
     * Mail bulletin cle.
     *
     * @var string
     */
    private $mailBulletinCle;

    /**
     * Mail bulletin pj.
     *
     * @var string
     */
    private $mailBulletinPj;

    /**
     * Mail c li ducs edi.
     *
     * @var bool
     */
    private $mailCLiDucsEdi;

    /**
     * Mention cp.
     *
     * @var bool
     */
    private $mentionCp;

    /**
     * Message vu.
     *
     * @var bool
     */
    private $messageVu;

    /**
     * Millesime1.
     *
     * @var int
     */
    private $millesime1;

    /**
     * Mode planning.
     *
     * @var int
     */
    private $modePlanning;

    /**
     * Modele apercu.
     *
     * @var string
     */
    private $modeleApercu;

    /**
     * Modele bon bleu.
     *
     * @var string
     */
    private $modeleBonBleu;

    /**
     * Modele bulletin.
     *
     * @var string
     */
    private $modeleBulletin;

    /**
     * Modele certif.
     *
     * @var string
     */
    private $modeleCertif;

    /**
     * Modele certif trav.
     *
     * @var string
     */
    private $modeleCertifTrav;

    /**
     * Modele cheque.
     *
     * @var string
     */
    private $modeleCheque;

    /**
     * Mois cloture an.
     *
     * @var string
     */
    private $moisClotureAn;

    /**
     * N attest aem.
     *
     * @var int
     */
    private $nAttestAem;

    /**
     * N attest aemedi.
     *
     * @var int
     */
    private $nAttestAemedi;

    /**
     * N attest aemx.
     *
     * @var int
     */
    private $nAttestAemx;

    /**
     * N attest assedic.
     *
     * @var int
     */
    private $nAttestAssedic;

    /**
     * N attest extras.
     *
     * @var int
     */
    private $nAttestExtras;

    /**
     * N attest ijss.
     *
     * @var int
     */
    private $nAttestIjss;

    /**
     * N attest ijss at.
     *
     * @var int
     */
    private $nAttestIjssAt;

    /**
     * N der document.
     *
     * @var int
     */
    private $nDerDocument;

    /**
     * Nap euro.
     *
     * @var bool
     */
    private $napEuro;

    /**
     * Nb exemplaire.
     *
     * @var string
     */
    private $nbExemplaire;

    /**
     * Nce conges spectacles.
     *
     * @var int
     */
    private $nceCongesSpectacles;

    /**
     * Nouv param retraite type.
     *
     * @var bool
     */
    private $nouvParamRetraiteType;

    /**
     * Options calc abs.
     *
     * @var bool
     */
    private $optionsCalcAbs;

    /**
     * Ordre libelle h sup.
     *
     * @var string
     */
    private $ordreLibelleHSup;

    /**
     * Paie euro.
     *
     * @var bool
     */
    private $paieEuro;

    /**
     * Part sal seule.
     *
     * @var bool
     */
    private $partSalSeule;

    /**
     * Pas gestion indice bul.
     *
     * @var bool
     */
    private $pasGestionIndiceBul;

    /**
     * Pas prendre iccp fillon.
     *
     * @var bool
     */
    private $pasPrendreIccpFillon;

    /**
     * Pas sous tot s base.
     *
     * @var bool
     */
    private $pasSousTotSBase;

    /**
     * Passage35 h fait.
     *
     * @var bool
     */
    private $passage35HFait;

    /**
     * Path virement.
     *
     * @var string
     */
    private $pathVirement;

    /**
     * Periode i paie.
     *
     * @var DateTime|null
     */
    private $periodeIPaie;

    /**
     * Periode paie.
     *
     * @var DateTime|null
     */
    private $periodePaie;

    /**
     * Pj mail c li ducs edi.
     *
     * @var bool
     */
    private $pjMailCLiDucsEdi;

    /**
     * Pj mail cli coupon paiement.
     *
     * @var bool
     */
    private $pjMailCliCouponPaiement;

    /**
     * Plafond.
     *
     * @var float
     */
    private $plafond;

    /**
     * Porta frais sante certif trav.
     *
     * @var bool
     */
    private $portaFraisSanteCertifTrav;

    /**
     * Porta prevoyance oblig.
     *
     * @var bool
     */
    private $portaPrevoyanceOblig;

    /**
     * Preparation tdp.
     *
     * @var bool
     */
    private $preparationTdp;

    /**
     * Presence min.
     *
     * @var string
     */
    private $presenceMin;

    /**
     * Prorata dif certif trav.
     *
     * @var bool
     */
    private $prorataDifCertifTrav;

    /**
     * Raz commentaire.
     *
     * @var string
     */
    private $razCommentaire;

    /**
     * Raz h sup.
     *
     * @var string
     */
    private $razHSup;

    /**
     * Rdlpascii.
     *
     * @var bool
     */
    private $rdlpascii;

    /**
     * Rdlpemployes.
     *
     * @var bool
     */
    private $rdlpemployes;

    /**
     * Ref remise.
     *
     * @var int
     */
    private $refRemise;

    /**
     * Ref trans.
     *
     * @var int
     */
    private $refTrans;

    /**
     * Reference interne virement.
     *
     * @var string
     */
    private $referenceInterneVirement;

    /**
     * Regroup lib ed bul.
     *
     * @var bool
     */
    private $regroupLibEdBul;

    /**
     * Report minimum.
     *
     * @var int
     */
    private $reportMinimum;

    /**
     * Retraite97.
     *
     * @var bool
     */
    private $retraite97;

    /**
     * Sais plan emp sem.
     *
     * @var string
     */
    private $saisPlanEmpSem;

    /**
     * Saisie indice bul.
     *
     * @var bool
     */
    private $saisieIndiceBul;

    /**
     * Saut page.
     *
     * @var bool
     */
    private $sautPage;

    /**
     * Seuil.
     *
     * @var float
     */
    private $seuil;

    /**
     * Seuil conting.
     *
     * @var float
     */
    private $seuilConting;

    /**
     * Stc auto.
     *
     * @var bool
     */
    private $stcAuto;

    /**
     * Tab bord tri etablissement.
     *
     * @var bool
     */
    private $tabBordTriEtablissement;

    /**
     * Tab bord tri service.
     *
     * @var bool
     */
    private $tabBordTriService;

    /**
     * Tableau charge.
     *
     * @var string
     */
    private $tableauCharge;

    /**
     * Tds annee.
     *
     * @var int
     */
    private $tdsAnnee;

    /**
     * Tds euro.
     *
     * @var bool
     */
    private $tdsEuro;

    /**
     * Tot gene isole.
     *
     * @var string
     */
    private $totGeneIsole;

    /**
     * Tot service isole.
     *
     * @var string
     */
    private $totServiceIsole;

    /**
     * Total etab isole.
     *
     * @var string
     */
    private $totalEtabIsole;

    /**
     * Trans rupture.
     *
     * @var string
     */
    private $transRupture;

    /**
     * Trans tri etablissement.
     *
     * @var string
     */
    private $transTriEtablissement;

    /**
     * Transfert tds emp.
     *
     * @var bool
     */
    private $transfertTdsEmp;

    /**
     * Tri employe.
     *
     * @var string
     */
    private $triEmploye;

    /**
     * Tx sal decote.
     *
     * @var float
     */
    private $txSalDecote;

    /**
     * Type abs sans solde.
     *
     * @var string
     */
    private $typeAbsSansSolde;

    /**
     * Type agrement aem.
     *
     * @var string
     */
    private $typeAgrementAem;

    /**
     * Type bordereau prepa.
     *
     * @var string
     */
    private $typeBordereauPrepa;

    /**
     * Type bulletin.
     *
     * @var string
     */
    private $typeBulletin;

    /**
     * Type dossier.
     *
     * @var string
     */
    private $typeDossier;

    /**
     * Type due.
     *
     * @var string
     */
    private $typeDue;

    /**
     * Type effectif.
     *
     * @var string
     */
    private $typeEffectif;

    /**
     * Type fich bilat.
     *
     * @var string
     */
    private $typeFichBilat;

    /**
     * Type gestion bal.
     *
     * @var string
     */
    private $typeGestionBal;

    /**
     * Type modele.
     *
     * @var string
     */
    private $typeModele;

    /**
     * Type prep dadsu.
     *
     * @var string
     */
    private $typePrepDadsu;

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
     * Type stc.
     *
     * @var string
     */
    private $typeStc;

    /**
     * Type taux intemperie.
     *
     * @var string
     */
    private $typeTauxIntemperie;

    /**
     * Type tri.
     *
     * @var string
     */
    private $typeTri;

    /**
     * Type virement.
     *
     * @var string
     */
    private $typeVirement;

    /**
     * Type visu col saisie bul.
     *
     * @var string
     */
    private $typeVisuColSaisieBul;

    /**
     * Utilise pdp quadra.
     *
     * @var bool
     */
    private $utilisePdpQuadra;

    /**
     * Utilise pdp quadra2.
     *
     * @var bool
     */
    private $utilisePdpQuadra2;

    /**
     * Val cp bulletin.
     *
     * @var bool
     */
    private $valCpBulletin;

    /**
     * Val filtre liste emp.
     *
     * @var int
     */
    private $valFiltreListeEmp;

    /**
     * Version controle dadsu.
     *
     * @var int
     */
    private $versionControleDadsu;

    /**
     * Vir code etab.
     *
     * @var string
     */
    private $virCodeEtab;

    /**
     * Vir collectivite.
     *
     * @var string
     */
    private $virCollectivite;

    /**
     * Vir comptable centre.
     *
     * @var string
     */
    private $virComptableCentre;

    /**
     * Vir comptable sub.
     *
     * @var string
     */
    private $virComptableSub;

    /**
     * Vir fonction publique.
     *
     * @var bool
     */
    private $virFonctionPublique;

    /**
     * Vir seuil.
     *
     * @var float
     */
    private $virSeuil;

    /**
     * Vir type etab.
     *
     * @var string
     */
    private $virTypeEtab;

    /**
     * Virement cr lf.
     *
     * @var bool
     */
    private $virementCrLf;

    /**
     * Virements euro.
     *
     * @var string
     */
    private $virementsEuro;

    /**
     * Web prioritaire.
     *
     * @var bool
     */
    private $webPrioritaire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the absence extra.
     *
     * @return string Returns the absence extra.
     */
    public function getAbsenceExtra() {
        return $this->absenceExtra;
    }

    /**
     * Get the activer pointage qws.
     *
     * @return bool Returns the activer pointage qws.
     */
    public function getActiverPointageQws() {
        return $this->activerPointageQws;
    }

    /**
     * Get the adhesion tds norme.
     *
     * @return string Returns the adhesion tds norme.
     */
    public function getAdhesionTdsNorme() {
        return $this->adhesionTdsNorme;
    }

    /**
     * Get the affaire.
     *
     * @return string Returns the affaire.
     */
    public function getAffaire() {
        return $this->affaire;
    }

    /**
     * Get the affectation taux27.
     *
     * @return bool Returns the affectation taux27.
     */
    public function getAffectationTaux27() {
        return $this->affectationTaux27;
    }

    /**
     * Get the analytique employe.
     *
     * @return bool Returns the analytique employe.
     */
    public function getAnalytiqueEmploye() {
        return $this->analytiqueEmploye;
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
     * Get the archivage actif.
     *
     * @return bool Returns the archivage actif.
     */
    public function getArchivageActif() {
        return $this->archivageActif;
    }

    /**
     * Get the attest auto.
     *
     * @return bool Returns the attest auto.
     */
    public function getAttestAuto() {
        return $this->attestAuto;
    }

    /**
     * Get the beneficie cice.
     *
     * @return bool Returns the beneficie cice.
     */
    public function getBeneficieCice() {
        return $this->beneficieCice;
    }

    /**
     * Get the brut al sal min conv.
     *
     * @return bool Returns the brut al sal min conv.
     */
    public function getBrutAlSalMinConv() {
        return $this->brutAlSalMinConv;
    }

    /**
     * Get the calcul auto h theorique.
     *
     * @return bool Returns the calcul auto h theorique.
     */
    public function getCalculAutoHTheorique() {
        return $this->calculAutoHTheorique;
    }

    /**
     * Get the certif auto.
     *
     * @return bool Returns the certif auto.
     */
    public function getCertifAuto() {
        return $this->certifAuto;
    }

    /**
     * Get the cheques euro.
     *
     * @return string Returns the cheques euro.
     */
    public function getChequesEuro() {
        return $this->chequesEuro;
    }

    /**
     * Get the choix edition cheque tc.
     *
     * @return bool Returns the choix edition cheque tc.
     */
    public function getChoixEditionChequeTc() {
        return $this->choixEditionChequeTc;
    }

    /**
     * Get the cice pj mail cli ducs edi.
     *
     * @return bool Returns the cice pj mail cli ducs edi.
     */
    public function getCicePjMailCliDucsEdi() {
        return $this->cicePjMailCliDucsEdi;
    }

    /**
     * Get the cle acces1.
     *
     * @return string Returns the cle acces1.
     */
    public function getCleAcces1() {
        return $this->cleAcces1;
    }

    /**
     * Get the cle portable.
     *
     * @return string Returns the cle portable.
     */
    public function getClePortable() {
        return $this->clePortable;
    }

    /**
     * Get the code org btpdadsu.
     *
     * @return string Returns the code org btpdadsu.
     */
    public function getCodeOrgBtpdadsu() {
        return $this->codeOrgBtpdadsu;
    }

    /**
     * Get the collaborateuri paie.
     *
     * @return string Returns the collaborateuri paie.
     */
    public function getCollaborateuriPaie() {
        return $this->collaborateuriPaie;
    }

    /**
     * Get the compression.
     *
     * @return bool Returns the compression.
     */
    public function getCompression() {
        return $this->compression;
    }

    /**
     * Get the compte gain euro.
     *
     * @return string Returns the compte gain euro.
     */
    public function getCompteGainEuro() {
        return $this->compteGainEuro;
    }

    /**
     * Get the compte perte euro.
     *
     * @return string Returns the compte perte euro.
     */
    public function getComptePerteEuro() {
        return $this->comptePerteEuro;
    }

    /**
     * Get the cpta elit euros.
     *
     * @return bool Returns the cpta elit euros.
     */
    public function getCptaElitEuros() {
        return $this->cptaElitEuros;
    }

    /**
     * Get the ctrl auto cp.
     *
     * @return bool Returns the ctrl auto cp.
     */
    public function getCtrlAutoCp() {
        return $this->ctrlAutoCp;
    }

    /**
     * Get the ctrl auto cp anticip.
     *
     * @return bool Returns the ctrl auto cp anticip.
     */
    public function getCtrlAutoCpAnticip() {
        return $this->ctrlAutoCpAnticip;
    }

    /**
     * Get the ctrl taux base.
     *
     * @return bool Returns the ctrl taux base.
     */
    public function getCtrlTauxBase() {
        return $this->ctrlTauxBase;
    }

    /**
     * Get the dads dernier choix gestion aen.
     *
     * @return string Returns the dads dernier choix gestion aen.
     */
    public function getDadsDernierChoixGestionAen() {
        return $this->dadsDernierChoixGestionAen;
    }

    /**
     * Get the dads type gestion aen.
     *
     * @return string Returns the dads type gestion aen.
     */
    public function getDadsTypeGestionAen() {
        return $this->dadsTypeGestionAen;
    }

    /**
     * Get the dadsu num agr ansp.
     *
     * @return string Returns the dadsu num agr ansp.
     */
    public function getDadsuNumAgrAnsp() {
        return $this->dadsuNumAgrAnsp;
    }

    /**
     * Get the dadsu ref dec.
     *
     * @return string Returns the dadsu ref dec.
     */
    public function getDadsuRefDec() {
        return $this->dadsuRefDec;
    }

    /**
     * Get the das type decl.
     *
     * @return string Returns the das type decl.
     */
    public function getDasTypeDecl() {
        return $this->dasTypeDecl;
    }

    /**
     * Get the das type decl detail.
     *
     * @return string Returns the das type decl detail.
     */
    public function getDasTypeDeclDetail() {
        return $this->dasTypeDeclDetail;
    }

    /**
     * Get the date dp.
     *
     * @return DateTime|null Returns the date dp.
     */
    public function getDateDp() {
        return $this->dateDp;
    }

    /**
     * Get the debut periode das.
     *
     * @return DateTime|null Returns the debut periode das.
     */
    public function getDebutPeriodeDas() {
        return $this->debutPeriodeDas;
    }

    /**
     * Get the debut periode histo das.
     *
     * @return DateTime|null Returns the debut periode histo das.
     */
    public function getDebutPeriodeHistoDas() {
        return $this->debutPeriodeHistoDas;
    }

    /**
     * Get the deduction h sup fillon.
     *
     * @return bool Returns the deduction h sup fillon.
     */
    public function getDeductionHSupFillon() {
        return $this->deductionHSupFillon;
    }

    /**
     * Get the deduire h sup non structurelle.
     *
     * @return bool Returns the deduire h sup non structurelle.
     */
    public function getDeduireHSupNonStructurelle() {
        return $this->deduireHSupNonStructurelle;
    }

    /**
     * Get the dernier indice bul.
     *
     * @return int Returns the dernier indice bul.
     */
    public function getDernierIndiceBul() {
        return $this->dernierIndiceBul;
    }

    /**
     * Get the dest point irc.
     *
     * @return string Returns the dest point irc.
     */
    public function getDestPointIrc() {
        return $this->destPointIrc;
    }

    /**
     * Get the dest tri point.
     *
     * @return string Returns the dest tri point.
     */
    public function getDestTriPoint() {
        return $this->destTriPoint;
    }

    /**
     * Get the dossier proprete.
     *
     * @return string Returns the dossier proprete.
     */
    public function getDossierProprete() {
        return $this->dossierProprete;
    }

    /**
     * Get the dossier sur web.
     *
     * @return bool Returns the dossier sur web.
     */
    public function getDossierSurWeb() {
        return $this->dossierSurWeb;
    }

    /**
     * Get the ds code collab.
     *
     * @return string Returns the ds code collab.
     */
    public function getDsCodeCollab() {
        return $this->dsCodeCollab;
    }

    /**
     * Get the ds date retour.
     *
     * @return DateTime|null Returns the ds date retour.
     */
    public function getDsDateRetour() {
        return $this->dsDateRetour;
    }

    /**
     * Get the ds date sortie.
     *
     * @return DateTime|null Returns the ds date sortie.
     */
    public function getDsDateSortie() {
        return $this->dsDateSortie;
    }

    /**
     * Get the ds fusion.
     *
     * @return string Returns the ds fusion.
     */
    public function getDsFusion() {
        return $this->dsFusion;
    }

    /**
     * Get the ds type edition.
     *
     * @return string Returns the ds type edition.
     */
    public function getDsTypeEdition() {
        return $this->dsTypeEdition;
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
     * Get the ducs franc euro.
     *
     * @return string Returns the ducs franc euro.
     */
    public function getDucsFrancEuro() {
        return $this->ducsFrancEuro;
    }

    /**
     * Get the ecr type.
     *
     * @return string Returns the ecr type.
     */
    public function getEcrType() {
        return $this->ecrType;
    }

    /**
     * Get the ed bord choix modele.
     *
     * @return string Returns the ed bord choix modele.
     */
    public function getEdBordChoixModele() {
        return $this->edBordChoixModele;
    }

    /**
     * Get the ed bord rupture emp.
     *
     * @return bool Returns the ed bord rupture emp.
     */
    public function getEdBordRuptureEmp() {
        return $this->edBordRuptureEmp;
    }

    /**
     * Get the ed bord type imp.
     *
     * @return string Returns the ed bord type imp.
     */
    public function getEdBordTypeImp() {
        return $this->edBordTypeImp;
    }

    /**
     * Get the ed bordereau.
     *
     * @return bool Returns the ed bordereau.
     */
    public function getEdBordereau() {
        return $this->edBordereau;
    }

    /**
     * Get the ed bordereau prep.
     *
     * @return bool Returns the ed bordereau prep.
     */
    public function getEdBordereauPrep() {
        return $this->edBordereauPrep;
    }

    /**
     * Get the ed bordereau prepa.
     *
     * @return bool Returns the ed bordereau prepa.
     */
    public function getEdBordereauPrepa() {
        return $this->edBordereauPrepa;
    }

    /**
     * Get the ed bul last fax.
     *
     * @return string Returns the ed bul last fax.
     */
    public function getEdBulLastFax() {
        return $this->edBulLastFax;
    }

    /**
     * Get the ed bul last mail.
     *
     * @return string Returns the ed bul last mail.
     */
    public function getEdBulLastMail() {
        return $this->edBulLastMail;
    }

    /**
     * Get the ed bul type sortie.
     *
     * @return string Returns the ed bul type sortie.
     */
    public function getEdBulTypeSortie() {
        return $this->edBulTypeSortie;
    }

    /**
     * Get the ed correspondance.
     *
     * @return bool Returns the ed correspondance.
     */
    public function getEdCorrespondance() {
        return $this->edCorrespondance;
    }

    /**
     * Get the ed ducs auto.
     *
     * @return bool Returns the ed ducs auto.
     */
    public function getEdDucsAuto() {
        return $this->edDucsAuto;
    }

    /**
     * Get the ed ducs nb ex.
     *
     * @return string Returns the ed ducs nb ex.
     */
    public function getEdDucsNbEx() {
        return $this->edDucsNbEx;
    }

    /**
     * Get the ed ducs opt btp.
     *
     * @return string Returns the ed ducs opt btp.
     */
    public function getEdDucsOptBtp() {
        return $this->edDucsOptBtp;
    }

    /**
     * Get the ed ducs type sortie.
     *
     * @return string Returns the ed ducs type sortie.
     */
    public function getEdDucsTypeSortie() {
        return $this->edDucsTypeSortie;
    }

    /**
     * Get the ed h sup bonif que majo.
     *
     * @return bool Returns the ed h sup bonif que majo.
     */
    public function getEdHSupBonifQueMajo() {
        return $this->edHSupBonifQueMajo;
    }

    /**
     * Get the ed histo tri emp.
     *
     * @return string Returns the ed histo tri emp.
     */
    public function getEdHistoTriEmp() {
        return $this->edHistoTriEmp;
    }

    /**
     * Get the ed histo tri etablissement.
     *
     * @return bool Returns the ed histo tri etablissement.
     */
    public function getEdHistoTriEtablissement() {
        return $this->edHistoTriEtablissement;
    }

    /**
     * Get the ed histo tri service.
     *
     * @return bool Returns the ed histo tri service.
     */
    public function getEdHistoTriService() {
        return $this->edHistoTriService;
    }

    /**
     * Get the ed histo type.
     *
     * @return string Returns the ed histo type.
     */
    public function getEdHistoType() {
        return $this->edHistoType;
    }

    /**
     * Get the ed imput comptable.
     *
     * @return bool Returns the ed imput comptable.
     */
    public function getEdImputComptable() {
        return $this->edImputComptable;
    }

    /**
     * Get the ed texte1.
     *
     * @return string Returns the ed texte1.
     */
    public function getEdTexte1() {
        return $this->edTexte1;
    }

    /**
     * Get the ed texte2.
     *
     * @return string Returns the ed texte2.
     */
    public function getEdTexte2() {
        return $this->edTexte2;
    }

    /**
     * Get the ed trt cpta last fax.
     *
     * @return string Returns the ed trt cpta last fax.
     */
    public function getEdTrtCptaLastFax() {
        return $this->edTrtCptaLastFax;
    }

    /**
     * Get the ed trt cpta last mail.
     *
     * @return string Returns the ed trt cpta last mail.
     */
    public function getEdTrtCptaLastMail() {
        return $this->edTrtCptaLastMail;
    }

    /**
     * Get the ed trt cpta sortie.
     *
     * @return string Returns the ed trt cpta sortie.
     */
    public function getEdTrtCptaSortie() {
        return $this->edTrtCptaSortie;
    }

    /**
     * Get the edit qpxl absences.
     *
     * @return bool Returns the edit qpxl absences.
     */
    public function getEditQpxlAbsences() {
        return $this->editQpxlAbsences;
    }

    /**
     * Get the edit qpxl acomptes.
     *
     * @return bool Returns the edit qpxl acomptes.
     */
    public function getEditQpxlAcomptes() {
        return $this->editQpxlAcomptes;
    }

    /**
     * Get the edit qpxl tri emp.
     *
     * @return string Returns the edit qpxl tri emp.
     */
    public function getEditQpxlTriEmp() {
        return $this->editQpxlTriEmp;
    }

    /**
     * Get the edit qpxl vider lib.
     *
     * @return bool Returns the edit qpxl vider lib.
     */
    public function getEditQpxlViderLib() {
        return $this->editQpxlViderLib;
    }

    /**
     * Get the editer bulletin stc.
     *
     * @return bool Returns the editer bulletin stc.
     */
    public function getEditerBulletinStc() {
        return $this->editerBulletinStc;
    }

    /**
     * Get the edition cheque tc.
     *
     * @return bool Returns the edition cheque tc.
     */
    public function getEditionChequeTc() {
        return $this->editionChequeTc;
    }

    /**
     * Get the edition date.
     *
     * @return bool Returns the edition date.
     */
    public function getEditionDate() {
        return $this->editionDate;
    }

    /**
     * Get the edition heure.
     *
     * @return bool Returns the edition heure.
     */
    public function getEditionHeure() {
        return $this->editionHeure;
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
     * Get the entete solde tc.
     *
     * @return bool Returns the entete solde tc.
     */
    public function getEnteteSoldeTc() {
        return $this->enteteSoldeTc;
    }

    /**
     * Get the etat controle dadsu.
     *
     * @return string Returns the etat controle dadsu.
     */
    public function getEtatControleDadsu() {
        return $this->etatControleDadsu;
    }

    /**
     * Get the etat ctrl norme.
     *
     * @return string Returns the etat ctrl norme.
     */
    public function getEtatCtrlNorme() {
        return $this->etatCtrlNorme;
    }

    /**
     * Get the etat das.
     *
     * @return string Returns the etat das.
     */
    public function getEtatDas() {
        return $this->etatDas;
    }

    /**
     * Get the etat das rect.
     *
     * @return string Returns the etat das rect.
     */
    public function getEtatDasRect() {
        return $this->etatDasRect;
    }

    /**
     * Get the fichier unique.
     *
     * @return bool Returns the fichier unique.
     */
    public function getFichierUnique() {
        return $this->fichierUnique;
    }

    /**
     * Get the filtrer liste emp.
     *
     * @return int Returns the filtrer liste emp.
     */
    public function getFiltrerListeEmp() {
        return $this->filtrerListeEmp;
    }

    /**
     * Get the fin periode das.
     *
     * @return DateTime|null Returns the fin periode das.
     */
    public function getFinPeriodeDas() {
        return $this->finPeriodeDas;
    }

    /**
     * Get the fin periode histo das.
     *
     * @return DateTime|null Returns the fin periode histo das.
     */
    public function getFinPeriodeHistoDas() {
        return $this->finPeriodeHistoDas;
    }

    /**
     * Get the flag traite.
     *
     * @return string Returns the flag traite.
     */
    public function getFlagTraite() {
        return $this->flagTraite;
    }

    /**
     * Get the flag traite2.
     *
     * @return int Returns the flag traite2.
     */
    public function getFlagTraite2() {
        return $this->flagTraite2;
    }

    /**
     * Get the flag traite3.
     *
     * @return int Returns the flag traite3.
     */
    public function getFlagTraite3() {
        return $this->flagTraite3;
    }

    /**
     * Get the format fic virement.
     *
     * @return string Returns the format fic virement.
     */
    public function getFormatFicVirement() {
        return $this->formatFicVirement;
    }

    /**
     * Get the gest num bulletin.
     *
     * @return bool Returns the gest num bulletin.
     */
    public function getGestNumBulletin() {
        return $this->gestNumBulletin;
    }

    /**
     * Get the gest repo compens.
     *
     * @return bool Returns the gest repo compens.
     */
    public function getGestRepoCompens() {
        return $this->gestRepoCompens;
    }

    /**
     * Get the gest texte.
     *
     * @return bool Returns the gest texte.
     */
    public function getGestTexte() {
        return $this->gestTexte;
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
     * Get the gestion coeff grille.
     *
     * @return bool Returns the gestion coeff grille.
     */
    public function getGestionCoeffGrille() {
        return $this->gestionCoeffGrille;
    }

    /**
     * Get the gestion exemplaire.
     *
     * @return string Returns the gestion exemplaire.
     */
    public function getGestionExemplaire() {
        return $this->gestionExemplaire;
    }

    /**
     * Get the gestion intemperie.
     *
     * @return bool Returns the gestion intemperie.
     */
    public function getGestionIntemperie() {
        return $this->gestionIntemperie;
    }

    /**
     * Get the gestion numero employe auto.
     *
     * @return bool Returns the gestion numero employe auto.
     */
    public function getGestionNumeroEmployeAuto() {
        return $this->gestionNumeroEmployeAuto;
    }

    /**
     * Get the gestion qpxl.
     *
     * @return bool Returns the gestion qpxl.
     */
    public function getGestionQpxl() {
        return $this->gestionQpxl;
    }

    /**
     * Get the gestion td bilaterale.
     *
     * @return bool Returns the gestion td bilaterale.
     */
    public function getGestionTdBilaterale() {
        return $this->gestionTdBilaterale;
    }

    /**
     * Get the gestion td sou dadsu.
     *
     * @return bool Returns the gestion td sou dadsu.
     */
    public function getGestionTdSouDadsu() {
        return $this->gestionTdSouDadsu;
    }

    /**
     * Get the groupe gi.
     *
     * @return string Returns the groupe gi.
     */
    public function getGroupeGi() {
        return $this->groupeGi;
    }

    /**
     * Get the h bonif influ cassation.
     *
     * @return string Returns the h bonif influ cassation.
     */
    public function getHBonifInfluCassation() {
        return $this->hBonifInfluCassation;
    }

    /**
     * Get the h sup1 structurelle.
     *
     * @return bool Returns the h sup1 structurelle.
     */
    public function getHSup1Structurelle() {
        return $this->hSup1Structurelle;
    }

    /**
     * Get the h sup2 structurelle.
     *
     * @return bool Returns the h sup2 structurelle.
     */
    public function getHSup2Structurelle() {
        return $this->hSup2Structurelle;
    }

    /**
     * Get the h sup3 structurelle.
     *
     * @return bool Returns the h sup3 structurelle.
     */
    public function getHSup3Structurelle() {
        return $this->hSup3Structurelle;
    }

    /**
     * Get the h sup4 structurelle.
     *
     * @return bool Returns the h sup4 structurelle.
     */
    public function getHSup4Structurelle() {
        return $this->hSup4Structurelle;
    }

    /**
     * Get the h sup5 structurelle.
     *
     * @return bool Returns the h sup5 structurelle.
     */
    public function getHSup5Structurelle() {
        return $this->hSup5Structurelle;
    }

    /**
     * Get the heure sup2 influ cassation.
     *
     * @return string Returns the heure sup2 influ cassation.
     */
    public function getHeureSup2InfluCassation() {
        return $this->heureSup2InfluCassation;
    }

    /**
     * Get the heure sup3 influ cassation.
     *
     * @return string Returns the heure sup3 influ cassation.
     */
    public function getHeureSup3InfluCassation() {
        return $this->heureSup3InfluCassation;
    }

    /**
     * Get the heure sup4 influ cassation.
     *
     * @return string Returns the heure sup4 influ cassation.
     */
    public function getHeureSup4InfluCassation() {
        return $this->heureSup4InfluCassation;
    }

    /**
     * Get the heure sup5 influ cassation.
     *
     * @return string Returns the heure sup5 influ cassation.
     */
    public function getHeureSup5InfluCassation() {
        return $this->heureSup5InfluCassation;
    }

    /**
     * Get the heure sup influ cassation.
     *
     * @return string Returns the heure sup influ cassation.
     */
    public function getHeureSupInfluCassation() {
        return $this->heureSupInfluCassation;
    }

    /**
     * Get the heure theo base trav.
     *
     * @return string Returns the heure theo base trav.
     */
    public function getHeureTheoBaseTrav() {
        return $this->heureTheoBaseTrav;
    }

    /**
     * Get the indem cp intervient brut al.
     *
     * @return bool Returns the indem cp intervient brut al.
     */
    public function getIndemCpIntervientBrutAl() {
        return $this->indemCpIntervientBrutAl;
    }

    /**
     * Get the jour debut transfert.
     *
     * @return int Returns the jour debut transfert.
     */
    public function getJourDebutTransfert() {
        return $this->jourDebutTransfert;
    }

    /**
     * Get the jour fin transfert.
     *
     * @return int Returns the jour fin transfert.
     */
    public function getJourFinTransfert() {
        return $this->jourFinTransfert;
    }

    /**
     * Get the jrn format.
     *
     * @return string Returns the jrn format.
     */
    public function getJrnFormat() {
        return $this->jrnFormat;
    }

    /**
     * Get the jrn regroupe abs.
     *
     * @return bool Returns the jrn regroupe abs.
     */
    public function getJrnRegroupeAbs() {
        return $this->jrnRegroupeAbs;
    }

    /**
     * Get the jrn tri.
     *
     * @return string Returns the jrn tri.
     */
    public function getJrnTri() {
        return $this->jrnTri;
    }

    /**
     * Get the jrn tri etablissement.
     *
     * @return string Returns the jrn tri etablissement.
     */
    public function getJrnTriEtablissement() {
        return $this->jrnTriEtablissement;
    }

    /**
     * Get the jrn tri service.
     *
     * @return string Returns the jrn tri service.
     */
    public function getJrnTriService() {
        return $this->jrnTriService;
    }

    /**
     * Get the jrn type.
     *
     * @return string Returns the jrn type.
     */
    public function getJrnType() {
        return $this->jrnType;
    }

    /**
     * Get the liaison proprete.
     *
     * @return bool Returns the liaison proprete.
     */
    public function getLiaisonProprete() {
        return $this->liaisonProprete;
    }

    /**
     * Get the lib arbitrage.
     *
     * @return string Returns the lib arbitrage.
     */
    public function getLibArbitrage() {
        return $this->libArbitrage;
    }

    /**
     * Get the lib base conge.
     *
     * @return string Returns the lib base conge.
     */
    public function getLibBaseConge() {
        return $this->libBaseConge;
    }

    /**
     * Get the lib bqcp.
     *
     * @return string Returns the lib bqcp.
     */
    public function getLibBqcp() {
        return $this->libBqcp;
    }

    /**
     * Get the lib cachet aem.
     *
     * @return string Returns the lib cachet aem.
     */
    public function getLibCachetAem() {
        return $this->libCachetAem;
    }

    /**
     * Get the lib cotis cne.
     *
     * @return string Returns the lib cotis cne.
     */
    public function getLibCotisCne() {
        return $this->libCotisCne;
    }

    /**
     * Get the lib fin contrat.
     *
     * @return string Returns the lib fin contrat.
     */
    public function getLibFinContrat() {
        return $this->libFinContrat;
    }

    /**
     * Get the lib fin contrat cne.
     *
     * @return string Returns the lib fin contrat cne.
     */
    public function getLibFinContratCne() {
        return $this->libFinContratCne;
    }

    /**
     * Get the lib indem cp.
     *
     * @return string Returns the lib indem cp.
     */
    public function getLibIndemCp() {
        return $this->libIndemCp;
    }

    /**
     * Get the libelle libre virement.
     *
     * @return string Returns the libelle libre virement.
     */
    public function getLibelleLibreVirement() {
        return $this->libelleLibreVirement;
    }

    /**
     * Get the ligne bul euro.
     *
     * @return bool Returns the ligne bul euro.
     */
    public function getLigneBulEuro() {
        return $this->ligneBulEuro;
    }

    /**
     * Get the lignes transport.
     *
     * @return bool Returns the lignes transport.
     */
    public function getLignesTransport() {
        return $this->lignesTransport;
    }

    /**
     * Get the mail bulletin.
     *
     * @return string Returns the mail bulletin.
     */
    public function getMailBulletin() {
        return $this->mailBulletin;
    }

    /**
     * Get the mail bulletin cle.
     *
     * @return string Returns the mail bulletin cle.
     */
    public function getMailBulletinCle() {
        return $this->mailBulletinCle;
    }

    /**
     * Get the mail bulletin pj.
     *
     * @return string Returns the mail bulletin pj.
     */
    public function getMailBulletinPj() {
        return $this->mailBulletinPj;
    }

    /**
     * Get the mail c li ducs edi.
     *
     * @return bool Returns the mail c li ducs edi.
     */
    public function getMailCLiDucsEdi() {
        return $this->mailCLiDucsEdi;
    }

    /**
     * Get the mention cp.
     *
     * @return bool Returns the mention cp.
     */
    public function getMentionCp() {
        return $this->mentionCp;
    }

    /**
     * Get the message vu.
     *
     * @return bool Returns the message vu.
     */
    public function getMessageVu() {
        return $this->messageVu;
    }

    /**
     * Get the millesime1.
     *
     * @return int Returns the millesime1.
     */
    public function getMillesime1() {
        return $this->millesime1;
    }

    /**
     * Get the mode planning.
     *
     * @return int Returns the mode planning.
     */
    public function getModePlanning() {
        return $this->modePlanning;
    }

    /**
     * Get the modele apercu.
     *
     * @return string Returns the modele apercu.
     */
    public function getModeleApercu() {
        return $this->modeleApercu;
    }

    /**
     * Get the modele bon bleu.
     *
     * @return string Returns the modele bon bleu.
     */
    public function getModeleBonBleu() {
        return $this->modeleBonBleu;
    }

    /**
     * Get the modele bulletin.
     *
     * @return string Returns the modele bulletin.
     */
    public function getModeleBulletin() {
        return $this->modeleBulletin;
    }

    /**
     * Get the modele certif.
     *
     * @return string Returns the modele certif.
     */
    public function getModeleCertif() {
        return $this->modeleCertif;
    }

    /**
     * Get the modele certif trav.
     *
     * @return string Returns the modele certif trav.
     */
    public function getModeleCertifTrav() {
        return $this->modeleCertifTrav;
    }

    /**
     * Get the modele cheque.
     *
     * @return string Returns the modele cheque.
     */
    public function getModeleCheque() {
        return $this->modeleCheque;
    }

    /**
     * Get the mois cloture an.
     *
     * @return string Returns the mois cloture an.
     */
    public function getMoisClotureAn() {
        return $this->moisClotureAn;
    }

    /**
     * Get the n attest aem.
     *
     * @return int Returns the n attest aem.
     */
    public function getNAttestAem() {
        return $this->nAttestAem;
    }

    /**
     * Get the n attest aemedi.
     *
     * @return int Returns the n attest aemedi.
     */
    public function getNAttestAemedi() {
        return $this->nAttestAemedi;
    }

    /**
     * Get the n attest aemx.
     *
     * @return int Returns the n attest aemx.
     */
    public function getNAttestAemx() {
        return $this->nAttestAemx;
    }

    /**
     * Get the n attest assedic.
     *
     * @return int Returns the n attest assedic.
     */
    public function getNAttestAssedic() {
        return $this->nAttestAssedic;
    }

    /**
     * Get the n attest extras.
     *
     * @return int Returns the n attest extras.
     */
    public function getNAttestExtras() {
        return $this->nAttestExtras;
    }

    /**
     * Get the n attest ijss.
     *
     * @return int Returns the n attest ijss.
     */
    public function getNAttestIjss() {
        return $this->nAttestIjss;
    }

    /**
     * Get the n attest ijss at.
     *
     * @return int Returns the n attest ijss at.
     */
    public function getNAttestIjssAt() {
        return $this->nAttestIjssAt;
    }

    /**
     * Get the n der document.
     *
     * @return int Returns the n der document.
     */
    public function getNDerDocument() {
        return $this->nDerDocument;
    }

    /**
     * Get the nap euro.
     *
     * @return bool Returns the nap euro.
     */
    public function getNapEuro() {
        return $this->napEuro;
    }

    /**
     * Get the nb exemplaire.
     *
     * @return string Returns the nb exemplaire.
     */
    public function getNbExemplaire() {
        return $this->nbExemplaire;
    }

    /**
     * Get the nce conges spectacles.
     *
     * @return int Returns the nce conges spectacles.
     */
    public function getNceCongesSpectacles() {
        return $this->nceCongesSpectacles;
    }

    /**
     * Get the nouv param retraite type.
     *
     * @return bool Returns the nouv param retraite type.
     */
    public function getNouvParamRetraiteType() {
        return $this->nouvParamRetraiteType;
    }

    /**
     * Get the options calc abs.
     *
     * @return bool Returns the options calc abs.
     */
    public function getOptionsCalcAbs() {
        return $this->optionsCalcAbs;
    }

    /**
     * Get the ordre libelle h sup.
     *
     * @return string Returns the ordre libelle h sup.
     */
    public function getOrdreLibelleHSup() {
        return $this->ordreLibelleHSup;
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
     * Get the part sal seule.
     *
     * @return bool Returns the part sal seule.
     */
    public function getPartSalSeule() {
        return $this->partSalSeule;
    }

    /**
     * Get the pas gestion indice bul.
     *
     * @return bool Returns the pas gestion indice bul.
     */
    public function getPasGestionIndiceBul() {
        return $this->pasGestionIndiceBul;
    }

    /**
     * Get the pas prendre iccp fillon.
     *
     * @return bool Returns the pas prendre iccp fillon.
     */
    public function getPasPrendreIccpFillon() {
        return $this->pasPrendreIccpFillon;
    }

    /**
     * Get the pas sous tot s base.
     *
     * @return bool Returns the pas sous tot s base.
     */
    public function getPasSousTotSBase() {
        return $this->pasSousTotSBase;
    }

    /**
     * Get the passage35 h fait.
     *
     * @return bool Returns the passage35 h fait.
     */
    public function getPassage35HFait() {
        return $this->passage35HFait;
    }

    /**
     * Get the path virement.
     *
     * @return string Returns the path virement.
     */
    public function getPathVirement() {
        return $this->pathVirement;
    }

    /**
     * Get the periode i paie.
     *
     * @return DateTime|null Returns the periode i paie.
     */
    public function getPeriodeIPaie() {
        return $this->periodeIPaie;
    }

    /**
     * Get the periode paie.
     *
     * @return DateTime|null Returns the periode paie.
     */
    public function getPeriodePaie() {
        return $this->periodePaie;
    }

    /**
     * Get the pj mail c li ducs edi.
     *
     * @return bool Returns the pj mail c li ducs edi.
     */
    public function getPjMailCLiDucsEdi() {
        return $this->pjMailCLiDucsEdi;
    }

    /**
     * Get the pj mail cli coupon paiement.
     *
     * @return bool Returns the pj mail cli coupon paiement.
     */
    public function getPjMailCliCouponPaiement() {
        return $this->pjMailCliCouponPaiement;
    }

    /**
     * Get the plafond.
     *
     * @return float Returns the plafond.
     */
    public function getPlafond() {
        return $this->plafond;
    }

    /**
     * Get the porta frais sante certif trav.
     *
     * @return bool Returns the porta frais sante certif trav.
     */
    public function getPortaFraisSanteCertifTrav() {
        return $this->portaFraisSanteCertifTrav;
    }

    /**
     * Get the porta prevoyance oblig.
     *
     * @return bool Returns the porta prevoyance oblig.
     */
    public function getPortaPrevoyanceOblig() {
        return $this->portaPrevoyanceOblig;
    }

    /**
     * Get the preparation tdp.
     *
     * @return bool Returns the preparation tdp.
     */
    public function getPreparationTdp() {
        return $this->preparationTdp;
    }

    /**
     * Get the presence min.
     *
     * @return string Returns the presence min.
     */
    public function getPresenceMin() {
        return $this->presenceMin;
    }

    /**
     * Get the prorata dif certif trav.
     *
     * @return bool Returns the prorata dif certif trav.
     */
    public function getProrataDifCertifTrav() {
        return $this->prorataDifCertifTrav;
    }

    /**
     * Get the raz commentaire.
     *
     * @return string Returns the raz commentaire.
     */
    public function getRazCommentaire() {
        return $this->razCommentaire;
    }

    /**
     * Get the raz h sup.
     *
     * @return string Returns the raz h sup.
     */
    public function getRazHSup() {
        return $this->razHSup;
    }

    /**
     * Get the rdlpascii.
     *
     * @return bool Returns the rdlpascii.
     */
    public function getRdlpascii() {
        return $this->rdlpascii;
    }

    /**
     * Get the rdlpemployes.
     *
     * @return bool Returns the rdlpemployes.
     */
    public function getRdlpemployes() {
        return $this->rdlpemployes;
    }

    /**
     * Get the ref remise.
     *
     * @return int Returns the ref remise.
     */
    public function getRefRemise() {
        return $this->refRemise;
    }

    /**
     * Get the ref trans.
     *
     * @return int Returns the ref trans.
     */
    public function getRefTrans() {
        return $this->refTrans;
    }

    /**
     * Get the reference interne virement.
     *
     * @return string Returns the reference interne virement.
     */
    public function getReferenceInterneVirement() {
        return $this->referenceInterneVirement;
    }

    /**
     * Get the regroup lib ed bul.
     *
     * @return bool Returns the regroup lib ed bul.
     */
    public function getRegroupLibEdBul() {
        return $this->regroupLibEdBul;
    }

    /**
     * Get the report minimum.
     *
     * @return int Returns the report minimum.
     */
    public function getReportMinimum() {
        return $this->reportMinimum;
    }

    /**
     * Get the retraite97.
     *
     * @return bool Returns the retraite97.
     */
    public function getRetraite97() {
        return $this->retraite97;
    }

    /**
     * Get the sais plan emp sem.
     *
     * @return string Returns the sais plan emp sem.
     */
    public function getSaisPlanEmpSem() {
        return $this->saisPlanEmpSem;
    }

    /**
     * Get the saisie indice bul.
     *
     * @return bool Returns the saisie indice bul.
     */
    public function getSaisieIndiceBul() {
        return $this->saisieIndiceBul;
    }

    /**
     * Get the saut page.
     *
     * @return bool Returns the saut page.
     */
    public function getSautPage() {
        return $this->sautPage;
    }

    /**
     * Get the seuil.
     *
     * @return float Returns the seuil.
     */
    public function getSeuil() {
        return $this->seuil;
    }

    /**
     * Get the seuil conting.
     *
     * @return float Returns the seuil conting.
     */
    public function getSeuilConting() {
        return $this->seuilConting;
    }

    /**
     * Get the stc auto.
     *
     * @return bool Returns the stc auto.
     */
    public function getStcAuto() {
        return $this->stcAuto;
    }

    /**
     * Get the tab bord tri etablissement.
     *
     * @return bool Returns the tab bord tri etablissement.
     */
    public function getTabBordTriEtablissement() {
        return $this->tabBordTriEtablissement;
    }

    /**
     * Get the tab bord tri service.
     *
     * @return bool Returns the tab bord tri service.
     */
    public function getTabBordTriService() {
        return $this->tabBordTriService;
    }

    /**
     * Get the tableau charge.
     *
     * @return string Returns the tableau charge.
     */
    public function getTableauCharge() {
        return $this->tableauCharge;
    }

    /**
     * Get the tds annee.
     *
     * @return int Returns the tds annee.
     */
    public function getTdsAnnee() {
        return $this->tdsAnnee;
    }

    /**
     * Get the tds euro.
     *
     * @return bool Returns the tds euro.
     */
    public function getTdsEuro() {
        return $this->tdsEuro;
    }

    /**
     * Get the tot gene isole.
     *
     * @return string Returns the tot gene isole.
     */
    public function getTotGeneIsole() {
        return $this->totGeneIsole;
    }

    /**
     * Get the tot service isole.
     *
     * @return string Returns the tot service isole.
     */
    public function getTotServiceIsole() {
        return $this->totServiceIsole;
    }

    /**
     * Get the total etab isole.
     *
     * @return string Returns the total etab isole.
     */
    public function getTotalEtabIsole() {
        return $this->totalEtabIsole;
    }

    /**
     * Get the trans rupture.
     *
     * @return string Returns the trans rupture.
     */
    public function getTransRupture() {
        return $this->transRupture;
    }

    /**
     * Get the trans tri etablissement.
     *
     * @return string Returns the trans tri etablissement.
     */
    public function getTransTriEtablissement() {
        return $this->transTriEtablissement;
    }

    /**
     * Get the transfert tds emp.
     *
     * @return bool Returns the transfert tds emp.
     */
    public function getTransfertTdsEmp() {
        return $this->transfertTdsEmp;
    }

    /**
     * Get the tri employe.
     *
     * @return string Returns the tri employe.
     */
    public function getTriEmploye() {
        return $this->triEmploye;
    }

    /**
     * Get the tx sal decote.
     *
     * @return float Returns the tx sal decote.
     */
    public function getTxSalDecote() {
        return $this->txSalDecote;
    }

    /**
     * Get the type abs sans solde.
     *
     * @return string Returns the type abs sans solde.
     */
    public function getTypeAbsSansSolde() {
        return $this->typeAbsSansSolde;
    }

    /**
     * Get the type agrement aem.
     *
     * @return string Returns the type agrement aem.
     */
    public function getTypeAgrementAem() {
        return $this->typeAgrementAem;
    }

    /**
     * Get the type bordereau prepa.
     *
     * @return string Returns the type bordereau prepa.
     */
    public function getTypeBordereauPrepa() {
        return $this->typeBordereauPrepa;
    }

    /**
     * Get the type bulletin.
     *
     * @return string Returns the type bulletin.
     */
    public function getTypeBulletin() {
        return $this->typeBulletin;
    }

    /**
     * Get the type dossier.
     *
     * @return string Returns the type dossier.
     */
    public function getTypeDossier() {
        return $this->typeDossier;
    }

    /**
     * Get the type due.
     *
     * @return string Returns the type due.
     */
    public function getTypeDue() {
        return $this->typeDue;
    }

    /**
     * Get the type effectif.
     *
     * @return string Returns the type effectif.
     */
    public function getTypeEffectif() {
        return $this->typeEffectif;
    }

    /**
     * Get the type fich bilat.
     *
     * @return string Returns the type fich bilat.
     */
    public function getTypeFichBilat() {
        return $this->typeFichBilat;
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
     * Get the type modele.
     *
     * @return string Returns the type modele.
     */
    public function getTypeModele() {
        return $this->typeModele;
    }

    /**
     * Get the type prep dadsu.
     *
     * @return string Returns the type prep dadsu.
     */
    public function getTypePrepDadsu() {
        return $this->typePrepDadsu;
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
     * Get the type stc.
     *
     * @return string Returns the type stc.
     */
    public function getTypeStc() {
        return $this->typeStc;
    }

    /**
     * Get the type taux intemperie.
     *
     * @return string Returns the type taux intemperie.
     */
    public function getTypeTauxIntemperie() {
        return $this->typeTauxIntemperie;
    }

    /**
     * Get the type tri.
     *
     * @return string Returns the type tri.
     */
    public function getTypeTri() {
        return $this->typeTri;
    }

    /**
     * Get the type virement.
     *
     * @return string Returns the type virement.
     */
    public function getTypeVirement() {
        return $this->typeVirement;
    }

    /**
     * Get the type visu col saisie bul.
     *
     * @return string Returns the type visu col saisie bul.
     */
    public function getTypeVisuColSaisieBul() {
        return $this->typeVisuColSaisieBul;
    }

    /**
     * Get the utilise pdp quadra.
     *
     * @return bool Returns the utilise pdp quadra.
     */
    public function getUtilisePdpQuadra() {
        return $this->utilisePdpQuadra;
    }

    /**
     * Get the utilise pdp quadra2.
     *
     * @return bool Returns the utilise pdp quadra2.
     */
    public function getUtilisePdpQuadra2() {
        return $this->utilisePdpQuadra2;
    }

    /**
     * Get the val cp bulletin.
     *
     * @return bool Returns the val cp bulletin.
     */
    public function getValCpBulletin() {
        return $this->valCpBulletin;
    }

    /**
     * Get the val filtre liste emp.
     *
     * @return int Returns the val filtre liste emp.
     */
    public function getValFiltreListeEmp() {
        return $this->valFiltreListeEmp;
    }

    /**
     * Get the version controle dadsu.
     *
     * @return int Returns the version controle dadsu.
     */
    public function getVersionControleDadsu() {
        return $this->versionControleDadsu;
    }

    /**
     * Get the vir code etab.
     *
     * @return string Returns the vir code etab.
     */
    public function getVirCodeEtab() {
        return $this->virCodeEtab;
    }

    /**
     * Get the vir collectivite.
     *
     * @return string Returns the vir collectivite.
     */
    public function getVirCollectivite() {
        return $this->virCollectivite;
    }

    /**
     * Get the vir comptable centre.
     *
     * @return string Returns the vir comptable centre.
     */
    public function getVirComptableCentre() {
        return $this->virComptableCentre;
    }

    /**
     * Get the vir comptable sub.
     *
     * @return string Returns the vir comptable sub.
     */
    public function getVirComptableSub() {
        return $this->virComptableSub;
    }

    /**
     * Get the vir fonction publique.
     *
     * @return bool Returns the vir fonction publique.
     */
    public function getVirFonctionPublique() {
        return $this->virFonctionPublique;
    }

    /**
     * Get the vir seuil.
     *
     * @return float Returns the vir seuil.
     */
    public function getVirSeuil() {
        return $this->virSeuil;
    }

    /**
     * Get the vir type etab.
     *
     * @return string Returns the vir type etab.
     */
    public function getVirTypeEtab() {
        return $this->virTypeEtab;
    }

    /**
     * Get the virement cr lf.
     *
     * @return bool Returns the virement cr lf.
     */
    public function getVirementCrLf() {
        return $this->virementCrLf;
    }

    /**
     * Get the virements euro.
     *
     * @return string Returns the virements euro.
     */
    public function getVirementsEuro() {
        return $this->virementsEuro;
    }

    /**
     * Get the web prioritaire.
     *
     * @return bool Returns the web prioritaire.
     */
    public function getWebPrioritaire() {
        return $this->webPrioritaire;
    }

    /**
     * Set the absence extra.
     *
     * @param string $absenceExtra The absence extra.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAbsenceExtra($absenceExtra) {
        $this->absenceExtra = $absenceExtra;
        return $this;
    }

    /**
     * Set the activer pointage qws.
     *
     * @param bool $activerPointageQws The activer pointage qws.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setActiverPointageQws($activerPointageQws) {
        $this->activerPointageQws = $activerPointageQws;
        return $this;
    }

    /**
     * Set the adhesion tds norme.
     *
     * @param string $adhesionTdsNorme The adhesion tds norme.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAdhesionTdsNorme($adhesionTdsNorme) {
        $this->adhesionTdsNorme = $adhesionTdsNorme;
        return $this;
    }

    /**
     * Set the affaire.
     *
     * @param string $affaire The affaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAffaire($affaire) {
        $this->affaire = $affaire;
        return $this;
    }

    /**
     * Set the affectation taux27.
     *
     * @param bool $affectationTaux27 The affectation taux27.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAffectationTaux27($affectationTaux27) {
        $this->affectationTaux27 = $affectationTaux27;
        return $this;
    }

    /**
     * Set the analytique employe.
     *
     * @param bool $analytiqueEmploye The analytique employe.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAnalytiqueEmploye($analytiqueEmploye) {
        $this->analytiqueEmploye = $analytiqueEmploye;
        return $this;
    }

    /**
     * Set the arbitrage auto.
     *
     * @param string $arbitrageAuto The arbitrage auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setArbitrageAuto($arbitrageAuto) {
        $this->arbitrageAuto = $arbitrageAuto;
        return $this;
    }

    /**
     * Set the archivage actif.
     *
     * @param bool $archivageActif The archivage actif.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setArchivageActif($archivageActif) {
        $this->archivageActif = $archivageActif;
        return $this;
    }

    /**
     * Set the attest auto.
     *
     * @param bool $attestAuto The attest auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setAttestAuto($attestAuto) {
        $this->attestAuto = $attestAuto;
        return $this;
    }

    /**
     * Set the beneficie cice.
     *
     * @param bool $beneficieCice The beneficie cice.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setBeneficieCice($beneficieCice) {
        $this->beneficieCice = $beneficieCice;
        return $this;
    }

    /**
     * Set the brut al sal min conv.
     *
     * @param bool $brutAlSalMinConv The brut al sal min conv.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setBrutAlSalMinConv($brutAlSalMinConv) {
        $this->brutAlSalMinConv = $brutAlSalMinConv;
        return $this;
    }

    /**
     * Set the calcul auto h theorique.
     *
     * @param bool $calculAutoHTheorique The calcul auto h theorique.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCalculAutoHTheorique($calculAutoHTheorique) {
        $this->calculAutoHTheorique = $calculAutoHTheorique;
        return $this;
    }

    /**
     * Set the certif auto.
     *
     * @param bool $certifAuto The certif auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCertifAuto($certifAuto) {
        $this->certifAuto = $certifAuto;
        return $this;
    }

    /**
     * Set the cheques euro.
     *
     * @param string $chequesEuro The cheques euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setChequesEuro($chequesEuro) {
        $this->chequesEuro = $chequesEuro;
        return $this;
    }

    /**
     * Set the choix edition cheque tc.
     *
     * @param bool $choixEditionChequeTc The choix edition cheque tc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setChoixEditionChequeTc($choixEditionChequeTc) {
        $this->choixEditionChequeTc = $choixEditionChequeTc;
        return $this;
    }

    /**
     * Set the cice pj mail cli ducs edi.
     *
     * @param bool $cicePjMailCliDucsEdi The cice pj mail cli ducs edi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCicePjMailCliDucsEdi($cicePjMailCliDucsEdi) {
        $this->cicePjMailCliDucsEdi = $cicePjMailCliDucsEdi;
        return $this;
    }

    /**
     * Set the cle acces1.
     *
     * @param string $cleAcces1 The cle acces1.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCleAcces1($cleAcces1) {
        $this->cleAcces1 = $cleAcces1;
        return $this;
    }

    /**
     * Set the cle portable.
     *
     * @param string $clePortable The cle portable.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setClePortable($clePortable) {
        $this->clePortable = $clePortable;
        return $this;
    }

    /**
     * Set the code org btpdadsu.
     *
     * @param string $codeOrgBtpdadsu The code org btpdadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCodeOrgBtpdadsu($codeOrgBtpdadsu) {
        $this->codeOrgBtpdadsu = $codeOrgBtpdadsu;
        return $this;
    }

    /**
     * Set the collaborateuri paie.
     *
     * @param string $collaborateuriPaie The collaborateuri paie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCollaborateuriPaie($collaborateuriPaie) {
        $this->collaborateuriPaie = $collaborateuriPaie;
        return $this;
    }

    /**
     * Set the compression.
     *
     * @param bool $compression The compression.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCompression($compression) {
        $this->compression = $compression;
        return $this;
    }

    /**
     * Set the compte gain euro.
     *
     * @param string $compteGainEuro The compte gain euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCompteGainEuro($compteGainEuro) {
        $this->compteGainEuro = $compteGainEuro;
        return $this;
    }

    /**
     * Set the compte perte euro.
     *
     * @param string $comptePerteEuro The compte perte euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setComptePerteEuro($comptePerteEuro) {
        $this->comptePerteEuro = $comptePerteEuro;
        return $this;
    }

    /**
     * Set the cpta elit euros.
     *
     * @param bool $cptaElitEuros The cpta elit euros.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCptaElitEuros($cptaElitEuros) {
        $this->cptaElitEuros = $cptaElitEuros;
        return $this;
    }

    /**
     * Set the ctrl auto cp.
     *
     * @param bool $ctrlAutoCp The ctrl auto cp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCtrlAutoCp($ctrlAutoCp) {
        $this->ctrlAutoCp = $ctrlAutoCp;
        return $this;
    }

    /**
     * Set the ctrl auto cp anticip.
     *
     * @param bool $ctrlAutoCpAnticip The ctrl auto cp anticip.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCtrlAutoCpAnticip($ctrlAutoCpAnticip) {
        $this->ctrlAutoCpAnticip = $ctrlAutoCpAnticip;
        return $this;
    }

    /**
     * Set the ctrl taux base.
     *
     * @param bool $ctrlTauxBase The ctrl taux base.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setCtrlTauxBase($ctrlTauxBase) {
        $this->ctrlTauxBase = $ctrlTauxBase;
        return $this;
    }

    /**
     * Set the dads dernier choix gestion aen.
     *
     * @param string $dadsDernierChoixGestionAen The dads dernier choix gestion aen.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsDernierChoixGestionAen($dadsDernierChoixGestionAen) {
        $this->dadsDernierChoixGestionAen = $dadsDernierChoixGestionAen;
        return $this;
    }

    /**
     * Set the dads type gestion aen.
     *
     * @param string $dadsTypeGestionAen The dads type gestion aen.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsTypeGestionAen($dadsTypeGestionAen) {
        $this->dadsTypeGestionAen = $dadsTypeGestionAen;
        return $this;
    }

    /**
     * Set the dadsu num agr ansp.
     *
     * @param string $dadsuNumAgrAnsp The dadsu num agr ansp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsuNumAgrAnsp($dadsuNumAgrAnsp) {
        $this->dadsuNumAgrAnsp = $dadsuNumAgrAnsp;
        return $this;
    }

    /**
     * Set the dadsu ref dec.
     *
     * @param string $dadsuRefDec The dadsu ref dec.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDadsuRefDec($dadsuRefDec) {
        $this->dadsuRefDec = $dadsuRefDec;
        return $this;
    }

    /**
     * Set the das type decl.
     *
     * @param string $dasTypeDecl The das type decl.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDasTypeDecl($dasTypeDecl) {
        $this->dasTypeDecl = $dasTypeDecl;
        return $this;
    }

    /**
     * Set the das type decl detail.
     *
     * @param string $dasTypeDeclDetail The das type decl detail.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDasTypeDeclDetail($dasTypeDeclDetail) {
        $this->dasTypeDeclDetail = $dasTypeDeclDetail;
        return $this;
    }

    /**
     * Set the date dp.
     *
     * @param DateTime|null $dateDp The date dp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDateDp(DateTime $dateDp = null) {
        $this->dateDp = $dateDp;
        return $this;
    }

    /**
     * Set the debut periode das.
     *
     * @param DateTime|null $debutPeriodeDas The debut periode das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDebutPeriodeDas(DateTime $debutPeriodeDas = null) {
        $this->debutPeriodeDas = $debutPeriodeDas;
        return $this;
    }

    /**
     * Set the debut periode histo das.
     *
     * @param DateTime|null $debutPeriodeHistoDas The debut periode histo das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDebutPeriodeHistoDas(DateTime $debutPeriodeHistoDas = null) {
        $this->debutPeriodeHistoDas = $debutPeriodeHistoDas;
        return $this;
    }

    /**
     * Set the deduction h sup fillon.
     *
     * @param bool $deductionHSupFillon The deduction h sup fillon.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDeductionHSupFillon($deductionHSupFillon) {
        $this->deductionHSupFillon = $deductionHSupFillon;
        return $this;
    }

    /**
     * Set the deduire h sup non structurelle.
     *
     * @param bool $deduireHSupNonStructurelle The deduire h sup non structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDeduireHSupNonStructurelle($deduireHSupNonStructurelle) {
        $this->deduireHSupNonStructurelle = $deduireHSupNonStructurelle;
        return $this;
    }

    /**
     * Set the dernier indice bul.
     *
     * @param int $dernierIndiceBul The dernier indice bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDernierIndiceBul($dernierIndiceBul) {
        $this->dernierIndiceBul = $dernierIndiceBul;
        return $this;
    }

    /**
     * Set the dest point irc.
     *
     * @param string $destPointIrc The dest point irc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDestPointIrc($destPointIrc) {
        $this->destPointIrc = $destPointIrc;
        return $this;
    }

    /**
     * Set the dest tri point.
     *
     * @param string $destTriPoint The dest tri point.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDestTriPoint($destTriPoint) {
        $this->destTriPoint = $destTriPoint;
        return $this;
    }

    /**
     * Set the dossier proprete.
     *
     * @param string $dossierProprete The dossier proprete.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDossierProprete($dossierProprete) {
        $this->dossierProprete = $dossierProprete;
        return $this;
    }

    /**
     * Set the dossier sur web.
     *
     * @param bool $dossierSurWeb The dossier sur web.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDossierSurWeb($dossierSurWeb) {
        $this->dossierSurWeb = $dossierSurWeb;
        return $this;
    }

    /**
     * Set the ds code collab.
     *
     * @param string $dsCodeCollab The ds code collab.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsCodeCollab($dsCodeCollab) {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsDateRetour(DateTime $dsDateRetour = null) {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsDateSortie(DateTime $dsDateSortie = null) {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the ds fusion.
     *
     * @param string $dsFusion The ds fusion.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsFusion($dsFusion) {
        $this->dsFusion = $dsFusion;
        return $this;
    }

    /**
     * Set the ds type edition.
     *
     * @param string $dsTypeEdition The ds type edition.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDsTypeEdition($dsTypeEdition) {
        $this->dsTypeEdition = $dsTypeEdition;
        return $this;
    }

    /**
     * Set the dt debut periode.
     *
     * @param DateTime|null $dtDebutPeriode The dt debut periode.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDtDebutPeriode(DateTime $dtDebutPeriode = null) {
        $this->dtDebutPeriode = $dtDebutPeriode;
        return $this;
    }

    /**
     * Set the dt fin periode.
     *
     * @param DateTime|null $dtFinPeriode The dt fin periode.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDtFinPeriode(DateTime $dtFinPeriode = null) {
        $this->dtFinPeriode = $dtFinPeriode;
        return $this;
    }

    /**
     * Set the ducs franc euro.
     *
     * @param string $ducsFrancEuro The ducs franc euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setDucsFrancEuro($ducsFrancEuro) {
        $this->ducsFrancEuro = $ducsFrancEuro;
        return $this;
    }

    /**
     * Set the ecr type.
     *
     * @param string $ecrType The ecr type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEcrType($ecrType) {
        $this->ecrType = $ecrType;
        return $this;
    }

    /**
     * Set the ed bord choix modele.
     *
     * @param string $edBordChoixModele The ed bord choix modele.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordChoixModele($edBordChoixModele) {
        $this->edBordChoixModele = $edBordChoixModele;
        return $this;
    }

    /**
     * Set the ed bord rupture emp.
     *
     * @param bool $edBordRuptureEmp The ed bord rupture emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordRuptureEmp($edBordRuptureEmp) {
        $this->edBordRuptureEmp = $edBordRuptureEmp;
        return $this;
    }

    /**
     * Set the ed bord type imp.
     *
     * @param string $edBordTypeImp The ed bord type imp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordTypeImp($edBordTypeImp) {
        $this->edBordTypeImp = $edBordTypeImp;
        return $this;
    }

    /**
     * Set the ed bordereau.
     *
     * @param bool $edBordereau The ed bordereau.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordereau($edBordereau) {
        $this->edBordereau = $edBordereau;
        return $this;
    }

    /**
     * Set the ed bordereau prep.
     *
     * @param bool $edBordereauPrep The ed bordereau prep.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordereauPrep($edBordereauPrep) {
        $this->edBordereauPrep = $edBordereauPrep;
        return $this;
    }

    /**
     * Set the ed bordereau prepa.
     *
     * @param bool $edBordereauPrepa The ed bordereau prepa.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBordereauPrepa($edBordereauPrepa) {
        $this->edBordereauPrepa = $edBordereauPrepa;
        return $this;
    }

    /**
     * Set the ed bul last fax.
     *
     * @param string $edBulLastFax The ed bul last fax.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBulLastFax($edBulLastFax) {
        $this->edBulLastFax = $edBulLastFax;
        return $this;
    }

    /**
     * Set the ed bul last mail.
     *
     * @param string $edBulLastMail The ed bul last mail.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBulLastMail($edBulLastMail) {
        $this->edBulLastMail = $edBulLastMail;
        return $this;
    }

    /**
     * Set the ed bul type sortie.
     *
     * @param string $edBulTypeSortie The ed bul type sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdBulTypeSortie($edBulTypeSortie) {
        $this->edBulTypeSortie = $edBulTypeSortie;
        return $this;
    }

    /**
     * Set the ed correspondance.
     *
     * @param bool $edCorrespondance The ed correspondance.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdCorrespondance($edCorrespondance) {
        $this->edCorrespondance = $edCorrespondance;
        return $this;
    }

    /**
     * Set the ed ducs auto.
     *
     * @param bool $edDucsAuto The ed ducs auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsAuto($edDucsAuto) {
        $this->edDucsAuto = $edDucsAuto;
        return $this;
    }

    /**
     * Set the ed ducs nb ex.
     *
     * @param string $edDucsNbEx The ed ducs nb ex.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsNbEx($edDucsNbEx) {
        $this->edDucsNbEx = $edDucsNbEx;
        return $this;
    }

    /**
     * Set the ed ducs opt btp.
     *
     * @param string $edDucsOptBtp The ed ducs opt btp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsOptBtp($edDucsOptBtp) {
        $this->edDucsOptBtp = $edDucsOptBtp;
        return $this;
    }

    /**
     * Set the ed ducs type sortie.
     *
     * @param string $edDucsTypeSortie The ed ducs type sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdDucsTypeSortie($edDucsTypeSortie) {
        $this->edDucsTypeSortie = $edDucsTypeSortie;
        return $this;
    }

    /**
     * Set the ed h sup bonif que majo.
     *
     * @param bool $edHSupBonifQueMajo The ed h sup bonif que majo.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHSupBonifQueMajo($edHSupBonifQueMajo) {
        $this->edHSupBonifQueMajo = $edHSupBonifQueMajo;
        return $this;
    }

    /**
     * Set the ed histo tri emp.
     *
     * @param string $edHistoTriEmp The ed histo tri emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoTriEmp($edHistoTriEmp) {
        $this->edHistoTriEmp = $edHistoTriEmp;
        return $this;
    }

    /**
     * Set the ed histo tri etablissement.
     *
     * @param bool $edHistoTriEtablissement The ed histo tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoTriEtablissement($edHistoTriEtablissement) {
        $this->edHistoTriEtablissement = $edHistoTriEtablissement;
        return $this;
    }

    /**
     * Set the ed histo tri service.
     *
     * @param bool $edHistoTriService The ed histo tri service.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoTriService($edHistoTriService) {
        $this->edHistoTriService = $edHistoTriService;
        return $this;
    }

    /**
     * Set the ed histo type.
     *
     * @param string $edHistoType The ed histo type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdHistoType($edHistoType) {
        $this->edHistoType = $edHistoType;
        return $this;
    }

    /**
     * Set the ed imput comptable.
     *
     * @param bool $edImputComptable The ed imput comptable.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdImputComptable($edImputComptable) {
        $this->edImputComptable = $edImputComptable;
        return $this;
    }

    /**
     * Set the ed texte1.
     *
     * @param string $edTexte1 The ed texte1.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTexte1($edTexte1) {
        $this->edTexte1 = $edTexte1;
        return $this;
    }

    /**
     * Set the ed texte2.
     *
     * @param string $edTexte2 The ed texte2.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTexte2($edTexte2) {
        $this->edTexte2 = $edTexte2;
        return $this;
    }

    /**
     * Set the ed trt cpta last fax.
     *
     * @param string $edTrtCptaLastFax The ed trt cpta last fax.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTrtCptaLastFax($edTrtCptaLastFax) {
        $this->edTrtCptaLastFax = $edTrtCptaLastFax;
        return $this;
    }

    /**
     * Set the ed trt cpta last mail.
     *
     * @param string $edTrtCptaLastMail The ed trt cpta last mail.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTrtCptaLastMail($edTrtCptaLastMail) {
        $this->edTrtCptaLastMail = $edTrtCptaLastMail;
        return $this;
    }

    /**
     * Set the ed trt cpta sortie.
     *
     * @param string $edTrtCptaSortie The ed trt cpta sortie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEdTrtCptaSortie($edTrtCptaSortie) {
        $this->edTrtCptaSortie = $edTrtCptaSortie;
        return $this;
    }

    /**
     * Set the edit qpxl absences.
     *
     * @param bool $editQpxlAbsences The edit qpxl absences.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlAbsences($editQpxlAbsences) {
        $this->editQpxlAbsences = $editQpxlAbsences;
        return $this;
    }

    /**
     * Set the edit qpxl acomptes.
     *
     * @param bool $editQpxlAcomptes The edit qpxl acomptes.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlAcomptes($editQpxlAcomptes) {
        $this->editQpxlAcomptes = $editQpxlAcomptes;
        return $this;
    }

    /**
     * Set the edit qpxl tri emp.
     *
     * @param string $editQpxlTriEmp The edit qpxl tri emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlTriEmp($editQpxlTriEmp) {
        $this->editQpxlTriEmp = $editQpxlTriEmp;
        return $this;
    }

    /**
     * Set the edit qpxl vider lib.
     *
     * @param bool $editQpxlViderLib The edit qpxl vider lib.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditQpxlViderLib($editQpxlViderLib) {
        $this->editQpxlViderLib = $editQpxlViderLib;
        return $this;
    }

    /**
     * Set the editer bulletin stc.
     *
     * @param bool $editerBulletinStc The editer bulletin stc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditerBulletinStc($editerBulletinStc) {
        $this->editerBulletinStc = $editerBulletinStc;
        return $this;
    }

    /**
     * Set the edition cheque tc.
     *
     * @param bool $editionChequeTc The edition cheque tc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditionChequeTc($editionChequeTc) {
        $this->editionChequeTc = $editionChequeTc;
        return $this;
    }

    /**
     * Set the edition date.
     *
     * @param bool $editionDate The edition date.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditionDate($editionDate) {
        $this->editionDate = $editionDate;
        return $this;
    }

    /**
     * Set the edition heure.
     *
     * @param bool $editionHeure The edition heure.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEditionHeure($editionHeure) {
        $this->editionHeure = $editionHeure;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the entete solde tc.
     *
     * @param bool $enteteSoldeTc The entete solde tc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEnteteSoldeTc($enteteSoldeTc) {
        $this->enteteSoldeTc = $enteteSoldeTc;
        return $this;
    }

    /**
     * Set the etat controle dadsu.
     *
     * @param string $etatControleDadsu The etat controle dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatControleDadsu($etatControleDadsu) {
        $this->etatControleDadsu = $etatControleDadsu;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string $etatCtrlNorme The etat ctrl norme.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatCtrlNorme($etatCtrlNorme) {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the etat das.
     *
     * @param string $etatDas The etat das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatDas($etatDas) {
        $this->etatDas = $etatDas;
        return $this;
    }

    /**
     * Set the etat das rect.
     *
     * @param string $etatDasRect The etat das rect.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setEtatDasRect($etatDasRect) {
        $this->etatDasRect = $etatDasRect;
        return $this;
    }

    /**
     * Set the fichier unique.
     *
     * @param bool $fichierUnique The fichier unique.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFichierUnique($fichierUnique) {
        $this->fichierUnique = $fichierUnique;
        return $this;
    }

    /**
     * Set the filtrer liste emp.
     *
     * @param int $filtrerListeEmp The filtrer liste emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFiltrerListeEmp($filtrerListeEmp) {
        $this->filtrerListeEmp = $filtrerListeEmp;
        return $this;
    }

    /**
     * Set the fin periode das.
     *
     * @param DateTime|null $finPeriodeDas The fin periode das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFinPeriodeDas(DateTime $finPeriodeDas = null) {
        $this->finPeriodeDas = $finPeriodeDas;
        return $this;
    }

    /**
     * Set the fin periode histo das.
     *
     * @param DateTime|null $finPeriodeHistoDas The fin periode histo das.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFinPeriodeHistoDas(DateTime $finPeriodeHistoDas = null) {
        $this->finPeriodeHistoDas = $finPeriodeHistoDas;
        return $this;
    }

    /**
     * Set the flag traite.
     *
     * @param string $flagTraite The flag traite.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFlagTraite($flagTraite) {
        $this->flagTraite = $flagTraite;
        return $this;
    }

    /**
     * Set the flag traite2.
     *
     * @param int $flagTraite2 The flag traite2.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFlagTraite2($flagTraite2) {
        $this->flagTraite2 = $flagTraite2;
        return $this;
    }

    /**
     * Set the flag traite3.
     *
     * @param int $flagTraite3 The flag traite3.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFlagTraite3($flagTraite3) {
        $this->flagTraite3 = $flagTraite3;
        return $this;
    }

    /**
     * Set the format fic virement.
     *
     * @param string $formatFicVirement The format fic virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setFormatFicVirement($formatFicVirement) {
        $this->formatFicVirement = $formatFicVirement;
        return $this;
    }

    /**
     * Set the gest num bulletin.
     *
     * @param bool $gestNumBulletin The gest num bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestNumBulletin($gestNumBulletin) {
        $this->gestNumBulletin = $gestNumBulletin;
        return $this;
    }

    /**
     * Set the gest repo compens.
     *
     * @param bool $gestRepoCompens The gest repo compens.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestRepoCompens($gestRepoCompens) {
        $this->gestRepoCompens = $gestRepoCompens;
        return $this;
    }

    /**
     * Set the gest texte.
     *
     * @param bool $gestTexte The gest texte.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestTexte($gestTexte) {
        $this->gestTexte = $gestTexte;
        return $this;
    }

    /**
     * Set the gestion coeff.
     *
     * @param bool $gestionCoeff The gestion coeff.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionCoeff($gestionCoeff) {
        $this->gestionCoeff = $gestionCoeff;
        return $this;
    }

    /**
     * Set the gestion coeff grille.
     *
     * @param bool $gestionCoeffGrille The gestion coeff grille.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionCoeffGrille($gestionCoeffGrille) {
        $this->gestionCoeffGrille = $gestionCoeffGrille;
        return $this;
    }

    /**
     * Set the gestion exemplaire.
     *
     * @param string $gestionExemplaire The gestion exemplaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionExemplaire($gestionExemplaire) {
        $this->gestionExemplaire = $gestionExemplaire;
        return $this;
    }

    /**
     * Set the gestion intemperie.
     *
     * @param bool $gestionIntemperie The gestion intemperie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionIntemperie($gestionIntemperie) {
        $this->gestionIntemperie = $gestionIntemperie;
        return $this;
    }

    /**
     * Set the gestion numero employe auto.
     *
     * @param bool $gestionNumeroEmployeAuto The gestion numero employe auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionNumeroEmployeAuto($gestionNumeroEmployeAuto) {
        $this->gestionNumeroEmployeAuto = $gestionNumeroEmployeAuto;
        return $this;
    }

    /**
     * Set the gestion qpxl.
     *
     * @param bool $gestionQpxl The gestion qpxl.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionQpxl($gestionQpxl) {
        $this->gestionQpxl = $gestionQpxl;
        return $this;
    }

    /**
     * Set the gestion td bilaterale.
     *
     * @param bool $gestionTdBilaterale The gestion td bilaterale.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionTdBilaterale($gestionTdBilaterale) {
        $this->gestionTdBilaterale = $gestionTdBilaterale;
        return $this;
    }

    /**
     * Set the gestion td sou dadsu.
     *
     * @param bool $gestionTdSouDadsu The gestion td sou dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGestionTdSouDadsu($gestionTdSouDadsu) {
        $this->gestionTdSouDadsu = $gestionTdSouDadsu;
        return $this;
    }

    /**
     * Set the groupe gi.
     *
     * @param string $groupeGi The groupe gi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setGroupeGi($groupeGi) {
        $this->groupeGi = $groupeGi;
        return $this;
    }

    /**
     * Set the h bonif influ cassation.
     *
     * @param string $hBonifInfluCassation The h bonif influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHBonifInfluCassation($hBonifInfluCassation) {
        $this->hBonifInfluCassation = $hBonifInfluCassation;
        return $this;
    }

    /**
     * Set the h sup1 structurelle.
     *
     * @param bool $hSup1Structurelle The h sup1 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup1Structurelle($hSup1Structurelle) {
        $this->hSup1Structurelle = $hSup1Structurelle;
        return $this;
    }

    /**
     * Set the h sup2 structurelle.
     *
     * @param bool $hSup2Structurelle The h sup2 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup2Structurelle($hSup2Structurelle) {
        $this->hSup2Structurelle = $hSup2Structurelle;
        return $this;
    }

    /**
     * Set the h sup3 structurelle.
     *
     * @param bool $hSup3Structurelle The h sup3 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup3Structurelle($hSup3Structurelle) {
        $this->hSup3Structurelle = $hSup3Structurelle;
        return $this;
    }

    /**
     * Set the h sup4 structurelle.
     *
     * @param bool $hSup4Structurelle The h sup4 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup4Structurelle($hSup4Structurelle) {
        $this->hSup4Structurelle = $hSup4Structurelle;
        return $this;
    }

    /**
     * Set the h sup5 structurelle.
     *
     * @param bool $hSup5Structurelle The h sup5 structurelle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHSup5Structurelle($hSup5Structurelle) {
        $this->hSup5Structurelle = $hSup5Structurelle;
        return $this;
    }

    /**
     * Set the heure sup2 influ cassation.
     *
     * @param string $heureSup2InfluCassation The heure sup2 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup2InfluCassation($heureSup2InfluCassation) {
        $this->heureSup2InfluCassation = $heureSup2InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup3 influ cassation.
     *
     * @param string $heureSup3InfluCassation The heure sup3 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup3InfluCassation($heureSup3InfluCassation) {
        $this->heureSup3InfluCassation = $heureSup3InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup4 influ cassation.
     *
     * @param string $heureSup4InfluCassation The heure sup4 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup4InfluCassation($heureSup4InfluCassation) {
        $this->heureSup4InfluCassation = $heureSup4InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup5 influ cassation.
     *
     * @param string $heureSup5InfluCassation The heure sup5 influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSup5InfluCassation($heureSup5InfluCassation) {
        $this->heureSup5InfluCassation = $heureSup5InfluCassation;
        return $this;
    }

    /**
     * Set the heure sup influ cassation.
     *
     * @param string $heureSupInfluCassation The heure sup influ cassation.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureSupInfluCassation($heureSupInfluCassation) {
        $this->heureSupInfluCassation = $heureSupInfluCassation;
        return $this;
    }

    /**
     * Set the heure theo base trav.
     *
     * @param string $heureTheoBaseTrav The heure theo base trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setHeureTheoBaseTrav($heureTheoBaseTrav) {
        $this->heureTheoBaseTrav = $heureTheoBaseTrav;
        return $this;
    }

    /**
     * Set the indem cp intervient brut al.
     *
     * @param bool $indemCpIntervientBrutAl The indem cp intervient brut al.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setIndemCpIntervientBrutAl($indemCpIntervientBrutAl) {
        $this->indemCpIntervientBrutAl = $indemCpIntervientBrutAl;
        return $this;
    }

    /**
     * Set the jour debut transfert.
     *
     * @param int $jourDebutTransfert The jour debut transfert.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJourDebutTransfert($jourDebutTransfert) {
        $this->jourDebutTransfert = $jourDebutTransfert;
        return $this;
    }

    /**
     * Set the jour fin transfert.
     *
     * @param int $jourFinTransfert The jour fin transfert.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJourFinTransfert($jourFinTransfert) {
        $this->jourFinTransfert = $jourFinTransfert;
        return $this;
    }

    /**
     * Set the jrn format.
     *
     * @param string $jrnFormat The jrn format.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnFormat($jrnFormat) {
        $this->jrnFormat = $jrnFormat;
        return $this;
    }

    /**
     * Set the jrn regroupe abs.
     *
     * @param bool $jrnRegroupeAbs The jrn regroupe abs.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnRegroupeAbs($jrnRegroupeAbs) {
        $this->jrnRegroupeAbs = $jrnRegroupeAbs;
        return $this;
    }

    /**
     * Set the jrn tri.
     *
     * @param string $jrnTri The jrn tri.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnTri($jrnTri) {
        $this->jrnTri = $jrnTri;
        return $this;
    }

    /**
     * Set the jrn tri etablissement.
     *
     * @param string $jrnTriEtablissement The jrn tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnTriEtablissement($jrnTriEtablissement) {
        $this->jrnTriEtablissement = $jrnTriEtablissement;
        return $this;
    }

    /**
     * Set the jrn tri service.
     *
     * @param string $jrnTriService The jrn tri service.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnTriService($jrnTriService) {
        $this->jrnTriService = $jrnTriService;
        return $this;
    }

    /**
     * Set the jrn type.
     *
     * @param string $jrnType The jrn type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setJrnType($jrnType) {
        $this->jrnType = $jrnType;
        return $this;
    }

    /**
     * Set the liaison proprete.
     *
     * @param bool $liaisonProprete The liaison proprete.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLiaisonProprete($liaisonProprete) {
        $this->liaisonProprete = $liaisonProprete;
        return $this;
    }

    /**
     * Set the lib arbitrage.
     *
     * @param string $libArbitrage The lib arbitrage.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibArbitrage($libArbitrage) {
        $this->libArbitrage = $libArbitrage;
        return $this;
    }

    /**
     * Set the lib base conge.
     *
     * @param string $libBaseConge The lib base conge.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibBaseConge($libBaseConge) {
        $this->libBaseConge = $libBaseConge;
        return $this;
    }

    /**
     * Set the lib bqcp.
     *
     * @param string $libBqcp The lib bqcp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibBqcp($libBqcp) {
        $this->libBqcp = $libBqcp;
        return $this;
    }

    /**
     * Set the lib cachet aem.
     *
     * @param string $libCachetAem The lib cachet aem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibCachetAem($libCachetAem) {
        $this->libCachetAem = $libCachetAem;
        return $this;
    }

    /**
     * Set the lib cotis cne.
     *
     * @param string $libCotisCne The lib cotis cne.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibCotisCne($libCotisCne) {
        $this->libCotisCne = $libCotisCne;
        return $this;
    }

    /**
     * Set the lib fin contrat.
     *
     * @param string $libFinContrat The lib fin contrat.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibFinContrat($libFinContrat) {
        $this->libFinContrat = $libFinContrat;
        return $this;
    }

    /**
     * Set the lib fin contrat cne.
     *
     * @param string $libFinContratCne The lib fin contrat cne.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibFinContratCne($libFinContratCne) {
        $this->libFinContratCne = $libFinContratCne;
        return $this;
    }

    /**
     * Set the lib indem cp.
     *
     * @param string $libIndemCp The lib indem cp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibIndemCp($libIndemCp) {
        $this->libIndemCp = $libIndemCp;
        return $this;
    }

    /**
     * Set the libelle libre virement.
     *
     * @param string $libelleLibreVirement The libelle libre virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLibelleLibreVirement($libelleLibreVirement) {
        $this->libelleLibreVirement = $libelleLibreVirement;
        return $this;
    }

    /**
     * Set the ligne bul euro.
     *
     * @param bool $ligneBulEuro The ligne bul euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLigneBulEuro($ligneBulEuro) {
        $this->ligneBulEuro = $ligneBulEuro;
        return $this;
    }

    /**
     * Set the lignes transport.
     *
     * @param bool $lignesTransport The lignes transport.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setLignesTransport($lignesTransport) {
        $this->lignesTransport = $lignesTransport;
        return $this;
    }

    /**
     * Set the mail bulletin.
     *
     * @param string $mailBulletin The mail bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailBulletin($mailBulletin) {
        $this->mailBulletin = $mailBulletin;
        return $this;
    }

    /**
     * Set the mail bulletin cle.
     *
     * @param string $mailBulletinCle The mail bulletin cle.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailBulletinCle($mailBulletinCle) {
        $this->mailBulletinCle = $mailBulletinCle;
        return $this;
    }

    /**
     * Set the mail bulletin pj.
     *
     * @param string $mailBulletinPj The mail bulletin pj.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailBulletinPj($mailBulletinPj) {
        $this->mailBulletinPj = $mailBulletinPj;
        return $this;
    }

    /**
     * Set the mail c li ducs edi.
     *
     * @param bool $mailCLiDucsEdi The mail c li ducs edi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMailCLiDucsEdi($mailCLiDucsEdi) {
        $this->mailCLiDucsEdi = $mailCLiDucsEdi;
        return $this;
    }

    /**
     * Set the mention cp.
     *
     * @param bool $mentionCp The mention cp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMentionCp($mentionCp) {
        $this->mentionCp = $mentionCp;
        return $this;
    }

    /**
     * Set the message vu.
     *
     * @param bool $messageVu The message vu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMessageVu($messageVu) {
        $this->messageVu = $messageVu;
        return $this;
    }

    /**
     * Set the millesime1.
     *
     * @param int $millesime1 The millesime1.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMillesime1($millesime1) {
        $this->millesime1 = $millesime1;
        return $this;
    }

    /**
     * Set the mode planning.
     *
     * @param int $modePlanning The mode planning.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModePlanning($modePlanning) {
        $this->modePlanning = $modePlanning;
        return $this;
    }

    /**
     * Set the modele apercu.
     *
     * @param string $modeleApercu The modele apercu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleApercu($modeleApercu) {
        $this->modeleApercu = $modeleApercu;
        return $this;
    }

    /**
     * Set the modele bon bleu.
     *
     * @param string $modeleBonBleu The modele bon bleu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleBonBleu($modeleBonBleu) {
        $this->modeleBonBleu = $modeleBonBleu;
        return $this;
    }

    /**
     * Set the modele bulletin.
     *
     * @param string $modeleBulletin The modele bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleBulletin($modeleBulletin) {
        $this->modeleBulletin = $modeleBulletin;
        return $this;
    }

    /**
     * Set the modele certif.
     *
     * @param string $modeleCertif The modele certif.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleCertif($modeleCertif) {
        $this->modeleCertif = $modeleCertif;
        return $this;
    }

    /**
     * Set the modele certif trav.
     *
     * @param string $modeleCertifTrav The modele certif trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleCertifTrav($modeleCertifTrav) {
        $this->modeleCertifTrav = $modeleCertifTrav;
        return $this;
    }

    /**
     * Set the modele cheque.
     *
     * @param string $modeleCheque The modele cheque.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setModeleCheque($modeleCheque) {
        $this->modeleCheque = $modeleCheque;
        return $this;
    }

    /**
     * Set the mois cloture an.
     *
     * @param string $moisClotureAn The mois cloture an.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setMoisClotureAn($moisClotureAn) {
        $this->moisClotureAn = $moisClotureAn;
        return $this;
    }

    /**
     * Set the n attest aem.
     *
     * @param int $nAttestAem The n attest aem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAem($nAttestAem) {
        $this->nAttestAem = $nAttestAem;
        return $this;
    }

    /**
     * Set the n attest aemedi.
     *
     * @param int $nAttestAemedi The n attest aemedi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAemedi($nAttestAemedi) {
        $this->nAttestAemedi = $nAttestAemedi;
        return $this;
    }

    /**
     * Set the n attest aemx.
     *
     * @param int $nAttestAemx The n attest aemx.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAemx($nAttestAemx) {
        $this->nAttestAemx = $nAttestAemx;
        return $this;
    }

    /**
     * Set the n attest assedic.
     *
     * @param int $nAttestAssedic The n attest assedic.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestAssedic($nAttestAssedic) {
        $this->nAttestAssedic = $nAttestAssedic;
        return $this;
    }

    /**
     * Set the n attest extras.
     *
     * @param int $nAttestExtras The n attest extras.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestExtras($nAttestExtras) {
        $this->nAttestExtras = $nAttestExtras;
        return $this;
    }

    /**
     * Set the n attest ijss.
     *
     * @param int $nAttestIjss The n attest ijss.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestIjss($nAttestIjss) {
        $this->nAttestIjss = $nAttestIjss;
        return $this;
    }

    /**
     * Set the n attest ijss at.
     *
     * @param int $nAttestIjssAt The n attest ijss at.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNAttestIjssAt($nAttestIjssAt) {
        $this->nAttestIjssAt = $nAttestIjssAt;
        return $this;
    }

    /**
     * Set the n der document.
     *
     * @param int $nDerDocument The n der document.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNDerDocument($nDerDocument) {
        $this->nDerDocument = $nDerDocument;
        return $this;
    }

    /**
     * Set the nap euro.
     *
     * @param bool $napEuro The nap euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNapEuro($napEuro) {
        $this->napEuro = $napEuro;
        return $this;
    }

    /**
     * Set the nb exemplaire.
     *
     * @param string $nbExemplaire The nb exemplaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNbExemplaire($nbExemplaire) {
        $this->nbExemplaire = $nbExemplaire;
        return $this;
    }

    /**
     * Set the nce conges spectacles.
     *
     * @param int $nceCongesSpectacles The nce conges spectacles.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNceCongesSpectacles($nceCongesSpectacles) {
        $this->nceCongesSpectacles = $nceCongesSpectacles;
        return $this;
    }

    /**
     * Set the nouv param retraite type.
     *
     * @param bool $nouvParamRetraiteType The nouv param retraite type.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setNouvParamRetraiteType($nouvParamRetraiteType) {
        $this->nouvParamRetraiteType = $nouvParamRetraiteType;
        return $this;
    }

    /**
     * Set the options calc abs.
     *
     * @param bool $optionsCalcAbs The options calc abs.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setOptionsCalcAbs($optionsCalcAbs) {
        $this->optionsCalcAbs = $optionsCalcAbs;
        return $this;
    }

    /**
     * Set the ordre libelle h sup.
     *
     * @param string $ordreLibelleHSup The ordre libelle h sup.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setOrdreLibelleHSup($ordreLibelleHSup) {
        $this->ordreLibelleHSup = $ordreLibelleHSup;
        return $this;
    }

    /**
     * Set the paie euro.
     *
     * @param bool $paieEuro The paie euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPaieEuro($paieEuro) {
        $this->paieEuro = $paieEuro;
        return $this;
    }

    /**
     * Set the part sal seule.
     *
     * @param bool $partSalSeule The part sal seule.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPartSalSeule($partSalSeule) {
        $this->partSalSeule = $partSalSeule;
        return $this;
    }

    /**
     * Set the pas gestion indice bul.
     *
     * @param bool $pasGestionIndiceBul The pas gestion indice bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPasGestionIndiceBul($pasGestionIndiceBul) {
        $this->pasGestionIndiceBul = $pasGestionIndiceBul;
        return $this;
    }

    /**
     * Set the pas prendre iccp fillon.
     *
     * @param bool $pasPrendreIccpFillon The pas prendre iccp fillon.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPasPrendreIccpFillon($pasPrendreIccpFillon) {
        $this->pasPrendreIccpFillon = $pasPrendreIccpFillon;
        return $this;
    }

    /**
     * Set the pas sous tot s base.
     *
     * @param bool $pasSousTotSBase The pas sous tot s base.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPasSousTotSBase($pasSousTotSBase) {
        $this->pasSousTotSBase = $pasSousTotSBase;
        return $this;
    }

    /**
     * Set the passage35 h fait.
     *
     * @param bool $passage35HFait The passage35 h fait.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPassage35HFait($passage35HFait) {
        $this->passage35HFait = $passage35HFait;
        return $this;
    }

    /**
     * Set the path virement.
     *
     * @param string $pathVirement The path virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPathVirement($pathVirement) {
        $this->pathVirement = $pathVirement;
        return $this;
    }

    /**
     * Set the periode i paie.
     *
     * @param DateTime|null $periodeIPaie The periode i paie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPeriodeIPaie(DateTime $periodeIPaie = null) {
        $this->periodeIPaie = $periodeIPaie;
        return $this;
    }

    /**
     * Set the periode paie.
     *
     * @param DateTime|null $periodePaie The periode paie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPeriodePaie(DateTime $periodePaie = null) {
        $this->periodePaie = $periodePaie;
        return $this;
    }

    /**
     * Set the pj mail c li ducs edi.
     *
     * @param bool $pjMailCLiDucsEdi The pj mail c li ducs edi.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPjMailCLiDucsEdi($pjMailCLiDucsEdi) {
        $this->pjMailCLiDucsEdi = $pjMailCLiDucsEdi;
        return $this;
    }

    /**
     * Set the pj mail cli coupon paiement.
     *
     * @param bool $pjMailCliCouponPaiement The pj mail cli coupon paiement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPjMailCliCouponPaiement($pjMailCliCouponPaiement) {
        $this->pjMailCliCouponPaiement = $pjMailCliCouponPaiement;
        return $this;
    }

    /**
     * Set the plafond.
     *
     * @param float $plafond The plafond.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPlafond($plafond) {
        $this->plafond = $plafond;
        return $this;
    }

    /**
     * Set the porta frais sante certif trav.
     *
     * @param bool $portaFraisSanteCertifTrav The porta frais sante certif trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPortaFraisSanteCertifTrav($portaFraisSanteCertifTrav) {
        $this->portaFraisSanteCertifTrav = $portaFraisSanteCertifTrav;
        return $this;
    }

    /**
     * Set the porta prevoyance oblig.
     *
     * @param bool $portaPrevoyanceOblig The porta prevoyance oblig.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPortaPrevoyanceOblig($portaPrevoyanceOblig) {
        $this->portaPrevoyanceOblig = $portaPrevoyanceOblig;
        return $this;
    }

    /**
     * Set the preparation tdp.
     *
     * @param bool $preparationTdp The preparation tdp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPreparationTdp($preparationTdp) {
        $this->preparationTdp = $preparationTdp;
        return $this;
    }

    /**
     * Set the presence min.
     *
     * @param string $presenceMin The presence min.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setPresenceMin($presenceMin) {
        $this->presenceMin = $presenceMin;
        return $this;
    }

    /**
     * Set the prorata dif certif trav.
     *
     * @param bool $prorataDifCertifTrav The prorata dif certif trav.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setProrataDifCertifTrav($prorataDifCertifTrav) {
        $this->prorataDifCertifTrav = $prorataDifCertifTrav;
        return $this;
    }

    /**
     * Set the raz commentaire.
     *
     * @param string $razCommentaire The raz commentaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRazCommentaire($razCommentaire) {
        $this->razCommentaire = $razCommentaire;
        return $this;
    }

    /**
     * Set the raz h sup.
     *
     * @param string $razHSup The raz h sup.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRazHSup($razHSup) {
        $this->razHSup = $razHSup;
        return $this;
    }

    /**
     * Set the rdlpascii.
     *
     * @param bool $rdlpascii The rdlpascii.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRdlpascii($rdlpascii) {
        $this->rdlpascii = $rdlpascii;
        return $this;
    }

    /**
     * Set the rdlpemployes.
     *
     * @param bool $rdlpemployes The rdlpemployes.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRdlpemployes($rdlpemployes) {
        $this->rdlpemployes = $rdlpemployes;
        return $this;
    }

    /**
     * Set the ref remise.
     *
     * @param int $refRemise The ref remise.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRefRemise($refRemise) {
        $this->refRemise = $refRemise;
        return $this;
    }

    /**
     * Set the ref trans.
     *
     * @param int $refTrans The ref trans.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRefTrans($refTrans) {
        $this->refTrans = $refTrans;
        return $this;
    }

    /**
     * Set the reference interne virement.
     *
     * @param string $referenceInterneVirement The reference interne virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setReferenceInterneVirement($referenceInterneVirement) {
        $this->referenceInterneVirement = $referenceInterneVirement;
        return $this;
    }

    /**
     * Set the regroup lib ed bul.
     *
     * @param bool $regroupLibEdBul The regroup lib ed bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRegroupLibEdBul($regroupLibEdBul) {
        $this->regroupLibEdBul = $regroupLibEdBul;
        return $this;
    }

    /**
     * Set the report minimum.
     *
     * @param int $reportMinimum The report minimum.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setReportMinimum($reportMinimum) {
        $this->reportMinimum = $reportMinimum;
        return $this;
    }

    /**
     * Set the retraite97.
     *
     * @param bool $retraite97 The retraite97.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setRetraite97($retraite97) {
        $this->retraite97 = $retraite97;
        return $this;
    }

    /**
     * Set the sais plan emp sem.
     *
     * @param string $saisPlanEmpSem The sais plan emp sem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSaisPlanEmpSem($saisPlanEmpSem) {
        $this->saisPlanEmpSem = $saisPlanEmpSem;
        return $this;
    }

    /**
     * Set the saisie indice bul.
     *
     * @param bool $saisieIndiceBul The saisie indice bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSaisieIndiceBul($saisieIndiceBul) {
        $this->saisieIndiceBul = $saisieIndiceBul;
        return $this;
    }

    /**
     * Set the saut page.
     *
     * @param bool $sautPage The saut page.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSautPage($sautPage) {
        $this->sautPage = $sautPage;
        return $this;
    }

    /**
     * Set the seuil.
     *
     * @param float $seuil The seuil.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSeuil($seuil) {
        $this->seuil = $seuil;
        return $this;
    }

    /**
     * Set the seuil conting.
     *
     * @param float $seuilConting The seuil conting.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setSeuilConting($seuilConting) {
        $this->seuilConting = $seuilConting;
        return $this;
    }

    /**
     * Set the stc auto.
     *
     * @param bool $stcAuto The stc auto.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setStcAuto($stcAuto) {
        $this->stcAuto = $stcAuto;
        return $this;
    }

    /**
     * Set the tab bord tri etablissement.
     *
     * @param bool $tabBordTriEtablissement The tab bord tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTabBordTriEtablissement($tabBordTriEtablissement) {
        $this->tabBordTriEtablissement = $tabBordTriEtablissement;
        return $this;
    }

    /**
     * Set the tab bord tri service.
     *
     * @param bool $tabBordTriService The tab bord tri service.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTabBordTriService($tabBordTriService) {
        $this->tabBordTriService = $tabBordTriService;
        return $this;
    }

    /**
     * Set the tableau charge.
     *
     * @param string $tableauCharge The tableau charge.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTableauCharge($tableauCharge) {
        $this->tableauCharge = $tableauCharge;
        return $this;
    }

    /**
     * Set the tds annee.
     *
     * @param int $tdsAnnee The tds annee.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTdsAnnee($tdsAnnee) {
        $this->tdsAnnee = $tdsAnnee;
        return $this;
    }

    /**
     * Set the tds euro.
     *
     * @param bool $tdsEuro The tds euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTdsEuro($tdsEuro) {
        $this->tdsEuro = $tdsEuro;
        return $this;
    }

    /**
     * Set the tot gene isole.
     *
     * @param string $totGeneIsole The tot gene isole.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTotGeneIsole($totGeneIsole) {
        $this->totGeneIsole = $totGeneIsole;
        return $this;
    }

    /**
     * Set the tot service isole.
     *
     * @param string $totServiceIsole The tot service isole.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTotServiceIsole($totServiceIsole) {
        $this->totServiceIsole = $totServiceIsole;
        return $this;
    }

    /**
     * Set the total etab isole.
     *
     * @param string $totalEtabIsole The total etab isole.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTotalEtabIsole($totalEtabIsole) {
        $this->totalEtabIsole = $totalEtabIsole;
        return $this;
    }

    /**
     * Set the trans rupture.
     *
     * @param string $transRupture The trans rupture.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTransRupture($transRupture) {
        $this->transRupture = $transRupture;
        return $this;
    }

    /**
     * Set the trans tri etablissement.
     *
     * @param string $transTriEtablissement The trans tri etablissement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTransTriEtablissement($transTriEtablissement) {
        $this->transTriEtablissement = $transTriEtablissement;
        return $this;
    }

    /**
     * Set the transfert tds emp.
     *
     * @param bool $transfertTdsEmp The transfert tds emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTransfertTdsEmp($transfertTdsEmp) {
        $this->transfertTdsEmp = $transfertTdsEmp;
        return $this;
    }

    /**
     * Set the tri employe.
     *
     * @param string $triEmploye The tri employe.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTriEmploye($triEmploye) {
        $this->triEmploye = $triEmploye;
        return $this;
    }

    /**
     * Set the tx sal decote.
     *
     * @param float $txSalDecote The tx sal decote.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTxSalDecote($txSalDecote) {
        $this->txSalDecote = $txSalDecote;
        return $this;
    }

    /**
     * Set the type abs sans solde.
     *
     * @param string $typeAbsSansSolde The type abs sans solde.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeAbsSansSolde($typeAbsSansSolde) {
        $this->typeAbsSansSolde = $typeAbsSansSolde;
        return $this;
    }

    /**
     * Set the type agrement aem.
     *
     * @param string $typeAgrementAem The type agrement aem.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeAgrementAem($typeAgrementAem) {
        $this->typeAgrementAem = $typeAgrementAem;
        return $this;
    }

    /**
     * Set the type bordereau prepa.
     *
     * @param string $typeBordereauPrepa The type bordereau prepa.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeBordereauPrepa($typeBordereauPrepa) {
        $this->typeBordereauPrepa = $typeBordereauPrepa;
        return $this;
    }

    /**
     * Set the type bulletin.
     *
     * @param string $typeBulletin The type bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeBulletin($typeBulletin) {
        $this->typeBulletin = $typeBulletin;
        return $this;
    }

    /**
     * Set the type dossier.
     *
     * @param string $typeDossier The type dossier.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeDossier($typeDossier) {
        $this->typeDossier = $typeDossier;
        return $this;
    }

    /**
     * Set the type due.
     *
     * @param string $typeDue The type due.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeDue($typeDue) {
        $this->typeDue = $typeDue;
        return $this;
    }

    /**
     * Set the type effectif.
     *
     * @param string $typeEffectif The type effectif.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeEffectif($typeEffectif) {
        $this->typeEffectif = $typeEffectif;
        return $this;
    }

    /**
     * Set the type fich bilat.
     *
     * @param string $typeFichBilat The type fich bilat.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeFichBilat($typeFichBilat) {
        $this->typeFichBilat = $typeFichBilat;
        return $this;
    }

    /**
     * Set the type gestion bal.
     *
     * @param string $typeGestionBal The type gestion bal.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeGestionBal($typeGestionBal) {
        $this->typeGestionBal = $typeGestionBal;
        return $this;
    }

    /**
     * Set the type modele.
     *
     * @param string $typeModele The type modele.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeModele($typeModele) {
        $this->typeModele = $typeModele;
        return $this;
    }

    /**
     * Set the type prep dadsu.
     *
     * @param string $typePrepDadsu The type prep dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypePrepDadsu($typePrepDadsu) {
        $this->typePrepDadsu = $typePrepDadsu;
        return $this;
    }

    /**
     * Set the type saisie abs.
     *
     * @param string $typeSaisieAbs The type saisie abs.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeSaisieAbs($typeSaisieAbs) {
        $this->typeSaisieAbs = $typeSaisieAbs;
        return $this;
    }

    /**
     * Set the type saisie absence.
     *
     * @param string $typeSaisieAbsence The type saisie absence.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeSaisieAbsence($typeSaisieAbsence) {
        $this->typeSaisieAbsence = $typeSaisieAbsence;
        return $this;
    }

    /**
     * Set the type stc.
     *
     * @param string $typeStc The type stc.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeStc($typeStc) {
        $this->typeStc = $typeStc;
        return $this;
    }

    /**
     * Set the type taux intemperie.
     *
     * @param string $typeTauxIntemperie The type taux intemperie.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeTauxIntemperie($typeTauxIntemperie) {
        $this->typeTauxIntemperie = $typeTauxIntemperie;
        return $this;
    }

    /**
     * Set the type tri.
     *
     * @param string $typeTri The type tri.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeTri($typeTri) {
        $this->typeTri = $typeTri;
        return $this;
    }

    /**
     * Set the type virement.
     *
     * @param string $typeVirement The type virement.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeVirement($typeVirement) {
        $this->typeVirement = $typeVirement;
        return $this;
    }

    /**
     * Set the type visu col saisie bul.
     *
     * @param string $typeVisuColSaisieBul The type visu col saisie bul.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setTypeVisuColSaisieBul($typeVisuColSaisieBul) {
        $this->typeVisuColSaisieBul = $typeVisuColSaisieBul;
        return $this;
    }

    /**
     * Set the utilise pdp quadra.
     *
     * @param bool $utilisePdpQuadra The utilise pdp quadra.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setUtilisePdpQuadra($utilisePdpQuadra) {
        $this->utilisePdpQuadra = $utilisePdpQuadra;
        return $this;
    }

    /**
     * Set the utilise pdp quadra2.
     *
     * @param bool $utilisePdpQuadra2 The utilise pdp quadra2.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setUtilisePdpQuadra2($utilisePdpQuadra2) {
        $this->utilisePdpQuadra2 = $utilisePdpQuadra2;
        return $this;
    }

    /**
     * Set the val cp bulletin.
     *
     * @param bool $valCpBulletin The val cp bulletin.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setValCpBulletin($valCpBulletin) {
        $this->valCpBulletin = $valCpBulletin;
        return $this;
    }

    /**
     * Set the val filtre liste emp.
     *
     * @param int $valFiltreListeEmp The val filtre liste emp.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setValFiltreListeEmp($valFiltreListeEmp) {
        $this->valFiltreListeEmp = $valFiltreListeEmp;
        return $this;
    }

    /**
     * Set the version controle dadsu.
     *
     * @param int $versionControleDadsu The version controle dadsu.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVersionControleDadsu($versionControleDadsu) {
        $this->versionControleDadsu = $versionControleDadsu;
        return $this;
    }

    /**
     * Set the vir code etab.
     *
     * @param string $virCodeEtab The vir code etab.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirCodeEtab($virCodeEtab) {
        $this->virCodeEtab = $virCodeEtab;
        return $this;
    }

    /**
     * Set the vir collectivite.
     *
     * @param string $virCollectivite The vir collectivite.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirCollectivite($virCollectivite) {
        $this->virCollectivite = $virCollectivite;
        return $this;
    }

    /**
     * Set the vir comptable centre.
     *
     * @param string $virComptableCentre The vir comptable centre.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirComptableCentre($virComptableCentre) {
        $this->virComptableCentre = $virComptableCentre;
        return $this;
    }

    /**
     * Set the vir comptable sub.
     *
     * @param string $virComptableSub The vir comptable sub.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirComptableSub($virComptableSub) {
        $this->virComptableSub = $virComptableSub;
        return $this;
    }

    /**
     * Set the vir fonction publique.
     *
     * @param bool $virFonctionPublique The vir fonction publique.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirFonctionPublique($virFonctionPublique) {
        $this->virFonctionPublique = $virFonctionPublique;
        return $this;
    }

    /**
     * Set the vir seuil.
     *
     * @param float $virSeuil The vir seuil.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirSeuil($virSeuil) {
        $this->virSeuil = $virSeuil;
        return $this;
    }

    /**
     * Set the vir type etab.
     *
     * @param string $virTypeEtab The vir type etab.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirTypeEtab($virTypeEtab) {
        $this->virTypeEtab = $virTypeEtab;
        return $this;
    }

    /**
     * Set the virement cr lf.
     *
     * @param bool $virementCrLf The virement cr lf.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirementCrLf($virementCrLf) {
        $this->virementCrLf = $virementCrLf;
        return $this;
    }

    /**
     * Set the virements euro.
     *
     * @param string $virementsEuro The virements euro.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setVirementsEuro($virementsEuro) {
        $this->virementsEuro = $virementsEuro;
        return $this;
    }

    /**
     * Set the web prioritaire.
     *
     * @param bool $webPrioritaire The web prioritaire.
     * @return ConstantesEntreprise Returns this Constantes entreprise.
     */
    public function setWebPrioritaire($webPrioritaire) {
        $this->webPrioritaire = $webPrioritaire;
        return $this;
    }
}
