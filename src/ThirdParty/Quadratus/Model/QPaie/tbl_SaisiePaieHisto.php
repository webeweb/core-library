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
 * tbl_ saisie paie histo model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class tbl_SaisiePaieHisto {

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code user.
     *
     * @var string
     */
    private $codeUser;

    /**
     * Date added.
     *
     * @var DateTime
     */
    private $dateAdded;

    /**
     * Flag.
     *
     * @var int
     */
    private $flag;

    /**
     * I d.
     *
     * @var int
     */
    private $iD;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule2.
     *
     * @var string
     */
    private $intitule2;

    /**
     * Mois deb fixe.
     *
     * @var string
     */
    private $moisDebFixe;

    /**
     * Mois fin fixe.
     *
     * @var string
     */
    private $moisFinFixe;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Periode rappel.
     *
     * @var DateTime
     */
    private $periodeRappel;

    /**
     * Posit.
     *
     * @var int
     */
    private $posit;

    /**
     * Type ligne.
     *
     * @var string
     */
    private $typeLigne;

    /**
     * Valeur1.
     *
     * @var float
     */
    private $valeur1;

    /**
     * Valeur2.
     *
     * @var float
     */
    private $valeur2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the code user.
     *
     * @return string Returns the code user.
     */
    public function getCodeUser() {
        return $this->codeUser;
    }

    /**
     * Get the date added.
     *
     * @return DateTime Returns the date added.
     */
    public function getDateAdded() {
        return $this->dateAdded;
    }

    /**
     * Get the flag.
     *
     * @return int Returns the flag.
     */
    public function getFlag() {
        return $this->flag;
    }

    /**
     * Get the i d.
     *
     * @return int Returns the i d.
     */
    public function getID() {
        return $this->iD;
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
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the intitule2.
     *
     * @return string Returns the intitule2.
     */
    public function getIntitule2() {
        return $this->intitule2;
    }

    /**
     * Get the mois deb fixe.
     *
     * @return string Returns the mois deb fixe.
     */
    public function getMoisDebFixe() {
        return $this->moisDebFixe;
    }

    /**
     * Get the mois fin fixe.
     *
     * @return string Returns the mois fin fixe.
     */
    public function getMoisFinFixe() {
        return $this->moisFinFixe;
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
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the periode rappel.
     *
     * @return DateTime Returns the periode rappel.
     */
    public function getPeriodeRappel() {
        return $this->periodeRappel;
    }

    /**
     * Get the posit.
     *
     * @return int Returns the posit.
     */
    public function getPosit() {
        return $this->posit;
    }

    /**
     * Get the type ligne.
     *
     * @return string Returns the type ligne.
     */
    public function getTypeLigne() {
        return $this->typeLigne;
    }

    /**
     * Get the valeur1.
     *
     * @return float Returns the valeur1.
     */
    public function getValeur1() {
        return $this->valeur1;
    }

    /**
     * Get the valeur2.
     *
     * @return float Returns the valeur2.
     */
    public function getValeur2() {
        return $this->valeur2;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime $dateAdded The date added.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setDateAdded(DateTime $dateAdded = null) {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param int $flag The flag.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the i d.
     *
     * @param int $iD The i d.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setID($iD) {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the mois deb fixe.
     *
     * @param string $moisDebFixe The mois deb fixe.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setMoisDebFixe($moisDebFixe) {
        $this->moisDebFixe = $moisDebFixe;
        return $this;
    }

    /**
     * Set the mois fin fixe.
     *
     * @param string $moisFinFixe The mois fin fixe.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setMoisFinFixe($moisFinFixe) {
        $this->moisFinFixe = $moisFinFixe;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode rappel.
     *
     * @param DateTime $periodeRappel The periode rappel.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setPeriodeRappel(DateTime $periodeRappel = null) {
        $this->periodeRappel = $periodeRappel;
        return $this;
    }

    /**
     * Set the posit.
     *
     * @param int $posit The posit.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setPosit($posit) {
        $this->posit = $posit;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float $valeur1 The valeur1.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setValeur1($valeur1) {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float $valeur2 The valeur2.
     * @return tbl_SaisiePaieHisto Returns this tbl_ saisie paie histo.
     */
    public function setValeur2($valeur2) {
        $this->valeur2 = $valeur2;
        return $this;
    }
}
