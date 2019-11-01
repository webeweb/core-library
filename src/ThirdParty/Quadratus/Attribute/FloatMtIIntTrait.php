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
 * Mt i int trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIIntTrait {

    /**
     * Mt i int.
     *
     * @var float
     */
    private $mtIInt;

    /**
     * Get the mt i int.
     *
     * @return float Returns the mt i int.
     */
    public function getMtIInt() {
        return $this->mtIInt;
    }

    /**
     * Set the mt i int.
     *
     * @param float $mtIInt The mt i int.
     */
    public function setMtIInt($mtIInt) {
        $this->mtIInt = $mtIInt;
        return $this;
    }
}
