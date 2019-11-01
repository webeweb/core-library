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
 * Prime6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime6Trait {

    /**
     * Prime6.
     *
     * @var float
     */
    private $prime6;

    /**
     * Get the prime6.
     *
     * @return float Returns the prime6.
     */
    public function getPrime6() {
        return $this->prime6;
    }

    /**
     * Set the prime6.
     *
     * @param float $prime6 The prime6.
     */
    public function setPrime6($prime6) {
        $this->prime6 = $prime6;
        return $this;
    }
}
