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
 * Prime h nuit2 normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHNuit2NormalTrait {

    /**
     * Prime h nuit2 normal.
     *
     * @var float
     */
    private $primeHNuit2Normal;

    /**
     * Get the prime h nuit2 normal.
     *
     * @return float Returns the prime h nuit2 normal.
     */
    public function getPrimeHNuit2Normal() {
        return $this->primeHNuit2Normal;
    }

    /**
     * Set the prime h nuit2 normal.
     *
     * @param float $primeHNuit2Normal The prime h nuit2 normal.
     */
    public function setPrimeHNuit2Normal($primeHNuit2Normal) {
        $this->primeHNuit2Normal = $primeHNuit2Normal;
        return $this;
    }
}
