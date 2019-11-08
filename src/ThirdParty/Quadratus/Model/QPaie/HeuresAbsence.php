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
 * Heures absence.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresAbsence {

    /**
     * Absence au.
     *
     * @var DateTime|null
     */
    private $absenceAu;

    /**
     * Absence du.
     *
     * @var DateTime|null
     */
    private $absenceDu;

    /**
     * Date jour.
     *
     * @var DateTime|null
     */
    private $dateJour;

    /**
     * Nb h non effectue.
     *
     * @var float
     */
    private $nbHNonEffectue;

    /**
     * Nb h retenue salaire.
     *
     * @var float
     */
    private $nbHRetenueSalaire;

    /**
     * Nb ha reintegrer.
     *
     * @var float
     */
    private $nbHaReintegrer;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Transfere.
     *
     * @var string
     */
    private $transfere;

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
     * Get the absence au.
     *
     * @return DateTime|null Returns the absence au.
     */
    public function getAbsenceAu() {
        return $this->absenceAu;
    }

    /**
     * Get the absence du.
     *
     * @return DateTime|null Returns the absence du.
     */
    public function getAbsenceDu() {
        return $this->absenceDu;
    }

    /**
     * Get the date jour.
     *
     * @return DateTime|null Returns the date jour.
     */
    public function getDateJour() {
        return $this->dateJour;
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
     * Get the nb h retenue salaire.
     *
     * @return float Returns the nb h retenue salaire.
     */
    public function getNbHRetenueSalaire() {
        return $this->nbHRetenueSalaire;
    }

    /**
     * Get the nb ha reintegrer.
     *
     * @return float Returns the nb ha reintegrer.
     */
    public function getNbHaReintegrer() {
        return $this->nbHaReintegrer;
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
     * Get the transfere.
     *
     * @return string Returns the transfere.
     */
    public function getTransfere() {
        return $this->transfere;
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
     * Set the absence au.
     *
     * @param DateTime|null $absenceAu The absence au.
     */
    public function setAbsenceAu(DateTime $absenceAu = null) {
        $this->absenceAu = $absenceAu;
        return $this;
    }

    /**
     * Set the absence du.
     *
     * @param DateTime|null $absenceDu The absence du.
     */
    public function setAbsenceDu(DateTime $absenceDu = null) {
        $this->absenceDu = $absenceDu;
        return $this;
    }

    /**
     * Set the date jour.
     *
     * @param DateTime|null $dateJour The date jour.
     */
    public function setDateJour(DateTime $dateJour = null) {
        $this->dateJour = $dateJour;
        return $this;
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
     * Set the nb h retenue salaire.
     *
     * @param float $nbHRetenueSalaire The nb h retenue salaire.
     */
    public function setNbHRetenueSalaire($nbHRetenueSalaire) {
        $this->nbHRetenueSalaire = $nbHRetenueSalaire;
        return $this;
    }

    /**
     * Set the nb ha reintegrer.
     *
     * @param float $nbHaReintegrer The nb ha reintegrer.
     */
    public function setNbHaReintegrer($nbHaReintegrer) {
        $this->nbHaReintegrer = $nbHaReintegrer;
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
     * Set the transfere.
     *
     * @param string $transfere The transfere.
     */
    public function setTransfere($transfere) {
        $this->transfere = $transfere;
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
