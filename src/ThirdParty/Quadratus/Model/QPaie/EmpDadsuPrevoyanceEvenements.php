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
 * Emp dadsu prevoyance evenements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceEvenements {

    /**
     * A declarer dsn.
     *
     * @var bool
     */
    private $aDeclarerDsn;

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
     * @var DateTime|null
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
     * Get the a declarer dsn.
     *
     * @return bool Returns the a declarer dsn.
     */
    public function getADeclarerDsn() {
        return $this->aDeclarerDsn;
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
     * @return DateTime|null Returns the date evenement.
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
     * Set the a declarer dsn.
     *
     * @param bool $aDeclarerDsn The a declarer dsn.
     */
    public function setADeclarerDsn($aDeclarerDsn) {
        $this->aDeclarerDsn = $aDeclarerDsn;
        return $this;
    }

    /**
     * Set the code evenement.
     *
     * @param string $codeEvenement The code evenement.
     */
    public function setCodeEvenement($codeEvenement) {
        $this->codeEvenement = $codeEvenement;
        return $this;
    }

    /**
     * Set the code option.
     *
     * @param string $codeOption The code option.
     */
    public function setCodeOption($codeOption) {
        $this->codeOption = $codeOption;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code population.
     *
     * @param string $codePopulation The code population.
     */
    public function setCodePopulation($codePopulation) {
        $this->codePopulation = $codePopulation;
        return $this;
    }

    /**
     * Set the date evenement.
     *
     * @param DateTime|null $dateEvenement The date evenement.
     */
    public function setDateEvenement(DateTime $dateEvenement = null) {
        $this->dateEvenement = $dateEvenement;
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
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }
}
