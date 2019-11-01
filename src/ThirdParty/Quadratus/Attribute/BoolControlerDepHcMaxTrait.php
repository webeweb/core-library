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
 * Controler dep hc max trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControlerDepHcMaxTrait {

    /**
     * Controler dep hc max.
     *
     * @var bool
     */
    private $controlerDepHcMax;

    /**
     * Get the controler dep hc max.
     *
     * @return bool Returns the controler dep hc max.
     */
    public function getControlerDepHcMax() {
        return $this->controlerDepHcMax;
    }

    /**
     * Set the controler dep hc max.
     *
     * @param bool $controlerDepHcMax The controler dep hc max.
     */
    public function setControlerDepHcMax($controlerDepHcMax) {
        $this->controlerDepHcMax = $controlerDepHcMax;
        return $this;
    }
}
