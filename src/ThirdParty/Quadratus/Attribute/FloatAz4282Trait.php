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
 * Az4282 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4282Trait {

    /**
     * Az4282.
     *
     * @var float
     */
    private $az4282;

    /**
     * Get the az4282.
     *
     * @return float Returns the az4282.
     */
    public function getAz4282() {
        return $this->az4282;
    }

    /**
     * Set the az4282.
     *
     * @param float $az4282 The az4282.
     */
    public function setAz4282($az4282) {
        $this->az4282 = $az4282;
        return $this;
    }
}
