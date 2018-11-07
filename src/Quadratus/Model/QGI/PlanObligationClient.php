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
 * Plan obligation client model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class PlanObligationClient {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collab specif.
     *
     * @var string
     */
    private $codeCollabSpecif;

    /**
     * Code obligation.
     *
     * @var string
     */
    private $codeObligation;

    /**
     * Date debut.
     *
     * @var DateTime
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime
     */
    private $dateFin;

    /**
     * Frequence.
     *
     * @var string
     */
    private $frequence;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Qui le fait.
     *
     * @var int
     */
    private $quiLeFait;

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
     * Get the code collab specif.
     *
     * @return string Returns the code collab specif.
     */
    public function getCodeCollabSpecif() {
        return $this->codeCollabSpecif;
    }

    /**
     * Get the code obligation.
     *
     * @return string Returns the code obligation.
     */
    public function getCodeObligation() {
        return $this->codeObligation;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the frequence.
     *
     * @return string Returns the frequence.
     */
    public function getFrequence() {
        return $this->frequence;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the qui le fait.
     *
     * @return int Returns the qui le fait.
     */
    public function getQuiLeFait() {
        return $this->quiLeFait;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab specif.
     *
     * @param string $codeCollabSpecif The code collab specif.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setCodeCollabSpecif($codeCollabSpecif) {
        $this->codeCollabSpecif = $codeCollabSpecif;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string $codeObligation The code obligation.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setCodeObligation($codeObligation) {
        $this->codeObligation = $codeObligation;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime $dateDebut The date debut.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime $dateFin The date fin.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the qui le fait.
     *
     * @param int $quiLeFait The qui le fait.
     * @return PlanObligationClient Returns this plan obligation client.
     */
    public function setQuiLeFait($quiLeFait) {
        $this->quiLeFait = $quiLeFait;
        return $this;
    }

}
