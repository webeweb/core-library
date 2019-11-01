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
 * Prime4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime4Trait {

    /**
     * Prime4.
     *
     * @var float
     */
    private $prime4;

    /**
     * Get the prime4.
     *
     * @return float Returns the prime4.
     */
    public function getPrime4() {
        return $this->prime4;
    }

    /**
     * Set the prime4.
     *
     * @param float $prime4 The prime4.
     */
    public function setPrime4($prime4) {
        $this->prime4 = $prime4;
        return $this;
    }
}
