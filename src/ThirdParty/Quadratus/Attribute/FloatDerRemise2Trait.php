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
 * Der remise2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDerRemise2Trait {

    /**
     * Der remise2.
     *
     * @var float
     */
    private $derRemise2;

    /**
     * Get the der remise2.
     *
     * @return float Returns the der remise2.
     */
    public function getDerRemise2() {
        return $this->derRemise2;
    }

    /**
     * Set the der remise2.
     *
     * @param float $derRemise2 The der remise2.
     */
    public function setDerRemise2($derRemise2) {
        $this->derRemise2 = $derRemise2;
        return $this;
    }
}
