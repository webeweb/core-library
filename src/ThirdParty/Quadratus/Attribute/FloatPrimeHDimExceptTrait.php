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
 * Prime h dim except trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHDimExceptTrait {

    /**
     * Prime h dim except.
     *
     * @var float
     */
    private $primeHDimExcept;

    /**
     * Get the prime h dim except.
     *
     * @return float Returns the prime h dim except.
     */
    public function getPrimeHDimExcept() {
        return $this->primeHDimExcept;
    }

    /**
     * Set the prime h dim except.
     *
     * @param float $primeHDimExcept The prime h dim except.
     */
    public function setPrimeHDimExcept($primeHDimExcept) {
        $this->primeHDimExcept = $primeHDimExcept;
        return $this;
    }
}
