<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Emprunts lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class EmpruntsLignes {

    /**
     * Date remboursement.
     *
     * @var DateTime
     */
    private $dateRemboursement;

    /**
     * Dont assurance.
     *
     * @var float
     */
    private $dontAssurance;

    /**
     * Dont capital.
     *
     * @var float
     */
    private $dontCapital;

    /**
     * Dont interet.
     *
     * @var float
     */
    private $dontInteret;

    /**
     * Montant rembour.
     *
     * @var float
     */
    private $montantRembour;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Restant du avant.
     *
     * @var float
     */
    private $restantDuAvant;

    /**
     * Taux ligne.
     *
     * @var float
     */
    private $tauxLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date remboursement.
     *
     * @return DateTime Returns the date remboursement.
     */
    public function getDateRemboursement() {
        return $this->dateRemboursement;
    }

    /**
     * Get the dont assurance.
     *
     * @return float Returns the dont assurance.
     */
    public function getDontAssurance() {
        return $this->dontAssurance;
    }

    /**
     * Get the dont capital.
     *
     * @return float Returns the dont capital.
     */
    public function getDontCapital() {
        return $this->dontCapital;
    }

    /**
     * Get the dont interet.
     *
     * @return float Returns the dont interet.
     */
    public function getDontInteret() {
        return $this->dontInteret;
    }

    /**
     * Get the montant rembour.
     *
     * @return float Returns the montant rembour.
     */
    public function getMontantRembour() {
        return $this->montantRembour;
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
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the restant du avant.
     *
     * @return float Returns the restant du avant.
     */
    public function getRestantDuAvant() {
        return $this->restantDuAvant;
    }

    /**
     * Get the taux ligne.
     *
     * @return float Returns the taux ligne.
     */
    public function getTauxLigne() {
        return $this->tauxLigne;
    }

    /**
     * Set the date remboursement.
     *
     * @param DateTime $dateRemboursement The date remboursement.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setDateRemboursement(DateTime $dateRemboursement = null) {
        $this->dateRemboursement = $dateRemboursement;
        return $this;
    }

    /**
     * Set the dont assurance.
     *
     * @param float $dontAssurance The dont assurance.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setDontAssurance($dontAssurance) {
        $this->dontAssurance = $dontAssurance;
        return $this;
    }

    /**
     * Set the dont capital.
     *
     * @param float $dontCapital The dont capital.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setDontCapital($dontCapital) {
        $this->dontCapital = $dontCapital;
        return $this;
    }

    /**
     * Set the dont interet.
     *
     * @param float $dontInteret The dont interet.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setDontInteret($dontInteret) {
        $this->dontInteret = $dontInteret;
        return $this;
    }

    /**
     * Set the montant rembour.
     *
     * @param float $montantRembour The montant rembour.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setMontantRembour($montantRembour) {
        $this->montantRembour = $montantRembour;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the restant du avant.
     *
     * @param float $restantDuAvant The restant du avant.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setRestantDuAvant($restantDuAvant) {
        $this->restantDuAvant = $restantDuAvant;
        return $this;
    }

    /**
     * Set the taux ligne.
     *
     * @param float $tauxLigne The taux ligne.
     * @return EmpruntsLignes Returns this emprunts lignes.
     */
    public function setTauxLigne($tauxLigne) {
        $this->tauxLigne = $tauxLigne;
        return $this;
    }
}
