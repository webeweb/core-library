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
 * Az4217 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4217BaseTrait {

    /**
     * Az4217 base.
     *
     * @var float
     */
    private $az4217Base;

    /**
     * Get the az4217 base.
     *
     * @return float Returns the az4217 base.
     */
    public function getAz4217Base() {
        return $this->az4217Base;
    }

    /**
     * Set the az4217 base.
     *
     * @param float $az4217Base The az4217 base.
     */
    public function setAz4217Base($az4217Base) {
        $this->az4217Base = $az4217Base;
        return $this;
    }
}
