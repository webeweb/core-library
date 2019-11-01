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
 * 15 b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float15BTrait {

    /**
     * 15 b.
     *
     * @var float
     */
    private $_15B;

    /**
     * Get the 15 b.
     *
     * @return float Returns the 15 b.
     */
    public function get15B() {
        return $this->_15B;
    }

    /**
     * Set the 15 b.
     *
     * @param float $_15B The 15 b.
     */
    public function set15B($_15B) {
        $this->_15B = $_15B;
        return $this;
    }
}
