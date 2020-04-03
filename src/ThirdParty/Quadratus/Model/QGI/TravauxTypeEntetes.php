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

/**
 * Travaux type entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TravauxTypeEntetes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Police.
     *
     * @var string
     */
    private $police;

    /**
     * Police2.
     *
     * @var string
     */
    private $police2;

    /**
     * Police3.
     *
     * @var string
     */
    private $police3;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the police.
     *
     * @return string Returns the police.
     */
    public function getPolice() {
        return $this->police;
    }

    /**
     * Get the police2.
     *
     * @return string Returns the police2.
     */
    public function getPolice2() {
        return $this->police2;
    }

    /**
     * Get the police3.
     *
     * @return string Returns the police3.
     */
    public function getPolice3() {
        return $this->police3;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the police.
     *
     * @param string $police The police.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setPolice($police) {
        $this->police = $police;
        return $this;
    }

    /**
     * Set the police2.
     *
     * @param string $police2 The police2.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setPolice2($police2) {
        $this->police2 = $police2;
        return $this;
    }

    /**
     * Set the police3.
     *
     * @param string $police3 The police3.
     * @return TravauxTypeEntetes Returns this Travaux type entetes.
     */
    public function setPolice3($police3) {
        $this->police3 = $police3;
        return $this;
    }
}
