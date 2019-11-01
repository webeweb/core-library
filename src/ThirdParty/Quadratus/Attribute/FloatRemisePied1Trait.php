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
 * Remise pied1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemisePied1Trait {

    /**
     * Remise pied1.
     *
     * @var float
     */
    private $remisePied1;

    /**
     * Get the remise pied1.
     *
     * @return float Returns the remise pied1.
     */
    public function getRemisePied1() {
        return $this->remisePied1;
    }

    /**
     * Set the remise pied1.
     *
     * @param float $remisePied1 The remise pied1.
     */
    public function setRemisePied1($remisePied1) {
        $this->remisePied1 = $remisePied1;
        return $this;
    }
}
