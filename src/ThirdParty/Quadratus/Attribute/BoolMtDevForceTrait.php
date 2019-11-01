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
 * Mt dev force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMtDevForceTrait {

    /**
     * Mt dev force.
     *
     * @var bool
     */
    private $mtDevForce;

    /**
     * Get the mt dev force.
     *
     * @return bool Returns the mt dev force.
     */
    public function getMtDevForce() {
        return $this->mtDevForce;
    }

    /**
     * Set the mt dev force.
     *
     * @param bool $mtDevForce The mt dev force.
     */
    public function setMtDevForce($mtDevForce) {
        $this->mtDevForce = $mtDevForce;
        return $this;
    }
}
