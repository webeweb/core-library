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
 * Prime5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime5Trait {

    /**
     * Prime5.
     *
     * @var float
     */
    private $prime5;

    /**
     * Get the prime5.
     *
     * @return float Returns the prime5.
     */
    public function getPrime5() {
        return $this->prime5;
    }

    /**
     * Set the prime5.
     *
     * @param float $prime5 The prime5.
     */
    public function setPrime5($prime5) {
        $this->prime5 = $prime5;
        return $this;
    }
}
