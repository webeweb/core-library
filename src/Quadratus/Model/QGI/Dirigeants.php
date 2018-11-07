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

use DateTime;

/**
 * Dirigeants model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Dirigeants {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code dirigeant.
     *
     * @var string
     */
    private $codeDirigeant;

    /**
     * Code fonction.
     *
     * @var string
     */
    private $codeFonction;

    /**
     * Date nomination.
     *
     * @var DateTime
     */
    private $dateNomination;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * I d.
     *
     * @var int
     */
    private $iD;

    /**
     * Observations.
     *
     * @var string
     */
    private $observations;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code dirigeant.
     *
     * @return string Returns the code dirigeant.
     */
    public function getCodeDirigeant() {
        return $this->codeDirigeant;
    }

    /**
     * Get the code fonction.
     *
     * @return string Returns the code fonction.
     */
    public function getCodeFonction() {
        return $this->codeFonction;
    }

    /**
     * Get the date nomination.
     *
     * @return DateTime Returns the date nomination.
     */
    public function getDateNomination() {
        return $this->dateNomination;
    }

    /**
     * Get the duree.
     *
     * @return int Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the i d.
     *
     * @return int Returns the i d.
     */
    public function getID() {
        return $this->iD;
    }

    /**
     * Get the observations.
     *
     * @return string Returns the observations.
     */
    public function getObservations() {
        return $this->observations;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code dirigeant.
     *
     * @param string $codeDirigeant The code dirigeant.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setCodeDirigeant($codeDirigeant) {
        $this->codeDirigeant = $codeDirigeant;
        return $this;
    }

    /**
     * Set the code fonction.
     *
     * @param string $codeFonction The code fonction.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setCodeFonction($codeFonction) {
        $this->codeFonction = $codeFonction;
        return $this;
    }

    /**
     * Set the date nomination.
     *
     * @param DateTime $dateNomination The date nomination.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setDateNomination(DateTime $dateNomination = null) {
        $this->dateNomination = $dateNomination;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the i d.
     *
     * @param int $iD The i d.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setID($iD) {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     * @return Dirigeants Returns this dirigeants.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }

}
