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
 * Plans en tete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PlansEnTete {

    /**
     * B t q.
     *
     * @var string
     */
    private $bTQ;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

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
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Date revision.
     *
     * @var DateTime
     */
    private $dateRevision;

    /**
     * Dt avant dern prepa.
     *
     * @var DateTime
     */
    private $dtAvantDernPrepa;

    /**
     * Dt dern prepa.
     *
     * @var DateTime
     */
    private $dtDernPrepa;

    /**
     * Dt validite fact deb.
     *
     * @var DateTime
     */
    private $dtValiditeFactDeb;

    /**
     * Dt validite fact deb deb mois.
     *
     * @var DateTime
     */
    private $dtValiditeFactDebDebMois;

    /**
     * Dt validite fact fin.
     *
     * @var DateTime
     */
    private $dtValiditeFactFin;

    /**
     * Dt validite fact fin fin mois.
     *
     * @var DateTime
     */
    private $dtValiditeFactFinFinMois;

    /**
     * Jour fact.
     *
     * @var string
     */
    private $jourFact;

    /**
     * Montant h t p x.
     *
     * @var float
     */
    private $montantHTPX;

    /**
     * Montant h t v m.
     *
     * @var float
     */
    private $montantHTVM;

    /**
     * Nom client.
     *
     * @var string
     */
    private $nomClient;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

    /**
     * Nom suite2.
     *
     * @var string
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string
     */
    private $nomSuite3;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero commande web f t.
     *
     * @var string
     */
    private $numeroCommandeWebFT;

    /**
     * Numero devis.
     *
     * @var string
     */
    private $numeroDevis;

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
     * Revision annuelle.
     *
     * @var boolean
     */
    private $revisionAnnuelle;

    /**
     * Type adresse.
     *
     * @var string
     */
    private $typeAdresse;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the civilite.
     *
     * @return string Returns the civilite.
     */
    public function getCivilite() {
        return $this->civilite;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
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
     * Get the date revision.
     *
     * @return DateTime Returns the date revision.
     */
    public function getDateRevision() {
        return $this->dateRevision;
    }

    /**
     * Get the dt avant dern prepa.
     *
     * @return DateTime Returns the dt avant dern prepa.
     */
    public function getDtAvantDernPrepa() {
        return $this->dtAvantDernPrepa;
    }

    /**
     * Get the dt dern prepa.
     *
     * @return DateTime Returns the dt dern prepa.
     */
    public function getDtDernPrepa() {
        return $this->dtDernPrepa;
    }

    /**
     * Get the dt validite fact deb.
     *
     * @return DateTime Returns the dt validite fact deb.
     */
    public function getDtValiditeFactDeb() {
        return $this->dtValiditeFactDeb;
    }

    /**
     * Get the dt validite fact deb deb mois.
     *
     * @return DateTime Returns the dt validite fact deb deb mois.
     */
    public function getDtValiditeFactDebDebMois() {
        return $this->dtValiditeFactDebDebMois;
    }

    /**
     * Get the dt validite fact fin.
     *
     * @return DateTime Returns the dt validite fact fin.
     */
    public function getDtValiditeFactFin() {
        return $this->dtValiditeFactFin;
    }

    /**
     * Get the dt validite fact fin fin mois.
     *
     * @return DateTime Returns the dt validite fact fin fin mois.
     */
    public function getDtValiditeFactFinFinMois() {
        return $this->dtValiditeFactFinFinMois;
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
     * Get the montant h t p x.
     *
     * @return float Returns the montant h t p x.
     */
    public function getMontantHTPX() {
        return $this->montantHTPX;
    }

    /**
     * Get the montant h t v m.
     *
     * @return float Returns the montant h t v m.
     */
    public function getMontantHTVM() {
        return $this->montantHTVM;
    }

    /**
     * Get the nom client.
     *
     * @return string Returns the nom client.
     */
    public function getNomClient() {
        return $this->nomClient;
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
     * Get the nom suite2.
     *
     * @return string Returns the nom suite2.
     */
    public function getNomSuite2() {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string Returns the nom suite3.
     */
    public function getNomSuite3() {
        return $this->nomSuite3;
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
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
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
     * Get the numero commande web f t.
     *
     * @return string Returns the numero commande web f t.
     */
    public function getNumeroCommandeWebFT() {
        return $this->numeroCommandeWebFT;
    }

    /**
     * Get the numero devis.
     *
     * @return string Returns the numero devis.
     */
    public function getNumeroDevis() {
        return $this->numeroDevis;
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
     * Get the revision annuelle.
     *
     * @return boolean Returns the revision annuelle.
     */
    public function getRevisionAnnuelle() {
        return $this->revisionAnnuelle;
    }

    /**
     * Get the type adresse.
     *
     * @return string Returns the type adresse.
     */
    public function getTypeAdresse() {
        return $this->typeAdresse;
    }

    /**
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime $dateRevision The date revision.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDateRevision(DateTime $dateRevision = null) {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the dt avant dern prepa.
     *
     * @param DateTime $dtAvantDernPrepa The dt avant dern prepa.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDtAvantDernPrepa(DateTime $dtAvantDernPrepa = null) {
        $this->dtAvantDernPrepa = $dtAvantDernPrepa;
        return $this;
    }

    /**
     * Set the dt dern prepa.
     *
     * @param DateTime $dtDernPrepa The dt dern prepa.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDtDernPrepa(DateTime $dtDernPrepa = null) {
        $this->dtDernPrepa = $dtDernPrepa;
        return $this;
    }

    /**
     * Set the dt validite fact deb.
     *
     * @param DateTime $dtValiditeFactDeb The dt validite fact deb.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDtValiditeFactDeb(DateTime $dtValiditeFactDeb = null) {
        $this->dtValiditeFactDeb = $dtValiditeFactDeb;
        return $this;
    }

    /**
     * Set the dt validite fact deb deb mois.
     *
     * @param DateTime $dtValiditeFactDebDebMois The dt validite fact deb deb mois.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDtValiditeFactDebDebMois(DateTime $dtValiditeFactDebDebMois = null) {
        $this->dtValiditeFactDebDebMois = $dtValiditeFactDebDebMois;
        return $this;
    }

    /**
     * Set the dt validite fact fin.
     *
     * @param DateTime $dtValiditeFactFin The dt validite fact fin.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDtValiditeFactFin(DateTime $dtValiditeFactFin = null) {
        $this->dtValiditeFactFin = $dtValiditeFactFin;
        return $this;
    }

    /**
     * Set the dt validite fact fin fin mois.
     *
     * @param DateTime $dtValiditeFactFinFinMois The dt validite fact fin fin mois.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setDtValiditeFactFinFinMois(DateTime $dtValiditeFactFinFinMois = null) {
        $this->dtValiditeFactFinFinMois = $dtValiditeFactFinFinMois;
        return $this;
    }

    /**
     * Set the jour fact.
     *
     * @param string $jourFact The jour fact.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setJourFact($jourFact) {
        $this->jourFact = $jourFact;
        return $this;
    }

    /**
     * Set the montant h t p x.
     *
     * @param float $montantHTPX The montant h t p x.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setMontantHTPX($montantHTPX) {
        $this->montantHTPX = $montantHTPX;
        return $this;
    }

    /**
     * Set the montant h t v m.
     *
     * @param float $montantHTVM The montant h t v m.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setMontantHTVM($montantHTVM) {
        $this->montantHTVM = $montantHTVM;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string $nomClient The nom client.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string $nomSuite2 The nom suite2.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNomSuite2($nomSuite2) {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string $nomSuite3 The nom suite3.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNomSuite3($nomSuite3) {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero commande web f t.
     *
     * @param string $numeroCommandeWebFT The numero commande web f t.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNumeroCommandeWebFT($numeroCommandeWebFT) {
        $this->numeroCommandeWebFT = $numeroCommandeWebFT;
        return $this;
    }

    /**
     * Set the numero devis.
     *
     * @param string $numeroDevis The numero devis.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setNumeroDevis($numeroDevis) {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string $referenceFacture The reference facture.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setReferenceFacture($referenceFacture) {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string $referenceFacture2 The reference facture2.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setReferenceFacture2($referenceFacture2) {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }

    /**
     * Set the revision annuelle.
     *
     * @param boolean $revisionAnnuelle The revision annuelle.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setRevisionAnnuelle($revisionAnnuelle) {
        $this->revisionAnnuelle = $revisionAnnuelle;
        return $this;
    }

    /**
     * Set the type adresse.
     *
     * @param string $typeAdresse The type adresse.
     * @return PlansEnTete Returns this plans en tete.
     */
    public function setTypeAdresse($typeAdresse) {
        $this->typeAdresse = $typeAdresse;
        return $this;
    }

}
