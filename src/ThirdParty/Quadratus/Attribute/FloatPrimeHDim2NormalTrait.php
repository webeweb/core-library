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
 * Prime h dim2 normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHDim2NormalTrait {

    /**
     * Prime h dim2 normal.
     *
     * @var float
     */
    private $primeHDim2Normal;

    /**
     * Get the prime h dim2 normal.
     *
     * @return float Returns the prime h dim2 normal.
     */
    public function getPrimeHDim2Normal() {
        return $this->primeHDim2Normal;
    }

    /**
     * Set the prime h dim2 normal.
     *
     * @param float $primeHDim2Normal The prime h dim2 normal.
     */
    public function setPrimeHDim2Normal($primeHDim2Normal) {
        $this->primeHDim2Normal = $primeHDim2Normal;
        return $this;
    }
}
