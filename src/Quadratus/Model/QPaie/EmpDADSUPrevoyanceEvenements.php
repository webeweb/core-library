<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Emp d a d s u prevoyance evenements model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceEvenements {

    /**
     * A declarer d s n.
     *
     * @var boolean
     */
    private $aDeclarerDSN;

    /**
     * Code evenement.
     *
     * @var string
     */
    private $codeEvenement;

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
     * Date evenement.
     *
     * @var DateTime
     */
    private $dateEvenement;

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
     * Get the a declarer d s n.
     *
     * @return boolean Returns the a declarer d s n.
     */
    public function getADeclarerDSN() {
        return $this->aDeclarerDSN;
    }

    /**
     * Get the code evenement.
     *
     * @return string Returns the code evenement.
     */
    public function getCodeEvenement() {
        return $this->codeEvenement;
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
     * Get the date evenement.
     *
     * @return DateTime Returns the date evenement.
     */
    public function getDateEvenement() {
        return $this->dateEvenement;
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
     * Set the a declarer d s n.
     *
     * @param boolean $aDeclarerDSN The a declarer d s n.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setADeclarerDSN($aDeclarerDSN) {
        $this->aDeclarerDSN = $aDeclarerDSN;
        return $this;
    }

    /**
     * Set the code evenement.
     *
     * @param string $codeEvenement The code evenement.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setCodeEvenement($codeEvenement) {
        $this->codeEvenement = $codeEvenement;
        return $this;
    }

    /**
     * Set the code option.
     *
     * @param string $codeOption The code option.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setCodeOption($codeOption) {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string $codePopulation The code population.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setCodePopulation($codePopulation) {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the date evenement.
     *
     * @param DateTime $dateEvenement The date evenement.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setDateEvenement(DateTime $dateEvenement = null) {
        $this->dateEvenement = $dateEvenement;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     * @return EmpDADSUPrevoyanceEvenements Returns this emp d a d s u prevoyance evenements.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }

}
