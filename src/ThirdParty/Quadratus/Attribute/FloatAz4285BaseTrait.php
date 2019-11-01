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
 * Az4285 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4285BaseTrait {

    /**
     * Az4285 base.
     *
     * @var float
     */
    private $az4285Base;

    /**
     * Get the az4285 base.
     *
     * @return float Returns the az4285 base.
     */
    public function getAz4285Base() {
        return $this->az4285Base;
    }

    /**
     * Set the az4285 base.
     *
     * @param float $az4285Base The az4285 base.
     */
    public function setAz4285Base($az4285Base) {
        $this->az4285Base = $az4285Base;
        return $this;
    }
}
