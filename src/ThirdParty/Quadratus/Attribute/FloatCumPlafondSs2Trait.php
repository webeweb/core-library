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
 * Cum plafond ss2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlafondSs2Trait {

    /**
     * Cum plafond ss2.
     *
     * @var float
     */
    private $cumPlafondSs2;

    /**
     * Get the cum plafond ss2.
     *
     * @return float Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2() {
        return $this->cumPlafondSs2;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float $cumPlafondSs2 The cum plafond ss2.
     */
    public function setCumPlafondSs2($cumPlafondSs2) {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }
}
