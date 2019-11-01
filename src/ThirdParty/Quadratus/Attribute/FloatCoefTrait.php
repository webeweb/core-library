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
 * Coef trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoefTrait {

    /**
     * Coef.
     *
     * @var float
     */
    private $coef;

    /**
     * Get the coef.
     *
     * @return float Returns the coef.
     */
    public function getCoef() {
        return $this->coef;
    }

    /**
     * Set the coef.
     *
     * @param float $coef The coef.
     */
    public function setCoef($coef) {
        $this->coef = $coef;
        return $this;
    }
}
