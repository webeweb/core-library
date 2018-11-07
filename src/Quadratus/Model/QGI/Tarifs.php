<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Tarifs model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Tarifs {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Com sur marge brute.
     *
     * @var boolean
     */
    private $comSurMargeBrute;

    /**
     * Prix t t c.
     *
     * @var boolean
     */
    private $prixTTC;

    /**
     * Prix unit base.
     *
     * @var float
     */
    private $prixUnitBase;

    /**
     * Taux commission.
     *
     * @var float
     */
    private $tauxCommission;

    /**
     * Type code article.
     *
     * @var string
     */
    private $typeCodeArticle;

    /**
     * Type code client.
     *
     * @var string
     */
    private $typeCodeClient;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the com sur marge brute.
     *
     * @return boolean Returns the com sur marge brute.
     */
    public function getComSurMargeBrute() {
        return $this->comSurMargeBrute;
    }

    /**
     * Get the prix t t c.
     *
     * @return boolean Returns the prix t t c.
     */
    public function getPrixTTC() {
        return $this->prixTTC;
    }

    /**
     * Get the prix unit base.
     *
     * @return float Returns the prix unit base.
     */
    public function getPrixUnitBase() {
        return $this->prixUnitBase;
    }

    /**
     * Get the taux commission.
     *
     * @return float Returns the taux commission.
     */
    public function getTauxCommission() {
        return $this->tauxCommission;
    }

    /**
     * Get the type code article.
     *
     * @return string Returns the type code article.
     */
    public function getTypeCodeArticle() {
        return $this->typeCodeArticle;
    }

    /**
     * Get the type code client.
     *
     * @return string Returns the type code client.
     */
    public function getTypeCodeClient() {
        return $this->typeCodeClient;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return Tarifs Returns this tarifs.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Tarifs Returns this tarifs.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Tarifs Returns this tarifs.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return Tarifs Returns this tarifs.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the com sur marge brute.
     *
     * @param boolean $comSurMargeBrute The com sur marge brute.
     * @return Tarifs Returns this tarifs.
     */
    public function setComSurMargeBrute($comSurMargeBrute) {
        $this->comSurMargeBrute = $comSurMargeBrute;
        return $this;
    }

    /**
     * Set the prix t t c.
     *
     * @param boolean $prixTTC The prix t t c.
     * @return Tarifs Returns this tarifs.
     */
    public function setPrixTTC($prixTTC) {
        $this->prixTTC = $prixTTC;
        return $this;
    }

    /**
     * Set the prix unit base.
     *
     * @param float $prixUnitBase The prix unit base.
     * @return Tarifs Returns this tarifs.
     */
    public function setPrixUnitBase($prixUnitBase) {
        $this->prixUnitBase = $prixUnitBase;
        return $this;
    }

    /**
     * Set the taux commission.
     *
     * @param float $tauxCommission The taux commission.
     * @return Tarifs Returns this tarifs.
     */
    public function setTauxCommission($tauxCommission) {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    /**
     * Set the type code article.
     *
     * @param string $typeCodeArticle The type code article.
     * @return Tarifs Returns this tarifs.
     */
    public function setTypeCodeArticle($typeCodeArticle) {
        $this->typeCodeArticle = $typeCodeArticle;
        return $this;
    }

    /**
     * Set the type code client.
     *
     * @param string $typeCodeClient The type code client.
     * @return Tarifs Returns this tarifs.
     */
    public function setTypeCodeClient($typeCodeClient) {
        $this->typeCodeClient = $typeCodeClient;
        return $this;
    }

}
