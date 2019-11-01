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
 * Prime h compl maj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHComplMajTrait {

    /**
     * Prime h compl maj.
     *
     * @var float
     */
    private $primeHComplMaj;

    /**
     * Get the prime h compl maj.
     *
     * @return float Returns the prime h compl maj.
     */
    public function getPrimeHComplMaj() {
        return $this->primeHComplMaj;
    }

    /**
     * Set the prime h compl maj.
     *
     * @param float $primeHComplMaj The prime h compl maj.
     */
    public function setPrimeHComplMaj($primeHComplMaj) {
        $this->primeHComplMaj = $primeHComplMaj;
        return $this;
    }
}
