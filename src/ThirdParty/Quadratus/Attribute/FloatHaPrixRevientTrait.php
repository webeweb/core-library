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
 * Ha prix revient trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaPrixRevientTrait {

    /**
     * Ha prix revient.
     *
     * @var float
     */
    private $haPrixRevient;

    /**
     * Get the ha prix revient.
     *
     * @return float Returns the ha prix revient.
     */
    public function getHaPrixRevient() {
        return $this->haPrixRevient;
    }

    /**
     * Set the ha prix revient.
     *
     * @param float $haPrixRevient The ha prix revient.
     */
    public function setHaPrixRevient($haPrixRevient) {
        $this->haPrixRevient = $haPrixRevient;
        return $this;
    }
}
