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
 * Vehicules model.
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
     * @var DateTime
     */
    private $dateCession;

    /**
     * Date immat.
     *
     * @var DateTime
     */
    private $dateImmat;

    /**
     * Date p m e c.
     *
     * @var DateTime
     */
    private $datePMEC;

    /**
     * G u i d.
     *
     * @var string
     */
    private $gUID;

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
     * Puissance c v.
     *
     * @var int
     */
    private $puissanceCV;

    /**
     * Super carbu.
     *
     * @var bool
     */
    private $superCarbu;

    /**
     * Taux emission c o2.
     *
     * @var float
     */
    private $tauxEmissionCO2;

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
     * @return DateTime Returns the date cession.
     */
    public function getDateCession() {
        return $this->dateCession;
    }

    /**
     * Get the date immat.
     *
     * @return DateTime Returns the date immat.
     */
    public function getDateImmat() {
        return $this->dateImmat;
    }

    /**
     * Get the date p m e c.
     *
     * @return DateTime Returns the date p m e c.
     */
    public function getDatePMEC() {
        return $this->datePMEC;
    }

    /**
     * Get the g u i d.
     *
     * @return string Returns the g u i d.
     */
    public function getGUID() {
        return $this->gUID;
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
     * Get the puissance c v.
     *
     * @return int Returns the puissance c v.
     */
    public function getPuissanceCV() {
        return $this->puissanceCV;
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
     * Get the taux emission c o2.
     *
     * @return float Returns the taux emission c o2.
     */
    public function getTauxEmissionCO2() {
        return $this->tauxEmissionCO2;
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
     * @return Vehicules Returns this vehicules.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime $dateCession The date cession.
     * @return Vehicules Returns this vehicules.
     */
    public function setDateCession(DateTime $dateCession = null) {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date immat.
     *
     * @param DateTime $dateImmat The date immat.
     * @return Vehicules Returns this vehicules.
     */
    public function setDateImmat(DateTime $dateImmat = null) {
        $this->dateImmat = $dateImmat;
        return $this;
    }

    /**
     * Set the date p m e c.
     *
     * @param DateTime $datePMEC The date p m e c.
     * @return Vehicules Returns this vehicules.
     */
    public function setDatePMEC(DateTime $datePMEC = null) {
        $this->datePMEC = $datePMEC;
        return $this;
    }

    /**
     * Set the g u i d.
     *
     * @param string $gUID The g u i d.
     * @return Vehicules Returns this vehicules.
     */
    public function setGUID($gUID) {
        $this->gUID = $gUID;
        return $this;
    }

    /**
     * Set the hybride.
     *
     * @param bool $hybride The hybride.
     * @return Vehicules Returns this vehicules.
     */
    public function setHybride($hybride) {
        $this->hybride = $hybride;
        return $this;
    }

    /**
     * Set the immatriculation.
     *
     * @param string $immatriculation The immatriculation.
     * @return Vehicules Returns this vehicules.
     */
    public function setImmatriculation($immatriculation) {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Vehicules Returns this vehicules.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien compta.
     *
     * @param bool $lienCompta The lien compta.
     * @return Vehicules Returns this vehicules.
     */
    public function setLienCompta($lienCompta) {
        $this->lienCompta = $lienCompta;
        return $this;
    }

    /**
     * Set the non polluant.
     *
     * @param bool $nonPolluant The non polluant.
     * @return Vehicules Returns this vehicules.
     */
    public function setNonPolluant($nonPolluant) {
        $this->nonPolluant = $nonPolluant;
        return $this;
    }

    /**
     * Set the puissance c v.
     *
     * @param int $puissanceCV The puissance c v.
     * @return Vehicules Returns this vehicules.
     */
    public function setPuissanceCV($puissanceCV) {
        $this->puissanceCV = $puissanceCV;
        return $this;
    }

    /**
     * Set the super carbu.
     *
     * @param bool $superCarbu The super carbu.
     * @return Vehicules Returns this vehicules.
     */
    public function setSuperCarbu($superCarbu) {
        $this->superCarbu = $superCarbu;
        return $this;
    }

    /**
     * Set the taux emission c o2.
     *
     * @param float $tauxEmissionCO2 The taux emission c o2.
     * @return Vehicules Returns this vehicules.
     */
    public function setTauxEmissionCO2($tauxEmissionCO2) {
        $this->tauxEmissionCO2 = $tauxEmissionCO2;
        return $this;
    }

    /**
     * Set the usage agricole.
     *
     * @param bool $usageAgricole The usage agricole.
     * @return Vehicules Returns this vehicules.
     */
    public function setUsageAgricole($usageAgricole) {
        $this->usageAgricole = $usageAgricole;
        return $this;
    }
}
