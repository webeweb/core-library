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
 * Credits bails model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CreditsBails {

    /**
     * A d amort anterieur.
     *
     * @var float
     */
    private $aDAmortAnterieur;

    /**
     * A d amort anterieur2.
     *
     * @var float
     */
    private $aDAmortAnterieur2;

    /**
     * A d annees amort.
     *
     * @var float
     */
    private $aDAnneesAmort;

    /**
     * A d coeff degressif.
     *
     * @var float
     */
    private $aDCoeffDegressif;

    /**
     * A d dotation.
     *
     * @var float
     */
    private $aDDotation;

    /**
     * A d dotation2.
     *
     * @var float
     */
    private $aDDotation2;

    /**
     * A d dotation except.
     *
     * @var float
     */
    private $aDDotationExcept;

    /**
     * A d duree.
     *
     * @var float
     */
    private $aDDuree;

    /**
     * A d taux lineaire.
     *
     * @var float
     */
    private $aDTauxLineaire;

    /**
     * A d type.
     *
     * @var string
     */
    private $aDType;

    /**
     * A f amort anterieur.
     *
     * @var float
     */
    private $aFAmortAnterieur;

    /**
     * A f annees amort.
     *
     * @var float
     */
    private $aFAnneesAmort;

    /**
     * A f coeff degressif.
     *
     * @var float
     */
    private $aFCoeffDegressif;

    /**
     * A f dotation.
     *
     * @var float
     */
    private $aFDotation;

    /**
     * A f duree.
     *
     * @var float
     */
    private $aFDuree;

    /**
     * A f s i i.
     *
     * @var bool
     */
    private $aFSII;

    /**
     * A f taux except.
     *
     * @var float
     */
    private $aFTauxExcept;

    /**
     * A f taux lineaire.
     *
     * @var float
     */
    private $aFTauxLineaire;

    /**
     * A f type.
     *
     * @var string
     */
    private $aFType;

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
     * C b en francs.
     *
     * @var bool
     */
    private $cBEnFrancs;

    /**
     * C r r date.
     *
     * @var DateTime
     */
    private $cRRDate;

    /**
     * C r r p m value c t.
     *
     * @var float
     */
    private $cRRPMValueCT;

    /**
     * C r r p m value l t.
     *
     * @var float
     */
    private $cRRPMValueLT;

    /**
     * C r r px cession h t.
     *
     * @var float
     */
    private $cRRPxCessionHT;

    /**
     * C r r qte vendue.
     *
     * @var float
     */
    private $cRRQteVendue;

    /**
     * C r r suppl amort.
     *
     * @var float
     */
    private $cRRSupplAmort;

    /**
     * C r r suppl valeur.
     *
     * @var float
     */
    private $cRRSupplValeur;

    /**
     * C r r type.
     *
     * @var string
     */
    private $cRRType;

    /**
     * C r valeur euros.
     *
     * @var float
     */
    private $cRValeurEuros;

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
     * Date mise service.
     *
     * @var DateTime
     */
    private $dateMiseService;

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
     * Montant t v a.
     *
     * @var float
     */
    private $montantTVA;

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
     * Valeur euros.
     *
     * @var float
     */
    private $valeurEuros;

    /**
     * Valeur h t.
     *
     * @var float
     */
    private $valeurHT;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a d amort anterieur.
     *
     * @return float Returns the a d amort anterieur.
     */
    public function getADAmortAnterieur() {
        return $this->aDAmortAnterieur;
    }

    /**
     * Get the a d amort anterieur2.
     *
     * @return float Returns the a d amort anterieur2.
     */
    public function getADAmortAnterieur2() {
        return $this->aDAmortAnterieur2;
    }

    /**
     * Get the a d annees amort.
     *
     * @return float Returns the a d annees amort.
     */
    public function getADAnneesAmort() {
        return $this->aDAnneesAmort;
    }

    /**
     * Get the a d coeff degressif.
     *
     * @return float Returns the a d coeff degressif.
     */
    public function getADCoeffDegressif() {
        return $this->aDCoeffDegressif;
    }

    /**
     * Get the a d dotation.
     *
     * @return float Returns the a d dotation.
     */
    public function getADDotation() {
        return $this->aDDotation;
    }

    /**
     * Get the a d dotation2.
     *
     * @return float Returns the a d dotation2.
     */
    public function getADDotation2() {
        return $this->aDDotation2;
    }

    /**
     * Get the a d dotation except.
     *
     * @return float Returns the a d dotation except.
     */
    public function getADDotationExcept() {
        return $this->aDDotationExcept;
    }

    /**
     * Get the a d duree.
     *
     * @return float Returns the a d duree.
     */
    public function getADDuree() {
        return $this->aDDuree;
    }

    /**
     * Get the a d taux lineaire.
     *
     * @return float Returns the a d taux lineaire.
     */
    public function getADTauxLineaire() {
        return $this->aDTauxLineaire;
    }

    /**
     * Get the a d type.
     *
     * @return string Returns the a d type.
     */
    public function getADType() {
        return $this->aDType;
    }

    /**
     * Get the a f amort anterieur.
     *
     * @return float Returns the a f amort anterieur.
     */
    public function getAFAmortAnterieur() {
        return $this->aFAmortAnterieur;
    }

    /**
     * Get the a f annees amort.
     *
     * @return float Returns the a f annees amort.
     */
    public function getAFAnneesAmort() {
        return $this->aFAnneesAmort;
    }

    /**
     * Get the a f coeff degressif.
     *
     * @return float Returns the a f coeff degressif.
     */
    public function getAFCoeffDegressif() {
        return $this->aFCoeffDegressif;
    }

    /**
     * Get the a f dotation.
     *
     * @return float Returns the a f dotation.
     */
    public function getAFDotation() {
        return $this->aFDotation;
    }

    /**
     * Get the a f duree.
     *
     * @return float Returns the a f duree.
     */
    public function getAFDuree() {
        return $this->aFDuree;
    }

    /**
     * Get the a f s i i.
     *
     * @return bool Returns the a f s i i.
     */
    public function getAFSII() {
        return $this->aFSII;
    }

    /**
     * Get the a f taux except.
     *
     * @return float Returns the a f taux except.
     */
    public function getAFTauxExcept() {
        return $this->aFTauxExcept;
    }

    /**
     * Get the a f taux lineaire.
     *
     * @return float Returns the a f taux lineaire.
     */
    public function getAFTauxLineaire() {
        return $this->aFTauxLineaire;
    }

    /**
     * Get the a f type.
     *
     * @return string Returns the a f type.
     */
    public function getAFType() {
        return $this->aFType;
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
     * Get the c b en francs.
     *
     * @return bool Returns the c b en francs.
     */
    public function getCBEnFrancs() {
        return $this->cBEnFrancs;
    }

    /**
     * Get the c r r date.
     *
     * @return DateTime Returns the c r r date.
     */
    public function getCRRDate() {
        return $this->cRRDate;
    }

    /**
     * Get the c r r p m value c t.
     *
     * @return float Returns the c r r p m value c t.
     */
    public function getCRRPMValueCT() {
        return $this->cRRPMValueCT;
    }

    /**
     * Get the c r r p m value l t.
     *
     * @return float Returns the c r r p m value l t.
     */
    public function getCRRPMValueLT() {
        return $this->cRRPMValueLT;
    }

    /**
     * Get the c r r px cession h t.
     *
     * @return float Returns the c r r px cession h t.
     */
    public function getCRRPxCessionHT() {
        return $this->cRRPxCessionHT;
    }

    /**
     * Get the c r r qte vendue.
     *
     * @return float Returns the c r r qte vendue.
     */
    public function getCRRQteVendue() {
        return $this->cRRQteVendue;
    }

    /**
     * Get the c r r suppl amort.
     *
     * @return float Returns the c r r suppl amort.
     */
    public function getCRRSupplAmort() {
        return $this->cRRSupplAmort;
    }

    /**
     * Get the c r r suppl valeur.
     *
     * @return float Returns the c r r suppl valeur.
     */
    public function getCRRSupplValeur() {
        return $this->cRRSupplValeur;
    }

    /**
     * Get the c r r type.
     *
     * @return string Returns the c r r type.
     */
    public function getCRRType() {
        return $this->cRRType;
    }

    /**
     * Get the c r valeur euros.
     *
     * @return float Returns the c r valeur euros.
     */
    public function getCRValeurEuros() {
        return $this->cRValeurEuros;
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
     * Get the date mise service.
     *
     * @return DateTime Returns the date mise service.
     */
    public function getDateMiseService() {
        return $this->dateMiseService;
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
     * Get the montant t v a.
     *
     * @return float Returns the montant t v a.
     */
    public function getMontantTVA() {
        return $this->montantTVA;
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
     * Get the valeur euros.
     *
     * @return float Returns the valeur euros.
     */
    public function getValeurEuros() {
        return $this->valeurEuros;
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
     * Set the a d amort anterieur.
     *
     * @param float $aDAmortAnterieur The a d amort anterieur.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADAmortAnterieur($aDAmortAnterieur) {
        $this->aDAmortAnterieur = $aDAmortAnterieur;
        return $this;
    }

    /**
     * Set the a d amort anterieur2.
     *
     * @param float $aDAmortAnterieur2 The a d amort anterieur2.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADAmortAnterieur2($aDAmortAnterieur2) {
        $this->aDAmortAnterieur2 = $aDAmortAnterieur2;
        return $this;
    }

    /**
     * Set the a d annees amort.
     *
     * @param float $aDAnneesAmort The a d annees amort.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADAnneesAmort($aDAnneesAmort) {
        $this->aDAnneesAmort = $aDAnneesAmort;
        return $this;
    }

    /**
     * Set the a d coeff degressif.
     *
     * @param float $aDCoeffDegressif The a d coeff degressif.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADCoeffDegressif($aDCoeffDegressif) {
        $this->aDCoeffDegressif = $aDCoeffDegressif;
        return $this;
    }

    /**
     * Set the a d dotation.
     *
     * @param float $aDDotation The a d dotation.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADDotation($aDDotation) {
        $this->aDDotation = $aDDotation;
        return $this;
    }

    /**
     * Set the a d dotation2.
     *
     * @param float $aDDotation2 The a d dotation2.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADDotation2($aDDotation2) {
        $this->aDDotation2 = $aDDotation2;
        return $this;
    }

    /**
     * Set the a d dotation except.
     *
     * @param float $aDDotationExcept The a d dotation except.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADDotationExcept($aDDotationExcept) {
        $this->aDDotationExcept = $aDDotationExcept;
        return $this;
    }

    /**
     * Set the a d duree.
     *
     * @param float $aDDuree The a d duree.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADDuree($aDDuree) {
        $this->aDDuree = $aDDuree;
        return $this;
    }

    /**
     * Set the a d taux lineaire.
     *
     * @param float $aDTauxLineaire The a d taux lineaire.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADTauxLineaire($aDTauxLineaire) {
        $this->aDTauxLineaire = $aDTauxLineaire;
        return $this;
    }

    /**
     * Set the a d type.
     *
     * @param string $aDType The a d type.
     * @return CreditsBails Returns this credits bails.
     */
    public function setADType($aDType) {
        $this->aDType = $aDType;
        return $this;
    }

    /**
     * Set the a f amort anterieur.
     *
     * @param float $aFAmortAnterieur The a f amort anterieur.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFAmortAnterieur($aFAmortAnterieur) {
        $this->aFAmortAnterieur = $aFAmortAnterieur;
        return $this;
    }

    /**
     * Set the a f annees amort.
     *
     * @param float $aFAnneesAmort The a f annees amort.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFAnneesAmort($aFAnneesAmort) {
        $this->aFAnneesAmort = $aFAnneesAmort;
        return $this;
    }

    /**
     * Set the a f coeff degressif.
     *
     * @param float $aFCoeffDegressif The a f coeff degressif.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFCoeffDegressif($aFCoeffDegressif) {
        $this->aFCoeffDegressif = $aFCoeffDegressif;
        return $this;
    }

    /**
     * Set the a f dotation.
     *
     * @param float $aFDotation The a f dotation.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFDotation($aFDotation) {
        $this->aFDotation = $aFDotation;
        return $this;
    }

    /**
     * Set the a f duree.
     *
     * @param float $aFDuree The a f duree.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFDuree($aFDuree) {
        $this->aFDuree = $aFDuree;
        return $this;
    }

    /**
     * Set the a f s i i.
     *
     * @param bool $aFSII The a f s i i.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFSII($aFSII) {
        $this->aFSII = $aFSII;
        return $this;
    }

    /**
     * Set the a f taux except.
     *
     * @param float $aFTauxExcept The a f taux except.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFTauxExcept($aFTauxExcept) {
        $this->aFTauxExcept = $aFTauxExcept;
        return $this;
    }

    /**
     * Set the a f taux lineaire.
     *
     * @param float $aFTauxLineaire The a f taux lineaire.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFTauxLineaire($aFTauxLineaire) {
        $this->aFTauxLineaire = $aFTauxLineaire;
        return $this;
    }

    /**
     * Set the a f type.
     *
     * @param string $aFType The a f type.
     * @return CreditsBails Returns this credits bails.
     */
    public function setAFType($aFType) {
        $this->aFType = $aFType;
        return $this;
    }

    /**
     * Set the base taxe pro.
     *
     * @param float $baseTaxePro The base taxe pro.
     * @return CreditsBails Returns this credits bails.
     */
    public function setBaseTaxePro($baseTaxePro) {
        $this->baseTaxePro = $baseTaxePro;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string $bureau The bureau.
     * @return CreditsBails Returns this credits bails.
     */
    public function setBureau($bureau) {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the c b en francs.
     *
     * @param bool $cBEnFrancs The c b en francs.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCBEnFrancs($cBEnFrancs) {
        $this->cBEnFrancs = $cBEnFrancs;
        return $this;
    }

    /**
     * Set the c r r date.
     *
     * @param DateTime $cRRDate The c r r date.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRDate(DateTime $cRRDate = null) {
        $this->cRRDate = $cRRDate;
        return $this;
    }

    /**
     * Set the c r r p m value c t.
     *
     * @param float $cRRPMValueCT The c r r p m value c t.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRPMValueCT($cRRPMValueCT) {
        $this->cRRPMValueCT = $cRRPMValueCT;
        return $this;
    }

    /**
     * Set the c r r p m value l t.
     *
     * @param float $cRRPMValueLT The c r r p m value l t.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRPMValueLT($cRRPMValueLT) {
        $this->cRRPMValueLT = $cRRPMValueLT;
        return $this;
    }

    /**
     * Set the c r r px cession h t.
     *
     * @param float $cRRPxCessionHT The c r r px cession h t.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRPxCessionHT($cRRPxCessionHT) {
        $this->cRRPxCessionHT = $cRRPxCessionHT;
        return $this;
    }

    /**
     * Set the c r r qte vendue.
     *
     * @param float $cRRQteVendue The c r r qte vendue.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRQteVendue($cRRQteVendue) {
        $this->cRRQteVendue = $cRRQteVendue;
        return $this;
    }

    /**
     * Set the c r r suppl amort.
     *
     * @param float $cRRSupplAmort The c r r suppl amort.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRSupplAmort($cRRSupplAmort) {
        $this->cRRSupplAmort = $cRRSupplAmort;
        return $this;
    }

    /**
     * Set the c r r suppl valeur.
     *
     * @param float $cRRSupplValeur The c r r suppl valeur.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRSupplValeur($cRRSupplValeur) {
        $this->cRRSupplValeur = $cRRSupplValeur;
        return $this;
    }

    /**
     * Set the c r r type.
     *
     * @param string $cRRType The c r r type.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRRType($cRRType) {
        $this->cRRType = $cRRType;
        return $this;
    }

    /**
     * Set the c r valeur euros.
     *
     * @param float $cRValeurEuros The c r valeur euros.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCRValeurEuros($cRValeurEuros) {
        $this->cRValeurEuros = $cRValeurEuros;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal echeance.
     *
     * @param string $codeJournalEcheance The code journal echeance.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCodeJournalEcheance($codeJournalEcheance) {
        $this->codeJournalEcheance = $codeJournalEcheance;
        return $this;
    }

    /**
     * Set the code journal paiement.
     *
     * @param string $codeJournalPaiement The code journal paiement.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCodeJournalPaiement($codeJournalPaiement) {
        $this->codeJournalPaiement = $codeJournalPaiement;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the compte frn.
     *
     * @param string $compteFrn The compte frn.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCompteFrn($compteFrn) {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the cpt assurance.
     *
     * @param string $cptAssurance The cpt assurance.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCptAssurance($cptAssurance) {
        $this->cptAssurance = $cptAssurance;
        return $this;
    }

    /**
     * Set the cpt charge.
     *
     * @param string $cptCharge The cpt charge.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCptCharge($cptCharge) {
        $this->cptCharge = $cptCharge;
        return $this;
    }

    /**
     * Set the cpt entretien.
     *
     * @param string $cptEntretien The cpt entretien.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCptEntretien($cptEntretien) {
        $this->cptEntretien = $cptEntretien;
        return $this;
    }

    /**
     * Set the cpt t v a.
     *
     * @param string $cptTVA The cpt t v a.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCptTVA($cptTVA) {
        $this->cptTVA = $cptTVA;
        return $this;
    }

    /**
     * Set the cpt t v a assu.
     *
     * @param string $cptTVAAssu The cpt t v a assu.
     * @return CreditsBails Returns this credits bails.
     */
    public function setCptTVAAssu($cptTVAAssu) {
        $this->cptTVAAssu = $cptTVAAssu;
        return $this;
    }

    /**
     * Set the d i n.
     *
     * @param bool $dIN The d i n.
     * @return CreditsBails Returns this credits bails.
     */
    public function setDIN($dIN) {
        $this->dIN = $dIN;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime $dateAcquisition The date acquisition.
     * @return CreditsBails Returns this credits bails.
     */
    public function setDateAcquisition(DateTime $dateAcquisition = null) {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime $dateMiseService The date mise service.
     * @return CreditsBails Returns this credits bails.
     */
    public function setDateMiseService(DateTime $dateMiseService = null) {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return CreditsBails Returns this credits bails.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string $guidVehicule The guid vehicule.
     * @return CreditsBails Returns this credits bails.
     */
    public function setGuidVehicule($guidVehicule) {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return CreditsBails Returns this credits bails.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string $libelleFrn The libelle frn.
     * @return CreditsBails Returns this credits bails.
     */
    public function setLibelleFrn($libelleFrn) {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the limite amort.
     *
     * @param float $limiteAmort The limite amort.
     * @return CreditsBails Returns this credits bails.
     */
    public function setLimiteAmort($limiteAmort) {
        $this->limiteAmort = $limiteAmort;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool $materiauxAgricole The materiaux agricole.
     * @return CreditsBails Returns this credits bails.
     */
    public function setMateriauxAgricole($materiauxAgricole) {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant t v a.
     *
     * @param float $montantTVA The montant t v a.
     * @return CreditsBails Returns this credits bails.
     */
    public function setMontantTVA($montantTVA) {
        $this->montantTVA = $montantTVA;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the num deux immo rachat.
     *
     * @param int $numDeuxImmoRachat The num deux immo rachat.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNumDeuxImmoRachat($numDeuxImmoRachat) {
        $this->numDeuxImmoRachat = $numDeuxImmoRachat;
        return $this;
    }

    /**
     * Set the num immo rachat.
     *
     * @param int $numImmoRachat The num immo rachat.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNumImmoRachat($numImmoRachat) {
        $this->numImmoRachat = $numImmoRachat;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int $numeroDeux The numero deux.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNumeroDeux($numeroDeux) {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return CreditsBails Returns this credits bails.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return CreditsBails Returns this credits bails.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return CreditsBails Returns this credits bails.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the t p duree.
     *
     * @param int $tPDuree The t p duree.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTPDuree($tPDuree) {
        $this->tPDuree = $tPDuree;
        return $this;
    }

    /**
     * Set the t p echoir echu.
     *
     * @param string $tPEchoirEchu The t p echoir echu.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTPEchoirEchu($tPEchoirEchu) {
        $this->tPEchoirEchu = $tPEchoirEchu;
        return $this;
    }

    /**
     * Set the t p mois annee.
     *
     * @param string $tPMoisAnnee The t p mois annee.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTPMoisAnnee($tPMoisAnnee) {
        $this->tPMoisAnnee = $tPMoisAnnee;
        return $this;
    }

    /**
     * Set the t p montt depot.
     *
     * @param float $tPMonttDepot The t p montt depot.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTPMonttDepot($tPMonttDepot) {
        $this->tPMonttDepot = $tPMonttDepot;
        return $this;
    }

    /**
     * Set the t p periodicite.
     *
     * @param string $tPPeriodicite The t p periodicite.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTPPeriodicite($tPPeriodicite) {
        $this->tPPeriodicite = $tPPeriodicite;
        return $this;
    }

    /**
     * Set the t p premier paiement.
     *
     * @param DateTime $tPPremierPaiement The t p premier paiement.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTPPremierPaiement(DateTime $tPPremierPaiement = null) {
        $this->tPPremierPaiement = $tPPremierPaiement;
        return $this;
    }

    /**
     * Set the taxe fonciere.
     *
     * @param bool $taxeFonciere The taxe fonciere.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTaxeFonciere($taxeFonciere) {
        $this->taxeFonciere = $taxeFonciere;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool $taxePro The taxe pro.
     * @return CreditsBails Returns this credits bails.
     */
    public function setTaxePro($taxePro) {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the valeur euros.
     *
     * @param float $valeurEuros The valeur euros.
     * @return CreditsBails Returns this credits bails.
     */
    public function setValeurEuros($valeurEuros) {
        $this->valeurEuros = $valeurEuros;
        return $this;
    }

    /**
     * Set the valeur h t.
     *
     * @param float $valeurHT The valeur h t.
     * @return CreditsBails Returns this credits bails.
     */
    public function setValeurHT($valeurHT) {
        $this->valeurHT = $valeurHT;
        return $this;
    }
}
