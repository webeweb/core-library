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
 * Emp report modulation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpReportModulation {

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Report mod ant.
     *
     * @var float
     */
    private $reportModAnt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
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
     * Get the report mod ant.
     *
     * @return float Returns the report mod ant.
     */
    public function getReportModAnt() {
        return $this->reportModAnt;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
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
     * Set the report mod ant.
     *
     * @param float $reportModAnt The report mod ant.
     */
    public function setReportModAnt($reportModAnt) {
        $this->reportModAnt = $reportModAnt;
        return $this;
    }
}
