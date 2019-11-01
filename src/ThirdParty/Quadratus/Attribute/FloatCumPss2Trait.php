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
 * Cum pss2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPss2Trait {

    /**
     * Cum pss2.
     *
     * @var float
     */
    private $cumPss2;

    /**
     * Get the cum pss2.
     *
     * @return float Returns the cum pss2.
     */
    public function getCumPss2() {
        return $this->cumPss2;
    }

    /**
     * Set the cum pss2.
     *
     * @param float $cumPss2 The cum pss2.
     */
    public function setCumPss2($cumPss2) {
        $this->cumPss2 = $cumPss2;
        return $this;
    }
}
