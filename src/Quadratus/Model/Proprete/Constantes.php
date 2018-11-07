<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Constantes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Constantes {

    /**
     * 35 heures.
     *
     * @var DateTime
     */
    private $_35Heures;

    /**
     * Alertes paie dans pointage.
     *
     * @var boolean
     */
    private $alertesPaieDansPointage;

    /**
     * Alertes paie dans reclam.
     *
     * @var boolean
     */
    private $alertesPaieDansReclam;

    /**
     * Analytique nature agence.
     *
     * @var boolean
     */
    private $analytiqueNatureAgence;

    /**
     * Analytique par chantier.
     *
     * @var boolean
     */
    private $analytiqueParChantier;

    /**
     * Archiver devis.
     *
     * @var boolean
     */
    private $archiverDevis;

    /**
     * Archiver facture.
     *
     * @var boolean
     */
    private $archiverFacture;

    /**
     * Arrondi sur p u.
     *
     * @var boolean
     */
    private $arrondiSurPU;

    /**
     * Autoriser d a sans maj stock.
     *
     * @var boolean
     */
    private $autoriserDASansMajStock;

    /**
     * Autoriser dep bud cha cde type.
     *
     * @var boolean
     */
    private $autoriserDepBudChaCdeType;

    /**
     * Autoriser mensu tache vide.
     *
     * @var boolean
     */
    private $autoriserMensuTacheVide;

    /**
     * B l num fact.
     *
     * @var int
     */
    private $bLNumFact;

    /**
     * B l prefixe.
     *
     * @var string
     */
    private $bLPrefixe;

    /**
     * B r num fact.
     *
     * @var int
     */
    private $bRNumFact;

    /**
     * B r prefixe.
     *
     * @var string
     */
    private $bRPrefixe;

    /**
     * B s num fact.
     *
     * @var int
     */
    private $bSNumFact;

    /**
     * B s prefixe.
     *
     * @var string
     */
    private $bSPrefixe;

    /**
     * C d d mensu total heures.
     *
     * @var boolean
     */
    private $cDDMensuTotalHeures;

    /**
     * C p sans provisions.
     *
     * @var boolean
     */
    private $cPSansProvisions;

    /**
     * Cde client num fact.
     *
     * @var int
     */
    private $cdeClientNumFact;

    /**
     * Cde client prefixe.
     *
     * @var string
     */
    private $cdeClientPrefixe;

    /**
     * Cde frn num fact.
     *
     * @var int
     */
    private $cdeFrnNumFact;

    /**
     * Cde frn prefixe.
     *
     * @var string
     */
    private $cdeFrnPrefixe;

    /**
     * Centralisation vente.
     *
     * @var boolean
     */
    private $centralisationVente;

    /**
     * Charge mensuelle sans tache.
     *
     * @var boolean
     */
    private $chargeMensuelleSansTache;

    /**
     * Chemin doss compta.
     *
     * @var string
     */
    private $cheminDossCompta;

    /**
     * Cle debloquer periode cloturee.
     *
     * @var string
     */
    private $cleDebloquerPeriodeCloturee;

    /**
     * Code abs c p sans solde.
     *
     * @var string
     */
    private $codeAbsCPSansSolde;

    /**
     * Code abs def j f.
     *
     * @var string
     */
    private $codeAbsDefJF;

    /**
     * Code abs def j f moins3.
     *
     * @var string
     */
    private $codeAbsDefJFMoins3;

    /**
     * Code abs fermeture chantier.
     *
     * @var string
     */
    private $codeAbsFermetureChantier;

    /**
     * Code abs pointage defaut.
     *
     * @var string
     */
    private $codeAbsPointageDefaut;

    /**
     * Code collabo valid.
     *
     * @var string
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code depot par defaut.
     *
     * @var string
     */
    private $codeDepotParDefaut;

    /**
     * Code i c s.
     *
     * @var string
     */
    private $codeICS;

    /**
     * Code j a.
     *
     * @var string
     */
    private $codeJA;

    /**
     * Code j v negoce.
     *
     * @var string
     */
    private $codeJVNegoce;

    /**
     * Code j v prestation.
     *
     * @var string
     */
    private $codeJVPrestation;

    /**
     * Code liv par defaut.
     *
     * @var string
     */
    private $codeLivParDefaut;

    /**
     * Code prime chantier1.
     *
     * @var string
     */
    private $codePrimeChantier1;

    /**
     * Code prime chantier2.
     *
     * @var string
     */
    private $codePrimeChantier2;

    /**
     * Code prime chantier3.
     *
     * @var string
     */
    private $codePrimeChantier3;

    /**
     * Code prime dimanche1.
     *
     * @var string
     */
    private $codePrimeDimanche1;

    /**
     * Code prime dimanche1 type2.
     *
     * @var string
     */
    private $codePrimeDimanche1Type2;

    /**
     * Code prime dimanche2.
     *
     * @var string
     */
    private $codePrimeDimanche2;

    /**
     * Code prime forfait.
     *
     * @var string
     */
    private $codePrimeForfait;

    /**
     * Code prime h compl.
     *
     * @var string
     */
    private $codePrimeHCompl;

    /**
     * Code prime h compl2.
     *
     * @var string
     */
    private $codePrimeHCompl2;

    /**
     * Code prime j f1.
     *
     * @var string
     */
    private $codePrimeJF1;

    /**
     * Code prime j f1 type2.
     *
     * @var string
     */
    private $codePrimeJF1Type2;

    /**
     * Code prime j f2.
     *
     * @var string
     */
    private $codePrimeJF2;

    /**
     * Code prime j f mai.
     *
     * @var string
     */
    private $codePrimeJFMai;

    /**
     * Code prime nuit1.
     *
     * @var string
     */
    private $codePrimeNuit1;

    /**
     * Code prime nuit1 type2.
     *
     * @var string
     */
    private $codePrimeNuit1Type2;

    /**
     * Code prime nuit2.
     *
     * @var string
     */
    private $codePrimeNuit2;

    /**
     * Code prime paniers.
     *
     * @var string
     */
    private $codePrimePaniers;

    /**
     * Code prime r s.
     *
     * @var string
     */
    private $codePrimeRS;

    /**
     * Code prime t p.
     *
     * @var string
     */
    private $codePrimeTP;

    /**
     * Code reg j v neg debut.
     *
     * @var string
     */
    private $codeRegJVNegDebut;

    /**
     * Code reg j v neg fin.
     *
     * @var string
     */
    private $codeRegJVNegFin;

    /**
     * Code reg j v prest debut.
     *
     * @var string
     */
    private $codeRegJVPrestDebut;

    /**
     * Code reg j v prest fin.
     *
     * @var string
     */
    private $codeRegJVPrestFin;

    /**
     * Code tache defaut.
     *
     * @var string
     */
    private $codeTacheDefaut;

    /**
     * Collectif def.
     *
     * @var string
     */
    private $collectifDef;

    /**
     * Collectif def fournisseur.
     *
     * @var string
     */
    private $collectifDefFournisseur;

    /**
     * Commentaire journee solidarite.
     *
     * @var string
     */
    private $commentaireJourneeSolidarite;

    /**
     * Compte collectif achat.
     *
     * @var string
     */
    private $compteCollectifAchat;

    /**
     * Compte collectif vente.
     *
     * @var string
     */
    private $compteCollectifVente;

    /**
     * Compte escompte c a exonere.
     *
     * @var string
     */
    private $compteEscompteCAExonere;

    /**
     * Compte escompte soumis t v a.
     *
     * @var string
     */
    private $compteEscompteSoumisTVA;

    /**
     * Compte tva achat.
     *
     * @var string
     */
    private $compteTvaAchat;

    /**
     * Compte tva taxe d e e e.
     *
     * @var string
     */
    private $compteTvaTaxeDEEE;

    /**
     * Compte tva vente.
     *
     * @var string
     */
    private $compteTvaVente;

    /**
     * Compte ventil taxe d e e e.
     *
     * @var string
     */
    private $compteVentilTaxeDEEE;

    /**
     * Compter samedi tf c p paie.
     *
     * @var boolean
     */
    private $compterSamediTfCPPaie;

    /**
     * Controler cde frn.
     *
     * @var boolean
     */
    private $controlerCdeFrn;

    /**
     * Controler charges mensuelles.
     *
     * @var boolean
     */
    private $controlerChargesMensuelles;

    /**
     * Controler code reg.
     *
     * @var boolean
     */
    private $controlerCodeReg;

    /**
     * Controler dep h c max.
     *
     * @var boolean
     */
    private $controlerDepHCMax;

    /**
     * Controler dep h c plus mois.
     *
     * @var boolean
     */
    private $controlerDepHCPlusMois;

    /**
     * Creer alerte paie def en paie.
     *
     * @var boolean
     */
    private $creerAlertePaieDefEnPaie;

    /**
     * Ctrl auto c p.
     *
     * @var boolean
     */
    private $ctrlAutoCP;

    /**
     * Ctrl auto c p avec anticipation.
     *
     * @var boolean
     */
    private $ctrlAutoCPAvecAnticipation;

    /**
     * Date appli gestion heures en plus.
     *
     * @var DateTime
     */
    private $dateAppliGestionHeuresEnPlus;

    /**
     * Date journee solidarite.
     *
     * @var DateTime
     */
    private $dateJourneeSolidarite;

    /**
     * Date validation synchro.
     *
     * @var DateTime
     */
    private $dateValidationSynchro;

    /**
     * Dec mois prep fact.
     *
     * @var int
     */
    private $decMoisPrepFact;

    /**
     * Dernier compte client.
     *
     * @var string
     */
    private $dernierCompteClient;

    /**
     * Dernier compte frn.
     *
     * @var string
     */
    private $dernierCompteFrn;

    /**
     * Discr.
     *
     * @var string
     */
    private $discr;

    /**
     * Doss compta.
     *
     * @var string
     */
    private $dossCompta;

    /**
     * Doss paie.
     *
     * @var string
     */
    private $dossPaie;

    /**
     * E s code abs entree.
     *
     * @var string
     */
    private $eSCodeAbsEntree;

    /**
     * E s code abs sortie.
     *
     * @var string
     */
    private $eSCodeAbsSortie;

    /**
     * E s heures reelles.
     *
     * @var boolean
     */
    private $eSHeuresReelles;

    /**
     * Etablissements paie.
     *
     * @var string
     */
    private $etablissementsPaie;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Euro.
     *
     * @var boolean
     */
    private $euro;

    /**
     * Facturation prorata heures.
     *
     * @var boolean
     */
    private $facturationProrataHeures;

    /**
     * Folio j a.
     *
     * @var string
     */
    private $folioJA;

    /**
     * Folio j v negoce.
     *
     * @var string
     */
    private $folioJVNegoce;

    /**
     * Folio j v prestation.
     *
     * @var string
     */
    private $folioJVPrestation;

    /**
     * Gerer num cpt chantier.
     *
     * @var boolean
     */
    private $gererNumCptChantier;

    /**
     * Gestion h compl.
     *
     * @var boolean
     */
    private $gestionHCompl;

    /**
     * Gestion h sup mens.
     *
     * @var boolean
     */
    private $gestionHSupMens;

    /**
     * Gestion h sup mensuelle.
     *
     * @var boolean
     */
    private $gestionHSupMensuelle;

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
     * Gestion multi depot.
     *
     * @var boolean
     */
    private $gestionMultiDepot;

    /**
     * Gestion quotas.
     *
     * @var boolean
     */
    private $gestionQuotas;

    /**
     * Gestion specif j f.
     *
     * @var boolean
     */
    private $gestionSpecifJF;

    /**
     * Gestion specif majo j f.
     *
     * @var boolean
     */
    private $gestionSpecifMajoJF;

    /**
     * H deb nuit.
     *
     * @var DateTime
     */
    private $hDebNuit;

    /**
     * H deb nuit trav nuit.
     *
     * @var DateTime
     */
    private $hDebNuitTravNuit;

    /**
     * H fin nuit.
     *
     * @var DateTime
     */
    private $hFinNuit;

    /**
     * H fin nuit trav nuit.
     *
     * @var DateTime
     */
    private $hFinNuitTravNuit;

    /**
     * Heures absence mensualise.
     *
     * @var boolean
     */
    private $heuresAbsenceMensualise;

    /**
     * Heures rempl egales mens titulaire.
     *
     * @var boolean
     */
    private $heuresRemplEgalesMensTitulaire;

    /**
     * Increment compte auto.
     *
     * @var int
     */
    private $incrementCompteAuto;

    /**
     * Liaison compta win.
     *
     * @var boolean
     */
    private $liaisonComptaWin;

    /**
     * Lib critere bool1.
     *
     * @var string
     */
    private $libCritereBool1;

    /**
     * Lib critere bool2.
     *
     * @var string
     */
    private $libCritereBool2;

    /**
     * Lib critere byte1.
     *
     * @var string
     */
    private $libCritereByte1;

    /**
     * Lib critere num1.
     *
     * @var string
     */
    private $libCritereNum1;

    /**
     * Lib critere num2.
     *
     * @var string
     */
    private $libCritereNum2;

    /**
     * Lib critere num3.
     *
     * @var string
     */
    private $libCritereNum3;

    /**
     * Lib critere num4.
     *
     * @var string
     */
    private $libCritereNum4;

    /**
     * Lib critere num5.
     *
     * @var string
     */
    private $libCritereNum5;

    /**
     * Lib critere tab1.
     *
     * @var string
     */
    private $libCritereTab1;

    /**
     * Lib critere tab2.
     *
     * @var string
     */
    private $libCritereTab2;

    /**
     * Lib critere tab3.
     *
     * @var string
     */
    private $libCritereTab3;

    /**
     * Lib critere tab4.
     *
     * @var string
     */
    private $libCritereTab4;

    /**
     * Lib critere tab5.
     *
     * @var string
     */
    private $libCritereTab5;

    /**
     * Lib critere txt1.
     *
     * @var string
     */
    private $libCritereTxt1;

    /**
     * Lib critere txt2.
     *
     * @var string
     */
    private $libCritereTxt2;

    /**
     * Lib critere txt3.
     *
     * @var string
     */
    private $libCritereTxt3;

    /**
     * Lib critere txt4.
     *
     * @var string
     */
    private $libCritereTxt4;

    /**
     * Lib critere txt5.
     *
     * @var string
     */
    private $libCritereTxt5;

    /**
     * Libelle auto avoir.
     *
     * @var string
     */
    private $libelleAutoAvoir;

    /**
     * Libelle auto facture.
     *
     * @var string
     */
    private $libelleAutoFacture;

    /**
     * Libelle heures surcroit.
     *
     * @var string
     */
    private $libelleHeuresSurcroit;

    /**
     * Libelle transfert.
     *
     * @var string
     */
    private $libelleTransfert;

    /**
     * Libelle transfert achat.
     *
     * @var string
     */
    private $libelleTransfertAchat;

    /**
     * Liv cde frn depot unique.
     *
     * @var boolean
     */
    private $livCdeFrnDepotUnique;

    /**
     * M a j dernier passage b t.
     *
     * @var boolean
     */
    private $mAJDernierPassageBT;

    /**
     * Mail attestations.
     *
     * @var string
     */
    private $mailAttestations;

    /**
     * Mail factures.
     *
     * @var string
     */
    private $mailFactures;

    /**
     * Maj dernier prix achat.
     *
     * @var boolean
     */
    private $majDernierPrixAchat;

    /**
     * Maj p a m p.
     *
     * @var boolean
     */
    private $majPAMP;

    /**
     * Majoration cascade.
     *
     * @var boolean
     */
    private $majorationCascade;

    /**
     * Majoration h plus.
     *
     * @var string
     */
    private $majorationHPlus;

    /**
     * Marge niveau edition.
     *
     * @var string
     */
    private $margeNiveauEdition;

    /**
     * Marge pourcent charge.
     *
     * @var float
     */
    private $margePourcentCharge;

    /**
     * Marge sal insp prorata c a.
     *
     * @var boolean
     */
    private $margeSalInspProrataCA;

    /**
     * Mensualisation tache.
     *
     * @var boolean
     */
    private $mensualisationTache;

    /**
     * Mode calcul proposition cde.
     *
     * @var string
     */
    private $modeCalculPropositionCde;

    /**
     * Modele devis.
     *
     * @var string
     */
    private $modeleDevis;

    /**
     * Modele devis tech.
     *
     * @var string
     */
    private $modeleDevisTech;

    /**
     * Modele facture.
     *
     * @var string
     */
    private $modeleFacture;

    /**
     * Mt cpta negatif.
     *
     * @var boolean
     */
    private $mtCptaNegatif;

    /**
     * N der document.
     *
     * @var int
     */
    private $nDerDocument;

    /**
     * Nb caracteres ligne fact.
     *
     * @var string
     */
    private $nbCaracteresLigneFact;

    /**
     * Nb decimales prix unitaire.
     *
     * @var string
     */
    private $nbDecimalesPrixUnitaire;

    /**
     * Nb decimales quantite.
     *
     * @var string
     */
    private $nbDecimalesQuantite;

    /**
     * Nb entiers prix unitaire.
     *
     * @var string
     */
    private $nbEntiersPrixUnitaire;

    /**
     * Nb entiers quantite.
     *
     * @var string
     */
    private $nbEntiersQuantite;

    /**
     * Nb jour cp acquis.
     *
     * @var float
     */
    private $nbJourCpAcquis;

    /**
     * Nb jours abs proratisation d c p.
     *
     * @var int
     */
    private $nbJoursAbsProratisationDCP;

    /**
     * Nb mois consecutifs.
     *
     * @var int
     */
    private $nbMoisConsecutifs;

    /**
     * Nom fact nb lignes.
     *
     * @var string
     */
    private $nomFactNbLignes;

    /**
     * Nom fichier ascii achat.
     *
     * @var string
     */
    private $nomFichierAsciiAchat;

    /**
     * Nom fichier ascii vente.
     *
     * @var string
     */
    private $nomFichierAsciiVente;

    /**
     * Note0 non conforme.
     *
     * @var boolean
     */
    private $note0NonConforme;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Num critere b t num1.
     *
     * @var string
     */
    private $numCritereBTNum1;

    /**
     * Num critere b t num2.
     *
     * @var string
     */
    private $numCritereBTNum2;

    /**
     * Num critere chantier filtre1.
     *
     * @var string
     */
    private $numCritereChantierFiltre1;

    /**
     * Num devis.
     *
     * @var int
     */
    private $numDevis;

    /**
     * Num fact.
     *
     * @var int
     */
    private $numFact;

    /**
     * Num fact v m.
     *
     * @var int
     */
    private $numFactVM;

    /**
     * Numero fiche controle.
     *
     * @var int
     */
    private $numeroFicheControle;

    /**
     * P a par fournisseur.
     *
     * @var boolean
     */
    private $pAParFournisseur;

    /**
     * P j envoi mail.
     *
     * @var string
     */
    private $pJEnvoiMail;

    /**
     * P j envoi mail attestation.
     *
     * @var string
     */
    private $pJEnvoiMailAttestation;

    /**
     * Pas num cpt par dossier.
     *
     * @var boolean
     */
    private $pasNumCptParDossier;

    /**
     * Pdf b t_ coefficient.
     *
     * @var float
     */
    private $pdfBT_Coefficient;

    /**
     * Pdf b t_ date passage.
     *
     * @var boolean
     */
    private $pdfBT_DatePassage;

    /**
     * Pdf b t_ descriptif.
     *
     * @var boolean
     */
    private $pdfBT_Descriptif;

    /**
     * Pdf b t_ employes corps.
     *
     * @var boolean
     */
    private $pdfBT_EmployesCorps;

    /**
     * Pdf b t_ employes ref.
     *
     * @var boolean
     */
    private $pdfBT_EmployesRef;

    /**
     * Pdf b t_ facturer ala validation.
     *
     * @var boolean
     */
    private $pdfBT_FacturerAlaValidation;

    /**
     * Pdf b t_ format saisie qte p u.
     *
     * @var boolean
     */
    private $pdfBT_FormatSaisieQtePU;

    /**
     * Pdf b t_ libelle date.
     *
     * @var string
     */
    private $pdfBT_LibelleDate;

    /**
     * Pdf b t_ nom chantier.
     *
     * @var boolean
     */
    private $pdfBT_NomChantier;

    /**
     * Pdf b t_ periode validite.
     *
     * @var boolean
     */
    private $pdfBT_PeriodeValidite;

    /**
     * Pdf b t_ prix achat.
     *
     * @var float
     */
    private $pdfBT_PrixAchat;

    /**
     * Pdf b t_ reprendre libelle date.
     *
     * @var boolean
     */
    private $pdfBT_ReprendreLibelleDate;

    /**
     * Pdf b t_ taux horaire.
     *
     * @var float
     */
    private $pdfBT_TauxHoraire;

    /**
     * Point b t_ employes sortis.
     *
     * @var boolean
     */
    private $pointBT_EmployesSortis;

    /**
     * Poste1.
     *
     * @var string
     */
    private $poste1;

    /**
     * Poste2.
     *
     * @var string
     */
    private $poste2;

    /**
     * Poste3.
     *
     * @var string
     */
    private $poste3;

    /**
     * Poste4.
     *
     * @var string
     */
    private $poste4;

    /**
     * Poste5.
     *
     * @var string
     */
    private $poste5;

    /**
     * Pourc maj h compl.
     *
     * @var float
     */
    private $pourcMajHCompl;

    /**
     * Pourc maj h compl2.
     *
     * @var float
     */
    private $pourcMajHCompl2;

    /**
     * Pourcent dep h c max.
     *
     * @var float
     */
    private $pourcentDepHCMax;

    /**
     * Pourcent dep h c plus mois.
     *
     * @var float
     */
    private $pourcentDepHCPlusMois;

    /**
     * Pourcentage repos remplacement.
     *
     * @var float
     */
    private $pourcentageReposRemplacement;

    /**
     * Prefixe.
     *
     * @var string
     */
    private $prefixe;

    /**
     * Prefixe devis.
     *
     * @var string
     */
    private $prefixeDevis;

    /**
     * Preparer chantier pret only.
     *
     * @var boolean
     */
    private $preparerChantierPretOnly;

    /**
     * Prix defaut achat.
     *
     * @var int
     */
    private $prixDefautAchat;

    /**
     * Prix defaut entree directe.
     *
     * @var int
     */
    private $prixDefautEntreeDirecte;

    /**
     * Prix defaut inventaire.
     *
     * @var int
     */
    private $prixDefautInventaire;

    /**
     * Prix defaut sortie directe.
     *
     * @var int
     */
    private $prixDefautSortieDirecte;

    /**
     * Prix defaut vente.
     *
     * @var int
     */
    private $prixDefautVente;

    /**
     * Prochain numero p j.
     *
     * @var int
     */
    private $prochainNumeroPJ;

    /**
     * Prorata heures creer ligne.
     *
     * @var boolean
     */
    private $prorataHeuresCreerLigne;

    /**
     * Prorata heures designation moins.
     *
     * @var string
     */
    private $prorataHeuresDesignationMoins;

    /**
     * Prorata heures designation plus.
     *
     * @var string
     */
    private $prorataHeuresDesignationPlus;

    /**
     * Prorata heures option.
     *
     * @var string
     */
    private $prorataHeuresOption;

    /**
     * Prov c p infos emp.
     *
     * @var boolean
     */
    private $provCPInfosEmp;

    /**
     * Provisions c p.
     *
     * @var boolean
     */
    private $provisionsCP;

    /**
     * Qualite nb criteres.
     *
     * @var string
     */
    private $qualiteNbCriteres;

    /**
     * Qualite nb notes.
     *
     * @var string
     */
    private $qualiteNbNotes;

    /**
     * Qualite satisfaction generale.
     *
     * @var boolean
     */
    private $qualiteSatisfactionGenerale;

    /**
     * R t fdans fact dev.
     *
     * @var boolean
     */
    private $rTFdansFactDev;

    /**
     * Reference mensu contrat proprete.
     *
     * @var boolean
     */
    private $referenceMensuContratProprete;

    /**
     * Remplacant abs j f pas auto.
     *
     * @var boolean
     */
    private $remplacantAbsJFPasAuto;

    /**
     * Remplacant travaille pas j f.
     *
     * @var boolean
     */
    private $remplacantTravaillePasJF;

    /**
     * Remplacement h c j f.
     *
     * @var boolean
     */
    private $remplacementHCJF;

    /**
     * Repos compensateur pour travailleur nuit.
     *
     * @var boolean
     */
    private $reposCompensateurPourTravailleurNuit;

    /**
     * Saisir absences sur h c.
     *
     * @var boolean
     */
    private $saisirAbsencesSurHC;

    /**
     * Saisir code chantier achat.
     *
     * @var boolean
     */
    private $saisirCodeChantierAchat;

    /**
     * Saisir num b t.
     *
     * @var boolean
     */
    private $saisirNumBT;

    /**
     * Services paie.
     *
     * @var string
     */
    private $servicesPaie;

    /**
     * Seuil majo h compl.
     *
     * @var float
     */
    private $seuilMajoHCompl;

    /**
     * Taux escompte.
     *
     * @var float
     */
    private $tauxEscompte;

    /**
     * Taux majo h c33.
     *
     * @var float
     */
    private $tauxMajoHC33;

    /**
     * Taux majoration h compl.
     *
     * @var float
     */
    private $tauxMajorationHCompl;

    /**
     * Taux tva achat.
     *
     * @var float
     */
    private $tauxTvaAchat;

    /**
     * Taux tva taxe d e e e.
     *
     * @var float
     */
    private $tauxTvaTaxeDEEE;

    /**
     * Taux tva vente.
     *
     * @var float
     */
    private $tauxTvaVente;

    /**
     * Type rempl defaut.
     *
     * @var string
     */
    private $typeRemplDefaut;

    /**
     * Type transfert vente.
     *
     * @var string
     */
    private $typeTransfertVente;

    /**
     * Uniq i d synchro.
     *
     * @var string
     */
    private $uniqIDSynchro;

    /**
     * Utiliser stock mini.
     *
     * @var boolean
     */
    private $utiliserStockMini;

    /**
     * Visualiser pointage b t valides.
     *
     * @var boolean
     */
    private $visualiserPointageBTValides;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the 35 heures.
     *
     * @return DateTime Returns the 35 heures.
     */
    public function get35Heures() {
        return $this->_35Heures;
    }

    /**
     * Get the alertes paie dans pointage.
     *
     * @return boolean Returns the alertes paie dans pointage.
     */
    public function getAlertesPaieDansPointage() {
        return $this->alertesPaieDansPointage;
    }

    /**
     * Get the alertes paie dans reclam.
     *
     * @return boolean Returns the alertes paie dans reclam.
     */
    public function getAlertesPaieDansReclam() {
        return $this->alertesPaieDansReclam;
    }

    /**
     * Get the analytique nature agence.
     *
     * @return boolean Returns the analytique nature agence.
     */
    public function getAnalytiqueNatureAgence() {
        return $this->analytiqueNatureAgence;
    }

    /**
     * Get the analytique par chantier.
     *
     * @return boolean Returns the analytique par chantier.
     */
    public function getAnalytiqueParChantier() {
        return $this->analytiqueParChantier;
    }

    /**
     * Get the archiver devis.
     *
     * @return boolean Returns the archiver devis.
     */
    public function getArchiverDevis() {
        return $this->archiverDevis;
    }

    /**
     * Get the archiver facture.
     *
     * @return boolean Returns the archiver facture.
     */
    public function getArchiverFacture() {
        return $this->archiverFacture;
    }

    /**
     * Get the arrondi sur p u.
     *
     * @return boolean Returns the arrondi sur p u.
     */
    public function getArrondiSurPU() {
        return $this->arrondiSurPU;
    }

    /**
     * Get the autoriser d a sans maj stock.
     *
     * @return boolean Returns the autoriser d a sans maj stock.
     */
    public function getAutoriserDASansMajStock() {
        return $this->autoriserDASansMajStock;
    }

    /**
     * Get the autoriser dep bud cha cde type.
     *
     * @return boolean Returns the autoriser dep bud cha cde type.
     */
    public function getAutoriserDepBudChaCdeType() {
        return $this->autoriserDepBudChaCdeType;
    }

    /**
     * Get the autoriser mensu tache vide.
     *
     * @return boolean Returns the autoriser mensu tache vide.
     */
    public function getAutoriserMensuTacheVide() {
        return $this->autoriserMensuTacheVide;
    }

    /**
     * Get the b l num fact.
     *
     * @return int Returns the b l num fact.
     */
    public function getBLNumFact() {
        return $this->bLNumFact;
    }

    /**
     * Get the b l prefixe.
     *
     * @return string Returns the b l prefixe.
     */
    public function getBLPrefixe() {
        return $this->bLPrefixe;
    }

    /**
     * Get the b r num fact.
     *
     * @return int Returns the b r num fact.
     */
    public function getBRNumFact() {
        return $this->bRNumFact;
    }

    /**
     * Get the b r prefixe.
     *
     * @return string Returns the b r prefixe.
     */
    public function getBRPrefixe() {
        return $this->bRPrefixe;
    }

    /**
     * Get the b s num fact.
     *
     * @return int Returns the b s num fact.
     */
    public function getBSNumFact() {
        return $this->bSNumFact;
    }

    /**
     * Get the b s prefixe.
     *
     * @return string Returns the b s prefixe.
     */
    public function getBSPrefixe() {
        return $this->bSPrefixe;
    }

    /**
     * Get the c d d mensu total heures.
     *
     * @return boolean Returns the c d d mensu total heures.
     */
    public function getCDDMensuTotalHeures() {
        return $this->cDDMensuTotalHeures;
    }

    /**
     * Get the c p sans provisions.
     *
     * @return boolean Returns the c p sans provisions.
     */
    public function getCPSansProvisions() {
        return $this->cPSansProvisions;
    }

    /**
     * Get the cde client num fact.
     *
     * @return int Returns the cde client num fact.
     */
    public function getCdeClientNumFact() {
        return $this->cdeClientNumFact;
    }

    /**
     * Get the cde client prefixe.
     *
     * @return string Returns the cde client prefixe.
     */
    public function getCdeClientPrefixe() {
        return $this->cdeClientPrefixe;
    }

    /**
     * Get the cde frn num fact.
     *
     * @return int Returns the cde frn num fact.
     */
    public function getCdeFrnNumFact() {
        return $this->cdeFrnNumFact;
    }

    /**
     * Get the cde frn prefixe.
     *
     * @return string Returns the cde frn prefixe.
     */
    public function getCdeFrnPrefixe() {
        return $this->cdeFrnPrefixe;
    }

    /**
     * Get the centralisation vente.
     *
     * @return boolean Returns the centralisation vente.
     */
    public function getCentralisationVente() {
        return $this->centralisationVente;
    }

    /**
     * Get the charge mensuelle sans tache.
     *
     * @return boolean Returns the charge mensuelle sans tache.
     */
    public function getChargeMensuelleSansTache() {
        return $this->chargeMensuelleSansTache;
    }

    /**
     * Get the chemin doss compta.
     *
     * @return string Returns the chemin doss compta.
     */
    public function getCheminDossCompta() {
        return $this->cheminDossCompta;
    }

    /**
     * Get the cle debloquer periode cloturee.
     *
     * @return string Returns the cle debloquer periode cloturee.
     */
    public function getCleDebloquerPeriodeCloturee() {
        return $this->cleDebloquerPeriodeCloturee;
    }

    /**
     * Get the code abs c p sans solde.
     *
     * @return string Returns the code abs c p sans solde.
     */
    public function getCodeAbsCPSansSolde() {
        return $this->codeAbsCPSansSolde;
    }

    /**
     * Get the code abs def j f.
     *
     * @return string Returns the code abs def j f.
     */
    public function getCodeAbsDefJF() {
        return $this->codeAbsDefJF;
    }

    /**
     * Get the code abs def j f moins3.
     *
     * @return string Returns the code abs def j f moins3.
     */
    public function getCodeAbsDefJFMoins3() {
        return $this->codeAbsDefJFMoins3;
    }

    /**
     * Get the code abs fermeture chantier.
     *
     * @return string Returns the code abs fermeture chantier.
     */
    public function getCodeAbsFermetureChantier() {
        return $this->codeAbsFermetureChantier;
    }

    /**
     * Get the code abs pointage defaut.
     *
     * @return string Returns the code abs pointage defaut.
     */
    public function getCodeAbsPointageDefaut() {
        return $this->codeAbsPointageDefaut;
    }

    /**
     * Get the code collabo valid.
     *
     * @return string Returns the code collabo valid.
     */
    public function getCodeCollaboValid() {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code depot par defaut.
     *
     * @return string Returns the code depot par defaut.
     */
    public function getCodeDepotParDefaut() {
        return $this->codeDepotParDefaut;
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
     * Get the code j a.
     *
     * @return string Returns the code j a.
     */
    public function getCodeJA() {
        return $this->codeJA;
    }

    /**
     * Get the code j v negoce.
     *
     * @return string Returns the code j v negoce.
     */
    public function getCodeJVNegoce() {
        return $this->codeJVNegoce;
    }

    /**
     * Get the code j v prestation.
     *
     * @return string Returns the code j v prestation.
     */
    public function getCodeJVPrestation() {
        return $this->codeJVPrestation;
    }

    /**
     * Get the code liv par defaut.
     *
     * @return string Returns the code liv par defaut.
     */
    public function getCodeLivParDefaut() {
        return $this->codeLivParDefaut;
    }

    /**
     * Get the code prime chantier1.
     *
     * @return string Returns the code prime chantier1.
     */
    public function getCodePrimeChantier1() {
        return $this->codePrimeChantier1;
    }

    /**
     * Get the code prime chantier2.
     *
     * @return string Returns the code prime chantier2.
     */
    public function getCodePrimeChantier2() {
        return $this->codePrimeChantier2;
    }

    /**
     * Get the code prime chantier3.
     *
     * @return string Returns the code prime chantier3.
     */
    public function getCodePrimeChantier3() {
        return $this->codePrimeChantier3;
    }

    /**
     * Get the code prime dimanche1.
     *
     * @return string Returns the code prime dimanche1.
     */
    public function getCodePrimeDimanche1() {
        return $this->codePrimeDimanche1;
    }

    /**
     * Get the code prime dimanche1 type2.
     *
     * @return string Returns the code prime dimanche1 type2.
     */
    public function getCodePrimeDimanche1Type2() {
        return $this->codePrimeDimanche1Type2;
    }

    /**
     * Get the code prime dimanche2.
     *
     * @return string Returns the code prime dimanche2.
     */
    public function getCodePrimeDimanche2() {
        return $this->codePrimeDimanche2;
    }

    /**
     * Get the code prime forfait.
     *
     * @return string Returns the code prime forfait.
     */
    public function getCodePrimeForfait() {
        return $this->codePrimeForfait;
    }

    /**
     * Get the code prime h compl.
     *
     * @return string Returns the code prime h compl.
     */
    public function getCodePrimeHCompl() {
        return $this->codePrimeHCompl;
    }

    /**
     * Get the code prime h compl2.
     *
     * @return string Returns the code prime h compl2.
     */
    public function getCodePrimeHCompl2() {
        return $this->codePrimeHCompl2;
    }

    /**
     * Get the code prime j f1.
     *
     * @return string Returns the code prime j f1.
     */
    public function getCodePrimeJF1() {
        return $this->codePrimeJF1;
    }

    /**
     * Get the code prime j f1 type2.
     *
     * @return string Returns the code prime j f1 type2.
     */
    public function getCodePrimeJF1Type2() {
        return $this->codePrimeJF1Type2;
    }

    /**
     * Get the code prime j f2.
     *
     * @return string Returns the code prime j f2.
     */
    public function getCodePrimeJF2() {
        return $this->codePrimeJF2;
    }

    /**
     * Get the code prime j f mai.
     *
     * @return string Returns the code prime j f mai.
     */
    public function getCodePrimeJFMai() {
        return $this->codePrimeJFMai;
    }

    /**
     * Get the code prime nuit1.
     *
     * @return string Returns the code prime nuit1.
     */
    public function getCodePrimeNuit1() {
        return $this->codePrimeNuit1;
    }

    /**
     * Get the code prime nuit1 type2.
     *
     * @return string Returns the code prime nuit1 type2.
     */
    public function getCodePrimeNuit1Type2() {
        return $this->codePrimeNuit1Type2;
    }

    /**
     * Get the code prime nuit2.
     *
     * @return string Returns the code prime nuit2.
     */
    public function getCodePrimeNuit2() {
        return $this->codePrimeNuit2;
    }

    /**
     * Get the code prime paniers.
     *
     * @return string Returns the code prime paniers.
     */
    public function getCodePrimePaniers() {
        return $this->codePrimePaniers;
    }

    /**
     * Get the code prime r s.
     *
     * @return string Returns the code prime r s.
     */
    public function getCodePrimeRS() {
        return $this->codePrimeRS;
    }

    /**
     * Get the code prime t p.
     *
     * @return string Returns the code prime t p.
     */
    public function getCodePrimeTP() {
        return $this->codePrimeTP;
    }

    /**
     * Get the code reg j v neg debut.
     *
     * @return string Returns the code reg j v neg debut.
     */
    public function getCodeRegJVNegDebut() {
        return $this->codeRegJVNegDebut;
    }

    /**
     * Get the code reg j v neg fin.
     *
     * @return string Returns the code reg j v neg fin.
     */
    public function getCodeRegJVNegFin() {
        return $this->codeRegJVNegFin;
    }

    /**
     * Get the code reg j v prest debut.
     *
     * @return string Returns the code reg j v prest debut.
     */
    public function getCodeRegJVPrestDebut() {
        return $this->codeRegJVPrestDebut;
    }

    /**
     * Get the code reg j v prest fin.
     *
     * @return string Returns the code reg j v prest fin.
     */
    public function getCodeRegJVPrestFin() {
        return $this->codeRegJVPrestFin;
    }

    /**
     * Get the code tache defaut.
     *
     * @return string Returns the code tache defaut.
     */
    public function getCodeTacheDefaut() {
        return $this->codeTacheDefaut;
    }

    /**
     * Get the collectif def.
     *
     * @return string Returns the collectif def.
     */
    public function getCollectifDef() {
        return $this->collectifDef;
    }

    /**
     * Get the collectif def fournisseur.
     *
     * @return string Returns the collectif def fournisseur.
     */
    public function getCollectifDefFournisseur() {
        return $this->collectifDefFournisseur;
    }

    /**
     * Get the commentaire journee solidarite.
     *
     * @return string Returns the commentaire journee solidarite.
     */
    public function getCommentaireJourneeSolidarite() {
        return $this->commentaireJourneeSolidarite;
    }

    /**
     * Get the compte collectif achat.
     *
     * @return string Returns the compte collectif achat.
     */
    public function getCompteCollectifAchat() {
        return $this->compteCollectifAchat;
    }

    /**
     * Get the compte collectif vente.
     *
     * @return string Returns the compte collectif vente.
     */
    public function getCompteCollectifVente() {
        return $this->compteCollectifVente;
    }

    /**
     * Get the compte escompte c a exonere.
     *
     * @return string Returns the compte escompte c a exonere.
     */
    public function getCompteEscompteCAExonere() {
        return $this->compteEscompteCAExonere;
    }

    /**
     * Get the compte escompte soumis t v a.
     *
     * @return string Returns the compte escompte soumis t v a.
     */
    public function getCompteEscompteSoumisTVA() {
        return $this->compteEscompteSoumisTVA;
    }

    /**
     * Get the compte tva achat.
     *
     * @return string Returns the compte tva achat.
     */
    public function getCompteTvaAchat() {
        return $this->compteTvaAchat;
    }

    /**
     * Get the compte tva taxe d e e e.
     *
     * @return string Returns the compte tva taxe d e e e.
     */
    public function getCompteTvaTaxeDEEE() {
        return $this->compteTvaTaxeDEEE;
    }

    /**
     * Get the compte tva vente.
     *
     * @return string Returns the compte tva vente.
     */
    public function getCompteTvaVente() {
        return $this->compteTvaVente;
    }

    /**
     * Get the compte ventil taxe d e e e.
     *
     * @return string Returns the compte ventil taxe d e e e.
     */
    public function getCompteVentilTaxeDEEE() {
        return $this->compteVentilTaxeDEEE;
    }

    /**
     * Get the compter samedi tf c p paie.
     *
     * @return boolean Returns the compter samedi tf c p paie.
     */
    public function getCompterSamediTfCPPaie() {
        return $this->compterSamediTfCPPaie;
    }

    /**
     * Get the controler cde frn.
     *
     * @return boolean Returns the controler cde frn.
     */
    public function getControlerCdeFrn() {
        return $this->controlerCdeFrn;
    }

    /**
     * Get the controler charges mensuelles.
     *
     * @return boolean Returns the controler charges mensuelles.
     */
    public function getControlerChargesMensuelles() {
        return $this->controlerChargesMensuelles;
    }

    /**
     * Get the controler code reg.
     *
     * @return boolean Returns the controler code reg.
     */
    public function getControlerCodeReg() {
        return $this->controlerCodeReg;
    }

    /**
     * Get the controler dep h c max.
     *
     * @return boolean Returns the controler dep h c max.
     */
    public function getControlerDepHCMax() {
        return $this->controlerDepHCMax;
    }

    /**
     * Get the controler dep h c plus mois.
     *
     * @return boolean Returns the controler dep h c plus mois.
     */
    public function getControlerDepHCPlusMois() {
        return $this->controlerDepHCPlusMois;
    }

    /**
     * Get the creer alerte paie def en paie.
     *
     * @return boolean Returns the creer alerte paie def en paie.
     */
    public function getCreerAlertePaieDefEnPaie() {
        return $this->creerAlertePaieDefEnPaie;
    }

    /**
     * Get the ctrl auto c p.
     *
     * @return boolean Returns the ctrl auto c p.
     */
    public function getCtrlAutoCP() {
        return $this->ctrlAutoCP;
    }

    /**
     * Get the ctrl auto c p avec anticipation.
     *
     * @return boolean Returns the ctrl auto c p avec anticipation.
     */
    public function getCtrlAutoCPAvecAnticipation() {
        return $this->ctrlAutoCPAvecAnticipation;
    }

    /**
     * Get the date appli gestion heures en plus.
     *
     * @return DateTime Returns the date appli gestion heures en plus.
     */
    public function getDateAppliGestionHeuresEnPlus() {
        return $this->dateAppliGestionHeuresEnPlus;
    }

    /**
     * Get the date journee solidarite.
     *
     * @return DateTime Returns the date journee solidarite.
     */
    public function getDateJourneeSolidarite() {
        return $this->dateJourneeSolidarite;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime Returns the date validation synchro.
     */
    public function getDateValidationSynchro() {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the dec mois prep fact.
     *
     * @return int Returns the dec mois prep fact.
     */
    public function getDecMoisPrepFact() {
        return $this->decMoisPrepFact;
    }

    /**
     * Get the dernier compte client.
     *
     * @return string Returns the dernier compte client.
     */
    public function getDernierCompteClient() {
        return $this->dernierCompteClient;
    }

    /**
     * Get the dernier compte frn.
     *
     * @return string Returns the dernier compte frn.
     */
    public function getDernierCompteFrn() {
        return $this->dernierCompteFrn;
    }

    /**
     * Get the discr.
     *
     * @return string Returns the discr.
     */
    public function getDiscr() {
        return $this->discr;
    }

    /**
     * Get the doss compta.
     *
     * @return string Returns the doss compta.
     */
    public function getDossCompta() {
        return $this->dossCompta;
    }

    /**
     * Get the doss paie.
     *
     * @return string Returns the doss paie.
     */
    public function getDossPaie() {
        return $this->dossPaie;
    }

    /**
     * Get the e s code abs entree.
     *
     * @return string Returns the e s code abs entree.
     */
    public function getESCodeAbsEntree() {
        return $this->eSCodeAbsEntree;
    }

    /**
     * Get the e s code abs sortie.
     *
     * @return string Returns the e s code abs sortie.
     */
    public function getESCodeAbsSortie() {
        return $this->eSCodeAbsSortie;
    }

    /**
     * Get the e s heures reelles.
     *
     * @return boolean Returns the e s heures reelles.
     */
    public function getESHeuresReelles() {
        return $this->eSHeuresReelles;
    }

    /**
     * Get the etablissements paie.
     *
     * @return string Returns the etablissements paie.
     */
    public function getEtablissementsPaie() {
        return $this->etablissementsPaie;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the euro.
     *
     * @return boolean Returns the euro.
     */
    public function getEuro() {
        return $this->euro;
    }

    /**
     * Get the facturation prorata heures.
     *
     * @return boolean Returns the facturation prorata heures.
     */
    public function getFacturationProrataHeures() {
        return $this->facturationProrataHeures;
    }

    /**
     * Get the folio j a.
     *
     * @return string Returns the folio j a.
     */
    public function getFolioJA() {
        return $this->folioJA;
    }

    /**
     * Get the folio j v negoce.
     *
     * @return string Returns the folio j v negoce.
     */
    public function getFolioJVNegoce() {
        return $this->folioJVNegoce;
    }

    /**
     * Get the folio j v prestation.
     *
     * @return string Returns the folio j v prestation.
     */
    public function getFolioJVPrestation() {
        return $this->folioJVPrestation;
    }

    /**
     * Get the gerer num cpt chantier.
     *
     * @return boolean Returns the gerer num cpt chantier.
     */
    public function getGererNumCptChantier() {
        return $this->gererNumCptChantier;
    }

    /**
     * Get the gestion h compl.
     *
     * @return boolean Returns the gestion h compl.
     */
    public function getGestionHCompl() {
        return $this->gestionHCompl;
    }

    /**
     * Get the gestion h sup mens.
     *
     * @return boolean Returns the gestion h sup mens.
     */
    public function getGestionHSupMens() {
        return $this->gestionHSupMens;
    }

    /**
     * Get the gestion h sup mensuelle.
     *
     * @return boolean Returns the gestion h sup mensuelle.
     */
    public function getGestionHSupMensuelle() {
        return $this->gestionHSupMensuelle;
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
     * Get the gestion multi depot.
     *
     * @return boolean Returns the gestion multi depot.
     */
    public function getGestionMultiDepot() {
        return $this->gestionMultiDepot;
    }

    /**
     * Get the gestion quotas.
     *
     * @return boolean Returns the gestion quotas.
     */
    public function getGestionQuotas() {
        return $this->gestionQuotas;
    }

    /**
     * Get the gestion specif j f.
     *
     * @return boolean Returns the gestion specif j f.
     */
    public function getGestionSpecifJF() {
        return $this->gestionSpecifJF;
    }

    /**
     * Get the gestion specif majo j f.
     *
     * @return boolean Returns the gestion specif majo j f.
     */
    public function getGestionSpecifMajoJF() {
        return $this->gestionSpecifMajoJF;
    }

    /**
     * Get the h deb nuit.
     *
     * @return DateTime Returns the h deb nuit.
     */
    public function getHDebNuit() {
        return $this->hDebNuit;
    }

    /**
     * Get the h deb nuit trav nuit.
     *
     * @return DateTime Returns the h deb nuit trav nuit.
     */
    public function getHDebNuitTravNuit() {
        return $this->hDebNuitTravNuit;
    }

    /**
     * Get the h fin nuit.
     *
     * @return DateTime Returns the h fin nuit.
     */
    public function getHFinNuit() {
        return $this->hFinNuit;
    }

    /**
     * Get the h fin nuit trav nuit.
     *
     * @return DateTime Returns the h fin nuit trav nuit.
     */
    public function getHFinNuitTravNuit() {
        return $this->hFinNuitTravNuit;
    }

    /**
     * Get the heures absence mensualise.
     *
     * @return boolean Returns the heures absence mensualise.
     */
    public function getHeuresAbsenceMensualise() {
        return $this->heuresAbsenceMensualise;
    }

    /**
     * Get the heures rempl egales mens titulaire.
     *
     * @return boolean Returns the heures rempl egales mens titulaire.
     */
    public function getHeuresRemplEgalesMensTitulaire() {
        return $this->heuresRemplEgalesMensTitulaire;
    }

    /**
     * Get the increment compte auto.
     *
     * @return int Returns the increment compte auto.
     */
    public function getIncrementCompteAuto() {
        return $this->incrementCompteAuto;
    }

    /**
     * Get the liaison compta win.
     *
     * @return boolean Returns the liaison compta win.
     */
    public function getLiaisonComptaWin() {
        return $this->liaisonComptaWin;
    }

    /**
     * Get the lib critere bool1.
     *
     * @return string Returns the lib critere bool1.
     */
    public function getLibCritereBool1() {
        return $this->libCritereBool1;
    }

    /**
     * Get the lib critere bool2.
     *
     * @return string Returns the lib critere bool2.
     */
    public function getLibCritereBool2() {
        return $this->libCritereBool2;
    }

    /**
     * Get the lib critere byte1.
     *
     * @return string Returns the lib critere byte1.
     */
    public function getLibCritereByte1() {
        return $this->libCritereByte1;
    }

    /**
     * Get the lib critere num1.
     *
     * @return string Returns the lib critere num1.
     */
    public function getLibCritereNum1() {
        return $this->libCritereNum1;
    }

    /**
     * Get the lib critere num2.
     *
     * @return string Returns the lib critere num2.
     */
    public function getLibCritereNum2() {
        return $this->libCritereNum2;
    }

    /**
     * Get the lib critere num3.
     *
     * @return string Returns the lib critere num3.
     */
    public function getLibCritereNum3() {
        return $this->libCritereNum3;
    }

    /**
     * Get the lib critere num4.
     *
     * @return string Returns the lib critere num4.
     */
    public function getLibCritereNum4() {
        return $this->libCritereNum4;
    }

    /**
     * Get the lib critere num5.
     *
     * @return string Returns the lib critere num5.
     */
    public function getLibCritereNum5() {
        return $this->libCritereNum5;
    }

    /**
     * Get the lib critere tab1.
     *
     * @return string Returns the lib critere tab1.
     */
    public function getLibCritereTab1() {
        return $this->libCritereTab1;
    }

    /**
     * Get the lib critere tab2.
     *
     * @return string Returns the lib critere tab2.
     */
    public function getLibCritereTab2() {
        return $this->libCritereTab2;
    }

    /**
     * Get the lib critere tab3.
     *
     * @return string Returns the lib critere tab3.
     */
    public function getLibCritereTab3() {
        return $this->libCritereTab3;
    }

    /**
     * Get the lib critere tab4.
     *
     * @return string Returns the lib critere tab4.
     */
    public function getLibCritereTab4() {
        return $this->libCritereTab4;
    }

    /**
     * Get the lib critere tab5.
     *
     * @return string Returns the lib critere tab5.
     */
    public function getLibCritereTab5() {
        return $this->libCritereTab5;
    }

    /**
     * Get the lib critere txt1.
     *
     * @return string Returns the lib critere txt1.
     */
    public function getLibCritereTxt1() {
        return $this->libCritereTxt1;
    }

    /**
     * Get the lib critere txt2.
     *
     * @return string Returns the lib critere txt2.
     */
    public function getLibCritereTxt2() {
        return $this->libCritereTxt2;
    }

    /**
     * Get the lib critere txt3.
     *
     * @return string Returns the lib critere txt3.
     */
    public function getLibCritereTxt3() {
        return $this->libCritereTxt3;
    }

    /**
     * Get the lib critere txt4.
     *
     * @return string Returns the lib critere txt4.
     */
    public function getLibCritereTxt4() {
        return $this->libCritereTxt4;
    }

    /**
     * Get the lib critere txt5.
     *
     * @return string Returns the lib critere txt5.
     */
    public function getLibCritereTxt5() {
        return $this->libCritereTxt5;
    }

    /**
     * Get the libelle auto avoir.
     *
     * @return string Returns the libelle auto avoir.
     */
    public function getLibelleAutoAvoir() {
        return $this->libelleAutoAvoir;
    }

    /**
     * Get the libelle auto facture.
     *
     * @return string Returns the libelle auto facture.
     */
    public function getLibelleAutoFacture() {
        return $this->libelleAutoFacture;
    }

    /**
     * Get the libelle heures surcroit.
     *
     * @return string Returns the libelle heures surcroit.
     */
    public function getLibelleHeuresSurcroit() {
        return $this->libelleHeuresSurcroit;
    }

    /**
     * Get the libelle transfert.
     *
     * @return string Returns the libelle transfert.
     */
    public function getLibelleTransfert() {
        return $this->libelleTransfert;
    }

    /**
     * Get the libelle transfert achat.
     *
     * @return string Returns the libelle transfert achat.
     */
    public function getLibelleTransfertAchat() {
        return $this->libelleTransfertAchat;
    }

    /**
     * Get the liv cde frn depot unique.
     *
     * @return boolean Returns the liv cde frn depot unique.
     */
    public function getLivCdeFrnDepotUnique() {
        return $this->livCdeFrnDepotUnique;
    }

    /**
     * Get the m a j dernier passage b t.
     *
     * @return boolean Returns the m a j dernier passage b t.
     */
    public function getMAJDernierPassageBT() {
        return $this->mAJDernierPassageBT;
    }

    /**
     * Get the mail attestations.
     *
     * @return string Returns the mail attestations.
     */
    public function getMailAttestations() {
        return $this->mailAttestations;
    }

    /**
     * Get the mail factures.
     *
     * @return string Returns the mail factures.
     */
    public function getMailFactures() {
        return $this->mailFactures;
    }

    /**
     * Get the maj dernier prix achat.
     *
     * @return boolean Returns the maj dernier prix achat.
     */
    public function getMajDernierPrixAchat() {
        return $this->majDernierPrixAchat;
    }

    /**
     * Get the maj p a m p.
     *
     * @return boolean Returns the maj p a m p.
     */
    public function getMajPAMP() {
        return $this->majPAMP;
    }

    /**
     * Get the majoration cascade.
     *
     * @return boolean Returns the majoration cascade.
     */
    public function getMajorationCascade() {
        return $this->majorationCascade;
    }

    /**
     * Get the majoration h plus.
     *
     * @return string Returns the majoration h plus.
     */
    public function getMajorationHPlus() {
        return $this->majorationHPlus;
    }

    /**
     * Get the marge niveau edition.
     *
     * @return string Returns the marge niveau edition.
     */
    public function getMargeNiveauEdition() {
        return $this->margeNiveauEdition;
    }

    /**
     * Get the marge pourcent charge.
     *
     * @return float Returns the marge pourcent charge.
     */
    public function getMargePourcentCharge() {
        return $this->margePourcentCharge;
    }

    /**
     * Get the marge sal insp prorata c a.
     *
     * @return boolean Returns the marge sal insp prorata c a.
     */
    public function getMargeSalInspProrataCA() {
        return $this->margeSalInspProrataCA;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return boolean Returns the mensualisation tache.
     */
    public function getMensualisationTache() {
        return $this->mensualisationTache;
    }

    /**
     * Get the mode calcul proposition cde.
     *
     * @return string Returns the mode calcul proposition cde.
     */
    public function getModeCalculPropositionCde() {
        return $this->modeCalculPropositionCde;
    }

    /**
     * Get the modele devis.
     *
     * @return string Returns the modele devis.
     */
    public function getModeleDevis() {
        return $this->modeleDevis;
    }

    /**
     * Get the modele devis tech.
     *
     * @return string Returns the modele devis tech.
     */
    public function getModeleDevisTech() {
        return $this->modeleDevisTech;
    }

    /**
     * Get the modele facture.
     *
     * @return string Returns the modele facture.
     */
    public function getModeleFacture() {
        return $this->modeleFacture;
    }

    /**
     * Get the mt cpta negatif.
     *
     * @return boolean Returns the mt cpta negatif.
     */
    public function getMtCptaNegatif() {
        return $this->mtCptaNegatif;
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
     * Get the nb caracteres ligne fact.
     *
     * @return string Returns the nb caracteres ligne fact.
     */
    public function getNbCaracteresLigneFact() {
        return $this->nbCaracteresLigneFact;
    }

    /**
     * Get the nb decimales prix unitaire.
     *
     * @return string Returns the nb decimales prix unitaire.
     */
    public function getNbDecimalesPrixUnitaire() {
        return $this->nbDecimalesPrixUnitaire;
    }

    /**
     * Get the nb decimales quantite.
     *
     * @return string Returns the nb decimales quantite.
     */
    public function getNbDecimalesQuantite() {
        return $this->nbDecimalesQuantite;
    }

    /**
     * Get the nb entiers prix unitaire.
     *
     * @return string Returns the nb entiers prix unitaire.
     */
    public function getNbEntiersPrixUnitaire() {
        return $this->nbEntiersPrixUnitaire;
    }

    /**
     * Get the nb entiers quantite.
     *
     * @return string Returns the nb entiers quantite.
     */
    public function getNbEntiersQuantite() {
        return $this->nbEntiersQuantite;
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
     * Get the nb jours abs proratisation d c p.
     *
     * @return int Returns the nb jours abs proratisation d c p.
     */
    public function getNbJoursAbsProratisationDCP() {
        return $this->nbJoursAbsProratisationDCP;
    }

    /**
     * Get the nb mois consecutifs.
     *
     * @return int Returns the nb mois consecutifs.
     */
    public function getNbMoisConsecutifs() {
        return $this->nbMoisConsecutifs;
    }

    /**
     * Get the nom fact nb lignes.
     *
     * @return string Returns the nom fact nb lignes.
     */
    public function getNomFactNbLignes() {
        return $this->nomFactNbLignes;
    }

    /**
     * Get the nom fichier ascii achat.
     *
     * @return string Returns the nom fichier ascii achat.
     */
    public function getNomFichierAsciiAchat() {
        return $this->nomFichierAsciiAchat;
    }

    /**
     * Get the nom fichier ascii vente.
     *
     * @return string Returns the nom fichier ascii vente.
     */
    public function getNomFichierAsciiVente() {
        return $this->nomFichierAsciiVente;
    }

    /**
     * Get the note0 non conforme.
     *
     * @return boolean Returns the note0 non conforme.
     */
    public function getNote0NonConforme() {
        return $this->note0NonConforme;
    }

    /**
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
    }

    /**
     * Get the num critere b t num1.
     *
     * @return string Returns the num critere b t num1.
     */
    public function getNumCritereBTNum1() {
        return $this->numCritereBTNum1;
    }

    /**
     * Get the num critere b t num2.
     *
     * @return string Returns the num critere b t num2.
     */
    public function getNumCritereBTNum2() {
        return $this->numCritereBTNum2;
    }

    /**
     * Get the num critere chantier filtre1.
     *
     * @return string Returns the num critere chantier filtre1.
     */
    public function getNumCritereChantierFiltre1() {
        return $this->numCritereChantierFiltre1;
    }

    /**
     * Get the num devis.
     *
     * @return int Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Get the num fact.
     *
     * @return int Returns the num fact.
     */
    public function getNumFact() {
        return $this->numFact;
    }

    /**
     * Get the num fact v m.
     *
     * @return int Returns the num fact v m.
     */
    public function getNumFactVM() {
        return $this->numFactVM;
    }

    /**
     * Get the numero fiche controle.
     *
     * @return int Returns the numero fiche controle.
     */
    public function getNumeroFicheControle() {
        return $this->numeroFicheControle;
    }

    /**
     * Get the p a par fournisseur.
     *
     * @return boolean Returns the p a par fournisseur.
     */
    public function getPAParFournisseur() {
        return $this->pAParFournisseur;
    }

    /**
     * Get the p j envoi mail.
     *
     * @return string Returns the p j envoi mail.
     */
    public function getPJEnvoiMail() {
        return $this->pJEnvoiMail;
    }

    /**
     * Get the p j envoi mail attestation.
     *
     * @return string Returns the p j envoi mail attestation.
     */
    public function getPJEnvoiMailAttestation() {
        return $this->pJEnvoiMailAttestation;
    }

    /**
     * Get the pas num cpt par dossier.
     *
     * @return boolean Returns the pas num cpt par dossier.
     */
    public function getPasNumCptParDossier() {
        return $this->pasNumCptParDossier;
    }

    /**
     * Get the pdf b t_ coefficient.
     *
     * @return float Returns the pdf b t_ coefficient.
     */
    public function getPdfBT_Coefficient() {
        return $this->pdfBT_Coefficient;
    }

    /**
     * Get the pdf b t_ date passage.
     *
     * @return boolean Returns the pdf b t_ date passage.
     */
    public function getPdfBT_DatePassage() {
        return $this->pdfBT_DatePassage;
    }

    /**
     * Get the pdf b t_ descriptif.
     *
     * @return boolean Returns the pdf b t_ descriptif.
     */
    public function getPdfBT_Descriptif() {
        return $this->pdfBT_Descriptif;
    }

    /**
     * Get the pdf b t_ employes corps.
     *
     * @return boolean Returns the pdf b t_ employes corps.
     */
    public function getPdfBT_EmployesCorps() {
        return $this->pdfBT_EmployesCorps;
    }

    /**
     * Get the pdf b t_ employes ref.
     *
     * @return boolean Returns the pdf b t_ employes ref.
     */
    public function getPdfBT_EmployesRef() {
        return $this->pdfBT_EmployesRef;
    }

    /**
     * Get the pdf b t_ facturer ala validation.
     *
     * @return boolean Returns the pdf b t_ facturer ala validation.
     */
    public function getPdfBT_FacturerAlaValidation() {
        return $this->pdfBT_FacturerAlaValidation;
    }

    /**
     * Get the pdf b t_ format saisie qte p u.
     *
     * @return boolean Returns the pdf b t_ format saisie qte p u.
     */
    public function getPdfBT_FormatSaisieQtePU() {
        return $this->pdfBT_FormatSaisieQtePU;
    }

    /**
     * Get the pdf b t_ libelle date.
     *
     * @return string Returns the pdf b t_ libelle date.
     */
    public function getPdfBT_LibelleDate() {
        return $this->pdfBT_LibelleDate;
    }

    /**
     * Get the pdf b t_ nom chantier.
     *
     * @return boolean Returns the pdf b t_ nom chantier.
     */
    public function getPdfBT_NomChantier() {
        return $this->pdfBT_NomChantier;
    }

    /**
     * Get the pdf b t_ periode validite.
     *
     * @return boolean Returns the pdf b t_ periode validite.
     */
    public function getPdfBT_PeriodeValidite() {
        return $this->pdfBT_PeriodeValidite;
    }

    /**
     * Get the pdf b t_ prix achat.
     *
     * @return float Returns the pdf b t_ prix achat.
     */
    public function getPdfBT_PrixAchat() {
        return $this->pdfBT_PrixAchat;
    }

    /**
     * Get the pdf b t_ reprendre libelle date.
     *
     * @return boolean Returns the pdf b t_ reprendre libelle date.
     */
    public function getPdfBT_ReprendreLibelleDate() {
        return $this->pdfBT_ReprendreLibelleDate;
    }

    /**
     * Get the pdf b t_ taux horaire.
     *
     * @return float Returns the pdf b t_ taux horaire.
     */
    public function getPdfBT_TauxHoraire() {
        return $this->pdfBT_TauxHoraire;
    }

    /**
     * Get the point b t_ employes sortis.
     *
     * @return boolean Returns the point b t_ employes sortis.
     */
    public function getPointBT_EmployesSortis() {
        return $this->pointBT_EmployesSortis;
    }

    /**
     * Get the poste1.
     *
     * @return string Returns the poste1.
     */
    public function getPoste1() {
        return $this->poste1;
    }

    /**
     * Get the poste2.
     *
     * @return string Returns the poste2.
     */
    public function getPoste2() {
        return $this->poste2;
    }

    /**
     * Get the poste3.
     *
     * @return string Returns the poste3.
     */
    public function getPoste3() {
        return $this->poste3;
    }

    /**
     * Get the poste4.
     *
     * @return string Returns the poste4.
     */
    public function getPoste4() {
        return $this->poste4;
    }

    /**
     * Get the poste5.
     *
     * @return string Returns the poste5.
     */
    public function getPoste5() {
        return $this->poste5;
    }

    /**
     * Get the pourc maj h compl.
     *
     * @return float Returns the pourc maj h compl.
     */
    public function getPourcMajHCompl() {
        return $this->pourcMajHCompl;
    }

    /**
     * Get the pourc maj h compl2.
     *
     * @return float Returns the pourc maj h compl2.
     */
    public function getPourcMajHCompl2() {
        return $this->pourcMajHCompl2;
    }

    /**
     * Get the pourcent dep h c max.
     *
     * @return float Returns the pourcent dep h c max.
     */
    public function getPourcentDepHCMax() {
        return $this->pourcentDepHCMax;
    }

    /**
     * Get the pourcent dep h c plus mois.
     *
     * @return float Returns the pourcent dep h c plus mois.
     */
    public function getPourcentDepHCPlusMois() {
        return $this->pourcentDepHCPlusMois;
    }

    /**
     * Get the pourcentage repos remplacement.
     *
     * @return float Returns the pourcentage repos remplacement.
     */
    public function getPourcentageReposRemplacement() {
        return $this->pourcentageReposRemplacement;
    }

    /**
     * Get the prefixe.
     *
     * @return string Returns the prefixe.
     */
    public function getPrefixe() {
        return $this->prefixe;
    }

    /**
     * Get the prefixe devis.
     *
     * @return string Returns the prefixe devis.
     */
    public function getPrefixeDevis() {
        return $this->prefixeDevis;
    }

    /**
     * Get the preparer chantier pret only.
     *
     * @return boolean Returns the preparer chantier pret only.
     */
    public function getPreparerChantierPretOnly() {
        return $this->preparerChantierPretOnly;
    }

    /**
     * Get the prix defaut achat.
     *
     * @return int Returns the prix defaut achat.
     */
    public function getPrixDefautAchat() {
        return $this->prixDefautAchat;
    }

    /**
     * Get the prix defaut entree directe.
     *
     * @return int Returns the prix defaut entree directe.
     */
    public function getPrixDefautEntreeDirecte() {
        return $this->prixDefautEntreeDirecte;
    }

    /**
     * Get the prix defaut inventaire.
     *
     * @return int Returns the prix defaut inventaire.
     */
    public function getPrixDefautInventaire() {
        return $this->prixDefautInventaire;
    }

    /**
     * Get the prix defaut sortie directe.
     *
     * @return int Returns the prix defaut sortie directe.
     */
    public function getPrixDefautSortieDirecte() {
        return $this->prixDefautSortieDirecte;
    }

    /**
     * Get the prix defaut vente.
     *
     * @return int Returns the prix defaut vente.
     */
    public function getPrixDefautVente() {
        return $this->prixDefautVente;
    }

    /**
     * Get the prochain numero p j.
     *
     * @return int Returns the prochain numero p j.
     */
    public function getProchainNumeroPJ() {
        return $this->prochainNumeroPJ;
    }

    /**
     * Get the prorata heures creer ligne.
     *
     * @return boolean Returns the prorata heures creer ligne.
     */
    public function getProrataHeuresCreerLigne() {
        return $this->prorataHeuresCreerLigne;
    }

    /**
     * Get the prorata heures designation moins.
     *
     * @return string Returns the prorata heures designation moins.
     */
    public function getProrataHeuresDesignationMoins() {
        return $this->prorataHeuresDesignationMoins;
    }

    /**
     * Get the prorata heures designation plus.
     *
     * @return string Returns the prorata heures designation plus.
     */
    public function getProrataHeuresDesignationPlus() {
        return $this->prorataHeuresDesignationPlus;
    }

    /**
     * Get the prorata heures option.
     *
     * @return string Returns the prorata heures option.
     */
    public function getProrataHeuresOption() {
        return $this->prorataHeuresOption;
    }

    /**
     * Get the prov c p infos emp.
     *
     * @return boolean Returns the prov c p infos emp.
     */
    public function getProvCPInfosEmp() {
        return $this->provCPInfosEmp;
    }

    /**
     * Get the provisions c p.
     *
     * @return boolean Returns the provisions c p.
     */
    public function getProvisionsCP() {
        return $this->provisionsCP;
    }

    /**
     * Get the qualite nb criteres.
     *
     * @return string Returns the qualite nb criteres.
     */
    public function getQualiteNbCriteres() {
        return $this->qualiteNbCriteres;
    }

    /**
     * Get the qualite nb notes.
     *
     * @return string Returns the qualite nb notes.
     */
    public function getQualiteNbNotes() {
        return $this->qualiteNbNotes;
    }

    /**
     * Get the qualite satisfaction generale.
     *
     * @return boolean Returns the qualite satisfaction generale.
     */
    public function getQualiteSatisfactionGenerale() {
        return $this->qualiteSatisfactionGenerale;
    }

    /**
     * Get the r t fdans fact dev.
     *
     * @return boolean Returns the r t fdans fact dev.
     */
    public function getRTFdansFactDev() {
        return $this->rTFdansFactDev;
    }

    /**
     * Get the reference mensu contrat proprete.
     *
     * @return boolean Returns the reference mensu contrat proprete.
     */
    public function getReferenceMensuContratProprete() {
        return $this->referenceMensuContratProprete;
    }

    /**
     * Get the remplacant abs j f pas auto.
     *
     * @return boolean Returns the remplacant abs j f pas auto.
     */
    public function getRemplacantAbsJFPasAuto() {
        return $this->remplacantAbsJFPasAuto;
    }

    /**
     * Get the remplacant travaille pas j f.
     *
     * @return boolean Returns the remplacant travaille pas j f.
     */
    public function getRemplacantTravaillePasJF() {
        return $this->remplacantTravaillePasJF;
    }

    /**
     * Get the remplacement h c j f.
     *
     * @return boolean Returns the remplacement h c j f.
     */
    public function getRemplacementHCJF() {
        return $this->remplacementHCJF;
    }

    /**
     * Get the repos compensateur pour travailleur nuit.
     *
     * @return boolean Returns the repos compensateur pour travailleur nuit.
     */
    public function getReposCompensateurPourTravailleurNuit() {
        return $this->reposCompensateurPourTravailleurNuit;
    }

    /**
     * Get the saisir absences sur h c.
     *
     * @return boolean Returns the saisir absences sur h c.
     */
    public function getSaisirAbsencesSurHC() {
        return $this->saisirAbsencesSurHC;
    }

    /**
     * Get the saisir code chantier achat.
     *
     * @return boolean Returns the saisir code chantier achat.
     */
    public function getSaisirCodeChantierAchat() {
        return $this->saisirCodeChantierAchat;
    }

    /**
     * Get the saisir num b t.
     *
     * @return boolean Returns the saisir num b t.
     */
    public function getSaisirNumBT() {
        return $this->saisirNumBT;
    }

    /**
     * Get the services paie.
     *
     * @return string Returns the services paie.
     */
    public function getServicesPaie() {
        return $this->servicesPaie;
    }

    /**
     * Get the seuil majo h compl.
     *
     * @return float Returns the seuil majo h compl.
     */
    public function getSeuilMajoHCompl() {
        return $this->seuilMajoHCompl;
    }

    /**
     * Get the taux escompte.
     *
     * @return float Returns the taux escompte.
     */
    public function getTauxEscompte() {
        return $this->tauxEscompte;
    }

    /**
     * Get the taux majo h c33.
     *
     * @return float Returns the taux majo h c33.
     */
    public function getTauxMajoHC33() {
        return $this->tauxMajoHC33;
    }

    /**
     * Get the taux majoration h compl.
     *
     * @return float Returns the taux majoration h compl.
     */
    public function getTauxMajorationHCompl() {
        return $this->tauxMajorationHCompl;
    }

    /**
     * Get the taux tva achat.
     *
     * @return float Returns the taux tva achat.
     */
    public function getTauxTvaAchat() {
        return $this->tauxTvaAchat;
    }

    /**
     * Get the taux tva taxe d e e e.
     *
     * @return float Returns the taux tva taxe d e e e.
     */
    public function getTauxTvaTaxeDEEE() {
        return $this->tauxTvaTaxeDEEE;
    }

    /**
     * Get the taux tva vente.
     *
     * @return float Returns the taux tva vente.
     */
    public function getTauxTvaVente() {
        return $this->tauxTvaVente;
    }

    /**
     * Get the type rempl defaut.
     *
     * @return string Returns the type rempl defaut.
     */
    public function getTypeRemplDefaut() {
        return $this->typeRemplDefaut;
    }

    /**
     * Get the type transfert vente.
     *
     * @return string Returns the type transfert vente.
     */
    public function getTypeTransfertVente() {
        return $this->typeTransfertVente;
    }

    /**
     * Get the uniq i d synchro.
     *
     * @return string Returns the uniq i d synchro.
     */
    public function getUniqIDSynchro() {
        return $this->uniqIDSynchro;
    }

    /**
     * Get the utiliser stock mini.
     *
     * @return boolean Returns the utiliser stock mini.
     */
    public function getUtiliserStockMini() {
        return $this->utiliserStockMini;
    }

    /**
     * Get the visualiser pointage b t valides.
     *
     * @return boolean Returns the visualiser pointage b t valides.
     */
    public function getVisualiserPointageBTValides() {
        return $this->visualiserPointageBTValides;
    }

    /**
     * Set the 35 heures.
     *
     * @param DateTime $_35Heures The 35 heures.
     * @return Constantes Returns this constantes.
     */
    public function set35Heures(DateTime $_35Heures = null) {
        $this->_35Heures = $_35Heures;
        return $this;
    }

    /**
     * Set the alertes paie dans pointage.
     *
     * @param boolean $alertesPaieDansPointage The alertes paie dans pointage.
     * @return Constantes Returns this constantes.
     */
    public function setAlertesPaieDansPointage($alertesPaieDansPointage) {
        $this->alertesPaieDansPointage = $alertesPaieDansPointage;
        return $this;
    }

    /**
     * Set the alertes paie dans reclam.
     *
     * @param boolean $alertesPaieDansReclam The alertes paie dans reclam.
     * @return Constantes Returns this constantes.
     */
    public function setAlertesPaieDansReclam($alertesPaieDansReclam) {
        $this->alertesPaieDansReclam = $alertesPaieDansReclam;
        return $this;
    }

    /**
     * Set the analytique nature agence.
     *
     * @param boolean $analytiqueNatureAgence The analytique nature agence.
     * @return Constantes Returns this constantes.
     */
    public function setAnalytiqueNatureAgence($analytiqueNatureAgence) {
        $this->analytiqueNatureAgence = $analytiqueNatureAgence;
        return $this;
    }

    /**
     * Set the analytique par chantier.
     *
     * @param boolean $analytiqueParChantier The analytique par chantier.
     * @return Constantes Returns this constantes.
     */
    public function setAnalytiqueParChantier($analytiqueParChantier) {
        $this->analytiqueParChantier = $analytiqueParChantier;
        return $this;
    }

    /**
     * Set the archiver devis.
     *
     * @param boolean $archiverDevis The archiver devis.
     * @return Constantes Returns this constantes.
     */
    public function setArchiverDevis($archiverDevis) {
        $this->archiverDevis = $archiverDevis;
        return $this;
    }

    /**
     * Set the archiver facture.
     *
     * @param boolean $archiverFacture The archiver facture.
     * @return Constantes Returns this constantes.
     */
    public function setArchiverFacture($archiverFacture) {
        $this->archiverFacture = $archiverFacture;
        return $this;
    }

    /**
     * Set the arrondi sur p u.
     *
     * @param boolean $arrondiSurPU The arrondi sur p u.
     * @return Constantes Returns this constantes.
     */
    public function setArrondiSurPU($arrondiSurPU) {
        $this->arrondiSurPU = $arrondiSurPU;
        return $this;
    }

    /**
     * Set the autoriser d a sans maj stock.
     *
     * @param boolean $autoriserDASansMajStock The autoriser d a sans maj stock.
     * @return Constantes Returns this constantes.
     */
    public function setAutoriserDASansMajStock($autoriserDASansMajStock) {
        $this->autoriserDASansMajStock = $autoriserDASansMajStock;
        return $this;
    }

    /**
     * Set the autoriser dep bud cha cde type.
     *
     * @param boolean $autoriserDepBudChaCdeType The autoriser dep bud cha cde type.
     * @return Constantes Returns this constantes.
     */
    public function setAutoriserDepBudChaCdeType($autoriserDepBudChaCdeType) {
        $this->autoriserDepBudChaCdeType = $autoriserDepBudChaCdeType;
        return $this;
    }

    /**
     * Set the autoriser mensu tache vide.
     *
     * @param boolean $autoriserMensuTacheVide The autoriser mensu tache vide.
     * @return Constantes Returns this constantes.
     */
    public function setAutoriserMensuTacheVide($autoriserMensuTacheVide) {
        $this->autoriserMensuTacheVide = $autoriserMensuTacheVide;
        return $this;
    }

    /**
     * Set the b l num fact.
     *
     * @param int $bLNumFact The b l num fact.
     * @return Constantes Returns this constantes.
     */
    public function setBLNumFact($bLNumFact) {
        $this->bLNumFact = $bLNumFact;
        return $this;
    }

    /**
     * Set the b l prefixe.
     *
     * @param string $bLPrefixe The b l prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setBLPrefixe($bLPrefixe) {
        $this->bLPrefixe = $bLPrefixe;
        return $this;
    }

    /**
     * Set the b r num fact.
     *
     * @param int $bRNumFact The b r num fact.
     * @return Constantes Returns this constantes.
     */
    public function setBRNumFact($bRNumFact) {
        $this->bRNumFact = $bRNumFact;
        return $this;
    }

    /**
     * Set the b r prefixe.
     *
     * @param string $bRPrefixe The b r prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setBRPrefixe($bRPrefixe) {
        $this->bRPrefixe = $bRPrefixe;
        return $this;
    }

    /**
     * Set the b s num fact.
     *
     * @param int $bSNumFact The b s num fact.
     * @return Constantes Returns this constantes.
     */
    public function setBSNumFact($bSNumFact) {
        $this->bSNumFact = $bSNumFact;
        return $this;
    }

    /**
     * Set the b s prefixe.
     *
     * @param string $bSPrefixe The b s prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setBSPrefixe($bSPrefixe) {
        $this->bSPrefixe = $bSPrefixe;
        return $this;
    }

    /**
     * Set the c d d mensu total heures.
     *
     * @param boolean $cDDMensuTotalHeures The c d d mensu total heures.
     * @return Constantes Returns this constantes.
     */
    public function setCDDMensuTotalHeures($cDDMensuTotalHeures) {
        $this->cDDMensuTotalHeures = $cDDMensuTotalHeures;
        return $this;
    }

    /**
     * Set the c p sans provisions.
     *
     * @param boolean $cPSansProvisions The c p sans provisions.
     * @return Constantes Returns this constantes.
     */
    public function setCPSansProvisions($cPSansProvisions) {
        $this->cPSansProvisions = $cPSansProvisions;
        return $this;
    }

    /**
     * Set the cde client num fact.
     *
     * @param int $cdeClientNumFact The cde client num fact.
     * @return Constantes Returns this constantes.
     */
    public function setCdeClientNumFact($cdeClientNumFact) {
        $this->cdeClientNumFact = $cdeClientNumFact;
        return $this;
    }

    /**
     * Set the cde client prefixe.
     *
     * @param string $cdeClientPrefixe The cde client prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setCdeClientPrefixe($cdeClientPrefixe) {
        $this->cdeClientPrefixe = $cdeClientPrefixe;
        return $this;
    }

    /**
     * Set the cde frn num fact.
     *
     * @param int $cdeFrnNumFact The cde frn num fact.
     * @return Constantes Returns this constantes.
     */
    public function setCdeFrnNumFact($cdeFrnNumFact) {
        $this->cdeFrnNumFact = $cdeFrnNumFact;
        return $this;
    }

    /**
     * Set the cde frn prefixe.
     *
     * @param string $cdeFrnPrefixe The cde frn prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setCdeFrnPrefixe($cdeFrnPrefixe) {
        $this->cdeFrnPrefixe = $cdeFrnPrefixe;
        return $this;
    }

    /**
     * Set the centralisation vente.
     *
     * @param boolean $centralisationVente The centralisation vente.
     * @return Constantes Returns this constantes.
     */
    public function setCentralisationVente($centralisationVente) {
        $this->centralisationVente = $centralisationVente;
        return $this;
    }

    /**
     * Set the charge mensuelle sans tache.
     *
     * @param boolean $chargeMensuelleSansTache The charge mensuelle sans tache.
     * @return Constantes Returns this constantes.
     */
    public function setChargeMensuelleSansTache($chargeMensuelleSansTache) {
        $this->chargeMensuelleSansTache = $chargeMensuelleSansTache;
        return $this;
    }

    /**
     * Set the chemin doss compta.
     *
     * @param string $cheminDossCompta The chemin doss compta.
     * @return Constantes Returns this constantes.
     */
    public function setCheminDossCompta($cheminDossCompta) {
        $this->cheminDossCompta = $cheminDossCompta;
        return $this;
    }

    /**
     * Set the cle debloquer periode cloturee.
     *
     * @param string $cleDebloquerPeriodeCloturee The cle debloquer periode cloturee.
     * @return Constantes Returns this constantes.
     */
    public function setCleDebloquerPeriodeCloturee($cleDebloquerPeriodeCloturee) {
        $this->cleDebloquerPeriodeCloturee = $cleDebloquerPeriodeCloturee;
        return $this;
    }

    /**
     * Set the code abs c p sans solde.
     *
     * @param string $codeAbsCPSansSolde The code abs c p sans solde.
     * @return Constantes Returns this constantes.
     */
    public function setCodeAbsCPSansSolde($codeAbsCPSansSolde) {
        $this->codeAbsCPSansSolde = $codeAbsCPSansSolde;
        return $this;
    }

    /**
     * Set the code abs def j f.
     *
     * @param string $codeAbsDefJF The code abs def j f.
     * @return Constantes Returns this constantes.
     */
    public function setCodeAbsDefJF($codeAbsDefJF) {
        $this->codeAbsDefJF = $codeAbsDefJF;
        return $this;
    }

    /**
     * Set the code abs def j f moins3.
     *
     * @param string $codeAbsDefJFMoins3 The code abs def j f moins3.
     * @return Constantes Returns this constantes.
     */
    public function setCodeAbsDefJFMoins3($codeAbsDefJFMoins3) {
        $this->codeAbsDefJFMoins3 = $codeAbsDefJFMoins3;
        return $this;
    }

    /**
     * Set the code abs fermeture chantier.
     *
     * @param string $codeAbsFermetureChantier The code abs fermeture chantier.
     * @return Constantes Returns this constantes.
     */
    public function setCodeAbsFermetureChantier($codeAbsFermetureChantier) {
        $this->codeAbsFermetureChantier = $codeAbsFermetureChantier;
        return $this;
    }

    /**
     * Set the code abs pointage defaut.
     *
     * @param string $codeAbsPointageDefaut The code abs pointage defaut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeAbsPointageDefaut($codeAbsPointageDefaut) {
        $this->codeAbsPointageDefaut = $codeAbsPointageDefaut;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return Constantes Returns this constantes.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return Constantes Returns this constantes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot par defaut.
     *
     * @param string $codeDepotParDefaut The code depot par defaut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeDepotParDefaut($codeDepotParDefaut) {
        $this->codeDepotParDefaut = $codeDepotParDefaut;
        return $this;
    }

    /**
     * Set the code i c s.
     *
     * @param string $codeICS The code i c s.
     * @return Constantes Returns this constantes.
     */
    public function setCodeICS($codeICS) {
        $this->codeICS = $codeICS;
        return $this;
    }

    /**
     * Set the code j a.
     *
     * @param string $codeJA The code j a.
     * @return Constantes Returns this constantes.
     */
    public function setCodeJA($codeJA) {
        $this->codeJA = $codeJA;
        return $this;
    }

    /**
     * Set the code j v negoce.
     *
     * @param string $codeJVNegoce The code j v negoce.
     * @return Constantes Returns this constantes.
     */
    public function setCodeJVNegoce($codeJVNegoce) {
        $this->codeJVNegoce = $codeJVNegoce;
        return $this;
    }

    /**
     * Set the code j v prestation.
     *
     * @param string $codeJVPrestation The code j v prestation.
     * @return Constantes Returns this constantes.
     */
    public function setCodeJVPrestation($codeJVPrestation) {
        $this->codeJVPrestation = $codeJVPrestation;
        return $this;
    }

    /**
     * Set the code liv par defaut.
     *
     * @param string $codeLivParDefaut The code liv par defaut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeLivParDefaut($codeLivParDefaut) {
        $this->codeLivParDefaut = $codeLivParDefaut;
        return $this;
    }

    /**
     * Set the code prime chantier1.
     *
     * @param string $codePrimeChantier1 The code prime chantier1.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeChantier1($codePrimeChantier1) {
        $this->codePrimeChantier1 = $codePrimeChantier1;
        return $this;
    }

    /**
     * Set the code prime chantier2.
     *
     * @param string $codePrimeChantier2 The code prime chantier2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeChantier2($codePrimeChantier2) {
        $this->codePrimeChantier2 = $codePrimeChantier2;
        return $this;
    }

    /**
     * Set the code prime chantier3.
     *
     * @param string $codePrimeChantier3 The code prime chantier3.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeChantier3($codePrimeChantier3) {
        $this->codePrimeChantier3 = $codePrimeChantier3;
        return $this;
    }

    /**
     * Set the code prime dimanche1.
     *
     * @param string $codePrimeDimanche1 The code prime dimanche1.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeDimanche1($codePrimeDimanche1) {
        $this->codePrimeDimanche1 = $codePrimeDimanche1;
        return $this;
    }

    /**
     * Set the code prime dimanche1 type2.
     *
     * @param string $codePrimeDimanche1Type2 The code prime dimanche1 type2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeDimanche1Type2($codePrimeDimanche1Type2) {
        $this->codePrimeDimanche1Type2 = $codePrimeDimanche1Type2;
        return $this;
    }

    /**
     * Set the code prime dimanche2.
     *
     * @param string $codePrimeDimanche2 The code prime dimanche2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeDimanche2($codePrimeDimanche2) {
        $this->codePrimeDimanche2 = $codePrimeDimanche2;
        return $this;
    }

    /**
     * Set the code prime forfait.
     *
     * @param string $codePrimeForfait The code prime forfait.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeForfait($codePrimeForfait) {
        $this->codePrimeForfait = $codePrimeForfait;
        return $this;
    }

    /**
     * Set the code prime h compl.
     *
     * @param string $codePrimeHCompl The code prime h compl.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeHCompl($codePrimeHCompl) {
        $this->codePrimeHCompl = $codePrimeHCompl;
        return $this;
    }

    /**
     * Set the code prime h compl2.
     *
     * @param string $codePrimeHCompl2 The code prime h compl2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeHCompl2($codePrimeHCompl2) {
        $this->codePrimeHCompl2 = $codePrimeHCompl2;
        return $this;
    }

    /**
     * Set the code prime j f1.
     *
     * @param string $codePrimeJF1 The code prime j f1.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeJF1($codePrimeJF1) {
        $this->codePrimeJF1 = $codePrimeJF1;
        return $this;
    }

    /**
     * Set the code prime j f1 type2.
     *
     * @param string $codePrimeJF1Type2 The code prime j f1 type2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeJF1Type2($codePrimeJF1Type2) {
        $this->codePrimeJF1Type2 = $codePrimeJF1Type2;
        return $this;
    }

    /**
     * Set the code prime j f2.
     *
     * @param string $codePrimeJF2 The code prime j f2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeJF2($codePrimeJF2) {
        $this->codePrimeJF2 = $codePrimeJF2;
        return $this;
    }

    /**
     * Set the code prime j f mai.
     *
     * @param string $codePrimeJFMai The code prime j f mai.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeJFMai($codePrimeJFMai) {
        $this->codePrimeJFMai = $codePrimeJFMai;
        return $this;
    }

    /**
     * Set the code prime nuit1.
     *
     * @param string $codePrimeNuit1 The code prime nuit1.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeNuit1($codePrimeNuit1) {
        $this->codePrimeNuit1 = $codePrimeNuit1;
        return $this;
    }

    /**
     * Set the code prime nuit1 type2.
     *
     * @param string $codePrimeNuit1Type2 The code prime nuit1 type2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeNuit1Type2($codePrimeNuit1Type2) {
        $this->codePrimeNuit1Type2 = $codePrimeNuit1Type2;
        return $this;
    }

    /**
     * Set the code prime nuit2.
     *
     * @param string $codePrimeNuit2 The code prime nuit2.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeNuit2($codePrimeNuit2) {
        $this->codePrimeNuit2 = $codePrimeNuit2;
        return $this;
    }

    /**
     * Set the code prime paniers.
     *
     * @param string $codePrimePaniers The code prime paniers.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimePaniers($codePrimePaniers) {
        $this->codePrimePaniers = $codePrimePaniers;
        return $this;
    }

    /**
     * Set the code prime r s.
     *
     * @param string $codePrimeRS The code prime r s.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeRS($codePrimeRS) {
        $this->codePrimeRS = $codePrimeRS;
        return $this;
    }

    /**
     * Set the code prime t p.
     *
     * @param string $codePrimeTP The code prime t p.
     * @return Constantes Returns this constantes.
     */
    public function setCodePrimeTP($codePrimeTP) {
        $this->codePrimeTP = $codePrimeTP;
        return $this;
    }

    /**
     * Set the code reg j v neg debut.
     *
     * @param string $codeRegJVNegDebut The code reg j v neg debut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeRegJVNegDebut($codeRegJVNegDebut) {
        $this->codeRegJVNegDebut = $codeRegJVNegDebut;
        return $this;
    }

    /**
     * Set the code reg j v neg fin.
     *
     * @param string $codeRegJVNegFin The code reg j v neg fin.
     * @return Constantes Returns this constantes.
     */
    public function setCodeRegJVNegFin($codeRegJVNegFin) {
        $this->codeRegJVNegFin = $codeRegJVNegFin;
        return $this;
    }

    /**
     * Set the code reg j v prest debut.
     *
     * @param string $codeRegJVPrestDebut The code reg j v prest debut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeRegJVPrestDebut($codeRegJVPrestDebut) {
        $this->codeRegJVPrestDebut = $codeRegJVPrestDebut;
        return $this;
    }

    /**
     * Set the code reg j v prest fin.
     *
     * @param string $codeRegJVPrestFin The code reg j v prest fin.
     * @return Constantes Returns this constantes.
     */
    public function setCodeRegJVPrestFin($codeRegJVPrestFin) {
        $this->codeRegJVPrestFin = $codeRegJVPrestFin;
        return $this;
    }

    /**
     * Set the code tache defaut.
     *
     * @param string $codeTacheDefaut The code tache defaut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeTacheDefaut($codeTacheDefaut) {
        $this->codeTacheDefaut = $codeTacheDefaut;
        return $this;
    }

    /**
     * Set the collectif def.
     *
     * @param string $collectifDef The collectif def.
     * @return Constantes Returns this constantes.
     */
    public function setCollectifDef($collectifDef) {
        $this->collectifDef = $collectifDef;
        return $this;
    }

    /**
     * Set the collectif def fournisseur.
     *
     * @param string $collectifDefFournisseur The collectif def fournisseur.
     * @return Constantes Returns this constantes.
     */
    public function setCollectifDefFournisseur($collectifDefFournisseur) {
        $this->collectifDefFournisseur = $collectifDefFournisseur;
        return $this;
    }

    /**
     * Set the commentaire journee solidarite.
     *
     * @param string $commentaireJourneeSolidarite The commentaire journee solidarite.
     * @return Constantes Returns this constantes.
     */
    public function setCommentaireJourneeSolidarite($commentaireJourneeSolidarite) {
        $this->commentaireJourneeSolidarite = $commentaireJourneeSolidarite;
        return $this;
    }

    /**
     * Set the compte collectif achat.
     *
     * @param string $compteCollectifAchat The compte collectif achat.
     * @return Constantes Returns this constantes.
     */
    public function setCompteCollectifAchat($compteCollectifAchat) {
        $this->compteCollectifAchat = $compteCollectifAchat;
        return $this;
    }

    /**
     * Set the compte collectif vente.
     *
     * @param string $compteCollectifVente The compte collectif vente.
     * @return Constantes Returns this constantes.
     */
    public function setCompteCollectifVente($compteCollectifVente) {
        $this->compteCollectifVente = $compteCollectifVente;
        return $this;
    }

    /**
     * Set the compte escompte c a exonere.
     *
     * @param string $compteEscompteCAExonere The compte escompte c a exonere.
     * @return Constantes Returns this constantes.
     */
    public function setCompteEscompteCAExonere($compteEscompteCAExonere) {
        $this->compteEscompteCAExonere = $compteEscompteCAExonere;
        return $this;
    }

    /**
     * Set the compte escompte soumis t v a.
     *
     * @param string $compteEscompteSoumisTVA The compte escompte soumis t v a.
     * @return Constantes Returns this constantes.
     */
    public function setCompteEscompteSoumisTVA($compteEscompteSoumisTVA) {
        $this->compteEscompteSoumisTVA = $compteEscompteSoumisTVA;
        return $this;
    }

    /**
     * Set the compte tva achat.
     *
     * @param string $compteTvaAchat The compte tva achat.
     * @return Constantes Returns this constantes.
     */
    public function setCompteTvaAchat($compteTvaAchat) {
        $this->compteTvaAchat = $compteTvaAchat;
        return $this;
    }

    /**
     * Set the compte tva taxe d e e e.
     *
     * @param string $compteTvaTaxeDEEE The compte tva taxe d e e e.
     * @return Constantes Returns this constantes.
     */
    public function setCompteTvaTaxeDEEE($compteTvaTaxeDEEE) {
        $this->compteTvaTaxeDEEE = $compteTvaTaxeDEEE;
        return $this;
    }

    /**
     * Set the compte tva vente.
     *
     * @param string $compteTvaVente The compte tva vente.
     * @return Constantes Returns this constantes.
     */
    public function setCompteTvaVente($compteTvaVente) {
        $this->compteTvaVente = $compteTvaVente;
        return $this;
    }

    /**
     * Set the compte ventil taxe d e e e.
     *
     * @param string $compteVentilTaxeDEEE The compte ventil taxe d e e e.
     * @return Constantes Returns this constantes.
     */
    public function setCompteVentilTaxeDEEE($compteVentilTaxeDEEE) {
        $this->compteVentilTaxeDEEE = $compteVentilTaxeDEEE;
        return $this;
    }

    /**
     * Set the compter samedi tf c p paie.
     *
     * @param boolean $compterSamediTfCPPaie The compter samedi tf c p paie.
     * @return Constantes Returns this constantes.
     */
    public function setCompterSamediTfCPPaie($compterSamediTfCPPaie) {
        $this->compterSamediTfCPPaie = $compterSamediTfCPPaie;
        return $this;
    }

    /**
     * Set the controler cde frn.
     *
     * @param boolean $controlerCdeFrn The controler cde frn.
     * @return Constantes Returns this constantes.
     */
    public function setControlerCdeFrn($controlerCdeFrn) {
        $this->controlerCdeFrn = $controlerCdeFrn;
        return $this;
    }

    /**
     * Set the controler charges mensuelles.
     *
     * @param boolean $controlerChargesMensuelles The controler charges mensuelles.
     * @return Constantes Returns this constantes.
     */
    public function setControlerChargesMensuelles($controlerChargesMensuelles) {
        $this->controlerChargesMensuelles = $controlerChargesMensuelles;
        return $this;
    }

    /**
     * Set the controler code reg.
     *
     * @param boolean $controlerCodeReg The controler code reg.
     * @return Constantes Returns this constantes.
     */
    public function setControlerCodeReg($controlerCodeReg) {
        $this->controlerCodeReg = $controlerCodeReg;
        return $this;
    }

    /**
     * Set the controler dep h c max.
     *
     * @param boolean $controlerDepHCMax The controler dep h c max.
     * @return Constantes Returns this constantes.
     */
    public function setControlerDepHCMax($controlerDepHCMax) {
        $this->controlerDepHCMax = $controlerDepHCMax;
        return $this;
    }

    /**
     * Set the controler dep h c plus mois.
     *
     * @param boolean $controlerDepHCPlusMois The controler dep h c plus mois.
     * @return Constantes Returns this constantes.
     */
    public function setControlerDepHCPlusMois($controlerDepHCPlusMois) {
        $this->controlerDepHCPlusMois = $controlerDepHCPlusMois;
        return $this;
    }

    /**
     * Set the creer alerte paie def en paie.
     *
     * @param boolean $creerAlertePaieDefEnPaie The creer alerte paie def en paie.
     * @return Constantes Returns this constantes.
     */
    public function setCreerAlertePaieDefEnPaie($creerAlertePaieDefEnPaie) {
        $this->creerAlertePaieDefEnPaie = $creerAlertePaieDefEnPaie;
        return $this;
    }

    /**
     * Set the ctrl auto c p.
     *
     * @param boolean $ctrlAutoCP The ctrl auto c p.
     * @return Constantes Returns this constantes.
     */
    public function setCtrlAutoCP($ctrlAutoCP) {
        $this->ctrlAutoCP = $ctrlAutoCP;
        return $this;
    }

    /**
     * Set the ctrl auto c p avec anticipation.
     *
     * @param boolean $ctrlAutoCPAvecAnticipation The ctrl auto c p avec anticipation.
     * @return Constantes Returns this constantes.
     */
    public function setCtrlAutoCPAvecAnticipation($ctrlAutoCPAvecAnticipation) {
        $this->ctrlAutoCPAvecAnticipation = $ctrlAutoCPAvecAnticipation;
        return $this;
    }

    /**
     * Set the date appli gestion heures en plus.
     *
     * @param DateTime $dateAppliGestionHeuresEnPlus The date appli gestion heures en plus.
     * @return Constantes Returns this constantes.
     */
    public function setDateAppliGestionHeuresEnPlus(DateTime $dateAppliGestionHeuresEnPlus = null) {
        $this->dateAppliGestionHeuresEnPlus = $dateAppliGestionHeuresEnPlus;
        return $this;
    }

    /**
     * Set the date journee solidarite.
     *
     * @param DateTime $dateJourneeSolidarite The date journee solidarite.
     * @return Constantes Returns this constantes.
     */
    public function setDateJourneeSolidarite(DateTime $dateJourneeSolidarite = null) {
        $this->dateJourneeSolidarite = $dateJourneeSolidarite;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return Constantes Returns this constantes.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dec mois prep fact.
     *
     * @param int $decMoisPrepFact The dec mois prep fact.
     * @return Constantes Returns this constantes.
     */
    public function setDecMoisPrepFact($decMoisPrepFact) {
        $this->decMoisPrepFact = $decMoisPrepFact;
        return $this;
    }

    /**
     * Set the dernier compte client.
     *
     * @param string $dernierCompteClient The dernier compte client.
     * @return Constantes Returns this constantes.
     */
    public function setDernierCompteClient($dernierCompteClient) {
        $this->dernierCompteClient = $dernierCompteClient;
        return $this;
    }

    /**
     * Set the dernier compte frn.
     *
     * @param string $dernierCompteFrn The dernier compte frn.
     * @return Constantes Returns this constantes.
     */
    public function setDernierCompteFrn($dernierCompteFrn) {
        $this->dernierCompteFrn = $dernierCompteFrn;
        return $this;
    }

    /**
     * Set the discr.
     *
     * @param string $discr The discr.
     * @return Constantes Returns this constantes.
     */
    public function setDiscr($discr) {
        $this->discr = $discr;
        return $this;
    }

    /**
     * Set the doss compta.
     *
     * @param string $dossCompta The doss compta.
     * @return Constantes Returns this constantes.
     */
    public function setDossCompta($dossCompta) {
        $this->dossCompta = $dossCompta;
        return $this;
    }

    /**
     * Set the doss paie.
     *
     * @param string $dossPaie The doss paie.
     * @return Constantes Returns this constantes.
     */
    public function setDossPaie($dossPaie) {
        $this->dossPaie = $dossPaie;
        return $this;
    }

    /**
     * Set the e s code abs entree.
     *
     * @param string $eSCodeAbsEntree The e s code abs entree.
     * @return Constantes Returns this constantes.
     */
    public function setESCodeAbsEntree($eSCodeAbsEntree) {
        $this->eSCodeAbsEntree = $eSCodeAbsEntree;
        return $this;
    }

    /**
     * Set the e s code abs sortie.
     *
     * @param string $eSCodeAbsSortie The e s code abs sortie.
     * @return Constantes Returns this constantes.
     */
    public function setESCodeAbsSortie($eSCodeAbsSortie) {
        $this->eSCodeAbsSortie = $eSCodeAbsSortie;
        return $this;
    }

    /**
     * Set the e s heures reelles.
     *
     * @param boolean $eSHeuresReelles The e s heures reelles.
     * @return Constantes Returns this constantes.
     */
    public function setESHeuresReelles($eSHeuresReelles) {
        $this->eSHeuresReelles = $eSHeuresReelles;
        return $this;
    }

    /**
     * Set the etablissements paie.
     *
     * @param string $etablissementsPaie The etablissements paie.
     * @return Constantes Returns this constantes.
     */
    public function setEtablissementsPaie($etablissementsPaie) {
        $this->etablissementsPaie = $etablissementsPaie;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return Constantes Returns this constantes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param boolean $euro The euro.
     * @return Constantes Returns this constantes.
     */
    public function setEuro($euro) {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the facturation prorata heures.
     *
     * @param boolean $facturationProrataHeures The facturation prorata heures.
     * @return Constantes Returns this constantes.
     */
    public function setFacturationProrataHeures($facturationProrataHeures) {
        $this->facturationProrataHeures = $facturationProrataHeures;
        return $this;
    }

    /**
     * Set the folio j a.
     *
     * @param string $folioJA The folio j a.
     * @return Constantes Returns this constantes.
     */
    public function setFolioJA($folioJA) {
        $this->folioJA = $folioJA;
        return $this;
    }

    /**
     * Set the folio j v negoce.
     *
     * @param string $folioJVNegoce The folio j v negoce.
     * @return Constantes Returns this constantes.
     */
    public function setFolioJVNegoce($folioJVNegoce) {
        $this->folioJVNegoce = $folioJVNegoce;
        return $this;
    }

    /**
     * Set the folio j v prestation.
     *
     * @param string $folioJVPrestation The folio j v prestation.
     * @return Constantes Returns this constantes.
     */
    public function setFolioJVPrestation($folioJVPrestation) {
        $this->folioJVPrestation = $folioJVPrestation;
        return $this;
    }

    /**
     * Set the gerer num cpt chantier.
     *
     * @param boolean $gererNumCptChantier The gerer num cpt chantier.
     * @return Constantes Returns this constantes.
     */
    public function setGererNumCptChantier($gererNumCptChantier) {
        $this->gererNumCptChantier = $gererNumCptChantier;
        return $this;
    }

    /**
     * Set the gestion h compl.
     *
     * @param boolean $gestionHCompl The gestion h compl.
     * @return Constantes Returns this constantes.
     */
    public function setGestionHCompl($gestionHCompl) {
        $this->gestionHCompl = $gestionHCompl;
        return $this;
    }

    /**
     * Set the gestion h sup mens.
     *
     * @param boolean $gestionHSupMens The gestion h sup mens.
     * @return Constantes Returns this constantes.
     */
    public function setGestionHSupMens($gestionHSupMens) {
        $this->gestionHSupMens = $gestionHSupMens;
        return $this;
    }

    /**
     * Set the gestion h sup mensuelle.
     *
     * @param boolean $gestionHSupMensuelle The gestion h sup mensuelle.
     * @return Constantes Returns this constantes.
     */
    public function setGestionHSupMensuelle($gestionHSupMensuelle) {
        $this->gestionHSupMensuelle = $gestionHSupMensuelle;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string $gestionMajDim The gestion maj dim.
     * @return Constantes Returns this constantes.
     */
    public function setGestionMajDim($gestionMajDim) {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj j f.
     *
     * @param string $gestionMajJF The gestion maj j f.
     * @return Constantes Returns this constantes.
     */
    public function setGestionMajJF($gestionMajJF) {
        $this->gestionMajJF = $gestionMajJF;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string $gestionMajNuit The gestion maj nuit.
     * @return Constantes Returns this constantes.
     */
    public function setGestionMajNuit($gestionMajNuit) {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the gestion multi depot.
     *
     * @param boolean $gestionMultiDepot The gestion multi depot.
     * @return Constantes Returns this constantes.
     */
    public function setGestionMultiDepot($gestionMultiDepot) {
        $this->gestionMultiDepot = $gestionMultiDepot;
        return $this;
    }

    /**
     * Set the gestion quotas.
     *
     * @param boolean $gestionQuotas The gestion quotas.
     * @return Constantes Returns this constantes.
     */
    public function setGestionQuotas($gestionQuotas) {
        $this->gestionQuotas = $gestionQuotas;
        return $this;
    }

    /**
     * Set the gestion specif j f.
     *
     * @param boolean $gestionSpecifJF The gestion specif j f.
     * @return Constantes Returns this constantes.
     */
    public function setGestionSpecifJF($gestionSpecifJF) {
        $this->gestionSpecifJF = $gestionSpecifJF;
        return $this;
    }

    /**
     * Set the gestion specif majo j f.
     *
     * @param boolean $gestionSpecifMajoJF The gestion specif majo j f.
     * @return Constantes Returns this constantes.
     */
    public function setGestionSpecifMajoJF($gestionSpecifMajoJF) {
        $this->gestionSpecifMajoJF = $gestionSpecifMajoJF;
        return $this;
    }

    /**
     * Set the h deb nuit.
     *
     * @param DateTime $hDebNuit The h deb nuit.
     * @return Constantes Returns this constantes.
     */
    public function setHDebNuit(DateTime $hDebNuit = null) {
        $this->hDebNuit = $hDebNuit;
        return $this;
    }

    /**
     * Set the h deb nuit trav nuit.
     *
     * @param DateTime $hDebNuitTravNuit The h deb nuit trav nuit.
     * @return Constantes Returns this constantes.
     */
    public function setHDebNuitTravNuit(DateTime $hDebNuitTravNuit = null) {
        $this->hDebNuitTravNuit = $hDebNuitTravNuit;
        return $this;
    }

    /**
     * Set the h fin nuit.
     *
     * @param DateTime $hFinNuit The h fin nuit.
     * @return Constantes Returns this constantes.
     */
    public function setHFinNuit(DateTime $hFinNuit = null) {
        $this->hFinNuit = $hFinNuit;
        return $this;
    }

    /**
     * Set the h fin nuit trav nuit.
     *
     * @param DateTime $hFinNuitTravNuit The h fin nuit trav nuit.
     * @return Constantes Returns this constantes.
     */
    public function setHFinNuitTravNuit(DateTime $hFinNuitTravNuit = null) {
        $this->hFinNuitTravNuit = $hFinNuitTravNuit;
        return $this;
    }

    /**
     * Set the heures absence mensualise.
     *
     * @param boolean $heuresAbsenceMensualise The heures absence mensualise.
     * @return Constantes Returns this constantes.
     */
    public function setHeuresAbsenceMensualise($heuresAbsenceMensualise) {
        $this->heuresAbsenceMensualise = $heuresAbsenceMensualise;
        return $this;
    }

    /**
     * Set the heures rempl egales mens titulaire.
     *
     * @param boolean $heuresRemplEgalesMensTitulaire The heures rempl egales mens titulaire.
     * @return Constantes Returns this constantes.
     */
    public function setHeuresRemplEgalesMensTitulaire($heuresRemplEgalesMensTitulaire) {
        $this->heuresRemplEgalesMensTitulaire = $heuresRemplEgalesMensTitulaire;
        return $this;
    }

    /**
     * Set the increment compte auto.
     *
     * @param int $incrementCompteAuto The increment compte auto.
     * @return Constantes Returns this constantes.
     */
    public function setIncrementCompteAuto($incrementCompteAuto) {
        $this->incrementCompteAuto = $incrementCompteAuto;
        return $this;
    }

    /**
     * Set the liaison compta win.
     *
     * @param boolean $liaisonComptaWin The liaison compta win.
     * @return Constantes Returns this constantes.
     */
    public function setLiaisonComptaWin($liaisonComptaWin) {
        $this->liaisonComptaWin = $liaisonComptaWin;
        return $this;
    }

    /**
     * Set the lib critere bool1.
     *
     * @param string $libCritereBool1 The lib critere bool1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereBool1($libCritereBool1) {
        $this->libCritereBool1 = $libCritereBool1;
        return $this;
    }

    /**
     * Set the lib critere bool2.
     *
     * @param string $libCritereBool2 The lib critere bool2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereBool2($libCritereBool2) {
        $this->libCritereBool2 = $libCritereBool2;
        return $this;
    }

    /**
     * Set the lib critere byte1.
     *
     * @param string $libCritereByte1 The lib critere byte1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereByte1($libCritereByte1) {
        $this->libCritereByte1 = $libCritereByte1;
        return $this;
    }

    /**
     * Set the lib critere num1.
     *
     * @param string $libCritereNum1 The lib critere num1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereNum1($libCritereNum1) {
        $this->libCritereNum1 = $libCritereNum1;
        return $this;
    }

    /**
     * Set the lib critere num2.
     *
     * @param string $libCritereNum2 The lib critere num2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereNum2($libCritereNum2) {
        $this->libCritereNum2 = $libCritereNum2;
        return $this;
    }

    /**
     * Set the lib critere num3.
     *
     * @param string $libCritereNum3 The lib critere num3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereNum3($libCritereNum3) {
        $this->libCritereNum3 = $libCritereNum3;
        return $this;
    }

    /**
     * Set the lib critere num4.
     *
     * @param string $libCritereNum4 The lib critere num4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereNum4($libCritereNum4) {
        $this->libCritereNum4 = $libCritereNum4;
        return $this;
    }

    /**
     * Set the lib critere num5.
     *
     * @param string $libCritereNum5 The lib critere num5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereNum5($libCritereNum5) {
        $this->libCritereNum5 = $libCritereNum5;
        return $this;
    }

    /**
     * Set the lib critere tab1.
     *
     * @param string $libCritereTab1 The lib critere tab1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTab1($libCritereTab1) {
        $this->libCritereTab1 = $libCritereTab1;
        return $this;
    }

    /**
     * Set the lib critere tab2.
     *
     * @param string $libCritereTab2 The lib critere tab2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTab2($libCritereTab2) {
        $this->libCritereTab2 = $libCritereTab2;
        return $this;
    }

    /**
     * Set the lib critere tab3.
     *
     * @param string $libCritereTab3 The lib critere tab3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTab3($libCritereTab3) {
        $this->libCritereTab3 = $libCritereTab3;
        return $this;
    }

    /**
     * Set the lib critere tab4.
     *
     * @param string $libCritereTab4 The lib critere tab4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTab4($libCritereTab4) {
        $this->libCritereTab4 = $libCritereTab4;
        return $this;
    }

    /**
     * Set the lib critere tab5.
     *
     * @param string $libCritereTab5 The lib critere tab5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTab5($libCritereTab5) {
        $this->libCritereTab5 = $libCritereTab5;
        return $this;
    }

    /**
     * Set the lib critere txt1.
     *
     * @param string $libCritereTxt1 The lib critere txt1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTxt1($libCritereTxt1) {
        $this->libCritereTxt1 = $libCritereTxt1;
        return $this;
    }

    /**
     * Set the lib critere txt2.
     *
     * @param string $libCritereTxt2 The lib critere txt2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTxt2($libCritereTxt2) {
        $this->libCritereTxt2 = $libCritereTxt2;
        return $this;
    }

    /**
     * Set the lib critere txt3.
     *
     * @param string $libCritereTxt3 The lib critere txt3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTxt3($libCritereTxt3) {
        $this->libCritereTxt3 = $libCritereTxt3;
        return $this;
    }

    /**
     * Set the lib critere txt4.
     *
     * @param string $libCritereTxt4 The lib critere txt4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTxt4($libCritereTxt4) {
        $this->libCritereTxt4 = $libCritereTxt4;
        return $this;
    }

    /**
     * Set the lib critere txt5.
     *
     * @param string $libCritereTxt5 The lib critere txt5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereTxt5($libCritereTxt5) {
        $this->libCritereTxt5 = $libCritereTxt5;
        return $this;
    }

    /**
     * Set the libelle auto avoir.
     *
     * @param string $libelleAutoAvoir The libelle auto avoir.
     * @return Constantes Returns this constantes.
     */
    public function setLibelleAutoAvoir($libelleAutoAvoir) {
        $this->libelleAutoAvoir = $libelleAutoAvoir;
        return $this;
    }

    /**
     * Set the libelle auto facture.
     *
     * @param string $libelleAutoFacture The libelle auto facture.
     * @return Constantes Returns this constantes.
     */
    public function setLibelleAutoFacture($libelleAutoFacture) {
        $this->libelleAutoFacture = $libelleAutoFacture;
        return $this;
    }

    /**
     * Set the libelle heures surcroit.
     *
     * @param string $libelleHeuresSurcroit The libelle heures surcroit.
     * @return Constantes Returns this constantes.
     */
    public function setLibelleHeuresSurcroit($libelleHeuresSurcroit) {
        $this->libelleHeuresSurcroit = $libelleHeuresSurcroit;
        return $this;
    }

    /**
     * Set the libelle transfert.
     *
     * @param string $libelleTransfert The libelle transfert.
     * @return Constantes Returns this constantes.
     */
    public function setLibelleTransfert($libelleTransfert) {
        $this->libelleTransfert = $libelleTransfert;
        return $this;
    }

    /**
     * Set the libelle transfert achat.
     *
     * @param string $libelleTransfertAchat The libelle transfert achat.
     * @return Constantes Returns this constantes.
     */
    public function setLibelleTransfertAchat($libelleTransfertAchat) {
        $this->libelleTransfertAchat = $libelleTransfertAchat;
        return $this;
    }

    /**
     * Set the liv cde frn depot unique.
     *
     * @param boolean $livCdeFrnDepotUnique The liv cde frn depot unique.
     * @return Constantes Returns this constantes.
     */
    public function setLivCdeFrnDepotUnique($livCdeFrnDepotUnique) {
        $this->livCdeFrnDepotUnique = $livCdeFrnDepotUnique;
        return $this;
    }

    /**
     * Set the m a j dernier passage b t.
     *
     * @param boolean $mAJDernierPassageBT The m a j dernier passage b t.
     * @return Constantes Returns this constantes.
     */
    public function setMAJDernierPassageBT($mAJDernierPassageBT) {
        $this->mAJDernierPassageBT = $mAJDernierPassageBT;
        return $this;
    }

    /**
     * Set the mail attestations.
     *
     * @param string $mailAttestations The mail attestations.
     * @return Constantes Returns this constantes.
     */
    public function setMailAttestations($mailAttestations) {
        $this->mailAttestations = $mailAttestations;
        return $this;
    }

    /**
     * Set the mail factures.
     *
     * @param string $mailFactures The mail factures.
     * @return Constantes Returns this constantes.
     */
    public function setMailFactures($mailFactures) {
        $this->mailFactures = $mailFactures;
        return $this;
    }

    /**
     * Set the maj dernier prix achat.
     *
     * @param boolean $majDernierPrixAchat The maj dernier prix achat.
     * @return Constantes Returns this constantes.
     */
    public function setMajDernierPrixAchat($majDernierPrixAchat) {
        $this->majDernierPrixAchat = $majDernierPrixAchat;
        return $this;
    }

    /**
     * Set the maj p a m p.
     *
     * @param boolean $majPAMP The maj p a m p.
     * @return Constantes Returns this constantes.
     */
    public function setMajPAMP($majPAMP) {
        $this->majPAMP = $majPAMP;
        return $this;
    }

    /**
     * Set the majoration cascade.
     *
     * @param boolean $majorationCascade The majoration cascade.
     * @return Constantes Returns this constantes.
     */
    public function setMajorationCascade($majorationCascade) {
        $this->majorationCascade = $majorationCascade;
        return $this;
    }

    /**
     * Set the majoration h plus.
     *
     * @param string $majorationHPlus The majoration h plus.
     * @return Constantes Returns this constantes.
     */
    public function setMajorationHPlus($majorationHPlus) {
        $this->majorationHPlus = $majorationHPlus;
        return $this;
    }

    /**
     * Set the marge niveau edition.
     *
     * @param string $margeNiveauEdition The marge niveau edition.
     * @return Constantes Returns this constantes.
     */
    public function setMargeNiveauEdition($margeNiveauEdition) {
        $this->margeNiveauEdition = $margeNiveauEdition;
        return $this;
    }

    /**
     * Set the marge pourcent charge.
     *
     * @param float $margePourcentCharge The marge pourcent charge.
     * @return Constantes Returns this constantes.
     */
    public function setMargePourcentCharge($margePourcentCharge) {
        $this->margePourcentCharge = $margePourcentCharge;
        return $this;
    }

    /**
     * Set the marge sal insp prorata c a.
     *
     * @param boolean $margeSalInspProrataCA The marge sal insp prorata c a.
     * @return Constantes Returns this constantes.
     */
    public function setMargeSalInspProrataCA($margeSalInspProrataCA) {
        $this->margeSalInspProrataCA = $margeSalInspProrataCA;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param boolean $mensualisationTache The mensualisation tache.
     * @return Constantes Returns this constantes.
     */
    public function setMensualisationTache($mensualisationTache) {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the mode calcul proposition cde.
     *
     * @param string $modeCalculPropositionCde The mode calcul proposition cde.
     * @return Constantes Returns this constantes.
     */
    public function setModeCalculPropositionCde($modeCalculPropositionCde) {
        $this->modeCalculPropositionCde = $modeCalculPropositionCde;
        return $this;
    }

    /**
     * Set the modele devis.
     *
     * @param string $modeleDevis The modele devis.
     * @return Constantes Returns this constantes.
     */
    public function setModeleDevis($modeleDevis) {
        $this->modeleDevis = $modeleDevis;
        return $this;
    }

    /**
     * Set the modele devis tech.
     *
     * @param string $modeleDevisTech The modele devis tech.
     * @return Constantes Returns this constantes.
     */
    public function setModeleDevisTech($modeleDevisTech) {
        $this->modeleDevisTech = $modeleDevisTech;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string $modeleFacture The modele facture.
     * @return Constantes Returns this constantes.
     */
    public function setModeleFacture($modeleFacture) {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the mt cpta negatif.
     *
     * @param boolean $mtCptaNegatif The mt cpta negatif.
     * @return Constantes Returns this constantes.
     */
    public function setMtCptaNegatif($mtCptaNegatif) {
        $this->mtCptaNegatif = $mtCptaNegatif;
        return $this;
    }

    /**
     * Set the n der document.
     *
     * @param int $nDerDocument The n der document.
     * @return Constantes Returns this constantes.
     */
    public function setNDerDocument($nDerDocument) {
        $this->nDerDocument = $nDerDocument;
        return $this;
    }

    /**
     * Set the nb caracteres ligne fact.
     *
     * @param string $nbCaracteresLigneFact The nb caracteres ligne fact.
     * @return Constantes Returns this constantes.
     */
    public function setNbCaracteresLigneFact($nbCaracteresLigneFact) {
        $this->nbCaracteresLigneFact = $nbCaracteresLigneFact;
        return $this;
    }

    /**
     * Set the nb decimales prix unitaire.
     *
     * @param string $nbDecimalesPrixUnitaire The nb decimales prix unitaire.
     * @return Constantes Returns this constantes.
     */
    public function setNbDecimalesPrixUnitaire($nbDecimalesPrixUnitaire) {
        $this->nbDecimalesPrixUnitaire = $nbDecimalesPrixUnitaire;
        return $this;
    }

    /**
     * Set the nb decimales quantite.
     *
     * @param string $nbDecimalesQuantite The nb decimales quantite.
     * @return Constantes Returns this constantes.
     */
    public function setNbDecimalesQuantite($nbDecimalesQuantite) {
        $this->nbDecimalesQuantite = $nbDecimalesQuantite;
        return $this;
    }

    /**
     * Set the nb entiers prix unitaire.
     *
     * @param string $nbEntiersPrixUnitaire The nb entiers prix unitaire.
     * @return Constantes Returns this constantes.
     */
    public function setNbEntiersPrixUnitaire($nbEntiersPrixUnitaire) {
        $this->nbEntiersPrixUnitaire = $nbEntiersPrixUnitaire;
        return $this;
    }

    /**
     * Set the nb entiers quantite.
     *
     * @param string $nbEntiersQuantite The nb entiers quantite.
     * @return Constantes Returns this constantes.
     */
    public function setNbEntiersQuantite($nbEntiersQuantite) {
        $this->nbEntiersQuantite = $nbEntiersQuantite;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float $nbJourCpAcquis The nb jour cp acquis.
     * @return Constantes Returns this constantes.
     */
    public function setNbJourCpAcquis($nbJourCpAcquis) {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jours abs proratisation d c p.
     *
     * @param int $nbJoursAbsProratisationDCP The nb jours abs proratisation d c p.
     * @return Constantes Returns this constantes.
     */
    public function setNbJoursAbsProratisationDCP($nbJoursAbsProratisationDCP) {
        $this->nbJoursAbsProratisationDCP = $nbJoursAbsProratisationDCP;
        return $this;
    }

    /**
     * Set the nb mois consecutifs.
     *
     * @param int $nbMoisConsecutifs The nb mois consecutifs.
     * @return Constantes Returns this constantes.
     */
    public function setNbMoisConsecutifs($nbMoisConsecutifs) {
        $this->nbMoisConsecutifs = $nbMoisConsecutifs;
        return $this;
    }

    /**
     * Set the nom fact nb lignes.
     *
     * @param string $nomFactNbLignes The nom fact nb lignes.
     * @return Constantes Returns this constantes.
     */
    public function setNomFactNbLignes($nomFactNbLignes) {
        $this->nomFactNbLignes = $nomFactNbLignes;
        return $this;
    }

    /**
     * Set the nom fichier ascii achat.
     *
     * @param string $nomFichierAsciiAchat The nom fichier ascii achat.
     * @return Constantes Returns this constantes.
     */
    public function setNomFichierAsciiAchat($nomFichierAsciiAchat) {
        $this->nomFichierAsciiAchat = $nomFichierAsciiAchat;
        return $this;
    }

    /**
     * Set the nom fichier ascii vente.
     *
     * @param string $nomFichierAsciiVente The nom fichier ascii vente.
     * @return Constantes Returns this constantes.
     */
    public function setNomFichierAsciiVente($nomFichierAsciiVente) {
        $this->nomFichierAsciiVente = $nomFichierAsciiVente;
        return $this;
    }

    /**
     * Set the note0 non conforme.
     *
     * @param boolean $note0NonConforme The note0 non conforme.
     * @return Constantes Returns this constantes.
     */
    public function setNote0NonConforme($note0NonConforme) {
        $this->note0NonConforme = $note0NonConforme;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return Constantes Returns this constantes.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the num critere b t num1.
     *
     * @param string $numCritereBTNum1 The num critere b t num1.
     * @return Constantes Returns this constantes.
     */
    public function setNumCritereBTNum1($numCritereBTNum1) {
        $this->numCritereBTNum1 = $numCritereBTNum1;
        return $this;
    }

    /**
     * Set the num critere b t num2.
     *
     * @param string $numCritereBTNum2 The num critere b t num2.
     * @return Constantes Returns this constantes.
     */
    public function setNumCritereBTNum2($numCritereBTNum2) {
        $this->numCritereBTNum2 = $numCritereBTNum2;
        return $this;
    }

    /**
     * Set the num critere chantier filtre1.
     *
     * @param string $numCritereChantierFiltre1 The num critere chantier filtre1.
     * @return Constantes Returns this constantes.
     */
    public function setNumCritereChantierFiltre1($numCritereChantierFiltre1) {
        $this->numCritereChantierFiltre1 = $numCritereChantierFiltre1;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param int $numDevis The num devis.
     * @return Constantes Returns this constantes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num fact.
     *
     * @param int $numFact The num fact.
     * @return Constantes Returns this constantes.
     */
    public function setNumFact($numFact) {
        $this->numFact = $numFact;
        return $this;
    }

    /**
     * Set the num fact v m.
     *
     * @param int $numFactVM The num fact v m.
     * @return Constantes Returns this constantes.
     */
    public function setNumFactVM($numFactVM) {
        $this->numFactVM = $numFactVM;
        return $this;
    }

    /**
     * Set the numero fiche controle.
     *
     * @param int $numeroFicheControle The numero fiche controle.
     * @return Constantes Returns this constantes.
     */
    public function setNumeroFicheControle($numeroFicheControle) {
        $this->numeroFicheControle = $numeroFicheControle;
        return $this;
    }

    /**
     * Set the p a par fournisseur.
     *
     * @param boolean $pAParFournisseur The p a par fournisseur.
     * @return Constantes Returns this constantes.
     */
    public function setPAParFournisseur($pAParFournisseur) {
        $this->pAParFournisseur = $pAParFournisseur;
        return $this;
    }

    /**
     * Set the p j envoi mail.
     *
     * @param string $pJEnvoiMail The p j envoi mail.
     * @return Constantes Returns this constantes.
     */
    public function setPJEnvoiMail($pJEnvoiMail) {
        $this->pJEnvoiMail = $pJEnvoiMail;
        return $this;
    }

    /**
     * Set the p j envoi mail attestation.
     *
     * @param string $pJEnvoiMailAttestation The p j envoi mail attestation.
     * @return Constantes Returns this constantes.
     */
    public function setPJEnvoiMailAttestation($pJEnvoiMailAttestation) {
        $this->pJEnvoiMailAttestation = $pJEnvoiMailAttestation;
        return $this;
    }

    /**
     * Set the pas num cpt par dossier.
     *
     * @param boolean $pasNumCptParDossier The pas num cpt par dossier.
     * @return Constantes Returns this constantes.
     */
    public function setPasNumCptParDossier($pasNumCptParDossier) {
        $this->pasNumCptParDossier = $pasNumCptParDossier;
        return $this;
    }

    /**
     * Set the pdf b t_ coefficient.
     *
     * @param float $pdfBT_Coefficient The pdf b t_ coefficient.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_Coefficient($pdfBT_Coefficient) {
        $this->pdfBT_Coefficient = $pdfBT_Coefficient;
        return $this;
    }

    /**
     * Set the pdf b t_ date passage.
     *
     * @param boolean $pdfBT_DatePassage The pdf b t_ date passage.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_DatePassage($pdfBT_DatePassage) {
        $this->pdfBT_DatePassage = $pdfBT_DatePassage;
        return $this;
    }

    /**
     * Set the pdf b t_ descriptif.
     *
     * @param boolean $pdfBT_Descriptif The pdf b t_ descriptif.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_Descriptif($pdfBT_Descriptif) {
        $this->pdfBT_Descriptif = $pdfBT_Descriptif;
        return $this;
    }

    /**
     * Set the pdf b t_ employes corps.
     *
     * @param boolean $pdfBT_EmployesCorps The pdf b t_ employes corps.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_EmployesCorps($pdfBT_EmployesCorps) {
        $this->pdfBT_EmployesCorps = $pdfBT_EmployesCorps;
        return $this;
    }

    /**
     * Set the pdf b t_ employes ref.
     *
     * @param boolean $pdfBT_EmployesRef The pdf b t_ employes ref.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_EmployesRef($pdfBT_EmployesRef) {
        $this->pdfBT_EmployesRef = $pdfBT_EmployesRef;
        return $this;
    }

    /**
     * Set the pdf b t_ facturer ala validation.
     *
     * @param boolean $pdfBT_FacturerAlaValidation The pdf b t_ facturer ala validation.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_FacturerAlaValidation($pdfBT_FacturerAlaValidation) {
        $this->pdfBT_FacturerAlaValidation = $pdfBT_FacturerAlaValidation;
        return $this;
    }

    /**
     * Set the pdf b t_ format saisie qte p u.
     *
     * @param boolean $pdfBT_FormatSaisieQtePU The pdf b t_ format saisie qte p u.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_FormatSaisieQtePU($pdfBT_FormatSaisieQtePU) {
        $this->pdfBT_FormatSaisieQtePU = $pdfBT_FormatSaisieQtePU;
        return $this;
    }

    /**
     * Set the pdf b t_ libelle date.
     *
     * @param string $pdfBT_LibelleDate The pdf b t_ libelle date.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_LibelleDate($pdfBT_LibelleDate) {
        $this->pdfBT_LibelleDate = $pdfBT_LibelleDate;
        return $this;
    }

    /**
     * Set the pdf b t_ nom chantier.
     *
     * @param boolean $pdfBT_NomChantier The pdf b t_ nom chantier.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_NomChantier($pdfBT_NomChantier) {
        $this->pdfBT_NomChantier = $pdfBT_NomChantier;
        return $this;
    }

    /**
     * Set the pdf b t_ periode validite.
     *
     * @param boolean $pdfBT_PeriodeValidite The pdf b t_ periode validite.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_PeriodeValidite($pdfBT_PeriodeValidite) {
        $this->pdfBT_PeriodeValidite = $pdfBT_PeriodeValidite;
        return $this;
    }

    /**
     * Set the pdf b t_ prix achat.
     *
     * @param float $pdfBT_PrixAchat The pdf b t_ prix achat.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_PrixAchat($pdfBT_PrixAchat) {
        $this->pdfBT_PrixAchat = $pdfBT_PrixAchat;
        return $this;
    }

    /**
     * Set the pdf b t_ reprendre libelle date.
     *
     * @param boolean $pdfBT_ReprendreLibelleDate The pdf b t_ reprendre libelle date.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_ReprendreLibelleDate($pdfBT_ReprendreLibelleDate) {
        $this->pdfBT_ReprendreLibelleDate = $pdfBT_ReprendreLibelleDate;
        return $this;
    }

    /**
     * Set the pdf b t_ taux horaire.
     *
     * @param float $pdfBT_TauxHoraire The pdf b t_ taux horaire.
     * @return Constantes Returns this constantes.
     */
    public function setPdfBT_TauxHoraire($pdfBT_TauxHoraire) {
        $this->pdfBT_TauxHoraire = $pdfBT_TauxHoraire;
        return $this;
    }

    /**
     * Set the point b t_ employes sortis.
     *
     * @param boolean $pointBT_EmployesSortis The point b t_ employes sortis.
     * @return Constantes Returns this constantes.
     */
    public function setPointBT_EmployesSortis($pointBT_EmployesSortis) {
        $this->pointBT_EmployesSortis = $pointBT_EmployesSortis;
        return $this;
    }

    /**
     * Set the poste1.
     *
     * @param string $poste1 The poste1.
     * @return Constantes Returns this constantes.
     */
    public function setPoste1($poste1) {
        $this->poste1 = $poste1;
        return $this;
    }

    /**
     * Set the poste2.
     *
     * @param string $poste2 The poste2.
     * @return Constantes Returns this constantes.
     */
    public function setPoste2($poste2) {
        $this->poste2 = $poste2;
        return $this;
    }

    /**
     * Set the poste3.
     *
     * @param string $poste3 The poste3.
     * @return Constantes Returns this constantes.
     */
    public function setPoste3($poste3) {
        $this->poste3 = $poste3;
        return $this;
    }

    /**
     * Set the poste4.
     *
     * @param string $poste4 The poste4.
     * @return Constantes Returns this constantes.
     */
    public function setPoste4($poste4) {
        $this->poste4 = $poste4;
        return $this;
    }

    /**
     * Set the poste5.
     *
     * @param string $poste5 The poste5.
     * @return Constantes Returns this constantes.
     */
    public function setPoste5($poste5) {
        $this->poste5 = $poste5;
        return $this;
    }

    /**
     * Set the pourc maj h compl.
     *
     * @param float $pourcMajHCompl The pourc maj h compl.
     * @return Constantes Returns this constantes.
     */
    public function setPourcMajHCompl($pourcMajHCompl) {
        $this->pourcMajHCompl = $pourcMajHCompl;
        return $this;
    }

    /**
     * Set the pourc maj h compl2.
     *
     * @param float $pourcMajHCompl2 The pourc maj h compl2.
     * @return Constantes Returns this constantes.
     */
    public function setPourcMajHCompl2($pourcMajHCompl2) {
        $this->pourcMajHCompl2 = $pourcMajHCompl2;
        return $this;
    }

    /**
     * Set the pourcent dep h c max.
     *
     * @param float $pourcentDepHCMax The pourcent dep h c max.
     * @return Constantes Returns this constantes.
     */
    public function setPourcentDepHCMax($pourcentDepHCMax) {
        $this->pourcentDepHCMax = $pourcentDepHCMax;
        return $this;
    }

    /**
     * Set the pourcent dep h c plus mois.
     *
     * @param float $pourcentDepHCPlusMois The pourcent dep h c plus mois.
     * @return Constantes Returns this constantes.
     */
    public function setPourcentDepHCPlusMois($pourcentDepHCPlusMois) {
        $this->pourcentDepHCPlusMois = $pourcentDepHCPlusMois;
        return $this;
    }

    /**
     * Set the pourcentage repos remplacement.
     *
     * @param float $pourcentageReposRemplacement The pourcentage repos remplacement.
     * @return Constantes Returns this constantes.
     */
    public function setPourcentageReposRemplacement($pourcentageReposRemplacement) {
        $this->pourcentageReposRemplacement = $pourcentageReposRemplacement;
        return $this;
    }

    /**
     * Set the prefixe.
     *
     * @param string $prefixe The prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setPrefixe($prefixe) {
        $this->prefixe = $prefixe;
        return $this;
    }

    /**
     * Set the prefixe devis.
     *
     * @param string $prefixeDevis The prefixe devis.
     * @return Constantes Returns this constantes.
     */
    public function setPrefixeDevis($prefixeDevis) {
        $this->prefixeDevis = $prefixeDevis;
        return $this;
    }

    /**
     * Set the preparer chantier pret only.
     *
     * @param boolean $preparerChantierPretOnly The preparer chantier pret only.
     * @return Constantes Returns this constantes.
     */
    public function setPreparerChantierPretOnly($preparerChantierPretOnly) {
        $this->preparerChantierPretOnly = $preparerChantierPretOnly;
        return $this;
    }

    /**
     * Set the prix defaut achat.
     *
     * @param int $prixDefautAchat The prix defaut achat.
     * @return Constantes Returns this constantes.
     */
    public function setPrixDefautAchat($prixDefautAchat) {
        $this->prixDefautAchat = $prixDefautAchat;
        return $this;
    }

    /**
     * Set the prix defaut entree directe.
     *
     * @param int $prixDefautEntreeDirecte The prix defaut entree directe.
     * @return Constantes Returns this constantes.
     */
    public function setPrixDefautEntreeDirecte($prixDefautEntreeDirecte) {
        $this->prixDefautEntreeDirecte = $prixDefautEntreeDirecte;
        return $this;
    }

    /**
     * Set the prix defaut inventaire.
     *
     * @param int $prixDefautInventaire The prix defaut inventaire.
     * @return Constantes Returns this constantes.
     */
    public function setPrixDefautInventaire($prixDefautInventaire) {
        $this->prixDefautInventaire = $prixDefautInventaire;
        return $this;
    }

    /**
     * Set the prix defaut sortie directe.
     *
     * @param int $prixDefautSortieDirecte The prix defaut sortie directe.
     * @return Constantes Returns this constantes.
     */
    public function setPrixDefautSortieDirecte($prixDefautSortieDirecte) {
        $this->prixDefautSortieDirecte = $prixDefautSortieDirecte;
        return $this;
    }

    /**
     * Set the prix defaut vente.
     *
     * @param int $prixDefautVente The prix defaut vente.
     * @return Constantes Returns this constantes.
     */
    public function setPrixDefautVente($prixDefautVente) {
        $this->prixDefautVente = $prixDefautVente;
        return $this;
    }

    /**
     * Set the prochain numero p j.
     *
     * @param int $prochainNumeroPJ The prochain numero p j.
     * @return Constantes Returns this constantes.
     */
    public function setProchainNumeroPJ($prochainNumeroPJ) {
        $this->prochainNumeroPJ = $prochainNumeroPJ;
        return $this;
    }

    /**
     * Set the prorata heures creer ligne.
     *
     * @param boolean $prorataHeuresCreerLigne The prorata heures creer ligne.
     * @return Constantes Returns this constantes.
     */
    public function setProrataHeuresCreerLigne($prorataHeuresCreerLigne) {
        $this->prorataHeuresCreerLigne = $prorataHeuresCreerLigne;
        return $this;
    }

    /**
     * Set the prorata heures designation moins.
     *
     * @param string $prorataHeuresDesignationMoins The prorata heures designation moins.
     * @return Constantes Returns this constantes.
     */
    public function setProrataHeuresDesignationMoins($prorataHeuresDesignationMoins) {
        $this->prorataHeuresDesignationMoins = $prorataHeuresDesignationMoins;
        return $this;
    }

    /**
     * Set the prorata heures designation plus.
     *
     * @param string $prorataHeuresDesignationPlus The prorata heures designation plus.
     * @return Constantes Returns this constantes.
     */
    public function setProrataHeuresDesignationPlus($prorataHeuresDesignationPlus) {
        $this->prorataHeuresDesignationPlus = $prorataHeuresDesignationPlus;
        return $this;
    }

    /**
     * Set the prorata heures option.
     *
     * @param string $prorataHeuresOption The prorata heures option.
     * @return Constantes Returns this constantes.
     */
    public function setProrataHeuresOption($prorataHeuresOption) {
        $this->prorataHeuresOption = $prorataHeuresOption;
        return $this;
    }

    /**
     * Set the prov c p infos emp.
     *
     * @param boolean $provCPInfosEmp The prov c p infos emp.
     * @return Constantes Returns this constantes.
     */
    public function setProvCPInfosEmp($provCPInfosEmp) {
        $this->provCPInfosEmp = $provCPInfosEmp;
        return $this;
    }

    /**
     * Set the provisions c p.
     *
     * @param boolean $provisionsCP The provisions c p.
     * @return Constantes Returns this constantes.
     */
    public function setProvisionsCP($provisionsCP) {
        $this->provisionsCP = $provisionsCP;
        return $this;
    }

    /**
     * Set the qualite nb criteres.
     *
     * @param string $qualiteNbCriteres The qualite nb criteres.
     * @return Constantes Returns this constantes.
     */
    public function setQualiteNbCriteres($qualiteNbCriteres) {
        $this->qualiteNbCriteres = $qualiteNbCriteres;
        return $this;
    }

    /**
     * Set the qualite nb notes.
     *
     * @param string $qualiteNbNotes The qualite nb notes.
     * @return Constantes Returns this constantes.
     */
    public function setQualiteNbNotes($qualiteNbNotes) {
        $this->qualiteNbNotes = $qualiteNbNotes;
        return $this;
    }

    /**
     * Set the qualite satisfaction generale.
     *
     * @param boolean $qualiteSatisfactionGenerale The qualite satisfaction generale.
     * @return Constantes Returns this constantes.
     */
    public function setQualiteSatisfactionGenerale($qualiteSatisfactionGenerale) {
        $this->qualiteSatisfactionGenerale = $qualiteSatisfactionGenerale;
        return $this;
    }

    /**
     * Set the r t fdans fact dev.
     *
     * @param boolean $rTFdansFactDev The r t fdans fact dev.
     * @return Constantes Returns this constantes.
     */
    public function setRTFdansFactDev($rTFdansFactDev) {
        $this->rTFdansFactDev = $rTFdansFactDev;
        return $this;
    }

    /**
     * Set the reference mensu contrat proprete.
     *
     * @param boolean $referenceMensuContratProprete The reference mensu contrat proprete.
     * @return Constantes Returns this constantes.
     */
    public function setReferenceMensuContratProprete($referenceMensuContratProprete) {
        $this->referenceMensuContratProprete = $referenceMensuContratProprete;
        return $this;
    }

    /**
     * Set the remplacant abs j f pas auto.
     *
     * @param boolean $remplacantAbsJFPasAuto The remplacant abs j f pas auto.
     * @return Constantes Returns this constantes.
     */
    public function setRemplacantAbsJFPasAuto($remplacantAbsJFPasAuto) {
        $this->remplacantAbsJFPasAuto = $remplacantAbsJFPasAuto;
        return $this;
    }

    /**
     * Set the remplacant travaille pas j f.
     *
     * @param boolean $remplacantTravaillePasJF The remplacant travaille pas j f.
     * @return Constantes Returns this constantes.
     */
    public function setRemplacantTravaillePasJF($remplacantTravaillePasJF) {
        $this->remplacantTravaillePasJF = $remplacantTravaillePasJF;
        return $this;
    }

    /**
     * Set the remplacement h c j f.
     *
     * @param boolean $remplacementHCJF The remplacement h c j f.
     * @return Constantes Returns this constantes.
     */
    public function setRemplacementHCJF($remplacementHCJF) {
        $this->remplacementHCJF = $remplacementHCJF;
        return $this;
    }

    /**
     * Set the repos compensateur pour travailleur nuit.
     *
     * @param boolean $reposCompensateurPourTravailleurNuit The repos compensateur pour travailleur nuit.
     * @return Constantes Returns this constantes.
     */
    public function setReposCompensateurPourTravailleurNuit($reposCompensateurPourTravailleurNuit) {
        $this->reposCompensateurPourTravailleurNuit = $reposCompensateurPourTravailleurNuit;
        return $this;
    }

    /**
     * Set the saisir absences sur h c.
     *
     * @param boolean $saisirAbsencesSurHC The saisir absences sur h c.
     * @return Constantes Returns this constantes.
     */
    public function setSaisirAbsencesSurHC($saisirAbsencesSurHC) {
        $this->saisirAbsencesSurHC = $saisirAbsencesSurHC;
        return $this;
    }

    /**
     * Set the saisir code chantier achat.
     *
     * @param boolean $saisirCodeChantierAchat The saisir code chantier achat.
     * @return Constantes Returns this constantes.
     */
    public function setSaisirCodeChantierAchat($saisirCodeChantierAchat) {
        $this->saisirCodeChantierAchat = $saisirCodeChantierAchat;
        return $this;
    }

    /**
     * Set the saisir num b t.
     *
     * @param boolean $saisirNumBT The saisir num b t.
     * @return Constantes Returns this constantes.
     */
    public function setSaisirNumBT($saisirNumBT) {
        $this->saisirNumBT = $saisirNumBT;
        return $this;
    }

    /**
     * Set the services paie.
     *
     * @param string $servicesPaie The services paie.
     * @return Constantes Returns this constantes.
     */
    public function setServicesPaie($servicesPaie) {
        $this->servicesPaie = $servicesPaie;
        return $this;
    }

    /**
     * Set the seuil majo h compl.
     *
     * @param float $seuilMajoHCompl The seuil majo h compl.
     * @return Constantes Returns this constantes.
     */
    public function setSeuilMajoHCompl($seuilMajoHCompl) {
        $this->seuilMajoHCompl = $seuilMajoHCompl;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     * @return Constantes Returns this constantes.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the taux majo h c33.
     *
     * @param float $tauxMajoHC33 The taux majo h c33.
     * @return Constantes Returns this constantes.
     */
    public function setTauxMajoHC33($tauxMajoHC33) {
        $this->tauxMajoHC33 = $tauxMajoHC33;
        return $this;
    }

    /**
     * Set the taux majoration h compl.
     *
     * @param float $tauxMajorationHCompl The taux majoration h compl.
     * @return Constantes Returns this constantes.
     */
    public function setTauxMajorationHCompl($tauxMajorationHCompl) {
        $this->tauxMajorationHCompl = $tauxMajorationHCompl;
        return $this;
    }

    /**
     * Set the taux tva achat.
     *
     * @param float $tauxTvaAchat The taux tva achat.
     * @return Constantes Returns this constantes.
     */
    public function setTauxTvaAchat($tauxTvaAchat) {
        $this->tauxTvaAchat = $tauxTvaAchat;
        return $this;
    }

    /**
     * Set the taux tva taxe d e e e.
     *
     * @param float $tauxTvaTaxeDEEE The taux tva taxe d e e e.
     * @return Constantes Returns this constantes.
     */
    public function setTauxTvaTaxeDEEE($tauxTvaTaxeDEEE) {
        $this->tauxTvaTaxeDEEE = $tauxTvaTaxeDEEE;
        return $this;
    }

    /**
     * Set the taux tva vente.
     *
     * @param float $tauxTvaVente The taux tva vente.
     * @return Constantes Returns this constantes.
     */
    public function setTauxTvaVente($tauxTvaVente) {
        $this->tauxTvaVente = $tauxTvaVente;
        return $this;
    }

    /**
     * Set the type rempl defaut.
     *
     * @param string $typeRemplDefaut The type rempl defaut.
     * @return Constantes Returns this constantes.
     */
    public function setTypeRemplDefaut($typeRemplDefaut) {
        $this->typeRemplDefaut = $typeRemplDefaut;
        return $this;
    }

    /**
     * Set the type transfert vente.
     *
     * @param string $typeTransfertVente The type transfert vente.
     * @return Constantes Returns this constantes.
     */
    public function setTypeTransfertVente($typeTransfertVente) {
        $this->typeTransfertVente = $typeTransfertVente;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return Constantes Returns this constantes.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }

    /**
     * Set the utiliser stock mini.
     *
     * @param boolean $utiliserStockMini The utiliser stock mini.
     * @return Constantes Returns this constantes.
     */
    public function setUtiliserStockMini($utiliserStockMini) {
        $this->utiliserStockMini = $utiliserStockMini;
        return $this;
    }

    /**
     * Set the visualiser pointage b t valides.
     *
     * @param boolean $visualiserPointageBTValides The visualiser pointage b t valides.
     * @return Constantes Returns this constantes.
     */
    public function setVisualiserPointageBTValides($visualiserPointageBTValides) {
        $this->visualiserPointageBTValides = $visualiserPointageBTValides;
        return $this;
    }

}
