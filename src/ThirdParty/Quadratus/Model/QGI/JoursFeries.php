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
 * Jours feries.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class JoursFeries {

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
    }

    /**
     * Get the jour.
     *
     * @return DateTime|null Returns the jour.
     */
    public function getJour() {
        return $this->jour;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param DateTime|null $jour The jour.
     */
    public function setJour(DateTime $jour = null) {
        $this->jour = $jour;
        return $this;
    }
}
