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
 * Mt rep provision regl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtRepProvisionReglTrait {

    /**
     * Mt rep provision regl.
     *
     * @var float
     */
    private $mtRepProvisionRegl;

    /**
     * Get the mt rep provision regl.
     *
     * @return float Returns the mt rep provision regl.
     */
    public function getMtRepProvisionRegl() {
        return $this->mtRepProvisionRegl;
    }

    /**
     * Set the mt rep provision regl.
     *
     * @param float $mtRepProvisionRegl The mt rep provision regl.
     */
    public function setMtRepProvisionRegl($mtRepProvisionRegl) {
        $this->mtRepProvisionRegl = $mtRepProvisionRegl;
        return $this;
    }
}
