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
 * Mensualisation tache avenants model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class MensualisationTacheAvenants {

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
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Histo mens saisi.
     *
     * @var boolean
     */
    private $histoMensSaisi;

    /**
     * Mensualisation calculee.
     *
     * @var float
     */
    private $mensualisationCalculee;

    /**
     * Mensualisation saisie.
     *
     * @var float
     */
    private $mensualisationSaisie;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Periode debut validite.
     *
     * @var DateTime
     */
    private $periodeDebutValidite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the histo mens saisi.
     *
     * @return boolean Returns the histo mens saisi.
     */
    public function getHistoMensSaisi() {
        return $this->histoMensSaisi;
    }

    /**
     * Get the mensualisation calculee.
     *
     * @return float Returns the mensualisation calculee.
     */
    public function getMensualisationCalculee() {
        return $this->mensualisationCalculee;
    }

    /**
     * Get the mensualisation saisie.
     *
     * @return float Returns the mensualisation saisie.
     */
    public function getMensualisationSaisie() {
        return $this->mensualisationSaisie;
    }

    /**
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
    }

    /**
     * Get the numero avenant.
     *
     * @return int Returns the numero avenant.
     */
    public function getNumeroAvenant() {
        return $this->numeroAvenant;
    }

    /**
     * Get the periode debut validite.
     *
     * @return DateTime Returns the periode debut validite.
     */
    public function getPeriodeDebutValidite() {
        return $this->periodeDebutValidite;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the histo mens saisi.
     *
     * @param boolean $histoMensSaisi The histo mens saisi.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setHistoMensSaisi($histoMensSaisi) {
        $this->histoMensSaisi = $histoMensSaisi;
        return $this;
    }

    /**
     * Set the mensualisation calculee.
     *
     * @param float $mensualisationCalculee The mensualisation calculee.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setMensualisationCalculee($mensualisationCalculee) {
        $this->mensualisationCalculee = $mensualisationCalculee;
        return $this;
    }

    /**
     * Set the mensualisation saisie.
     *
     * @param float $mensualisationSaisie The mensualisation saisie.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setMensualisationSaisie($mensualisationSaisie) {
        $this->mensualisationSaisie = $mensualisationSaisie;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the periode debut validite.
     *
     * @param DateTime $periodeDebutValidite The periode debut validite.
     * @return MensualisationTacheAvenants Returns this mensualisation tache avenants.
     */
    public function setPeriodeDebutValidite(DateTime $periodeDebutValidite = null) {
        $this->periodeDebutValidite = $periodeDebutValidite;
        return $this;
    }

}
