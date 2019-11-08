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
 * Collaborateurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Collaborateurs {

    /**
     * Acces autorise bons travaux.
     *
     * @var bool
     */
    private $accesAutoriseBonsTravaux;

    /**
     * Acces autorise plan facturation.
     *
     * @var bool
     */
    private $accesAutorisePlanFacturation;

    /**
     * Acces autorise plan tache.
     *
     * @var bool
     */
    private $accesAutorisePlanTache;

    /**
     * Acces cur doss only.
     *
     * @var bool
     */
    private $accesCurDossOnly;

    /**
     * Acces docs cab.
     *
     * @var bool
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
     * Acces gestionaire stats croisees.
     *
     * @var bool
     */
    private $accesGestionaireStatsCroisees;

    /**
     * Acces rep commun.
     *
     * @var string
     */
    private $accesRepCommun;

    /**
     * Acces stat cab.
     *
     * @var bool
     */
    private $accesStatCab;

    /**
     * Annulation affaire.
     *
     * @var bool
     */
    private $annulationAffaire;

    /**
     * Annulation article.
     *
     * @var bool
     */
    private $annulationArticle;

    /**
     * Annulation bons travaux.
     *
     * @var bool
     */
    private $annulationBonsTravaux;

    /**
     * Annulation chantier.
     *
     * @var bool
     */
    private $annulationChantier;

    /**
     * Annulation client.
     *
     * @var bool
     */
    private $annulationClient;

    /**
     * Annulation commission.
     *
     * @var bool
     */
    private $annulationCommission;

    /**
     * Annulation dossier cpta.
     *
     * @var bool
     */
    private $annulationDossierCpta;

    /**
     * Annulation dossier fact.
     *
     * @var bool
     */
    private $annulationDossierFact;

    /**
     * Annulation dossier paie.
     *
     * @var bool
     */
    private $annulationDossierPaie;

    /**
     * Annulation fournisseur.
     *
     * @var bool
     */
    private $annulationFournisseur;

    /**
     * Annulation plan facturation.
     *
     * @var bool
     */
    private $annulationPlanFacturation;

    /**
     * Annulation plan tache.
     *
     * @var bool
     */
    private $annulationPlanTache;

    /**
     * Annulation tache.
     *
     * @var bool
     */
    private $annulationTache;

    /**
     * Annulation tarif.
     *
     * @var bool
     */
    private $annulationTarif;

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
     * Autorise saisie tps colonnes.
     *
     * @var bool
     */
    private $autoriseSaisieTpsColonnes;

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

    /**
     * Blocage ed cli.
     *
     * @var bool
     */
    private $blocageEdCli;

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
     * Categorie prix km.
     *
     * @var string
     */
    private $categoriePrixKm;

    /**
     * Categorie ticket resto.
     *
     * @var string
     */
    private $categorieTicketResto;

    /**
     * Charges mensuelles.
     *
     * @var float
     */
    private $chargesMensuelles;

    /**
     * Cle ccn paie.
     *
     * @var string
     */
    private $cleCcnPaie;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code chef1.
     *
     * @var string
     */
    private $codeChef1;

    /**
     * Code chef2.
     *
     * @var string
     */
    private $codeChef2;

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code famille frn.
     *
     * @var string
     */
    private $codeFamilleFrn;

    /**
     * Code groupe.
     *
     * @var string
     */
    private $codeGroupe;

    /**
     * Code groupe visu msg.
     *
     * @var string
     */
    private $codeGroupeVisuMsg;

    /**
     * Code langue.
     *
     * @var string
     */
    private $codeLangue;

    /**
     * Code liaison dest.
     *
     * @var string
     */
    private $codeLiaisonDest;

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
     * Code vehicule.
     *
     * @var string
     */
    private $codeVehicule;

    /**
     * Code ventil compta.
     *
     * @var string
     */
    private $codeVentilCompta;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Compte comptable.
     *
     * @var string
     */
    private $compteComptable;

    /**
     * Compte de tiers.
     *
     * @var string
     */
    private $compteDeTiers;

    /**
     * Controle saisie tp.
     *
     * @var string
     */
    private $controleSaisieTp;

    /**
     * Creation affaire.
     *
     * @var bool
     */
    private $creationAffaire;

    /**
     * Creation article.
     *
     * @var bool
     */
    private $creationArticle;

    /**
     * Creation bons travaux.
     *
     * @var bool
     */
    private $creationBonsTravaux;

    /**
     * Creation chantier.
     *
     * @var bool
     */
    private $creationChantier;

    /**
     * Creation client.
     *
     * @var bool
     */
    private $creationClient;

    /**
     * Creation commission.
     *
     * @var bool
     */
    private $creationCommission;

    /**
     * Creation dossier cpta.
     *
     * @var bool
     */
    private $creationDossierCpta;

    /**
     * Creation dossier fact.
     *
     * @var bool
     */
    private $creationDossierFact;

    /**
     * Creation dossier paie.
     *
     * @var bool
     */
    private $creationDossierPaie;

    /**
     * Creation fournisseur.
     *
     * @var bool
     */
    private $creationFournisseur;

    /**
     * Creation plan facturation.
     *
     * @var bool
     */
    private $creationPlanFacturation;

    /**
     * Creation plan tache.
     *
     * @var bool
     */
    private $creationPlanTache;

    /**
     * Creation tache.
     *
     * @var bool
     */
    private $creationTache;

    /**
     * Creation tarif.
     *
     * @var bool
     */
    private $creationTarif;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Date validation budget.
     *
     * @var DateTime|null
     */
    private $dateValidationBudget;

    /**
     * Date validation nd f.
     *
     * @var DateTime|null
     */
    private $dateValidationNdF;

    /**
     * Date validation tp.
     *
     * @var DateTime|null
     */
    private $dateValidationTp;

    /**
     * Desactiver filtre msg.
     *
     * @var bool
     */
    private $desactiverFiltreMsg;

    /**
     * Disponible.
     *
     * @var bool
     */
    private $disponible;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Dossier paie.
     *
     * @var string
     */
    private $dossierPaie;

    /**
     * Droit param emails confidentiels.
     *
     * @var bool
     */
    private $droitParamEmailsConfidentiels;

    /**
     * Droit sync port.
     *
     * @var bool
     */
    private $droitSyncPort;

    /**
     * Droit sync q prop.
     *
     * @var bool
     */
    private $droitSyncQProp;

    /**
     * e ws mdp.
     *
     * @var string
     */
    private $eWsMdp;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Email activer aide saisie.
     *
     * @var bool
     */
    private $emailActiverAideSaisie;

    /**
     * Email agenda dmd confirm.
     *
     * @var string
     */
    private $emailAgendaDmdConfirm;

    /**
     * Email auto cloture imap.
     *
     * @var bool
     */
    private $emailAutoClotureImap;

    /**
     * Email lst adr choix elem.
     *
     * @var int
     */
    private $emailLstAdrChoixElem;

    /**
     * Email mode signature.
     *
     * @var int
     */
    private $emailModeSignature;

    /**
     * Email nb j ag mini.
     *
     * @var int
     */
    private $emailNbJAgMini;

    /**
     * Email objet defaut.
     *
     * @var string
     */
    private $emailObjetDefaut;

    /**
     * Email pied.
     *
     * @var string
     */
    private $emailPied;

    /**
     * Email redir auto.
     *
     * @var bool
     */
    private $emailRedirAuto;

    /**
     * Email redir auto collab.
     *
     * @var string
     */
    private $emailRedirAutoCollab;

    /**
     * Email redirection.
     *
     * @var string
     */
    private $emailRedirection;

    /**
     * Email reponse auto.
     *
     * @var bool
     */
    private $emailReponseAuto;

    /**
     * Email reponse auto text.
     *
     * @var string
     */
    private $emailReponseAutoText;

    /**
     * Email rr active.
     *
     * @var bool
     */
    private $emailRrActive;

    /**
     * Email start mode.
     *
     * @var int
     */
    private $emailStartMode;

    /**
     * Email sur serveur.
     *
     * @var bool
     */
    private $emailSurServeur;

    /**
     * Email tete.
     *
     * @var string
     */
    private $emailTete;

    /**
     * Est acheteur.
     *
     * @var int
     */
    private $estAcheteur;

    /**
     * Etab confidentialite qp.
     *
     * @var string
     */
    private $etabConfidentialiteQp;

    /**
     * Fictif.
     *
     * @var bool
     */
    private $fictif;

    /**
     * Fonction.
     *
     * @var string
     */
    private $fonction;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Interdiction pwd.
     *
     * @var bool
     */
    private $interdictionPwd;

    /**
     * Interdiction vue facturation.
     *
     * @var bool
     */
    private $interdictionVueFacturation;

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
     * Interdire acces entete.
     *
     * @var bool
     */
    private $interdireAccesEntete;

    /**
     * Interdire acces supp doc arch.
     *
     * @var bool
     */
    private $interdireAccesSuppDocArch;

    /**
     * Interdire edition valorise jrn temps.
     *
     * @var bool
     */
    private $interdireEditionValoriseJrnTemps;

    /**
     * Interdire envoi postit.
     *
     * @var bool
     */
    private $interdireEnvoiPostit;

    /**
     * Interdire modif aff cli.
     *
     * @var bool
     */
    private $interdireModifAffCli;

    /**
     * Interdire modif depot.
     *
     * @var bool
     */
    private $interdireModifDepot;

    /**
     * Interdire publi doc web.
     *
     * @var bool
     */
    private $interdirePubliDocWeb;

    /**
     * Interim.
     *
     * @var bool
     */
    private $interim;

    /**
     * Is groupe.
     *
     * @var bool
     */
    private $isGroupe;

    /**
     * Is profil messages.
     *
     * @var bool
     */
    private $isProfilMessages;

    /**
     * Limiter visu agenda.
     *
     * @var bool
     */
    private $limiterVisuAgenda;

    /**
     * Masquer fournisseurs.
     *
     * @var bool
     */
    private $masquerFournisseurs;

    /**
     * Messages confidentiels.
     *
     * @var string
     */
    private $messagesConfidentiels;

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
     * Modif droits asp.
     *
     * @var bool
     */
    private $modifDroitsAsp;

    /**
     * Modif en vue.
     *
     * @var bool
     */
    private $modifEnVue;

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
     * Mot de passe.
     *
     * @var string
     */
    private $motDePasse;

    /**
     * Msg redir auto.
     *
     * @var bool
     */
    private $msgRedirAuto;

    /**
     * Niv conf emp proprete restreint.
     *
     * @var bool
     */
    private $nivConfEmpPropreteRestreint;

    /**
     * Niveau.
     *
     * @var int
     */
    private $niveau;

    /**
     * Niveau confidentialite qp.
     *
     * @var string
     */
    private $niveauConfidentialiteQp;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

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
     * Pa invisible.
     *
     * @var bool
     */
    private $paInvisible;

    /**
     * Parc code remorque.
     *
     * @var string
     */
    private $parcCodeRemorque;

    /**
     * Parc code vehicule.
     *
     * @var string
     */
    private $parcCodeVehicule;

    /**
     * Pas acces qws.
     *
     * @var bool
     */
    private $pasAccesQws;

    /**
     * Pas saisie des temps.
     *
     * @var bool
     */
    private $pasSaisieDesTemps;

    /**
     * Pas saisie des temps auto.
     *
     * @var bool
     */
    private $pasSaisieDesTempsAuto;

    /**
     * Portable perso.
     *
     * @var string
     */
    private $portablePerso;

    /**
     * Present.
     *
     * @var bool
     */
    private $present;

    /**
     * Prevenu nouveau cd.
     *
     * @var bool
     */
    private $prevenuNouveauCd;

    /**
     * Prix km.
     *
     * @var float
     */
    private $prixKm;

    /**
     * Prix vente.
     *
     * @var float
     */
    private $prixVente;

    /**
     * Prix vente2.
     *
     * @var float
     */
    private $prixVente2;

    /**
     * Prix vente3.
     *
     * @var float
     */
    private $prixVente3;

    /**
     * Restrict acces pieces.
     *
     * @var bool
     */
    private $restrictAccesPieces;

    /**
     * Restrict acces stats.
     *
     * @var bool
     */
    private $restrictAccesStats;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Saisie pv interdite.
     *
     * @var bool
     */
    private $saisiePvInterdite;

    /**
     * Salaire mensuel.
     *
     * @var float
     */
    private $salaireMensuel;

    /**
     * Sel art collab.
     *
     * @var bool
     */
    private $selArtCollab;

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
     * Sel cli collab.
     *
     * @var bool
     */
    private $selCliCollab;

    /**
     * Sel frn collab.
     *
     * @var bool
     */
    private $selFrnCollab;

    /**
     * Selection article.
     *
     * @var string
     */
    private $selectionArticle;

    /**
     * Selection client.
     *
     * @var string
     */
    private $selectionClient;

    /**
     * Selection fournisseur.
     *
     * @var string
     */
    private $selectionFournisseur;

    /**
     * Suivi messages.
     *
     * @var bool
     */
    private $suiviMessages;

    /**
     * Superviseur.
     *
     * @var bool
     */
    private $superviseur;

    /**
     * Sync mso.
     *
     * @var bool
     */
    private $syncMso;

    /**
     * Taches groupe.
     *
     * @var string
     */
    private $tachesGroupe;

    /**
     * Taux commission.
     *
     * @var float
     */
    private $tauxCommission;

    /**
     * Tel direct.
     *
     * @var string
     */
    private $telDirect;

    /**
     * Tel perso.
     *
     * @var string
     */
    private $telPerso;

    /**
     * Tel portable1.
     *
     * @var string
     */
    private $telPortable1;

    /**
     * Tel portable2.
     *
     * @var string
     */
    private $telPortable2;

    /**
     * Tel poste.
     *
     * @var string
     */
    private $telPoste;

    /**
     * Tp pas controler.
     *
     * @var bool
     */
    private $tpPasControler;

    /**
     * Tp pas journal temps.
     *
     * @var bool
     */
    private $tpPasJournalTemps;

    /**
     * Tp pas notes de frais.
     *
     * @var bool
     */
    private $tpPasNotesDeFrais;

    /**
     * Tp pas tps valide.
     *
     * @var bool
     */
    private $tpPasTpsValide;

    /**
     * Tp pourcentage non operationnel.
     *
     * @var float
     */
    private $tpPourcentageNonOperationnel;

    /**
     * Tps niveau blocage.
     *
     * @var string
     */
    private $tpsNiveauBlocage;

    /**
     * Tx com invisible.
     *
     * @var bool
     */
    private $txComInvisible;

    /**
     * Type conf2 cmav cli.
     *
     * @var string
     */
    private $typeConf2CmavCli;

    /**
     * Type conf cmav cli.
     *
     * @var string
     */
    private $typeConfCmavCli;

    /**
     * Type visu appels.
     *
     * @var string
     */
    private $typeVisuAppels;

    /**
     * Type visu taches.
     *
     * @var string
     */
    private $typeVisuTaches;

    /**
     * Use mail generic.
     *
     * @var bool
     */
    private $useMailGeneric;

    /**
     * Visualisation fiche cabinet.
     *
     * @var bool
     */
    private $visualisationFicheCabinet;

    /**
     * Vue com droit reaffect.
     *
     * @var bool
     */
    private $vueComDroitReaffect;

    /**
     * Vue devis droit reaffect.
     *
     * @var bool
     */
    private $vueDevisDroitReaffect;

    /**
     * Vue devis droit suppr.
     *
     * @var bool
     */
    private $vueDevisDroitSuppr;

    /**
     * Vue devis droit valid.
     *
     * @var bool
     */
    private $vueDevisDroitValid;

    /**
     * Ya droits collab.
     *
     * @var bool
     */
    private $yaDroitsCollab;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acces autorise bons travaux.
     *
     * @return bool Returns the acces autorise bons travaux.
     */
    public function getAccesAutoriseBonsTravaux() {
        return $this->accesAutoriseBonsTravaux;
    }

    /**
     * Get the acces autorise plan facturation.
     *
     * @return bool Returns the acces autorise plan facturation.
     */
    public function getAccesAutorisePlanFacturation() {
        return $this->accesAutorisePlanFacturation;
    }

    /**
     * Get the acces autorise plan tache.
     *
     * @return bool Returns the acces autorise plan tache.
     */
    public function getAccesAutorisePlanTache() {
        return $this->accesAutorisePlanTache;
    }

    /**
     * Get the acces cur doss only.
     *
     * @return bool Returns the acces cur doss only.
     */
    public function getAccesCurDossOnly() {
        return $this->accesCurDossOnly;
    }

    /**
     * Get the acces docs cab.
     *
     * @return bool Returns the acces docs cab.
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
     * Get the acces gestionaire stats croisees.
     *
     * @return bool Returns the acces gestionaire stats croisees.
     */
    public function getAccesGestionaireStatsCroisees() {
        return $this->accesGestionaireStatsCroisees;
    }

    /**
     * Get the acces rep commun.
     *
     * @return string Returns the acces rep commun.
     */
    public function getAccesRepCommun() {
        return $this->accesRepCommun;
    }

    /**
     * Get the acces stat cab.
     *
     * @return bool Returns the acces stat cab.
     */
    public function getAccesStatCab() {
        return $this->accesStatCab;
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
     * Get the annulation article.
     *
     * @return bool Returns the annulation article.
     */
    public function getAnnulationArticle() {
        return $this->annulationArticle;
    }

    /**
     * Get the annulation bons travaux.
     *
     * @return bool Returns the annulation bons travaux.
     */
    public function getAnnulationBonsTravaux() {
        return $this->annulationBonsTravaux;
    }

    /**
     * Get the annulation chantier.
     *
     * @return bool Returns the annulation chantier.
     */
    public function getAnnulationChantier() {
        return $this->annulationChantier;
    }

    /**
     * Get the annulation client.
     *
     * @return bool Returns the annulation client.
     */
    public function getAnnulationClient() {
        return $this->annulationClient;
    }

    /**
     * Get the annulation commission.
     *
     * @return bool Returns the annulation commission.
     */
    public function getAnnulationCommission() {
        return $this->annulationCommission;
    }

    /**
     * Get the annulation dossier cpta.
     *
     * @return bool Returns the annulation dossier cpta.
     */
    public function getAnnulationDossierCpta() {
        return $this->annulationDossierCpta;
    }

    /**
     * Get the annulation dossier fact.
     *
     * @return bool Returns the annulation dossier fact.
     */
    public function getAnnulationDossierFact() {
        return $this->annulationDossierFact;
    }

    /**
     * Get the annulation dossier paie.
     *
     * @return bool Returns the annulation dossier paie.
     */
    public function getAnnulationDossierPaie() {
        return $this->annulationDossierPaie;
    }

    /**
     * Get the annulation fournisseur.
     *
     * @return bool Returns the annulation fournisseur.
     */
    public function getAnnulationFournisseur() {
        return $this->annulationFournisseur;
    }

    /**
     * Get the annulation plan facturation.
     *
     * @return bool Returns the annulation plan facturation.
     */
    public function getAnnulationPlanFacturation() {
        return $this->annulationPlanFacturation;
    }

    /**
     * Get the annulation plan tache.
     *
     * @return bool Returns the annulation plan tache.
     */
    public function getAnnulationPlanTache() {
        return $this->annulationPlanTache;
    }

    /**
     * Get the annulation tache.
     *
     * @return bool Returns the annulation tache.
     */
    public function getAnnulationTache() {
        return $this->annulationTache;
    }

    /**
     * Get the annulation tarif.
     *
     * @return bool Returns the annulation tarif.
     */
    public function getAnnulationTarif() {
        return $this->annulationTarif;
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
     * Get the autorise saisie tps colonnes.
     *
     * @return bool Returns the autorise saisie tps colonnes.
     */
    public function getAutoriseSaisieTpsColonnes() {
        return $this->autoriseSaisieTpsColonnes;
    }

    /**
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
    }

    /**
     * Get the blocage ed cli.
     *
     * @return bool Returns the blocage ed cli.
     */
    public function getBlocageEdCli() {
        return $this->blocageEdCli;
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
     * Get the categorie prix km.
     *
     * @return string Returns the categorie prix km.
     */
    public function getCategoriePrixKm() {
        return $this->categoriePrixKm;
    }

    /**
     * Get the categorie ticket resto.
     *
     * @return string Returns the categorie ticket resto.
     */
    public function getCategorieTicketResto() {
        return $this->categorieTicketResto;
    }

    /**
     * Get the charges mensuelles.
     *
     * @return float Returns the charges mensuelles.
     */
    public function getChargesMensuelles() {
        return $this->chargesMensuelles;
    }

    /**
     * Get the cle ccn paie.
     *
     * @return string Returns the cle ccn paie.
     */
    public function getCleCcnPaie() {
        return $this->cleCcnPaie;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code chef1.
     *
     * @return string Returns the code chef1.
     */
    public function getCodeChef1() {
        return $this->codeChef1;
    }

    /**
     * Get the code chef2.
     *
     * @return string Returns the code chef2.
     */
    public function getCodeChef2() {
        return $this->codeChef2;
    }

    /**
     * Get the code depot.
     *
     * @return string Returns the code depot.
     */
    public function getCodeDepot() {
        return $this->codeDepot;
    }

    /**
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code famille frn.
     *
     * @return string Returns the code famille frn.
     */
    public function getCodeFamilleFrn() {
        return $this->codeFamilleFrn;
    }

    /**
     * Get the code groupe.
     *
     * @return string Returns the code groupe.
     */
    public function getCodeGroupe() {
        return $this->codeGroupe;
    }

    /**
     * Get the code groupe visu msg.
     *
     * @return string Returns the code groupe visu msg.
     */
    public function getCodeGroupeVisuMsg() {
        return $this->codeGroupeVisuMsg;
    }

    /**
     * Get the code langue.
     *
     * @return string Returns the code langue.
     */
    public function getCodeLangue() {
        return $this->codeLangue;
    }

    /**
     * Get the code liaison dest.
     *
     * @return string Returns the code liaison dest.
     */
    public function getCodeLiaisonDest() {
        return $this->codeLiaisonDest;
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
     * Get the code vehicule.
     *
     * @return string Returns the code vehicule.
     */
    public function getCodeVehicule() {
        return $this->codeVehicule;
    }

    /**
     * Get the code ventil compta.
     *
     * @return string Returns the code ventil compta.
     */
    public function getCodeVentilCompta() {
        return $this->codeVentilCompta;
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
     * Get the compte comptable.
     *
     * @return string Returns the compte comptable.
     */
    public function getCompteComptable() {
        return $this->compteComptable;
    }

    /**
     * Get the compte de tiers.
     *
     * @return string Returns the compte de tiers.
     */
    public function getCompteDeTiers() {
        return $this->compteDeTiers;
    }

    /**
     * Get the controle saisie tp.
     *
     * @return string Returns the controle saisie tp.
     */
    public function getControleSaisieTp() {
        return $this->controleSaisieTp;
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
     * Get the creation article.
     *
     * @return bool Returns the creation article.
     */
    public function getCreationArticle() {
        return $this->creationArticle;
    }

    /**
     * Get the creation bons travaux.
     *
     * @return bool Returns the creation bons travaux.
     */
    public function getCreationBonsTravaux() {
        return $this->creationBonsTravaux;
    }

    /**
     * Get the creation chantier.
     *
     * @return bool Returns the creation chantier.
     */
    public function getCreationChantier() {
        return $this->creationChantier;
    }

    /**
     * Get the creation client.
     *
     * @return bool Returns the creation client.
     */
    public function getCreationClient() {
        return $this->creationClient;
    }

    /**
     * Get the creation commission.
     *
     * @return bool Returns the creation commission.
     */
    public function getCreationCommission() {
        return $this->creationCommission;
    }

    /**
     * Get the creation dossier cpta.
     *
     * @return bool Returns the creation dossier cpta.
     */
    public function getCreationDossierCpta() {
        return $this->creationDossierCpta;
    }

    /**
     * Get the creation dossier fact.
     *
     * @return bool Returns the creation dossier fact.
     */
    public function getCreationDossierFact() {
        return $this->creationDossierFact;
    }

    /**
     * Get the creation dossier paie.
     *
     * @return bool Returns the creation dossier paie.
     */
    public function getCreationDossierPaie() {
        return $this->creationDossierPaie;
    }

    /**
     * Get the creation fournisseur.
     *
     * @return bool Returns the creation fournisseur.
     */
    public function getCreationFournisseur() {
        return $this->creationFournisseur;
    }

    /**
     * Get the creation plan facturation.
     *
     * @return bool Returns the creation plan facturation.
     */
    public function getCreationPlanFacturation() {
        return $this->creationPlanFacturation;
    }

    /**
     * Get the creation plan tache.
     *
     * @return bool Returns the creation plan tache.
     */
    public function getCreationPlanTache() {
        return $this->creationPlanTache;
    }

    /**
     * Get the creation tache.
     *
     * @return bool Returns the creation tache.
     */
    public function getCreationTache() {
        return $this->creationTache;
    }

    /**
     * Get the creation tarif.
     *
     * @return bool Returns the creation tarif.
     */
    public function getCreationTarif() {
        return $this->creationTarif;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the date validation budget.
     *
     * @return DateTime|null Returns the date validation budget.
     */
    public function getDateValidationBudget() {
        return $this->dateValidationBudget;
    }

    /**
     * Get the date validation nd f.
     *
     * @return DateTime|null Returns the date validation nd f.
     */
    public function getDateValidationNdF() {
        return $this->dateValidationNdF;
    }

    /**
     * Get the date validation tp.
     *
     * @return DateTime|null Returns the date validation tp.
     */
    public function getDateValidationTp() {
        return $this->dateValidationTp;
    }

    /**
     * Get the desactiver filtre msg.
     *
     * @return bool Returns the desactiver filtre msg.
     */
    public function getDesactiverFiltreMsg() {
        return $this->desactiverFiltreMsg;
    }

    /**
     * Get the disponible.
     *
     * @return bool Returns the disponible.
     */
    public function getDisponible() {
        return $this->disponible;
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
     * Get the dossier paie.
     *
     * @return string Returns the dossier paie.
     */
    public function getDossierPaie() {
        return $this->dossierPaie;
    }

    /**
     * Get the droit param emails confidentiels.
     *
     * @return bool Returns the droit param emails confidentiels.
     */
    public function getDroitParamEmailsConfidentiels() {
        return $this->droitParamEmailsConfidentiels;
    }

    /**
     * Get the droit sync port.
     *
     * @return bool Returns the droit sync port.
     */
    public function getDroitSyncPort() {
        return $this->droitSyncPort;
    }

    /**
     * Get the droit sync q prop.
     *
     * @return bool Returns the droit sync q prop.
     */
    public function getDroitSyncQProp() {
        return $this->droitSyncQProp;
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
     * Get the email activer aide saisie.
     *
     * @return bool Returns the email activer aide saisie.
     */
    public function getEmailActiverAideSaisie() {
        return $this->emailActiverAideSaisie;
    }

    /**
     * Get the email agenda dmd confirm.
     *
     * @return string Returns the email agenda dmd confirm.
     */
    public function getEmailAgendaDmdConfirm() {
        return $this->emailAgendaDmdConfirm;
    }

    /**
     * Get the email auto cloture imap.
     *
     * @return bool Returns the email auto cloture imap.
     */
    public function getEmailAutoClotureImap() {
        return $this->emailAutoClotureImap;
    }

    /**
     * Get the email lst adr choix elem.
     *
     * @return int Returns the email lst adr choix elem.
     */
    public function getEmailLstAdrChoixElem() {
        return $this->emailLstAdrChoixElem;
    }

    /**
     * Get the email mode signature.
     *
     * @return int Returns the email mode signature.
     */
    public function getEmailModeSignature() {
        return $this->emailModeSignature;
    }

    /**
     * Get the email nb j ag mini.
     *
     * @return int Returns the email nb j ag mini.
     */
    public function getEmailNbJAgMini() {
        return $this->emailNbJAgMini;
    }

    /**
     * Get the email objet defaut.
     *
     * @return string Returns the email objet defaut.
     */
    public function getEmailObjetDefaut() {
        return $this->emailObjetDefaut;
    }

    /**
     * Get the email pied.
     *
     * @return string Returns the email pied.
     */
    public function getEmailPied() {
        return $this->emailPied;
    }

    /**
     * Get the email redir auto.
     *
     * @return bool Returns the email redir auto.
     */
    public function getEmailRedirAuto() {
        return $this->emailRedirAuto;
    }

    /**
     * Get the email redir auto collab.
     *
     * @return string Returns the email redir auto collab.
     */
    public function getEmailRedirAutoCollab() {
        return $this->emailRedirAutoCollab;
    }

    /**
     * Get the email redirection.
     *
     * @return string Returns the email redirection.
     */
    public function getEmailRedirection() {
        return $this->emailRedirection;
    }

    /**
     * Get the email reponse auto.
     *
     * @return bool Returns the email reponse auto.
     */
    public function getEmailReponseAuto() {
        return $this->emailReponseAuto;
    }

    /**
     * Get the email reponse auto text.
     *
     * @return string Returns the email reponse auto text.
     */
    public function getEmailReponseAutoText() {
        return $this->emailReponseAutoText;
    }

    /**
     * Get the email rr active.
     *
     * @return bool Returns the email rr active.
     */
    public function getEmailRrActive() {
        return $this->emailRrActive;
    }

    /**
     * Get the email start mode.
     *
     * @return int Returns the email start mode.
     */
    public function getEmailStartMode() {
        return $this->emailStartMode;
    }

    /**
     * Get the email sur serveur.
     *
     * @return bool Returns the email sur serveur.
     */
    public function getEmailSurServeur() {
        return $this->emailSurServeur;
    }

    /**
     * Get the email tete.
     *
     * @return string Returns the email tete.
     */
    public function getEmailTete() {
        return $this->emailTete;
    }

    /**
     * Get the est acheteur.
     *
     * @return int Returns the est acheteur.
     */
    public function getEstAcheteur() {
        return $this->estAcheteur;
    }

    /**
     * Get the etab confidentialite qp.
     *
     * @return string Returns the etab confidentialite qp.
     */
    public function getEtabConfidentialiteQp() {
        return $this->etabConfidentialiteQp;
    }

    /**
     * Get the fictif.
     *
     * @return bool Returns the fictif.
     */
    public function getFictif() {
        return $this->fictif;
    }

    /**
     * Get the fonction.
     *
     * @return string Returns the fonction.
     */
    public function getFonction() {
        return $this->fonction;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the interdiction pwd.
     *
     * @return bool Returns the interdiction pwd.
     */
    public function getInterdictionPwd() {
        return $this->interdictionPwd;
    }

    /**
     * Get the interdiction vue facturation.
     *
     * @return bool Returns the interdiction vue facturation.
     */
    public function getInterdictionVueFacturation() {
        return $this->interdictionVueFacturation;
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
     * Get the interdire acces entete.
     *
     * @return bool Returns the interdire acces entete.
     */
    public function getInterdireAccesEntete() {
        return $this->interdireAccesEntete;
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
     * Get the interdire edition valorise jrn temps.
     *
     * @return bool Returns the interdire edition valorise jrn temps.
     */
    public function getInterdireEditionValoriseJrnTemps() {
        return $this->interdireEditionValoriseJrnTemps;
    }

    /**
     * Get the interdire envoi postit.
     *
     * @return bool Returns the interdire envoi postit.
     */
    public function getInterdireEnvoiPostit() {
        return $this->interdireEnvoiPostit;
    }

    /**
     * Get the interdire modif aff cli.
     *
     * @return bool Returns the interdire modif aff cli.
     */
    public function getInterdireModifAffCli() {
        return $this->interdireModifAffCli;
    }

    /**
     * Get the interdire modif depot.
     *
     * @return bool Returns the interdire modif depot.
     */
    public function getInterdireModifDepot() {
        return $this->interdireModifDepot;
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
     * Get the interim.
     *
     * @return bool Returns the interim.
     */
    public function getInterim() {
        return $this->interim;
    }

    /**
     * Get the is groupe.
     *
     * @return bool Returns the is groupe.
     */
    public function getIsGroupe() {
        return $this->isGroupe;
    }

    /**
     * Get the is profil messages.
     *
     * @return bool Returns the is profil messages.
     */
    public function getIsProfilMessages() {
        return $this->isProfilMessages;
    }

    /**
     * Get the limiter visu agenda.
     *
     * @return bool Returns the limiter visu agenda.
     */
    public function getLimiterVisuAgenda() {
        return $this->limiterVisuAgenda;
    }

    /**
     * Get the masquer fournisseurs.
     *
     * @return bool Returns the masquer fournisseurs.
     */
    public function getMasquerFournisseurs() {
        return $this->masquerFournisseurs;
    }

    /**
     * Get the messages confidentiels.
     *
     * @return string Returns the messages confidentiels.
     */
    public function getMessagesConfidentiels() {
        return $this->messagesConfidentiels;
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
     * Get the modif droits asp.
     *
     * @return bool Returns the modif droits asp.
     */
    public function getModifDroitsAsp() {
        return $this->modifDroitsAsp;
    }

    /**
     * Get the modif en vue.
     *
     * @return bool Returns the modif en vue.
     */
    public function getModifEnVue() {
        return $this->modifEnVue;
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
     * Get the mot de passe.
     *
     * @return string Returns the mot de passe.
     */
    public function getMotDePasse() {
        return $this->motDePasse;
    }

    /**
     * Get the msg redir auto.
     *
     * @return bool Returns the msg redir auto.
     */
    public function getMsgRedirAuto() {
        return $this->msgRedirAuto;
    }

    /**
     * Get the niv conf emp proprete restreint.
     *
     * @return bool Returns the niv conf emp proprete restreint.
     */
    public function getNivConfEmpPropreteRestreint() {
        return $this->nivConfEmpPropreteRestreint;
    }

    /**
     * Get the niveau.
     *
     * @return int Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the niveau confidentialite qp.
     *
     * @return string Returns the niveau confidentialite qp.
     */
    public function getNiveauConfidentialiteQp() {
        return $this->niveauConfidentialiteQp;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
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
     * Get the pa invisible.
     *
     * @return bool Returns the pa invisible.
     */
    public function getPaInvisible() {
        return $this->paInvisible;
    }

    /**
     * Get the parc code remorque.
     *
     * @return string Returns the parc code remorque.
     */
    public function getParcCodeRemorque() {
        return $this->parcCodeRemorque;
    }

    /**
     * Get the parc code vehicule.
     *
     * @return string Returns the parc code vehicule.
     */
    public function getParcCodeVehicule() {
        return $this->parcCodeVehicule;
    }

    /**
     * Get the pas acces qws.
     *
     * @return bool Returns the pas acces qws.
     */
    public function getPasAccesQws() {
        return $this->pasAccesQws;
    }

    /**
     * Get the pas saisie des temps.
     *
     * @return bool Returns the pas saisie des temps.
     */
    public function getPasSaisieDesTemps() {
        return $this->pasSaisieDesTemps;
    }

    /**
     * Get the pas saisie des temps auto.
     *
     * @return bool Returns the pas saisie des temps auto.
     */
    public function getPasSaisieDesTempsAuto() {
        return $this->pasSaisieDesTempsAuto;
    }

    /**
     * Get the portable perso.
     *
     * @return string Returns the portable perso.
     */
    public function getPortablePerso() {
        return $this->portablePerso;
    }

    /**
     * Get the present.
     *
     * @return bool Returns the present.
     */
    public function getPresent() {
        return $this->present;
    }

    /**
     * Get the prevenu nouveau cd.
     *
     * @return bool Returns the prevenu nouveau cd.
     */
    public function getPrevenuNouveauCd() {
        return $this->prevenuNouveauCd;
    }

    /**
     * Get the prix km.
     *
     * @return float Returns the prix km.
     */
    public function getPrixKm() {
        return $this->prixKm;
    }

    /**
     * Get the prix vente.
     *
     * @return float Returns the prix vente.
     */
    public function getPrixVente() {
        return $this->prixVente;
    }

    /**
     * Get the prix vente2.
     *
     * @return float Returns the prix vente2.
     */
    public function getPrixVente2() {
        return $this->prixVente2;
    }

    /**
     * Get the prix vente3.
     *
     * @return float Returns the prix vente3.
     */
    public function getPrixVente3() {
        return $this->prixVente3;
    }

    /**
     * Get the restrict acces pieces.
     *
     * @return bool Returns the restrict acces pieces.
     */
    public function getRestrictAccesPieces() {
        return $this->restrictAccesPieces;
    }

    /**
     * Get the restrict acces stats.
     *
     * @return bool Returns the restrict acces stats.
     */
    public function getRestrictAccesStats() {
        return $this->restrictAccesStats;
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
     * Get the saisie pv interdite.
     *
     * @return bool Returns the saisie pv interdite.
     */
    public function getSaisiePvInterdite() {
        return $this->saisiePvInterdite;
    }

    /**
     * Get the salaire mensuel.
     *
     * @return float Returns the salaire mensuel.
     */
    public function getSalaireMensuel() {
        return $this->salaireMensuel;
    }

    /**
     * Get the sel art collab.
     *
     * @return bool Returns the sel art collab.
     */
    public function getSelArtCollab() {
        return $this->selArtCollab;
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
     * Get the sel cli collab.
     *
     * @return bool Returns the sel cli collab.
     */
    public function getSelCliCollab() {
        return $this->selCliCollab;
    }

    /**
     * Get the sel frn collab.
     *
     * @return bool Returns the sel frn collab.
     */
    public function getSelFrnCollab() {
        return $this->selFrnCollab;
    }

    /**
     * Get the selection article.
     *
     * @return string Returns the selection article.
     */
    public function getSelectionArticle() {
        return $this->selectionArticle;
    }

    /**
     * Get the selection client.
     *
     * @return string Returns the selection client.
     */
    public function getSelectionClient() {
        return $this->selectionClient;
    }

    /**
     * Get the selection fournisseur.
     *
     * @return string Returns the selection fournisseur.
     */
    public function getSelectionFournisseur() {
        return $this->selectionFournisseur;
    }

    /**
     * Get the suivi messages.
     *
     * @return bool Returns the suivi messages.
     */
    public function getSuiviMessages() {
        return $this->suiviMessages;
    }

    /**
     * Get the superviseur.
     *
     * @return bool Returns the superviseur.
     */
    public function getSuperviseur() {
        return $this->superviseur;
    }

    /**
     * Get the sync mso.
     *
     * @return bool Returns the sync mso.
     */
    public function getSyncMso() {
        return $this->syncMso;
    }

    /**
     * Get the taches groupe.
     *
     * @return string Returns the taches groupe.
     */
    public function getTachesGroupe() {
        return $this->tachesGroupe;
    }

    /**
     * Get the taux commission.
     *
     * @return float Returns the taux commission.
     */
    public function getTauxCommission() {
        return $this->tauxCommission;
    }

    /**
     * Get the tel direct.
     *
     * @return string Returns the tel direct.
     */
    public function getTelDirect() {
        return $this->telDirect;
    }

    /**
     * Get the tel perso.
     *
     * @return string Returns the tel perso.
     */
    public function getTelPerso() {
        return $this->telPerso;
    }

    /**
     * Get the tel portable1.
     *
     * @return string Returns the tel portable1.
     */
    public function getTelPortable1() {
        return $this->telPortable1;
    }

    /**
     * Get the tel portable2.
     *
     * @return string Returns the tel portable2.
     */
    public function getTelPortable2() {
        return $this->telPortable2;
    }

    /**
     * Get the tel poste.
     *
     * @return string Returns the tel poste.
     */
    public function getTelPoste() {
        return $this->telPoste;
    }

    /**
     * Get the tp pas controler.
     *
     * @return bool Returns the tp pas controler.
     */
    public function getTpPasControler() {
        return $this->tpPasControler;
    }

    /**
     * Get the tp pas journal temps.
     *
     * @return bool Returns the tp pas journal temps.
     */
    public function getTpPasJournalTemps() {
        return $this->tpPasJournalTemps;
    }

    /**
     * Get the tp pas notes de frais.
     *
     * @return bool Returns the tp pas notes de frais.
     */
    public function getTpPasNotesDeFrais() {
        return $this->tpPasNotesDeFrais;
    }

    /**
     * Get the tp pas tps valide.
     *
     * @return bool Returns the tp pas tps valide.
     */
    public function getTpPasTpsValide() {
        return $this->tpPasTpsValide;
    }

    /**
     * Get the tp pourcentage non operationnel.
     *
     * @return float Returns the tp pourcentage non operationnel.
     */
    public function getTpPourcentageNonOperationnel() {
        return $this->tpPourcentageNonOperationnel;
    }

    /**
     * Get the tps niveau blocage.
     *
     * @return string Returns the tps niveau blocage.
     */
    public function getTpsNiveauBlocage() {
        return $this->tpsNiveauBlocage;
    }

    /**
     * Get the tx com invisible.
     *
     * @return bool Returns the tx com invisible.
     */
    public function getTxComInvisible() {
        return $this->txComInvisible;
    }

    /**
     * Get the type conf2 cmav cli.
     *
     * @return string Returns the type conf2 cmav cli.
     */
    public function getTypeConf2CmavCli() {
        return $this->typeConf2CmavCli;
    }

    /**
     * Get the type conf cmav cli.
     *
     * @return string Returns the type conf cmav cli.
     */
    public function getTypeConfCmavCli() {
        return $this->typeConfCmavCli;
    }

    /**
     * Get the type visu appels.
     *
     * @return string Returns the type visu appels.
     */
    public function getTypeVisuAppels() {
        return $this->typeVisuAppels;
    }

    /**
     * Get the type visu taches.
     *
     * @return string Returns the type visu taches.
     */
    public function getTypeVisuTaches() {
        return $this->typeVisuTaches;
    }

    /**
     * Get the use mail generic.
     *
     * @return bool Returns the use mail generic.
     */
    public function getUseMailGeneric() {
        return $this->useMailGeneric;
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
     * Get the vue com droit reaffect.
     *
     * @return bool Returns the vue com droit reaffect.
     */
    public function getVueComDroitReaffect() {
        return $this->vueComDroitReaffect;
    }

    /**
     * Get the vue devis droit reaffect.
     *
     * @return bool Returns the vue devis droit reaffect.
     */
    public function getVueDevisDroitReaffect() {
        return $this->vueDevisDroitReaffect;
    }

    /**
     * Get the vue devis droit suppr.
     *
     * @return bool Returns the vue devis droit suppr.
     */
    public function getVueDevisDroitSuppr() {
        return $this->vueDevisDroitSuppr;
    }

    /**
     * Get the vue devis droit valid.
     *
     * @return bool Returns the vue devis droit valid.
     */
    public function getVueDevisDroitValid() {
        return $this->vueDevisDroitValid;
    }

    /**
     * Get the ya droits collab.
     *
     * @return bool Returns the ya droits collab.
     */
    public function getYaDroitsCollab() {
        return $this->yaDroitsCollab;
    }

    /**
     * Get the e ws mdp.
     *
     * @return string Returns the e ws mdp.
     */
    public function geteWsMdp() {
        return $this->eWsMdp;
    }

    /**
     * Set the acces autorise bons travaux.
     *
     * @param bool $accesAutoriseBonsTravaux The acces autorise bons travaux.
     */
    public function setAccesAutoriseBonsTravaux($accesAutoriseBonsTravaux) {
        $this->accesAutoriseBonsTravaux = $accesAutoriseBonsTravaux;
        return $this;
    }

    /**
     * Set the acces autorise plan facturation.
     *
     * @param bool $accesAutorisePlanFacturation The acces autorise plan facturation.
     */
    public function setAccesAutorisePlanFacturation($accesAutorisePlanFacturation) {
        $this->accesAutorisePlanFacturation = $accesAutorisePlanFacturation;
        return $this;
    }

    /**
     * Set the acces autorise plan tache.
     *
     * @param bool $accesAutorisePlanTache The acces autorise plan tache.
     */
    public function setAccesAutorisePlanTache($accesAutorisePlanTache) {
        $this->accesAutorisePlanTache = $accesAutorisePlanTache;
        return $this;
    }

    /**
     * Set the acces cur doss only.
     *
     * @param bool $accesCurDossOnly The acces cur doss only.
     */
    public function setAccesCurDossOnly($accesCurDossOnly) {
        $this->accesCurDossOnly = $accesCurDossOnly;
        return $this;
    }

    /**
     * Set the acces docs cab.
     *
     * @param bool $accesDocsCab The acces docs cab.
     */
    public function setAccesDocsCab($accesDocsCab) {
        $this->accesDocsCab = $accesDocsCab;
        return $this;
    }

    /**
     * Set the acces dossier cpta.
     *
     * @param string $accesDossierCpta The acces dossier cpta.
     */
    public function setAccesDossierCpta($accesDossierCpta) {
        $this->accesDossierCpta = $accesDossierCpta;
        return $this;
    }

    /**
     * Set the acces dossier paie.
     *
     * @param string $accesDossierPaie The acces dossier paie.
     */
    public function setAccesDossierPaie($accesDossierPaie) {
        $this->accesDossierPaie = $accesDossierPaie;
        return $this;
    }

    /**
     * Set the acces gestionaire stats croisees.
     *
     * @param bool $accesGestionaireStatsCroisees The acces gestionaire stats croisees.
     */
    public function setAccesGestionaireStatsCroisees($accesGestionaireStatsCroisees) {
        $this->accesGestionaireStatsCroisees = $accesGestionaireStatsCroisees;
        return $this;
    }

    /**
     * Set the acces rep commun.
     *
     * @param string $accesRepCommun The acces rep commun.
     */
    public function setAccesRepCommun($accesRepCommun) {
        $this->accesRepCommun = $accesRepCommun;
        return $this;
    }

    /**
     * Set the acces stat cab.
     *
     * @param bool $accesStatCab The acces stat cab.
     */
    public function setAccesStatCab($accesStatCab) {
        $this->accesStatCab = $accesStatCab;
        return $this;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool $annulationAffaire The annulation affaire.
     */
    public function setAnnulationAffaire($annulationAffaire) {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }

    /**
     * Set the annulation article.
     *
     * @param bool $annulationArticle The annulation article.
     */
    public function setAnnulationArticle($annulationArticle) {
        $this->annulationArticle = $annulationArticle;
        return $this;
    }

    /**
     * Set the annulation bons travaux.
     *
     * @param bool $annulationBonsTravaux The annulation bons travaux.
     */
    public function setAnnulationBonsTravaux($annulationBonsTravaux) {
        $this->annulationBonsTravaux = $annulationBonsTravaux;
        return $this;
    }

    /**
     * Set the annulation chantier.
     *
     * @param bool $annulationChantier The annulation chantier.
     */
    public function setAnnulationChantier($annulationChantier) {
        $this->annulationChantier = $annulationChantier;
        return $this;
    }

    /**
     * Set the annulation client.
     *
     * @param bool $annulationClient The annulation client.
     */
    public function setAnnulationClient($annulationClient) {
        $this->annulationClient = $annulationClient;
        return $this;
    }

    /**
     * Set the annulation commission.
     *
     * @param bool $annulationCommission The annulation commission.
     */
    public function setAnnulationCommission($annulationCommission) {
        $this->annulationCommission = $annulationCommission;
        return $this;
    }

    /**
     * Set the annulation dossier cpta.
     *
     * @param bool $annulationDossierCpta The annulation dossier cpta.
     */
    public function setAnnulationDossierCpta($annulationDossierCpta) {
        $this->annulationDossierCpta = $annulationDossierCpta;
        return $this;
    }

    /**
     * Set the annulation dossier fact.
     *
     * @param bool $annulationDossierFact The annulation dossier fact.
     */
    public function setAnnulationDossierFact($annulationDossierFact) {
        $this->annulationDossierFact = $annulationDossierFact;
        return $this;
    }

    /**
     * Set the annulation dossier paie.
     *
     * @param bool $annulationDossierPaie The annulation dossier paie.
     */
    public function setAnnulationDossierPaie($annulationDossierPaie) {
        $this->annulationDossierPaie = $annulationDossierPaie;
        return $this;
    }

    /**
     * Set the annulation fournisseur.
     *
     * @param bool $annulationFournisseur The annulation fournisseur.
     */
    public function setAnnulationFournisseur($annulationFournisseur) {
        $this->annulationFournisseur = $annulationFournisseur;
        return $this;
    }

    /**
     * Set the annulation plan facturation.
     *
     * @param bool $annulationPlanFacturation The annulation plan facturation.
     */
    public function setAnnulationPlanFacturation($annulationPlanFacturation) {
        $this->annulationPlanFacturation = $annulationPlanFacturation;
        return $this;
    }

    /**
     * Set the annulation plan tache.
     *
     * @param bool $annulationPlanTache The annulation plan tache.
     */
    public function setAnnulationPlanTache($annulationPlanTache) {
        $this->annulationPlanTache = $annulationPlanTache;
        return $this;
    }

    /**
     * Set the annulation tache.
     *
     * @param bool $annulationTache The annulation tache.
     */
    public function setAnnulationTache($annulationTache) {
        $this->annulationTache = $annulationTache;
        return $this;
    }

    /**
     * Set the annulation tarif.
     *
     * @param bool $annulationTarif The annulation tarif.
     */
    public function setAnnulationTarif($annulationTarif) {
        $this->annulationTarif = $annulationTarif;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestion modifiables.
     *
     * @param bool $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
     */
    public function setArticlesLstPersoAccesGestionModifiables($articlesLstPersoAccesGestionModifiables) {
        $this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the articles lst perso acces gestionnaire.
     *
     * @param bool $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
     */
    public function setArticlesLstPersoAccesGestionnaire($articlesLstPersoAccesGestionnaire) {
        $this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the articles lst perso champs modif.
     *
     * @param bool $articlesLstPersoChampsModif The articles lst perso champs modif.
     */
    public function setArticlesLstPersoChampsModif($articlesLstPersoChampsModif) {
        $this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the articles lst perso copie colonne.
     *
     * @param bool $articlesLstPersoCopieColonne The articles lst perso copie colonne.
     */
    public function setArticlesLstPersoCopieColonne($articlesLstPersoCopieColonne) {
        $this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the articles lst perso interdire creat.
     *
     * @param bool $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
     */
    public function setArticlesLstPersoInterdireCreat($articlesLstPersoInterdireCreat) {
        $this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the autorise saisie tps colonnes.
     *
     * @param bool $autoriseSaisieTpsColonnes The autorise saisie tps colonnes.
     */
    public function setAutoriseSaisieTpsColonnes($autoriseSaisieTpsColonnes) {
        $this->autoriseSaisieTpsColonnes = $autoriseSaisieTpsColonnes;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the blocage ed cli.
     *
     * @param bool $blocageEdCli The blocage ed cli.
     */
    public function setBlocageEdCli($blocageEdCli) {
        $this->blocageEdCli = $blocageEdCli;
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
     * Set the categorie prix km.
     *
     * @param string $categoriePrixKm The categorie prix km.
     */
    public function setCategoriePrixKm($categoriePrixKm) {
        $this->categoriePrixKm = $categoriePrixKm;
        return $this;
    }

    /**
     * Set the categorie ticket resto.
     *
     * @param string $categorieTicketResto The categorie ticket resto.
     */
    public function setCategorieTicketResto($categorieTicketResto) {
        $this->categorieTicketResto = $categorieTicketResto;
        return $this;
    }

    /**
     * Set the charges mensuelles.
     *
     * @param float $chargesMensuelles The charges mensuelles.
     */
    public function setChargesMensuelles($chargesMensuelles) {
        $this->chargesMensuelles = $chargesMensuelles;
        return $this;
    }

    /**
     * Set the cle ccn paie.
     *
     * @param string $cleCcnPaie The cle ccn paie.
     */
    public function setCleCcnPaie($cleCcnPaie) {
        $this->cleCcnPaie = $cleCcnPaie;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code chef1.
     *
     * @param string $codeChef1 The code chef1.
     */
    public function setCodeChef1($codeChef1) {
        $this->codeChef1 = $codeChef1;
        return $this;
    }

    /**
     * Set the code chef2.
     *
     * @param string $codeChef2 The code chef2.
     */
    public function setCodeChef2($codeChef2) {
        $this->codeChef2 = $codeChef2;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code famille frn.
     *
     * @param string $codeFamilleFrn The code famille frn.
     */
    public function setCodeFamilleFrn($codeFamilleFrn) {
        $this->codeFamilleFrn = $codeFamilleFrn;
        return $this;
    }

    /**
     * Set the code groupe.
     *
     * @param string $codeGroupe The code groupe.
     */
    public function setCodeGroupe($codeGroupe) {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }

    /**
     * Set the code groupe visu msg.
     *
     * @param string $codeGroupeVisuMsg The code groupe visu msg.
     */
    public function setCodeGroupeVisuMsg($codeGroupeVisuMsg) {
        $this->codeGroupeVisuMsg = $codeGroupeVisuMsg;
        return $this;
    }

    /**
     * Set the code langue.
     *
     * @param string $codeLangue The code langue.
     */
    public function setCodeLangue($codeLangue) {
        $this->codeLangue = $codeLangue;
        return $this;
    }

    /**
     * Set the code liaison dest.
     *
     * @param string $codeLiaisonDest The code liaison dest.
     */
    public function setCodeLiaisonDest($codeLiaisonDest) {
        $this->codeLiaisonDest = $codeLiaisonDest;
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
     * Set the code vehicule.
     *
     * @param string $codeVehicule The code vehicule.
     */
    public function setCodeVehicule($codeVehicule) {
        $this->codeVehicule = $codeVehicule;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string $codeVentilCompta The code ventil compta.
     */
    public function setCodeVentilCompta($codeVentilCompta) {
        $this->codeVentilCompta = $codeVentilCompta;
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
     * Set the compte comptable.
     *
     * @param string $compteComptable The compte comptable.
     */
    public function setCompteComptable($compteComptable) {
        $this->compteComptable = $compteComptable;
        return $this;
    }

    /**
     * Set the compte de tiers.
     *
     * @param string $compteDeTiers The compte de tiers.
     */
    public function setCompteDeTiers($compteDeTiers) {
        $this->compteDeTiers = $compteDeTiers;
        return $this;
    }

    /**
     * Set the controle saisie tp.
     *
     * @param string $controleSaisieTp The controle saisie tp.
     */
    public function setControleSaisieTp($controleSaisieTp) {
        $this->controleSaisieTp = $controleSaisieTp;
        return $this;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool $creationAffaire The creation affaire.
     */
    public function setCreationAffaire($creationAffaire) {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }

    /**
     * Set the creation article.
     *
     * @param bool $creationArticle The creation article.
     */
    public function setCreationArticle($creationArticle) {
        $this->creationArticle = $creationArticle;
        return $this;
    }

    /**
     * Set the creation bons travaux.
     *
     * @param bool $creationBonsTravaux The creation bons travaux.
     */
    public function setCreationBonsTravaux($creationBonsTravaux) {
        $this->creationBonsTravaux = $creationBonsTravaux;
        return $this;
    }

    /**
     * Set the creation chantier.
     *
     * @param bool $creationChantier The creation chantier.
     */
    public function setCreationChantier($creationChantier) {
        $this->creationChantier = $creationChantier;
        return $this;
    }

    /**
     * Set the creation client.
     *
     * @param bool $creationClient The creation client.
     */
    public function setCreationClient($creationClient) {
        $this->creationClient = $creationClient;
        return $this;
    }

    /**
     * Set the creation commission.
     *
     * @param bool $creationCommission The creation commission.
     */
    public function setCreationCommission($creationCommission) {
        $this->creationCommission = $creationCommission;
        return $this;
    }

    /**
     * Set the creation dossier cpta.
     *
     * @param bool $creationDossierCpta The creation dossier cpta.
     */
    public function setCreationDossierCpta($creationDossierCpta) {
        $this->creationDossierCpta = $creationDossierCpta;
        return $this;
    }

    /**
     * Set the creation dossier fact.
     *
     * @param bool $creationDossierFact The creation dossier fact.
     */
    public function setCreationDossierFact($creationDossierFact) {
        $this->creationDossierFact = $creationDossierFact;
        return $this;
    }

    /**
     * Set the creation dossier paie.
     *
     * @param bool $creationDossierPaie The creation dossier paie.
     */
    public function setCreationDossierPaie($creationDossierPaie) {
        $this->creationDossierPaie = $creationDossierPaie;
        return $this;
    }

    /**
     * Set the creation fournisseur.
     *
     * @param bool $creationFournisseur The creation fournisseur.
     */
    public function setCreationFournisseur($creationFournisseur) {
        $this->creationFournisseur = $creationFournisseur;
        return $this;
    }

    /**
     * Set the creation plan facturation.
     *
     * @param bool $creationPlanFacturation The creation plan facturation.
     */
    public function setCreationPlanFacturation($creationPlanFacturation) {
        $this->creationPlanFacturation = $creationPlanFacturation;
        return $this;
    }

    /**
     * Set the creation plan tache.
     *
     * @param bool $creationPlanTache The creation plan tache.
     */
    public function setCreationPlanTache($creationPlanTache) {
        $this->creationPlanTache = $creationPlanTache;
        return $this;
    }

    /**
     * Set the creation tache.
     *
     * @param bool $creationTache The creation tache.
     */
    public function setCreationTache($creationTache) {
        $this->creationTache = $creationTache;
        return $this;
    }

    /**
     * Set the creation tarif.
     *
     * @param bool $creationTarif The creation tarif.
     */
    public function setCreationTarif($creationTarif) {
        $this->creationTarif = $creationTarif;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the date validation budget.
     *
     * @param DateTime|null $dateValidationBudget The date validation budget.
     */
    public function setDateValidationBudget(DateTime $dateValidationBudget = null) {
        $this->dateValidationBudget = $dateValidationBudget;
        return $this;
    }

    /**
     * Set the date validation nd f.
     *
     * @param DateTime|null $dateValidationNdF The date validation nd f.
     */
    public function setDateValidationNdF(DateTime $dateValidationNdF = null) {
        $this->dateValidationNdF = $dateValidationNdF;
        return $this;
    }

    /**
     * Set the date validation tp.
     *
     * @param DateTime|null $dateValidationTp The date validation tp.
     */
    public function setDateValidationTp(DateTime $dateValidationTp = null) {
        $this->dateValidationTp = $dateValidationTp;
        return $this;
    }

    /**
     * Set the desactiver filtre msg.
     *
     * @param bool $desactiverFiltreMsg The desactiver filtre msg.
     */
    public function setDesactiverFiltreMsg($desactiverFiltreMsg) {
        $this->desactiverFiltreMsg = $desactiverFiltreMsg;
        return $this;
    }

    /**
     * Set the disponible.
     *
     * @param bool $disponible The disponible.
     */
    public function setDisponible($disponible) {
        $this->disponible = $disponible;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the dossier paie.
     *
     * @param string $dossierPaie The dossier paie.
     */
    public function setDossierPaie($dossierPaie) {
        $this->dossierPaie = $dossierPaie;
        return $this;
    }

    /**
     * Set the droit param emails confidentiels.
     *
     * @param bool $droitParamEmailsConfidentiels The droit param emails confidentiels.
     */
    public function setDroitParamEmailsConfidentiels($droitParamEmailsConfidentiels) {
        $this->droitParamEmailsConfidentiels = $droitParamEmailsConfidentiels;
        return $this;
    }

    /**
     * Set the droit sync port.
     *
     * @param bool $droitSyncPort The droit sync port.
     */
    public function setDroitSyncPort($droitSyncPort) {
        $this->droitSyncPort = $droitSyncPort;
        return $this;
    }

    /**
     * Set the droit sync q prop.
     *
     * @param bool $droitSyncQProp The droit sync q prop.
     */
    public function setDroitSyncQProp($droitSyncQProp) {
        $this->droitSyncQProp = $droitSyncQProp;
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
     * Set the email activer aide saisie.
     *
     * @param bool $emailActiverAideSaisie The email activer aide saisie.
     */
    public function setEmailActiverAideSaisie($emailActiverAideSaisie) {
        $this->emailActiverAideSaisie = $emailActiverAideSaisie;
        return $this;
    }

    /**
     * Set the email agenda dmd confirm.
     *
     * @param string $emailAgendaDmdConfirm The email agenda dmd confirm.
     */
    public function setEmailAgendaDmdConfirm($emailAgendaDmdConfirm) {
        $this->emailAgendaDmdConfirm = $emailAgendaDmdConfirm;
        return $this;
    }

    /**
     * Set the email auto cloture imap.
     *
     * @param bool $emailAutoClotureImap The email auto cloture imap.
     */
    public function setEmailAutoClotureImap($emailAutoClotureImap) {
        $this->emailAutoClotureImap = $emailAutoClotureImap;
        return $this;
    }

    /**
     * Set the email lst adr choix elem.
     *
     * @param int $emailLstAdrChoixElem The email lst adr choix elem.
     */
    public function setEmailLstAdrChoixElem($emailLstAdrChoixElem) {
        $this->emailLstAdrChoixElem = $emailLstAdrChoixElem;
        return $this;
    }

    /**
     * Set the email mode signature.
     *
     * @param int $emailModeSignature The email mode signature.
     */
    public function setEmailModeSignature($emailModeSignature) {
        $this->emailModeSignature = $emailModeSignature;
        return $this;
    }

    /**
     * Set the email nb j ag mini.
     *
     * @param int $emailNbJAgMini The email nb j ag mini.
     */
    public function setEmailNbJAgMini($emailNbJAgMini) {
        $this->emailNbJAgMini = $emailNbJAgMini;
        return $this;
    }

    /**
     * Set the email objet defaut.
     *
     * @param string $emailObjetDefaut The email objet defaut.
     */
    public function setEmailObjetDefaut($emailObjetDefaut) {
        $this->emailObjetDefaut = $emailObjetDefaut;
        return $this;
    }

    /**
     * Set the email pied.
     *
     * @param string $emailPied The email pied.
     */
    public function setEmailPied($emailPied) {
        $this->emailPied = $emailPied;
        return $this;
    }

    /**
     * Set the email redir auto.
     *
     * @param bool $emailRedirAuto The email redir auto.
     */
    public function setEmailRedirAuto($emailRedirAuto) {
        $this->emailRedirAuto = $emailRedirAuto;
        return $this;
    }

    /**
     * Set the email redir auto collab.
     *
     * @param string $emailRedirAutoCollab The email redir auto collab.
     */
    public function setEmailRedirAutoCollab($emailRedirAutoCollab) {
        $this->emailRedirAutoCollab = $emailRedirAutoCollab;
        return $this;
    }

    /**
     * Set the email redirection.
     *
     * @param string $emailRedirection The email redirection.
     */
    public function setEmailRedirection($emailRedirection) {
        $this->emailRedirection = $emailRedirection;
        return $this;
    }

    /**
     * Set the email reponse auto.
     *
     * @param bool $emailReponseAuto The email reponse auto.
     */
    public function setEmailReponseAuto($emailReponseAuto) {
        $this->emailReponseAuto = $emailReponseAuto;
        return $this;
    }

    /**
     * Set the email reponse auto text.
     *
     * @param string $emailReponseAutoText The email reponse auto text.
     */
    public function setEmailReponseAutoText($emailReponseAutoText) {
        $this->emailReponseAutoText = $emailReponseAutoText;
        return $this;
    }

    /**
     * Set the email rr active.
     *
     * @param bool $emailRrActive The email rr active.
     */
    public function setEmailRrActive($emailRrActive) {
        $this->emailRrActive = $emailRrActive;
        return $this;
    }

    /**
     * Set the email start mode.
     *
     * @param int $emailStartMode The email start mode.
     */
    public function setEmailStartMode($emailStartMode) {
        $this->emailStartMode = $emailStartMode;
        return $this;
    }

    /**
     * Set the email sur serveur.
     *
     * @param bool $emailSurServeur The email sur serveur.
     */
    public function setEmailSurServeur($emailSurServeur) {
        $this->emailSurServeur = $emailSurServeur;
        return $this;
    }

    /**
     * Set the email tete.
     *
     * @param string $emailTete The email tete.
     */
    public function setEmailTete($emailTete) {
        $this->emailTete = $emailTete;
        return $this;
    }

    /**
     * Set the est acheteur.
     *
     * @param int $estAcheteur The est acheteur.
     */
    public function setEstAcheteur($estAcheteur) {
        $this->estAcheteur = $estAcheteur;
        return $this;
    }

    /**
     * Set the etab confidentialite qp.
     *
     * @param string $etabConfidentialiteQp The etab confidentialite qp.
     */
    public function setEtabConfidentialiteQp($etabConfidentialiteQp) {
        $this->etabConfidentialiteQp = $etabConfidentialiteQp;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool $fictif The fictif.
     */
    public function setFictif($fictif) {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the fonction.
     *
     * @param string $fonction The fonction.
     */
    public function setFonction($fonction) {
        $this->fonction = $fonction;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the interdiction pwd.
     *
     * @param bool $interdictionPwd The interdiction pwd.
     */
    public function setInterdictionPwd($interdictionPwd) {
        $this->interdictionPwd = $interdictionPwd;
        return $this;
    }

    /**
     * Set the interdiction vue facturation.
     *
     * @param bool $interdictionVueFacturation The interdiction vue facturation.
     */
    public function setInterdictionVueFacturation($interdictionVueFacturation) {
        $this->interdictionVueFacturation = $interdictionVueFacturation;
        return $this;
    }

    /**
     * Set the interdire acces archives cpta.
     *
     * @param bool $interdireAccesArchivesCpta The interdire acces archives cpta.
     */
    public function setInterdireAccesArchivesCpta($interdireAccesArchivesCpta) {
        $this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
        return $this;
    }

    /**
     * Set the interdire acces archives paie.
     *
     * @param bool $interdireAccesArchivesPaie The interdire acces archives paie.
     */
    public function setInterdireAccesArchivesPaie($interdireAccesArchivesPaie) {
        $this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
        return $this;
    }

    /**
     * Set the interdire acces edition balance.
     *
     * @param bool $interdireAccesEditionBalance The interdire acces edition balance.
     */
    public function setInterdireAccesEditionBalance($interdireAccesEditionBalance) {
        $this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
        return $this;
    }

    /**
     * Set the interdire acces entete.
     *
     * @param bool $interdireAccesEntete The interdire acces entete.
     */
    public function setInterdireAccesEntete($interdireAccesEntete) {
        $this->interdireAccesEntete = $interdireAccesEntete;
        return $this;
    }

    /**
     * Set the interdire acces supp doc arch.
     *
     * @param bool $interdireAccesSuppDocArch The interdire acces supp doc arch.
     */
    public function setInterdireAccesSuppDocArch($interdireAccesSuppDocArch) {
        $this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
        return $this;
    }

    /**
     * Set the interdire edition valorise jrn temps.
     *
     * @param bool $interdireEditionValoriseJrnTemps The interdire edition valorise jrn temps.
     */
    public function setInterdireEditionValoriseJrnTemps($interdireEditionValoriseJrnTemps) {
        $this->interdireEditionValoriseJrnTemps = $interdireEditionValoriseJrnTemps;
        return $this;
    }

    /**
     * Set the interdire envoi postit.
     *
     * @param bool $interdireEnvoiPostit The interdire envoi postit.
     */
    public function setInterdireEnvoiPostit($interdireEnvoiPostit) {
        $this->interdireEnvoiPostit = $interdireEnvoiPostit;
        return $this;
    }

    /**
     * Set the interdire modif aff cli.
     *
     * @param bool $interdireModifAffCli The interdire modif aff cli.
     */
    public function setInterdireModifAffCli($interdireModifAffCli) {
        $this->interdireModifAffCli = $interdireModifAffCli;
        return $this;
    }

    /**
     * Set the interdire modif depot.
     *
     * @param bool $interdireModifDepot The interdire modif depot.
     */
    public function setInterdireModifDepot($interdireModifDepot) {
        $this->interdireModifDepot = $interdireModifDepot;
        return $this;
    }

    /**
     * Set the interdire publi doc web.
     *
     * @param bool $interdirePubliDocWeb The interdire publi doc web.
     */
    public function setInterdirePubliDocWeb($interdirePubliDocWeb) {
        $this->interdirePubliDocWeb = $interdirePubliDocWeb;
        return $this;
    }

    /**
     * Set the interim.
     *
     * @param bool $interim The interim.
     */
    public function setInterim($interim) {
        $this->interim = $interim;
        return $this;
    }

    /**
     * Set the is groupe.
     *
     * @param bool $isGroupe The is groupe.
     */
    public function setIsGroupe($isGroupe) {
        $this->isGroupe = $isGroupe;
        return $this;
    }

    /**
     * Set the is profil messages.
     *
     * @param bool $isProfilMessages The is profil messages.
     */
    public function setIsProfilMessages($isProfilMessages) {
        $this->isProfilMessages = $isProfilMessages;
        return $this;
    }

    /**
     * Set the limiter visu agenda.
     *
     * @param bool $limiterVisuAgenda The limiter visu agenda.
     */
    public function setLimiterVisuAgenda($limiterVisuAgenda) {
        $this->limiterVisuAgenda = $limiterVisuAgenda;
        return $this;
    }

    /**
     * Set the masquer fournisseurs.
     *
     * @param bool $masquerFournisseurs The masquer fournisseurs.
     */
    public function setMasquerFournisseurs($masquerFournisseurs) {
        $this->masquerFournisseurs = $masquerFournisseurs;
        return $this;
    }

    /**
     * Set the messages confidentiels.
     *
     * @param string $messagesConfidentiels The messages confidentiels.
     */
    public function setMessagesConfidentiels($messagesConfidentiels) {
        $this->messagesConfidentiels = $messagesConfidentiels;
        return $this;
    }

    /**
     * Set the modif affaire.
     *
     * @param string $modifAffaire The modif affaire.
     */
    public function setModifAffaire($modifAffaire) {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }

    /**
     * Set the modif article.
     *
     * @param string $modifArticle The modif article.
     */
    public function setModifArticle($modifArticle) {
        $this->modifArticle = $modifArticle;
        return $this;
    }

    /**
     * Set the modif bons travaux.
     *
     * @param string $modifBonsTravaux The modif bons travaux.
     */
    public function setModifBonsTravaux($modifBonsTravaux) {
        $this->modifBonsTravaux = $modifBonsTravaux;
        return $this;
    }

    /**
     * Set the modif chantier.
     *
     * @param string $modifChantier The modif chantier.
     */
    public function setModifChantier($modifChantier) {
        $this->modifChantier = $modifChantier;
        return $this;
    }

    /**
     * Set the modif client.
     *
     * @param string $modifClient The modif client.
     */
    public function setModifClient($modifClient) {
        $this->modifClient = $modifClient;
        return $this;
    }

    /**
     * Set the modif commission.
     *
     * @param string $modifCommission The modif commission.
     */
    public function setModifCommission($modifCommission) {
        $this->modifCommission = $modifCommission;
        return $this;
    }

    /**
     * Set the modif dossier fact.
     *
     * @param string $modifDossierFact The modif dossier fact.
     */
    public function setModifDossierFact($modifDossierFact) {
        $this->modifDossierFact = $modifDossierFact;
        return $this;
    }

    /**
     * Set the modif droits asp.
     *
     * @param bool $modifDroitsAsp The modif droits asp.
     */
    public function setModifDroitsAsp($modifDroitsAsp) {
        $this->modifDroitsAsp = $modifDroitsAsp;
        return $this;
    }

    /**
     * Set the modif en vue.
     *
     * @param bool $modifEnVue The modif en vue.
     */
    public function setModifEnVue($modifEnVue) {
        $this->modifEnVue = $modifEnVue;
        return $this;
    }

    /**
     * Set the modif fournisseur.
     *
     * @param string $modifFournisseur The modif fournisseur.
     */
    public function setModifFournisseur($modifFournisseur) {
        $this->modifFournisseur = $modifFournisseur;
        return $this;
    }

    /**
     * Set the modif plan facturation.
     *
     * @param string $modifPlanFacturation The modif plan facturation.
     */
    public function setModifPlanFacturation($modifPlanFacturation) {
        $this->modifPlanFacturation = $modifPlanFacturation;
        return $this;
    }

    /**
     * Set the modif plan tache.
     *
     * @param string $modifPlanTache The modif plan tache.
     */
    public function setModifPlanTache($modifPlanTache) {
        $this->modifPlanTache = $modifPlanTache;
        return $this;
    }

    /**
     * Set the modif tache.
     *
     * @param string $modifTache The modif tache.
     */
    public function setModifTache($modifTache) {
        $this->modifTache = $modifTache;
        return $this;
    }

    /**
     * Set the modif tarif.
     *
     * @param string $modifTarif The modif tarif.
     */
    public function setModifTarif($modifTarif) {
        $this->modifTarif = $modifTarif;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string $motDePasse The mot de passe.
     */
    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the msg redir auto.
     *
     * @param bool $msgRedirAuto The msg redir auto.
     */
    public function setMsgRedirAuto($msgRedirAuto) {
        $this->msgRedirAuto = $msgRedirAuto;
        return $this;
    }

    /**
     * Set the niv conf emp proprete restreint.
     *
     * @param bool $nivConfEmpPropreteRestreint The niv conf emp proprete restreint.
     */
    public function setNivConfEmpPropreteRestreint($nivConfEmpPropreteRestreint) {
        $this->nivConfEmpPropreteRestreint = $nivConfEmpPropreteRestreint;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau confidentialite qp.
     *
     * @param string $niveauConfidentialiteQp The niveau confidentialite qp.
     */
    public function setNiveauConfidentialiteQp($niveauConfidentialiteQp) {
        $this->niveauConfidentialiteQp = $niveauConfidentialiteQp;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     */
    public function setNom($nom) {
        $this->nom = $nom;
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
     * Set the pa invisible.
     *
     * @param bool $paInvisible The pa invisible.
     */
    public function setPaInvisible($paInvisible) {
        $this->paInvisible = $paInvisible;
        return $this;
    }

    /**
     * Set the parc code remorque.
     *
     * @param string $parcCodeRemorque The parc code remorque.
     */
    public function setParcCodeRemorque($parcCodeRemorque) {
        $this->parcCodeRemorque = $parcCodeRemorque;
        return $this;
    }

    /**
     * Set the parc code vehicule.
     *
     * @param string $parcCodeVehicule The parc code vehicule.
     */
    public function setParcCodeVehicule($parcCodeVehicule) {
        $this->parcCodeVehicule = $parcCodeVehicule;
        return $this;
    }

    /**
     * Set the pas acces qws.
     *
     * @param bool $pasAccesQws The pas acces qws.
     */
    public function setPasAccesQws($pasAccesQws) {
        $this->pasAccesQws = $pasAccesQws;
        return $this;
    }

    /**
     * Set the pas saisie des temps.
     *
     * @param bool $pasSaisieDesTemps The pas saisie des temps.
     */
    public function setPasSaisieDesTemps($pasSaisieDesTemps) {
        $this->pasSaisieDesTemps = $pasSaisieDesTemps;
        return $this;
    }

    /**
     * Set the pas saisie des temps auto.
     *
     * @param bool $pasSaisieDesTempsAuto The pas saisie des temps auto.
     */
    public function setPasSaisieDesTempsAuto($pasSaisieDesTempsAuto) {
        $this->pasSaisieDesTempsAuto = $pasSaisieDesTempsAuto;
        return $this;
    }

    /**
     * Set the portable perso.
     *
     * @param string $portablePerso The portable perso.
     */
    public function setPortablePerso($portablePerso) {
        $this->portablePerso = $portablePerso;
        return $this;
    }

    /**
     * Set the present.
     *
     * @param bool $present The present.
     */
    public function setPresent($present) {
        $this->present = $present;
        return $this;
    }

    /**
     * Set the prevenu nouveau cd.
     *
     * @param bool $prevenuNouveauCd The prevenu nouveau cd.
     */
    public function setPrevenuNouveauCd($prevenuNouveauCd) {
        $this->prevenuNouveauCd = $prevenuNouveauCd;
        return $this;
    }

    /**
     * Set the prix km.
     *
     * @param float $prixKm The prix km.
     */
    public function setPrixKm($prixKm) {
        $this->prixKm = $prixKm;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float $prixVente The prix vente.
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the prix vente2.
     *
     * @param float $prixVente2 The prix vente2.
     */
    public function setPrixVente2($prixVente2) {
        $this->prixVente2 = $prixVente2;
        return $this;
    }

    /**
     * Set the prix vente3.
     *
     * @param float $prixVente3 The prix vente3.
     */
    public function setPrixVente3($prixVente3) {
        $this->prixVente3 = $prixVente3;
        return $this;
    }

    /**
     * Set the restrict acces pieces.
     *
     * @param bool $restrictAccesPieces The restrict acces pieces.
     */
    public function setRestrictAccesPieces($restrictAccesPieces) {
        $this->restrictAccesPieces = $restrictAccesPieces;
        return $this;
    }

    /**
     * Set the restrict acces stats.
     *
     * @param bool $restrictAccesStats The restrict acces stats.
     */
    public function setRestrictAccesStats($restrictAccesStats) {
        $this->restrictAccesStats = $restrictAccesStats;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the saisie pv interdite.
     *
     * @param bool $saisiePvInterdite The saisie pv interdite.
     */
    public function setSaisiePvInterdite($saisiePvInterdite) {
        $this->saisiePvInterdite = $saisiePvInterdite;
        return $this;
    }

    /**
     * Set the salaire mensuel.
     *
     * @param float $salaireMensuel The salaire mensuel.
     */
    public function setSalaireMensuel($salaireMensuel) {
        $this->salaireMensuel = $salaireMensuel;
        return $this;
    }

    /**
     * Set the sel art collab.
     *
     * @param bool $selArtCollab The sel art collab.
     */
    public function setSelArtCollab($selArtCollab) {
        $this->selArtCollab = $selArtCollab;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestion modifiables.
     *
     * @param bool $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
     */
    public function setSelAvLstPersoAccesGestionModifiables($selAvLstPersoAccesGestionModifiables) {
        $this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
        return $this;
    }

    /**
     * Set the sel av lst perso acces gestionnaire.
     *
     * @param bool $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
     */
    public function setSelAvLstPersoAccesGestionnaire($selAvLstPersoAccesGestionnaire) {
        $this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
        return $this;
    }

    /**
     * Set the sel av lst perso champs modif.
     *
     * @param bool $selAvLstPersoChampsModif The sel av lst perso champs modif.
     */
    public function setSelAvLstPersoChampsModif($selAvLstPersoChampsModif) {
        $this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
        return $this;
    }

    /**
     * Set the sel av lst perso copie colonne.
     *
     * @param bool $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
     */
    public function setSelAvLstPersoCopieColonne($selAvLstPersoCopieColonne) {
        $this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
        return $this;
    }

    /**
     * Set the sel av lst perso interdire creat.
     *
     * @param bool $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
     */
    public function setSelAvLstPersoInterdireCreat($selAvLstPersoInterdireCreat) {
        $this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
        return $this;
    }

    /**
     * Set the sel cli collab.
     *
     * @param bool $selCliCollab The sel cli collab.
     */
    public function setSelCliCollab($selCliCollab) {
        $this->selCliCollab = $selCliCollab;
        return $this;
    }

    /**
     * Set the sel frn collab.
     *
     * @param bool $selFrnCollab The sel frn collab.
     */
    public function setSelFrnCollab($selFrnCollab) {
        $this->selFrnCollab = $selFrnCollab;
        return $this;
    }

    /**
     * Set the selection article.
     *
     * @param string $selectionArticle The selection article.
     */
    public function setSelectionArticle($selectionArticle) {
        $this->selectionArticle = $selectionArticle;
        return $this;
    }

    /**
     * Set the selection client.
     *
     * @param string $selectionClient The selection client.
     */
    public function setSelectionClient($selectionClient) {
        $this->selectionClient = $selectionClient;
        return $this;
    }

    /**
     * Set the selection fournisseur.
     *
     * @param string $selectionFournisseur The selection fournisseur.
     */
    public function setSelectionFournisseur($selectionFournisseur) {
        $this->selectionFournisseur = $selectionFournisseur;
        return $this;
    }

    /**
     * Set the suivi messages.
     *
     * @param bool $suiviMessages The suivi messages.
     */
    public function setSuiviMessages($suiviMessages) {
        $this->suiviMessages = $suiviMessages;
        return $this;
    }

    /**
     * Set the superviseur.
     *
     * @param bool $superviseur The superviseur.
     */
    public function setSuperviseur($superviseur) {
        $this->superviseur = $superviseur;
        return $this;
    }

    /**
     * Set the sync mso.
     *
     * @param bool $syncMso The sync mso.
     */
    public function setSyncMso($syncMso) {
        $this->syncMso = $syncMso;
        return $this;
    }

    /**
     * Set the taches groupe.
     *
     * @param string $tachesGroupe The taches groupe.
     */
    public function setTachesGroupe($tachesGroupe) {
        $this->tachesGroupe = $tachesGroupe;
        return $this;
    }

    /**
     * Set the taux commission.
     *
     * @param float $tauxCommission The taux commission.
     */
    public function setTauxCommission($tauxCommission) {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    /**
     * Set the tel direct.
     *
     * @param string $telDirect The tel direct.
     */
    public function setTelDirect($telDirect) {
        $this->telDirect = $telDirect;
        return $this;
    }

    /**
     * Set the tel perso.
     *
     * @param string $telPerso The tel perso.
     */
    public function setTelPerso($telPerso) {
        $this->telPerso = $telPerso;
        return $this;
    }

    /**
     * Set the tel portable1.
     *
     * @param string $telPortable1 The tel portable1.
     */
    public function setTelPortable1($telPortable1) {
        $this->telPortable1 = $telPortable1;
        return $this;
    }

    /**
     * Set the tel portable2.
     *
     * @param string $telPortable2 The tel portable2.
     */
    public function setTelPortable2($telPortable2) {
        $this->telPortable2 = $telPortable2;
        return $this;
    }

    /**
     * Set the tel poste.
     *
     * @param string $telPoste The tel poste.
     */
    public function setTelPoste($telPoste) {
        $this->telPoste = $telPoste;
        return $this;
    }

    /**
     * Set the tp pas controler.
     *
     * @param bool $tpPasControler The tp pas controler.
     */
    public function setTpPasControler($tpPasControler) {
        $this->tpPasControler = $tpPasControler;
        return $this;
    }

    /**
     * Set the tp pas journal temps.
     *
     * @param bool $tpPasJournalTemps The tp pas journal temps.
     */
    public function setTpPasJournalTemps($tpPasJournalTemps) {
        $this->tpPasJournalTemps = $tpPasJournalTemps;
        return $this;
    }

    /**
     * Set the tp pas notes de frais.
     *
     * @param bool $tpPasNotesDeFrais The tp pas notes de frais.
     */
    public function setTpPasNotesDeFrais($tpPasNotesDeFrais) {
        $this->tpPasNotesDeFrais = $tpPasNotesDeFrais;
        return $this;
    }

    /**
     * Set the tp pas tps valide.
     *
     * @param bool $tpPasTpsValide The tp pas tps valide.
     */
    public function setTpPasTpsValide($tpPasTpsValide) {
        $this->tpPasTpsValide = $tpPasTpsValide;
        return $this;
    }

    /**
     * Set the tp pourcentage non operationnel.
     *
     * @param float $tpPourcentageNonOperationnel The tp pourcentage non operationnel.
     */
    public function setTpPourcentageNonOperationnel($tpPourcentageNonOperationnel) {
        $this->tpPourcentageNonOperationnel = $tpPourcentageNonOperationnel;
        return $this;
    }

    /**
     * Set the tps niveau blocage.
     *
     * @param string $tpsNiveauBlocage The tps niveau blocage.
     */
    public function setTpsNiveauBlocage($tpsNiveauBlocage) {
        $this->tpsNiveauBlocage = $tpsNiveauBlocage;
        return $this;
    }

    /**
     * Set the tx com invisible.
     *
     * @param bool $txComInvisible The tx com invisible.
     */
    public function setTxComInvisible($txComInvisible) {
        $this->txComInvisible = $txComInvisible;
        return $this;
    }

    /**
     * Set the type conf2 cmav cli.
     *
     * @param string $typeConf2CmavCli The type conf2 cmav cli.
     */
    public function setTypeConf2CmavCli($typeConf2CmavCli) {
        $this->typeConf2CmavCli = $typeConf2CmavCli;
        return $this;
    }

    /**
     * Set the type conf cmav cli.
     *
     * @param string $typeConfCmavCli The type conf cmav cli.
     */
    public function setTypeConfCmavCli($typeConfCmavCli) {
        $this->typeConfCmavCli = $typeConfCmavCli;
        return $this;
    }

    /**
     * Set the type visu appels.
     *
     * @param string $typeVisuAppels The type visu appels.
     */
    public function setTypeVisuAppels($typeVisuAppels) {
        $this->typeVisuAppels = $typeVisuAppels;
        return $this;
    }

    /**
     * Set the type visu taches.
     *
     * @param string $typeVisuTaches The type visu taches.
     */
    public function setTypeVisuTaches($typeVisuTaches) {
        $this->typeVisuTaches = $typeVisuTaches;
        return $this;
    }

    /**
     * Set the use mail generic.
     *
     * @param bool $useMailGeneric The use mail generic.
     */
    public function setUseMailGeneric($useMailGeneric) {
        $this->useMailGeneric = $useMailGeneric;
        return $this;
    }

    /**
     * Set the visualisation fiche cabinet.
     *
     * @param bool $visualisationFicheCabinet The visualisation fiche cabinet.
     */
    public function setVisualisationFicheCabinet($visualisationFicheCabinet) {
        $this->visualisationFicheCabinet = $visualisationFicheCabinet;
        return $this;
    }

    /**
     * Set the vue com droit reaffect.
     *
     * @param bool $vueComDroitReaffect The vue com droit reaffect.
     */
    public function setVueComDroitReaffect($vueComDroitReaffect) {
        $this->vueComDroitReaffect = $vueComDroitReaffect;
        return $this;
    }

    /**
     * Set the vue devis droit reaffect.
     *
     * @param bool $vueDevisDroitReaffect The vue devis droit reaffect.
     */
    public function setVueDevisDroitReaffect($vueDevisDroitReaffect) {
        $this->vueDevisDroitReaffect = $vueDevisDroitReaffect;
        return $this;
    }

    /**
     * Set the vue devis droit suppr.
     *
     * @param bool $vueDevisDroitSuppr The vue devis droit suppr.
     */
    public function setVueDevisDroitSuppr($vueDevisDroitSuppr) {
        $this->vueDevisDroitSuppr = $vueDevisDroitSuppr;
        return $this;
    }

    /**
     * Set the vue devis droit valid.
     *
     * @param bool $vueDevisDroitValid The vue devis droit valid.
     */
    public function setVueDevisDroitValid($vueDevisDroitValid) {
        $this->vueDevisDroitValid = $vueDevisDroitValid;
        return $this;
    }

    /**
     * Set the ya droits collab.
     *
     * @param bool $yaDroitsCollab The ya droits collab.
     */
    public function setYaDroitsCollab($yaDroitsCollab) {
        $this->yaDroitsCollab = $yaDroitsCollab;
        return $this;
    }

    /**
     * Set the e ws mdp.
     *
     * @param string $eWsMdp The e ws mdp.
     */
    public function seteWsMdp($eWsMdp) {
        $this->eWsMdp = $eWsMdp;
        return $this;
    }
}
