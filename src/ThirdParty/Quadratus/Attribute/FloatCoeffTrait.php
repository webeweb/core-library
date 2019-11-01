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
 * Coeff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffTrait {

    /**
     * Coeff.
     *
     * @var float
     */
    private $coeff;

    /**
     * Get the coeff.
     *
     * @return float Returns the coeff.
     */
    public function getCoeff() {
        return $this->coeff;
    }

    /**
     * Set the coeff.
     *
     * @param float $coeff The coeff.
     */
    public function setCoeff($coeff) {
        $this->coeff = $coeff;
        return $this;
    }
}
