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
 * Prime h dim normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHDimNormalTrait {

    /**
     * Prime h dim normal.
     *
     * @var float
     */
    private $primeHDimNormal;

    /**
     * Get the prime h dim normal.
     *
     * @return float Returns the prime h dim normal.
     */
    public function getPrimeHDimNormal() {
        return $this->primeHDimNormal;
    }

    /**
     * Set the prime h dim normal.
     *
     * @param float $primeHDimNormal The prime h dim normal.
     */
    public function setPrimeHDimNormal($primeHDimNormal) {
        $this->primeHDimNormal = $primeHDimNormal;
        return $this;
    }
}
