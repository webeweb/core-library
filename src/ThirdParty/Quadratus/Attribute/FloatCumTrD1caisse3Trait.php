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
 * Cum tr d1caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrD1caisse3Trait {

    /**
     * Cum tr d1caisse3.
     *
     * @var float
     */
    private $cumTrD1caisse3;

    /**
     * Get the cum tr d1caisse3.
     *
     * @return float Returns the cum tr d1caisse3.
     */
    public function getCumTrD1caisse3() {
        return $this->cumTrD1caisse3;
    }

    /**
     * Set the cum tr d1caisse3.
     *
     * @param float $cumTrD1caisse3 The cum tr d1caisse3.
     */
    public function setCumTrD1caisse3($cumTrD1caisse3) {
        $this->cumTrD1caisse3 = $cumTrD1caisse3;
        return $this;
    }
}
