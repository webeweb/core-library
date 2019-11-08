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
 * Obligations pointees.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsPointees {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code obligation.
     *
     * @var string
     */
    private $codeObligation;

    /**
     * Date effet.
     *
     * @var DateTime|null
     */
    private $dateEffet;

    /**
     * Le.
     *
     * @var DateTime|null
     */
    private $le;

    /**
     * Par.
     *
     * @var string
     */
    private $par;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code obligation.
     *
     * @return string Returns the code obligation.
     */
    public function getCodeObligation() {
        return $this->codeObligation;
    }

    /**
     * Get the date effet.
     *
     * @return DateTime|null Returns the date effet.
     */
    public function getDateEffet() {
        return $this->dateEffet;
    }

    /**
     * Get the le.
     *
     * @return DateTime|null Returns the le.
     */
    public function getLe() {
        return $this->le;
    }

    /**
     * Get the par.
     *
     * @return string Returns the par.
     */
    public function getPar() {
        return $this->par;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string $codeObligation The code obligation.
     */
    public function setCodeObligation($codeObligation) {
        $this->codeObligation = $codeObligation;
        return $this;
    }

    /**
     * Set the date effet.
     *
     * @param DateTime|null $dateEffet The date effet.
     */
    public function setDateEffet(DateTime $dateEffet = null) {
        $this->dateEffet = $dateEffet;
        return $this;
    }

    /**
     * Set the le.
     *
     * @param DateTime|null $le The le.
     */
    public function setLe(DateTime $le = null) {
        $this->le = $le;
        return $this;
    }

    /**
     * Set the par.
     *
     * @param string $par The par.
     */
    public function setPar($par) {
        $this->par = $par;
        return $this;
    }
}
