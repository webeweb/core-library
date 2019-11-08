<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes bulletin.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesBulletin {

    /**
     * Anal diff.
     *
     * @var bool
     */
    private $analDiff;

    /**
     * Avantage nature.
     *
     * @var bool
     */
    private $avantageNature;

    /**
     * Base sans reintegration.
     *
     * @var float
     */
    private $baseSansReintegration;

    /**
     * Cle lig bul.
     *
     * @var string
     */
    private $cleLigBul;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code calcul.
     *
     * @var string
     */
    private $codeCalcul;

    /**
     * Condition spec.
     *
     * @var string
     */
    private $conditionSpec;

    /**
     * Conge paye.
     *
     * @var bool
     */
    private $congePaye;

    /**
     * Cumul cout glob.
     *
     * @var bool
     */
    private $cumulCoutGlob;

    /**
     * Edition base.
     *
     * @var bool
     */
    private $editionBase;

    /**
     * Edition cot patronale.
     *
     * @var bool
     */
    private $editionCotPatronale;

    /**
     * Edition resultat.
     *
     * @var bool
     */
    private $editionResultat;

    /**
     * Edition taux sal.
     *
     * @var bool
     */
    private $editionTauxSal;

    /**
     * Flag force.
     *
     * @var bool
     */
    private $flagForce;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Integ net paye.
     *
     * @var bool
     */
    private $integNetPaye;

    /**
     * Intervient brut al.
     *
     * @var bool
     */
    private $intervientBrutAl;

    /**
     * Intervient indem preca.
     *
     * @var bool
     */
    private $intervientIndemPreca;

    /**
     * Intervient taux h ab cp.
     *
     * @var string
     */
    private $intervientTauxHAbCp;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien.
     *
     * @var int
     */
    private $lien;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float
     */
    private $montant3;

    /**
     * Montant4.
     *
     * @var float
     */
    private $montant4;

    /**
     * Montant global.
     *
     * @var float
     */
    private $montantGlobal;

    /**
     * Montant salarial.
     *
     * @var float
     */
    private $montantSalarial;

    /**
     * Neutre.
     *
     * @var bool
     */
    private $neutre;

    /**
     * Num cumul bulletin.
     *
     * @var int
     */
    private $numCumulBulletin;

    /**
     * Num cumul patron.
     *
     * @var int
     */
    private $numCumulPatron;

    /**
     * Num ligne bulletin.
     *
     * @var int
     */
    private $numLigneBulletin;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Pas editer.
     *
     * @var bool
     */
    private $pasEditer;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Pp soumis taxe.
     *
     * @var bool
     */
    private $ppSoumisTaxe;

    /**
     * Prime non proratisee.
     *
     * @var bool
     */
    private $primeNonProratisee;

    /**
     * Regle calcul.
     *
     * @var string
     */
    private $regleCalcul;

    /**
     * Regle taux.
     *
     * @var string
     */
    private $regleTaux;

    /**
     * Soumis abattement.
     *
     * @var bool
     */
    private $soumisAbattement;

    /**
     * Soumis crds.
     *
     * @var bool
     */
    private $soumisCrds;

    /**
     * Soumis csg.
     *
     * @var bool
     */
    private $soumisCsg;

    /**
     * Type absence.
     *
     * @var string
     */
    private $typeAbsence;

    /**
     * Type acompte.
     *
     * @var string
     */
    private $typeAcompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the anal diff.
     *
     * @return bool Returns the anal diff.
     */
    public function getAnalDiff() {
        return $this->analDiff;
    }

    /**
     * Get the avantage nature.
     *
     * @return bool Returns the avantage nature.
     */
    public function getAvantageNature() {
        return $this->avantageNature;
    }

    /**
     * Get the base sans reintegration.
     *
     * @return float Returns the base sans reintegration.
     */
    public function getBaseSansReintegration() {
        return $this->baseSansReintegration;
    }

    /**
     * Get the cle lig bul.
     *
     * @return string Returns the cle lig bul.
     */
    public function getCleLigBul() {
        return $this->cleLigBul;
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
     * Get the code calcul.
     *
     * @return string Returns the code calcul.
     */
    public function getCodeCalcul() {
        return $this->codeCalcul;
    }

    /**
     * Get the condition spec.
     *
     * @return string Returns the condition spec.
     */
    public function getConditionSpec() {
        return $this->conditionSpec;
    }

    /**
     * Get the conge paye.
     *
     * @return bool Returns the conge paye.
     */
    public function getCongePaye() {
        return $this->congePaye;
    }

    /**
     * Get the cumul cout glob.
     *
     * @return bool Returns the cumul cout glob.
     */
    public function getCumulCoutGlob() {
        return $this->cumulCoutGlob;
    }

    /**
     * Get the edition base.
     *
     * @return bool Returns the edition base.
     */
    public function getEditionBase() {
        return $this->editionBase;
    }

    /**
     * Get the edition cot patronale.
     *
     * @return bool Returns the edition cot patronale.
     */
    public function getEditionCotPatronale() {
        return $this->editionCotPatronale;
    }

    /**
     * Get the edition resultat.
     *
     * @return bool Returns the edition resultat.
     */
    public function getEditionResultat() {
        return $this->editionResultat;
    }

    /**
     * Get the edition taux sal.
     *
     * @return bool Returns the edition taux sal.
     */
    public function getEditionTauxSal() {
        return $this->editionTauxSal;
    }

    /**
     * Get the flag force.
     *
     * @return bool Returns the flag force.
     */
    public function getFlagForce() {
        return $this->flagForce;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the integ net paye.
     *
     * @return bool Returns the integ net paye.
     */
    public function getIntegNetPaye() {
        return $this->integNetPaye;
    }

    /**
     * Get the intervient brut al.
     *
     * @return bool Returns the intervient brut al.
     */
    public function getIntervientBrutAl() {
        return $this->intervientBrutAl;
    }

    /**
     * Get the intervient indem preca.
     *
     * @return bool Returns the intervient indem preca.
     */
    public function getIntervientIndemPreca() {
        return $this->intervientIndemPreca;
    }

    /**
     * Get the intervient taux h ab cp.
     *
     * @return string Returns the intervient taux h ab cp.
     */
    public function getIntervientTauxHAbCp() {
        return $this->intervientTauxHAbCp;
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
     * Get the lien.
     *
     * @return int Returns the lien.
     */
    public function getLien() {
        return $this->lien;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float Returns the montant3.
     */
    public function getMontant3() {
        return $this->montant3;
    }

    /**
     * Get the montant4.
     *
     * @return float Returns the montant4.
     */
    public function getMontant4() {
        return $this->montant4;
    }

    /**
     * Get the montant global.
     *
     * @return float Returns the montant global.
     */
    public function getMontantGlobal() {
        return $this->montantGlobal;
    }

    /**
     * Get the montant salarial.
     *
     * @return float Returns the montant salarial.
     */
    public function getMontantSalarial() {
        return $this->montantSalarial;
    }

    /**
     * Get the neutre.
     *
     * @return bool Returns the neutre.
     */
    public function getNeutre() {
        return $this->neutre;
    }

    /**
     * Get the num cumul bulletin.
     *
     * @return int Returns the num cumul bulletin.
     */
    public function getNumCumulBulletin() {
        return $this->numCumulBulletin;
    }

    /**
     * Get the num cumul patron.
     *
     * @return int Returns the num cumul patron.
     */
    public function getNumCumulPatron() {
        return $this->numCumulPatron;
    }

    /**
     * Get the num ligne bulletin.
     *
     * @return int Returns the num ligne bulletin.
     */
    public function getNumLigneBulletin() {
        return $this->numLigneBulletin;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the pas editer.
     *
     * @return bool Returns the pas editer.
     */
    public function getPasEditer() {
        return $this->pasEditer;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the pp soumis taxe.
     *
     * @return bool Returns the pp soumis taxe.
     */
    public function getPpSoumisTaxe() {
        return $this->ppSoumisTaxe;
    }

    /**
     * Get the prime non proratisee.
     *
     * @return bool Returns the prime non proratisee.
     */
    public function getPrimeNonProratisee() {
        return $this->primeNonProratisee;
    }

    /**
     * Get the regle calcul.
     *
     * @return string Returns the regle calcul.
     */
    public function getRegleCalcul() {
        return $this->regleCalcul;
    }

    /**
     * Get the regle taux.
     *
     * @return string Returns the regle taux.
     */
    public function getRegleTaux() {
        return $this->regleTaux;
    }

    /**
     * Get the soumis abattement.
     *
     * @return bool Returns the soumis abattement.
     */
    public function getSoumisAbattement() {
        return $this->soumisAbattement;
    }

    /**
     * Get the soumis crds.
     *
     * @return bool Returns the soumis crds.
     */
    public function getSoumisCrds() {
        return $this->soumisCrds;
    }

    /**
     * Get the soumis csg.
     *
     * @return bool Returns the soumis csg.
     */
    public function getSoumisCsg() {
        return $this->soumisCsg;
    }

    /**
     * Get the type absence.
     *
     * @return string Returns the type absence.
     */
    public function getTypeAbsence() {
        return $this->typeAbsence;
    }

    /**
     * Get the type acompte.
     *
     * @return string Returns the type acompte.
     */
    public function getTypeAcompte() {
        return $this->typeAcompte;
    }

    /**
     * Set the anal diff.
     *
     * @param bool $analDiff The anal diff.
     */
    public function setAnalDiff($analDiff) {
        $this->analDiff = $analDiff;
        return $this;
    }

    /**
     * Set the avantage nature.
     *
     * @param bool $avantageNature The avantage nature.
     */
    public function setAvantageNature($avantageNature) {
        $this->avantageNature = $avantageNature;
        return $this;
    }

    /**
     * Set the base sans reintegration.
     *
     * @param float $baseSansReintegration The base sans reintegration.
     */
    public function setBaseSansReintegration($baseSansReintegration) {
        $this->baseSansReintegration = $baseSansReintegration;
        return $this;
    }

    /**
     * Set the cle lig bul.
     *
     * @param string $cleLigBul The cle lig bul.
     */
    public function setCleLigBul($cleLigBul) {
        $this->cleLigBul = $cleLigBul;
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
     * Set the code calcul.
     *
     * @param string $codeCalcul The code calcul.
     */
    public function setCodeCalcul($codeCalcul) {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the conge paye.
     *
     * @param bool $congePaye The conge paye.
     */
    public function setCongePaye($congePaye) {
        $this->congePaye = $congePaye;
        return $this;
    }

    /**
     * Set the cumul cout glob.
     *
     * @param bool $cumulCoutGlob The cumul cout glob.
     */
    public function setCumulCoutGlob($cumulCoutGlob) {
        $this->cumulCoutGlob = $cumulCoutGlob;
        return $this;
    }

    /**
     * Set the edition base.
     *
     * @param bool $editionBase The edition base.
     */
    public function setEditionBase($editionBase) {
        $this->editionBase = $editionBase;
        return $this;
    }

    /**
     * Set the edition cot patronale.
     *
     * @param bool $editionCotPatronale The edition cot patronale.
     */
    public function setEditionCotPatronale($editionCotPatronale) {
        $this->editionCotPatronale = $editionCotPatronale;
        return $this;
    }

    /**
     * Set the edition resultat.
     *
     * @param bool $editionResultat The edition resultat.
     */
    public function setEditionResultat($editionResultat) {
        $this->editionResultat = $editionResultat;
        return $this;
    }

    /**
     * Set the edition taux sal.
     *
     * @param bool $editionTauxSal The edition taux sal.
     */
    public function setEditionTauxSal($editionTauxSal) {
        $this->editionTauxSal = $editionTauxSal;
        return $this;
    }

    /**
     * Set the flag force.
     *
     * @param bool $flagForce The flag force.
     */
    public function setFlagForce($flagForce) {
        $this->flagForce = $flagForce;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the integ net paye.
     *
     * @param bool $integNetPaye The integ net paye.
     */
    public function setIntegNetPaye($integNetPaye) {
        $this->integNetPaye = $integNetPaye;
        return $this;
    }

    /**
     * Set the intervient brut al.
     *
     * @param bool $intervientBrutAl The intervient brut al.
     */
    public function setIntervientBrutAl($intervientBrutAl) {
        $this->intervientBrutAl = $intervientBrutAl;
        return $this;
    }

    /**
     * Set the intervient indem preca.
     *
     * @param bool $intervientIndemPreca The intervient indem preca.
     */
    public function setIntervientIndemPreca($intervientIndemPreca) {
        $this->intervientIndemPreca = $intervientIndemPreca;
        return $this;
    }

    /**
     * Set the intervient taux h ab cp.
     *
     * @param string $intervientTauxHAbCp The intervient taux h ab cp.
     */
    public function setIntervientTauxHAbCp($intervientTauxHAbCp) {
        $this->intervientTauxHAbCp = $intervientTauxHAbCp;
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
     * Set the lien.
     *
     * @param int $lien The lien.
     */
    public function setLien($lien) {
        $this->lien = $lien;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float $montant4 The montant4.
     */
    public function setMontant4($montant4) {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant global.
     *
     * @param float $montantGlobal The montant global.
     */
    public function setMontantGlobal($montantGlobal) {
        $this->montantGlobal = $montantGlobal;
        return $this;
    }

    /**
     * Set the montant salarial.
     *
     * @param float $montantSalarial The montant salarial.
     */
    public function setMontantSalarial($montantSalarial) {
        $this->montantSalarial = $montantSalarial;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool $neutre The neutre.
     */
    public function setNeutre($neutre) {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the num cumul bulletin.
     *
     * @param int $numCumulBulletin The num cumul bulletin.
     */
    public function setNumCumulBulletin($numCumulBulletin) {
        $this->numCumulBulletin = $numCumulBulletin;
        return $this;
    }

    /**
     * Set the num cumul patron.
     *
     * @param int $numCumulPatron The num cumul patron.
     */
    public function setNumCumulPatron($numCumulPatron) {
        $this->numCumulPatron = $numCumulPatron;
        return $this;
    }

    /**
     * Set the num ligne bulletin.
     *
     * @param int $numLigneBulletin The num ligne bulletin.
     */
    public function setNumLigneBulletin($numLigneBulletin) {
        $this->numLigneBulletin = $numLigneBulletin;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the pas editer.
     *
     * @param bool $pasEditer The pas editer.
     */
    public function setPasEditer($pasEditer) {
        $this->pasEditer = $pasEditer;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pp soumis taxe.
     *
     * @param bool $ppSoumisTaxe The pp soumis taxe.
     */
    public function setPpSoumisTaxe($ppSoumisTaxe) {
        $this->ppSoumisTaxe = $ppSoumisTaxe;
        return $this;
    }

    /**
     * Set the prime non proratisee.
     *
     * @param bool $primeNonProratisee The prime non proratisee.
     */
    public function setPrimeNonProratisee($primeNonProratisee) {
        $this->primeNonProratisee = $primeNonProratisee;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regle taux.
     *
     * @param string $regleTaux The regle taux.
     */
    public function setRegleTaux($regleTaux) {
        $this->regleTaux = $regleTaux;
        return $this;
    }

    /**
     * Set the soumis abattement.
     *
     * @param bool $soumisAbattement The soumis abattement.
     */
    public function setSoumisAbattement($soumisAbattement) {
        $this->soumisAbattement = $soumisAbattement;
        return $this;
    }

    /**
     * Set the soumis crds.
     *
     * @param bool $soumisCrds The soumis crds.
     */
    public function setSoumisCrds($soumisCrds) {
        $this->soumisCrds = $soumisCrds;
        return $this;
    }

    /**
     * Set the soumis csg.
     *
     * @param bool $soumisCsg The soumis csg.
     */
    public function setSoumisCsg($soumisCsg) {
        $this->soumisCsg = $soumisCsg;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string $typeAbsence The type absence.
     */
    public function setTypeAbsence($typeAbsence) {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }

    /**
     * Set the type acompte.
     *
     * @param string $typeAcompte The type acompte.
     */
    public function setTypeAcompte($typeAcompte) {
        $this->typeAcompte = $typeAcompte;
        return $this;
    }
}
