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
 * Affaires model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Affaires {

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
     * C a stat annuel.
     *
     * @var float
     */
    private $cAStatAnnuel;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code analytique.
     *
     * @var string
     */
    private $codeAnalytique;

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
     * Code factor.
     *
     * @var string
     */
    private $codeFactor;

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
     * Code reg marge.
     *
     * @var string
     */
    private $codeRegMarge;

    /**
     * Code t v a.
     *
     * @var string
     */
    private $codeTVA;

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
     * Date creat.
     *
     * @var DateTime
     */
    private $dateCreat;

    /**
     * Date deb affaire.
     *
     * @var DateTime
     */
    private $dateDebAffaire;

    /**
     * Date deb affaire deb mois.
     *
     * @var DateTime
     */
    private $dateDebAffaireDebMois;

    /**
     * Date fin affaire.
     *
     * @var DateTime
     */
    private $dateFinAffaire;

    /**
     * Date fin affaire fin mois.
     *
     * @var DateTime
     */
    private $dateFinAffaireFinMois;

    /**
     * Date modif.
     *
     * @var DateTime
     */
    private $dateModif;

    /**
     * Date vente.
     *
     * @var DateTime
     */
    private $dateVente;

    /**
     * Facture isolee.
     *
     * @var bool
     */
    private $factureIsolee;

    /**
     * Groupe sous traite.
     *
     * @var string
     */
    private $groupeSousTraite;

    /**
     * Nom adresse.
     *
     * @var string
     */
    private $nomAdresse;

    /**
     * Nom affaire.
     *
     * @var string
     */
    private $nomAffaire;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

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
     * Get the c a stat annuel.
     *
     * @return float Returns the c a stat annuel.
     */
    public function getCAStatAnnuel() {
        return $this->cAStatAnnuel;
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
     * Get the code analytique.
     *
     * @return string Returns the code analytique.
     */
    public function getCodeAnalytique() {
        return $this->codeAnalytique;
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
     * Get the code factor.
     *
     * @return string Returns the code factor.
     */
    public function getCodeFactor() {
        return $this->codeFactor;
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
     * Get the code reg marge.
     *
     * @return string Returns the code reg marge.
     */
    public function getCodeRegMarge() {
        return $this->codeRegMarge;
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
     * Get the date creat.
     *
     * @return DateTime Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date deb affaire.
     *
     * @return DateTime Returns the date deb affaire.
     */
    public function getDateDebAffaire() {
        return $this->dateDebAffaire;
    }

    /**
     * Get the date deb affaire deb mois.
     *
     * @return DateTime Returns the date deb affaire deb mois.
     */
    public function getDateDebAffaireDebMois() {
        return $this->dateDebAffaireDebMois;
    }

    /**
     * Get the date fin affaire.
     *
     * @return DateTime Returns the date fin affaire.
     */
    public function getDateFinAffaire() {
        return $this->dateFinAffaire;
    }

    /**
     * Get the date fin affaire fin mois.
     *
     * @return DateTime Returns the date fin affaire fin mois.
     */
    public function getDateFinAffaireFinMois() {
        return $this->dateFinAffaireFinMois;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the date vente.
     *
     * @return DateTime Returns the date vente.
     */
    public function getDateVente() {
        return $this->dateVente;
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
     * Get the groupe sous traite.
     *
     * @return string Returns the groupe sous traite.
     */
    public function getGroupeSousTraite() {
        return $this->groupeSousTraite;
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
     * Get the nom affaire.
     *
     * @return string Returns the nom affaire.
     */
    public function getNomAffaire() {
        return $this->nomAffaire;
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
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return Affaires Returns this affaires.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return Affaires Returns this affaires.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the c a stat annuel.
     *
     * @param float $cAStatAnnuel The c a stat annuel.
     * @return Affaires Returns this affaires.
     */
    public function setCAStatAnnuel($cAStatAnnuel) {
        $this->cAStatAnnuel = $cAStatAnnuel;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return Affaires Returns this affaires.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code analytique.
     *
     * @param string $codeAnalytique The code analytique.
     * @return Affaires Returns this affaires.
     */
    public function setCodeAnalytique($codeAnalytique) {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Affaires Returns this affaires.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code commercial.
     *
     * @param string $codeCommercial The code commercial.
     * @return Affaires Returns this affaires.
     */
    public function setCodeCommercial($codeCommercial) {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string $codeFactor The code factor.
     * @return Affaires Returns this affaires.
     */
    public function setCodeFactor($codeFactor) {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return Affaires Returns this affaires.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return Affaires Returns this affaires.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code reg marge.
     *
     * @param string $codeRegMarge The code reg marge.
     * @return Affaires Returns this affaires.
     */
    public function setCodeRegMarge($codeRegMarge) {
        $this->codeRegMarge = $codeRegMarge;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return Affaires Returns this affaires.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string $codeVentilCompta The code ventil compta.
     * @return Affaires Returns this affaires.
     */
    public function setCodeVentilCompta($codeVentilCompta) {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Affaires Returns this affaires.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime $dateCreat The date creat.
     * @return Affaires Returns this affaires.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date deb affaire.
     *
     * @param DateTime $dateDebAffaire The date deb affaire.
     * @return Affaires Returns this affaires.
     */
    public function setDateDebAffaire(DateTime $dateDebAffaire = null) {
        $this->dateDebAffaire = $dateDebAffaire;
        return $this;
    }

    /**
     * Set the date deb affaire deb mois.
     *
     * @param DateTime $dateDebAffaireDebMois The date deb affaire deb mois.
     * @return Affaires Returns this affaires.
     */
    public function setDateDebAffaireDebMois(DateTime $dateDebAffaireDebMois = null) {
        $this->dateDebAffaireDebMois = $dateDebAffaireDebMois;
        return $this;
    }

    /**
     * Set the date fin affaire.
     *
     * @param DateTime $dateFinAffaire The date fin affaire.
     * @return Affaires Returns this affaires.
     */
    public function setDateFinAffaire(DateTime $dateFinAffaire = null) {
        $this->dateFinAffaire = $dateFinAffaire;
        return $this;
    }

    /**
     * Set the date fin affaire fin mois.
     *
     * @param DateTime $dateFinAffaireFinMois The date fin affaire fin mois.
     * @return Affaires Returns this affaires.
     */
    public function setDateFinAffaireFinMois(DateTime $dateFinAffaireFinMois = null) {
        $this->dateFinAffaireFinMois = $dateFinAffaireFinMois;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime $dateModif The date modif.
     * @return Affaires Returns this affaires.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the date vente.
     *
     * @param DateTime $dateVente The date vente.
     * @return Affaires Returns this affaires.
     */
    public function setDateVente(DateTime $dateVente = null) {
        $this->dateVente = $dateVente;
        return $this;
    }

    /**
     * Set the facture isolee.
     *
     * @param bool $factureIsolee The facture isolee.
     * @return Affaires Returns this affaires.
     */
    public function setFactureIsolee($factureIsolee) {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the groupe sous traite.
     *
     * @param string $groupeSousTraite The groupe sous traite.
     * @return Affaires Returns this affaires.
     */
    public function setGroupeSousTraite($groupeSousTraite) {
        $this->groupeSousTraite = $groupeSousTraite;
        return $this;
    }

    /**
     * Set the nom adresse.
     *
     * @param string $nomAdresse The nom adresse.
     * @return Affaires Returns this affaires.
     */
    public function setNomAdresse($nomAdresse) {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }

    /**
     * Set the nom affaire.
     *
     * @param string $nomAffaire The nom affaire.
     * @return Affaires Returns this affaires.
     */
    public function setNomAffaire($nomAffaire) {
        $this->nomAffaire = $nomAffaire;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     * @return Affaires Returns this affaires.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return Affaires Returns this affaires.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return Affaires Returns this affaires.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the reference facture.
     *
     * @param string $referenceFacture The reference facture.
     * @return Affaires Returns this affaires.
     */
    public function setReferenceFacture($referenceFacture) {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }

    /**
     * Set the reference facture2.
     *
     * @param string $referenceFacture2 The reference facture2.
     * @return Affaires Returns this affaires.
     */
    public function setReferenceFacture2($referenceFacture2) {
        $this->referenceFacture2 = $referenceFacture2;
        return $this;
    }
}
