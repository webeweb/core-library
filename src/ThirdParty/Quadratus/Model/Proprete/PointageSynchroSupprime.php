<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Pointage synchro supprime.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointageSynchroSupprime {

    /**
     * Cle enreg.
     *
     * @var string
     */
    private $cleEnreg;

    /**
     * Cree par gen prev.
     *
     * @var bool
     */
    private $creeParGenPrev;

    /**
     * Nom table.
     *
     * @var string
     */
    private $nomTable;

    /**
     * Time suppression.
     *
     * @var DateTime|null
     */
    private $timeSuppression;

    /**
     * Uniq id synchro.
     *
     * @var string
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the cle enreg.
     *
     * @return string Returns the cle enreg.
     */
    public function getCleEnreg() {
        return $this->cleEnreg;
    }

    /**
     * Get the cree par gen prev.
     *
     * @return bool Returns the cree par gen prev.
     */
    public function getCreeParGenPrev() {
        return $this->creeParGenPrev;
    }

    /**
     * Get the nom table.
     *
     * @return string Returns the nom table.
     */
    public function getNomTable() {
        return $this->nomTable;
    }

    /**
     * Get the time suppression.
     *
     * @return DateTime|null Returns the time suppression.
     */
    public function getTimeSuppression() {
        return $this->timeSuppression;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the cle enreg.
     *
     * @param string $cleEnreg The cle enreg.
     */
    public function setCleEnreg($cleEnreg) {
        $this->cleEnreg = $cleEnreg;
        return $this;
    }

    /**
     * Set the cree par gen prev.
     *
     * @param bool $creeParGenPrev The cree par gen prev.
     */
    public function setCreeParGenPrev($creeParGenPrev) {
        $this->creeParGenPrev = $creeParGenPrev;
        return $this;
    }

    /**
     * Set the nom table.
     *
     * @param string $nomTable The nom table.
     */
    public function setNomTable($nomTable) {
        $this->nomTable = $nomTable;
        return $this;
    }

    /**
     * Set the time suppression.
     *
     * @param DateTime|null $timeSuppression The time suppression.
     */
    public function setTimeSuppression(DateTime $timeSuppression = null) {
        $this->timeSuppression = $timeSuppression;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
