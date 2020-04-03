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
 * Lignes cafat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesCafat {

    /**
     * Code commune.
     *
     * @var string
     */
    private $codeCommune;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Date debauchage.
     *
     * @var DateTime|null
     */
    private $dateDebauchage;

    /**
     * Date embauchage.
     *
     * @var DateTime|null
     */
    private $dateEmbauchage;

    /**
     * Nb h trav.
     *
     * @var float
     */
    private $nbHTrav;

    /**
     * No et.
     *
     * @var string
     */
    private $noEt;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Numero assure.
     *
     * @var string
     */
    private $numeroAssure;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Salaire brut.
     *
     * @var float
     */
    private $salaireBrut;

    /**
     * Taux at.
     *
     * @var float
     */
    private $tauxAt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code commune.
     *
     * @return string Returns the code commune.
     */
    public function getCodeCommune() {
        return $this->codeCommune;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the date debauchage.
     *
     * @return DateTime|null Returns the date debauchage.
     */
    public function getDateDebauchage() {
        return $this->dateDebauchage;
    }

    /**
     * Get the date embauchage.
     *
     * @return DateTime|null Returns the date embauchage.
     */
    public function getDateEmbauchage() {
        return $this->dateEmbauchage;
    }

    /**
     * Get the nb h trav.
     *
     * @return float Returns the nb h trav.
     */
    public function getNbHTrav() {
        return $this->nbHTrav;
    }

    /**
     * Get the no et.
     *
     * @return string Returns the no et.
     */
    public function getNoEt() {
        return $this->noEt;
    }

    /**
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
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
     * Get the numero assure.
     *
     * @return string Returns the numero assure.
     */
    public function getNumeroAssure() {
        return $this->numeroAssure;
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
     * Get the organisme.
     *
     * @return string Returns the organisme.
     */
    public function getOrganisme() {
        return $this->organisme;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla() {
        return $this->periodeDecla;
    }

    /**
     * Get the salaire brut.
     *
     * @return float Returns the salaire brut.
     */
    public function getSalaireBrut() {
        return $this->salaireBrut;
    }

    /**
     * Get the taux at.
     *
     * @return float Returns the taux at.
     */
    public function getTauxAt() {
        return $this->tauxAt;
    }

    /**
     * Set the code commune.
     *
     * @param string $codeCommune The code commune.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setCodeCommune($codeCommune) {
        $this->codeCommune = $codeCommune;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date debauchage.
     *
     * @param DateTime|null $dateDebauchage The date debauchage.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setDateDebauchage(DateTime $dateDebauchage = null) {
        $this->dateDebauchage = $dateDebauchage;
        return $this;
    }

    /**
     * Set the date embauchage.
     *
     * @param DateTime|null $dateEmbauchage The date embauchage.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setDateEmbauchage(DateTime $dateEmbauchage = null) {
        $this->dateEmbauchage = $dateEmbauchage;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float $nbHTrav The nb h trav.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNbHTrav($nbHTrav) {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the no et.
     *
     * @param string $noEt The no et.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNoEt($noEt) {
        $this->noEt = $noEt;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero assure.
     *
     * @param string $numeroAssure The numero assure.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNumeroAssure($numeroAssure) {
        $this->numeroAssure = $numeroAssure;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float $salaireBrut The salaire brut.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setSalaireBrut($salaireBrut) {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float $tauxAt The taux at.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setTauxAt($tauxAt) {
        $this->tauxAt = $tauxAt;
        return $this;
    }
}
