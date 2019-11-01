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
 * Ca stat annuel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCaStatAnnuelTrait {

    /**
     * Ca stat annuel.
     *
     * @var float
     */
    private $caStatAnnuel;

    /**
     * Get the ca stat annuel.
     *
     * @return float Returns the ca stat annuel.
     */
    public function getCaStatAnnuel() {
        return $this->caStatAnnuel;
    }

    /**
     * Set the ca stat annuel.
     *
     * @param float $caStatAnnuel The ca stat annuel.
     */
    public function setCaStatAnnuel($caStatAnnuel) {
        $this->caStatAnnuel = $caStatAnnuel;
        return $this;
    }
}
