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
 * Prime servitude travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrimeServitudeTravailTrait {

    /**
     * Prime servitude travail.
     *
     * @var bool
     */
    private $primeServitudeTravail;

    /**
     * Get the prime servitude travail.
     *
     * @return bool Returns the prime servitude travail.
     */
    public function getPrimeServitudeTravail() {
        return $this->primeServitudeTravail;
    }

    /**
     * Set the prime servitude travail.
     *
     * @param bool $primeServitudeTravail The prime servitude travail.
     */
    public function setPrimeServitudeTravail($primeServitudeTravail) {
        $this->primeServitudeTravail = $primeServitudeTravail;
        return $this;
    }
}
