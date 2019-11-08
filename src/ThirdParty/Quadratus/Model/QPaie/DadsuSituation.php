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
 * Dadsu situation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuSituation {

    /**
     * Code debut periode.
     *
     * @var string
     */
    private $codeDebutPeriode;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code temps arret.
     *
     * @var string
     */
    private $codeTempsArret;

    /**
     * Date ctrl norme.
     *
     * @var DateTime|null
     */
    private $dateCtrlNorme;

    /**
     * Debut periode.
     *
     * @var DateTime|null
     */
    private $debutPeriode;

    /**
     * Depuis calcul.
     *
     * @var bool
     */
    private $depuisCalcul;

    /**
     * Etat ctrl norme.
     *
     * @var string
     */
    private $etatCtrlNorme;

    /**
     * Fin periode.
     *
     * @var DateTime|null
     */
    private $finPeriode;

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
     * Montant employeur.
     *
     * @var float
     */
    private $montantEmployeur;

    /**
     * Motif situation.
     *
     * @var string
     */
    private $motifSituation;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Qualif unite temps.
     *
     * @var string
     */
    private $qualifUniteTemps;

    /**
     * Temps arret.
     *
     * @var float
     */
    private $tempsArret;

    /**
     * Type base.
     *
     * @var string
     */
    private $typeBase;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code debut periode.
     *
     * @return string Returns the code debut periode.
     */
    public function getCodeDebutPeriode() {
        return $this->codeDebutPeriode;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the code temps arret.
     *
     * @return string Returns the code temps arret.
     */
    public function getCodeTempsArret() {
        return $this->codeTempsArret;
    }

    /**
     * Get the date ctrl norme.
     *
     * @return DateTime|null Returns the date ctrl norme.
     */
    public function getDateCtrlNorme() {
        return $this->dateCtrlNorme;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime|null Returns the debut periode.
     */
    public function getDebutPeriode() {
        return $this->debutPeriode;
    }

    /**
     * Get the depuis calcul.
     *
     * @return bool Returns the depuis calcul.
     */
    public function getDepuisCalcul() {
        return $this->depuisCalcul;
    }

    /**
     * Get the etat ctrl norme.
     *
     * @return string Returns the etat ctrl norme.
     */
    public function getEtatCtrlNorme() {
        return $this->etatCtrlNorme;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime|null Returns the fin periode.
     */
    public function getFinPeriode() {
        return $this->finPeriode;
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
     * Get the montant employeur.
     *
     * @return float Returns the montant employeur.
     */
    public function getMontantEmployeur() {
        return $this->montantEmployeur;
    }

    /**
     * Get the motif situation.
     *
     * @return string Returns the motif situation.
     */
    public function getMotifSituation() {
        return $this->motifSituation;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Get the qualif unite temps.
     *
     * @return string Returns the qualif unite temps.
     */
    public function getQualifUniteTemps() {
        return $this->qualifUniteTemps;
    }

    /**
     * Get the temps arret.
     *
     * @return float Returns the temps arret.
     */
    public function getTempsArret() {
        return $this->tempsArret;
    }

    /**
     * Get the type base.
     *
     * @return string Returns the type base.
     */
    public function getTypeBase() {
        return $this->typeBase;
    }

    /**
     * Set the code debut periode.
     *
     * @param string $codeDebutPeriode The code debut periode.
     */
    public function setCodeDebutPeriode($codeDebutPeriode) {
        $this->codeDebutPeriode = $codeDebutPeriode;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code temps arret.
     *
     * @param string $codeTempsArret The code temps arret.
     */
    public function setCodeTempsArret($codeTempsArret) {
        $this->codeTempsArret = $codeTempsArret;
        return $this;
    }

    /**
     * Set the date ctrl norme.
     *
     * @param DateTime|null $dateCtrlNorme The date ctrl norme.
     */
    public function setDateCtrlNorme(DateTime $dateCtrlNorme = null) {
        $this->dateCtrlNorme = $dateCtrlNorme;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime|null $debutPeriode The debut periode.
     */
    public function setDebutPeriode(DateTime $debutPeriode = null) {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the depuis calcul.
     *
     * @param bool $depuisCalcul The depuis calcul.
     */
    public function setDepuisCalcul($depuisCalcul) {
        $this->depuisCalcul = $depuisCalcul;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string $etatCtrlNorme The etat ctrl norme.
     */
    public function setEtatCtrlNorme($etatCtrlNorme) {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime|null $finPeriode The fin periode.
     */
    public function setFinPeriode(DateTime $finPeriode = null) {
        $this->finPeriode = $finPeriode;
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
     * Set the montant employeur.
     *
     * @param float $montantEmployeur The montant employeur.
     */
    public function setMontantEmployeur($montantEmployeur) {
        $this->montantEmployeur = $montantEmployeur;
        return $this;
    }

    /**
     * Set the motif situation.
     *
     * @param string $motifSituation The motif situation.
     */
    public function setMotifSituation($motifSituation) {
        $this->motifSituation = $motifSituation;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string $qualifUniteTemps The qualif unite temps.
     */
    public function setQualifUniteTemps($qualifUniteTemps) {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the temps arret.
     *
     * @param float $tempsArret The temps arret.
     */
    public function setTempsArret($tempsArret) {
        $this->tempsArret = $tempsArret;
        return $this;
    }

    /**
     * Set the type base.
     *
     * @param string $typeBase The type base.
     */
    public function setTypeBase($typeBase) {
        $this->typeBase = $typeBase;
        return $this;
    }
}
