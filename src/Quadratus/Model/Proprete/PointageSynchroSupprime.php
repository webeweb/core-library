<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Pointage synchro supprime model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
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
     * @var boolean
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
     * @var DateTime
     */
    private $timeSuppression;

    /**
     * Uniq i d synchro.
     *
     * @var string
     */
    private $uniqIDSynchro;

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
     * @return boolean Returns the cree par gen prev.
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
     * @return DateTime Returns the time suppression.
     */
    public function getTimeSuppression() {
        return $this->timeSuppression;
    }

    /**
     * Get the uniq i d synchro.
     *
     * @return string Returns the uniq i d synchro.
     */
    public function getUniqIDSynchro() {
        return $this->uniqIDSynchro;
    }

    /**
     * Set the cle enreg.
     *
     * @param string $cleEnreg The cle enreg.
     * @return PointageSynchroSupprime Returns this pointage synchro supprime.
     */
    public function setCleEnreg($cleEnreg) {
        $this->cleEnreg = $cleEnreg;
        return $this;
    }

    /**
     * Set the cree par gen prev.
     *
     * @param boolean $creeParGenPrev The cree par gen prev.
     * @return PointageSynchroSupprime Returns this pointage synchro supprime.
     */
    public function setCreeParGenPrev($creeParGenPrev) {
        $this->creeParGenPrev = $creeParGenPrev;
        return $this;
    }

    /**
     * Set the nom table.
     *
     * @param string $nomTable The nom table.
     * @return PointageSynchroSupprime Returns this pointage synchro supprime.
     */
    public function setNomTable($nomTable) {
        $this->nomTable = $nomTable;
        return $this;
    }

    /**
     * Set the time suppression.
     *
     * @param DateTime $timeSuppression The time suppression.
     * @return PointageSynchroSupprime Returns this pointage synchro supprime.
     */
    public function setTimeSuppression(DateTime $timeSuppression = null) {
        $this->timeSuppression = $timeSuppression;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return PointageSynchroSupprime Returns this pointage synchro supprime.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }

}
