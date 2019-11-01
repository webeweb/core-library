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
 * Cum pss1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPss1Trait {

    /**
     * Cum pss1.
     *
     * @var float
     */
    private $cumPss1;

    /**
     * Get the cum pss1.
     *
     * @return float Returns the cum pss1.
     */
    public function getCumPss1() {
        return $this->cumPss1;
    }

    /**
     * Set the cum pss1.
     *
     * @param float $cumPss1 The cum pss1.
     */
    public function setCumPss1($cumPss1) {
        $this->cumPss1 = $cumPss1;
        return $this;
    }
}
