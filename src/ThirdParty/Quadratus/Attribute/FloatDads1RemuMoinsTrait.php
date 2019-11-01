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
 * Dads1 remu moins trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDads1RemuMoinsTrait {

    /**
     * Dads1 remu moins.
     *
     * @var float
     */
    private $dads1RemuMoins;

    /**
     * Get the dads1 remu moins.
     *
     * @return float Returns the dads1 remu moins.
     */
    public function getDads1RemuMoins() {
        return $this->dads1RemuMoins;
    }

    /**
     * Set the dads1 remu moins.
     *
     * @param float $dads1RemuMoins The dads1 remu moins.
     */
    public function setDads1RemuMoins($dads1RemuMoins) {
        $this->dads1RemuMoins = $dads1RemuMoins;
        return $this;
    }
}
