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
 * Affectation employe chantier model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationEmployeChantier {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Date affectation.
     *
     * @var DateTime
     */
    private $dateAffectation;

    /**
     * Date fin affectation.
     *
     * @var DateTime
     */
    private $dateFinAffectation;

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
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the date affectation.
     *
     * @return DateTime Returns the date affectation.
     */
    public function getDateAffectation() {
        return $this->dateAffectation;
    }

    /**
     * Get the date fin affectation.
     *
     * @return DateTime Returns the date fin affectation.
     */
    public function getDateFinAffectation() {
        return $this->dateFinAffectation;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return AffectationEmployeChantier Returns this affectation employe chantier.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return AffectationEmployeChantier Returns this affectation employe chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AffectationEmployeChantier Returns this affectation employe chantier.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return AffectationEmployeChantier Returns this affectation employe chantier.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date affectation.
     *
     * @param DateTime $dateAffectation The date affectation.
     * @return AffectationEmployeChantier Returns this affectation employe chantier.
     */
    public function setDateAffectation(DateTime $dateAffectation = null) {
        $this->dateAffectation = $dateAffectation;
        return $this;
    }

    /**
     * Set the date fin affectation.
     *
     * @param DateTime $dateFinAffectation The date fin affectation.
     * @return AffectationEmployeChantier Returns this affectation employe chantier.
     */
    public function setDateFinAffectation(DateTime $dateFinAffectation = null) {
        $this->dateFinAffectation = $dateFinAffectation;
        return $this;
    }
}
