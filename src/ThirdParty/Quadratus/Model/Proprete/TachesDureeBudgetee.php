<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Taches duree budgetee model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class TachesDureeBudgetee {

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
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Duree budgetee1.
     *
     * @var float
     */
    private $dureeBudgetee1;

    /**
     * Duree budgetee10.
     *
     * @var float
     */
    private $dureeBudgetee10;

    /**
     * Duree budgetee11.
     *
     * @var float
     */
    private $dureeBudgetee11;

    /**
     * Duree budgetee12.
     *
     * @var float
     */
    private $dureeBudgetee12;

    /**
     * Duree budgetee2.
     *
     * @var float
     */
    private $dureeBudgetee2;

    /**
     * Duree budgetee3.
     *
     * @var float
     */
    private $dureeBudgetee3;

    /**
     * Duree budgetee4.
     *
     * @var float
     */
    private $dureeBudgetee4;

    /**
     * Duree budgetee5.
     *
     * @var float
     */
    private $dureeBudgetee5;

    /**
     * Duree budgetee6.
     *
     * @var float
     */
    private $dureeBudgetee6;

    /**
     * Duree budgetee7.
     *
     * @var float
     */
    private $dureeBudgetee7;

    /**
     * Duree budgetee8.
     *
     * @var float
     */
    private $dureeBudgetee8;

    /**
     * Duree budgetee9.
     *
     * @var float
     */
    private $dureeBudgetee9;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

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
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the duree budgetee1.
     *
     * @return float Returns the duree budgetee1.
     */
    public function getDureeBudgetee1() {
        return $this->dureeBudgetee1;
    }

    /**
     * Get the duree budgetee10.
     *
     * @return float Returns the duree budgetee10.
     */
    public function getDureeBudgetee10() {
        return $this->dureeBudgetee10;
    }

    /**
     * Get the duree budgetee11.
     *
     * @return float Returns the duree budgetee11.
     */
    public function getDureeBudgetee11() {
        return $this->dureeBudgetee11;
    }

    /**
     * Get the duree budgetee12.
     *
     * @return float Returns the duree budgetee12.
     */
    public function getDureeBudgetee12() {
        return $this->dureeBudgetee12;
    }

    /**
     * Get the duree budgetee2.
     *
     * @return float Returns the duree budgetee2.
     */
    public function getDureeBudgetee2() {
        return $this->dureeBudgetee2;
    }

    /**
     * Get the duree budgetee3.
     *
     * @return float Returns the duree budgetee3.
     */
    public function getDureeBudgetee3() {
        return $this->dureeBudgetee3;
    }

    /**
     * Get the duree budgetee4.
     *
     * @return float Returns the duree budgetee4.
     */
    public function getDureeBudgetee4() {
        return $this->dureeBudgetee4;
    }

    /**
     * Get the duree budgetee5.
     *
     * @return float Returns the duree budgetee5.
     */
    public function getDureeBudgetee5() {
        return $this->dureeBudgetee5;
    }

    /**
     * Get the duree budgetee6.
     *
     * @return float Returns the duree budgetee6.
     */
    public function getDureeBudgetee6() {
        return $this->dureeBudgetee6;
    }

    /**
     * Get the duree budgetee7.
     *
     * @return float Returns the duree budgetee7.
     */
    public function getDureeBudgetee7() {
        return $this->dureeBudgetee7;
    }

    /**
     * Get the duree budgetee8.
     *
     * @return float Returns the duree budgetee8.
     */
    public function getDureeBudgetee8() {
        return $this->dureeBudgetee8;
    }

    /**
     * Get the duree budgetee9.
     *
     * @return float Returns the duree budgetee9.
     */
    public function getDureeBudgetee9() {
        return $this->dureeBudgetee9;
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
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the duree budgetee1.
     *
     * @param float $dureeBudgetee1 The duree budgetee1.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee1($dureeBudgetee1) {
        $this->dureeBudgetee1 = $dureeBudgetee1;
        return $this;
    }

    /**
     * Set the duree budgetee10.
     *
     * @param float $dureeBudgetee10 The duree budgetee10.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee10($dureeBudgetee10) {
        $this->dureeBudgetee10 = $dureeBudgetee10;
        return $this;
    }

    /**
     * Set the duree budgetee11.
     *
     * @param float $dureeBudgetee11 The duree budgetee11.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee11($dureeBudgetee11) {
        $this->dureeBudgetee11 = $dureeBudgetee11;
        return $this;
    }

    /**
     * Set the duree budgetee12.
     *
     * @param float $dureeBudgetee12 The duree budgetee12.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee12($dureeBudgetee12) {
        $this->dureeBudgetee12 = $dureeBudgetee12;
        return $this;
    }

    /**
     * Set the duree budgetee2.
     *
     * @param float $dureeBudgetee2 The duree budgetee2.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee2($dureeBudgetee2) {
        $this->dureeBudgetee2 = $dureeBudgetee2;
        return $this;
    }

    /**
     * Set the duree budgetee3.
     *
     * @param float $dureeBudgetee3 The duree budgetee3.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee3($dureeBudgetee3) {
        $this->dureeBudgetee3 = $dureeBudgetee3;
        return $this;
    }

    /**
     * Set the duree budgetee4.
     *
     * @param float $dureeBudgetee4 The duree budgetee4.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee4($dureeBudgetee4) {
        $this->dureeBudgetee4 = $dureeBudgetee4;
        return $this;
    }

    /**
     * Set the duree budgetee5.
     *
     * @param float $dureeBudgetee5 The duree budgetee5.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee5($dureeBudgetee5) {
        $this->dureeBudgetee5 = $dureeBudgetee5;
        return $this;
    }

    /**
     * Set the duree budgetee6.
     *
     * @param float $dureeBudgetee6 The duree budgetee6.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee6($dureeBudgetee6) {
        $this->dureeBudgetee6 = $dureeBudgetee6;
        return $this;
    }

    /**
     * Set the duree budgetee7.
     *
     * @param float $dureeBudgetee7 The duree budgetee7.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee7($dureeBudgetee7) {
        $this->dureeBudgetee7 = $dureeBudgetee7;
        return $this;
    }

    /**
     * Set the duree budgetee8.
     *
     * @param float $dureeBudgetee8 The duree budgetee8.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee8($dureeBudgetee8) {
        $this->dureeBudgetee8 = $dureeBudgetee8;
        return $this;
    }

    /**
     * Set the duree budgetee9.
     *
     * @param float $dureeBudgetee9 The duree budgetee9.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setDureeBudgetee9($dureeBudgetee9) {
        $this->dureeBudgetee9 = $dureeBudgetee9;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return TachesDureeBudgetee Returns this taches duree budgetee.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
