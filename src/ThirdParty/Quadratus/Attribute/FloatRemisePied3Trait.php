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
 * Remise pied3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemisePied3Trait {

    /**
     * Remise pied3.
     *
     * @var float
     */
    private $remisePied3;

    /**
     * Get the remise pied3.
     *
     * @return float Returns the remise pied3.
     */
    public function getRemisePied3() {
        return $this->remisePied3;
    }

    /**
     * Set the remise pied3.
     *
     * @param float $remisePied3 The remise pied3.
     */
    public function setRemisePied3($remisePied3) {
        $this->remisePied3 = $remisePied3;
        return $this;
    }
}
