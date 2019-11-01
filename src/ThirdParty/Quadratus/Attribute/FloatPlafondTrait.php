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
 * Plafond trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondTrait {

    /**
     * Plafond.
     *
     * @var float
     */
    private $plafond;

    /**
     * Get the plafond.
     *
     * @return float Returns the plafond.
     */
    public function getPlafond() {
        return $this->plafond;
    }

    /**
     * Set the plafond.
     *
     * @param float $plafond The plafond.
     */
    public function setPlafond($plafond) {
        $this->plafond = $plafond;
        return $this;
    }
}
