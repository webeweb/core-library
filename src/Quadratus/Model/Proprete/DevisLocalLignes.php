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

/**
 * Devis local lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class DevisLocalLignes {

    /**
     * Aou.
     *
     * @var boolean
     */
    private $aou;

    /**
     * Avr.
     *
     * @var boolean
     */
    private $avr;

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
     * Code programme.
     *
     * @var string
     */
    private $codeProgramme;

    /**
     * Dec.
     *
     * @var boolean
     */
    private $dec;

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Dimanche.
     *
     * @var boolean
     */
    private $dimanche;

    /**
     * Fev.
     *
     * @var boolean
     */
    private $fev;

    /**
     * Jan.
     *
     * @var boolean
     */
    private $jan;

    /**
     * Jeudi.
     *
     * @var boolean
     */
    private $jeudi;

    /**
     * Juil.
     *
     * @var boolean
     */
    private $juil;

    /**
     * Juin.
     *
     * @var boolean
     */
    private $juin;

    /**
     * Lundi.
     *
     * @var boolean
     */
    private $lundi;

    /**
     * Mai.
     *
     * @var boolean
     */
    private $mai;

    /**
     * Mar.
     *
     * @var boolean
     */
    private $mar;

    /**
     * Mardi.
     *
     * @var boolean
     */
    private $mardi;

    /**
     * Mercredi.
     *
     * @var boolean
     */
    private $mercredi;

    /**
     * Nov.
     *
     * @var boolean
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
     * Num ligne local.
     *
     * @var int
     */
    private $numLigneLocal;

    /**
     * Occurrence.
     *
     * @var string
     */
    private $occurrence;

    /**
     * Oct.
     *
     * @var boolean
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
     * @var boolean
     */
    private $samedi;

    /**
     * Sep.
     *
     * @var boolean
     */
    private $sep;

    /**
     * Vendredi.
     *
     * @var boolean
     */
    private $vendredi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the aou.
     *
     * @return boolean Returns the aou.
     */
    public function getAou() {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return boolean Returns the avr.
     */
    public function getAvr() {
        return $this->avr;
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
     * Get the code programme.
     *
     * @return string Returns the code programme.
     */
    public function getCodeProgramme() {
        return $this->codeProgramme;
    }

    /**
     * Get the dec.
     *
     * @return boolean Returns the dec.
     */
    public function getDec() {
        return $this->dec;
    }

    /**
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Get the dimanche.
     *
     * @return boolean Returns the dimanche.
     */
    public function getDimanche() {
        return $this->dimanche;
    }

    /**
     * Get the fev.
     *
     * @return boolean Returns the fev.
     */
    public function getFev() {
        return $this->fev;
    }

    /**
     * Get the jan.
     *
     * @return boolean Returns the jan.
     */
    public function getJan() {
        return $this->jan;
    }

    /**
     * Get the jeudi.
     *
     * @return boolean Returns the jeudi.
     */
    public function getJeudi() {
        return $this->jeudi;
    }

    /**
     * Get the juil.
     *
     * @return boolean Returns the juil.
     */
    public function getJuil() {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return boolean Returns the juin.
     */
    public function getJuin() {
        return $this->juin;
    }

    /**
     * Get the lundi.
     *
     * @return boolean Returns the lundi.
     */
    public function getLundi() {
        return $this->lundi;
    }

    /**
     * Get the mai.
     *
     * @return boolean Returns the mai.
     */
    public function getMai() {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return boolean Returns the mar.
     */
    public function getMar() {
        return $this->mar;
    }

    /**
     * Get the mardi.
     *
     * @return boolean Returns the mardi.
     */
    public function getMardi() {
        return $this->mardi;
    }

    /**
     * Get the mercredi.
     *
     * @return boolean Returns the mercredi.
     */
    public function getMercredi() {
        return $this->mercredi;
    }

    /**
     * Get the nov.
     *
     * @return boolean Returns the nov.
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
     * Get the num ligne local.
     *
     * @return int Returns the num ligne local.
     */
    public function getNumLigneLocal() {
        return $this->numLigneLocal;
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
     * @return boolean Returns the oct.
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
     * @return boolean Returns the samedi.
     */
    public function getSamedi() {
        return $this->samedi;
    }

    /**
     * Get the sep.
     *
     * @return boolean Returns the sep.
     */
    public function getSep() {
        return $this->sep;
    }

    /**
     * Get the vendredi.
     *
     * @return boolean Returns the vendredi.
     */
    public function getVendredi() {
        return $this->vendredi;
    }

    /**
     * Set the aou.
     *
     * @param boolean $aou The aou.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param boolean $avr The avr.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code programme.
     *
     * @param string $codeProgramme The code programme.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setCodeProgramme($codeProgramme) {
        $this->codeProgramme = $codeProgramme;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param boolean $dec The dec.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the dimanche.
     *
     * @param boolean $dimanche The dimanche.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setDimanche($dimanche) {
        $this->dimanche = $dimanche;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param boolean $fev The fev.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param boolean $jan The jan.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jeudi.
     *
     * @param boolean $jeudi The jeudi.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setJeudi($jeudi) {
        $this->jeudi = $jeudi;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param boolean $juil The juil.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param boolean $juin The juin.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the lundi.
     *
     * @param boolean $lundi The lundi.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setLundi($lundi) {
        $this->lundi = $lundi;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param boolean $mai The mai.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param boolean $mar The mar.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setMar($mar) {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the mardi.
     *
     * @param boolean $mardi The mardi.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setMardi($mardi) {
        $this->mardi = $mardi;
        return $this;
    }

    /**
     * Set the mercredi.
     *
     * @param boolean $mercredi The mercredi.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setMercredi($mercredi) {
        $this->mercredi = $mercredi;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param boolean $nov The nov.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setNov($nov) {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num ligne local.
     *
     * @param int $numLigneLocal The num ligne local.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setNumLigneLocal($numLigneLocal) {
        $this->numLigneLocal = $numLigneLocal;
        return $this;
    }

    /**
     * Set the occurrence.
     *
     * @param string $occurrence The occurrence.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setOccurrence($occurrence) {
        $this->occurrence = $occurrence;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param boolean $oct The oct.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the samedi.
     *
     * @param boolean $samedi The samedi.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setSamedi($samedi) {
        $this->samedi = $samedi;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param boolean $sep The sep.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the vendredi.
     *
     * @param boolean $vendredi The vendredi.
     * @return DevisLocalLignes Returns this devis local lignes.
     */
    public function setVendredi($vendredi) {
        $this->vendredi = $vendredi;
        return $this;
    }

}
