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
 * Prime10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrime10Trait {

    /**
     * Prime10.
     *
     * @var float
     */
    private $prime10;

    /**
     * Get the prime10.
     *
     * @return float Returns the prime10.
     */
    public function getPrime10() {
        return $this->prime10;
    }

    /**
     * Set the prime10.
     *
     * @param float $prime10 The prime10.
     */
    public function setPrime10($prime10) {
        $this->prime10 = $prime10;
        return $this;
    }
}
