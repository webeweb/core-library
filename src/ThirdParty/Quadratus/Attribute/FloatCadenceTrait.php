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
 * Cadence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCadenceTrait {

    /**
     * Cadence.
     *
     * @var float
     */
    private $cadence;

    /**
     * Get the cadence.
     *
     * @return float Returns the cadence.
     */
    public function getCadence() {
        return $this->cadence;
    }

    /**
     * Set the cadence.
     *
     * @param float $cadence The cadence.
     */
    public function setCadence($cadence) {
        $this->cadence = $cadence;
        return $this;
    }
}
