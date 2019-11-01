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
 * Coeff pv pa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffPvPaTrait {

    /**
     * Coeff pv pa.
     *
     * @var float
     */
    private $coeffPvPa;

    /**
     * Get the coeff pv pa.
     *
     * @return float Returns the coeff pv pa.
     */
    public function getCoeffPvPa() {
        return $this->coeffPvPa;
    }

    /**
     * Set the coeff pv pa.
     *
     * @param float $coeffPvPa The coeff pv pa.
     */
    public function setCoeffPvPa($coeffPvPa) {
        $this->coeffPvPa = $coeffPvPa;
        return $this;
    }
}
