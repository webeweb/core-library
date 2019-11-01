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
 * Az4237 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4237Trait {

    /**
     * Az4237.
     *
     * @var float
     */
    private $az4237;

    /**
     * Get the az4237.
     *
     * @return float Returns the az4237.
     */
    public function getAz4237() {
        return $this->az4237;
    }

    /**
     * Set the az4237.
     *
     * @param float $az4237 The az4237.
     */
    public function setAz4237($az4237) {
        $this->az4237 = $az4237;
        return $this;
    }
}
