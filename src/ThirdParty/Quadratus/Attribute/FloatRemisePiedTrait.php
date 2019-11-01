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
 * Remise pied trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemisePiedTrait {

    /**
     * Remise pied.
     *
     * @var float
     */
    private $remisePied;

    /**
     * Get the remise pied.
     *
     * @return float Returns the remise pied.
     */
    public function getRemisePied() {
        return $this->remisePied;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }
}
