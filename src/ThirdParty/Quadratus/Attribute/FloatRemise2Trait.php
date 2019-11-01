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
 * Remise2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemise2Trait {

    /**
     * Remise2.
     *
     * @var float
     */
    private $remise2;

    /**
     * Get the remise2.
     *
     * @return float Returns the remise2.
     */
    public function getRemise2() {
        return $this->remise2;
    }

    /**
     * Set the remise2.
     *
     * @param float $remise2 The remise2.
     */
    public function setRemise2($remise2) {
        $this->remise2 = $remise2;
        return $this;
    }
}
