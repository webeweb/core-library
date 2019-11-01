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
 * Prime jf2 normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeJf2NormalTrait {

    /**
     * Prime jf2 normal.
     *
     * @var float
     */
    private $primeJf2Normal;

    /**
     * Get the prime jf2 normal.
     *
     * @return float Returns the prime jf2 normal.
     */
    public function getPrimeJf2Normal() {
        return $this->primeJf2Normal;
    }

    /**
     * Set the prime jf2 normal.
     *
     * @param float $primeJf2Normal The prime jf2 normal.
     */
    public function setPrimeJf2Normal($primeJf2Normal) {
        $this->primeJf2Normal = $primeJf2Normal;
        return $this;
    }
}
