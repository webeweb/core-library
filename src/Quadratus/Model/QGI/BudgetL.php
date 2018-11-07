<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Budget l model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class BudgetL {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Code t v a.
     *
     * @var string
     */
    private $codeTVA;

    /**
     * Code travail.
     *
     * @var string
     */
    private $codeTravail;

    /**
     * H soldees.
     *
     * @var boolean
     */
    private $hSoldees;

    /**
     * Nbr heures.
     *
     * @var float
     */
    private $nbrHeures;

    /**
     * Niveau.
     *
     * @var int
     */
    private $niveau;

    /**
     * Nom travail.
     *
     * @var string
     */
    private $nomTravail;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num uniq.
     *
     * @var string
     */
    private $numUniq;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Prix heure.
     *
     * @var float
     */
    private $prixHeure;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Type affectation.
     *
     * @var string
     */
    private $typeAffectation;

    /**
     * Uniq id l m.
     *
     * @var string
     */
    private $uniqIdLM;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the code t v a.
     *
     * @return string Returns the code t v a.
     */
    public function getCodeTVA() {
        return $this->codeTVA;
    }

    /**
     * Get the code travail.
     *
     * @return string Returns the code travail.
     */
    public function getCodeTravail() {
        return $this->codeTravail;
    }

    /**
     * Get the h soldees.
     *
     * @return boolean Returns the h soldees.
     */
    public function getHSoldees() {
        return $this->hSoldees;
    }

    /**
     * Get the nbr heures.
     *
     * @return float Returns the nbr heures.
     */
    public function getNbrHeures() {
        return $this->nbrHeures;
    }

    /**
     * Get the niveau.
     *
     * @return int Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the nom travail.
     *
     * @return string Returns the nom travail.
     */
    public function getNomTravail() {
        return $this->nomTravail;
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
     * Get the num uniq.
     *
     * @return string Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
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
     * Get the prix heure.
     *
     * @return float Returns the prix heure.
     */
    public function getPrixHeure() {
        return $this->prixHeure;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the type affectation.
     *
     * @return string Returns the type affectation.
     */
    public function getTypeAffectation() {
        return $this->typeAffectation;
    }

    /**
     * Get the uniq id l m.
     *
     * @return string Returns the uniq id l m.
     */
    public function getUniqIdLM() {
        return $this->uniqIdLM;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return BudgetL Returns this budget l.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return BudgetL Returns this budget l.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return BudgetL Returns this budget l.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return BudgetL Returns this budget l.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     * @return BudgetL Returns this budget l.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the h soldees.
     *
     * @param boolean $hSoldees The h soldees.
     * @return BudgetL Returns this budget l.
     */
    public function setHSoldees($hSoldees) {
        $this->hSoldees = $hSoldees;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float $nbrHeures The nbr heures.
     * @return BudgetL Returns this budget l.
     */
    public function setNbrHeures($nbrHeures) {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     * @return BudgetL Returns this budget l.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom travail.
     *
     * @param string $nomTravail The nom travail.
     * @return BudgetL Returns this budget l.
     */
    public function setNomTravail($nomTravail) {
        $this->nomTravail = $nomTravail;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return BudgetL Returns this budget l.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string $numUniq The num uniq.
     * @return BudgetL Returns this budget l.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return BudgetL Returns this budget l.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prix heure.
     *
     * @param float $prixHeure The prix heure.
     * @return BudgetL Returns this budget l.
     */
    public function setPrixHeure($prixHeure) {
        $this->prixHeure = $prixHeure;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return BudgetL Returns this budget l.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string $typeAffectation The type affectation.
     * @return BudgetL Returns this budget l.
     */
    public function setTypeAffectation($typeAffectation) {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }

    /**
     * Set the uniq id l m.
     *
     * @param string $uniqIdLM The uniq id l m.
     * @return BudgetL Returns this budget l.
     */
    public function setUniqIdLM($uniqIdLM) {
        $this->uniqIdLM = $uniqIdLM;
        return $this;
    }

}
