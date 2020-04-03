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
 * Emp recap cice.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCice {

    /**
     * Caisse cp.
     *
     * @var bool
     */
    private $caisseCp;

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
     * @var DateTime|null
     */
    private $periode;

    /**
     * Remun assiette cice.
     *
     * @var float
     */
    private $remunAssietteCice;

    /**
     * Remun brut cice.
     *
     * @var float
     */
    private $remunBrutCice;

    /**
     * Smic mcice.
     *
     * @var float
     */
    private $smicMcice;

    /**
     * Sortie mois.
     *
     * @var bool
     */
    private $sortieMois;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the caisse cp.
     *
     * @return bool Returns the caisse cp.
     */
    public function getCaisseCp() {
        return $this->caisseCp;
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
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the remun assiette cice.
     *
     * @return float Returns the remun assiette cice.
     */
    public function getRemunAssietteCice() {
        return $this->remunAssietteCice;
    }

    /**
     * Get the remun brut cice.
     *
     * @return float Returns the remun brut cice.
     */
    public function getRemunBrutCice() {
        return $this->remunBrutCice;
    }

    /**
     * Get the smic mcice.
     *
     * @return float Returns the smic mcice.
     */
    public function getSmicMcice() {
        return $this->smicMcice;
    }

    /**
     * Get the sortie mois.
     *
     * @return bool Returns the sortie mois.
     */
    public function getSortieMois() {
        return $this->sortieMois;
    }

    /**
     * Set the caisse cp.
     *
     * @param bool $caisseCp The caisse cp.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the remun assiette cice.
     *
     * @param float $remunAssietteCice The remun assiette cice.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setRemunAssietteCice($remunAssietteCice) {
        $this->remunAssietteCice = $remunAssietteCice;
        return $this;
    }

    /**
     * Set the remun brut cice.
     *
     * @param float $remunBrutCice The remun brut cice.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setRemunBrutCice($remunBrutCice) {
        $this->remunBrutCice = $remunBrutCice;
        return $this;
    }

    /**
     * Set the smic mcice.
     *
     * @param float $smicMcice The smic mcice.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setSmicMcice($smicMcice) {
        $this->smicMcice = $smicMcice;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool $sortieMois The sortie mois.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setSortieMois($sortieMois) {
        $this->sortieMois = $sortieMois;
        return $this;
    }
}
