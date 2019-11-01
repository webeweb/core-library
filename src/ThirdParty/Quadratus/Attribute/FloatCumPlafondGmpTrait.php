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
 * Cum plafond gmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlafondGmpTrait {

    /**
     * Cum plafond gmp.
     *
     * @var float
     */
    private $cumPlafondGmp;

    /**
     * Get the cum plafond gmp.
     *
     * @return float Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp() {
        return $this->cumPlafondGmp;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float $cumPlafondGmp The cum plafond gmp.
     */
    public function setCumPlafondGmp($cumPlafondGmp) {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }
}
