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
 * Remise1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemise1Trait {

    /**
     * Remise1.
     *
     * @var float
     */
    private $remise1;

    /**
     * Get the remise1.
     *
     * @return float Returns the remise1.
     */
    public function getRemise1() {
        return $this->remise1;
    }

    /**
     * Set the remise1.
     *
     * @param float $remise1 The remise1.
     */
    public function setRemise1($remise1) {
        $this->remise1 = $remise1;
        return $this;
    }
}
