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
 * Cde type insp entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
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
     * @var DateTime|null
     */
    private $dtValiditeDebut;

    /**
     * Dt validite fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFin;

    /**
     * Montant budget.
     *
     * @var float
     */
    private $montantBudget;

    /**
     * Montant ht cde.
     *
     * @var float
     */
    private $montantHtCde;

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
     * @return DateTime|null Returns the dt validite debut.
     */
    public function getDtValiditeDebut() {
        return $this->dtValiditeDebut;
    }

    /**
     * Get the dt validite fin.
     *
     * @return DateTime|null Returns the dt validite fin.
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
     * Get the montant ht cde.
     *
     * @return float Returns the montant ht cde.
     */
    public function getMontantHtCde() {
        return $this->montantHtCde;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string $codeInspecteur The code inspecteur.
     */
    public function setCodeInspecteur($codeInspecteur) {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the dt validite debut.
     *
     * @param DateTime|null $dtValiditeDebut The dt validite debut.
     */
    public function setDtValiditeDebut(DateTime $dtValiditeDebut = null) {
        $this->dtValiditeDebut = $dtValiditeDebut;
        return $this;
    }

    /**
     * Set the dt validite fin.
     *
     * @param DateTime|null $dtValiditeFin The dt validite fin.
     */
    public function setDtValiditeFin(DateTime $dtValiditeFin = null) {
        $this->dtValiditeFin = $dtValiditeFin;
        return $this;
    }

    /**
     * Set the montant budget.
     *
     * @param float $montantBudget The montant budget.
     */
    public function setMontantBudget($montantBudget) {
        $this->montantBudget = $montantBudget;
        return $this;
    }

    /**
     * Set the montant ht cde.
     *
     * @param float $montantHtCde The montant ht cde.
     */
    public function setMontantHtCde($montantHtCde) {
        $this->montantHtCde = $montantHtCde;
        return $this;
    }
}
