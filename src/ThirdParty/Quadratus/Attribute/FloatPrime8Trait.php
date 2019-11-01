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
 * Prime8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime8Trait {

    /**
     * Prime8.
     *
     * @var float
     */
    private $prime8;

    /**
     * Get the prime8.
     *
     * @return float Returns the prime8.
     */
    public function getPrime8() {
        return $this->prime8;
    }

    /**
     * Set the prime8.
     *
     * @param float $prime8 The prime8.
     */
    public function setPrime8($prime8) {
        $this->prime8 = $prime8;
        return $this;
    }
}
