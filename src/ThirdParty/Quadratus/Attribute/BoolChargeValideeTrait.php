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
 * Charge validee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChargeValideeTrait {

    /**
     * Charge validee.
     *
     * @var bool
     */
    private $chargeValidee;

    /**
     * Get the charge validee.
     *
     * @return bool Returns the charge validee.
     */
    public function getChargeValidee() {
        return $this->chargeValidee;
    }

    /**
     * Set the charge validee.
     *
     * @param bool $chargeValidee The charge validee.
     */
    public function setChargeValidee($chargeValidee) {
        $this->chargeValidee = $chargeValidee;
        return $this;
    }
}
