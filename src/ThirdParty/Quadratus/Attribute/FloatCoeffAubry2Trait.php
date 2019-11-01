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
 * Coeff aubry2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffAubry2Trait {

    /**
     * Coeff aubry2.
     *
     * @var float
     */
    private $coeffAubry2;

    /**
     * Get the coeff aubry2.
     *
     * @return float Returns the coeff aubry2.
     */
    public function getCoeffAubry2() {
        return $this->coeffAubry2;
    }

    /**
     * Set the coeff aubry2.
     *
     * @param float $coeffAubry2 The coeff aubry2.
     */
    public function setCoeffAubry2($coeffAubry2) {
        $this->coeffAubry2 = $coeffAubry2;
        return $this;
    }
}
