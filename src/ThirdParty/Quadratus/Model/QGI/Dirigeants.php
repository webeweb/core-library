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
 * Dirigeants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * @var DateTime|null
     */
    private $dateNomination;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * Id.
     *
     * @var int
     */
    private $id;

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
     * @return DateTime|null Returns the date nomination.
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
     * Get the id.
     *
     * @return int Returns the id.
     */
    public function getId() {
        return $this->id;
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
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code dirigeant.
     *
     * @param string $codeDirigeant The code dirigeant.
     */
    public function setCodeDirigeant($codeDirigeant) {
        $this->codeDirigeant = $codeDirigeant;
        return $this;
    }

    /**
     * Set the code fonction.
     *
     * @param string $codeFonction The code fonction.
     */
    public function setCodeFonction($codeFonction) {
        $this->codeFonction = $codeFonction;
        return $this;
    }

    /**
     * Set the date nomination.
     *
     * @param DateTime|null $dateNomination The date nomination.
     */
    public function setDateNomination(DateTime $dateNomination = null) {
        $this->dateNomination = $dateNomination;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param int $id The id.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }
}
