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
 * Cum dif dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumDifDusTrait {

    /**
     * Cum dif dus.
     *
     * @var float
     */
    private $cumDifDus;

    /**
     * Get the cum dif dus.
     *
     * @return float Returns the cum dif dus.
     */
    public function getCumDifDus() {
        return $this->cumDifDus;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float $cumDifDus The cum dif dus.
     */
    public function setCumDifDus($cumDifDus) {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }
}
