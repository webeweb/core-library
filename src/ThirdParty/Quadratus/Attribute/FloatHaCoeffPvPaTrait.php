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
 * Ha coeff pv pa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaCoeffPvPaTrait {

    /**
     * Ha coeff pv pa.
     *
     * @var float
     */
    private $haCoeffPvPa;

    /**
     * Get the ha coeff pv pa.
     *
     * @return float Returns the ha coeff pv pa.
     */
    public function getHaCoeffPvPa() {
        return $this->haCoeffPvPa;
    }

    /**
     * Set the ha coeff pv pa.
     *
     * @param float $haCoeffPvPa The ha coeff pv pa.
     */
    public function setHaCoeffPvPa($haCoeffPvPa) {
        $this->haCoeffPvPa = $haCoeffPvPa;
        return $this;
    }
}
