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
 * Der remise1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDerRemise1Trait {

    /**
     * Der remise1.
     *
     * @var float
     */
    private $derRemise1;

    /**
     * Get the der remise1.
     *
     * @return float Returns the der remise1.
     */
    public function getDerRemise1() {
        return $this->derRemise1;
    }

    /**
     * Set the der remise1.
     *
     * @param float $derRemise1 The der remise1.
     */
    public function setDerRemise1($derRemise1) {
        $this->derRemise1 = $derRemise1;
        return $this;
    }
}
