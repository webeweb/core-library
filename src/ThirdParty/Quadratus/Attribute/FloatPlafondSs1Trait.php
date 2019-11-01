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
 * Plafond ss1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondSs1Trait {

    /**
     * Plafond ss1.
     *
     * @var float
     */
    private $plafondSs1;

    /**
     * Get the plafond ss1.
     *
     * @return float Returns the plafond ss1.
     */
    public function getPlafondSs1() {
        return $this->plafondSs1;
    }

    /**
     * Set the plafond ss1.
     *
     * @param float $plafondSs1 The plafond ss1.
     */
    public function setPlafondSs1($plafondSs1) {
        $this->plafondSs1 = $plafondSs1;
        return $this;
    }
}
