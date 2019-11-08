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
 * Immobilisations.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Immobilisations {

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
     * Ad deduction amort anterieur.
     *
     * @var float
     */
    private $adDeductionAmortAnterieur;

    /**
     * Ad deduction dotation.
     *
     * @var float
     */
    private $adDeductionDotation;

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
     * Ad duree tot.
     *
     * @var string
     */
    private $adDureeTot;

    /**
     * Ad garder dot saisie.
     *
     * @var bool
     */
    private $adGarderDotSaisie;

    /**
     * Ad quantite.
     *
     * @var float
     */
    private $adQuantite;

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
     * Art151 duree deja etalee.
     *
     * @var string
     */
    private $art151DureeDejaEtalee;

    /**
     * Art151 duree etalement.
     *
     * @var string
     */
    private $art151DureeEtalement;

    /**
     * Art151 montant deja etale.
     *
     * @var float
     */
    private $art151MontantDejaEtale;

    /**
     * Art151 montant etale annee.
     *
     * @var float
     */
    private $art151MontantEtaleAnnee;

    /**
     * Base calcul.
     *
     * @var int
     */
    private $baseCalcul;

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
     * C taux imp.
     *
     * @var float
     */
    private $cTauxImp;

    /**
     * C valeur euros.
     *
     * @var float
     */
    private $cValeurEuros;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

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
     * Cr is dot.
     *
     * @var bool
     */
    private $crIsDot;

    /**
     * Crr151 motif.
     *
     * @var bool
     */
    private $crr151Motif;

    /**
     * Crr151 pm value ct.
     *
     * @var float
     */
    private $crr151PmValueCt;

    /**
     * Crr151 pm value lt.
     *
     * @var float
     */
    private $crr151PmValueLt;

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
     * Crrpm value ctf.
     *
     * @var float
     */
    private $crrpmValueCtf;

    /**
     * Crrpm value lt.
     *
     * @var float
     */
    private $crrpmValueLt;

    /**
     * Crrpm value ltf.
     *
     * @var float
     */
    private $crrpmValueLtf;

    /**
     * Date acq forfait.
     *
     * @var DateTime|null
     */
    private $dateAcqForfait;

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
     * Date reeval.
     *
     * @var DateTime|null
     */
    private $dateReeval;

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
     * Famille.
     *
     * @var string
     */
    private $famille;

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
     * Libelle quantite.
     *
     * @var string
     */
    private $libelleQuantite;

    /**
     * Limite amort.
     *
     * @var float
     */
    private $limiteAmort;

    /**
     * Majoration.
     *
     * @var bool
     */
    private $majoration;

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
     * Nb mois majoration.
     *
     * @var string
     */
    private $nbMoisMajoration;

    /**
     * Num cpt trans dot.
     *
     * @var string
     */
    private $numCptTransDot;

    /**
     * Num doss org.
     *
     * @var string
     */
    private $numDossOrg;

    /**
     * Num ens realloc.
     *
     * @var int
     */
    private $numEnsRealloc;

    /**
     * Num ensemble.
     *
     * @var int
     */
    private $numEnsemble;

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
     * Pilotage.
     *
     * @var bool
     */
    private $pilotage;

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
     * Site.
     *
     * @var string
     */
    private $site;

    /**
     * Taux tva.
     *
     * @var float
     */
    private $tauxTva;

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
     * Tp date origine.
     *
     * @var DateTime|null
     */
    private $tpDateOrigine;

    /**
     * V date.
     *
     * @var DateTime|null
     */
    private $vDate;

    /**
     * V numero.
     *
     * @var int
     */
    private $vNumero;

    /**
     * V numero compte.
     *
     * @var string
     */
    private $vNumeroCompte;

    /**
     * V numero compte ini.
     *
     * @var string
     */
    private $vNumeroCompteIni;

    /**
     * V numero deux.
     *
     * @var int
     */
    private $vNumeroDeux;

    /**
     * V numero deux ini.
     *
     * @var int
     */
    private $vNumeroDeuxIni;

    /**
     * V numero ini.
     *
     * @var int
     */
    private $vNumeroIni;

    /**
     * Valeur acq forfait.
     *
     * @var float
     */
    private $valeurAcqForfait;

    /**
     * Valeur base amortissement.
     *
     * @var float
     */
    private $valeurBaseAmortissement;

    /**
     * Valeur deduction.
     *
     * @var float
     */
    private $valeurDeduction;

    /**
     * Valeur ht.
     *
     * @var float
     */
    private $valeurHt;

    /**
     * Valeur ht origine.
     *
     * @var float
     */
    private $valeurHtOrigine;

    /**
     * Vnc realloc.
     *
     * @var float
     */
    private $vncRealloc;

    /**
     * Zone libre1.
     *
     * @var string
     */
    private $zoneLibre1;

    /**
     * Zone libre2.
     *
     * @var string
     */
    private $zoneLibre2;

    /**
     * Zone libre3.
     *
     * @var string
     */
    private $zoneLibre3;

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
     * Get the ad deduction amort anterieur.
     *
     * @return float Returns the ad deduction amort anterieur.
     */
    public function getAdDeductionAmortAnterieur() {
        return $this->adDeductionAmortAnterieur;
    }

    /**
     * Get the ad deduction dotation.
     *
     * @return float Returns the ad deduction dotation.
     */
    public function getAdDeductionDotation() {
        return $this->adDeductionDotation;
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
     * Get the ad duree tot.
     *
     * @return string Returns the ad duree tot.
     */
    public function getAdDureeTot() {
        return $this->adDureeTot;
    }

    /**
     * Get the ad garder dot saisie.
     *
     * @return bool Returns the ad garder dot saisie.
     */
    public function getAdGarderDotSaisie() {
        return $this->adGarderDotSaisie;
    }

    /**
     * Get the ad quantite.
     *
     * @return float Returns the ad quantite.
     */
    public function getAdQuantite() {
        return $this->adQuantite;
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
     * Get the art151 duree deja etalee.
     *
     * @return string Returns the art151 duree deja etalee.
     */
    public function getArt151DureeDejaEtalee() {
        return $this->art151DureeDejaEtalee;
    }

    /**
     * Get the art151 duree etalement.
     *
     * @return string Returns the art151 duree etalement.
     */
    public function getArt151DureeEtalement() {
        return $this->art151DureeEtalement;
    }

    /**
     * Get the art151 montant deja etale.
     *
     * @return float Returns the art151 montant deja etale.
     */
    public function getArt151MontantDejaEtale() {
        return $this->art151MontantDejaEtale;
    }

    /**
     * Get the art151 montant etale annee.
     *
     * @return float Returns the art151 montant etale annee.
     */
    public function getArt151MontantEtaleAnnee() {
        return $this->art151MontantEtaleAnnee;
    }

    /**
     * Get the base calcul.
     *
     * @return int Returns the base calcul.
     */
    public function getBaseCalcul() {
        return $this->baseCalcul;
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
     * Get the c taux imp.
     *
     * @return float Returns the c taux imp.
     */
    public function getCTauxImp() {
        return $this->cTauxImp;
    }

    /**
     * Get the c valeur euros.
     *
     * @return float Returns the c valeur euros.
     */
    public function getCValeurEuros() {
        return $this->cValeurEuros;
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
     * Get the cr is dot.
     *
     * @return bool Returns the cr is dot.
     */
    public function getCrIsDot() {
        return $this->crIsDot;
    }

    /**
     * Get the crr151 motif.
     *
     * @return bool Returns the crr151 motif.
     */
    public function getCrr151Motif() {
        return $this->crr151Motif;
    }

    /**
     * Get the crr151 pm value ct.
     *
     * @return float Returns the crr151 pm value ct.
     */
    public function getCrr151PmValueCt() {
        return $this->crr151PmValueCt;
    }

    /**
     * Get the crr151 pm value lt.
     *
     * @return float Returns the crr151 pm value lt.
     */
    public function getCrr151PmValueLt() {
        return $this->crr151PmValueLt;
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
     * Get the crrpm value ctf.
     *
     * @return float Returns the crrpm value ctf.
     */
    public function getCrrpmValueCtf() {
        return $this->crrpmValueCtf;
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
     * Get the crrpm value ltf.
     *
     * @return float Returns the crrpm value ltf.
     */
    public function getCrrpmValueLtf() {
        return $this->crrpmValueLtf;
    }

    /**
     * Get the date acq forfait.
     *
     * @return DateTime|null Returns the date acq forfait.
     */
    public function getDateAcqForfait() {
        return $this->dateAcqForfait;
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
     * Get the date reeval.
     *
     * @return DateTime|null Returns the date reeval.
     */
    public function getDateReeval() {
        return $this->dateReeval;
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
     * Get the famille.
     *
     * @return string Returns the famille.
     */
    public function getFamille() {
        return $this->famille;
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
     * Get the libelle quantite.
     *
     * @return string Returns the libelle quantite.
     */
    public function getLibelleQuantite() {
        return $this->libelleQuantite;
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
     * Get the majoration.
     *
     * @return bool Returns the majoration.
     */
    public function getMajoration() {
        return $this->majoration;
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
     * Get the nb mois majoration.
     *
     * @return string Returns the nb mois majoration.
     */
    public function getNbMoisMajoration() {
        return $this->nbMoisMajoration;
    }

    /**
     * Get the num cpt trans dot.
     *
     * @return string Returns the num cpt trans dot.
     */
    public function getNumCptTransDot() {
        return $this->numCptTransDot;
    }

    /**
     * Get the num doss org.
     *
     * @return string Returns the num doss org.
     */
    public function getNumDossOrg() {
        return $this->numDossOrg;
    }

    /**
     * Get the num ens realloc.
     *
     * @return int Returns the num ens realloc.
     */
    public function getNumEnsRealloc() {
        return $this->numEnsRealloc;
    }

    /**
     * Get the num ensemble.
     *
     * @return int Returns the num ensemble.
     */
    public function getNumEnsemble() {
        return $this->numEnsemble;
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
     * Get the pilotage.
     *
     * @return bool Returns the pilotage.
     */
    public function getPilotage() {
        return $this->pilotage;
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
     * Get the site.
     *
     * @return string Returns the site.
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * Get the taux tva.
     *
     * @return float Returns the taux tva.
     */
    public function getTauxTva() {
        return $this->tauxTva;
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
     * Get the tp date origine.
     *
     * @return DateTime|null Returns the tp date origine.
     */
    public function getTpDateOrigine() {
        return $this->tpDateOrigine;
    }

    /**
     * Get the v date.
     *
     * @return DateTime|null Returns the v date.
     */
    public function getVDate() {
        return $this->vDate;
    }

    /**
     * Get the v numero.
     *
     * @return int Returns the v numero.
     */
    public function getVNumero() {
        return $this->vNumero;
    }

    /**
     * Get the v numero compte.
     *
     * @return string Returns the v numero compte.
     */
    public function getVNumeroCompte() {
        return $this->vNumeroCompte;
    }

    /**
     * Get the v numero compte ini.
     *
     * @return string Returns the v numero compte ini.
     */
    public function getVNumeroCompteIni() {
        return $this->vNumeroCompteIni;
    }

    /**
     * Get the v numero deux.
     *
     * @return int Returns the v numero deux.
     */
    public function getVNumeroDeux() {
        return $this->vNumeroDeux;
    }

    /**
     * Get the v numero deux ini.
     *
     * @return int Returns the v numero deux ini.
     */
    public function getVNumeroDeuxIni() {
        return $this->vNumeroDeuxIni;
    }

    /**
     * Get the v numero ini.
     *
     * @return int Returns the v numero ini.
     */
    public function getVNumeroIni() {
        return $this->vNumeroIni;
    }

    /**
     * Get the valeur acq forfait.
     *
     * @return float Returns the valeur acq forfait.
     */
    public function getValeurAcqForfait() {
        return $this->valeurAcqForfait;
    }

    /**
     * Get the valeur base amortissement.
     *
     * @return float Returns the valeur base amortissement.
     */
    public function getValeurBaseAmortissement() {
        return $this->valeurBaseAmortissement;
    }

    /**
     * Get the valeur deduction.
     *
     * @return float Returns the valeur deduction.
     */
    public function getValeurDeduction() {
        return $this->valeurDeduction;
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
     * Get the valeur ht origine.
     *
     * @return float Returns the valeur ht origine.
     */
    public function getValeurHtOrigine() {
        return $this->valeurHtOrigine;
    }

    /**
     * Get the vnc realloc.
     *
     * @return float Returns the vnc realloc.
     */
    public function getVncRealloc() {
        return $this->vncRealloc;
    }

    /**
     * Get the zone libre1.
     *
     * @return string Returns the zone libre1.
     */
    public function getZoneLibre1() {
        return $this->zoneLibre1;
    }

    /**
     * Get the zone libre2.
     *
     * @return string Returns the zone libre2.
     */
    public function getZoneLibre2() {
        return $this->zoneLibre2;
    }

    /**
     * Get the zone libre3.
     *
     * @return string Returns the zone libre3.
     */
    public function getZoneLibre3() {
        return $this->zoneLibre3;
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
     * Set the ad deduction amort anterieur.
     *
     * @param float $adDeductionAmortAnterieur The ad deduction amort anterieur.
     */
    public function setAdDeductionAmortAnterieur($adDeductionAmortAnterieur) {
        $this->adDeductionAmortAnterieur = $adDeductionAmortAnterieur;
        return $this;
    }

    /**
     * Set the ad deduction dotation.
     *
     * @param float $adDeductionDotation The ad deduction dotation.
     */
    public function setAdDeductionDotation($adDeductionDotation) {
        $this->adDeductionDotation = $adDeductionDotation;
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
     * Set the ad duree tot.
     *
     * @param string $adDureeTot The ad duree tot.
     */
    public function setAdDureeTot($adDureeTot) {
        $this->adDureeTot = $adDureeTot;
        return $this;
    }

    /**
     * Set the ad garder dot saisie.
     *
     * @param bool $adGarderDotSaisie The ad garder dot saisie.
     */
    public function setAdGarderDotSaisie($adGarderDotSaisie) {
        $this->adGarderDotSaisie = $adGarderDotSaisie;
        return $this;
    }

    /**
     * Set the ad quantite.
     *
     * @param float $adQuantite The ad quantite.
     */
    public function setAdQuantite($adQuantite) {
        $this->adQuantite = $adQuantite;
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
     * Set the art151 duree deja etalee.
     *
     * @param string $art151DureeDejaEtalee The art151 duree deja etalee.
     */
    public function setArt151DureeDejaEtalee($art151DureeDejaEtalee) {
        $this->art151DureeDejaEtalee = $art151DureeDejaEtalee;
        return $this;
    }

    /**
     * Set the art151 duree etalement.
     *
     * @param string $art151DureeEtalement The art151 duree etalement.
     */
    public function setArt151DureeEtalement($art151DureeEtalement) {
        $this->art151DureeEtalement = $art151DureeEtalement;
        return $this;
    }

    /**
     * Set the art151 montant deja etale.
     *
     * @param float $art151MontantDejaEtale The art151 montant deja etale.
     */
    public function setArt151MontantDejaEtale($art151MontantDejaEtale) {
        $this->art151MontantDejaEtale = $art151MontantDejaEtale;
        return $this;
    }

    /**
     * Set the art151 montant etale annee.
     *
     * @param float $art151MontantEtaleAnnee The art151 montant etale annee.
     */
    public function setArt151MontantEtaleAnnee($art151MontantEtaleAnnee) {
        $this->art151MontantEtaleAnnee = $art151MontantEtaleAnnee;
        return $this;
    }

    /**
     * Set the base calcul.
     *
     * @param int $baseCalcul The base calcul.
     */
    public function setBaseCalcul($baseCalcul) {
        $this->baseCalcul = $baseCalcul;
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
     * Set the c taux imp.
     *
     * @param float $cTauxImp The c taux imp.
     */
    public function setCTauxImp($cTauxImp) {
        $this->cTauxImp = $cTauxImp;
        return $this;
    }

    /**
     * Set the c valeur euros.
     *
     * @param float $cValeurEuros The c valeur euros.
     */
    public function setCValeurEuros($cValeurEuros) {
        $this->cValeurEuros = $cValeurEuros;
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
     * Set the cr is dot.
     *
     * @param bool $crIsDot The cr is dot.
     */
    public function setCrIsDot($crIsDot) {
        $this->crIsDot = $crIsDot;
        return $this;
    }

    /**
     * Set the crr151 motif.
     *
     * @param bool $crr151Motif The crr151 motif.
     */
    public function setCrr151Motif($crr151Motif) {
        $this->crr151Motif = $crr151Motif;
        return $this;
    }

    /**
     * Set the crr151 pm value ct.
     *
     * @param float $crr151PmValueCt The crr151 pm value ct.
     */
    public function setCrr151PmValueCt($crr151PmValueCt) {
        $this->crr151PmValueCt = $crr151PmValueCt;
        return $this;
    }

    /**
     * Set the crr151 pm value lt.
     *
     * @param float $crr151PmValueLt The crr151 pm value lt.
     */
    public function setCrr151PmValueLt($crr151PmValueLt) {
        $this->crr151PmValueLt = $crr151PmValueLt;
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
     * Set the crrpm value ctf.
     *
     * @param float $crrpmValueCtf The crrpm value ctf.
     */
    public function setCrrpmValueCtf($crrpmValueCtf) {
        $this->crrpmValueCtf = $crrpmValueCtf;
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
     * Set the crrpm value ltf.
     *
     * @param float $crrpmValueLtf The crrpm value ltf.
     */
    public function setCrrpmValueLtf($crrpmValueLtf) {
        $this->crrpmValueLtf = $crrpmValueLtf;
        return $this;
    }

    /**
     * Set the date acq forfait.
     *
     * @param DateTime|null $dateAcqForfait The date acq forfait.
     */
    public function setDateAcqForfait(DateTime $dateAcqForfait = null) {
        $this->dateAcqForfait = $dateAcqForfait;
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
     * Set the date reeval.
     *
     * @param DateTime|null $dateReeval The date reeval.
     */
    public function setDateReeval(DateTime $dateReeval = null) {
        $this->dateReeval = $dateReeval;
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
     * Set the famille.
     *
     * @param string $famille The famille.
     */
    public function setFamille($famille) {
        $this->famille = $famille;
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
     * Set the libelle quantite.
     *
     * @param string $libelleQuantite The libelle quantite.
     */
    public function setLibelleQuantite($libelleQuantite) {
        $this->libelleQuantite = $libelleQuantite;
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
     * Set the majoration.
     *
     * @param bool $majoration The majoration.
     */
    public function setMajoration($majoration) {
        $this->majoration = $majoration;
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
     * Set the nb mois majoration.
     *
     * @param string $nbMoisMajoration The nb mois majoration.
     */
    public function setNbMoisMajoration($nbMoisMajoration) {
        $this->nbMoisMajoration = $nbMoisMajoration;
        return $this;
    }

    /**
     * Set the num cpt trans dot.
     *
     * @param string $numCptTransDot The num cpt trans dot.
     */
    public function setNumCptTransDot($numCptTransDot) {
        $this->numCptTransDot = $numCptTransDot;
        return $this;
    }

    /**
     * Set the num doss org.
     *
     * @param string $numDossOrg The num doss org.
     */
    public function setNumDossOrg($numDossOrg) {
        $this->numDossOrg = $numDossOrg;
        return $this;
    }

    /**
     * Set the num ens realloc.
     *
     * @param int $numEnsRealloc The num ens realloc.
     */
    public function setNumEnsRealloc($numEnsRealloc) {
        $this->numEnsRealloc = $numEnsRealloc;
        return $this;
    }

    /**
     * Set the num ensemble.
     *
     * @param int $numEnsemble The num ensemble.
     */
    public function setNumEnsemble($numEnsemble) {
        $this->numEnsemble = $numEnsemble;
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
     * Set the pilotage.
     *
     * @param bool $pilotage The pilotage.
     */
    public function setPilotage($pilotage) {
        $this->pilotage = $pilotage;
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
     * Set the site.
     *
     * @param string $site The site.
     */
    public function setSite($site) {
        $this->site = $site;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float $tauxTva The taux tva.
     */
    public function setTauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
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
     * Set the tp date origine.
     *
     * @param DateTime|null $tpDateOrigine The tp date origine.
     */
    public function setTpDateOrigine(DateTime $tpDateOrigine = null) {
        $this->tpDateOrigine = $tpDateOrigine;
        return $this;
    }

    /**
     * Set the v date.
     *
     * @param DateTime|null $vDate The v date.
     */
    public function setVDate(DateTime $vDate = null) {
        $this->vDate = $vDate;
        return $this;
    }

    /**
     * Set the v numero.
     *
     * @param int $vNumero The v numero.
     */
    public function setVNumero($vNumero) {
        $this->vNumero = $vNumero;
        return $this;
    }

    /**
     * Set the v numero compte.
     *
     * @param string $vNumeroCompte The v numero compte.
     */
    public function setVNumeroCompte($vNumeroCompte) {
        $this->vNumeroCompte = $vNumeroCompte;
        return $this;
    }

    /**
     * Set the v numero compte ini.
     *
     * @param string $vNumeroCompteIni The v numero compte ini.
     */
    public function setVNumeroCompteIni($vNumeroCompteIni) {
        $this->vNumeroCompteIni = $vNumeroCompteIni;
        return $this;
    }

    /**
     * Set the v numero deux.
     *
     * @param int $vNumeroDeux The v numero deux.
     */
    public function setVNumeroDeux($vNumeroDeux) {
        $this->vNumeroDeux = $vNumeroDeux;
        return $this;
    }

    /**
     * Set the v numero deux ini.
     *
     * @param int $vNumeroDeuxIni The v numero deux ini.
     */
    public function setVNumeroDeuxIni($vNumeroDeuxIni) {
        $this->vNumeroDeuxIni = $vNumeroDeuxIni;
        return $this;
    }

    /**
     * Set the v numero ini.
     *
     * @param int $vNumeroIni The v numero ini.
     */
    public function setVNumeroIni($vNumeroIni) {
        $this->vNumeroIni = $vNumeroIni;
        return $this;
    }

    /**
     * Set the valeur acq forfait.
     *
     * @param float $valeurAcqForfait The valeur acq forfait.
     */
    public function setValeurAcqForfait($valeurAcqForfait) {
        $this->valeurAcqForfait = $valeurAcqForfait;
        return $this;
    }

    /**
     * Set the valeur base amortissement.
     *
     * @param float $valeurBaseAmortissement The valeur base amortissement.
     */
    public function setValeurBaseAmortissement($valeurBaseAmortissement) {
        $this->valeurBaseAmortissement = $valeurBaseAmortissement;
        return $this;
    }

    /**
     * Set the valeur deduction.
     *
     * @param float $valeurDeduction The valeur deduction.
     */
    public function setValeurDeduction($valeurDeduction) {
        $this->valeurDeduction = $valeurDeduction;
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
     * Set the valeur ht origine.
     *
     * @param float $valeurHtOrigine The valeur ht origine.
     */
    public function setValeurHtOrigine($valeurHtOrigine) {
        $this->valeurHtOrigine = $valeurHtOrigine;
        return $this;
    }

    /**
     * Set the vnc realloc.
     *
     * @param float $vncRealloc The vnc realloc.
     */
    public function setVncRealloc($vncRealloc) {
        $this->vncRealloc = $vncRealloc;
        return $this;
    }

    /**
     * Set the zone libre1.
     *
     * @param string $zoneLibre1 The zone libre1.
     */
    public function setZoneLibre1($zoneLibre1) {
        $this->zoneLibre1 = $zoneLibre1;
        return $this;
    }

    /**
     * Set the zone libre2.
     *
     * @param string $zoneLibre2 The zone libre2.
     */
    public function setZoneLibre2($zoneLibre2) {
        $this->zoneLibre2 = $zoneLibre2;
        return $this;
    }

    /**
     * Set the zone libre3.
     *
     * @param string $zoneLibre3 The zone libre3.
     */
    public function setZoneLibre3($zoneLibre3) {
        $this->zoneLibre3 = $zoneLibre3;
        return $this;
    }
}
