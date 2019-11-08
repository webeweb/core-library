<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Locations fi.
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
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

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
     * Cpt tva.
     *
     * @var string
     */
    private $cptTva;

    /**
     * Cpt tva assu.
     *
     * @var string
     */
    private $cptTvaAssu;

    /**
     * Date acquisition.
     *
     * @var DateTime|null
     */
    private $dateAcquisition;

    /**
     * Date fin contrat.
     *
     * @var DateTime|null
     */
    private $dateFinContrat;

    /**
     * Date mise service.
     *
     * @var DateTime|null
     */
    private $dateMiseService;

    /**
     * Din.
     *
     * @var bool
     */
    private $din;

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
     * Montant tva.
     *
     * @var float
     */
    private $montantTva;

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
     * Numero pj.
     *
     * @var int
     */
    private $numeroPj;

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
     * Taxe pro.
     *
     * @var bool
     */
    private $taxePro;

    /**
     * Tp duree.
     *
     * @var int
     */
    private $tpDuree;

    /**
     * Tp echoir echu.
     *
     * @var string
     */
    private $tpEchoirEchu;

    /**
     * Tp mois annee.
     *
     * @var string
     */
    private $tpMoisAnnee;

    /**
     * Tp montt depot.
     *
     * @var float
     */
    private $tpMonttDepot;

    /**
     * Tp periodicite.
     *
     * @var string
     */
    private $tpPeriodicite;

    /**
     * Tp premier paiement.
     *
     * @var DateTime|null
     */
    private $tpPremierPaiement;

    /**
     * Valeur ht.
     *
     * @var float
     */
    private $valeurHt;

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
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
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
     * Get the cpt tva.
     *
     * @return string Returns the cpt tva.
     */
    public function getCptTva() {
        return $this->cptTva;
    }

    /**
     * Get the cpt tva assu.
     *
     * @return string Returns the cpt tva assu.
     */
    public function getCptTvaAssu() {
        return $this->cptTvaAssu;
    }

    /**
     * Get the date acquisition.
     *
     * @return DateTime|null Returns the date acquisition.
     */
    public function getDateAcquisition() {
        return $this->dateAcquisition;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime|null Returns the date fin contrat.
     */
    public function getDateFinContrat() {
        return $this->dateFinContrat;
    }

    /**
     * Get the date mise service.
     *
     * @return DateTime|null Returns the date mise service.
     */
    public function getDateMiseService() {
        return $this->dateMiseService;
    }

    /**
     * Get the din.
     *
     * @return bool Returns the din.
     */
    public function getDin() {
        return $this->din;
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
     * Get the montant tva.
     *
     * @return float Returns the montant tva.
     */
    public function getMontantTva() {
        return $this->montantTva;
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
     * Get the numero pj.
     *
     * @return int Returns the numero pj.
     */
    public function getNumeroPj() {
        return $this->numeroPj;
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
     * Get the taxe pro.
     *
     * @return bool Returns the taxe pro.
     */
    public function getTaxePro() {
        return $this->taxePro;
    }

    /**
     * Get the tp duree.
     *
     * @return int Returns the tp duree.
     */
    public function getTpDuree() {
        return $this->tpDuree;
    }

    /**
     * Get the tp echoir echu.
     *
     * @return string Returns the tp echoir echu.
     */
    public function getTpEchoirEchu() {
        return $this->tpEchoirEchu;
    }

    /**
     * Get the tp mois annee.
     *
     * @return string Returns the tp mois annee.
     */
    public function getTpMoisAnnee() {
        return $this->tpMoisAnnee;
    }

    /**
     * Get the tp montt depot.
     *
     * @return float Returns the tp montt depot.
     */
    public function getTpMonttDepot() {
        return $this->tpMonttDepot;
    }

    /**
     * Get the tp periodicite.
     *
     * @return string Returns the tp periodicite.
     */
    public function getTpPeriodicite() {
        return $this->tpPeriodicite;
    }

    /**
     * Get the tp premier paiement.
     *
     * @return DateTime|null Returns the tp premier paiement.
     */
    public function getTpPremierPaiement() {
        return $this->tpPremierPaiement;
    }

    /**
     * Get the valeur ht.
     *
     * @return float Returns the valeur ht.
     */
    public function getValeurHt() {
        return $this->valeurHt;
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
     */
    public function setBureau($bureau) {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal echeance.
     *
     * @param string $codeJournalEcheance The code journal echeance.
     */
    public function setCodeJournalEcheance($codeJournalEcheance) {
        $this->codeJournalEcheance = $codeJournalEcheance;
        return $this;
    }

    /**
     * Set the code journal paiement.
     *
     * @param string $codeJournalPaiement The code journal paiement.
     */
    public function setCodeJournalPaiement($codeJournalPaiement) {
        $this->codeJournalPaiement = $codeJournalPaiement;
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
     * Set the compte frn.
     *
     * @param string $compteFrn The compte frn.
     */
    public function setCompteFrn($compteFrn) {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the cpt assurance.
     *
     * @param string $cptAssurance The cpt assurance.
     */
    public function setCptAssurance($cptAssurance) {
        $this->cptAssurance = $cptAssurance;
        return $this;
    }

    /**
     * Set the cpt charge.
     *
     * @param string $cptCharge The cpt charge.
     */
    public function setCptCharge($cptCharge) {
        $this->cptCharge = $cptCharge;
        return $this;
    }

    /**
     * Set the cpt entretien.
     *
     * @param string $cptEntretien The cpt entretien.
     */
    public function setCptEntretien($cptEntretien) {
        $this->cptEntretien = $cptEntretien;
        return $this;
    }

    /**
     * Set the cpt tva.
     *
     * @param string $cptTva The cpt tva.
     */
    public function setCptTva($cptTva) {
        $this->cptTva = $cptTva;
        return $this;
    }

    /**
     * Set the cpt tva assu.
     *
     * @param string $cptTvaAssu The cpt tva assu.
     */
    public function setCptTvaAssu($cptTvaAssu) {
        $this->cptTvaAssu = $cptTvaAssu;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime|null $dateAcquisition The date acquisition.
     */
    public function setDateAcquisition(DateTime $dateAcquisition = null) {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     */
    public function setDateFinContrat(DateTime $dateFinContrat = null) {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime|null $dateMiseService The date mise service.
     */
    public function setDateMiseService(DateTime $dateMiseService = null) {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the din.
     *
     * @param bool $din The din.
     */
    public function setDin($din) {
        $this->din = $din;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string $guidVehicule The guid vehicule.
     */
    public function setGuidVehicule($guidVehicule) {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string $libelleFrn The libelle frn.
     */
    public function setLibelleFrn($libelleFrn) {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool $materiauxAgricole The materiaux agricole.
     */
    public function setMateriauxAgricole($materiauxAgricole) {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float $montantTva The montant tva.
     */
    public function setMontantTva($montantTva) {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
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
     * Set the numero pj.
     *
     * @param int $numeroPj The numero pj.
     */
    public function setNumeroPj($numeroPj) {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool $taxePro The taxe pro.
     */
    public function setTaxePro($taxePro) {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the tp duree.
     *
     * @param int $tpDuree The tp duree.
     */
    public function setTpDuree($tpDuree) {
        $this->tpDuree = $tpDuree;
        return $this;
    }

    /**
     * Set the tp echoir echu.
     *
     * @param string $tpEchoirEchu The tp echoir echu.
     */
    public function setTpEchoirEchu($tpEchoirEchu) {
        $this->tpEchoirEchu = $tpEchoirEchu;
        return $this;
    }

    /**
     * Set the tp mois annee.
     *
     * @param string $tpMoisAnnee The tp mois annee.
     */
    public function setTpMoisAnnee($tpMoisAnnee) {
        $this->tpMoisAnnee = $tpMoisAnnee;
        return $this;
    }

    /**
     * Set the tp montt depot.
     *
     * @param float $tpMonttDepot The tp montt depot.
     */
    public function setTpMonttDepot($tpMonttDepot) {
        $this->tpMonttDepot = $tpMonttDepot;
        return $this;
    }

    /**
     * Set the tp periodicite.
     *
     * @param string $tpPeriodicite The tp periodicite.
     */
    public function setTpPeriodicite($tpPeriodicite) {
        $this->tpPeriodicite = $tpPeriodicite;
        return $this;
    }

    /**
     * Set the tp premier paiement.
     *
     * @param DateTime|null $tpPremierPaiement The tp premier paiement.
     */
    public function setTpPremierPaiement(DateTime $tpPremierPaiement = null) {
        $this->tpPremierPaiement = $tpPremierPaiement;
        return $this;
    }

    /**
     * Set the valeur ht.
     *
     * @param float $valeurHt The valeur ht.
     */
    public function setValeurHt($valeurHt) {
        $this->valeurHt = $valeurHt;
        return $this;
    }

    /**
     * Set the valeur locative.
     *
     * @param float $valeurLocative The valeur locative.
     */
    public function setValeurLocative($valeurLocative) {
        $this->valeurLocative = $valeurLocative;
        return $this;
    }
}
