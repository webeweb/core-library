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
 * Prime non proratisee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrimeNonProratiseeTrait {

    /**
     * Prime non proratisee.
     *
     * @var bool
     */
    private $primeNonProratisee;

    /**
     * Get the prime non proratisee.
     *
     * @return bool Returns the prime non proratisee.
     */
    public function getPrimeNonProratisee() {
        return $this->primeNonProratisee;
    }

    /**
     * Set the prime non proratisee.
     *
     * @param bool $primeNonProratisee The prime non proratisee.
     */
    public function setPrimeNonProratisee($primeNonProratisee) {
        $this->primeNonProratisee = $primeNonProratisee;
        return $this;
    }
}
