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
 * Constantes2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Constantes2 {

    /**
     * Activation conf2 cmav cli.
     *
     * @var bool
     */
    private $activationConf2CmavCli;

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
     * Asp affectation messages.
     *
     * @var string
     */
    private $aspAffectationMessages;

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
     * Champs critere article21.
     *
     * @var string
     */
    private $champsCritereArticle21;

    /**
     * Champs critere article210.
     *
     * @var string
     */
    private $champsCritereArticle210;

    /**
     * Champs critere article22.
     *
     * @var string
     */
    private $champsCritereArticle22;

    /**
     * Champs critere article23.
     *
     * @var string
     */
    private $champsCritereArticle23;

    /**
     * Champs critere article24.
     *
     * @var string
     */
    private $champsCritereArticle24;

    /**
     * Champs critere article25.
     *
     * @var string
     */
    private $champsCritereArticle25;

    /**
     * Champs critere article26.
     *
     * @var string
     */
    private $champsCritereArticle26;

    /**
     * Champs critere article27.
     *
     * @var string
     */
    private $champsCritereArticle27;

    /**
     * Champs critere article28.
     *
     * @var string
     */
    private $champsCritereArticle28;

    /**
     * Champs critere article29.
     *
     * @var string
     */
    private $champsCritereArticle29;

    /**
     * Champs critere ent piece ac1.
     *
     * @var string
     */
    private $champsCritereEntPieceAc1;

    /**
     * Champs critere ent piece ac10.
     *
     * @var string
     */
    private $champsCritereEntPieceAc10;

    /**
     * Champs critere ent piece ac2.
     *
     * @var string
     */
    private $champsCritereEntPieceAc2;

    /**
     * Champs critere ent piece ac3.
     *
     * @var string
     */
    private $champsCritereEntPieceAc3;

    /**
     * Champs critere ent piece ac4.
     *
     * @var string
     */
    private $champsCritereEntPieceAc4;

    /**
     * Champs critere ent piece ac5.
     *
     * @var string
     */
    private $champsCritereEntPieceAc5;

    /**
     * Champs critere ent piece ac6.
     *
     * @var string
     */
    private $champsCritereEntPieceAc6;

    /**
     * Champs critere ent piece ac7.
     *
     * @var string
     */
    private $champsCritereEntPieceAc7;

    /**
     * Champs critere ent piece ac8.
     *
     * @var string
     */
    private $champsCritereEntPieceAc8;

    /**
     * Champs critere ent piece ac9.
     *
     * @var string
     */
    private $champsCritereEntPieceAc9;

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
     * Create cli1 fact par bl.
     *
     * @var bool
     */
    private $createCli1FactParBl;

    /**
     * Creation affaire.
     *
     * @var bool
     */
    private $creationAffaire;

    /**
     * Date dha.
     *
     * @var DateTime|null
     */
    private $dateDha;

    /**
     * Date last exe qpub web.
     *
     * @var DateTime|null
     */
    private $dateLastExeQpubWeb;

    /**
     * Date pha.
     *
     * @var DateTime|null
     */
    private $datePha;

    /**
     * Derniere version cd.
     *
     * @var string
     */
    private $derniereVersionCd;

    /**
     * Droit collab visu documents.
     *
     * @var bool
     */
    private $droitCollabVisuDocuments;

    /**
     * e ws cabinet.
     *
     * @var string
     */
    private $eWsCabinet;

    /**
     * e ws coll id.
     *
     * @var string
     */
    private $eWsCollId;

    /**
     * e ws coll mdp.
     *
     * @var string
     */
    private $eWsCollMdp;

    /**
     * e ws srv mdp.
     *
     * @var string
     */
    private $eWsSrvMdp;

    /**
     * e ws srv name.
     *
     * @var string
     */
    private $eWsSrvName;

    /**
     * e ws srv util.
     *
     * @var string
     */
    private $eWsSrvUtil;

    /**
     * Ech detail aff.
     *
     * @var bool
     */
    private $echDetailAff;

    /**
     * Etebac dest message.
     *
     * @var string
     */
    private $etebacDestMessage;

    /**
     * F gsur ac.
     *
     * @var bool
     */
    private $fGsurAc;

    /**
     * F gsur monf.
     *
     * @var bool
     */
    private $fGsurMonf;

    /**
     * Familles liees.
     *
     * @var bool
     */
    private $famillesLiees;

    /**
     * Fg sur cde frn.
     *
     * @var bool
     */
    private $fgSurCdeFrn;

    /**
     * Fiche cli ne pas proposer creation dpdc.
     *
     * @var bool
     */
    private $ficheCliNePasProposerCreationDpdc;

    /**
     * Gestion gammes.
     *
     * @var bool
     */
    private $gestionGammes;

    /**
     * Gestion pointeuse q fact.
     *
     * @var bool
     */
    private $gestionPointeuseQFact;

    /**
     * Gestion pointeuse qc.
     *
     * @var bool
     */
    private $gestionPointeuseQc;

    /**
     * Gestion pointeuse qgi.
     *
     * @var bool
     */
    private $gestionPointeuseQgi;

    /**
     * Gestion pointeuse qp.
     *
     * @var bool
     */
    private $gestionPointeuseQp;

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
     * Ht avec jours feries.
     *
     * @var bool
     */
    private $htAvecJoursFeries;

    /**
     * Ht avec saisie conges.
     *
     * @var bool
     */
    private $htAvecSaisieConges;

    /**
     * Ht avec saisie conges codes clients.
     *
     * @var string
     */
    private $htAvecSaisieCongesCodesClients;

    /**
     * Ht avec saisie conges codes taches.
     *
     * @var string
     */
    private $htAvecSaisieCongesCodesTaches;

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
     * Ip prive qws.
     *
     * @var string
     */
    private $ipPriveQws;

    /**
     * Liaison tda.
     *
     * @var bool
     */
    private $liaisonTda;

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
     * Lib critere article21.
     *
     * @var string
     */
    private $libCritereArticle21;

    /**
     * Lib critere article210.
     *
     * @var string
     */
    private $libCritereArticle210;

    /**
     * Lib critere article22.
     *
     * @var string
     */
    private $libCritereArticle22;

    /**
     * Lib critere article23.
     *
     * @var string
     */
    private $libCritereArticle23;

    /**
     * Lib critere article24.
     *
     * @var string
     */
    private $libCritereArticle24;

    /**
     * Lib critere article25.
     *
     * @var string
     */
    private $libCritereArticle25;

    /**
     * Lib critere article26.
     *
     * @var string
     */
    private $libCritereArticle26;

    /**
     * Lib critere article27.
     *
     * @var string
     */
    private $libCritereArticle27;

    /**
     * Lib critere article28.
     *
     * @var string
     */
    private $libCritereArticle28;

    /**
     * Lib critere article29.
     *
     * @var string
     */
    private $libCritereArticle29;

    /**
     * Lib critere ent piece ac1.
     *
     * @var string
     */
    private $libCritereEntPieceAc1;

    /**
     * Lib critere ent piece ac10.
     *
     * @var string
     */
    private $libCritereEntPieceAc10;

    /**
     * Lib critere ent piece ac2.
     *
     * @var string
     */
    private $libCritereEntPieceAc2;

    /**
     * Lib critere ent piece ac3.
     *
     * @var string
     */
    private $libCritereEntPieceAc3;

    /**
     * Lib critere ent piece ac4.
     *
     * @var string
     */
    private $libCritereEntPieceAc4;

    /**
     * Lib critere ent piece ac5.
     *
     * @var string
     */
    private $libCritereEntPieceAc5;

    /**
     * Lib critere ent piece ac6.
     *
     * @var string
     */
    private $libCritereEntPieceAc6;

    /**
     * Lib critere ent piece ac7.
     *
     * @var string
     */
    private $libCritereEntPieceAc7;

    /**
     * Lib critere ent piece ac8.
     *
     * @var string
     */
    private $libCritereEntPieceAc8;

    /**
     * Lib critere ent piece ac9.
     *
     * @var string
     */
    private $libCritereEntPieceAc9;

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
     * Maj codes activite cga.
     *
     * @var string
     */
    private $majCodesActiviteCga;

    /**
     * Mess aspod.
     *
     * @var bool
     */
    private $messAspod;

    /**
     * Modif affaire.
     *
     * @var string
     */
    private $modifAffaire;

    /**
     * Modif droits asp.
     *
     * @var bool
     */
    private $modifDroitsAsp;

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
     * Pas de lien comptabilite.
     *
     * @var bool
     */
    private $pasDeLienComptabilite;

    /**
     * Pme dossier rattachement.
     *
     * @var string
     */
    private $pmeDossierRattachement;

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
     * Qws chemin logo.
     *
     * @var string
     */
    private $qwsCheminLogo;

    /**
     * Qws code ipl.
     *
     * @var string
     */
    private $qwsCodeIpl;

    /**
     * Qws http securise.
     *
     * @var bool
     */
    private $qwsHttpSecurise;

    /**
     * Qws nom produit.
     *
     * @var string
     */
    private $qwsNomProduit;

    /**
     * Qws utiliser logo cabinet.
     *
     * @var bool
     */
    private $qwsUtiliserLogoCabinet;

    /**
     * Qwsipl.
     *
     * @var string
     */
    private $qwsipl;

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
     * Req demandeur.
     *
     * @var string
     */
    private $reqDemandeur;

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
     * Saisie tp ne pas afficher dp.
     *
     * @var bool
     */
    private $saisieTpNePasAfficherDp;

    /**
     * Saisie tp onglet unique dp.
     *
     * @var bool
     */
    private $saisieTpOngletUniqueDp;

    /**
     * Saisie tp onglet unique tn.
     *
     * @var bool
     */
    private $saisieTpOngletUniqueTn;

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
     * Sms api key.
     *
     * @var string
     */
    private $smsApiKey;

    /**
     * Sms droit acces.
     *
     * @var bool
     */
    private $smsDroitAcces;

    /**
     * Sms key.
     *
     * @var string
     */
    private $smsKey;

    /**
     * Sms prestataire.
     *
     * @var string
     */
    private $smsPrestataire;

    /**
     * Sms sender.
     *
     * @var string
     */
    private $smsSender;

    /**
     * Sms type.
     *
     * @var int
     */
    private $smsType;

    /**
     * Sms user login.
     *
     * @var string
     */
    private $smsUserLogin;

    /**
     * Solde cpta od.
     *
     * @var bool
     */
    private $soldeCptaOd;

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
     * Tp acces encours client.
     *
     * @var bool
     */
    private $tpAccesEncoursClient;

    /**
     * Tp avancement a la ligne.
     *
     * @var bool
     */
    private $tpAvancementALaLigne;

    /**
     * Tp interdit qte.
     *
     * @var bool
     */
    private $tpInterditQte;

    /**
     * Tp libelle mission.
     *
     * @var bool
     */
    private $tpLibelleMission;

    /**
     * Tp limite saisie non operationnel.
     *
     * @var bool
     */
    private $tpLimiteSaisieNonOperationnel;

    /**
     * Tp pas mois cloture.
     *
     * @var bool
     */
    private $tpPasMoisCloture;

    /**
     * Tp pourcentage non operationnel date.
     *
     * @var DateTime|null
     */
    private $tpPourcentageNonOperationnelDate;

    /**
     * Tp qte invisible.
     *
     * @var bool
     */
    private $tpQteInvisible;

    /**
     * Tp saisie avancement.
     *
     * @var bool
     */
    private $tpSaisieAvancement;

    /**
     * Tppupv123.
     *
     * @var bool
     */
    private $tppupv123;

    /**
     * Tps num archive.
     *
     * @var string
     */
    private $tpsNumArchive;

    /**
     * Trans variantes factgi.
     *
     * @var bool
     */
    private $transVariantesFactgi;

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
     * Get the activation conf2 cmav cli.
     *
     * @return bool Returns the activation conf2 cmav cli.
     */
    public function getActivationConf2CmavCli() {
        return $this->activationConf2CmavCli;
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
     * Get the asp affectation messages.
     *
     * @return string Returns the asp affectation messages.
     */
    public function getAspAffectationMessages() {
        return $this->aspAffectationMessages;
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
     * Get the champs critere article21.
     *
     * @return string Returns the champs critere article21.
     */
    public function getChampsCritereArticle21() {
        return $this->champsCritereArticle21;
    }

    /**
     * Get the champs critere article210.
     *
     * @return string Returns the champs critere article210.
     */
    public function getChampsCritereArticle210() {
        return $this->champsCritereArticle210;
    }

    /**
     * Get the champs critere article22.
     *
     * @return string Returns the champs critere article22.
     */
    public function getChampsCritereArticle22() {
        return $this->champsCritereArticle22;
    }

    /**
     * Get the champs critere article23.
     *
     * @return string Returns the champs critere article23.
     */
    public function getChampsCritereArticle23() {
        return $this->champsCritereArticle23;
    }

    /**
     * Get the champs critere article24.
     *
     * @return string Returns the champs critere article24.
     */
    public function getChampsCritereArticle24() {
        return $this->champsCritereArticle24;
    }

    /**
     * Get the champs critere article25.
     *
     * @return string Returns the champs critere article25.
     */
    public function getChampsCritereArticle25() {
        return $this->champsCritereArticle25;
    }

    /**
     * Get the champs critere article26.
     *
     * @return string Returns the champs critere article26.
     */
    public function getChampsCritereArticle26() {
        return $this->champsCritereArticle26;
    }

    /**
     * Get the champs critere article27.
     *
     * @return string Returns the champs critere article27.
     */
    public function getChampsCritereArticle27() {
        return $this->champsCritereArticle27;
    }

    /**
     * Get the champs critere article28.
     *
     * @return string Returns the champs critere article28.
     */
    public function getChampsCritereArticle28() {
        return $this->champsCritereArticle28;
    }

    /**
     * Get the champs critere article29.
     *
     * @return string Returns the champs critere article29.
     */
    public function getChampsCritereArticle29() {
        return $this->champsCritereArticle29;
    }

    /**
     * Get the champs critere ent piece ac1.
     *
     * @return string Returns the champs critere ent piece ac1.
     */
    public function getChampsCritereEntPieceAc1() {
        return $this->champsCritereEntPieceAc1;
    }

    /**
     * Get the champs critere ent piece ac10.
     *
     * @return string Returns the champs critere ent piece ac10.
     */
    public function getChampsCritereEntPieceAc10() {
        return $this->champsCritereEntPieceAc10;
    }

    /**
     * Get the champs critere ent piece ac2.
     *
     * @return string Returns the champs critere ent piece ac2.
     */
    public function getChampsCritereEntPieceAc2() {
        return $this->champsCritereEntPieceAc2;
    }

    /**
     * Get the champs critere ent piece ac3.
     *
     * @return string Returns the champs critere ent piece ac3.
     */
    public function getChampsCritereEntPieceAc3() {
        return $this->champsCritereEntPieceAc3;
    }

    /**
     * Get the champs critere ent piece ac4.
     *
     * @return string Returns the champs critere ent piece ac4.
     */
    public function getChampsCritereEntPieceAc4() {
        return $this->champsCritereEntPieceAc4;
    }

    /**
     * Get the champs critere ent piece ac5.
     *
     * @return string Returns the champs critere ent piece ac5.
     */
    public function getChampsCritereEntPieceAc5() {
        return $this->champsCritereEntPieceAc5;
    }

    /**
     * Get the champs critere ent piece ac6.
     *
     * @return string Returns the champs critere ent piece ac6.
     */
    public function getChampsCritereEntPieceAc6() {
        return $this->champsCritereEntPieceAc6;
    }

    /**
     * Get the champs critere ent piece ac7.
     *
     * @return string Returns the champs critere ent piece ac7.
     */
    public function getChampsCritereEntPieceAc7() {
        return $this->champsCritereEntPieceAc7;
    }

    /**
     * Get the champs critere ent piece ac8.
     *
     * @return string Returns the champs critere ent piece ac8.
     */
    public function getChampsCritereEntPieceAc8() {
        return $this->champsCritereEntPieceAc8;
    }

    /**
     * Get the champs critere ent piece ac9.
     *
     * @return string Returns the champs critere ent piece ac9.
     */
    public function getChampsCritereEntPieceAc9() {
        return $this->champsCritereEntPieceAc9;
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
     * Get the create cli1 fact par bl.
     *
     * @return bool Returns the create cli1 fact par bl.
     */
    public function getCreateCli1FactParBl() {
        return $this->createCli1FactParBl;
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
     * Get the date dha.
     *
     * @return DateTime|null Returns the date dha.
     */
    public function getDateDha() {
        return $this->dateDha;
    }

    /**
     * Get the date last exe qpub web.
     *
     * @return DateTime|null Returns the date last exe qpub web.
     */
    public function getDateLastExeQpubWeb() {
        return $this->dateLastExeQpubWeb;
    }

    /**
     * Get the date pha.
     *
     * @return DateTime|null Returns the date pha.
     */
    public function getDatePha() {
        return $this->datePha;
    }

    /**
     * Get the derniere version cd.
     *
     * @return string Returns the derniere version cd.
     */
    public function getDerniereVersionCd() {
        return $this->derniereVersionCd;
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
     * Get the ech detail aff.
     *
     * @return bool Returns the ech detail aff.
     */
    public function getEchDetailAff() {
        return $this->echDetailAff;
    }

    /**
     * Get the etebac dest message.
     *
     * @return string Returns the etebac dest message.
     */
    public function getEtebacDestMessage() {
        return $this->etebacDestMessage;
    }

    /**
     * Get the f gsur ac.
     *
     * @return bool Returns the f gsur ac.
     */
    public function getFGsurAc() {
        return $this->fGsurAc;
    }

    /**
     * Get the f gsur monf.
     *
     * @return bool Returns the f gsur monf.
     */
    public function getFGsurMonf() {
        return $this->fGsurMonf;
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
     * Get the fg sur cde frn.
     *
     * @return bool Returns the fg sur cde frn.
     */
    public function getFgSurCdeFrn() {
        return $this->fgSurCdeFrn;
    }

    /**
     * Get the fiche cli ne pas proposer creation dpdc.
     *
     * @return bool Returns the fiche cli ne pas proposer creation dpdc.
     */
    public function getFicheCliNePasProposerCreationDpdc() {
        return $this->ficheCliNePasProposerCreationDpdc;
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
     * Get the gestion pointeuse q fact.
     *
     * @return bool Returns the gestion pointeuse q fact.
     */
    public function getGestionPointeuseQFact() {
        return $this->gestionPointeuseQFact;
    }

    /**
     * Get the gestion pointeuse qc.
     *
     * @return bool Returns the gestion pointeuse qc.
     */
    public function getGestionPointeuseQc() {
        return $this->gestionPointeuseQc;
    }

    /**
     * Get the gestion pointeuse qgi.
     *
     * @return bool Returns the gestion pointeuse qgi.
     */
    public function getGestionPointeuseQgi() {
        return $this->gestionPointeuseQgi;
    }

    /**
     * Get the gestion pointeuse qp.
     *
     * @return bool Returns the gestion pointeuse qp.
     */
    public function getGestionPointeuseQp() {
        return $this->gestionPointeuseQp;
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
     * Get the ht avec jours feries.
     *
     * @return bool Returns the ht avec jours feries.
     */
    public function getHtAvecJoursFeries() {
        return $this->htAvecJoursFeries;
    }

    /**
     * Get the ht avec saisie conges.
     *
     * @return bool Returns the ht avec saisie conges.
     */
    public function getHtAvecSaisieConges() {
        return $this->htAvecSaisieConges;
    }

    /**
     * Get the ht avec saisie conges codes clients.
     *
     * @return string Returns the ht avec saisie conges codes clients.
     */
    public function getHtAvecSaisieCongesCodesClients() {
        return $this->htAvecSaisieCongesCodesClients;
    }

    /**
     * Get the ht avec saisie conges codes taches.
     *
     * @return string Returns the ht avec saisie conges codes taches.
     */
    public function getHtAvecSaisieCongesCodesTaches() {
        return $this->htAvecSaisieCongesCodesTaches;
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
     * Get the ip prive qws.
     *
     * @return string Returns the ip prive qws.
     */
    public function getIpPriveQws() {
        return $this->ipPriveQws;
    }

    /**
     * Get the liaison tda.
     *
     * @return bool Returns the liaison tda.
     */
    public function getLiaisonTda() {
        return $this->liaisonTda;
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
     * Get the lib critere article21.
     *
     * @return string Returns the lib critere article21.
     */
    public function getLibCritereArticle21() {
        return $this->libCritereArticle21;
    }

    /**
     * Get the lib critere article210.
     *
     * @return string Returns the lib critere article210.
     */
    public function getLibCritereArticle210() {
        return $this->libCritereArticle210;
    }

    /**
     * Get the lib critere article22.
     *
     * @return string Returns the lib critere article22.
     */
    public function getLibCritereArticle22() {
        return $this->libCritereArticle22;
    }

    /**
     * Get the lib critere article23.
     *
     * @return string Returns the lib critere article23.
     */
    public function getLibCritereArticle23() {
        return $this->libCritereArticle23;
    }

    /**
     * Get the lib critere article24.
     *
     * @return string Returns the lib critere article24.
     */
    public function getLibCritereArticle24() {
        return $this->libCritereArticle24;
    }

    /**
     * Get the lib critere article25.
     *
     * @return string Returns the lib critere article25.
     */
    public function getLibCritereArticle25() {
        return $this->libCritereArticle25;
    }

    /**
     * Get the lib critere article26.
     *
     * @return string Returns the lib critere article26.
     */
    public function getLibCritereArticle26() {
        return $this->libCritereArticle26;
    }

    /**
     * Get the lib critere article27.
     *
     * @return string Returns the lib critere article27.
     */
    public function getLibCritereArticle27() {
        return $this->libCritereArticle27;
    }

    /**
     * Get the lib critere article28.
     *
     * @return string Returns the lib critere article28.
     */
    public function getLibCritereArticle28() {
        return $this->libCritereArticle28;
    }

    /**
     * Get the lib critere article29.
     *
     * @return string Returns the lib critere article29.
     */
    public function getLibCritereArticle29() {
        return $this->libCritereArticle29;
    }

    /**
     * Get the lib critere ent piece ac1.
     *
     * @return string Returns the lib critere ent piece ac1.
     */
    public function getLibCritereEntPieceAc1() {
        return $this->libCritereEntPieceAc1;
    }

    /**
     * Get the lib critere ent piece ac10.
     *
     * @return string Returns the lib critere ent piece ac10.
     */
    public function getLibCritereEntPieceAc10() {
        return $this->libCritereEntPieceAc10;
    }

    /**
     * Get the lib critere ent piece ac2.
     *
     * @return string Returns the lib critere ent piece ac2.
     */
    public function getLibCritereEntPieceAc2() {
        return $this->libCritereEntPieceAc2;
    }

    /**
     * Get the lib critere ent piece ac3.
     *
     * @return string Returns the lib critere ent piece ac3.
     */
    public function getLibCritereEntPieceAc3() {
        return $this->libCritereEntPieceAc3;
    }

    /**
     * Get the lib critere ent piece ac4.
     *
     * @return string Returns the lib critere ent piece ac4.
     */
    public function getLibCritereEntPieceAc4() {
        return $this->libCritereEntPieceAc4;
    }

    /**
     * Get the lib critere ent piece ac5.
     *
     * @return string Returns the lib critere ent piece ac5.
     */
    public function getLibCritereEntPieceAc5() {
        return $this->libCritereEntPieceAc5;
    }

    /**
     * Get the lib critere ent piece ac6.
     *
     * @return string Returns the lib critere ent piece ac6.
     */
    public function getLibCritereEntPieceAc6() {
        return $this->libCritereEntPieceAc6;
    }

    /**
     * Get the lib critere ent piece ac7.
     *
     * @return string Returns the lib critere ent piece ac7.
     */
    public function getLibCritereEntPieceAc7() {
        return $this->libCritereEntPieceAc7;
    }

    /**
     * Get the lib critere ent piece ac8.
     *
     * @return string Returns the lib critere ent piece ac8.
     */
    public function getLibCritereEntPieceAc8() {
        return $this->libCritereEntPieceAc8;
    }

    /**
     * Get the lib critere ent piece ac9.
     *
     * @return string Returns the lib critere ent piece ac9.
     */
    public function getLibCritereEntPieceAc9() {
        return $this->libCritereEntPieceAc9;
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
     * Get the maj codes activite cga.
     *
     * @return string Returns the maj codes activite cga.
     */
    public function getMajCodesActiviteCga() {
        return $this->majCodesActiviteCga;
    }

    /**
     * Get the mess aspod.
     *
     * @return bool Returns the mess aspod.
     */
    public function getMessAspod() {
        return $this->messAspod;
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
     * Get the modif droits asp.
     *
     * @return bool Returns the modif droits asp.
     */
    public function getModifDroitsAsp() {
        return $this->modifDroitsAsp;
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
     * Get the pas de lien comptabilite.
     *
     * @return bool Returns the pas de lien comptabilite.
     */
    public function getPasDeLienComptabilite() {
        return $this->pasDeLienComptabilite;
    }

    /**
     * Get the pme dossier rattachement.
     *
     * @return string Returns the pme dossier rattachement.
     */
    public function getPmeDossierRattachement() {
        return $this->pmeDossierRattachement;
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
     * Get the qws chemin logo.
     *
     * @return string Returns the qws chemin logo.
     */
    public function getQwsCheminLogo() {
        return $this->qwsCheminLogo;
    }

    /**
     * Get the qws code ipl.
     *
     * @return string Returns the qws code ipl.
     */
    public function getQwsCodeIpl() {
        return $this->qwsCodeIpl;
    }

    /**
     * Get the qws http securise.
     *
     * @return bool Returns the qws http securise.
     */
    public function getQwsHttpSecurise() {
        return $this->qwsHttpSecurise;
    }

    /**
     * Get the qws nom produit.
     *
     * @return string Returns the qws nom produit.
     */
    public function getQwsNomProduit() {
        return $this->qwsNomProduit;
    }

    /**
     * Get the qws utiliser logo cabinet.
     *
     * @return bool Returns the qws utiliser logo cabinet.
     */
    public function getQwsUtiliserLogoCabinet() {
        return $this->qwsUtiliserLogoCabinet;
    }

    /**
     * Get the qwsipl.
     *
     * @return string Returns the qwsipl.
     */
    public function getQwsipl() {
        return $this->qwsipl;
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
     * Get the req demandeur.
     *
     * @return string Returns the req demandeur.
     */
    public function getReqDemandeur() {
        return $this->reqDemandeur;
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
     * Get the saisie tp ne pas afficher dp.
     *
     * @return bool Returns the saisie tp ne pas afficher dp.
     */
    public function getSaisieTpNePasAfficherDp() {
        return $this->saisieTpNePasAfficherDp;
    }

    /**
     * Get the saisie tp onglet unique dp.
     *
     * @return bool Returns the saisie tp onglet unique dp.
     */
    public function getSaisieTpOngletUniqueDp() {
        return $this->saisieTpOngletUniqueDp;
    }

    /**
     * Get the saisie tp onglet unique tn.
     *
     * @return bool Returns the saisie tp onglet unique tn.
     */
    public function getSaisieTpOngletUniqueTn() {
        return $this->saisieTpOngletUniqueTn;
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
     * Get the sms api key.
     *
     * @return string Returns the sms api key.
     */
    public function getSmsApiKey() {
        return $this->smsApiKey;
    }

    /**
     * Get the sms droit acces.
     *
     * @return bool Returns the sms droit acces.
     */
    public function getSmsDroitAcces() {
        return $this->smsDroitAcces;
    }

    /**
     * Get the sms key.
     *
     * @return string Returns the sms key.
     */
    public function getSmsKey() {
        return $this->smsKey;
    }

    /**
     * Get the sms prestataire.
     *
     * @return string Returns the sms prestataire.
     */
    public function getSmsPrestataire() {
        return $this->smsPrestataire;
    }

    /**
     * Get the sms sender.
     *
     * @return string Returns the sms sender.
     */
    public function getSmsSender() {
        return $this->smsSender;
    }

    /**
     * Get the sms type.
     *
     * @return int Returns the sms type.
     */
    public function getSmsType() {
        return $this->smsType;
    }

    /**
     * Get the sms user login.
     *
     * @return string Returns the sms user login.
     */
    public function getSmsUserLogin() {
        return $this->smsUserLogin;
    }

    /**
     * Get the solde cpta od.
     *
     * @return bool Returns the solde cpta od.
     */
    public function getSoldeCptaOd() {
        return $this->soldeCptaOd;
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
     * Get the tp acces encours client.
     *
     * @return bool Returns the tp acces encours client.
     */
    public function getTpAccesEncoursClient() {
        return $this->tpAccesEncoursClient;
    }

    /**
     * Get the tp avancement a la ligne.
     *
     * @return bool Returns the tp avancement a la ligne.
     */
    public function getTpAvancementALaLigne() {
        return $this->tpAvancementALaLigne;
    }

    /**
     * Get the tp interdit qte.
     *
     * @return bool Returns the tp interdit qte.
     */
    public function getTpInterditQte() {
        return $this->tpInterditQte;
    }

    /**
     * Get the tp libelle mission.
     *
     * @return bool Returns the tp libelle mission.
     */
    public function getTpLibelleMission() {
        return $this->tpLibelleMission;
    }

    /**
     * Get the tp limite saisie non operationnel.
     *
     * @return bool Returns the tp limite saisie non operationnel.
     */
    public function getTpLimiteSaisieNonOperationnel() {
        return $this->tpLimiteSaisieNonOperationnel;
    }

    /**
     * Get the tp pas mois cloture.
     *
     * @return bool Returns the tp pas mois cloture.
     */
    public function getTpPasMoisCloture() {
        return $this->tpPasMoisCloture;
    }

    /**
     * Get the tp pourcentage non operationnel date.
     *
     * @return DateTime|null Returns the tp pourcentage non operationnel date.
     */
    public function getTpPourcentageNonOperationnelDate() {
        return $this->tpPourcentageNonOperationnelDate;
    }

    /**
     * Get the tp qte invisible.
     *
     * @return bool Returns the tp qte invisible.
     */
    public function getTpQteInvisible() {
        return $this->tpQteInvisible;
    }

    /**
     * Get the tp saisie avancement.
     *
     * @return bool Returns the tp saisie avancement.
     */
    public function getTpSaisieAvancement() {
        return $this->tpSaisieAvancement;
    }

    /**
     * Get the tppupv123.
     *
     * @return bool Returns the tppupv123.
     */
    public function getTppupv123() {
        return $this->tppupv123;
    }

    /**
     * Get the tps num archive.
     *
     * @return string Returns the tps num archive.
     */
    public function getTpsNumArchive() {
        return $this->tpsNumArchive;
    }

    /**
     * Get the trans variantes factgi.
     *
     * @return bool Returns the trans variantes factgi.
     */
    public function getTransVariantesFactgi() {
        return $this->transVariantesFactgi;
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
     * Get the e ws cabinet.
     *
     * @return string Returns the e ws cabinet.
     */
    public function geteWsCabinet() {
        return $this->eWsCabinet;
    }

    /**
     * Get the e ws coll id.
     *
     * @return string Returns the e ws coll id.
     */
    public function geteWsCollId() {
        return $this->eWsCollId;
    }

    /**
     * Get the e ws coll mdp.
     *
     * @return string Returns the e ws coll mdp.
     */
    public function geteWsCollMdp() {
        return $this->eWsCollMdp;
    }

    /**
     * Get the e ws srv mdp.
     *
     * @return string Returns the e ws srv mdp.
     */
    public function geteWsSrvMdp() {
        return $this->eWsSrvMdp;
    }

    /**
     * Get the e ws srv name.
     *
     * @return string Returns the e ws srv name.
     */
    public function geteWsSrvName() {
        return $this->eWsSrvName;
    }

    /**
     * Get the e ws srv util.
     *
     * @return string Returns the e ws srv util.
     */
    public function geteWsSrvUtil() {
        return $this->eWsSrvUtil;
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
     * Set the activation conf2 cmav cli.
     *
     * @param bool $activationConf2CmavCli The activation conf2 cmav cli.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setActivationConf2CmavCli($activationConf2CmavCli) {
        $this->activationConf2CmavCli = $activationConf2CmavCli;
        return $this;
    }

    /**
     * Set the active conf conv col.
     *
     * @param bool $activeConfConvCol The active conf conv col.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setActiveConfConvCol($activeConfConvCol) {
        $this->activeConfConvCol = $activeConfConvCol;
        return $this;
    }

    /**
     * Set the activer saisie regl.
     *
     * @param bool $activerSaisieRegl The activer saisie regl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setActiverSaisieRegl($activerSaisieRegl) {
        $this->activerSaisieRegl = $activerSaisieRegl;
        return $this;
    }

    /**
     * Set the affectations cli frn.
     *
     * @param bool $affectationsCliFrn The affectations cli frn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAffectationsCliFrn($affectationsCliFrn) {
        $this->affectationsCliFrn = $affectationsCliFrn;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool $annulationAffaire The annulation affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAnnulationAffaire($annulationAffaire) {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestion modifiables.
     *
     * @param bool $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoAccesGestionModifiables($articlesLstPersoAccesGestionModifiables) {
        $this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestionnaire.
     *
     * @param bool $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoAccesGestionnaire($articlesLstPersoAccesGestionnaire) {
        $this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the articles lst perso champs modif.
     *
     * @param bool $articlesLstPersoChampsModif The articles lst perso champs modif.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoChampsModif($articlesLstPersoChampsModif) {
        $this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the articles lst perso copie colonne.
     *
     * @param bool $articlesLstPersoCopieColonne The articles lst perso copie colonne.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoCopieColonne($articlesLstPersoCopieColonne) {
        $this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the articles lst perso interdire creat.
     *
     * @param bool $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setArticlesLstPersoInterdireCreat($articlesLstPersoInterdireCreat) {
        $this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the asp affectation messages.
     *
     * @param string $aspAffectationMessages The asp affectation messages.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAspAffectationMessages($aspAffectationMessages) {
        $this->aspAffectationMessages = $aspAffectationMessages;
        return $this;
    }

    /**
     * Set the avec heures theo.
     *
     * @param bool $avecHeuresTheo The avec heures theo.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setAvecHeuresTheo($avecHeuresTheo) {
        $this->avecHeuresTheo = $avecHeuresTheo;
        return $this;
    }

    /**
     * Set the calcul nombre messages.
     *
     * @param bool $calculNombreMessages The calcul nombre messages.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCalculNombreMessages($calculNombreMessages) {
        $this->calculNombreMessages = $calculNombreMessages;
        return $this;
    }

    /**
     * Set the champs critere article21.
     *
     * @param string $champsCritereArticle21 The champs critere article21.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle21($champsCritereArticle21) {
        $this->champsCritereArticle21 = $champsCritereArticle21;
        return $this;
    }

    /**
     * Set the champs critere article210.
     *
     * @param string $champsCritereArticle210 The champs critere article210.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle210($champsCritereArticle210) {
        $this->champsCritereArticle210 = $champsCritereArticle210;
        return $this;
    }

    /**
     * Set the champs critere article22.
     *
     * @param string $champsCritereArticle22 The champs critere article22.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle22($champsCritereArticle22) {
        $this->champsCritereArticle22 = $champsCritereArticle22;
        return $this;
    }

    /**
     * Set the champs critere article23.
     *
     * @param string $champsCritereArticle23 The champs critere article23.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle23($champsCritereArticle23) {
        $this->champsCritereArticle23 = $champsCritereArticle23;
        return $this;
    }

    /**
     * Set the champs critere article24.
     *
     * @param string $champsCritereArticle24 The champs critere article24.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle24($champsCritereArticle24) {
        $this->champsCritereArticle24 = $champsCritereArticle24;
        return $this;
    }

    /**
     * Set the champs critere article25.
     *
     * @param string $champsCritereArticle25 The champs critere article25.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle25($champsCritereArticle25) {
        $this->champsCritereArticle25 = $champsCritereArticle25;
        return $this;
    }

    /**
     * Set the champs critere article26.
     *
     * @param string $champsCritereArticle26 The champs critere article26.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle26($champsCritereArticle26) {
        $this->champsCritereArticle26 = $champsCritereArticle26;
        return $this;
    }

    /**
     * Set the champs critere article27.
     *
     * @param string $champsCritereArticle27 The champs critere article27.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle27($champsCritereArticle27) {
        $this->champsCritereArticle27 = $champsCritereArticle27;
        return $this;
    }

    /**
     * Set the champs critere article28.
     *
     * @param string $champsCritereArticle28 The champs critere article28.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle28($champsCritereArticle28) {
        $this->champsCritereArticle28 = $champsCritereArticle28;
        return $this;
    }

    /**
     * Set the champs critere article29.
     *
     * @param string $champsCritereArticle29 The champs critere article29.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereArticle29($champsCritereArticle29) {
        $this->champsCritereArticle29 = $champsCritereArticle29;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac1.
     *
     * @param string $champsCritereEntPieceAc1 The champs critere ent piece ac1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc1($champsCritereEntPieceAc1) {
        $this->champsCritereEntPieceAc1 = $champsCritereEntPieceAc1;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac10.
     *
     * @param string $champsCritereEntPieceAc10 The champs critere ent piece ac10.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc10($champsCritereEntPieceAc10) {
        $this->champsCritereEntPieceAc10 = $champsCritereEntPieceAc10;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac2.
     *
     * @param string $champsCritereEntPieceAc2 The champs critere ent piece ac2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc2($champsCritereEntPieceAc2) {
        $this->champsCritereEntPieceAc2 = $champsCritereEntPieceAc2;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac3.
     *
     * @param string $champsCritereEntPieceAc3 The champs critere ent piece ac3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc3($champsCritereEntPieceAc3) {
        $this->champsCritereEntPieceAc3 = $champsCritereEntPieceAc3;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac4.
     *
     * @param string $champsCritereEntPieceAc4 The champs critere ent piece ac4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc4($champsCritereEntPieceAc4) {
        $this->champsCritereEntPieceAc4 = $champsCritereEntPieceAc4;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac5.
     *
     * @param string $champsCritereEntPieceAc5 The champs critere ent piece ac5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc5($champsCritereEntPieceAc5) {
        $this->champsCritereEntPieceAc5 = $champsCritereEntPieceAc5;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac6.
     *
     * @param string $champsCritereEntPieceAc6 The champs critere ent piece ac6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc6($champsCritereEntPieceAc6) {
        $this->champsCritereEntPieceAc6 = $champsCritereEntPieceAc6;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac7.
     *
     * @param string $champsCritereEntPieceAc7 The champs critere ent piece ac7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc7($champsCritereEntPieceAc7) {
        $this->champsCritereEntPieceAc7 = $champsCritereEntPieceAc7;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac8.
     *
     * @param string $champsCritereEntPieceAc8 The champs critere ent piece ac8.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc8($champsCritereEntPieceAc8) {
        $this->champsCritereEntPieceAc8 = $champsCritereEntPieceAc8;
        return $this;
    }

    /**
     * Set the champs critere ent piece ac9.
     *
     * @param string $champsCritereEntPieceAc9 The champs critere ent piece ac9.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setChampsCritereEntPieceAc9($champsCritereEntPieceAc9) {
        $this->champsCritereEntPieceAc9 = $champsCritereEntPieceAc9;
        return $this;
    }

    /**
     * Set the cle acces conf.
     *
     * @param string $cleAccesConf The cle acces conf.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCleAccesConf($cleAccesConf) {
        $this->cleAccesConf = $cleAccesConf;
        return $this;
    }

    /**
     * Set the cle acces plaquettes.
     *
     * @param string $cleAccesPlaquettes The cle acces plaquettes.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCleAccesPlaquettes($cleAccesPlaquettes) {
        $this->cleAccesPlaquettes = $cleAccesPlaquettes;
        return $this;
    }

    /**
     * Set the cle acces q admin db.
     *
     * @param string $cleAccesQAdminDb The cle acces q admin db.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCleAccesQAdminDb($cleAccesQAdminDb) {
        $this->cleAccesQAdminDb = $cleAccesQAdminDb;
        return $this;
    }

    /**
     * Set the cloture archivage auto.
     *
     * @param bool $clotureArchivageAuto The cloture archivage auto.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setClotureArchivageAuto($clotureArchivageAuto) {
        $this->clotureArchivageAuto = $clotureArchivageAuto;
        return $this;
    }

    /**
     * Set the code client quadratus.
     *
     * @param string $codeClientQuadratus The code client quadratus.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCodeClientQuadratus($codeClientQuadratus) {
        $this->codeClientQuadratus = $codeClientQuadratus;
        return $this;
    }

    /**
     * Set the compteur fil discussion.
     *
     * @param int $compteurFilDiscussion The compteur fil discussion.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCompteurFilDiscussion($compteurFilDiscussion) {
        $this->compteurFilDiscussion = $compteurFilDiscussion;
        return $this;
    }

    /**
     * Set the confidentialite affaire.
     *
     * @param bool $confidentialiteAffaire The confidentialite affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setConfidentialiteAffaire($confidentialiteAffaire) {
        $this->confidentialiteAffaire = $confidentialiteAffaire;
        return $this;
    }

    /**
     * Set the cout moyen horaire.
     *
     * @param float $coutMoyenHoraire The cout moyen horaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCoutMoyenHoraire($coutMoyenHoraire) {
        $this->coutMoyenHoraire = $coutMoyenHoraire;
        return $this;
    }

    /**
     * Set the create cli1 fact par bl.
     *
     * @param bool $createCli1FactParBl The create cli1 fact par bl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCreateCli1FactParBl($createCli1FactParBl) {
        $this->createCli1FactParBl = $createCli1FactParBl;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool $creationAffaire The creation affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setCreationAffaire($creationAffaire) {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the date dha.
     *
     * @param DateTime|null $dateDha The date dha.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDateDha(DateTime $dateDha = null) {
        $this->dateDha = $dateDha;
        return $this;
    }

    /**
     * Set the date last exe qpub web.
     *
     * @param DateTime|null $dateLastExeQpubWeb The date last exe qpub web.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDateLastExeQpubWeb(DateTime $dateLastExeQpubWeb = null) {
        $this->dateLastExeQpubWeb = $dateLastExeQpubWeb;
        return $this;
    }

    /**
     * Set the date pha.
     *
     * @param DateTime|null $datePha The date pha.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDatePha(DateTime $datePha = null) {
        $this->datePha = $datePha;
        return $this;
    }

    /**
     * Set the derniere version cd.
     *
     * @param string $derniereVersionCd The derniere version cd.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDerniereVersionCd($derniereVersionCd) {
        $this->derniereVersionCd = $derniereVersionCd;
        return $this;
    }

    /**
     * Set the droit collab visu documents.
     *
     * @param bool $droitCollabVisuDocuments The droit collab visu documents.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setDroitCollabVisuDocuments($droitCollabVisuDocuments) {
        $this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
        return $this;
    }

    /**
     * Set the ech detail aff.
     *
     * @param bool $echDetailAff The ech detail aff.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setEchDetailAff($echDetailAff) {
        $this->echDetailAff = $echDetailAff;
        return $this;
    }

    /**
     * Set the etebac dest message.
     *
     * @param string $etebacDestMessage The etebac dest message.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setEtebacDestMessage($etebacDestMessage) {
        $this->etebacDestMessage = $etebacDestMessage;
        return $this;
    }

    /**
     * Set the f gsur ac.
     *
     * @param bool $fGsurAc The f gsur ac.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFGsurAc($fGsurAc) {
        $this->fGsurAc = $fGsurAc;
        return $this;
    }

    /**
     * Set the f gsur monf.
     *
     * @param bool $fGsurMonf The f gsur monf.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFGsurMonf($fGsurMonf) {
        $this->fGsurMonf = $fGsurMonf;
        return $this;
    }

    /**
     * Set the familles liees.
     *
     * @param bool $famillesLiees The familles liees.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFamillesLiees($famillesLiees) {
        $this->famillesLiees = $famillesLiees;
        return $this;
    }

    /**
     * Set the fg sur cde frn.
     *
     * @param bool $fgSurCdeFrn The fg sur cde frn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFgSurCdeFrn($fgSurCdeFrn) {
        $this->fgSurCdeFrn = $fgSurCdeFrn;
        return $this;
    }

    /**
     * Set the fiche cli ne pas proposer creation dpdc.
     *
     * @param bool $ficheCliNePasProposerCreationDpdc The fiche cli ne pas proposer creation dpdc.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFicheCliNePasProposerCreationDpdc($ficheCliNePasProposerCreationDpdc) {
        $this->ficheCliNePasProposerCreationDpdc = $ficheCliNePasProposerCreationDpdc;
        return $this;
    }

    /**
     * Set the gestion gammes.
     *
     * @param bool $gestionGammes The gestion gammes.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionGammes($gestionGammes) {
        $this->gestionGammes = $gestionGammes;
        return $this;
    }

    /**
     * Set the gestion pointeuse q fact.
     *
     * @param bool $gestionPointeuseQFact The gestion pointeuse q fact.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQFact($gestionPointeuseQFact) {
        $this->gestionPointeuseQFact = $gestionPointeuseQFact;
        return $this;
    }

    /**
     * Set the gestion pointeuse qc.
     *
     * @param bool $gestionPointeuseQc The gestion pointeuse qc.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQc($gestionPointeuseQc) {
        $this->gestionPointeuseQc = $gestionPointeuseQc;
        return $this;
    }

    /**
     * Set the gestion pointeuse qgi.
     *
     * @param bool $gestionPointeuseQgi The gestion pointeuse qgi.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQgi($gestionPointeuseQgi) {
        $this->gestionPointeuseQgi = $gestionPointeuseQgi;
        return $this;
    }

    /**
     * Set the gestion pointeuse qp.
     *
     * @param bool $gestionPointeuseQp The gestion pointeuse qp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionPointeuseQp($gestionPointeuseQp) {
        $this->gestionPointeuseQp = $gestionPointeuseQp;
        return $this;
    }

    /**
     * Set the gestion tarifs transporteurs.
     *
     * @param bool $gestionTarifsTransporteurs The gestion tarifs transporteurs.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionTarifsTransporteurs($gestionTarifsTransporteurs) {
        $this->gestionTarifsTransporteurs = $gestionTarifsTransporteurs;
        return $this;
    }

    /**
     * Set the gestion tarifs transporteurs nb dec.
     *
     * @param int $gestionTarifsTransporteursNbDec The gestion tarifs transporteurs nb dec.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionTarifsTransporteursNbDec($gestionTarifsTransporteursNbDec) {
        $this->gestionTarifsTransporteursNbDec = $gestionTarifsTransporteursNbDec;
        return $this;
    }

    /**
     * Set the gestion variantes.
     *
     * @param bool $gestionVariantes The gestion variantes.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setGestionVariantes($gestionVariantes) {
        $this->gestionVariantes = $gestionVariantes;
        return $this;
    }

    /**
     * Set the ht avec jours feries.
     *
     * @param bool $htAvecJoursFeries The ht avec jours feries.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecJoursFeries($htAvecJoursFeries) {
        $this->htAvecJoursFeries = $htAvecJoursFeries;
        return $this;
    }

    /**
     * Set the ht avec saisie conges.
     *
     * @param bool $htAvecSaisieConges The ht avec saisie conges.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecSaisieConges($htAvecSaisieConges) {
        $this->htAvecSaisieConges = $htAvecSaisieConges;
        return $this;
    }

    /**
     * Set the ht avec saisie conges codes clients.
     *
     * @param string $htAvecSaisieCongesCodesClients The ht avec saisie conges codes clients.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecSaisieCongesCodesClients($htAvecSaisieCongesCodesClients) {
        $this->htAvecSaisieCongesCodesClients = $htAvecSaisieCongesCodesClients;
        return $this;
    }

    /**
     * Set the ht avec saisie conges codes taches.
     *
     * @param string $htAvecSaisieCongesCodesTaches The ht avec saisie conges codes taches.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setHtAvecSaisieCongesCodesTaches($htAvecSaisieCongesCodesTaches) {
        $this->htAvecSaisieCongesCodesTaches = $htAvecSaisieCongesCodesTaches;
        return $this;
    }

    /**
     * Set the increm auto article.
     *
     * @param bool $incremAutoArticle The increm auto article.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setIncremAutoArticle($incremAutoArticle) {
        $this->incremAutoArticle = $incremAutoArticle;
        return $this;
    }

    /**
     * Set the interdire acces archives cpta.
     *
     * @param bool $interdireAccesArchivesCpta The interdire acces archives cpta.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesArchivesCpta($interdireAccesArchivesCpta) {
        $this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
        return $this;
    }

    /**
     * Set the interdire acces archives paie.
     *
     * @param bool $interdireAccesArchivesPaie The interdire acces archives paie.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesArchivesPaie($interdireAccesArchivesPaie) {
        $this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
        return $this;
    }

    /**
     * Set the interdire acces edition balance.
     *
     * @param bool $interdireAccesEditionBalance The interdire acces edition balance.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesEditionBalance($interdireAccesEditionBalance) {
        $this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
        return $this;
    }

    /**
     * Set the interdire acces supp doc arch.
     *
     * @param bool $interdireAccesSuppDocArch The interdire acces supp doc arch.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdireAccesSuppDocArch($interdireAccesSuppDocArch) {
        $this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
        return $this;
    }

    /**
     * Set the interdire publi doc web.
     *
     * @param bool $interdirePubliDocWeb The interdire publi doc web.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setInterdirePubliDocWeb($interdirePubliDocWeb) {
        $this->interdirePubliDocWeb = $interdirePubliDocWeb;
        return $this;
    }

    /**
     * Set the ip prive qws.
     *
     * @param string $ipPriveQws The ip prive qws.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setIpPriveQws($ipPriveQws) {
        $this->ipPriveQws = $ipPriveQws;
        return $this;
    }

    /**
     * Set the liaison tda.
     *
     * @param bool $liaisonTda The liaison tda.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLiaisonTda($liaisonTda) {
        $this->liaisonTda = $liaisonTda;
        return $this;
    }

    /**
     * Set the lib affectation frn1.
     *
     * @param string $libAffectationFrn1 The lib affectation frn1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn1($libAffectationFrn1) {
        $this->libAffectationFrn1 = $libAffectationFrn1;
        return $this;
    }

    /**
     * Set the lib affectation frn2.
     *
     * @param string $libAffectationFrn2 The lib affectation frn2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn2($libAffectationFrn2) {
        $this->libAffectationFrn2 = $libAffectationFrn2;
        return $this;
    }

    /**
     * Set the lib affectation frn3.
     *
     * @param string $libAffectationFrn3 The lib affectation frn3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn3($libAffectationFrn3) {
        $this->libAffectationFrn3 = $libAffectationFrn3;
        return $this;
    }

    /**
     * Set the lib affectation frn4.
     *
     * @param string $libAffectationFrn4 The lib affectation frn4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn4($libAffectationFrn4) {
        $this->libAffectationFrn4 = $libAffectationFrn4;
        return $this;
    }

    /**
     * Set the lib affectation frn5.
     *
     * @param string $libAffectationFrn5 The lib affectation frn5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn5($libAffectationFrn5) {
        $this->libAffectationFrn5 = $libAffectationFrn5;
        return $this;
    }

    /**
     * Set the lib affectation frn6.
     *
     * @param string $libAffectationFrn6 The lib affectation frn6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn6($libAffectationFrn6) {
        $this->libAffectationFrn6 = $libAffectationFrn6;
        return $this;
    }

    /**
     * Set the lib affectation frn7.
     *
     * @param string $libAffectationFrn7 The lib affectation frn7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibAffectationFrn7($libAffectationFrn7) {
        $this->libAffectationFrn7 = $libAffectationFrn7;
        return $this;
    }

    /**
     * Set the lib critere article21.
     *
     * @param string $libCritereArticle21 The lib critere article21.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle21($libCritereArticle21) {
        $this->libCritereArticle21 = $libCritereArticle21;
        return $this;
    }

    /**
     * Set the lib critere article210.
     *
     * @param string $libCritereArticle210 The lib critere article210.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle210($libCritereArticle210) {
        $this->libCritereArticle210 = $libCritereArticle210;
        return $this;
    }

    /**
     * Set the lib critere article22.
     *
     * @param string $libCritereArticle22 The lib critere article22.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle22($libCritereArticle22) {
        $this->libCritereArticle22 = $libCritereArticle22;
        return $this;
    }

    /**
     * Set the lib critere article23.
     *
     * @param string $libCritereArticle23 The lib critere article23.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle23($libCritereArticle23) {
        $this->libCritereArticle23 = $libCritereArticle23;
        return $this;
    }

    /**
     * Set the lib critere article24.
     *
     * @param string $libCritereArticle24 The lib critere article24.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle24($libCritereArticle24) {
        $this->libCritereArticle24 = $libCritereArticle24;
        return $this;
    }

    /**
     * Set the lib critere article25.
     *
     * @param string $libCritereArticle25 The lib critere article25.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle25($libCritereArticle25) {
        $this->libCritereArticle25 = $libCritereArticle25;
        return $this;
    }

    /**
     * Set the lib critere article26.
     *
     * @param string $libCritereArticle26 The lib critere article26.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle26($libCritereArticle26) {
        $this->libCritereArticle26 = $libCritereArticle26;
        return $this;
    }

    /**
     * Set the lib critere article27.
     *
     * @param string $libCritereArticle27 The lib critere article27.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle27($libCritereArticle27) {
        $this->libCritereArticle27 = $libCritereArticle27;
        return $this;
    }

    /**
     * Set the lib critere article28.
     *
     * @param string $libCritereArticle28 The lib critere article28.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle28($libCritereArticle28) {
        $this->libCritereArticle28 = $libCritereArticle28;
        return $this;
    }

    /**
     * Set the lib critere article29.
     *
     * @param string $libCritereArticle29 The lib critere article29.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereArticle29($libCritereArticle29) {
        $this->libCritereArticle29 = $libCritereArticle29;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac1.
     *
     * @param string $libCritereEntPieceAc1 The lib critere ent piece ac1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc1($libCritereEntPieceAc1) {
        $this->libCritereEntPieceAc1 = $libCritereEntPieceAc1;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac10.
     *
     * @param string $libCritereEntPieceAc10 The lib critere ent piece ac10.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc10($libCritereEntPieceAc10) {
        $this->libCritereEntPieceAc10 = $libCritereEntPieceAc10;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac2.
     *
     * @param string $libCritereEntPieceAc2 The lib critere ent piece ac2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc2($libCritereEntPieceAc2) {
        $this->libCritereEntPieceAc2 = $libCritereEntPieceAc2;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac3.
     *
     * @param string $libCritereEntPieceAc3 The lib critere ent piece ac3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc3($libCritereEntPieceAc3) {
        $this->libCritereEntPieceAc3 = $libCritereEntPieceAc3;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac4.
     *
     * @param string $libCritereEntPieceAc4 The lib critere ent piece ac4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc4($libCritereEntPieceAc4) {
        $this->libCritereEntPieceAc4 = $libCritereEntPieceAc4;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac5.
     *
     * @param string $libCritereEntPieceAc5 The lib critere ent piece ac5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc5($libCritereEntPieceAc5) {
        $this->libCritereEntPieceAc5 = $libCritereEntPieceAc5;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac6.
     *
     * @param string $libCritereEntPieceAc6 The lib critere ent piece ac6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc6($libCritereEntPieceAc6) {
        $this->libCritereEntPieceAc6 = $libCritereEntPieceAc6;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac7.
     *
     * @param string $libCritereEntPieceAc7 The lib critere ent piece ac7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc7($libCritereEntPieceAc7) {
        $this->libCritereEntPieceAc7 = $libCritereEntPieceAc7;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac8.
     *
     * @param string $libCritereEntPieceAc8 The lib critere ent piece ac8.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc8($libCritereEntPieceAc8) {
        $this->libCritereEntPieceAc8 = $libCritereEntPieceAc8;
        return $this;
    }

    /**
     * Set the lib critere ent piece ac9.
     *
     * @param string $libCritereEntPieceAc9 The lib critere ent piece ac9.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibCritereEntPieceAc9($libCritereEntPieceAc9) {
        $this->libCritereEntPieceAc9 = $libCritereEntPieceAc9;
        return $this;
    }

    /**
     * Set the lib frais1.
     *
     * @param string $libFrais1 The lib frais1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibFrais1($libFrais1) {
        $this->libFrais1 = $libFrais1;
        return $this;
    }

    /**
     * Set the lib frais2.
     *
     * @param string $libFrais2 The lib frais2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibFrais2($libFrais2) {
        $this->libFrais2 = $libFrais2;
        return $this;
    }

    /**
     * Set the lib frais3.
     *
     * @param string $libFrais3 The lib frais3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibFrais3($libFrais3) {
        $this->libFrais3 = $libFrais3;
        return $this;
    }

    /**
     * Set the libelle gamme.
     *
     * @param string $libelleGamme The libelle gamme.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibelleGamme($libelleGamme) {
        $this->libelleGamme = $libelleGamme;
        return $this;
    }

    /**
     * Set the libelle variante.
     *
     * @param string $libelleVariante The libelle variante.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLibelleVariante($libelleVariante) {
        $this->libelleVariante = $libelleVariante;
        return $this;
    }

    /**
     * Set the longueur num aff.
     *
     * @param int $longueurNumAff The longueur num aff.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setLongueurNumAff($longueurNumAff) {
        $this->longueurNumAff = $longueurNumAff;
        return $this;
    }

    /**
     * Set the maj codes activite cga.
     *
     * @param string $majCodesActiviteCga The maj codes activite cga.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setMajCodesActiviteCga($majCodesActiviteCga) {
        $this->majCodesActiviteCga = $majCodesActiviteCga;
        return $this;
    }

    /**
     * Set the mess aspod.
     *
     * @param bool $messAspod The mess aspod.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setMessAspod($messAspod) {
        $this->messAspod = $messAspod;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string $modifAffaire The modif affaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setModifAffaire($modifAffaire) {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif droits asp.
     *
     * @param bool $modifDroitsAsp The modif droits asp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setModifDroitsAsp($modifDroitsAsp) {
        $this->modifDroitsAsp = $modifDroitsAsp;
        return $this;
    }

    /**
     * Set the nb max gamme.
     *
     * @param int $nbMaxGamme The nb max gamme.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNbMaxGamme($nbMaxGamme) {
        $this->nbMaxGamme = $nbMaxGamme;
        return $this;
    }

    /**
     * Set the ne pas creer cpt cli.
     *
     * @param bool $nePasCreerCptCli The ne pas creer cpt cli.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNePasCreerCptCli($nePasCreerCptCli) {
        $this->nePasCreerCptCli = $nePasCreerCptCli;
        return $this;
    }

    /**
     * Set the ne pas creer cpt frn.
     *
     * @param bool $nePasCreerCptFrn The ne pas creer cpt frn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNePasCreerCptFrn($nePasCreerCptFrn) {
        $this->nePasCreerCptFrn = $nePasCreerCptFrn;
        return $this;
    }

    /**
     * Set the new db infos.
     *
     * @param bool $newDbInfos The new db infos.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNewDbInfos($newDbInfos) {
        $this->newDbInfos = $newDbInfos;
        return $this;
    }

    /**
     * Set the new q bureau.
     *
     * @param bool $newQBureau The new q bureau.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNewQBureau($newQBureau) {
        $this->newQBureau = $newQBureau;
        return $this;
    }

    /**
     * Set the no doss fact cab.
     *
     * @param string $noDossFactCab The no doss fact cab.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNoDossFactCab($noDossFactCab) {
        $this->noDossFactCab = $noDossFactCab;
        return $this;
    }

    /**
     * Set the pas de lien comptabilite.
     *
     * @param bool $pasDeLienComptabilite The pas de lien comptabilite.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPasDeLienComptabilite($pasDeLienComptabilite) {
        $this->pasDeLienComptabilite = $pasDeLienComptabilite;
        return $this;
    }

    /**
     * Set the pme dossier rattachement.
     *
     * @param string $pmeDossierRattachement The pme dossier rattachement.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPmeDossierRattachement($pmeDossierRattachement) {
        $this->pmeDossierRattachement = $pmeDossierRattachement;
        return $this;
    }

    /**
     * Set the prefixe code client.
     *
     * @param string $prefixeCodeClient The prefixe code client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPrefixeCodeClient($prefixeCodeClient) {
        $this->prefixeCodeClient = $prefixeCodeClient;
        return $this;
    }

    /**
     * Set the prochain code client.
     *
     * @param string $prochainCodeClient The prochain code client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProchainCodeClient($prochainCodeClient) {
        $this->prochainCodeClient = $prochainCodeClient;
        return $this;
    }

    /**
     * Set the proxy actif.
     *
     * @param bool $proxyActif The proxy actif.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProxyActif($proxyActif) {
        $this->proxyActif = $proxyActif;
        return $this;
    }

    /**
     * Set the proxy adresse.
     *
     * @param string $proxyAdresse The proxy adresse.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProxyAdresse($proxyAdresse) {
        $this->proxyAdresse = $proxyAdresse;
        return $this;
    }

    /**
     * Set the proxy port.
     *
     * @param int $proxyPort The proxy port.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setProxyPort($proxyPort) {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Set the q pub web code collaborateur dest.
     *
     * @param string $qPubWebCodeCollaborateurDest The q pub web code collaborateur dest.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQPubWebCodeCollaborateurDest($qPubWebCodeCollaborateurDest) {
        $this->qPubWebCodeCollaborateurDest = $qPubWebCodeCollaborateurDest;
        return $this;
    }

    /**
     * Set the qws chemin logo.
     *
     * @param string $qwsCheminLogo The qws chemin logo.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsCheminLogo($qwsCheminLogo) {
        $this->qwsCheminLogo = $qwsCheminLogo;
        return $this;
    }

    /**
     * Set the qws code ipl.
     *
     * @param string $qwsCodeIpl The qws code ipl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsCodeIpl($qwsCodeIpl) {
        $this->qwsCodeIpl = $qwsCodeIpl;
        return $this;
    }

    /**
     * Set the qws http securise.
     *
     * @param bool $qwsHttpSecurise The qws http securise.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsHttpSecurise($qwsHttpSecurise) {
        $this->qwsHttpSecurise = $qwsHttpSecurise;
        return $this;
    }

    /**
     * Set the qws nom produit.
     *
     * @param string $qwsNomProduit The qws nom produit.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsNomProduit($qwsNomProduit) {
        $this->qwsNomProduit = $qwsNomProduit;
        return $this;
    }

    /**
     * Set the qws utiliser logo cabinet.
     *
     * @param bool $qwsUtiliserLogoCabinet The qws utiliser logo cabinet.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsUtiliserLogoCabinet($qwsUtiliserLogoCabinet) {
        $this->qwsUtiliserLogoCabinet = $qwsUtiliserLogoCabinet;
        return $this;
    }

    /**
     * Set the qwsipl.
     *
     * @param string $qwsipl The qwsipl.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setQwsipl($qwsipl) {
        $this->qwsipl = $qwsipl;
        return $this;
    }

    /**
     * Set the rac data paie.
     *
     * @param string $racDataPaie The rac data paie.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setRacDataPaie($racDataPaie) {
        $this->racDataPaie = $racDataPaie;
        return $this;
    }

    /**
     * Set the rapport q infos.
     *
     * @param string $rapportQInfos The rapport q infos.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setRapportQInfos($rapportQInfos) {
        $this->rapportQInfos = $rapportQInfos;
        return $this;
    }

    /**
     * Set the req demandeur.
     *
     * @param string $reqDemandeur The req demandeur.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setReqDemandeur($reqDemandeur) {
        $this->reqDemandeur = $reqDemandeur;
        return $this;
    }

    /**
     * Set the saisie propriete mess.
     *
     * @param int $saisieProprieteMess The saisie propriete mess.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieProprieteMess($saisieProprieteMess) {
        $this->saisieProprieteMess = $saisieProprieteMess;
        return $this;
    }

    /**
     * Set the saisie regl direct.
     *
     * @param bool $saisieReglDirect The saisie regl direct.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieReglDirect($saisieReglDirect) {
        $this->saisieReglDirect = $saisieReglDirect;
        return $this;
    }

    /**
     * Set the saisie temps nb j apres.
     *
     * @param int $saisieTempsNbJApres The saisie temps nb j apres.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTempsNbJApres($saisieTempsNbJApres) {
        $this->saisieTempsNbJApres = $saisieTempsNbJApres;
        return $this;
    }

    /**
     * Set the saisie temps nb j avant.
     *
     * @param int $saisieTempsNbJAvant The saisie temps nb j avant.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTempsNbJAvant($saisieTempsNbJAvant) {
        $this->saisieTempsNbJAvant = $saisieTempsNbJAvant;
        return $this;
    }

    /**
     * Set the saisie tp ne pas afficher dp.
     *
     * @param bool $saisieTpNePasAfficherDp The saisie tp ne pas afficher dp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTpNePasAfficherDp($saisieTpNePasAfficherDp) {
        $this->saisieTpNePasAfficherDp = $saisieTpNePasAfficherDp;
        return $this;
    }

    /**
     * Set the saisie tp onglet unique dp.
     *
     * @param bool $saisieTpOngletUniqueDp The saisie tp onglet unique dp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTpOngletUniqueDp($saisieTpOngletUniqueDp) {
        $this->saisieTpOngletUniqueDp = $saisieTpOngletUniqueDp;
        return $this;
    }

    /**
     * Set the saisie tp onglet unique tn.
     *
     * @param bool $saisieTpOngletUniqueTn The saisie tp onglet unique tn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaisieTpOngletUniqueTn($saisieTpOngletUniqueTn) {
        $this->saisieTpOngletUniqueTn = $saisieTpOngletUniqueTn;
        return $this;
    }

    /**
     * Set the save histo memo2 file.
     *
     * @param bool $saveHistoMemo2File The save histo memo2 file.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSaveHistoMemo2File($saveHistoMemo2File) {
        $this->saveHistoMemo2File = $saveHistoMemo2File;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestion modifiables.
     *
     * @param bool $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoAccesGestionModifiables($selAvLstPersoAccesGestionModifiables) {
        $this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestionnaire.
     *
     * @param bool $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoAccesGestionnaire($selAvLstPersoAccesGestionnaire) {
        $this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the sel av lst perso champs modif.
     *
     * @param bool $selAvLstPersoChampsModif The sel av lst perso champs modif.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoChampsModif($selAvLstPersoChampsModif) {
        $this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the sel av lst perso copie colonne.
     *
     * @param bool $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoCopieColonne($selAvLstPersoCopieColonne) {
        $this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the sel av lst perso interdire creat.
     *
     * @param bool $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSelAvLstPersoInterdireCreat($selAvLstPersoInterdireCreat) {
        $this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the sms api key.
     *
     * @param string $smsApiKey The sms api key.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsApiKey($smsApiKey) {
        $this->smsApiKey = $smsApiKey;
        return $this;
    }

    /**
     * Set the sms droit acces.
     *
     * @param bool $smsDroitAcces The sms droit acces.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsDroitAcces($smsDroitAcces) {
        $this->smsDroitAcces = $smsDroitAcces;
        return $this;
    }

    /**
     * Set the sms key.
     *
     * @param string $smsKey The sms key.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsKey($smsKey) {
        $this->smsKey = $smsKey;
        return $this;
    }

    /**
     * Set the sms prestataire.
     *
     * @param string $smsPrestataire The sms prestataire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsPrestataire($smsPrestataire) {
        $this->smsPrestataire = $smsPrestataire;
        return $this;
    }

    /**
     * Set the sms sender.
     *
     * @param string $smsSender The sms sender.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsSender($smsSender) {
        $this->smsSender = $smsSender;
        return $this;
    }

    /**
     * Set the sms type.
     *
     * @param int $smsType The sms type.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsType($smsType) {
        $this->smsType = $smsType;
        return $this;
    }

    /**
     * Set the sms user login.
     *
     * @param string $smsUserLogin The sms user login.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSmsUserLogin($smsUserLogin) {
        $this->smsUserLogin = $smsUserLogin;
        return $this;
    }

    /**
     * Set the solde cpta od.
     *
     * @param bool $soldeCptaOd The solde cpta od.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSoldeCptaOd($soldeCptaOd) {
        $this->soldeCptaOd = $soldeCptaOd;
        return $this;
    }

    /**
     * Set the suivi client intitule generic1.
     *
     * @param string $suiviClientIntituleGeneric1 The suivi client intitule generic1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric1($suiviClientIntituleGeneric1) {
        $this->suiviClientIntituleGeneric1 = $suiviClientIntituleGeneric1;
        return $this;
    }

    /**
     * Set the suivi client intitule generic10.
     *
     * @param string $suiviClientIntituleGeneric10 The suivi client intitule generic10.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric10($suiviClientIntituleGeneric10) {
        $this->suiviClientIntituleGeneric10 = $suiviClientIntituleGeneric10;
        return $this;
    }

    /**
     * Set the suivi client intitule generic2.
     *
     * @param string $suiviClientIntituleGeneric2 The suivi client intitule generic2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric2($suiviClientIntituleGeneric2) {
        $this->suiviClientIntituleGeneric2 = $suiviClientIntituleGeneric2;
        return $this;
    }

    /**
     * Set the suivi client intitule generic3.
     *
     * @param string $suiviClientIntituleGeneric3 The suivi client intitule generic3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric3($suiviClientIntituleGeneric3) {
        $this->suiviClientIntituleGeneric3 = $suiviClientIntituleGeneric3;
        return $this;
    }

    /**
     * Set the suivi client intitule generic4.
     *
     * @param string $suiviClientIntituleGeneric4 The suivi client intitule generic4.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric4($suiviClientIntituleGeneric4) {
        $this->suiviClientIntituleGeneric4 = $suiviClientIntituleGeneric4;
        return $this;
    }

    /**
     * Set the suivi client intitule generic5.
     *
     * @param string $suiviClientIntituleGeneric5 The suivi client intitule generic5.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric5($suiviClientIntituleGeneric5) {
        $this->suiviClientIntituleGeneric5 = $suiviClientIntituleGeneric5;
        return $this;
    }

    /**
     * Set the suivi client intitule generic6.
     *
     * @param string $suiviClientIntituleGeneric6 The suivi client intitule generic6.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric6($suiviClientIntituleGeneric6) {
        $this->suiviClientIntituleGeneric6 = $suiviClientIntituleGeneric6;
        return $this;
    }

    /**
     * Set the suivi client intitule generic7.
     *
     * @param string $suiviClientIntituleGeneric7 The suivi client intitule generic7.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric7($suiviClientIntituleGeneric7) {
        $this->suiviClientIntituleGeneric7 = $suiviClientIntituleGeneric7;
        return $this;
    }

    /**
     * Set the suivi client intitule generic8.
     *
     * @param string $suiviClientIntituleGeneric8 The suivi client intitule generic8.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric8($suiviClientIntituleGeneric8) {
        $this->suiviClientIntituleGeneric8 = $suiviClientIntituleGeneric8;
        return $this;
    }

    /**
     * Set the suivi client intitule generic9.
     *
     * @param string $suiviClientIntituleGeneric9 The suivi client intitule generic9.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setSuiviClientIntituleGeneric9($suiviClientIntituleGeneric9) {
        $this->suiviClientIntituleGeneric9 = $suiviClientIntituleGeneric9;
        return $this;
    }

    /**
     * Set the tp acces encours client.
     *
     * @param bool $tpAccesEncoursClient The tp acces encours client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpAccesEncoursClient($tpAccesEncoursClient) {
        $this->tpAccesEncoursClient = $tpAccesEncoursClient;
        return $this;
    }

    /**
     * Set the tp avancement a la ligne.
     *
     * @param bool $tpAvancementALaLigne The tp avancement a la ligne.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpAvancementALaLigne($tpAvancementALaLigne) {
        $this->tpAvancementALaLigne = $tpAvancementALaLigne;
        return $this;
    }

    /**
     * Set the tp interdit qte.
     *
     * @param bool $tpInterditQte The tp interdit qte.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpInterditQte($tpInterditQte) {
        $this->tpInterditQte = $tpInterditQte;
        return $this;
    }

    /**
     * Set the tp libelle mission.
     *
     * @param bool $tpLibelleMission The tp libelle mission.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpLibelleMission($tpLibelleMission) {
        $this->tpLibelleMission = $tpLibelleMission;
        return $this;
    }

    /**
     * Set the tp limite saisie non operationnel.
     *
     * @param bool $tpLimiteSaisieNonOperationnel The tp limite saisie non operationnel.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpLimiteSaisieNonOperationnel($tpLimiteSaisieNonOperationnel) {
        $this->tpLimiteSaisieNonOperationnel = $tpLimiteSaisieNonOperationnel;
        return $this;
    }

    /**
     * Set the tp pas mois cloture.
     *
     * @param bool $tpPasMoisCloture The tp pas mois cloture.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpPasMoisCloture($tpPasMoisCloture) {
        $this->tpPasMoisCloture = $tpPasMoisCloture;
        return $this;
    }

    /**
     * Set the tp pourcentage non operationnel date.
     *
     * @param DateTime|null $tpPourcentageNonOperationnelDate The tp pourcentage non operationnel date.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpPourcentageNonOperationnelDate(DateTime $tpPourcentageNonOperationnelDate = null) {
        $this->tpPourcentageNonOperationnelDate = $tpPourcentageNonOperationnelDate;
        return $this;
    }

    /**
     * Set the tp qte invisible.
     *
     * @param bool $tpQteInvisible The tp qte invisible.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpQteInvisible($tpQteInvisible) {
        $this->tpQteInvisible = $tpQteInvisible;
        return $this;
    }

    /**
     * Set the tp saisie avancement.
     *
     * @param bool $tpSaisieAvancement The tp saisie avancement.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpSaisieAvancement($tpSaisieAvancement) {
        $this->tpSaisieAvancement = $tpSaisieAvancement;
        return $this;
    }

    /**
     * Set the tppupv123.
     *
     * @param bool $tppupv123 The tppupv123.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTppupv123($tppupv123) {
        $this->tppupv123 = $tppupv123;
        return $this;
    }

    /**
     * Set the tps num archive.
     *
     * @param string $tpsNumArchive The tps num archive.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTpsNumArchive($tpsNumArchive) {
        $this->tpsNumArchive = $tpsNumArchive;
        return $this;
    }

    /**
     * Set the trans variantes factgi.
     *
     * @param bool $transVariantesFactgi The trans variantes factgi.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTransVariantesFactgi($transVariantesFactgi) {
        $this->transVariantesFactgi = $transVariantesFactgi;
        return $this;
    }

    /**
     * Set the type affichage solde fourn.
     *
     * @param string $typeAffichageSoldeFourn The type affichage solde fourn.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeAffichageSoldeFourn($typeAffichageSoldeFourn) {
        $this->typeAffichageSoldeFourn = $typeAffichageSoldeFourn;
        return $this;
    }

    /**
     * Set the type frais1.
     *
     * @param bool $typeFrais1 The type frais1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeFrais1($typeFrais1) {
        $this->typeFrais1 = $typeFrais1;
        return $this;
    }

    /**
     * Set the type frais2.
     *
     * @param bool $typeFrais2 The type frais2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeFrais2($typeFrais2) {
        $this->typeFrais2 = $typeFrais2;
        return $this;
    }

    /**
     * Set the type frais3.
     *
     * @param bool $typeFrais3 The type frais3.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeFrais3($typeFrais3) {
        $this->typeFrais3 = $typeFrais3;
        return $this;
    }

    /**
     * Set the type saisie taux devises.
     *
     * @param string $typeSaisieTauxDevises The type saisie taux devises.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeSaisieTauxDevises($typeSaisieTauxDevises) {
        $this->typeSaisieTauxDevises = $typeSaisieTauxDevises;
        return $this;
    }

    /**
     * Set the v esur dep aff.
     *
     * @param bool $vEsurDepAff The v esur dep aff.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setVEsurDepAff($vEsurDepAff) {
        $this->vEsurDepAff = $vEsurDepAff;
        return $this;
    }

    /**
     * Set the val auto tarifs transporteurs.
     *
     * @param bool $valAutoTarifsTransporteurs The val auto tarifs transporteurs.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setValAutoTarifsTransporteurs($valAutoTarifsTransporteurs) {
        $this->valAutoTarifsTransporteurs = $valAutoTarifsTransporteurs;
        return $this;
    }

    /**
     * Set the visualisation fiche cabinet.
     *
     * @param bool $visualisationFicheCabinet The visualisation fiche cabinet.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setVisualisationFicheCabinet($visualisationFicheCabinet) {
        $this->visualisationFicheCabinet = $visualisationFicheCabinet;
        return $this;
    }

    /**
     * Set the word acces par q client.
     *
     * @param bool $wordAccesParQClient The word acces par q client.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setWordAccesParQClient($wordAccesParQClient) {
        $this->wordAccesParQClient = $wordAccesParQClient;
        return $this;
    }

    /**
     * Set the e ws cabinet.
     *
     * @param string $eWsCabinet The e ws cabinet.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsCabinet($eWsCabinet) {
        $this->eWsCabinet = $eWsCabinet;
        return $this;
    }

    /**
     * Set the e ws coll id.
     *
     * @param string $eWsCollId The e ws coll id.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsCollId($eWsCollId) {
        $this->eWsCollId = $eWsCollId;
        return $this;
    }

    /**
     * Set the e ws coll mdp.
     *
     * @param string $eWsCollMdp The e ws coll mdp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsCollMdp($eWsCollMdp) {
        $this->eWsCollMdp = $eWsCollMdp;
        return $this;
    }

    /**
     * Set the e ws srv mdp.
     *
     * @param string $eWsSrvMdp The e ws srv mdp.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsSrvMdp($eWsSrvMdp) {
        $this->eWsSrvMdp = $eWsSrvMdp;
        return $this;
    }

    /**
     * Set the e ws srv name.
     *
     * @param string $eWsSrvName The e ws srv name.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsSrvName($eWsSrvName) {
        $this->eWsSrvName = $eWsSrvName;
        return $this;
    }

    /**
     * Set the e ws srv util.
     *
     * @param string $eWsSrvUtil The e ws srv util.
     * @return Constantes2 Returns this Constantes2.
     */
    public function seteWsSrvUtil($eWsSrvUtil) {
        $this->eWsSrvUtil = $eWsSrvUtil;
        return $this;
    }

    /**
     * Set the lng code article auto.
     *
     * @param int $lngCodeArticleAuto The lng code article auto.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setlngCodeArticleAuto($lngCodeArticleAuto) {
        $this->lngCodeArticleAuto = $lngCodeArticleAuto;
        return $this;
    }
}
