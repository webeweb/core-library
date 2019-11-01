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
 * 2 b taxe due7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float2BTaxeDue7Trait {

    /**
     * 2 b taxe due7.
     *
     * @var float
     */
    private $_2BTaxeDue7;

    /**
     * Get the 2 b taxe due7.
     *
     * @return float Returns the 2 b taxe due7.
     */
    public function get2BTaxeDue7() {
        return $this->_2BTaxeDue7;
    }

    /**
     * Set the 2 b taxe due7.
     *
     * @param float $_2BTaxeDue7 The 2 b taxe due7.
     */
    public function set2BTaxeDue7($_2BTaxeDue7) {
        $this->_2BTaxeDue7 = $_2BTaxeDue7;
        return $this;
    }
}
