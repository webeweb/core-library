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
 * Flag force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlagForceTrait {

    /**
     * Flag force.
     *
     * @var bool
     */
    private $flagForce;

    /**
     * Get the flag force.
     *
     * @return bool Returns the flag force.
     */
    public function getFlagForce() {
        return $this->flagForce;
    }

    /**
     * Set the flag force.
     *
     * @param bool $flagForce The flag force.
     */
    public function setFlagForce($flagForce) {
        $this->flagForce = $flagForce;
        return $this;
    }
}
