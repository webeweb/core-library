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

use DateTime;

/**
 * Forfaits model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Forfaits {

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
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string
     */
    private $codePrime;

    /**
     * Code tache type.
     *
     * @var string
     */
    private $codeTacheType;

    /**
     * Date debut.
     *
     * @var DateTime
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime
     */
    private $dateFin;

    /**
     * Dec.
     *
     * @var boolean
     */
    private $dec;

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
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Nov.
     *
     * @var boolean
     */
    private $nov;

    /**
     * Num forfait.
     *
     * @var int
     */
    private $numForfait;

    /**
     * Oct.
     *
     * @var boolean
     */
    private $oct;

    /**
     * Sep.
     *
     * @var boolean
     */
    private $sep;

    /**
     * Type code prime.
     *
     * @var string
     */
    private $typeCodePrime;

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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string Returns the code prime.
     */
    public function getCodePrime() {
        return $this->codePrime;
    }

    /**
     * Get the code tache type.
     *
     * @return string Returns the code tache type.
     */
    public function getCodeTacheType() {
        return $this->codeTacheType;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
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
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
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
     * Get the num forfait.
     *
     * @return int Returns the num forfait.
     */
    public function getNumForfait() {
        return $this->numForfait;
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
     * Get the sep.
     *
     * @return boolean Returns the sep.
     */
    public function getSep() {
        return $this->sep;
    }

    /**
     * Get the type code prime.
     *
     * @return string Returns the type code prime.
     */
    public function getTypeCodePrime() {
        return $this->typeCodePrime;
    }

    /**
     * Set the aou.
     *
     * @param boolean $aou The aou.
     * @return Forfaits Returns this forfaits.
     */
    public function setAou($aou) {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param boolean $avr The avr.
     * @return Forfaits Returns this forfaits.
     */
    public function setAvr($avr) {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return Forfaits Returns this forfaits.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return Forfaits Returns this forfaits.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Forfaits Returns this forfaits.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return Forfaits Returns this forfaits.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string $codePrime The code prime.
     * @return Forfaits Returns this forfaits.
     */
    public function setCodePrime($codePrime) {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the code tache type.
     *
     * @param string $codeTacheType The code tache type.
     * @return Forfaits Returns this forfaits.
     */
    public function setCodeTacheType($codeTacheType) {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime $dateDebut The date debut.
     * @return Forfaits Returns this forfaits.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime $dateFin The date fin.
     * @return Forfaits Returns this forfaits.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param boolean $dec The dec.
     * @return Forfaits Returns this forfaits.
     */
    public function setDec($dec) {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param boolean $fev The fev.
     * @return Forfaits Returns this forfaits.
     */
    public function setFev($fev) {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param boolean $jan The jan.
     * @return Forfaits Returns this forfaits.
     */
    public function setJan($jan) {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param boolean $juil The juil.
     * @return Forfaits Returns this forfaits.
     */
    public function setJuil($juil) {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param boolean $juin The juin.
     * @return Forfaits Returns this forfaits.
     */
    public function setJuin($juin) {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param boolean $mai The mai.
     * @return Forfaits Returns this forfaits.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param boolean $mar The mar.
     * @return Forfaits Returns this forfaits.
     */
    public function setMar($mar) {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return Forfaits Returns this forfaits.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param boolean $nov The nov.
     * @return Forfaits Returns this forfaits.
     */
    public function setNov($nov) {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num forfait.
     *
     * @param int $numForfait The num forfait.
     * @return Forfaits Returns this forfaits.
     */
    public function setNumForfait($numForfait) {
        $this->numForfait = $numForfait;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param boolean $oct The oct.
     * @return Forfaits Returns this forfaits.
     */
    public function setOct($oct) {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param boolean $sep The sep.
     * @return Forfaits Returns this forfaits.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the type code prime.
     *
     * @param string $typeCodePrime The type code prime.
     * @return Forfaits Returns this forfaits.
     */
    public function setTypeCodePrime($typeCodePrime) {
        $this->typeCodePrime = $typeCodePrime;
        return $this;
    }

}
