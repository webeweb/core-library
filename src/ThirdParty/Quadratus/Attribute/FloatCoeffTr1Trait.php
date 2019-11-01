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
 * Coeff tr1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffTr1Trait {

    /**
     * Coeff tr1.
     *
     * @var float
     */
    private $coeffTr1;

    /**
     * Get the coeff tr1.
     *
     * @return float Returns the coeff tr1.
     */
    public function getCoeffTr1() {
        return $this->coeffTr1;
    }

    /**
     * Set the coeff tr1.
     *
     * @param float $coeffTr1 The coeff tr1.
     */
    public function setCoeffTr1($coeffTr1) {
        $this->coeffTr1 = $coeffTr1;
        return $this;
    }
}
