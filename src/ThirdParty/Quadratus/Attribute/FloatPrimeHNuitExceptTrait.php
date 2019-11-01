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
 * Prime h nuit except trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrimeHNuitExceptTrait {

    /**
     * Prime h nuit except.
     *
     * @var float
     */
    private $primeHNuitExcept;

    /**
     * Get the prime h nuit except.
     *
     * @return float Returns the prime h nuit except.
     */
    public function getPrimeHNuitExcept() {
        return $this->primeHNuitExcept;
    }

    /**
     * Set the prime h nuit except.
     *
     * @param float $primeHNuitExcept The prime h nuit except.
     */
    public function setPrimeHNuitExcept($primeHNuitExcept) {
        $this->primeHNuitExcept = $primeHNuitExcept;
        return $this;
    }
}
