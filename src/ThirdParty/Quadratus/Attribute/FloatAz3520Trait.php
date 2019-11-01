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
 * Az3520 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3520Trait {

    /**
     * Az3520.
     *
     * @var float
     */
    private $az3520;

    /**
     * Get the az3520.
     *
     * @return float Returns the az3520.
     */
    public function getAz3520() {
        return $this->az3520;
    }

    /**
     * Set the az3520.
     *
     * @param float $az3520 The az3520.
     */
    public function setAz3520($az3520) {
        $this->az3520 = $az3520;
        return $this;
    }
}
