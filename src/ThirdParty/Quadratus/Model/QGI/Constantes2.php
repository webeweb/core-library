<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Constantes2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Constantes2 {

    /**
     * A s p affectation messages.
     *
     * @var string
     */
    private $aSPAffectationMessages;

    /**
     * Activation conf2 c m a v cli.
     *
     * @var bool
     */
    private $activationConf2CMAVCli;

    /**
     * Active conf conv col.
     *
     * @var bool
     */
    private $activeConfConvCol;

    /**
     * Activer saisie regl.
     *
     * @var bool
     */
    private $activerSaisieRegl;

    /**
     * Affectations cli frn.
     *
     * @var bool
     */
    private $affectationsCliFrn;

    /**
     * Annulation affaire.
     *
     * @var bool
     */
    private $annulationAffaire;

    /**
     * Articles lst perso acces gestion modifiables.
     *
     * @var bool
     */
    private $articlesLstPersoAccesGestionModifiables;

    /**
     * Articles lst perso acces gestionnaire.
     *
     * @var bool
     */
    private $articlesLstPersoAccesGestionnaire;

    /**
     * Articles lst perso champs modif.
     *
     * @var bool
     */
    private $articlesLstPersoChampsModif;

    /**
     * Articles lst perso copie colonne.
     *
     * @var bool
     */
    private $articlesLstPersoCopieColonne;

    /**
     * Articles lst perso interdire creat.
     *
     * @var bool
     */
    private $articlesLstPersoInterdireCreat;

    /**
     * Avec heures theo.
     *
     * @var bool
     */
    private $avecHeuresTheo;

    /**
     * Calcul nombre messages.
     *
     * @var bool
     */
    private $calculNombreMessages;

    /**
     * Champs critere article2_1.
     *
     * @var string
     */
    private $champsCritereArticle2_1;

    /**
     * Champs critere article2_10.
     *
     * @var string
     */
    private $champsCritereArticle2_10;

    /**
     * Champs critere article2_2.
     *
     * @var string
     */
    private $champsCritereArticle2_2;

    /**
     * Champs critere article2_3.
     *
     * @var string
     */
    private $champsCritereArticle2_3;

    /**
     * Champs critere article2_4.
     *
     * @var string
     */
    private $champsCritereArticle2_4;

    /**
     * Champs critere article2_5.
     *
     * @var string
     */
    private $champsCritereArticle2_5;

    /**
     * Champs critere article2_6.
     *
     * @var string
     */
    private $champsCritereArticle2_6;

    /**
     * Champs critere article2_7.
     *
     * @var string
     */
    private $champsCritereArticle2_7;

    /**
     * Champs critere article2_8.
     *
     * @var string
     */
    private $champsCritereArticle2_8;

    /**
     * Champs critere article2_9.
     *
     * @var string
     */
    private $champsCritereArticle2_9;

    /**
     * Champs critere ent piece a c1.
     *
     * @var string
     */
    private $champsCritereEntPieceAC1;

    /**
     * Champs critere ent piece a c10.
     *
     * @var string
     */
    private $champsCritereEntPieceAC10;

    /**
     * Champs critere ent piece a c2.
     *
     * @var string
     */
    private $champsCritereEntPieceAC2;

    /**
     * Champs critere ent piece a c3.
     *
     * @var string
     */
    private $champsCritereEntPieceAC3;

    /**
     * Champs critere ent piece a c4.
     *
     * @var string
     */
    private $champsCritereEntPieceAC4;

    /**
     * Champs critere ent piece a c5.
     *
     * @var string
     */
    private $champsCritereEntPieceAC5;

    /**
     * Champs critere ent piece a c6.
     *
     * @var string
     */
    private $champsCritereEntPieceAC6;

    /**
     * Champs critere ent piece a c7.
     *
     * @var string
     */
    private $champsCritereEntPieceAC7;

    /**
     * Champs critere ent piece a c8.
     *
     * @var string
     */
    private $champsCritereEntPieceAC8;

    /**
     * Champs critere ent piece a c9.
     *
     * @var string
     */
    private $champsCritereEntPieceAC9;

    /**
     * Cle acces conf.
     *
     * @var string
     */
    private $cleAccesConf;

    /**
     * Cle acces plaquettes.
     *
     * @var string
     */
    private $cleAccesPlaquettes;

    /**
     * Cle acces q admin db.
     *
     * @var string
     */
    private $cleAccesQAdminDb;

    /**
     * Cloture archivage auto.
     *
     * @var bool
     */
    private $clotureArchivageAuto;

    /**
     * Code client quadratus.
     *
     * @var string
     */
    private $codeClientQuadratus;

    /**
     * Compteur fil discussion.
     *
     * @var int
     */
    private $compteurFilDiscussion;

    /**
     * Confidentialite affaire.
     *
     * @var bool
     */
    private $confidentialiteAffaire;

    /**
     * Cout moyen horaire.
     *
     * @var float
     */
    private $coutMoyenHoraire;

    /**
     * Create cli1 fact par b l.
     *
     * @var bool
     */
    private $createCli1FactParBL;

    /**
     * Creation affaire.
     *
     * @var bool
     */
    private $creationAffaire;

    /**
     * Date d h a.
     *
     * @var DateTime
     */
    private $dateDHA;

    /**
     * Date last exe qpub web.
     *
     * @var DateTime
     */
    private $dateLastExeQpubWeb;

    /**
     * Date p h a.
     *
     * @var DateTime
     */
    private $datePHA;

    /**
     * Derniere version c d.
     *
     * @var string
     */
    private $derniereVersionCD;

    /**
     * Droit collab visu documents.
     *
     * @var bool
     */
    private $droitCollabVisuDocuments;

    /**
     * E t e b a c dest message.
     *
     * @var string
     */
    private $eTEBACDestMessage;

    /**
     * e w s cabinet.
     *
     * @var string
     */
    private $eWSCabinet;

    /**
     * e w s coll id.
     *
     * @var string
     */
    private $eWSCollId;

    /**
     * e w s coll mdp.
     *
     * @var string
     */
    private $eWSCollMdp;

    /**
     * e w s srv mdp.
     *
     * @var string
     */
    private $eWSSrvMdp;

    /**
     * e w s srv name.
     *
     * @var string
     */
    private $eWSSrvName;

    /**
     * e w s srv util.
     *
     * @var string
     */
    private $eWSSrvUtil;

    /**
     * Ech detail aff.
     *
     * @var bool
     */
    private $echDetailAff;

    /**
     * F g sur cde frn.
     *
     * @var bool
     */
    private $fGSurCdeFrn;

    /**
     * F gsur a c.
     *
     * @var bool
     */
    private $fGsurAC;

    /**
     * F gsur m o n f.
     *
     * @var bool
     */
    private $fGsurMONF;

    /**
     * Familles liees.
     *
     * @var bool
     */
    private $famillesLiees;

    /**
     * Fiche cli ne pas proposer creation d p d c.
     *
     * @var bool
     */
    private $ficheCliNePasProposerCreationDPDC;

    /**
     * Gestion gammes.
     *
     * @var bool
     */
    private $gestionGammes;

    /**
     * Gestion pointeuse q c.
     *
     * @var bool
     */
    private $gestionPointeuseQC;

    /**
     * Gestion pointeuse q fact.
     *
     * @var bool
     */
    private $gestionPointeuseQFact;

    /**
     * Gestion pointeuse q g i.
     *
     * @var bool
     */
    private $gestionPointeuseQGI;

    /**
     * Gestion pointeuse q p.
     *
     * @var bool
     */
    private $gestionPointeuseQP;

    /**
     * Gestion tarifs transporteurs.
     *
     * @var bool
     */
    private $gestionTarifsTransporteurs;

    /**
     * Gestion tarifs transporteurs nb dec.
     *
     * @var int
     */
    private $gestionTarifsTransporteursNbDec;

    /**
     * Gestion variantes.
     *
     * @var bool
     */
    private $gestionVariantes;

    /**
     * H t avec jours feries.
     *
     * @var bool
     */
    private $hTAvecJoursFeries;

    /**
     * H t avec saisie conges.
     *
     * @var bool
     */
    private $hTAvecSaisieConges;

    /**
     * H t avec saisie conges codes clients.
     *
     * @var string
     */
    private $hTAvecSaisieCongesCodesClients;

    /**
     * H t avec saisie conges codes taches.
     *
     * @var string
     */
    private $hTAvecSaisieCongesCodesTaches;

    /**
     * I p prive q w s.
     *
     * @var string
     */
    private $iPPriveQWS;

    /**
     * Increm auto article.
     *
     * @var bool
     */
    private $incremAutoArticle;

    /**
     * Interdire acces archives cpta.
     *
     * @var bool
     */
    private $interdireAccesArchivesCpta;

    /**
     * Interdire acces archives paie.
     *
     * @var bool
     */
    private $interdireAccesArchivesPaie;

    /**
     * Interdire acces edition balance.
     *
     * @var bool
     */
    private $interdireAccesEditionBalance;

    /**
     * Interdire acces supp doc arch.
     *
     * @var bool
     */
    private $interdireAccesSuppDocArch;

    /**
     * Interdire publi doc web.
     *
     * @var bool
     */
    private $interdirePubliDocWeb;

    /**
     * Liaison t d a.
     *
     * @var bool
     */
    private $liaisonTDA;

    /**
     * Lib affectation frn1.
     *
     * @var string
     */
    private $libAffectationFrn1;

    /**
     * Lib affectation frn2.
     *
     * @var string
     */
    private $libAffectationFrn2;

    /**
     * Lib affectation frn3.
     *
     * @var string
     */
    private $libAffectationFrn3;

    /**
     * Lib affectation frn4.
     *
     * @var string
     */
    private $libAffectationFrn4;

    /**
     * Lib affectation frn5.
     *
     * @var string
     */
    private $libAffectationFrn5;

    /**
     * Lib affectation frn6.
     *
     * @var string
     */
    private $libAffectationFrn6;

    /**
     * Lib affectation frn7.
     *
     * @var string
     */
    private $libAffectationFrn7;

    /**
     * Lib critere article2_1.
     *
     * @var string
     */
    private $libCritereArticle2_1;

    /**
     * Lib critere article2_10.
     *
     * @var string
     */
    private $libCritereArticle2_10;

    /**
     * Lib critere article2_2.
     *
     * @var string
     */
    private $libCritereArticle2_2;

    /**
     * Lib critere article2_3.
     *
     * @var string
     */
    private $libCritereArticle2_3;

    /**
     * Lib critere article2_4.
     *
     * @var string
     */
    private $libCritereArticle2_4;

    /**
     * Lib critere article2_5.
     *
     * @var string
     */
    private $libCritereArticle2_5;

    /**
     * Lib critere article2_6.
     *
     * @var string
     */
    private $libCritereArticle2_6;

    /**
     * Lib critere article2_7.
     *
     * @var string
     */
    private $libCritereArticle2_7;

    /**
     * Lib critere article2_8.
     *
     * @var string
     */
    private $libCritereArticle2_8;

    /**
     * Lib critere article2_9.
     *
     * @var string
     */
    private $libCritereArticle2_9;

    /**
     * Lib critere ent piece a c1.
     *
     * @var string
     */
    private $libCritereEntPieceAC1;

    /**
     * Lib critere ent piece a c10.
     *
     * @var string
     */
    private $libCritereEntPieceAC10;

    /**
     * Lib critere ent piece a c2.
     *
     * @var string
     */
    private $libCritereEntPieceAC2;

    /**
     * Lib critere ent piece a c3.
     *
     * @var string
     */
    private $libCritereEntPieceAC3;

    /**
     * Lib critere ent piece a c4.
     *
     * @var string
     */
    private $libCritereEntPieceAC4;

    /**
     * Lib critere ent piece a c5.
     *
     * @var string
     */
    private $libCritereEntPieceAC5;

    /**
     * Lib critere ent piece a c6.
     *
     * @var string
     */
    private $libCritereEntPieceAC6;

    /**
     * Lib critere ent piece a c7.
     *
     * @var string
     */
    private $libCritereEntPieceAC7;

    /**
     * Lib critere ent piece a c8.
     *
     * @var string
     */
    private $libCritereEntPieceAC8;

    /**
     * Lib critere ent piece a c9.
     *
     * @var string
     */
    private $libCritereEntPieceAC9;

    /**
     * Lib frais1.
     *
     * @var string
     */
    private $libFrais1;

    /**
     * Lib frais2.
     *
     * @var string
     */
    private $libFrais2;

    /**
     * Lib frais3.
     *
     * @var string
     */
    private $libFrais3;

    /**
     * Libelle gamme.
     *
     * @var string
     */
    private $libelleGamme;

    /**
     * Libelle variante.
     *
     * @var string
     */
    private $libelleVariante;

    /**
     * lng code article auto.
     *
     * @var int
     */
    private $lngCodeArticleAuto;

    /**
     * Longueur num aff.
     *
     * @var int
     */
    private $longueurNumAff;

    /**
     * Maj codes activite c g a.
     *
     * @var string
     */
    private $majCodesActiviteCGA;

    /**
     * Mess a s p_ o d.
     *
     * @var bool
     */
    private $messASP_OD;

    /**
     * Modif affaire.
     *
     * @var string
     */
    private $modifAffaire;

    /**
     * Modif droits a s p.
     *
     * @var bool
     */
    private $modifDroitsASP;

    /**
     * Nb max gamme.
     *
     * @var int
     */
    private $nbMaxGamme;

    /**
     * Ne pas creer cpt cli.
     *
     * @var bool
     */
    private $nePasCreerCptCli;

    /**
     * Ne pas creer cpt frn.
     *
     * @var bool
     */
    private $nePasCreerCptFrn;

    /**
     * New db infos.
     *
     * @var bool
     */
    private $newDbInfos;

    /**
     * New q bureau.
     *
     * @var bool
     */
    private $newQBureau;

    /**
     * No doss fact cab.
     *
     * @var string
     */
    private $noDossFactCab;

    /**
     * P m e dossier rattachement.
     *
     * @var string
     */
    private $pMEDossierRattachement;

    /**
     * Pas de lien comptabilite.
     *
     * @var bool
     */
    private $pasDeLienComptabilite;

    /**
     * Prefixe code client.
     *
     * @var string
     */
    private $prefixeCodeClient;

    /**
     * Prochain code client.
     *
     * @var string
     */
    private $prochainCodeClient;

    /**
     * Proxy actif.
     *
     * @var bool
     */
    private $proxyActif;

    /**
     * Proxy adresse.
     *
     * @var string
     */
    private $proxyAdresse;

    /**
     * Proxy port.
     *
     * @var int
     */
    private $proxyPort;

    /**
     * Q pub web code collaborateur dest.
     *
     * @var string
     */
    private $qPubWebCodeCollaborateurDest;

    /**
     * Q w s chemin logo.
     *
     * @var string
     */
    private $qWSCheminLogo;

    /**
     * Q w s code i p l.
     *
     * @var string
     */
    private $qWSCodeIPL;

    /**
     * Q w s http securise.
     *
     * @var bool
     */
    private $qWSHttpSecurise;

    /**
     * Q w s i p l.
     *
     * @var string
     */
    private $qWSIPL;

    /**
     * Q w s nom produit.
     *
     * @var string
     */
    private $qWSNomProduit;

    /**
     * Q w s utiliser logo cabinet.
     *
     * @var bool
     */
    private $qWSUtiliserLogoCabinet;

    /**
     * R e q_ demandeur.
     *
     * @var string
     */
    private $rEQ_Demandeur;

    /**
     * Rac data paie.
     *
     * @var string
     */
    private $racDataPaie;

    /**
     * Rapport q infos.
     *
     * @var string
     */
    private $rapportQInfos;

    /**
     * S m s_ api_ key.
     *
     * @var string
     */
    private $sMS_Api_Key;

    /**
     * S m s_ droit acces.
     *
     * @var bool
     */
    private $sMS_DroitAcces;

    /**
     * S m s_ key.
     *
     * @var string
     */
    private $sMS_Key;

    /**
     * S m s_ prestataire.
     *
     * @var string
     */
    private $sMS_Prestataire;

    /**
     * S m s_ sender.
     *
     * @var string
     */
    private $sMS_Sender;

    /**
     * S m s_ type.
     *
     * @var int
     */
    private $sMS_Type;

    /**
     * S m s_ user_ login.
     *
     * @var string
     */
    private $sMS_User_Login;

    /**
     * Saisie propriete mess.
     *
     * @var int
     */
    private $saisieProprieteMess;

    /**
     * Saisie regl direct.
     *
     * @var bool
     */
    private $saisieReglDirect;

    /**
     * Saisie t p_ ne pas afficher d p.
     *
     * @var bool
     */
    private $saisieTP_NePasAfficherDP;

    /**
     * Saisie t p_ onglet unique d p.
     *
     * @var bool
     */
    private $saisieTP_OngletUniqueDP;

    /**
     * Saisie t p_ onglet unique t n.
     *
     * @var bool
     */
    private $saisieTP_OngletUniqueTN;

    /**
     * Saisie temps nb j apres.
     *
     * @var int
     */
    private $saisieTempsNbJApres;

    /**
     * Saisie temps nb j avant.
     *
     * @var int
     */
    private $saisieTempsNbJAvant;

    /**
     * Save histo memo2 file.
     *
     * @var bool
     */
    private $saveHistoMemo2File;

    /**
     * Sel av lst perso acces gestion modifiables.
     *
     * @var bool
     */
    private $selAvLstPersoAccesGestionModifiables;

    /**
     * Sel av lst perso acces gestionnaire.
     *
     * @var bool
     */
    private $selAvLstPersoAccesGestionnaire;

    /**
     * Sel av lst perso champs modif.
     *
     * @var bool
     */
    private $selAvLstPersoChampsModif;

    /**
     * Sel av lst perso copie colonne.
     *
     * @var bool
     */
    private $selAvLstPersoCopieColonne;

    /**
     * Sel av lst perso interdire creat.
     *
     * @var bool
     */
    private $selAvLstPersoInterdireCreat;

    /**
     * Solde cpta o d.
     *
     * @var bool
     */
    private $soldeCptaOD;

    /**
     * Suivi client intitule generic1.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric1;

    /**
     * Suivi client intitule generic10.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric10;

    /**
     * Suivi client intitule generic2.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric2;

    /**
     * Suivi client intitule generic3.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric3;

    /**
     * Suivi client intitule generic4.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric4;

    /**
     * Suivi client intitule generic5.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric5;

    /**
     * Suivi client intitule generic6.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric6;

    /**
     * Suivi client intitule generic7.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric7;

    /**
     * Suivi client intitule generic8.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric8;

    /**
     * Suivi client intitule generic9.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric9;

    /**
     * T p acces encours client.
     *
     * @var bool
     */
    private $tPAccesEncoursClient;

    /**
     * T p avancement a la ligne.
     *
     * @var bool
     */
    private $tPAvancementALaLigne;

    /**
     * T p interdit qte.
     *
     * @var bool
     */
    private $tPInterditQte;

    /**
     * T p libelle mission.
     *
     * @var bool
     */
    private $tPLibelleMission;

    /**
     * T p limite saisie non operationnel.
     *
     * @var bool
     */
    private $tPLimiteSaisieNonOperationnel;

    /**
     * T p p u p v123.
     *
     * @var bool
     */
    private $tPPUPV123;

    /**
     * T p pas mois cloture.
     *
     * @var bool
     */
    private $tPPasMoisCloture;

    /**
     * T p pourcentage non operationnel date.
     *
     * @var DateTime
     */
    private $tPPourcentageNonOperationnelDate;

    /**
     * T p qte invisible.
     *
     * @var bool
     */
    private $tPQteInvisible;

    /**
     * T p s_ num archive.
     *
     * @var string
     */
    private $tPS_NumArchive;

    /**
     * T p saisie avancement.
     *
     * @var bool
     */
    private $tPSaisieAvancement;

    /**
     * Trans variantes f a c t_ g i.
     *
     * @var bool
     */
    private $transVariantesFACT_GI;

    /**
     * Type affichage solde fourn.
     *
     * @var string
     */
    private $typeAffichageSoldeFourn;

    /**
     * Type frais1.
     *
     * @var bool
     */
    private $typeFrais1;

    /**
     * Type frais2.
     *
     * @var bool
     */
    private $typeFrais2;

    /**
     * Type frais3.
     *
     * @var bool
     */
    private $typeFrais3;

    /**
     * Type saisie taux devises.
     *
     * @var string
     */
    private $typeSaisieTauxDevises;

    /**
     * V esur dep aff.
     *
     * @var bool
     */
    private $vEsurDepAff;

    /**
     * Val auto tarifs transporteurs.
     *
     * @var bool
     */
    private $valAutoTarifsTransporteurs;

    /**
     * Visualisation fiche cabinet.
     *
     * @var bool
     */
    private $visualisationFicheCabinet;

    /**
     * Word acces par q client.
     *
     * @var bool
     */
    private $wordAccesParQClient;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a s p affectation messages.
     *
     * @return string Returns the a s p affectation messages.
     */
    public function getASPAffectationMessages() {
        return $this->aSPAffectationMessages;
    }

    /**
     * Get the activation conf2 c m a v cli.
     *
     * @return bool Returns the activation conf2 c m a v cli.
     */
    public function getActivationConf2CMAVCli() {
        return $this->activationConf2CMAVCli;
    }

    /**
     * Get the active conf conv col.
     *
     * @return bool Returns the active conf conv col.
     */
    public function getActiveConfConvCol() {
        return $this->activeConfConvCol;
    }

    /**
     * Get the activer saisie regl.
     *
     * @return bool Returns the activer saisie regl.
     */
    public function getActiverSaisieRegl() {
        return $this->activerSaisieRegl;
    }

    /**
     * Get the affectations cli frn.
     *
     * @return bool Returns the affectations cli frn.
     */
    public function getAffectationsCliFrn() {
        return $this->affectationsCliFrn;
    }

    /**
     * Get the annulation affaire.
     *
     * @return bool Returns the annulation affaire.
     */
    public function getAnnulationAffaire() {
        return $this->annulationAffaire;
    }

    /**
     * Get the articles lst perso acces gestion modifiables.
     *
     * @return bool Returns the articles lst perso acces gestion modifiables.
     */
    public function getArticlesLstPersoAccesGestionModifiables() {
        return $this->articlesLstPersoAccesGestionModifiables;
    }

    /**
     * Get the articles lst perso acces gestionnaire.
     *
     * @return bool Returns the articles lst perso acces gestionnaire.
     */
    public function getArticlesLstPersoAccesGestionnaire() {
        return $this->articlesLstPersoAccesGestionnaire;
    }

    /**
     * Get the articles lst perso champs modif.
     *
     * @return bool Returns the articles lst perso champs modif.
     */
    public function getArticlesLstPersoChampsModif() {
        return $this->articlesLstPersoChampsModif;
    }

    /**
     * Get the articles lst perso copie colonne.
     *
     * @return bool Returns the articles lst perso copie colonne.
     */
    public function getArticlesLstPersoCopieColonne() {
        return $this->articlesLstPersoCopieColonne;
    }

    /**
     * Get the articles lst perso interdire creat.
     *
     * @return bool Returns the articles lst perso interdire creat.
     */
    public function getArticlesLstPersoInterdireCreat() {
        return $this->articlesLstPersoInterdireCreat;
    }

    /**
     * Get the avec heures theo.
     *
     * @return bool Returns the avec heures theo.
     */
    public function getAvecHeuresTheo() {
        return $this->avecHeuresTheo;
    }

    /**
     * Get the calcul nombre messages.
     *
     * @return bool Returns the calcul nombre messages.
     */
    public function getCalculNombreMessages() {
        return $this->calculNombreMessages;
    }

    /**
     * Get the champs critere article2_1.
     *
     * @return string Returns the champs critere article2_1.
     */
    public function getChampsCritereArticle2_1() {
        return $this->champsCritereArticle2_1;
    }

    /**
     * Get the champs critere article2_10.
     *
     * @return string Returns the champs critere article2_10.
     */
    public function getChampsCritereArticle2_10() {
        return $this->champsCritereArticle2_10;
    }

    /**
     * Get the champs critere article2_2.
     *
     * @return string Returns the champs critere article2_2.
     */
    public function getChampsCritereArticle2_2() {
        return $this->champsCritereArticle2_2;
    }

    /**
     * Get the champs critere article2_3.
     *
     * @return string Returns the champs critere article2_3.
     */
    public function getChampsCritereArticle2_3() {
        return $this->champsCritereArticle2_3;
    }

    /**
     * Get the champs critere article2_4.
     *
     * @return string Returns the champs critere article2_4.
     */
    public function getChampsCritereArticle2_4() {
        return $this->champsCritereArticle2_4;
    }

    /**
     * Get the champs critere article2_5.
     *
     * @return string Returns the champs critere article2_5.
     */
    public function getChampsCritereArticle2_5() {
        return $this->champsCritereArticle2_5;
    }

    /**
     * Get the champs critere article2_6.
     *
     * @return string Returns the champs critere article2_6.
     */
    public function getChampsCritereArticle2_6() {
        return $this->champsCritereArticle2_6;
    }

    /**
     * Get the champs critere article2_7.
     *
     * @return string Returns the champs critere article2_7.
     */
    public function getChampsCritereArticle2_7() {
        return $this->champsCritereArticle2_7;
    }

    /**
     * Get the champs critere article2_8.
     *
     * @return string Returns the champs critere article2_8.
     */
    public function getChampsCritereArticle2_8() {
        return $this->champsCritereArticle2_8;
    }

    /**
     * Get the champs critere article2_9.
     *
     * @return string Returns the champs critere article2_9.
     */
    public function getChampsCritereArticle2_9() {
        return $this->champsCritereArticle2_9;
    }

    /**
     * Get the champs critere ent piece a c1.
     *
     * @return string Returns the champs critere ent piece a c1.
     */
    public function getChampsCritereEntPieceAC1() {
        return $this->champsCritereEntPieceAC1;
    }

    /**
     * Get the champs critere ent piece a c10.
     *
     * @return string Returns the champs critere ent piece a c10.
     */
    public function getChampsCritereEntPieceAC10() {
        return $this->champsCritereEntPieceAC10;
    }

    /**
     * Get the champs critere ent piece a c2.
     *
     * @return string Returns the champs critere ent piece a c2.
     */
    public function getChampsCritereEntPieceAC2() {
        return $this->champsCritereEntPieceAC2;
    }

    /**
     * Get the champs critere ent piece a c3.
     *
     * @return string Returns the champs critere ent piece a c3.
     */
    public function getChampsCritereEntPieceAC3() {
        return $this->champsCritereEntPieceAC3;
    }

    /**
     * Get the champs critere ent piece a c4.
     *
     * @return string Returns the champs critere ent piece a c4.
     */
    public function getChampsCritereEntPieceAC4() {
        return $this->champsCritereEntPieceAC4;
    }

    /**
     * Get the champs critere ent piece a c5.
     *
     * @return string Returns the champs critere ent piece a c5.
     */
    public function getChampsCritereEntPieceAC5() {
        return $this->champsCritereEntPieceAC5;
    }

    /**
     * Get the champs critere ent piece a c6.
     *
     * @return string Returns the champs critere ent piece a c6.
     */
    public function getChampsCritereEntPieceAC6() {
        return $this->champsCritereEntPieceAC6;
    }

    /**
     * Get the champs critere ent piece a c7.
     *
     * @return string Returns the champs critere ent piece a c7.
     */
    public function getChampsCritereEntPieceAC7() {
        return $this->champsCritereEntPieceAC7;
    }

    /**
     * Get the champs critere ent piece a c8.
     *
     * @return string Returns the champs critere ent piece a c8.
     */
    public function getChampsCritereEntPieceAC8() {
        return $this->champsCritereEntPieceAC8;
    }

    /**
     * Get the champs critere ent piece a c9.
     *
     * @return string Returns the champs critere ent piece a c9.
     */
    public function getChampsCritereEntPieceAC9() {
        return $this->champsCritereEntPieceAC9;
    }

    /**
     * Get the cle acces conf.
     *
     * @return string Returns the cle acces conf.
     */
    public function getCleAccesConf() {
        return $this->cleAccesConf;
    }

    /**
     * Get the cle acces plaquettes.
     *
     * @return string Returns the cle acces plaquettes.
     */
    public function getCleAccesPlaquettes() {
        return $this->cleAccesPlaquettes;
    }

    /**
     * Get the cle acces q admin db.
     *
     * @return string Returns the cle acces q admin db.
     */
    public function getCleAccesQAdminDb() {
        return $this->cleAccesQAdminDb;
    }

    /**
     * Get the cloture archivage auto.
     *
     * @return bool Returns the cloture archivage auto.
     */
    public function getClotureArchivageAuto() {
        return $this->clotureArchivageAuto;
    }

    /**
     * Get the code client quadratus.
     *
     * @return string Returns the code client quadratus.
     */
    public function getCodeClientQuadratus() {
        return $this->codeClientQuadratus;
    }

    /**
     * Get the compteur fil discussion.
     *
     * @return int Returns the compteur fil discussion.
     */
    public function getCompteurFilDiscussion() {
        return $this->compteurFilDiscussion;
    }

    /**
     * Get the confidentialite affaire.
     *
     * @return bool Returns the confidentialite affaire.
     */
    public function getConfidentialiteAffaire() {
        return $this->confidentialiteAffaire;
    }

    /**
     * Get the cout moyen horaire.
     *
     * @return float Returns the cout moyen horaire.
     */
    public function getCoutMoyenHoraire() {
        return $this->coutMoyenHoraire;
    }

    /**
     * Get the create cli1 fact par b l.
     *
     * @return bool Returns the create cli1 fact par b l.
     */
    public function getCreateCli1FactParBL() {
        return $this->createCli1FactParBL;
    }

    /**
     * Get the creation affaire.
     *
     * @return bool Returns the creation affaire.
     */
    public function getCreationAffaire() {
        return $this->creationAffaire;
    }

    /**
     * Get the date d h a.
     *
     * @return DateTime Returns the date d h a.
     */
    public function getDateDHA() {
        return $this->dateDHA;
    }

    /**
     * Get the date last exe qpub web.
     *
     * @return DateTime Returns the date last exe qpub web.
     */
    public function getDateLastExeQpubWeb() {
        return $this->dateLastExeQpubWeb;
    }

    /**
     * Get the date p h a.
     *
     * @return DateTime Returns the date p h a.
     */
    public function getDatePHA() {
        return $this->datePHA;
    }

    /**
     * Get the derniere version c d.
     *
     * @return string Returns the derniere version c d.
     */
    public function getDerniereVersionCD() {
        return $this->derniereVersionCD;
    }

    /**
     * Get the droit collab visu documents.
     *
     * @return bool Returns the droit collab visu documents.
     */
    public function getDroitCollabVisuDocuments() {
        return $this->droitCollabVisuDocuments;
    }

    /**
     * Get the e t e b a c dest message.
     *
     * @return string Returns the e t e b a c dest message.
     */
    public function getETEBACDestMessage() {
        return $this->eTEBACDestMessage;
    }

    /**
     * Get the ech detail aff.
     *
     * @return bool Returns the ech detail aff.
     */
    public function getEchDetailAff() {
        return $this->echDetailAff;
    }

    /**
     * Get the f g sur cde frn.
     *
     * @return bool Returns the f g sur cde frn.
     */
    public function getFGSurCdeFrn() {
        return $this->fGSurCdeFrn;
    }

    /**
     * Get the f gsur a c.
     *
     * @return bool Returns the f gsur a c.
     */
    public function getFGsurAC() {
        return $this->fGsurAC;
    }

    /**
     * Get the f gsur m o n f.
     *
     * @return bool Returns the f gsur m o n f.
     */
    public function getFGsurMONF() {
        return $this->fGsurMONF;
    }

    /**
     * Get the familles liees.
     *
     * @return bool Returns the familles liees.
     */
    public function getFamillesLiees() {
        return $this->famillesLiees;
    }

    /**
     * Get the fiche cli ne pas proposer creation d p d c.
     *
     * @return bool Returns the fiche cli ne pas proposer creation d p d c.
     */
    public function getFicheCliNePasProposerCreationDPDC() {
        return $this->ficheCliNePasProposerCreationDPDC;
    }

    /**
     * Get the gestion gammes.
     *
     * @return bool Returns the gestion gammes.
     */
    public function getGestionGammes() {
        return $this->gestionGammes;
    }

    /**
     * Get the gestion pointeuse q c.
     *
     * @return bool Returns the gestion pointeuse q c.
     */
    public function getGestionPointeuseQC() {
        return $this->gestionPointeuseQC;
    }

    /**
     * Get the gestion pointeuse q fact.
     *
     * @return bool Returns the gestion pointeuse q fact.
     */
    public function getGestionPointeuseQFact() {
        return $this->gestionPointeuseQFact;
    }

    /**
     * Get the gestion pointeuse q g i.
     *
     * @return bool Returns the gestion pointeuse q g i.
     */
    public function getGestionPointeuseQGI() {
        return $this->gestionPointeuseQGI;
    }

    /**
     * Get the gestion pointeuse q p.
     *
     * @return bool Returns the gestion pointeuse q p.
     */
    public function getGestionPointeuseQP() {
        return $this->gestionPointeuseQP;
    }

    /**
     * Get the gestion tarifs transporteurs.
     *
     * @return bool Returns the gestion tarifs transporteurs.
     */
    public function getGestionTarifsTransporteurs() {
        return $this->gestionTarifsTransporteurs;
    }

    /**
     * Get the gestion tarifs transporteurs nb dec.
     *
     * @return int Returns the gestion tarifs transporteurs nb dec.
     */
    public function getGestionTarifsTransporteursNbDec() {
        return $this->gestionTarifsTransporteursNbDec;
    }

    /**
     * Get the gestion variantes.
     *
     * @return bool Returns the gestion variantes.
     */
    public function getGestionVariantes() {
        return $this->gestionVariantes;
    }

    /**
     * Get the h t avec jours feries.
     *
     * @return bool Returns the h t avec jours feries.
     */
    public function getHTAvecJoursFeries() {
        return $this->hTAvecJoursFeries;
    }

    /**
     * Get the h t avec saisie conges.
     *
     * @return bool Returns the h t avec saisie conges.
     */
    public function getHTAvecSaisieConges() {
        return $this->hTAvecSaisieConges;
    }

    /**
     * Get the h t avec saisie conges codes clients.
     *
     * @return string Returns the h t avec saisie conges codes clients.
     */
    public function getHTAvecSaisieCongesCodesClients() {
        return $this->hTAvecSaisieCongesCodesClients;
    }

    /**
     * Get the h t avec saisie conges codes taches.
     *
     * @return string Returns the h t avec saisie conges codes taches.
     */
    public function getHTAvecSaisieCongesCodesTaches() {
        return $this->hTAvecSaisieCongesCodesTaches;
    }

    /**
     * Get the i p prive q w s.
     *
     * @return string Returns the i p prive q w s.
     */
    public function getIPPriveQWS() {
        return $this->iPPriveQWS;
    }

    /**
     * Get the increm auto article.
     *
     * @return bool Returns the increm auto article.
     */
    public function getIncremAutoArticle() {
        return $this->incremAutoArticle;
    }

    /**
     * Get the interdire acces archives cpta.
     *
     * @return bool Returns the interdire acces archives cpta.
     */
    public function getInterdireAccesArchivesCpta() {
        return $this->interdireAccesArchivesCpta;
    }

    /**
     * Get the interdire acces archives paie.
     *
     * @return bool Returns the interdire acces archives paie.
     */
    public function getInterdireAccesArchivesPaie() {
        return $this->interdireAccesArchivesPaie;
    }

    /**
     * Get the interdire acces edition balance.
     *
     * @return bool Returns the interdire acces edition balance.
     */
    public function getInterdireAccesEditionBalance() {
        return $this->interdireAccesEditionBalance;
    }

    /**
     * Get the interdire acces supp doc arch.
     *
     * @return bool Returns the interdire acces supp doc arch.
     */
    public function getInterdireAccesSuppDocArch() {
        return $this->interdireAccesSuppDocArch;
    }

    /**
     * Get the interdire publi doc web.
     *
     * @return bool Returns the interdire publi doc web.
     */
    public function getInterdirePubliDocWeb() {
        return $this->interdirePubliDocWeb;
    }

    /**
     * Get the liaison t d a.
     *
     * @return bool Returns the liaison t d a.
     */
    public function getLiaisonTDA() {
        return $this->liaisonTDA;
    }

    /**
     * Get the lib affectation frn1.
     *
     * @return string Returns the lib affectation frn1.
     */
    public function getLibAffectationFrn1() {
        return $this->libAffectationFrn1;
    }

    /**
     * Get the lib affectation frn2.
     *
     * @return string Returns the lib affectation frn2.
     */
    public function getLibAffectationFrn2() {
        return $this->libAffectationFrn2;
    }

    /**
     * Get the lib affectation frn3.
     *
     * @return string Returns the lib affectation frn3.
     */
    public function getLibAffectationFrn3() {
        return $this->libAffectationFrn3;
    }

    /**
     * Get the lib affectation frn4.
     *
     * @return string Returns the lib affectation frn4.
     */
    public function getLibAffectationFrn4() {
        return $this->libAffectationFrn4;
    }

    /**
     * Get the lib affectation frn5.
     *
     * @return string Returns the lib affectation frn5.
     */
    public function getLibAffectationFrn5() {
        return $this->libAffectationFrn5;
    }

    /**
     * Get the lib affectation frn6.
     *
     * @return string Returns the lib affectation frn6.
     */
    public function getLibAffectationFrn6() {
        return $this->libAffectationFrn6;
    }

    /**
     * Get the lib affectation frn7.
     *
     * @return string Returns the lib affectation frn7.
     */
    public function getLibAffectationFrn7() {
        return $this->libAffectationFrn7;
    }

    /**
     * Get the lib critere article2_1.
     *
     * @return string Returns the lib critere article2_1.
     */
    public function getLibCritereArticle2_1() {
        return $this->libCritereArticle2_1;
    }

    /**
     * Get the lib critere article2_10.
     *
     * @return string Returns the lib critere article2_10.
     */
    public function getLibCritereArticle2_10() {
        return $this->libCritereArticle2_10;
    }

    /**
     * Get the lib critere article2_2.
     *
     * @return string Returns the lib critere article2_2.
     */
    public function getLibCritereArticle2_2() {
        return $this->libCritereArticle2_2;
    }

    /**
     * Get the lib critere article2_3.
     *
     * @return string Returns the lib critere article2_3.
     */
    public function getLibCritereArticle2_3() {
        return $this->libCritereArticle2_3;
    }

    /**
     * Get the lib critere article2_4.
     *
     * @return string Returns the lib critere article2_4.
     */
    public function getLibCritereArticle2_4() {
        return $this->libCritereArticle2_4;
    }

    /**
     * Get the lib critere article2_5.
     *
     * @return string Returns the lib critere article2_5.
     */
    public function getLibCritereArticle2_5() {
        return $this->libCritereArticle2_5;
    }

    /**
     * Get the lib critere article2_6.
     *
     * @return string Returns the lib critere article2_6.
     */
    public function getLibCritereArticle2_6() {
        return $this->libCritereArticle2_6;
    }

    /**
     * Get the lib critere article2_7.
     *
     * @return string Returns the lib critere article2_7.
     */
    public function getLibCritereArticle2_7() {
        return $this->libCritereArticle2_7;
    }

    /**
     * Get the lib critere article2_8.
     *
     * @return string Returns the lib critere article2_8.
     */
    public function getLibCritereArticle2_8() {
        return $this->libCritereArticle2_8;
    }

    /**
     * Get the lib critere article2_9.
     *
     * @return string Returns the lib critere article2_9.
     */
    public function getLibCritereArticle2_9() {
        return $this->libCritereArticle2_9;
    }

    /**
     * Get the lib critere ent piece a c1.
     *
     * @return string Returns the lib critere ent piece a c1.
     */
    public function getLibCritereEntPieceAC1() {
        return $this->libCritereEntPieceAC1;
    }

    /**
     * Get the lib critere ent piece a c10.
     *
     * @return string Returns the lib critere ent piece a c10.
     */
    public function getLibCritereEntPieceAC10() {
        return $this->libCritereEntPieceAC10;
    }

    /**
     * Get the lib critere ent piece a c2.
     *
     * @return string Returns the lib critere ent piece a c2.
     */
    public function getLibCritereEntPieceAC2() {
        return $this->libCritereEntPieceAC2;
    }

    /**
     * Get the lib critere ent piece a c3.
     *
     * @return string Returns the lib critere ent piece a c3.
     */
    public function getLibCritereEntPieceAC3() {
        return $this->libCritereEntPieceAC3;
    }

    /**
     * Get the lib critere ent piece a c4.
     *
     * @return string Returns the lib critere ent piece a c4.
     */
    public function getLibCritereEntPieceAC4() {
        return $this->libCritereEntPieceAC4;
    }

    /**
     * Get the lib critere ent piece a c5.
     *
     * @return string Returns the lib critere ent piece a c5.
     */
    public function getLibCritereEntPieceAC5() {
        return $this->libCritereEntPieceAC5;
    }

    /**
     * Get the lib critere ent piece a c6.
     *
     * @return string Returns the lib critere ent piece a c6.
     */
    public function getLibCritereEntPieceAC6() {
        return $this->libCritereEntPieceAC6;
    }

    /**
     * Get the lib critere ent piece a c7.
     *
     * @return string Returns the lib critere ent piece a c7.
     */
    public function getLibCritereEntPieceAC7() {
        return $this->libCritereEntPieceAC7;
    }

    /**
     * Get the lib critere ent piece a c8.
     *
     * @return string Returns the lib critere ent piece a c8.
     */
    public function getLibCritereEntPieceAC8() {
        return $this->libCritereEntPieceAC8;
    }

    /**
     * Get the lib critere ent piece a c9.
     *
     * @return string Returns the lib critere ent piece a c9.
     */
    public function getLibCritereEntPieceAC9() {
        return $this->libCritereEntPieceAC9;
    }

    /**
     * Get the lib frais1.
     *
     * @return string Returns the lib frais1.
     */
    public function getLibFrais1() {
        return $this->libFrais1;
    }

    /**
     * Get the lib frais2.
     *
     * @return string Returns the lib frais2.
     */
    public function getLibFrais2() {
        return $this->libFrais2;
    }

    /**
     * Get the lib frais3.
     *
     * @return string Returns the lib frais3.
     */
    public function getLibFrais3() {
        return $this->libFrais3;
    }

    /**
     * Get the libelle gamme.
     *
     * @return string Returns the libelle gamme.
     */
    public function getLibelleGamme() {
        return $this->libelleGamme;
    }

    /**
     * Get the libelle variante.
     *
     * @return string Returns the libelle variante.
     */
    public function getLibelleVariante() {
        return $this->libelleVariante;
    }

    /**
     * Get the longueur num aff.
     *
     * @return int Returns the longueur num aff.
     */
    public function getLongueurNumAff() {
        return $this->longueurNumAff;
    }

    /**
     * Get the maj codes activite c g a.
     *
     * @return string Returns the maj codes activite c g a.
     */
    public function getMajCodesActiviteCGA() {
        return $this->majCodesActiviteCGA;
    }

    /**
     * Get the mess a s p_ o d.
     *
     * @return bool Returns the mess a s p_ o d.
     */
    public function getMessASP_OD() {
        return $this->messASP_OD;
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
     * Get the modif droits a s p.
     *
     * @return bool Returns the modif droits a s p.
     */
    public function getModifDroitsASP() {
        return $this->modifDroitsASP;
    }

    /**
     * Get the nb max gamme.
     *
     * @return int Returns the nb max gamme.
     */
    public function getNbMaxGamme() {
        return $this->nbMaxGamme;
    }

    /**
     * Get the ne pas creer cpt cli.
     *
     * @return bool Returns the ne pas creer cpt cli.
     */
    public function getNePasCreerCptCli() {
        return $this->nePasCreerCptCli;
    }

    /**
     * Get the ne pas creer cpt frn.
     *
     * @return bool Returns the ne pas creer cpt frn.
     */
    public function getNePasCreerCptFrn() {
        return $this->nePasCreerCptFrn;
    }

    /**
     * Get the new db infos.
     *
     * @return bool Returns the new db infos.
     */
    public function getNewDbInfos() {
        return $this->newDbInfos;
    }

    /**
     * Get the new q bureau.
     *
     * @return bool Returns the new q bureau.
     */
    public function getNewQBureau() {
        return $this->newQBureau;
    }

    /**
     * Get the no doss fact cab.
     *
     * @return string Returns the no doss fact cab.
     */
    public function getNoDossFactCab() {
        return $this->noDossFactCab;
    }

    /**
     * Get the p m e dossier rattachement.
     *
     * @return string Returns the p m e dossier rattachement.
     */
    public function getPMEDossierRattachement() {
        return $this->pMEDossierRattachement;
    }

    /**
     * Get the pas de lien comptabilite.
     *
     * @return bool Returns the pas de lien comptabilite.
     */
    public function getPasDeLienComptabilite() {
        return $this->pasDeLienComptabilite;
    }

    /**
     * Get the prefixe code client.
     *
     * @return string Returns the prefixe code client.
     */
    public function getPrefixeCodeClient() {
        return $this->prefixeCodeClient;
    }

    /**
     * Get the prochain code client.
     *
     * @return string Returns the prochain code client.
     */
    public function getProchainCodeClient() {
        return $this->prochainCodeClient;
    }

    /**
     * Get the proxy actif.
     *
     * @return bool Returns the proxy actif.
     */
    public function getProxyActif() {
        return $this->proxyActif;
    }

    /**
     * Get the proxy adresse.
     *
     * @return string Returns the proxy adresse.
     */
    public function getProxyAdresse() {
        return $this->proxyAdresse;
    }

    /**
     * Get the proxy port.
     *
     * @return int Returns the proxy port.
     */
    public function getProxyPort() {
        return $this->proxyPort;
    }

    /**
     * Get the q pub web code collaborateur dest.
     *
     * @return string Returns the q pub web code collaborateur dest.
     */
    public function getQPubWebCodeCollaborateurDest() {
        return $this->qPubWebCodeCollaborateurDest;
    }

    /**
     * Get the q w s chemin logo.
     *
     * @return string Returns the q w s chemin logo.
     */
    public function getQWSCheminLogo() {
        return $this->qWSCheminLogo;
    }

    /**
     * Get the q w s code i p l.
     *
     * @return string Returns the q w s code i p l.
     */
    public function getQWSCodeIPL() {
        return $this->qWSCodeIPL;
    }

    /**
     * Get the q w s http securise.
     *
     * @return bool Returns the q w s http securise.
     */
    public function getQWSHttpSecurise() {
        return $this->qWSHttpSecurise;
    }

    /**
     * Get the q w s i p l.
     *
     * @return string Returns the q w s i p l.
     */
    public function getQWSIPL() {
        return $this->qWSIPL;
    }

    /**
     * Get the q w s nom produit.
     *
     * @return string Returns the q w s nom produit.
     */
    public function getQWSNomProduit() {
        return $this->qWSNomProduit;
    }

    /**
     * Get the q w s utiliser logo cabinet.
     *
     * @return bool Returns the q w s utiliser logo cabinet.
     */
    public function getQWSUtiliserLogoCabinet() {
        return $this->qWSUtiliserLogoCabinet;
    }

    /**
     * Get the r e q_ demandeur.
     *
     * @return string Returns the r e q_ demandeur.
     */
    public function getREQ_Demandeur() {
        return $this->rEQ_Demandeur;
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
     * Get the rapport q infos.
     *
     * @return string Returns the rapport q infos.
     */
    public function getRapportQInfos() {
        return $this->rapportQInfos;
    }

    /**
     * Get the s m s_ api_ key.
     *
     * @return string Returns the s m s_ api_ key.
     */
    public function getSMS_Api_Key() {
        return $this->sMS_Api_Key;
    }

    /**
     * Get the s m s_ droit acces.
     *
     * @return bool Returns the s m s_ droit acces.
     */
    public function getSMS_DroitAcces() {
        return $this->sMS_DroitAcces;
    }

    /**
     * Get the s m s_ key.
     *
     * @return string Returns the s m s_ key.
     */
    public function getSMS_Key() {
        return $this->sMS_Key;
    }

    /**
     * Get the s m s_ prestataire.
     *
     * @return string Returns the s m s_ prestataire.
     */
    public function getSMS_Prestataire() {
        return $this->sMS_Prestataire;
    }

    /**
     * Get the s m s_ sender.
     *
     * @return string Returns the s m s_ sender.
     */
    public function getSMS_Sender() {
        return $this->sMS_Sender;
    }

    /**
     * Get the s m s_ type.
     *
     * @return int Returns the s m s_ type.
     */
    public function getSMS_Type() {
        return $this->sMS_Type;
    }

    /**
     * Get the s m s_ user_ login.
     *
     * @return string Returns the s m s_ user_ login.
     */
    public function getSMS_User_Login() {
        return $this->sMS_User_Login;
    }

    /**
     * Get the saisie propriete mess.
     *
     * @return int Returns the saisie propriete mess.
     */
    public function getSaisieProprieteMess() {
        return $this->saisieProprieteMess;
    }

    /**
     * Get the saisie regl direct.
     *
     * @return bool Returns the saisie regl direct.
     */
    public function getSaisieReglDirect() {
        return $this->saisieReglDirect;
    }

    /**
     * Get the saisie t p_ ne pas afficher d p.
     *
     * @return bool Returns the saisie t p_ ne pas afficher d p.
     */
    public function getSaisieTP_NePasAfficherDP() {
        return $this->saisieTP_NePasAfficherDP;
    }

    /**
     * Get the saisie t p_ onglet unique d p.
     *
     * @return bool Returns the saisie t p_ onglet unique d p.
     */
    public function getSaisieTP_OngletUniqueDP() {
        return $this->saisieTP_OngletUniqueDP;
    }

    /**
     * Get the saisie t p_ onglet unique t n.
     *
     * @return bool Returns the saisie t p_ onglet unique t n.
     */
    public function getSaisieTP_OngletUniqueTN() {
        return $this->saisieTP_OngletUniqueTN;
    }

    /**
     * Get the saisie temps nb j apres.
     *
     * @return int Returns the saisie temps nb j apres.
     */
    public function getSaisieTempsNbJApres() {
        return $this->saisieTempsNbJApres;
    }

    /**
     * Get the saisie temps nb j avant.
     *
     * @return int Returns the saisie temps nb j avant.
     */
    public function getSaisieTempsNbJAvant() {
        return $this->saisieTempsNbJAvant;
    }

    /**
     * Get the save histo memo2 file.
     *
     * @return bool Returns the save histo memo2 file.
     */
    public function getSaveHistoMemo2File() {
        return $this->saveHistoMemo2File;
    }

    /**
     * Get the sel av lst perso acces gestion modifiables.
     *
     * @return bool Returns the sel av lst perso acces gestion modifiables.
     */
    public function getSelAvLstPersoAccesGestionModifiables() {
        return $this->selAvLstPersoAccesGestionModifiables;
    }

    /**
     * Get the sel av lst perso acces gestionnaire.
     *
     * @return bool Returns the sel av lst perso acces gestionnaire.
     */
    public function getSelAvLstPersoAccesGestionnaire() {
        return $this->selAvLstPersoAccesGestionnaire;
    }

    /**
     * Get the sel av lst perso champs modif.
     *
     * @return bool Returns the sel av lst perso champs modif.
     */
    public function getSelAvLstPersoChampsModif() {
        return $this->selAvLstPersoChampsModif;
    }

    /**
     * Get the sel av lst perso copie colonne.
     *
     * @return bool Returns the sel av lst perso copie colonne.
     */
    public function getSelAvLstPersoCopieColonne() {
        return $this->selAvLstPersoCopieColonne;
    }

    /**
     * Get the sel av lst perso interdire creat.
     *
     * @return bool Returns the sel av lst perso interdire creat.
     */
    public function getSelAvLstPersoInterdireCreat() {
        return $this->selAvLstPersoInterdireCreat;
    }

    /**
     * Get the solde cpta o d.
     *
     * @return bool Returns the solde cpta o d.
     */
    public function getSoldeCptaOD() {
        return $this->soldeCptaOD;
    }

    /**
     * Get the suivi client intitule generic1.
     *
     * @return string Returns the suivi client intitule generic1.
     */
    public function getSuiviClientIntituleGeneric1() {
        return $this->suiviClientIntituleGeneric1;
    }

    /**
     * Get the suivi client intitule generic10.
     *
     * @return string Returns the suivi client intitule generic10.
     */
    public function getSuiviClientIntituleGeneric10() {
        return $this->suiviClientIntituleGeneric10;
    }

    /**
     * Get the suivi client intitule generic2.
     *
     * @return string Returns the suivi client intitule generic2.
     */
    public function getSuiviClientIntituleGeneric2() {
        return $this->suiviClientIntituleGeneric2;
    }

    /**
     * Get the suivi client intitule generic3.
     *
     * @return string Returns the suivi client intitule generic3.
     */
    public function getSuiviClientIntituleGeneric3() {
        return $this->suiviClientIntituleGeneric3;
    }

    /**
     * Get the suivi client intitule generic4.
     *
     * @return string Returns the suivi client intitule generic4.
     */
    public function getSuiviClientIntituleGeneric4() {
        return $this->suiviClientIntituleGeneric4;
    }

    /**
     * Get the suivi client intitule generic5.
     *
     * @return string Returns the suivi client intitule generic5.
     */
    public function getSuiviClientIntituleGeneric5() {
        return $this->suiviClientIntituleGeneric5;
    }

    /**
     * Get the suivi client intitule generic6.
     *
     * @return string Returns the suivi client intitule generic6.
     */
    public function getSuiviClientIntituleGeneric6() {
        return $this->suiviClientIntituleGeneric6;
    }

    /**
     * Get the suivi client intitule generic7.
     *
     * @return string Returns the suivi client intitule generic7.
     */
    public function getSuiviClientIntituleGeneric7() {
        return $this->suiviClientIntituleGeneric7;
    }

    /**
     * Get the suivi client intitule generic8.
     *
     * @return string Returns the suivi client intitule generic8.
     */
    public function getSuiviClientIntituleGeneric8() {
        return $this->suiviClientIntituleGeneric8;
    }

    /**
     * Get the suivi client intitule generic9.
     *
     * @return string Returns the suivi client intitule generic9.
     */
    public function getSuiviClientIntituleGeneric9() {
        return $this->suiviClientIntituleGeneric9;
    }

    /**
     * Get the t p acces encours client.
     *
     * @return bool Returns the t p acces encours client.
     */
    public function getTPAccesEncoursClient() {
        return $this->tPAccesEncoursClient;
    }

    /**
     * Get the t p avancement a la ligne.
     *
     * @return bool Returns the t p avancement a la ligne.
     */
    public function getTPAvancementALaLigne() {
        return $this->tPAvancementALaLigne;
    }

    /**
     * Get the t p interdit qte.
     *
     * @return bool Returns the t p interdit qte.
     */
    public function getTPInterditQte() {
        return $this->tPInterditQte;
    }

    /**
     * Get the t p libelle mission.
     *
     * @return bool Returns the t p libelle mission.
     */
    public function getTPLibelleMission() {
        return $this->tPLibelleMission;
    }

    /**
     * Get the t p limite saisie non operationnel.
     *
     * @return bool Returns the t p limite saisie non operationnel.
     */
    public function getTPLimiteSaisieNonOperationnel() {
        return $this->tPLimiteSaisieNonOperationnel;
    }

    /**
     * Get the t p p u p v123.
     *
     * @return bool Returns the t p p u p v123.
     */
    public function getTPPUPV123() {
        return $this->tPPUPV123;
    }

    /**
     * Get the t p pas mois cloture.
     *
     * @return bool Returns the t p pas mois cloture.
     */
    public function getTPPasMoisCloture() {
        return $this->tPPasMoisCloture;
    }

    /**
     * Get the t p pourcentage non operationnel date.
     *
     * @return DateTime Returns the t p pourcentage non operationnel date.
     */
    public function getTPPourcentageNonOperationnelDate() {
        return $this->tPPourcentageNonOperationnelDate;
    }

    /**
     * Get the t p qte invisible.
     *
     * @return bool Returns the t p qte invisible.
     */
    public function getTPQteInvisible() {
        return $this->tPQteInvisible;
    }

    /**
     * Get the t p s_ num archive.
     *
     * @return string Returns the t p s_ num archive.
     */
    public function getTPS_NumArchive() {
        return $this->tPS_NumArchive;
    }

    /**
     * Get the t p saisie avancement.
     *
     * @return bool Returns the t p saisie avancement.
     */
    public function getTPSaisieAvancement() {
        return $this->tPSaisieAvancement;
    }

    /**
     * Get the trans variantes f a c t_ g i.
     *
     * @return bool Returns the trans variantes f a c t_ g i.
     */
    public function getTransVariantesFACT_GI() {
        return $this->transVariantesFACT_GI;
    }

    /**
     * Get the type affichage solde fourn.
     *
     * @return string Returns the type affichage solde fourn.
     */
    public function getTypeAffichageSoldeFourn() {
        return $this->typeAffichageSoldeFourn;
    }

    /**
     * Get the type frais1.
     *
     * @return bool Returns the type frais1.
     */
    public function getTypeFrais1() {
        return $this->typeFrais1;
    }

    /**
     * Get the type frais2.
     *
     * @return bool Returns the type frais2.
     */
    public function getTypeFrais2() {
        return $this->typeFrais2;
    }

    /**
     * Get the type frais3.
     *
     * @return bool Returns the type frais3.
     */
    public function getTypeFrais3() {
        return $this->typeFrais3;
    }

    /**
     * Get the type saisie taux devises.
     *
     * @return string Returns the type saisie taux devises.
     */
    public function getTypeSaisieTauxDevises() {
        return $this->typeSaisieTauxDevises;
    }

    /**
     * Get the v esur dep aff.
     *
     * @return bool Returns the v esur dep aff.
     */
    public function getVEsurDepAff() {
        return $this->vEsurDepAff;
    }

    /**
     * Get the val auto tarifs transporteurs.
     *
     * @return bool Returns the val auto tarifs transporteurs.
     */
    public function getValAutoTarifsTransporteurs() {
        return $this->valAutoTarifsTransporteurs;
    }

    /**
     * Get the visualisation fiche cabinet.
     *
     * @return bool Returns the visualisation fiche cabinet.
     */
    public function getVisualisationFicheCabinet() {
        return $this->visualisationFicheCabinet;
    }

    /**
     * Get the word acces par q client.
     *
     * @return bool Returns the word acces par q client.
     */
    public function getWordAccesParQClient() {
        return $this->wordAccesParQClient;
    }

    /**
     * Get the e w s cabinet.
     *
     * @return string Returns the e w s cabinet.
     */
    public function geteWSCabinet() {
        return $this->eWSCabinet;
    }

    /**
     * Get the e w s coll id.
     *
     * @return string Returns the e w s coll id.
     */
    public function geteWSCollId() {
        return $this->eWSCollId;
    }

    /**
     * Get the e w s coll mdp.
     *
     * @return string Returns the e w s coll mdp.
     */
    public function geteWSCollMdp() {
        return $this->eWSCollMdp;
    }

    /**
     * Get the e w s srv mdp.
     *
     * @return string Returns the e w s srv mdp.
     */
    public function geteWSSrvMdp() {
        return $this->eWSSrvMdp;
    }

    /**
     * Get the e w s srv name.
     *
     * @return string Returns the e w s srv name.
     */
    public function geteWSSrvName() {
        return $this->eWSSrvName;
    }

    /**
     * Get the e w s srv util.
     *
     * @return string Returns the e w s srv util.
     */
    public function geteWSSrvUtil() {
        return $this->eWSSrvUtil;
    }

    /**
     * Get the lng code article auto.
     *
     * @return int Returns the lng code article auto.
     */
    public function getlngCodeArticleAuto() {
        return $this->lngCodeArticleAuto;
    }

    /**
     * Set the a s p affectation messages.
     *
     * @param string $aSPAffectationMessages The a s p affectation messages.
     * @return Constantes2 Returns this constantes2.
     */
    public function setASPAffectationMessages($aSPAffectationMessages) {
        $this->aSPAffectationMessages = $aSPAffectationMessages;
        return $this;
    }

    /**
     * Set the activation conf2 c m a v cli.
     *
     * @param bool $activationConf2CMAVCli The activation conf2 c m a v cli.
     * @return Constantes2 Returns this constantes2.
     */
    public function setActivationConf2CMAVCli($activationConf2CMAVCli) {
        $this->activationConf2CMAVCli = $activationConf2CMAVCli;
        return $this;
    }

    /**
     * Set the active conf conv col.
     *
     * @param bool $activeConfConvCol The active conf conv col.
     * @return Constantes2 Returns this constantes2.
     */
    public function setActiveConfConvCol($activeConfConvCol) {
        $this->activeConfConvCol = $activeConfConvCol;
        return $this;
    }

    /**
     * Set the activer saisie regl.
     *
     * @param bool $activerSaisieRegl The activer saisie regl.
     * @return Constantes2 Returns this constantes2.
     */
    public function setActiverSaisieRegl($activerSaisieRegl) {
        $this->activerSaisieRegl = $activerSaisieRegl;
        return $this;
    }

    /**
     * Set the affectations cli frn.
     *
     * @param bool $affectationsCliFrn The affectations cli frn.
     * @return Constantes2 Returns this constantes2.
     */
    public function setAffectationsCliFrn($affectationsCliFrn) {
        $this->affectationsCliFrn = $affectationsCliFrn;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool $annulationAffaire The annulation affaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setAnnulationAffaire($annulationAffaire) {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestion modifiables.
     *
     * @param bool $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
     * @return Constantes2 Returns this constantes2.
     */
    public function setArticlesLstPersoAccesGestionModifiables($articlesLstPersoAccesGestionModifiables) {
        $this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestionnaire.
     *
     * @param bool $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setArticlesLstPersoAccesGestionnaire($articlesLstPersoAccesGestionnaire) {
        $this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the articles lst perso champs modif.
     *
     * @param bool $articlesLstPersoChampsModif The articles lst perso champs modif.
     * @return Constantes2 Returns this constantes2.
     */
    public function setArticlesLstPersoChampsModif($articlesLstPersoChampsModif) {
        $this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the articles lst perso copie colonne.
     *
     * @param bool $articlesLstPersoCopieColonne The articles lst perso copie colonne.
     * @return Constantes2 Returns this constantes2.
     */
    public function setArticlesLstPersoCopieColonne($articlesLstPersoCopieColonne) {
        $this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the articles lst perso interdire creat.
     *
     * @param bool $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
     * @return Constantes2 Returns this constantes2.
     */
    public function setArticlesLstPersoInterdireCreat($articlesLstPersoInterdireCreat) {
        $this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the avec heures theo.
     *
     * @param bool $avecHeuresTheo The avec heures theo.
     * @return Constantes2 Returns this constantes2.
     */
    public function setAvecHeuresTheo($avecHeuresTheo) {
        $this->avecHeuresTheo = $avecHeuresTheo;
        return $this;
    }

    /**
     * Set the calcul nombre messages.
     *
     * @param bool $calculNombreMessages The calcul nombre messages.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCalculNombreMessages($calculNombreMessages) {
        $this->calculNombreMessages = $calculNombreMessages;
        return $this;
    }

    /**
     * Set the champs critere article2_1.
     *
     * @param string $champsCritereArticle2_1 The champs critere article2_1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_1($champsCritereArticle2_1) {
        $this->champsCritereArticle2_1 = $champsCritereArticle2_1;
        return $this;
    }

    /**
     * Set the champs critere article2_10.
     *
     * @param string $champsCritereArticle2_10 The champs critere article2_10.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_10($champsCritereArticle2_10) {
        $this->champsCritereArticle2_10 = $champsCritereArticle2_10;
        return $this;
    }

    /**
     * Set the champs critere article2_2.
     *
     * @param string $champsCritereArticle2_2 The champs critere article2_2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_2($champsCritereArticle2_2) {
        $this->champsCritereArticle2_2 = $champsCritereArticle2_2;
        return $this;
    }

    /**
     * Set the champs critere article2_3.
     *
     * @param string $champsCritereArticle2_3 The champs critere article2_3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_3($champsCritereArticle2_3) {
        $this->champsCritereArticle2_3 = $champsCritereArticle2_3;
        return $this;
    }

    /**
     * Set the champs critere article2_4.
     *
     * @param string $champsCritereArticle2_4 The champs critere article2_4.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_4($champsCritereArticle2_4) {
        $this->champsCritereArticle2_4 = $champsCritereArticle2_4;
        return $this;
    }

    /**
     * Set the champs critere article2_5.
     *
     * @param string $champsCritereArticle2_5 The champs critere article2_5.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_5($champsCritereArticle2_5) {
        $this->champsCritereArticle2_5 = $champsCritereArticle2_5;
        return $this;
    }

    /**
     * Set the champs critere article2_6.
     *
     * @param string $champsCritereArticle2_6 The champs critere article2_6.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_6($champsCritereArticle2_6) {
        $this->champsCritereArticle2_6 = $champsCritereArticle2_6;
        return $this;
    }

    /**
     * Set the champs critere article2_7.
     *
     * @param string $champsCritereArticle2_7 The champs critere article2_7.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_7($champsCritereArticle2_7) {
        $this->champsCritereArticle2_7 = $champsCritereArticle2_7;
        return $this;
    }

    /**
     * Set the champs critere article2_8.
     *
     * @param string $champsCritereArticle2_8 The champs critere article2_8.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_8($champsCritereArticle2_8) {
        $this->champsCritereArticle2_8 = $champsCritereArticle2_8;
        return $this;
    }

    /**
     * Set the champs critere article2_9.
     *
     * @param string $champsCritereArticle2_9 The champs critere article2_9.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereArticle2_9($champsCritereArticle2_9) {
        $this->champsCritereArticle2_9 = $champsCritereArticle2_9;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c1.
     *
     * @param string $champsCritereEntPieceAC1 The champs critere ent piece a c1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC1($champsCritereEntPieceAC1) {
        $this->champsCritereEntPieceAC1 = $champsCritereEntPieceAC1;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c10.
     *
     * @param string $champsCritereEntPieceAC10 The champs critere ent piece a c10.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC10($champsCritereEntPieceAC10) {
        $this->champsCritereEntPieceAC10 = $champsCritereEntPieceAC10;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c2.
     *
     * @param string $champsCritereEntPieceAC2 The champs critere ent piece a c2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC2($champsCritereEntPieceAC2) {
        $this->champsCritereEntPieceAC2 = $champsCritereEntPieceAC2;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c3.
     *
     * @param string $champsCritereEntPieceAC3 The champs critere ent piece a c3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC3($champsCritereEntPieceAC3) {
        $this->champsCritereEntPieceAC3 = $champsCritereEntPieceAC3;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c4.
     *
     * @param string $champsCritereEntPieceAC4 The champs critere ent piece a c4.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC4($champsCritereEntPieceAC4) {
        $this->champsCritereEntPieceAC4 = $champsCritereEntPieceAC4;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c5.
     *
     * @param string $champsCritereEntPieceAC5 The champs critere ent piece a c5.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC5($champsCritereEntPieceAC5) {
        $this->champsCritereEntPieceAC5 = $champsCritereEntPieceAC5;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c6.
     *
     * @param string $champsCritereEntPieceAC6 The champs critere ent piece a c6.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC6($champsCritereEntPieceAC6) {
        $this->champsCritereEntPieceAC6 = $champsCritereEntPieceAC6;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c7.
     *
     * @param string $champsCritereEntPieceAC7 The champs critere ent piece a c7.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC7($champsCritereEntPieceAC7) {
        $this->champsCritereEntPieceAC7 = $champsCritereEntPieceAC7;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c8.
     *
     * @param string $champsCritereEntPieceAC8 The champs critere ent piece a c8.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC8($champsCritereEntPieceAC8) {
        $this->champsCritereEntPieceAC8 = $champsCritereEntPieceAC8;
        return $this;
    }

    /**
     * Set the champs critere ent piece a c9.
     *
     * @param string $champsCritereEntPieceAC9 The champs critere ent piece a c9.
     * @return Constantes2 Returns this constantes2.
     */
    public function setChampsCritereEntPieceAC9($champsCritereEntPieceAC9) {
        $this->champsCritereEntPieceAC9 = $champsCritereEntPieceAC9;
        return $this;
    }

    /**
     * Set the cle acces conf.
     *
     * @param string $cleAccesConf The cle acces conf.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCleAccesConf($cleAccesConf) {
        $this->cleAccesConf = $cleAccesConf;
        return $this;
    }

    /**
     * Set the cle acces plaquettes.
     *
     * @param string $cleAccesPlaquettes The cle acces plaquettes.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCleAccesPlaquettes($cleAccesPlaquettes) {
        $this->cleAccesPlaquettes = $cleAccesPlaquettes;
        return $this;
    }

    /**
     * Set the cle acces q admin db.
     *
     * @param string $cleAccesQAdminDb The cle acces q admin db.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCleAccesQAdminDb($cleAccesQAdminDb) {
        $this->cleAccesQAdminDb = $cleAccesQAdminDb;
        return $this;
    }

    /**
     * Set the cloture archivage auto.
     *
     * @param bool $clotureArchivageAuto The cloture archivage auto.
     * @return Constantes2 Returns this constantes2.
     */
    public function setClotureArchivageAuto($clotureArchivageAuto) {
        $this->clotureArchivageAuto = $clotureArchivageAuto;
        return $this;
    }

    /**
     * Set the code client quadratus.
     *
     * @param string $codeClientQuadratus The code client quadratus.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCodeClientQuadratus($codeClientQuadratus) {
        $this->codeClientQuadratus = $codeClientQuadratus;
        return $this;
    }

    /**
     * Set the compteur fil discussion.
     *
     * @param int $compteurFilDiscussion The compteur fil discussion.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCompteurFilDiscussion($compteurFilDiscussion) {
        $this->compteurFilDiscussion = $compteurFilDiscussion;
        return $this;
    }

    /**
     * Set the confidentialite affaire.
     *
     * @param bool $confidentialiteAffaire The confidentialite affaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setConfidentialiteAffaire($confidentialiteAffaire) {
        $this->confidentialiteAffaire = $confidentialiteAffaire;
        return $this;
    }

    /**
     * Set the cout moyen horaire.
     *
     * @param float $coutMoyenHoraire The cout moyen horaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCoutMoyenHoraire($coutMoyenHoraire) {
        $this->coutMoyenHoraire = $coutMoyenHoraire;
        return $this;
    }

    /**
     * Set the create cli1 fact par b l.
     *
     * @param bool $createCli1FactParBL The create cli1 fact par b l.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCreateCli1FactParBL($createCli1FactParBL) {
        $this->createCli1FactParBL = $createCli1FactParBL;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool $creationAffaire The creation affaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setCreationAffaire($creationAffaire) {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the date d h a.
     *
     * @param DateTime $dateDHA The date d h a.
     * @return Constantes2 Returns this constantes2.
     */
    public function setDateDHA(DateTime $dateDHA = null) {
        $this->dateDHA = $dateDHA;
        return $this;
    }

    /**
     * Set the date last exe qpub web.
     *
     * @param DateTime $dateLastExeQpubWeb The date last exe qpub web.
     * @return Constantes2 Returns this constantes2.
     */
    public function setDateLastExeQpubWeb(DateTime $dateLastExeQpubWeb = null) {
        $this->dateLastExeQpubWeb = $dateLastExeQpubWeb;
        return $this;
    }

    /**
     * Set the date p h a.
     *
     * @param DateTime $datePHA The date p h a.
     * @return Constantes2 Returns this constantes2.
     */
    public function setDatePHA(DateTime $datePHA = null) {
        $this->datePHA = $datePHA;
        return $this;
    }

    /**
     * Set the derniere version c d.
     *
     * @param string $derniereVersionCD The derniere version c d.
     * @return Constantes2 Returns this constantes2.
     */
    public function setDerniereVersionCD($derniereVersionCD) {
        $this->derniereVersionCD = $derniereVersionCD;
        return $this;
    }

    /**
     * Set the droit collab visu documents.
     *
     * @param bool $droitCollabVisuDocuments The droit collab visu documents.
     * @return Constantes2 Returns this constantes2.
     */
    public function setDroitCollabVisuDocuments($droitCollabVisuDocuments) {
        $this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
        return $this;
    }

    /**
     * Set the e t e b a c dest message.
     *
     * @param string $eTEBACDestMessage The e t e b a c dest message.
     * @return Constantes2 Returns this constantes2.
     */
    public function setETEBACDestMessage($eTEBACDestMessage) {
        $this->eTEBACDestMessage = $eTEBACDestMessage;
        return $this;
    }

    /**
     * Set the ech detail aff.
     *
     * @param bool $echDetailAff The ech detail aff.
     * @return Constantes2 Returns this constantes2.
     */
    public function setEchDetailAff($echDetailAff) {
        $this->echDetailAff = $echDetailAff;
        return $this;
    }

    /**
     * Set the f g sur cde frn.
     *
     * @param bool $fGSurCdeFrn The f g sur cde frn.
     * @return Constantes2 Returns this constantes2.
     */
    public function setFGSurCdeFrn($fGSurCdeFrn) {
        $this->fGSurCdeFrn = $fGSurCdeFrn;
        return $this;
    }

    /**
     * Set the f gsur a c.
     *
     * @param bool $fGsurAC The f gsur a c.
     * @return Constantes2 Returns this constantes2.
     */
    public function setFGsurAC($fGsurAC) {
        $this->fGsurAC = $fGsurAC;
        return $this;
    }

    /**
     * Set the f gsur m o n f.
     *
     * @param bool $fGsurMONF The f gsur m o n f.
     * @return Constantes2 Returns this constantes2.
     */
    public function setFGsurMONF($fGsurMONF) {
        $this->fGsurMONF = $fGsurMONF;
        return $this;
    }

    /**
     * Set the familles liees.
     *
     * @param bool $famillesLiees The familles liees.
     * @return Constantes2 Returns this constantes2.
     */
    public function setFamillesLiees($famillesLiees) {
        $this->famillesLiees = $famillesLiees;
        return $this;
    }

    /**
     * Set the fiche cli ne pas proposer creation d p d c.
     *
     * @param bool $ficheCliNePasProposerCreationDPDC The fiche cli ne pas proposer creation d p d c.
     * @return Constantes2 Returns this constantes2.
     */
    public function setFicheCliNePasProposerCreationDPDC($ficheCliNePasProposerCreationDPDC) {
        $this->ficheCliNePasProposerCreationDPDC = $ficheCliNePasProposerCreationDPDC;
        return $this;
    }

    /**
     * Set the gestion gammes.
     *
     * @param bool $gestionGammes The gestion gammes.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionGammes($gestionGammes) {
        $this->gestionGammes = $gestionGammes;
        return $this;
    }

    /**
     * Set the gestion pointeuse q c.
     *
     * @param bool $gestionPointeuseQC The gestion pointeuse q c.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionPointeuseQC($gestionPointeuseQC) {
        $this->gestionPointeuseQC = $gestionPointeuseQC;
        return $this;
    }

    /**
     * Set the gestion pointeuse q fact.
     *
     * @param bool $gestionPointeuseQFact The gestion pointeuse q fact.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionPointeuseQFact($gestionPointeuseQFact) {
        $this->gestionPointeuseQFact = $gestionPointeuseQFact;
        return $this;
    }

    /**
     * Set the gestion pointeuse q g i.
     *
     * @param bool $gestionPointeuseQGI The gestion pointeuse q g i.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionPointeuseQGI($gestionPointeuseQGI) {
        $this->gestionPointeuseQGI = $gestionPointeuseQGI;
        return $this;
    }

    /**
     * Set the gestion pointeuse q p.
     *
     * @param bool $gestionPointeuseQP The gestion pointeuse q p.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionPointeuseQP($gestionPointeuseQP) {
        $this->gestionPointeuseQP = $gestionPointeuseQP;
        return $this;
    }

    /**
     * Set the gestion tarifs transporteurs.
     *
     * @param bool $gestionTarifsTransporteurs The gestion tarifs transporteurs.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionTarifsTransporteurs($gestionTarifsTransporteurs) {
        $this->gestionTarifsTransporteurs = $gestionTarifsTransporteurs;
        return $this;
    }

    /**
     * Set the gestion tarifs transporteurs nb dec.
     *
     * @param int $gestionTarifsTransporteursNbDec The gestion tarifs transporteurs nb dec.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionTarifsTransporteursNbDec($gestionTarifsTransporteursNbDec) {
        $this->gestionTarifsTransporteursNbDec = $gestionTarifsTransporteursNbDec;
        return $this;
    }

    /**
     * Set the gestion variantes.
     *
     * @param bool $gestionVariantes The gestion variantes.
     * @return Constantes2 Returns this constantes2.
     */
    public function setGestionVariantes($gestionVariantes) {
        $this->gestionVariantes = $gestionVariantes;
        return $this;
    }

    /**
     * Set the h t avec jours feries.
     *
     * @param bool $hTAvecJoursFeries The h t avec jours feries.
     * @return Constantes2 Returns this constantes2.
     */
    public function setHTAvecJoursFeries($hTAvecJoursFeries) {
        $this->hTAvecJoursFeries = $hTAvecJoursFeries;
        return $this;
    }

    /**
     * Set the h t avec saisie conges.
     *
     * @param bool $hTAvecSaisieConges The h t avec saisie conges.
     * @return Constantes2 Returns this constantes2.
     */
    public function setHTAvecSaisieConges($hTAvecSaisieConges) {
        $this->hTAvecSaisieConges = $hTAvecSaisieConges;
        return $this;
    }

    /**
     * Set the h t avec saisie conges codes clients.
     *
     * @param string $hTAvecSaisieCongesCodesClients The h t avec saisie conges codes clients.
     * @return Constantes2 Returns this constantes2.
     */
    public function setHTAvecSaisieCongesCodesClients($hTAvecSaisieCongesCodesClients) {
        $this->hTAvecSaisieCongesCodesClients = $hTAvecSaisieCongesCodesClients;
        return $this;
    }

    /**
     * Set the h t avec saisie conges codes taches.
     *
     * @param string $hTAvecSaisieCongesCodesTaches The h t avec saisie conges codes taches.
     * @return Constantes2 Returns this constantes2.
     */
    public function setHTAvecSaisieCongesCodesTaches($hTAvecSaisieCongesCodesTaches) {
        $this->hTAvecSaisieCongesCodesTaches = $hTAvecSaisieCongesCodesTaches;
        return $this;
    }

    /**
     * Set the i p prive q w s.
     *
     * @param string $iPPriveQWS The i p prive q w s.
     * @return Constantes2 Returns this constantes2.
     */
    public function setIPPriveQWS($iPPriveQWS) {
        $this->iPPriveQWS = $iPPriveQWS;
        return $this;
    }

    /**
     * Set the increm auto article.
     *
     * @param bool $incremAutoArticle The increm auto article.
     * @return Constantes2 Returns this constantes2.
     */
    public function setIncremAutoArticle($incremAutoArticle) {
        $this->incremAutoArticle = $incremAutoArticle;
        return $this;
    }

    /**
     * Set the interdire acces archives cpta.
     *
     * @param bool $interdireAccesArchivesCpta The interdire acces archives cpta.
     * @return Constantes2 Returns this constantes2.
     */
    public function setInterdireAccesArchivesCpta($interdireAccesArchivesCpta) {
        $this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
        return $this;
    }

    /**
     * Set the interdire acces archives paie.
     *
     * @param bool $interdireAccesArchivesPaie The interdire acces archives paie.
     * @return Constantes2 Returns this constantes2.
     */
    public function setInterdireAccesArchivesPaie($interdireAccesArchivesPaie) {
        $this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
        return $this;
    }

    /**
     * Set the interdire acces edition balance.
     *
     * @param bool $interdireAccesEditionBalance The interdire acces edition balance.
     * @return Constantes2 Returns this constantes2.
     */
    public function setInterdireAccesEditionBalance($interdireAccesEditionBalance) {
        $this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
        return $this;
    }

    /**
     * Set the interdire acces supp doc arch.
     *
     * @param bool $interdireAccesSuppDocArch The interdire acces supp doc arch.
     * @return Constantes2 Returns this constantes2.
     */
    public function setInterdireAccesSuppDocArch($interdireAccesSuppDocArch) {
        $this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
        return $this;
    }

    /**
     * Set the interdire publi doc web.
     *
     * @param bool $interdirePubliDocWeb The interdire publi doc web.
     * @return Constantes2 Returns this constantes2.
     */
    public function setInterdirePubliDocWeb($interdirePubliDocWeb) {
        $this->interdirePubliDocWeb = $interdirePubliDocWeb;
        return $this;
    }

    /**
     * Set the liaison t d a.
     *
     * @param bool $liaisonTDA The liaison t d a.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLiaisonTDA($liaisonTDA) {
        $this->liaisonTDA = $liaisonTDA;
        return $this;
    }

    /**
     * Set the lib affectation frn1.
     *
     * @param string $libAffectationFrn1 The lib affectation frn1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn1($libAffectationFrn1) {
        $this->libAffectationFrn1 = $libAffectationFrn1;
        return $this;
    }

    /**
     * Set the lib affectation frn2.
     *
     * @param string $libAffectationFrn2 The lib affectation frn2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn2($libAffectationFrn2) {
        $this->libAffectationFrn2 = $libAffectationFrn2;
        return $this;
    }

    /**
     * Set the lib affectation frn3.
     *
     * @param string $libAffectationFrn3 The lib affectation frn3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn3($libAffectationFrn3) {
        $this->libAffectationFrn3 = $libAffectationFrn3;
        return $this;
    }

    /**
     * Set the lib affectation frn4.
     *
     * @param string $libAffectationFrn4 The lib affectation frn4.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn4($libAffectationFrn4) {
        $this->libAffectationFrn4 = $libAffectationFrn4;
        return $this;
    }

    /**
     * Set the lib affectation frn5.
     *
     * @param string $libAffectationFrn5 The lib affectation frn5.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn5($libAffectationFrn5) {
        $this->libAffectationFrn5 = $libAffectationFrn5;
        return $this;
    }

    /**
     * Set the lib affectation frn6.
     *
     * @param string $libAffectationFrn6 The lib affectation frn6.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn6($libAffectationFrn6) {
        $this->libAffectationFrn6 = $libAffectationFrn6;
        return $this;
    }

    /**
     * Set the lib affectation frn7.
     *
     * @param string $libAffectationFrn7 The lib affectation frn7.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibAffectationFrn7($libAffectationFrn7) {
        $this->libAffectationFrn7 = $libAffectationFrn7;
        return $this;
    }

    /**
     * Set the lib critere article2_1.
     *
     * @param string $libCritereArticle2_1 The lib critere article2_1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_1($libCritereArticle2_1) {
        $this->libCritereArticle2_1 = $libCritereArticle2_1;
        return $this;
    }

    /**
     * Set the lib critere article2_10.
     *
     * @param string $libCritereArticle2_10 The lib critere article2_10.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_10($libCritereArticle2_10) {
        $this->libCritereArticle2_10 = $libCritereArticle2_10;
        return $this;
    }

    /**
     * Set the lib critere article2_2.
     *
     * @param string $libCritereArticle2_2 The lib critere article2_2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_2($libCritereArticle2_2) {
        $this->libCritereArticle2_2 = $libCritereArticle2_2;
        return $this;
    }

    /**
     * Set the lib critere article2_3.
     *
     * @param string $libCritereArticle2_3 The lib critere article2_3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_3($libCritereArticle2_3) {
        $this->libCritereArticle2_3 = $libCritereArticle2_3;
        return $this;
    }

    /**
     * Set the lib critere article2_4.
     *
     * @param string $libCritereArticle2_4 The lib critere article2_4.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_4($libCritereArticle2_4) {
        $this->libCritereArticle2_4 = $libCritereArticle2_4;
        return $this;
    }

    /**
     * Set the lib critere article2_5.
     *
     * @param string $libCritereArticle2_5 The lib critere article2_5.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_5($libCritereArticle2_5) {
        $this->libCritereArticle2_5 = $libCritereArticle2_5;
        return $this;
    }

    /**
     * Set the lib critere article2_6.
     *
     * @param string $libCritereArticle2_6 The lib critere article2_6.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_6($libCritereArticle2_6) {
        $this->libCritereArticle2_6 = $libCritereArticle2_6;
        return $this;
    }

    /**
     * Set the lib critere article2_7.
     *
     * @param string $libCritereArticle2_7 The lib critere article2_7.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_7($libCritereArticle2_7) {
        $this->libCritereArticle2_7 = $libCritereArticle2_7;
        return $this;
    }

    /**
     * Set the lib critere article2_8.
     *
     * @param string $libCritereArticle2_8 The lib critere article2_8.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_8($libCritereArticle2_8) {
        $this->libCritereArticle2_8 = $libCritereArticle2_8;
        return $this;
    }

    /**
     * Set the lib critere article2_9.
     *
     * @param string $libCritereArticle2_9 The lib critere article2_9.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereArticle2_9($libCritereArticle2_9) {
        $this->libCritereArticle2_9 = $libCritereArticle2_9;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c1.
     *
     * @param string $libCritereEntPieceAC1 The lib critere ent piece a c1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC1($libCritereEntPieceAC1) {
        $this->libCritereEntPieceAC1 = $libCritereEntPieceAC1;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c10.
     *
     * @param string $libCritereEntPieceAC10 The lib critere ent piece a c10.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC10($libCritereEntPieceAC10) {
        $this->libCritereEntPieceAC10 = $libCritereEntPieceAC10;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c2.
     *
     * @param string $libCritereEntPieceAC2 The lib critere ent piece a c2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC2($libCritereEntPieceAC2) {
        $this->libCritereEntPieceAC2 = $libCritereEntPieceAC2;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c3.
     *
     * @param string $libCritereEntPieceAC3 The lib critere ent piece a c3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC3($libCritereEntPieceAC3) {
        $this->libCritereEntPieceAC3 = $libCritereEntPieceAC3;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c4.
     *
     * @param string $libCritereEntPieceAC4 The lib critere ent piece a c4.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC4($libCritereEntPieceAC4) {
        $this->libCritereEntPieceAC4 = $libCritereEntPieceAC4;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c5.
     *
     * @param string $libCritereEntPieceAC5 The lib critere ent piece a c5.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC5($libCritereEntPieceAC5) {
        $this->libCritereEntPieceAC5 = $libCritereEntPieceAC5;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c6.
     *
     * @param string $libCritereEntPieceAC6 The lib critere ent piece a c6.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC6($libCritereEntPieceAC6) {
        $this->libCritereEntPieceAC6 = $libCritereEntPieceAC6;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c7.
     *
     * @param string $libCritereEntPieceAC7 The lib critere ent piece a c7.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC7($libCritereEntPieceAC7) {
        $this->libCritereEntPieceAC7 = $libCritereEntPieceAC7;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c8.
     *
     * @param string $libCritereEntPieceAC8 The lib critere ent piece a c8.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC8($libCritereEntPieceAC8) {
        $this->libCritereEntPieceAC8 = $libCritereEntPieceAC8;
        return $this;
    }

    /**
     * Set the lib critere ent piece a c9.
     *
     * @param string $libCritereEntPieceAC9 The lib critere ent piece a c9.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibCritereEntPieceAC9($libCritereEntPieceAC9) {
        $this->libCritereEntPieceAC9 = $libCritereEntPieceAC9;
        return $this;
    }

    /**
     * Set the lib frais1.
     *
     * @param string $libFrais1 The lib frais1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibFrais1($libFrais1) {
        $this->libFrais1 = $libFrais1;
        return $this;
    }

    /**
     * Set the lib frais2.
     *
     * @param string $libFrais2 The lib frais2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibFrais2($libFrais2) {
        $this->libFrais2 = $libFrais2;
        return $this;
    }

    /**
     * Set the lib frais3.
     *
     * @param string $libFrais3 The lib frais3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibFrais3($libFrais3) {
        $this->libFrais3 = $libFrais3;
        return $this;
    }

    /**
     * Set the libelle gamme.
     *
     * @param string $libelleGamme The libelle gamme.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibelleGamme($libelleGamme) {
        $this->libelleGamme = $libelleGamme;
        return $this;
    }

    /**
     * Set the libelle variante.
     *
     * @param string $libelleVariante The libelle variante.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLibelleVariante($libelleVariante) {
        $this->libelleVariante = $libelleVariante;
        return $this;
    }

    /**
     * Set the longueur num aff.
     *
     * @param int $longueurNumAff The longueur num aff.
     * @return Constantes2 Returns this constantes2.
     */
    public function setLongueurNumAff($longueurNumAff) {
        $this->longueurNumAff = $longueurNumAff;
        return $this;
    }

    /**
     * Set the maj codes activite c g a.
     *
     * @param string $majCodesActiviteCGA The maj codes activite c g a.
     * @return Constantes2 Returns this constantes2.
     */
    public function setMajCodesActiviteCGA($majCodesActiviteCGA) {
        $this->majCodesActiviteCGA = $majCodesActiviteCGA;
        return $this;
    }

    /**
     * Set the mess a s p_ o d.
     *
     * @param bool $messASP_OD The mess a s p_ o d.
     * @return Constantes2 Returns this constantes2.
     */
    public function setMessASP_OD($messASP_OD) {
        $this->messASP_OD = $messASP_OD;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string $modifAffaire The modif affaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setModifAffaire($modifAffaire) {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif droits a s p.
     *
     * @param bool $modifDroitsASP The modif droits a s p.
     * @return Constantes2 Returns this constantes2.
     */
    public function setModifDroitsASP($modifDroitsASP) {
        $this->modifDroitsASP = $modifDroitsASP;
        return $this;
    }

    /**
     * Set the nb max gamme.
     *
     * @param int $nbMaxGamme The nb max gamme.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNbMaxGamme($nbMaxGamme) {
        $this->nbMaxGamme = $nbMaxGamme;
        return $this;
    }

    /**
     * Set the ne pas creer cpt cli.
     *
     * @param bool $nePasCreerCptCli The ne pas creer cpt cli.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNePasCreerCptCli($nePasCreerCptCli) {
        $this->nePasCreerCptCli = $nePasCreerCptCli;
        return $this;
    }

    /**
     * Set the ne pas creer cpt frn.
     *
     * @param bool $nePasCreerCptFrn The ne pas creer cpt frn.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNePasCreerCptFrn($nePasCreerCptFrn) {
        $this->nePasCreerCptFrn = $nePasCreerCptFrn;
        return $this;
    }

    /**
     * Set the new db infos.
     *
     * @param bool $newDbInfos The new db infos.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNewDbInfos($newDbInfos) {
        $this->newDbInfos = $newDbInfos;
        return $this;
    }

    /**
     * Set the new q bureau.
     *
     * @param bool $newQBureau The new q bureau.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNewQBureau($newQBureau) {
        $this->newQBureau = $newQBureau;
        return $this;
    }

    /**
     * Set the no doss fact cab.
     *
     * @param string $noDossFactCab The no doss fact cab.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNoDossFactCab($noDossFactCab) {
        $this->noDossFactCab = $noDossFactCab;
        return $this;
    }

    /**
     * Set the p m e dossier rattachement.
     *
     * @param string $pMEDossierRattachement The p m e dossier rattachement.
     * @return Constantes2 Returns this constantes2.
     */
    public function setPMEDossierRattachement($pMEDossierRattachement) {
        $this->pMEDossierRattachement = $pMEDossierRattachement;
        return $this;
    }

    /**
     * Set the pas de lien comptabilite.
     *
     * @param bool $pasDeLienComptabilite The pas de lien comptabilite.
     * @return Constantes2 Returns this constantes2.
     */
    public function setPasDeLienComptabilite($pasDeLienComptabilite) {
        $this->pasDeLienComptabilite = $pasDeLienComptabilite;
        return $this;
    }

    /**
     * Set the prefixe code client.
     *
     * @param string $prefixeCodeClient The prefixe code client.
     * @return Constantes2 Returns this constantes2.
     */
    public function setPrefixeCodeClient($prefixeCodeClient) {
        $this->prefixeCodeClient = $prefixeCodeClient;
        return $this;
    }

    /**
     * Set the prochain code client.
     *
     * @param string $prochainCodeClient The prochain code client.
     * @return Constantes2 Returns this constantes2.
     */
    public function setProchainCodeClient($prochainCodeClient) {
        $this->prochainCodeClient = $prochainCodeClient;
        return $this;
    }

    /**
     * Set the proxy actif.
     *
     * @param bool $proxyActif The proxy actif.
     * @return Constantes2 Returns this constantes2.
     */
    public function setProxyActif($proxyActif) {
        $this->proxyActif = $proxyActif;
        return $this;
    }

    /**
     * Set the proxy adresse.
     *
     * @param string $proxyAdresse The proxy adresse.
     * @return Constantes2 Returns this constantes2.
     */
    public function setProxyAdresse($proxyAdresse) {
        $this->proxyAdresse = $proxyAdresse;
        return $this;
    }

    /**
     * Set the proxy port.
     *
     * @param int $proxyPort The proxy port.
     * @return Constantes2 Returns this constantes2.
     */
    public function setProxyPort($proxyPort) {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Set the q pub web code collaborateur dest.
     *
     * @param string $qPubWebCodeCollaborateurDest The q pub web code collaborateur dest.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQPubWebCodeCollaborateurDest($qPubWebCodeCollaborateurDest) {
        $this->qPubWebCodeCollaborateurDest = $qPubWebCodeCollaborateurDest;
        return $this;
    }

    /**
     * Set the q w s chemin logo.
     *
     * @param string $qWSCheminLogo The q w s chemin logo.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQWSCheminLogo($qWSCheminLogo) {
        $this->qWSCheminLogo = $qWSCheminLogo;
        return $this;
    }

    /**
     * Set the q w s code i p l.
     *
     * @param string $qWSCodeIPL The q w s code i p l.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQWSCodeIPL($qWSCodeIPL) {
        $this->qWSCodeIPL = $qWSCodeIPL;
        return $this;
    }

    /**
     * Set the q w s http securise.
     *
     * @param bool $qWSHttpSecurise The q w s http securise.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQWSHttpSecurise($qWSHttpSecurise) {
        $this->qWSHttpSecurise = $qWSHttpSecurise;
        return $this;
    }

    /**
     * Set the q w s i p l.
     *
     * @param string $qWSIPL The q w s i p l.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQWSIPL($qWSIPL) {
        $this->qWSIPL = $qWSIPL;
        return $this;
    }

    /**
     * Set the q w s nom produit.
     *
     * @param string $qWSNomProduit The q w s nom produit.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQWSNomProduit($qWSNomProduit) {
        $this->qWSNomProduit = $qWSNomProduit;
        return $this;
    }

    /**
     * Set the q w s utiliser logo cabinet.
     *
     * @param bool $qWSUtiliserLogoCabinet The q w s utiliser logo cabinet.
     * @return Constantes2 Returns this constantes2.
     */
    public function setQWSUtiliserLogoCabinet($qWSUtiliserLogoCabinet) {
        $this->qWSUtiliserLogoCabinet = $qWSUtiliserLogoCabinet;
        return $this;
    }

    /**
     * Set the r e q_ demandeur.
     *
     * @param string $rEQ_Demandeur The r e q_ demandeur.
     * @return Constantes2 Returns this constantes2.
     */
    public function setREQ_Demandeur($rEQ_Demandeur) {
        $this->rEQ_Demandeur = $rEQ_Demandeur;
        return $this;
    }

    /**
     * Set the rac data paie.
     *
     * @param string $racDataPaie The rac data paie.
     * @return Constantes2 Returns this constantes2.
     */
    public function setRacDataPaie($racDataPaie) {
        $this->racDataPaie = $racDataPaie;
        return $this;
    }

    /**
     * Set the rapport q infos.
     *
     * @param string $rapportQInfos The rapport q infos.
     * @return Constantes2 Returns this constantes2.
     */
    public function setRapportQInfos($rapportQInfos) {
        $this->rapportQInfos = $rapportQInfos;
        return $this;
    }

    /**
     * Set the s m s_ api_ key.
     *
     * @param string $sMS_Api_Key The s m s_ api_ key.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_Api_Key($sMS_Api_Key) {
        $this->sMS_Api_Key = $sMS_Api_Key;
        return $this;
    }

    /**
     * Set the s m s_ droit acces.
     *
     * @param bool $sMS_DroitAcces The s m s_ droit acces.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_DroitAcces($sMS_DroitAcces) {
        $this->sMS_DroitAcces = $sMS_DroitAcces;
        return $this;
    }

    /**
     * Set the s m s_ key.
     *
     * @param string $sMS_Key The s m s_ key.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_Key($sMS_Key) {
        $this->sMS_Key = $sMS_Key;
        return $this;
    }

    /**
     * Set the s m s_ prestataire.
     *
     * @param string $sMS_Prestataire The s m s_ prestataire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_Prestataire($sMS_Prestataire) {
        $this->sMS_Prestataire = $sMS_Prestataire;
        return $this;
    }

    /**
     * Set the s m s_ sender.
     *
     * @param string $sMS_Sender The s m s_ sender.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_Sender($sMS_Sender) {
        $this->sMS_Sender = $sMS_Sender;
        return $this;
    }

    /**
     * Set the s m s_ type.
     *
     * @param int $sMS_Type The s m s_ type.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_Type($sMS_Type) {
        $this->sMS_Type = $sMS_Type;
        return $this;
    }

    /**
     * Set the s m s_ user_ login.
     *
     * @param string $sMS_User_Login The s m s_ user_ login.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSMS_User_Login($sMS_User_Login) {
        $this->sMS_User_Login = $sMS_User_Login;
        return $this;
    }

    /**
     * Set the saisie propriete mess.
     *
     * @param int $saisieProprieteMess The saisie propriete mess.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieProprieteMess($saisieProprieteMess) {
        $this->saisieProprieteMess = $saisieProprieteMess;
        return $this;
    }

    /**
     * Set the saisie regl direct.
     *
     * @param bool $saisieReglDirect The saisie regl direct.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieReglDirect($saisieReglDirect) {
        $this->saisieReglDirect = $saisieReglDirect;
        return $this;
    }

    /**
     * Set the saisie t p_ ne pas afficher d p.
     *
     * @param bool $saisieTP_NePasAfficherDP The saisie t p_ ne pas afficher d p.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieTP_NePasAfficherDP($saisieTP_NePasAfficherDP) {
        $this->saisieTP_NePasAfficherDP = $saisieTP_NePasAfficherDP;
        return $this;
    }

    /**
     * Set the saisie t p_ onglet unique d p.
     *
     * @param bool $saisieTP_OngletUniqueDP The saisie t p_ onglet unique d p.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieTP_OngletUniqueDP($saisieTP_OngletUniqueDP) {
        $this->saisieTP_OngletUniqueDP = $saisieTP_OngletUniqueDP;
        return $this;
    }

    /**
     * Set the saisie t p_ onglet unique t n.
     *
     * @param bool $saisieTP_OngletUniqueTN The saisie t p_ onglet unique t n.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieTP_OngletUniqueTN($saisieTP_OngletUniqueTN) {
        $this->saisieTP_OngletUniqueTN = $saisieTP_OngletUniqueTN;
        return $this;
    }

    /**
     * Set the saisie temps nb j apres.
     *
     * @param int $saisieTempsNbJApres The saisie temps nb j apres.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieTempsNbJApres($saisieTempsNbJApres) {
        $this->saisieTempsNbJApres = $saisieTempsNbJApres;
        return $this;
    }

    /**
     * Set the saisie temps nb j avant.
     *
     * @param int $saisieTempsNbJAvant The saisie temps nb j avant.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaisieTempsNbJAvant($saisieTempsNbJAvant) {
        $this->saisieTempsNbJAvant = $saisieTempsNbJAvant;
        return $this;
    }

    /**
     * Set the save histo memo2 file.
     *
     * @param bool $saveHistoMemo2File The save histo memo2 file.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSaveHistoMemo2File($saveHistoMemo2File) {
        $this->saveHistoMemo2File = $saveHistoMemo2File;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestion modifiables.
     *
     * @param bool $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSelAvLstPersoAccesGestionModifiables($selAvLstPersoAccesGestionModifiables) {
        $this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestionnaire.
     *
     * @param bool $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSelAvLstPersoAccesGestionnaire($selAvLstPersoAccesGestionnaire) {
        $this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the sel av lst perso champs modif.
     *
     * @param bool $selAvLstPersoChampsModif The sel av lst perso champs modif.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSelAvLstPersoChampsModif($selAvLstPersoChampsModif) {
        $this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the sel av lst perso copie colonne.
     *
     * @param bool $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSelAvLstPersoCopieColonne($selAvLstPersoCopieColonne) {
        $this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the sel av lst perso interdire creat.
     *
     * @param bool $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSelAvLstPersoInterdireCreat($selAvLstPersoInterdireCreat) {
        $this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the solde cpta o d.
     *
     * @param bool $soldeCptaOD The solde cpta o d.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSoldeCptaOD($soldeCptaOD) {
        $this->soldeCptaOD = $soldeCptaOD;
        return $this;
    }

    /**
     * Set the suivi client intitule generic1.
     *
     * @param string $suiviClientIntituleGeneric1 The suivi client intitule generic1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric1($suiviClientIntituleGeneric1) {
        $this->suiviClientIntituleGeneric1 = $suiviClientIntituleGeneric1;
        return $this;
    }

    /**
     * Set the suivi client intitule generic10.
     *
     * @param string $suiviClientIntituleGeneric10 The suivi client intitule generic10.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric10($suiviClientIntituleGeneric10) {
        $this->suiviClientIntituleGeneric10 = $suiviClientIntituleGeneric10;
        return $this;
    }

    /**
     * Set the suivi client intitule generic2.
     *
     * @param string $suiviClientIntituleGeneric2 The suivi client intitule generic2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric2($suiviClientIntituleGeneric2) {
        $this->suiviClientIntituleGeneric2 = $suiviClientIntituleGeneric2;
        return $this;
    }

    /**
     * Set the suivi client intitule generic3.
     *
     * @param string $suiviClientIntituleGeneric3 The suivi client intitule generic3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric3($suiviClientIntituleGeneric3) {
        $this->suiviClientIntituleGeneric3 = $suiviClientIntituleGeneric3;
        return $this;
    }

    /**
     * Set the suivi client intitule generic4.
     *
     * @param string $suiviClientIntituleGeneric4 The suivi client intitule generic4.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric4($suiviClientIntituleGeneric4) {
        $this->suiviClientIntituleGeneric4 = $suiviClientIntituleGeneric4;
        return $this;
    }

    /**
     * Set the suivi client intitule generic5.
     *
     * @param string $suiviClientIntituleGeneric5 The suivi client intitule generic5.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric5($suiviClientIntituleGeneric5) {
        $this->suiviClientIntituleGeneric5 = $suiviClientIntituleGeneric5;
        return $this;
    }

    /**
     * Set the suivi client intitule generic6.
     *
     * @param string $suiviClientIntituleGeneric6 The suivi client intitule generic6.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric6($suiviClientIntituleGeneric6) {
        $this->suiviClientIntituleGeneric6 = $suiviClientIntituleGeneric6;
        return $this;
    }

    /**
     * Set the suivi client intitule generic7.
     *
     * @param string $suiviClientIntituleGeneric7 The suivi client intitule generic7.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric7($suiviClientIntituleGeneric7) {
        $this->suiviClientIntituleGeneric7 = $suiviClientIntituleGeneric7;
        return $this;
    }

    /**
     * Set the suivi client intitule generic8.
     *
     * @param string $suiviClientIntituleGeneric8 The suivi client intitule generic8.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric8($suiviClientIntituleGeneric8) {
        $this->suiviClientIntituleGeneric8 = $suiviClientIntituleGeneric8;
        return $this;
    }

    /**
     * Set the suivi client intitule generic9.
     *
     * @param string $suiviClientIntituleGeneric9 The suivi client intitule generic9.
     * @return Constantes2 Returns this constantes2.
     */
    public function setSuiviClientIntituleGeneric9($suiviClientIntituleGeneric9) {
        $this->suiviClientIntituleGeneric9 = $suiviClientIntituleGeneric9;
        return $this;
    }

    /**
     * Set the t p acces encours client.
     *
     * @param bool $tPAccesEncoursClient The t p acces encours client.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPAccesEncoursClient($tPAccesEncoursClient) {
        $this->tPAccesEncoursClient = $tPAccesEncoursClient;
        return $this;
    }

    /**
     * Set the t p avancement a la ligne.
     *
     * @param bool $tPAvancementALaLigne The t p avancement a la ligne.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPAvancementALaLigne($tPAvancementALaLigne) {
        $this->tPAvancementALaLigne = $tPAvancementALaLigne;
        return $this;
    }

    /**
     * Set the t p interdit qte.
     *
     * @param bool $tPInterditQte The t p interdit qte.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPInterditQte($tPInterditQte) {
        $this->tPInterditQte = $tPInterditQte;
        return $this;
    }

    /**
     * Set the t p libelle mission.
     *
     * @param bool $tPLibelleMission The t p libelle mission.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPLibelleMission($tPLibelleMission) {
        $this->tPLibelleMission = $tPLibelleMission;
        return $this;
    }

    /**
     * Set the t p limite saisie non operationnel.
     *
     * @param bool $tPLimiteSaisieNonOperationnel The t p limite saisie non operationnel.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPLimiteSaisieNonOperationnel($tPLimiteSaisieNonOperationnel) {
        $this->tPLimiteSaisieNonOperationnel = $tPLimiteSaisieNonOperationnel;
        return $this;
    }

    /**
     * Set the t p p u p v123.
     *
     * @param bool $tPPUPV123 The t p p u p v123.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPPUPV123($tPPUPV123) {
        $this->tPPUPV123 = $tPPUPV123;
        return $this;
    }

    /**
     * Set the t p pas mois cloture.
     *
     * @param bool $tPPasMoisCloture The t p pas mois cloture.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPPasMoisCloture($tPPasMoisCloture) {
        $this->tPPasMoisCloture = $tPPasMoisCloture;
        return $this;
    }

    /**
     * Set the t p pourcentage non operationnel date.
     *
     * @param DateTime $tPPourcentageNonOperationnelDate The t p pourcentage non operationnel date.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPPourcentageNonOperationnelDate(DateTime $tPPourcentageNonOperationnelDate = null) {
        $this->tPPourcentageNonOperationnelDate = $tPPourcentageNonOperationnelDate;
        return $this;
    }

    /**
     * Set the t p qte invisible.
     *
     * @param bool $tPQteInvisible The t p qte invisible.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPQteInvisible($tPQteInvisible) {
        $this->tPQteInvisible = $tPQteInvisible;
        return $this;
    }

    /**
     * Set the t p s_ num archive.
     *
     * @param string $tPS_NumArchive The t p s_ num archive.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPS_NumArchive($tPS_NumArchive) {
        $this->tPS_NumArchive = $tPS_NumArchive;
        return $this;
    }

    /**
     * Set the t p saisie avancement.
     *
     * @param bool $tPSaisieAvancement The t p saisie avancement.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTPSaisieAvancement($tPSaisieAvancement) {
        $this->tPSaisieAvancement = $tPSaisieAvancement;
        return $this;
    }

    /**
     * Set the trans variantes f a c t_ g i.
     *
     * @param bool $transVariantesFACT_GI The trans variantes f a c t_ g i.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTransVariantesFACT_GI($transVariantesFACT_GI) {
        $this->transVariantesFACT_GI = $transVariantesFACT_GI;
        return $this;
    }

    /**
     * Set the type affichage solde fourn.
     *
     * @param string $typeAffichageSoldeFourn The type affichage solde fourn.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTypeAffichageSoldeFourn($typeAffichageSoldeFourn) {
        $this->typeAffichageSoldeFourn = $typeAffichageSoldeFourn;
        return $this;
    }

    /**
     * Set the type frais1.
     *
     * @param bool $typeFrais1 The type frais1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTypeFrais1($typeFrais1) {
        $this->typeFrais1 = $typeFrais1;
        return $this;
    }

    /**
     * Set the type frais2.
     *
     * @param bool $typeFrais2 The type frais2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTypeFrais2($typeFrais2) {
        $this->typeFrais2 = $typeFrais2;
        return $this;
    }

    /**
     * Set the type frais3.
     *
     * @param bool $typeFrais3 The type frais3.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTypeFrais3($typeFrais3) {
        $this->typeFrais3 = $typeFrais3;
        return $this;
    }

    /**
     * Set the type saisie taux devises.
     *
     * @param string $typeSaisieTauxDevises The type saisie taux devises.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTypeSaisieTauxDevises($typeSaisieTauxDevises) {
        $this->typeSaisieTauxDevises = $typeSaisieTauxDevises;
        return $this;
    }

    /**
     * Set the v esur dep aff.
     *
     * @param bool $vEsurDepAff The v esur dep aff.
     * @return Constantes2 Returns this constantes2.
     */
    public function setVEsurDepAff($vEsurDepAff) {
        $this->vEsurDepAff = $vEsurDepAff;
        return $this;
    }

    /**
     * Set the val auto tarifs transporteurs.
     *
     * @param bool $valAutoTarifsTransporteurs The val auto tarifs transporteurs.
     * @return Constantes2 Returns this constantes2.
     */
    public function setValAutoTarifsTransporteurs($valAutoTarifsTransporteurs) {
        $this->valAutoTarifsTransporteurs = $valAutoTarifsTransporteurs;
        return $this;
    }

    /**
     * Set the visualisation fiche cabinet.
     *
     * @param bool $visualisationFicheCabinet The visualisation fiche cabinet.
     * @return Constantes2 Returns this constantes2.
     */
    public function setVisualisationFicheCabinet($visualisationFicheCabinet) {
        $this->visualisationFicheCabinet = $visualisationFicheCabinet;
        return $this;
    }

    /**
     * Set the word acces par q client.
     *
     * @param bool $wordAccesParQClient The word acces par q client.
     * @return Constantes2 Returns this constantes2.
     */
    public function setWordAccesParQClient($wordAccesParQClient) {
        $this->wordAccesParQClient = $wordAccesParQClient;
        return $this;
    }

    /**
     * Set the e w s cabinet.
     *
     * @param string $eWSCabinet The e w s cabinet.
     * @return Constantes2 Returns this constantes2.
     */
    public function seteWSCabinet($eWSCabinet) {
        $this->eWSCabinet = $eWSCabinet;
        return $this;
    }

    /**
     * Set the e w s coll id.
     *
     * @param string $eWSCollId The e w s coll id.
     * @return Constantes2 Returns this constantes2.
     */
    public function seteWSCollId($eWSCollId) {
        $this->eWSCollId = $eWSCollId;
        return $this;
    }

    /**
     * Set the e w s coll mdp.
     *
     * @param string $eWSCollMdp The e w s coll mdp.
     * @return Constantes2 Returns this constantes2.
     */
    public function seteWSCollMdp($eWSCollMdp) {
        $this->eWSCollMdp = $eWSCollMdp;
        return $this;
    }

    /**
     * Set the e w s srv mdp.
     *
     * @param string $eWSSrvMdp The e w s srv mdp.
     * @return Constantes2 Returns this constantes2.
     */
    public function seteWSSrvMdp($eWSSrvMdp) {
        $this->eWSSrvMdp = $eWSSrvMdp;
        return $this;
    }

    /**
     * Set the e w s srv name.
     *
     * @param string $eWSSrvName The e w s srv name.
     * @return Constantes2 Returns this constantes2.
     */
    public function seteWSSrvName($eWSSrvName) {
        $this->eWSSrvName = $eWSSrvName;
        return $this;
    }

    /**
     * Set the e w s srv util.
     *
     * @param string $eWSSrvUtil The e w s srv util.
     * @return Constantes2 Returns this constantes2.
     */
    public function seteWSSrvUtil($eWSSrvUtil) {
        $this->eWSSrvUtil = $eWSSrvUtil;
        return $this;
    }

    /**
     * Set the lng code article auto.
     *
     * @param int $lngCodeArticleAuto The lng code article auto.
     * @return Constantes2 Returns this constantes2.
     */
    public function setlngCodeArticleAuto($lngCodeArticleAuto) {
        $this->lngCodeArticleAuto = $lngCodeArticleAuto;
        return $this;
    }
}
