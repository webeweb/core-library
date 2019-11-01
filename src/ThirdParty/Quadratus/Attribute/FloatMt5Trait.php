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
 * Mt5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt5Trait {

    /**
     * Mt5.
     *
     * @var float
     */
    private $mt5;

    /**
     * Get the mt5.
     *
     * @return float Returns the mt5.
     */
    public function getMt5() {
        return $this->mt5;
    }

    /**
     * Set the mt5.
     *
     * @param float $mt5 The mt5.
     */
    public function setMt5($mt5) {
        $this->mt5 = $mt5;
        return $this;
    }
}
