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
 * 3 suspension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Int3SuspensionTrait {

    /**
     * 3 suspension.
     *
     * @var int
     */
    private $_3Suspension;

    /**
     * Get the 3 suspension.
     *
     * @return int Returns the 3 suspension.
     */
    public function get3Suspension() {
        return $this->_3Suspension;
    }

    /**
     * Set the 3 suspension.
     *
     * @param int $_3Suspension The 3 suspension.
     */
    public function set3Suspension($_3Suspension) {
        $this->_3Suspension = $_3Suspension;
        return $this;
    }
}
