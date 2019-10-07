<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Locations fi model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFi {

    /**
     * Bureau.
     *
     * @var string
     */
    private $bureau;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Code journal echeance.
     *
     * @var string
     */
    private $codeJournalEcheance;

    /**
     * Code journal paiement.
     *
     * @var string
     */
    private $codeJournalPaiement;

    /**
     * Code t v a.
     *
     * @var string
     */
    private $codeTVA;

    /**
     * Compte frn.
     *
     * @var string
     */
    private $compteFrn;

    /**
     * Cpt assurance.
     *
     * @var string
     */
    private $cptAssurance;

    /**
     * Cpt charge.
     *
     * @var string
     */
    private $cptCharge;

    /**
     * Cpt entretien.
     *
     * @var string
     */
    private $cptEntretien;

    /**
     * Cpt t v a.
     *
     * @var string
     */
    private $cptTVA;

    /**
     * Cpt t v a assu.
     *
     * @var string
     */
    private $cptTVAAssu;

    /**
     * D i n.
     *
     * @var bool
     */
    private $dIN;

    /**
     * Date acquisition.
     *
     * @var DateTime
     */
    private $dateAcquisition;

    /**
     * Date fin contrat.
     *
     * @var DateTime
     */
    private $dateFinContrat;

    /**
     * Date mise service.
     *
     * @var DateTime
     */
    private $dateMiseService;

    /**
     * Guid vehicule.
     *
     * @var string
     */
    private $guidVehicule;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Libelle frn.
     *
     * @var string
     */
    private $libelleFrn;

    /**
     * Materiaux agricole.
     *
     * @var bool
     */
    private $materiauxAgricole;

    /**
     * Montant t v a.
     *
     * @var float
     */
    private $montantTVA;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * T p duree.
     *
     * @var int
     */
    private $tPDuree;

    /**
     * T p echoir echu.
     *
     * @var string
     */
    private $tPEchoirEchu;

    /**
     * T p mois annee.
     *
     * @var string
     */
    private $tPMoisAnnee;

    /**
     * T p montt depot.
     *
     * @var float
     */
    private $tPMonttDepot;

    /**
     * T p periodicite.
     *
     * @var string
     */
    private $tPPeriodicite;

    /**
     * T p premier paiement.
     *
     * @var DateTime
     */
    private $tPPremierPaiement;

    /**
     * Taxe pro.
     *
     * @var bool
     */
    private $taxePro;

    /**
     * Valeur h t.
     *
     * @var float
     */
    private $valeurHT;

    /**
     * Valeur locative.
     *
     * @var float
     */
    private $valeurLocative;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bureau.
     *
     * @return string Returns the bureau.
     */
    public function getBureau() {
        return $this->bureau;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
    }

    /**
     * Get the code journal echeance.
     *
     * @return string Returns the code journal echeance.
     */
    public function getCodeJournalEcheance() {
        return $this->codeJournalEcheance;
    }

    /**
     * Get the code journal paiement.
     *
     * @return string Returns the code journal paiement.
     */
    public function getCodeJournalPaiement() {
        return $this->codeJournalPaiement;
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
     * Get the compte frn.
     *
     * @return string Returns the compte frn.
     */
    public function getCompteFrn() {
        return $this->compteFrn;
    }

    /**
     * Get the cpt assurance.
     *
     * @return string Returns the cpt assurance.
     */
    public function getCptAssurance() {
        return $this->cptAssurance;
    }

    /**
     * Get the cpt charge.
     *
     * @return string Returns the cpt charge.
     */
    public function getCptCharge() {
        return $this->cptCharge;
    }

    /**
     * Get the cpt entretien.
     *
     * @return string Returns the cpt entretien.
     */
    public function getCptEntretien() {
        return $this->cptEntretien;
    }

    /**
     * Get the cpt t v a.
     *
     * @return string Returns the cpt t v a.
     */
    public function getCptTVA() {
        return $this->cptTVA;
    }

    /**
     * Get the cpt t v a assu.
     *
     * @return string Returns the cpt t v a assu.
     */
    public function getCptTVAAssu() {
        return $this->cptTVAAssu;
    }

    /**
     * Get the d i n.
     *
     * @return bool Returns the d i n.
     */
    public function getDIN() {
        return $this->dIN;
    }

    /**
     * Get the date acquisition.
     *
     * @return DateTime Returns the date acquisition.
     */
    public function getDateAcquisition() {
        return $this->dateAcquisition;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime Returns the date fin contrat.
     */
    public function getDateFinContrat() {
        return $this->dateFinContrat;
    }

    /**
     * Get the date mise service.
     *
     * @return DateTime Returns the date mise service.
     */
    public function getDateMiseService() {
        return $this->dateMiseService;
    }

    /**
     * Get the guid vehicule.
     *
     * @return string Returns the guid vehicule.
     */
    public function getGuidVehicule() {
        return $this->guidVehicule;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the libelle frn.
     *
     * @return string Returns the libelle frn.
     */
    public function getLibelleFrn() {
        return $this->libelleFrn;
    }

    /**
     * Get the materiaux agricole.
     *
     * @return bool Returns the materiaux agricole.
     */
    public function getMateriauxAgricole() {
        return $this->materiauxAgricole;
    }

    /**
     * Get the montant t v a.
     *
     * @return float Returns the montant t v a.
     */
    public function getMontantTVA() {
        return $this->montantTVA;
    }

    /**
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
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
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the t p duree.
     *
     * @return int Returns the t p duree.
     */
    public function getTPDuree() {
        return $this->tPDuree;
    }

    /**
     * Get the t p echoir echu.
     *
     * @return string Returns the t p echoir echu.
     */
    public function getTPEchoirEchu() {
        return $this->tPEchoirEchu;
    }

    /**
     * Get the t p mois annee.
     *
     * @return string Returns the t p mois annee.
     */
    public function getTPMoisAnnee() {
        return $this->tPMoisAnnee;
    }

    /**
     * Get the t p montt depot.
     *
     * @return float Returns the t p montt depot.
     */
    public function getTPMonttDepot() {
        return $this->tPMonttDepot;
    }

    /**
     * Get the t p periodicite.
     *
     * @return string Returns the t p periodicite.
     */
    public function getTPPeriodicite() {
        return $this->tPPeriodicite;
    }

    /**
     * Get the t p premier paiement.
     *
     * @return DateTime Returns the t p premier paiement.
     */
    public function getTPPremierPaiement() {
        return $this->tPPremierPaiement;
    }

    /**
     * Get the taxe pro.
     *
     * @return bool Returns the taxe pro.
     */
    public function getTaxePro() {
        return $this->taxePro;
    }

    /**
     * Get the valeur h t.
     *
     * @return float Returns the valeur h t.
     */
    public function getValeurHT() {
        return $this->valeurHT;
    }

    /**
     * Get the valeur locative.
     *
     * @return float Returns the valeur locative.
     */
    public function getValeurLocative() {
        return $this->valeurLocative;
    }

    /**
     * Set the bureau.
     *
     * @param string $bureau The bureau.
     * @return LocationsFi Returns this locations fi.
     */
    public function setBureau($bureau) {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal echeance.
     *
     * @param string $codeJournalEcheance The code journal echeance.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCodeJournalEcheance($codeJournalEcheance) {
        $this->codeJournalEcheance = $codeJournalEcheance;
        return $this;
    }

    /**
     * Set the code journal paiement.
     *
     * @param string $codeJournalPaiement The code journal paiement.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCodeJournalPaiement($codeJournalPaiement) {
        $this->codeJournalPaiement = $codeJournalPaiement;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the compte frn.
     *
     * @param string $compteFrn The compte frn.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCompteFrn($compteFrn) {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the cpt assurance.
     *
     * @param string $cptAssurance The cpt assurance.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCptAssurance($cptAssurance) {
        $this->cptAssurance = $cptAssurance;
        return $this;
    }

    /**
     * Set the cpt charge.
     *
     * @param string $cptCharge The cpt charge.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCptCharge($cptCharge) {
        $this->cptCharge = $cptCharge;
        return $this;
    }

    /**
     * Set the cpt entretien.
     *
     * @param string $cptEntretien The cpt entretien.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCptEntretien($cptEntretien) {
        $this->cptEntretien = $cptEntretien;
        return $this;
    }

    /**
     * Set the cpt t v a.
     *
     * @param string $cptTVA The cpt t v a.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCptTVA($cptTVA) {
        $this->cptTVA = $cptTVA;
        return $this;
    }

    /**
     * Set the cpt t v a assu.
     *
     * @param string $cptTVAAssu The cpt t v a assu.
     * @return LocationsFi Returns this locations fi.
     */
    public function setCptTVAAssu($cptTVAAssu) {
        $this->cptTVAAssu = $cptTVAAssu;
        return $this;
    }

    /**
     * Set the d i n.
     *
     * @param bool $dIN The d i n.
     * @return LocationsFi Returns this locations fi.
     */
    public function setDIN($dIN) {
        $this->dIN = $dIN;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime $dateAcquisition The date acquisition.
     * @return LocationsFi Returns this locations fi.
     */
    public function setDateAcquisition(DateTime $dateAcquisition = null) {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime $dateFinContrat The date fin contrat.
     * @return LocationsFi Returns this locations fi.
     */
    public function setDateFinContrat(DateTime $dateFinContrat = null) {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime $dateMiseService The date mise service.
     * @return LocationsFi Returns this locations fi.
     */
    public function setDateMiseService(DateTime $dateMiseService = null) {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string $guidVehicule The guid vehicule.
     * @return LocationsFi Returns this locations fi.
     */
    public function setGuidVehicule($guidVehicule) {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return LocationsFi Returns this locations fi.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string $libelleFrn The libelle frn.
     * @return LocationsFi Returns this locations fi.
     */
    public function setLibelleFrn($libelleFrn) {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool $materiauxAgricole The materiaux agricole.
     * @return LocationsFi Returns this locations fi.
     */
    public function setMateriauxAgricole($materiauxAgricole) {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant t v a.
     *
     * @param float $montantTVA The montant t v a.
     * @return LocationsFi Returns this locations fi.
     */
    public function setMontantTVA($montantTVA) {
        $this->montantTVA = $montantTVA;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return LocationsFi Returns this locations fi.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return LocationsFi Returns this locations fi.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return LocationsFi Returns this locations fi.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return LocationsFi Returns this locations fi.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return LocationsFi Returns this locations fi.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the t p duree.
     *
     * @param int $tPDuree The t p duree.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTPDuree($tPDuree) {
        $this->tPDuree = $tPDuree;
        return $this;
    }

    /**
     * Set the t p echoir echu.
     *
     * @param string $tPEchoirEchu The t p echoir echu.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTPEchoirEchu($tPEchoirEchu) {
        $this->tPEchoirEchu = $tPEchoirEchu;
        return $this;
    }

    /**
     * Set the t p mois annee.
     *
     * @param string $tPMoisAnnee The t p mois annee.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTPMoisAnnee($tPMoisAnnee) {
        $this->tPMoisAnnee = $tPMoisAnnee;
        return $this;
    }

    /**
     * Set the t p montt depot.
     *
     * @param float $tPMonttDepot The t p montt depot.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTPMonttDepot($tPMonttDepot) {
        $this->tPMonttDepot = $tPMonttDepot;
        return $this;
    }

    /**
     * Set the t p periodicite.
     *
     * @param string $tPPeriodicite The t p periodicite.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTPPeriodicite($tPPeriodicite) {
        $this->tPPeriodicite = $tPPeriodicite;
        return $this;
    }

    /**
     * Set the t p premier paiement.
     *
     * @param DateTime $tPPremierPaiement The t p premier paiement.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTPPremierPaiement(DateTime $tPPremierPaiement = null) {
        $this->tPPremierPaiement = $tPPremierPaiement;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool $taxePro The taxe pro.
     * @return LocationsFi Returns this locations fi.
     */
    public function setTaxePro($taxePro) {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the valeur h t.
     *
     * @param float $valeurHT The valeur h t.
     * @return LocationsFi Returns this locations fi.
     */
    public function setValeurHT($valeurHT) {
        $this->valeurHT = $valeurHT;
        return $this;
    }

    /**
     * Set the valeur locative.
     *
     * @param float $valeurLocative The valeur locative.
     * @return LocationsFi Returns this locations fi.
     */
    public function setValeurLocative($valeurLocative) {
        $this->valeurLocative = $valeurLocative;
        return $this;
    }
}
