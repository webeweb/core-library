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
 * Clients model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Clients {

    /**
     * Actif.
     *
     * @var boolean
     */
    private $actif;

    /**
     * Activite nouvelle.
     *
     * @var boolean
     */
    private $activiteNouvelle;

    /**
     * Activite saiso.
     *
     * @var boolean
     */
    private $activiteSaiso;

    /**
     * Adresse site client.
     *
     * @var string
     */
    private $adresseSiteClient;

    /**
     * Article port1.
     *
     * @var string
     */
    private $articlePort1;

    /**
     * Article port2.
     *
     * @var string
     */
    private $articlePort2;

    /**
     * Assurance.
     *
     * @var boolean
     */
    private $assurance;

    /**
     * B l chiffre.
     *
     * @var boolean
     */
    private $bLChiffre;

    /**
     * Bibliotheque novaxel.
     *
     * @var string
     */
    private $bibliothequeNovaxel;

    /**
     * Bloque.
     *
     * @var boolean
     */
    private $bloque;

    /**
     * Cde auto manu.
     *
     * @var string
     */
    private $cdeAutoManu;

    /**
     * Cga.
     *
     * @var boolean
     */
    private $cga;

    /**
     * Charges.
     *
     * @var string
     */
    private $charges;

    /**
     * Chiffre affaire.
     *
     * @var float
     */
    private $chiffreAffaire;

    /**
     * Cle alpha.
     *
     * @var string
     */
    private $cleAlpha;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

    /**
     * Code agence.
     *
     * @var string
     */
    private $codeAgence;

    /**
     * Code article cotisation.
     *
     * @var string
     */
    private $codeArticleCotisation;

    /**
     * Code article droit fixe.
     *
     * @var string
     */
    private $codeArticleDroitFixe;

    /**
     * Code article frais fixe.
     *
     * @var string
     */
    private $codeArticleFraisFixe;

    /**
     * Code assistant juridique.
     *
     * @var string
     */
    private $codeAssistantJuridique;

    /**
     * Code assistant social.
     *
     * @var string
     */
    private $codeAssistantSocial;

    /**
     * Code autre1.
     *
     * @var string
     */
    private $codeAutre1;

    /**
     * Code autre2.
     *
     * @var string
     */
    private $codeAutre2;

    /**
     * Code avocat.
     *
     * @var string
     */
    private $codeAvocat;

    /**
     * Code barre.
     *
     * @var boolean
     */
    private $codeBarre;

    /**
     * Code categorie client.
     *
     * @var string
     */
    private $codeCategorieClient;

    /**
     * Code client fact.
     *
     * @var string
     */
    private $codeClientFact;

    /**
     * Code client livr.
     *
     * @var string
     */
    private $codeClientLivr;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code edition fact.
     *
     * @var string
     */
    private $codeEditionFact;

    /**
     * Code exc.
     *
     * @var string
     */
    private $codeExc;

    /**
     * Code expert.
     *
     * @var string
     */
    private $codeExpert;

    /**
     * Code factor.
     *
     * @var string
     */
    private $codeFactor;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code geo.
     *
     * @var string
     */
    private $codeGeo;

    /**
     * Code imputation analytique.
     *
     * @var string
     */
    private $codeImputationAnalytique;

    /**
     * Code langue designation article.
     *
     * @var string
     */
    private $codeLangueDesignationArticle;

    /**
     * Code mission frais fixe.
     *
     * @var string
     */
    private $codeMissionFraisFixe;

    /**
     * Code origine.
     *
     * @var string
     */
    private $codeOrigine;

    /**
     * Code pays corres.
     *
     * @var string
     */
    private $codePaysCorres;

    /**
     * Code pays fact.
     *
     * @var string
     */
    private $codePaysFact;

    /**
     * Code portefeuille.
     *
     * @var string
     */
    private $codePortefeuille;

    /**
     * Code recette impots.
     *
     * @var string
     */
    private $codeRecetteImpots;

    /**
     * Code reglement.
     *
     * @var string
     */
    private $codeReglement;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code representant.
     *
     * @var string
     */
    private $codeRepresentant;

    /**
     * Code revision.
     *
     * @var string
     */
    private $codeRevision;

    /**
     * Code sous famille.
     *
     * @var string
     */
    private $codeSousFamille;

    /**
     * Code sous tournee.
     *
     * @var string
     */
    private $codeSousTournee;

    /**
     * Code t v a.
     *
     * @var string
     */
    private $codeTVA;

    /**
     * Code tarif.
     *
     * @var string
     */
    private $codeTarif;

    /**
     * Code tournee.
     *
     * @var string
     */
    private $codeTournee;

    /**
     * Code transporteur.
     *
     * @var string
     */
    private $codeTransporteur;

    /**
     * Code ventil compta.
     *
     * @var string
     */
    private $codeVentilCompta;

    /**
     * Coef sur p v.
     *
     * @var float
     */
    private $coefSurPV;

    /**
     * Coeff p v client.
     *
     * @var float
     */
    private $coeffPVClient;

    /**
     * Collectif.
     *
     * @var string
     */
    private $collectif;

    /**
     * Conjoint.
     *
     * @var string
     */
    private $conjoint;

    /**
     * Contact recette impots.
     *
     * @var string
     */
    private $contactRecetteImpots;

    /**
     * D s code collab.
     *
     * @var string
     */
    private $dSCodeCollab;

    /**
     * D s date retour.
     *
     * @var DateTime
     */
    private $dSDateRetour;

    /**
     * D s date sortie.
     *
     * @var DateTime
     */
    private $dSDateSortie;

    /**
     * Date attrib encours.
     *
     * @var DateTime
     */
    private $dateAttribEncours;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date deb activite.
     *
     * @var DateTime
     */
    private $dateDebActivite;

    /**
     * Date deb prof.
     *
     * @var DateTime
     */
    private $dateDebProf;

    /**
     * Date derniere vente.
     *
     * @var DateTime
     */
    private $dateDerniereVente;

    /**
     * Date entree.
     *
     * @var DateTime
     */
    private $dateEntree;

    /**
     * Date fin activite.
     *
     * @var DateTime
     */
    private $dateFinActivite;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Date reprise.
     *
     * @var DateTime
     */
    private $dateReprise;

    /**
     * Date sortie.
     *
     * @var DateTime
     */
    private $dateSortie;

    /**
     * Delai tarif.
     *
     * @var int
     */
    private $delaiTarif;

    /**
     * Domiciliation bancaire1.
     *
     * @var string
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string
     */
    private $domiciliationBancaire2;

    /**
     * Dossier comptable.
     *
     * @var string
     */
    private $dossierComptable;

    /**
     * Dossier paie.
     *
     * @var string
     */
    private $dossierPaie;

    /**
     * Du client.
     *
     * @var string
     */
    private $duClient;

    /**
     * Duree echeances.
     *
     * @var string
     */
    private $dureeEcheances;

    /**
     * Effectif e t p.
     *
     * @var int
     */
    private $effectifETP;

    /**
     * Election c e.
     *
     * @var DateTime
     */
    private $electionCE;

    /**
     * Election delegue personnel.
     *
     * @var DateTime
     */
    private $electionDeleguePersonnel;

    /**
     * Equip info.
     *
     * @var string
     */
    private $equipInfo;

    /**
     * Etat1.
     *
     * @var string
     */
    private $etat1;

    /**
     * Etat2.
     *
     * @var string
     */
    private $etat2;

    /**
     * Etat3.
     *
     * @var string
     */
    private $etat3;

    /**
     * Etat4.
     *
     * @var string
     */
    private $etat4;

    /**
     * Etat5.
     *
     * @var string
     */
    private $etat5;

    /**
     * Etiquettes.
     *
     * @var boolean
     */
    private $etiquettes;

    /**
     * Fact_ b t q.
     *
     * @var string
     */
    private $fact_BTQ;

    /**
     * Fact_ bureau distributeur.
     *
     * @var string
     */
    private $fact_BureauDistributeur;

    /**
     * Fact_ code officiel commune.
     *
     * @var string
     */
    private $fact_CodeOfficielCommune;

    /**
     * Fact_ code postal.
     *
     * @var string
     */
    private $fact_CodePostal;

    /**
     * Fact_ complement.
     *
     * @var string
     */
    private $fact_Complement;

    /**
     * Fact_ nom r s.
     *
     * @var string
     */
    private $fact_NomRS;

    /**
     * Fact_ nom ville.
     *
     * @var string
     */
    private $fact_NomVille;

    /**
     * Fact_ nom voie.
     *
     * @var string
     */
    private $fact_NomVoie;

    /**
     * Fact_ num voie.
     *
     * @var string
     */
    private $fact_NumVoie;

    /**
     * Facturation compta.
     *
     * @var DateTime
     */
    private $facturationCompta;

    /**
     * Facturation compta prec.
     *
     * @var DateTime
     */
    private $facturationComptaPrec;

    /**
     * Facturation cotisation.
     *
     * @var boolean
     */
    private $facturationCotisation;

    /**
     * Facturation droit fixe.
     *
     * @var boolean
     */
    private $facturationDroitFixe;

    /**
     * Facturation frais fixe.
     *
     * @var boolean
     */
    private $facturationFraisFixe;

    /**
     * Facturation paie.
     *
     * @var DateTime
     */
    private $facturationPaie;

    /**
     * Facturation paie prec.
     *
     * @var DateTime
     */
    private $facturationPaiePrec;

    /**
     * Facture euros.
     *
     * @var boolean
     */
    private $factureEuros;

    /**
     * Facture isolee.
     *
     * @var boolean
     */
    private $factureIsolee;

    /**
     * Facture temps passes.
     *
     * @var boolean
     */
    private $factureTempsPasses;

    /**
     * Factures mail.
     *
     * @var boolean
     */
    private $facturesMail;

    /**
     * Fortement impose.
     *
     * @var string
     */
    private $fortementImpose;

    /**
     * Frais fixes1.
     *
     * @var boolean
     */
    private $fraisFixes1;

    /**
     * Frais fixes2.
     *
     * @var boolean
     */
    private $fraisFixes2;

    /**
     * Franco port1.
     *
     * @var float
     */
    private $francoPort1;

    /**
     * Franco port2.
     *
     * @var float
     */
    private $francoPort2;

    /**
     * Heure appel.
     *
     * @var string
     */
    private $heureAppel;

    /**
     * Identifiant t v a.
     *
     * @var string
     */
    private $identifiantTVA;

    /**
     * Indice factures mail.
     *
     * @var int
     */
    private $indiceFacturesMail;

    /**
     * Insp.
     *
     * @var string
     */
    private $insp;

    /**
     * Interesse gestion.
     *
     * @var string
     */
    private $interesseGestion;

    /**
     * Mensualisation actif.
     *
     * @var boolean
     */
    private $mensualisationActif;

    /**
     * Mensualisation au.
     *
     * @var DateTime
     */
    private $mensualisationAu;

    /**
     * Mensualisation du.
     *
     * @var DateTime
     */
    private $mensualisationDu;

    /**
     * Mensualisation frequence.
     *
     * @var string
     */
    private $mensualisationFrequence;

    /**
     * Mensualisation montant.
     *
     * @var float
     */
    private $mensualisationMontant;

    /**
     * Mission sur dossier.
     *
     * @var int
     */
    private $missionSurDossier;

    /**
     * Modele b l.
     *
     * @var string
     */
    private $modeleBL;

    /**
     * Modele commande.
     *
     * @var string
     */
    private $modeleCommande;

    /**
     * Modele facture.
     *
     * @var string
     */
    private $modeleFacture;

    /**
     * Modele proformas.
     *
     * @var string
     */
    private $modeleProformas;

    /**
     * Modele releve.
     *
     * @var string
     */
    private $modeleReleve;

    /**
     * Mois cloture.
     *
     * @var string
     */
    private $moisCloture;

    /**
     * Mois cotisation.
     *
     * @var int
     */
    private $moisCotisation;

    /**
     * Mois droit fixe.
     *
     * @var int
     */
    private $moisDroitFixe;

    /**
     * Mt cmd non fact.
     *
     * @var float
     */
    private $mtCmdNonFact;

    /**
     * Mt encours.
     *
     * @var float
     */
    private $mtEncours;

    /**
     * Mt encours autorise.
     *
     * @var float
     */
    private $mtEncoursAutorise;

    /**
     * Nb appels en cours.
     *
     * @var int
     */
    private $nbAppelsEnCours;

    /**
     * Nb b l.
     *
     * @var string
     */
    private $nbBL;

    /**
     * Nb b l non chiffres.
     *
     * @var int
     */
    private $nbBLNonChiffres;

    /**
     * Nb commande.
     *
     * @var string
     */
    private $nbCommande;

    /**
     * Nb devis.
     *
     * @var string
     */
    private $nbDevis;

    /**
     * Nb facture.
     *
     * @var string
     */
    private $nbFacture;

    /**
     * Nb jour interval.
     *
     * @var int
     */
    private $nbJourInterval;

    /**
     * Nb max b l.
     *
     * @var string
     */
    private $nbMaxBL;

    /**
     * Nb releve.
     *
     * @var string
     */
    private $nbReleve;

    /**
     * Nombre echeances.
     *
     * @var string
     */
    private $nombreEcheances;

    /**
     * Nombre mois exercice.
     *
     * @var string
     */
    private $nombreMoisExercice;

    /**
     * Notoriete.
     *
     * @var string
     */
    private $notoriete;

    /**
     * Num web adherent.
     *
     * @var string
     */
    private $numWebAdherent;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Observation1.
     *
     * @var string
     */
    private $observation1;

    /**
     * Observation2.
     *
     * @var string
     */
    private $observation2;

    /**
     * Observation3.
     *
     * @var string
     */
    private $observation3;

    /**
     * Occasionnel.
     *
     * @var boolean
     */
    private $occasionnel;

    /**
     * Organisation adm.
     *
     * @var string
     */
    private $organisationAdm;

    /**
     * Paiement depart le.
     *
     * @var int
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var string
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int
     */
    private $paiementNombreDeJours;

    /**
     * Pas productif.
     *
     * @var boolean
     */
    private $pasProductif;

    /**
     * Pas taches operationnelles.
     *
     * @var boolean
     */
    private $pasTachesOperationnelles;

    /**
     * Patrimoine.
     *
     * @var string
     */
    private $patrimoine;

    /**
     * Prelevements perso.
     *
     * @var string
     */
    private $prelevementsPerso;

    /**
     * Prescripteur.
     *
     * @var string
     */
    private $prescripteur;

    /**
     * Previsionnel.
     *
     * @var string
     */
    private $previsionnel;

    /**
     * Prioritaire.
     *
     * @var boolean
     */
    private $prioritaire;

    /**
     * Profil dir anxieux.
     *
     * @var boolean
     */
    private $profilDirAnxieux;

    /**
     * Profil dir commercial.
     *
     * @var boolean
     */
    private $profilDirCommercial;

    /**
     * Profil dir gestionnaire.
     *
     * @var boolean
     */
    private $profilDirGestionnaire;

    /**
     * Profil dir somnolent.
     *
     * @var boolean
     */
    private $profilDirSomnolent;

    /**
     * Profil dir technicien.
     *
     * @var boolean
     */
    private $profilDirTechnicien;

    /**
     * Profil ent.
     *
     * @var string
     */
    private $profilEnt;

    /**
     * Prospect.
     *
     * @var boolean
     */
    private $prospect;

    /**
     * Qualite paiement.
     *
     * @var string
     */
    private $qualitePaiement;

    /**
     * R i b.
     *
     * @var string
     */
    private $rIB;

    /**
     * Raison fin activite.
     *
     * @var string
     */
    private $raisonFinActivite;

    /**
     * Raison mv paiement.
     *
     * @var string
     */
    private $raisonMvPaiement;

    /**
     * Regime.
     *
     * @var string
     */
    private $regime;

    /**
     * Regroupement fact.
     *
     * @var string
     */
    private $regroupementFact;

    /**
     * Relation cabinet.
     *
     * @var string
     */
    private $relationCabinet;

    /**
     * Releve facture.
     *
     * @var boolean
     */
    private $releveFacture;

    /**
     * Remise ligne1.
     *
     * @var float
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float
     */
    private $remiseLigne3;

    /**
     * Remise pied.
     *
     * @var float
     */
    private $remisePied;

    /**
     * Remise pied2.
     *
     * @var float
     */
    private $remisePied2;

    /**
     * Remise pied3.
     *
     * @var float
     */
    private $remisePied3;

    /**
     * Resultat.
     *
     * @var float
     */
    private $resultat;

    /**
     * Sante financiere.
     *
     * @var string
     */
    private $santeFinanciere;

    /**
     * Service cpta.
     *
     * @var boolean
     */
    private $serviceCpta;

    /**
     * Siege groupe.
     *
     * @var boolean
     */
    private $siegeGroupe;

    /**
     * Social.
     *
     * @var boolean
     */
    private $social;

    /**
     * Social_ b t q.
     *
     * @var string
     */
    private $social_BTQ;

    /**
     * Social_ bureau distributeur.
     *
     * @var string
     */
    private $social_BureauDistributeur;

    /**
     * Social_ code officiel commune.
     *
     * @var string
     */
    private $social_CodeOfficielCommune;

    /**
     * Social_ code postal.
     *
     * @var string
     */
    private $social_CodePostal;

    /**
     * Social_ complement.
     *
     * @var string
     */
    private $social_Complement;

    /**
     * Social_ nom r s.
     *
     * @var string
     */
    private $social_NomRS;

    /**
     * Social_ nom ville.
     *
     * @var string
     */
    private $social_NomVille;

    /**
     * Social_ nom voie.
     *
     * @var string
     */
    private $social_NomVoie;

    /**
     * Social_ num voie.
     *
     * @var string
     */
    private $social_NumVoie;

    /**
     * Soumis escompte.
     *
     * @var boolean
     */
    private $soumisEscompte;

    /**
     * Soumis port1.
     *
     * @var string
     */
    private $soumisPort1;

    /**
     * Soumis port2.
     *
     * @var string
     */
    private $soumisPort2;

    /**
     * Soumis t v a.
     *
     * @var boolean
     */
    private $soumisTVA;

    /**
     * Soumis taxe1.
     *
     * @var boolean
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var boolean
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var boolean
     */
    private $soumisTaxe3;

    /**
     * Soumis taxe4.
     *
     * @var boolean
     */
    private $soumisTaxe4;

    /**
     * Soumis taxe5.
     *
     * @var boolean
     */
    private $soumisTaxe5;

    /**
     * T v a regime.
     *
     * @var string
     */
    private $tVARegime;

    /**
     * Tableau de bord.
     *
     * @var string
     */
    private $tableauDeBord;

    /**
     * Toutes activites.
     *
     * @var string
     */
    private $toutesActivites;

    /**
     * Transporteur.
     *
     * @var string
     */
    private $transporteur;

    /**
     * Tresorerie.
     *
     * @var string
     */
    private $tresorerie;

    /**
     * Tx escompte vente.
     *
     * @var float
     */
    private $txEscompteVente;

    /**
     * Type client.
     *
     * @var string
     */
    private $typeClient;

    /**
     * Type edit b l.
     *
     * @var string
     */
    private $typeEditBL;

    /**
     * Type facture.
     *
     * @var int
     */
    private $typeFacture;

    /**
     * Type gestion e t e b a c.
     *
     * @var string
     */
    private $typeGestionETEBAC;

    /**
     * Use adresse fact.
     *
     * @var boolean
     */
    private $useAdresseFact;

    /**
     * Use corres sociale.
     *
     * @var boolean
     */
    private $useCorresSociale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return boolean Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the activite nouvelle.
     *
     * @return boolean Returns the activite nouvelle.
     */
    public function getActiviteNouvelle() {
        return $this->activiteNouvelle;
    }

    /**
     * Get the activite saiso.
     *
     * @return boolean Returns the activite saiso.
     */
    public function getActiviteSaiso() {
        return $this->activiteSaiso;
    }

    /**
     * Get the adresse site client.
     *
     * @return string Returns the adresse site client.
     */
    public function getAdresseSiteClient() {
        return $this->adresseSiteClient;
    }

    /**
     * Get the article port1.
     *
     * @return string Returns the article port1.
     */
    public function getArticlePort1() {
        return $this->articlePort1;
    }

    /**
     * Get the article port2.
     *
     * @return string Returns the article port2.
     */
    public function getArticlePort2() {
        return $this->articlePort2;
    }

    /**
     * Get the assurance.
     *
     * @return boolean Returns the assurance.
     */
    public function getAssurance() {
        return $this->assurance;
    }

    /**
     * Get the b l chiffre.
     *
     * @return boolean Returns the b l chiffre.
     */
    public function getBLChiffre() {
        return $this->bLChiffre;
    }

    /**
     * Get the bibliotheque novaxel.
     *
     * @return string Returns the bibliotheque novaxel.
     */
    public function getBibliothequeNovaxel() {
        return $this->bibliothequeNovaxel;
    }

    /**
     * Get the bloque.
     *
     * @return boolean Returns the bloque.
     */
    public function getBloque() {
        return $this->bloque;
    }

    /**
     * Get the cde auto manu.
     *
     * @return string Returns the cde auto manu.
     */
    public function getCdeAutoManu() {
        return $this->cdeAutoManu;
    }

    /**
     * Get the cga.
     *
     * @return boolean Returns the cga.
     */
    public function getCga() {
        return $this->cga;
    }

    /**
     * Get the charges.
     *
     * @return string Returns the charges.
     */
    public function getCharges() {
        return $this->charges;
    }

    /**
     * Get the chiffre affaire.
     *
     * @return float Returns the chiffre affaire.
     */
    public function getChiffreAffaire() {
        return $this->chiffreAffaire;
    }

    /**
     * Get the cle alpha.
     *
     * @return string Returns the cle alpha.
     */
    public function getCleAlpha() {
        return $this->cleAlpha;
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
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
    }

    /**
     * Get the code agence.
     *
     * @return string Returns the code agence.
     */
    public function getCodeAgence() {
        return $this->codeAgence;
    }

    /**
     * Get the code article cotisation.
     *
     * @return string Returns the code article cotisation.
     */
    public function getCodeArticleCotisation() {
        return $this->codeArticleCotisation;
    }

    /**
     * Get the code article droit fixe.
     *
     * @return string Returns the code article droit fixe.
     */
    public function getCodeArticleDroitFixe() {
        return $this->codeArticleDroitFixe;
    }

    /**
     * Get the code article frais fixe.
     *
     * @return string Returns the code article frais fixe.
     */
    public function getCodeArticleFraisFixe() {
        return $this->codeArticleFraisFixe;
    }

    /**
     * Get the code assistant juridique.
     *
     * @return string Returns the code assistant juridique.
     */
    public function getCodeAssistantJuridique() {
        return $this->codeAssistantJuridique;
    }

    /**
     * Get the code assistant social.
     *
     * @return string Returns the code assistant social.
     */
    public function getCodeAssistantSocial() {
        return $this->codeAssistantSocial;
    }

    /**
     * Get the code autre1.
     *
     * @return string Returns the code autre1.
     */
    public function getCodeAutre1() {
        return $this->codeAutre1;
    }

    /**
     * Get the code autre2.
     *
     * @return string Returns the code autre2.
     */
    public function getCodeAutre2() {
        return $this->codeAutre2;
    }

    /**
     * Get the code avocat.
     *
     * @return string Returns the code avocat.
     */
    public function getCodeAvocat() {
        return $this->codeAvocat;
    }

    /**
     * Get the code barre.
     *
     * @return boolean Returns the code barre.
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Get the code categorie client.
     *
     * @return string Returns the code categorie client.
     */
    public function getCodeCategorieClient() {
        return $this->codeCategorieClient;
    }

    /**
     * Get the code client fact.
     *
     * @return string Returns the code client fact.
     */
    public function getCodeClientFact() {
        return $this->codeClientFact;
    }

    /**
     * Get the code client livr.
     *
     * @return string Returns the code client livr.
     */
    public function getCodeClientLivr() {
        return $this->codeClientLivr;
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
     * Get the code depot.
     *
     * @return string Returns the code depot.
     */
    public function getCodeDepot() {
        return $this->codeDepot;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the code edition fact.
     *
     * @return string Returns the code edition fact.
     */
    public function getCodeEditionFact() {
        return $this->codeEditionFact;
    }

    /**
     * Get the code exc.
     *
     * @return string Returns the code exc.
     */
    public function getCodeExc() {
        return $this->codeExc;
    }

    /**
     * Get the code expert.
     *
     * @return string Returns the code expert.
     */
    public function getCodeExpert() {
        return $this->codeExpert;
    }

    /**
     * Get the code factor.
     *
     * @return string Returns the code factor.
     */
    public function getCodeFactor() {
        return $this->codeFactor;
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
     * Get the code geo.
     *
     * @return string Returns the code geo.
     */
    public function getCodeGeo() {
        return $this->codeGeo;
    }

    /**
     * Get the code imputation analytique.
     *
     * @return string Returns the code imputation analytique.
     */
    public function getCodeImputationAnalytique() {
        return $this->codeImputationAnalytique;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle() {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code mission frais fixe.
     *
     * @return string Returns the code mission frais fixe.
     */
    public function getCodeMissionFraisFixe() {
        return $this->codeMissionFraisFixe;
    }

    /**
     * Get the code origine.
     *
     * @return string Returns the code origine.
     */
    public function getCodeOrigine() {
        return $this->codeOrigine;
    }

    /**
     * Get the code pays corres.
     *
     * @return string Returns the code pays corres.
     */
    public function getCodePaysCorres() {
        return $this->codePaysCorres;
    }

    /**
     * Get the code pays fact.
     *
     * @return string Returns the code pays fact.
     */
    public function getCodePaysFact() {
        return $this->codePaysFact;
    }

    /**
     * Get the code portefeuille.
     *
     * @return string Returns the code portefeuille.
     */
    public function getCodePortefeuille() {
        return $this->codePortefeuille;
    }

    /**
     * Get the code recette impots.
     *
     * @return string Returns the code recette impots.
     */
    public function getCodeRecetteImpots() {
        return $this->codeRecetteImpots;
    }

    /**
     * Get the code reglement.
     *
     * @return string Returns the code reglement.
     */
    public function getCodeReglement() {
        return $this->codeReglement;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the code representant.
     *
     * @return string Returns the code representant.
     */
    public function getCodeRepresentant() {
        return $this->codeRepresentant;
    }

    /**
     * Get the code revision.
     *
     * @return string Returns the code revision.
     */
    public function getCodeRevision() {
        return $this->codeRevision;
    }

    /**
     * Get the code sous famille.
     *
     * @return string Returns the code sous famille.
     */
    public function getCodeSousFamille() {
        return $this->codeSousFamille;
    }

    /**
     * Get the code sous tournee.
     *
     * @return string Returns the code sous tournee.
     */
    public function getCodeSousTournee() {
        return $this->codeSousTournee;
    }

    /**
     * Get the code t v a.
     *
     * @return string Returns the code t v a.
     */
    public function getCodeTVA() {
        return $this->codeTVA;
    }

    /**
     * Get the code tarif.
     *
     * @return string Returns the code tarif.
     */
    public function getCodeTarif() {
        return $this->codeTarif;
    }

    /**
     * Get the code tournee.
     *
     * @return string Returns the code tournee.
     */
    public function getCodeTournee() {
        return $this->codeTournee;
    }

    /**
     * Get the code transporteur.
     *
     * @return string Returns the code transporteur.
     */
    public function getCodeTransporteur() {
        return $this->codeTransporteur;
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
     * Get the coef sur p v.
     *
     * @return float Returns the coef sur p v.
     */
    public function getCoefSurPV() {
        return $this->coefSurPV;
    }

    /**
     * Get the coeff p v client.
     *
     * @return float Returns the coeff p v client.
     */
    public function getCoeffPVClient() {
        return $this->coeffPVClient;
    }

    /**
     * Get the collectif.
     *
     * @return string Returns the collectif.
     */
    public function getCollectif() {
        return $this->collectif;
    }

    /**
     * Get the conjoint.
     *
     * @return string Returns the conjoint.
     */
    public function getConjoint() {
        return $this->conjoint;
    }

    /**
     * Get the contact recette impots.
     *
     * @return string Returns the contact recette impots.
     */
    public function getContactRecetteImpots() {
        return $this->contactRecetteImpots;
    }

    /**
     * Get the d s code collab.
     *
     * @return string Returns the d s code collab.
     */
    public function getDSCodeCollab() {
        return $this->dSCodeCollab;
    }

    /**
     * Get the d s date retour.
     *
     * @return DateTime Returns the d s date retour.
     */
    public function getDSDateRetour() {
        return $this->dSDateRetour;
    }

    /**
     * Get the d s date sortie.
     *
     * @return DateTime Returns the d s date sortie.
     */
    public function getDSDateSortie() {
        return $this->dSDateSortie;
    }

    /**
     * Get the date attrib encours.
     *
     * @return DateTime Returns the date attrib encours.
     */
    public function getDateAttribEncours() {
        return $this->dateAttribEncours;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date deb activite.
     *
     * @return DateTime Returns the date deb activite.
     */
    public function getDateDebActivite() {
        return $this->dateDebActivite;
    }

    /**
     * Get the date deb prof.
     *
     * @return DateTime Returns the date deb prof.
     */
    public function getDateDebProf() {
        return $this->dateDebProf;
    }

    /**
     * Get the date derniere vente.
     *
     * @return DateTime Returns the date derniere vente.
     */
    public function getDateDerniereVente() {
        return $this->dateDerniereVente;
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
     * Get the date fin activite.
     *
     * @return DateTime Returns the date fin activite.
     */
    public function getDateFinActivite() {
        return $this->dateFinActivite;
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
     * Get the date reprise.
     *
     * @return DateTime Returns the date reprise.
     */
    public function getDateReprise() {
        return $this->dateReprise;
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
     * Get the delai tarif.
     *
     * @return int Returns the delai tarif.
     */
    public function getDelaiTarif() {
        return $this->delaiTarif;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1() {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2() {
        return $this->domiciliationBancaire2;
    }

    /**
     * Get the dossier comptable.
     *
     * @return string Returns the dossier comptable.
     */
    public function getDossierComptable() {
        return $this->dossierComptable;
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
     * Get the du client.
     *
     * @return string Returns the du client.
     */
    public function getDuClient() {
        return $this->duClient;
    }

    /**
     * Get the duree echeances.
     *
     * @return string Returns the duree echeances.
     */
    public function getDureeEcheances() {
        return $this->dureeEcheances;
    }

    /**
     * Get the effectif e t p.
     *
     * @return int Returns the effectif e t p.
     */
    public function getEffectifETP() {
        return $this->effectifETP;
    }

    /**
     * Get the election c e.
     *
     * @return DateTime Returns the election c e.
     */
    public function getElectionCE() {
        return $this->electionCE;
    }

    /**
     * Get the election delegue personnel.
     *
     * @return DateTime Returns the election delegue personnel.
     */
    public function getElectionDeleguePersonnel() {
        return $this->electionDeleguePersonnel;
    }

    /**
     * Get the equip info.
     *
     * @return string Returns the equip info.
     */
    public function getEquipInfo() {
        return $this->equipInfo;
    }

    /**
     * Get the etat1.
     *
     * @return string Returns the etat1.
     */
    public function getEtat1() {
        return $this->etat1;
    }

    /**
     * Get the etat2.
     *
     * @return string Returns the etat2.
     */
    public function getEtat2() {
        return $this->etat2;
    }

    /**
     * Get the etat3.
     *
     * @return string Returns the etat3.
     */
    public function getEtat3() {
        return $this->etat3;
    }

    /**
     * Get the etat4.
     *
     * @return string Returns the etat4.
     */
    public function getEtat4() {
        return $this->etat4;
    }

    /**
     * Get the etat5.
     *
     * @return string Returns the etat5.
     */
    public function getEtat5() {
        return $this->etat5;
    }

    /**
     * Get the etiquettes.
     *
     * @return boolean Returns the etiquettes.
     */
    public function getEtiquettes() {
        return $this->etiquettes;
    }

    /**
     * Get the fact_ b t q.
     *
     * @return string Returns the fact_ b t q.
     */
    public function getFact_BTQ() {
        return $this->fact_BTQ;
    }

    /**
     * Get the fact_ bureau distributeur.
     *
     * @return string Returns the fact_ bureau distributeur.
     */
    public function getFact_BureauDistributeur() {
        return $this->fact_BureauDistributeur;
    }

    /**
     * Get the fact_ code officiel commune.
     *
     * @return string Returns the fact_ code officiel commune.
     */
    public function getFact_CodeOfficielCommune() {
        return $this->fact_CodeOfficielCommune;
    }

    /**
     * Get the fact_ code postal.
     *
     * @return string Returns the fact_ code postal.
     */
    public function getFact_CodePostal() {
        return $this->fact_CodePostal;
    }

    /**
     * Get the fact_ complement.
     *
     * @return string Returns the fact_ complement.
     */
    public function getFact_Complement() {
        return $this->fact_Complement;
    }

    /**
     * Get the fact_ nom r s.
     *
     * @return string Returns the fact_ nom r s.
     */
    public function getFact_NomRS() {
        return $this->fact_NomRS;
    }

    /**
     * Get the fact_ nom ville.
     *
     * @return string Returns the fact_ nom ville.
     */
    public function getFact_NomVille() {
        return $this->fact_NomVille;
    }

    /**
     * Get the fact_ nom voie.
     *
     * @return string Returns the fact_ nom voie.
     */
    public function getFact_NomVoie() {
        return $this->fact_NomVoie;
    }

    /**
     * Get the fact_ num voie.
     *
     * @return string Returns the fact_ num voie.
     */
    public function getFact_NumVoie() {
        return $this->fact_NumVoie;
    }

    /**
     * Get the facturation compta.
     *
     * @return DateTime Returns the facturation compta.
     */
    public function getFacturationCompta() {
        return $this->facturationCompta;
    }

    /**
     * Get the facturation compta prec.
     *
     * @return DateTime Returns the facturation compta prec.
     */
    public function getFacturationComptaPrec() {
        return $this->facturationComptaPrec;
    }

    /**
     * Get the facturation cotisation.
     *
     * @return boolean Returns the facturation cotisation.
     */
    public function getFacturationCotisation() {
        return $this->facturationCotisation;
    }

    /**
     * Get the facturation droit fixe.
     *
     * @return boolean Returns the facturation droit fixe.
     */
    public function getFacturationDroitFixe() {
        return $this->facturationDroitFixe;
    }

    /**
     * Get the facturation frais fixe.
     *
     * @return boolean Returns the facturation frais fixe.
     */
    public function getFacturationFraisFixe() {
        return $this->facturationFraisFixe;
    }

    /**
     * Get the facturation paie.
     *
     * @return DateTime Returns the facturation paie.
     */
    public function getFacturationPaie() {
        return $this->facturationPaie;
    }

    /**
     * Get the facturation paie prec.
     *
     * @return DateTime Returns the facturation paie prec.
     */
    public function getFacturationPaiePrec() {
        return $this->facturationPaiePrec;
    }

    /**
     * Get the facture euros.
     *
     * @return boolean Returns the facture euros.
     */
    public function getFactureEuros() {
        return $this->factureEuros;
    }

    /**
     * Get the facture isolee.
     *
     * @return boolean Returns the facture isolee.
     */
    public function getFactureIsolee() {
        return $this->factureIsolee;
    }

    /**
     * Get the facture temps passes.
     *
     * @return boolean Returns the facture temps passes.
     */
    public function getFactureTempsPasses() {
        return $this->factureTempsPasses;
    }

    /**
     * Get the factures mail.
     *
     * @return boolean Returns the factures mail.
     */
    public function getFacturesMail() {
        return $this->facturesMail;
    }

    /**
     * Get the fortement impose.
     *
     * @return string Returns the fortement impose.
     */
    public function getFortementImpose() {
        return $this->fortementImpose;
    }

    /**
     * Get the frais fixes1.
     *
     * @return boolean Returns the frais fixes1.
     */
    public function getFraisFixes1() {
        return $this->fraisFixes1;
    }

    /**
     * Get the frais fixes2.
     *
     * @return boolean Returns the frais fixes2.
     */
    public function getFraisFixes2() {
        return $this->fraisFixes2;
    }

    /**
     * Get the franco port1.
     *
     * @return float Returns the franco port1.
     */
    public function getFrancoPort1() {
        return $this->francoPort1;
    }

    /**
     * Get the franco port2.
     *
     * @return float Returns the franco port2.
     */
    public function getFrancoPort2() {
        return $this->francoPort2;
    }

    /**
     * Get the heure appel.
     *
     * @return string Returns the heure appel.
     */
    public function getHeureAppel() {
        return $this->heureAppel;
    }

    /**
     * Get the identifiant t v a.
     *
     * @return string Returns the identifiant t v a.
     */
    public function getIdentifiantTVA() {
        return $this->identifiantTVA;
    }

    /**
     * Get the indice factures mail.
     *
     * @return int Returns the indice factures mail.
     */
    public function getIndiceFacturesMail() {
        return $this->indiceFacturesMail;
    }

    /**
     * Get the insp.
     *
     * @return string Returns the insp.
     */
    public function getInsp() {
        return $this->insp;
    }

    /**
     * Get the interesse gestion.
     *
     * @return string Returns the interesse gestion.
     */
    public function getInteresseGestion() {
        return $this->interesseGestion;
    }

    /**
     * Get the mensualisation actif.
     *
     * @return boolean Returns the mensualisation actif.
     */
    public function getMensualisationActif() {
        return $this->mensualisationActif;
    }

    /**
     * Get the mensualisation au.
     *
     * @return DateTime Returns the mensualisation au.
     */
    public function getMensualisationAu() {
        return $this->mensualisationAu;
    }

    /**
     * Get the mensualisation du.
     *
     * @return DateTime Returns the mensualisation du.
     */
    public function getMensualisationDu() {
        return $this->mensualisationDu;
    }

    /**
     * Get the mensualisation frequence.
     *
     * @return string Returns the mensualisation frequence.
     */
    public function getMensualisationFrequence() {
        return $this->mensualisationFrequence;
    }

    /**
     * Get the mensualisation montant.
     *
     * @return float Returns the mensualisation montant.
     */
    public function getMensualisationMontant() {
        return $this->mensualisationMontant;
    }

    /**
     * Get the mission sur dossier.
     *
     * @return int Returns the mission sur dossier.
     */
    public function getMissionSurDossier() {
        return $this->missionSurDossier;
    }

    /**
     * Get the modele b l.
     *
     * @return string Returns the modele b l.
     */
    public function getModeleBL() {
        return $this->modeleBL;
    }

    /**
     * Get the modele commande.
     *
     * @return string Returns the modele commande.
     */
    public function getModeleCommande() {
        return $this->modeleCommande;
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
     * Get the modele proformas.
     *
     * @return string Returns the modele proformas.
     */
    public function getModeleProformas() {
        return $this->modeleProformas;
    }

    /**
     * Get the modele releve.
     *
     * @return string Returns the modele releve.
     */
    public function getModeleReleve() {
        return $this->modeleReleve;
    }

    /**
     * Get the mois cloture.
     *
     * @return string Returns the mois cloture.
     */
    public function getMoisCloture() {
        return $this->moisCloture;
    }

    /**
     * Get the mois cotisation.
     *
     * @return int Returns the mois cotisation.
     */
    public function getMoisCotisation() {
        return $this->moisCotisation;
    }

    /**
     * Get the mois droit fixe.
     *
     * @return int Returns the mois droit fixe.
     */
    public function getMoisDroitFixe() {
        return $this->moisDroitFixe;
    }

    /**
     * Get the mt cmd non fact.
     *
     * @return float Returns the mt cmd non fact.
     */
    public function getMtCmdNonFact() {
        return $this->mtCmdNonFact;
    }

    /**
     * Get the mt encours.
     *
     * @return float Returns the mt encours.
     */
    public function getMtEncours() {
        return $this->mtEncours;
    }

    /**
     * Get the mt encours autorise.
     *
     * @return float Returns the mt encours autorise.
     */
    public function getMtEncoursAutorise() {
        return $this->mtEncoursAutorise;
    }

    /**
     * Get the nb appels en cours.
     *
     * @return int Returns the nb appels en cours.
     */
    public function getNbAppelsEnCours() {
        return $this->nbAppelsEnCours;
    }

    /**
     * Get the nb b l.
     *
     * @return string Returns the nb b l.
     */
    public function getNbBL() {
        return $this->nbBL;
    }

    /**
     * Get the nb b l non chiffres.
     *
     * @return int Returns the nb b l non chiffres.
     */
    public function getNbBLNonChiffres() {
        return $this->nbBLNonChiffres;
    }

    /**
     * Get the nb commande.
     *
     * @return string Returns the nb commande.
     */
    public function getNbCommande() {
        return $this->nbCommande;
    }

    /**
     * Get the nb devis.
     *
     * @return string Returns the nb devis.
     */
    public function getNbDevis() {
        return $this->nbDevis;
    }

    /**
     * Get the nb facture.
     *
     * @return string Returns the nb facture.
     */
    public function getNbFacture() {
        return $this->nbFacture;
    }

    /**
     * Get the nb jour interval.
     *
     * @return int Returns the nb jour interval.
     */
    public function getNbJourInterval() {
        return $this->nbJourInterval;
    }

    /**
     * Get the nb max b l.
     *
     * @return string Returns the nb max b l.
     */
    public function getNbMaxBL() {
        return $this->nbMaxBL;
    }

    /**
     * Get the nb releve.
     *
     * @return string Returns the nb releve.
     */
    public function getNbReleve() {
        return $this->nbReleve;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the nombre mois exercice.
     *
     * @return string Returns the nombre mois exercice.
     */
    public function getNombreMoisExercice() {
        return $this->nombreMoisExercice;
    }

    /**
     * Get the notoriete.
     *
     * @return string Returns the notoriete.
     */
    public function getNotoriete() {
        return $this->notoriete;
    }

    /**
     * Get the num web adherent.
     *
     * @return string Returns the num web adherent.
     */
    public function getNumWebAdherent() {
        return $this->numWebAdherent;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the observation1.
     *
     * @return string Returns the observation1.
     */
    public function getObservation1() {
        return $this->observation1;
    }

    /**
     * Get the observation2.
     *
     * @return string Returns the observation2.
     */
    public function getObservation2() {
        return $this->observation2;
    }

    /**
     * Get the observation3.
     *
     * @return string Returns the observation3.
     */
    public function getObservation3() {
        return $this->observation3;
    }

    /**
     * Get the occasionnel.
     *
     * @return boolean Returns the occasionnel.
     */
    public function getOccasionnel() {
        return $this->occasionnel;
    }

    /**
     * Get the organisation adm.
     *
     * @return string Returns the organisation adm.
     */
    public function getOrganisationAdm() {
        return $this->organisationAdm;
    }

    /**
     * Get the paiement depart le.
     *
     * @return int Returns the paiement depart le.
     */
    public function getPaiementDepartLe() {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return string Returns the paiement le.
     */
    public function getPaiementLe() {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours() {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the pas productif.
     *
     * @return boolean Returns the pas productif.
     */
    public function getPasProductif() {
        return $this->pasProductif;
    }

    /**
     * Get the pas taches operationnelles.
     *
     * @return boolean Returns the pas taches operationnelles.
     */
    public function getPasTachesOperationnelles() {
        return $this->pasTachesOperationnelles;
    }

    /**
     * Get the patrimoine.
     *
     * @return string Returns the patrimoine.
     */
    public function getPatrimoine() {
        return $this->patrimoine;
    }

    /**
     * Get the prelevements perso.
     *
     * @return string Returns the prelevements perso.
     */
    public function getPrelevementsPerso() {
        return $this->prelevementsPerso;
    }

    /**
     * Get the prescripteur.
     *
     * @return string Returns the prescripteur.
     */
    public function getPrescripteur() {
        return $this->prescripteur;
    }

    /**
     * Get the previsionnel.
     *
     * @return string Returns the previsionnel.
     */
    public function getPrevisionnel() {
        return $this->previsionnel;
    }

    /**
     * Get the prioritaire.
     *
     * @return boolean Returns the prioritaire.
     */
    public function getPrioritaire() {
        return $this->prioritaire;
    }

    /**
     * Get the profil dir anxieux.
     *
     * @return boolean Returns the profil dir anxieux.
     */
    public function getProfilDirAnxieux() {
        return $this->profilDirAnxieux;
    }

    /**
     * Get the profil dir commercial.
     *
     * @return boolean Returns the profil dir commercial.
     */
    public function getProfilDirCommercial() {
        return $this->profilDirCommercial;
    }

    /**
     * Get the profil dir gestionnaire.
     *
     * @return boolean Returns the profil dir gestionnaire.
     */
    public function getProfilDirGestionnaire() {
        return $this->profilDirGestionnaire;
    }

    /**
     * Get the profil dir somnolent.
     *
     * @return boolean Returns the profil dir somnolent.
     */
    public function getProfilDirSomnolent() {
        return $this->profilDirSomnolent;
    }

    /**
     * Get the profil dir technicien.
     *
     * @return boolean Returns the profil dir technicien.
     */
    public function getProfilDirTechnicien() {
        return $this->profilDirTechnicien;
    }

    /**
     * Get the profil ent.
     *
     * @return string Returns the profil ent.
     */
    public function getProfilEnt() {
        return $this->profilEnt;
    }

    /**
     * Get the prospect.
     *
     * @return boolean Returns the prospect.
     */
    public function getProspect() {
        return $this->prospect;
    }

    /**
     * Get the qualite paiement.
     *
     * @return string Returns the qualite paiement.
     */
    public function getQualitePaiement() {
        return $this->qualitePaiement;
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
     * Get the raison fin activite.
     *
     * @return string Returns the raison fin activite.
     */
    public function getRaisonFinActivite() {
        return $this->raisonFinActivite;
    }

    /**
     * Get the raison mv paiement.
     *
     * @return string Returns the raison mv paiement.
     */
    public function getRaisonMvPaiement() {
        return $this->raisonMvPaiement;
    }

    /**
     * Get the regime.
     *
     * @return string Returns the regime.
     */
    public function getRegime() {
        return $this->regime;
    }

    /**
     * Get the regroupement fact.
     *
     * @return string Returns the regroupement fact.
     */
    public function getRegroupementFact() {
        return $this->regroupementFact;
    }

    /**
     * Get the relation cabinet.
     *
     * @return string Returns the relation cabinet.
     */
    public function getRelationCabinet() {
        return $this->relationCabinet;
    }

    /**
     * Get the releve facture.
     *
     * @return boolean Returns the releve facture.
     */
    public function getReleveFacture() {
        return $this->releveFacture;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float Returns the remise ligne1.
     */
    public function getRemiseLigne1() {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float Returns the remise ligne2.
     */
    public function getRemiseLigne2() {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float Returns the remise ligne3.
     */
    public function getRemiseLigne3() {
        return $this->remiseLigne3;
    }

    /**
     * Get the remise pied.
     *
     * @return float Returns the remise pied.
     */
    public function getRemisePied() {
        return $this->remisePied;
    }

    /**
     * Get the remise pied2.
     *
     * @return float Returns the remise pied2.
     */
    public function getRemisePied2() {
        return $this->remisePied2;
    }

    /**
     * Get the remise pied3.
     *
     * @return float Returns the remise pied3.
     */
    public function getRemisePied3() {
        return $this->remisePied3;
    }

    /**
     * Get the resultat.
     *
     * @return float Returns the resultat.
     */
    public function getResultat() {
        return $this->resultat;
    }

    /**
     * Get the sante financiere.
     *
     * @return string Returns the sante financiere.
     */
    public function getSanteFinanciere() {
        return $this->santeFinanciere;
    }

    /**
     * Get the service cpta.
     *
     * @return boolean Returns the service cpta.
     */
    public function getServiceCpta() {
        return $this->serviceCpta;
    }

    /**
     * Get the siege groupe.
     *
     * @return boolean Returns the siege groupe.
     */
    public function getSiegeGroupe() {
        return $this->siegeGroupe;
    }

    /**
     * Get the social.
     *
     * @return boolean Returns the social.
     */
    public function getSocial() {
        return $this->social;
    }

    /**
     * Get the social_ b t q.
     *
     * @return string Returns the social_ b t q.
     */
    public function getSocial_BTQ() {
        return $this->social_BTQ;
    }

    /**
     * Get the social_ bureau distributeur.
     *
     * @return string Returns the social_ bureau distributeur.
     */
    public function getSocial_BureauDistributeur() {
        return $this->social_BureauDistributeur;
    }

    /**
     * Get the social_ code officiel commune.
     *
     * @return string Returns the social_ code officiel commune.
     */
    public function getSocial_CodeOfficielCommune() {
        return $this->social_CodeOfficielCommune;
    }

    /**
     * Get the social_ code postal.
     *
     * @return string Returns the social_ code postal.
     */
    public function getSocial_CodePostal() {
        return $this->social_CodePostal;
    }

    /**
     * Get the social_ complement.
     *
     * @return string Returns the social_ complement.
     */
    public function getSocial_Complement() {
        return $this->social_Complement;
    }

    /**
     * Get the social_ nom r s.
     *
     * @return string Returns the social_ nom r s.
     */
    public function getSocial_NomRS() {
        return $this->social_NomRS;
    }

    /**
     * Get the social_ nom ville.
     *
     * @return string Returns the social_ nom ville.
     */
    public function getSocial_NomVille() {
        return $this->social_NomVille;
    }

    /**
     * Get the social_ nom voie.
     *
     * @return string Returns the social_ nom voie.
     */
    public function getSocial_NomVoie() {
        return $this->social_NomVoie;
    }

    /**
     * Get the social_ num voie.
     *
     * @return string Returns the social_ num voie.
     */
    public function getSocial_NumVoie() {
        return $this->social_NumVoie;
    }

    /**
     * Get the soumis escompte.
     *
     * @return boolean Returns the soumis escompte.
     */
    public function getSoumisEscompte() {
        return $this->soumisEscompte;
    }

    /**
     * Get the soumis port1.
     *
     * @return string Returns the soumis port1.
     */
    public function getSoumisPort1() {
        return $this->soumisPort1;
    }

    /**
     * Get the soumis port2.
     *
     * @return string Returns the soumis port2.
     */
    public function getSoumisPort2() {
        return $this->soumisPort2;
    }

    /**
     * Get the soumis t v a.
     *
     * @return boolean Returns the soumis t v a.
     */
    public function getSoumisTVA() {
        return $this->soumisTVA;
    }

    /**
     * Get the soumis taxe1.
     *
     * @return boolean Returns the soumis taxe1.
     */
    public function getSoumisTaxe1() {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return boolean Returns the soumis taxe2.
     */
    public function getSoumisTaxe2() {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return boolean Returns the soumis taxe3.
     */
    public function getSoumisTaxe3() {
        return $this->soumisTaxe3;
    }

    /**
     * Get the soumis taxe4.
     *
     * @return boolean Returns the soumis taxe4.
     */
    public function getSoumisTaxe4() {
        return $this->soumisTaxe4;
    }

    /**
     * Get the soumis taxe5.
     *
     * @return boolean Returns the soumis taxe5.
     */
    public function getSoumisTaxe5() {
        return $this->soumisTaxe5;
    }

    /**
     * Get the t v a regime.
     *
     * @return string Returns the t v a regime.
     */
    public function getTVARegime() {
        return $this->tVARegime;
    }

    /**
     * Get the tableau de bord.
     *
     * @return string Returns the tableau de bord.
     */
    public function getTableauDeBord() {
        return $this->tableauDeBord;
    }

    /**
     * Get the toutes activites.
     *
     * @return string Returns the toutes activites.
     */
    public function getToutesActivites() {
        return $this->toutesActivites;
    }

    /**
     * Get the transporteur.
     *
     * @return string Returns the transporteur.
     */
    public function getTransporteur() {
        return $this->transporteur;
    }

    /**
     * Get the tresorerie.
     *
     * @return string Returns the tresorerie.
     */
    public function getTresorerie() {
        return $this->tresorerie;
    }

    /**
     * Get the tx escompte vente.
     *
     * @return float Returns the tx escompte vente.
     */
    public function getTxEscompteVente() {
        return $this->txEscompteVente;
    }

    /**
     * Get the type client.
     *
     * @return string Returns the type client.
     */
    public function getTypeClient() {
        return $this->typeClient;
    }

    /**
     * Get the type edit b l.
     *
     * @return string Returns the type edit b l.
     */
    public function getTypeEditBL() {
        return $this->typeEditBL;
    }

    /**
     * Get the type facture.
     *
     * @return int Returns the type facture.
     */
    public function getTypeFacture() {
        return $this->typeFacture;
    }

    /**
     * Get the type gestion e t e b a c.
     *
     * @return string Returns the type gestion e t e b a c.
     */
    public function getTypeGestionETEBAC() {
        return $this->typeGestionETEBAC;
    }

    /**
     * Get the use adresse fact.
     *
     * @return boolean Returns the use adresse fact.
     */
    public function getUseAdresseFact() {
        return $this->useAdresseFact;
    }

    /**
     * Get the use corres sociale.
     *
     * @return boolean Returns the use corres sociale.
     */
    public function getUseCorresSociale() {
        return $this->useCorresSociale;
    }

    /**
     * Set the actif.
     *
     * @param boolean $actif The actif.
     * @return Clients Returns this clients.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the activite nouvelle.
     *
     * @param boolean $activiteNouvelle The activite nouvelle.
     * @return Clients Returns this clients.
     */
    public function setActiviteNouvelle($activiteNouvelle) {
        $this->activiteNouvelle = $activiteNouvelle;
        return $this;
    }

    /**
     * Set the activite saiso.
     *
     * @param boolean $activiteSaiso The activite saiso.
     * @return Clients Returns this clients.
     */
    public function setActiviteSaiso($activiteSaiso) {
        $this->activiteSaiso = $activiteSaiso;
        return $this;
    }

    /**
     * Set the adresse site client.
     *
     * @param string $adresseSiteClient The adresse site client.
     * @return Clients Returns this clients.
     */
    public function setAdresseSiteClient($adresseSiteClient) {
        $this->adresseSiteClient = $adresseSiteClient;
        return $this;
    }

    /**
     * Set the article port1.
     *
     * @param string $articlePort1 The article port1.
     * @return Clients Returns this clients.
     */
    public function setArticlePort1($articlePort1) {
        $this->articlePort1 = $articlePort1;
        return $this;
    }

    /**
     * Set the article port2.
     *
     * @param string $articlePort2 The article port2.
     * @return Clients Returns this clients.
     */
    public function setArticlePort2($articlePort2) {
        $this->articlePort2 = $articlePort2;
        return $this;
    }

    /**
     * Set the assurance.
     *
     * @param boolean $assurance The assurance.
     * @return Clients Returns this clients.
     */
    public function setAssurance($assurance) {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the b l chiffre.
     *
     * @param boolean $bLChiffre The b l chiffre.
     * @return Clients Returns this clients.
     */
    public function setBLChiffre($bLChiffre) {
        $this->bLChiffre = $bLChiffre;
        return $this;
    }

    /**
     * Set the bibliotheque novaxel.
     *
     * @param string $bibliothequeNovaxel The bibliotheque novaxel.
     * @return Clients Returns this clients.
     */
    public function setBibliothequeNovaxel($bibliothequeNovaxel) {
        $this->bibliothequeNovaxel = $bibliothequeNovaxel;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param boolean $bloque The bloque.
     * @return Clients Returns this clients.
     */
    public function setBloque($bloque) {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the cde auto manu.
     *
     * @param string $cdeAutoManu The cde auto manu.
     * @return Clients Returns this clients.
     */
    public function setCdeAutoManu($cdeAutoManu) {
        $this->cdeAutoManu = $cdeAutoManu;
        return $this;
    }

    /**
     * Set the cga.
     *
     * @param boolean $cga The cga.
     * @return Clients Returns this clients.
     */
    public function setCga($cga) {
        $this->cga = $cga;
        return $this;
    }

    /**
     * Set the charges.
     *
     * @param string $charges The charges.
     * @return Clients Returns this clients.
     */
    public function setCharges($charges) {
        $this->charges = $charges;
        return $this;
    }

    /**
     * Set the chiffre affaire.
     *
     * @param float $chiffreAffaire The chiffre affaire.
     * @return Clients Returns this clients.
     */
    public function setChiffreAffaire($chiffreAffaire) {
        $this->chiffreAffaire = $chiffreAffaire;
        return $this;
    }

    /**
     * Set the cle alpha.
     *
     * @param string $cleAlpha The cle alpha.
     * @return Clients Returns this clients.
     */
    public function setCleAlpha($cleAlpha) {
        $this->cleAlpha = $cleAlpha;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Clients Returns this clients.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     * @return Clients Returns this clients.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code agence.
     *
     * @param string $codeAgence The code agence.
     * @return Clients Returns this clients.
     */
    public function setCodeAgence($codeAgence) {
        $this->codeAgence = $codeAgence;
        return $this;
    }

    /**
     * Set the code article cotisation.
     *
     * @param string $codeArticleCotisation The code article cotisation.
     * @return Clients Returns this clients.
     */
    public function setCodeArticleCotisation($codeArticleCotisation) {
        $this->codeArticleCotisation = $codeArticleCotisation;
        return $this;
    }

    /**
     * Set the code article droit fixe.
     *
     * @param string $codeArticleDroitFixe The code article droit fixe.
     * @return Clients Returns this clients.
     */
    public function setCodeArticleDroitFixe($codeArticleDroitFixe) {
        $this->codeArticleDroitFixe = $codeArticleDroitFixe;
        return $this;
    }

    /**
     * Set the code article frais fixe.
     *
     * @param string $codeArticleFraisFixe The code article frais fixe.
     * @return Clients Returns this clients.
     */
    public function setCodeArticleFraisFixe($codeArticleFraisFixe) {
        $this->codeArticleFraisFixe = $codeArticleFraisFixe;
        return $this;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string $codeAssistantJuridique The code assistant juridique.
     * @return Clients Returns this clients.
     */
    public function setCodeAssistantJuridique($codeAssistantJuridique) {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string $codeAssistantSocial The code assistant social.
     * @return Clients Returns this clients.
     */
    public function setCodeAssistantSocial($codeAssistantSocial) {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string $codeAutre1 The code autre1.
     * @return Clients Returns this clients.
     */
    public function setCodeAutre1($codeAutre1) {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string $codeAutre2 The code autre2.
     * @return Clients Returns this clients.
     */
    public function setCodeAutre2($codeAutre2) {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }

    /**
     * Set the code avocat.
     *
     * @param string $codeAvocat The code avocat.
     * @return Clients Returns this clients.
     */
    public function setCodeAvocat($codeAvocat) {
        $this->codeAvocat = $codeAvocat;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param boolean $codeBarre The code barre.
     * @return Clients Returns this clients.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code categorie client.
     *
     * @param string $codeCategorieClient The code categorie client.
     * @return Clients Returns this clients.
     */
    public function setCodeCategorieClient($codeCategorieClient) {
        $this->codeCategorieClient = $codeCategorieClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string $codeClientFact The code client fact.
     * @return Clients Returns this clients.
     */
    public function setCodeClientFact($codeClientFact) {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code client livr.
     *
     * @param string $codeClientLivr The code client livr.
     * @return Clients Returns this clients.
     */
    public function setCodeClientLivr($codeClientLivr) {
        $this->codeClientLivr = $codeClientLivr;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return Clients Returns this clients.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     * @return Clients Returns this clients.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Clients Returns this clients.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code edition fact.
     *
     * @param string $codeEditionFact The code edition fact.
     * @return Clients Returns this clients.
     */
    public function setCodeEditionFact($codeEditionFact) {
        $this->codeEditionFact = $codeEditionFact;
        return $this;
    }

    /**
     * Set the code exc.
     *
     * @param string $codeExc The code exc.
     * @return Clients Returns this clients.
     */
    public function setCodeExc($codeExc) {
        $this->codeExc = $codeExc;
        return $this;
    }

    /**
     * Set the code expert.
     *
     * @param string $codeExpert The code expert.
     * @return Clients Returns this clients.
     */
    public function setCodeExpert($codeExpert) {
        $this->codeExpert = $codeExpert;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string $codeFactor The code factor.
     * @return Clients Returns this clients.
     */
    public function setCodeFactor($codeFactor) {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     * @return Clients Returns this clients.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code geo.
     *
     * @param string $codeGeo The code geo.
     * @return Clients Returns this clients.
     */
    public function setCodeGeo($codeGeo) {
        $this->codeGeo = $codeGeo;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string $codeImputationAnalytique The code imputation analytique.
     * @return Clients Returns this clients.
     */
    public function setCodeImputationAnalytique($codeImputationAnalytique) {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string $codeLangueDesignationArticle The code langue designation article.
     * @return Clients Returns this clients.
     */
    public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code mission frais fixe.
     *
     * @param string $codeMissionFraisFixe The code mission frais fixe.
     * @return Clients Returns this clients.
     */
    public function setCodeMissionFraisFixe($codeMissionFraisFixe) {
        $this->codeMissionFraisFixe = $codeMissionFraisFixe;
        return $this;
    }

    /**
     * Set the code origine.
     *
     * @param string $codeOrigine The code origine.
     * @return Clients Returns this clients.
     */
    public function setCodeOrigine($codeOrigine) {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }

    /**
     * Set the code pays corres.
     *
     * @param string $codePaysCorres The code pays corres.
     * @return Clients Returns this clients.
     */
    public function setCodePaysCorres($codePaysCorres) {
        $this->codePaysCorres = $codePaysCorres;
        return $this;
    }

    /**
     * Set the code pays fact.
     *
     * @param string $codePaysFact The code pays fact.
     * @return Clients Returns this clients.
     */
    public function setCodePaysFact($codePaysFact) {
        $this->codePaysFact = $codePaysFact;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string $codePortefeuille The code portefeuille.
     * @return Clients Returns this clients.
     */
    public function setCodePortefeuille($codePortefeuille) {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }

    /**
     * Set the code recette impots.
     *
     * @param string $codeRecetteImpots The code recette impots.
     * @return Clients Returns this clients.
     */
    public function setCodeRecetteImpots($codeRecetteImpots) {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string $codeReglement The code reglement.
     * @return Clients Returns this clients.
     */
    public function setCodeReglement($codeReglement) {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return Clients Returns this clients.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code representant.
     *
     * @param string $codeRepresentant The code representant.
     * @return Clients Returns this clients.
     */
    public function setCodeRepresentant($codeRepresentant) {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }

    /**
     * Set the code revision.
     *
     * @param string $codeRevision The code revision.
     * @return Clients Returns this clients.
     */
    public function setCodeRevision($codeRevision) {
        $this->codeRevision = $codeRevision;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string $codeSousFamille The code sous famille.
     * @return Clients Returns this clients.
     */
    public function setCodeSousFamille($codeSousFamille) {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code sous tournee.
     *
     * @param string $codeSousTournee The code sous tournee.
     * @return Clients Returns this clients.
     */
    public function setCodeSousTournee($codeSousTournee) {
        $this->codeSousTournee = $codeSousTournee;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return Clients Returns this clients.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the code tarif.
     *
     * @param string $codeTarif The code tarif.
     * @return Clients Returns this clients.
     */
    public function setCodeTarif($codeTarif) {
        $this->codeTarif = $codeTarif;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string $codeTournee The code tournee.
     * @return Clients Returns this clients.
     */
    public function setCodeTournee($codeTournee) {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the code transporteur.
     *
     * @param string $codeTransporteur The code transporteur.
     * @return Clients Returns this clients.
     */
    public function setCodeTransporteur($codeTransporteur) {
        $this->codeTransporteur = $codeTransporteur;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string $codeVentilCompta The code ventil compta.
     * @return Clients Returns this clients.
     */
    public function setCodeVentilCompta($codeVentilCompta) {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the coef sur p v.
     *
     * @param float $coefSurPV The coef sur p v.
     * @return Clients Returns this clients.
     */
    public function setCoefSurPV($coefSurPV) {
        $this->coefSurPV = $coefSurPV;
        return $this;
    }

    /**
     * Set the coeff p v client.
     *
     * @param float $coeffPVClient The coeff p v client.
     * @return Clients Returns this clients.
     */
    public function setCoeffPVClient($coeffPVClient) {
        $this->coeffPVClient = $coeffPVClient;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     * @return Clients Returns this clients.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the conjoint.
     *
     * @param string $conjoint The conjoint.
     * @return Clients Returns this clients.
     */
    public function setConjoint($conjoint) {
        $this->conjoint = $conjoint;
        return $this;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string $contactRecetteImpots The contact recette impots.
     * @return Clients Returns this clients.
     */
    public function setContactRecetteImpots($contactRecetteImpots) {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }

    /**
     * Set the d s code collab.
     *
     * @param string $dSCodeCollab The d s code collab.
     * @return Clients Returns this clients.
     */
    public function setDSCodeCollab($dSCodeCollab) {
        $this->dSCodeCollab = $dSCodeCollab;
        return $this;
    }

    /**
     * Set the d s date retour.
     *
     * @param DateTime $dSDateRetour The d s date retour.
     * @return Clients Returns this clients.
     */
    public function setDSDateRetour(DateTime $dSDateRetour = null) {
        $this->dSDateRetour = $dSDateRetour;
        return $this;
    }

    /**
     * Set the d s date sortie.
     *
     * @param DateTime $dSDateSortie The d s date sortie.
     * @return Clients Returns this clients.
     */
    public function setDSDateSortie(DateTime $dSDateSortie = null) {
        $this->dSDateSortie = $dSDateSortie;
        return $this;
    }

    /**
     * Set the date attrib encours.
     *
     * @param DateTime $dateAttribEncours The date attrib encours.
     * @return Clients Returns this clients.
     */
    public function setDateAttribEncours(DateTime $dateAttribEncours = null) {
        $this->dateAttribEncours = $dateAttribEncours;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Clients Returns this clients.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date deb activite.
     *
     * @param DateTime $dateDebActivite The date deb activite.
     * @return Clients Returns this clients.
     */
    public function setDateDebActivite(DateTime $dateDebActivite = null) {
        $this->dateDebActivite = $dateDebActivite;
        return $this;
    }

    /**
     * Set the date deb prof.
     *
     * @param DateTime $dateDebProf The date deb prof.
     * @return Clients Returns this clients.
     */
    public function setDateDebProf(DateTime $dateDebProf = null) {
        $this->dateDebProf = $dateDebProf;
        return $this;
    }

    /**
     * Set the date derniere vente.
     *
     * @param DateTime $dateDerniereVente The date derniere vente.
     * @return Clients Returns this clients.
     */
    public function setDateDerniereVente(DateTime $dateDerniereVente = null) {
        $this->dateDerniereVente = $dateDerniereVente;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime $dateEntree The date entree.
     * @return Clients Returns this clients.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date fin activite.
     *
     * @param DateTime $dateFinActivite The date fin activite.
     * @return Clients Returns this clients.
     */
    public function setDateFinActivite(DateTime $dateFinActivite = null) {
        $this->dateFinActivite = $dateFinActivite;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Clients Returns this clients.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date reprise.
     *
     * @param DateTime $dateReprise The date reprise.
     * @return Clients Returns this clients.
     */
    public function setDateReprise(DateTime $dateReprise = null) {
        $this->dateReprise = $dateReprise;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime $dateSortie The date sortie.
     * @return Clients Returns this clients.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the delai tarif.
     *
     * @param int $delaiTarif The delai tarif.
     * @return Clients Returns this clients.
     */
    public function setDelaiTarif($delaiTarif) {
        $this->delaiTarif = $delaiTarif;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Clients Returns this clients.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Clients Returns this clients.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the dossier comptable.
     *
     * @param string $dossierComptable The dossier comptable.
     * @return Clients Returns this clients.
     */
    public function setDossierComptable($dossierComptable) {
        $this->dossierComptable = $dossierComptable;
        return $this;
    }

    /**
     * Set the dossier paie.
     *
     * @param string $dossierPaie The dossier paie.
     * @return Clients Returns this clients.
     */
    public function setDossierPaie($dossierPaie) {
        $this->dossierPaie = $dossierPaie;
        return $this;
    }

    /**
     * Set the du client.
     *
     * @param string $duClient The du client.
     * @return Clients Returns this clients.
     */
    public function setDuClient($duClient) {
        $this->duClient = $duClient;
        return $this;
    }

    /**
     * Set the duree echeances.
     *
     * @param string $dureeEcheances The duree echeances.
     * @return Clients Returns this clients.
     */
    public function setDureeEcheances($dureeEcheances) {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }

    /**
     * Set the effectif e t p.
     *
     * @param int $effectifETP The effectif e t p.
     * @return Clients Returns this clients.
     */
    public function setEffectifETP($effectifETP) {
        $this->effectifETP = $effectifETP;
        return $this;
    }

    /**
     * Set the election c e.
     *
     * @param DateTime $electionCE The election c e.
     * @return Clients Returns this clients.
     */
    public function setElectionCE(DateTime $electionCE = null) {
        $this->electionCE = $electionCE;
        return $this;
    }

    /**
     * Set the election delegue personnel.
     *
     * @param DateTime $electionDeleguePersonnel The election delegue personnel.
     * @return Clients Returns this clients.
     */
    public function setElectionDeleguePersonnel(DateTime $electionDeleguePersonnel = null) {
        $this->electionDeleguePersonnel = $electionDeleguePersonnel;
        return $this;
    }

    /**
     * Set the equip info.
     *
     * @param string $equipInfo The equip info.
     * @return Clients Returns this clients.
     */
    public function setEquipInfo($equipInfo) {
        $this->equipInfo = $equipInfo;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string $etat1 The etat1.
     * @return Clients Returns this clients.
     */
    public function setEtat1($etat1) {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string $etat2 The etat2.
     * @return Clients Returns this clients.
     */
    public function setEtat2($etat2) {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string $etat3 The etat3.
     * @return Clients Returns this clients.
     */
    public function setEtat3($etat3) {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string $etat4 The etat4.
     * @return Clients Returns this clients.
     */
    public function setEtat4($etat4) {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string $etat5 The etat5.
     * @return Clients Returns this clients.
     */
    public function setEtat5($etat5) {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the etiquettes.
     *
     * @param boolean $etiquettes The etiquettes.
     * @return Clients Returns this clients.
     */
    public function setEtiquettes($etiquettes) {
        $this->etiquettes = $etiquettes;
        return $this;
    }

    /**
     * Set the fact_ b t q.
     *
     * @param string $fact_BTQ The fact_ b t q.
     * @return Clients Returns this clients.
     */
    public function setFact_BTQ($fact_BTQ) {
        $this->fact_BTQ = $fact_BTQ;
        return $this;
    }

    /**
     * Set the fact_ bureau distributeur.
     *
     * @param string $fact_BureauDistributeur The fact_ bureau distributeur.
     * @return Clients Returns this clients.
     */
    public function setFact_BureauDistributeur($fact_BureauDistributeur) {
        $this->fact_BureauDistributeur = $fact_BureauDistributeur;
        return $this;
    }

    /**
     * Set the fact_ code officiel commune.
     *
     * @param string $fact_CodeOfficielCommune The fact_ code officiel commune.
     * @return Clients Returns this clients.
     */
    public function setFact_CodeOfficielCommune($fact_CodeOfficielCommune) {
        $this->fact_CodeOfficielCommune = $fact_CodeOfficielCommune;
        return $this;
    }

    /**
     * Set the fact_ code postal.
     *
     * @param string $fact_CodePostal The fact_ code postal.
     * @return Clients Returns this clients.
     */
    public function setFact_CodePostal($fact_CodePostal) {
        $this->fact_CodePostal = $fact_CodePostal;
        return $this;
    }

    /**
     * Set the fact_ complement.
     *
     * @param string $fact_Complement The fact_ complement.
     * @return Clients Returns this clients.
     */
    public function setFact_Complement($fact_Complement) {
        $this->fact_Complement = $fact_Complement;
        return $this;
    }

    /**
     * Set the fact_ nom r s.
     *
     * @param string $fact_NomRS The fact_ nom r s.
     * @return Clients Returns this clients.
     */
    public function setFact_NomRS($fact_NomRS) {
        $this->fact_NomRS = $fact_NomRS;
        return $this;
    }

    /**
     * Set the fact_ nom ville.
     *
     * @param string $fact_NomVille The fact_ nom ville.
     * @return Clients Returns this clients.
     */
    public function setFact_NomVille($fact_NomVille) {
        $this->fact_NomVille = $fact_NomVille;
        return $this;
    }

    /**
     * Set the fact_ nom voie.
     *
     * @param string $fact_NomVoie The fact_ nom voie.
     * @return Clients Returns this clients.
     */
    public function setFact_NomVoie($fact_NomVoie) {
        $this->fact_NomVoie = $fact_NomVoie;
        return $this;
    }

    /**
     * Set the fact_ num voie.
     *
     * @param string $fact_NumVoie The fact_ num voie.
     * @return Clients Returns this clients.
     */
    public function setFact_NumVoie($fact_NumVoie) {
        $this->fact_NumVoie = $fact_NumVoie;
        return $this;
    }

    /**
     * Set the facturation compta.
     *
     * @param DateTime $facturationCompta The facturation compta.
     * @return Clients Returns this clients.
     */
    public function setFacturationCompta(DateTime $facturationCompta = null) {
        $this->facturationCompta = $facturationCompta;
        return $this;
    }

    /**
     * Set the facturation compta prec.
     *
     * @param DateTime $facturationComptaPrec The facturation compta prec.
     * @return Clients Returns this clients.
     */
    public function setFacturationComptaPrec(DateTime $facturationComptaPrec = null) {
        $this->facturationComptaPrec = $facturationComptaPrec;
        return $this;
    }

    /**
     * Set the facturation cotisation.
     *
     * @param boolean $facturationCotisation The facturation cotisation.
     * @return Clients Returns this clients.
     */
    public function setFacturationCotisation($facturationCotisation) {
        $this->facturationCotisation = $facturationCotisation;
        return $this;
    }

    /**
     * Set the facturation droit fixe.
     *
     * @param boolean $facturationDroitFixe The facturation droit fixe.
     * @return Clients Returns this clients.
     */
    public function setFacturationDroitFixe($facturationDroitFixe) {
        $this->facturationDroitFixe = $facturationDroitFixe;
        return $this;
    }

    /**
     * Set the facturation frais fixe.
     *
     * @param boolean $facturationFraisFixe The facturation frais fixe.
     * @return Clients Returns this clients.
     */
    public function setFacturationFraisFixe($facturationFraisFixe) {
        $this->facturationFraisFixe = $facturationFraisFixe;
        return $this;
    }

    /**
     * Set the facturation paie.
     *
     * @param DateTime $facturationPaie The facturation paie.
     * @return Clients Returns this clients.
     */
    public function setFacturationPaie(DateTime $facturationPaie = null) {
        $this->facturationPaie = $facturationPaie;
        return $this;
    }

    /**
     * Set the facturation paie prec.
     *
     * @param DateTime $facturationPaiePrec The facturation paie prec.
     * @return Clients Returns this clients.
     */
    public function setFacturationPaiePrec(DateTime $facturationPaiePrec = null) {
        $this->facturationPaiePrec = $facturationPaiePrec;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param boolean $factureEuros The facture euros.
     * @return Clients Returns this clients.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param boolean $factureIsolee The facture isolee.
     * @return Clients Returns this clients.
     */
    public function setFactureIsolee($factureIsolee) {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the facture temps passes.
     *
     * @param boolean $factureTempsPasses The facture temps passes.
     * @return Clients Returns this clients.
     */
    public function setFactureTempsPasses($factureTempsPasses) {
        $this->factureTempsPasses = $factureTempsPasses;
        return $this;
    }

    /**
     * Set the factures mail.
     *
     * @param boolean $facturesMail The factures mail.
     * @return Clients Returns this clients.
     */
    public function setFacturesMail($facturesMail) {
        $this->facturesMail = $facturesMail;
        return $this;
    }

    /**
     * Set the fortement impose.
     *
     * @param string $fortementImpose The fortement impose.
     * @return Clients Returns this clients.
     */
    public function setFortementImpose($fortementImpose) {
        $this->fortementImpose = $fortementImpose;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param boolean $fraisFixes1 The frais fixes1.
     * @return Clients Returns this clients.
     */
    public function setFraisFixes1($fraisFixes1) {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param boolean $fraisFixes2 The frais fixes2.
     * @return Clients Returns this clients.
     */
    public function setFraisFixes2($fraisFixes2) {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the franco port1.
     *
     * @param float $francoPort1 The franco port1.
     * @return Clients Returns this clients.
     */
    public function setFrancoPort1($francoPort1) {
        $this->francoPort1 = $francoPort1;
        return $this;
    }

    /**
     * Set the franco port2.
     *
     * @param float $francoPort2 The franco port2.
     * @return Clients Returns this clients.
     */
    public function setFrancoPort2($francoPort2) {
        $this->francoPort2 = $francoPort2;
        return $this;
    }

    /**
     * Set the heure appel.
     *
     * @param string $heureAppel The heure appel.
     * @return Clients Returns this clients.
     */
    public function setHeureAppel($heureAppel) {
        $this->heureAppel = $heureAppel;
        return $this;
    }

    /**
     * Set the identifiant t v a.
     *
     * @param string $identifiantTVA The identifiant t v a.
     * @return Clients Returns this clients.
     */
    public function setIdentifiantTVA($identifiantTVA) {
        $this->identifiantTVA = $identifiantTVA;
        return $this;
    }

    /**
     * Set the indice factures mail.
     *
     * @param int $indiceFacturesMail The indice factures mail.
     * @return Clients Returns this clients.
     */
    public function setIndiceFacturesMail($indiceFacturesMail) {
        $this->indiceFacturesMail = $indiceFacturesMail;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string $insp The insp.
     * @return Clients Returns this clients.
     */
    public function setInsp($insp) {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the interesse gestion.
     *
     * @param string $interesseGestion The interesse gestion.
     * @return Clients Returns this clients.
     */
    public function setInteresseGestion($interesseGestion) {
        $this->interesseGestion = $interesseGestion;
        return $this;
    }

    /**
     * Set the mensualisation actif.
     *
     * @param boolean $mensualisationActif The mensualisation actif.
     * @return Clients Returns this clients.
     */
    public function setMensualisationActif($mensualisationActif) {
        $this->mensualisationActif = $mensualisationActif;
        return $this;
    }

    /**
     * Set the mensualisation au.
     *
     * @param DateTime $mensualisationAu The mensualisation au.
     * @return Clients Returns this clients.
     */
    public function setMensualisationAu(DateTime $mensualisationAu = null) {
        $this->mensualisationAu = $mensualisationAu;
        return $this;
    }

    /**
     * Set the mensualisation du.
     *
     * @param DateTime $mensualisationDu The mensualisation du.
     * @return Clients Returns this clients.
     */
    public function setMensualisationDu(DateTime $mensualisationDu = null) {
        $this->mensualisationDu = $mensualisationDu;
        return $this;
    }

    /**
     * Set the mensualisation frequence.
     *
     * @param string $mensualisationFrequence The mensualisation frequence.
     * @return Clients Returns this clients.
     */
    public function setMensualisationFrequence($mensualisationFrequence) {
        $this->mensualisationFrequence = $mensualisationFrequence;
        return $this;
    }

    /**
     * Set the mensualisation montant.
     *
     * @param float $mensualisationMontant The mensualisation montant.
     * @return Clients Returns this clients.
     */
    public function setMensualisationMontant($mensualisationMontant) {
        $this->mensualisationMontant = $mensualisationMontant;
        return $this;
    }

    /**
     * Set the mission sur dossier.
     *
     * @param int $missionSurDossier The mission sur dossier.
     * @return Clients Returns this clients.
     */
    public function setMissionSurDossier($missionSurDossier) {
        $this->missionSurDossier = $missionSurDossier;
        return $this;
    }

    /**
     * Set the modele b l.
     *
     * @param string $modeleBL The modele b l.
     * @return Clients Returns this clients.
     */
    public function setModeleBL($modeleBL) {
        $this->modeleBL = $modeleBL;
        return $this;
    }

    /**
     * Set the modele commande.
     *
     * @param string $modeleCommande The modele commande.
     * @return Clients Returns this clients.
     */
    public function setModeleCommande($modeleCommande) {
        $this->modeleCommande = $modeleCommande;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string $modeleFacture The modele facture.
     * @return Clients Returns this clients.
     */
    public function setModeleFacture($modeleFacture) {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the modele proformas.
     *
     * @param string $modeleProformas The modele proformas.
     * @return Clients Returns this clients.
     */
    public function setModeleProformas($modeleProformas) {
        $this->modeleProformas = $modeleProformas;
        return $this;
    }

    /**
     * Set the modele releve.
     *
     * @param string $modeleReleve The modele releve.
     * @return Clients Returns this clients.
     */
    public function setModeleReleve($modeleReleve) {
        $this->modeleReleve = $modeleReleve;
        return $this;
    }

    /**
     * Set the mois cloture.
     *
     * @param string $moisCloture The mois cloture.
     * @return Clients Returns this clients.
     */
    public function setMoisCloture($moisCloture) {
        $this->moisCloture = $moisCloture;
        return $this;
    }

    /**
     * Set the mois cotisation.
     *
     * @param int $moisCotisation The mois cotisation.
     * @return Clients Returns this clients.
     */
    public function setMoisCotisation($moisCotisation) {
        $this->moisCotisation = $moisCotisation;
        return $this;
    }

    /**
     * Set the mois droit fixe.
     *
     * @param int $moisDroitFixe The mois droit fixe.
     * @return Clients Returns this clients.
     */
    public function setMoisDroitFixe($moisDroitFixe) {
        $this->moisDroitFixe = $moisDroitFixe;
        return $this;
    }

    /**
     * Set the mt cmd non fact.
     *
     * @param float $mtCmdNonFact The mt cmd non fact.
     * @return Clients Returns this clients.
     */
    public function setMtCmdNonFact($mtCmdNonFact) {
        $this->mtCmdNonFact = $mtCmdNonFact;
        return $this;
    }

    /**
     * Set the mt encours.
     *
     * @param float $mtEncours The mt encours.
     * @return Clients Returns this clients.
     */
    public function setMtEncours($mtEncours) {
        $this->mtEncours = $mtEncours;
        return $this;
    }

    /**
     * Set the mt encours autorise.
     *
     * @param float $mtEncoursAutorise The mt encours autorise.
     * @return Clients Returns this clients.
     */
    public function setMtEncoursAutorise($mtEncoursAutorise) {
        $this->mtEncoursAutorise = $mtEncoursAutorise;
        return $this;
    }

    /**
     * Set the nb appels en cours.
     *
     * @param int $nbAppelsEnCours The nb appels en cours.
     * @return Clients Returns this clients.
     */
    public function setNbAppelsEnCours($nbAppelsEnCours) {
        $this->nbAppelsEnCours = $nbAppelsEnCours;
        return $this;
    }

    /**
     * Set the nb b l.
     *
     * @param string $nbBL The nb b l.
     * @return Clients Returns this clients.
     */
    public function setNbBL($nbBL) {
        $this->nbBL = $nbBL;
        return $this;
    }

    /**
     * Set the nb b l non chiffres.
     *
     * @param int $nbBLNonChiffres The nb b l non chiffres.
     * @return Clients Returns this clients.
     */
    public function setNbBLNonChiffres($nbBLNonChiffres) {
        $this->nbBLNonChiffres = $nbBLNonChiffres;
        return $this;
    }

    /**
     * Set the nb commande.
     *
     * @param string $nbCommande The nb commande.
     * @return Clients Returns this clients.
     */
    public function setNbCommande($nbCommande) {
        $this->nbCommande = $nbCommande;
        return $this;
    }

    /**
     * Set the nb devis.
     *
     * @param string $nbDevis The nb devis.
     * @return Clients Returns this clients.
     */
    public function setNbDevis($nbDevis) {
        $this->nbDevis = $nbDevis;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param string $nbFacture The nb facture.
     * @return Clients Returns this clients.
     */
    public function setNbFacture($nbFacture) {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nb jour interval.
     *
     * @param int $nbJourInterval The nb jour interval.
     * @return Clients Returns this clients.
     */
    public function setNbJourInterval($nbJourInterval) {
        $this->nbJourInterval = $nbJourInterval;
        return $this;
    }

    /**
     * Set the nb max b l.
     *
     * @param string $nbMaxBL The nb max b l.
     * @return Clients Returns this clients.
     */
    public function setNbMaxBL($nbMaxBL) {
        $this->nbMaxBL = $nbMaxBL;
        return $this;
    }

    /**
     * Set the nb releve.
     *
     * @param string $nbReleve The nb releve.
     * @return Clients Returns this clients.
     */
    public function setNbReleve($nbReleve) {
        $this->nbReleve = $nbReleve;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     * @return Clients Returns this clients.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the nombre mois exercice.
     *
     * @param string $nombreMoisExercice The nombre mois exercice.
     * @return Clients Returns this clients.
     */
    public function setNombreMoisExercice($nombreMoisExercice) {
        $this->nombreMoisExercice = $nombreMoisExercice;
        return $this;
    }

    /**
     * Set the notoriete.
     *
     * @param string $notoriete The notoriete.
     * @return Clients Returns this clients.
     */
    public function setNotoriete($notoriete) {
        $this->notoriete = $notoriete;
        return $this;
    }

    /**
     * Set the num web adherent.
     *
     * @param string $numWebAdherent The num web adherent.
     * @return Clients Returns this clients.
     */
    public function setNumWebAdherent($numWebAdherent) {
        $this->numWebAdherent = $numWebAdherent;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Clients Returns this clients.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observation1.
     *
     * @param string $observation1 The observation1.
     * @return Clients Returns this clients.
     */
    public function setObservation1($observation1) {
        $this->observation1 = $observation1;
        return $this;
    }

    /**
     * Set the observation2.
     *
     * @param string $observation2 The observation2.
     * @return Clients Returns this clients.
     */
    public function setObservation2($observation2) {
        $this->observation2 = $observation2;
        return $this;
    }

    /**
     * Set the observation3.
     *
     * @param string $observation3 The observation3.
     * @return Clients Returns this clients.
     */
    public function setObservation3($observation3) {
        $this->observation3 = $observation3;
        return $this;
    }

    /**
     * Set the occasionnel.
     *
     * @param boolean $occasionnel The occasionnel.
     * @return Clients Returns this clients.
     */
    public function setOccasionnel($occasionnel) {
        $this->occasionnel = $occasionnel;
        return $this;
    }

    /**
     * Set the organisation adm.
     *
     * @param string $organisationAdm The organisation adm.
     * @return Clients Returns this clients.
     */
    public function setOrganisationAdm($organisationAdm) {
        $this->organisationAdm = $organisationAdm;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int $paiementDepartLe The paiement depart le.
     * @return Clients Returns this clients.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string $paiementLe The paiement le.
     * @return Clients Returns this clients.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     * @return Clients Returns this clients.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the pas productif.
     *
     * @param boolean $pasProductif The pas productif.
     * @return Clients Returns this clients.
     */
    public function setPasProductif($pasProductif) {
        $this->pasProductif = $pasProductif;
        return $this;
    }

    /**
     * Set the pas taches operationnelles.
     *
     * @param boolean $pasTachesOperationnelles The pas taches operationnelles.
     * @return Clients Returns this clients.
     */
    public function setPasTachesOperationnelles($pasTachesOperationnelles) {
        $this->pasTachesOperationnelles = $pasTachesOperationnelles;
        return $this;
    }

    /**
     * Set the patrimoine.
     *
     * @param string $patrimoine The patrimoine.
     * @return Clients Returns this clients.
     */
    public function setPatrimoine($patrimoine) {
        $this->patrimoine = $patrimoine;
        return $this;
    }

    /**
     * Set the prelevements perso.
     *
     * @param string $prelevementsPerso The prelevements perso.
     * @return Clients Returns this clients.
     */
    public function setPrelevementsPerso($prelevementsPerso) {
        $this->prelevementsPerso = $prelevementsPerso;
        return $this;
    }

    /**
     * Set the prescripteur.
     *
     * @param string $prescripteur The prescripteur.
     * @return Clients Returns this clients.
     */
    public function setPrescripteur($prescripteur) {
        $this->prescripteur = $prescripteur;
        return $this;
    }

    /**
     * Set the previsionnel.
     *
     * @param string $previsionnel The previsionnel.
     * @return Clients Returns this clients.
     */
    public function setPrevisionnel($previsionnel) {
        $this->previsionnel = $previsionnel;
        return $this;
    }

    /**
     * Set the prioritaire.
     *
     * @param boolean $prioritaire The prioritaire.
     * @return Clients Returns this clients.
     */
    public function setPrioritaire($prioritaire) {
        $this->prioritaire = $prioritaire;
        return $this;
    }

    /**
     * Set the profil dir anxieux.
     *
     * @param boolean $profilDirAnxieux The profil dir anxieux.
     * @return Clients Returns this clients.
     */
    public function setProfilDirAnxieux($profilDirAnxieux) {
        $this->profilDirAnxieux = $profilDirAnxieux;
        return $this;
    }

    /**
     * Set the profil dir commercial.
     *
     * @param boolean $profilDirCommercial The profil dir commercial.
     * @return Clients Returns this clients.
     */
    public function setProfilDirCommercial($profilDirCommercial) {
        $this->profilDirCommercial = $profilDirCommercial;
        return $this;
    }

    /**
     * Set the profil dir gestionnaire.
     *
     * @param boolean $profilDirGestionnaire The profil dir gestionnaire.
     * @return Clients Returns this clients.
     */
    public function setProfilDirGestionnaire($profilDirGestionnaire) {
        $this->profilDirGestionnaire = $profilDirGestionnaire;
        return $this;
    }

    /**
     * Set the profil dir somnolent.
     *
     * @param boolean $profilDirSomnolent The profil dir somnolent.
     * @return Clients Returns this clients.
     */
    public function setProfilDirSomnolent($profilDirSomnolent) {
        $this->profilDirSomnolent = $profilDirSomnolent;
        return $this;
    }

    /**
     * Set the profil dir technicien.
     *
     * @param boolean $profilDirTechnicien The profil dir technicien.
     * @return Clients Returns this clients.
     */
    public function setProfilDirTechnicien($profilDirTechnicien) {
        $this->profilDirTechnicien = $profilDirTechnicien;
        return $this;
    }

    /**
     * Set the profil ent.
     *
     * @param string $profilEnt The profil ent.
     * @return Clients Returns this clients.
     */
    public function setProfilEnt($profilEnt) {
        $this->profilEnt = $profilEnt;
        return $this;
    }

    /**
     * Set the prospect.
     *
     * @param boolean $prospect The prospect.
     * @return Clients Returns this clients.
     */
    public function setProspect($prospect) {
        $this->prospect = $prospect;
        return $this;
    }

    /**
     * Set the qualite paiement.
     *
     * @param string $qualitePaiement The qualite paiement.
     * @return Clients Returns this clients.
     */
    public function setQualitePaiement($qualitePaiement) {
        $this->qualitePaiement = $qualitePaiement;
        return $this;
    }

    /**
     * Set the r i b.
     *
     * @param string $rIB The r i b.
     * @return Clients Returns this clients.
     */
    public function setRIB($rIB) {
        $this->rIB = $rIB;
        return $this;
    }

    /**
     * Set the raison fin activite.
     *
     * @param string $raisonFinActivite The raison fin activite.
     * @return Clients Returns this clients.
     */
    public function setRaisonFinActivite($raisonFinActivite) {
        $this->raisonFinActivite = $raisonFinActivite;
        return $this;
    }

    /**
     * Set the raison mv paiement.
     *
     * @param string $raisonMvPaiement The raison mv paiement.
     * @return Clients Returns this clients.
     */
    public function setRaisonMvPaiement($raisonMvPaiement) {
        $this->raisonMvPaiement = $raisonMvPaiement;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string $regime The regime.
     * @return Clients Returns this clients.
     */
    public function setRegime($regime) {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regroupement fact.
     *
     * @param string $regroupementFact The regroupement fact.
     * @return Clients Returns this clients.
     */
    public function setRegroupementFact($regroupementFact) {
        $this->regroupementFact = $regroupementFact;
        return $this;
    }

    /**
     * Set the relation cabinet.
     *
     * @param string $relationCabinet The relation cabinet.
     * @return Clients Returns this clients.
     */
    public function setRelationCabinet($relationCabinet) {
        $this->relationCabinet = $relationCabinet;
        return $this;
    }

    /**
     * Set the releve facture.
     *
     * @param boolean $releveFacture The releve facture.
     * @return Clients Returns this clients.
     */
    public function setReleveFacture($releveFacture) {
        $this->releveFacture = $releveFacture;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     * @return Clients Returns this clients.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     * @return Clients Returns this clients.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     * @return Clients Returns this clients.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     * @return Clients Returns this clients.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float $remisePied2 The remise pied2.
     * @return Clients Returns this clients.
     */
    public function setRemisePied2($remisePied2) {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float $remisePied3 The remise pied3.
     * @return Clients Returns this clients.
     */
    public function setRemisePied3($remisePied3) {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param float $resultat The resultat.
     * @return Clients Returns this clients.
     */
    public function setResultat($resultat) {
        $this->resultat = $resultat;
        return $this;
    }

    /**
     * Set the sante financiere.
     *
     * @param string $santeFinanciere The sante financiere.
     * @return Clients Returns this clients.
     */
    public function setSanteFinanciere($santeFinanciere) {
        $this->santeFinanciere = $santeFinanciere;
        return $this;
    }

    /**
     * Set the service cpta.
     *
     * @param boolean $serviceCpta The service cpta.
     * @return Clients Returns this clients.
     */
    public function setServiceCpta($serviceCpta) {
        $this->serviceCpta = $serviceCpta;
        return $this;
    }

    /**
     * Set the siege groupe.
     *
     * @param boolean $siegeGroupe The siege groupe.
     * @return Clients Returns this clients.
     */
    public function setSiegeGroupe($siegeGroupe) {
        $this->siegeGroupe = $siegeGroupe;
        return $this;
    }

    /**
     * Set the social.
     *
     * @param boolean $social The social.
     * @return Clients Returns this clients.
     */
    public function setSocial($social) {
        $this->social = $social;
        return $this;
    }

    /**
     * Set the social_ b t q.
     *
     * @param string $social_BTQ The social_ b t q.
     * @return Clients Returns this clients.
     */
    public function setSocial_BTQ($social_BTQ) {
        $this->social_BTQ = $social_BTQ;
        return $this;
    }

    /**
     * Set the social_ bureau distributeur.
     *
     * @param string $social_BureauDistributeur The social_ bureau distributeur.
     * @return Clients Returns this clients.
     */
    public function setSocial_BureauDistributeur($social_BureauDistributeur) {
        $this->social_BureauDistributeur = $social_BureauDistributeur;
        return $this;
    }

    /**
     * Set the social_ code officiel commune.
     *
     * @param string $social_CodeOfficielCommune The social_ code officiel commune.
     * @return Clients Returns this clients.
     */
    public function setSocial_CodeOfficielCommune($social_CodeOfficielCommune) {
        $this->social_CodeOfficielCommune = $social_CodeOfficielCommune;
        return $this;
    }

    /**
     * Set the social_ code postal.
     *
     * @param string $social_CodePostal The social_ code postal.
     * @return Clients Returns this clients.
     */
    public function setSocial_CodePostal($social_CodePostal) {
        $this->social_CodePostal = $social_CodePostal;
        return $this;
    }

    /**
     * Set the social_ complement.
     *
     * @param string $social_Complement The social_ complement.
     * @return Clients Returns this clients.
     */
    public function setSocial_Complement($social_Complement) {
        $this->social_Complement = $social_Complement;
        return $this;
    }

    /**
     * Set the social_ nom r s.
     *
     * @param string $social_NomRS The social_ nom r s.
     * @return Clients Returns this clients.
     */
    public function setSocial_NomRS($social_NomRS) {
        $this->social_NomRS = $social_NomRS;
        return $this;
    }

    /**
     * Set the social_ nom ville.
     *
     * @param string $social_NomVille The social_ nom ville.
     * @return Clients Returns this clients.
     */
    public function setSocial_NomVille($social_NomVille) {
        $this->social_NomVille = $social_NomVille;
        return $this;
    }

    /**
     * Set the social_ nom voie.
     *
     * @param string $social_NomVoie The social_ nom voie.
     * @return Clients Returns this clients.
     */
    public function setSocial_NomVoie($social_NomVoie) {
        $this->social_NomVoie = $social_NomVoie;
        return $this;
    }

    /**
     * Set the social_ num voie.
     *
     * @param string $social_NumVoie The social_ num voie.
     * @return Clients Returns this clients.
     */
    public function setSocial_NumVoie($social_NumVoie) {
        $this->social_NumVoie = $social_NumVoie;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param boolean $soumisEscompte The soumis escompte.
     * @return Clients Returns this clients.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis port1.
     *
     * @param string $soumisPort1 The soumis port1.
     * @return Clients Returns this clients.
     */
    public function setSoumisPort1($soumisPort1) {
        $this->soumisPort1 = $soumisPort1;
        return $this;
    }

    /**
     * Set the soumis port2.
     *
     * @param string $soumisPort2 The soumis port2.
     * @return Clients Returns this clients.
     */
    public function setSoumisPort2($soumisPort2) {
        $this->soumisPort2 = $soumisPort2;
        return $this;
    }

    /**
     * Set the soumis t v a.
     *
     * @param boolean $soumisTVA The soumis t v a.
     * @return Clients Returns this clients.
     */
    public function setSoumisTVA($soumisTVA) {
        $this->soumisTVA = $soumisTVA;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param boolean $soumisTaxe1 The soumis taxe1.
     * @return Clients Returns this clients.
     */
    public function setSoumisTaxe1($soumisTaxe1) {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param boolean $soumisTaxe2 The soumis taxe2.
     * @return Clients Returns this clients.
     */
    public function setSoumisTaxe2($soumisTaxe2) {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param boolean $soumisTaxe3 The soumis taxe3.
     * @return Clients Returns this clients.
     */
    public function setSoumisTaxe3($soumisTaxe3) {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the soumis taxe4.
     *
     * @param boolean $soumisTaxe4 The soumis taxe4.
     * @return Clients Returns this clients.
     */
    public function setSoumisTaxe4($soumisTaxe4) {
        $this->soumisTaxe4 = $soumisTaxe4;
        return $this;
    }

    /**
     * Set the soumis taxe5.
     *
     * @param boolean $soumisTaxe5 The soumis taxe5.
     * @return Clients Returns this clients.
     */
    public function setSoumisTaxe5($soumisTaxe5) {
        $this->soumisTaxe5 = $soumisTaxe5;
        return $this;
    }

    /**
     * Set the t v a regime.
     *
     * @param string $tVARegime The t v a regime.
     * @return Clients Returns this clients.
     */
    public function setTVARegime($tVARegime) {
        $this->tVARegime = $tVARegime;
        return $this;
    }

    /**
     * Set the tableau de bord.
     *
     * @param string $tableauDeBord The tableau de bord.
     * @return Clients Returns this clients.
     */
    public function setTableauDeBord($tableauDeBord) {
        $this->tableauDeBord = $tableauDeBord;
        return $this;
    }

    /**
     * Set the toutes activites.
     *
     * @param string $toutesActivites The toutes activites.
     * @return Clients Returns this clients.
     */
    public function setToutesActivites($toutesActivites) {
        $this->toutesActivites = $toutesActivites;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string $transporteur The transporteur.
     * @return Clients Returns this clients.
     */
    public function setTransporteur($transporteur) {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tresorerie.
     *
     * @param string $tresorerie The tresorerie.
     * @return Clients Returns this clients.
     */
    public function setTresorerie($tresorerie) {
        $this->tresorerie = $tresorerie;
        return $this;
    }

    /**
     * Set the tx escompte vente.
     *
     * @param float $txEscompteVente The tx escompte vente.
     * @return Clients Returns this clients.
     */
    public function setTxEscompteVente($txEscompteVente) {
        $this->txEscompteVente = $txEscompteVente;
        return $this;
    }

    /**
     * Set the type client.
     *
     * @param string $typeClient The type client.
     * @return Clients Returns this clients.
     */
    public function setTypeClient($typeClient) {
        $this->typeClient = $typeClient;
        return $this;
    }

    /**
     * Set the type edit b l.
     *
     * @param string $typeEditBL The type edit b l.
     * @return Clients Returns this clients.
     */
    public function setTypeEditBL($typeEditBL) {
        $this->typeEditBL = $typeEditBL;
        return $this;
    }

    /**
     * Set the type facture.
     *
     * @param int $typeFacture The type facture.
     * @return Clients Returns this clients.
     */
    public function setTypeFacture($typeFacture) {
        $this->typeFacture = $typeFacture;
        return $this;
    }

    /**
     * Set the type gestion e t e b a c.
     *
     * @param string $typeGestionETEBAC The type gestion e t e b a c.
     * @return Clients Returns this clients.
     */
    public function setTypeGestionETEBAC($typeGestionETEBAC) {
        $this->typeGestionETEBAC = $typeGestionETEBAC;
        return $this;
    }

    /**
     * Set the use adresse fact.
     *
     * @param boolean $useAdresseFact The use adresse fact.
     * @return Clients Returns this clients.
     */
    public function setUseAdresseFact($useAdresseFact) {
        $this->useAdresseFact = $useAdresseFact;
        return $this;
    }

    /**
     * Set the use corres sociale.
     *
     * @param boolean $useCorresSociale The use corres sociale.
     * @return Clients Returns this clients.
     */
    public function setUseCorresSociale($useCorresSociale) {
        $this->useCorresSociale = $useCorresSociale;
        return $this;
    }

}
