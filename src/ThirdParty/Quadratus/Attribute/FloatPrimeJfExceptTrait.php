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
 * Prime jf except trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeJfExceptTrait {

    /**
     * Prime jf except.
     *
     * @var float
     */
    private $primeJfExcept;

    /**
     * Get the prime jf except.
     *
     * @return float Returns the prime jf except.
     */
    public function getPrimeJfExcept() {
        return $this->primeJfExcept;
    }

    /**
     * Set the prime jf except.
     *
     * @param float $primeJfExcept The prime jf except.
     */
    public function setPrimeJfExcept($primeJfExcept) {
        $this->primeJfExcept = $primeJfExcept;
        return $this;
    }
}
