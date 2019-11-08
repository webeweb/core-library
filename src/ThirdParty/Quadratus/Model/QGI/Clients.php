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
 * Clients.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Clients {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Activite nouvelle.
     *
     * @var bool
     */
    private $activiteNouvelle;

    /**
     * Activite saiso.
     *
     * @var bool
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
     * @var bool
     */
    private $assurance;

    /**
     * Bibliotheque novaxel.
     *
     * @var string
     */
    private $bibliothequeNovaxel;

    /**
     * Bl chiffre.
     *
     * @var bool
     */
    private $blChiffre;

    /**
     * Bloque.
     *
     * @var bool
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
     * @var bool
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
     * @var bool
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
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Code ventil compta.
     *
     * @var string
     */
    private $codeVentilCompta;

    /**
     * Coef sur pv.
     *
     * @var float
     */
    private $coefSurPv;

    /**
     * Coeff pv client.
     *
     * @var float
     */
    private $coeffPvClient;

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
     * Date attrib encours.
     *
     * @var DateTime|null
     */
    private $dateAttribEncours;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date deb activite.
     *
     * @var DateTime|null
     */
    private $dateDebActivite;

    /**
     * Date deb prof.
     *
     * @var DateTime|null
     */
    private $dateDebProf;

    /**
     * Date derniere vente.
     *
     * @var DateTime|null
     */
    private $dateDerniereVente;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date fin activite.
     *
     * @var DateTime|null
     */
    private $dateFinActivite;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date reprise.
     *
     * @var DateTime|null
     */
    private $dateReprise;

    /**
     * Date sortie.
     *
     * @var DateTime|null
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
     * Effectif etp.
     *
     * @var int
     */
    private $effectifEtp;

    /**
     * Election ce.
     *
     * @var DateTime|null
     */
    private $electionCe;

    /**
     * Election delegue personnel.
     *
     * @var DateTime|null
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
     * @var bool
     */
    private $etiquettes;

    /**
     * Fact btq.
     *
     * @var string
     */
    private $factBtq;

    /**
     * Fact bureau distributeur.
     *
     * @var string
     */
    private $factBureauDistributeur;

    /**
     * Fact code officiel commune.
     *
     * @var string
     */
    private $factCodeOfficielCommune;

    /**
     * Fact code postal.
     *
     * @var string
     */
    private $factCodePostal;

    /**
     * Fact complement.
     *
     * @var string
     */
    private $factComplement;

    /**
     * Fact nom rs.
     *
     * @var string
     */
    private $factNomRs;

    /**
     * Fact nom ville.
     *
     * @var string
     */
    private $factNomVille;

    /**
     * Fact nom voie.
     *
     * @var string
     */
    private $factNomVoie;

    /**
     * Fact num voie.
     *
     * @var string
     */
    private $factNumVoie;

    /**
     * Facturation compta.
     *
     * @var DateTime|null
     */
    private $facturationCompta;

    /**
     * Facturation compta prec.
     *
     * @var DateTime|null
     */
    private $facturationComptaPrec;

    /**
     * Facturation cotisation.
     *
     * @var bool
     */
    private $facturationCotisation;

    /**
     * Facturation droit fixe.
     *
     * @var bool
     */
    private $facturationDroitFixe;

    /**
     * Facturation frais fixe.
     *
     * @var bool
     */
    private $facturationFraisFixe;

    /**
     * Facturation paie.
     *
     * @var DateTime|null
     */
    private $facturationPaie;

    /**
     * Facturation paie prec.
     *
     * @var DateTime|null
     */
    private $facturationPaiePrec;

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Facture isolee.
     *
     * @var bool
     */
    private $factureIsolee;

    /**
     * Facture temps passes.
     *
     * @var bool
     */
    private $factureTempsPasses;

    /**
     * Factures mail.
     *
     * @var bool
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
     * @var bool
     */
    private $fraisFixes1;

    /**
     * Frais fixes2.
     *
     * @var bool
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
     * Identifiant tva.
     *
     * @var string
     */
    private $identifiantTva;

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
     * @var bool
     */
    private $mensualisationActif;

    /**
     * Mensualisation au.
     *
     * @var DateTime|null
     */
    private $mensualisationAu;

    /**
     * Mensualisation du.
     *
     * @var DateTime|null
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
     * Modele bl.
     *
     * @var string
     */
    private $modeleBl;

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
     * Nb bl.
     *
     * @var string
     */
    private $nbBl;

    /**
     * Nb bl non chiffres.
     *
     * @var int
     */
    private $nbBlNonChiffres;

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
     * Nb max bl.
     *
     * @var string
     */
    private $nbMaxBl;

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
     * @var bool
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
     * @var bool
     */
    private $pasProductif;

    /**
     * Pas taches operationnelles.
     *
     * @var bool
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
     * @var bool
     */
    private $prioritaire;

    /**
     * Profil dir anxieux.
     *
     * @var bool
     */
    private $profilDirAnxieux;

    /**
     * Profil dir commercial.
     *
     * @var bool
     */
    private $profilDirCommercial;

    /**
     * Profil dir gestionnaire.
     *
     * @var bool
     */
    private $profilDirGestionnaire;

    /**
     * Profil dir somnolent.
     *
     * @var bool
     */
    private $profilDirSomnolent;

    /**
     * Profil dir technicien.
     *
     * @var bool
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
     * @var bool
     */
    private $prospect;

    /**
     * Qualite paiement.
     *
     * @var string
     */
    private $qualitePaiement;

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
     * @var bool
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
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Sante financiere.
     *
     * @var string
     */
    private $santeFinanciere;

    /**
     * Service cpta.
     *
     * @var bool
     */
    private $serviceCpta;

    /**
     * Siege groupe.
     *
     * @var bool
     */
    private $siegeGroupe;

    /**
     * Social.
     *
     * @var bool
     */
    private $social;

    /**
     * Social btq.
     *
     * @var string
     */
    private $socialBtq;

    /**
     * Social bureau distributeur.
     *
     * @var string
     */
    private $socialBureauDistributeur;

    /**
     * Social code officiel commune.
     *
     * @var string
     */
    private $socialCodeOfficielCommune;

    /**
     * Social code postal.
     *
     * @var string
     */
    private $socialCodePostal;

    /**
     * Social complement.
     *
     * @var string
     */
    private $socialComplement;

    /**
     * Social nom rs.
     *
     * @var string
     */
    private $socialNomRs;

    /**
     * Social nom ville.
     *
     * @var string
     */
    private $socialNomVille;

    /**
     * Social nom voie.
     *
     * @var string
     */
    private $socialNomVoie;

    /**
     * Social num voie.
     *
     * @var string
     */
    private $socialNumVoie;

    /**
     * Soumis escompte.
     *
     * @var bool
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
     * Soumis taxe1.
     *
     * @var bool
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var bool
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var bool
     */
    private $soumisTaxe3;

    /**
     * Soumis taxe4.
     *
     * @var bool
     */
    private $soumisTaxe4;

    /**
     * Soumis taxe5.
     *
     * @var bool
     */
    private $soumisTaxe5;

    /**
     * Soumis tva.
     *
     * @var bool
     */
    private $soumisTva;

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
     * Tva regime.
     *
     * @var string
     */
    private $tvaRegime;

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
     * Type edit bl.
     *
     * @var string
     */
    private $typeEditBl;

    /**
     * Type facture.
     *
     * @var int
     */
    private $typeFacture;

    /**
     * Type gestion etebac.
     *
     * @var string
     */
    private $typeGestionEtebac;

    /**
     * Use adresse fact.
     *
     * @var bool
     */
    private $useAdresseFact;

    /**
     * Use corres sociale.
     *
     * @var bool
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
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the activite nouvelle.
     *
     * @return bool Returns the activite nouvelle.
     */
    public function getActiviteNouvelle() {
        return $this->activiteNouvelle;
    }

    /**
     * Get the activite saiso.
     *
     * @return bool Returns the activite saiso.
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
     * @return bool Returns the assurance.
     */
    public function getAssurance() {
        return $this->assurance;
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
     * Get the bl chiffre.
     *
     * @return bool Returns the bl chiffre.
     */
    public function getBlChiffre() {
        return $this->blChiffre;
    }

    /**
     * Get the bloque.
     *
     * @return bool Returns the bloque.
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
     * @return bool Returns the cga.
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
     * @return bool Returns the code barre.
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
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
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
     * Get the coef sur pv.
     *
     * @return float Returns the coef sur pv.
     */
    public function getCoefSurPv() {
        return $this->coefSurPv;
    }

    /**
     * Get the coeff pv client.
     *
     * @return float Returns the coeff pv client.
     */
    public function getCoeffPvClient() {
        return $this->coeffPvClient;
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
     * Get the date attrib encours.
     *
     * @return DateTime|null Returns the date attrib encours.
     */
    public function getDateAttribEncours() {
        return $this->dateAttribEncours;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date deb activite.
     *
     * @return DateTime|null Returns the date deb activite.
     */
    public function getDateDebActivite() {
        return $this->dateDebActivite;
    }

    /**
     * Get the date deb prof.
     *
     * @return DateTime|null Returns the date deb prof.
     */
    public function getDateDebProf() {
        return $this->dateDebProf;
    }

    /**
     * Get the date derniere vente.
     *
     * @return DateTime|null Returns the date derniere vente.
     */
    public function getDateDerniereVente() {
        return $this->dateDerniereVente;
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
     * Get the date fin activite.
     *
     * @return DateTime|null Returns the date fin activite.
     */
    public function getDateFinActivite() {
        return $this->dateFinActivite;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date reprise.
     *
     * @return DateTime|null Returns the date reprise.
     */
    public function getDateReprise() {
        return $this->dateReprise;
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
     * Get the effectif etp.
     *
     * @return int Returns the effectif etp.
     */
    public function getEffectifEtp() {
        return $this->effectifEtp;
    }

    /**
     * Get the election ce.
     *
     * @return DateTime|null Returns the election ce.
     */
    public function getElectionCe() {
        return $this->electionCe;
    }

    /**
     * Get the election delegue personnel.
     *
     * @return DateTime|null Returns the election delegue personnel.
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
     * @return bool Returns the etiquettes.
     */
    public function getEtiquettes() {
        return $this->etiquettes;
    }

    /**
     * Get the fact btq.
     *
     * @return string Returns the fact btq.
     */
    public function getFactBtq() {
        return $this->factBtq;
    }

    /**
     * Get the fact bureau distributeur.
     *
     * @return string Returns the fact bureau distributeur.
     */
    public function getFactBureauDistributeur() {
        return $this->factBureauDistributeur;
    }

    /**
     * Get the fact code officiel commune.
     *
     * @return string Returns the fact code officiel commune.
     */
    public function getFactCodeOfficielCommune() {
        return $this->factCodeOfficielCommune;
    }

    /**
     * Get the fact code postal.
     *
     * @return string Returns the fact code postal.
     */
    public function getFactCodePostal() {
        return $this->factCodePostal;
    }

    /**
     * Get the fact complement.
     *
     * @return string Returns the fact complement.
     */
    public function getFactComplement() {
        return $this->factComplement;
    }

    /**
     * Get the fact nom rs.
     *
     * @return string Returns the fact nom rs.
     */
    public function getFactNomRs() {
        return $this->factNomRs;
    }

    /**
     * Get the fact nom ville.
     *
     * @return string Returns the fact nom ville.
     */
    public function getFactNomVille() {
        return $this->factNomVille;
    }

    /**
     * Get the fact nom voie.
     *
     * @return string Returns the fact nom voie.
     */
    public function getFactNomVoie() {
        return $this->factNomVoie;
    }

    /**
     * Get the fact num voie.
     *
     * @return string Returns the fact num voie.
     */
    public function getFactNumVoie() {
        return $this->factNumVoie;
    }

    /**
     * Get the facturation compta.
     *
     * @return DateTime|null Returns the facturation compta.
     */
    public function getFacturationCompta() {
        return $this->facturationCompta;
    }

    /**
     * Get the facturation compta prec.
     *
     * @return DateTime|null Returns the facturation compta prec.
     */
    public function getFacturationComptaPrec() {
        return $this->facturationComptaPrec;
    }

    /**
     * Get the facturation cotisation.
     *
     * @return bool Returns the facturation cotisation.
     */
    public function getFacturationCotisation() {
        return $this->facturationCotisation;
    }

    /**
     * Get the facturation droit fixe.
     *
     * @return bool Returns the facturation droit fixe.
     */
    public function getFacturationDroitFixe() {
        return $this->facturationDroitFixe;
    }

    /**
     * Get the facturation frais fixe.
     *
     * @return bool Returns the facturation frais fixe.
     */
    public function getFacturationFraisFixe() {
        return $this->facturationFraisFixe;
    }

    /**
     * Get the facturation paie.
     *
     * @return DateTime|null Returns the facturation paie.
     */
    public function getFacturationPaie() {
        return $this->facturationPaie;
    }

    /**
     * Get the facturation paie prec.
     *
     * @return DateTime|null Returns the facturation paie prec.
     */
    public function getFacturationPaiePrec() {
        return $this->facturationPaiePrec;
    }

    /**
     * Get the facture euros.
     *
     * @return bool Returns the facture euros.
     */
    public function getFactureEuros() {
        return $this->factureEuros;
    }

    /**
     * Get the facture isolee.
     *
     * @return bool Returns the facture isolee.
     */
    public function getFactureIsolee() {
        return $this->factureIsolee;
    }

    /**
     * Get the facture temps passes.
     *
     * @return bool Returns the facture temps passes.
     */
    public function getFactureTempsPasses() {
        return $this->factureTempsPasses;
    }

    /**
     * Get the factures mail.
     *
     * @return bool Returns the factures mail.
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
     * @return bool Returns the frais fixes1.
     */
    public function getFraisFixes1() {
        return $this->fraisFixes1;
    }

    /**
     * Get the frais fixes2.
     *
     * @return bool Returns the frais fixes2.
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
     * Get the identifiant tva.
     *
     * @return string Returns the identifiant tva.
     */
    public function getIdentifiantTva() {
        return $this->identifiantTva;
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
     * @return bool Returns the mensualisation actif.
     */
    public function getMensualisationActif() {
        return $this->mensualisationActif;
    }

    /**
     * Get the mensualisation au.
     *
     * @return DateTime|null Returns the mensualisation au.
     */
    public function getMensualisationAu() {
        return $this->mensualisationAu;
    }

    /**
     * Get the mensualisation du.
     *
     * @return DateTime|null Returns the mensualisation du.
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
     * Get the modele bl.
     *
     * @return string Returns the modele bl.
     */
    public function getModeleBl() {
        return $this->modeleBl;
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
     * Get the nb bl.
     *
     * @return string Returns the nb bl.
     */
    public function getNbBl() {
        return $this->nbBl;
    }

    /**
     * Get the nb bl non chiffres.
     *
     * @return int Returns the nb bl non chiffres.
     */
    public function getNbBlNonChiffres() {
        return $this->nbBlNonChiffres;
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
     * Get the nb max bl.
     *
     * @return string Returns the nb max bl.
     */
    public function getNbMaxBl() {
        return $this->nbMaxBl;
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
     * @return bool Returns the occasionnel.
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
     * @return bool Returns the pas productif.
     */
    public function getPasProductif() {
        return $this->pasProductif;
    }

    /**
     * Get the pas taches operationnelles.
     *
     * @return bool Returns the pas taches operationnelles.
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
     * @return bool Returns the prioritaire.
     */
    public function getPrioritaire() {
        return $this->prioritaire;
    }

    /**
     * Get the profil dir anxieux.
     *
     * @return bool Returns the profil dir anxieux.
     */
    public function getProfilDirAnxieux() {
        return $this->profilDirAnxieux;
    }

    /**
     * Get the profil dir commercial.
     *
     * @return bool Returns the profil dir commercial.
     */
    public function getProfilDirCommercial() {
        return $this->profilDirCommercial;
    }

    /**
     * Get the profil dir gestionnaire.
     *
     * @return bool Returns the profil dir gestionnaire.
     */
    public function getProfilDirGestionnaire() {
        return $this->profilDirGestionnaire;
    }

    /**
     * Get the profil dir somnolent.
     *
     * @return bool Returns the profil dir somnolent.
     */
    public function getProfilDirSomnolent() {
        return $this->profilDirSomnolent;
    }

    /**
     * Get the profil dir technicien.
     *
     * @return bool Returns the profil dir technicien.
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
     * @return bool Returns the prospect.
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
     * @return bool Returns the releve facture.
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
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
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
     * @return bool Returns the service cpta.
     */
    public function getServiceCpta() {
        return $this->serviceCpta;
    }

    /**
     * Get the siege groupe.
     *
     * @return bool Returns the siege groupe.
     */
    public function getSiegeGroupe() {
        return $this->siegeGroupe;
    }

    /**
     * Get the social.
     *
     * @return bool Returns the social.
     */
    public function getSocial() {
        return $this->social;
    }

    /**
     * Get the social btq.
     *
     * @return string Returns the social btq.
     */
    public function getSocialBtq() {
        return $this->socialBtq;
    }

    /**
     * Get the social bureau distributeur.
     *
     * @return string Returns the social bureau distributeur.
     */
    public function getSocialBureauDistributeur() {
        return $this->socialBureauDistributeur;
    }

    /**
     * Get the social code officiel commune.
     *
     * @return string Returns the social code officiel commune.
     */
    public function getSocialCodeOfficielCommune() {
        return $this->socialCodeOfficielCommune;
    }

    /**
     * Get the social code postal.
     *
     * @return string Returns the social code postal.
     */
    public function getSocialCodePostal() {
        return $this->socialCodePostal;
    }

    /**
     * Get the social complement.
     *
     * @return string Returns the social complement.
     */
    public function getSocialComplement() {
        return $this->socialComplement;
    }

    /**
     * Get the social nom rs.
     *
     * @return string Returns the social nom rs.
     */
    public function getSocialNomRs() {
        return $this->socialNomRs;
    }

    /**
     * Get the social nom ville.
     *
     * @return string Returns the social nom ville.
     */
    public function getSocialNomVille() {
        return $this->socialNomVille;
    }

    /**
     * Get the social nom voie.
     *
     * @return string Returns the social nom voie.
     */
    public function getSocialNomVoie() {
        return $this->socialNomVoie;
    }

    /**
     * Get the social num voie.
     *
     * @return string Returns the social num voie.
     */
    public function getSocialNumVoie() {
        return $this->socialNumVoie;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool Returns the soumis escompte.
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
     * Get the soumis taxe1.
     *
     * @return bool Returns the soumis taxe1.
     */
    public function getSoumisTaxe1() {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return bool Returns the soumis taxe2.
     */
    public function getSoumisTaxe2() {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return bool Returns the soumis taxe3.
     */
    public function getSoumisTaxe3() {
        return $this->soumisTaxe3;
    }

    /**
     * Get the soumis taxe4.
     *
     * @return bool Returns the soumis taxe4.
     */
    public function getSoumisTaxe4() {
        return $this->soumisTaxe4;
    }

    /**
     * Get the soumis taxe5.
     *
     * @return bool Returns the soumis taxe5.
     */
    public function getSoumisTaxe5() {
        return $this->soumisTaxe5;
    }

    /**
     * Get the soumis tva.
     *
     * @return bool Returns the soumis tva.
     */
    public function getSoumisTva() {
        return $this->soumisTva;
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
     * Get the tva regime.
     *
     * @return string Returns the tva regime.
     */
    public function getTvaRegime() {
        return $this->tvaRegime;
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
     * Get the type edit bl.
     *
     * @return string Returns the type edit bl.
     */
    public function getTypeEditBl() {
        return $this->typeEditBl;
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
     * Get the type gestion etebac.
     *
     * @return string Returns the type gestion etebac.
     */
    public function getTypeGestionEtebac() {
        return $this->typeGestionEtebac;
    }

    /**
     * Get the use adresse fact.
     *
     * @return bool Returns the use adresse fact.
     */
    public function getUseAdresseFact() {
        return $this->useAdresseFact;
    }

    /**
     * Get the use corres sociale.
     *
     * @return bool Returns the use corres sociale.
     */
    public function getUseCorresSociale() {
        return $this->useCorresSociale;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the activite nouvelle.
     *
     * @param bool $activiteNouvelle The activite nouvelle.
     */
    public function setActiviteNouvelle($activiteNouvelle) {
        $this->activiteNouvelle = $activiteNouvelle;
        return $this;
    }

    /**
     * Set the activite saiso.
     *
     * @param bool $activiteSaiso The activite saiso.
     */
    public function setActiviteSaiso($activiteSaiso) {
        $this->activiteSaiso = $activiteSaiso;
        return $this;
    }

    /**
     * Set the adresse site client.
     *
     * @param string $adresseSiteClient The adresse site client.
     */
    public function setAdresseSiteClient($adresseSiteClient) {
        $this->adresseSiteClient = $adresseSiteClient;
        return $this;
    }

    /**
     * Set the article port1.
     *
     * @param string $articlePort1 The article port1.
     */
    public function setArticlePort1($articlePort1) {
        $this->articlePort1 = $articlePort1;
        return $this;
    }

    /**
     * Set the article port2.
     *
     * @param string $articlePort2 The article port2.
     */
    public function setArticlePort2($articlePort2) {
        $this->articlePort2 = $articlePort2;
        return $this;
    }

    /**
     * Set the assurance.
     *
     * @param bool $assurance The assurance.
     */
    public function setAssurance($assurance) {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the bibliotheque novaxel.
     *
     * @param string $bibliothequeNovaxel The bibliotheque novaxel.
     */
    public function setBibliothequeNovaxel($bibliothequeNovaxel) {
        $this->bibliothequeNovaxel = $bibliothequeNovaxel;
        return $this;
    }

    /**
     * Set the bl chiffre.
     *
     * @param bool $blChiffre The bl chiffre.
     */
    public function setBlChiffre($blChiffre) {
        $this->blChiffre = $blChiffre;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param bool $bloque The bloque.
     */
    public function setBloque($bloque) {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the cde auto manu.
     *
     * @param string $cdeAutoManu The cde auto manu.
     */
    public function setCdeAutoManu($cdeAutoManu) {
        $this->cdeAutoManu = $cdeAutoManu;
        return $this;
    }

    /**
     * Set the cga.
     *
     * @param bool $cga The cga.
     */
    public function setCga($cga) {
        $this->cga = $cga;
        return $this;
    }

    /**
     * Set the charges.
     *
     * @param string $charges The charges.
     */
    public function setCharges($charges) {
        $this->charges = $charges;
        return $this;
    }

    /**
     * Set the chiffre affaire.
     *
     * @param float $chiffreAffaire The chiffre affaire.
     */
    public function setChiffreAffaire($chiffreAffaire) {
        $this->chiffreAffaire = $chiffreAffaire;
        return $this;
    }

    /**
     * Set the cle alpha.
     *
     * @param string $cleAlpha The cle alpha.
     */
    public function setCleAlpha($cleAlpha) {
        $this->cleAlpha = $cleAlpha;
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
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code agence.
     *
     * @param string $codeAgence The code agence.
     */
    public function setCodeAgence($codeAgence) {
        $this->codeAgence = $codeAgence;
        return $this;
    }

    /**
     * Set the code article cotisation.
     *
     * @param string $codeArticleCotisation The code article cotisation.
     */
    public function setCodeArticleCotisation($codeArticleCotisation) {
        $this->codeArticleCotisation = $codeArticleCotisation;
        return $this;
    }

    /**
     * Set the code article droit fixe.
     *
     * @param string $codeArticleDroitFixe The code article droit fixe.
     */
    public function setCodeArticleDroitFixe($codeArticleDroitFixe) {
        $this->codeArticleDroitFixe = $codeArticleDroitFixe;
        return $this;
    }

    /**
     * Set the code article frais fixe.
     *
     * @param string $codeArticleFraisFixe The code article frais fixe.
     */
    public function setCodeArticleFraisFixe($codeArticleFraisFixe) {
        $this->codeArticleFraisFixe = $codeArticleFraisFixe;
        return $this;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string $codeAssistantJuridique The code assistant juridique.
     */
    public function setCodeAssistantJuridique($codeAssistantJuridique) {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string $codeAssistantSocial The code assistant social.
     */
    public function setCodeAssistantSocial($codeAssistantSocial) {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string $codeAutre1 The code autre1.
     */
    public function setCodeAutre1($codeAutre1) {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string $codeAutre2 The code autre2.
     */
    public function setCodeAutre2($codeAutre2) {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }

    /**
     * Set the code avocat.
     *
     * @param string $codeAvocat The code avocat.
     */
    public function setCodeAvocat($codeAvocat) {
        $this->codeAvocat = $codeAvocat;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param bool $codeBarre The code barre.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code categorie client.
     *
     * @param string $codeCategorieClient The code categorie client.
     */
    public function setCodeCategorieClient($codeCategorieClient) {
        $this->codeCategorieClient = $codeCategorieClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string $codeClientFact The code client fact.
     */
    public function setCodeClientFact($codeClientFact) {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code client livr.
     *
     * @param string $codeClientLivr The code client livr.
     */
    public function setCodeClientLivr($codeClientLivr) {
        $this->codeClientLivr = $codeClientLivr;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
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
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code edition fact.
     *
     * @param string $codeEditionFact The code edition fact.
     */
    public function setCodeEditionFact($codeEditionFact) {
        $this->codeEditionFact = $codeEditionFact;
        return $this;
    }

    /**
     * Set the code exc.
     *
     * @param string $codeExc The code exc.
     */
    public function setCodeExc($codeExc) {
        $this->codeExc = $codeExc;
        return $this;
    }

    /**
     * Set the code expert.
     *
     * @param string $codeExpert The code expert.
     */
    public function setCodeExpert($codeExpert) {
        $this->codeExpert = $codeExpert;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string $codeFactor The code factor.
     */
    public function setCodeFactor($codeFactor) {
        $this->codeFactor = $codeFactor;
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
     * Set the code geo.
     *
     * @param string $codeGeo The code geo.
     */
    public function setCodeGeo($codeGeo) {
        $this->codeGeo = $codeGeo;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string $codeImputationAnalytique The code imputation analytique.
     */
    public function setCodeImputationAnalytique($codeImputationAnalytique) {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string $codeLangueDesignationArticle The code langue designation article.
     */
    public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code mission frais fixe.
     *
     * @param string $codeMissionFraisFixe The code mission frais fixe.
     */
    public function setCodeMissionFraisFixe($codeMissionFraisFixe) {
        $this->codeMissionFraisFixe = $codeMissionFraisFixe;
        return $this;
    }

    /**
     * Set the code origine.
     *
     * @param string $codeOrigine The code origine.
     */
    public function setCodeOrigine($codeOrigine) {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }

    /**
     * Set the code pays corres.
     *
     * @param string $codePaysCorres The code pays corres.
     */
    public function setCodePaysCorres($codePaysCorres) {
        $this->codePaysCorres = $codePaysCorres;
        return $this;
    }

    /**
     * Set the code pays fact.
     *
     * @param string $codePaysFact The code pays fact.
     */
    public function setCodePaysFact($codePaysFact) {
        $this->codePaysFact = $codePaysFact;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string $codePortefeuille The code portefeuille.
     */
    public function setCodePortefeuille($codePortefeuille) {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }

    /**
     * Set the code recette impots.
     *
     * @param string $codeRecetteImpots The code recette impots.
     */
    public function setCodeRecetteImpots($codeRecetteImpots) {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string $codeReglement The code reglement.
     */
    public function setCodeReglement($codeReglement) {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code representant.
     *
     * @param string $codeRepresentant The code representant.
     */
    public function setCodeRepresentant($codeRepresentant) {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }

    /**
     * Set the code revision.
     *
     * @param string $codeRevision The code revision.
     */
    public function setCodeRevision($codeRevision) {
        $this->codeRevision = $codeRevision;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string $codeSousFamille The code sous famille.
     */
    public function setCodeSousFamille($codeSousFamille) {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code sous tournee.
     *
     * @param string $codeSousTournee The code sous tournee.
     */
    public function setCodeSousTournee($codeSousTournee) {
        $this->codeSousTournee = $codeSousTournee;
        return $this;
    }

    /**
     * Set the code tarif.
     *
     * @param string $codeTarif The code tarif.
     */
    public function setCodeTarif($codeTarif) {
        $this->codeTarif = $codeTarif;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string $codeTournee The code tournee.
     */
    public function setCodeTournee($codeTournee) {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the code transporteur.
     *
     * @param string $codeTransporteur The code transporteur.
     */
    public function setCodeTransporteur($codeTransporteur) {
        $this->codeTransporteur = $codeTransporteur;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
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
     * Set the coef sur pv.
     *
     * @param float $coefSurPv The coef sur pv.
     */
    public function setCoefSurPv($coefSurPv) {
        $this->coefSurPv = $coefSurPv;
        return $this;
    }

    /**
     * Set the coeff pv client.
     *
     * @param float $coeffPvClient The coeff pv client.
     */
    public function setCoeffPvClient($coeffPvClient) {
        $this->coeffPvClient = $coeffPvClient;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the conjoint.
     *
     * @param string $conjoint The conjoint.
     */
    public function setConjoint($conjoint) {
        $this->conjoint = $conjoint;
        return $this;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string $contactRecetteImpots The contact recette impots.
     */
    public function setContactRecetteImpots($contactRecetteImpots) {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }

    /**
     * Set the date attrib encours.
     *
     * @param DateTime|null $dateAttribEncours The date attrib encours.
     */
    public function setDateAttribEncours(DateTime $dateAttribEncours = null) {
        $this->dateAttribEncours = $dateAttribEncours;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date deb activite.
     *
     * @param DateTime|null $dateDebActivite The date deb activite.
     */
    public function setDateDebActivite(DateTime $dateDebActivite = null) {
        $this->dateDebActivite = $dateDebActivite;
        return $this;
    }

    /**
     * Set the date deb prof.
     *
     * @param DateTime|null $dateDebProf The date deb prof.
     */
    public function setDateDebProf(DateTime $dateDebProf = null) {
        $this->dateDebProf = $dateDebProf;
        return $this;
    }

    /**
     * Set the date derniere vente.
     *
     * @param DateTime|null $dateDerniereVente The date derniere vente.
     */
    public function setDateDerniereVente(DateTime $dateDerniereVente = null) {
        $this->dateDerniereVente = $dateDerniereVente;
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
     * Set the date fin activite.
     *
     * @param DateTime|null $dateFinActivite The date fin activite.
     */
    public function setDateFinActivite(DateTime $dateFinActivite = null) {
        $this->dateFinActivite = $dateFinActivite;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date reprise.
     *
     * @param DateTime|null $dateReprise The date reprise.
     */
    public function setDateReprise(DateTime $dateReprise = null) {
        $this->dateReprise = $dateReprise;
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
     * Set the delai tarif.
     *
     * @param int $delaiTarif The delai tarif.
     */
    public function setDelaiTarif($delaiTarif) {
        $this->delaiTarif = $delaiTarif;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the dossier comptable.
     *
     * @param string $dossierComptable The dossier comptable.
     */
    public function setDossierComptable($dossierComptable) {
        $this->dossierComptable = $dossierComptable;
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
     * Set the ds code collab.
     *
     * @param string $dsCodeCollab The ds code collab.
     */
    public function setDsCodeCollab($dsCodeCollab) {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     */
    public function setDsDateRetour(DateTime $dsDateRetour = null) {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     */
    public function setDsDateSortie(DateTime $dsDateSortie = null) {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the du client.
     *
     * @param string $duClient The du client.
     */
    public function setDuClient($duClient) {
        $this->duClient = $duClient;
        return $this;
    }

    /**
     * Set the duree echeances.
     *
     * @param string $dureeEcheances The duree echeances.
     */
    public function setDureeEcheances($dureeEcheances) {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }

    /**
     * Set the effectif etp.
     *
     * @param int $effectifEtp The effectif etp.
     */
    public function setEffectifEtp($effectifEtp) {
        $this->effectifEtp = $effectifEtp;
        return $this;
    }

    /**
     * Set the election ce.
     *
     * @param DateTime|null $electionCe The election ce.
     */
    public function setElectionCe(DateTime $electionCe = null) {
        $this->electionCe = $electionCe;
        return $this;
    }

    /**
     * Set the election delegue personnel.
     *
     * @param DateTime|null $electionDeleguePersonnel The election delegue personnel.
     */
    public function setElectionDeleguePersonnel(DateTime $electionDeleguePersonnel = null) {
        $this->electionDeleguePersonnel = $electionDeleguePersonnel;
        return $this;
    }

    /**
     * Set the equip info.
     *
     * @param string $equipInfo The equip info.
     */
    public function setEquipInfo($equipInfo) {
        $this->equipInfo = $equipInfo;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string $etat1 The etat1.
     */
    public function setEtat1($etat1) {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string $etat2 The etat2.
     */
    public function setEtat2($etat2) {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string $etat3 The etat3.
     */
    public function setEtat3($etat3) {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string $etat4 The etat4.
     */
    public function setEtat4($etat4) {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string $etat5 The etat5.
     */
    public function setEtat5($etat5) {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the etiquettes.
     *
     * @param bool $etiquettes The etiquettes.
     */
    public function setEtiquettes($etiquettes) {
        $this->etiquettes = $etiquettes;
        return $this;
    }

    /**
     * Set the fact btq.
     *
     * @param string $factBtq The fact btq.
     */
    public function setFactBtq($factBtq) {
        $this->factBtq = $factBtq;
        return $this;
    }

    /**
     * Set the fact bureau distributeur.
     *
     * @param string $factBureauDistributeur The fact bureau distributeur.
     */
    public function setFactBureauDistributeur($factBureauDistributeur) {
        $this->factBureauDistributeur = $factBureauDistributeur;
        return $this;
    }

    /**
     * Set the fact code officiel commune.
     *
     * @param string $factCodeOfficielCommune The fact code officiel commune.
     */
    public function setFactCodeOfficielCommune($factCodeOfficielCommune) {
        $this->factCodeOfficielCommune = $factCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the fact code postal.
     *
     * @param string $factCodePostal The fact code postal.
     */
    public function setFactCodePostal($factCodePostal) {
        $this->factCodePostal = $factCodePostal;
        return $this;
    }

    /**
     * Set the fact complement.
     *
     * @param string $factComplement The fact complement.
     */
    public function setFactComplement($factComplement) {
        $this->factComplement = $factComplement;
        return $this;
    }

    /**
     * Set the fact nom rs.
     *
     * @param string $factNomRs The fact nom rs.
     */
    public function setFactNomRs($factNomRs) {
        $this->factNomRs = $factNomRs;
        return $this;
    }

    /**
     * Set the fact nom ville.
     *
     * @param string $factNomVille The fact nom ville.
     */
    public function setFactNomVille($factNomVille) {
        $this->factNomVille = $factNomVille;
        return $this;
    }

    /**
     * Set the fact nom voie.
     *
     * @param string $factNomVoie The fact nom voie.
     */
    public function setFactNomVoie($factNomVoie) {
        $this->factNomVoie = $factNomVoie;
        return $this;
    }

    /**
     * Set the fact num voie.
     *
     * @param string $factNumVoie The fact num voie.
     */
    public function setFactNumVoie($factNumVoie) {
        $this->factNumVoie = $factNumVoie;
        return $this;
    }

    /**
     * Set the facturation compta.
     *
     * @param DateTime|null $facturationCompta The facturation compta.
     */
    public function setFacturationCompta(DateTime $facturationCompta = null) {
        $this->facturationCompta = $facturationCompta;
        return $this;
    }

    /**
     * Set the facturation compta prec.
     *
     * @param DateTime|null $facturationComptaPrec The facturation compta prec.
     */
    public function setFacturationComptaPrec(DateTime $facturationComptaPrec = null) {
        $this->facturationComptaPrec = $facturationComptaPrec;
        return $this;
    }

    /**
     * Set the facturation cotisation.
     *
     * @param bool $facturationCotisation The facturation cotisation.
     */
    public function setFacturationCotisation($facturationCotisation) {
        $this->facturationCotisation = $facturationCotisation;
        return $this;
    }

    /**
     * Set the facturation droit fixe.
     *
     * @param bool $facturationDroitFixe The facturation droit fixe.
     */
    public function setFacturationDroitFixe($facturationDroitFixe) {
        $this->facturationDroitFixe = $facturationDroitFixe;
        return $this;
    }

    /**
     * Set the facturation frais fixe.
     *
     * @param bool $facturationFraisFixe The facturation frais fixe.
     */
    public function setFacturationFraisFixe($facturationFraisFixe) {
        $this->facturationFraisFixe = $facturationFraisFixe;
        return $this;
    }

    /**
     * Set the facturation paie.
     *
     * @param DateTime|null $facturationPaie The facturation paie.
     */
    public function setFacturationPaie(DateTime $facturationPaie = null) {
        $this->facturationPaie = $facturationPaie;
        return $this;
    }

    /**
     * Set the facturation paie prec.
     *
     * @param DateTime|null $facturationPaiePrec The facturation paie prec.
     */
    public function setFacturationPaiePrec(DateTime $facturationPaiePrec = null) {
        $this->facturationPaiePrec = $facturationPaiePrec;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool $factureEuros The facture euros.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool $factureIsolee The facture isolee.
     */
    public function setFactureIsolee($factureIsolee) {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the facture temps passes.
     *
     * @param bool $factureTempsPasses The facture temps passes.
     */
    public function setFactureTempsPasses($factureTempsPasses) {
        $this->factureTempsPasses = $factureTempsPasses;
        return $this;
    }

    /**
     * Set the factures mail.
     *
     * @param bool $facturesMail The factures mail.
     */
    public function setFacturesMail($facturesMail) {
        $this->facturesMail = $facturesMail;
        return $this;
    }

    /**
     * Set the fortement impose.
     *
     * @param string $fortementImpose The fortement impose.
     */
    public function setFortementImpose($fortementImpose) {
        $this->fortementImpose = $fortementImpose;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param bool $fraisFixes1 The frais fixes1.
     */
    public function setFraisFixes1($fraisFixes1) {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param bool $fraisFixes2 The frais fixes2.
     */
    public function setFraisFixes2($fraisFixes2) {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the franco port1.
     *
     * @param float $francoPort1 The franco port1.
     */
    public function setFrancoPort1($francoPort1) {
        $this->francoPort1 = $francoPort1;
        return $this;
    }

    /**
     * Set the franco port2.
     *
     * @param float $francoPort2 The franco port2.
     */
    public function setFrancoPort2($francoPort2) {
        $this->francoPort2 = $francoPort2;
        return $this;
    }

    /**
     * Set the heure appel.
     *
     * @param string $heureAppel The heure appel.
     */
    public function setHeureAppel($heureAppel) {
        $this->heureAppel = $heureAppel;
        return $this;
    }

    /**
     * Set the identifiant tva.
     *
     * @param string $identifiantTva The identifiant tva.
     */
    public function setIdentifiantTva($identifiantTva) {
        $this->identifiantTva = $identifiantTva;
        return $this;
    }

    /**
     * Set the indice factures mail.
     *
     * @param int $indiceFacturesMail The indice factures mail.
     */
    public function setIndiceFacturesMail($indiceFacturesMail) {
        $this->indiceFacturesMail = $indiceFacturesMail;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string $insp The insp.
     */
    public function setInsp($insp) {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the interesse gestion.
     *
     * @param string $interesseGestion The interesse gestion.
     */
    public function setInteresseGestion($interesseGestion) {
        $this->interesseGestion = $interesseGestion;
        return $this;
    }

    /**
     * Set the mensualisation actif.
     *
     * @param bool $mensualisationActif The mensualisation actif.
     */
    public function setMensualisationActif($mensualisationActif) {
        $this->mensualisationActif = $mensualisationActif;
        return $this;
    }

    /**
     * Set the mensualisation au.
     *
     * @param DateTime|null $mensualisationAu The mensualisation au.
     */
    public function setMensualisationAu(DateTime $mensualisationAu = null) {
        $this->mensualisationAu = $mensualisationAu;
        return $this;
    }

    /**
     * Set the mensualisation du.
     *
     * @param DateTime|null $mensualisationDu The mensualisation du.
     */
    public function setMensualisationDu(DateTime $mensualisationDu = null) {
        $this->mensualisationDu = $mensualisationDu;
        return $this;
    }

    /**
     * Set the mensualisation frequence.
     *
     * @param string $mensualisationFrequence The mensualisation frequence.
     */
    public function setMensualisationFrequence($mensualisationFrequence) {
        $this->mensualisationFrequence = $mensualisationFrequence;
        return $this;
    }

    /**
     * Set the mensualisation montant.
     *
     * @param float $mensualisationMontant The mensualisation montant.
     */
    public function setMensualisationMontant($mensualisationMontant) {
        $this->mensualisationMontant = $mensualisationMontant;
        return $this;
    }

    /**
     * Set the mission sur dossier.
     *
     * @param int $missionSurDossier The mission sur dossier.
     */
    public function setMissionSurDossier($missionSurDossier) {
        $this->missionSurDossier = $missionSurDossier;
        return $this;
    }

    /**
     * Set the modele bl.
     *
     * @param string $modeleBl The modele bl.
     */
    public function setModeleBl($modeleBl) {
        $this->modeleBl = $modeleBl;
        return $this;
    }

    /**
     * Set the modele commande.
     *
     * @param string $modeleCommande The modele commande.
     */
    public function setModeleCommande($modeleCommande) {
        $this->modeleCommande = $modeleCommande;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string $modeleFacture The modele facture.
     */
    public function setModeleFacture($modeleFacture) {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the modele proformas.
     *
     * @param string $modeleProformas The modele proformas.
     */
    public function setModeleProformas($modeleProformas) {
        $this->modeleProformas = $modeleProformas;
        return $this;
    }

    /**
     * Set the modele releve.
     *
     * @param string $modeleReleve The modele releve.
     */
    public function setModeleReleve($modeleReleve) {
        $this->modeleReleve = $modeleReleve;
        return $this;
    }

    /**
     * Set the mois cloture.
     *
     * @param string $moisCloture The mois cloture.
     */
    public function setMoisCloture($moisCloture) {
        $this->moisCloture = $moisCloture;
        return $this;
    }

    /**
     * Set the mois cotisation.
     *
     * @param int $moisCotisation The mois cotisation.
     */
    public function setMoisCotisation($moisCotisation) {
        $this->moisCotisation = $moisCotisation;
        return $this;
    }

    /**
     * Set the mois droit fixe.
     *
     * @param int $moisDroitFixe The mois droit fixe.
     */
    public function setMoisDroitFixe($moisDroitFixe) {
        $this->moisDroitFixe = $moisDroitFixe;
        return $this;
    }

    /**
     * Set the mt cmd non fact.
     *
     * @param float $mtCmdNonFact The mt cmd non fact.
     */
    public function setMtCmdNonFact($mtCmdNonFact) {
        $this->mtCmdNonFact = $mtCmdNonFact;
        return $this;
    }

    /**
     * Set the mt encours.
     *
     * @param float $mtEncours The mt encours.
     */
    public function setMtEncours($mtEncours) {
        $this->mtEncours = $mtEncours;
        return $this;
    }

    /**
     * Set the mt encours autorise.
     *
     * @param float $mtEncoursAutorise The mt encours autorise.
     */
    public function setMtEncoursAutorise($mtEncoursAutorise) {
        $this->mtEncoursAutorise = $mtEncoursAutorise;
        return $this;
    }

    /**
     * Set the nb appels en cours.
     *
     * @param int $nbAppelsEnCours The nb appels en cours.
     */
    public function setNbAppelsEnCours($nbAppelsEnCours) {
        $this->nbAppelsEnCours = $nbAppelsEnCours;
        return $this;
    }

    /**
     * Set the nb bl.
     *
     * @param string $nbBl The nb bl.
     */
    public function setNbBl($nbBl) {
        $this->nbBl = $nbBl;
        return $this;
    }

    /**
     * Set the nb bl non chiffres.
     *
     * @param int $nbBlNonChiffres The nb bl non chiffres.
     */
    public function setNbBlNonChiffres($nbBlNonChiffres) {
        $this->nbBlNonChiffres = $nbBlNonChiffres;
        return $this;
    }

    /**
     * Set the nb commande.
     *
     * @param string $nbCommande The nb commande.
     */
    public function setNbCommande($nbCommande) {
        $this->nbCommande = $nbCommande;
        return $this;
    }

    /**
     * Set the nb devis.
     *
     * @param string $nbDevis The nb devis.
     */
    public function setNbDevis($nbDevis) {
        $this->nbDevis = $nbDevis;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param string $nbFacture The nb facture.
     */
    public function setNbFacture($nbFacture) {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nb jour interval.
     *
     * @param int $nbJourInterval The nb jour interval.
     */
    public function setNbJourInterval($nbJourInterval) {
        $this->nbJourInterval = $nbJourInterval;
        return $this;
    }

    /**
     * Set the nb max bl.
     *
     * @param string $nbMaxBl The nb max bl.
     */
    public function setNbMaxBl($nbMaxBl) {
        $this->nbMaxBl = $nbMaxBl;
        return $this;
    }

    /**
     * Set the nb releve.
     *
     * @param string $nbReleve The nb releve.
     */
    public function setNbReleve($nbReleve) {
        $this->nbReleve = $nbReleve;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the nombre mois exercice.
     *
     * @param string $nombreMoisExercice The nombre mois exercice.
     */
    public function setNombreMoisExercice($nombreMoisExercice) {
        $this->nombreMoisExercice = $nombreMoisExercice;
        return $this;
    }

    /**
     * Set the notoriete.
     *
     * @param string $notoriete The notoriete.
     */
    public function setNotoriete($notoriete) {
        $this->notoriete = $notoriete;
        return $this;
    }

    /**
     * Set the num web adherent.
     *
     * @param string $numWebAdherent The num web adherent.
     */
    public function setNumWebAdherent($numWebAdherent) {
        $this->numWebAdherent = $numWebAdherent;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observation1.
     *
     * @param string $observation1 The observation1.
     */
    public function setObservation1($observation1) {
        $this->observation1 = $observation1;
        return $this;
    }

    /**
     * Set the observation2.
     *
     * @param string $observation2 The observation2.
     */
    public function setObservation2($observation2) {
        $this->observation2 = $observation2;
        return $this;
    }

    /**
     * Set the observation3.
     *
     * @param string $observation3 The observation3.
     */
    public function setObservation3($observation3) {
        $this->observation3 = $observation3;
        return $this;
    }

    /**
     * Set the occasionnel.
     *
     * @param bool $occasionnel The occasionnel.
     */
    public function setOccasionnel($occasionnel) {
        $this->occasionnel = $occasionnel;
        return $this;
    }

    /**
     * Set the organisation adm.
     *
     * @param string $organisationAdm The organisation adm.
     */
    public function setOrganisationAdm($organisationAdm) {
        $this->organisationAdm = $organisationAdm;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int $paiementDepartLe The paiement depart le.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string $paiementLe The paiement le.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the pas productif.
     *
     * @param bool $pasProductif The pas productif.
     */
    public function setPasProductif($pasProductif) {
        $this->pasProductif = $pasProductif;
        return $this;
    }

    /**
     * Set the pas taches operationnelles.
     *
     * @param bool $pasTachesOperationnelles The pas taches operationnelles.
     */
    public function setPasTachesOperationnelles($pasTachesOperationnelles) {
        $this->pasTachesOperationnelles = $pasTachesOperationnelles;
        return $this;
    }

    /**
     * Set the patrimoine.
     *
     * @param string $patrimoine The patrimoine.
     */
    public function setPatrimoine($patrimoine) {
        $this->patrimoine = $patrimoine;
        return $this;
    }

    /**
     * Set the prelevements perso.
     *
     * @param string $prelevementsPerso The prelevements perso.
     */
    public function setPrelevementsPerso($prelevementsPerso) {
        $this->prelevementsPerso = $prelevementsPerso;
        return $this;
    }

    /**
     * Set the prescripteur.
     *
     * @param string $prescripteur The prescripteur.
     */
    public function setPrescripteur($prescripteur) {
        $this->prescripteur = $prescripteur;
        return $this;
    }

    /**
     * Set the previsionnel.
     *
     * @param string $previsionnel The previsionnel.
     */
    public function setPrevisionnel($previsionnel) {
        $this->previsionnel = $previsionnel;
        return $this;
    }

    /**
     * Set the prioritaire.
     *
     * @param bool $prioritaire The prioritaire.
     */
    public function setPrioritaire($prioritaire) {
        $this->prioritaire = $prioritaire;
        return $this;
    }

    /**
     * Set the profil dir anxieux.
     *
     * @param bool $profilDirAnxieux The profil dir anxieux.
     */
    public function setProfilDirAnxieux($profilDirAnxieux) {
        $this->profilDirAnxieux = $profilDirAnxieux;
        return $this;
    }

    /**
     * Set the profil dir commercial.
     *
     * @param bool $profilDirCommercial The profil dir commercial.
     */
    public function setProfilDirCommercial($profilDirCommercial) {
        $this->profilDirCommercial = $profilDirCommercial;
        return $this;
    }

    /**
     * Set the profil dir gestionnaire.
     *
     * @param bool $profilDirGestionnaire The profil dir gestionnaire.
     */
    public function setProfilDirGestionnaire($profilDirGestionnaire) {
        $this->profilDirGestionnaire = $profilDirGestionnaire;
        return $this;
    }

    /**
     * Set the profil dir somnolent.
     *
     * @param bool $profilDirSomnolent The profil dir somnolent.
     */
    public function setProfilDirSomnolent($profilDirSomnolent) {
        $this->profilDirSomnolent = $profilDirSomnolent;
        return $this;
    }

    /**
     * Set the profil dir technicien.
     *
     * @param bool $profilDirTechnicien The profil dir technicien.
     */
    public function setProfilDirTechnicien($profilDirTechnicien) {
        $this->profilDirTechnicien = $profilDirTechnicien;
        return $this;
    }

    /**
     * Set the profil ent.
     *
     * @param string $profilEnt The profil ent.
     */
    public function setProfilEnt($profilEnt) {
        $this->profilEnt = $profilEnt;
        return $this;
    }

    /**
     * Set the prospect.
     *
     * @param bool $prospect The prospect.
     */
    public function setProspect($prospect) {
        $this->prospect = $prospect;
        return $this;
    }

    /**
     * Set the qualite paiement.
     *
     * @param string $qualitePaiement The qualite paiement.
     */
    public function setQualitePaiement($qualitePaiement) {
        $this->qualitePaiement = $qualitePaiement;
        return $this;
    }

    /**
     * Set the raison fin activite.
     *
     * @param string $raisonFinActivite The raison fin activite.
     */
    public function setRaisonFinActivite($raisonFinActivite) {
        $this->raisonFinActivite = $raisonFinActivite;
        return $this;
    }

    /**
     * Set the raison mv paiement.
     *
     * @param string $raisonMvPaiement The raison mv paiement.
     */
    public function setRaisonMvPaiement($raisonMvPaiement) {
        $this->raisonMvPaiement = $raisonMvPaiement;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string $regime The regime.
     */
    public function setRegime($regime) {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regroupement fact.
     *
     * @param string $regroupementFact The regroupement fact.
     */
    public function setRegroupementFact($regroupementFact) {
        $this->regroupementFact = $regroupementFact;
        return $this;
    }

    /**
     * Set the relation cabinet.
     *
     * @param string $relationCabinet The relation cabinet.
     */
    public function setRelationCabinet($relationCabinet) {
        $this->relationCabinet = $relationCabinet;
        return $this;
    }

    /**
     * Set the releve facture.
     *
     * @param bool $releveFacture The releve facture.
     */
    public function setReleveFacture($releveFacture) {
        $this->releveFacture = $releveFacture;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float $remisePied2 The remise pied2.
     */
    public function setRemisePied2($remisePied2) {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float $remisePied3 The remise pied3.
     */
    public function setRemisePied3($remisePied3) {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param float $resultat The resultat.
     */
    public function setResultat($resultat) {
        $this->resultat = $resultat;
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
     * Set the sante financiere.
     *
     * @param string $santeFinanciere The sante financiere.
     */
    public function setSanteFinanciere($santeFinanciere) {
        $this->santeFinanciere = $santeFinanciere;
        return $this;
    }

    /**
     * Set the service cpta.
     *
     * @param bool $serviceCpta The service cpta.
     */
    public function setServiceCpta($serviceCpta) {
        $this->serviceCpta = $serviceCpta;
        return $this;
    }

    /**
     * Set the siege groupe.
     *
     * @param bool $siegeGroupe The siege groupe.
     */
    public function setSiegeGroupe($siegeGroupe) {
        $this->siegeGroupe = $siegeGroupe;
        return $this;
    }

    /**
     * Set the social.
     *
     * @param bool $social The social.
     */
    public function setSocial($social) {
        $this->social = $social;
        return $this;
    }

    /**
     * Set the social btq.
     *
     * @param string $socialBtq The social btq.
     */
    public function setSocialBtq($socialBtq) {
        $this->socialBtq = $socialBtq;
        return $this;
    }

    /**
     * Set the social bureau distributeur.
     *
     * @param string $socialBureauDistributeur The social bureau distributeur.
     */
    public function setSocialBureauDistributeur($socialBureauDistributeur) {
        $this->socialBureauDistributeur = $socialBureauDistributeur;
        return $this;
    }

    /**
     * Set the social code officiel commune.
     *
     * @param string $socialCodeOfficielCommune The social code officiel commune.
     */
    public function setSocialCodeOfficielCommune($socialCodeOfficielCommune) {
        $this->socialCodeOfficielCommune = $socialCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the social code postal.
     *
     * @param string $socialCodePostal The social code postal.
     */
    public function setSocialCodePostal($socialCodePostal) {
        $this->socialCodePostal = $socialCodePostal;
        return $this;
    }

    /**
     * Set the social complement.
     *
     * @param string $socialComplement The social complement.
     */
    public function setSocialComplement($socialComplement) {
        $this->socialComplement = $socialComplement;
        return $this;
    }

    /**
     * Set the social nom rs.
     *
     * @param string $socialNomRs The social nom rs.
     */
    public function setSocialNomRs($socialNomRs) {
        $this->socialNomRs = $socialNomRs;
        return $this;
    }

    /**
     * Set the social nom ville.
     *
     * @param string $socialNomVille The social nom ville.
     */
    public function setSocialNomVille($socialNomVille) {
        $this->socialNomVille = $socialNomVille;
        return $this;
    }

    /**
     * Set the social nom voie.
     *
     * @param string $socialNomVoie The social nom voie.
     */
    public function setSocialNomVoie($socialNomVoie) {
        $this->socialNomVoie = $socialNomVoie;
        return $this;
    }

    /**
     * Set the social num voie.
     *
     * @param string $socialNumVoie The social num voie.
     */
    public function setSocialNumVoie($socialNumVoie) {
        $this->socialNumVoie = $socialNumVoie;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool $soumisEscompte The soumis escompte.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis port1.
     *
     * @param string $soumisPort1 The soumis port1.
     */
    public function setSoumisPort1($soumisPort1) {
        $this->soumisPort1 = $soumisPort1;
        return $this;
    }

    /**
     * Set the soumis port2.
     *
     * @param string $soumisPort2 The soumis port2.
     */
    public function setSoumisPort2($soumisPort2) {
        $this->soumisPort2 = $soumisPort2;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param bool $soumisTaxe1 The soumis taxe1.
     */
    public function setSoumisTaxe1($soumisTaxe1) {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool $soumisTaxe2 The soumis taxe2.
     */
    public function setSoumisTaxe2($soumisTaxe2) {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool $soumisTaxe3 The soumis taxe3.
     */
    public function setSoumisTaxe3($soumisTaxe3) {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the soumis taxe4.
     *
     * @param bool $soumisTaxe4 The soumis taxe4.
     */
    public function setSoumisTaxe4($soumisTaxe4) {
        $this->soumisTaxe4 = $soumisTaxe4;
        return $this;
    }

    /**
     * Set the soumis taxe5.
     *
     * @param bool $soumisTaxe5 The soumis taxe5.
     */
    public function setSoumisTaxe5($soumisTaxe5) {
        $this->soumisTaxe5 = $soumisTaxe5;
        return $this;
    }

    /**
     * Set the soumis tva.
     *
     * @param bool $soumisTva The soumis tva.
     */
    public function setSoumisTva($soumisTva) {
        $this->soumisTva = $soumisTva;
        return $this;
    }

    /**
     * Set the tableau de bord.
     *
     * @param string $tableauDeBord The tableau de bord.
     */
    public function setTableauDeBord($tableauDeBord) {
        $this->tableauDeBord = $tableauDeBord;
        return $this;
    }

    /**
     * Set the toutes activites.
     *
     * @param string $toutesActivites The toutes activites.
     */
    public function setToutesActivites($toutesActivites) {
        $this->toutesActivites = $toutesActivites;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string $transporteur The transporteur.
     */
    public function setTransporteur($transporteur) {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tresorerie.
     *
     * @param string $tresorerie The tresorerie.
     */
    public function setTresorerie($tresorerie) {
        $this->tresorerie = $tresorerie;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string $tvaRegime The tva regime.
     */
    public function setTvaRegime($tvaRegime) {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tx escompte vente.
     *
     * @param float $txEscompteVente The tx escompte vente.
     */
    public function setTxEscompteVente($txEscompteVente) {
        $this->txEscompteVente = $txEscompteVente;
        return $this;
    }

    /**
     * Set the type client.
     *
     * @param string $typeClient The type client.
     */
    public function setTypeClient($typeClient) {
        $this->typeClient = $typeClient;
        return $this;
    }

    /**
     * Set the type edit bl.
     *
     * @param string $typeEditBl The type edit bl.
     */
    public function setTypeEditBl($typeEditBl) {
        $this->typeEditBl = $typeEditBl;
        return $this;
    }

    /**
     * Set the type facture.
     *
     * @param int $typeFacture The type facture.
     */
    public function setTypeFacture($typeFacture) {
        $this->typeFacture = $typeFacture;
        return $this;
    }

    /**
     * Set the type gestion etebac.
     *
     * @param string $typeGestionEtebac The type gestion etebac.
     */
    public function setTypeGestionEtebac($typeGestionEtebac) {
        $this->typeGestionEtebac = $typeGestionEtebac;
        return $this;
    }

    /**
     * Set the use adresse fact.
     *
     * @param bool $useAdresseFact The use adresse fact.
     */
    public function setUseAdresseFact($useAdresseFact) {
        $this->useAdresseFact = $useAdresseFact;
        return $this;
    }

    /**
     * Set the use corres sociale.
     *
     * @param bool $useCorresSociale The use corres sociale.
     */
    public function setUseCorresSociale($useCorresSociale) {
        $this->useCorresSociale = $useCorresSociale;
        return $this;
    }
}
