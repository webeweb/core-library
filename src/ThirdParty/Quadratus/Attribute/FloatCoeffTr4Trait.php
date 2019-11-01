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
 * Coeff tr4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffTr4Trait {

    /**
     * Coeff tr4.
     *
     * @var float
     */
    private $coeffTr4;

    /**
     * Get the coeff tr4.
     *
     * @return float Returns the coeff tr4.
     */
    public function getCoeffTr4() {
        return $this->coeffTr4;
    }

    /**
     * Set the coeff tr4.
     *
     * @param float $coeffTr4 The coeff tr4.
     */
    public function setCoeffTr4($coeffTr4) {
        $this->coeffTr4 = $coeffTr4;
        return $this;
    }
}
