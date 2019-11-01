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
 * Ca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCaTrait {

    /**
     * Ca.
     *
     * @var float
     */
    private $ca;

    /**
     * Get the ca.
     *
     * @return float Returns the ca.
     */
    public function getCa() {
        return $this->ca;
    }

    /**
     * Set the ca.
     *
     * @param float $ca The ca.
     */
    public function setCa($ca) {
        $this->ca = $ca;
        return $this;
    }
}
