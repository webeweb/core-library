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
 * Charges a repartir model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesARepartir {

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Coeff degressif.
     *
     * @var float
     */
    private $coeffDegressif;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Duree.
     *
     * @var float
     */
    private $duree;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Num contrat.
     *
     * @var string
     */
    private $numContrat;

    /**
     * Num cpt c a r.
     *
     * @var string
     */
    private $numCptCAR;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * Taux lineaire.
     *
     * @var float
     */
    private $tauxLineaire;

    /**
     * Type amort.
     *
     * @var string
     */
    private $typeAmort;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the coeff degressif.
     *
     * @return float Returns the coeff degressif.
     */
    public function getCoeffDegressif() {
        return $this->coeffDegressif;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the duree.
     *
     * @return float Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
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
     * Get the num cpt c a r.
     *
     * @return string Returns the num cpt c a r.
     */
    public function getNumCptCAR() {
        return $this->numCptCAR;
    }

    /**
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
    }

    /**
     * Get the taux lineaire.
     *
     * @return float Returns the taux lineaire.
     */
    public function getTauxLineaire() {
        return $this->tauxLineaire;
    }

    /**
     * Get the type amort.
     *
     * @return string Returns the type amort.
     */
    public function getTypeAmort() {
        return $this->typeAmort;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the coeff degressif.
     *
     * @param float $coeffDegressif The coeff degressif.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setCoeffDegressif($coeffDegressif) {
        $this->coeffDegressif = $coeffDegressif;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param float $duree The duree.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string $numContrat The num contrat.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt c a r.
     *
     * @param string $numCptCAR The num cpt c a r.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setNumCptCAR($numCptCAR) {
        $this->numCptCAR = $numCptCAR;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the taux lineaire.
     *
     * @param float $tauxLineaire The taux lineaire.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setTauxLineaire($tauxLineaire) {
        $this->tauxLineaire = $tauxLineaire;
        return $this;
    }

    /**
     * Set the type amort.
     *
     * @param string $typeAmort The type amort.
     * @return ChargesARepartir Returns this charges a repartir.
     */
    public function setTypeAmort($typeAmort) {
        $this->typeAmort = $typeAmort;
        return $this;
    }
}
