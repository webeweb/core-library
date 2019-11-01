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
 * Prime jf normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeJfNormalTrait {

    /**
     * Prime jf normal.
     *
     * @var float
     */
    private $primeJfNormal;

    /**
     * Get the prime jf normal.
     *
     * @return float Returns the prime jf normal.
     */
    public function getPrimeJfNormal() {
        return $this->primeJfNormal;
    }

    /**
     * Set the prime jf normal.
     *
     * @param float $primeJfNormal The prime jf normal.
     */
    public function setPrimeJfNormal($primeJfNormal) {
        $this->primeJfNormal = $primeJfNormal;
        return $this;
    }
}
