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
 * Coefficient bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoefficientBtTrait {

    /**
     * Coefficient bt.
     *
     * @var float
     */
    private $coefficientBt;

    /**
     * Get the coefficient bt.
     *
     * @return float Returns the coefficient bt.
     */
    public function getCoefficientBt() {
        return $this->coefficientBt;
    }

    /**
     * Set the coefficient bt.
     *
     * @param float $coefficientBt The coefficient bt.
     */
    public function setCoefficientBt($coefficientBt) {
        $this->coefficientBt = $coefficientBt;
        return $this;
    }
}
