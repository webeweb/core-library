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
 * Taux prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPrimeTrait {

    /**
     * Taux prime.
     *
     * @var float
     */
    private $tauxPrime;

    /**
     * Get the taux prime.
     *
     * @return float Returns the taux prime.
     */
    public function getTauxPrime() {
        return $this->tauxPrime;
    }

    /**
     * Set the taux prime.
     *
     * @param float $tauxPrime The taux prime.
     */
    public function setTauxPrime($tauxPrime) {
        $this->tauxPrime = $tauxPrime;
        return $this;
    }
}
