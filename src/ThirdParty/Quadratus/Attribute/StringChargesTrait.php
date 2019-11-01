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
 * Charges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChargesTrait {

    /**
     * Charges.
     *
     * @var string
     */
    private $charges;

    /**
     * Get the charges.
     *
     * @return string Returns the charges.
     */
    public function getCharges() {
        return $this->charges;
    }

    /**
     * Set the charges.
     *
     * @param string $charges The charges.
     */
    public function setCharges($charges) {
        $this->charges = $charges;
        return $this;
    }
}
