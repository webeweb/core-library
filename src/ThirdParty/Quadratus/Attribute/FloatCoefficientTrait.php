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
 * Coefficient trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoefficientTrait {

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }
}
