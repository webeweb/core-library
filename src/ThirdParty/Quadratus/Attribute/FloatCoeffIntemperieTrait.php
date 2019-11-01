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
 * Coeff intemperie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffIntemperieTrait {

    /**
     * Coeff intemperie.
     *
     * @var float
     */
    private $coeffIntemperie;

    /**
     * Get the coeff intemperie.
     *
     * @return float Returns the coeff intemperie.
     */
    public function getCoeffIntemperie() {
        return $this->coeffIntemperie;
    }

    /**
     * Set the coeff intemperie.
     *
     * @param float $coeffIntemperie The coeff intemperie.
     */
    public function setCoeffIntemperie($coeffIntemperie) {
        $this->coeffIntemperie = $coeffIntemperie;
        return $this;
    }
}
