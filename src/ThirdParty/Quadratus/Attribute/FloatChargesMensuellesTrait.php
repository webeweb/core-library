<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Charges mensuelles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChargesMensuellesTrait {

    /**
     * Charges mensuelles.
     *
     * @var float
     */
    private $chargesMensuelles;

    /**
     * Get the charges mensuelles.
     *
     * @return float Returns the charges mensuelles.
     */
    public function getChargesMensuelles() {
        return $this->chargesMensuelles;
    }

    /**
     * Set the charges mensuelles.
     *
     * @param float $chargesMensuelles The charges mensuelles.
     */
    public function setChargesMensuelles($chargesMensuelles) {
        $this->chargesMensuelles = $chargesMensuelles;
        return $this;
    }
}
