<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Budget l.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * Code travail.
     *
     * @var string
     */
    private $codeTravail;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * H soldees.
     *
     * @var bool
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
     * @var DateTime|null
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
     * Uniq id lm.
     *
     * @var string
     */
    private $uniqIdLm;

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
     * Get the code travail.
     *
     * @return string Returns the code travail.
     */
    public function getCodeTravail() {
        return $this->codeTravail;
    }

    /**
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the h soldees.
     *
     * @return bool Returns the h soldees.
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
     * @return DateTime|null Returns the periode.
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
     * Get the uniq id lm.
     *
     * @return string Returns the uniq id lm.
     */
    public function getUniqIdLm() {
        return $this->uniqIdLm;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     * @return BudgetL Returns this Budget l.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the h soldees.
     *
     * @param bool $hSoldees The h soldees.
     * @return BudgetL Returns this Budget l.
     */
    public function setHSoldees($hSoldees) {
        $this->hSoldees = $hSoldees;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float $nbrHeures The nbr heures.
     * @return BudgetL Returns this Budget l.
     */
    public function setNbrHeures($nbrHeures) {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     * @return BudgetL Returns this Budget l.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom travail.
     *
     * @param string $nomTravail The nom travail.
     * @return BudgetL Returns this Budget l.
     */
    public function setNomTravail($nomTravail) {
        $this->nomTravail = $nomTravail;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return BudgetL Returns this Budget l.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string $numUniq The num uniq.
     * @return BudgetL Returns this Budget l.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return BudgetL Returns this Budget l.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prix heure.
     *
     * @param float $prixHeure The prix heure.
     * @return BudgetL Returns this Budget l.
     */
    public function setPrixHeure($prixHeure) {
        $this->prixHeure = $prixHeure;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return BudgetL Returns this Budget l.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string $typeAffectation The type affectation.
     * @return BudgetL Returns this Budget l.
     */
    public function setTypeAffectation($typeAffectation) {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }

    /**
     * Set the uniq id lm.
     *
     * @param string $uniqIdLm The uniq id lm.
     * @return BudgetL Returns this Budget l.
     */
    public function setUniqIdLm($uniqIdLm) {
        $this->uniqIdLm = $uniqIdLm;
        return $this;
    }
}
