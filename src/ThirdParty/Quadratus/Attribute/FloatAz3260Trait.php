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
 * Az3260 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3260Trait {

    /**
     * Az3260.
     *
     * @var float
     */
    private $az3260;

    /**
     * Get the az3260.
     *
     * @return float Returns the az3260.
     */
    public function getAz3260() {
        return $this->az3260;
    }

    /**
     * Set the az3260.
     *
     * @param float $az3260 The az3260.
     */
    public function setAz3260($az3260) {
        $this->az3260 = $az3260;
        return $this;
    }
}
