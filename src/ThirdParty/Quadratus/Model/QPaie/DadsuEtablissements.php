<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

/**
 * Dadsu etablissements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuEtablissements {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Forma pro base.
     *
     * @var float
     */
    private $formaProBase;

    /**
     * Forma pro base cdd.
     *
     * @var float
     */
    private $formaProBaseCdd;

    /**
     * Forma pro code assuj.
     *
     * @var string
     */
    private $formaProCodeAssuj;

    /**
     * Prud type dadsu derogatoire.
     *
     * @var string
     */
    private $prudTypeDadsuDerogatoire;

    /**
     * Taxe apprentissage base.
     *
     * @var float
     */
    private $taxeApprentissageBase;

    /**
     * Taxe apprentissage code assuj.
     *
     * @var string
     */
    private $taxeApprentissageCodeAssuj;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the forma pro base.
     *
     * @return float Returns the forma pro base.
     */
    public function getFormaProBase() {
        return $this->formaProBase;
    }

    /**
     * Get the forma pro base cdd.
     *
     * @return float Returns the forma pro base cdd.
     */
    public function getFormaProBaseCdd() {
        return $this->formaProBaseCdd;
    }

    /**
     * Get the forma pro code assuj.
     *
     * @return string Returns the forma pro code assuj.
     */
    public function getFormaProCodeAssuj() {
        return $this->formaProCodeAssuj;
    }

    /**
     * Get the prud type dadsu derogatoire.
     *
     * @return string Returns the prud type dadsu derogatoire.
     */
    public function getPrudTypeDadsuDerogatoire() {
        return $this->prudTypeDadsuDerogatoire;
    }

    /**
     * Get the taxe apprentissage base.
     *
     * @return float Returns the taxe apprentissage base.
     */
    public function getTaxeApprentissageBase() {
        return $this->taxeApprentissageBase;
    }

    /**
     * Get the taxe apprentissage code assuj.
     *
     * @return string Returns the taxe apprentissage code assuj.
     */
    public function getTaxeApprentissageCodeAssuj() {
        return $this->taxeApprentissageCodeAssuj;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the forma pro base.
     *
     * @param float $formaProBase The forma pro base.
     */
    public function setFormaProBase($formaProBase) {
        $this->formaProBase = $formaProBase;
        return $this;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float $formaProBaseCdd The forma pro base cdd.
     */
    public function setFormaProBaseCdd($formaProBaseCdd) {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }

    /**
     * Set the forma pro code assuj.
     *
     * @param string $formaProCodeAssuj The forma pro code assuj.
     */
    public function setFormaProCodeAssuj($formaProCodeAssuj) {
        $this->formaProCodeAssuj = $formaProCodeAssuj;
        return $this;
    }

    /**
     * Set the prud type dadsu derogatoire.
     *
     * @param string $prudTypeDadsuDerogatoire The prud type dadsu derogatoire.
     */
    public function setPrudTypeDadsuDerogatoire($prudTypeDadsuDerogatoire) {
        $this->prudTypeDadsuDerogatoire = $prudTypeDadsuDerogatoire;
        return $this;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float $taxeApprentissageBase The taxe apprentissage base.
     */
    public function setTaxeApprentissageBase($taxeApprentissageBase) {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }

    /**
     * Set the taxe apprentissage code assuj.
     *
     * @param string $taxeApprentissageCodeAssuj The taxe apprentissage code assuj.
     */
    public function setTaxeApprentissageCodeAssuj($taxeApprentissageCodeAssuj) {
        $this->taxeApprentissageCodeAssuj = $taxeApprentissageCodeAssuj;
        return $this;
    }
}
