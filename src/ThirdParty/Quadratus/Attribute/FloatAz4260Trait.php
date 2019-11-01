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
 * Az4260 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4260Trait {

    /**
     * Az4260.
     *
     * @var float
     */
    private $az4260;

    /**
     * Get the az4260.
     *
     * @return float Returns the az4260.
     */
    public function getAz4260() {
        return $this->az4260;
    }

    /**
     * Set the az4260.
     *
     * @param float $az4260 The az4260.
     */
    public function setAz4260($az4260) {
        $this->az4260 = $az4260;
        return $this;
    }
}
