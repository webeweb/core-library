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
 * Cde type insp entetes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class CdeTypeInspEntetes {

    /**
     * Code inspecteur.
     *
     * @var string
     */
    private $codeInspecteur;

    /**
     * Dt validite debut.
     *
     * @var DateTime
     */
    private $dtValiditeDebut;

    /**
     * Dt validite fin.
     *
     * @var DateTime
     */
    private $dtValiditeFin;

    /**
     * Montant budget.
     *
     * @var float
     */
    private $montantBudget;

    /**
     * Montant h t cde.
     *
     * @var float
     */
    private $montantHTCde;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code inspecteur.
     *
     * @return string Returns the code inspecteur.
     */
    public function getCodeInspecteur() {
        return $this->codeInspecteur;
    }

    /**
     * Get the dt validite debut.
     *
     * @return DateTime Returns the dt validite debut.
     */
    public function getDtValiditeDebut() {
        return $this->dtValiditeDebut;
    }

    /**
     * Get the dt validite fin.
     *
     * @return DateTime Returns the dt validite fin.
     */
    public function getDtValiditeFin() {
        return $this->dtValiditeFin;
    }

    /**
     * Get the montant budget.
     *
     * @return float Returns the montant budget.
     */
    public function getMontantBudget() {
        return $this->montantBudget;
    }

    /**
     * Get the montant h t cde.
     *
     * @return float Returns the montant h t cde.
     */
    public function getMontantHTCde() {
        return $this->montantHTCde;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string $codeInspecteur The code inspecteur.
     * @return CdeTypeInspEntetes Returns this cde type insp entetes.
     */
    public function setCodeInspecteur($codeInspecteur) {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the dt validite debut.
     *
     * @param DateTime $dtValiditeDebut The dt validite debut.
     * @return CdeTypeInspEntetes Returns this cde type insp entetes.
     */
    public function setDtValiditeDebut(DateTime $dtValiditeDebut = null) {
        $this->dtValiditeDebut = $dtValiditeDebut;
        return $this;
    }

    /**
     * Set the dt validite fin.
     *
     * @param DateTime $dtValiditeFin The dt validite fin.
     * @return CdeTypeInspEntetes Returns this cde type insp entetes.
     */
    public function setDtValiditeFin(DateTime $dtValiditeFin = null) {
        $this->dtValiditeFin = $dtValiditeFin;
        return $this;
    }

    /**
     * Set the montant budget.
     *
     * @param float $montantBudget The montant budget.
     * @return CdeTypeInspEntetes Returns this cde type insp entetes.
     */
    public function setMontantBudget($montantBudget) {
        $this->montantBudget = $montantBudget;
        return $this;
    }

    /**
     * Set the montant h t cde.
     *
     * @param float $montantHTCde The montant h t cde.
     * @return CdeTypeInspEntetes Returns this cde type insp entetes.
     */
    public function setMontantHTCde($montantHTCde) {
        $this->montantHTCde = $montantHTCde;
        return $this;
    }

}
