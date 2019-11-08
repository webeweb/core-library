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
 * Emp recap cicemsa.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCicemsa {

    /**
     * Caisse cp.
     *
     * @var bool
     */
    private $caisseCp;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

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
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
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
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
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
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
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
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the remun assiette cice.
     *
     * @param float $remunAssietteCice The remun assiette cice.
     */
    public function setRemunAssietteCice($remunAssietteCice) {
        $this->remunAssietteCice = $remunAssietteCice;
        return $this;
    }

    /**
     * Set the remun brut cice.
     *
     * @param float $remunBrutCice The remun brut cice.
     */
    public function setRemunBrutCice($remunBrutCice) {
        $this->remunBrutCice = $remunBrutCice;
        return $this;
    }

    /**
     * Set the smic mcice.
     *
     * @param float $smicMcice The smic mcice.
     */
    public function setSmicMcice($smicMcice) {
        $this->smicMcice = $smicMcice;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool $sortieMois The sortie mois.
     */
    public function setSortieMois($sortieMois) {
        $this->sortieMois = $sortieMois;
        return $this;
    }
}
