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
 * Der remise3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDerRemise3Trait {

    /**
     * Der remise3.
     *
     * @var float
     */
    private $derRemise3;

    /**
     * Get the der remise3.
     *
     * @return float Returns the der remise3.
     */
    public function getDerRemise3() {
        return $this->derRemise3;
    }

    /**
     * Set the der remise3.
     *
     * @param float $derRemise3 The der remise3.
     */
    public function setDerRemise3($derRemise3) {
        $this->derRemise3 = $derRemise3;
        return $this;
    }
}
