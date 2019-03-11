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
 * Emp d a d s u prevoyance ayant droit lignes contrat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceAyantDroitLignesContrat {

    /**
     * Code option.
     *
     * @var string
     */
    private $codeOption;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code population.
     *
     * @var string
     */
    private $codePopulation;

    /**
     * Debut periode.
     *
     * @var DateTime
     */
    private $debutPeriode;

    /**
     * Fin periode.
     *
     * @var DateTime
     */
    private $finPeriode;

    /**
     * Numero ayant droit.
     *
     * @var int
     */
    private $numeroAyantDroit;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Ref contrat.
     *
     * @var string
     */
    private $refContrat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code option.
     *
     * @return string Returns the code option.
     */
    public function getCodeOption() {
        return $this->codeOption;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the code population.
     *
     * @return string Returns the code population.
     */
    public function getCodePopulation() {
        return $this->codePopulation;
    }

    /**
     * Get the debut periode.
     *
     * @return DateTime Returns the debut periode.
     */
    public function getDebutPeriode() {
        return $this->debutPeriode;
    }

    /**
     * Get the fin periode.
     *
     * @return DateTime Returns the fin periode.
     */
    public function getFinPeriode() {
        return $this->finPeriode;
    }

    /**
     * Get the numero ayant droit.
     *
     * @return int Returns the numero ayant droit.
     */
    public function getNumeroAyantDroit() {
        return $this->numeroAyantDroit;
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
     * Get the ref contrat.
     *
     * @return string Returns the ref contrat.
     */
    public function getRefContrat() {
        return $this->refContrat;
    }

    /**
     * Set the code option.
     *
     * @param string $codeOption The code option.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setCodeOption($codeOption) {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string $codePopulation The code population.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setCodePopulation($codePopulation) {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the debut periode.
     *
     * @param DateTime $debutPeriode The debut periode.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setDebutPeriode(DateTime $debutPeriode = null) {
        $this->debutPeriode = $debutPeriode;
        return $this;
    }

    /**
     * Set the fin periode.
     *
     * @param DateTime $finPeriode The fin periode.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setFinPeriode(DateTime $finPeriode = null) {
        $this->finPeriode = $finPeriode;
        return $this;
    }

    /**
     * Set the numero ayant droit.
     *
     * @param int $numeroAyantDroit The numero ayant droit.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setNumeroAyantDroit($numeroAyantDroit) {
        $this->numeroAyantDroit = $numeroAyantDroit;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     * @return EmpDADSUPrevoyanceAyantDroitLignesContrat Returns this emp d a d s u prevoyance ayant droit lignes contrat.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }
}
