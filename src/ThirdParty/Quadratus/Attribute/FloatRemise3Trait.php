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
 * Remise3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemise3Trait {

    /**
     * Remise3.
     *
     * @var float
     */
    private $remise3;

    /**
     * Get the remise3.
     *
     * @return float Returns the remise3.
     */
    public function getRemise3() {
        return $this->remise3;
    }

    /**
     * Set the remise3.
     *
     * @param float $remise3 The remise3.
     */
    public function setRemise3($remise3) {
        $this->remise3 = $remise3;
        return $this;
    }
}
