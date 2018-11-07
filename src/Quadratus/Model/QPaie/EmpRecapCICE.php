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
 * Emp recap c i c e model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpRecapCICE {

    /**
     * Caisse c p.
     *
     * @var boolean
     */
    private $caisseCP;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Fraction etab.
     *
     * @var string
     */
    private $fractionEtab;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

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
     * Remun assiette c i c e.
     *
     * @var float
     */
    private $remunAssietteCICE;

    /**
     * Remun brut c i c e.
     *
     * @var float
     */
    private $remunBrutCICE;

    /**
     * S m i c m c i c e.
     *
     * @var float
     */
    private $sMICMCICE;

    /**
     * Sortie mois.
     *
     * @var boolean
     */
    private $sortieMois;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the caisse c p.
     *
     * @return boolean Returns the caisse c p.
     */
    public function getCaisseCP() {
        return $this->caisseCP;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
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
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the fraction etab.
     *
     * @return string Returns the fraction etab.
     */
    public function getFractionEtab() {
        return $this->fractionEtab;
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
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
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
     * Get the remun assiette c i c e.
     *
     * @return float Returns the remun assiette c i c e.
     */
    public function getRemunAssietteCICE() {
        return $this->remunAssietteCICE;
    }

    /**
     * Get the remun brut c i c e.
     *
     * @return float Returns the remun brut c i c e.
     */
    public function getRemunBrutCICE() {
        return $this->remunBrutCICE;
    }

    /**
     * Get the s m i c m c i c e.
     *
     * @return float Returns the s m i c m c i c e.
     */
    public function getSMICMCICE() {
        return $this->sMICMCICE;
    }

    /**
     * Get the sortie mois.
     *
     * @return boolean Returns the sortie mois.
     */
    public function getSortieMois() {
        return $this->sortieMois;
    }

    /**
     * Set the caisse c p.
     *
     * @param boolean $caisseCP The caisse c p.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setCaisseCP($caisseCP) {
        $this->caisseCP = $caisseCP;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the remun assiette c i c e.
     *
     * @param float $remunAssietteCICE The remun assiette c i c e.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setRemunAssietteCICE($remunAssietteCICE) {
        $this->remunAssietteCICE = $remunAssietteCICE;
        return $this;
    }

    /**
     * Set the remun brut c i c e.
     *
     * @param float $remunBrutCICE The remun brut c i c e.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setRemunBrutCICE($remunBrutCICE) {
        $this->remunBrutCICE = $remunBrutCICE;
        return $this;
    }

    /**
     * Set the s m i c m c i c e.
     *
     * @param float $sMICMCICE The s m i c m c i c e.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setSMICMCICE($sMICMCICE) {
        $this->sMICMCICE = $sMICMCICE;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param boolean $sortieMois The sortie mois.
     * @return EmpRecapCICE Returns this emp recap c i c e.
     */
    public function setSortieMois($sortieMois) {
        $this->sortieMois = $sortieMois;
        return $this;
    }

}
