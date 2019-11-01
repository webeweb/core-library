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
 * Ha prix revient net trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaPrixRevientNetTrait {

    /**
     * Ha prix revient net.
     *
     * @var float
     */
    private $haPrixRevientNet;

    /**
     * Get the ha prix revient net.
     *
     * @return float Returns the ha prix revient net.
     */
    public function getHaPrixRevientNet() {
        return $this->haPrixRevientNet;
    }

    /**
     * Set the ha prix revient net.
     *
     * @param float $haPrixRevientNet The ha prix revient net.
     */
    public function setHaPrixRevientNet($haPrixRevientNet) {
        $this->haPrixRevientNet = $haPrixRevientNet;
        return $this;
    }
}
