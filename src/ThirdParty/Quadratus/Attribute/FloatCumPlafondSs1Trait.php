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
 * Cum plafond ss1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlafondSs1Trait {

    /**
     * Cum plafond ss1.
     *
     * @var float
     */
    private $cumPlafondSs1;

    /**
     * Get the cum plafond ss1.
     *
     * @return float Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1() {
        return $this->cumPlafondSs1;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float $cumPlafondSs1 The cum plafond ss1.
     */
    public function setCumPlafondSs1($cumPlafondSs1) {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }
}
