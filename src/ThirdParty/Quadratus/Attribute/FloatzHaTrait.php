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
 * z ha trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzHaTrait {

    /**
     * z ha.
     *
     * @var float
     */
    private $zHa;

    /**
     * Get the z ha.
     *
     * @return float Returns the z ha.
     */
    public function getzHa() {
        return $this->zHa;
    }

    /**
     * Set the z ha.
     *
     * @param float $zHa The z ha.
     */
    public function setzHa($zHa) {
        $this->zHa = $zHa;
        return $this;
    }
}
