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
 * Chantiers.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Chantiers {

    /**
     * Ad f bureau distributeur.
     *
     * @var string
     */
    private $adFBureauDistributeur;

    /**
     * Ad f civilite.
     *
     * @var string
     */
    private $adFCivilite;

    /**
     * Ad f code pays.
     *
     * @var string
     */
    private $adFCodePays;

    /**
     * Ad f code postal.
     *
     * @var string
     */
    private $adFCodePostal;

    /**
     * Ad f complement.
     *
     * @var string
     */
    private $adFComplement;

    /**
     * Ad f nom client.
     *
     * @var string
     */
    private $adFNomClient;

    /**
     * Ad f nom suite.
     *
     * @var string
     */
    private $adFNomSuite;

    /**
     * Ad f nom suite2.
     *
     * @var string
     */
    private $adFNomSuite2;

    /**
     * Ad f nom suite3.
     *
     * @var string
     */
    private $adFNomSuite3;

    /**
     * Ad f nom voie.
     *
     * @var string
     */
    private $adFNomVoie;

    /**
     * Ad f num voie.
     *
     * @var string
     */
    private $adFNumVoie;

    /**
     * Ad f type adresse.
     *
     * @var string
     */
    private $adFTypeAdresse;

    /**
     * Ad fbtq.
     *
     * @var string
     */
    private $adFbtq;

    /**
     * Adresse.
     *
     * @var string
     */
    private $adresse;

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Btq livraison.
     *
     * @var string
     */
    private $btqLivraison;

    /**
     * Budget commande.
     *
     * @var float
     */
    private $budgetCommande;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Bureau distributeur livraison.
     *
     * @var string
     */
    private $bureauDistributeurLivraison;

    /**
     * Chantier ponctuel.
     *
     * @var bool
     */
    private $chantierPonctuel;

    /**
     * Chef equipe.
     *
     * @var string
     */
    private $chefEquipe;

    /**
     * Cle alpha.
     *
     * @var string
     */
    private $cleAlpha;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code agence.
     *
     * @var string
     */
    private $codeAgence;

    /**
     * Code analytique.
     *
     * @var string
     */
    private $codeAnalytique;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code commercial.
     *
     * @var string
     */
    private $codeCommercial;

    /**
     * Code emp inspecteur.
     *
     * @var string
     */
    private $codeEmpInspecteur;

    /**
     * Code formule.
     *
     * @var string
     */
    private $codeFormule;

    /**
     * Code livraison.
     *
     * @var string
     */
    private $codeLivraison;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code postal livraison.
     *
     * @var string
     */
    private $codePostalLivraison;

    /**
     * Code reg marge.
     *
     * @var string
     */
    private $codeRegMarge;

    /**
     * Code revision.
     *
     * @var string
     */
    private $codeRevision;

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
     * Collectif.
     *
     * @var string
     */
    private $collectif;

    /**
     * Commande isolee.
     *
     * @var bool
     */
    private $commandeIsolee;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Complement livraison.
     *
     * @var string
     */
    private $complementLivraison;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date echeance contrat.
     *
     * @var DateTime|null
     */
    private $dateEcheanceContrat;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Descriptif.
     *
     * @var string
     */
    private $descriptif;

    /**
     * Dt avant dern prepa.
     *
     * @var DateTime|null
     */
    private $dtAvantDernPrepa;

    /**
     * Dt dern prepa.
     *
     * @var DateTime|null
     */
    private $dtDernPrepa;

    /**
     * Dt validite fact deb.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDeb;

    /**
     * Dt validite fact deb deb mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDebDebMois;

    /**
     * Dt validite fact fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFin;

    /**
     * Dt validite fact fin fin mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFinFinMois;

    /**
     * Echeance annuelle.
     *
     * @var bool
     */
    private $echeanceAnnuelle;

    /**
     * Fact negoce isolee.
     *
     * @var bool
     */
    private $factNegoceIsolee;

    /**
     * Facture isolee.
     *
     * @var bool
     */
    private $factureIsolee;

    /**
     * Jour fact.
     *
     * @var string
     */
    private $jourFact;

    /**
     * Latitude.
     *
     * @var float
     */
    private $latitude;

    /**
     * Loi chatel sur facture.
     *
     * @var bool
     */
    private $loiChatelSurFacture;

    /**
     * Longitude.
     *
     * @var float
     */
    private $longitude;

    /**
     * Maj stock by da.
     *
     * @var bool
     */
    private $majStockByDa;

    /**
     * Nb controles prevus.
     *
     * @var int
     */
    private $nbControlesPrevus;

    /**
     * Nb mois preavis.
     *
     * @var string
     */
    private $nbMoisPreavis;

    /**
     * Nom adresse.
     *
     * @var string
     */
    private $nomAdresse;

    /**
     * Nom chantier.
     *
     * @var string
     */
    private $nomChantier;

    /**
     * Nom livraison.
     *
     * @var string
     */
    private $nomLivraison;

    /**
     * Nom responsable.
     *
     * @var string
     */
    private $nomResponsable;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

    /**
     * Nom suite livraison.
     *
     * @var string
     */
    private $nomSuiteLivraison;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Nom voie livraison.
     *
     * @var string
     */
    private $nomVoieLivraison;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Num voie livraison.
     *
     * @var string
     */
    private $numVoieLivraison;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Plan fact.
     *
     * @var bool
     */
    private $planFact;

    /**
     * Pourc conso produit.
     *
     * @var float
     */
    private $pourcConsoProduit;

    /**
     * Pourc marge previs.
     *
     * @var float
     */
    private $pourcMargePrevis;

    /**
     * Reference facture.
     *
     * @var string
     */
    private $referenceFacture;

    /**
     * Reference facture2.
     *
     * @var string
     */
    private $referenceFacture2;

    /**
     * Rupt date livraison.
     *
     * @var bool
     */
    private $ruptDateLivraison;

    /**
     * Telephone.
     *
     * @var string
     */
    private $telephone;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ad f bureau distributeur.
     *
     * @return string Returns the ad f bureau distributeur.
     */
    public function getAdFBureauDistributeur() {
        return $this->adFBureauDistributeur;
    }

    /**
     * Get the ad f civilite.
     *
     * @return string Returns the ad f civilite.
     */
    public function getAdFCivilite() {
        return $this->adFCivilite;
    }

    /**
     * Get the ad f code pays.
     *
     * @return string Returns the ad f code pays.
     */
    public function getAdFCodePays() {
        return $this->adFCodePays;
    }

    /**
     * Get the ad f code postal.
     *
     * @return string Returns the ad f code postal.
     */
    public function getAdFCodePostal() {
        return $this->adFCodePostal;
    }

    /**
     * Get the ad f complement.
     *
     * @return string Returns the ad f complement.
     */
    public function getAdFComplement() {
        return $this->adFComplement;
    }

    /**
     * Get the ad f nom client.
     *
     * @return string Returns the ad f nom client.
     */
    public function getAdFNomClient() {
        return $this->adFNomClient;
    }

    /**
     * Get the ad f nom suite.
     *
     * @return string Returns the ad f nom suite.
     */
    public function getAdFNomSuite() {
        return $this->adFNomSuite;
    }

    /**
     * Get the ad f nom suite2.
     *
     * @return string Returns the ad f nom suite2.
     */
    public function getAdFNomSuite2() {
        return $this->adFNomSuite2;
    }

    /**
     * Get the ad f nom suite3.
     *
     * @return string Returns the ad f nom suite3.
     */
    public function getAdFNomSuite3() {
        return $this->adFNomSuite3;
    }

    /**
     * Get the ad f nom voie.
     *
     * @return string Returns the ad f nom voie.
     */
    public function getAdFNomVoie() {
        return $this->adFNomVoie;
    }

    /**
     * Get the ad f num voie.
     *
     * @return string Returns the ad f num voie.
     */
    public function getAdFNumVoie() {
        return $this->adFNumVoie;
    }

    /**
     * Get the ad f type adresse.
     *
     * @return string Returns the ad f type adresse.
     */
    public function getAdFTypeAdresse() {
        return $this->adFTypeAdresse;
    }

    /**
     * Get the ad fbtq.
     *
     * @return string Returns the ad fbtq.
     */
    public function getAdFbtq() {
        return $this->adFbtq;
    }

    /**
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getAdresse() {
        return $this->adresse;
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
     * Get the btq livraison.
     *
     * @return string Returns the btq livraison.
     */
    public function getBtqLivraison() {
        return $this->btqLivraison;
    }

    /**
     * Get the budget commande.
     *
     * @return float Returns the budget commande.
     */
    public function getBudgetCommande() {
        return $this->budgetCommande;
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
     * Get the bureau distributeur livraison.
     *
     * @return string Returns the bureau distributeur livraison.
     */
    public function getBureauDistributeurLivraison() {
        return $this->bureauDistributeurLivraison;
    }

    /**
     * Get the chantier ponctuel.
     *
     * @return bool Returns the chantier ponctuel.
     */
    public function getChantierPonctuel() {
        return $this->chantierPonctuel;
    }

    /**
     * Get the chef equipe.
     *
     * @return string Returns the chef equipe.
     */
    public function getChefEquipe() {
        return $this->chefEquipe;
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
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
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
     * Get the code analytique.
     *
     * @return string Returns the code analytique.
     */
    public function getCodeAnalytique() {
        return $this->codeAnalytique;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code commercial.
     *
     * @return string Returns the code commercial.
     */
    public function getCodeCommercial() {
        return $this->codeCommercial;
    }

    /**
     * Get the code emp inspecteur.
     *
     * @return string Returns the code emp inspecteur.
     */
    public function getCodeEmpInspecteur() {
        return $this->codeEmpInspecteur;
    }

    /**
     * Get the code formule.
     *
     * @return string Returns the code formule.
     */
    public function getCodeFormule() {
        return $this->codeFormule;
    }

    /**
     * Get the code livraison.
     *
     * @return string Returns the code livraison.
     */
    public function getCodeLivraison() {
        return $this->codeLivraison;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
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
     * Get the code postal livraison.
     *
     * @return string Returns the code postal livraison.
     */
    public function getCodePostalLivraison() {
        return $this->codePostalLivraison;
    }

    /**
     * Get the code reg marge.
     *
     * @return string Returns the code reg marge.
     */
    public function getCodeRegMarge() {
        return $this->codeRegMarge;
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
     * Get the collectif.
     *
     * @return string Returns the collectif.
     */
    public function getCollectif() {
        return $this->collectif;
    }

    /**
     * Get the commande isolee.
     *
     * @return bool Returns the commande isolee.
     */
    public function getCommandeIsolee() {
        return $this->commandeIsolee;
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
     * Get the complement livraison.
     *
     * @return string Returns the complement livraison.
     */
    public function getComplementLivraison() {
        return $this->complementLivraison;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date echeance contrat.
     *
     * @return DateTime|null Returns the date echeance contrat.
     */
    public function getDateEcheanceContrat() {
        return $this->dateEcheanceContrat;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the date revision.
     *
     * @return DateTime|null Returns the date revision.
     */
    public function getDateRevision() {
        return $this->dateRevision;
    }

    /**
     * Get the descriptif.
     *
     * @return string Returns the descriptif.
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Get the dt avant dern prepa.
     *
     * @return DateTime|null Returns the dt avant dern prepa.
     */
    public function getDtAvantDernPrepa() {
        return $this->dtAvantDernPrepa;
    }

    /**
     * Get the dt dern prepa.
     *
     * @return DateTime|null Returns the dt dern prepa.
     */
    public function getDtDernPrepa() {
        return $this->dtDernPrepa;
    }

    /**
     * Get the dt validite fact deb.
     *
     * @return DateTime|null Returns the dt validite fact deb.
     */
    public function getDtValiditeFactDeb() {
        return $this->dtValiditeFactDeb;
    }

    /**
     * Get the dt validite fact deb deb mois.
     *
     * @return DateTime|null Returns the dt validite fact deb deb mois.
     */
    public function getDtValiditeFactDebDebMois() {
        return $this->dtValiditeFactDebDebMois;
    }

    /**
     * Get the dt validite fact fin.
     *
     * @return DateTime|null Returns the dt validite fact fin.
     */
    public function getDtValiditeFactFin() {
        return $this->dtValiditeFactFin;
    }

    /**
     * Get the dt validite fact fin fin mois.
     *
     * @return DateTime|null Returns the dt validite fact fin fin mois.
     */
    public function getDtValiditeFactFinFinMois() {
        return $this->dtValiditeFactFinFinMois;
    }

    /**
     * Get the echeance annuelle.
     *
     * @return bool Returns the echeance annuelle.
     */
    public function getEcheanceAnnuelle() {
        return $this->echeanceAnnuelle;
    }

    /**
     * Get the fact negoce isolee.
     *
     * @return bool Returns the fact negoce isolee.
     */
    public function getFactNegoceIsolee() {
        return $this->factNegoceIsolee;
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
     * Get the jour fact.
     *
     * @return string Returns the jour fact.
     */
    public function getJourFact() {
        return $this->jourFact;
    }

    /**
     * Get the latitude.
     *
     * @return float Returns the latitude.
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Get the loi chatel sur facture.
     *
     * @return bool Returns the loi chatel sur facture.
     */
    public function getLoiChatelSurFacture() {
        return $this->loiChatelSurFacture;
    }

    /**
     * Get the longitude.
     *
     * @return float Returns the longitude.
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Get the maj stock by da.
     *
     * @return bool Returns the maj stock by da.
     */
    public function getMajStockByDa() {
        return $this->majStockByDa;
    }

    /**
     * Get the nb controles prevus.
     *
     * @return int Returns the nb controles prevus.
     */
    public function getNbControlesPrevus() {
        return $this->nbControlesPrevus;
    }

    /**
     * Get the nb mois preavis.
     *
     * @return string Returns the nb mois preavis.
     */
    public function getNbMoisPreavis() {
        return $this->nbMoisPreavis;
    }

    /**
     * Get the nom adresse.
     *
     * @return string Returns the nom adresse.
     */
    public function getNomAdresse() {
        return $this->nomAdresse;
    }

    /**
     * Get the nom chantier.
     *
     * @return string Returns the nom chantier.
     */
    public function getNomChantier() {
        return $this->nomChantier;
    }

    /**
     * Get the nom livraison.
     *
     * @return string Returns the nom livraison.
     */
    public function getNomLivraison() {
        return $this->nomLivraison;
    }

    /**
     * Get the nom responsable.
     *
     * @return string Returns the nom responsable.
     */
    public function getNomResponsable() {
        return $this->nomResponsable;
    }

    /**
     * Get the nom suite.
     *
     * @return string Returns the nom suite.
     */
    public function getNomSuite() {
        return $this->nomSuite;
    }

    /**
     * Get the nom suite livraison.
     *
     * @return string Returns the nom suite livraison.
     */
    public function getNomSuiteLivraison() {
        return $this->nomSuiteLivraison;
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
     * Get the nom voie livraison.
     *
     * @return string Returns the nom voie livraison.
     */
    public function getNomVoieLivraison() {
        return $this->nomVoieLivraison;
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
     * Get the num voie livraison.
     *
     * @return string Returns the num voie livraison.
     */
    public function getNumVoieLivraison() {
        return $this->numVoieLivraison;
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
     * Get the plan fact.
     *
     * @return bool Returns the plan fact.
     */
    public function getPlanFact() {
        return $this->planFact;
    }

    /**
     * Get the pourc conso produit.
     *
     * @return float Returns the pourc conso produit.
     */
    public function getPourcConsoProduit() {
        return $this->pourcConsoProduit;
    }

    /**
     * Get the pourc marge previs.
     *
     * @return float Returns the pourc marge previs.
     */
    public function getPourcMargePrevis() {
        return $this->pourcMargePrevis;
    }

    /**
     * Get the reference facture.
     *
     * @return string Returns the reference facture.
     */
    public function getReferenceFacture() {
        return $this->referenceFacture;
    }

    /**
     * Get the reference facture2.
     *
     * @return string Returns the reference facture2.
     */
    public function getReferenceFacture2() {
        return $this->referenceFacture2;
    }

    /**
     * Get the rupt date livraison.
     *
     * @return bool Returns the rupt date livraison.
     */
    public function getRuptDateLivraison() {
        return $this->ruptDateLivraison;
    }

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string $adFBureauDistributeur The ad f bureau distributeur.
     */
    public function setAdFBureauDistributeur($adFBureauDistributeur) {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string $adFCivilite The ad f civilite.
     */
    public function setAdFCivilite($adFCivilite) {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string $adFCodePays The ad f code pays.
     */
    public function setAdFCodePays($adFCodePays) {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string $adFCodePostal The ad f code postal.
     */
    public function setAdFCodePostal($adFCodePostal) {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }

    /**
     * Set the ad f complement.
     *
     * @param string $adFComplement The ad f complement.
     */
    public function setAdFComplement($adFComplement) {
        $this->adFComplement = $adFComplement;
        return $this;
    }

    /**
     * Set the ad f nom client.
     *
     * @param string $adFNomClient The ad f nom client.
     */
    public function setAdFNomClient($adFNomClient) {
        $this->adFNomClient = $adFNomClient;
        return $this;
    }

    /**
     * Set the ad f nom suite.
     *
     * @param string $adFNomSuite The ad f nom suite.
     */
    public function setAdFNomSuite($adFNomSuite) {
        $this->adFNomSuite = $adFNomSuite;
        return $this;
    }

    /**
     * Set the ad f nom suite2.
     *
     * @param string $adFNomSuite2 The ad f nom suite2.
     */
    public function setAdFNomSuite2($adFNomSuite2) {
        $this->adFNomSuite2 = $adFNomSuite2;
        return $this;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string $adFNomSuite3 The ad f nom suite3.
     */
    public function setAdFNomSuite3($adFNomSuite3) {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string $adFNomVoie The ad f nom voie.
     */
    public function setAdFNomVoie($adFNomVoie) {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string $adFNumVoie The ad f num voie.
     */
    public function setAdFNumVoie($adFNumVoie) {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }

    /**
     * Set the ad f type adresse.
     *
     * @param string $adFTypeAdresse The ad f type adresse.
     */
    public function setAdFTypeAdresse($adFTypeAdresse) {
        $this->adFTypeAdresse = $adFTypeAdresse;
        return $this;
    }

    /**
     * Set the ad fbtq.
     *
     * @param string $adFbtq The ad fbtq.
     */
    public function setAdFbtq($adFbtq) {
        $this->adFbtq = $adFbtq;
        return $this;
    }

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
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
     * Set the btq livraison.
     *
     * @param string $btqLivraison The btq livraison.
     */
    public function setBtqLivraison($btqLivraison) {
        $this->btqLivraison = $btqLivraison;
        return $this;
    }

    /**
     * Set the budget commande.
     *
     * @param float $budgetCommande The budget commande.
     */
    public function setBudgetCommande($budgetCommande) {
        $this->budgetCommande = $budgetCommande;
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
     * Set the bureau distributeur livraison.
     *
     * @param string $bureauDistributeurLivraison The bureau distributeur livraison.
     */
    public function setBureauDistributeurLivraison($bureauDistributeurLivraison) {
        $this->bureauDistributeurLivraison = $bureauDistributeurLivraison;
        return $this;
    }

    /**
     * Set the chantier ponctuel.
     *
     * @param bool $chantierPonctuel The chantier ponctuel.
     */
    public function setChantierPonctuel($chantierPonctuel) {
        $this->chantierPonctuel = $chantierPonctuel;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param string $chefEquipe The chef equipe.
     */
    public function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
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
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
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
     * Set the code analytique.
     *
     * @param string $codeAnalytique The code analytique.
     */
    public function setCodeAnalytique($codeAnalytique) {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code commercial.
     *
     * @param string $codeCommercial The code commercial.
     */
    public function setCodeCommercial($codeCommercial) {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }

    /**
     * Set the code emp inspecteur.
     *
     * @param string $codeEmpInspecteur The code emp inspecteur.
     */
    public function setCodeEmpInspecteur($codeEmpInspecteur) {
        $this->codeEmpInspecteur = $codeEmpInspecteur;
        return $this;
    }

    /**
     * Set the code formule.
     *
     * @param string $codeFormule The code formule.
     */
    public function setCodeFormule($codeFormule) {
        $this->codeFormule = $codeFormule;
        return $this;
    }

    /**
     * Set the code livraison.
     *
     * @param string $codeLivraison The code livraison.
     */
    public function setCodeLivraison($codeLivraison) {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
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
     * Set the code postal livraison.
     *
     * @param string $codePostalLivraison The code postal livraison.
     */
    public function setCodePostalLivraison($codePostalLivraison) {
        $this->codePostalLivraison = $codePostalLivraison;
        return $this;
    }

    /**
     * Set the code reg marge.
     *
     * @param string $codeRegMarge The code reg marge.
     */
    public function setCodeRegMarge($codeRegMarge) {
        $this->codeRegMarge = $codeRegMarge;
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
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool $commandeIsolee The commande isolee.
     */
    public function setCommandeIsolee($commandeIsolee) {
        $this->commandeIsolee = $commandeIsolee;
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
     * Set the complement livraison.
     *
     * @param string $complementLivraison The complement livraison.
     */
    public function setComplementLivraison($complementLivraison) {
        $this->complementLivraison = $complementLivraison;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date echeance contrat.
     *
     * @param DateTime|null $dateEcheanceContrat The date echeance contrat.
     */
    public function setDateEcheanceContrat(DateTime $dateEcheanceContrat = null) {
        $this->dateEcheanceContrat = $dateEcheanceContrat;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     */
    public function setDateRevision(DateTime $dateRevision = null) {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the dt avant dern prepa.
     *
     * @param DateTime|null $dtAvantDernPrepa The dt avant dern prepa.
     */
    public function setDtAvantDernPrepa(DateTime $dtAvantDernPrepa = null) {
        $this->dtAvantDernPrepa = $dtAvantDernPrepa;
        return $this;
    }

    /**
     * Set the dt dern prepa.
     *
     * @param DateTime|null $dtDernPrepa The dt dern prepa.
     */
    public function setDtDernPrepa(DateTime $dtDernPrepa = null) {
        $this->dtDernPrepa = $dtDernPrepa;
        return $this;
    }

    /**
     * Set the dt validite fact deb.
     *
     * @param DateTime|null $dtValiditeFactDeb The dt validite fact deb.
     */
    public function setDtValiditeFactDeb(DateTime $dtValiditeFactDeb = null) {
        $this->dtValiditeFactDeb = $dtValiditeFactDeb;
        return $this;
    }

    /**
     * Set the dt validite fact deb deb mois.
     *
     * @param DateTime|null $dtValiditeFactDebDebMois The dt validite fact deb deb mois.
     */
    public function setDtValiditeFactDebDebMois(DateTime $dtValiditeFactDebDebMois = null) {
        $this->dtValiditeFactDebDebMois = $dtValiditeFactDebDebMois;
        return $this;
    }

    /**
     * Set the dt validite fact fin.
     *
     * @param DateTime|null $dtValiditeFactFin The dt validite fact fin.
     */
    public function setDtValiditeFactFin(DateTime $dtValiditeFactFin = null) {
        $this->dtValiditeFactFin = $dtValiditeFactFin;
        return $this;
    }

    /**
     * Set the dt validite fact fin fin mois.
     *
     * @param DateTime|null $dtValiditeFactFinFinMois The dt validite fact fin fin mois.
     */
    public function setDtValiditeFactFinFinMois(DateTime $dtValiditeFactFinFinMois = null) {
        $this->dtValiditeFactFinFinMois = $dtValiditeFactFinFinMois;
        return $this;
    }

    /**
     * Set the echeance annuelle.
     *
     * @param bool $echeanceAnnuelle The echeance annuelle.
     */
    public function setEcheanceAnnuelle($echeanceAnnuelle) {
        $this->echeanceAnnuelle = $echeanceAnnuelle;
        return $this;
    }

    /**
     * Set the fact negoce isolee.
     *
     * @param bool $factNegoceIsolee The fact negoce isolee.
     */
    public function setFactNegoceIsolee($factNegoceIsolee) {
        $this->factNegoceIsolee = $factNegoceIsolee;
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
     * Set the jour fact.
     *
     * @param string $jourFact The jour fact.
     */
    public function setJourFact($jourFact) {
        $this->jourFact = $jourFact;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float $latitude The latitude.
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the loi chatel sur facture.
     *
     * @param bool $loiChatelSurFacture The loi chatel sur facture.
     */
    public function setLoiChatelSurFacture($loiChatelSurFacture) {
        $this->loiChatelSurFacture = $loiChatelSurFacture;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float $longitude The longitude.
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the maj stock by da.
     *
     * @param bool $majStockByDa The maj stock by da.
     */
    public function setMajStockByDa($majStockByDa) {
        $this->majStockByDa = $majStockByDa;
        return $this;
    }

    /**
     * Set the nb controles prevus.
     *
     * @param int $nbControlesPrevus The nb controles prevus.
     */
    public function setNbControlesPrevus($nbControlesPrevus) {
        $this->nbControlesPrevus = $nbControlesPrevus;
        return $this;
    }

    /**
     * Set the nb mois preavis.
     *
     * @param string $nbMoisPreavis The nb mois preavis.
     */
    public function setNbMoisPreavis($nbMoisPreavis) {
        $this->nbMoisPreavis = $nbMoisPreavis;
        return $this;
    }

    /**
     * Set the nom adresse.
     *
     * @param string $nomAdresse The nom adresse.
     */
    public function setNomAdresse($nomAdresse) {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }

    /**
     * Set the nom chantier.
     *
     * @param string $nomChantier The nom chantier.
     */
    public function setNomChantier($nomChantier) {
        $this->nomChantier = $nomChantier;
        return $this;
    }

    /**
     * Set the nom livraison.
     *
     * @param string $nomLivraison The nom livraison.
     */
    public function setNomLivraison($nomLivraison) {
        $this->nomLivraison = $nomLivraison;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string $nomResponsable The nom responsable.
     */
    public function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite livraison.
     *
     * @param string $nomSuiteLivraison The nom suite livraison.
     */
    public function setNomSuiteLivraison($nomSuiteLivraison) {
        $this->nomSuiteLivraison = $nomSuiteLivraison;
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
     * Set the nom voie livraison.
     *
     * @param string $nomVoieLivraison The nom voie livraison.
     */
    public function setNomVoieLivraison($nomVoieLivraison) {
        $this->nomVoieLivraison = $nomVoieLivraison;
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
     * Set the num voie livraison.
     *
     * @param string $numVoieLivraison The num voie livraison.
     */
    public function setNumVoieLivraison($numVoieLivraison) {
        $this->numVoieLivraison = $numVoieLivraison;
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
     * Set the plan fact.
     *
     * @param bool $planFact The plan fact.
     */
    public function setPlanFact($planFact) {
        $this->planFact = $planFact;
        return $this;
    }

    /**
     * Set the pourc conso produit.
     *
     * @param float $pourcConsoProduit The pourc conso produit.
     */
    public function setPourcConsoProduit($pourcConsoProduit) {
        $this->pourcConsoProduit = $pourcConsoProduit;
        return $this;
    }

    /**
     * Set the pourc marge previs.
     *
     * @param float $pourcMargePrevis The pourc marge previs.
     */
    public function setPourcMargePrevis($pourcMargePrevis) {
        $this->pourcMargePrevis = $pourcMargePrevis;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string $referenceFacture The reference facture.
     */
    public function setReferenceFacture($referenceFacture) {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string $referenceFacture2 The reference facture2.
     */
    public function setReferenceFacture2($referenceFacture2) {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }

    /**
     * Set the rupt date livraison.
     *
     * @param bool $ruptDateLivraison The rupt date livraison.
     */
    public function setRuptDateLivraison($ruptDateLivraison) {
        $this->ruptDateLivraison = $ruptDateLivraison;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }
}
