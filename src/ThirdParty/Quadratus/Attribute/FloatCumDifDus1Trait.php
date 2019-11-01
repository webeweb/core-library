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
 * Cum dif dus1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumDifDus1Trait {

    /**
     * Cum dif dus1.
     *
     * @var float
     */
    private $cumDifDus1;

    /**
     * Get the cum dif dus1.
     *
     * @return float Returns the cum dif dus1.
     */
    public function getCumDifDus1() {
        return $this->cumDifDus1;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float $cumDifDus1 The cum dif dus1.
     */
    public function setCumDifDus1($cumDifDus1) {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }
}
