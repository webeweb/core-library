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
 * Plafond rbt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondRbtTrait {

    /**
     * Plafond rbt.
     *
     * @var float
     */
    private $plafondRbt;

    /**
     * Get the plafond rbt.
     *
     * @return float Returns the plafond rbt.
     */
    public function getPlafondRbt() {
        return $this->plafondRbt;
    }

    /**
     * Set the plafond rbt.
     *
     * @param float $plafondRbt The plafond rbt.
     */
    public function setPlafondRbt($plafondRbt) {
        $this->plafondRbt = $plafondRbt;
        return $this;
    }
}
