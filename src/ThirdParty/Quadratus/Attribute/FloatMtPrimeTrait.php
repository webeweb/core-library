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
 * Mt prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPrimeTrait {

    /**
     * Mt prime.
     *
     * @var float
     */
    private $mtPrime;

    /**
     * Get the mt prime.
     *
     * @return float Returns the mt prime.
     */
    public function getMtPrime() {
        return $this->mtPrime;
    }

    /**
     * Set the mt prime.
     *
     * @param float $mtPrime The mt prime.
     */
    public function setMtPrime($mtPrime) {
        $this->mtPrime = $mtPrime;
        return $this;
    }
}
