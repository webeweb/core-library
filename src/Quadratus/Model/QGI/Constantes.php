<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Constantes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Constantes {

    /**
     * Acces autorise bons travaux.
     *
     * @var boolean
     */
    private $accesAutoriseBonsTravaux;

    /**
     * Acces autorise plan facturation.
     *
     * @var boolean
     */
    private $accesAutorisePlanFacturation;

    /**
     * Acces autorise plan tache.
     *
     * @var boolean
     */
    private $accesAutorisePlanTache;

    /**
     * Acces docs cab.
     *
     * @var boolean
     */
    private $accesDocsCab;

    /**
     * Acces dossier cpta.
     *
     * @var string
     */
    private $accesDossierCpta;

    /**
     * Acces dossier paie.
     *
     * @var string
     */
    private $accesDossierPaie;

    /**
     * Acces stat cab.
     *
     * @var boolean
     */
    private $accesStatCab;

    /**
     * Activation conf c m a v cli.
     *
     * @var boolean
     */
    private $activationConfCMAVCli;

    /**
     * Activation conf controle.
     *
     * @var boolean
     */
    private $activationConfControle;

    /**
     * Activation lst restri.
     *
     * @var boolean
     */
    private $activationLstRestri;

    /**
     * Activation niveau2.
     *
     * @var boolean
     */
    private $activationNiveau2;

    /**
     * Activation niveau3.
     *
     * @var boolean
     */
    private $activationNiveau3;

    /**
     * Affiche point.
     *
     * @var boolean
     */
    private $affichePoint;

    /**
     * Affiche semaine.
     *
     * @var boolean
     */
    private $afficheSemaine;

    /**
     * Annulation affaire.
     *
     * @var boolean
     */
    private $annulationAffaire;

    /**
     * Annulation article.
     *
     * @var boolean
     */
    private $annulationArticle;

    /**
     * Annulation bons travaux.
     *
     * @var boolean
     */
    private $annulationBonsTravaux;

    /**
     * Annulation chantier.
     *
     * @var boolean
     */
    private $annulationChantier;

    /**
     * Annulation client.
     *
     * @var boolean
     */
    private $annulationClient;

    /**
     * Annulation commission.
     *
     * @var boolean
     */
    private $annulationCommission;

    /**
     * Annulation dossier cpta.
     *
     * @var boolean
     */
    private $annulationDossierCpta;

    /**
     * Annulation dossier fact.
     *
     * @var boolean
     */
    private $annulationDossierFact;

    /**
     * Annulation dossier paie.
     *
     * @var boolean
     */
    private $annulationDossierPaie;

    /**
     * Annulation fournisseur.
     *
     * @var boolean
     */
    private $annulationFournisseur;

    /**
     * Annulation plan facturation.
     *
     * @var boolean
     */
    private $annulationPlanFacturation;

    /**
     * Annulation plan tache.
     *
     * @var boolean
     */
    private $annulationPlanTache;

    /**
     * Annulation tache.
     *
     * @var boolean
     */
    private $annulationTache;

    /**
     * Annulation tarif.
     *
     * @var boolean
     */
    private $annulationTarif;

    /**
     * Blocage ed cli.
     *
     * @var boolean
     */
    private $blocageEdCli;

    /**
     * Budget type saisie.
     *
     * @var int
     */
    private $budgetTypeSaisie;

    /**
     * Champs critere1.
     *
     * @var string
     */
    private $champsCritere1;

    /**
     * Champs critere10.
     *
     * @var string
     */
    private $champsCritere10;

    /**
     * Champs critere2.
     *
     * @var string
     */
    private $champsCritere2;

    /**
     * Champs critere3.
     *
     * @var string
     */
    private $champsCritere3;

    /**
     * Champs critere4.
     *
     * @var string
     */
    private $champsCritere4;

    /**
     * Champs critere5.
     *
     * @var string
     */
    private $champsCritere5;

    /**
     * Champs critere6.
     *
     * @var string
     */
    private $champsCritere6;

    /**
     * Champs critere7.
     *
     * @var string
     */
    private $champsCritere7;

    /**
     * Champs critere8.
     *
     * @var string
     */
    private $champsCritere8;

    /**
     * Champs critere9.
     *
     * @var string
     */
    private $champsCritere9;

    /**
     * Champs critere affaire1.
     *
     * @var string
     */
    private $champsCritereAffaire1;

    /**
     * Champs critere affaire10.
     *
     * @var string
     */
    private $champsCritereAffaire10;

    /**
     * Champs critere affaire2.
     *
     * @var string
     */
    private $champsCritereAffaire2;

    /**
     * Champs critere affaire3.
     *
     * @var string
     */
    private $champsCritereAffaire3;

    /**
     * Champs critere affaire4.
     *
     * @var string
     */
    private $champsCritereAffaire4;

    /**
     * Champs critere affaire5.
     *
     * @var string
     */
    private $champsCritereAffaire5;

    /**
     * Champs critere affaire6.
     *
     * @var string
     */
    private $champsCritereAffaire6;

    /**
     * Champs critere affaire7.
     *
     * @var string
     */
    private $champsCritereAffaire7;

    /**
     * Champs critere affaire8.
     *
     * @var string
     */
    private $champsCritereAffaire8;

    /**
     * Champs critere affaire9.
     *
     * @var string
     */
    private $champsCritereAffaire9;

    /**
     * Champs critere article1.
     *
     * @var string
     */
    private $champsCritereArticle1;

    /**
     * Champs critere article10.
     *
     * @var string
     */
    private $champsCritereArticle10;

    /**
     * Champs critere article2.
     *
     * @var string
     */
    private $champsCritereArticle2;

    /**
     * Champs critere article3.
     *
     * @var string
     */
    private $champsCritereArticle3;

    /**
     * Champs critere article4.
     *
     * @var string
     */
    private $champsCritereArticle4;

    /**
     * Champs critere article5.
     *
     * @var string
     */
    private $champsCritereArticle5;

    /**
     * Champs critere article6.
     *
     * @var string
     */
    private $champsCritereArticle6;

    /**
     * Champs critere article7.
     *
     * @var string
     */
    private $champsCritereArticle7;

    /**
     * Champs critere article8.
     *
     * @var string
     */
    private $champsCritereArticle8;

    /**
     * Champs critere article9.
     *
     * @var string
     */
    private $champsCritereArticle9;

    /**
     * Champs critere ent piece1.
     *
     * @var string
     */
    private $champsCritereEntPiece1;

    /**
     * Champs critere ent piece10.
     *
     * @var string
     */
    private $champsCritereEntPiece10;

    /**
     * Champs critere ent piece2.
     *
     * @var string
     */
    private $champsCritereEntPiece2;

    /**
     * Champs critere ent piece3.
     *
     * @var string
     */
    private $champsCritereEntPiece3;

    /**
     * Champs critere ent piece4.
     *
     * @var string
     */
    private $champsCritereEntPiece4;

    /**
     * Champs critere ent piece5.
     *
     * @var string
     */
    private $champsCritereEntPiece5;

    /**
     * Champs critere ent piece6.
     *
     * @var string
     */
    private $champsCritereEntPiece6;

    /**
     * Champs critere ent piece7.
     *
     * @var string
     */
    private $champsCritereEntPiece7;

    /**
     * Champs critere ent piece8.
     *
     * @var string
     */
    private $champsCritereEntPiece8;

    /**
     * Champs critere ent piece9.
     *
     * @var string
     */
    private $champsCritereEntPiece9;

    /**
     * Chrono activation.
     *
     * @var boolean
     */
    private $chronoActivation;

    /**
     * Chrono prefixe.
     *
     * @var string
     */
    private $chronoPrefixe;

    /**
     * Chrono prochain num.
     *
     * @var int
     */
    private $chronoProchainNum;

    /**
     * Cle acces cn paie.
     *
     * @var string
     */
    private $cleAccesCnPaie;

    /**
     * Cle acces fiche client.
     *
     * @var string
     */
    private $cleAccesFicheClient;

    /**
     * Cle acces menus.
     *
     * @var string
     */
    private $cleAccesMenus;

    /**
     * Cle acces param.
     *
     * @var string
     */
    private $cleAccesParam;

    /**
     * Cle des etr communs.
     *
     * @var string
     */
    private $cleDesEtrCommuns;

    /**
     * Cle jrn lib communs.
     *
     * @var string
     */
    private $cleJrnLibCommuns;

    /**
     * Code emetteur.
     *
     * @var string
     */
    private $codeEmetteur;

    /**
     * Code expert defaut.
     *
     * @var string
     */
    private $codeExpertDefaut;

    /**
     * Code regroupement pre fact.
     *
     * @var string
     */
    private $codeRegroupementPreFact;

    /**
     * Conversion pwd.
     *
     * @var boolean
     */
    private $conversionPwd;

    /**
     * Cpte collectif cli.
     *
     * @var string
     */
    private $cpteCollectifCli;

    /**
     * Cpte collectif frn.
     *
     * @var string
     */
    private $cpteCollectifFrn;

    /**
     * Creation affaire.
     *
     * @var boolean
     */
    private $creationAffaire;

    /**
     * Creation article.
     *
     * @var boolean
     */
    private $creationArticle;

    /**
     * Creation bons travaux.
     *
     * @var boolean
     */
    private $creationBonsTravaux;

    /**
     * Creation chantier.
     *
     * @var boolean
     */
    private $creationChantier;

    /**
     * Creation client.
     *
     * @var boolean
     */
    private $creationClient;

    /**
     * Creation commission.
     *
     * @var boolean
     */
    private $creationCommission;

    /**
     * Creation dossier cpta.
     *
     * @var boolean
     */
    private $creationDossierCpta;

    /**
     * Creation dossier fact.
     *
     * @var boolean
     */
    private $creationDossierFact;

    /**
     * Creation dossier paie.
     *
     * @var boolean
     */
    private $creationDossierPaie;

    /**
     * Creation fournisseur.
     *
     * @var boolean
     */
    private $creationFournisseur;

    /**
     * Creation plan facturation.
     *
     * @var boolean
     */
    private $creationPlanFacturation;

    /**
     * Creation plan tache.
     *
     * @var boolean
     */
    private $creationPlanTache;

    /**
     * Creation prospect.
     *
     * @var boolean
     */
    private $creationProspect;

    /**
     * Creation tache.
     *
     * @var boolean
     */
    private $creationTache;

    /**
     * Creation tarif.
     *
     * @var boolean
     */
    private $creationTarif;

    /**
     * Date cloture.
     *
     * @var DateTime
     */
    private $dateCloture;

    /**
     * Dt dern modif conf zone.
     *
     * @var DateTime
     */
    private $dtDernModifConfZone;

    /**
     * Ech aff en mt.
     *
     * @var boolean
     */
    private $echAffEnMt;

    /**
     * Fonctionnement c g a.
     *
     * @var boolean
     */
    private $fonctionnementCGA;

    /**
     * Heures trav1.
     *
     * @var float
     */
    private $heuresTrav1;

    /**
     * Heures trav2.
     *
     * @var float
     */
    private $heuresTrav2;

    /**
     * Heures trav3.
     *
     * @var float
     */
    private $heuresTrav3;

    /**
     * Heures trav4.
     *
     * @var float
     */
    private $heuresTrav4;

    /**
     * Increm auto.
     *
     * @var boolean
     */
    private $incremAuto;

    /**
     * Increm auto aff.
     *
     * @var boolean
     */
    private $incremAutoAff;

    /**
     * Increm auto frn.
     *
     * @var boolean
     */
    private $incremAutoFrn;

    /**
     * Increm cpte cli auto.
     *
     * @var boolean
     */
    private $incremCpteCliAuto;

    /**
     * Increm cpte frn auto.
     *
     * @var boolean
     */
    private $incremCpteFrnAuto;

    /**
     * Increment cpte cli.
     *
     * @var int
     */
    private $incrementCpteCli;

    /**
     * Increment cpte frn.
     *
     * @var int
     */
    private $incrementCpteFrn;

    /**
     * Liaison bu cpta.
     *
     * @var boolean
     */
    private $liaisonBuCpta;

    /**
     * Lib affectation1.
     *
     * @var string
     */
    private $libAffectation1;

    /**
     * Lib affectation2.
     *
     * @var string
     */
    private $libAffectation2;

    /**
     * Lib affectation3.
     *
     * @var string
     */
    private $libAffectation3;

    /**
     * Lib affectation4.
     *
     * @var string
     */
    private $libAffectation4;

    /**
     * Lib affectation5.
     *
     * @var string
     */
    private $libAffectation5;

    /**
     * Lib affectation6.
     *
     * @var string
     */
    private $libAffectation6;

    /**
     * Lib affectation7.
     *
     * @var string
     */
    private $libAffectation7;

    /**
     * Lib critere1.
     *
     * @var string
     */
    private $libCritere1;

    /**
     * Lib critere10.
     *
     * @var string
     */
    private $libCritere10;

    /**
     * Lib critere2.
     *
     * @var string
     */
    private $libCritere2;

    /**
     * Lib critere3.
     *
     * @var string
     */
    private $libCritere3;

    /**
     * Lib critere4.
     *
     * @var string
     */
    private $libCritere4;

    /**
     * Lib critere5.
     *
     * @var string
     */
    private $libCritere5;

    /**
     * Lib critere6.
     *
     * @var string
     */
    private $libCritere6;

    /**
     * Lib critere7.
     *
     * @var string
     */
    private $libCritere7;

    /**
     * Lib critere8.
     *
     * @var string
     */
    private $libCritere8;

    /**
     * Lib critere9.
     *
     * @var string
     */
    private $libCritere9;

    /**
     * Lib critere affaire1.
     *
     * @var string
     */
    private $libCritereAffaire1;

    /**
     * Lib critere affaire10.
     *
     * @var string
     */
    private $libCritereAffaire10;

    /**
     * Lib critere affaire2.
     *
     * @var string
     */
    private $libCritereAffaire2;

    /**
     * Lib critere affaire3.
     *
     * @var string
     */
    private $libCritereAffaire3;

    /**
     * Lib critere affaire4.
     *
     * @var string
     */
    private $libCritereAffaire4;

    /**
     * Lib critere affaire5.
     *
     * @var string
     */
    private $libCritereAffaire5;

    /**
     * Lib critere affaire6.
     *
     * @var string
     */
    private $libCritereAffaire6;

    /**
     * Lib critere affaire7.
     *
     * @var string
     */
    private $libCritereAffaire7;

    /**
     * Lib critere affaire8.
     *
     * @var string
     */
    private $libCritereAffaire8;

    /**
     * Lib critere affaire9.
     *
     * @var string
     */
    private $libCritereAffaire9;

    /**
     * Lib critere article1.
     *
     * @var string
     */
    private $libCritereArticle1;

    /**
     * Lib critere article10.
     *
     * @var string
     */
    private $libCritereArticle10;

    /**
     * Lib critere article2.
     *
     * @var string
     */
    private $libCritereArticle2;

    /**
     * Lib critere article3.
     *
     * @var string
     */
    private $libCritereArticle3;

    /**
     * Lib critere article4.
     *
     * @var string
     */
    private $libCritereArticle4;

    /**
     * Lib critere article5.
     *
     * @var string
     */
    private $libCritereArticle5;

    /**
     * Lib critere article6.
     *
     * @var string
     */
    private $libCritereArticle6;

    /**
     * Lib critere article7.
     *
     * @var string
     */
    private $libCritereArticle7;

    /**
     * Lib critere article8.
     *
     * @var string
     */
    private $libCritereArticle8;

    /**
     * Lib critere article9.
     *
     * @var string
     */
    private $libCritereArticle9;

    /**
     * Lib critere ent piece1.
     *
     * @var string
     */
    private $libCritereEntPiece1;

    /**
     * Lib critere ent piece10.
     *
     * @var string
     */
    private $libCritereEntPiece10;

    /**
     * Lib critere ent piece2.
     *
     * @var string
     */
    private $libCritereEntPiece2;

    /**
     * Lib critere ent piece3.
     *
     * @var string
     */
    private $libCritereEntPiece3;

    /**
     * Lib critere ent piece4.
     *
     * @var string
     */
    private $libCritereEntPiece4;

    /**
     * Lib critere ent piece5.
     *
     * @var string
     */
    private $libCritereEntPiece5;

    /**
     * Lib critere ent piece6.
     *
     * @var string
     */
    private $libCritereEntPiece6;

    /**
     * Lib critere ent piece7.
     *
     * @var string
     */
    private $libCritereEntPiece7;

    /**
     * Lib critere ent piece8.
     *
     * @var string
     */
    private $libCritereEntPiece8;

    /**
     * Lib critere ent piece9.
     *
     * @var string
     */
    private $libCritereEntPiece9;

    /**
     * Lib critere interloc.
     *
     * @var string
     */
    private $libCritereInterloc;

    /**
     * Lib critere interloc2.
     *
     * @var string
     */
    private $libCritereInterloc2;

    /**
     * Major heures trav1.
     *
     * @var float
     */
    private $majorHeuresTrav1;

    /**
     * Major heures trav2.
     *
     * @var float
     */
    private $majorHeuresTrav2;

    /**
     * Major heures trav3.
     *
     * @var float
     */
    private $majorHeuresTrav3;

    /**
     * Major heures trav4.
     *
     * @var float
     */
    private $majorHeuresTrav4;

    /**
     * Mnt ticket resto a.
     *
     * @var float
     */
    private $mntTicketRestoA;

    /**
     * Mnt ticket resto b.
     *
     * @var float
     */
    private $mntTicketRestoB;

    /**
     * Mnt ticket resto c.
     *
     * @var float
     */
    private $mntTicketRestoC;

    /**
     * Mnt ticket resto d.
     *
     * @var float
     */
    private $mntTicketRestoD;

    /**
     * Mnt ticket resto e.
     *
     * @var float
     */
    private $mntTicketRestoE;

    /**
     * Modif affaire.
     *
     * @var string
     */
    private $modifAffaire;

    /**
     * Modif article.
     *
     * @var string
     */
    private $modifArticle;

    /**
     * Modif bons travaux.
     *
     * @var string
     */
    private $modifBonsTravaux;

    /**
     * Modif chantier.
     *
     * @var string
     */
    private $modifChantier;

    /**
     * Modif client.
     *
     * @var string
     */
    private $modifClient;

    /**
     * Modif commission.
     *
     * @var string
     */
    private $modifCommission;

    /**
     * Modif dossier fact.
     *
     * @var string
     */
    private $modifDossierFact;

    /**
     * Modif fournisseur.
     *
     * @var string
     */
    private $modifFournisseur;

    /**
     * Modif plan facturation.
     *
     * @var string
     */
    private $modifPlanFacturation;

    /**
     * Modif plan tache.
     *
     * @var string
     */
    private $modifPlanTache;

    /**
     * Modif tache.
     *
     * @var string
     */
    private $modifTache;

    /**
     * Modif tarif.
     *
     * @var string
     */
    private $modifTarif;

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Nb dec monnaie.
     *
     * @var int
     */
    private $nbDecMonnaie;

    /**
     * No doss cpta.
     *
     * @var string
     */
    private $noDossCpta;

    /**
     * No doss paie.
     *
     * @var string
     */
    private $noDossPaie;

    /**
     * Prefixe aff.
     *
     * @var string
     */
    private $prefixeAff;

    /**
     * Priorite saisie aff.
     *
     * @var int
     */
    private $prioriteSaisieAff;

    /**
     * Priorite saisie client.
     *
     * @var int
     */
    private $prioriteSaisieClient;

    /**
     * Priorite saisie frn.
     *
     * @var int
     */
    private $prioriteSaisieFrn;

    /**
     * Prochain cpte cli.
     *
     * @var string
     */
    private $prochainCpteCli;

    /**
     * Prochain cpte frn.
     *
     * @var string
     */
    private $prochainCpteFrn;

    /**
     * Prochain mois oblig.
     *
     * @var DateTime
     */
    private $prochainMoisOblig;

    /**
     * Prochain num aff.
     *
     * @var int
     */
    private $prochainNumAff;

    /**
     * Px km a.
     *
     * @var float
     */
    private $pxKmA;

    /**
     * Px km b.
     *
     * @var float
     */
    private $pxKmB;

    /**
     * Px km c.
     *
     * @var float
     */
    private $pxKmC;

    /**
     * Px km d.
     *
     * @var float
     */
    private $pxKmD;

    /**
     * Px km e.
     *
     * @var float
     */
    private $pxKmE;

    /**
     * Q e t code collaborateur dest.
     *
     * @var string
     */
    private $qETCodeCollaborateurDest;

    /**
     * Q t e l code mission.
     *
     * @var string
     */
    private $qTELCodeMission;

    /**
     * Q t e l code tache.
     *
     * @var string
     */
    private $qTELCodeTache;

    /**
     * Q t e l special.
     *
     * @var int
     */
    private $qTELSpecial;

    /**
     * Rac data cpta.
     *
     * @var string
     */
    private $racDataCpta;

    /**
     * Rac data paie.
     *
     * @var string
     */
    private $racDataPaie;

    /**
     * Radical compte cli.
     *
     * @var string
     */
    private $radicalCompteCli;

    /**
     * Radical compte frn.
     *
     * @var string
     */
    private $radicalCompteFrn;

    /**
     * Sais date fin.
     *
     * @var boolean
     */
    private $saisDateFin;

    /**
     * T d f c_ adhesion totale.
     *
     * @var boolean
     */
    private $tDFC_AdhesionTotale;

    /**
     * T d f c_ emetteur.
     *
     * @var string
     */
    private $tDFC_Emetteur;

    /**
     * T d f c_ facturant.
     *
     * @var string
     */
    private $tDFC_Facturant;

    /**
     * T d f c_ info trans.
     *
     * @var string
     */
    private $tDFC_InfoTrans;

    /**
     * T p interdit creat millesime.
     *
     * @var boolean
     */
    private $tPInterditCreatMillesime;

    /**
     * T p interdit creat mission.
     *
     * @var boolean
     */
    private $tPInterditCreatMission;

    /**
     * T p pas clients sortis.
     *
     * @var boolean
     */
    private $tPPasClientsSortis;

    /**
     * T p pas intervenants.
     *
     * @var boolean
     */
    private $tPPasIntervenants;

    /**
     * T p prix invisible.
     *
     * @var boolean
     */
    private $tPPrixInvisible;

    /**
     * T p rempli pref auto.
     *
     * @var boolean
     */
    private $tPRempliPrefAuto;

    /**
     * T p saisie d o s.
     *
     * @var boolean
     */
    private $tPSaisieDOS;

    /**
     * Tps passes interdit prix.
     *
     * @var boolean
     */
    private $tpsPassesInterditPrix;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acces autorise bons travaux.
     *
     * @return boolean Returns the acces autorise bons travaux.
     */
    public function getAccesAutoriseBonsTravaux() {
        return $this->accesAutoriseBonsTravaux;
    }

    /**
     * Get the acces autorise plan facturation.
     *
     * @return boolean Returns the acces autorise plan facturation.
     */
    public function getAccesAutorisePlanFacturation() {
        return $this->accesAutorisePlanFacturation;
    }

    /**
     * Get the acces autorise plan tache.
     *
     * @return boolean Returns the acces autorise plan tache.
     */
    public function getAccesAutorisePlanTache() {
        return $this->accesAutorisePlanTache;
    }

    /**
     * Get the acces docs cab.
     *
     * @return boolean Returns the acces docs cab.
     */
    public function getAccesDocsCab() {
        return $this->accesDocsCab;
    }

    /**
     * Get the acces dossier cpta.
     *
     * @return string Returns the acces dossier cpta.
     */
    public function getAccesDossierCpta() {
        return $this->accesDossierCpta;
    }

    /**
     * Get the acces dossier paie.
     *
     * @return string Returns the acces dossier paie.
     */
    public function getAccesDossierPaie() {
        return $this->accesDossierPaie;
    }

    /**
     * Get the acces stat cab.
     *
     * @return boolean Returns the acces stat cab.
     */
    public function getAccesStatCab() {
        return $this->accesStatCab;
    }

    /**
     * Get the activation conf c m a v cli.
     *
     * @return boolean Returns the activation conf c m a v cli.
     */
    public function getActivationConfCMAVCli() {
        return $this->activationConfCMAVCli;
    }

    /**
     * Get the activation conf controle.
     *
     * @return boolean Returns the activation conf controle.
     */
    public function getActivationConfControle() {
        return $this->activationConfControle;
    }

    /**
     * Get the activation lst restri.
     *
     * @return boolean Returns the activation lst restri.
     */
    public function getActivationLstRestri() {
        return $this->activationLstRestri;
    }

    /**
     * Get the activation niveau2.
     *
     * @return boolean Returns the activation niveau2.
     */
    public function getActivationNiveau2() {
        return $this->activationNiveau2;
    }

    /**
     * Get the activation niveau3.
     *
     * @return boolean Returns the activation niveau3.
     */
    public function getActivationNiveau3() {
        return $this->activationNiveau3;
    }

    /**
     * Get the affiche point.
     *
     * @return boolean Returns the affiche point.
     */
    public function getAffichePoint() {
        return $this->affichePoint;
    }

    /**
     * Get the affiche semaine.
     *
     * @return boolean Returns the affiche semaine.
     */
    public function getAfficheSemaine() {
        return $this->afficheSemaine;
    }

    /**
     * Get the annulation affaire.
     *
     * @return boolean Returns the annulation affaire.
     */
    public function getAnnulationAffaire() {
        return $this->annulationAffaire;
    }

    /**
     * Get the annulation article.
     *
     * @return boolean Returns the annulation article.
     */
    public function getAnnulationArticle() {
        return $this->annulationArticle;
    }

    /**
     * Get the annulation bons travaux.
     *
     * @return boolean Returns the annulation bons travaux.
     */
    public function getAnnulationBonsTravaux() {
        return $this->annulationBonsTravaux;
    }

    /**
     * Get the annulation chantier.
     *
     * @return boolean Returns the annulation chantier.
     */
    public function getAnnulationChantier() {
        return $this->annulationChantier;
    }

    /**
     * Get the annulation client.
     *
     * @return boolean Returns the annulation client.
     */
    public function getAnnulationClient() {
        return $this->annulationClient;
    }

    /**
     * Get the annulation commission.
     *
     * @return boolean Returns the annulation commission.
     */
    public function getAnnulationCommission() {
        return $this->annulationCommission;
    }

    /**
     * Get the annulation dossier cpta.
     *
     * @return boolean Returns the annulation dossier cpta.
     */
    public function getAnnulationDossierCpta() {
        return $this->annulationDossierCpta;
    }

    /**
     * Get the annulation dossier fact.
     *
     * @return boolean Returns the annulation dossier fact.
     */
    public function getAnnulationDossierFact() {
        return $this->annulationDossierFact;
    }

    /**
     * Get the annulation dossier paie.
     *
     * @return boolean Returns the annulation dossier paie.
     */
    public function getAnnulationDossierPaie() {
        return $this->annulationDossierPaie;
    }

    /**
     * Get the annulation fournisseur.
     *
     * @return boolean Returns the annulation fournisseur.
     */
    public function getAnnulationFournisseur() {
        return $this->annulationFournisseur;
    }

    /**
     * Get the annulation plan facturation.
     *
     * @return boolean Returns the annulation plan facturation.
     */
    public function getAnnulationPlanFacturation() {
        return $this->annulationPlanFacturation;
    }

    /**
     * Get the annulation plan tache.
     *
     * @return boolean Returns the annulation plan tache.
     */
    public function getAnnulationPlanTache() {
        return $this->annulationPlanTache;
    }

    /**
     * Get the annulation tache.
     *
     * @return boolean Returns the annulation tache.
     */
    public function getAnnulationTache() {
        return $this->annulationTache;
    }

    /**
     * Get the annulation tarif.
     *
     * @return boolean Returns the annulation tarif.
     */
    public function getAnnulationTarif() {
        return $this->annulationTarif;
    }

    /**
     * Get the blocage ed cli.
     *
     * @return boolean Returns the blocage ed cli.
     */
    public function getBlocageEdCli() {
        return $this->blocageEdCli;
    }

    /**
     * Get the budget type saisie.
     *
     * @return int Returns the budget type saisie.
     */
    public function getBudgetTypeSaisie() {
        return $this->budgetTypeSaisie;
    }

    /**
     * Get the champs critere1.
     *
     * @return string Returns the champs critere1.
     */
    public function getChampsCritere1() {
        return $this->champsCritere1;
    }

    /**
     * Get the champs critere10.
     *
     * @return string Returns the champs critere10.
     */
    public function getChampsCritere10() {
        return $this->champsCritere10;
    }

    /**
     * Get the champs critere2.
     *
     * @return string Returns the champs critere2.
     */
    public function getChampsCritere2() {
        return $this->champsCritere2;
    }

    /**
     * Get the champs critere3.
     *
     * @return string Returns the champs critere3.
     */
    public function getChampsCritere3() {
        return $this->champsCritere3;
    }

    /**
     * Get the champs critere4.
     *
     * @return string Returns the champs critere4.
     */
    public function getChampsCritere4() {
        return $this->champsCritere4;
    }

    /**
     * Get the champs critere5.
     *
     * @return string Returns the champs critere5.
     */
    public function getChampsCritere5() {
        return $this->champsCritere5;
    }

    /**
     * Get the champs critere6.
     *
     * @return string Returns the champs critere6.
     */
    public function getChampsCritere6() {
        return $this->champsCritere6;
    }

    /**
     * Get the champs critere7.
     *
     * @return string Returns the champs critere7.
     */
    public function getChampsCritere7() {
        return $this->champsCritere7;
    }

    /**
     * Get the champs critere8.
     *
     * @return string Returns the champs critere8.
     */
    public function getChampsCritere8() {
        return $this->champsCritere8;
    }

    /**
     * Get the champs critere9.
     *
     * @return string Returns the champs critere9.
     */
    public function getChampsCritere9() {
        return $this->champsCritere9;
    }

    /**
     * Get the champs critere affaire1.
     *
     * @return string Returns the champs critere affaire1.
     */
    public function getChampsCritereAffaire1() {
        return $this->champsCritereAffaire1;
    }

    /**
     * Get the champs critere affaire10.
     *
     * @return string Returns the champs critere affaire10.
     */
    public function getChampsCritereAffaire10() {
        return $this->champsCritereAffaire10;
    }

    /**
     * Get the champs critere affaire2.
     *
     * @return string Returns the champs critere affaire2.
     */
    public function getChampsCritereAffaire2() {
        return $this->champsCritereAffaire2;
    }

    /**
     * Get the champs critere affaire3.
     *
     * @return string Returns the champs critere affaire3.
     */
    public function getChampsCritereAffaire3() {
        return $this->champsCritereAffaire3;
    }

    /**
     * Get the champs critere affaire4.
     *
     * @return string Returns the champs critere affaire4.
     */
    public function getChampsCritereAffaire4() {
        return $this->champsCritereAffaire4;
    }

    /**
     * Get the champs critere affaire5.
     *
     * @return string Returns the champs critere affaire5.
     */
    public function getChampsCritereAffaire5() {
        return $this->champsCritereAffaire5;
    }

    /**
     * Get the champs critere affaire6.
     *
     * @return string Returns the champs critere affaire6.
     */
    public function getChampsCritereAffaire6() {
        return $this->champsCritereAffaire6;
    }

    /**
     * Get the champs critere affaire7.
     *
     * @return string Returns the champs critere affaire7.
     */
    public function getChampsCritereAffaire7() {
        return $this->champsCritereAffaire7;
    }

    /**
     * Get the champs critere affaire8.
     *
     * @return string Returns the champs critere affaire8.
     */
    public function getChampsCritereAffaire8() {
        return $this->champsCritereAffaire8;
    }

    /**
     * Get the champs critere affaire9.
     *
     * @return string Returns the champs critere affaire9.
     */
    public function getChampsCritereAffaire9() {
        return $this->champsCritereAffaire9;
    }

    /**
     * Get the champs critere article1.
     *
     * @return string Returns the champs critere article1.
     */
    public function getChampsCritereArticle1() {
        return $this->champsCritereArticle1;
    }

    /**
     * Get the champs critere article10.
     *
     * @return string Returns the champs critere article10.
     */
    public function getChampsCritereArticle10() {
        return $this->champsCritereArticle10;
    }

    /**
     * Get the champs critere article2.
     *
     * @return string Returns the champs critere article2.
     */
    public function getChampsCritereArticle2() {
        return $this->champsCritereArticle2;
    }

    /**
     * Get the champs critere article3.
     *
     * @return string Returns the champs critere article3.
     */
    public function getChampsCritereArticle3() {
        return $this->champsCritereArticle3;
    }

    /**
     * Get the champs critere article4.
     *
     * @return string Returns the champs critere article4.
     */
    public function getChampsCritereArticle4() {
        return $this->champsCritereArticle4;
    }

    /**
     * Get the champs critere article5.
     *
     * @return string Returns the champs critere article5.
     */
    public function getChampsCritereArticle5() {
        return $this->champsCritereArticle5;
    }

    /**
     * Get the champs critere article6.
     *
     * @return string Returns the champs critere article6.
     */
    public function getChampsCritereArticle6() {
        return $this->champsCritereArticle6;
    }

    /**
     * Get the champs critere article7.
     *
     * @return string Returns the champs critere article7.
     */
    public function getChampsCritereArticle7() {
        return $this->champsCritereArticle7;
    }

    /**
     * Get the champs critere article8.
     *
     * @return string Returns the champs critere article8.
     */
    public function getChampsCritereArticle8() {
        return $this->champsCritereArticle8;
    }

    /**
     * Get the champs critere article9.
     *
     * @return string Returns the champs critere article9.
     */
    public function getChampsCritereArticle9() {
        return $this->champsCritereArticle9;
    }

    /**
     * Get the champs critere ent piece1.
     *
     * @return string Returns the champs critere ent piece1.
     */
    public function getChampsCritereEntPiece1() {
        return $this->champsCritereEntPiece1;
    }

    /**
     * Get the champs critere ent piece10.
     *
     * @return string Returns the champs critere ent piece10.
     */
    public function getChampsCritereEntPiece10() {
        return $this->champsCritereEntPiece10;
    }

    /**
     * Get the champs critere ent piece2.
     *
     * @return string Returns the champs critere ent piece2.
     */
    public function getChampsCritereEntPiece2() {
        return $this->champsCritereEntPiece2;
    }

    /**
     * Get the champs critere ent piece3.
     *
     * @return string Returns the champs critere ent piece3.
     */
    public function getChampsCritereEntPiece3() {
        return $this->champsCritereEntPiece3;
    }

    /**
     * Get the champs critere ent piece4.
     *
     * @return string Returns the champs critere ent piece4.
     */
    public function getChampsCritereEntPiece4() {
        return $this->champsCritereEntPiece4;
    }

    /**
     * Get the champs critere ent piece5.
     *
     * @return string Returns the champs critere ent piece5.
     */
    public function getChampsCritereEntPiece5() {
        return $this->champsCritereEntPiece5;
    }

    /**
     * Get the champs critere ent piece6.
     *
     * @return string Returns the champs critere ent piece6.
     */
    public function getChampsCritereEntPiece6() {
        return $this->champsCritereEntPiece6;
    }

    /**
     * Get the champs critere ent piece7.
     *
     * @return string Returns the champs critere ent piece7.
     */
    public function getChampsCritereEntPiece7() {
        return $this->champsCritereEntPiece7;
    }

    /**
     * Get the champs critere ent piece8.
     *
     * @return string Returns the champs critere ent piece8.
     */
    public function getChampsCritereEntPiece8() {
        return $this->champsCritereEntPiece8;
    }

    /**
     * Get the champs critere ent piece9.
     *
     * @return string Returns the champs critere ent piece9.
     */
    public function getChampsCritereEntPiece9() {
        return $this->champsCritereEntPiece9;
    }

    /**
     * Get the chrono activation.
     *
     * @return boolean Returns the chrono activation.
     */
    public function getChronoActivation() {
        return $this->chronoActivation;
    }

    /**
     * Get the chrono prefixe.
     *
     * @return string Returns the chrono prefixe.
     */
    public function getChronoPrefixe() {
        return $this->chronoPrefixe;
    }

    /**
     * Get the chrono prochain num.
     *
     * @return int Returns the chrono prochain num.
     */
    public function getChronoProchainNum() {
        return $this->chronoProchainNum;
    }

    /**
     * Get the cle acces cn paie.
     *
     * @return string Returns the cle acces cn paie.
     */
    public function getCleAccesCnPaie() {
        return $this->cleAccesCnPaie;
    }

    /**
     * Get the cle acces fiche client.
     *
     * @return string Returns the cle acces fiche client.
     */
    public function getCleAccesFicheClient() {
        return $this->cleAccesFicheClient;
    }

    /**
     * Get the cle acces menus.
     *
     * @return string Returns the cle acces menus.
     */
    public function getCleAccesMenus() {
        return $this->cleAccesMenus;
    }

    /**
     * Get the cle acces param.
     *
     * @return string Returns the cle acces param.
     */
    public function getCleAccesParam() {
        return $this->cleAccesParam;
    }

    /**
     * Get the cle des etr communs.
     *
     * @return string Returns the cle des etr communs.
     */
    public function getCleDesEtrCommuns() {
        return $this->cleDesEtrCommuns;
    }

    /**
     * Get the cle jrn lib communs.
     *
     * @return string Returns the cle jrn lib communs.
     */
    public function getCleJrnLibCommuns() {
        return $this->cleJrnLibCommuns;
    }

    /**
     * Get the code emetteur.
     *
     * @return string Returns the code emetteur.
     */
    public function getCodeEmetteur() {
        return $this->codeEmetteur;
    }

    /**
     * Get the code expert defaut.
     *
     * @return string Returns the code expert defaut.
     */
    public function getCodeExpertDefaut() {
        return $this->codeExpertDefaut;
    }

    /**
     * Get the code regroupement pre fact.
     *
     * @return string Returns the code regroupement pre fact.
     */
    public function getCodeRegroupementPreFact() {
        return $this->codeRegroupementPreFact;
    }

    /**
     * Get the conversion pwd.
     *
     * @return boolean Returns the conversion pwd.
     */
    public function getConversionPwd() {
        return $this->conversionPwd;
    }

    /**
     * Get the cpte collectif cli.
     *
     * @return string Returns the cpte collectif cli.
     */
    public function getCpteCollectifCli() {
        return $this->cpteCollectifCli;
    }

    /**
     * Get the cpte collectif frn.
     *
     * @return string Returns the cpte collectif frn.
     */
    public function getCpteCollectifFrn() {
        return $this->cpteCollectifFrn;
    }

    /**
     * Get the creation affaire.
     *
     * @return boolean Returns the creation affaire.
     */
    public function getCreationAffaire() {
        return $this->creationAffaire;
    }

    /**
     * Get the creation article.
     *
     * @return boolean Returns the creation article.
     */
    public function getCreationArticle() {
        return $this->creationArticle;
    }

    /**
     * Get the creation bons travaux.
     *
     * @return boolean Returns the creation bons travaux.
     */
    public function getCreationBonsTravaux() {
        return $this->creationBonsTravaux;
    }

    /**
     * Get the creation chantier.
     *
     * @return boolean Returns the creation chantier.
     */
    public function getCreationChantier() {
        return $this->creationChantier;
    }

    /**
     * Get the creation client.
     *
     * @return boolean Returns the creation client.
     */
    public function getCreationClient() {
        return $this->creationClient;
    }

    /**
     * Get the creation commission.
     *
     * @return boolean Returns the creation commission.
     */
    public function getCreationCommission() {
        return $this->creationCommission;
    }

    /**
     * Get the creation dossier cpta.
     *
     * @return boolean Returns the creation dossier cpta.
     */
    public function getCreationDossierCpta() {
        return $this->creationDossierCpta;
    }

    /**
     * Get the creation dossier fact.
     *
     * @return boolean Returns the creation dossier fact.
     */
    public function getCreationDossierFact() {
        return $this->creationDossierFact;
    }

    /**
     * Get the creation dossier paie.
     *
     * @return boolean Returns the creation dossier paie.
     */
    public function getCreationDossierPaie() {
        return $this->creationDossierPaie;
    }

    /**
     * Get the creation fournisseur.
     *
     * @return boolean Returns the creation fournisseur.
     */
    public function getCreationFournisseur() {
        return $this->creationFournisseur;
    }

    /**
     * Get the creation plan facturation.
     *
     * @return boolean Returns the creation plan facturation.
     */
    public function getCreationPlanFacturation() {
        return $this->creationPlanFacturation;
    }

    /**
     * Get the creation plan tache.
     *
     * @return boolean Returns the creation plan tache.
     */
    public function getCreationPlanTache() {
        return $this->creationPlanTache;
    }

    /**
     * Get the creation prospect.
     *
     * @return boolean Returns the creation prospect.
     */
    public function getCreationProspect() {
        return $this->creationProspect;
    }

    /**
     * Get the creation tache.
     *
     * @return boolean Returns the creation tache.
     */
    public function getCreationTache() {
        return $this->creationTache;
    }

    /**
     * Get the creation tarif.
     *
     * @return boolean Returns the creation tarif.
     */
    public function getCreationTarif() {
        return $this->creationTarif;
    }

    /**
     * Get the date cloture.
     *
     * @return DateTime Returns the date cloture.
     */
    public function getDateCloture() {
        return $this->dateCloture;
    }

    /**
     * Get the dt dern modif conf zone.
     *
     * @return DateTime Returns the dt dern modif conf zone.
     */
    public function getDtDernModifConfZone() {
        return $this->dtDernModifConfZone;
    }

    /**
     * Get the ech aff en mt.
     *
     * @return boolean Returns the ech aff en mt.
     */
    public function getEchAffEnMt() {
        return $this->echAffEnMt;
    }

    /**
     * Get the fonctionnement c g a.
     *
     * @return boolean Returns the fonctionnement c g a.
     */
    public function getFonctionnementCGA() {
        return $this->fonctionnementCGA;
    }

    /**
     * Get the heures trav1.
     *
     * @return float Returns the heures trav1.
     */
    public function getHeuresTrav1() {
        return $this->heuresTrav1;
    }

    /**
     * Get the heures trav2.
     *
     * @return float Returns the heures trav2.
     */
    public function getHeuresTrav2() {
        return $this->heuresTrav2;
    }

    /**
     * Get the heures trav3.
     *
     * @return float Returns the heures trav3.
     */
    public function getHeuresTrav3() {
        return $this->heuresTrav3;
    }

    /**
     * Get the heures trav4.
     *
     * @return float Returns the heures trav4.
     */
    public function getHeuresTrav4() {
        return $this->heuresTrav4;
    }

    /**
     * Get the increm auto.
     *
     * @return boolean Returns the increm auto.
     */
    public function getIncremAuto() {
        return $this->incremAuto;
    }

    /**
     * Get the increm auto aff.
     *
     * @return boolean Returns the increm auto aff.
     */
    public function getIncremAutoAff() {
        return $this->incremAutoAff;
    }

    /**
     * Get the increm auto frn.
     *
     * @return boolean Returns the increm auto frn.
     */
    public function getIncremAutoFrn() {
        return $this->incremAutoFrn;
    }

    /**
     * Get the increm cpte cli auto.
     *
     * @return boolean Returns the increm cpte cli auto.
     */
    public function getIncremCpteCliAuto() {
        return $this->incremCpteCliAuto;
    }

    /**
     * Get the increm cpte frn auto.
     *
     * @return boolean Returns the increm cpte frn auto.
     */
    public function getIncremCpteFrnAuto() {
        return $this->incremCpteFrnAuto;
    }

    /**
     * Get the increment cpte cli.
     *
     * @return int Returns the increment cpte cli.
     */
    public function getIncrementCpteCli() {
        return $this->incrementCpteCli;
    }

    /**
     * Get the increment cpte frn.
     *
     * @return int Returns the increment cpte frn.
     */
    public function getIncrementCpteFrn() {
        return $this->incrementCpteFrn;
    }

    /**
     * Get the liaison bu cpta.
     *
     * @return boolean Returns the liaison bu cpta.
     */
    public function getLiaisonBuCpta() {
        return $this->liaisonBuCpta;
    }

    /**
     * Get the lib affectation1.
     *
     * @return string Returns the lib affectation1.
     */
    public function getLibAffectation1() {
        return $this->libAffectation1;
    }

    /**
     * Get the lib affectation2.
     *
     * @return string Returns the lib affectation2.
     */
    public function getLibAffectation2() {
        return $this->libAffectation2;
    }

    /**
     * Get the lib affectation3.
     *
     * @return string Returns the lib affectation3.
     */
    public function getLibAffectation3() {
        return $this->libAffectation3;
    }

    /**
     * Get the lib affectation4.
     *
     * @return string Returns the lib affectation4.
     */
    public function getLibAffectation4() {
        return $this->libAffectation4;
    }

    /**
     * Get the lib affectation5.
     *
     * @return string Returns the lib affectation5.
     */
    public function getLibAffectation5() {
        return $this->libAffectation5;
    }

    /**
     * Get the lib affectation6.
     *
     * @return string Returns the lib affectation6.
     */
    public function getLibAffectation6() {
        return $this->libAffectation6;
    }

    /**
     * Get the lib affectation7.
     *
     * @return string Returns the lib affectation7.
     */
    public function getLibAffectation7() {
        return $this->libAffectation7;
    }

    /**
     * Get the lib critere1.
     *
     * @return string Returns the lib critere1.
     */
    public function getLibCritere1() {
        return $this->libCritere1;
    }

    /**
     * Get the lib critere10.
     *
     * @return string Returns the lib critere10.
     */
    public function getLibCritere10() {
        return $this->libCritere10;
    }

    /**
     * Get the lib critere2.
     *
     * @return string Returns the lib critere2.
     */
    public function getLibCritere2() {
        return $this->libCritere2;
    }

    /**
     * Get the lib critere3.
     *
     * @return string Returns the lib critere3.
     */
    public function getLibCritere3() {
        return $this->libCritere3;
    }

    /**
     * Get the lib critere4.
     *
     * @return string Returns the lib critere4.
     */
    public function getLibCritere4() {
        return $this->libCritere4;
    }

    /**
     * Get the lib critere5.
     *
     * @return string Returns the lib critere5.
     */
    public function getLibCritere5() {
        return $this->libCritere5;
    }

    /**
     * Get the lib critere6.
     *
     * @return string Returns the lib critere6.
     */
    public function getLibCritere6() {
        return $this->libCritere6;
    }

    /**
     * Get the lib critere7.
     *
     * @return string Returns the lib critere7.
     */
    public function getLibCritere7() {
        return $this->libCritere7;
    }

    /**
     * Get the lib critere8.
     *
     * @return string Returns the lib critere8.
     */
    public function getLibCritere8() {
        return $this->libCritere8;
    }

    /**
     * Get the lib critere9.
     *
     * @return string Returns the lib critere9.
     */
    public function getLibCritere9() {
        return $this->libCritere9;
    }

    /**
     * Get the lib critere affaire1.
     *
     * @return string Returns the lib critere affaire1.
     */
    public function getLibCritereAffaire1() {
        return $this->libCritereAffaire1;
    }

    /**
     * Get the lib critere affaire10.
     *
     * @return string Returns the lib critere affaire10.
     */
    public function getLibCritereAffaire10() {
        return $this->libCritereAffaire10;
    }

    /**
     * Get the lib critere affaire2.
     *
     * @return string Returns the lib critere affaire2.
     */
    public function getLibCritereAffaire2() {
        return $this->libCritereAffaire2;
    }

    /**
     * Get the lib critere affaire3.
     *
     * @return string Returns the lib critere affaire3.
     */
    public function getLibCritereAffaire3() {
        return $this->libCritereAffaire3;
    }

    /**
     * Get the lib critere affaire4.
     *
     * @return string Returns the lib critere affaire4.
     */
    public function getLibCritereAffaire4() {
        return $this->libCritereAffaire4;
    }

    /**
     * Get the lib critere affaire5.
     *
     * @return string Returns the lib critere affaire5.
     */
    public function getLibCritereAffaire5() {
        return $this->libCritereAffaire5;
    }

    /**
     * Get the lib critere affaire6.
     *
     * @return string Returns the lib critere affaire6.
     */
    public function getLibCritereAffaire6() {
        return $this->libCritereAffaire6;
    }

    /**
     * Get the lib critere affaire7.
     *
     * @return string Returns the lib critere affaire7.
     */
    public function getLibCritereAffaire7() {
        return $this->libCritereAffaire7;
    }

    /**
     * Get the lib critere affaire8.
     *
     * @return string Returns the lib critere affaire8.
     */
    public function getLibCritereAffaire8() {
        return $this->libCritereAffaire8;
    }

    /**
     * Get the lib critere affaire9.
     *
     * @return string Returns the lib critere affaire9.
     */
    public function getLibCritereAffaire9() {
        return $this->libCritereAffaire9;
    }

    /**
     * Get the lib critere article1.
     *
     * @return string Returns the lib critere article1.
     */
    public function getLibCritereArticle1() {
        return $this->libCritereArticle1;
    }

    /**
     * Get the lib critere article10.
     *
     * @return string Returns the lib critere article10.
     */
    public function getLibCritereArticle10() {
        return $this->libCritereArticle10;
    }

    /**
     * Get the lib critere article2.
     *
     * @return string Returns the lib critere article2.
     */
    public function getLibCritereArticle2() {
        return $this->libCritereArticle2;
    }

    /**
     * Get the lib critere article3.
     *
     * @return string Returns the lib critere article3.
     */
    public function getLibCritereArticle3() {
        return $this->libCritereArticle3;
    }

    /**
     * Get the lib critere article4.
     *
     * @return string Returns the lib critere article4.
     */
    public function getLibCritereArticle4() {
        return $this->libCritereArticle4;
    }

    /**
     * Get the lib critere article5.
     *
     * @return string Returns the lib critere article5.
     */
    public function getLibCritereArticle5() {
        return $this->libCritereArticle5;
    }

    /**
     * Get the lib critere article6.
     *
     * @return string Returns the lib critere article6.
     */
    public function getLibCritereArticle6() {
        return $this->libCritereArticle6;
    }

    /**
     * Get the lib critere article7.
     *
     * @return string Returns the lib critere article7.
     */
    public function getLibCritereArticle7() {
        return $this->libCritereArticle7;
    }

    /**
     * Get the lib critere article8.
     *
     * @return string Returns the lib critere article8.
     */
    public function getLibCritereArticle8() {
        return $this->libCritereArticle8;
    }

    /**
     * Get the lib critere article9.
     *
     * @return string Returns the lib critere article9.
     */
    public function getLibCritereArticle9() {
        return $this->libCritereArticle9;
    }

    /**
     * Get the lib critere ent piece1.
     *
     * @return string Returns the lib critere ent piece1.
     */
    public function getLibCritereEntPiece1() {
        return $this->libCritereEntPiece1;
    }

    /**
     * Get the lib critere ent piece10.
     *
     * @return string Returns the lib critere ent piece10.
     */
    public function getLibCritereEntPiece10() {
        return $this->libCritereEntPiece10;
    }

    /**
     * Get the lib critere ent piece2.
     *
     * @return string Returns the lib critere ent piece2.
     */
    public function getLibCritereEntPiece2() {
        return $this->libCritereEntPiece2;
    }

    /**
     * Get the lib critere ent piece3.
     *
     * @return string Returns the lib critere ent piece3.
     */
    public function getLibCritereEntPiece3() {
        return $this->libCritereEntPiece3;
    }

    /**
     * Get the lib critere ent piece4.
     *
     * @return string Returns the lib critere ent piece4.
     */
    public function getLibCritereEntPiece4() {
        return $this->libCritereEntPiece4;
    }

    /**
     * Get the lib critere ent piece5.
     *
     * @return string Returns the lib critere ent piece5.
     */
    public function getLibCritereEntPiece5() {
        return $this->libCritereEntPiece5;
    }

    /**
     * Get the lib critere ent piece6.
     *
     * @return string Returns the lib critere ent piece6.
     */
    public function getLibCritereEntPiece6() {
        return $this->libCritereEntPiece6;
    }

    /**
     * Get the lib critere ent piece7.
     *
     * @return string Returns the lib critere ent piece7.
     */
    public function getLibCritereEntPiece7() {
        return $this->libCritereEntPiece7;
    }

    /**
     * Get the lib critere ent piece8.
     *
     * @return string Returns the lib critere ent piece8.
     */
    public function getLibCritereEntPiece8() {
        return $this->libCritereEntPiece8;
    }

    /**
     * Get the lib critere ent piece9.
     *
     * @return string Returns the lib critere ent piece9.
     */
    public function getLibCritereEntPiece9() {
        return $this->libCritereEntPiece9;
    }

    /**
     * Get the lib critere interloc.
     *
     * @return string Returns the lib critere interloc.
     */
    public function getLibCritereInterloc() {
        return $this->libCritereInterloc;
    }

    /**
     * Get the lib critere interloc2.
     *
     * @return string Returns the lib critere interloc2.
     */
    public function getLibCritereInterloc2() {
        return $this->libCritereInterloc2;
    }

    /**
     * Get the major heures trav1.
     *
     * @return float Returns the major heures trav1.
     */
    public function getMajorHeuresTrav1() {
        return $this->majorHeuresTrav1;
    }

    /**
     * Get the major heures trav2.
     *
     * @return float Returns the major heures trav2.
     */
    public function getMajorHeuresTrav2() {
        return $this->majorHeuresTrav2;
    }

    /**
     * Get the major heures trav3.
     *
     * @return float Returns the major heures trav3.
     */
    public function getMajorHeuresTrav3() {
        return $this->majorHeuresTrav3;
    }

    /**
     * Get the major heures trav4.
     *
     * @return float Returns the major heures trav4.
     */
    public function getMajorHeuresTrav4() {
        return $this->majorHeuresTrav4;
    }

    /**
     * Get the mnt ticket resto a.
     *
     * @return float Returns the mnt ticket resto a.
     */
    public function getMntTicketRestoA() {
        return $this->mntTicketRestoA;
    }

    /**
     * Get the mnt ticket resto b.
     *
     * @return float Returns the mnt ticket resto b.
     */
    public function getMntTicketRestoB() {
        return $this->mntTicketRestoB;
    }

    /**
     * Get the mnt ticket resto c.
     *
     * @return float Returns the mnt ticket resto c.
     */
    public function getMntTicketRestoC() {
        return $this->mntTicketRestoC;
    }

    /**
     * Get the mnt ticket resto d.
     *
     * @return float Returns the mnt ticket resto d.
     */
    public function getMntTicketRestoD() {
        return $this->mntTicketRestoD;
    }

    /**
     * Get the mnt ticket resto e.
     *
     * @return float Returns the mnt ticket resto e.
     */
    public function getMntTicketRestoE() {
        return $this->mntTicketRestoE;
    }

    /**
     * Get the modif affaire.
     *
     * @return string Returns the modif affaire.
     */
    public function getModifAffaire() {
        return $this->modifAffaire;
    }

    /**
     * Get the modif article.
     *
     * @return string Returns the modif article.
     */
    public function getModifArticle() {
        return $this->modifArticle;
    }

    /**
     * Get the modif bons travaux.
     *
     * @return string Returns the modif bons travaux.
     */
    public function getModifBonsTravaux() {
        return $this->modifBonsTravaux;
    }

    /**
     * Get the modif chantier.
     *
     * @return string Returns the modif chantier.
     */
    public function getModifChantier() {
        return $this->modifChantier;
    }

    /**
     * Get the modif client.
     *
     * @return string Returns the modif client.
     */
    public function getModifClient() {
        return $this->modifClient;
    }

    /**
     * Get the modif commission.
     *
     * @return string Returns the modif commission.
     */
    public function getModifCommission() {
        return $this->modifCommission;
    }

    /**
     * Get the modif dossier fact.
     *
     * @return string Returns the modif dossier fact.
     */
    public function getModifDossierFact() {
        return $this->modifDossierFact;
    }

    /**
     * Get the modif fournisseur.
     *
     * @return string Returns the modif fournisseur.
     */
    public function getModifFournisseur() {
        return $this->modifFournisseur;
    }

    /**
     * Get the modif plan facturation.
     *
     * @return string Returns the modif plan facturation.
     */
    public function getModifPlanFacturation() {
        return $this->modifPlanFacturation;
    }

    /**
     * Get the modif plan tache.
     *
     * @return string Returns the modif plan tache.
     */
    public function getModifPlanTache() {
        return $this->modifPlanTache;
    }

    /**
     * Get the modif tache.
     *
     * @return string Returns the modif tache.
     */
    public function getModifTache() {
        return $this->modifTache;
    }

    /**
     * Get the modif tarif.
     *
     * @return string Returns the modif tarif.
     */
    public function getModifTarif() {
        return $this->modifTarif;
    }

    /**
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Get the nb dec monnaie.
     *
     * @return int Returns the nb dec monnaie.
     */
    public function getNbDecMonnaie() {
        return $this->nbDecMonnaie;
    }

    /**
     * Get the no doss cpta.
     *
     * @return string Returns the no doss cpta.
     */
    public function getNoDossCpta() {
        return $this->noDossCpta;
    }

    /**
     * Get the no doss paie.
     *
     * @return string Returns the no doss paie.
     */
    public function getNoDossPaie() {
        return $this->noDossPaie;
    }

    /**
     * Get the prefixe aff.
     *
     * @return string Returns the prefixe aff.
     */
    public function getPrefixeAff() {
        return $this->prefixeAff;
    }

    /**
     * Get the priorite saisie aff.
     *
     * @return int Returns the priorite saisie aff.
     */
    public function getPrioriteSaisieAff() {
        return $this->prioriteSaisieAff;
    }

    /**
     * Get the priorite saisie client.
     *
     * @return int Returns the priorite saisie client.
     */
    public function getPrioriteSaisieClient() {
        return $this->prioriteSaisieClient;
    }

    /**
     * Get the priorite saisie frn.
     *
     * @return int Returns the priorite saisie frn.
     */
    public function getPrioriteSaisieFrn() {
        return $this->prioriteSaisieFrn;
    }

    /**
     * Get the prochain cpte cli.
     *
     * @return string Returns the prochain cpte cli.
     */
    public function getProchainCpteCli() {
        return $this->prochainCpteCli;
    }

    /**
     * Get the prochain cpte frn.
     *
     * @return string Returns the prochain cpte frn.
     */
    public function getProchainCpteFrn() {
        return $this->prochainCpteFrn;
    }

    /**
     * Get the prochain mois oblig.
     *
     * @return DateTime Returns the prochain mois oblig.
     */
    public function getProchainMoisOblig() {
        return $this->prochainMoisOblig;
    }

    /**
     * Get the prochain num aff.
     *
     * @return int Returns the prochain num aff.
     */
    public function getProchainNumAff() {
        return $this->prochainNumAff;
    }

    /**
     * Get the px km a.
     *
     * @return float Returns the px km a.
     */
    public function getPxKmA() {
        return $this->pxKmA;
    }

    /**
     * Get the px km b.
     *
     * @return float Returns the px km b.
     */
    public function getPxKmB() {
        return $this->pxKmB;
    }

    /**
     * Get the px km c.
     *
     * @return float Returns the px km c.
     */
    public function getPxKmC() {
        return $this->pxKmC;
    }

    /**
     * Get the px km d.
     *
     * @return float Returns the px km d.
     */
    public function getPxKmD() {
        return $this->pxKmD;
    }

    /**
     * Get the px km e.
     *
     * @return float Returns the px km e.
     */
    public function getPxKmE() {
        return $this->pxKmE;
    }

    /**
     * Get the q e t code collaborateur dest.
     *
     * @return string Returns the q e t code collaborateur dest.
     */
    public function getQETCodeCollaborateurDest() {
        return $this->qETCodeCollaborateurDest;
    }

    /**
     * Get the q t e l code mission.
     *
     * @return string Returns the q t e l code mission.
     */
    public function getQTELCodeMission() {
        return $this->qTELCodeMission;
    }

    /**
     * Get the q t e l code tache.
     *
     * @return string Returns the q t e l code tache.
     */
    public function getQTELCodeTache() {
        return $this->qTELCodeTache;
    }

    /**
     * Get the q t e l special.
     *
     * @return int Returns the q t e l special.
     */
    public function getQTELSpecial() {
        return $this->qTELSpecial;
    }

    /**
     * Get the rac data cpta.
     *
     * @return string Returns the rac data cpta.
     */
    public function getRacDataCpta() {
        return $this->racDataCpta;
    }

    /**
     * Get the rac data paie.
     *
     * @return string Returns the rac data paie.
     */
    public function getRacDataPaie() {
        return $this->racDataPaie;
    }

    /**
     * Get the radical compte cli.
     *
     * @return string Returns the radical compte cli.
     */
    public function getRadicalCompteCli() {
        return $this->radicalCompteCli;
    }

    /**
     * Get the radical compte frn.
     *
     * @return string Returns the radical compte frn.
     */
    public function getRadicalCompteFrn() {
        return $this->radicalCompteFrn;
    }

    /**
     * Get the sais date fin.
     *
     * @return boolean Returns the sais date fin.
     */
    public function getSaisDateFin() {
        return $this->saisDateFin;
    }

    /**
     * Get the t d f c_ adhesion totale.
     *
     * @return boolean Returns the t d f c_ adhesion totale.
     */
    public function getTDFC_AdhesionTotale() {
        return $this->tDFC_AdhesionTotale;
    }

    /**
     * Get the t d f c_ emetteur.
     *
     * @return string Returns the t d f c_ emetteur.
     */
    public function getTDFC_Emetteur() {
        return $this->tDFC_Emetteur;
    }

    /**
     * Get the t d f c_ facturant.
     *
     * @return string Returns the t d f c_ facturant.
     */
    public function getTDFC_Facturant() {
        return $this->tDFC_Facturant;
    }

    /**
     * Get the t d f c_ info trans.
     *
     * @return string Returns the t d f c_ info trans.
     */
    public function getTDFC_InfoTrans() {
        return $this->tDFC_InfoTrans;
    }

    /**
     * Get the t p interdit creat millesime.
     *
     * @return boolean Returns the t p interdit creat millesime.
     */
    public function getTPInterditCreatMillesime() {
        return $this->tPInterditCreatMillesime;
    }

    /**
     * Get the t p interdit creat mission.
     *
     * @return boolean Returns the t p interdit creat mission.
     */
    public function getTPInterditCreatMission() {
        return $this->tPInterditCreatMission;
    }

    /**
     * Get the t p pas clients sortis.
     *
     * @return boolean Returns the t p pas clients sortis.
     */
    public function getTPPasClientsSortis() {
        return $this->tPPasClientsSortis;
    }

    /**
     * Get the t p pas intervenants.
     *
     * @return boolean Returns the t p pas intervenants.
     */
    public function getTPPasIntervenants() {
        return $this->tPPasIntervenants;
    }

    /**
     * Get the t p prix invisible.
     *
     * @return boolean Returns the t p prix invisible.
     */
    public function getTPPrixInvisible() {
        return $this->tPPrixInvisible;
    }

    /**
     * Get the t p rempli pref auto.
     *
     * @return boolean Returns the t p rempli pref auto.
     */
    public function getTPRempliPrefAuto() {
        return $this->tPRempliPrefAuto;
    }

    /**
     * Get the t p saisie d o s.
     *
     * @return boolean Returns the t p saisie d o s.
     */
    public function getTPSaisieDOS() {
        return $this->tPSaisieDOS;
    }

    /**
     * Get the tps passes interdit prix.
     *
     * @return boolean Returns the tps passes interdit prix.
     */
    public function getTpsPassesInterditPrix() {
        return $this->tpsPassesInterditPrix;
    }

    /**
     * Set the acces autorise bons travaux.
     *
     * @param boolean $accesAutoriseBonsTravaux The acces autorise bons travaux.
     * @return Constantes Returns this constantes.
     */
    public function setAccesAutoriseBonsTravaux($accesAutoriseBonsTravaux) {
        $this->accesAutoriseBonsTravaux = $accesAutoriseBonsTravaux;
        return $this;
    }

    /**
     * Set the acces autorise plan facturation.
     *
     * @param boolean $accesAutorisePlanFacturation The acces autorise plan facturation.
     * @return Constantes Returns this constantes.
     */
    public function setAccesAutorisePlanFacturation($accesAutorisePlanFacturation) {
        $this->accesAutorisePlanFacturation = $accesAutorisePlanFacturation;
        return $this;
    }

    /**
     * Set the acces autorise plan tache.
     *
     * @param boolean $accesAutorisePlanTache The acces autorise plan tache.
     * @return Constantes Returns this constantes.
     */
    public function setAccesAutorisePlanTache($accesAutorisePlanTache) {
        $this->accesAutorisePlanTache = $accesAutorisePlanTache;
        return $this;
    }

    /**
     * Set the acces docs cab.
     *
     * @param boolean $accesDocsCab The acces docs cab.
     * @return Constantes Returns this constantes.
     */
    public function setAccesDocsCab($accesDocsCab) {
        $this->accesDocsCab = $accesDocsCab;
        return $this;
    }

    /**
     * Set the acces dossier cpta.
     *
     * @param string $accesDossierCpta The acces dossier cpta.
     * @return Constantes Returns this constantes.
     */
    public function setAccesDossierCpta($accesDossierCpta) {
        $this->accesDossierCpta = $accesDossierCpta;
        return $this;
    }

    /**
     * Set the acces dossier paie.
     *
     * @param string $accesDossierPaie The acces dossier paie.
     * @return Constantes Returns this constantes.
     */
    public function setAccesDossierPaie($accesDossierPaie) {
        $this->accesDossierPaie = $accesDossierPaie;
        return $this;
    }

    /**
     * Set the acces stat cab.
     *
     * @param boolean $accesStatCab The acces stat cab.
     * @return Constantes Returns this constantes.
     */
    public function setAccesStatCab($accesStatCab) {
        $this->accesStatCab = $accesStatCab;
        return $this;
    }

    /**
     * Set the activation conf c m a v cli.
     *
     * @param boolean $activationConfCMAVCli The activation conf c m a v cli.
     * @return Constantes Returns this constantes.
     */
    public function setActivationConfCMAVCli($activationConfCMAVCli) {
        $this->activationConfCMAVCli = $activationConfCMAVCli;
        return $this;
    }

    /**
     * Set the activation conf controle.
     *
     * @param boolean $activationConfControle The activation conf controle.
     * @return Constantes Returns this constantes.
     */
    public function setActivationConfControle($activationConfControle) {
        $this->activationConfControle = $activationConfControle;
        return $this;
    }

    /**
     * Set the activation lst restri.
     *
     * @param boolean $activationLstRestri The activation lst restri.
     * @return Constantes Returns this constantes.
     */
    public function setActivationLstRestri($activationLstRestri) {
        $this->activationLstRestri = $activationLstRestri;
        return $this;
    }

    /**
     * Set the activation niveau2.
     *
     * @param boolean $activationNiveau2 The activation niveau2.
     * @return Constantes Returns this constantes.
     */
    public function setActivationNiveau2($activationNiveau2) {
        $this->activationNiveau2 = $activationNiveau2;
        return $this;
    }

    /**
     * Set the activation niveau3.
     *
     * @param boolean $activationNiveau3 The activation niveau3.
     * @return Constantes Returns this constantes.
     */
    public function setActivationNiveau3($activationNiveau3) {
        $this->activationNiveau3 = $activationNiveau3;
        return $this;
    }

    /**
     * Set the affiche point.
     *
     * @param boolean $affichePoint The affiche point.
     * @return Constantes Returns this constantes.
     */
    public function setAffichePoint($affichePoint) {
        $this->affichePoint = $affichePoint;
        return $this;
    }

    /**
     * Set the affiche semaine.
     *
     * @param boolean $afficheSemaine The affiche semaine.
     * @return Constantes Returns this constantes.
     */
    public function setAfficheSemaine($afficheSemaine) {
        $this->afficheSemaine = $afficheSemaine;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param boolean $annulationAffaire The annulation affaire.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationAffaire($annulationAffaire) {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the annulation article.
     *
     * @param boolean $annulationArticle The annulation article.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationArticle($annulationArticle) {
        $this->annulationArticle = $annulationArticle;
        return $this;
    }

    /**
     * Set the annulation bons travaux.
     *
     * @param boolean $annulationBonsTravaux The annulation bons travaux.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationBonsTravaux($annulationBonsTravaux) {
        $this->annulationBonsTravaux = $annulationBonsTravaux;
        return $this;
    }

    /**
     * Set the annulation chantier.
     *
     * @param boolean $annulationChantier The annulation chantier.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationChantier($annulationChantier) {
        $this->annulationChantier = $annulationChantier;
        return $this;
    }

    /**
     * Set the annulation client.
     *
     * @param boolean $annulationClient The annulation client.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationClient($annulationClient) {
        $this->annulationClient = $annulationClient;
        return $this;
    }

    /**
     * Set the annulation commission.
     *
     * @param boolean $annulationCommission The annulation commission.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationCommission($annulationCommission) {
        $this->annulationCommission = $annulationCommission;
        return $this;
    }

    /**
     * Set the annulation dossier cpta.
     *
     * @param boolean $annulationDossierCpta The annulation dossier cpta.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationDossierCpta($annulationDossierCpta) {
        $this->annulationDossierCpta = $annulationDossierCpta;
        return $this;
    }

    /**
     * Set the annulation dossier fact.
     *
     * @param boolean $annulationDossierFact The annulation dossier fact.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationDossierFact($annulationDossierFact) {
        $this->annulationDossierFact = $annulationDossierFact;
        return $this;
    }

    /**
     * Set the annulation dossier paie.
     *
     * @param boolean $annulationDossierPaie The annulation dossier paie.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationDossierPaie($annulationDossierPaie) {
        $this->annulationDossierPaie = $annulationDossierPaie;
        return $this;
    }

    /**
     * Set the annulation fournisseur.
     *
     * @param boolean $annulationFournisseur The annulation fournisseur.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationFournisseur($annulationFournisseur) {
        $this->annulationFournisseur = $annulationFournisseur;
        return $this;
    }

    /**
     * Set the annulation plan facturation.
     *
     * @param boolean $annulationPlanFacturation The annulation plan facturation.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationPlanFacturation($annulationPlanFacturation) {
        $this->annulationPlanFacturation = $annulationPlanFacturation;
        return $this;
    }

    /**
     * Set the annulation plan tache.
     *
     * @param boolean $annulationPlanTache The annulation plan tache.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationPlanTache($annulationPlanTache) {
        $this->annulationPlanTache = $annulationPlanTache;
        return $this;
    }

    /**
     * Set the annulation tache.
     *
     * @param boolean $annulationTache The annulation tache.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationTache($annulationTache) {
        $this->annulationTache = $annulationTache;
        return $this;
    }

    /**
     * Set the annulation tarif.
     *
     * @param boolean $annulationTarif The annulation tarif.
     * @return Constantes Returns this constantes.
     */
    public function setAnnulationTarif($annulationTarif) {
        $this->annulationTarif = $annulationTarif;
        return $this;
    }

    /**
     * Set the blocage ed cli.
     *
     * @param boolean $blocageEdCli The blocage ed cli.
     * @return Constantes Returns this constantes.
     */
    public function setBlocageEdCli($blocageEdCli) {
        $this->blocageEdCli = $blocageEdCli;
        return $this;
    }

    /**
     * Set the budget type saisie.
     *
     * @param int $budgetTypeSaisie The budget type saisie.
     * @return Constantes Returns this constantes.
     */
    public function setBudgetTypeSaisie($budgetTypeSaisie) {
        $this->budgetTypeSaisie = $budgetTypeSaisie;
        return $this;
    }

    /**
     * Set the champs critere1.
     *
     * @param string $champsCritere1 The champs critere1.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere1($champsCritere1) {
        $this->champsCritere1 = $champsCritere1;
        return $this;
    }

    /**
     * Set the champs critere10.
     *
     * @param string $champsCritere10 The champs critere10.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere10($champsCritere10) {
        $this->champsCritere10 = $champsCritere10;
        return $this;
    }

    /**
     * Set the champs critere2.
     *
     * @param string $champsCritere2 The champs critere2.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere2($champsCritere2) {
        $this->champsCritere2 = $champsCritere2;
        return $this;
    }

    /**
     * Set the champs critere3.
     *
     * @param string $champsCritere3 The champs critere3.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere3($champsCritere3) {
        $this->champsCritere3 = $champsCritere3;
        return $this;
    }

    /**
     * Set the champs critere4.
     *
     * @param string $champsCritere4 The champs critere4.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere4($champsCritere4) {
        $this->champsCritere4 = $champsCritere4;
        return $this;
    }

    /**
     * Set the champs critere5.
     *
     * @param string $champsCritere5 The champs critere5.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere5($champsCritere5) {
        $this->champsCritere5 = $champsCritere5;
        return $this;
    }

    /**
     * Set the champs critere6.
     *
     * @param string $champsCritere6 The champs critere6.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere6($champsCritere6) {
        $this->champsCritere6 = $champsCritere6;
        return $this;
    }

    /**
     * Set the champs critere7.
     *
     * @param string $champsCritere7 The champs critere7.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere7($champsCritere7) {
        $this->champsCritere7 = $champsCritere7;
        return $this;
    }

    /**
     * Set the champs critere8.
     *
     * @param string $champsCritere8 The champs critere8.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere8($champsCritere8) {
        $this->champsCritere8 = $champsCritere8;
        return $this;
    }

    /**
     * Set the champs critere9.
     *
     * @param string $champsCritere9 The champs critere9.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritere9($champsCritere9) {
        $this->champsCritere9 = $champsCritere9;
        return $this;
    }

    /**
     * Set the champs critere affaire1.
     *
     * @param string $champsCritereAffaire1 The champs critere affaire1.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire1($champsCritereAffaire1) {
        $this->champsCritereAffaire1 = $champsCritereAffaire1;
        return $this;
    }

    /**
     * Set the champs critere affaire10.
     *
     * @param string $champsCritereAffaire10 The champs critere affaire10.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire10($champsCritereAffaire10) {
        $this->champsCritereAffaire10 = $champsCritereAffaire10;
        return $this;
    }

    /**
     * Set the champs critere affaire2.
     *
     * @param string $champsCritereAffaire2 The champs critere affaire2.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire2($champsCritereAffaire2) {
        $this->champsCritereAffaire2 = $champsCritereAffaire2;
        return $this;
    }

    /**
     * Set the champs critere affaire3.
     *
     * @param string $champsCritereAffaire3 The champs critere affaire3.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire3($champsCritereAffaire3) {
        $this->champsCritereAffaire3 = $champsCritereAffaire3;
        return $this;
    }

    /**
     * Set the champs critere affaire4.
     *
     * @param string $champsCritereAffaire4 The champs critere affaire4.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire4($champsCritereAffaire4) {
        $this->champsCritereAffaire4 = $champsCritereAffaire4;
        return $this;
    }

    /**
     * Set the champs critere affaire5.
     *
     * @param string $champsCritereAffaire5 The champs critere affaire5.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire5($champsCritereAffaire5) {
        $this->champsCritereAffaire5 = $champsCritereAffaire5;
        return $this;
    }

    /**
     * Set the champs critere affaire6.
     *
     * @param string $champsCritereAffaire6 The champs critere affaire6.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire6($champsCritereAffaire6) {
        $this->champsCritereAffaire6 = $champsCritereAffaire6;
        return $this;
    }

    /**
     * Set the champs critere affaire7.
     *
     * @param string $champsCritereAffaire7 The champs critere affaire7.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire7($champsCritereAffaire7) {
        $this->champsCritereAffaire7 = $champsCritereAffaire7;
        return $this;
    }

    /**
     * Set the champs critere affaire8.
     *
     * @param string $champsCritereAffaire8 The champs critere affaire8.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire8($champsCritereAffaire8) {
        $this->champsCritereAffaire8 = $champsCritereAffaire8;
        return $this;
    }

    /**
     * Set the champs critere affaire9.
     *
     * @param string $champsCritereAffaire9 The champs critere affaire9.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereAffaire9($champsCritereAffaire9) {
        $this->champsCritereAffaire9 = $champsCritereAffaire9;
        return $this;
    }

    /**
     * Set the champs critere article1.
     *
     * @param string $champsCritereArticle1 The champs critere article1.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle1($champsCritereArticle1) {
        $this->champsCritereArticle1 = $champsCritereArticle1;
        return $this;
    }

    /**
     * Set the champs critere article10.
     *
     * @param string $champsCritereArticle10 The champs critere article10.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle10($champsCritereArticle10) {
        $this->champsCritereArticle10 = $champsCritereArticle10;
        return $this;
    }

    /**
     * Set the champs critere article2.
     *
     * @param string $champsCritereArticle2 The champs critere article2.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle2($champsCritereArticle2) {
        $this->champsCritereArticle2 = $champsCritereArticle2;
        return $this;
    }

    /**
     * Set the champs critere article3.
     *
     * @param string $champsCritereArticle3 The champs critere article3.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle3($champsCritereArticle3) {
        $this->champsCritereArticle3 = $champsCritereArticle3;
        return $this;
    }

    /**
     * Set the champs critere article4.
     *
     * @param string $champsCritereArticle4 The champs critere article4.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle4($champsCritereArticle4) {
        $this->champsCritereArticle4 = $champsCritereArticle4;
        return $this;
    }

    /**
     * Set the champs critere article5.
     *
     * @param string $champsCritereArticle5 The champs critere article5.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle5($champsCritereArticle5) {
        $this->champsCritereArticle5 = $champsCritereArticle5;
        return $this;
    }

    /**
     * Set the champs critere article6.
     *
     * @param string $champsCritereArticle6 The champs critere article6.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle6($champsCritereArticle6) {
        $this->champsCritereArticle6 = $champsCritereArticle6;
        return $this;
    }

    /**
     * Set the champs critere article7.
     *
     * @param string $champsCritereArticle7 The champs critere article7.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle7($champsCritereArticle7) {
        $this->champsCritereArticle7 = $champsCritereArticle7;
        return $this;
    }

    /**
     * Set the champs critere article8.
     *
     * @param string $champsCritereArticle8 The champs critere article8.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle8($champsCritereArticle8) {
        $this->champsCritereArticle8 = $champsCritereArticle8;
        return $this;
    }

    /**
     * Set the champs critere article9.
     *
     * @param string $champsCritereArticle9 The champs critere article9.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereArticle9($champsCritereArticle9) {
        $this->champsCritereArticle9 = $champsCritereArticle9;
        return $this;
    }

    /**
     * Set the champs critere ent piece1.
     *
     * @param string $champsCritereEntPiece1 The champs critere ent piece1.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece1($champsCritereEntPiece1) {
        $this->champsCritereEntPiece1 = $champsCritereEntPiece1;
        return $this;
    }

    /**
     * Set the champs critere ent piece10.
     *
     * @param string $champsCritereEntPiece10 The champs critere ent piece10.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece10($champsCritereEntPiece10) {
        $this->champsCritereEntPiece10 = $champsCritereEntPiece10;
        return $this;
    }

    /**
     * Set the champs critere ent piece2.
     *
     * @param string $champsCritereEntPiece2 The champs critere ent piece2.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece2($champsCritereEntPiece2) {
        $this->champsCritereEntPiece2 = $champsCritereEntPiece2;
        return $this;
    }

    /**
     * Set the champs critere ent piece3.
     *
     * @param string $champsCritereEntPiece3 The champs critere ent piece3.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece3($champsCritereEntPiece3) {
        $this->champsCritereEntPiece3 = $champsCritereEntPiece3;
        return $this;
    }

    /**
     * Set the champs critere ent piece4.
     *
     * @param string $champsCritereEntPiece4 The champs critere ent piece4.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece4($champsCritereEntPiece4) {
        $this->champsCritereEntPiece4 = $champsCritereEntPiece4;
        return $this;
    }

    /**
     * Set the champs critere ent piece5.
     *
     * @param string $champsCritereEntPiece5 The champs critere ent piece5.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece5($champsCritereEntPiece5) {
        $this->champsCritereEntPiece5 = $champsCritereEntPiece5;
        return $this;
    }

    /**
     * Set the champs critere ent piece6.
     *
     * @param string $champsCritereEntPiece6 The champs critere ent piece6.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece6($champsCritereEntPiece6) {
        $this->champsCritereEntPiece6 = $champsCritereEntPiece6;
        return $this;
    }

    /**
     * Set the champs critere ent piece7.
     *
     * @param string $champsCritereEntPiece7 The champs critere ent piece7.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece7($champsCritereEntPiece7) {
        $this->champsCritereEntPiece7 = $champsCritereEntPiece7;
        return $this;
    }

    /**
     * Set the champs critere ent piece8.
     *
     * @param string $champsCritereEntPiece8 The champs critere ent piece8.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece8($champsCritereEntPiece8) {
        $this->champsCritereEntPiece8 = $champsCritereEntPiece8;
        return $this;
    }

    /**
     * Set the champs critere ent piece9.
     *
     * @param string $champsCritereEntPiece9 The champs critere ent piece9.
     * @return Constantes Returns this constantes.
     */
    public function setChampsCritereEntPiece9($champsCritereEntPiece9) {
        $this->champsCritereEntPiece9 = $champsCritereEntPiece9;
        return $this;
    }

    /**
     * Set the chrono activation.
     *
     * @param boolean $chronoActivation The chrono activation.
     * @return Constantes Returns this constantes.
     */
    public function setChronoActivation($chronoActivation) {
        $this->chronoActivation = $chronoActivation;
        return $this;
    }

    /**
     * Set the chrono prefixe.
     *
     * @param string $chronoPrefixe The chrono prefixe.
     * @return Constantes Returns this constantes.
     */
    public function setChronoPrefixe($chronoPrefixe) {
        $this->chronoPrefixe = $chronoPrefixe;
        return $this;
    }

    /**
     * Set the chrono prochain num.
     *
     * @param int $chronoProchainNum The chrono prochain num.
     * @return Constantes Returns this constantes.
     */
    public function setChronoProchainNum($chronoProchainNum) {
        $this->chronoProchainNum = $chronoProchainNum;
        return $this;
    }

    /**
     * Set the cle acces cn paie.
     *
     * @param string $cleAccesCnPaie The cle acces cn paie.
     * @return Constantes Returns this constantes.
     */
    public function setCleAccesCnPaie($cleAccesCnPaie) {
        $this->cleAccesCnPaie = $cleAccesCnPaie;
        return $this;
    }

    /**
     * Set the cle acces fiche client.
     *
     * @param string $cleAccesFicheClient The cle acces fiche client.
     * @return Constantes Returns this constantes.
     */
    public function setCleAccesFicheClient($cleAccesFicheClient) {
        $this->cleAccesFicheClient = $cleAccesFicheClient;
        return $this;
    }

    /**
     * Set the cle acces menus.
     *
     * @param string $cleAccesMenus The cle acces menus.
     * @return Constantes Returns this constantes.
     */
    public function setCleAccesMenus($cleAccesMenus) {
        $this->cleAccesMenus = $cleAccesMenus;
        return $this;
    }

    /**
     * Set the cle acces param.
     *
     * @param string $cleAccesParam The cle acces param.
     * @return Constantes Returns this constantes.
     */
    public function setCleAccesParam($cleAccesParam) {
        $this->cleAccesParam = $cleAccesParam;
        return $this;
    }

    /**
     * Set the cle des etr communs.
     *
     * @param string $cleDesEtrCommuns The cle des etr communs.
     * @return Constantes Returns this constantes.
     */
    public function setCleDesEtrCommuns($cleDesEtrCommuns) {
        $this->cleDesEtrCommuns = $cleDesEtrCommuns;
        return $this;
    }

    /**
     * Set the cle jrn lib communs.
     *
     * @param string $cleJrnLibCommuns The cle jrn lib communs.
     * @return Constantes Returns this constantes.
     */
    public function setCleJrnLibCommuns($cleJrnLibCommuns) {
        $this->cleJrnLibCommuns = $cleJrnLibCommuns;
        return $this;
    }

    /**
     * Set the code emetteur.
     *
     * @param string $codeEmetteur The code emetteur.
     * @return Constantes Returns this constantes.
     */
    public function setCodeEmetteur($codeEmetteur) {
        $this->codeEmetteur = $codeEmetteur;
        return $this;
    }

    /**
     * Set the code expert defaut.
     *
     * @param string $codeExpertDefaut The code expert defaut.
     * @return Constantes Returns this constantes.
     */
    public function setCodeExpertDefaut($codeExpertDefaut) {
        $this->codeExpertDefaut = $codeExpertDefaut;
        return $this;
    }

    /**
     * Set the code regroupement pre fact.
     *
     * @param string $codeRegroupementPreFact The code regroupement pre fact.
     * @return Constantes Returns this constantes.
     */
    public function setCodeRegroupementPreFact($codeRegroupementPreFact) {
        $this->codeRegroupementPreFact = $codeRegroupementPreFact;
        return $this;
    }

    /**
     * Set the conversion pwd.
     *
     * @param boolean $conversionPwd The conversion pwd.
     * @return Constantes Returns this constantes.
     */
    public function setConversionPwd($conversionPwd) {
        $this->conversionPwd = $conversionPwd;
        return $this;
    }

    /**
     * Set the cpte collectif cli.
     *
     * @param string $cpteCollectifCli The cpte collectif cli.
     * @return Constantes Returns this constantes.
     */
    public function setCpteCollectifCli($cpteCollectifCli) {
        $this->cpteCollectifCli = $cpteCollectifCli;
        return $this;
    }

    /**
     * Set the cpte collectif frn.
     *
     * @param string $cpteCollectifFrn The cpte collectif frn.
     * @return Constantes Returns this constantes.
     */
    public function setCpteCollectifFrn($cpteCollectifFrn) {
        $this->cpteCollectifFrn = $cpteCollectifFrn;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param boolean $creationAffaire The creation affaire.
     * @return Constantes Returns this constantes.
     */
    public function setCreationAffaire($creationAffaire) {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the creation article.
     *
     * @param boolean $creationArticle The creation article.
     * @return Constantes Returns this constantes.
     */
    public function setCreationArticle($creationArticle) {
        $this->creationArticle = $creationArticle;
        return $this;
    }

    /**
     * Set the creation bons travaux.
     *
     * @param boolean $creationBonsTravaux The creation bons travaux.
     * @return Constantes Returns this constantes.
     */
    public function setCreationBonsTravaux($creationBonsTravaux) {
        $this->creationBonsTravaux = $creationBonsTravaux;
        return $this;
    }

    /**
     * Set the creation chantier.
     *
     * @param boolean $creationChantier The creation chantier.
     * @return Constantes Returns this constantes.
     */
    public function setCreationChantier($creationChantier) {
        $this->creationChantier = $creationChantier;
        return $this;
    }

    /**
     * Set the creation client.
     *
     * @param boolean $creationClient The creation client.
     * @return Constantes Returns this constantes.
     */
    public function setCreationClient($creationClient) {
        $this->creationClient = $creationClient;
        return $this;
    }

    /**
     * Set the creation commission.
     *
     * @param boolean $creationCommission The creation commission.
     * @return Constantes Returns this constantes.
     */
    public function setCreationCommission($creationCommission) {
        $this->creationCommission = $creationCommission;
        return $this;
    }

    /**
     * Set the creation dossier cpta.
     *
     * @param boolean $creationDossierCpta The creation dossier cpta.
     * @return Constantes Returns this constantes.
     */
    public function setCreationDossierCpta($creationDossierCpta) {
        $this->creationDossierCpta = $creationDossierCpta;
        return $this;
    }

    /**
     * Set the creation dossier fact.
     *
     * @param boolean $creationDossierFact The creation dossier fact.
     * @return Constantes Returns this constantes.
     */
    public function setCreationDossierFact($creationDossierFact) {
        $this->creationDossierFact = $creationDossierFact;
        return $this;
    }

    /**
     * Set the creation dossier paie.
     *
     * @param boolean $creationDossierPaie The creation dossier paie.
     * @return Constantes Returns this constantes.
     */
    public function setCreationDossierPaie($creationDossierPaie) {
        $this->creationDossierPaie = $creationDossierPaie;
        return $this;
    }

    /**
     * Set the creation fournisseur.
     *
     * @param boolean $creationFournisseur The creation fournisseur.
     * @return Constantes Returns this constantes.
     */
    public function setCreationFournisseur($creationFournisseur) {
        $this->creationFournisseur = $creationFournisseur;
        return $this;
    }

    /**
     * Set the creation plan facturation.
     *
     * @param boolean $creationPlanFacturation The creation plan facturation.
     * @return Constantes Returns this constantes.
     */
    public function setCreationPlanFacturation($creationPlanFacturation) {
        $this->creationPlanFacturation = $creationPlanFacturation;
        return $this;
    }

    /**
     * Set the creation plan tache.
     *
     * @param boolean $creationPlanTache The creation plan tache.
     * @return Constantes Returns this constantes.
     */
    public function setCreationPlanTache($creationPlanTache) {
        $this->creationPlanTache = $creationPlanTache;
        return $this;
    }

    /**
     * Set the creation prospect.
     *
     * @param boolean $creationProspect The creation prospect.
     * @return Constantes Returns this constantes.
     */
    public function setCreationProspect($creationProspect) {
        $this->creationProspect = $creationProspect;
        return $this;
    }

    /**
     * Set the creation tache.
     *
     * @param boolean $creationTache The creation tache.
     * @return Constantes Returns this constantes.
     */
    public function setCreationTache($creationTache) {
        $this->creationTache = $creationTache;
        return $this;
    }

    /**
     * Set the creation tarif.
     *
     * @param boolean $creationTarif The creation tarif.
     * @return Constantes Returns this constantes.
     */
    public function setCreationTarif($creationTarif) {
        $this->creationTarif = $creationTarif;
        return $this;
    }

    /**
     * Set the date cloture.
     *
     * @param DateTime $dateCloture The date cloture.
     * @return Constantes Returns this constantes.
     */
    public function setDateCloture(DateTime $dateCloture = null) {
        $this->dateCloture = $dateCloture;
        return $this;
    }

    /**
     * Set the dt dern modif conf zone.
     *
     * @param DateTime $dtDernModifConfZone The dt dern modif conf zone.
     * @return Constantes Returns this constantes.
     */
    public function setDtDernModifConfZone(DateTime $dtDernModifConfZone = null) {
        $this->dtDernModifConfZone = $dtDernModifConfZone;
        return $this;
    }

    /**
     * Set the ech aff en mt.
     *
     * @param boolean $echAffEnMt The ech aff en mt.
     * @return Constantes Returns this constantes.
     */
    public function setEchAffEnMt($echAffEnMt) {
        $this->echAffEnMt = $echAffEnMt;
        return $this;
    }

    /**
     * Set the fonctionnement c g a.
     *
     * @param boolean $fonctionnementCGA The fonctionnement c g a.
     * @return Constantes Returns this constantes.
     */
    public function setFonctionnementCGA($fonctionnementCGA) {
        $this->fonctionnementCGA = $fonctionnementCGA;
        return $this;
    }

    /**
     * Set the heures trav1.
     *
     * @param float $heuresTrav1 The heures trav1.
     * @return Constantes Returns this constantes.
     */
    public function setHeuresTrav1($heuresTrav1) {
        $this->heuresTrav1 = $heuresTrav1;
        return $this;
    }

    /**
     * Set the heures trav2.
     *
     * @param float $heuresTrav2 The heures trav2.
     * @return Constantes Returns this constantes.
     */
    public function setHeuresTrav2($heuresTrav2) {
        $this->heuresTrav2 = $heuresTrav2;
        return $this;
    }

    /**
     * Set the heures trav3.
     *
     * @param float $heuresTrav3 The heures trav3.
     * @return Constantes Returns this constantes.
     */
    public function setHeuresTrav3($heuresTrav3) {
        $this->heuresTrav3 = $heuresTrav3;
        return $this;
    }

    /**
     * Set the heures trav4.
     *
     * @param float $heuresTrav4 The heures trav4.
     * @return Constantes Returns this constantes.
     */
    public function setHeuresTrav4($heuresTrav4) {
        $this->heuresTrav4 = $heuresTrav4;
        return $this;
    }

    /**
     * Set the increm auto.
     *
     * @param boolean $incremAuto The increm auto.
     * @return Constantes Returns this constantes.
     */
    public function setIncremAuto($incremAuto) {
        $this->incremAuto = $incremAuto;
        return $this;
    }

    /**
     * Set the increm auto aff.
     *
     * @param boolean $incremAutoAff The increm auto aff.
     * @return Constantes Returns this constantes.
     */
    public function setIncremAutoAff($incremAutoAff) {
        $this->incremAutoAff = $incremAutoAff;
        return $this;
    }

    /**
     * Set the increm auto frn.
     *
     * @param boolean $incremAutoFrn The increm auto frn.
     * @return Constantes Returns this constantes.
     */
    public function setIncremAutoFrn($incremAutoFrn) {
        $this->incremAutoFrn = $incremAutoFrn;
        return $this;
    }

    /**
     * Set the increm cpte cli auto.
     *
     * @param boolean $incremCpteCliAuto The increm cpte cli auto.
     * @return Constantes Returns this constantes.
     */
    public function setIncremCpteCliAuto($incremCpteCliAuto) {
        $this->incremCpteCliAuto = $incremCpteCliAuto;
        return $this;
    }

    /**
     * Set the increm cpte frn auto.
     *
     * @param boolean $incremCpteFrnAuto The increm cpte frn auto.
     * @return Constantes Returns this constantes.
     */
    public function setIncremCpteFrnAuto($incremCpteFrnAuto) {
        $this->incremCpteFrnAuto = $incremCpteFrnAuto;
        return $this;
    }

    /**
     * Set the increment cpte cli.
     *
     * @param int $incrementCpteCli The increment cpte cli.
     * @return Constantes Returns this constantes.
     */
    public function setIncrementCpteCli($incrementCpteCli) {
        $this->incrementCpteCli = $incrementCpteCli;
        return $this;
    }

    /**
     * Set the increment cpte frn.
     *
     * @param int $incrementCpteFrn The increment cpte frn.
     * @return Constantes Returns this constantes.
     */
    public function setIncrementCpteFrn($incrementCpteFrn) {
        $this->incrementCpteFrn = $incrementCpteFrn;
        return $this;
    }

    /**
     * Set the liaison bu cpta.
     *
     * @param boolean $liaisonBuCpta The liaison bu cpta.
     * @return Constantes Returns this constantes.
     */
    public function setLiaisonBuCpta($liaisonBuCpta) {
        $this->liaisonBuCpta = $liaisonBuCpta;
        return $this;
    }

    /**
     * Set the lib affectation1.
     *
     * @param string $libAffectation1 The lib affectation1.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation1($libAffectation1) {
        $this->libAffectation1 = $libAffectation1;
        return $this;
    }

    /**
     * Set the lib affectation2.
     *
     * @param string $libAffectation2 The lib affectation2.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation2($libAffectation2) {
        $this->libAffectation2 = $libAffectation2;
        return $this;
    }

    /**
     * Set the lib affectation3.
     *
     * @param string $libAffectation3 The lib affectation3.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation3($libAffectation3) {
        $this->libAffectation3 = $libAffectation3;
        return $this;
    }

    /**
     * Set the lib affectation4.
     *
     * @param string $libAffectation4 The lib affectation4.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation4($libAffectation4) {
        $this->libAffectation4 = $libAffectation4;
        return $this;
    }

    /**
     * Set the lib affectation5.
     *
     * @param string $libAffectation5 The lib affectation5.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation5($libAffectation5) {
        $this->libAffectation5 = $libAffectation5;
        return $this;
    }

    /**
     * Set the lib affectation6.
     *
     * @param string $libAffectation6 The lib affectation6.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation6($libAffectation6) {
        $this->libAffectation6 = $libAffectation6;
        return $this;
    }

    /**
     * Set the lib affectation7.
     *
     * @param string $libAffectation7 The lib affectation7.
     * @return Constantes Returns this constantes.
     */
    public function setLibAffectation7($libAffectation7) {
        $this->libAffectation7 = $libAffectation7;
        return $this;
    }

    /**
     * Set the lib critere1.
     *
     * @param string $libCritere1 The lib critere1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere1($libCritere1) {
        $this->libCritere1 = $libCritere1;
        return $this;
    }

    /**
     * Set the lib critere10.
     *
     * @param string $libCritere10 The lib critere10.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere10($libCritere10) {
        $this->libCritere10 = $libCritere10;
        return $this;
    }

    /**
     * Set the lib critere2.
     *
     * @param string $libCritere2 The lib critere2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere2($libCritere2) {
        $this->libCritere2 = $libCritere2;
        return $this;
    }

    /**
     * Set the lib critere3.
     *
     * @param string $libCritere3 The lib critere3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere3($libCritere3) {
        $this->libCritere3 = $libCritere3;
        return $this;
    }

    /**
     * Set the lib critere4.
     *
     * @param string $libCritere4 The lib critere4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere4($libCritere4) {
        $this->libCritere4 = $libCritere4;
        return $this;
    }

    /**
     * Set the lib critere5.
     *
     * @param string $libCritere5 The lib critere5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere5($libCritere5) {
        $this->libCritere5 = $libCritere5;
        return $this;
    }

    /**
     * Set the lib critere6.
     *
     * @param string $libCritere6 The lib critere6.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere6($libCritere6) {
        $this->libCritere6 = $libCritere6;
        return $this;
    }

    /**
     * Set the lib critere7.
     *
     * @param string $libCritere7 The lib critere7.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere7($libCritere7) {
        $this->libCritere7 = $libCritere7;
        return $this;
    }

    /**
     * Set the lib critere8.
     *
     * @param string $libCritere8 The lib critere8.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere8($libCritere8) {
        $this->libCritere8 = $libCritere8;
        return $this;
    }

    /**
     * Set the lib critere9.
     *
     * @param string $libCritere9 The lib critere9.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritere9($libCritere9) {
        $this->libCritere9 = $libCritere9;
        return $this;
    }

    /**
     * Set the lib critere affaire1.
     *
     * @param string $libCritereAffaire1 The lib critere affaire1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire1($libCritereAffaire1) {
        $this->libCritereAffaire1 = $libCritereAffaire1;
        return $this;
    }

    /**
     * Set the lib critere affaire10.
     *
     * @param string $libCritereAffaire10 The lib critere affaire10.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire10($libCritereAffaire10) {
        $this->libCritereAffaire10 = $libCritereAffaire10;
        return $this;
    }

    /**
     * Set the lib critere affaire2.
     *
     * @param string $libCritereAffaire2 The lib critere affaire2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire2($libCritereAffaire2) {
        $this->libCritereAffaire2 = $libCritereAffaire2;
        return $this;
    }

    /**
     * Set the lib critere affaire3.
     *
     * @param string $libCritereAffaire3 The lib critere affaire3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire3($libCritereAffaire3) {
        $this->libCritereAffaire3 = $libCritereAffaire3;
        return $this;
    }

    /**
     * Set the lib critere affaire4.
     *
     * @param string $libCritereAffaire4 The lib critere affaire4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire4($libCritereAffaire4) {
        $this->libCritereAffaire4 = $libCritereAffaire4;
        return $this;
    }

    /**
     * Set the lib critere affaire5.
     *
     * @param string $libCritereAffaire5 The lib critere affaire5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire5($libCritereAffaire5) {
        $this->libCritereAffaire5 = $libCritereAffaire5;
        return $this;
    }

    /**
     * Set the lib critere affaire6.
     *
     * @param string $libCritereAffaire6 The lib critere affaire6.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire6($libCritereAffaire6) {
        $this->libCritereAffaire6 = $libCritereAffaire6;
        return $this;
    }

    /**
     * Set the lib critere affaire7.
     *
     * @param string $libCritereAffaire7 The lib critere affaire7.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire7($libCritereAffaire7) {
        $this->libCritereAffaire7 = $libCritereAffaire7;
        return $this;
    }

    /**
     * Set the lib critere affaire8.
     *
     * @param string $libCritereAffaire8 The lib critere affaire8.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire8($libCritereAffaire8) {
        $this->libCritereAffaire8 = $libCritereAffaire8;
        return $this;
    }

    /**
     * Set the lib critere affaire9.
     *
     * @param string $libCritereAffaire9 The lib critere affaire9.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereAffaire9($libCritereAffaire9) {
        $this->libCritereAffaire9 = $libCritereAffaire9;
        return $this;
    }

    /**
     * Set the lib critere article1.
     *
     * @param string $libCritereArticle1 The lib critere article1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle1($libCritereArticle1) {
        $this->libCritereArticle1 = $libCritereArticle1;
        return $this;
    }

    /**
     * Set the lib critere article10.
     *
     * @param string $libCritereArticle10 The lib critere article10.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle10($libCritereArticle10) {
        $this->libCritereArticle10 = $libCritereArticle10;
        return $this;
    }

    /**
     * Set the lib critere article2.
     *
     * @param string $libCritereArticle2 The lib critere article2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle2($libCritereArticle2) {
        $this->libCritereArticle2 = $libCritereArticle2;
        return $this;
    }

    /**
     * Set the lib critere article3.
     *
     * @param string $libCritereArticle3 The lib critere article3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle3($libCritereArticle3) {
        $this->libCritereArticle3 = $libCritereArticle3;
        return $this;
    }

    /**
     * Set the lib critere article4.
     *
     * @param string $libCritereArticle4 The lib critere article4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle4($libCritereArticle4) {
        $this->libCritereArticle4 = $libCritereArticle4;
        return $this;
    }

    /**
     * Set the lib critere article5.
     *
     * @param string $libCritereArticle5 The lib critere article5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle5($libCritereArticle5) {
        $this->libCritereArticle5 = $libCritereArticle5;
        return $this;
    }

    /**
     * Set the lib critere article6.
     *
     * @param string $libCritereArticle6 The lib critere article6.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle6($libCritereArticle6) {
        $this->libCritereArticle6 = $libCritereArticle6;
        return $this;
    }

    /**
     * Set the lib critere article7.
     *
     * @param string $libCritereArticle7 The lib critere article7.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle7($libCritereArticle7) {
        $this->libCritereArticle7 = $libCritereArticle7;
        return $this;
    }

    /**
     * Set the lib critere article8.
     *
     * @param string $libCritereArticle8 The lib critere article8.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle8($libCritereArticle8) {
        $this->libCritereArticle8 = $libCritereArticle8;
        return $this;
    }

    /**
     * Set the lib critere article9.
     *
     * @param string $libCritereArticle9 The lib critere article9.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereArticle9($libCritereArticle9) {
        $this->libCritereArticle9 = $libCritereArticle9;
        return $this;
    }

    /**
     * Set the lib critere ent piece1.
     *
     * @param string $libCritereEntPiece1 The lib critere ent piece1.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece1($libCritereEntPiece1) {
        $this->libCritereEntPiece1 = $libCritereEntPiece1;
        return $this;
    }

    /**
     * Set the lib critere ent piece10.
     *
     * @param string $libCritereEntPiece10 The lib critere ent piece10.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece10($libCritereEntPiece10) {
        $this->libCritereEntPiece10 = $libCritereEntPiece10;
        return $this;
    }

    /**
     * Set the lib critere ent piece2.
     *
     * @param string $libCritereEntPiece2 The lib critere ent piece2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece2($libCritereEntPiece2) {
        $this->libCritereEntPiece2 = $libCritereEntPiece2;
        return $this;
    }

    /**
     * Set the lib critere ent piece3.
     *
     * @param string $libCritereEntPiece3 The lib critere ent piece3.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece3($libCritereEntPiece3) {
        $this->libCritereEntPiece3 = $libCritereEntPiece3;
        return $this;
    }

    /**
     * Set the lib critere ent piece4.
     *
     * @param string $libCritereEntPiece4 The lib critere ent piece4.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece4($libCritereEntPiece4) {
        $this->libCritereEntPiece4 = $libCritereEntPiece4;
        return $this;
    }

    /**
     * Set the lib critere ent piece5.
     *
     * @param string $libCritereEntPiece5 The lib critere ent piece5.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece5($libCritereEntPiece5) {
        $this->libCritereEntPiece5 = $libCritereEntPiece5;
        return $this;
    }

    /**
     * Set the lib critere ent piece6.
     *
     * @param string $libCritereEntPiece6 The lib critere ent piece6.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece6($libCritereEntPiece6) {
        $this->libCritereEntPiece6 = $libCritereEntPiece6;
        return $this;
    }

    /**
     * Set the lib critere ent piece7.
     *
     * @param string $libCritereEntPiece7 The lib critere ent piece7.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece7($libCritereEntPiece7) {
        $this->libCritereEntPiece7 = $libCritereEntPiece7;
        return $this;
    }

    /**
     * Set the lib critere ent piece8.
     *
     * @param string $libCritereEntPiece8 The lib critere ent piece8.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece8($libCritereEntPiece8) {
        $this->libCritereEntPiece8 = $libCritereEntPiece8;
        return $this;
    }

    /**
     * Set the lib critere ent piece9.
     *
     * @param string $libCritereEntPiece9 The lib critere ent piece9.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereEntPiece9($libCritereEntPiece9) {
        $this->libCritereEntPiece9 = $libCritereEntPiece9;
        return $this;
    }

    /**
     * Set the lib critere interloc.
     *
     * @param string $libCritereInterloc The lib critere interloc.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereInterloc($libCritereInterloc) {
        $this->libCritereInterloc = $libCritereInterloc;
        return $this;
    }

    /**
     * Set the lib critere interloc2.
     *
     * @param string $libCritereInterloc2 The lib critere interloc2.
     * @return Constantes Returns this constantes.
     */
    public function setLibCritereInterloc2($libCritereInterloc2) {
        $this->libCritereInterloc2 = $libCritereInterloc2;
        return $this;
    }

    /**
     * Set the major heures trav1.
     *
     * @param float $majorHeuresTrav1 The major heures trav1.
     * @return Constantes Returns this constantes.
     */
    public function setMajorHeuresTrav1($majorHeuresTrav1) {
        $this->majorHeuresTrav1 = $majorHeuresTrav1;
        return $this;
    }

    /**
     * Set the major heures trav2.
     *
     * @param float $majorHeuresTrav2 The major heures trav2.
     * @return Constantes Returns this constantes.
     */
    public function setMajorHeuresTrav2($majorHeuresTrav2) {
        $this->majorHeuresTrav2 = $majorHeuresTrav2;
        return $this;
    }

    /**
     * Set the major heures trav3.
     *
     * @param float $majorHeuresTrav3 The major heures trav3.
     * @return Constantes Returns this constantes.
     */
    public function setMajorHeuresTrav3($majorHeuresTrav3) {
        $this->majorHeuresTrav3 = $majorHeuresTrav3;
        return $this;
    }

    /**
     * Set the major heures trav4.
     *
     * @param float $majorHeuresTrav4 The major heures trav4.
     * @return Constantes Returns this constantes.
     */
    public function setMajorHeuresTrav4($majorHeuresTrav4) {
        $this->majorHeuresTrav4 = $majorHeuresTrav4;
        return $this;
    }

    /**
     * Set the mnt ticket resto a.
     *
     * @param float $mntTicketRestoA The mnt ticket resto a.
     * @return Constantes Returns this constantes.
     */
    public function setMntTicketRestoA($mntTicketRestoA) {
        $this->mntTicketRestoA = $mntTicketRestoA;
        return $this;
    }

    /**
     * Set the mnt ticket resto b.
     *
     * @param float $mntTicketRestoB The mnt ticket resto b.
     * @return Constantes Returns this constantes.
     */
    public function setMntTicketRestoB($mntTicketRestoB) {
        $this->mntTicketRestoB = $mntTicketRestoB;
        return $this;
    }

    /**
     * Set the mnt ticket resto c.
     *
     * @param float $mntTicketRestoC The mnt ticket resto c.
     * @return Constantes Returns this constantes.
     */
    public function setMntTicketRestoC($mntTicketRestoC) {
        $this->mntTicketRestoC = $mntTicketRestoC;
        return $this;
    }

    /**
     * Set the mnt ticket resto d.
     *
     * @param float $mntTicketRestoD The mnt ticket resto d.
     * @return Constantes Returns this constantes.
     */
    public function setMntTicketRestoD($mntTicketRestoD) {
        $this->mntTicketRestoD = $mntTicketRestoD;
        return $this;
    }

    /**
     * Set the mnt ticket resto e.
     *
     * @param float $mntTicketRestoE The mnt ticket resto e.
     * @return Constantes Returns this constantes.
     */
    public function setMntTicketRestoE($mntTicketRestoE) {
        $this->mntTicketRestoE = $mntTicketRestoE;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string $modifAffaire The modif affaire.
     * @return Constantes Returns this constantes.
     */
    public function setModifAffaire($modifAffaire) {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif article.
     *
     * @param string $modifArticle The modif article.
     * @return Constantes Returns this constantes.
     */
    public function setModifArticle($modifArticle) {
        $this->modifArticle = $modifArticle;
        return $this;
    }

    /**
     * Set the modif bons travaux.
     *
     * @param string $modifBonsTravaux The modif bons travaux.
     * @return Constantes Returns this constantes.
     */
    public function setModifBonsTravaux($modifBonsTravaux) {
        $this->modifBonsTravaux = $modifBonsTravaux;
        return $this;
    }

    /**
     * Set the modif chantier.
     *
     * @param string $modifChantier The modif chantier.
     * @return Constantes Returns this constantes.
     */
    public function setModifChantier($modifChantier) {
        $this->modifChantier = $modifChantier;
        return $this;
    }

    /**
     * Set the modif client.
     *
     * @param string $modifClient The modif client.
     * @return Constantes Returns this constantes.
     */
    public function setModifClient($modifClient) {
        $this->modifClient = $modifClient;
        return $this;
    }

    /**
     * Set the modif commission.
     *
     * @param string $modifCommission The modif commission.
     * @return Constantes Returns this constantes.
     */
    public function setModifCommission($modifCommission) {
        $this->modifCommission = $modifCommission;
        return $this;
    }

    /**
     * Set the modif dossier fact.
     *
     * @param string $modifDossierFact The modif dossier fact.
     * @return Constantes Returns this constantes.
     */
    public function setModifDossierFact($modifDossierFact) {
        $this->modifDossierFact = $modifDossierFact;
        return $this;
    }

    /**
     * Set the modif fournisseur.
     *
     * @param string $modifFournisseur The modif fournisseur.
     * @return Constantes Returns this constantes.
     */
    public function setModifFournisseur($modifFournisseur) {
        $this->modifFournisseur = $modifFournisseur;
        return $this;
    }

    /**
     * Set the modif plan facturation.
     *
     * @param string $modifPlanFacturation The modif plan facturation.
     * @return Constantes Returns this constantes.
     */
    public function setModifPlanFacturation($modifPlanFacturation) {
        $this->modifPlanFacturation = $modifPlanFacturation;
        return $this;
    }

    /**
     * Set the modif plan tache.
     *
     * @param string $modifPlanTache The modif plan tache.
     * @return Constantes Returns this constantes.
     */
    public function setModifPlanTache($modifPlanTache) {
        $this->modifPlanTache = $modifPlanTache;
        return $this;
    }

    /**
     * Set the modif tache.
     *
     * @param string $modifTache The modif tache.
     * @return Constantes Returns this constantes.
     */
    public function setModifTache($modifTache) {
        $this->modifTache = $modifTache;
        return $this;
    }

    /**
     * Set the modif tarif.
     *
     * @param string $modifTarif The modif tarif.
     * @return Constantes Returns this constantes.
     */
    public function setModifTarif($modifTarif) {
        $this->modifTarif = $modifTarif;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     * @return Constantes Returns this constantes.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the nb dec monnaie.
     *
     * @param int $nbDecMonnaie The nb dec monnaie.
     * @return Constantes Returns this constantes.
     */
    public function setNbDecMonnaie($nbDecMonnaie) {
        $this->nbDecMonnaie = $nbDecMonnaie;
        return $this;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string $noDossCpta The no doss cpta.
     * @return Constantes Returns this constantes.
     */
    public function setNoDossCpta($noDossCpta) {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }

    /**
     * Set the no doss paie.
     *
     * @param string $noDossPaie The no doss paie.
     * @return Constantes Returns this constantes.
     */
    public function setNoDossPaie($noDossPaie) {
        $this->noDossPaie = $noDossPaie;
        return $this;
    }

    /**
     * Set the prefixe aff.
     *
     * @param string $prefixeAff The prefixe aff.
     * @return Constantes Returns this constantes.
     */
    public function setPrefixeAff($prefixeAff) {
        $this->prefixeAff = $prefixeAff;
        return $this;
    }

    /**
     * Set the priorite saisie aff.
     *
     * @param int $prioriteSaisieAff The priorite saisie aff.
     * @return Constantes Returns this constantes.
     */
    public function setPrioriteSaisieAff($prioriteSaisieAff) {
        $this->prioriteSaisieAff = $prioriteSaisieAff;
        return $this;
    }

    /**
     * Set the priorite saisie client.
     *
     * @param int $prioriteSaisieClient The priorite saisie client.
     * @return Constantes Returns this constantes.
     */
    public function setPrioriteSaisieClient($prioriteSaisieClient) {
        $this->prioriteSaisieClient = $prioriteSaisieClient;
        return $this;
    }

    /**
     * Set the priorite saisie frn.
     *
     * @param int $prioriteSaisieFrn The priorite saisie frn.
     * @return Constantes Returns this constantes.
     */
    public function setPrioriteSaisieFrn($prioriteSaisieFrn) {
        $this->prioriteSaisieFrn = $prioriteSaisieFrn;
        return $this;
    }

    /**
     * Set the prochain cpte cli.
     *
     * @param string $prochainCpteCli The prochain cpte cli.
     * @return Constantes Returns this constantes.
     */
    public function setProchainCpteCli($prochainCpteCli) {
        $this->prochainCpteCli = $prochainCpteCli;
        return $this;
    }

    /**
     * Set the prochain cpte frn.
     *
     * @param string $prochainCpteFrn The prochain cpte frn.
     * @return Constantes Returns this constantes.
     */
    public function setProchainCpteFrn($prochainCpteFrn) {
        $this->prochainCpteFrn = $prochainCpteFrn;
        return $this;
    }

    /**
     * Set the prochain mois oblig.
     *
     * @param DateTime $prochainMoisOblig The prochain mois oblig.
     * @return Constantes Returns this constantes.
     */
    public function setProchainMoisOblig(DateTime $prochainMoisOblig = null) {
        $this->prochainMoisOblig = $prochainMoisOblig;
        return $this;
    }

    /**
     * Set the prochain num aff.
     *
     * @param int $prochainNumAff The prochain num aff.
     * @return Constantes Returns this constantes.
     */
    public function setProchainNumAff($prochainNumAff) {
        $this->prochainNumAff = $prochainNumAff;
        return $this;
    }

    /**
     * Set the px km a.
     *
     * @param float $pxKmA The px km a.
     * @return Constantes Returns this constantes.
     */
    public function setPxKmA($pxKmA) {
        $this->pxKmA = $pxKmA;
        return $this;
    }

    /**
     * Set the px km b.
     *
     * @param float $pxKmB The px km b.
     * @return Constantes Returns this constantes.
     */
    public function setPxKmB($pxKmB) {
        $this->pxKmB = $pxKmB;
        return $this;
    }

    /**
     * Set the px km c.
     *
     * @param float $pxKmC The px km c.
     * @return Constantes Returns this constantes.
     */
    public function setPxKmC($pxKmC) {
        $this->pxKmC = $pxKmC;
        return $this;
    }

    /**
     * Set the px km d.
     *
     * @param float $pxKmD The px km d.
     * @return Constantes Returns this constantes.
     */
    public function setPxKmD($pxKmD) {
        $this->pxKmD = $pxKmD;
        return $this;
    }

    /**
     * Set the px km e.
     *
     * @param float $pxKmE The px km e.
     * @return Constantes Returns this constantes.
     */
    public function setPxKmE($pxKmE) {
        $this->pxKmE = $pxKmE;
        return $this;
    }

    /**
     * Set the q e t code collaborateur dest.
     *
     * @param string $qETCodeCollaborateurDest The q e t code collaborateur dest.
     * @return Constantes Returns this constantes.
     */
    public function setQETCodeCollaborateurDest($qETCodeCollaborateurDest) {
        $this->qETCodeCollaborateurDest = $qETCodeCollaborateurDest;
        return $this;
    }

    /**
     * Set the q t e l code mission.
     *
     * @param string $qTELCodeMission The q t e l code mission.
     * @return Constantes Returns this constantes.
     */
    public function setQTELCodeMission($qTELCodeMission) {
        $this->qTELCodeMission = $qTELCodeMission;
        return $this;
    }

    /**
     * Set the q t e l code tache.
     *
     * @param string $qTELCodeTache The q t e l code tache.
     * @return Constantes Returns this constantes.
     */
    public function setQTELCodeTache($qTELCodeTache) {
        $this->qTELCodeTache = $qTELCodeTache;
        return $this;
    }

    /**
     * Set the q t e l special.
     *
     * @param int $qTELSpecial The q t e l special.
     * @return Constantes Returns this constantes.
     */
    public function setQTELSpecial($qTELSpecial) {
        $this->qTELSpecial = $qTELSpecial;
        return $this;
    }

    /**
     * Set the rac data cpta.
     *
     * @param string $racDataCpta The rac data cpta.
     * @return Constantes Returns this constantes.
     */
    public function setRacDataCpta($racDataCpta) {
        $this->racDataCpta = $racDataCpta;
        return $this;
    }

    /**
     * Set the rac data paie.
     *
     * @param string $racDataPaie The rac data paie.
     * @return Constantes Returns this constantes.
     */
    public function setRacDataPaie($racDataPaie) {
        $this->racDataPaie = $racDataPaie;
        return $this;
    }

    /**
     * Set the radical compte cli.
     *
     * @param string $radicalCompteCli The radical compte cli.
     * @return Constantes Returns this constantes.
     */
    public function setRadicalCompteCli($radicalCompteCli) {
        $this->radicalCompteCli = $radicalCompteCli;
        return $this;
    }

    /**
     * Set the radical compte frn.
     *
     * @param string $radicalCompteFrn The radical compte frn.
     * @return Constantes Returns this constantes.
     */
    public function setRadicalCompteFrn($radicalCompteFrn) {
        $this->radicalCompteFrn = $radicalCompteFrn;
        return $this;
    }

    /**
     * Set the sais date fin.
     *
     * @param boolean $saisDateFin The sais date fin.
     * @return Constantes Returns this constantes.
     */
    public function setSaisDateFin($saisDateFin) {
        $this->saisDateFin = $saisDateFin;
        return $this;
    }

    /**
     * Set the t d f c_ adhesion totale.
     *
     * @param boolean $tDFC_AdhesionTotale The t d f c_ adhesion totale.
     * @return Constantes Returns this constantes.
     */
    public function setTDFC_AdhesionTotale($tDFC_AdhesionTotale) {
        $this->tDFC_AdhesionTotale = $tDFC_AdhesionTotale;
        return $this;
    }

    /**
     * Set the t d f c_ emetteur.
     *
     * @param string $tDFC_Emetteur The t d f c_ emetteur.
     * @return Constantes Returns this constantes.
     */
    public function setTDFC_Emetteur($tDFC_Emetteur) {
        $this->tDFC_Emetteur = $tDFC_Emetteur;
        return $this;
    }

    /**
     * Set the t d f c_ facturant.
     *
     * @param string $tDFC_Facturant The t d f c_ facturant.
     * @return Constantes Returns this constantes.
     */
    public function setTDFC_Facturant($tDFC_Facturant) {
        $this->tDFC_Facturant = $tDFC_Facturant;
        return $this;
    }

    /**
     * Set the t d f c_ info trans.
     *
     * @param string $tDFC_InfoTrans The t d f c_ info trans.
     * @return Constantes Returns this constantes.
     */
    public function setTDFC_InfoTrans($tDFC_InfoTrans) {
        $this->tDFC_InfoTrans = $tDFC_InfoTrans;
        return $this;
    }

    /**
     * Set the t p interdit creat millesime.
     *
     * @param boolean $tPInterditCreatMillesime The t p interdit creat millesime.
     * @return Constantes Returns this constantes.
     */
    public function setTPInterditCreatMillesime($tPInterditCreatMillesime) {
        $this->tPInterditCreatMillesime = $tPInterditCreatMillesime;
        return $this;
    }

    /**
     * Set the t p interdit creat mission.
     *
     * @param boolean $tPInterditCreatMission The t p interdit creat mission.
     * @return Constantes Returns this constantes.
     */
    public function setTPInterditCreatMission($tPInterditCreatMission) {
        $this->tPInterditCreatMission = $tPInterditCreatMission;
        return $this;
    }

    /**
     * Set the t p pas clients sortis.
     *
     * @param boolean $tPPasClientsSortis The t p pas clients sortis.
     * @return Constantes Returns this constantes.
     */
    public function setTPPasClientsSortis($tPPasClientsSortis) {
        $this->tPPasClientsSortis = $tPPasClientsSortis;
        return $this;
    }

    /**
     * Set the t p pas intervenants.
     *
     * @param boolean $tPPasIntervenants The t p pas intervenants.
     * @return Constantes Returns this constantes.
     */
    public function setTPPasIntervenants($tPPasIntervenants) {
        $this->tPPasIntervenants = $tPPasIntervenants;
        return $this;
    }

    /**
     * Set the t p prix invisible.
     *
     * @param boolean $tPPrixInvisible The t p prix invisible.
     * @return Constantes Returns this constantes.
     */
    public function setTPPrixInvisible($tPPrixInvisible) {
        $this->tPPrixInvisible = $tPPrixInvisible;
        return $this;
    }

    /**
     * Set the t p rempli pref auto.
     *
     * @param boolean $tPRempliPrefAuto The t p rempli pref auto.
     * @return Constantes Returns this constantes.
     */
    public function setTPRempliPrefAuto($tPRempliPrefAuto) {
        $this->tPRempliPrefAuto = $tPRempliPrefAuto;
        return $this;
    }

    /**
     * Set the t p saisie d o s.
     *
     * @param boolean $tPSaisieDOS The t p saisie d o s.
     * @return Constantes Returns this constantes.
     */
    public function setTPSaisieDOS($tPSaisieDOS) {
        $this->tPSaisieDOS = $tPSaisieDOS;
        return $this;
    }

    /**
     * Set the tps passes interdit prix.
     *
     * @param boolean $tpsPassesInterditPrix The tps passes interdit prix.
     * @return Constantes Returns this constantes.
     */
    public function setTpsPassesInterditPrix($tpsPassesInterditPrix) {
        $this->tpsPassesInterditPrix = $tpsPassesInterditPrix;
        return $this;
    }

}
