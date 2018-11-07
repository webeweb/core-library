<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes c a f a t model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesCAFAT {

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
     * @var DateTime
     */
    private $dateDebauchage;

    /**
     * Date embauchage.
     *
     * @var DateTime
     */
    private $dateEmbauchage;

    /**
     * Nb h trav.
     *
     * @var float
     */
    private $nbHTrav;

    /**
     * No e t.
     *
     * @var string
     */
    private $noET;

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
     * @var DateTime
     */
    private $periodeDecla;

    /**
     * Salaire brut.
     *
     * @var float
     */
    private $salaireBrut;

    /**
     * Taux a t.
     *
     * @var float
     */
    private $tauxAT;

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
     * @return DateTime Returns the date debauchage.
     */
    public function getDateDebauchage() {
        return $this->dateDebauchage;
    }

    /**
     * Get the date embauchage.
     *
     * @return DateTime Returns the date embauchage.
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
     * Get the no e t.
     *
     * @return string Returns the no e t.
     */
    public function getNoET() {
        return $this->noET;
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
     * @return DateTime Returns the periode decla.
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
     * Get the taux a t.
     *
     * @return float Returns the taux a t.
     */
    public function getTauxAT() {
        return $this->tauxAT;
    }

    /**
     * Set the code commune.
     *
     * @param string $codeCommune The code commune.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setCodeCommune($codeCommune) {
        $this->codeCommune = $codeCommune;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date debauchage.
     *
     * @param DateTime $dateDebauchage The date debauchage.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setDateDebauchage(DateTime $dateDebauchage = null) {
        $this->dateDebauchage = $dateDebauchage;
        return $this;
    }

    /**
     * Set the date embauchage.
     *
     * @param DateTime $dateEmbauchage The date embauchage.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setDateEmbauchage(DateTime $dateEmbauchage = null) {
        $this->dateEmbauchage = $dateEmbauchage;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float $nbHTrav The nb h trav.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setNbHTrav($nbHTrav) {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the no e t.
     *
     * @param string $noET The no e t.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setNoET($noET) {
        $this->noET = $noET;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero assure.
     *
     * @param string $numeroAssure The numero assure.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setNumeroAssure($numeroAssure) {
        $this->numeroAssure = $numeroAssure;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime $periodeDecla The periode decla.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float $salaireBrut The salaire brut.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setSalaireBrut($salaireBrut) {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

    /**
     * Set the taux a t.
     *
     * @param float $tauxAT The taux a t.
     * @return LignesCAFAT Returns this lignes c a f a t.
     */
    public function setTauxAT($tauxAT) {
        $this->tauxAT = $tauxAT;
        return $this;
    }

}
