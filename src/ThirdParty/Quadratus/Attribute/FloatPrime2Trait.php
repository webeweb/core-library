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
 * Prime2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime2Trait {

    /**
     * Prime2.
     *
     * @var float
     */
    private $prime2;

    /**
     * Get the prime2.
     *
     * @return float Returns the prime2.
     */
    public function getPrime2() {
        return $this->prime2;
    }

    /**
     * Set the prime2.
     *
     * @param float $prime2 The prime2.
     */
    public function setPrime2($prime2) {
        $this->prime2 = $prime2;
        return $this;
    }
}
