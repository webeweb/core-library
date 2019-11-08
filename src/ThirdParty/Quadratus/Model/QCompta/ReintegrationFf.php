<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Reintegration ff.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ReintegrationFf {

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Id tableau.
     *
     * @var int
     */
    private $idTableau;

    /**
     * Mtt apports.
     *
     * @var float
     */
    private $mttApports;

    /**
     * Mtt emprunts.
     *
     * @var float
     */
    private $mttEmprunts;

    /**
     * Mtt prelev.
     *
     * @var float
     */
    private $mttPrelev;

    /**
     * Mtt treso.
     *
     * @var float
     */
    private $mttTreso;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the id tableau.
     *
     * @return int Returns the id tableau.
     */
    public function getIdTableau() {
        return $this->idTableau;
    }

    /**
     * Get the mtt apports.
     *
     * @return float Returns the mtt apports.
     */
    public function getMttApports() {
        return $this->mttApports;
    }

    /**
     * Get the mtt emprunts.
     *
     * @return float Returns the mtt emprunts.
     */
    public function getMttEmprunts() {
        return $this->mttEmprunts;
    }

    /**
     * Get the mtt prelev.
     *
     * @return float Returns the mtt prelev.
     */
    public function getMttPrelev() {
        return $this->mttPrelev;
    }

    /**
     * Get the mtt treso.
     *
     * @return float Returns the mtt treso.
     */
    public function getMttTreso() {
        return $this->mttTreso;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the id tableau.
     *
     * @param int $idTableau The id tableau.
     */
    public function setIdTableau($idTableau) {
        $this->idTableau = $idTableau;
        return $this;
    }

    /**
     * Set the mtt apports.
     *
     * @param float $mttApports The mtt apports.
     */
    public function setMttApports($mttApports) {
        $this->mttApports = $mttApports;
        return $this;
    }

    /**
     * Set the mtt emprunts.
     *
     * @param float $mttEmprunts The mtt emprunts.
     */
    public function setMttEmprunts($mttEmprunts) {
        $this->mttEmprunts = $mttEmprunts;
        return $this;
    }

    /**
     * Set the mtt prelev.
     *
     * @param float $mttPrelev The mtt prelev.
     */
    public function setMttPrelev($mttPrelev) {
        $this->mttPrelev = $mttPrelev;
        return $this;
    }

    /**
     * Set the mtt treso.
     *
     * @param float $mttTreso The mtt treso.
     */
    public function setMttTreso($mttTreso) {
        $this->mttTreso = $mttTreso;
        return $this;
    }
}
