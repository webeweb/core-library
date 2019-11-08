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
 * Affaire mt previsionnel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AffaireMtPrevisionnel {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string
     */
    private $codeAvenant;

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Date prev.
     *
     * @var DateTime|null
     */
    private $datePrev;

    /**
     * Mt phase.
     *
     * @var float
     */
    private $mtPhase;

    /**
     * Mt prev.
     *
     * @var float
     */
    private $mtPrev;

    /**
     * Prct phase.
     *
     * @var float
     */
    private $prctPhase;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code avenant.
     *
     * @return string Returns the code avenant.
     */
    public function getCodeAvenant() {
        return $this->codeAvenant;
    }

    /**
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
    }

    /**
     * Get the date prev.
     *
     * @return DateTime|null Returns the date prev.
     */
    public function getDatePrev() {
        return $this->datePrev;
    }

    /**
     * Get the mt phase.
     *
     * @return float Returns the mt phase.
     */
    public function getMtPhase() {
        return $this->mtPhase;
    }

    /**
     * Get the mt prev.
     *
     * @return float Returns the mt prev.
     */
    public function getMtPrev() {
        return $this->mtPrev;
    }

    /**
     * Get the prct phase.
     *
     * @return float Returns the prct phase.
     */
    public function getPrctPhase() {
        return $this->prctPhase;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string $codeAvenant The code avenant.
     */
    public function setCodeAvenant($codeAvenant) {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the date prev.
     *
     * @param DateTime|null $datePrev The date prev.
     */
    public function setDatePrev(DateTime $datePrev = null) {
        $this->datePrev = $datePrev;
        return $this;
    }

    /**
     * Set the mt phase.
     *
     * @param float $mtPhase The mt phase.
     */
    public function setMtPhase($mtPhase) {
        $this->mtPhase = $mtPhase;
        return $this;
    }

    /**
     * Set the mt prev.
     *
     * @param float $mtPrev The mt prev.
     */
    public function setMtPrev($mtPrev) {
        $this->mtPrev = $mtPrev;
        return $this;
    }

    /**
     * Set the prct phase.
     *
     * @param float $prctPhase The prct phase.
     */
    public function setPrctPhase($prctPhase) {
        $this->prctPhase = $prctPhase;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
