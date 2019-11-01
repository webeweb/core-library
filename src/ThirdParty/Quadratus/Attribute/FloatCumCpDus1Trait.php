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
 * Cum cp dus1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumCpDus1Trait {

    /**
     * Cum cp dus1.
     *
     * @var float
     */
    private $cumCpDus1;

    /**
     * Get the cum cp dus1.
     *
     * @return float Returns the cum cp dus1.
     */
    public function getCumCpDus1() {
        return $this->cumCpDus1;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float $cumCpDus1 The cum cp dus1.
     */
    public function setCumCpDus1($cumCpDus1) {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }
}
