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
 * Mt n1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtN1Trait {

    /**
     * Mt n1.
     *
     * @var float
     */
    private $mtN1;

    /**
     * Get the mt n1.
     *
     * @return float Returns the mt n1.
     */
    public function getMtN1() {
        return $this->mtN1;
    }

    /**
     * Set the mt n1.
     *
     * @param float $mtN1 The mt n1.
     */
    public function setMtN1($mtN1) {
        $this->mtN1 = $mtN1;
        return $this;
    }
}
