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
 * Az4261 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4261Trait {

    /**
     * Az4261.
     *
     * @var float
     */
    private $az4261;

    /**
     * Get the az4261.
     *
     * @return float Returns the az4261.
     */
    public function getAz4261() {
        return $this->az4261;
    }

    /**
     * Set the az4261.
     *
     * @param float $az4261 The az4261.
     */
    public function setAz4261($az4261) {
        $this->az4261 = $az4261;
        return $this;
    }
}
