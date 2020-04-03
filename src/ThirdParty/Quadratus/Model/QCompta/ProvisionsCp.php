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
 * Provisions cp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ProvisionsCp {

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Col pour sal ref.
     *
     * @var string
     */
    private $colPourSalRef;

    /**
     * Dernier salaire.
     *
     * @var float
     */
    private $dernierSalaire;

    /**
     * Moyenne salaires.
     *
     * @var float
     */
    private $moyenneSalaires;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * Nom complet emp.
     *
     * @var string
     */
    private $nomCompletEmp;

    /**
     * Numero emp.
     *
     * @var string
     */
    private $numeroEmp;

    /**
     * Provision totale.
     *
     * @var float
     */
    private $provisionTotale;

    /**
     * Salaire ref.
     *
     * @var float
     */
    private $salaireRef;

    /**
     * Solde jours n.
     *
     * @var float
     */
    private $soldeJoursN;

    /**
     * Solde jours n1.
     *
     * @var float
     */
    private $soldeJoursN1;

    /**
     * Tx charges soc.
     *
     * @var float
     */
    private $txChargesSoc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
    }

    /**
     * Get the col pour sal ref.
     *
     * @return string Returns the col pour sal ref.
     */
    public function getColPourSalRef() {
        return $this->colPourSalRef;
    }

    /**
     * Get the dernier salaire.
     *
     * @return float Returns the dernier salaire.
     */
    public function getDernierSalaire() {
        return $this->dernierSalaire;
    }

    /**
     * Get the moyenne salaires.
     *
     * @return float Returns the moyenne salaires.
     */
    public function getMoyenneSalaires() {
        return $this->moyenneSalaires;
    }

    /**
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the nom complet emp.
     *
     * @return string Returns the nom complet emp.
     */
    public function getNomCompletEmp() {
        return $this->nomCompletEmp;
    }

    /**
     * Get the numero emp.
     *
     * @return string Returns the numero emp.
     */
    public function getNumeroEmp() {
        return $this->numeroEmp;
    }

    /**
     * Get the provision totale.
     *
     * @return float Returns the provision totale.
     */
    public function getProvisionTotale() {
        return $this->provisionTotale;
    }

    /**
     * Get the salaire ref.
     *
     * @return float Returns the salaire ref.
     */
    public function getSalaireRef() {
        return $this->salaireRef;
    }

    /**
     * Get the solde jours n.
     *
     * @return float Returns the solde jours n.
     */
    public function getSoldeJoursN() {
        return $this->soldeJoursN;
    }

    /**
     * Get the solde jours n1.
     *
     * @return float Returns the solde jours n1.
     */
    public function getSoldeJoursN1() {
        return $this->soldeJoursN1;
    }

    /**
     * Get the tx charges soc.
     *
     * @return float Returns the tx charges soc.
     */
    public function getTxChargesSoc() {
        return $this->txChargesSoc;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the col pour sal ref.
     *
     * @param string $colPourSalRef The col pour sal ref.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setColPourSalRef($colPourSalRef) {
        $this->colPourSalRef = $colPourSalRef;
        return $this;
    }

    /**
     * Set the dernier salaire.
     *
     * @param float $dernierSalaire The dernier salaire.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setDernierSalaire($dernierSalaire) {
        $this->dernierSalaire = $dernierSalaire;
        return $this;
    }

    /**
     * Set the moyenne salaires.
     *
     * @param float $moyenneSalaires The moyenne salaires.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setMoyenneSalaires($moyenneSalaires) {
        $this->moyenneSalaires = $moyenneSalaires;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nom complet emp.
     *
     * @param string $nomCompletEmp The nom complet emp.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setNomCompletEmp($nomCompletEmp) {
        $this->nomCompletEmp = $nomCompletEmp;
        return $this;
    }

    /**
     * Set the numero emp.
     *
     * @param string $numeroEmp The numero emp.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setNumeroEmp($numeroEmp) {
        $this->numeroEmp = $numeroEmp;
        return $this;
    }

    /**
     * Set the provision totale.
     *
     * @param float $provisionTotale The provision totale.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setProvisionTotale($provisionTotale) {
        $this->provisionTotale = $provisionTotale;
        return $this;
    }

    /**
     * Set the salaire ref.
     *
     * @param float $salaireRef The salaire ref.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setSalaireRef($salaireRef) {
        $this->salaireRef = $salaireRef;
        return $this;
    }

    /**
     * Set the solde jours n.
     *
     * @param float $soldeJoursN The solde jours n.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setSoldeJoursN($soldeJoursN) {
        $this->soldeJoursN = $soldeJoursN;
        return $this;
    }

    /**
     * Set the solde jours n1.
     *
     * @param float $soldeJoursN1 The solde jours n1.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setSoldeJoursN1($soldeJoursN1) {
        $this->soldeJoursN1 = $soldeJoursN1;
        return $this;
    }

    /**
     * Set the tx charges soc.
     *
     * @param float $txChargesSoc The tx charges soc.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setTxChargesSoc($txChargesSoc) {
        $this->txChargesSoc = $txChargesSoc;
        return $this;
    }
}
