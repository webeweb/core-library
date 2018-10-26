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
 * Collaborateurs model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Collaborateurs {

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
	 * Acces cur doss only.
	 *
	 * @var boolean
	 */
	private $accesCurDossOnly;

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
	 * Acces gestionaire stats croisees.
	 *
	 * @var boolean
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
	 * @var boolean
	 */
	private $accesStatCab;

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
	 * Articles lst perso acces gestion modifiables.
	 *
	 * @var boolean
	 */
	private $articlesLstPersoAccesGestionModifiables;

	/**
	 * Articles lst perso acces gestionnaire.
	 *
	 * @var boolean
	 */
	private $articlesLstPersoAccesGestionnaire;

	/**
	 * Articles lst perso champs modif.
	 *
	 * @var boolean
	 */
	private $articlesLstPersoChampsModif;

	/**
	 * Articles lst perso copie colonne.
	 *
	 * @var boolean
	 */
	private $articlesLstPersoCopieColonne;

	/**
	 * Articles lst perso interdire creat.
	 *
	 * @var boolean
	 */
	private $articlesLstPersoInterdireCreat;

	/**
	 * Autorise saisie tps colonnes.
	 *
	 * @var boolean
	 */
	private $autoriseSaisieTpsColonnes;

	/**
	 * B i c.
	 *
	 * @var string
	 */
	private $bIC;

	/**
	 * B t q.
	 *
	 * @var string
	 */
	private $bTQ;

	/**
	 * Blocage ed cli.
	 *
	 * @var boolean
	 */
	private $blocageEdCli;

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
	 * Cle c c n paie.
	 *
	 * @var string
	 */
	private $cleCCNPaie;

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
	 * Controle saisie t p.
	 *
	 * @var string
	 */
	private $controleSaisieTP;

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
	 * Date entree.
	 *
	 * @var DateTime
	 */
	private $dateEntree;

	/**
	 * Date sortie.
	 *
	 * @var DateTime
	 */
	private $dateSortie;

	/**
	 * Date validation budget.
	 *
	 * @var DateTime
	 */
	private $dateValidationBudget;

	/**
	 * Date validation nd f.
	 *
	 * @var DateTime
	 */
	private $dateValidationNdF;

	/**
	 * Date validation t p.
	 *
	 * @var DateTime
	 */
	private $dateValidationTP;

	/**
	 * Desactiver filtre msg.
	 *
	 * @var boolean
	 */
	private $desactiverFiltreMsg;

	/**
	 * Disponible.
	 *
	 * @var boolean
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
	 * @var boolean
	 */
	private $droitParamEmailsConfidentiels;

	/**
	 * Droit sync port.
	 *
	 * @var boolean
	 */
	private $droitSyncPort;

	/**
	 * Droit sync q prop.
	 *
	 * @var boolean
	 */
	private $droitSyncQProp;

	/**
	 * E mail agenda dmd confirm.
	 *
	 * @var string
	 */
	private $eMailAgendaDmdConfirm;

	/**
	 * E mail auto cloture imap.
	 *
	 * @var boolean
	 */
	private $eMailAutoClotureImap;

	/**
	 * E mail mode signature.
	 *
	 * @var int
	 */
	private $eMailModeSignature;

	/**
	 * E mail nb j ag mini.
	 *
	 * @var int
	 */
	private $eMailNbJAgMini;

	/**
	 * E mail objet defaut.
	 *
	 * @var string
	 */
	private $eMailObjetDefaut;

	/**
	 * E mail pied.
	 *
	 * @var string
	 */
	private $eMailPied;

	/**
	 * E mail r r active.
	 *
	 * @var boolean
	 */
	private $eMailRRActive;

	/**
	 * E mail redir auto.
	 *
	 * @var boolean
	 */
	private $eMailRedirAuto;

	/**
	 * E mail redir auto collab.
	 *
	 * @var string
	 */
	private $eMailRedirAutoCollab;

	/**
	 * E mail reponse auto.
	 *
	 * @var boolean
	 */
	private $eMailReponseAuto;

	/**
	 * E mail reponse auto text.
	 *
	 * @var string
	 */
	private $eMailReponseAutoText;

	/**
	 * E mail start mode.
	 *
	 * @var int
	 */
	private $eMailStartMode;

	/**
	 * E mail sur serveur.
	 *
	 * @var boolean
	 */
	private $eMailSurServeur;

	/**
	 * E mail tete.
	 *
	 * @var string
	 */
	private $eMailTete;

	/**
	 * Email.
	 *
	 * @var string
	 */
	private $email;

	/**
	 * Email activer aide saisie.
	 *
	 * @var boolean
	 */
	private $emailActiverAideSaisie;

	/**
	 * Email lst adr choix elem.
	 *
	 * @var int
	 */
	private $emailLstAdrChoixElem;

	/**
	 * Email redirection.
	 *
	 * @var string
	 */
	private $emailRedirection;

	/**
	 * Est acheteur.
	 *
	 * @var int
	 */
	private $estAcheteur;

	/**
	 * Etab confidentialite q p.
	 *
	 * @var string
	 */
	private $etabConfidentialiteQP;

	/**
	 * Fictif.
	 *
	 * @var boolean
	 */
	private $fictif;

	/**
	 * Fonction.
	 *
	 * @var string
	 */
	private $fonction;

	/**
	 * I b a n.
	 *
	 * @var string
	 */
	private $iBAN;

	/**
	 * Interdiction pwd.
	 *
	 * @var boolean
	 */
	private $interdictionPwd;

	/**
	 * Interdiction vue facturation.
	 *
	 * @var boolean
	 */
	private $interdictionVueFacturation;

	/**
	 * Interdire acces archives cpta.
	 *
	 * @var boolean
	 */
	private $interdireAccesArchivesCpta;

	/**
	 * Interdire acces archives paie.
	 *
	 * @var boolean
	 */
	private $interdireAccesArchivesPaie;

	/**
	 * Interdire acces edition balance.
	 *
	 * @var boolean
	 */
	private $interdireAccesEditionBalance;

	/**
	 * Interdire acces entete.
	 *
	 * @var boolean
	 */
	private $interdireAccesEntete;

	/**
	 * Interdire acces supp doc arch.
	 *
	 * @var boolean
	 */
	private $interdireAccesSuppDocArch;

	/**
	 * Interdire edition valorise jrn temps.
	 *
	 * @var boolean
	 */
	private $interdireEditionValoriseJrnTemps;

	/**
	 * Interdire envoi postit.
	 *
	 * @var boolean
	 */
	private $interdireEnvoiPostit;

	/**
	 * Interdire modif aff cli.
	 *
	 * @var boolean
	 */
	private $interdireModifAffCli;

	/**
	 * Interdire modif depot.
	 *
	 * @var boolean
	 */
	private $interdireModifDepot;

	/**
	 * Interdire publi doc web.
	 *
	 * @var boolean
	 */
	private $interdirePubliDocWeb;

	/**
	 * Interim.
	 *
	 * @var boolean
	 */
	private $interim;

	/**
	 * Is groupe.
	 *
	 * @var boolean
	 */
	private $isGroupe;

	/**
	 * Is profil messages.
	 *
	 * @var boolean
	 */
	private $isProfilMessages;

	/**
	 * Limiter visu agenda.
	 *
	 * @var boolean
	 */
	private $limiterVisuAgenda;

	/**
	 * Masquer fournisseurs.
	 *
	 * @var boolean
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
	 * Modif droits a s p.
	 *
	 * @var boolean
	 */
	private $modifDroitsASP;

	/**
	 * Modif en vue.
	 *
	 * @var boolean
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
	 * @var boolean
	 */
	private $msgRedirAuto;

	/**
	 * Niv conf emp proprete restreint.
	 *
	 * @var boolean
	 */
	private $nivConfEmpPropreteRestreint;

	/**
	 * Niveau.
	 *
	 * @var int
	 */
	private $niveau;

	/**
	 * Niveau confidentialite q p.
	 *
	 * @var string
	 */
	private $niveauConfidentialiteQP;

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
	 * P a invisible.
	 *
	 * @var boolean
	 */
	private $pAInvisible;

	/**
	 * P a r c code remorque.
	 *
	 * @var string
	 */
	private $pARCCodeRemorque;

	/**
	 * P a r c code vehicule.
	 *
	 * @var string
	 */
	private $pARCCodeVehicule;

	/**
	 * Pas acces q w s.
	 *
	 * @var boolean
	 */
	private $pasAccesQWS;

	/**
	 * Pas saisie des temps.
	 *
	 * @var boolean
	 */
	private $pasSaisieDesTemps;

	/**
	 * Pas saisie des temps auto.
	 *
	 * @var boolean
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
	 * @var boolean
	 */
	private $present;

	/**
	 * Prevenu nouveau c d.
	 *
	 * @var boolean
	 */
	private $prevenuNouveauCD;

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
	 * R i b.
	 *
	 * @var string
	 */
	private $rIB;

	/**
	 * Restrict acces pieces.
	 *
	 * @var boolean
	 */
	private $restrictAccesPieces;

	/**
	 * Restrict acces stats.
	 *
	 * @var boolean
	 */
	private $restrictAccesStats;

	/**
	 * Saisie p v interdite.
	 *
	 * @var boolean
	 */
	private $saisiePVInterdite;

	/**
	 * Salaire mensuel.
	 *
	 * @var float
	 */
	private $salaireMensuel;

	/**
	 * Sel art collab.
	 *
	 * @var boolean
	 */
	private $selArtCollab;

	/**
	 * Sel av lst perso acces gestion modifiables.
	 *
	 * @var boolean
	 */
	private $selAvLstPersoAccesGestionModifiables;

	/**
	 * Sel av lst perso acces gestionnaire.
	 *
	 * @var boolean
	 */
	private $selAvLstPersoAccesGestionnaire;

	/**
	 * Sel av lst perso champs modif.
	 *
	 * @var boolean
	 */
	private $selAvLstPersoChampsModif;

	/**
	 * Sel av lst perso copie colonne.
	 *
	 * @var boolean
	 */
	private $selAvLstPersoCopieColonne;

	/**
	 * Sel av lst perso interdire creat.
	 *
	 * @var boolean
	 */
	private $selAvLstPersoInterdireCreat;

	/**
	 * Sel cli collab.
	 *
	 * @var boolean
	 */
	private $selCliCollab;

	/**
	 * Sel frn collab.
	 *
	 * @var boolean
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
	 * @var boolean
	 */
	private $suiviMessages;

	/**
	 * Superviseur.
	 *
	 * @var boolean
	 */
	private $superviseur;

	/**
	 * Sync m s o.
	 *
	 * @var boolean
	 */
	private $syncMSO;

	/**
	 * T p pas controler.
	 *
	 * @var boolean
	 */
	private $tPPasControler;

	/**
	 * T p pas journal temps.
	 *
	 * @var boolean
	 */
	private $tPPasJournalTemps;

	/**
	 * T p pas notes de frais.
	 *
	 * @var boolean
	 */
	private $tPPasNotesDeFrais;

	/**
	 * T p pas tps valide.
	 *
	 * @var boolean
	 */
	private $tPPasTpsValide;

	/**
	 * T p pourcentage non operationnel.
	 *
	 * @var float
	 */
	private $tPPourcentageNonOperationnel;

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
	 * Tps niveau blocage.
	 *
	 * @var string
	 */
	private $tpsNiveauBlocage;

	/**
	 * Tx com invisible.
	 *
	 * @var boolean
	 */
	private $txComInvisible;

	/**
	 * Type conf2 c m a v cli.
	 *
	 * @var string
	 */
	private $typeConf2CMAVCli;

	/**
	 * Type conf c m a v cli.
	 *
	 * @var string
	 */
	private $typeConfCMAVCli;

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
	 * @var boolean
	 */
	private $useMailGeneric;

	/**
	 * Visualisation fiche cabinet.
	 *
	 * @var boolean
	 */
	private $visualisationFicheCabinet;

	/**
	 * Vue com droit reaffect.
	 *
	 * @var boolean
	 */
	private $vueComDroitReaffect;

	/**
	 * Vue devis droit reaffect.
	 *
	 * @var boolean
	 */
	private $vueDevisDroitReaffect;

	/**
	 * Vue devis droit suppr.
	 *
	 * @var boolean
	 */
	private $vueDevisDroitSuppr;

	/**
	 * Vue devis droit valid.
	 *
	 * @var boolean
	 */
	private $vueDevisDroitValid;

	/**
	 * Ya droits collab.
	 *
	 * @var boolean
	 */
	private $yaDroitsCollab;

	/**
	 * e w s mdp.
	 *
	 * @var string
	 */
	private $eWSMdp;

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
	 * Get the acces cur doss only.
	 *
	 * @return boolean Returns the acces cur doss only.
	 */
	public function getAccesCurDossOnly() {
		return $this->accesCurDossOnly;
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
	 * Get the acces gestionaire stats croisees.
	 *
	 * @return boolean Returns the acces gestionaire stats croisees.
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
	 * @return boolean Returns the acces stat cab.
	 */
	public function getAccesStatCab() {
		return $this->accesStatCab;
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
	 * Get the articles lst perso acces gestion modifiables.
	 *
	 * @return boolean Returns the articles lst perso acces gestion modifiables.
	 */
	public function getArticlesLstPersoAccesGestionModifiables() {
		return $this->articlesLstPersoAccesGestionModifiables;
	}

	/**
	 * Get the articles lst perso acces gestionnaire.
	 *
	 * @return boolean Returns the articles lst perso acces gestionnaire.
	 */
	public function getArticlesLstPersoAccesGestionnaire() {
		return $this->articlesLstPersoAccesGestionnaire;
	}

	/**
	 * Get the articles lst perso champs modif.
	 *
	 * @return boolean Returns the articles lst perso champs modif.
	 */
	public function getArticlesLstPersoChampsModif() {
		return $this->articlesLstPersoChampsModif;
	}

	/**
	 * Get the articles lst perso copie colonne.
	 *
	 * @return boolean Returns the articles lst perso copie colonne.
	 */
	public function getArticlesLstPersoCopieColonne() {
		return $this->articlesLstPersoCopieColonne;
	}

	/**
	 * Get the articles lst perso interdire creat.
	 *
	 * @return boolean Returns the articles lst perso interdire creat.
	 */
	public function getArticlesLstPersoInterdireCreat() {
		return $this->articlesLstPersoInterdireCreat;
	}

	/**
	 * Get the autorise saisie tps colonnes.
	 *
	 * @return boolean Returns the autorise saisie tps colonnes.
	 */
	public function getAutoriseSaisieTpsColonnes() {
		return $this->autoriseSaisieTpsColonnes;
	}

	/**
	 * Get the b i c.
	 *
	 * @return string Returns the b i c.
	 */
	public function getBIC() {
		return $this->bIC;
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
	 * Get the blocage ed cli.
	 *
	 * @return boolean Returns the blocage ed cli.
	 */
	public function getBlocageEdCli() {
		return $this->blocageEdCli;
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
	 * Get the cle c c n paie.
	 *
	 * @return string Returns the cle c c n paie.
	 */
	public function getCleCCNPaie() {
		return $this->cleCCNPaie;
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
	 * Get the controle saisie t p.
	 *
	 * @return string Returns the controle saisie t p.
	 */
	public function getControleSaisieTP() {
		return $this->controleSaisieTP;
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
	 * Get the date entree.
	 *
	 * @return DateTime Returns the date entree.
	 */
	public function getDateEntree() {
		return $this->dateEntree;
	}

	/**
	 * Get the date sortie.
	 *
	 * @return DateTime Returns the date sortie.
	 */
	public function getDateSortie() {
		return $this->dateSortie;
	}

	/**
	 * Get the date validation budget.
	 *
	 * @return DateTime Returns the date validation budget.
	 */
	public function getDateValidationBudget() {
		return $this->dateValidationBudget;
	}

	/**
	 * Get the date validation nd f.
	 *
	 * @return DateTime Returns the date validation nd f.
	 */
	public function getDateValidationNdF() {
		return $this->dateValidationNdF;
	}

	/**
	 * Get the date validation t p.
	 *
	 * @return DateTime Returns the date validation t p.
	 */
	public function getDateValidationTP() {
		return $this->dateValidationTP;
	}

	/**
	 * Get the desactiver filtre msg.
	 *
	 * @return boolean Returns the desactiver filtre msg.
	 */
	public function getDesactiverFiltreMsg() {
		return $this->desactiverFiltreMsg;
	}

	/**
	 * Get the disponible.
	 *
	 * @return boolean Returns the disponible.
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
	 * @return boolean Returns the droit param emails confidentiels.
	 */
	public function getDroitParamEmailsConfidentiels() {
		return $this->droitParamEmailsConfidentiels;
	}

	/**
	 * Get the droit sync port.
	 *
	 * @return boolean Returns the droit sync port.
	 */
	public function getDroitSyncPort() {
		return $this->droitSyncPort;
	}

	/**
	 * Get the droit sync q prop.
	 *
	 * @return boolean Returns the droit sync q prop.
	 */
	public function getDroitSyncQProp() {
		return $this->droitSyncQProp;
	}

	/**
	 * Get the e mail agenda dmd confirm.
	 *
	 * @return string Returns the e mail agenda dmd confirm.
	 */
	public function getEMailAgendaDmdConfirm() {
		return $this->eMailAgendaDmdConfirm;
	}

	/**
	 * Get the e mail auto cloture imap.
	 *
	 * @return boolean Returns the e mail auto cloture imap.
	 */
	public function getEMailAutoClotureImap() {
		return $this->eMailAutoClotureImap;
	}

	/**
	 * Get the e mail mode signature.
	 *
	 * @return int Returns the e mail mode signature.
	 */
	public function getEMailModeSignature() {
		return $this->eMailModeSignature;
	}

	/**
	 * Get the e mail nb j ag mini.
	 *
	 * @return int Returns the e mail nb j ag mini.
	 */
	public function getEMailNbJAgMini() {
		return $this->eMailNbJAgMini;
	}

	/**
	 * Get the e mail objet defaut.
	 *
	 * @return string Returns the e mail objet defaut.
	 */
	public function getEMailObjetDefaut() {
		return $this->eMailObjetDefaut;
	}

	/**
	 * Get the e mail pied.
	 *
	 * @return string Returns the e mail pied.
	 */
	public function getEMailPied() {
		return $this->eMailPied;
	}

	/**
	 * Get the e mail r r active.
	 *
	 * @return boolean Returns the e mail r r active.
	 */
	public function getEMailRRActive() {
		return $this->eMailRRActive;
	}

	/**
	 * Get the e mail redir auto.
	 *
	 * @return boolean Returns the e mail redir auto.
	 */
	public function getEMailRedirAuto() {
		return $this->eMailRedirAuto;
	}

	/**
	 * Get the e mail redir auto collab.
	 *
	 * @return string Returns the e mail redir auto collab.
	 */
	public function getEMailRedirAutoCollab() {
		return $this->eMailRedirAutoCollab;
	}

	/**
	 * Get the e mail reponse auto.
	 *
	 * @return boolean Returns the e mail reponse auto.
	 */
	public function getEMailReponseAuto() {
		return $this->eMailReponseAuto;
	}

	/**
	 * Get the e mail reponse auto text.
	 *
	 * @return string Returns the e mail reponse auto text.
	 */
	public function getEMailReponseAutoText() {
		return $this->eMailReponseAutoText;
	}

	/**
	 * Get the e mail start mode.
	 *
	 * @return int Returns the e mail start mode.
	 */
	public function getEMailStartMode() {
		return $this->eMailStartMode;
	}

	/**
	 * Get the e mail sur serveur.
	 *
	 * @return boolean Returns the e mail sur serveur.
	 */
	public function getEMailSurServeur() {
		return $this->eMailSurServeur;
	}

	/**
	 * Get the e mail tete.
	 *
	 * @return string Returns the e mail tete.
	 */
	public function getEMailTete() {
		return $this->eMailTete;
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
	 * @return boolean Returns the email activer aide saisie.
	 */
	public function getEmailActiverAideSaisie() {
		return $this->emailActiverAideSaisie;
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
	 * Get the email redirection.
	 *
	 * @return string Returns the email redirection.
	 */
	public function getEmailRedirection() {
		return $this->emailRedirection;
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
	 * Get the etab confidentialite q p.
	 *
	 * @return string Returns the etab confidentialite q p.
	 */
	public function getEtabConfidentialiteQP() {
		return $this->etabConfidentialiteQP;
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
	 * Get the fonction.
	 *
	 * @return string Returns the fonction.
	 */
	public function getFonction() {
		return $this->fonction;
	}

	/**
	 * Get the i b a n.
	 *
	 * @return string Returns the i b a n.
	 */
	public function getIBAN() {
		return $this->iBAN;
	}

	/**
	 * Get the interdiction pwd.
	 *
	 * @return boolean Returns the interdiction pwd.
	 */
	public function getInterdictionPwd() {
		return $this->interdictionPwd;
	}

	/**
	 * Get the interdiction vue facturation.
	 *
	 * @return boolean Returns the interdiction vue facturation.
	 */
	public function getInterdictionVueFacturation() {
		return $this->interdictionVueFacturation;
	}

	/**
	 * Get the interdire acces archives cpta.
	 *
	 * @return boolean Returns the interdire acces archives cpta.
	 */
	public function getInterdireAccesArchivesCpta() {
		return $this->interdireAccesArchivesCpta;
	}

	/**
	 * Get the interdire acces archives paie.
	 *
	 * @return boolean Returns the interdire acces archives paie.
	 */
	public function getInterdireAccesArchivesPaie() {
		return $this->interdireAccesArchivesPaie;
	}

	/**
	 * Get the interdire acces edition balance.
	 *
	 * @return boolean Returns the interdire acces edition balance.
	 */
	public function getInterdireAccesEditionBalance() {
		return $this->interdireAccesEditionBalance;
	}

	/**
	 * Get the interdire acces entete.
	 *
	 * @return boolean Returns the interdire acces entete.
	 */
	public function getInterdireAccesEntete() {
		return $this->interdireAccesEntete;
	}

	/**
	 * Get the interdire acces supp doc arch.
	 *
	 * @return boolean Returns the interdire acces supp doc arch.
	 */
	public function getInterdireAccesSuppDocArch() {
		return $this->interdireAccesSuppDocArch;
	}

	/**
	 * Get the interdire edition valorise jrn temps.
	 *
	 * @return boolean Returns the interdire edition valorise jrn temps.
	 */
	public function getInterdireEditionValoriseJrnTemps() {
		return $this->interdireEditionValoriseJrnTemps;
	}

	/**
	 * Get the interdire envoi postit.
	 *
	 * @return boolean Returns the interdire envoi postit.
	 */
	public function getInterdireEnvoiPostit() {
		return $this->interdireEnvoiPostit;
	}

	/**
	 * Get the interdire modif aff cli.
	 *
	 * @return boolean Returns the interdire modif aff cli.
	 */
	public function getInterdireModifAffCli() {
		return $this->interdireModifAffCli;
	}

	/**
	 * Get the interdire modif depot.
	 *
	 * @return boolean Returns the interdire modif depot.
	 */
	public function getInterdireModifDepot() {
		return $this->interdireModifDepot;
	}

	/**
	 * Get the interdire publi doc web.
	 *
	 * @return boolean Returns the interdire publi doc web.
	 */
	public function getInterdirePubliDocWeb() {
		return $this->interdirePubliDocWeb;
	}

	/**
	 * Get the interim.
	 *
	 * @return boolean Returns the interim.
	 */
	public function getInterim() {
		return $this->interim;
	}

	/**
	 * Get the is groupe.
	 *
	 * @return boolean Returns the is groupe.
	 */
	public function getIsGroupe() {
		return $this->isGroupe;
	}

	/**
	 * Get the is profil messages.
	 *
	 * @return boolean Returns the is profil messages.
	 */
	public function getIsProfilMessages() {
		return $this->isProfilMessages;
	}

	/**
	 * Get the limiter visu agenda.
	 *
	 * @return boolean Returns the limiter visu agenda.
	 */
	public function getLimiterVisuAgenda() {
		return $this->limiterVisuAgenda;
	}

	/**
	 * Get the masquer fournisseurs.
	 *
	 * @return boolean Returns the masquer fournisseurs.
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
	 * Get the modif droits a s p.
	 *
	 * @return boolean Returns the modif droits a s p.
	 */
	public function getModifDroitsASP() {
		return $this->modifDroitsASP;
	}

	/**
	 * Get the modif en vue.
	 *
	 * @return boolean Returns the modif en vue.
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
	 * @return boolean Returns the msg redir auto.
	 */
	public function getMsgRedirAuto() {
		return $this->msgRedirAuto;
	}

	/**
	 * Get the niv conf emp proprete restreint.
	 *
	 * @return boolean Returns the niv conf emp proprete restreint.
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
	 * Get the niveau confidentialite q p.
	 *
	 * @return string Returns the niveau confidentialite q p.
	 */
	public function getNiveauConfidentialiteQP() {
		return $this->niveauConfidentialiteQP;
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
	 * Get the p a invisible.
	 *
	 * @return boolean Returns the p a invisible.
	 */
	public function getPAInvisible() {
		return $this->pAInvisible;
	}

	/**
	 * Get the p a r c code remorque.
	 *
	 * @return string Returns the p a r c code remorque.
	 */
	public function getPARCCodeRemorque() {
		return $this->pARCCodeRemorque;
	}

	/**
	 * Get the p a r c code vehicule.
	 *
	 * @return string Returns the p a r c code vehicule.
	 */
	public function getPARCCodeVehicule() {
		return $this->pARCCodeVehicule;
	}

	/**
	 * Get the pas acces q w s.
	 *
	 * @return boolean Returns the pas acces q w s.
	 */
	public function getPasAccesQWS() {
		return $this->pasAccesQWS;
	}

	/**
	 * Get the pas saisie des temps.
	 *
	 * @return boolean Returns the pas saisie des temps.
	 */
	public function getPasSaisieDesTemps() {
		return $this->pasSaisieDesTemps;
	}

	/**
	 * Get the pas saisie des temps auto.
	 *
	 * @return boolean Returns the pas saisie des temps auto.
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
	 * @return boolean Returns the present.
	 */
	public function getPresent() {
		return $this->present;
	}

	/**
	 * Get the prevenu nouveau c d.
	 *
	 * @return boolean Returns the prevenu nouveau c d.
	 */
	public function getPrevenuNouveauCD() {
		return $this->prevenuNouveauCD;
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
	 * Get the r i b.
	 *
	 * @return string Returns the r i b.
	 */
	public function getRIB() {
		return $this->rIB;
	}

	/**
	 * Get the restrict acces pieces.
	 *
	 * @return boolean Returns the restrict acces pieces.
	 */
	public function getRestrictAccesPieces() {
		return $this->restrictAccesPieces;
	}

	/**
	 * Get the restrict acces stats.
	 *
	 * @return boolean Returns the restrict acces stats.
	 */
	public function getRestrictAccesStats() {
		return $this->restrictAccesStats;
	}

	/**
	 * Get the saisie p v interdite.
	 *
	 * @return boolean Returns the saisie p v interdite.
	 */
	public function getSaisiePVInterdite() {
		return $this->saisiePVInterdite;
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
	 * @return boolean Returns the sel art collab.
	 */
	public function getSelArtCollab() {
		return $this->selArtCollab;
	}

	/**
	 * Get the sel av lst perso acces gestion modifiables.
	 *
	 * @return boolean Returns the sel av lst perso acces gestion modifiables.
	 */
	public function getSelAvLstPersoAccesGestionModifiables() {
		return $this->selAvLstPersoAccesGestionModifiables;
	}

	/**
	 * Get the sel av lst perso acces gestionnaire.
	 *
	 * @return boolean Returns the sel av lst perso acces gestionnaire.
	 */
	public function getSelAvLstPersoAccesGestionnaire() {
		return $this->selAvLstPersoAccesGestionnaire;
	}

	/**
	 * Get the sel av lst perso champs modif.
	 *
	 * @return boolean Returns the sel av lst perso champs modif.
	 */
	public function getSelAvLstPersoChampsModif() {
		return $this->selAvLstPersoChampsModif;
	}

	/**
	 * Get the sel av lst perso copie colonne.
	 *
	 * @return boolean Returns the sel av lst perso copie colonne.
	 */
	public function getSelAvLstPersoCopieColonne() {
		return $this->selAvLstPersoCopieColonne;
	}

	/**
	 * Get the sel av lst perso interdire creat.
	 *
	 * @return boolean Returns the sel av lst perso interdire creat.
	 */
	public function getSelAvLstPersoInterdireCreat() {
		return $this->selAvLstPersoInterdireCreat;
	}

	/**
	 * Get the sel cli collab.
	 *
	 * @return boolean Returns the sel cli collab.
	 */
	public function getSelCliCollab() {
		return $this->selCliCollab;
	}

	/**
	 * Get the sel frn collab.
	 *
	 * @return boolean Returns the sel frn collab.
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
	 * @return boolean Returns the suivi messages.
	 */
	public function getSuiviMessages() {
		return $this->suiviMessages;
	}

	/**
	 * Get the superviseur.
	 *
	 * @return boolean Returns the superviseur.
	 */
	public function getSuperviseur() {
		return $this->superviseur;
	}

	/**
	 * Get the sync m s o.
	 *
	 * @return boolean Returns the sync m s o.
	 */
	public function getSyncMSO() {
		return $this->syncMSO;
	}

	/**
	 * Get the t p pas controler.
	 *
	 * @return boolean Returns the t p pas controler.
	 */
	public function getTPPasControler() {
		return $this->tPPasControler;
	}

	/**
	 * Get the t p pas journal temps.
	 *
	 * @return boolean Returns the t p pas journal temps.
	 */
	public function getTPPasJournalTemps() {
		return $this->tPPasJournalTemps;
	}

	/**
	 * Get the t p pas notes de frais.
	 *
	 * @return boolean Returns the t p pas notes de frais.
	 */
	public function getTPPasNotesDeFrais() {
		return $this->tPPasNotesDeFrais;
	}

	/**
	 * Get the t p pas tps valide.
	 *
	 * @return boolean Returns the t p pas tps valide.
	 */
	public function getTPPasTpsValide() {
		return $this->tPPasTpsValide;
	}

	/**
	 * Get the t p pourcentage non operationnel.
	 *
	 * @return float Returns the t p pourcentage non operationnel.
	 */
	public function getTPPourcentageNonOperationnel() {
		return $this->tPPourcentageNonOperationnel;
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
	 * @return boolean Returns the tx com invisible.
	 */
	public function getTxComInvisible() {
		return $this->txComInvisible;
	}

	/**
	 * Get the type conf2 c m a v cli.
	 *
	 * @return string Returns the type conf2 c m a v cli.
	 */
	public function getTypeConf2CMAVCli() {
		return $this->typeConf2CMAVCli;
	}

	/**
	 * Get the type conf c m a v cli.
	 *
	 * @return string Returns the type conf c m a v cli.
	 */
	public function getTypeConfCMAVCli() {
		return $this->typeConfCMAVCli;
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
	 * @return boolean Returns the use mail generic.
	 */
	public function getUseMailGeneric() {
		return $this->useMailGeneric;
	}

	/**
	 * Get the visualisation fiche cabinet.
	 *
	 * @return boolean Returns the visualisation fiche cabinet.
	 */
	public function getVisualisationFicheCabinet() {
		return $this->visualisationFicheCabinet;
	}

	/**
	 * Get the vue com droit reaffect.
	 *
	 * @return boolean Returns the vue com droit reaffect.
	 */
	public function getVueComDroitReaffect() {
		return $this->vueComDroitReaffect;
	}

	/**
	 * Get the vue devis droit reaffect.
	 *
	 * @return boolean Returns the vue devis droit reaffect.
	 */
	public function getVueDevisDroitReaffect() {
		return $this->vueDevisDroitReaffect;
	}

	/**
	 * Get the vue devis droit suppr.
	 *
	 * @return boolean Returns the vue devis droit suppr.
	 */
	public function getVueDevisDroitSuppr() {
		return $this->vueDevisDroitSuppr;
	}

	/**
	 * Get the vue devis droit valid.
	 *
	 * @return boolean Returns the vue devis droit valid.
	 */
	public function getVueDevisDroitValid() {
		return $this->vueDevisDroitValid;
	}

	/**
	 * Get the ya droits collab.
	 *
	 * @return boolean Returns the ya droits collab.
	 */
	public function getYaDroitsCollab() {
		return $this->yaDroitsCollab;
	}

	/**
	 * Get the e w s mdp.
	 *
	 * @return string Returns the e w s mdp.
	 */
	public function geteWSMdp() {
		return $this->eWSMdp;
	}

	/**
	 * Set the acces autorise bons travaux.
	 *
	 * @param boolean $accesAutoriseBonsTravaux The acces autorise bons travaux.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesAutoriseBonsTravaux($accesAutoriseBonsTravaux) {
		$this->accesAutoriseBonsTravaux = $accesAutoriseBonsTravaux;
		return $this;
	}

	/**
	 * Set the acces autorise plan facturation.
	 *
	 * @param boolean $accesAutorisePlanFacturation The acces autorise plan facturation.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesAutorisePlanFacturation($accesAutorisePlanFacturation) {
		$this->accesAutorisePlanFacturation = $accesAutorisePlanFacturation;
		return $this;
	}

	/**
	 * Set the acces autorise plan tache.
	 *
	 * @param boolean $accesAutorisePlanTache The acces autorise plan tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesAutorisePlanTache($accesAutorisePlanTache) {
		$this->accesAutorisePlanTache = $accesAutorisePlanTache;
		return $this;
	}

	/**
	 * Set the acces cur doss only.
	 *
	 * @param boolean $accesCurDossOnly The acces cur doss only.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesCurDossOnly($accesCurDossOnly) {
		$this->accesCurDossOnly = $accesCurDossOnly;
		return $this;
	}

	/**
	 * Set the acces docs cab.
	 *
	 * @param boolean $accesDocsCab The acces docs cab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesDocsCab($accesDocsCab) {
		$this->accesDocsCab = $accesDocsCab;
		return $this;
	}

	/**
	 * Set the acces dossier cpta.
	 *
	 * @param string $accesDossierCpta The acces dossier cpta.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesDossierCpta($accesDossierCpta) {
		$this->accesDossierCpta = $accesDossierCpta;
		return $this;
	}

	/**
	 * Set the acces dossier paie.
	 *
	 * @param string $accesDossierPaie The acces dossier paie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesDossierPaie($accesDossierPaie) {
		$this->accesDossierPaie = $accesDossierPaie;
		return $this;
	}

	/**
	 * Set the acces gestionaire stats croisees.
	 *
	 * @param boolean $accesGestionaireStatsCroisees The acces gestionaire stats croisees.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesGestionaireStatsCroisees($accesGestionaireStatsCroisees) {
		$this->accesGestionaireStatsCroisees = $accesGestionaireStatsCroisees;
		return $this;
	}

	/**
	 * Set the acces rep commun.
	 *
	 * @param string $accesRepCommun The acces rep commun.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesRepCommun($accesRepCommun) {
		$this->accesRepCommun = $accesRepCommun;
		return $this;
	}

	/**
	 * Set the acces stat cab.
	 *
	 * @param boolean $accesStatCab The acces stat cab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAccesStatCab($accesStatCab) {
		$this->accesStatCab = $accesStatCab;
		return $this;
	}

	/**
	 * Set the annulation affaire.
	 *
	 * @param boolean $annulationAffaire The annulation affaire.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationAffaire($annulationAffaire) {
		$this->annulationAffaire = $annulationAffaire;
		return $this;
	}

	/**
	 * Set the annulation article.
	 *
	 * @param boolean $annulationArticle The annulation article.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationArticle($annulationArticle) {
		$this->annulationArticle = $annulationArticle;
		return $this;
	}

	/**
	 * Set the annulation bons travaux.
	 *
	 * @param boolean $annulationBonsTravaux The annulation bons travaux.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationBonsTravaux($annulationBonsTravaux) {
		$this->annulationBonsTravaux = $annulationBonsTravaux;
		return $this;
	}

	/**
	 * Set the annulation chantier.
	 *
	 * @param boolean $annulationChantier The annulation chantier.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationChantier($annulationChantier) {
		$this->annulationChantier = $annulationChantier;
		return $this;
	}

	/**
	 * Set the annulation client.
	 *
	 * @param boolean $annulationClient The annulation client.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationClient($annulationClient) {
		$this->annulationClient = $annulationClient;
		return $this;
	}

	/**
	 * Set the annulation commission.
	 *
	 * @param boolean $annulationCommission The annulation commission.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationCommission($annulationCommission) {
		$this->annulationCommission = $annulationCommission;
		return $this;
	}

	/**
	 * Set the annulation dossier cpta.
	 *
	 * @param boolean $annulationDossierCpta The annulation dossier cpta.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationDossierCpta($annulationDossierCpta) {
		$this->annulationDossierCpta = $annulationDossierCpta;
		return $this;
	}

	/**
	 * Set the annulation dossier fact.
	 *
	 * @param boolean $annulationDossierFact The annulation dossier fact.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationDossierFact($annulationDossierFact) {
		$this->annulationDossierFact = $annulationDossierFact;
		return $this;
	}

	/**
	 * Set the annulation dossier paie.
	 *
	 * @param boolean $annulationDossierPaie The annulation dossier paie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationDossierPaie($annulationDossierPaie) {
		$this->annulationDossierPaie = $annulationDossierPaie;
		return $this;
	}

	/**
	 * Set the annulation fournisseur.
	 *
	 * @param boolean $annulationFournisseur The annulation fournisseur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationFournisseur($annulationFournisseur) {
		$this->annulationFournisseur = $annulationFournisseur;
		return $this;
	}

	/**
	 * Set the annulation plan facturation.
	 *
	 * @param boolean $annulationPlanFacturation The annulation plan facturation.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationPlanFacturation($annulationPlanFacturation) {
		$this->annulationPlanFacturation = $annulationPlanFacturation;
		return $this;
	}

	/**
	 * Set the annulation plan tache.
	 *
	 * @param boolean $annulationPlanTache The annulation plan tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationPlanTache($annulationPlanTache) {
		$this->annulationPlanTache = $annulationPlanTache;
		return $this;
	}

	/**
	 * Set the annulation tache.
	 *
	 * @param boolean $annulationTache The annulation tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationTache($annulationTache) {
		$this->annulationTache = $annulationTache;
		return $this;
	}

	/**
	 * Set the annulation tarif.
	 *
	 * @param boolean $annulationTarif The annulation tarif.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAnnulationTarif($annulationTarif) {
		$this->annulationTarif = $annulationTarif;
		return $this;
	}

	/**
	 * Set the articles lst perso acces gestion modifiables.
	 *
	 * @param boolean $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setArticlesLstPersoAccesGestionModifiables($articlesLstPersoAccesGestionModifiables) {
		$this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
		return $this;
	}

	/**
	 * Set the articles lst perso acces gestionnaire.
	 *
	 * @param boolean $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setArticlesLstPersoAccesGestionnaire($articlesLstPersoAccesGestionnaire) {
		$this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
		return $this;
	}

	/**
	 * Set the articles lst perso champs modif.
	 *
	 * @param boolean $articlesLstPersoChampsModif The articles lst perso champs modif.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setArticlesLstPersoChampsModif($articlesLstPersoChampsModif) {
		$this->articlesLstPersoChampsModif = $articlesLstPersoChampsModif;
		return $this;
	}

	/**
	 * Set the articles lst perso copie colonne.
	 *
	 * @param boolean $articlesLstPersoCopieColonne The articles lst perso copie colonne.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setArticlesLstPersoCopieColonne($articlesLstPersoCopieColonne) {
		$this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
		return $this;
	}

	/**
	 * Set the articles lst perso interdire creat.
	 *
	 * @param boolean $articlesLstPersoInterdireCreat The articles lst perso interdire creat.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setArticlesLstPersoInterdireCreat($articlesLstPersoInterdireCreat) {
		$this->articlesLstPersoInterdireCreat = $articlesLstPersoInterdireCreat;
		return $this;
	}

	/**
	 * Set the autorise saisie tps colonnes.
	 *
	 * @param boolean $autoriseSaisieTpsColonnes The autorise saisie tps colonnes.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setAutoriseSaisieTpsColonnes($autoriseSaisieTpsColonnes) {
		$this->autoriseSaisieTpsColonnes = $autoriseSaisieTpsColonnes;
		return $this;
	}

	/**
	 * Set the b i c.
	 *
	 * @param string $bIC The b i c.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setBIC($bIC) {
		$this->bIC = $bIC;
		return $this;
	}

	/**
	 * Set the b t q.
	 *
	 * @param string $bTQ The b t q.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setBTQ($bTQ) {
		$this->bTQ = $bTQ;
		return $this;
	}

	/**
	 * Set the blocage ed cli.
	 *
	 * @param boolean $blocageEdCli The blocage ed cli.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setBlocageEdCli($blocageEdCli) {
		$this->blocageEdCli = $blocageEdCli;
		return $this;
	}

	/**
	 * Set the bureau distributeur.
	 *
	 * @param string $bureauDistributeur The bureau distributeur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setBureauDistributeur($bureauDistributeur) {
		$this->bureauDistributeur = $bureauDistributeur;
		return $this;
	}

	/**
	 * Set the categorie prix km.
	 *
	 * @param string $categoriePrixKm The categorie prix km.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCategoriePrixKm($categoriePrixKm) {
		$this->categoriePrixKm = $categoriePrixKm;
		return $this;
	}

	/**
	 * Set the categorie ticket resto.
	 *
	 * @param string $categorieTicketResto The categorie ticket resto.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCategorieTicketResto($categorieTicketResto) {
		$this->categorieTicketResto = $categorieTicketResto;
		return $this;
	}

	/**
	 * Set the charges mensuelles.
	 *
	 * @param float $chargesMensuelles The charges mensuelles.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setChargesMensuelles($chargesMensuelles) {
		$this->chargesMensuelles = $chargesMensuelles;
		return $this;
	}

	/**
	 * Set the cle c c n paie.
	 *
	 * @param string $cleCCNPaie The cle c c n paie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCleCCNPaie($cleCCNPaie) {
		$this->cleCCNPaie = $cleCCNPaie;
		return $this;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the code centre.
	 *
	 * @param string $codeCentre The code centre.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeCentre($codeCentre) {
		$this->codeCentre = $codeCentre;
		return $this;
	}

	/**
	 * Set the code chef1.
	 *
	 * @param string $codeChef1 The code chef1.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeChef1($codeChef1) {
		$this->codeChef1 = $codeChef1;
		return $this;
	}

	/**
	 * Set the code chef2.
	 *
	 * @param string $codeChef2 The code chef2.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeChef2($codeChef2) {
		$this->codeChef2 = $codeChef2;
		return $this;
	}

	/**
	 * Set the code depot.
	 *
	 * @param string $codeDepot The code depot.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeDepot($codeDepot) {
		$this->codeDepot = $codeDepot;
		return $this;
	}

	/**
	 * Set the code famille.
	 *
	 * @param string $codeFamille The code famille.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeFamille($codeFamille) {
		$this->codeFamille = $codeFamille;
		return $this;
	}

	/**
	 * Set the code famille frn.
	 *
	 * @param string $codeFamilleFrn The code famille frn.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeFamilleFrn($codeFamilleFrn) {
		$this->codeFamilleFrn = $codeFamilleFrn;
		return $this;
	}

	/**
	 * Set the code groupe.
	 *
	 * @param string $codeGroupe The code groupe.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeGroupe($codeGroupe) {
		$this->codeGroupe = $codeGroupe;
		return $this;
	}

	/**
	 * Set the code groupe visu msg.
	 *
	 * @param string $codeGroupeVisuMsg The code groupe visu msg.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeGroupeVisuMsg($codeGroupeVisuMsg) {
		$this->codeGroupeVisuMsg = $codeGroupeVisuMsg;
		return $this;
	}

	/**
	 * Set the code langue.
	 *
	 * @param string $codeLangue The code langue.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeLangue($codeLangue) {
		$this->codeLangue = $codeLangue;
		return $this;
	}

	/**
	 * Set the code liaison dest.
	 *
	 * @param string $codeLiaisonDest The code liaison dest.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeLiaisonDest($codeLiaisonDest) {
		$this->codeLiaisonDest = $codeLiaisonDest;
		return $this;
	}

	/**
	 * Set the code officiel commune.
	 *
	 * @param string $codeOfficielCommune The code officiel commune.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeOfficielCommune($codeOfficielCommune) {
		$this->codeOfficielCommune = $codeOfficielCommune;
		return $this;
	}

	/**
	 * Set the code postal.
	 *
	 * @param string $codePostal The code postal.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
		return $this;
	}

	/**
	 * Set the code vehicule.
	 *
	 * @param string $codeVehicule The code vehicule.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeVehicule($codeVehicule) {
		$this->codeVehicule = $codeVehicule;
		return $this;
	}

	/**
	 * Set the code ventil compta.
	 *
	 * @param string $codeVentilCompta The code ventil compta.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCodeVentilCompta($codeVentilCompta) {
		$this->codeVentilCompta = $codeVentilCompta;
		return $this;
	}

	/**
	 * Set the complement.
	 *
	 * @param string $complement The complement.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setComplement($complement) {
		$this->complement = $complement;
		return $this;
	}

	/**
	 * Set the compte comptable.
	 *
	 * @param string $compteComptable The compte comptable.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCompteComptable($compteComptable) {
		$this->compteComptable = $compteComptable;
		return $this;
	}

	/**
	 * Set the compte de tiers.
	 *
	 * @param string $compteDeTiers The compte de tiers.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCompteDeTiers($compteDeTiers) {
		$this->compteDeTiers = $compteDeTiers;
		return $this;
	}

	/**
	 * Set the controle saisie t p.
	 *
	 * @param string $controleSaisieTP The controle saisie t p.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setControleSaisieTP($controleSaisieTP) {
		$this->controleSaisieTP = $controleSaisieTP;
		return $this;
	}

	/**
	 * Set the creation affaire.
	 *
	 * @param boolean $creationAffaire The creation affaire.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationAffaire($creationAffaire) {
		$this->creationAffaire = $creationAffaire;
		return $this;
	}

	/**
	 * Set the creation article.
	 *
	 * @param boolean $creationArticle The creation article.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationArticle($creationArticle) {
		$this->creationArticle = $creationArticle;
		return $this;
	}

	/**
	 * Set the creation bons travaux.
	 *
	 * @param boolean $creationBonsTravaux The creation bons travaux.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationBonsTravaux($creationBonsTravaux) {
		$this->creationBonsTravaux = $creationBonsTravaux;
		return $this;
	}

	/**
	 * Set the creation chantier.
	 *
	 * @param boolean $creationChantier The creation chantier.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationChantier($creationChantier) {
		$this->creationChantier = $creationChantier;
		return $this;
	}

	/**
	 * Set the creation client.
	 *
	 * @param boolean $creationClient The creation client.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationClient($creationClient) {
		$this->creationClient = $creationClient;
		return $this;
	}

	/**
	 * Set the creation commission.
	 *
	 * @param boolean $creationCommission The creation commission.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationCommission($creationCommission) {
		$this->creationCommission = $creationCommission;
		return $this;
	}

	/**
	 * Set the creation dossier cpta.
	 *
	 * @param boolean $creationDossierCpta The creation dossier cpta.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationDossierCpta($creationDossierCpta) {
		$this->creationDossierCpta = $creationDossierCpta;
		return $this;
	}

	/**
	 * Set the creation dossier fact.
	 *
	 * @param boolean $creationDossierFact The creation dossier fact.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationDossierFact($creationDossierFact) {
		$this->creationDossierFact = $creationDossierFact;
		return $this;
	}

	/**
	 * Set the creation dossier paie.
	 *
	 * @param boolean $creationDossierPaie The creation dossier paie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationDossierPaie($creationDossierPaie) {
		$this->creationDossierPaie = $creationDossierPaie;
		return $this;
	}

	/**
	 * Set the creation fournisseur.
	 *
	 * @param boolean $creationFournisseur The creation fournisseur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationFournisseur($creationFournisseur) {
		$this->creationFournisseur = $creationFournisseur;
		return $this;
	}

	/**
	 * Set the creation plan facturation.
	 *
	 * @param boolean $creationPlanFacturation The creation plan facturation.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationPlanFacturation($creationPlanFacturation) {
		$this->creationPlanFacturation = $creationPlanFacturation;
		return $this;
	}

	/**
	 * Set the creation plan tache.
	 *
	 * @param boolean $creationPlanTache The creation plan tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationPlanTache($creationPlanTache) {
		$this->creationPlanTache = $creationPlanTache;
		return $this;
	}

	/**
	 * Set the creation tache.
	 *
	 * @param boolean $creationTache The creation tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationTache($creationTache) {
		$this->creationTache = $creationTache;
		return $this;
	}

	/**
	 * Set the creation tarif.
	 *
	 * @param boolean $creationTarif The creation tarif.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setCreationTarif($creationTarif) {
		$this->creationTarif = $creationTarif;
		return $this;
	}

	/**
	 * Set the date entree.
	 *
	 * @param DateTime $dateEntree The date entree.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDateEntree(DateTime $dateEntree = null) {
		$this->dateEntree = $dateEntree;
		return $this;
	}

	/**
	 * Set the date sortie.
	 *
	 * @param DateTime $dateSortie The date sortie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDateSortie(DateTime $dateSortie = null) {
		$this->dateSortie = $dateSortie;
		return $this;
	}

	/**
	 * Set the date validation budget.
	 *
	 * @param DateTime $dateValidationBudget The date validation budget.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDateValidationBudget(DateTime $dateValidationBudget = null) {
		$this->dateValidationBudget = $dateValidationBudget;
		return $this;
	}

	/**
	 * Set the date validation nd f.
	 *
	 * @param DateTime $dateValidationNdF The date validation nd f.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDateValidationNdF(DateTime $dateValidationNdF = null) {
		$this->dateValidationNdF = $dateValidationNdF;
		return $this;
	}

	/**
	 * Set the date validation t p.
	 *
	 * @param DateTime $dateValidationTP The date validation t p.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDateValidationTP(DateTime $dateValidationTP = null) {
		$this->dateValidationTP = $dateValidationTP;
		return $this;
	}

	/**
	 * Set the desactiver filtre msg.
	 *
	 * @param boolean $desactiverFiltreMsg The desactiver filtre msg.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDesactiverFiltreMsg($desactiverFiltreMsg) {
		$this->desactiverFiltreMsg = $desactiverFiltreMsg;
		return $this;
	}

	/**
	 * Set the disponible.
	 *
	 * @param boolean $disponible The disponible.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDisponible($disponible) {
		$this->disponible = $disponible;
		return $this;
	}

	/**
	 * Set the dom banque.
	 *
	 * @param string $domBanque The dom banque.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDomBanque($domBanque) {
		$this->domBanque = $domBanque;
		return $this;
	}

	/**
	 * Set the dossier paie.
	 *
	 * @param string $dossierPaie The dossier paie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDossierPaie($dossierPaie) {
		$this->dossierPaie = $dossierPaie;
		return $this;
	}

	/**
	 * Set the droit param emails confidentiels.
	 *
	 * @param boolean $droitParamEmailsConfidentiels The droit param emails confidentiels.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDroitParamEmailsConfidentiels($droitParamEmailsConfidentiels) {
		$this->droitParamEmailsConfidentiels = $droitParamEmailsConfidentiels;
		return $this;
	}

	/**
	 * Set the droit sync port.
	 *
	 * @param boolean $droitSyncPort The droit sync port.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDroitSyncPort($droitSyncPort) {
		$this->droitSyncPort = $droitSyncPort;
		return $this;
	}

	/**
	 * Set the droit sync q prop.
	 *
	 * @param boolean $droitSyncQProp The droit sync q prop.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setDroitSyncQProp($droitSyncQProp) {
		$this->droitSyncQProp = $droitSyncQProp;
		return $this;
	}

	/**
	 * Set the e mail agenda dmd confirm.
	 *
	 * @param string $eMailAgendaDmdConfirm The e mail agenda dmd confirm.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailAgendaDmdConfirm($eMailAgendaDmdConfirm) {
		$this->eMailAgendaDmdConfirm = $eMailAgendaDmdConfirm;
		return $this;
	}

	/**
	 * Set the e mail auto cloture imap.
	 *
	 * @param boolean $eMailAutoClotureImap The e mail auto cloture imap.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailAutoClotureImap($eMailAutoClotureImap) {
		$this->eMailAutoClotureImap = $eMailAutoClotureImap;
		return $this;
	}

	/**
	 * Set the e mail mode signature.
	 *
	 * @param int $eMailModeSignature The e mail mode signature.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailModeSignature($eMailModeSignature) {
		$this->eMailModeSignature = $eMailModeSignature;
		return $this;
	}

	/**
	 * Set the e mail nb j ag mini.
	 *
	 * @param int $eMailNbJAgMini The e mail nb j ag mini.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailNbJAgMini($eMailNbJAgMini) {
		$this->eMailNbJAgMini = $eMailNbJAgMini;
		return $this;
	}

	/**
	 * Set the e mail objet defaut.
	 *
	 * @param string $eMailObjetDefaut The e mail objet defaut.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailObjetDefaut($eMailObjetDefaut) {
		$this->eMailObjetDefaut = $eMailObjetDefaut;
		return $this;
	}

	/**
	 * Set the e mail pied.
	 *
	 * @param string $eMailPied The e mail pied.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailPied($eMailPied) {
		$this->eMailPied = $eMailPied;
		return $this;
	}

	/**
	 * Set the e mail r r active.
	 *
	 * @param boolean $eMailRRActive The e mail r r active.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailRRActive($eMailRRActive) {
		$this->eMailRRActive = $eMailRRActive;
		return $this;
	}

	/**
	 * Set the e mail redir auto.
	 *
	 * @param boolean $eMailRedirAuto The e mail redir auto.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailRedirAuto($eMailRedirAuto) {
		$this->eMailRedirAuto = $eMailRedirAuto;
		return $this;
	}

	/**
	 * Set the e mail redir auto collab.
	 *
	 * @param string $eMailRedirAutoCollab The e mail redir auto collab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailRedirAutoCollab($eMailRedirAutoCollab) {
		$this->eMailRedirAutoCollab = $eMailRedirAutoCollab;
		return $this;
	}

	/**
	 * Set the e mail reponse auto.
	 *
	 * @param boolean $eMailReponseAuto The e mail reponse auto.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailReponseAuto($eMailReponseAuto) {
		$this->eMailReponseAuto = $eMailReponseAuto;
		return $this;
	}

	/**
	 * Set the e mail reponse auto text.
	 *
	 * @param string $eMailReponseAutoText The e mail reponse auto text.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailReponseAutoText($eMailReponseAutoText) {
		$this->eMailReponseAutoText = $eMailReponseAutoText;
		return $this;
	}

	/**
	 * Set the e mail start mode.
	 *
	 * @param int $eMailStartMode The e mail start mode.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailStartMode($eMailStartMode) {
		$this->eMailStartMode = $eMailStartMode;
		return $this;
	}

	/**
	 * Set the e mail sur serveur.
	 *
	 * @param boolean $eMailSurServeur The e mail sur serveur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailSurServeur($eMailSurServeur) {
		$this->eMailSurServeur = $eMailSurServeur;
		return $this;
	}

	/**
	 * Set the e mail tete.
	 *
	 * @param string $eMailTete The e mail tete.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEMailTete($eMailTete) {
		$this->eMailTete = $eMailTete;
		return $this;
	}

	/**
	 * Set the email.
	 *
	 * @param string $email The email.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	/**
	 * Set the email activer aide saisie.
	 *
	 * @param boolean $emailActiverAideSaisie The email activer aide saisie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEmailActiverAideSaisie($emailActiverAideSaisie) {
		$this->emailActiverAideSaisie = $emailActiverAideSaisie;
		return $this;
	}

	/**
	 * Set the email lst adr choix elem.
	 *
	 * @param int $emailLstAdrChoixElem The email lst adr choix elem.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEmailLstAdrChoixElem($emailLstAdrChoixElem) {
		$this->emailLstAdrChoixElem = $emailLstAdrChoixElem;
		return $this;
	}

	/**
	 * Set the email redirection.
	 *
	 * @param string $emailRedirection The email redirection.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEmailRedirection($emailRedirection) {
		$this->emailRedirection = $emailRedirection;
		return $this;
	}

	/**
	 * Set the est acheteur.
	 *
	 * @param int $estAcheteur The est acheteur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEstAcheteur($estAcheteur) {
		$this->estAcheteur = $estAcheteur;
		return $this;
	}

	/**
	 * Set the etab confidentialite q p.
	 *
	 * @param string $etabConfidentialiteQP The etab confidentialite q p.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setEtabConfidentialiteQP($etabConfidentialiteQP) {
		$this->etabConfidentialiteQP = $etabConfidentialiteQP;
		return $this;
	}

	/**
	 * Set the fictif.
	 *
	 * @param boolean $fictif The fictif.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setFictif($fictif) {
		$this->fictif = $fictif;
		return $this;
	}

	/**
	 * Set the fonction.
	 *
	 * @param string $fonction The fonction.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setFonction($fonction) {
		$this->fonction = $fonction;
		return $this;
	}

	/**
	 * Set the i b a n.
	 *
	 * @param string $iBAN The i b a n.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setIBAN($iBAN) {
		$this->iBAN = $iBAN;
		return $this;
	}

	/**
	 * Set the interdiction pwd.
	 *
	 * @param boolean $interdictionPwd The interdiction pwd.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdictionPwd($interdictionPwd) {
		$this->interdictionPwd = $interdictionPwd;
		return $this;
	}

	/**
	 * Set the interdiction vue facturation.
	 *
	 * @param boolean $interdictionVueFacturation The interdiction vue facturation.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdictionVueFacturation($interdictionVueFacturation) {
		$this->interdictionVueFacturation = $interdictionVueFacturation;
		return $this;
	}

	/**
	 * Set the interdire acces archives cpta.
	 *
	 * @param boolean $interdireAccesArchivesCpta The interdire acces archives cpta.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireAccesArchivesCpta($interdireAccesArchivesCpta) {
		$this->interdireAccesArchivesCpta = $interdireAccesArchivesCpta;
		return $this;
	}

	/**
	 * Set the interdire acces archives paie.
	 *
	 * @param boolean $interdireAccesArchivesPaie The interdire acces archives paie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireAccesArchivesPaie($interdireAccesArchivesPaie) {
		$this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
		return $this;
	}

	/**
	 * Set the interdire acces edition balance.
	 *
	 * @param boolean $interdireAccesEditionBalance The interdire acces edition balance.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireAccesEditionBalance($interdireAccesEditionBalance) {
		$this->interdireAccesEditionBalance = $interdireAccesEditionBalance;
		return $this;
	}

	/**
	 * Set the interdire acces entete.
	 *
	 * @param boolean $interdireAccesEntete The interdire acces entete.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireAccesEntete($interdireAccesEntete) {
		$this->interdireAccesEntete = $interdireAccesEntete;
		return $this;
	}

	/**
	 * Set the interdire acces supp doc arch.
	 *
	 * @param boolean $interdireAccesSuppDocArch The interdire acces supp doc arch.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireAccesSuppDocArch($interdireAccesSuppDocArch) {
		$this->interdireAccesSuppDocArch = $interdireAccesSuppDocArch;
		return $this;
	}

	/**
	 * Set the interdire edition valorise jrn temps.
	 *
	 * @param boolean $interdireEditionValoriseJrnTemps The interdire edition valorise jrn temps.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireEditionValoriseJrnTemps($interdireEditionValoriseJrnTemps) {
		$this->interdireEditionValoriseJrnTemps = $interdireEditionValoriseJrnTemps;
		return $this;
	}

	/**
	 * Set the interdire envoi postit.
	 *
	 * @param boolean $interdireEnvoiPostit The interdire envoi postit.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireEnvoiPostit($interdireEnvoiPostit) {
		$this->interdireEnvoiPostit = $interdireEnvoiPostit;
		return $this;
	}

	/**
	 * Set the interdire modif aff cli.
	 *
	 * @param boolean $interdireModifAffCli The interdire modif aff cli.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireModifAffCli($interdireModifAffCli) {
		$this->interdireModifAffCli = $interdireModifAffCli;
		return $this;
	}

	/**
	 * Set the interdire modif depot.
	 *
	 * @param boolean $interdireModifDepot The interdire modif depot.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdireModifDepot($interdireModifDepot) {
		$this->interdireModifDepot = $interdireModifDepot;
		return $this;
	}

	/**
	 * Set the interdire publi doc web.
	 *
	 * @param boolean $interdirePubliDocWeb The interdire publi doc web.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterdirePubliDocWeb($interdirePubliDocWeb) {
		$this->interdirePubliDocWeb = $interdirePubliDocWeb;
		return $this;
	}

	/**
	 * Set the interim.
	 *
	 * @param boolean $interim The interim.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setInterim($interim) {
		$this->interim = $interim;
		return $this;
	}

	/**
	 * Set the is groupe.
	 *
	 * @param boolean $isGroupe The is groupe.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setIsGroupe($isGroupe) {
		$this->isGroupe = $isGroupe;
		return $this;
	}

	/**
	 * Set the is profil messages.
	 *
	 * @param boolean $isProfilMessages The is profil messages.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setIsProfilMessages($isProfilMessages) {
		$this->isProfilMessages = $isProfilMessages;
		return $this;
	}

	/**
	 * Set the limiter visu agenda.
	 *
	 * @param boolean $limiterVisuAgenda The limiter visu agenda.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setLimiterVisuAgenda($limiterVisuAgenda) {
		$this->limiterVisuAgenda = $limiterVisuAgenda;
		return $this;
	}

	/**
	 * Set the masquer fournisseurs.
	 *
	 * @param boolean $masquerFournisseurs The masquer fournisseurs.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setMasquerFournisseurs($masquerFournisseurs) {
		$this->masquerFournisseurs = $masquerFournisseurs;
		return $this;
	}

	/**
	 * Set the messages confidentiels.
	 *
	 * @param string $messagesConfidentiels The messages confidentiels.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setMessagesConfidentiels($messagesConfidentiels) {
		$this->messagesConfidentiels = $messagesConfidentiels;
		return $this;
	}

	/**
	 * Set the modif affaire.
	 *
	 * @param string $modifAffaire The modif affaire.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifAffaire($modifAffaire) {
		$this->modifAffaire = $modifAffaire;
		return $this;
	}

	/**
	 * Set the modif article.
	 *
	 * @param string $modifArticle The modif article.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifArticle($modifArticle) {
		$this->modifArticle = $modifArticle;
		return $this;
	}

	/**
	 * Set the modif bons travaux.
	 *
	 * @param string $modifBonsTravaux The modif bons travaux.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifBonsTravaux($modifBonsTravaux) {
		$this->modifBonsTravaux = $modifBonsTravaux;
		return $this;
	}

	/**
	 * Set the modif chantier.
	 *
	 * @param string $modifChantier The modif chantier.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifChantier($modifChantier) {
		$this->modifChantier = $modifChantier;
		return $this;
	}

	/**
	 * Set the modif client.
	 *
	 * @param string $modifClient The modif client.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifClient($modifClient) {
		$this->modifClient = $modifClient;
		return $this;
	}

	/**
	 * Set the modif commission.
	 *
	 * @param string $modifCommission The modif commission.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifCommission($modifCommission) {
		$this->modifCommission = $modifCommission;
		return $this;
	}

	/**
	 * Set the modif dossier fact.
	 *
	 * @param string $modifDossierFact The modif dossier fact.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifDossierFact($modifDossierFact) {
		$this->modifDossierFact = $modifDossierFact;
		return $this;
	}

	/**
	 * Set the modif droits a s p.
	 *
	 * @param boolean $modifDroitsASP The modif droits a s p.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifDroitsASP($modifDroitsASP) {
		$this->modifDroitsASP = $modifDroitsASP;
		return $this;
	}

	/**
	 * Set the modif en vue.
	 *
	 * @param boolean $modifEnVue The modif en vue.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifEnVue($modifEnVue) {
		$this->modifEnVue = $modifEnVue;
		return $this;
	}

	/**
	 * Set the modif fournisseur.
	 *
	 * @param string $modifFournisseur The modif fournisseur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifFournisseur($modifFournisseur) {
		$this->modifFournisseur = $modifFournisseur;
		return $this;
	}

	/**
	 * Set the modif plan facturation.
	 *
	 * @param string $modifPlanFacturation The modif plan facturation.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifPlanFacturation($modifPlanFacturation) {
		$this->modifPlanFacturation = $modifPlanFacturation;
		return $this;
	}

	/**
	 * Set the modif plan tache.
	 *
	 * @param string $modifPlanTache The modif plan tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifPlanTache($modifPlanTache) {
		$this->modifPlanTache = $modifPlanTache;
		return $this;
	}

	/**
	 * Set the modif tache.
	 *
	 * @param string $modifTache The modif tache.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifTache($modifTache) {
		$this->modifTache = $modifTache;
		return $this;
	}

	/**
	 * Set the modif tarif.
	 *
	 * @param string $modifTarif The modif tarif.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setModifTarif($modifTarif) {
		$this->modifTarif = $modifTarif;
		return $this;
	}

	/**
	 * Set the mot de passe.
	 *
	 * @param string $motDePasse The mot de passe.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setMotDePasse($motDePasse) {
		$this->motDePasse = $motDePasse;
		return $this;
	}

	/**
	 * Set the msg redir auto.
	 *
	 * @param boolean $msgRedirAuto The msg redir auto.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setMsgRedirAuto($msgRedirAuto) {
		$this->msgRedirAuto = $msgRedirAuto;
		return $this;
	}

	/**
	 * Set the niv conf emp proprete restreint.
	 *
	 * @param boolean $nivConfEmpPropreteRestreint The niv conf emp proprete restreint.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNivConfEmpPropreteRestreint($nivConfEmpPropreteRestreint) {
		$this->nivConfEmpPropreteRestreint = $nivConfEmpPropreteRestreint;
		return $this;
	}

	/**
	 * Set the niveau.
	 *
	 * @param int $niveau The niveau.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNiveau($niveau) {
		$this->niveau = $niveau;
		return $this;
	}

	/**
	 * Set the niveau confidentialite q p.
	 *
	 * @param string $niveauConfidentialiteQP The niveau confidentialite q p.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNiveauConfidentialiteQP($niveauConfidentialiteQP) {
		$this->niveauConfidentialiteQP = $niveauConfidentialiteQP;
		return $this;
	}

	/**
	 * Set the nom.
	 *
	 * @param string $nom The nom.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * Set the nom ville.
	 *
	 * @param string $nomVille The nom ville.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNomVille($nomVille) {
		$this->nomVille = $nomVille;
		return $this;
	}

	/**
	 * Set the nom voie.
	 *
	 * @param string $nomVoie The nom voie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNomVoie($nomVoie) {
		$this->nomVoie = $nomVoie;
		return $this;
	}

	/**
	 * Set the num voie.
	 *
	 * @param string $numVoie The num voie.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNumVoie($numVoie) {
		$this->numVoie = $numVoie;
		return $this;
	}

	/**
	 * Set the numero.
	 *
	 * @param string $numero The numero.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}

	/**
	 * Set the p a invisible.
	 *
	 * @param boolean $pAInvisible The p a invisible.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPAInvisible($pAInvisible) {
		$this->pAInvisible = $pAInvisible;
		return $this;
	}

	/**
	 * Set the p a r c code remorque.
	 *
	 * @param string $pARCCodeRemorque The p a r c code remorque.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPARCCodeRemorque($pARCCodeRemorque) {
		$this->pARCCodeRemorque = $pARCCodeRemorque;
		return $this;
	}

	/**
	 * Set the p a r c code vehicule.
	 *
	 * @param string $pARCCodeVehicule The p a r c code vehicule.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPARCCodeVehicule($pARCCodeVehicule) {
		$this->pARCCodeVehicule = $pARCCodeVehicule;
		return $this;
	}

	/**
	 * Set the pas acces q w s.
	 *
	 * @param boolean $pasAccesQWS The pas acces q w s.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPasAccesQWS($pasAccesQWS) {
		$this->pasAccesQWS = $pasAccesQWS;
		return $this;
	}

	/**
	 * Set the pas saisie des temps.
	 *
	 * @param boolean $pasSaisieDesTemps The pas saisie des temps.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPasSaisieDesTemps($pasSaisieDesTemps) {
		$this->pasSaisieDesTemps = $pasSaisieDesTemps;
		return $this;
	}

	/**
	 * Set the pas saisie des temps auto.
	 *
	 * @param boolean $pasSaisieDesTempsAuto The pas saisie des temps auto.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPasSaisieDesTempsAuto($pasSaisieDesTempsAuto) {
		$this->pasSaisieDesTempsAuto = $pasSaisieDesTempsAuto;
		return $this;
	}

	/**
	 * Set the portable perso.
	 *
	 * @param string $portablePerso The portable perso.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPortablePerso($portablePerso) {
		$this->portablePerso = $portablePerso;
		return $this;
	}

	/**
	 * Set the present.
	 *
	 * @param boolean $present The present.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPresent($present) {
		$this->present = $present;
		return $this;
	}

	/**
	 * Set the prevenu nouveau c d.
	 *
	 * @param boolean $prevenuNouveauCD The prevenu nouveau c d.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPrevenuNouveauCD($prevenuNouveauCD) {
		$this->prevenuNouveauCD = $prevenuNouveauCD;
		return $this;
	}

	/**
	 * Set the prix km.
	 *
	 * @param float $prixKm The prix km.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPrixKm($prixKm) {
		$this->prixKm = $prixKm;
		return $this;
	}

	/**
	 * Set the prix vente.
	 *
	 * @param float $prixVente The prix vente.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPrixVente($prixVente) {
		$this->prixVente = $prixVente;
		return $this;
	}

	/**
	 * Set the prix vente2.
	 *
	 * @param float $prixVente2 The prix vente2.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPrixVente2($prixVente2) {
		$this->prixVente2 = $prixVente2;
		return $this;
	}

	/**
	 * Set the prix vente3.
	 *
	 * @param float $prixVente3 The prix vente3.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setPrixVente3($prixVente3) {
		$this->prixVente3 = $prixVente3;
		return $this;
	}

	/**
	 * Set the r i b.
	 *
	 * @param string $rIB The r i b.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setRIB($rIB) {
		$this->rIB = $rIB;
		return $this;
	}

	/**
	 * Set the restrict acces pieces.
	 *
	 * @param boolean $restrictAccesPieces The restrict acces pieces.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setRestrictAccesPieces($restrictAccesPieces) {
		$this->restrictAccesPieces = $restrictAccesPieces;
		return $this;
	}

	/**
	 * Set the restrict acces stats.
	 *
	 * @param boolean $restrictAccesStats The restrict acces stats.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setRestrictAccesStats($restrictAccesStats) {
		$this->restrictAccesStats = $restrictAccesStats;
		return $this;
	}

	/**
	 * Set the saisie p v interdite.
	 *
	 * @param boolean $saisiePVInterdite The saisie p v interdite.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSaisiePVInterdite($saisiePVInterdite) {
		$this->saisiePVInterdite = $saisiePVInterdite;
		return $this;
	}

	/**
	 * Set the salaire mensuel.
	 *
	 * @param float $salaireMensuel The salaire mensuel.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSalaireMensuel($salaireMensuel) {
		$this->salaireMensuel = $salaireMensuel;
		return $this;
	}

	/**
	 * Set the sel art collab.
	 *
	 * @param boolean $selArtCollab The sel art collab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelArtCollab($selArtCollab) {
		$this->selArtCollab = $selArtCollab;
		return $this;
	}

	/**
	 * Set the sel av lst perso acces gestion modifiables.
	 *
	 * @param boolean $selAvLstPersoAccesGestionModifiables The sel av lst perso acces gestion modifiables.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelAvLstPersoAccesGestionModifiables($selAvLstPersoAccesGestionModifiables) {
		$this->selAvLstPersoAccesGestionModifiables = $selAvLstPersoAccesGestionModifiables;
		return $this;
	}

	/**
	 * Set the sel av lst perso acces gestionnaire.
	 *
	 * @param boolean $selAvLstPersoAccesGestionnaire The sel av lst perso acces gestionnaire.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelAvLstPersoAccesGestionnaire($selAvLstPersoAccesGestionnaire) {
		$this->selAvLstPersoAccesGestionnaire = $selAvLstPersoAccesGestionnaire;
		return $this;
	}

	/**
	 * Set the sel av lst perso champs modif.
	 *
	 * @param boolean $selAvLstPersoChampsModif The sel av lst perso champs modif.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelAvLstPersoChampsModif($selAvLstPersoChampsModif) {
		$this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
		return $this;
	}

	/**
	 * Set the sel av lst perso copie colonne.
	 *
	 * @param boolean $selAvLstPersoCopieColonne The sel av lst perso copie colonne.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelAvLstPersoCopieColonne($selAvLstPersoCopieColonne) {
		$this->selAvLstPersoCopieColonne = $selAvLstPersoCopieColonne;
		return $this;
	}

	/**
	 * Set the sel av lst perso interdire creat.
	 *
	 * @param boolean $selAvLstPersoInterdireCreat The sel av lst perso interdire creat.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelAvLstPersoInterdireCreat($selAvLstPersoInterdireCreat) {
		$this->selAvLstPersoInterdireCreat = $selAvLstPersoInterdireCreat;
		return $this;
	}

	/**
	 * Set the sel cli collab.
	 *
	 * @param boolean $selCliCollab The sel cli collab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelCliCollab($selCliCollab) {
		$this->selCliCollab = $selCliCollab;
		return $this;
	}

	/**
	 * Set the sel frn collab.
	 *
	 * @param boolean $selFrnCollab The sel frn collab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelFrnCollab($selFrnCollab) {
		$this->selFrnCollab = $selFrnCollab;
		return $this;
	}

	/**
	 * Set the selection article.
	 *
	 * @param string $selectionArticle The selection article.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelectionArticle($selectionArticle) {
		$this->selectionArticle = $selectionArticle;
		return $this;
	}

	/**
	 * Set the selection client.
	 *
	 * @param string $selectionClient The selection client.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelectionClient($selectionClient) {
		$this->selectionClient = $selectionClient;
		return $this;
	}

	/**
	 * Set the selection fournisseur.
	 *
	 * @param string $selectionFournisseur The selection fournisseur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSelectionFournisseur($selectionFournisseur) {
		$this->selectionFournisseur = $selectionFournisseur;
		return $this;
	}

	/**
	 * Set the suivi messages.
	 *
	 * @param boolean $suiviMessages The suivi messages.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSuiviMessages($suiviMessages) {
		$this->suiviMessages = $suiviMessages;
		return $this;
	}

	/**
	 * Set the superviseur.
	 *
	 * @param boolean $superviseur The superviseur.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSuperviseur($superviseur) {
		$this->superviseur = $superviseur;
		return $this;
	}

	/**
	 * Set the sync m s o.
	 *
	 * @param boolean $syncMSO The sync m s o.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setSyncMSO($syncMSO) {
		$this->syncMSO = $syncMSO;
		return $this;
	}

	/**
	 * Set the t p pas controler.
	 *
	 * @param boolean $tPPasControler The t p pas controler.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTPPasControler($tPPasControler) {
		$this->tPPasControler = $tPPasControler;
		return $this;
	}

	/**
	 * Set the t p pas journal temps.
	 *
	 * @param boolean $tPPasJournalTemps The t p pas journal temps.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTPPasJournalTemps($tPPasJournalTemps) {
		$this->tPPasJournalTemps = $tPPasJournalTemps;
		return $this;
	}

	/**
	 * Set the t p pas notes de frais.
	 *
	 * @param boolean $tPPasNotesDeFrais The t p pas notes de frais.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTPPasNotesDeFrais($tPPasNotesDeFrais) {
		$this->tPPasNotesDeFrais = $tPPasNotesDeFrais;
		return $this;
	}

	/**
	 * Set the t p pas tps valide.
	 *
	 * @param boolean $tPPasTpsValide The t p pas tps valide.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTPPasTpsValide($tPPasTpsValide) {
		$this->tPPasTpsValide = $tPPasTpsValide;
		return $this;
	}

	/**
	 * Set the t p pourcentage non operationnel.
	 *
	 * @param float $tPPourcentageNonOperationnel The t p pourcentage non operationnel.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTPPourcentageNonOperationnel($tPPourcentageNonOperationnel) {
		$this->tPPourcentageNonOperationnel = $tPPourcentageNonOperationnel;
		return $this;
	}

	/**
	 * Set the taches groupe.
	 *
	 * @param string $tachesGroupe The taches groupe.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTachesGroupe($tachesGroupe) {
		$this->tachesGroupe = $tachesGroupe;
		return $this;
	}

	/**
	 * Set the taux commission.
	 *
	 * @param float $tauxCommission The taux commission.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTauxCommission($tauxCommission) {
		$this->tauxCommission = $tauxCommission;
		return $this;
	}

	/**
	 * Set the tel direct.
	 *
	 * @param string $telDirect The tel direct.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTelDirect($telDirect) {
		$this->telDirect = $telDirect;
		return $this;
	}

	/**
	 * Set the tel perso.
	 *
	 * @param string $telPerso The tel perso.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTelPerso($telPerso) {
		$this->telPerso = $telPerso;
		return $this;
	}

	/**
	 * Set the tel portable1.
	 *
	 * @param string $telPortable1 The tel portable1.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTelPortable1($telPortable1) {
		$this->telPortable1 = $telPortable1;
		return $this;
	}

	/**
	 * Set the tel portable2.
	 *
	 * @param string $telPortable2 The tel portable2.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTelPortable2($telPortable2) {
		$this->telPortable2 = $telPortable2;
		return $this;
	}

	/**
	 * Set the tel poste.
	 *
	 * @param string $telPoste The tel poste.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTelPoste($telPoste) {
		$this->telPoste = $telPoste;
		return $this;
	}

	/**
	 * Set the tps niveau blocage.
	 *
	 * @param string $tpsNiveauBlocage The tps niveau blocage.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTpsNiveauBlocage($tpsNiveauBlocage) {
		$this->tpsNiveauBlocage = $tpsNiveauBlocage;
		return $this;
	}

	/**
	 * Set the tx com invisible.
	 *
	 * @param boolean $txComInvisible The tx com invisible.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTxComInvisible($txComInvisible) {
		$this->txComInvisible = $txComInvisible;
		return $this;
	}

	/**
	 * Set the type conf2 c m a v cli.
	 *
	 * @param string $typeConf2CMAVCli The type conf2 c m a v cli.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTypeConf2CMAVCli($typeConf2CMAVCli) {
		$this->typeConf2CMAVCli = $typeConf2CMAVCli;
		return $this;
	}

	/**
	 * Set the type conf c m a v cli.
	 *
	 * @param string $typeConfCMAVCli The type conf c m a v cli.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTypeConfCMAVCli($typeConfCMAVCli) {
		$this->typeConfCMAVCli = $typeConfCMAVCli;
		return $this;
	}

	/**
	 * Set the type visu appels.
	 *
	 * @param string $typeVisuAppels The type visu appels.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTypeVisuAppels($typeVisuAppels) {
		$this->typeVisuAppels = $typeVisuAppels;
		return $this;
	}

	/**
	 * Set the type visu taches.
	 *
	 * @param string $typeVisuTaches The type visu taches.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setTypeVisuTaches($typeVisuTaches) {
		$this->typeVisuTaches = $typeVisuTaches;
		return $this;
	}

	/**
	 * Set the use mail generic.
	 *
	 * @param boolean $useMailGeneric The use mail generic.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setUseMailGeneric($useMailGeneric) {
		$this->useMailGeneric = $useMailGeneric;
		return $this;
	}

	/**
	 * Set the visualisation fiche cabinet.
	 *
	 * @param boolean $visualisationFicheCabinet The visualisation fiche cabinet.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setVisualisationFicheCabinet($visualisationFicheCabinet) {
		$this->visualisationFicheCabinet = $visualisationFicheCabinet;
		return $this;
	}

	/**
	 * Set the vue com droit reaffect.
	 *
	 * @param boolean $vueComDroitReaffect The vue com droit reaffect.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setVueComDroitReaffect($vueComDroitReaffect) {
		$this->vueComDroitReaffect = $vueComDroitReaffect;
		return $this;
	}

	/**
	 * Set the vue devis droit reaffect.
	 *
	 * @param boolean $vueDevisDroitReaffect The vue devis droit reaffect.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setVueDevisDroitReaffect($vueDevisDroitReaffect) {
		$this->vueDevisDroitReaffect = $vueDevisDroitReaffect;
		return $this;
	}

	/**
	 * Set the vue devis droit suppr.
	 *
	 * @param boolean $vueDevisDroitSuppr The vue devis droit suppr.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setVueDevisDroitSuppr($vueDevisDroitSuppr) {
		$this->vueDevisDroitSuppr = $vueDevisDroitSuppr;
		return $this;
	}

	/**
	 * Set the vue devis droit valid.
	 *
	 * @param boolean $vueDevisDroitValid The vue devis droit valid.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setVueDevisDroitValid($vueDevisDroitValid) {
		$this->vueDevisDroitValid = $vueDevisDroitValid;
		return $this;
	}

	/**
	 * Set the ya droits collab.
	 *
	 * @param boolean $yaDroitsCollab The ya droits collab.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function setYaDroitsCollab($yaDroitsCollab) {
		$this->yaDroitsCollab = $yaDroitsCollab;
		return $this;
	}

	/**
	 * Set the e w s mdp.
	 *
	 * @param string $eWSMdp The e w s mdp.
	 * @return Collaborateurs Returns this collaborateurs.
	 */
	public function seteWSMdp($eWSMdp) {
		$this->eWSMdp = $eWSMdp;
		return $this;
	}

}
