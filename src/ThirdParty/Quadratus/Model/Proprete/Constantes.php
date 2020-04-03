<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Constantes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Constantes {

    /**
     * 35 heures.
     *
     * @var DateTime|null
     */
    private $_35Heures;

    /**
     * Alertes paie dans pointage.
     *
     * @var bool
     */
    private $alertesPaieDansPointage;

    /**
     * Alertes paie dans reclam.
     *
     * @var bool
     */
    private $alertesPaieDansReclam;

    /**
     * Analytique nature agence.
     *
     * @var bool
     */
    private $analytiqueNatureAgence;

    /**
     * Analytique par chantier.
     *
     * @var bool
     */
    private $analytiqueParChantier;

    /**
     * Archiver devis.
     *
     * @var bool
     */
    private $archiverDevis;

    /**
     * Archiver facture.
     *
     * @var bool
     */
    private $archiverFacture;

    /**
     * Arrondi sur pu.
     *
     * @var bool
     */
    private $arrondiSurPu;

    /**
     * Autoriser da sans maj stock.
     *
     * @var bool
     */
    private $autoriserDaSansMajStock;

    /**
     * Autoriser dep bud cha cde type.
     *
     * @var bool
     */
    private $autoriserDepBudChaCdeType;

    /**
     * Autoriser mensu tache vide.
     *
     * @var bool
     */
    private $autoriserMensuTacheVide;

    /**
     * Bl num fact.
     *
     * @var int
     */
    private $blNumFact;

    /**
     * Bl prefixe.
     *
     * @var string
     */
    private $blPrefixe;

    /**
     * Br num fact.
     *
     * @var int
     */
    private $brNumFact;

    /**
     * Br prefixe.
     *
     * @var string
     */
    private $brPrefixe;

    /**
     * Bs num fact.
     *
     * @var int
     */
    private $bsNumFact;

    /**
     * Bs prefixe.
     *
     * @var string
     */
    private $bsPrefixe;

    /**
     * Cdd mensu total heures.
     *
     * @var bool
     */
    private $cddMensuTotalHeures;

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
     * @var bool
     */
    private $centralisationVente;

    /**
     * Charge mensuelle sans tache.
     *
     * @var bool
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
     * Code abs cp sans solde.
     *
     * @var string
     */
    private $codeAbsCpSansSolde;

    /**
     * Code abs def jf.
     *
     * @var string
     */
    private $codeAbsDefJf;

    /**
     * Code abs def jf moins3.
     *
     * @var string
     */
    private $codeAbsDefJfMoins3;

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
     * Code ics.
     *
     * @var string
     */
    private $codeIcs;

    /**
     * Code ja.
     *
     * @var string
     */
    private $codeJa;

    /**
     * Code jv negoce.
     *
     * @var string
     */
    private $codeJvNegoce;

    /**
     * Code jv prestation.
     *
     * @var string
     */
    private $codeJvPrestation;

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
     * Code prime jf1.
     *
     * @var string
     */
    private $codePrimeJf1;

    /**
     * Code prime jf1 type2.
     *
     * @var string
     */
    private $codePrimeJf1Type2;

    /**
     * Code prime jf2.
     *
     * @var string
     */
    private $codePrimeJf2;

    /**
     * Code prime jf mai.
     *
     * @var string
     */
    private $codePrimeJfMai;

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
     * Code prime rs.
     *
     * @var string
     */
    private $codePrimeRs;

    /**
     * Code prime tp.
     *
     * @var string
     */
    private $codePrimeTp;

    /**
     * Code reg jv neg debut.
     *
     * @var string
     */
    private $codeRegJvNegDebut;

    /**
     * Code reg jv neg fin.
     *
     * @var string
     */
    private $codeRegJvNegFin;

    /**
     * Code reg jv prest debut.
     *
     * @var string
     */
    private $codeRegJvPrestDebut;

    /**
     * Code reg jv prest fin.
     *
     * @var string
     */
    private $codeRegJvPrestFin;

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
     * Compte escompte ca exonere.
     *
     * @var string
     */
    private $compteEscompteCaExonere;

    /**
     * Compte escompte soumis tva.
     *
     * @var string
     */
    private $compteEscompteSoumisTva;

    /**
     * Compte tva achat.
     *
     * @var string
     */
    private $compteTvaAchat;

    /**
     * Compte tva taxe deee.
     *
     * @var string
     */
    private $compteTvaTaxeDeee;

    /**
     * Compte tva vente.
     *
     * @var string
     */
    private $compteTvaVente;

    /**
     * Compte ventil taxe deee.
     *
     * @var string
     */
    private $compteVentilTaxeDeee;

    /**
     * Compter samedi tf cp paie.
     *
     * @var bool
     */
    private $compterSamediTfCpPaie;

    /**
     * Controler cde frn.
     *
     * @var bool
     */
    private $controlerCdeFrn;

    /**
     * Controler charges mensuelles.
     *
     * @var bool
     */
    private $controlerChargesMensuelles;

    /**
     * Controler code reg.
     *
     * @var bool
     */
    private $controlerCodeReg;

    /**
     * Controler dep hc max.
     *
     * @var bool
     */
    private $controlerDepHcMax;

    /**
     * Controler dep hc plus mois.
     *
     * @var bool
     */
    private $controlerDepHcPlusMois;

    /**
     * Cp sans provisions.
     *
     * @var bool
     */
    private $cpSansProvisions;

    /**
     * Creer alerte paie def en paie.
     *
     * @var bool
     */
    private $creerAlertePaieDefEnPaie;

    /**
     * Ctrl auto cp.
     *
     * @var bool
     */
    private $ctrlAutoCp;

    /**
     * Ctrl auto cp avec anticipation.
     *
     * @var bool
     */
    private $ctrlAutoCpAvecAnticipation;

    /**
     * Date appli gestion heures en plus.
     *
     * @var DateTime|null
     */
    private $dateAppliGestionHeuresEnPlus;

    /**
     * Date journee solidarite.
     *
     * @var DateTime|null
     */
    private $dateJourneeSolidarite;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
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
     * Es code abs entree.
     *
     * @var string
     */
    private $esCodeAbsEntree;

    /**
     * Es code abs sortie.
     *
     * @var string
     */
    private $esCodeAbsSortie;

    /**
     * Es heures reelles.
     *
     * @var bool
     */
    private $esHeuresReelles;

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
     * @var bool
     */
    private $euro;

    /**
     * Facturation prorata heures.
     *
     * @var bool
     */
    private $facturationProrataHeures;

    /**
     * Folio ja.
     *
     * @var string
     */
    private $folioJa;

    /**
     * Folio jv negoce.
     *
     * @var string
     */
    private $folioJvNegoce;

    /**
     * Folio jv prestation.
     *
     * @var string
     */
    private $folioJvPrestation;

    /**
     * Gerer num cpt chantier.
     *
     * @var bool
     */
    private $gererNumCptChantier;

    /**
     * Gestion h compl.
     *
     * @var bool
     */
    private $gestionHCompl;

    /**
     * Gestion h sup mens.
     *
     * @var bool
     */
    private $gestionHSupMens;

    /**
     * Gestion h sup mensuelle.
     *
     * @var bool
     */
    private $gestionHSupMensuelle;

    /**
     * Gestion maj dim.
     *
     * @var string
     */
    private $gestionMajDim;

    /**
     * Gestion maj jf.
     *
     * @var string
     */
    private $gestionMajJf;

    /**
     * Gestion maj nuit.
     *
     * @var string
     */
    private $gestionMajNuit;

    /**
     * Gestion multi depot.
     *
     * @var bool
     */
    private $gestionMultiDepot;

    /**
     * Gestion quotas.
     *
     * @var bool
     */
    private $gestionQuotas;

    /**
     * Gestion specif jf.
     *
     * @var bool
     */
    private $gestionSpecifJf;

    /**
     * Gestion specif majo jf.
     *
     * @var bool
     */
    private $gestionSpecifMajoJf;

    /**
     * H deb nuit.
     *
     * @var DateTime|null
     */
    private $hDebNuit;

    /**
     * H deb nuit trav nuit.
     *
     * @var DateTime|null
     */
    private $hDebNuitTravNuit;

    /**
     * H fin nuit.
     *
     * @var DateTime|null
     */
    private $hFinNuit;

    /**
     * H fin nuit trav nuit.
     *
     * @var DateTime|null
     */
    private $hFinNuitTravNuit;

    /**
     * Heures absence mensualise.
     *
     * @var bool
     */
    private $heuresAbsenceMensualise;

    /**
     * Heures rempl egales mens titulaire.
     *
     * @var bool
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
     * @var bool
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
     * @var bool
     */
    private $livCdeFrnDepotUnique;

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
     * Maj dernier passage bt.
     *
     * @var bool
     */
    private $majDernierPassageBt;

    /**
     * Maj dernier prix achat.
     *
     * @var bool
     */
    private $majDernierPrixAchat;

    /**
     * Maj pamp.
     *
     * @var bool
     */
    private $majPamp;

    /**
     * Majoration cascade.
     *
     * @var bool
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
     * Marge sal insp prorata ca.
     *
     * @var bool
     */
    private $margeSalInspProrataCa;

    /**
     * Mensualisation tache.
     *
     * @var bool
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
     * @var bool
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
     * Nb jours abs proratisation dcp.
     *
     * @var int
     */
    private $nbJoursAbsProratisationDcp;

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
     * @var bool
     */
    private $note0NonConforme;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Num critere bt num1.
     *
     * @var string
     */
    private $numCritereBtNum1;

    /**
     * Num critere bt num2.
     *
     * @var string
     */
    private $numCritereBtNum2;

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
     * Num fact vm.
     *
     * @var int
     */
    private $numFactVm;

    /**
     * Numero fiche controle.
     *
     * @var int
     */
    private $numeroFicheControle;

    /**
     * Pa par fournisseur.
     *
     * @var bool
     */
    private $paParFournisseur;

    /**
     * Pas num cpt par dossier.
     *
     * @var bool
     */
    private $pasNumCptParDossier;

    /**
     * Pdf bt coefficient.
     *
     * @var float
     */
    private $pdfBtCoefficient;

    /**
     * Pdf bt date passage.
     *
     * @var bool
     */
    private $pdfBtDatePassage;

    /**
     * Pdf bt descriptif.
     *
     * @var bool
     */
    private $pdfBtDescriptif;

    /**
     * Pdf bt employes corps.
     *
     * @var bool
     */
    private $pdfBtEmployesCorps;

    /**
     * Pdf bt employes ref.
     *
     * @var bool
     */
    private $pdfBtEmployesRef;

    /**
     * Pdf bt facturer ala validation.
     *
     * @var bool
     */
    private $pdfBtFacturerAlaValidation;

    /**
     * Pdf bt format saisie qte pu.
     *
     * @var bool
     */
    private $pdfBtFormatSaisieQtePu;

    /**
     * Pdf bt libelle date.
     *
     * @var string
     */
    private $pdfBtLibelleDate;

    /**
     * Pdf bt nom chantier.
     *
     * @var bool
     */
    private $pdfBtNomChantier;

    /**
     * Pdf bt periode validite.
     *
     * @var bool
     */
    private $pdfBtPeriodeValidite;

    /**
     * Pdf bt prix achat.
     *
     * @var float
     */
    private $pdfBtPrixAchat;

    /**
     * Pdf bt reprendre libelle date.
     *
     * @var bool
     */
    private $pdfBtReprendreLibelleDate;

    /**
     * Pdf bt taux horaire.
     *
     * @var float
     */
    private $pdfBtTauxHoraire;

    /**
     * Pj envoi mail.
     *
     * @var string
     */
    private $pjEnvoiMail;

    /**
     * Pj envoi mail attestation.
     *
     * @var string
     */
    private $pjEnvoiMailAttestation;

    /**
     * Point bt employes sortis.
     *
     * @var bool
     */
    private $pointBtEmployesSortis;

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
     * Pourcent dep hc max.
     *
     * @var float
     */
    private $pourcentDepHcMax;

    /**
     * Pourcent dep hc plus mois.
     *
     * @var float
     */
    private $pourcentDepHcPlusMois;

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
     * @var bool
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
     * Prochain numero pj.
     *
     * @var int
     */
    private $prochainNumeroPj;

    /**
     * Prorata heures creer ligne.
     *
     * @var bool
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
     * Prov cp infos emp.
     *
     * @var bool
     */
    private $provCpInfosEmp;

    /**
     * Provisions cp.
     *
     * @var bool
     */
    private $provisionsCp;

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
     * @var bool
     */
    private $qualiteSatisfactionGenerale;

    /**
     * Reference mensu contrat proprete.
     *
     * @var bool
     */
    private $referenceMensuContratProprete;

    /**
     * Remplacant abs jf pas auto.
     *
     * @var bool
     */
    private $remplacantAbsJfPasAuto;

    /**
     * Remplacant travaille pas jf.
     *
     * @var bool
     */
    private $remplacantTravaillePasJf;

    /**
     * Remplacement hcjf.
     *
     * @var bool
     */
    private $remplacementHcjf;

    /**
     * Repos compensateur pour travailleur nuit.
     *
     * @var bool
     */
    private $reposCompensateurPourTravailleurNuit;

    /**
     * Rt fdans fact dev.
     *
     * @var bool
     */
    private $rtFdansFactDev;

    /**
     * Saisir absences sur hc.
     *
     * @var bool
     */
    private $saisirAbsencesSurHc;

    /**
     * Saisir code chantier achat.
     *
     * @var bool
     */
    private $saisirCodeChantierAchat;

    /**
     * Saisir num bt.
     *
     * @var bool
     */
    private $saisirNumBt;

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
     * Taux majo hc33.
     *
     * @var float
     */
    private $tauxMajoHc33;

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
     * Taux tva taxe deee.
     *
     * @var float
     */
    private $tauxTvaTaxeDeee;

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
     * Uniq id synchro.
     *
     * @var string
     */
    private $uniqIdSynchro;

    /**
     * Utiliser stock mini.
     *
     * @var bool
     */
    private $utiliserStockMini;

    /**
     * Visualiser pointage bt valides.
     *
     * @var bool
     */
    private $visualiserPointageBtValides;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the 35 heures.
     *
     * @return DateTime|null Returns the 35 heures.
     */
    public function get35Heures() {
        return $this->_35Heures;
    }

    /**
     * Get the alertes paie dans pointage.
     *
     * @return bool Returns the alertes paie dans pointage.
     */
    public function getAlertesPaieDansPointage() {
        return $this->alertesPaieDansPointage;
    }

    /**
     * Get the alertes paie dans reclam.
     *
     * @return bool Returns the alertes paie dans reclam.
     */
    public function getAlertesPaieDansReclam() {
        return $this->alertesPaieDansReclam;
    }

    /**
     * Get the analytique nature agence.
     *
     * @return bool Returns the analytique nature agence.
     */
    public function getAnalytiqueNatureAgence() {
        return $this->analytiqueNatureAgence;
    }

    /**
     * Get the analytique par chantier.
     *
     * @return bool Returns the analytique par chantier.
     */
    public function getAnalytiqueParChantier() {
        return $this->analytiqueParChantier;
    }

    /**
     * Get the archiver devis.
     *
     * @return bool Returns the archiver devis.
     */
    public function getArchiverDevis() {
        return $this->archiverDevis;
    }

    /**
     * Get the archiver facture.
     *
     * @return bool Returns the archiver facture.
     */
    public function getArchiverFacture() {
        return $this->archiverFacture;
    }

    /**
     * Get the arrondi sur pu.
     *
     * @return bool Returns the arrondi sur pu.
     */
    public function getArrondiSurPu() {
        return $this->arrondiSurPu;
    }

    /**
     * Get the autoriser da sans maj stock.
     *
     * @return bool Returns the autoriser da sans maj stock.
     */
    public function getAutoriserDaSansMajStock() {
        return $this->autoriserDaSansMajStock;
    }

    /**
     * Get the autoriser dep bud cha cde type.
     *
     * @return bool Returns the autoriser dep bud cha cde type.
     */
    public function getAutoriserDepBudChaCdeType() {
        return $this->autoriserDepBudChaCdeType;
    }

    /**
     * Get the autoriser mensu tache vide.
     *
     * @return bool Returns the autoriser mensu tache vide.
     */
    public function getAutoriserMensuTacheVide() {
        return $this->autoriserMensuTacheVide;
    }

    /**
     * Get the bl num fact.
     *
     * @return int Returns the bl num fact.
     */
    public function getBlNumFact() {
        return $this->blNumFact;
    }

    /**
     * Get the bl prefixe.
     *
     * @return string Returns the bl prefixe.
     */
    public function getBlPrefixe() {
        return $this->blPrefixe;
    }

    /**
     * Get the br num fact.
     *
     * @return int Returns the br num fact.
     */
    public function getBrNumFact() {
        return $this->brNumFact;
    }

    /**
     * Get the br prefixe.
     *
     * @return string Returns the br prefixe.
     */
    public function getBrPrefixe() {
        return $this->brPrefixe;
    }

    /**
     * Get the bs num fact.
     *
     * @return int Returns the bs num fact.
     */
    public function getBsNumFact() {
        return $this->bsNumFact;
    }

    /**
     * Get the bs prefixe.
     *
     * @return string Returns the bs prefixe.
     */
    public function getBsPrefixe() {
        return $this->bsPrefixe;
    }

    /**
     * Get the cdd mensu total heures.
     *
     * @return bool Returns the cdd mensu total heures.
     */
    public function getCddMensuTotalHeures() {
        return $this->cddMensuTotalHeures;
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
     * @return bool Returns the centralisation vente.
     */
    public function getCentralisationVente() {
        return $this->centralisationVente;
    }

    /**
     * Get the charge mensuelle sans tache.
     *
     * @return bool Returns the charge mensuelle sans tache.
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
     * Get the code abs cp sans solde.
     *
     * @return string Returns the code abs cp sans solde.
     */
    public function getCodeAbsCpSansSolde() {
        return $this->codeAbsCpSansSolde;
    }

    /**
     * Get the code abs def jf.
     *
     * @return string Returns the code abs def jf.
     */
    public function getCodeAbsDefJf() {
        return $this->codeAbsDefJf;
    }

    /**
     * Get the code abs def jf moins3.
     *
     * @return string Returns the code abs def jf moins3.
     */
    public function getCodeAbsDefJfMoins3() {
        return $this->codeAbsDefJfMoins3;
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
     * Get the code ics.
     *
     * @return string Returns the code ics.
     */
    public function getCodeIcs() {
        return $this->codeIcs;
    }

    /**
     * Get the code ja.
     *
     * @return string Returns the code ja.
     */
    public function getCodeJa() {
        return $this->codeJa;
    }

    /**
     * Get the code jv negoce.
     *
     * @return string Returns the code jv negoce.
     */
    public function getCodeJvNegoce() {
        return $this->codeJvNegoce;
    }

    /**
     * Get the code jv prestation.
     *
     * @return string Returns the code jv prestation.
     */
    public function getCodeJvPrestation() {
        return $this->codeJvPrestation;
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
     * Get the code prime jf1.
     *
     * @return string Returns the code prime jf1.
     */
    public function getCodePrimeJf1() {
        return $this->codePrimeJf1;
    }

    /**
     * Get the code prime jf1 type2.
     *
     * @return string Returns the code prime jf1 type2.
     */
    public function getCodePrimeJf1Type2() {
        return $this->codePrimeJf1Type2;
    }

    /**
     * Get the code prime jf2.
     *
     * @return string Returns the code prime jf2.
     */
    public function getCodePrimeJf2() {
        return $this->codePrimeJf2;
    }

    /**
     * Get the code prime jf mai.
     *
     * @return string Returns the code prime jf mai.
     */
    public function getCodePrimeJfMai() {
        return $this->codePrimeJfMai;
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
     * Get the code prime rs.
     *
     * @return string Returns the code prime rs.
     */
    public function getCodePrimeRs() {
        return $this->codePrimeRs;
    }

    /**
     * Get the code prime tp.
     *
     * @return string Returns the code prime tp.
     */
    public function getCodePrimeTp() {
        return $this->codePrimeTp;
    }

    /**
     * Get the code reg jv neg debut.
     *
     * @return string Returns the code reg jv neg debut.
     */
    public function getCodeRegJvNegDebut() {
        return $this->codeRegJvNegDebut;
    }

    /**
     * Get the code reg jv neg fin.
     *
     * @return string Returns the code reg jv neg fin.
     */
    public function getCodeRegJvNegFin() {
        return $this->codeRegJvNegFin;
    }

    /**
     * Get the code reg jv prest debut.
     *
     * @return string Returns the code reg jv prest debut.
     */
    public function getCodeRegJvPrestDebut() {
        return $this->codeRegJvPrestDebut;
    }

    /**
     * Get the code reg jv prest fin.
     *
     * @return string Returns the code reg jv prest fin.
     */
    public function getCodeRegJvPrestFin() {
        return $this->codeRegJvPrestFin;
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
     * Get the compte escompte ca exonere.
     *
     * @return string Returns the compte escompte ca exonere.
     */
    public function getCompteEscompteCaExonere() {
        return $this->compteEscompteCaExonere;
    }

    /**
     * Get the compte escompte soumis tva.
     *
     * @return string Returns the compte escompte soumis tva.
     */
    public function getCompteEscompteSoumisTva() {
        return $this->compteEscompteSoumisTva;
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
     * Get the compte tva taxe deee.
     *
     * @return string Returns the compte tva taxe deee.
     */
    public function getCompteTvaTaxeDeee() {
        return $this->compteTvaTaxeDeee;
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
     * Get the compte ventil taxe deee.
     *
     * @return string Returns the compte ventil taxe deee.
     */
    public function getCompteVentilTaxeDeee() {
        return $this->compteVentilTaxeDeee;
    }

    /**
     * Get the compter samedi tf cp paie.
     *
     * @return bool Returns the compter samedi tf cp paie.
     */
    public function getCompterSamediTfCpPaie() {
        return $this->compterSamediTfCpPaie;
    }

    /**
     * Get the controler cde frn.
     *
     * @return bool Returns the controler cde frn.
     */
    public function getControlerCdeFrn() {
        return $this->controlerCdeFrn;
    }

    /**
     * Get the controler charges mensuelles.
     *
     * @return bool Returns the controler charges mensuelles.
     */
    public function getControlerChargesMensuelles() {
        return $this->controlerChargesMensuelles;
    }

    /**
     * Get the controler code reg.
     *
     * @return bool Returns the controler code reg.
     */
    public function getControlerCodeReg() {
        return $this->controlerCodeReg;
    }

    /**
     * Get the controler dep hc max.
     *
     * @return bool Returns the controler dep hc max.
     */
    public function getControlerDepHcMax() {
        return $this->controlerDepHcMax;
    }

    /**
     * Get the controler dep hc plus mois.
     *
     * @return bool Returns the controler dep hc plus mois.
     */
    public function getControlerDepHcPlusMois() {
        return $this->controlerDepHcPlusMois;
    }

    /**
     * Get the cp sans provisions.
     *
     * @return bool Returns the cp sans provisions.
     */
    public function getCpSansProvisions() {
        return $this->cpSansProvisions;
    }

    /**
     * Get the creer alerte paie def en paie.
     *
     * @return bool Returns the creer alerte paie def en paie.
     */
    public function getCreerAlertePaieDefEnPaie() {
        return $this->creerAlertePaieDefEnPaie;
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
     * Get the ctrl auto cp avec anticipation.
     *
     * @return bool Returns the ctrl auto cp avec anticipation.
     */
    public function getCtrlAutoCpAvecAnticipation() {
        return $this->ctrlAutoCpAvecAnticipation;
    }

    /**
     * Get the date appli gestion heures en plus.
     *
     * @return DateTime|null Returns the date appli gestion heures en plus.
     */
    public function getDateAppliGestionHeuresEnPlus() {
        return $this->dateAppliGestionHeuresEnPlus;
    }

    /**
     * Get the date journee solidarite.
     *
     * @return DateTime|null Returns the date journee solidarite.
     */
    public function getDateJourneeSolidarite() {
        return $this->dateJourneeSolidarite;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
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
     * Get the es code abs entree.
     *
     * @return string Returns the es code abs entree.
     */
    public function getEsCodeAbsEntree() {
        return $this->esCodeAbsEntree;
    }

    /**
     * Get the es code abs sortie.
     *
     * @return string Returns the es code abs sortie.
     */
    public function getEsCodeAbsSortie() {
        return $this->esCodeAbsSortie;
    }

    /**
     * Get the es heures reelles.
     *
     * @return bool Returns the es heures reelles.
     */
    public function getEsHeuresReelles() {
        return $this->esHeuresReelles;
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
     * @return bool Returns the euro.
     */
    public function getEuro() {
        return $this->euro;
    }

    /**
     * Get the facturation prorata heures.
     *
     * @return bool Returns the facturation prorata heures.
     */
    public function getFacturationProrataHeures() {
        return $this->facturationProrataHeures;
    }

    /**
     * Get the folio ja.
     *
     * @return string Returns the folio ja.
     */
    public function getFolioJa() {
        return $this->folioJa;
    }

    /**
     * Get the folio jv negoce.
     *
     * @return string Returns the folio jv negoce.
     */
    public function getFolioJvNegoce() {
        return $this->folioJvNegoce;
    }

    /**
     * Get the folio jv prestation.
     *
     * @return string Returns the folio jv prestation.
     */
    public function getFolioJvPrestation() {
        return $this->folioJvPrestation;
    }

    /**
     * Get the gerer num cpt chantier.
     *
     * @return bool Returns the gerer num cpt chantier.
     */
    public function getGererNumCptChantier() {
        return $this->gererNumCptChantier;
    }

    /**
     * Get the gestion h compl.
     *
     * @return bool Returns the gestion h compl.
     */
    public function getGestionHCompl() {
        return $this->gestionHCompl;
    }

    /**
     * Get the gestion h sup mens.
     *
     * @return bool Returns the gestion h sup mens.
     */
    public function getGestionHSupMens() {
        return $this->gestionHSupMens;
    }

    /**
     * Get the gestion h sup mensuelle.
     *
     * @return bool Returns the gestion h sup mensuelle.
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
     * Get the gestion maj jf.
     *
     * @return string Returns the gestion maj jf.
     */
    public function getGestionMajJf() {
        return $this->gestionMajJf;
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
     * @return bool Returns the gestion multi depot.
     */
    public function getGestionMultiDepot() {
        return $this->gestionMultiDepot;
    }

    /**
     * Get the gestion quotas.
     *
     * @return bool Returns the gestion quotas.
     */
    public function getGestionQuotas() {
        return $this->gestionQuotas;
    }

    /**
     * Get the gestion specif jf.
     *
     * @return bool Returns the gestion specif jf.
     */
    public function getGestionSpecifJf() {
        return $this->gestionSpecifJf;
    }

    /**
     * Get the gestion specif majo jf.
     *
     * @return bool Returns the gestion specif majo jf.
     */
    public function getGestionSpecifMajoJf() {
        return $this->gestionSpecifMajoJf;
    }

    /**
     * Get the h deb nuit.
     *
     * @return DateTime|null Returns the h deb nuit.
     */
    public function getHDebNuit() {
        return $this->hDebNuit;
    }

    /**
     * Get the h deb nuit trav nuit.
     *
     * @return DateTime|null Returns the h deb nuit trav nuit.
     */
    public function getHDebNuitTravNuit() {
        return $this->hDebNuitTravNuit;
    }

    /**
     * Get the h fin nuit.
     *
     * @return DateTime|null Returns the h fin nuit.
     */
    public function getHFinNuit() {
        return $this->hFinNuit;
    }

    /**
     * Get the h fin nuit trav nuit.
     *
     * @return DateTime|null Returns the h fin nuit trav nuit.
     */
    public function getHFinNuitTravNuit() {
        return $this->hFinNuitTravNuit;
    }

    /**
     * Get the heures absence mensualise.
     *
     * @return bool Returns the heures absence mensualise.
     */
    public function getHeuresAbsenceMensualise() {
        return $this->heuresAbsenceMensualise;
    }

    /**
     * Get the heures rempl egales mens titulaire.
     *
     * @return bool Returns the heures rempl egales mens titulaire.
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
     * @return bool Returns the liaison compta win.
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
     * @return bool Returns the liv cde frn depot unique.
     */
    public function getLivCdeFrnDepotUnique() {
        return $this->livCdeFrnDepotUnique;
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
     * Get the maj dernier passage bt.
     *
     * @return bool Returns the maj dernier passage bt.
     */
    public function getMajDernierPassageBt() {
        return $this->majDernierPassageBt;
    }

    /**
     * Get the maj dernier prix achat.
     *
     * @return bool Returns the maj dernier prix achat.
     */
    public function getMajDernierPrixAchat() {
        return $this->majDernierPrixAchat;
    }

    /**
     * Get the maj pamp.
     *
     * @return bool Returns the maj pamp.
     */
    public function getMajPamp() {
        return $this->majPamp;
    }

    /**
     * Get the majoration cascade.
     *
     * @return bool Returns the majoration cascade.
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
     * Get the marge sal insp prorata ca.
     *
     * @return bool Returns the marge sal insp prorata ca.
     */
    public function getMargeSalInspProrataCa() {
        return $this->margeSalInspProrataCa;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return bool Returns the mensualisation tache.
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
     * @return bool Returns the mt cpta negatif.
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
     * Get the nb jours abs proratisation dcp.
     *
     * @return int Returns the nb jours abs proratisation dcp.
     */
    public function getNbJoursAbsProratisationDcp() {
        return $this->nbJoursAbsProratisationDcp;
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
     * @return bool Returns the note0 non conforme.
     */
    public function getNote0NonConforme() {
        return $this->note0NonConforme;
    }

    /**
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the num critere bt num1.
     *
     * @return string Returns the num critere bt num1.
     */
    public function getNumCritereBtNum1() {
        return $this->numCritereBtNum1;
    }

    /**
     * Get the num critere bt num2.
     *
     * @return string Returns the num critere bt num2.
     */
    public function getNumCritereBtNum2() {
        return $this->numCritereBtNum2;
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
     * Get the num fact vm.
     *
     * @return int Returns the num fact vm.
     */
    public function getNumFactVm() {
        return $this->numFactVm;
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
     * Get the pa par fournisseur.
     *
     * @return bool Returns the pa par fournisseur.
     */
    public function getPaParFournisseur() {
        return $this->paParFournisseur;
    }

    /**
     * Get the pas num cpt par dossier.
     *
     * @return bool Returns the pas num cpt par dossier.
     */
    public function getPasNumCptParDossier() {
        return $this->pasNumCptParDossier;
    }

    /**
     * Get the pdf bt coefficient.
     *
     * @return float Returns the pdf bt coefficient.
     */
    public function getPdfBtCoefficient() {
        return $this->pdfBtCoefficient;
    }

    /**
     * Get the pdf bt date passage.
     *
     * @return bool Returns the pdf bt date passage.
     */
    public function getPdfBtDatePassage() {
        return $this->pdfBtDatePassage;
    }

    /**
     * Get the pdf bt descriptif.
     *
     * @return bool Returns the pdf bt descriptif.
     */
    public function getPdfBtDescriptif() {
        return $this->pdfBtDescriptif;
    }

    /**
     * Get the pdf bt employes corps.
     *
     * @return bool Returns the pdf bt employes corps.
     */
    public function getPdfBtEmployesCorps() {
        return $this->pdfBtEmployesCorps;
    }

    /**
     * Get the pdf bt employes ref.
     *
     * @return bool Returns the pdf bt employes ref.
     */
    public function getPdfBtEmployesRef() {
        return $this->pdfBtEmployesRef;
    }

    /**
     * Get the pdf bt facturer ala validation.
     *
     * @return bool Returns the pdf bt facturer ala validation.
     */
    public function getPdfBtFacturerAlaValidation() {
        return $this->pdfBtFacturerAlaValidation;
    }

    /**
     * Get the pdf bt format saisie qte pu.
     *
     * @return bool Returns the pdf bt format saisie qte pu.
     */
    public function getPdfBtFormatSaisieQtePu() {
        return $this->pdfBtFormatSaisieQtePu;
    }

    /**
     * Get the pdf bt libelle date.
     *
     * @return string Returns the pdf bt libelle date.
     */
    public function getPdfBtLibelleDate() {
        return $this->pdfBtLibelleDate;
    }

    /**
     * Get the pdf bt nom chantier.
     *
     * @return bool Returns the pdf bt nom chantier.
     */
    public function getPdfBtNomChantier() {
        return $this->pdfBtNomChantier;
    }

    /**
     * Get the pdf bt periode validite.
     *
     * @return bool Returns the pdf bt periode validite.
     */
    public function getPdfBtPeriodeValidite() {
        return $this->pdfBtPeriodeValidite;
    }

    /**
     * Get the pdf bt prix achat.
     *
     * @return float Returns the pdf bt prix achat.
     */
    public function getPdfBtPrixAchat() {
        return $this->pdfBtPrixAchat;
    }

    /**
     * Get the pdf bt reprendre libelle date.
     *
     * @return bool Returns the pdf bt reprendre libelle date.
     */
    public function getPdfBtReprendreLibelleDate() {
        return $this->pdfBtReprendreLibelleDate;
    }

    /**
     * Get the pdf bt taux horaire.
     *
     * @return float Returns the pdf bt taux horaire.
     */
    public function getPdfBtTauxHoraire() {
        return $this->pdfBtTauxHoraire;
    }

    /**
     * Get the pj envoi mail.
     *
     * @return string Returns the pj envoi mail.
     */
    public function getPjEnvoiMail() {
        return $this->pjEnvoiMail;
    }

    /**
     * Get the pj envoi mail attestation.
     *
     * @return string Returns the pj envoi mail attestation.
     */
    public function getPjEnvoiMailAttestation() {
        return $this->pjEnvoiMailAttestation;
    }

    /**
     * Get the point bt employes sortis.
     *
     * @return bool Returns the point bt employes sortis.
     */
    public function getPointBtEmployesSortis() {
        return $this->pointBtEmployesSortis;
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
     * Get the pourcent dep hc max.
     *
     * @return float Returns the pourcent dep hc max.
     */
    public function getPourcentDepHcMax() {
        return $this->pourcentDepHcMax;
    }

    /**
     * Get the pourcent dep hc plus mois.
     *
     * @return float Returns the pourcent dep hc plus mois.
     */
    public function getPourcentDepHcPlusMois() {
        return $this->pourcentDepHcPlusMois;
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
     * @return bool Returns the preparer chantier pret only.
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
     * Get the prochain numero pj.
     *
     * @return int Returns the prochain numero pj.
     */
    public function getProchainNumeroPj() {
        return $this->prochainNumeroPj;
    }

    /**
     * Get the prorata heures creer ligne.
     *
     * @return bool Returns the prorata heures creer ligne.
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
     * Get the prov cp infos emp.
     *
     * @return bool Returns the prov cp infos emp.
     */
    public function getProvCpInfosEmp() {
        return $this->provCpInfosEmp;
    }

    /**
     * Get the provisions cp.
     *
     * @return bool Returns the provisions cp.
     */
    public function getProvisionsCp() {
        return $this->provisionsCp;
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
     * @return bool Returns the qualite satisfaction generale.
     */
    public function getQualiteSatisfactionGenerale() {
        return $this->qualiteSatisfactionGenerale;
    }

    /**
     * Get the reference mensu contrat proprete.
     *
     * @return bool Returns the reference mensu contrat proprete.
     */
    public function getReferenceMensuContratProprete() {
        return $this->referenceMensuContratProprete;
    }

    /**
     * Get the remplacant abs jf pas auto.
     *
     * @return bool Returns the remplacant abs jf pas auto.
     */
    public function getRemplacantAbsJfPasAuto() {
        return $this->remplacantAbsJfPasAuto;
    }

    /**
     * Get the remplacant travaille pas jf.
     *
     * @return bool Returns the remplacant travaille pas jf.
     */
    public function getRemplacantTravaillePasJf() {
        return $this->remplacantTravaillePasJf;
    }

    /**
     * Get the remplacement hcjf.
     *
     * @return bool Returns the remplacement hcjf.
     */
    public function getRemplacementHcjf() {
        return $this->remplacementHcjf;
    }

    /**
     * Get the repos compensateur pour travailleur nuit.
     *
     * @return bool Returns the repos compensateur pour travailleur nuit.
     */
    public function getReposCompensateurPourTravailleurNuit() {
        return $this->reposCompensateurPourTravailleurNuit;
    }

    /**
     * Get the rt fdans fact dev.
     *
     * @return bool Returns the rt fdans fact dev.
     */
    public function getRtFdansFactDev() {
        return $this->rtFdansFactDev;
    }

    /**
     * Get the saisir absences sur hc.
     *
     * @return bool Returns the saisir absences sur hc.
     */
    public function getSaisirAbsencesSurHc() {
        return $this->saisirAbsencesSurHc;
    }

    /**
     * Get the saisir code chantier achat.
     *
     * @return bool Returns the saisir code chantier achat.
     */
    public function getSaisirCodeChantierAchat() {
        return $this->saisirCodeChantierAchat;
    }

    /**
     * Get the saisir num bt.
     *
     * @return bool Returns the saisir num bt.
     */
    public function getSaisirNumBt() {
        return $this->saisirNumBt;
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
     * Get the taux majo hc33.
     *
     * @return float Returns the taux majo hc33.
     */
    public function getTauxMajoHc33() {
        return $this->tauxMajoHc33;
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
     * Get the taux tva taxe deee.
     *
     * @return float Returns the taux tva taxe deee.
     */
    public function getTauxTvaTaxeDeee() {
        return $this->tauxTvaTaxeDeee;
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
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Get the utiliser stock mini.
     *
     * @return bool Returns the utiliser stock mini.
     */
    public function getUtiliserStockMini() {
        return $this->utiliserStockMini;
    }

    /**
     * Get the visualiser pointage bt valides.
     *
     * @return bool Returns the visualiser pointage bt valides.
     */
    public function getVisualiserPointageBtValides() {
        return $this->visualiserPointageBtValides;
    }

    /**
     * Set the 35 heures.
     *
     * @param DateTime|null $_35Heures The 35 heures.
     * @return Constantes Returns this Constantes.
     */
    public function set35Heures(DateTime $_35Heures = null) {
        $this->_35Heures = $_35Heures;
        return $this;
    }

    /**
     * Set the alertes paie dans pointage.
     *
     * @param bool $alertesPaieDansPointage The alertes paie dans pointage.
     * @return Constantes Returns this Constantes.
     */
    public function setAlertesPaieDansPointage($alertesPaieDansPointage) {
        $this->alertesPaieDansPointage = $alertesPaieDansPointage;
        return $this;
    }

    /**
     * Set the alertes paie dans reclam.
     *
     * @param bool $alertesPaieDansReclam The alertes paie dans reclam.
     * @return Constantes Returns this Constantes.
     */
    public function setAlertesPaieDansReclam($alertesPaieDansReclam) {
        $this->alertesPaieDansReclam = $alertesPaieDansReclam;
        return $this;
    }

    /**
     * Set the analytique nature agence.
     *
     * @param bool $analytiqueNatureAgence The analytique nature agence.
     * @return Constantes Returns this Constantes.
     */
    public function setAnalytiqueNatureAgence($analytiqueNatureAgence) {
        $this->analytiqueNatureAgence = $analytiqueNatureAgence;
        return $this;
    }

    /**
     * Set the analytique par chantier.
     *
     * @param bool $analytiqueParChantier The analytique par chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setAnalytiqueParChantier($analytiqueParChantier) {
        $this->analytiqueParChantier = $analytiqueParChantier;
        return $this;
    }

    /**
     * Set the archiver devis.
     *
     * @param bool $archiverDevis The archiver devis.
     * @return Constantes Returns this Constantes.
     */
    public function setArchiverDevis($archiverDevis) {
        $this->archiverDevis = $archiverDevis;
        return $this;
    }

    /**
     * Set the archiver facture.
     *
     * @param bool $archiverFacture The archiver facture.
     * @return Constantes Returns this Constantes.
     */
    public function setArchiverFacture($archiverFacture) {
        $this->archiverFacture = $archiverFacture;
        return $this;
    }

    /**
     * Set the arrondi sur pu.
     *
     * @param bool $arrondiSurPu The arrondi sur pu.
     * @return Constantes Returns this Constantes.
     */
    public function setArrondiSurPu($arrondiSurPu) {
        $this->arrondiSurPu = $arrondiSurPu;
        return $this;
    }

    /**
     * Set the autoriser da sans maj stock.
     *
     * @param bool $autoriserDaSansMajStock The autoriser da sans maj stock.
     * @return Constantes Returns this Constantes.
     */
    public function setAutoriserDaSansMajStock($autoriserDaSansMajStock) {
        $this->autoriserDaSansMajStock = $autoriserDaSansMajStock;
        return $this;
    }

    /**
     * Set the autoriser dep bud cha cde type.
     *
     * @param bool $autoriserDepBudChaCdeType The autoriser dep bud cha cde type.
     * @return Constantes Returns this Constantes.
     */
    public function setAutoriserDepBudChaCdeType($autoriserDepBudChaCdeType) {
        $this->autoriserDepBudChaCdeType = $autoriserDepBudChaCdeType;
        return $this;
    }

    /**
     * Set the autoriser mensu tache vide.
     *
     * @param bool $autoriserMensuTacheVide The autoriser mensu tache vide.
     * @return Constantes Returns this Constantes.
     */
    public function setAutoriserMensuTacheVide($autoriserMensuTacheVide) {
        $this->autoriserMensuTacheVide = $autoriserMensuTacheVide;
        return $this;
    }

    /**
     * Set the bl num fact.
     *
     * @param int $blNumFact The bl num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setBlNumFact($blNumFact) {
        $this->blNumFact = $blNumFact;
        return $this;
    }

    /**
     * Set the bl prefixe.
     *
     * @param string $blPrefixe The bl prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setBlPrefixe($blPrefixe) {
        $this->blPrefixe = $blPrefixe;
        return $this;
    }

    /**
     * Set the br num fact.
     *
     * @param int $brNumFact The br num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setBrNumFact($brNumFact) {
        $this->brNumFact = $brNumFact;
        return $this;
    }

    /**
     * Set the br prefixe.
     *
     * @param string $brPrefixe The br prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setBrPrefixe($brPrefixe) {
        $this->brPrefixe = $brPrefixe;
        return $this;
    }

    /**
     * Set the bs num fact.
     *
     * @param int $bsNumFact The bs num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setBsNumFact($bsNumFact) {
        $this->bsNumFact = $bsNumFact;
        return $this;
    }

    /**
     * Set the bs prefixe.
     *
     * @param string $bsPrefixe The bs prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setBsPrefixe($bsPrefixe) {
        $this->bsPrefixe = $bsPrefixe;
        return $this;
    }

    /**
     * Set the cdd mensu total heures.
     *
     * @param bool $cddMensuTotalHeures The cdd mensu total heures.
     * @return Constantes Returns this Constantes.
     */
    public function setCddMensuTotalHeures($cddMensuTotalHeures) {
        $this->cddMensuTotalHeures = $cddMensuTotalHeures;
        return $this;
    }

    /**
     * Set the cde client num fact.
     *
     * @param int $cdeClientNumFact The cde client num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeClientNumFact($cdeClientNumFact) {
        $this->cdeClientNumFact = $cdeClientNumFact;
        return $this;
    }

    /**
     * Set the cde client prefixe.
     *
     * @param string $cdeClientPrefixe The cde client prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeClientPrefixe($cdeClientPrefixe) {
        $this->cdeClientPrefixe = $cdeClientPrefixe;
        return $this;
    }

    /**
     * Set the cde frn num fact.
     *
     * @param int $cdeFrnNumFact The cde frn num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeFrnNumFact($cdeFrnNumFact) {
        $this->cdeFrnNumFact = $cdeFrnNumFact;
        return $this;
    }

    /**
     * Set the cde frn prefixe.
     *
     * @param string $cdeFrnPrefixe The cde frn prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setCdeFrnPrefixe($cdeFrnPrefixe) {
        $this->cdeFrnPrefixe = $cdeFrnPrefixe;
        return $this;
    }

    /**
     * Set the centralisation vente.
     *
     * @param bool $centralisationVente The centralisation vente.
     * @return Constantes Returns this Constantes.
     */
    public function setCentralisationVente($centralisationVente) {
        $this->centralisationVente = $centralisationVente;
        return $this;
    }

    /**
     * Set the charge mensuelle sans tache.
     *
     * @param bool $chargeMensuelleSansTache The charge mensuelle sans tache.
     * @return Constantes Returns this Constantes.
     */
    public function setChargeMensuelleSansTache($chargeMensuelleSansTache) {
        $this->chargeMensuelleSansTache = $chargeMensuelleSansTache;
        return $this;
    }

    /**
     * Set the chemin doss compta.
     *
     * @param string $cheminDossCompta The chemin doss compta.
     * @return Constantes Returns this Constantes.
     */
    public function setCheminDossCompta($cheminDossCompta) {
        $this->cheminDossCompta = $cheminDossCompta;
        return $this;
    }

    /**
     * Set the cle debloquer periode cloturee.
     *
     * @param string $cleDebloquerPeriodeCloturee The cle debloquer periode cloturee.
     * @return Constantes Returns this Constantes.
     */
    public function setCleDebloquerPeriodeCloturee($cleDebloquerPeriodeCloturee) {
        $this->cleDebloquerPeriodeCloturee = $cleDebloquerPeriodeCloturee;
        return $this;
    }

    /**
     * Set the code abs cp sans solde.
     *
     * @param string $codeAbsCpSansSolde The code abs cp sans solde.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsCpSansSolde($codeAbsCpSansSolde) {
        $this->codeAbsCpSansSolde = $codeAbsCpSansSolde;
        return $this;
    }

    /**
     * Set the code abs def jf.
     *
     * @param string $codeAbsDefJf The code abs def jf.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsDefJf($codeAbsDefJf) {
        $this->codeAbsDefJf = $codeAbsDefJf;
        return $this;
    }

    /**
     * Set the code abs def jf moins3.
     *
     * @param string $codeAbsDefJfMoins3 The code abs def jf moins3.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsDefJfMoins3($codeAbsDefJfMoins3) {
        $this->codeAbsDefJfMoins3 = $codeAbsDefJfMoins3;
        return $this;
    }

    /**
     * Set the code abs fermeture chantier.
     *
     * @param string $codeAbsFermetureChantier The code abs fermeture chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsFermetureChantier($codeAbsFermetureChantier) {
        $this->codeAbsFermetureChantier = $codeAbsFermetureChantier;
        return $this;
    }

    /**
     * Set the code abs pointage defaut.
     *
     * @param string $codeAbsPointageDefaut The code abs pointage defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeAbsPointageDefaut($codeAbsPointageDefaut) {
        $this->codeAbsPointageDefaut = $codeAbsPointageDefaut;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot par defaut.
     *
     * @param string $codeDepotParDefaut The code depot par defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeDepotParDefaut($codeDepotParDefaut) {
        $this->codeDepotParDefaut = $codeDepotParDefaut;
        return $this;
    }

    /**
     * Set the code ics.
     *
     * @param string $codeIcs The code ics.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeIcs($codeIcs) {
        $this->codeIcs = $codeIcs;
        return $this;
    }

    /**
     * Set the code ja.
     *
     * @param string $codeJa The code ja.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeJa($codeJa) {
        $this->codeJa = $codeJa;
        return $this;
    }

    /**
     * Set the code jv negoce.
     *
     * @param string $codeJvNegoce The code jv negoce.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeJvNegoce($codeJvNegoce) {
        $this->codeJvNegoce = $codeJvNegoce;
        return $this;
    }

    /**
     * Set the code jv prestation.
     *
     * @param string $codeJvPrestation The code jv prestation.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeJvPrestation($codeJvPrestation) {
        $this->codeJvPrestation = $codeJvPrestation;
        return $this;
    }

    /**
     * Set the code liv par defaut.
     *
     * @param string $codeLivParDefaut The code liv par defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeLivParDefaut($codeLivParDefaut) {
        $this->codeLivParDefaut = $codeLivParDefaut;
        return $this;
    }

    /**
     * Set the code prime chantier1.
     *
     * @param string $codePrimeChantier1 The code prime chantier1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeChantier1($codePrimeChantier1) {
        $this->codePrimeChantier1 = $codePrimeChantier1;
        return $this;
    }

    /**
     * Set the code prime chantier2.
     *
     * @param string $codePrimeChantier2 The code prime chantier2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeChantier2($codePrimeChantier2) {
        $this->codePrimeChantier2 = $codePrimeChantier2;
        return $this;
    }

    /**
     * Set the code prime chantier3.
     *
     * @param string $codePrimeChantier3 The code prime chantier3.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeChantier3($codePrimeChantier3) {
        $this->codePrimeChantier3 = $codePrimeChantier3;
        return $this;
    }

    /**
     * Set the code prime dimanche1.
     *
     * @param string $codePrimeDimanche1 The code prime dimanche1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeDimanche1($codePrimeDimanche1) {
        $this->codePrimeDimanche1 = $codePrimeDimanche1;
        return $this;
    }

    /**
     * Set the code prime dimanche1 type2.
     *
     * @param string $codePrimeDimanche1Type2 The code prime dimanche1 type2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeDimanche1Type2($codePrimeDimanche1Type2) {
        $this->codePrimeDimanche1Type2 = $codePrimeDimanche1Type2;
        return $this;
    }

    /**
     * Set the code prime dimanche2.
     *
     * @param string $codePrimeDimanche2 The code prime dimanche2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeDimanche2($codePrimeDimanche2) {
        $this->codePrimeDimanche2 = $codePrimeDimanche2;
        return $this;
    }

    /**
     * Set the code prime forfait.
     *
     * @param string $codePrimeForfait The code prime forfait.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeForfait($codePrimeForfait) {
        $this->codePrimeForfait = $codePrimeForfait;
        return $this;
    }

    /**
     * Set the code prime h compl.
     *
     * @param string $codePrimeHCompl The code prime h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeHCompl($codePrimeHCompl) {
        $this->codePrimeHCompl = $codePrimeHCompl;
        return $this;
    }

    /**
     * Set the code prime h compl2.
     *
     * @param string $codePrimeHCompl2 The code prime h compl2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeHCompl2($codePrimeHCompl2) {
        $this->codePrimeHCompl2 = $codePrimeHCompl2;
        return $this;
    }

    /**
     * Set the code prime jf1.
     *
     * @param string $codePrimeJf1 The code prime jf1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJf1($codePrimeJf1) {
        $this->codePrimeJf1 = $codePrimeJf1;
        return $this;
    }

    /**
     * Set the code prime jf1 type2.
     *
     * @param string $codePrimeJf1Type2 The code prime jf1 type2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJf1Type2($codePrimeJf1Type2) {
        $this->codePrimeJf1Type2 = $codePrimeJf1Type2;
        return $this;
    }

    /**
     * Set the code prime jf2.
     *
     * @param string $codePrimeJf2 The code prime jf2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJf2($codePrimeJf2) {
        $this->codePrimeJf2 = $codePrimeJf2;
        return $this;
    }

    /**
     * Set the code prime jf mai.
     *
     * @param string $codePrimeJfMai The code prime jf mai.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeJfMai($codePrimeJfMai) {
        $this->codePrimeJfMai = $codePrimeJfMai;
        return $this;
    }

    /**
     * Set the code prime nuit1.
     *
     * @param string $codePrimeNuit1 The code prime nuit1.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeNuit1($codePrimeNuit1) {
        $this->codePrimeNuit1 = $codePrimeNuit1;
        return $this;
    }

    /**
     * Set the code prime nuit1 type2.
     *
     * @param string $codePrimeNuit1Type2 The code prime nuit1 type2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeNuit1Type2($codePrimeNuit1Type2) {
        $this->codePrimeNuit1Type2 = $codePrimeNuit1Type2;
        return $this;
    }

    /**
     * Set the code prime nuit2.
     *
     * @param string $codePrimeNuit2 The code prime nuit2.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeNuit2($codePrimeNuit2) {
        $this->codePrimeNuit2 = $codePrimeNuit2;
        return $this;
    }

    /**
     * Set the code prime paniers.
     *
     * @param string $codePrimePaniers The code prime paniers.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimePaniers($codePrimePaniers) {
        $this->codePrimePaniers = $codePrimePaniers;
        return $this;
    }

    /**
     * Set the code prime rs.
     *
     * @param string $codePrimeRs The code prime rs.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeRs($codePrimeRs) {
        $this->codePrimeRs = $codePrimeRs;
        return $this;
    }

    /**
     * Set the code prime tp.
     *
     * @param string $codePrimeTp The code prime tp.
     * @return Constantes Returns this Constantes.
     */
    public function setCodePrimeTp($codePrimeTp) {
        $this->codePrimeTp = $codePrimeTp;
        return $this;
    }

    /**
     * Set the code reg jv neg debut.
     *
     * @param string $codeRegJvNegDebut The code reg jv neg debut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvNegDebut($codeRegJvNegDebut) {
        $this->codeRegJvNegDebut = $codeRegJvNegDebut;
        return $this;
    }

    /**
     * Set the code reg jv neg fin.
     *
     * @param string $codeRegJvNegFin The code reg jv neg fin.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvNegFin($codeRegJvNegFin) {
        $this->codeRegJvNegFin = $codeRegJvNegFin;
        return $this;
    }

    /**
     * Set the code reg jv prest debut.
     *
     * @param string $codeRegJvPrestDebut The code reg jv prest debut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvPrestDebut($codeRegJvPrestDebut) {
        $this->codeRegJvPrestDebut = $codeRegJvPrestDebut;
        return $this;
    }

    /**
     * Set the code reg jv prest fin.
     *
     * @param string $codeRegJvPrestFin The code reg jv prest fin.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeRegJvPrestFin($codeRegJvPrestFin) {
        $this->codeRegJvPrestFin = $codeRegJvPrestFin;
        return $this;
    }

    /**
     * Set the code tache defaut.
     *
     * @param string $codeTacheDefaut The code tache defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setCodeTacheDefaut($codeTacheDefaut) {
        $this->codeTacheDefaut = $codeTacheDefaut;
        return $this;
    }

    /**
     * Set the collectif def.
     *
     * @param string $collectifDef The collectif def.
     * @return Constantes Returns this Constantes.
     */
    public function setCollectifDef($collectifDef) {
        $this->collectifDef = $collectifDef;
        return $this;
    }

    /**
     * Set the collectif def fournisseur.
     *
     * @param string $collectifDefFournisseur The collectif def fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setCollectifDefFournisseur($collectifDefFournisseur) {
        $this->collectifDefFournisseur = $collectifDefFournisseur;
        return $this;
    }

    /**
     * Set the commentaire journee solidarite.
     *
     * @param string $commentaireJourneeSolidarite The commentaire journee solidarite.
     * @return Constantes Returns this Constantes.
     */
    public function setCommentaireJourneeSolidarite($commentaireJourneeSolidarite) {
        $this->commentaireJourneeSolidarite = $commentaireJourneeSolidarite;
        return $this;
    }

    /**
     * Set the compte collectif achat.
     *
     * @param string $compteCollectifAchat The compte collectif achat.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteCollectifAchat($compteCollectifAchat) {
        $this->compteCollectifAchat = $compteCollectifAchat;
        return $this;
    }

    /**
     * Set the compte collectif vente.
     *
     * @param string $compteCollectifVente The compte collectif vente.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteCollectifVente($compteCollectifVente) {
        $this->compteCollectifVente = $compteCollectifVente;
        return $this;
    }

    /**
     * Set the compte escompte ca exonere.
     *
     * @param string $compteEscompteCaExonere The compte escompte ca exonere.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteEscompteCaExonere($compteEscompteCaExonere) {
        $this->compteEscompteCaExonere = $compteEscompteCaExonere;
        return $this;
    }

    /**
     * Set the compte escompte soumis tva.
     *
     * @param string $compteEscompteSoumisTva The compte escompte soumis tva.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteEscompteSoumisTva($compteEscompteSoumisTva) {
        $this->compteEscompteSoumisTva = $compteEscompteSoumisTva;
        return $this;
    }

    /**
     * Set the compte tva achat.
     *
     * @param string $compteTvaAchat The compte tva achat.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteTvaAchat($compteTvaAchat) {
        $this->compteTvaAchat = $compteTvaAchat;
        return $this;
    }

    /**
     * Set the compte tva taxe deee.
     *
     * @param string $compteTvaTaxeDeee The compte tva taxe deee.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteTvaTaxeDeee($compteTvaTaxeDeee) {
        $this->compteTvaTaxeDeee = $compteTvaTaxeDeee;
        return $this;
    }

    /**
     * Set the compte tva vente.
     *
     * @param string $compteTvaVente The compte tva vente.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteTvaVente($compteTvaVente) {
        $this->compteTvaVente = $compteTvaVente;
        return $this;
    }

    /**
     * Set the compte ventil taxe deee.
     *
     * @param string $compteVentilTaxeDeee The compte ventil taxe deee.
     * @return Constantes Returns this Constantes.
     */
    public function setCompteVentilTaxeDeee($compteVentilTaxeDeee) {
        $this->compteVentilTaxeDeee = $compteVentilTaxeDeee;
        return $this;
    }

    /**
     * Set the compter samedi tf cp paie.
     *
     * @param bool $compterSamediTfCpPaie The compter samedi tf cp paie.
     * @return Constantes Returns this Constantes.
     */
    public function setCompterSamediTfCpPaie($compterSamediTfCpPaie) {
        $this->compterSamediTfCpPaie = $compterSamediTfCpPaie;
        return $this;
    }

    /**
     * Set the controler cde frn.
     *
     * @param bool $controlerCdeFrn The controler cde frn.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerCdeFrn($controlerCdeFrn) {
        $this->controlerCdeFrn = $controlerCdeFrn;
        return $this;
    }

    /**
     * Set the controler charges mensuelles.
     *
     * @param bool $controlerChargesMensuelles The controler charges mensuelles.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerChargesMensuelles($controlerChargesMensuelles) {
        $this->controlerChargesMensuelles = $controlerChargesMensuelles;
        return $this;
    }

    /**
     * Set the controler code reg.
     *
     * @param bool $controlerCodeReg The controler code reg.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerCodeReg($controlerCodeReg) {
        $this->controlerCodeReg = $controlerCodeReg;
        return $this;
    }

    /**
     * Set the controler dep hc max.
     *
     * @param bool $controlerDepHcMax The controler dep hc max.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerDepHcMax($controlerDepHcMax) {
        $this->controlerDepHcMax = $controlerDepHcMax;
        return $this;
    }

    /**
     * Set the controler dep hc plus mois.
     *
     * @param bool $controlerDepHcPlusMois The controler dep hc plus mois.
     * @return Constantes Returns this Constantes.
     */
    public function setControlerDepHcPlusMois($controlerDepHcPlusMois) {
        $this->controlerDepHcPlusMois = $controlerDepHcPlusMois;
        return $this;
    }

    /**
     * Set the cp sans provisions.
     *
     * @param bool $cpSansProvisions The cp sans provisions.
     * @return Constantes Returns this Constantes.
     */
    public function setCpSansProvisions($cpSansProvisions) {
        $this->cpSansProvisions = $cpSansProvisions;
        return $this;
    }

    /**
     * Set the creer alerte paie def en paie.
     *
     * @param bool $creerAlertePaieDefEnPaie The creer alerte paie def en paie.
     * @return Constantes Returns this Constantes.
     */
    public function setCreerAlertePaieDefEnPaie($creerAlertePaieDefEnPaie) {
        $this->creerAlertePaieDefEnPaie = $creerAlertePaieDefEnPaie;
        return $this;
    }

    /**
     * Set the ctrl auto cp.
     *
     * @param bool $ctrlAutoCp The ctrl auto cp.
     * @return Constantes Returns this Constantes.
     */
    public function setCtrlAutoCp($ctrlAutoCp) {
        $this->ctrlAutoCp = $ctrlAutoCp;
        return $this;
    }

    /**
     * Set the ctrl auto cp avec anticipation.
     *
     * @param bool $ctrlAutoCpAvecAnticipation The ctrl auto cp avec anticipation.
     * @return Constantes Returns this Constantes.
     */
    public function setCtrlAutoCpAvecAnticipation($ctrlAutoCpAvecAnticipation) {
        $this->ctrlAutoCpAvecAnticipation = $ctrlAutoCpAvecAnticipation;
        return $this;
    }

    /**
     * Set the date appli gestion heures en plus.
     *
     * @param DateTime|null $dateAppliGestionHeuresEnPlus The date appli gestion heures en plus.
     * @return Constantes Returns this Constantes.
     */
    public function setDateAppliGestionHeuresEnPlus(DateTime $dateAppliGestionHeuresEnPlus = null) {
        $this->dateAppliGestionHeuresEnPlus = $dateAppliGestionHeuresEnPlus;
        return $this;
    }

    /**
     * Set the date journee solidarite.
     *
     * @param DateTime|null $dateJourneeSolidarite The date journee solidarite.
     * @return Constantes Returns this Constantes.
     */
    public function setDateJourneeSolidarite(DateTime $dateJourneeSolidarite = null) {
        $this->dateJourneeSolidarite = $dateJourneeSolidarite;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return Constantes Returns this Constantes.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the dec mois prep fact.
     *
     * @param int $decMoisPrepFact The dec mois prep fact.
     * @return Constantes Returns this Constantes.
     */
    public function setDecMoisPrepFact($decMoisPrepFact) {
        $this->decMoisPrepFact = $decMoisPrepFact;
        return $this;
    }

    /**
     * Set the dernier compte client.
     *
     * @param string $dernierCompteClient The dernier compte client.
     * @return Constantes Returns this Constantes.
     */
    public function setDernierCompteClient($dernierCompteClient) {
        $this->dernierCompteClient = $dernierCompteClient;
        return $this;
    }

    /**
     * Set the dernier compte frn.
     *
     * @param string $dernierCompteFrn The dernier compte frn.
     * @return Constantes Returns this Constantes.
     */
    public function setDernierCompteFrn($dernierCompteFrn) {
        $this->dernierCompteFrn = $dernierCompteFrn;
        return $this;
    }

    /**
     * Set the discr.
     *
     * @param string $discr The discr.
     * @return Constantes Returns this Constantes.
     */
    public function setDiscr($discr) {
        $this->discr = $discr;
        return $this;
    }

    /**
     * Set the doss compta.
     *
     * @param string $dossCompta The doss compta.
     * @return Constantes Returns this Constantes.
     */
    public function setDossCompta($dossCompta) {
        $this->dossCompta = $dossCompta;
        return $this;
    }

    /**
     * Set the doss paie.
     *
     * @param string $dossPaie The doss paie.
     * @return Constantes Returns this Constantes.
     */
    public function setDossPaie($dossPaie) {
        $this->dossPaie = $dossPaie;
        return $this;
    }

    /**
     * Set the es code abs entree.
     *
     * @param string $esCodeAbsEntree The es code abs entree.
     * @return Constantes Returns this Constantes.
     */
    public function setEsCodeAbsEntree($esCodeAbsEntree) {
        $this->esCodeAbsEntree = $esCodeAbsEntree;
        return $this;
    }

    /**
     * Set the es code abs sortie.
     *
     * @param string $esCodeAbsSortie The es code abs sortie.
     * @return Constantes Returns this Constantes.
     */
    public function setEsCodeAbsSortie($esCodeAbsSortie) {
        $this->esCodeAbsSortie = $esCodeAbsSortie;
        return $this;
    }

    /**
     * Set the es heures reelles.
     *
     * @param bool $esHeuresReelles The es heures reelles.
     * @return Constantes Returns this Constantes.
     */
    public function setEsHeuresReelles($esHeuresReelles) {
        $this->esHeuresReelles = $esHeuresReelles;
        return $this;
    }

    /**
     * Set the etablissements paie.
     *
     * @param string $etablissementsPaie The etablissements paie.
     * @return Constantes Returns this Constantes.
     */
    public function setEtablissementsPaie($etablissementsPaie) {
        $this->etablissementsPaie = $etablissementsPaie;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return Constantes Returns this Constantes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the euro.
     *
     * @param bool $euro The euro.
     * @return Constantes Returns this Constantes.
     */
    public function setEuro($euro) {
        $this->euro = $euro;
        return $this;
    }

    /**
     * Set the facturation prorata heures.
     *
     * @param bool $facturationProrataHeures The facturation prorata heures.
     * @return Constantes Returns this Constantes.
     */
    public function setFacturationProrataHeures($facturationProrataHeures) {
        $this->facturationProrataHeures = $facturationProrataHeures;
        return $this;
    }

    /**
     * Set the folio ja.
     *
     * @param string $folioJa The folio ja.
     * @return Constantes Returns this Constantes.
     */
    public function setFolioJa($folioJa) {
        $this->folioJa = $folioJa;
        return $this;
    }

    /**
     * Set the folio jv negoce.
     *
     * @param string $folioJvNegoce The folio jv negoce.
     * @return Constantes Returns this Constantes.
     */
    public function setFolioJvNegoce($folioJvNegoce) {
        $this->folioJvNegoce = $folioJvNegoce;
        return $this;
    }

    /**
     * Set the folio jv prestation.
     *
     * @param string $folioJvPrestation The folio jv prestation.
     * @return Constantes Returns this Constantes.
     */
    public function setFolioJvPrestation($folioJvPrestation) {
        $this->folioJvPrestation = $folioJvPrestation;
        return $this;
    }

    /**
     * Set the gerer num cpt chantier.
     *
     * @param bool $gererNumCptChantier The gerer num cpt chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setGererNumCptChantier($gererNumCptChantier) {
        $this->gererNumCptChantier = $gererNumCptChantier;
        return $this;
    }

    /**
     * Set the gestion h compl.
     *
     * @param bool $gestionHCompl The gestion h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionHCompl($gestionHCompl) {
        $this->gestionHCompl = $gestionHCompl;
        return $this;
    }

    /**
     * Set the gestion h sup mens.
     *
     * @param bool $gestionHSupMens The gestion h sup mens.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionHSupMens($gestionHSupMens) {
        $this->gestionHSupMens = $gestionHSupMens;
        return $this;
    }

    /**
     * Set the gestion h sup mensuelle.
     *
     * @param bool $gestionHSupMensuelle The gestion h sup mensuelle.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionHSupMensuelle($gestionHSupMensuelle) {
        $this->gestionHSupMensuelle = $gestionHSupMensuelle;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string $gestionMajDim The gestion maj dim.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMajDim($gestionMajDim) {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj jf.
     *
     * @param string $gestionMajJf The gestion maj jf.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMajJf($gestionMajJf) {
        $this->gestionMajJf = $gestionMajJf;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string $gestionMajNuit The gestion maj nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMajNuit($gestionMajNuit) {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the gestion multi depot.
     *
     * @param bool $gestionMultiDepot The gestion multi depot.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionMultiDepot($gestionMultiDepot) {
        $this->gestionMultiDepot = $gestionMultiDepot;
        return $this;
    }

    /**
     * Set the gestion quotas.
     *
     * @param bool $gestionQuotas The gestion quotas.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionQuotas($gestionQuotas) {
        $this->gestionQuotas = $gestionQuotas;
        return $this;
    }

    /**
     * Set the gestion specif jf.
     *
     * @param bool $gestionSpecifJf The gestion specif jf.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionSpecifJf($gestionSpecifJf) {
        $this->gestionSpecifJf = $gestionSpecifJf;
        return $this;
    }

    /**
     * Set the gestion specif majo jf.
     *
     * @param bool $gestionSpecifMajoJf The gestion specif majo jf.
     * @return Constantes Returns this Constantes.
     */
    public function setGestionSpecifMajoJf($gestionSpecifMajoJf) {
        $this->gestionSpecifMajoJf = $gestionSpecifMajoJf;
        return $this;
    }

    /**
     * Set the h deb nuit.
     *
     * @param DateTime|null $hDebNuit The h deb nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHDebNuit(DateTime $hDebNuit = null) {
        $this->hDebNuit = $hDebNuit;
        return $this;
    }

    /**
     * Set the h deb nuit trav nuit.
     *
     * @param DateTime|null $hDebNuitTravNuit The h deb nuit trav nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHDebNuitTravNuit(DateTime $hDebNuitTravNuit = null) {
        $this->hDebNuitTravNuit = $hDebNuitTravNuit;
        return $this;
    }

    /**
     * Set the h fin nuit.
     *
     * @param DateTime|null $hFinNuit The h fin nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHFinNuit(DateTime $hFinNuit = null) {
        $this->hFinNuit = $hFinNuit;
        return $this;
    }

    /**
     * Set the h fin nuit trav nuit.
     *
     * @param DateTime|null $hFinNuitTravNuit The h fin nuit trav nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setHFinNuitTravNuit(DateTime $hFinNuitTravNuit = null) {
        $this->hFinNuitTravNuit = $hFinNuitTravNuit;
        return $this;
    }

    /**
     * Set the heures absence mensualise.
     *
     * @param bool $heuresAbsenceMensualise The heures absence mensualise.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresAbsenceMensualise($heuresAbsenceMensualise) {
        $this->heuresAbsenceMensualise = $heuresAbsenceMensualise;
        return $this;
    }

    /**
     * Set the heures rempl egales mens titulaire.
     *
     * @param bool $heuresRemplEgalesMensTitulaire The heures rempl egales mens titulaire.
     * @return Constantes Returns this Constantes.
     */
    public function setHeuresRemplEgalesMensTitulaire($heuresRemplEgalesMensTitulaire) {
        $this->heuresRemplEgalesMensTitulaire = $heuresRemplEgalesMensTitulaire;
        return $this;
    }

    /**
     * Set the increment compte auto.
     *
     * @param int $incrementCompteAuto The increment compte auto.
     * @return Constantes Returns this Constantes.
     */
    public function setIncrementCompteAuto($incrementCompteAuto) {
        $this->incrementCompteAuto = $incrementCompteAuto;
        return $this;
    }

    /**
     * Set the liaison compta win.
     *
     * @param bool $liaisonComptaWin The liaison compta win.
     * @return Constantes Returns this Constantes.
     */
    public function setLiaisonComptaWin($liaisonComptaWin) {
        $this->liaisonComptaWin = $liaisonComptaWin;
        return $this;
    }

    /**
     * Set the lib critere bool1.
     *
     * @param string $libCritereBool1 The lib critere bool1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereBool1($libCritereBool1) {
        $this->libCritereBool1 = $libCritereBool1;
        return $this;
    }

    /**
     * Set the lib critere bool2.
     *
     * @param string $libCritereBool2 The lib critere bool2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereBool2($libCritereBool2) {
        $this->libCritereBool2 = $libCritereBool2;
        return $this;
    }

    /**
     * Set the lib critere byte1.
     *
     * @param string $libCritereByte1 The lib critere byte1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereByte1($libCritereByte1) {
        $this->libCritereByte1 = $libCritereByte1;
        return $this;
    }

    /**
     * Set the lib critere num1.
     *
     * @param string $libCritereNum1 The lib critere num1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum1($libCritereNum1) {
        $this->libCritereNum1 = $libCritereNum1;
        return $this;
    }

    /**
     * Set the lib critere num2.
     *
     * @param string $libCritereNum2 The lib critere num2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum2($libCritereNum2) {
        $this->libCritereNum2 = $libCritereNum2;
        return $this;
    }

    /**
     * Set the lib critere num3.
     *
     * @param string $libCritereNum3 The lib critere num3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum3($libCritereNum3) {
        $this->libCritereNum3 = $libCritereNum3;
        return $this;
    }

    /**
     * Set the lib critere num4.
     *
     * @param string $libCritereNum4 The lib critere num4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum4($libCritereNum4) {
        $this->libCritereNum4 = $libCritereNum4;
        return $this;
    }

    /**
     * Set the lib critere num5.
     *
     * @param string $libCritereNum5 The lib critere num5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereNum5($libCritereNum5) {
        $this->libCritereNum5 = $libCritereNum5;
        return $this;
    }

    /**
     * Set the lib critere tab1.
     *
     * @param string $libCritereTab1 The lib critere tab1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab1($libCritereTab1) {
        $this->libCritereTab1 = $libCritereTab1;
        return $this;
    }

    /**
     * Set the lib critere tab2.
     *
     * @param string $libCritereTab2 The lib critere tab2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab2($libCritereTab2) {
        $this->libCritereTab2 = $libCritereTab2;
        return $this;
    }

    /**
     * Set the lib critere tab3.
     *
     * @param string $libCritereTab3 The lib critere tab3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab3($libCritereTab3) {
        $this->libCritereTab3 = $libCritereTab3;
        return $this;
    }

    /**
     * Set the lib critere tab4.
     *
     * @param string $libCritereTab4 The lib critere tab4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab4($libCritereTab4) {
        $this->libCritereTab4 = $libCritereTab4;
        return $this;
    }

    /**
     * Set the lib critere tab5.
     *
     * @param string $libCritereTab5 The lib critere tab5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTab5($libCritereTab5) {
        $this->libCritereTab5 = $libCritereTab5;
        return $this;
    }

    /**
     * Set the lib critere txt1.
     *
     * @param string $libCritereTxt1 The lib critere txt1.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt1($libCritereTxt1) {
        $this->libCritereTxt1 = $libCritereTxt1;
        return $this;
    }

    /**
     * Set the lib critere txt2.
     *
     * @param string $libCritereTxt2 The lib critere txt2.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt2($libCritereTxt2) {
        $this->libCritereTxt2 = $libCritereTxt2;
        return $this;
    }

    /**
     * Set the lib critere txt3.
     *
     * @param string $libCritereTxt3 The lib critere txt3.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt3($libCritereTxt3) {
        $this->libCritereTxt3 = $libCritereTxt3;
        return $this;
    }

    /**
     * Set the lib critere txt4.
     *
     * @param string $libCritereTxt4 The lib critere txt4.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt4($libCritereTxt4) {
        $this->libCritereTxt4 = $libCritereTxt4;
        return $this;
    }

    /**
     * Set the lib critere txt5.
     *
     * @param string $libCritereTxt5 The lib critere txt5.
     * @return Constantes Returns this Constantes.
     */
    public function setLibCritereTxt5($libCritereTxt5) {
        $this->libCritereTxt5 = $libCritereTxt5;
        return $this;
    }

    /**
     * Set the libelle auto avoir.
     *
     * @param string $libelleAutoAvoir The libelle auto avoir.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleAutoAvoir($libelleAutoAvoir) {
        $this->libelleAutoAvoir = $libelleAutoAvoir;
        return $this;
    }

    /**
     * Set the libelle auto facture.
     *
     * @param string $libelleAutoFacture The libelle auto facture.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleAutoFacture($libelleAutoFacture) {
        $this->libelleAutoFacture = $libelleAutoFacture;
        return $this;
    }

    /**
     * Set the libelle heures surcroit.
     *
     * @param string $libelleHeuresSurcroit The libelle heures surcroit.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleHeuresSurcroit($libelleHeuresSurcroit) {
        $this->libelleHeuresSurcroit = $libelleHeuresSurcroit;
        return $this;
    }

    /**
     * Set the libelle transfert.
     *
     * @param string $libelleTransfert The libelle transfert.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleTransfert($libelleTransfert) {
        $this->libelleTransfert = $libelleTransfert;
        return $this;
    }

    /**
     * Set the libelle transfert achat.
     *
     * @param string $libelleTransfertAchat The libelle transfert achat.
     * @return Constantes Returns this Constantes.
     */
    public function setLibelleTransfertAchat($libelleTransfertAchat) {
        $this->libelleTransfertAchat = $libelleTransfertAchat;
        return $this;
    }

    /**
     * Set the liv cde frn depot unique.
     *
     * @param bool $livCdeFrnDepotUnique The liv cde frn depot unique.
     * @return Constantes Returns this Constantes.
     */
    public function setLivCdeFrnDepotUnique($livCdeFrnDepotUnique) {
        $this->livCdeFrnDepotUnique = $livCdeFrnDepotUnique;
        return $this;
    }

    /**
     * Set the mail attestations.
     *
     * @param string $mailAttestations The mail attestations.
     * @return Constantes Returns this Constantes.
     */
    public function setMailAttestations($mailAttestations) {
        $this->mailAttestations = $mailAttestations;
        return $this;
    }

    /**
     * Set the mail factures.
     *
     * @param string $mailFactures The mail factures.
     * @return Constantes Returns this Constantes.
     */
    public function setMailFactures($mailFactures) {
        $this->mailFactures = $mailFactures;
        return $this;
    }

    /**
     * Set the maj dernier passage bt.
     *
     * @param bool $majDernierPassageBt The maj dernier passage bt.
     * @return Constantes Returns this Constantes.
     */
    public function setMajDernierPassageBt($majDernierPassageBt) {
        $this->majDernierPassageBt = $majDernierPassageBt;
        return $this;
    }

    /**
     * Set the maj dernier prix achat.
     *
     * @param bool $majDernierPrixAchat The maj dernier prix achat.
     * @return Constantes Returns this Constantes.
     */
    public function setMajDernierPrixAchat($majDernierPrixAchat) {
        $this->majDernierPrixAchat = $majDernierPrixAchat;
        return $this;
    }

    /**
     * Set the maj pamp.
     *
     * @param bool $majPamp The maj pamp.
     * @return Constantes Returns this Constantes.
     */
    public function setMajPamp($majPamp) {
        $this->majPamp = $majPamp;
        return $this;
    }

    /**
     * Set the majoration cascade.
     *
     * @param bool $majorationCascade The majoration cascade.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorationCascade($majorationCascade) {
        $this->majorationCascade = $majorationCascade;
        return $this;
    }

    /**
     * Set the majoration h plus.
     *
     * @param string $majorationHPlus The majoration h plus.
     * @return Constantes Returns this Constantes.
     */
    public function setMajorationHPlus($majorationHPlus) {
        $this->majorationHPlus = $majorationHPlus;
        return $this;
    }

    /**
     * Set the marge niveau edition.
     *
     * @param string $margeNiveauEdition The marge niveau edition.
     * @return Constantes Returns this Constantes.
     */
    public function setMargeNiveauEdition($margeNiveauEdition) {
        $this->margeNiveauEdition = $margeNiveauEdition;
        return $this;
    }

    /**
     * Set the marge pourcent charge.
     *
     * @param float $margePourcentCharge The marge pourcent charge.
     * @return Constantes Returns this Constantes.
     */
    public function setMargePourcentCharge($margePourcentCharge) {
        $this->margePourcentCharge = $margePourcentCharge;
        return $this;
    }

    /**
     * Set the marge sal insp prorata ca.
     *
     * @param bool $margeSalInspProrataCa The marge sal insp prorata ca.
     * @return Constantes Returns this Constantes.
     */
    public function setMargeSalInspProrataCa($margeSalInspProrataCa) {
        $this->margeSalInspProrataCa = $margeSalInspProrataCa;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param bool $mensualisationTache The mensualisation tache.
     * @return Constantes Returns this Constantes.
     */
    public function setMensualisationTache($mensualisationTache) {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the mode calcul proposition cde.
     *
     * @param string $modeCalculPropositionCde The mode calcul proposition cde.
     * @return Constantes Returns this Constantes.
     */
    public function setModeCalculPropositionCde($modeCalculPropositionCde) {
        $this->modeCalculPropositionCde = $modeCalculPropositionCde;
        return $this;
    }

    /**
     * Set the modele devis.
     *
     * @param string $modeleDevis The modele devis.
     * @return Constantes Returns this Constantes.
     */
    public function setModeleDevis($modeleDevis) {
        $this->modeleDevis = $modeleDevis;
        return $this;
    }

    /**
     * Set the modele devis tech.
     *
     * @param string $modeleDevisTech The modele devis tech.
     * @return Constantes Returns this Constantes.
     */
    public function setModeleDevisTech($modeleDevisTech) {
        $this->modeleDevisTech = $modeleDevisTech;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string $modeleFacture The modele facture.
     * @return Constantes Returns this Constantes.
     */
    public function setModeleFacture($modeleFacture) {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the mt cpta negatif.
     *
     * @param bool $mtCptaNegatif The mt cpta negatif.
     * @return Constantes Returns this Constantes.
     */
    public function setMtCptaNegatif($mtCptaNegatif) {
        $this->mtCptaNegatif = $mtCptaNegatif;
        return $this;
    }

    /**
     * Set the n der document.
     *
     * @param int $nDerDocument The n der document.
     * @return Constantes Returns this Constantes.
     */
    public function setNDerDocument($nDerDocument) {
        $this->nDerDocument = $nDerDocument;
        return $this;
    }

    /**
     * Set the nb caracteres ligne fact.
     *
     * @param string $nbCaracteresLigneFact The nb caracteres ligne fact.
     * @return Constantes Returns this Constantes.
     */
    public function setNbCaracteresLigneFact($nbCaracteresLigneFact) {
        $this->nbCaracteresLigneFact = $nbCaracteresLigneFact;
        return $this;
    }

    /**
     * Set the nb decimales prix unitaire.
     *
     * @param string $nbDecimalesPrixUnitaire The nb decimales prix unitaire.
     * @return Constantes Returns this Constantes.
     */
    public function setNbDecimalesPrixUnitaire($nbDecimalesPrixUnitaire) {
        $this->nbDecimalesPrixUnitaire = $nbDecimalesPrixUnitaire;
        return $this;
    }

    /**
     * Set the nb decimales quantite.
     *
     * @param string $nbDecimalesQuantite The nb decimales quantite.
     * @return Constantes Returns this Constantes.
     */
    public function setNbDecimalesQuantite($nbDecimalesQuantite) {
        $this->nbDecimalesQuantite = $nbDecimalesQuantite;
        return $this;
    }

    /**
     * Set the nb entiers prix unitaire.
     *
     * @param string $nbEntiersPrixUnitaire The nb entiers prix unitaire.
     * @return Constantes Returns this Constantes.
     */
    public function setNbEntiersPrixUnitaire($nbEntiersPrixUnitaire) {
        $this->nbEntiersPrixUnitaire = $nbEntiersPrixUnitaire;
        return $this;
    }

    /**
     * Set the nb entiers quantite.
     *
     * @param string $nbEntiersQuantite The nb entiers quantite.
     * @return Constantes Returns this Constantes.
     */
    public function setNbEntiersQuantite($nbEntiersQuantite) {
        $this->nbEntiersQuantite = $nbEntiersQuantite;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float $nbJourCpAcquis The nb jour cp acquis.
     * @return Constantes Returns this Constantes.
     */
    public function setNbJourCpAcquis($nbJourCpAcquis) {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb jours abs proratisation dcp.
     *
     * @param int $nbJoursAbsProratisationDcp The nb jours abs proratisation dcp.
     * @return Constantes Returns this Constantes.
     */
    public function setNbJoursAbsProratisationDcp($nbJoursAbsProratisationDcp) {
        $this->nbJoursAbsProratisationDcp = $nbJoursAbsProratisationDcp;
        return $this;
    }

    /**
     * Set the nb mois consecutifs.
     *
     * @param int $nbMoisConsecutifs The nb mois consecutifs.
     * @return Constantes Returns this Constantes.
     */
    public function setNbMoisConsecutifs($nbMoisConsecutifs) {
        $this->nbMoisConsecutifs = $nbMoisConsecutifs;
        return $this;
    }

    /**
     * Set the nom fact nb lignes.
     *
     * @param string $nomFactNbLignes The nom fact nb lignes.
     * @return Constantes Returns this Constantes.
     */
    public function setNomFactNbLignes($nomFactNbLignes) {
        $this->nomFactNbLignes = $nomFactNbLignes;
        return $this;
    }

    /**
     * Set the nom fichier ascii achat.
     *
     * @param string $nomFichierAsciiAchat The nom fichier ascii achat.
     * @return Constantes Returns this Constantes.
     */
    public function setNomFichierAsciiAchat($nomFichierAsciiAchat) {
        $this->nomFichierAsciiAchat = $nomFichierAsciiAchat;
        return $this;
    }

    /**
     * Set the nom fichier ascii vente.
     *
     * @param string $nomFichierAsciiVente The nom fichier ascii vente.
     * @return Constantes Returns this Constantes.
     */
    public function setNomFichierAsciiVente($nomFichierAsciiVente) {
        $this->nomFichierAsciiVente = $nomFichierAsciiVente;
        return $this;
    }

    /**
     * Set the note0 non conforme.
     *
     * @param bool $note0NonConforme The note0 non conforme.
     * @return Constantes Returns this Constantes.
     */
    public function setNote0NonConforme($note0NonConforme) {
        $this->note0NonConforme = $note0NonConforme;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     * @return Constantes Returns this Constantes.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num critere bt num1.
     *
     * @param string $numCritereBtNum1 The num critere bt num1.
     * @return Constantes Returns this Constantes.
     */
    public function setNumCritereBtNum1($numCritereBtNum1) {
        $this->numCritereBtNum1 = $numCritereBtNum1;
        return $this;
    }

    /**
     * Set the num critere bt num2.
     *
     * @param string $numCritereBtNum2 The num critere bt num2.
     * @return Constantes Returns this Constantes.
     */
    public function setNumCritereBtNum2($numCritereBtNum2) {
        $this->numCritereBtNum2 = $numCritereBtNum2;
        return $this;
    }

    /**
     * Set the num critere chantier filtre1.
     *
     * @param string $numCritereChantierFiltre1 The num critere chantier filtre1.
     * @return Constantes Returns this Constantes.
     */
    public function setNumCritereChantierFiltre1($numCritereChantierFiltre1) {
        $this->numCritereChantierFiltre1 = $numCritereChantierFiltre1;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param int $numDevis The num devis.
     * @return Constantes Returns this Constantes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num fact.
     *
     * @param int $numFact The num fact.
     * @return Constantes Returns this Constantes.
     */
    public function setNumFact($numFact) {
        $this->numFact = $numFact;
        return $this;
    }

    /**
     * Set the num fact vm.
     *
     * @param int $numFactVm The num fact vm.
     * @return Constantes Returns this Constantes.
     */
    public function setNumFactVm($numFactVm) {
        $this->numFactVm = $numFactVm;
        return $this;
    }

    /**
     * Set the numero fiche controle.
     *
     * @param int $numeroFicheControle The numero fiche controle.
     * @return Constantes Returns this Constantes.
     */
    public function setNumeroFicheControle($numeroFicheControle) {
        $this->numeroFicheControle = $numeroFicheControle;
        return $this;
    }

    /**
     * Set the pa par fournisseur.
     *
     * @param bool $paParFournisseur The pa par fournisseur.
     * @return Constantes Returns this Constantes.
     */
    public function setPaParFournisseur($paParFournisseur) {
        $this->paParFournisseur = $paParFournisseur;
        return $this;
    }

    /**
     * Set the pas num cpt par dossier.
     *
     * @param bool $pasNumCptParDossier The pas num cpt par dossier.
     * @return Constantes Returns this Constantes.
     */
    public function setPasNumCptParDossier($pasNumCptParDossier) {
        $this->pasNumCptParDossier = $pasNumCptParDossier;
        return $this;
    }

    /**
     * Set the pdf bt coefficient.
     *
     * @param float $pdfBtCoefficient The pdf bt coefficient.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtCoefficient($pdfBtCoefficient) {
        $this->pdfBtCoefficient = $pdfBtCoefficient;
        return $this;
    }

    /**
     * Set the pdf bt date passage.
     *
     * @param bool $pdfBtDatePassage The pdf bt date passage.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtDatePassage($pdfBtDatePassage) {
        $this->pdfBtDatePassage = $pdfBtDatePassage;
        return $this;
    }

    /**
     * Set the pdf bt descriptif.
     *
     * @param bool $pdfBtDescriptif The pdf bt descriptif.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtDescriptif($pdfBtDescriptif) {
        $this->pdfBtDescriptif = $pdfBtDescriptif;
        return $this;
    }

    /**
     * Set the pdf bt employes corps.
     *
     * @param bool $pdfBtEmployesCorps The pdf bt employes corps.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtEmployesCorps($pdfBtEmployesCorps) {
        $this->pdfBtEmployesCorps = $pdfBtEmployesCorps;
        return $this;
    }

    /**
     * Set the pdf bt employes ref.
     *
     * @param bool $pdfBtEmployesRef The pdf bt employes ref.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtEmployesRef($pdfBtEmployesRef) {
        $this->pdfBtEmployesRef = $pdfBtEmployesRef;
        return $this;
    }

    /**
     * Set the pdf bt facturer ala validation.
     *
     * @param bool $pdfBtFacturerAlaValidation The pdf bt facturer ala validation.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtFacturerAlaValidation($pdfBtFacturerAlaValidation) {
        $this->pdfBtFacturerAlaValidation = $pdfBtFacturerAlaValidation;
        return $this;
    }

    /**
     * Set the pdf bt format saisie qte pu.
     *
     * @param bool $pdfBtFormatSaisieQtePu The pdf bt format saisie qte pu.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtFormatSaisieQtePu($pdfBtFormatSaisieQtePu) {
        $this->pdfBtFormatSaisieQtePu = $pdfBtFormatSaisieQtePu;
        return $this;
    }

    /**
     * Set the pdf bt libelle date.
     *
     * @param string $pdfBtLibelleDate The pdf bt libelle date.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtLibelleDate($pdfBtLibelleDate) {
        $this->pdfBtLibelleDate = $pdfBtLibelleDate;
        return $this;
    }

    /**
     * Set the pdf bt nom chantier.
     *
     * @param bool $pdfBtNomChantier The pdf bt nom chantier.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtNomChantier($pdfBtNomChantier) {
        $this->pdfBtNomChantier = $pdfBtNomChantier;
        return $this;
    }

    /**
     * Set the pdf bt periode validite.
     *
     * @param bool $pdfBtPeriodeValidite The pdf bt periode validite.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtPeriodeValidite($pdfBtPeriodeValidite) {
        $this->pdfBtPeriodeValidite = $pdfBtPeriodeValidite;
        return $this;
    }

    /**
     * Set the pdf bt prix achat.
     *
     * @param float $pdfBtPrixAchat The pdf bt prix achat.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtPrixAchat($pdfBtPrixAchat) {
        $this->pdfBtPrixAchat = $pdfBtPrixAchat;
        return $this;
    }

    /**
     * Set the pdf bt reprendre libelle date.
     *
     * @param bool $pdfBtReprendreLibelleDate The pdf bt reprendre libelle date.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtReprendreLibelleDate($pdfBtReprendreLibelleDate) {
        $this->pdfBtReprendreLibelleDate = $pdfBtReprendreLibelleDate;
        return $this;
    }

    /**
     * Set the pdf bt taux horaire.
     *
     * @param float $pdfBtTauxHoraire The pdf bt taux horaire.
     * @return Constantes Returns this Constantes.
     */
    public function setPdfBtTauxHoraire($pdfBtTauxHoraire) {
        $this->pdfBtTauxHoraire = $pdfBtTauxHoraire;
        return $this;
    }

    /**
     * Set the pj envoi mail.
     *
     * @param string $pjEnvoiMail The pj envoi mail.
     * @return Constantes Returns this Constantes.
     */
    public function setPjEnvoiMail($pjEnvoiMail) {
        $this->pjEnvoiMail = $pjEnvoiMail;
        return $this;
    }

    /**
     * Set the pj envoi mail attestation.
     *
     * @param string $pjEnvoiMailAttestation The pj envoi mail attestation.
     * @return Constantes Returns this Constantes.
     */
    public function setPjEnvoiMailAttestation($pjEnvoiMailAttestation) {
        $this->pjEnvoiMailAttestation = $pjEnvoiMailAttestation;
        return $this;
    }

    /**
     * Set the point bt employes sortis.
     *
     * @param bool $pointBtEmployesSortis The point bt employes sortis.
     * @return Constantes Returns this Constantes.
     */
    public function setPointBtEmployesSortis($pointBtEmployesSortis) {
        $this->pointBtEmployesSortis = $pointBtEmployesSortis;
        return $this;
    }

    /**
     * Set the poste1.
     *
     * @param string $poste1 The poste1.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste1($poste1) {
        $this->poste1 = $poste1;
        return $this;
    }

    /**
     * Set the poste2.
     *
     * @param string $poste2 The poste2.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste2($poste2) {
        $this->poste2 = $poste2;
        return $this;
    }

    /**
     * Set the poste3.
     *
     * @param string $poste3 The poste3.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste3($poste3) {
        $this->poste3 = $poste3;
        return $this;
    }

    /**
     * Set the poste4.
     *
     * @param string $poste4 The poste4.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste4($poste4) {
        $this->poste4 = $poste4;
        return $this;
    }

    /**
     * Set the poste5.
     *
     * @param string $poste5 The poste5.
     * @return Constantes Returns this Constantes.
     */
    public function setPoste5($poste5) {
        $this->poste5 = $poste5;
        return $this;
    }

    /**
     * Set the pourc maj h compl.
     *
     * @param float $pourcMajHCompl The pourc maj h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcMajHCompl($pourcMajHCompl) {
        $this->pourcMajHCompl = $pourcMajHCompl;
        return $this;
    }

    /**
     * Set the pourc maj h compl2.
     *
     * @param float $pourcMajHCompl2 The pourc maj h compl2.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcMajHCompl2($pourcMajHCompl2) {
        $this->pourcMajHCompl2 = $pourcMajHCompl2;
        return $this;
    }

    /**
     * Set the pourcent dep hc max.
     *
     * @param float $pourcentDepHcMax The pourcent dep hc max.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcentDepHcMax($pourcentDepHcMax) {
        $this->pourcentDepHcMax = $pourcentDepHcMax;
        return $this;
    }

    /**
     * Set the pourcent dep hc plus mois.
     *
     * @param float $pourcentDepHcPlusMois The pourcent dep hc plus mois.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcentDepHcPlusMois($pourcentDepHcPlusMois) {
        $this->pourcentDepHcPlusMois = $pourcentDepHcPlusMois;
        return $this;
    }

    /**
     * Set the pourcentage repos remplacement.
     *
     * @param float $pourcentageReposRemplacement The pourcentage repos remplacement.
     * @return Constantes Returns this Constantes.
     */
    public function setPourcentageReposRemplacement($pourcentageReposRemplacement) {
        $this->pourcentageReposRemplacement = $pourcentageReposRemplacement;
        return $this;
    }

    /**
     * Set the prefixe.
     *
     * @param string $prefixe The prefixe.
     * @return Constantes Returns this Constantes.
     */
    public function setPrefixe($prefixe) {
        $this->prefixe = $prefixe;
        return $this;
    }

    /**
     * Set the prefixe devis.
     *
     * @param string $prefixeDevis The prefixe devis.
     * @return Constantes Returns this Constantes.
     */
    public function setPrefixeDevis($prefixeDevis) {
        $this->prefixeDevis = $prefixeDevis;
        return $this;
    }

    /**
     * Set the preparer chantier pret only.
     *
     * @param bool $preparerChantierPretOnly The preparer chantier pret only.
     * @return Constantes Returns this Constantes.
     */
    public function setPreparerChantierPretOnly($preparerChantierPretOnly) {
        $this->preparerChantierPretOnly = $preparerChantierPretOnly;
        return $this;
    }

    /**
     * Set the prix defaut achat.
     *
     * @param int $prixDefautAchat The prix defaut achat.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautAchat($prixDefautAchat) {
        $this->prixDefautAchat = $prixDefautAchat;
        return $this;
    }

    /**
     * Set the prix defaut entree directe.
     *
     * @param int $prixDefautEntreeDirecte The prix defaut entree directe.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautEntreeDirecte($prixDefautEntreeDirecte) {
        $this->prixDefautEntreeDirecte = $prixDefautEntreeDirecte;
        return $this;
    }

    /**
     * Set the prix defaut inventaire.
     *
     * @param int $prixDefautInventaire The prix defaut inventaire.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautInventaire($prixDefautInventaire) {
        $this->prixDefautInventaire = $prixDefautInventaire;
        return $this;
    }

    /**
     * Set the prix defaut sortie directe.
     *
     * @param int $prixDefautSortieDirecte The prix defaut sortie directe.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautSortieDirecte($prixDefautSortieDirecte) {
        $this->prixDefautSortieDirecte = $prixDefautSortieDirecte;
        return $this;
    }

    /**
     * Set the prix defaut vente.
     *
     * @param int $prixDefautVente The prix defaut vente.
     * @return Constantes Returns this Constantes.
     */
    public function setPrixDefautVente($prixDefautVente) {
        $this->prixDefautVente = $prixDefautVente;
        return $this;
    }

    /**
     * Set the prochain numero pj.
     *
     * @param int $prochainNumeroPj The prochain numero pj.
     * @return Constantes Returns this Constantes.
     */
    public function setProchainNumeroPj($prochainNumeroPj) {
        $this->prochainNumeroPj = $prochainNumeroPj;
        return $this;
    }

    /**
     * Set the prorata heures creer ligne.
     *
     * @param bool $prorataHeuresCreerLigne The prorata heures creer ligne.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresCreerLigne($prorataHeuresCreerLigne) {
        $this->prorataHeuresCreerLigne = $prorataHeuresCreerLigne;
        return $this;
    }

    /**
     * Set the prorata heures designation moins.
     *
     * @param string $prorataHeuresDesignationMoins The prorata heures designation moins.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresDesignationMoins($prorataHeuresDesignationMoins) {
        $this->prorataHeuresDesignationMoins = $prorataHeuresDesignationMoins;
        return $this;
    }

    /**
     * Set the prorata heures designation plus.
     *
     * @param string $prorataHeuresDesignationPlus The prorata heures designation plus.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresDesignationPlus($prorataHeuresDesignationPlus) {
        $this->prorataHeuresDesignationPlus = $prorataHeuresDesignationPlus;
        return $this;
    }

    /**
     * Set the prorata heures option.
     *
     * @param string $prorataHeuresOption The prorata heures option.
     * @return Constantes Returns this Constantes.
     */
    public function setProrataHeuresOption($prorataHeuresOption) {
        $this->prorataHeuresOption = $prorataHeuresOption;
        return $this;
    }

    /**
     * Set the prov cp infos emp.
     *
     * @param bool $provCpInfosEmp The prov cp infos emp.
     * @return Constantes Returns this Constantes.
     */
    public function setProvCpInfosEmp($provCpInfosEmp) {
        $this->provCpInfosEmp = $provCpInfosEmp;
        return $this;
    }

    /**
     * Set the provisions cp.
     *
     * @param bool $provisionsCp The provisions cp.
     * @return Constantes Returns this Constantes.
     */
    public function setProvisionsCp($provisionsCp) {
        $this->provisionsCp = $provisionsCp;
        return $this;
    }

    /**
     * Set the qualite nb criteres.
     *
     * @param string $qualiteNbCriteres The qualite nb criteres.
     * @return Constantes Returns this Constantes.
     */
    public function setQualiteNbCriteres($qualiteNbCriteres) {
        $this->qualiteNbCriteres = $qualiteNbCriteres;
        return $this;
    }

    /**
     * Set the qualite nb notes.
     *
     * @param string $qualiteNbNotes The qualite nb notes.
     * @return Constantes Returns this Constantes.
     */
    public function setQualiteNbNotes($qualiteNbNotes) {
        $this->qualiteNbNotes = $qualiteNbNotes;
        return $this;
    }

    /**
     * Set the qualite satisfaction generale.
     *
     * @param bool $qualiteSatisfactionGenerale The qualite satisfaction generale.
     * @return Constantes Returns this Constantes.
     */
    public function setQualiteSatisfactionGenerale($qualiteSatisfactionGenerale) {
        $this->qualiteSatisfactionGenerale = $qualiteSatisfactionGenerale;
        return $this;
    }

    /**
     * Set the reference mensu contrat proprete.
     *
     * @param bool $referenceMensuContratProprete The reference mensu contrat proprete.
     * @return Constantes Returns this Constantes.
     */
    public function setReferenceMensuContratProprete($referenceMensuContratProprete) {
        $this->referenceMensuContratProprete = $referenceMensuContratProprete;
        return $this;
    }

    /**
     * Set the remplacant abs jf pas auto.
     *
     * @param bool $remplacantAbsJfPasAuto The remplacant abs jf pas auto.
     * @return Constantes Returns this Constantes.
     */
    public function setRemplacantAbsJfPasAuto($remplacantAbsJfPasAuto) {
        $this->remplacantAbsJfPasAuto = $remplacantAbsJfPasAuto;
        return $this;
    }

    /**
     * Set the remplacant travaille pas jf.
     *
     * @param bool $remplacantTravaillePasJf The remplacant travaille pas jf.
     * @return Constantes Returns this Constantes.
     */
    public function setRemplacantTravaillePasJf($remplacantTravaillePasJf) {
        $this->remplacantTravaillePasJf = $remplacantTravaillePasJf;
        return $this;
    }

    /**
     * Set the remplacement hcjf.
     *
     * @param bool $remplacementHcjf The remplacement hcjf.
     * @return Constantes Returns this Constantes.
     */
    public function setRemplacementHcjf($remplacementHcjf) {
        $this->remplacementHcjf = $remplacementHcjf;
        return $this;
    }

    /**
     * Set the repos compensateur pour travailleur nuit.
     *
     * @param bool $reposCompensateurPourTravailleurNuit The repos compensateur pour travailleur nuit.
     * @return Constantes Returns this Constantes.
     */
    public function setReposCompensateurPourTravailleurNuit($reposCompensateurPourTravailleurNuit) {
        $this->reposCompensateurPourTravailleurNuit = $reposCompensateurPourTravailleurNuit;
        return $this;
    }

    /**
     * Set the rt fdans fact dev.
     *
     * @param bool $rtFdansFactDev The rt fdans fact dev.
     * @return Constantes Returns this Constantes.
     */
    public function setRtFdansFactDev($rtFdansFactDev) {
        $this->rtFdansFactDev = $rtFdansFactDev;
        return $this;
    }

    /**
     * Set the saisir absences sur hc.
     *
     * @param bool $saisirAbsencesSurHc The saisir absences sur hc.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisirAbsencesSurHc($saisirAbsencesSurHc) {
        $this->saisirAbsencesSurHc = $saisirAbsencesSurHc;
        return $this;
    }

    /**
     * Set the saisir code chantier achat.
     *
     * @param bool $saisirCodeChantierAchat The saisir code chantier achat.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisirCodeChantierAchat($saisirCodeChantierAchat) {
        $this->saisirCodeChantierAchat = $saisirCodeChantierAchat;
        return $this;
    }

    /**
     * Set the saisir num bt.
     *
     * @param bool $saisirNumBt The saisir num bt.
     * @return Constantes Returns this Constantes.
     */
    public function setSaisirNumBt($saisirNumBt) {
        $this->saisirNumBt = $saisirNumBt;
        return $this;
    }

    /**
     * Set the services paie.
     *
     * @param string $servicesPaie The services paie.
     * @return Constantes Returns this Constantes.
     */
    public function setServicesPaie($servicesPaie) {
        $this->servicesPaie = $servicesPaie;
        return $this;
    }

    /**
     * Set the seuil majo h compl.
     *
     * @param float $seuilMajoHCompl The seuil majo h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setSeuilMajoHCompl($seuilMajoHCompl) {
        $this->seuilMajoHCompl = $seuilMajoHCompl;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the taux majo hc33.
     *
     * @param float $tauxMajoHc33 The taux majo hc33.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxMajoHc33($tauxMajoHc33) {
        $this->tauxMajoHc33 = $tauxMajoHc33;
        return $this;
    }

    /**
     * Set the taux majoration h compl.
     *
     * @param float $tauxMajorationHCompl The taux majoration h compl.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxMajorationHCompl($tauxMajorationHCompl) {
        $this->tauxMajorationHCompl = $tauxMajorationHCompl;
        return $this;
    }

    /**
     * Set the taux tva achat.
     *
     * @param float $tauxTvaAchat The taux tva achat.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxTvaAchat($tauxTvaAchat) {
        $this->tauxTvaAchat = $tauxTvaAchat;
        return $this;
    }

    /**
     * Set the taux tva taxe deee.
     *
     * @param float $tauxTvaTaxeDeee The taux tva taxe deee.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxTvaTaxeDeee($tauxTvaTaxeDeee) {
        $this->tauxTvaTaxeDeee = $tauxTvaTaxeDeee;
        return $this;
    }

    /**
     * Set the taux tva vente.
     *
     * @param float $tauxTvaVente The taux tva vente.
     * @return Constantes Returns this Constantes.
     */
    public function setTauxTvaVente($tauxTvaVente) {
        $this->tauxTvaVente = $tauxTvaVente;
        return $this;
    }

    /**
     * Set the type rempl defaut.
     *
     * @param string $typeRemplDefaut The type rempl defaut.
     * @return Constantes Returns this Constantes.
     */
    public function setTypeRemplDefaut($typeRemplDefaut) {
        $this->typeRemplDefaut = $typeRemplDefaut;
        return $this;
    }

    /**
     * Set the type transfert vente.
     *
     * @param string $typeTransfertVente The type transfert vente.
     * @return Constantes Returns this Constantes.
     */
    public function setTypeTransfertVente($typeTransfertVente) {
        $this->typeTransfertVente = $typeTransfertVente;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     * @return Constantes Returns this Constantes.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }

    /**
     * Set the utiliser stock mini.
     *
     * @param bool $utiliserStockMini The utiliser stock mini.
     * @return Constantes Returns this Constantes.
     */
    public function setUtiliserStockMini($utiliserStockMini) {
        $this->utiliserStockMini = $utiliserStockMini;
        return $this;
    }

    /**
     * Set the visualiser pointage bt valides.
     *
     * @param bool $visualiserPointageBtValides The visualiser pointage bt valides.
     * @return Constantes Returns this Constantes.
     */
    public function setVisualiserPointageBtValides($visualiserPointageBtValides) {
        $this->visualiserPointageBtValides = $visualiserPointageBtValides;
        return $this;
    }
}
