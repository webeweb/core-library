<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Subventions lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class SubventionsLignes {

    /**
     * Annee.
     *
     * @var string
     */
    private $annee;

    /**
     * Montant restant.
     *
     * @var float
     */
    private $montantRestant;

    /**
     * Montant vir.
     *
     * @var float
     */
    private $montantVir;

    /**
     * Num contrat.
     *
     * @var string
     */
    private $numContrat;

    /**
     * Num cpt subvention.
     *
     * @var string
     */
    private $numCptSubvention;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee.
     *
     * @return string Returns the annee.
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Get the montant restant.
     *
     * @return float Returns the montant restant.
     */
    public function getMontantRestant() {
        return $this->montantRestant;
    }

    /**
     * Get the montant vir.
     *
     * @return float Returns the montant vir.
     */
    public function getMontantVir() {
        return $this->montantVir;
    }

    /**
     * Get the num contrat.
     *
     * @return string Returns the num contrat.
     */
    public function getNumContrat() {
        return $this->numContrat;
    }

    /**
     * Get the num cpt subvention.
     *
     * @return string Returns the num cpt subvention.
     */
    public function getNumCptSubvention() {
        return $this->numCptSubvention;
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
     * Set the annee.
     *
     * @param string $annee The annee.
     */
    public function setAnnee($annee) {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the montant restant.
     *
     * @param float $montantRestant The montant restant.
     */
    public function setMontantRestant($montantRestant) {
        $this->montantRestant = $montantRestant;
        return $this;
    }

    /**
     * Set the montant vir.
     *
     * @param float $montantVir The montant vir.
     */
    public function setMontantVir($montantVir) {
        $this->montantVir = $montantVir;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string $numContrat The num contrat.
     */
    public function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt subvention.
     *
     * @param string $numCptSubvention The num cpt subvention.
     */
    public function setNumCptSubvention($numCptSubvention) {
        $this->numCptSubvention = $numCptSubvention;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }
}
