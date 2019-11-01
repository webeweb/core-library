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
 * Prime1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime1Trait {

    /**
     * Prime1.
     *
     * @var float
     */
    private $prime1;

    /**
     * Get the prime1.
     *
     * @return float Returns the prime1.
     */
    public function getPrime1() {
        return $this->prime1;
    }

    /**
     * Set the prime1.
     *
     * @param float $prime1 The prime1.
     */
    public function setPrime1($prime1) {
        $this->prime1 = $prime1;
        return $this;
    }
}
