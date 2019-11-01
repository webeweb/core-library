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
 * Coeff tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffTr2Trait {

    /**
     * Coeff tr2.
     *
     * @var float
     */
    private $coeffTr2;

    /**
     * Get the coeff tr2.
     *
     * @return float Returns the coeff tr2.
     */
    public function getCoeffTr2() {
        return $this->coeffTr2;
    }

    /**
     * Set the coeff tr2.
     *
     * @param float $coeffTr2 The coeff tr2.
     */
    public function setCoeffTr2($coeffTr2) {
        $this->coeffTr2 = $coeffTr2;
        return $this;
    }
}
