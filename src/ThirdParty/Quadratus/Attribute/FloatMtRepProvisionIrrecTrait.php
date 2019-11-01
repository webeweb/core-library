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
 * Mt rep provision irrec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtRepProvisionIrrecTrait {

    /**
     * Mt rep provision irrec.
     *
     * @var float
     */
    private $mtRepProvisionIrrec;

    /**
     * Get the mt rep provision irrec.
     *
     * @return float Returns the mt rep provision irrec.
     */
    public function getMtRepProvisionIrrec() {
        return $this->mtRepProvisionIrrec;
    }

    /**
     * Set the mt rep provision irrec.
     *
     * @param float $mtRepProvisionIrrec The mt rep provision irrec.
     */
    public function setMtRepProvisionIrrec($mtRepProvisionIrrec) {
        $this->mtRepProvisionIrrec = $mtRepProvisionIrrec;
        return $this;
    }
}
