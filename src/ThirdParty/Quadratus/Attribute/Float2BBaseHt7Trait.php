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
 * 2 b base ht7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float2BBaseHt7Trait {

    /**
     * 2 b base ht7.
     *
     * @var float
     */
    private $_2BBaseHt7;

    /**
     * Get the 2 b base ht7.
     *
     * @return float Returns the 2 b base ht7.
     */
    public function get2BBaseHt7() {
        return $this->_2BBaseHt7;
    }

    /**
     * Set the 2 b base ht7.
     *
     * @param float $_2BBaseHt7 The 2 b base ht7.
     */
    public function set2BBaseHt7($_2BBaseHt7) {
        $this->_2BBaseHt7 = $_2BBaseHt7;
        return $this;
    }
}
