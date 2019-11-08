<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * H abs prepa paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HAbsPrepaPaie {

    /**
     * Nb h non effectue.
     *
     * @var float
     */
    private $nbHNonEffectue;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Semaine.
     *
     * @var string
     */
    private $semaine;

    /**
     * Type absence.
     *
     * @var string
     */
    private $typeAbsence;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the nb h non effectue.
     *
     * @return float Returns the nb h non effectue.
     */
    public function getNbHNonEffectue() {
        return $this->nbHNonEffectue;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the semaine.
     *
     * @return string Returns the semaine.
     */
    public function getSemaine() {
        return $this->semaine;
    }

    /**
     * Get the type absence.
     *
     * @return string Returns the type absence.
     */
    public function getTypeAbsence() {
        return $this->typeAbsence;
    }

    /**
     * Set the nb h non effectue.
     *
     * @param float $nbHNonEffectue The nb h non effectue.
     */
    public function setNbHNonEffectue($nbHNonEffectue) {
        $this->nbHNonEffectue = $nbHNonEffectue;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the semaine.
     *
     * @param string $semaine The semaine.
     */
    public function setSemaine($semaine) {
        $this->semaine = $semaine;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string $typeAbsence The type absence.
     */
    public function setTypeAbsence($typeAbsence) {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }
}
