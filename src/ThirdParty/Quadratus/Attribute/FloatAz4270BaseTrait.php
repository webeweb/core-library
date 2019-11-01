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
 * Az4270 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4270BaseTrait {

    /**
     * Az4270 base.
     *
     * @var float
     */
    private $az4270Base;

    /**
     * Get the az4270 base.
     *
     * @return float Returns the az4270 base.
     */
    public function getAz4270Base() {
        return $this->az4270Base;
    }

    /**
     * Set the az4270 base.
     *
     * @param float $az4270Base The az4270 base.
     */
    public function setAz4270Base($az4270Base) {
        $this->az4270Base = $az4270Base;
        return $this;
    }
}
