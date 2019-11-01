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
 * Az4223 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4223BaseTrait {

    /**
     * Az4223 base.
     *
     * @var float
     */
    private $az4223Base;

    /**
     * Get the az4223 base.
     *
     * @return float Returns the az4223 base.
     */
    public function getAz4223Base() {
        return $this->az4223Base;
    }

    /**
     * Set the az4223 base.
     *
     * @param float $az4223Base The az4223 base.
     */
    public function setAz4223Base($az4223Base) {
        $this->az4223Base = $az4223Base;
        return $this;
    }
}
