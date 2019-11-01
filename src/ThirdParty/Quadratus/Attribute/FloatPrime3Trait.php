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
 * Prime3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime3Trait {

    /**
     * Prime3.
     *
     * @var float
     */
    private $prime3;

    /**
     * Get the prime3.
     *
     * @return float Returns the prime3.
     */
    public function getPrime3() {
        return $this->prime3;
    }

    /**
     * Set the prime3.
     *
     * @param float $prime3 The prime3.
     */
    public function setPrime3($prime3) {
        $this->prime3 = $prime3;
        return $this;
    }
}
