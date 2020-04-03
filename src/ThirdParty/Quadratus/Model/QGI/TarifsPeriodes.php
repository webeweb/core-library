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

use DateTime;

/**
 * Tarifs periodes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TarifsPeriodes {

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
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Remise base.
     *
     * @var float
     */
    private $remiseBase;

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
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the remise base.
     *
     * @return float Returns the remise base.
     */
    public function getRemiseBase() {
        return $this->remiseBase;
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
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the remise base.
     *
     * @param float $remiseBase The remise base.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setRemiseBase($remiseBase) {
        $this->remiseBase = $remiseBase;
        return $this;
    }

    /**
     * Set the type code article.
     *
     * @param string $typeCodeArticle The type code article.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setTypeCodeArticle($typeCodeArticle) {
        $this->typeCodeArticle = $typeCodeArticle;
        return $this;
    }

    /**
     * Set the type code client.
     *
     * @param string $typeCodeClient The type code client.
     * @return TarifsPeriodes Returns this Tarifs periodes.
     */
    public function setTypeCodeClient($typeCodeClient) {
        $this->typeCodeClient = $typeCodeClient;
        return $this;
    }
}
