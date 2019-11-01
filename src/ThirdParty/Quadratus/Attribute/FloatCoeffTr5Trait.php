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
 * Coeff tr5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffTr5Trait {

    /**
     * Coeff tr5.
     *
     * @var float
     */
    private $coeffTr5;

    /**
     * Get the coeff tr5.
     *
     * @return float Returns the coeff tr5.
     */
    public function getCoeffTr5() {
        return $this->coeffTr5;
    }

    /**
     * Set the coeff tr5.
     *
     * @param float $coeffTr5 The coeff tr5.
     */
    public function setCoeffTr5($coeffTr5) {
        $this->coeffTr5 = $coeffTr5;
        return $this;
    }
}
