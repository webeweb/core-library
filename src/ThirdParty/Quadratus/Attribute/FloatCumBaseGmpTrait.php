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
 * Cum base gmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseGmpTrait {

    /**
     * Cum base gmp.
     *
     * @var float
     */
    private $cumBaseGmp;

    /**
     * Get the cum base gmp.
     *
     * @return float Returns the cum base gmp.
     */
    public function getCumBaseGmp() {
        return $this->cumBaseGmp;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float $cumBaseGmp The cum base gmp.
     */
    public function setCumBaseGmp($cumBaseGmp) {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }
}
