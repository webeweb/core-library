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
 * Force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolForceTrait {

    /**
     * Force.
     *
     * @var bool
     */
    private $force;

    /**
     * Get the force.
     *
     * @return bool Returns the force.
     */
    public function getForce() {
        return $this->force;
    }

    /**
     * Set the force.
     *
     * @param bool $force The force.
     */
    public function setForce($force) {
        $this->force = $force;
        return $this;
    }
}
