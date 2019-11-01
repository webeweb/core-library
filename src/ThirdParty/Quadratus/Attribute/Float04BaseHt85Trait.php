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
 * 04 base ht85 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float04BaseHt85Trait {

    /**
     * 04 base ht85.
     *
     * @var float
     */
    private $_04BaseHt85;

    /**
     * Get the 04 base ht85.
     *
     * @return float Returns the 04 base ht85.
     */
    public function get04BaseHt85() {
        return $this->_04BaseHt85;
    }

    /**
     * Set the 04 base ht85.
     *
     * @param float $_04BaseHt85 The 04 base ht85.
     */
    public function set04BaseHt85($_04BaseHt85) {
        $this->_04BaseHt85 = $_04BaseHt85;
        return $this;
    }
}
