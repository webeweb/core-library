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
 * Plafond gmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondGmpTrait {

    /**
     * Plafond gmp.
     *
     * @var float
     */
    private $plafondGmp;

    /**
     * Get the plafond gmp.
     *
     * @return float Returns the plafond gmp.
     */
    public function getPlafondGmp() {
        return $this->plafondGmp;
    }

    /**
     * Set the plafond gmp.
     *
     * @param float $plafondGmp The plafond gmp.
     */
    public function setPlafondGmp($plafondGmp) {
        $this->plafondGmp = $plafondGmp;
        return $this;
    }
}
