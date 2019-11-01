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
 * Primes franch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimesFranchTrait {

    /**
     * Primes franch.
     *
     * @var float
     */
    private $primesFranch;

    /**
     * Get the primes franch.
     *
     * @return float Returns the primes franch.
     */
    public function getPrimesFranch() {
        return $this->primesFranch;
    }

    /**
     * Set the primes franch.
     *
     * @param float $primesFranch The primes franch.
     */
    public function setPrimesFranch($primesFranch) {
        $this->primesFranch = $primesFranch;
        return $this;
    }
}
