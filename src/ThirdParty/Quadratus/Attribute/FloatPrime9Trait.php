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
 * Prime9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime9Trait {

    /**
     * Prime9.
     *
     * @var float
     */
    private $prime9;

    /**
     * Get the prime9.
     *
     * @return float Returns the prime9.
     */
    public function getPrime9() {
        return $this->prime9;
    }

    /**
     * Set the prime9.
     *
     * @param float $prime9 The prime9.
     */
    public function setPrime9($prime9) {
        $this->prime9 = $prime9;
        return $this;
    }
}
