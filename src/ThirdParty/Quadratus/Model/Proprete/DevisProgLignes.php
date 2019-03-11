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

/**
 * Devis prog lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisProgLignes {

    /**
     * Aou.
     *
     * @var bool
     */
    private $aou;

    /**
     * Avr.
     *
     * @var bool
     */
    private $avr;

    /**
     * Code echelle.
     *
     * @var string
     */
    private $codeEchelle;

    /**
     * Code operation.
     *
     * @var string
     */
    private $codeOperation;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Dec.
     *
     * @var bool
     */
    private $dec;

    /**
     * Dimanche.
     *
     * @var bool
     */
    private $dimanche;

    /**
     * Fev.
     *
     * @var bool
     */
    private $fev;

    /**
     * Jan.
     *
     * @var bool
     */
    private $jan;

    /**
     * Jeudi.
     *
     * @var bool
     */
    private $jeudi;

    /**
     * Juil.
     *
     * @var bool
     */
    private $juil;

    /**
     * Juin.
     *
     * @var bool
     */
    private $juin;

    /**
     * Lundi.
     *
     * @var bool
     */
    private $lundi;

    /**
     * Mai.
     *
     * @var bool
     */
    private $mai;

    /**
     * Mar.
     *
     * @var bool
     */
    private $mar;

    /**
     * Mardi.
     *
     * @var bool
     */
    private $mardi;

    /**
     * Mercredi.
     *
     * @var bool
     */
    private $mercredi;

    /**
     * Note resultat.
     *
     * @var float
     */
    private $noteResultat;

    /**
     * Nov.
     *
     * @var bool
     */
    private $nov;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num programme.
     *
     * @var int
     */
    private $numProgramme;

    /**
     * Occurrence.
     *
     * @var string
     */
    private $occurrence;

    /**
     * Oct.
     *
     * @var bool
     */
    private $oct;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Samedi.
     *
     * @var bool
     */
    private $samedi;

    /**
     * Sep.
     *
     * @var bool
     */
    private $sep;

    /**
     * Vendredi.
     *
     * @var bool
     */
    private $vendredi;

    /**
     * Vitesse reelle.
     *
     * @var float
     */
    private $vitesseReelle;

    /**
     * Vitesse theorique.
     *
     * @var float
     */
    private $vitesseTheorique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the aou.
     *
     * @return bool Returns the aou.
     */
    public function getAou() {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return bool Returns the avr.
     */
    public function getAvr() {
        return $this->avr;
    }

    /**
     * Get the code echelle.
     *
     * @return string Returns the code echelle.
     */
    public function getCodeEchelle() {
        return $this->codeEchelle;
    }

    /**
     * Get the code operation.
     *
     * @return string Returns the code operation.
     */
    public function getCodeOperation() {
        return $this->codeOperation;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the dec.
     *
     * @return bool Returns the dec.
     */
    public function getDec() {
        return $this->dec;
    }

    /**
     * Get the dimanche.
     *
     * @return bool Returns the dimanche.
     */
    public function getDimanche() {
        return $this->dimanche;
    }

    /**
     * Get the fev.
     *
     * @return bool Returns the fev.
     */
    public function getFev() {
        return $this->fev;
    }

    /**
     * Get the jan.
     *
     * @return bool Returns the jan.
     */
    public function getJan() {
        return $this->jan;
    }

    /**
     * Get the jeudi.
     *
     * @return bool Returns the jeudi.
     */
    public function getJeudi() {
        return $this->jeudi;
    }

    /**
     * Get the juil.
     *
     * @return bool Returns the juil.
     */
    public function getJuil() {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return bool Returns the juin.
     */
    public function getJuin() {
        return $this->juin;
    }

    /**
     * Get the lundi.
     *
     * @return bool Returns the lundi.
     */
    public function getLundi() {
        return $this->lundi;
    }

    /**
     * Get the mai.
     *
     * @return bool Returns the mai.
     */
    public function getMai() {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return bool Returns the mar.
     */
    public function getMar() {
        return $this->mar;
    }

    /**
     * Get the mardi.
     *
     * @return bool Returns the mardi.
     */
    public function getMardi() {
        return $this->mardi;
    }

    /**
     * Get the mercredi.
     *
     * @return bool Returns the mercredi.
     */
    public function getMercredi() {
        return $this->mercredi;
    }

    /**
     * Get the note resultat.
     *
     * @return float Returns the note resultat.
     */
    public function getNoteResultat() {
        return $this->noteResultat;
    }

    /**
     * Get the nov.
     *
     * @return bool Returns the nov.
     */
    public function getNov() {
        return $this->nov;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num programme.
     *
     * @return int Returns the num programme.
     */
    public function getNumProgramme() {
        return $this->numProgramme;
    }

    /**
     * Get the occurrence.
     *
     * @return string Returns the occurrence.
     */
    public function getOccurrence() {
        return $this->occurrence;
    }

    /**
     * Get the oct.
     *
     * @return bool Returns the oct.
     */
    public function getOct() {
        return $this->oct;
    }

    /**
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the samedi.
     *
     * @return bool Returns the samedi.
     */
    public function getSamedi() {
        return $this->samedi;
    }

    /**
     * Get the sep.
     *
     * @return bool Returns the sep.
     */
    public function getSep() {
        return $this->sep;
    }

    /**
     * Get the vendredi.
     *
     * @return bool Returns the vendredi.
     */
    public function getVendredi() {
        return $this->vendredi;
    }

    /**
     * Get the vitesse reelle.
     *
     * @return float Returns the vitesse reelle.
     */
    public function getVitesseReelle() {
        return $this->vitesseReelle;
    }

    /**
     * Get the vitesse theorique.
     *
     * @return float Returns the vitesse theorique.
     */
    public function getVitesseTheorique() {
        return $this->vitesseTheorique;
    }

    /**
     * Set the aou.
     *
     * @param bool $aou The aou.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool $avr The avr.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code echelle.
     *
     * @param string $codeEchelle The code echelle.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setCodeEchelle($codeEchelle) {
        $this->codeEchelle = $codeEchelle;
        return $this;
    }

    /**
     * Set the code operation.
     *
     * @param string $codeOperation The code operation.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setCodeOperation($codeOperation) {
        $this->codeOperation = $codeOperation;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool $dec The dec.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the dimanche.
     *
     * @param bool $dimanche The dimanche.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setDimanche($dimanche) {
        $this->dimanche = $dimanche;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool $fev The fev.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool $jan The jan.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jeudi.
     *
     * @param bool $jeudi The jeudi.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setJeudi($jeudi) {
        $this->jeudi = $jeudi;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool $juil The juil.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool $juin The juin.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the lundi.
     *
     * @param bool $lundi The lundi.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setLundi($lundi) {
        $this->lundi = $lundi;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool $mai The mai.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool $mar The mar.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setMar($mar) {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the mardi.
     *
     * @param bool $mardi The mardi.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setMardi($mardi) {
        $this->mardi = $mardi;
        return $this;
    }

    /**
     * Set the mercredi.
     *
     * @param bool $mercredi The mercredi.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setMercredi($mercredi) {
        $this->mercredi = $mercredi;
        return $this;
    }

    /**
     * Set the note resultat.
     *
     * @param float $noteResultat The note resultat.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setNoteResultat($noteResultat) {
        $this->noteResultat = $noteResultat;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool $nov The nov.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setNov($nov) {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int $numProgramme The num programme.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setNumProgramme($numProgramme) {
        $this->numProgramme = $numProgramme;
        return $this;
    }

    /**
     * Set the occurrence.
     *
     * @param string $occurrence The occurrence.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setOccurrence($occurrence) {
        $this->occurrence = $occurrence;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool $oct The oct.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the samedi.
     *
     * @param bool $samedi The samedi.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setSamedi($samedi) {
        $this->samedi = $samedi;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool $sep The sep.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the vendredi.
     *
     * @param bool $vendredi The vendredi.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setVendredi($vendredi) {
        $this->vendredi = $vendredi;
        return $this;
    }

    /**
     * Set the vitesse reelle.
     *
     * @param float $vitesseReelle The vitesse reelle.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setVitesseReelle($vitesseReelle) {
        $this->vitesseReelle = $vitesseReelle;
        return $this;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float $vitesseTheorique The vitesse theorique.
     * @return DevisProgLignes Returns this devis prog lignes.
     */
    public function setVitesseTheorique($vitesseTheorique) {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
