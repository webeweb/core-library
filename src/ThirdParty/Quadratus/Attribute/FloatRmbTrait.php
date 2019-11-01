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
 * Rmb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRmbTrait {

    /**
     * Rmb.
     *
     * @var float
     */
    private $rmb;

    /**
     * Get the rmb.
     *
     * @return float Returns the rmb.
     */
    public function getRmb() {
        return $this->rmb;
    }

    /**
     * Set the rmb.
     *
     * @param float $rmb The rmb.
     */
    public function setRmb($rmb) {
        $this->rmb = $rmb;
        return $this;
    }
}
