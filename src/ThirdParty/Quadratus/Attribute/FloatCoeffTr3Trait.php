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
 * Coeff tr3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffTr3Trait {

    /**
     * Coeff tr3.
     *
     * @var float
     */
    private $coeffTr3;

    /**
     * Get the coeff tr3.
     *
     * @return float Returns the coeff tr3.
     */
    public function getCoeffTr3() {
        return $this->coeffTr3;
    }

    /**
     * Set the coeff tr3.
     *
     * @param float $coeffTr3 The coeff tr3.
     */
    public function setCoeffTr3($coeffTr3) {
        $this->coeffTr3 = $coeffTr3;
        return $this;
    }
}
