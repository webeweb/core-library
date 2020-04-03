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

/**
 * Pointage reglements lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class PointageReglementsLignes {

    /**
     * Montant pointe.
     *
     * @var float
     */
    private $montantPointe;

    /**
     * Num cpt payeur.
     *
     * @var string
     */
    private $numCptPayeur;

    /**
     * Num doss.
     *
     * @var string
     */
    private $numDoss;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num uniq ecr.
     *
     * @var int
     */
    private $numUniqEcr;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the montant pointe.
     *
     * @return float Returns the montant pointe.
     */
    public function getMontantPointe() {
        return $this->montantPointe;
    }

    /**
     * Get the num cpt payeur.
     *
     * @return string Returns the num cpt payeur.
     */
    public function getNumCptPayeur() {
        return $this->numCptPayeur;
    }

    /**
     * Get the num doss.
     *
     * @return string Returns the num doss.
     */
    public function getNumDoss() {
        return $this->numDoss;
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
     * Get the num uniq ecr.
     *
     * @return int Returns the num uniq ecr.
     */
    public function getNumUniqEcr() {
        return $this->numUniqEcr;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Set the montant pointe.
     *
     * @param float $montantPointe The montant pointe.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setMontantPointe($montantPointe) {
        $this->montantPointe = $montantPointe;
        return $this;
    }

    /**
     * Set the num cpt payeur.
     *
     * @param string $numCptPayeur The num cpt payeur.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumCptPayeur($numCptPayeur) {
        $this->numCptPayeur = $numCptPayeur;
        return $this;
    }

    /**
     * Set the num doss.
     *
     * @param string $numDoss The num doss.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumDoss($numDoss) {
        $this->numDoss = $numDoss;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int $numUniqEcr The num uniq ecr.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumUniqEcr($numUniqEcr) {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
