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
 * Prime h nuit normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHNuitNormalTrait {

    /**
     * Prime h nuit normal.
     *
     * @var float
     */
    private $primeHNuitNormal;

    /**
     * Get the prime h nuit normal.
     *
     * @return float Returns the prime h nuit normal.
     */
    public function getPrimeHNuitNormal() {
        return $this->primeHNuitNormal;
    }

    /**
     * Set the prime h nuit normal.
     *
     * @param float $primeHNuitNormal The prime h nuit normal.
     */
    public function setPrimeHNuitNormal($primeHNuitNormal) {
        $this->primeHNuitNormal = $primeHNuitNormal;
        return $this;
    }
}
