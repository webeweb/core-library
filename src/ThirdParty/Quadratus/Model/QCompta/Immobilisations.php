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
 * Immobilisations model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Immobilisations {

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
     * A d deduction amort anterieur.
     *
     * @var float
     */
    private $aDDeductionAmortAnterieur;

    /**
     * A d deduction dotation.
     *
     * @var float
     */
    private $aDDeductionDotation;

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
     * A d duree tot.
     *
     * @var string
     */
    private $aDDureeTot;

    /**
     * A d garder dot saisie.
     *
     * @var bool
     */
    private $aDGarderDotSaisie;

    /**
     * A d quantite.
     *
     * @var float
     */
    private $aDQuantite;

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
     * C r is dot.
     *
     * @var bool
     */
    private $cRIsDot;

    /**
     * C r r151 motif.
     *
     * @var bool
     */
    private $cRR151Motif;

    /**
     * C r r151 p m value c t.
     *
     * @var float
     */
    private $cRR151PMValueCT;

    /**
     * C r r151 p m value l t.
     *
     * @var float
     */
    private $cRR151PMValueLT;

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
     * C r r p m value c t f.
     *
     * @var float
     */
    private $cRRPMValueCTF;

    /**
     * C r r p m value l t.
     *
     * @var float
     */
    private $cRRPMValueLT;

    /**
     * C r r p m value l t f.
     *
     * @var float
     */
    private $cRRPMValueLTF;

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
     * D i n.
     *
     * @var bool
     */
    private $dIN;

    /**
     * Date acq forfait.
     *
     * @var DateTime
     */
    private $dateAcqForfait;

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
     * Date reeval.
     *
     * @var DateTime
     */
    private $dateReeval;

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
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

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
     * T p date origine.
     *
     * @var DateTime
     */
    private $tPDateOrigine;

    /**
     * Taux t v a.
     *
     * @var float
     */
    private $tauxTVA;

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
     * V date.
     *
     * @var DateTime
     */
    private $vDate;

    /**
     * V n c realloc.
     *
     * @var float
     */
    private $vNCRealloc;

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
     * Valeur h t.
     *
     * @var float
     */
    private $valeurHT;

    /**
     * Valeur h t origine.
     *
     * @var float
     */
    private $valeurHTOrigine;

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
     * Get the a d deduction amort anterieur.
     *
     * @return float Returns the a d deduction amort anterieur.
     */
    public function getADDeductionAmortAnterieur() {
        return $this->aDDeductionAmortAnterieur;
    }

    /**
     * Get the a d deduction dotation.
     *
     * @return float Returns the a d deduction dotation.
     */
    public function getADDeductionDotation() {
        return $this->aDDeductionDotation;
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
     * Get the a d duree tot.
     *
     * @return string Returns the a d duree tot.
     */
    public function getADDureeTot() {
        return $this->aDDureeTot;
    }

    /**
     * Get the a d garder dot saisie.
     *
     * @return bool Returns the a d garder dot saisie.
     */
    public function getADGarderDotSaisie() {
        return $this->aDGarderDotSaisie;
    }

    /**
     * Get the a d quantite.
     *
     * @return float Returns the a d quantite.
     */
    public function getADQuantite() {
        return $this->aDQuantite;
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
     * Get the c r is dot.
     *
     * @return bool Returns the c r is dot.
     */
    public function getCRIsDot() {
        return $this->cRIsDot;
    }

    /**
     * Get the c r r151 motif.
     *
     * @return bool Returns the c r r151 motif.
     */
    public function getCRR151Motif() {
        return $this->cRR151Motif;
    }

    /**
     * Get the c r r151 p m value c t.
     *
     * @return float Returns the c r r151 p m value c t.
     */
    public function getCRR151PMValueCT() {
        return $this->cRR151PMValueCT;
    }

    /**
     * Get the c r r151 p m value l t.
     *
     * @return float Returns the c r r151 p m value l t.
     */
    public function getCRR151PMValueLT() {
        return $this->cRR151PMValueLT;
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
     * Get the c r r p m value c t f.
     *
     * @return float Returns the c r r p m value c t f.
     */
    public function getCRRPMValueCTF() {
        return $this->cRRPMValueCTF;
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
     * Get the c r r p m value l t f.
     *
     * @return float Returns the c r r p m value l t f.
     */
    public function getCRRPMValueLTF() {
        return $this->cRRPMValueLTF;
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
     * Get the d i n.
     *
     * @return bool Returns the d i n.
     */
    public function getDIN() {
        return $this->dIN;
    }

    /**
     * Get the date acq forfait.
     *
     * @return DateTime Returns the date acq forfait.
     */
    public function getDateAcqForfait() {
        return $this->dateAcqForfait;
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
     * Get the date reeval.
     *
     * @return DateTime Returns the date reeval.
     */
    public function getDateReeval() {
        return $this->dateReeval;
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
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
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
     * Get the t p date origine.
     *
     * @return DateTime Returns the t p date origine.
     */
    public function getTPDateOrigine() {
        return $this->tPDateOrigine;
    }

    /**
     * Get the taux t v a.
     *
     * @return float Returns the taux t v a.
     */
    public function getTauxTVA() {
        return $this->tauxTVA;
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
     * Get the v date.
     *
     * @return DateTime Returns the v date.
     */
    public function getVDate() {
        return $this->vDate;
    }

    /**
     * Get the v n c realloc.
     *
     * @return float Returns the v n c realloc.
     */
    public function getVNCRealloc() {
        return $this->vNCRealloc;
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
     * Get the valeur h t.
     *
     * @return float Returns the valeur h t.
     */
    public function getValeurHT() {
        return $this->valeurHT;
    }

    /**
     * Get the valeur h t origine.
     *
     * @return float Returns the valeur h t origine.
     */
    public function getValeurHTOrigine() {
        return $this->valeurHTOrigine;
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
     * Set the a d amort anterieur.
     *
     * @param float $aDAmortAnterieur The a d amort anterieur.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADAmortAnterieur($aDAmortAnterieur) {
        $this->aDAmortAnterieur = $aDAmortAnterieur;
        return $this;
    }

    /**
     * Set the a d amort anterieur2.
     *
     * @param float $aDAmortAnterieur2 The a d amort anterieur2.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADAmortAnterieur2($aDAmortAnterieur2) {
        $this->aDAmortAnterieur2 = $aDAmortAnterieur2;
        return $this;
    }

    /**
     * Set the a d annees amort.
     *
     * @param float $aDAnneesAmort The a d annees amort.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADAnneesAmort($aDAnneesAmort) {
        $this->aDAnneesAmort = $aDAnneesAmort;
        return $this;
    }

    /**
     * Set the a d coeff degressif.
     *
     * @param float $aDCoeffDegressif The a d coeff degressif.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADCoeffDegressif($aDCoeffDegressif) {
        $this->aDCoeffDegressif = $aDCoeffDegressif;
        return $this;
    }

    /**
     * Set the a d deduction amort anterieur.
     *
     * @param float $aDDeductionAmortAnterieur The a d deduction amort anterieur.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDeductionAmortAnterieur($aDDeductionAmortAnterieur) {
        $this->aDDeductionAmortAnterieur = $aDDeductionAmortAnterieur;
        return $this;
    }

    /**
     * Set the a d deduction dotation.
     *
     * @param float $aDDeductionDotation The a d deduction dotation.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDeductionDotation($aDDeductionDotation) {
        $this->aDDeductionDotation = $aDDeductionDotation;
        return $this;
    }

    /**
     * Set the a d dotation.
     *
     * @param float $aDDotation The a d dotation.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDotation($aDDotation) {
        $this->aDDotation = $aDDotation;
        return $this;
    }

    /**
     * Set the a d dotation2.
     *
     * @param float $aDDotation2 The a d dotation2.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDotation2($aDDotation2) {
        $this->aDDotation2 = $aDDotation2;
        return $this;
    }

    /**
     * Set the a d dotation except.
     *
     * @param float $aDDotationExcept The a d dotation except.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDotationExcept($aDDotationExcept) {
        $this->aDDotationExcept = $aDDotationExcept;
        return $this;
    }

    /**
     * Set the a d duree.
     *
     * @param float $aDDuree The a d duree.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDuree($aDDuree) {
        $this->aDDuree = $aDDuree;
        return $this;
    }

    /**
     * Set the a d duree tot.
     *
     * @param string $aDDureeTot The a d duree tot.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADDureeTot($aDDureeTot) {
        $this->aDDureeTot = $aDDureeTot;
        return $this;
    }

    /**
     * Set the a d garder dot saisie.
     *
     * @param bool $aDGarderDotSaisie The a d garder dot saisie.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADGarderDotSaisie($aDGarderDotSaisie) {
        $this->aDGarderDotSaisie = $aDGarderDotSaisie;
        return $this;
    }

    /**
     * Set the a d quantite.
     *
     * @param float $aDQuantite The a d quantite.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADQuantite($aDQuantite) {
        $this->aDQuantite = $aDQuantite;
        return $this;
    }

    /**
     * Set the a d taux lineaire.
     *
     * @param float $aDTauxLineaire The a d taux lineaire.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADTauxLineaire($aDTauxLineaire) {
        $this->aDTauxLineaire = $aDTauxLineaire;
        return $this;
    }

    /**
     * Set the a d type.
     *
     * @param string $aDType The a d type.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setADType($aDType) {
        $this->aDType = $aDType;
        return $this;
    }

    /**
     * Set the a f amort anterieur.
     *
     * @param float $aFAmortAnterieur The a f amort anterieur.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFAmortAnterieur($aFAmortAnterieur) {
        $this->aFAmortAnterieur = $aFAmortAnterieur;
        return $this;
    }

    /**
     * Set the a f annees amort.
     *
     * @param float $aFAnneesAmort The a f annees amort.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFAnneesAmort($aFAnneesAmort) {
        $this->aFAnneesAmort = $aFAnneesAmort;
        return $this;
    }

    /**
     * Set the a f coeff degressif.
     *
     * @param float $aFCoeffDegressif The a f coeff degressif.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFCoeffDegressif($aFCoeffDegressif) {
        $this->aFCoeffDegressif = $aFCoeffDegressif;
        return $this;
    }

    /**
     * Set the a f dotation.
     *
     * @param float $aFDotation The a f dotation.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFDotation($aFDotation) {
        $this->aFDotation = $aFDotation;
        return $this;
    }

    /**
     * Set the a f duree.
     *
     * @param float $aFDuree The a f duree.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFDuree($aFDuree) {
        $this->aFDuree = $aFDuree;
        return $this;
    }

    /**
     * Set the a f s i i.
     *
     * @param bool $aFSII The a f s i i.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFSII($aFSII) {
        $this->aFSII = $aFSII;
        return $this;
    }

    /**
     * Set the a f taux except.
     *
     * @param float $aFTauxExcept The a f taux except.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFTauxExcept($aFTauxExcept) {
        $this->aFTauxExcept = $aFTauxExcept;
        return $this;
    }

    /**
     * Set the a f taux lineaire.
     *
     * @param float $aFTauxLineaire The a f taux lineaire.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFTauxLineaire($aFTauxLineaire) {
        $this->aFTauxLineaire = $aFTauxLineaire;
        return $this;
    }

    /**
     * Set the a f type.
     *
     * @param string $aFType The a f type.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setAFType($aFType) {
        $this->aFType = $aFType;
        return $this;
    }

    /**
     * Set the art151 duree deja etalee.
     *
     * @param string $art151DureeDejaEtalee The art151 duree deja etalee.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setArt151DureeDejaEtalee($art151DureeDejaEtalee) {
        $this->art151DureeDejaEtalee = $art151DureeDejaEtalee;
        return $this;
    }

    /**
     * Set the art151 duree etalement.
     *
     * @param string $art151DureeEtalement The art151 duree etalement.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setArt151DureeEtalement($art151DureeEtalement) {
        $this->art151DureeEtalement = $art151DureeEtalement;
        return $this;
    }

    /**
     * Set the art151 montant deja etale.
     *
     * @param float $art151MontantDejaEtale The art151 montant deja etale.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setArt151MontantDejaEtale($art151MontantDejaEtale) {
        $this->art151MontantDejaEtale = $art151MontantDejaEtale;
        return $this;
    }

    /**
     * Set the art151 montant etale annee.
     *
     * @param float $art151MontantEtaleAnnee The art151 montant etale annee.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setArt151MontantEtaleAnnee($art151MontantEtaleAnnee) {
        $this->art151MontantEtaleAnnee = $art151MontantEtaleAnnee;
        return $this;
    }

    /**
     * Set the base calcul.
     *
     * @param int $baseCalcul The base calcul.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setBaseCalcul($baseCalcul) {
        $this->baseCalcul = $baseCalcul;
        return $this;
    }

    /**
     * Set the base taxe pro.
     *
     * @param float $baseTaxePro The base taxe pro.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setBaseTaxePro($baseTaxePro) {
        $this->baseTaxePro = $baseTaxePro;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string $bureau The bureau.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setBureau($bureau) {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the c r is dot.
     *
     * @param bool $cRIsDot The c r is dot.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRIsDot($cRIsDot) {
        $this->cRIsDot = $cRIsDot;
        return $this;
    }

    /**
     * Set the c r r151 motif.
     *
     * @param bool $cRR151Motif The c r r151 motif.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRR151Motif($cRR151Motif) {
        $this->cRR151Motif = $cRR151Motif;
        return $this;
    }

    /**
     * Set the c r r151 p m value c t.
     *
     * @param float $cRR151PMValueCT The c r r151 p m value c t.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRR151PMValueCT($cRR151PMValueCT) {
        $this->cRR151PMValueCT = $cRR151PMValueCT;
        return $this;
    }

    /**
     * Set the c r r151 p m value l t.
     *
     * @param float $cRR151PMValueLT The c r r151 p m value l t.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRR151PMValueLT($cRR151PMValueLT) {
        $this->cRR151PMValueLT = $cRR151PMValueLT;
        return $this;
    }

    /**
     * Set the c r r date.
     *
     * @param DateTime $cRRDate The c r r date.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRDate(DateTime $cRRDate = null) {
        $this->cRRDate = $cRRDate;
        return $this;
    }

    /**
     * Set the c r r p m value c t.
     *
     * @param float $cRRPMValueCT The c r r p m value c t.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRPMValueCT($cRRPMValueCT) {
        $this->cRRPMValueCT = $cRRPMValueCT;
        return $this;
    }

    /**
     * Set the c r r p m value c t f.
     *
     * @param float $cRRPMValueCTF The c r r p m value c t f.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRPMValueCTF($cRRPMValueCTF) {
        $this->cRRPMValueCTF = $cRRPMValueCTF;
        return $this;
    }

    /**
     * Set the c r r p m value l t.
     *
     * @param float $cRRPMValueLT The c r r p m value l t.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRPMValueLT($cRRPMValueLT) {
        $this->cRRPMValueLT = $cRRPMValueLT;
        return $this;
    }

    /**
     * Set the c r r p m value l t f.
     *
     * @param float $cRRPMValueLTF The c r r p m value l t f.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRPMValueLTF($cRRPMValueLTF) {
        $this->cRRPMValueLTF = $cRRPMValueLTF;
        return $this;
    }

    /**
     * Set the c r r px cession h t.
     *
     * @param float $cRRPxCessionHT The c r r px cession h t.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRPxCessionHT($cRRPxCessionHT) {
        $this->cRRPxCessionHT = $cRRPxCessionHT;
        return $this;
    }

    /**
     * Set the c r r qte vendue.
     *
     * @param float $cRRQteVendue The c r r qte vendue.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRQteVendue($cRRQteVendue) {
        $this->cRRQteVendue = $cRRQteVendue;
        return $this;
    }

    /**
     * Set the c r r suppl amort.
     *
     * @param float $cRRSupplAmort The c r r suppl amort.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRSupplAmort($cRRSupplAmort) {
        $this->cRRSupplAmort = $cRRSupplAmort;
        return $this;
    }

    /**
     * Set the c r r suppl valeur.
     *
     * @param float $cRRSupplValeur The c r r suppl valeur.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRSupplValeur($cRRSupplValeur) {
        $this->cRRSupplValeur = $cRRSupplValeur;
        return $this;
    }

    /**
     * Set the c r r type.
     *
     * @param string $cRRType The c r r type.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCRRType($cRRType) {
        $this->cRRType = $cRRType;
        return $this;
    }

    /**
     * Set the c taux imp.
     *
     * @param float $cTauxImp The c taux imp.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCTauxImp($cTauxImp) {
        $this->cTauxImp = $cTauxImp;
        return $this;
    }

    /**
     * Set the c valeur euros.
     *
     * @param float $cValeurEuros The c valeur euros.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCValeurEuros($cValeurEuros) {
        $this->cValeurEuros = $cValeurEuros;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the compte frn.
     *
     * @param string $compteFrn The compte frn.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setCompteFrn($compteFrn) {
        $this->compteFrn = $compteFrn;
        return $this;
    }

    /**
     * Set the d i n.
     *
     * @param bool $dIN The d i n.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setDIN($dIN) {
        $this->dIN = $dIN;
        return $this;
    }

    /**
     * Set the date acq forfait.
     *
     * @param DateTime $dateAcqForfait The date acq forfait.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setDateAcqForfait(DateTime $dateAcqForfait = null) {
        $this->dateAcqForfait = $dateAcqForfait;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime $dateAcquisition The date acquisition.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setDateAcquisition(DateTime $dateAcquisition = null) {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date mise service.
     *
     * @param DateTime $dateMiseService The date mise service.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setDateMiseService(DateTime $dateMiseService = null) {
        $this->dateMiseService = $dateMiseService;
        return $this;
    }

    /**
     * Set the date reeval.
     *
     * @param DateTime $dateReeval The date reeval.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setDateReeval(DateTime $dateReeval = null) {
        $this->dateReeval = $dateReeval;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the famille.
     *
     * @param string $famille The famille.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setFamille($famille) {
        $this->famille = $famille;
        return $this;
    }

    /**
     * Set the guid vehicule.
     *
     * @param string $guidVehicule The guid vehicule.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setGuidVehicule($guidVehicule) {
        $this->guidVehicule = $guidVehicule;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle frn.
     *
     * @param string $libelleFrn The libelle frn.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setLibelleFrn($libelleFrn) {
        $this->libelleFrn = $libelleFrn;
        return $this;
    }

    /**
     * Set the libelle quantite.
     *
     * @param string $libelleQuantite The libelle quantite.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setLibelleQuantite($libelleQuantite) {
        $this->libelleQuantite = $libelleQuantite;
        return $this;
    }

    /**
     * Set the limite amort.
     *
     * @param float $limiteAmort The limite amort.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setLimiteAmort($limiteAmort) {
        $this->limiteAmort = $limiteAmort;
        return $this;
    }

    /**
     * Set the majoration.
     *
     * @param bool $majoration The majoration.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setMajoration($majoration) {
        $this->majoration = $majoration;
        return $this;
    }

    /**
     * Set the materiaux agricole.
     *
     * @param bool $materiauxAgricole The materiaux agricole.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setMateriauxAgricole($materiauxAgricole) {
        $this->materiauxAgricole = $materiauxAgricole;
        return $this;
    }

    /**
     * Set the montant t v a.
     *
     * @param float $montantTVA The montant t v a.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setMontantTVA($montantTVA) {
        $this->montantTVA = $montantTVA;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb mois majoration.
     *
     * @param string $nbMoisMajoration The nb mois majoration.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNbMoisMajoration($nbMoisMajoration) {
        $this->nbMoisMajoration = $nbMoisMajoration;
        return $this;
    }

    /**
     * Set the num cpt trans dot.
     *
     * @param string $numCptTransDot The num cpt trans dot.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumCptTransDot($numCptTransDot) {
        $this->numCptTransDot = $numCptTransDot;
        return $this;
    }

    /**
     * Set the num doss org.
     *
     * @param string $numDossOrg The num doss org.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumDossOrg($numDossOrg) {
        $this->numDossOrg = $numDossOrg;
        return $this;
    }

    /**
     * Set the num ens realloc.
     *
     * @param int $numEnsRealloc The num ens realloc.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumEnsRealloc($numEnsRealloc) {
        $this->numEnsRealloc = $numEnsRealloc;
        return $this;
    }

    /**
     * Set the num ensemble.
     *
     * @param int $numEnsemble The num ensemble.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumEnsemble($numEnsemble) {
        $this->numEnsemble = $numEnsemble;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int $numeroDeux The numero deux.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumeroDeux($numeroDeux) {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the pilotage.
     *
     * @param bool $pilotage The pilotage.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setPilotage($pilotage) {
        $this->pilotage = $pilotage;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the site.
     *
     * @param string $site The site.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setSite($site) {
        $this->site = $site;
        return $this;
    }

    /**
     * Set the t p date origine.
     *
     * @param DateTime $tPDateOrigine The t p date origine.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setTPDateOrigine(DateTime $tPDateOrigine = null) {
        $this->tPDateOrigine = $tPDateOrigine;
        return $this;
    }

    /**
     * Set the taux t v a.
     *
     * @param float $tauxTVA The taux t v a.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setTauxTVA($tauxTVA) {
        $this->tauxTVA = $tauxTVA;
        return $this;
    }

    /**
     * Set the taxe fonciere.
     *
     * @param bool $taxeFonciere The taxe fonciere.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setTaxeFonciere($taxeFonciere) {
        $this->taxeFonciere = $taxeFonciere;
        return $this;
    }

    /**
     * Set the taxe pro.
     *
     * @param bool $taxePro The taxe pro.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setTaxePro($taxePro) {
        $this->taxePro = $taxePro;
        return $this;
    }

    /**
     * Set the v date.
     *
     * @param DateTime $vDate The v date.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVDate(DateTime $vDate = null) {
        $this->vDate = $vDate;
        return $this;
    }

    /**
     * Set the v n c realloc.
     *
     * @param float $vNCRealloc The v n c realloc.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNCRealloc($vNCRealloc) {
        $this->vNCRealloc = $vNCRealloc;
        return $this;
    }

    /**
     * Set the v numero.
     *
     * @param int $vNumero The v numero.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNumero($vNumero) {
        $this->vNumero = $vNumero;
        return $this;
    }

    /**
     * Set the v numero compte.
     *
     * @param string $vNumeroCompte The v numero compte.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNumeroCompte($vNumeroCompte) {
        $this->vNumeroCompte = $vNumeroCompte;
        return $this;
    }

    /**
     * Set the v numero compte ini.
     *
     * @param string $vNumeroCompteIni The v numero compte ini.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNumeroCompteIni($vNumeroCompteIni) {
        $this->vNumeroCompteIni = $vNumeroCompteIni;
        return $this;
    }

    /**
     * Set the v numero deux.
     *
     * @param int $vNumeroDeux The v numero deux.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNumeroDeux($vNumeroDeux) {
        $this->vNumeroDeux = $vNumeroDeux;
        return $this;
    }

    /**
     * Set the v numero deux ini.
     *
     * @param int $vNumeroDeuxIni The v numero deux ini.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNumeroDeuxIni($vNumeroDeuxIni) {
        $this->vNumeroDeuxIni = $vNumeroDeuxIni;
        return $this;
    }

    /**
     * Set the v numero ini.
     *
     * @param int $vNumeroIni The v numero ini.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setVNumeroIni($vNumeroIni) {
        $this->vNumeroIni = $vNumeroIni;
        return $this;
    }

    /**
     * Set the valeur acq forfait.
     *
     * @param float $valeurAcqForfait The valeur acq forfait.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setValeurAcqForfait($valeurAcqForfait) {
        $this->valeurAcqForfait = $valeurAcqForfait;
        return $this;
    }

    /**
     * Set the valeur base amortissement.
     *
     * @param float $valeurBaseAmortissement The valeur base amortissement.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setValeurBaseAmortissement($valeurBaseAmortissement) {
        $this->valeurBaseAmortissement = $valeurBaseAmortissement;
        return $this;
    }

    /**
     * Set the valeur deduction.
     *
     * @param float $valeurDeduction The valeur deduction.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setValeurDeduction($valeurDeduction) {
        $this->valeurDeduction = $valeurDeduction;
        return $this;
    }

    /**
     * Set the valeur h t.
     *
     * @param float $valeurHT The valeur h t.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setValeurHT($valeurHT) {
        $this->valeurHT = $valeurHT;
        return $this;
    }

    /**
     * Set the valeur h t origine.
     *
     * @param float $valeurHTOrigine The valeur h t origine.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setValeurHTOrigine($valeurHTOrigine) {
        $this->valeurHTOrigine = $valeurHTOrigine;
        return $this;
    }

    /**
     * Set the zone libre1.
     *
     * @param string $zoneLibre1 The zone libre1.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setZoneLibre1($zoneLibre1) {
        $this->zoneLibre1 = $zoneLibre1;
        return $this;
    }

    /**
     * Set the zone libre2.
     *
     * @param string $zoneLibre2 The zone libre2.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setZoneLibre2($zoneLibre2) {
        $this->zoneLibre2 = $zoneLibre2;
        return $this;
    }

    /**
     * Set the zone libre3.
     *
     * @param string $zoneLibre3 The zone libre3.
     * @return Immobilisations Returns this immobilisations.
     */
    public function setZoneLibre3($zoneLibre3) {
        $this->zoneLibre3 = $zoneLibre3;
        return $this;
    }
}
