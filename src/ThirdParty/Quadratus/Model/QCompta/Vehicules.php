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

use DateTime;

/**
 * Vehicules.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Vehicules {

    /**
     * Categorie.
     *
     * @var string
     */
    private $categorie;

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Date immat.
     *
     * @var DateTime|null
     */
    private $dateImmat;

    /**
     * Date pmec.
     *
     * @var DateTime|null
     */
    private $datePmec;

    /**
     * Guid.
     *
     * @var string
     */
    private $guid;

    /**
     * Hybride.
     *
     * @var bool
     */
    private $hybride;

    /**
     * Immatriculation.
     *
     * @var string
     */
    private $immatriculation;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien compta.
     *
     * @var bool
     */
    private $lienCompta;

    /**
     * Non polluant.
     *
     * @var bool
     */
    private $nonPolluant;

    /**
     * Puissance cv.
     *
     * @var int
     */
    private $puissanceCv;

    /**
     * Super carbu.
     *
     * @var bool
     */
    private $superCarbu;

    /**
     * Taux emission co2.
     *
     * @var float
     */
    private $tauxEmissionCo2;

    /**
     * Usage agricole.
     *
     * @var bool
     */
    private $usageAgricole;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the categorie.
     *
     * @return string Returns the categorie.
     */
    public function getCategorie() {
        return $this->categorie;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession() {
        return $this->dateCession;
    }

    /**
     * Get the date immat.
     *
     * @return DateTime|null Returns the date immat.
     */
    public function getDateImmat() {
        return $this->dateImmat;
    }

    /**
     * Get the date pmec.
     *
     * @return DateTime|null Returns the date pmec.
     */
    public function getDatePmec() {
        return $this->datePmec;
    }

    /**
     * Get the guid.
     *
     * @return string Returns the guid.
     */
    public function getGuid() {
        return $this->guid;
    }

    /**
     * Get the hybride.
     *
     * @return bool Returns the hybride.
     */
    public function getHybride() {
        return $this->hybride;
    }

    /**
     * Get the immatriculation.
     *
     * @return string Returns the immatriculation.
     */
    public function getImmatriculation() {
        return $this->immatriculation;
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
     * Get the lien compta.
     *
     * @return bool Returns the lien compta.
     */
    public function getLienCompta() {
        return $this->lienCompta;
    }

    /**
     * Get the non polluant.
     *
     * @return bool Returns the non polluant.
     */
    public function getNonPolluant() {
        return $this->nonPolluant;
    }

    /**
     * Get the puissance cv.
     *
     * @return int Returns the puissance cv.
     */
    public function getPuissanceCv() {
        return $this->puissanceCv;
    }

    /**
     * Get the super carbu.
     *
     * @return bool Returns the super carbu.
     */
    public function getSuperCarbu() {
        return $this->superCarbu;
    }

    /**
     * Get the taux emission co2.
     *
     * @return float Returns the taux emission co2.
     */
    public function getTauxEmissionCo2() {
        return $this->tauxEmissionCo2;
    }

    /**
     * Get the usage agricole.
     *
     * @return bool Returns the usage agricole.
     */
    public function getUsageAgricole() {
        return $this->usageAgricole;
    }

    /**
     * Set the categorie.
     *
     * @param string $categorie The categorie.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     */
    public function setDateCession(DateTime $dateCession = null) {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date immat.
     *
     * @param DateTime|null $dateImmat The date immat.
     */
    public function setDateImmat(DateTime $dateImmat = null) {
        $this->dateImmat = $dateImmat;
        return $this;
    }

    /**
     * Set the date pmec.
     *
     * @param DateTime|null $datePmec The date pmec.
     */
    public function setDatePmec(DateTime $datePmec = null) {
        $this->datePmec = $datePmec;
        return $this;
    }

    /**
     * Set the guid.
     *
     * @param string $guid The guid.
     */
    public function setGuid($guid) {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Set the hybride.
     *
     * @param bool $hybride The hybride.
     */
    public function setHybride($hybride) {
        $this->hybride = $hybride;
        return $this;
    }

    /**
     * Set the immatriculation.
     *
     * @param string $immatriculation The immatriculation.
     */
    public function setImmatriculation($immatriculation) {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien compta.
     *
     * @param bool $lienCompta The lien compta.
     */
    public function setLienCompta($lienCompta) {
        $this->lienCompta = $lienCompta;
        return $this;
    }

    /**
     * Set the non polluant.
     *
     * @param bool $nonPolluant The non polluant.
     */
    public function setNonPolluant($nonPolluant) {
        $this->nonPolluant = $nonPolluant;
        return $this;
    }

    /**
     * Set the puissance cv.
     *
     * @param int $puissanceCv The puissance cv.
     */
    public function setPuissanceCv($puissanceCv) {
        $this->puissanceCv = $puissanceCv;
        return $this;
    }

    /**
     * Set the super carbu.
     *
     * @param bool $superCarbu The super carbu.
     */
    public function setSuperCarbu($superCarbu) {
        $this->superCarbu = $superCarbu;
        return $this;
    }

    /**
     * Set the taux emission co2.
     *
     * @param float $tauxEmissionCo2 The taux emission co2.
     */
    public function setTauxEmissionCo2($tauxEmissionCo2) {
        $this->tauxEmissionCo2 = $tauxEmissionCo2;
        return $this;
    }

    /**
     * Set the usage agricole.
     *
     * @param bool $usageAgricole The usage agricole.
     */
    public function setUsageAgricole($usageAgricole) {
        $this->usageAgricole = $usageAgricole;
        return $this;
    }
}
