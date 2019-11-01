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
 * Az4277 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4277BaseTrait {

    /**
     * Az4277 base.
     *
     * @var float
     */
    private $az4277Base;

    /**
     * Get the az4277 base.
     *
     * @return float Returns the az4277 base.
     */
    public function getAz4277Base() {
        return $this->az4277Base;
    }

    /**
     * Set the az4277 base.
     *
     * @param float $az4277Base The az4277 base.
     */
    public function setAz4277Base($az4277Base) {
        $this->az4277Base = $az4277Base;
        return $this;
    }
}
