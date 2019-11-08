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
 * Credits bails.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CreditsBails {

    /**
     * Ad amort anterieur.
     *
     * @var float
     */
    private $adAmortAnterieur;

    /**
     * Ad amort anterieur2.
     *
     * @var float
     */
    private $adAmortAnterieur2;

    /**
     * Ad annees amort.
     *
     * @var float
     */
    private $adAnneesAmort;

    /**
     * Ad coeff degressif.
     *
     * @var float
     */
    private $adCoeffDegressif;

    /**
     * Ad dotation.
     *
     * @var float
     */
    private $adDotation;

    /**
     * Ad dotation2.
     *
     * @var float
     */
    private $adDotation2;

    /**
     * Ad dotation except.
     *
     * @var float
     */
    private $adDotationExcept;

    /**
     * Ad duree.
     *
     * @var float
     */
    private $adDuree;

    /**
     * Ad taux lineaire.
     *
     * @var float
     */
    private $adTauxLineaire;

    /**
     * Ad type.
     *
     * @var string
     */
    private $adType;

    /**
     * Af amort anterieur.
     *
     * @var float
     */
    private $afAmortAnterieur;

    /**
     * Af annees amort.
     *
     * @var float
     */
    private $afAnneesAmort;

    /**
     * Af coeff degressif.
     *
     * @var float
     */
    private $afCoeffDegressif;

    /**
     * Af dotation.
     *
     * @var float
     */
    private $afDotation;

    /**
     * Af duree.
     *
     * @var float
     */
    private $afDuree;

    /**
     * Af taux except.
     *
     * @var float
     */
    private $afTauxExcept;

    /**
     * Af taux lineaire.
     *
     * @var float
     */
    private $afTauxLineaire;

    /**
     * Af type.
     *
     * @var string
     */
    private $afType;

    /**
     * Afsii.
     *
     * @var bool
     */
    private $afsii;

    /**
     * Base taxe pro.
     *
     * @var float
     */
    private $baseTaxePro;

    /**
     * Bureau.
     *
     * @var string
     */
    private $bureau;

    /**
     * Cb en francs.
     *
     * @var bool
     */
    private $cbEnFrancs;

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
     * Cr valeur euros.
     *
     * @var float
     */
    private $crValeurEuros;

    /**
     * Crr date.
     *
     * @var DateTime|null
     */
    private $crrDate;

    /**
     * Crr px cession ht.
     *
     * @var float
     */
    private $crrPxCessionHt;

    /**
     * Crr qte vendue.
     *
     * @var float
     */
    private $crrQteVendue;

    /**
     * Crr suppl amort.
     *
     * @var float
     */
    private $crrSupplAmort;

    /**
     * Crr suppl valeur.
     *
     * @var float
     */
    private $crrSupplValeur;

    /**
     * Crr type.
     *
     * @var string
     */
    private $crrType;

    /**
     * Crrpm value ct.
     *
     * @var float
     */
    private $crrpmValueCt;

    /**
     * Crrpm value lt.
     *
     * @var float
     */
    private $crrpmValueLt;

    /**
     * Date acquisition.
     *
     * @var DateTime|null
     */
    private $dateAcquisition;

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
     * Etat.
     *
     * @var string
     */
    private $etat;

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
     * Limite amort.
     *
     * @var float
     */
    private $limiteAmort;

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
     * Nature analytique.
     *
     * @var string
     */
    private $natureAnalytique;

    /**
     * Num deux immo rachat.
     *
     * @var int
     */
    private $numDeuxImmoRachat;

    /**
     * Num immo rachat.
     *
     * @var int
     */
    private $numImmoRachat;

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
     * Numero deux.
     *
     * @var int
     */
    private $numeroDeux;

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
     * Taxe fonciere.
     *
     * @var bool
     */
    private $taxeFonciere;

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
     * Valeur euros.
     *
     * @var float
     */
    private $valeurEuros;

    /**
     * Valeur ht.
     *
     * @var float
     */
    private $valeurHt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ad amort anterieur.
     *
     * @return float Returns the ad amort anterieur.
     */
    public function getAdAmortAnterieur() {
        return $this->adAmortAnterieur;
    }

    /**
     * Get the ad amort anterieur2.
     *
     * @return float Returns the ad amort anterieur2.
     */
    public function getAdAmortAnterieur2() {
        return $this->adAmortAnterieur2;
    }

    /**
     * Get the ad annees amort.
     *
     * @return float Returns the ad annees amort.
     */
    public function getAdAnneesAmort() {
        return $this->adAnneesAmort;
    }

    /**
     * Get the ad coeff degressif.
     *
     * @return float Returns the ad coeff degressif.
     */
    public function getAdCoeffDegressif() {
        return $this->adCoeffDegressif;
    }

    /**
     * Get the ad dotation.
     *
     * @return float Returns the ad dotation.
     */
    public function getAdDotation() {
        return $this->adDotation;
    }

    /**
     * Get the ad dotation2.
     *
     * @return float Returns the ad dotation2.
     */
    public function getAdDotation2() {
        return $this->adDotation2;
    }

    /**
     * Get the ad dotation except.
     *
     * @return float Returns the ad dotation except.
     */
    public function getAdDotationExcept() {
        return $this->adDotationExcept;
    }

    /**
     * Get the ad duree.
     *
     * @return float Returns the ad duree.
     */
    public function getAdDuree() {
        return $this->adDuree;
    }

    /**
     * Get the ad taux lineaire.
     *
     * @return float Returns the ad taux lineaire.
     */
    public function getAdTauxLineaire() {
        return $this->adTauxLineaire;
    }

    /**
     * Get the ad type.
     *
     * @return string Returns the ad type.
     */
    public function getAdType() {
        return $this->adType;
    }

    /**
     * Get the af amort anterieur.
     *
     * @return float Returns the af amort anterieur.
     */
    public function getAfAmortAnterieur() {
        return $this->afAmortAnterieur;
    }

    /**
     * Get the af annees amort.
     *
     * @return float Returns the af annees amort.
     */
    public function getAfAnneesAmort() {
        return $this->afAnneesAmort;
    }

    /**
     * Get the af coeff degressif.
     *
     * @return float Returns the af coeff degressif.
     */
    public function getAfCoeffDegressif() {
        return $this->afCoeffDegressif;
    }

    /**
     * Get the af dotation.
     *
     * @return float Returns the af dotation.
     */
    public function getAfDotation() {
        return $this->afDotation;
    }

    /**
     * Get the af duree.
     *
     * @return float Returns the af duree.
     */
    public function getAfDuree() {
        return $this->afDuree;
    }

    /**
     * Get the af taux except.
     *
     * @return float Returns the af taux except.
     */
    public function getAfTauxExcept() {
        return $this->afTauxExcept;
    }

    /**
     * Get the af taux lineaire.
     *
     * @return float Returns the af taux lineaire.
     */
    public function getAfTauxLineaire() {
        return $this->afTauxLineaire;
    }

    /**
     * Get the af type.
     *
     * @return string Returns the af type.
     */
    public function getAfType() {
        return $this->afType;
    }

    /**
     * Get the afsii.
     *
     * @return bool Returns the afsii.
     */
    public function getAfsii() {
        return $this->afsii;
    }

    /**
     * Get the base taxe pro.
     *
     * @return float Returns the base taxe pro.
     */
    public function getBaseTaxePro() {
        return $this->baseTaxePro;
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
     * Get the cb en francs.
     *
     * @return bool Returns the cb en francs.
     */
    public function getCbEnFrancs() {
        return $this->cbEnFrancs;
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
     * Get the cr valeur euros.
     *
     * @return float Returns the cr valeur euros.
     */
    public function getCrValeurEuros() {
        return $this->crValeurEuros;
    }

    /**
     * Get the crr date.
     *
     * @return DateTime|null Returns the crr date.
     */
    public function getCrrDate() {
        return $this->crrDate;
    }

    /**
     * Get the crr px cession ht.
     *
     * @return float Returns the crr px cession ht.
     */
    public function getCrrPxCessionHt() {
        return $this->crrPxCessionHt;
    }

    /**
     * Get the crr qte vendue.
     *
     * @return float Returns the crr qte vendue.
     */
    public function getCrrQteVendue() {
        return $this->crrQteVendue;
    }

    /**
     * Get the crr suppl amort.
     *
     * @return float Returns the crr suppl amort.
     */
    public function getCrrSupplAmort() {
        return $this->crrSupplAmort;
    }

    /**
     * Get the crr suppl valeur.
     *
     * @return float Returns the crr suppl valeur.
     */
    public function getCrrSupplValeur() {
        return $this->crrSupplValeur;
    }

    /**
     * Get the crr type.
     *
     * @return string Returns the crr type.
     */
    public function getCrrType() {
        return $this->crrType;
    }

    /**
     * Get the crrpm value ct.
     *
     * @return float Returns the crrpm value ct.
     */
    public function getCrrpmValueCt() {
        return $this->crrpmValueCt;
    }

    /**
     * Get the crrpm value lt.
     *
     * @return float Returns the crrpm value lt.
     */
    public function getCrrpmValueLt() {
        return $this->crrpmValueLt;
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
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
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
     * Get the limite amort.
     *
     * @return float Returns the limite amort.
     */
    public function getLimiteAmort() {
        return $this->limiteAmort;
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
     * Get the nature analytique.
     *
     * @return string Returns the nature analytique.
     */
    public function getNatureAnalytique() {
        return $this->natureAnalytique;
    }

    /**
     * Get the num deux immo rachat.
     *
     * @return int Returns the num deux immo rachat.
     */
    public function getNumDeuxImmoRachat() {
        return $this->numDeuxImmoRachat;
    }

    /**
     * Get the num immo rachat.
     *
     * @return int Returns the num immo rachat.
     */
    public function getNumImmoRachat() {
        return $this->numImmoRachat;
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
     * Get the numero deux.
     *
     * @return int Returns the numero deux.
     */
    public function getNumeroDeux() {
        return $this->numeroDeux;
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
     * Get the taxe fonciere.
     *
     * @return bool Returns the taxe fonciere.
     */
    public function getTaxeFonciere() {
        return $this->taxeFonciere;
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
     * Get the valeur euros.
     *
     * @return float Returns the valeur euros.
     */
    public function getValeurEuros() {
        return $this->valeurEuros;
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
     * Set the ad amort anterieur.
     *
     * @param float $adAmortAnterieur The ad amort anterieur.
     */
    public function setAdAmortAnterieur($adAmortAnterieur) {
        $this->adAmortAnterieur = $adAmortAnterieur;
        return $this;
    }

    /**
     * Set the ad amort anterieur2.
     *
     * @param float $adAmortAnterieur2 The ad amort anterieur2.
     */
    public function setAdAmortAnterieur2($adAmortAnterieur2) {
        $this->adAmortAnterieur2 = $adAmortAnterieur2;
        return $this;
    }

    /**
     * Set the ad annees amort.
     *
     * @param float $adAnneesAmort The ad annees amort.
     */
    public function setAdAnneesAmort($adAnneesAmort) {
        $this->adAnneesAmort = $adAnneesAmort;
        return $this;
    }

    /**
     * Set the ad coeff degressif.
     *
     * @param float $adCoeffDegressif The ad coeff degressif.
     */
    public function setAdCoeffDegressif($adCoeffDegressif) {
        $this->adCoeffDegressif = $adCoeffDegressif;
        return $this;
    }

    /**
     * Set the ad dotation.
     *
     * @param float $adDotation The ad dotation.
     */
    public function setAdDotation($adDotation) {
        $this->adDotation = $adDotation;
        return $this;
    }

    /**
     * Set the ad dotation2.
     *
     * @param float $adDotation2 The ad dotation2.
     */
    public function setAdDotation2($adDotation2) {
        $this->adDotation2 = $adDotation2;
        return $this;
    }

    /**
     * Set the ad dotation except.
     *
     * @param float $adDotationExcept The ad dotation except.
     */
    public function setAdDotationExcept($adDotationExcept) {
        $this->adDotationExcept = $adDotationExcept;
        return $this;
    }

    /**
     * Set the ad duree.
     *
     * @param float $adDuree The ad duree.
     */
    public function setAdDuree($adDuree) {
        $this->adDuree = $adDuree;
        return $this;
    }

    /**
     * Set the ad taux lineaire.
     *
     * @param float $adTauxLineaire The ad taux lineaire.
     */
    public function setAdTauxLineaire($adTauxLineaire) {
        $this->adTauxLineaire = $adTauxLineaire;
        return $this;
    }

    /**
     * Set the ad type.
     *
     * @param string $adType The ad type.
     */
    public function setAdType($adType) {
        $this->adType = $adType;
        return $this;
    }

    /**
     * Set the af amort anterieur.
     *
     * @param float $afAmortAnterieur The af amort anterieur.
     */
    public function setAfAmortAnterieur($afAmortAnterieur) {
        $this->afAmortAnterieur = $afAmortAnterieur;
        return $this;
    }

    /**
     * Set the af annees amort.
     *
     * @param float $afAnneesAmort The af annees amort.
     */
    public function setAfAnneesAmort($afAnneesAmort) {
        $this->afAnneesAmort = $afAnneesAmort;
        return $this;
    }

    /**
     * Set the af coeff degressif.
     *
     * @param float $afCoeffDegressif The af coeff degressif.
     */
    public function setAfCoeffDegressif($afCoeffDegressif) {
        $this->afCoeffDegressif = $afCoeffDegressif;
        return $this;
    }

    /**
     * Set the af dotation.
     *
     * @param float $afDotation The af dotation.
     */
    public function setAfDotation($afDotation) {
        $this->afDotation = $afDotation;
        return $this;
    }

    /**
     * Set the af duree.
     *
     * @param float $afDuree The af duree.
     */
    public function setAfDuree($afDuree) {
        $this->afDuree = $afDuree;
        return $this;
    }

    /**
     * Set the af taux except.
     *
     * @param float $afTauxExcept The af taux except.
     */
    public function setAfTauxExcept($afTauxExcept) {
        $this->afTauxExcept = $afTauxExcept;
        return $this;
    }

    /**
     * Set the af taux lineaire.
     *
     * @param float $afTauxLineaire The af taux lineaire.
     */
    public function setAfTauxLineaire($afTauxLineaire) {
        $this->afTauxLineaire = $afTauxLineaire;
        return $this;
    }

    /**
     * Set the af type.
     *
     * @param string $afType The af type.
     */
    public function setAfType($afType) {
        $this->afType = $afType;
        return $this;
    }

    /**
     * Set the afsii.
     *
     * @param bool $afsii The afsii.
     */
    public function setAfsii($afsii) {
        $this->afsii = $afsii;
        return $this;
    }

    /**
     * Set the base taxe pro.
     *
     * @param float $baseTaxePro The base taxe pro.
     */
    public function setBaseTaxePro($baseTaxePro) {
        $this->baseTaxePro = $baseTaxePro;
        return $this;
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
     * Set the cb en francs.
     *
     * @param bool $cbEnFrancs The cb en francs.
     */
    public function setCbEnFrancs($cbEnFrancs) {
        $this->cbEnFrancs = $cbEnFrancs;
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
     * Set the cr valeur euros.
     *
     * @param float $crValeurEuros The cr valeur euros.
     */
    public function setCrValeurEuros($crValeurEuros) {
        $this->crValeurEuros = $crValeurEuros;
        return $this;
    }

    /**
     * Set the crr date.
     *
     * @param DateTime|null $crrDate The crr date.
     */
    public function setCrrDate(DateTime $crrDate = null) {
        $this->crrDate = $crrDate;
        return $this;
    }

    /**
     * Set the crr px cession ht.
     *
     * @param float $crrPxCessionHt The crr px cession ht.
     */
    public function setCrrPxCessionHt($crrPxCessionHt) {
        $this->crrPxCessionHt = $crrPxCessionHt;
        return $this;
    }

    /**
     * Set the crr qte vendue.
     *
     * @param float $crrQteVendue The crr qte vendue.
     */
    public function setCrrQteVendue($crrQteVendue) {
        $this->crrQteVendue = $crrQteVendue;
        return $this;
    }

    /**
     * Set the crr suppl amort.
     *
     * @param float $crrSupplAmort The crr suppl amort.
     */
    public function setCrrSupplAmort($crrSupplAmort) {
        $this->crrSupplAmort = $crrSupplAmort;
        return $this;
    }

    /**
     * Set the crr suppl valeur.
     *
     * @param float $crrSupplValeur The crr suppl valeur.
     */
    public function setCrrSupplValeur($crrSupplValeur) {
        $this->crrSupplValeur = $crrSupplValeur;
        return $this;
    }

    /**
     * Set the crr type.
     *
     * @param string $crrType The crr type.
     */
    public function setCrrType($crrType) {
        $this->crrType = $crrType;
        return $this;
    }

    /**
     * Set the crrpm value ct.
     *
     * @param float $crrpmValueCt The crrpm value ct.
     */
    public function setCrrpmValueCt($crrpmValueCt) {
        $this->crrpmValueCt = $crrpmValueCt;
        return $this;
    }

    /**
     * Set the crrpm value lt.
     *
     * @param float $crrpmValueLt The crrpm value lt.
     */
    public function setCrrpmValueLt($crrpmValueLt) {
        $this->crrpmValueLt = $crrpmValueLt;
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
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
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
     * Set the limite amort.
     *
     * @param float $limiteAmort The limite amort.
     */
    public function setLimiteAmort($limiteAmort) {
        $this->limiteAmort = $limiteAmort;
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
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the num deux immo rachat.
     *
     * @param int $numDeuxImmoRachat The num deux immo rachat.
     */
    public function setNumDeuxImmoRachat($numDeuxImmoRachat) {
        $this->numDeuxImmoRachat = $numDeuxImmoRachat;
        return $this;
    }

    /**
     * Set the num immo rachat.
     *
     * @param int $numImmoRachat The num immo rachat.
     */
    public function setNumImmoRachat($numImmoRachat) {
        $this->numImmoRachat = $numImmoRachat;
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
     * Set the numero deux.
     *
     * @param int $numeroDeux The numero deux.
     */
    public function setNumeroDeux($numeroDeux) {
        $this->numeroDeux = $numeroDeux;
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
     * Set the taxe fonciere.
     *
     * @param bool $taxeFonciere The taxe fonciere.
     */
    public function setTaxeFonciere($taxeFonciere) {
        $this->taxeFonciere = $taxeFonciere;
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
     * Set the valeur euros.
     *
     * @param float $valeurEuros The valeur euros.
     */
    public function setValeurEuros($valeurEuros) {
        $this->valeurEuros = $valeurEuros;
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
}
